<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LGACoordinator;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;
use Session;

class LGACoordinatorController extends Controller
{
    public function lgaCoordinatorList()
    {
        if(!empty(Session::get('tenant')['id'])) {
            $userLoginID = Session::get('tenant')['id'];
            $title = "LGA Coordinator List";
            $lgaList = LGACoordinator::select('lga_coordinator.*','state_co.fname as state_name')
            ->leftJoin('state_co', 'state_co.id', '=', 'lga_coordinator.state_id');
            
            if(Session::get('type') == "state") {
                $lgaList = $lgaList->where('lga_coordinator.state_id', $userLoginID);
            }

            $lgaList = $lgaList->where('lga_coordinator.is_delete', '0')->paginate(5);

            return view('admin.lga.index', compact('title', 'lgaList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function addLGACoordinator()
    {
        if(!empty(Session::get('tenant')['id'])) {
            $userLoginID = Session::get('tenant')['id'];
            
            $userType = Session::get('type');
            if($userType!='national'){
                if($userType!='state'){
                    $userStateID = Session::get('tenant')['state_id'];
                }else{
                    $userStateID = Session::get('tenant')['id'];
                }
                $stateList = StateCoordinator::where([['id','=',$userStateID],['is_delete','=', '0']])->get();
            }else{
                $stateList = StateCoordinator::where('is_delete', '0')->get();
            }
            $title = "Add LGA Coordinator";
    //        $stateList = StateCoordinator::where('is_delete', '0')->get();
            $editLGACoordinator = new LGACoordinator;
            return view('admin.lga.create', compact('title', 'editLGACoordinator', 'stateList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function storeLGACoordinator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'select_state'  => 'required',
            'username'  => 'required|unique:lga_coordinator',
            'password' => 'required',
            'fname'  => 'required',
            'mname'  => 'required',
            'lname'  => 'required',
            'age' => 'required',
            'gender'  => 'required',
            'dob' => 'required',
            'mobile'  => 'required',
            'email' => 'required',
            'address'  => 'required',
            'policy'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            if(!empty($request->id)) {
                $addLGACoordinator = LGACoordinator::where('id', $request->id)->first();
            }

            if(empty($addLGACoordinator)) {
                $addLGACoordinator = new LGACoordinator;
            }

            $addLGACoordinator->state_id = $request->select_state;
            $addLGACoordinator->username = $request->username;
            $addLGACoordinator->password = md5($request->password);
            $addLGACoordinator->fname = $request->fname;
            $addLGACoordinator->mname = $request->mname;
            $addLGACoordinator->lname = $request->lname;
            $addLGACoordinator->age = $request->age;
            $addLGACoordinator->gender = $request->gender;
            $addLGACoordinator->dob = $request->dob;
            $addLGACoordinator->mobile =$request->mobile;
            $addLGACoordinator->is_mobile = '1';
            $addLGACoordinator->email = $request->email;
            $addLGACoordinator->is_email = '1';
            $addLGACoordinator->address = $request->address;
            $addLGACoordinator->is_delete = '0';
            $addLGACoordinator->save();

            return response()->json(['code' => "200"]);
        }
    }

    public function editLGACoordinator($id)
    {
        if(!empty(Session::get('tenant')['id'])) {
            $userLoginID = Session::get('tenant')['id'];
            
            $userType = Session::get('type');
            if($userType!='national'){
                if($userType!='state'){
                    $userStateID = Session::get('tenant')['state_id'];
                }else{
                    $userStateID = Session::get('tenant')['id'];
                }
                $stateList = StateCoordinator::where([['id','=',$userStateID],['is_delete','=', '0']])->get();
            }else{
                $stateList = StateCoordinator::where('is_delete', '0')->get();
            }
            $editLGACoordinator = LGACoordinator::where('id', $id)->first();
    //        $stateList = StateCoordinator::where('is_delete', '0')->get();
            $title = "Edit LGA Coordinator";
            return view('admin.lga.create', compact('editLGACoordinator', 'title', 'stateList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function deleteLGACoordinator(Request $request)
    {
        $lGACoordinator    = LGACoordinator::where('id', $request->id)->first();
        if(!empty($lGACoordinator->id)) {
            $lGACoordinator->is_delete = '1';
            $lGACoordinator->save();
        }
        return response()->json(['code' => "1"]);
    }
}
