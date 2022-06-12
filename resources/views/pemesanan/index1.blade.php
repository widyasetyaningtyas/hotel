@extends('layout.admin')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pemesanan</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">DataTables Example</h6>
                        </div>
                        <div class="col-md-6">
                            <a href="{{url('pencarian')}}" class="btn btn-danger" style="margin: 10px;">Pencarian <i class="fas fa-search fa-sm"></i></a>
                        </div>
                        <div class="card-body" style="margin-top: -10px;">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pemesan</th>
                                            <th>Nama Tamu</th>
                                            <th>Type Kamar</th>
                                            <th>Tgl Check-in</th>
                                            <th>Tgl Check-out</th>
                                            <th>Jumlah Kamar</th>
                                            <th>Total Harga</th>
                                            <th>Status</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($query as $data)
                                            <form class="user" action="{{url('/pemesanan1-update-'.$data->id_pemesanan)}}" method="POST">
                                                {{csrf_field()}}
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data->nama_pemesan}}</td>
                                                <td>{{$data->nama_tamu}}</td>
                                                <td>{{$data->type_kamar}}</td>
                                                <td>{{$data->tgl_cekin}}</td>
                                                <td>{{$data->tgl_cekout}}</td>
                                                <td>{{$data->jumlah_kamar}}</td>
                                                <td>Rp. {{number_format($data->total_harga)}}</td>
                                                @if($data->status=='Cekin')
                                                <td>
                                                    <button class="btn btn-sm btn-primary">{{$data->status}}</button>
                                                </td>
                                                @else
                                                <td>
                                                    <button class="btn btn-sm btn-success">{{$data->status}}</button>
                                                </td>
                                                @endif
                                                <td>
                                                    <button type="submit" class="btn btn-sm btn-warning">Cekout</button>
                                                    <a href="{{url('/pemesanan-show-'.$data->id_pemesanan)}}" class="btn btn-sm btn-secondary"><span class="fa fa-eye fa-sm"></span></a>
                                                </td>
                                            </form>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
@endsection