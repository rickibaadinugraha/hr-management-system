<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobGradesController extends Controller
{
    public function index(Request $request) {
        return view('backend.job_grades.list');
    }
    public function add() {
        return view('backend.job_grades.add');
    }
}
