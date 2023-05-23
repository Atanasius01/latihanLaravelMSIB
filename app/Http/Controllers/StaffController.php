<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Staff;
class StaffController extends Controller
{
    public function index(){
        $ar_staff = DB::table('staff')->get(); //query builder
 $ar_staff = Staff::all(); //query eloquent
 return view('admin.staff.index', compact('ar_staff'));
    }
}
