<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\JobsModel;
use Illuminate\Http\Request;
use App\Models\JobHistoryModel;
use App\Exports\JobsHistoryExport;
use Maatwebsite\Excel\Facades\Excel;

class JobsHistoryController extends Controller
{
    public function index(Request $request) {
        $data['getRecord'] = JobHistoryModel::getRecord($request);
        return view('backend.job_history.list', $data);
    }

    public function job_history_export(Request $request) {
        return Excel::download(new JobsHistoryExport, 'job_history.xlsx');
    }

    public function add() {
        $data['getJobs'] = JobsModel::get();
        $data['getEmployee'] = User::where('is_role', '=', '0')->get();
        return view('backend.job_history.add', $data);
    }

    public function add_post(Request $request) {
        // dd($request->all());
        $user = request()->validate([
            'employee_id'   => 'required',
            'start_date'    => 'required',
            'end_date'      => 'required',
            'job_id'        => 'required',
            'department_id' => 'required'
        ]);

        $user                   = new JobHistoryModel;
        $user->employee_id      = trim($request->employee_id);
        $user->start_date       = trim($request->start_date);
        $user->end_date         = trim($request->end_date);
        $user->job_id           = trim($request->job_id);
        $user->department_id    = trim($request->department_id);
        $user->save();

        return redirect('admin/job_history')->with('success', 'Job history successfully add');
    }

    public function edit($id) {
        $data['getJobs'] = JobsModel::get();
        $data['getEmployee'] = User::where('is_role', '=', '0')->get();
        $data['getRecord'] = JobHistoryModel::find($id);
        return view('backend.job_history.edit', $data);
    }

    public function update($id, Request $request) {
        $user                   = JobHistoryModel::find($id);
        $user->employee_id      = intval(trim($request->employee_id));
        $user->start_date       = trim($request->start_date);
        $user->end_date         = trim($request->end_date);
        $user->job_id           = trim($request->job_id);
        $user->department_id    = trim($request->department_id);
        $user->save();

        return redirect('admin/job_history')->with('success', 'Job history successfully update');
    }

    public function delete($id) {
        $user = JobHistoryModel::find($id);
        $user->delete();

        return redirect()->back()->with('error', 'Record succesfully delete');
    }

}
