<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CellCoordinator;
use App\Models\WardCoordinator;
use App\Models\LGACoordinator;
use App\Models\StateCoordinator;
use Illuminate\Support\Facades\Validator;

class CellCoordinatorController extends Controller
{
    public function cellCoordinatorList()
    {
        $title = "Cell Coordinator List";
        $cellList = CellCoordinator::select('cell_coordinator.*','ward_coordinator.fname as wardname')
        ->leftJoin('ward_coordinator', 'ward_coordinator.id', '=', 'cell_coordinator.lga_id')
        ->where('cell_coordinator.is_delete', '0')->paginate(5);
//echo "<pre>";print_r($cellList->toArray());die;
//$value = $request->session()->get('key', 'default');
        $data = $request->session()->all();
echo "<pre>";print_r($data);die;
        return view('admin.cell.index', compact('title', 'cellList'));
    }

    public function addCellCoordinator()
    {
        $title = "Add Cell Coordinator";
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $editCellCoordinator = new CellCoordinator;
        return view('admin.cell.create', compact('title', 'editCellCoordinator', 'stateList'));
    }

    public function storeCellCoordinator(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'select_state'  => 'required',
            'select_lga'  => 'required',
            'select_ward'  => 'required',
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
                $addCellCoordinator = CellCoordinator::where('id', $request->id)->first();
            }

            if(empty($addCellCoordinator)) {
                $addCellCoordinator = new CellCoordinator;
            }

            $addCellCoordinator->state_id = $request->select_state;
            $addCellCoordinator->lga_id = $request->select_lga;
            $addCellCoordinator->ward_id = $request->select_ward;
            $addCellCoordinator->username = $request->username;
            $addCellCoordinator->password = md5($request->password);
            $addCellCoordinator->fname = $request->fname;
            $addCellCoordinator->mname = $request->mname;
            $addCellCoordinator->lname = $request->lname;
            $addCellCoordinator->age = $request->age;
            $addCellCoordinator->gender = $request->gender;
            $addCellCoordinator->dob = $request->dob;
            $addCellCoordinator->mobile =$request->mobile;
            $addCellCoordinator->is_mobile = '1';
            $addCellCoordinator->email = $request->email;
            $addCellCoordinator->is_email = '1';
            $addCellCoordinator->address = $request->address;
            $addCellCoordinator->is_delete = '0';
            $addCellCoordinator->save();

            return response()->json(['code' => "200"]);
        }
    }

    public function editCellCoordinator($id)
    {
        $editCellCoordinator = CellCoordinator::where('id', $id)->first();
        $stateList = StateCoordinator::where('is_delete', '0')->get();
        $lgaList = LGACoordinator::where([['state_id', '=', $editCellCoordinator->state_id], ['is_delete', '=', '0']])->get();
        $wardList = WardCoordinator::where([['lga_id', '=', $editCellCoordinator->lga_id], ['is_delete', '=', '0']])->get();
        $title = "Edit Cell Coordinator";
        return view('admin.cell.create', compact('editCellCoordinator', 'title', 'stateList', 'lgaList', 'wardList'));
    }

    public function deleteCellCoordinator(Request $request)
    {
        $cellCoordinator    = CellCoordinator::where('id', $request->id)->first();
        if(!empty($cellCoordinator->id)) {
            $cellCoordinator->is_delete = '1';
            $cellCoordinator->save();
        }
        return response()->json(['code' => "1"]);
    }
}