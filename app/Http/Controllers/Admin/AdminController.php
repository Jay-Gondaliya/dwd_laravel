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
            $_SESSION['tenant'] = $adminList;
            $_SESSION['tenant']['type'] = "state";
        }
        if ($request->profile_type == "local") {
            $adminList = LGACoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            $_SESSION['tenant'] = $adminList;
            $_SESSION['tenant']['type'] = "lga";
        }
        if ($request->profile_type == "ward") {
            $adminList = WardCoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            $_SESSION['tenant'] = $adminList;
            $_SESSION['tenant']['type'] = "ward";
        }
        if ($request->profile_type == "cell") {
            $adminList = CellCoordinator::where([['username', '=', $username], ['password', '=', $password]])->first();
            $_SESSION['tenant'] = $adminList;
            $_SESSION['tenant']['type'] = "cell";
        }

        if (!empty($adminList)) {
            $response['code'] = "200";
        } else {
            $response['code'] = "400";
        }
        echo json_encode($response);
        die();
    }

    public function forgotPassword(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);

        if ($request->profile_type == "state") {
            $adminList = State_co::where('email', $email)->first();
            // $_SESSION['tenant'] = $adminList;
            // $_SESSION['tenant']['type'] = "state";
        }
        if ($request->profile_type == "local") {
            $adminList = LGACoordinator::where('email', $email)->first();
            // $_SESSION['tenant'] = $adminList;
            // $_SESSION['tenant']['type'] = "lga";
        }
        if ($request->profile_type == "ward") {
            $adminList = WardCoordinator::where('email', $email)->first();
            // $_SESSION['tenant'] = $adminList;
            // $_SESSION['tenant']['type'] = "ward";
        }
        if ($request->profile_type == "cell") {
            $adminList = CellCoordinator::where('email', $email)->first();
            // $_SESSION['tenant'] = $adminList;
            // $_SESSION['tenant']['type'] = "cell";
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

    public function dashboard()
    {
        $state_co = StateCoordinator::where('is_delete', '0')->count();
        $lga_co = LGACoordinator::where('is_delete', '0')->count();
        $ward_co = WardCoordinator::where('is_delete', '0')->count();
        $cell_co = CellCoordinator::where('is_delete', '0')->count();
        $voterCount = Voter::where('is_delete', '0')->count();
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
        $_SESSION['tenant'] = $adminList;
        $_SESSION['tenant']['type'] = "national";

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

    public function votersAnalysis()
    {
        $title = "Voters Analysis";
        $title = "Voter List";
        $voterList = Voter::where('is_delete', '0')->paginate(5);
        $printVoterList = Voter::where('is_delete', '0')->get();
        return view('admin.voters-analysis', compact('title', 'voterList', 'printVoterList'));
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
}