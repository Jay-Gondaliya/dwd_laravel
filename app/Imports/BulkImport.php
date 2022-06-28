<?php

namespace App\Imports;

use App\Models\Voter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $add=new Voter;
        $add->fname=$row['fname'];
        $add->mname=$row['mname'];
        $add->lname=$row['lname'];
        $add->gender=$row['gender'];
        // $add->dob=$row['dob'];
        $add->mobile=$row['mobile'];
        $add->is_mobile=$row['is_mobile'];
        $add->email=$row['email'];
        $add->state=$row['state'];
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

        return $add;
    }
}
