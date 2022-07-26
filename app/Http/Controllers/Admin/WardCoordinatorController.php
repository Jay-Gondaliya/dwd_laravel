<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WardCoordinator;
use App\Models\LGACoordinator;
use App\Models\CellCoordinator;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;
use Session;

class WardCoordinatorController extends Controller
{
    public function wardCoordinatorList()
    {
        if(!empty(Session::get('tenant')['id'])) {
            $userLoginID = Session::get('tenant')['id'];
            $title = "Ward Coordinator List";
            $wardList = WardCoordinator::select('ward_coordinator.*','lga_coordinator.fname as lga_name')
            ->leftJoin('lga_coordinator', 'lga_coordinator.id', '=', 'ward_coordinator.lga_id');

            if(Session::get('type') == "lga") {
                $wardList = $wardList->where('ward_coordinator.lga_id', $userLoginID);
            } else if(Session::get('type') == "state") {
                $wardList = $wardList->where('ward_coordinator.state_id', $userLoginID);
            }

            $wardList = $wardList->where('ward_coordinator.is_delete', '0')->paginate(5);
            return view('admin.ward.index', compact('title', 'wardList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function addWardCoordinator()
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
            $title = "Add Ward Coordinator";
            
            $editWardCoordinator = new WardCoordinator;
            return view('admin.ward.create', compact('title', 'editWardCoordinator', 'stateList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function storeWardCoordinator(Request $request)
    {
        if(!empty($request->id)) {
            $validator = Validator::make($request->all(), [
                'select_state'  => 'required',
                'select_lga'  => 'required',
                'username'  => 'required',
                'password' => 'required',
                'first_name'  => 'required',
                // 'mname'  => 'required',
                'last_name'  => 'required',
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
                'select_state'  => 'required',
                'select_lga'  => 'required',
                'username'  => 'required|unique:ward_coordinator',
                'password' => 'required',
                'first_name'  => 'required',
                // 'mname'  => 'required',
                'last_name'  => 'required',
                'age' => 'required',
                'gender'  => 'required',
                'dob' => 'required',
                'mobile'  => 'required',
                'email' => 'required|email|unique:ward_coordinator',
                'address'  => 'required',
                'policy'  => 'required',
            ]);
        }

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        } else {
            if(!empty($request->id)) {
                $addWardCoordinator = WardCoordinator::where('id', $request->id)->first();
            }

            if(empty($addWardCoordinator)) {
                $addWardCoordinator = new WardCoordinator;
                $addWardCoordinator->username = $request->username;
            }

            $addWardCoordinator->state_id = $request->select_state;
            $addWardCoordinator->lga_id = $request->select_lga;
            $addWardCoordinator->password = md5($request->password);
            $addWardCoordinator->fname = $request->first_name;
            $addWardCoordinator->mname = $request->mname;
            $addWardCoordinator->lname = $request->last_name;
            $addWardCoordinator->age = $request->age;
            $addWardCoordinator->gender = $request->gender;
            $addWardCoordinator->dob = $request->dob;
            $addWardCoordinator->mobile =$request->mobile;
            $addWardCoordinator->is_mobile = '1';
            $addWardCoordinator->email = $request->email;
            $addWardCoordinator->is_email = '1';
            $addWardCoordinator->address = $request->address;
            $addWardCoordinator->is_delete = '0';
            $addWardCoordinator->save();

            return response()->json(['code' => "200"]);
        }
    }

    public function editWardCoordinator($id)
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
            $editWardCoordinator = WardCoordinator::where('id', $id)->first();
    //        $stateList = StateCoordinator::where('is_delete', '0')->get();
            $lgaList = LGACoordinator::where([['state_id', '=', $editWardCoordinator->state_id], ['is_delete', '=', '0']])->get();
            $title = "Edit Ward Coordinator";
            return view('admin.ward.create', compact('editWardCoordinator', 'title', 'stateList', 'lgaList'));
        } else {
            return redirect()->route('index');
        }
    }

    public function deleteWardCoordinator(Request $request)
    {
        $wardCoordinator    = WardCoordinator::where('id', $request->id)->first();
        if(!empty($wardCoordinator->id)) {
            $wardCoordinator->is_delete = '1';
            $wardCoordinator->save();
        }
        return response()->json(['code' => "1"]);
    }

    public function getRecords(Request $request)
    {
        $userLoginID = Session::get('tenant')['id'];
        $data    = $request->all();
        $from    = $data['from'];
        $value   = $data['value'];
        $details = array();
        $userType = Session::get('type');
        $userStateID = Session::get('tenant')['id'];
        if ($from == 'state') {
            /* getting lga from state */
            if($userType=='lga'){
                $lgaLevel = LGACoordinator::where([['id','=',$userStateID],['state_id', '=', $value], ['is_delete','=', '0']])->get();
            } elseif(($userType=='ward')) {
                $ward = WardCoordinator::where([['id','=',$userStateID], ['is_delete','=', '0']])->first();
                $lgaLevel = LGACoordinator::where([['id','=',$ward->lga_id],['state_id', '=', $ward->state_id], ['is_delete','=', '0']])->get();
            } elseif(($userType=='cell')) {
                $cell = CellCoordinator::where([['id','=',$userStateID], ['is_delete','=', '0']])->first();
                $lgaLevel = LGACoordinator::where([['id','=',$cell->lga_id],['state_id', '=', $cell->state_id], ['is_delete','=', '0']])->get();
            } else{
                $lgaLevel = LGACoordinator::where([['state_id', '=', $value], ['is_delete', '=', '0']])->get();
            }
            foreach ($lgaLevel as $key => $state) {
                $details[$key]['id']   = $state->id;
                $details[$key]['name'] = $state->fname . ' ' . $state->lname;
            }
        } else if ($from == 'lga') {
            /* getting ward from lga */
            if($userType=='ward'){
                $wardList = WardCoordinator::where([['id','=',$userStateID],['is_delete','=', '0']])->get();
            } elseif(($userType=='cell')) {
                $cell = CellCoordinator::where([['id','=',$userStateID], ['is_delete','=', '0']])->first();
                $wardList = WardCoordinator::where([['id','=',$cell->ward_id],['state_id', '=', $cell->state_id], ['is_delete','=', '0']])->get();
            } else{
                $wardList = WardCoordinator::where([['lga_id', '=', $value], ['is_delete', '=', '0']])->get();
            }
            foreach ($wardList as $key => $ward) {
                $details[$key]['id']   = $ward->id;
                $details[$key]['name'] = $ward->fname . ' ' . $ward->lname;
            }
        } else if ($from == 'ward') {
            /* getting cell from ward */
            if($userType=='ward'){
                $cellList = CellCoordinator::where([['id','=',$userStateID],['is_delete','=', '0']])->get();
            } elseif(($userType=='cell')) {
                $cellList = CellCoordinator::where([['id','=',$userStateID], ['is_delete','=', '0']])->get();
            } else{
                $cellList = CellCoordinator::where([['ward_id', '=', $value], ['is_delete', '=', '0']])->get();
            }
            foreach ($cellList as $key => $cell) {
                $details[$key]['id']   = $cell->id;
                $details[$key]['name'] = $cell->fname . ' ' . $cell->lname;
            }
        }
        return response()->json([
            'success' => $details,
            'from'    => $from,
        ]);
    }
}
