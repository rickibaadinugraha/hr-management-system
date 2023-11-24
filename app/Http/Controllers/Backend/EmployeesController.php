<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeesController extends Controller{
    public function index(Request $request) {
       return view('backend.employees.list');
    }

    public function add(Request $request) {
        return view('backend.employees.add');
    }

    public function add_post(Request $request){
        dd($request->all());
    }
}

?>
