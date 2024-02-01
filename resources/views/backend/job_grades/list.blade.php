@extends('backend.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Job Grades</h1>
                </div><!-- /.col -->
                <div class="col-sm-6" style="text-align: right">

                    <br>
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ url('admin/job_grades/add')}}" class="btn btn-primary">Add Job Grades</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Job Grades List</div>
                        </div>

                    </div>
                    @include('_message')

                </section>
            </div>
        </div>
    </section>
</div>
@endsection


