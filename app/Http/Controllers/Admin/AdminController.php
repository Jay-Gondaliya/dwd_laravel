<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterAdmin;

class AdminController extends Controller
{
    public function index()
    {
        $data['state_co'] = 10;
        $data['lga_co'] = 20;
        $data['ward_co'] = 30;
        $data['cell_co'] = 40;

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
        return view('admin.forgot-password');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function supervisorsDashboard()
    {
        return view('admin.supervisors-dashboard');
    }

    public function managersDashboard()
    {
        return view('admin.managers-dashboard');
    }
}
