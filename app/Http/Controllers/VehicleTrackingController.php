<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB, Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;

class VehicleTrackingController extends Controller
{

    public function contactUsFormMailSend(Request $request)
    {
        return view('services.vehicle-tracking', ['page' => 'vehicle-tracking', 'current' => 'service']);
    }
}
