@extends('dashboard')
@section('artikel')

<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row">
                <div class="col-md-12 title">
                    <h3 class="title-big">Complete the procedure below</h3>
                </div>
                <div class="col-md-12">
                    <form class="user" action="#" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="id_tamu" name="id_tamu" placeholder="ID Tamu" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="id_kamar" name="id_kamar" placeholder="ID Kamar" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" id="tgl_cekin" name="tgl_cekin" placeholder="Tanggal Cekin" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control form-control-user" id="tgl_cekout" name="tgl_cekout" placeholder="Tanggal Cekout" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="total_harga" name="total_harga" placeholder="Total Harga" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="status" name="status" placeholder="Status" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="box-footer mt-4">
                            <button type="submit" class="btn btn-primary btn-user">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection