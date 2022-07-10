<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;

class StateCoordinatorController extends Controller
{
    public function stateCoordinatorList()
    {
        $title = "State Coordinator List";
        $stateList = StateCoordinator::where('is_delete', '0')->paginate(5);
        return view('admin.state.index', compact('title', 'stateList'));
    }

    public function addStateCoordinator()
    {
        $title = "Add State Coordinator";
        $editStateCoordinator = new StateCoordinator;
        return view('admin.state.create', compact('title', 'editStateCoordinator'));
    }

    public function storeStateCoordinator(Request $request)
    {
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
            'email' => 'required',
            'address'  => 'required',
            'policy'  => 'required',
        ]);

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
        $editStateCoordinator = StateCoordinator::where('id', $id)->first();
        $title = "Edit State Coordinator";
        return view('admin.state.create', compact('editStateCoordinator', 'title'));
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
