<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAdmin;
use App\models\State_co;
use App\Models\Voter;
use App\Models\WardCoordinator;
use App\Models\CellCoordinator;
use App\Models\StateCoordinator;
use App\Models\LGACoordinator;
use App\Imports\BulkImport;
use PDF;
use Session;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function index()
    {
        $title = "Admin List";
        return view('admin.index', compact('title'));
    }

    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);

        if ($request->profile_type == "state") {
            $adminList = State_co::where([['username', '=', $username], ['password', '=', $password]])->first();
            Session::put('type', 'state');
        }
        if ($request->profile_type == "local") {
            $adminList = LGACoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            Session::put('type', 'lga');
        }
        if ($request->profile_type == "ward") {
            $adminList = WardCoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            Session::put('type', 'ward');
        }
        if ($request->profile_type == "cell") {
            $adminList = CellCoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            Session::put('type', 'cell');
        }

        if (!empty($adminList)) {
            Session::put('tenant', $adminList);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('index');
        }
        // echo json_encode($response);
        // die();
    }

    public function forgotPassword(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        if ($request->profile_type == "state") {
            $adminList = State_co::where('email', $email)->first();
        }
        if ($request->profile_type == "local") {
            $adminList = LGACoordinator::where('email', $email)->first();
        }
        if ($request->profile_type == "ward") {
            $adminList = WardCoordinator::where('email', $email)->first();
        }
        if ($request->profile_type == "cell") {
            $adminList = CellCoordinator::where('email', $email)->first();
        }

        if (!empty($adminList)) {
            $adminList->email = $email;
            $adminList->password = $password;
            $adminList->save();
            $response['code'] = "200";
        } else {
            $response['code'] = "400";
        }
        echo json_encode($response);
        die();
    }

    public function forgotPasswordAdminView()
    {
        $title = "Admin Forgot Password";
        return view('admin.admin-forgot-password', compact('title'));
    }

    public function userForgotPassword()
    {
        $title = "Forgot Password";
        return view('admin.forgot-password', compact('title'));
    }

    public function dashboard(Request $request)
    {
        $userLoginID = Session::get('tenant')['id'];
        $state_co = StateCoordinator::where('is_delete', '0')->count();
        $lga_co = LGACoordinator::select('*');

        if(Session::get('type') == "state") {
            $lga_co = $lga_co->where('state_id', $userLoginID);
        }

        $lga_co = $lga_co->where('is_delete', '0')->count();

        $ward_co = WardCoordinator::select('*');

        if(Session::get('type') == "lga") {
            $ward_co = $ward_co->where('lga_id', $userLoginID);
        } else if(Session::get('type') == "state") {
            $ward_co = $ward_co->where('state_id', $userLoginID);
        }

        $ward_co = $ward_co->where('is_delete', '0')->count();
        
        $cell_co = CellCoordinator::select('*');
        
        if(Session::get('type') == "lga") {
            $cell_co = $cell_co->where('lga_id', $userLoginID);
        } else if(Session::get('type') == "state") {
            $cell_co = $cell_co->where('state_id', $userLoginID);
        } else if(Session::get('type') == "ward") {
            $cell_co = $cell_co->where('ward_id', $userLoginID);
        }

        $cell_co = $cell_co->where('is_delete', '0')->count();

        $voterCount = Voter::select('*');

        if(Session::get('type') == "lga") {
            $voterCount = $voterCount->where('lga_id', $userLoginID);
        } else if(Session::get('type') == "state") {
            $voterCount = $voterCount->where('state_id', $userLoginID);
        } else if(Session::get('type') == "ward") {
            $voterCount = $voterCount->where('ward_id', $userLoginID);
        } else if(Session::get('type') == "cell") {
            $voterCount = $voterCount->where('cell', $userLoginID);
        }

        $voterCount = $voterCount->where('is_delete', '0')->count();
        $title = "Dashboard";
        return view('admin.dashboard', compact('title', 'state_co', 'lga_co', 'ward_co', 'cell_co', 'voterCount'));
    }

    public function supervisorsDashboard()
    {
        $title = "Supervisors Dashboard";
        return view('admin.supervisors-dashboard', compact('title'));
    }

    public function managersDashboard()
    {
        $title = "Managers Dashboard";
        return view('admin.managers-dashboard', compact('title'));
    }

    public function voterAdd()
    {
        $title = "Voter";
        $editVoter = new Voter;
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        return view('admin.file_import', compact('title', 'editVoter', 'stateList'));
    }

    public function fileUpload(Request $request)
    {
        $response = [];
        if (!empty($request->file('file_data'))) {
            Excel::import(new BulkImport, $request->file('file_data'));
            $response['code'] = "200";
        }
        echo json_encode($response);
        die();
    }

    public function adminIndex()
    {
        $title = "Admin Login";
        return view('admin.login', compact('title'));
    }

    public function adminCheckLogin(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);

        $adminList = MasterAdmin::where([['username', '=', $username], ['password', '=', $password]])->first();

        if (!empty($adminList)) {
            Session::put('type', 'national');
            Session::put('tenant', $adminList);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('admin.index');
        }
        // echo json_encode($response);
        // die();
    }

    public function adminForgotPassword(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        $adminList = MasterAdmin::where('email', $email)->first();
        $adminList->email = $email;
        $adminList->password = $password;
        $adminList->save();

        if (!empty($adminList)) {
            $response['code'] = "200";
            $response['message'] = "Login successfully!";
        } else {
            $response['code'] = "400";
            $response['message'] = "Incorrect Username or Password!";
        }
        echo json_encode($response);
        die();
    }

    public function votersAnalysis(Request $request)
    {
        $userLoginID = Session::get('tenant')['id'];
        $title = "Voters Analysis";
        $title = "Voter List";
        $voterList = Voter::select('*');

        $searchResult['fname'] = '';
        if (!empty($request->fname)) {
            $searchResult['fname']    = $request->fname;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('fname', 'LIKE', "%{$request->fname}%");
            });
        }

        $searchResult['mname'] = '';
        if (!empty($request->mname)) {
            $searchResult['mname']    = $request->mname;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('mname', 'LIKE', "%{$request->mname}%");
            });
        }

        $searchResult['lname'] = '';
        if (!empty($request->lname)) {
            $searchResult['lname']    = $request->lname;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('lname', 'LIKE', "%{$request->lname}%");
            });
        }

        $searchResult['gender'] = '';
        if (!empty($request->gender)) {
            $searchResult['gender']    = $request->gender;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('gender', 'LIKE', "%{$request->gender}%");
            });
        }

        $searchResult['is_mobile'] = '';
        if (!empty($request->is_mobile)) {
            $searchResult['is_mobile']    = $request->is_mobile;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('is_mobile', '=', $request->is_mobile);
            });
        }

        $searchResult['mobile'] = '';
        if (!empty($request->mobile)) {
            $searchResult['mobile']    = $request->mobile;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('mobile', 'LIKE', "%{$request->mobile}%");
            });
        }

        $searchResult['email'] = '';
        if (!empty($request->email)) {
            $searchResult['email']    = $request->email;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('email', 'LIKE', "%{$request->email}%");
            });
        }

        $searchResult['filter_state'] = '';
        if (!empty($request->filter_state)) {
            $searchResult['filter_state']    = $request->filter_state;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('state', '=', $request->filter_state);
            });
        }

        $searchResult['filter_lga'] = '';
        if (!empty($request->filter_lga)) {
            $searchResult['filter_lga']    = $request->filter_lga;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('lga', '=', $request->filter_lga);
            });
        }

        $searchResult['filter_ward'] = '';
        if (!empty($request->filter_ward)) {
            $searchResult['filter_ward']    = $request->filter_ward;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('ward', '=', $request->filter_ward);
            });
        }

        $searchResult['insta_filter'] = '';
        if (!empty($request->insta_filter)) {
            $searchResult['insta_filter']    = $request->insta_filter;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('insta', '!=', '');
            });
        }

        $searchResult['twitter_filter'] = '';
        if (!empty($request->twitter_filter)) {
            $searchResult['twitter_filter']    = $request->twitter_filter;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('twitter', '!=', '');
            });
        }

        $searchResult['fb_filter'] = '';
        if (!empty($request->fb_filter)) {
            $searchResult['fb_filter']    = $request->fb_filter;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('fb', '!=', '');
            });
        }

        $searchResult['is_pvc'] = '';
        if (!empty($request->is_pvc)) {
            $searchResult['is_pvc']    = $request->is_pvc;
            $voterList = $voterList->where(function ($query) use ($request) {
                $query->orWhere('is_pvc', '=', $request->is_pvc);
            });
        }

        if(Session::get('type') == "lga") {
            $voterList = $voterList->where('lga', $userLoginID);
        } else if(Session::get('type') == "state") {
            $voterList = $voterList->where('state', $userLoginID);
        } else if(Session::get('type') == "ward") {
            $voterList = $voterList->where('ward', $userLoginID);
        } else if(Session::get('type') == "cell") {
            $voterList = $voterList->where('cell', $userLoginID);
        }

        $voterList = $voterList->where('is_delete', '0')->paginate(5);

        $printVoterList = Voter::where('is_delete', '0')->get();
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $lgaList = LGACoordinator::where('is_delete', '0')->get();
        $wardList = WardCoordinator::where('is_delete', '0')->get();
        return view('admin.voters-analysis', compact('title', 'voterList', 'printVoterList', 'searchResult', 'stateList', 'lgaList', 'wardList'));
    }

    public function supervisorVolunteersTeam()
    {
        $title = "Supervisor Volunteers Team";
        return view('admin.supervisor-volunteers-team', compact('title'));
    }

    public function reportsGraphs()
    {
        $title = "Reports Graphs";
        return view('admin.reports-graphs', compact('title'));
    }

    public function managersTeam()
    {
        $title = "Managers Team";
        return view('admin.managers-team', compact('title'));
    }

    public function managersSupervisorTeam()
    {
        $title = "Managers Team";
        return view('admin.managers-supervisor-team', compact('title'));
    }

    public function voterList()
    {
        $title = "Voter List";
        $voterList = Voter::where('is_delete', '0')->paginate(5);
        $printVoterList = Voter::where('is_delete', '0')->get();
        return view('admin.voter_list', compact('title', 'voterList', 'printVoterList'));
    }

    public function voterStore(Request $request)
    {
        if(!empty($request->voter_id)) {
            $addCompanyOwner = Voter::where('id', $request->voter_id)->first();
        }

        if(empty($addCompanyOwner)) {
            $addCompanyOwner = new Voter;
        }

        $addCompanyOwner->fname = $request->fname;
        $addCompanyOwner->mname = $request->mname;
        $addCompanyOwner->lname = $request->lname;
        $addCompanyOwner->gender = $request->gender;
        $addCompanyOwner->dob = $request->dob;
        $addCompanyOwner->mobile =$request->mobile;
        $addCompanyOwner->is_mobile = '1';
        $addCompanyOwner->email = $request->email;
        $addCompanyOwner->state = $request->state;
        $addCompanyOwner->lga = $request->lga;
        $addCompanyOwner->ward = $request->ward;
        $addCompanyOwner->cell = !empty($request->cell) ? $request->cell : 1;
        $addCompanyOwner->address = $request->address;
        $addCompanyOwner->fb = $request->fb;
        $addCompanyOwner->insta = $request->insta;
        $addCompanyOwner->twitter = $request->twitter;

        $addCompanyOwner->question_1 = $request->question_1;
        $addCompanyOwner->question_2 = $request->question_2;
        $addCompanyOwner->question_3 = $request->question_3;
        $addCompanyOwner->question_4 = $request->question_4;
        $addCompanyOwner->question_5 = $request->question_5;
        $addCompanyOwner->question_6 = $request->question_6;
        $addCompanyOwner->question_7 = $request->question_7;
        $addCompanyOwner->question_8 = $request->question_8;
        $addCompanyOwner->question_9 = $request->question_9;

        $addCompanyOwner->is_voter ='0';
        $addCompanyOwner->is_pvc = '1';
        $addCompanyOwner->save();

        return response()->json(['code' => "200"]);
    }

    public function editVoter($id)
    {
        $editVoter = Voter::where([['id', '=', $id], ['is_delete', '=', '0']])->first();
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $lgaList = LGACoordinator::where([['state_id', '=', $editVoter->state], ['is_delete', '=', '0']])->get();
        $wardList = WardCoordinator::where([['lga_id', '=', $editVoter->lga], ['is_delete', '=', '0']])->get();
        $cellList = CellCoordinator::where([['ward_id', '=', $editVoter->ward], ['is_delete', '=', '0']])->get();
        $title = "Edit Voter";
        return view('admin.file_import', compact('editVoter', 'title', 'stateList', 'lgaList', 'wardList', 'cellList'));
    }

    public function downloadPdfVoters()
    {
        $title = "Voter List";
        $voterList = Voter::select('voter.*', 'cell_coordinator.fname as cell_name', 'ward_coordinator.fname as wardname', 'lga_coordinator.fname as lga_name', 'state_co.fname as state_name')
        ->leftJoin('cell_coordinator', 'cell_coordinator.id', '=', 'voter.cell')
        ->leftJoin('ward_coordinator', 'ward_coordinator.id', '=', 'voter.ward')
        ->leftJoin('lga_coordinator', 'lga_coordinator.id', '=', 'voter.lga')
        ->leftJoin('state_co', 'state_co.id', '=', 'voter.state')
        ->where('voter.is_delete', '0')
        ->get();
        $data = ['voterList' => $voterList];
        $pdf = PDF::loadView('admin.download_voters', $data);
        
        return $pdf->download('download_voter_list.pdf');
    }

    public function voterDelete(Request $request)
    {
        $voter    = Voter::where('id', $request->id)->first();
        if (!empty($voter->id)) {
            $voter->delete();
            return response()->json(['code' => "1"]);
        } else {
            $title = "404 Error Page";
            return view('admin.404', compact('title'));
        }
    }

    public function logoutAdmin(Request $request)
    {
        if (Session::get('type') == 'national') {
            $request->session()->forget('type');
            return redirect()->route('admin.index');
        } else {
            $request->session()->forget('type');
            return redirect()->route('index');
        }
    }
}