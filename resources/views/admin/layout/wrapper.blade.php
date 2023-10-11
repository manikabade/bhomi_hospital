<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Patient Appointment</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_appointment']}}</span>
                                    <span>Patient Appointment</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Specialist</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_specialist']}}</span>
                                    <span>Specialist</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-exchange-alt"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-4 -->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Medical Report</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_medicalReport']}}</span>
                                    <span>Medical Report</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-file-medical"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Feedback</h3>
                                {{-- <a href="javascript:void(0);">View Report</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_feedback']}}</span>
                                    <span>Feedback</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-pen-alt"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-4 -->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Doctor</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_doctor']}}</span>
                                    <span>Doctor</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-user-tie"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>

                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Ambulance</h3>
                                {{-- <a href="javascript:void(0);">Ambulance</a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{ $data['_ambulance']}}</span>
                                    <span>Ambulance</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                        <i class="fas fa-ambulance"></i>
                    </span>
                                    {{-- <span class="text-muted">Since last week</span> --}}
                                </p>
                            </div>

                            <!-- /.d-flex -->
                        </div>

                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
