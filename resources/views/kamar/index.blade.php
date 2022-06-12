@extends('layout.admin')
@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Kamar</h1>
                    <a href="{{url('/kamar-create')}}" class="btn btn-danger" style="margin:10px;">Tambah Data Kamar</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Type Kamar</th>
                                            <th>Stok Kamar</th>
                                            <th>Harga</th>
                                            <th>Gambar Kamar</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    @foreach ($kamar as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->type_kamar}}</td>
                                            <td>{{$data->stok_kamar}}</td>
                                            <td>Rp. {{number_format($data->harga)}}</td>
                                            <td><img src="{{ asset('img/'. $data->gambar_kamar ) }}" alt="" height="100px;"></td>
                                            <td>
                                                <a href="{{url('/kamar-show-'.$data->id_kamar)}}" class="btn btn-sm btn-secondary"><span class="fa fa-eye fa-sm"></span></a>
                                                <a href="{{url('/kamar-edit-'.$data->id_kamar)}}" class="btn btn-sm btn-warning"><span class="fa fa-pen fa-sm"></span></a>
                                                <a href="{{url('/kamar-destroy-'.$data->id_kamar)}}" class="btn btn-sm btn-danger"><span class="fa fa-trash fa-sm"></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
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