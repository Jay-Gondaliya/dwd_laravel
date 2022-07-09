<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WardCoordinator;
use App\Models\LGACoordinator;
use App\Models\CellCoordinator;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;

class WardCoordinatorController extends Controller
{
    public function wardCoordinatorList()
    {
        $title = "Ward Coordinator List";
        $wardList = WardCoordinator::select('ward_coordinator.*','lga_coordinator.fname as lga_name')
        ->leftJoin('lga_coordinator', 'lga_coordinator.id', '=', 'ward_coordinator.lga_id')
        ->where('ward_coordinator.is_delete', '0')->paginate(5);
        return view('admin.ward.index', compact('title', 'wardList'));
    }

    public function addWardCoordinator()
    {
        $title = "Add Ward Coordinator";
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $editWardCoordinator = new WardCoordinator;
        return view('admin.ward.create', compact('title', 'editWardCoordinator', 'stateList'));
    }

    public function storeWardCoordinator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'select_state'  => 'required',
            'select_lga'  => 'required',
            'username'  => 'required',
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
                $addWardCoordinator = WardCoordinator::where('id', $request->id)->first();
            }

            if(empty($addWardCoordinator)) {
                $addWardCoordinator = new WardCoordinator;
            }

            $addWardCoordinator->state_id = $request->select_state;
            $addWardCoordinator->lga_id = $request->select_lga;
            $addWardCoordinator->username = $request->username;
            $addWardCoordinator->password = md5($request->password);
            $addWardCoordinator->fname = $request->fname;
            $addWardCoordinator->mname = $request->mname;
            $addWardCoordinator->lname = $request->lname;
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
        $editWardCoordinator = WardCoordinator::where('id', $id)->first();
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $lgaList = LGACoordinator::where([['state_id', '=', $editWardCoordinator->state_id], ['is_delete', '=', '0']])->get();
        $title = "Edit Ward Coordinator";
        return view('admin.ward.create', compact('editWardCoordinator', 'title', 'stateList', 'lgaList'));
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
        $data    = $request->all();
        $from    = $data['from'];
        $value   = $data['value'];
        $details = array();
        if ($from == 'state') {
            /* getting lga from state */
            $lgaLevel = LGACoordinator::where([['state_id', '=', $value], ['is_delete', '=', '0']])->get();
            foreach ($lgaLevel as $key => $state) {
                $details[$key]['id']   = $state->id;
                $details[$key]['name'] = $state->fname;
            }
        } else if ($from == 'lga') {
            /* getting ward from lga */
            $wardList = WardCoordinator::where([['lga_id', '=', $value], ['is_delete', '=', '0']])->get();
            foreach ($wardList as $key => $ward) {
                $details[$key]['id']   = $ward->id;
                $details[$key]['name'] = $ward->fname;
            }
        } else if ($from == 'ward') {
            /* getting cell from ward */
            $cellList = CellCoordinator::where([['ward_id', '=', $value], ['is_delete', '=', '0']])->get();
            foreach ($cellList as $key => $cell) {
                $details[$key]['id']   = $cell->id;
                $details[$key]['name'] = $cell->fname;
            }
        }
        return response()->json([
            'success' => $details,
            'from'    => $from,
        ]);
    }
}
