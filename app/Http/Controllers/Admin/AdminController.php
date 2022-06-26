<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAdmin;

class AdminController extends Controller
{
    public function index()
    {
        $state_co= 10;
        $lga_co= 20;
        $ward_co= 30;
        $cell_co= 40;

        $title = "Admin List";
        return view('admin.index', compact('data', 'title'));
    }

    public function checkLogin(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);
        
        if($request->profile_type == "national") {
            $adminList = MasterAdmin::where([['username', '=', $username], ['password', '=', $password]])->first();
            $_SESSION['tenant'] = $adminList;
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
}
