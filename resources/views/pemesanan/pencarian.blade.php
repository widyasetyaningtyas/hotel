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
                        <div class="box-body no-padding mt-4">
                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" role="search" action="{{url('pencarian')}}">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." value="{{Request::get('q')}}" name="q" id="srch-term" aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-search fa-sm"></i></button>
                                        </div>
                                    </div>
                                </form>
                        </div>                        
                        <div class="card-body">
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
                                    <tbody id="add-row">
                                        @if(isset($data))
                                        @foreach($data as $j => $row)
                                        <tr>
                                            <form class="user" action="{{url('/pemesanan1-update-'.$row->id_pemesanan)}}" method="POST">
                                                {{csrf_field()}}
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->nama_pemesan}}</td>
                                                <td>{{$row->nama_tamu}}</td>
                                                <td>{{$row->type_kamar}}</td>
                                                <td>{{$row->tgl_cekin}}</td>
                                                <td>{{$row->tgl_cekout}}</td>
                                                <td>{{$row->jumlah_kamar}}</td>
                                                <td>Rp. {{number_format($row->total_harga)}}</td>
                                                @if($row->status=='Cekin')
                                                <td>
                                                    <button class="btn btn-sm btn-primary">{{$row->status}}</button>
                                                </td>
                                                @else
                                                <td>
                                                    <button class="btn btn-sm btn-success">{{$row->status}}</button>
                                                </td>
                                                @endif
                                                <td>
                                                    <button type="submit" class="btn btn-sm btn-warning">Check-out</button>
                                                </td>
                                            </form>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="8" class="text-center">Belum ada data yang dicari</td>
                                        </tr>
                                        @endif
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