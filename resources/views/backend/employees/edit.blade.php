@extends('backend.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Employees</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit</a></li>
              <li class="breadcrumb-item active">Employees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Add Employees</h3>
                        </div>

                        <form action="{{ url('admin/employees/edit/' .$getRecord->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">First Name <span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ $getRecord->name}}" class="form-control" required placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Last Name<span style="color: red"></span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="last_name" value="{{ $getRecord->last_name }}" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Email ID<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <span style="color: red">{{ $errors->first('email')}}</span>
                                        <input type="email" name="email" value="{{ $getRecord->email }}" class="form-control" required placeholder="Enter Email ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Phone Number <span style="color: red"></span>
                                    </label>
                                    <div class="col-sm-10">
                                        <span style="color: red">{{ $errors->first('phone_number')}}</span>
                                        <input type="number" name="phone_number" value="{{ $getRecord->phone_number }}" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Hire Date<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="hire_date" value="{{ $getRecord->hire_date}}" class="form-control required" required placeholder="Enter Hire Date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Job ID<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="job_id" id="">
                                            <option value="">Select Job Title</option>
                                            @foreach ($getJobs as $value_job)
                                                <option value="{{ $value_job->id }}">{{ $value_job->job_title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Salary<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="salary" value="{{ $getRecord->salary}}" class="form-control" required placeholder="Enter Salary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Commisson PCT<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="commission_pct" value="{{ $getRecord->commission_pct }}" class="form-control" required placeholder="Enter Commission PCT">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Manager Name<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="manager_id" id="">
                                            <option value="">Select Manager Name</option>
                                            <option {{ ($getRecord->manager_id == 1) ? 'selected' : ''}} value="1">Robert Albert</option>
                                            <option {{ ($getRecord->manager_id == 2) ? 'selected' : ''}} value="2">Ibkrar</option>
                                            <option {{ ($getRecord->manager_id == 3) ? 'selected' : ''}} value="3">Yuda Ragil</option>
                                            <option {{ ($getRecord->manager_id == 4) ? 'selected' : ''}} value="4">Indra Kento</option>
                                            <option {{ ($getRecord->manager_id == 5) ? 'selected' : ''}} value="5">Amirullah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Department Name<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department_id" id="">
                                            <option value="">Select Department Name</option>
                                            <option {{ ($getRecord->department_id == 1) ? 'selected' : ''}} value="1">UI/UX Designer</option>
                                            <option {{ ($getRecord->department_id == 2) ? 'selected' : ''}} value="2">Frontend Developer</option>
                                            <option {{ ($getRecord->department_id == 3) ? 'selected' : ''}} value="3">Backend Developer</option>
                                            <option {{ ($getRecord->department_id == 4) ? 'selected' : ''}}value="4">QA Automation Tester</option>
                                            <option {{ ($getRecord->department_id == 5) ? 'selected' : ''}} value="5">IT Support</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('admin/employees')}}" class="btn btn-default">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
