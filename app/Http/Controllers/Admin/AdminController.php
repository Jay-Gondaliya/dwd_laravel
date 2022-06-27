<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAdmin;
use App\models\State_co;
use App\Imports\BulkImport;
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
        
        if($request->profile_type == "state") {
            $adminList =State_co ::where([['username', '=', $username], ['password', '=', $password]])->first();
            $_SESSION['tenant'] = $adminList;
            $_SESSION['tenant']['type'] = "state";
        }

        if(!empty($adminList)) {
            $response['code'] = "200";
        } else {
            $response['code'] = "400";
        }
		echo json_encode($response);
		die();
    }

    public function forgotPassword()
    {
        $title = "Forgot Password";
        return view('admin.forgot-password', compact('title'));
    }

    public function dashboard()
    {
        $state_co= 10;
        $lga_co= 20;
        $ward_co= 30;
        $cell_co= 40;
        $title = "Dashboard";
        return view('admin.dashboard', compact('title', 'state_co', 'lga_co', 'ward_co', 'cell_co'));
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
        return view('admin.file_import', compact('title'));
    }

    public function fileUpload(Request $request) 
    {
        Excel::import(new BulkImport, $request->file('file_data'));
        $response['code'] = "200";
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
        
        if(!empty($adminList)) {
            $response['code'] = "200";
            $response['message'] = "Login successfully!";
        } else {
            $response['code'] = "400";
            $response['message'] = "Incorrect Username or Password!";
        }
		echo json_encode($response);
		die();
    }
}