<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Faker\Provider\PhoneNumber;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class applicationController extends Controller
{
    public function read(){
        return Application::all();
    }

    public function create(Request $request)
    {
        $application = new Application();
        $application->name = $request['name'];
        $application->phone = $request['phone'];
        $application->nid = $request['nid'];
        $application->address = $request['address'];
        $application->bday = $request['bday'];
        $application->gender = $request['gender'];
        $application->app_type = $request['app_type'];
        $application->loan_type = $request['loan_type'];
        $application->dep_type = $request['dep_type'];
        $application->dep_scheme_type = $request['dep_scheme_type'];
        $application->save();
        return $application;

    }

    public function show(){
        return view('showAll', ['all'=>Application::all()]);
    }

    public function sendSMS($number, $branch){
//        return $_GET['startDate'];
        $nexmo = app('Nexmo\Client');

        $nexmo->message()->send([
            'to'   => '88'.$number,
            'from' => '8801817538289',
            'text' => 'Appear physically to our '.$branch.' from date '.$_GET['startDate'].' to date '.$_GET['endDate']
        ]);
        //Session::flash('success', 'SMS Sent Successfully');
        return redirect('/sms-sent-to-the-client');
    }

    public function redirectSMS(){
        return view('smsSent');
    }
}
