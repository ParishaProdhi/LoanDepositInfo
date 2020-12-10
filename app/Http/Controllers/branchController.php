<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;
use Illuminate\Support\Facades\DB;

class branchController extends Controller
{

    public function read(){
        return Branch::all();
    }

    public function getEmailAddress($union){
        return Branch::select('BRANCH_NAME', 'Email_address')->where('UNION_NAME', $union)->get();
    }


}
