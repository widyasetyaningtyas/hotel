<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <style>
        .log{
            font-size: 20px;
        }
        @media(max-width: 575.98px){
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
                font-size: 15pt;
            }
            .log .isi-log{
                margin-top: 50px;
                padding: 0;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
                font-family: 'Spectral', serif;
            }
            .log{
                font-family: 'Spectral', serif;
            }
        }

        @media(min-width: 576px) and (max-width: 767.98px){
            
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: -10px;
                margin-right: -10px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 768px) and (max-width: 991.98px){
            
            .log label{
                font-size: 10pt;
                margin-bottom: 2px;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: 30px;
                margin-right: 30px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 992px) and (max-width: 1199.98px){
            
            .log label{
                font-size: 10pt;
                margin-bottom: 0;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
            }
            .log .isi-log{
                margin-top: 80px;
                margin-left: 30px;
                margin-right: 30px;
                padding: 0px;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
            }
            .log h6, .log p{
                font-size: 10pt;
            }
        }

        @media(min-width: 1200px){
            
            .log label{
                margin-bottom: 2px;
                font-size: 1.2vw;
            }
            .log .form-group{
                margin: 0;
            }
            .log .form-group input{
                margin-bottom: 5px;
                font-size: 1.2vw;
            }
            .log .isi-log{
                margin-top: 15vh;
                margin-left: 5vw;
                margin-right: 5vw;
                padding: 0px;
                background-color: white;
                color: black;
            }
            .log .isi-log button{
                margin-top: 8px;
                padding: 0;
                font-size: 1.2vw;
            }
        }


        .log .card{
            border: none;
            margin: auto ;
        }


        .log input[type=text],
        .log input[type=password]{
            color: black;
            border: 1px solid #DCDCDC;
            border-radius: 5px;
            
        }


        .w3l-ecommerce-main .product-grid2 .add-to-cart {
          color: #fff;
          background-color: black;
          font-size: 13px;
          font-weight: 600;
          text-align: center;
          padding: 7px 7px;
          left: 0;
          bottom: -100%;
          transition: all .3s;
        }

        .w3l-ecommerce-main .product-grid2 .add-to-cart:hover {
          background-color: #f44336;
          text-decoration: none;
        }

        .w3l-ecommerce-main .product-grid2:hover .add-to-cart {
          bottom: 0;
        }

    </style>
    <div class="log" id="login">
        <div class="card w3l-ecommerce-main">
            <div class="row justify-content-center">
                <div class="col-10 col-sm-8 col-md-7 col-lg-5">
                <form action="{{ route('admin') }}" method="post">
                @csrf
                <h4 class="text-left" style="letter-spacing: 2px; font-size: 20pt; font-family: Raleway-Regular, sans-serif; margin-left: 20px; margin-top: 100px;">ACCOUNT LOGIN</h4>
                <div class="card-body" style="margin-top: -15px;">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="form-group text-left mt-4">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: FontAwesome;"><strong>Email</strong></label>
                        <input style="height: 40px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 10px;" type="text" name="email" class="form-control radius form-control-sm mt-2">
                    </div>
                    <div class="form-group text-left mb-4 mt-3">
                        <label for="" style="font-size: 13pt; letter-spacing: 1px; font-family: Raleway-SemiBold;"><strong>Password</strong></label>
                        <input style="height: 40px; font-size: 13pt; letter-spacing: 0.5px; font-family: Raleway-SemiBold; border-radius: 10px;" type="password" name="password" class="form-control mt-2">
                    </div>
                </div>
                <div class="product-grid2" style="margin-top: -30px; padding-left: 20px; padding-right: 20px;">
                    <button ype="submit" class="btn btn-block transmitv-cart ptransmitv-cart add-to-cart" style="padding-top: 9px; letter-spacing: 2px; font-weight: 550; font-size: 12pt; border-radius: 0px;">LOGIN</button>
                    <p class="mt-2 text-center" style="font-family: Raleway-SemiBold;">Belum punya akun? <a href="{{ route('register') }}">Register</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>