<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;
use Session;

class StateCoordinatorController extends Controller
{
    public function stateCoordinatorList()
    {
        if(!empty(Session::get('tenant')['id'])) {
            $title = "State Coordinator List";
            $stateList = StateCoordinator::where('is_delete', '0')->paginate(5);
            return view('admin.state.index', compact('title', 'stateList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function addStateCoordinator()
    {
        if(!empty(Session::get('tenant')['id'])) {
            $title = "Add State Coordinator";
            $editStateCoordinator = new StateCoordinator;
            return view('admin.state.create', compact('title', 'editStateCoordinator'));
        } else {
            return redirect()->route('index');
        }
    }

    public function storeStateCoordinator(Request $request)
    {
        if(!empty($request->id)) {
            $validator = Validator::make($request->all(), [
                'username'  => 'required',
                'password' => 'required',
                'fname'  => 'required',
                'mname'  => 'required',
                'lname'  => 'required',
                'age' => 'required',
                'gender'  => 'required',
                'dob' => 'required',
                'mobile'  => 'required',
                'email' => 'required|email',
                'address'  => 'required',
                'policy'  => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'username'  => 'required|unique:state_co',
                'password' => 'required',
                'fname'  => 'required',
                'mname'  => 'required',
                'lname'  => 'required',
                'age' => 'required',
                'gender'  => 'required',
                'dob' => 'required',
                'mobile'  => 'required',
                'email' => 'required|email|unique:state_co',
                'address'  => 'required',
                'policy'  => 'required',
            ]);
        }

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            if(!empty($request->id)) {
                $addStateCoordinator = StateCoordinator::where('id', $request->id)->first();
            }

            if(empty($addStateCoordinator)) {
                $addStateCoordinator = new StateCoordinator;
            }

            $addStateCoordinator->username = $request->username;
            $addStateCoordinator->password = md5($request->password);
            $addStateCoordinator->fname = $request->fname;
            $addStateCoordinator->mname = $request->mname;
            $addStateCoordinator->lname = $request->lname;
            $addStateCoordinator->age = $request->age;
            $addStateCoordinator->gender = $request->gender;
            $addStateCoordinator->dob = $request->dob;
            $addStateCoordinator->mobile =$request->mobile;
            $addStateCoordinator->is_mobile = '1';
            $addStateCoordinator->email = $request->email;
            $addStateCoordinator->is_email = '1';
            $addStateCoordinator->address = $request->address;
            $addStateCoordinator->is_delete = '0';
            $addStateCoordinator->save();

            return response()->json(['code' => "200"]);
        }
    }

    public function editStateCoordinator($id)
    {
        if(!empty(Session::get('tenant')['id'])) {
            $editStateCoordinator = StateCoordinator::where('id', $id)->first();
            $title = "Edit State Coordinator";
            return view('admin.state.create', compact('editStateCoordinator', 'title'));
        } else {
            return redirect()->route('index');
        }
    }

    public function deleteStateCoordinator(Request $request)
    {
        $stateCoordinator    = StateCoordinator::where('id', $request->id)->first();
        if(!empty($stateCoordinator->id)) {
            $stateCoordinator->is_delete = '1';
            $stateCoordinator->save();
        }
        return response()->json(['code' => "1"]);
    }
}
