@extends('dashboard')
@section('artikel')

<section class="w3l-stats">
    <div class="main-w3 py-5">
        <div class="container py-lg-3">
            <div class="row">
                <div class="col-md-12 title">
                    <h3 class="title-big">Who do you place the order for</h3>
                </div>

                <form class="tamu" action="{{url('/konfirmasi')}}" method="POST">
                    {{csrf_field()}}
                    <!-- /main-slider -->
                    <div class="w3l-availability-form" id="booking">
                        <!-- /w3l-availability-form-section -->
                        <div class="w3l-availability-form-main py-5">
                            <div class="container pt-lg-3 pb-lg-5">
                                <div class="forms-top">
                                    <div class="form-right">
                                        <div class="form-inner-cont">
                                            <div class="row book-form">
                                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                                    <label>Check-in Date</label>
                                                    <input type="date" name="tgl_cekin" id="tgl_cekin" placeholder="Date" required="">
                                                </div>
                                                <div class="form-input col-md-4 col-sm-6 mt-3">
                                                    <label>Check-out Date</label>
                                                    <input type="date" name="tgl_cekout" id="tgl_cekout" placeholder="Date" required="">
                                                </div>
                                                <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                                                    <label>Jumlah Kamar</label>
                                                    <input type="number" name="jumlah_kamar" id="jumlah_kamar" onkeyup="total()" placeholder="" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: -50px">
                        <div class="form-group">
                            <label>Nama Pemesan</label>
                            <input type="text" class="form-control form-control-user" id="nama_pemesan" name="nama_pemesan" placeholder="Nama Pemesan" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <label>Nomor Handphone</label>
                            <input type="text" class="form-control form-control-user" id="no_telp" name="no_telp" placeholder="Nomor Handphone" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" style="height: 100px; font-size: 0.8rem;"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Nama Tamu</label>
                            <input type="text" class="form-control form-control-user" id="nama_tamu" name="nama_tamu" placeholder="Nama Tamu" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <label>Type Kamar</label>
                            <input type="text" class="form-control form-control-user" name="" value="{{$kamar->type_kamar}}" readonly="" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                            <input type="text" name="id_kamar" value="{{$kamar->id_kamar}}" hidden="">
                        </div>
                        <div class="form-group">
                            <label>Sisa Kamar</label>
                            <input type="text" class="form-control form-control-user" name="" value="{{$kamar->stok_kamar}}" readonly="" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                        <div class="form-group">
                            <label>Harga Kamar</label>
                            <input type="text" class="form-control form-control-user" name="" id="harga_kamar" value="{{$kamar->harga}}" readonly="" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                            <input type="text" name="harga_kamar" hidden="" value="{{$kamar->harga}}" readonly="">
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input type="text" class="form-control form-control-user" name="total_harga" id="total_harga" style="font-size: 0.8rem; border-radius: 10rem; padding: 1.5rem 1rem;">
                        </div>
                    </div>
                    <div class="box-footer mt-4">
                        <button type="submit" class="btn btn-primary btn-user">Konfirmasi Pesanan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
<script type="text/javascript" src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript">
    function total()
      {
          var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
          var firstDate = new Date($("#tgl_cekin").val());
          var secondDate = new Date($("#tgl_cekout").val());
          diffDays = Math.round(Math.round((secondDate.getTime() - firstDate.getTime()) / (oneDay))); 
          jml_kmr = document.getElementById('jumlah_kamar').value;
          hrg = document.getElementById('harga_kamar').value;

          var total_harga = diffDays*jml_kmr*hrg;

          document.getElementById('total_harga').value=total_harga;
        
      }
</script>