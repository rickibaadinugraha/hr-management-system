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
              <li class="breadcrumb-item"><a href="#">Add</a></li>
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

                        <form accept="{{ url('admin/employees/add')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">First Name <span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{ old('name')}}" class="form-control" required placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Last Name <span style="color: red"></span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="text" name="last_name" value="{{ old('last_name')}}" class="form-control" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Email ID<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <span style="color: red">{{ $errors->first('email')}}</span>
                                        <input type="email" name="email" value="{{ old('email')}}" class="form-control" required placeholder="Enter Email ID">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Phone Number <span style="color: red"></span>
                                    </label>
                                    <div class="col-sm-10">
                                        <span style="color: red">{{ $errors->first('phone_number')}}</span>
                                        <input type="number" name="phone_number" value="{{ old('phone_number')}}" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Hire Date<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="hire_date" value="{{ old('hire_date')}}" class="form-control required" required placeholder="Enter Hire Date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Job ID<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="job_id" id="">
                                            <option value="">Select Job Title </option>
                                            @foreach ($getJobs as $value_job)
                                            <option value="{{ $value_job->id}}">{{ $value_job->job_title }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Salary<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="salary" value="{{ old('salary')}}" class="form-control" required placeholder="Enter Salary">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable">Commisson PCT<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="number" name="commission_pct" value="{{ old('commission_pct')}}" class="form-control" required placeholder="Enter Commission PCT">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Manager Name<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="manager_id" id="">
                                            <option value="">Select Manager Name :</option>
                                            <option value="1">Robert Albert</option>
                                            <option value="2">Ibkrar</option>
                                            <option value="3">Yuda Ragil</option>
                                            <option value="4">Indra Kento</option>
                                            <option value="5">Amirullah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-lable" required >Department Name<span style="color: red">*</span>
                                    </label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="department_id" required>
                                            <option value="">Select Department Name</option>
                                            <option value="1">UI/UX Designer</option>
                                            <option value="2">Backend Developer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{ url('admin/employees')}}" class="btn btn-default">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection
