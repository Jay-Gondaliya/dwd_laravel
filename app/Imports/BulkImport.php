<?php

namespace App\Imports;

use App\Models\Voter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DateTime;
use App\Models\StateCoordinator;
use App\Models\AnotherCoordinator;
use App\Models\WardCoordinator;
use App\Models\CellCoordinator;
use App\Models\LGACoordinator;
use Session;

class BulkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $userLoginID = Session::get('tenant')['id'];
        if(Session::get('type') == "national") {
            $stateDetails = StateCoordinator::where('fname', $row['state'])->first();

            $add = array();
            if(!empty($stateDetails)) {
                $lgaName = LGACoordinator::where([['state_id', '=', $stateDetails->id], ['fname', '=', $row['lga']]])->first();
                if(!empty($lgaName)) {
                    $wardName = WardCoordinator::where([['state_id', '=', $stateDetails->id], ['lga_id', '=', $lgaName->id], ['fname', '=', $row['ward']]])->first();
                    if(!empty($wardName)) {
                        $cellName = CellCoordinator::where([['state_id', '=', $stateDetails->id], ['lga_id', '=', $lgaName->id], ['ward_id', '=', $wardName->id], ['fname', '=', $row['cell']]])->first();
                        if(!empty($cellName)) {
                            $dateGenerate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']);
                            $date = \Carbon\Carbon::parse($dateGenerate);
                            $add=new Voter;
                            $add->fname=$row['fname'];
                            $add->mname=$row['mname'];
                            $add->lname=$row['lname'];
                            $add->gender=$row['gender'];
                            $add->dob=$date->format('Y-m-d');
                            $add->mobile=$row['mobile'];
                            $add->is_mobile=$row['is_mobile'];
                            $add->email=$row['email'];
                            $add->state=$stateDetails->id;
                            $add->lga=$lgaName->id;
                            $add->ward=$wardName->id;
                            $add->cell=$cellName->id;
                            $add->address=$row['address'];
                            $add->fb=$row['fb'];
                            $add->insta=$row['insta'];
                            $add->twitter=$row['twitter'];
                            $add->is_voter=$row['is_voter'];
                            $add->is_pvc=$row['is_pvc'];
                            $add->save();
                        } else {
                            $addAnotherCoordinator = new AnotherCoordinator;
                            $addAnotherCoordinator->fname=$row['fname'];
                            $addAnotherCoordinator->mname=$row['mname'];
                            $addAnotherCoordinator->lname=$row['lname'];
                            $addAnotherCoordinator->mobile=$row['mobile'];
                            $addAnotherCoordinator->email=$row['email'];
                            $addAnotherCoordinator->save();
                        }
                    } else {
                        $addAnotherCoordinator = new AnotherCoordinator;
                        $addAnotherCoordinator->fname=$row['fname'];
                        $addAnotherCoordinator->mname=$row['mname'];
                        $addAnotherCoordinator->lname=$row['lname'];
                        $addAnotherCoordinator->mobile=$row['mobile'];
                        $addAnotherCoordinator->email=$row['email'];
                        $addAnotherCoordinator->save();
                    }
                } else {
                    $addAnotherCoordinator = new AnotherCoordinator;
                    $addAnotherCoordinator->fname=$row['fname'];
                    $addAnotherCoordinator->mname=$row['mname'];
                    $addAnotherCoordinator->lname=$row['lname'];
                    $addAnotherCoordinator->mobile=$row['mobile'];
                    $addAnotherCoordinator->email=$row['email'];
                    $addAnotherCoordinator->save();
                }
            } else {
                $addAnotherCoordinator = new AnotherCoordinator;
                $addAnotherCoordinator->fname=$row['fname'];
                $addAnotherCoordinator->mname=$row['mname'];
                $addAnotherCoordinator->lname=$row['lname'];
                $addAnotherCoordinator->mobile=$row['mobile'];
                $addAnotherCoordinator->email=$row['email'];
                $addAnotherCoordinator->save();
            }
        } else if(Session::get('type') == "state") {
            
            $stateName = StateCoordinator::where('id', $userLoginID)->first();

            $add = array();
            if($stateName->fname == $row['state']) {
                $dateGenerate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']);
                $date = \Carbon\Carbon::parse($dateGenerate);
                $add=new Voter;
                $add->fname=$row['fname'];
                $add->mname=$row['mname'];
                $add->lname=$row['lname'];
                $add->gender=$row['gender'];
                $add->dob=$date->format('Y-m-d');
                $add->mobile=$row['mobile'];
                $add->is_mobile=$row['is_mobile'];
                $add->email=$row['email'];
                $add->state=$stateName->id;
                $add->lga=$row['lga'];
                $add->ward=$row['ward'];
                $add->cell=$row['cell'];
                $add->address=$row['address'];
                $add->fb=$row['fb'];
                $add->insta=$row['insta'];
                $add->twitter=$row['twitter'];
                $add->is_voter=$row['is_voter'];
                $add->is_pvc=$row['is_pvc'];
                $add->save();
            } else {
                $addAnotherCoordinator = new AnotherCoordinator;
                $addAnotherCoordinator->fname=$row['fname'];
                $addAnotherCoordinator->mname=$row['mname'];
                $addAnotherCoordinator->lname=$row['lname'];
                $addAnotherCoordinator->mobile=$row['mobile'];
                $addAnotherCoordinator->email=$row['email'];
                $addAnotherCoordinator->save();
            }
        } else if(Session::get('type') == "lga") {
            $lgaName = LGACoordinator::where('id', $userLoginID)->first();

            $add = array();
            if($lgaName->fname == $row['lga']) {
                $stateName = StateCoordinator::where('id', $lgaName->state_id)->first();
                if($stateName->fname == $row['state']) {
                    $dateGenerate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']);
                    $date = \Carbon\Carbon::parse($dateGenerate);
                    $add=new Voter;
                    $add->fname=$row['fname'];
                    $add->mname=$row['mname'];
                    $add->lname=$row['lname'];
                    $add->gender=$row['gender'];
                    $add->dob=$date->format('Y-m-d');
                    $add->mobile=$row['mobile'];
                    $add->is_mobile=$row['is_mobile'];
                    $add->email=$row['email'];
                    $add->state=$stateName->id;
                    $add->lga=$lgaName->id;
                    $add->ward=$row['ward'];
                    $add->cell=$row['cell'];
                    $add->address=$row['address'];
                    $add->fb=$row['fb'];
                    $add->insta=$row['insta'];
                    $add->twitter=$row['twitter'];
                    $add->is_voter=$row['is_voter'];
                    $add->is_pvc=$row['is_pvc'];
                    $add->save();
                } else {
                    $addAnotherCoordinator = new AnotherCoordinator;
                    $addAnotherCoordinator->fname=$row['fname'];
                    $addAnotherCoordinator->mname=$row['mname'];
                    $addAnotherCoordinator->lname=$row['lname'];
                    $addAnotherCoordinator->mobile=$row['mobile'];
                    $addAnotherCoordinator->email=$row['email'];
                    $addAnotherCoordinator->save();
                }
            } else {
                $addAnotherCoordinator = new AnotherCoordinator;
                $addAnotherCoordinator->fname=$row['fname'];
                $addAnotherCoordinator->mname=$row['mname'];
                $addAnotherCoordinator->lname=$row['lname'];
                $addAnotherCoordinator->mobile=$row['mobile'];
                $addAnotherCoordinator->email=$row['email'];
                $addAnotherCoordinator->save();
            }
        } else if(Session::get('type') == "ward") {
            $wardName = WardCoordinator::where('id', $userLoginID)->first();

            $add = array();
            if($wardName->fname == $row['ward']) {
                $stateName = StateCoordinator::where('id', $wardName->state_id)->first();
                if($stateName->fname == $row['state']) {
                    $lgaName = LGACoordinator::where('id', $wardName->lga_id)->first();
                    if($lgaName->fname == $row['lga']) {
                        $dateGenerate = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']);
                        $date = \Carbon\Carbon::parse($dateGenerate);
                        $add=new Voter;
                        $add->fname=$row['fname'];
                        $add->mname=$row['mname'];
                        $add->lname=$row['lname'];
                        $add->gender=$row['gender'];
                        $add->dob=$date->format('Y-m-d');
                        $add->mobile=$row['mobile'];
                        $add->is_mobile=$row['is_mobile'];
                        $add->email=$row['email'];
                        $add->state=$stateName->id;
                        $add->lga=$lgaName->id;
                        $add->ward=$wardName->id;
                        $add->cell=$row['cell'];
                        $add->address=$row['address'];
                        $add->fb=$row['fb'];
                        $add->insta=$row['insta'];
                        $add->twitter=$row['twitter'];
                        $add->is_voter=$row['is_voter'];
                        $add->is_pvc=$row['is_pvc'];
                        $add->save();
                    } else {
                        $addAnotherCoordinator = new AnotherCoordinator;
                        $addAnotherCoordinator->fname=$row['fname'];
                        $addAnotherCoordinator->mname=$row['mname'];
                        $addAnotherCoordinator->lname=$row['lname'];
                        $addAnotherCoordinator->mobile=$row['mobile'];
                        $addAnotherCoordinator->email=$row['email'];
                        $addAnotherCoordinator->save();
                    }
                } else {
                    $addAnotherCoordinator = new AnotherCoordinator;
                    $addAnotherCoordinator->fname=$row['fname'];
                    $addAnotherCoordinator->mname=$row['mname'];
                    $addAnotherCoordinator->lname=$row['lname'];
                    $addAnotherCoordinator->mobile=$row['mobile'];
                    $addAnotherCoordinator->email=$row['email'];
                    $addAnotherCoordinator->save();
                }
            } else {
                $addAnotherCoordinator = new AnotherCoordinator;
                $addAnotherCoordinator->fname=$row['fname'];
                $addAnotherCoordinator->mname=$row['mname'];
                $addAnotherCoordinator->lname=$row['lname'];
                $addAnotherCoordinator->mobile=$row['mobile'];
                $addAnotherCoordinator->email=$row['email'];
                $addAnotherCoordinator->save();
            }
        }

        return $add;
    }
}