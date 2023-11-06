@extends('admin.layout.frame')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
{{--                        <h3><a href="{{ route('ambulance.index') }}">Ambulance</a></h3><br>--}}
                        <h3>Ambulance</h3>
                        <a class="btn btn-outline-primary " href="{{route('admin.ambulance.create')}}" role="button">Create Ambulance</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active">Ambulance</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List of Ambulance</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="col-md-12">--}}
                                {{--                                        <div class="text-center">--}}
                                {{--                                            {{ $ambulances->links() }}--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <table id="example1" class="mt-2 table table-bordered table-striped">
                                    <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Ambulance Name</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($ambulances as $ambulance)
                                        <tr>
                                            <td>{{$ambulance->id}}</td>
                                            <td>{{$ambulance->ambulance_name}}</td>
                                            <td>{{$ambulance->phone_number}}</td>

                                            <td>
                                                {!! $ambulance->status ?'<span class="badge badge-success">Active</span>':'<span class="badge badge-danger">InActive</span>' !!}
                                            </td>

                                            <td>
                                                <div class="row">
                                                    <a class="btn btn-success" href="{{route('admin.ambulance.edit',$ambulance->id)}}">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
{{--                                                    <form action="{{route('ambulance.destroy',$ambulance->id)}}" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('DELETE')--}}
{{--                                                        <button type="submit" class="btn btn-danger">--}}
{{--                                                            <i class="fa fa-trash"></i>--}}
{{--                                                        </button>--}}
{{--                                                    </form>--}}
                                                    <a href="javascript:void(0)" onclick="var c = confirm('{{ "Are you sure?" }}'); if(c){document.getElementById('delete-{{$ambulance->id}}').submit();}" class="btn btn-sm swalDefaultQuestion btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                        <form id="delete-{{$ambulance->id}}" action="{{ route('admin.ambulance.destroy',$ambulance->id) }}" method="POST"  style="display: none;">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </a>
                                                </div>

                                            </td>

                                        </tr>
                                    @empty
                                        <td colspan="13" style="text-align: center">
                                            No data found ..
                                        </td>
                                    @endforelse

                                    </tbody>
                                    {{--            <tfoot>--}}
                                    {{--            <tr>--}}
                                    {{--                <th>Rendering engine</th>--}}
                                    {{--                <th>Browser</th>--}}
                                    {{--                <th>Platform(s)</th>--}}
                                    {{--                <th>Engine version</th>--}}
                                    {{--                <th>CSS grade</th>--}}
                                    {{--            </tr>--}}
                                    {{--            </tfoot>--}}
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.card-body -->
    </div>
@endsection
@section('js')
    {{--<!-- DataTables  & Plugins -->--}}
    <!-- jQuery -->
    <script src="{{asset('backend/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('backend/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('backend/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('backend/admin/dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "lengthMenu" : [100,200,500,1000],
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
