@extends('admin.layout.frame')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3><a href="{{ route('admin.ambulance.index') }}">Ambulance</a></h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.ambulance.index') }}">Ambulance</a></li>
                            <li class="breadcrumb-item active">Ambulance Edit Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h1 class="card-title">Ambulance Edit Information</h1>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {!! Form::model($data['row']->id,[
                                    'url'=>route('admin.ambulance.update',$data['row']->id),
                                    'enctype'=>'multipart/form-data',
                                    'id'=>'edit-form']
                                   ) !!}

{{--                                <form action="{{route('ambulance.update',$data['row']->id)}}" method="POST" enctype="multipart/form-data">--}}
{{--                                    <form class="hidden" ></form>--}}
{{--                                    @csrf--}}
                                    @method('PUT')
                                {!! Form::hidden('id',$data['row']->id) !!}
                                    @include('admin.ambulance.form')
                                 {!! Form::close() !!}
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

