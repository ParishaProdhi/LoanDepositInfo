<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Faker\Provider\PhoneNumber;
use Illuminate\Http\Request;

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

    public function sendSMS($number){
        $nexmo = app('Nexmo\Client');

        $nexmo->message()->send([
            'to'   => '14845551244',
            'from' => '16105552344',
            'text' => 'Using the instance to send a message.'
        ]);
        return $_GET['startDate'];
    }
//    public function show_types(){
//        return json_encode(DB::select('select * from office_type'));
//    }
//    public function show_list($type_id){
//        return json_encode(DB::select('select * from offices where type_id= :id', [
//                'id' => $type_id
//            ]
//        ));
//    }
//    public function search($search_string){
//        return json_encode(DB::select('Select * from offices where lower(address) like :add_str or name like :name_str', [
//                'add_str' => '%'.strtolower($search_string).'%',
//                'name_str' => '%'.strtolower($search_string).'%'
//            ]
//        ));
//    }
//    public function test(){
//        return json_encode(DB::select('select name as title, address as text from offices order by name'));
//    }
}
