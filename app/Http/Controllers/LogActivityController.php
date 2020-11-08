<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogActivityModel;

class LogActivityController extends Controller
{
    //
    public function index()
    {
        $data=LogActivityModel::getActivityLog();
        // echo "<pre>";
        // print_r($data);
        // exit;
        return view('LogActivityScreens/index', ['data' => $data]);
       
    }

}
