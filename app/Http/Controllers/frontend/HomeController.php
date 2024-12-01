<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $doctor = Doctor::all();   ata diyeo kaj kora jabe

        $doctors = Doctor::orderBy('name')->get();
        // dd('$doctors'); ata diye check kora jabe je  data asche ki na
        $specialists = Specialist::orderBy('name')->limit(5)->get();
        return view('frontend.home', compact('doctors','specialists'));


        // return view('frontend.home', compact('specialist'));
        

    }
    
}
