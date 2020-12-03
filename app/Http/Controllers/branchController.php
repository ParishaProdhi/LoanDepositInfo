<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class branchController extends Controller
{
    //
    public function read(){
        return Branch::select('DISTRICT_ID','DISTRICT')->distinct()->get();
        //return Branch::select('DIVISION_ID AS id', 'DIVISION as name')->distinct()->get();
    }

    public function getEmailAddress($division, $district,$upazilla, $union){
        return Branch::select('UNION_NAME')->where('UPAZILA', 'like', trim(strtoupper($upazilla)));
    }
}
