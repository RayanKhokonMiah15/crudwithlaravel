<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>sisfo</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: black
        }
    </style>

<style>
   
    body {
        background-color: #6F4E37;
        font-family: 'Nunito', sans-serif,;
    }
    
   
    .login-card {
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6);
        background-color: #FFDDAE;
    }
    
   
    .text-center h4 {
        color: #ffffff;
        font-weight: 700;
    }
    
    
    .form-control-user {
        border-radius: 20px;
        border: 1px solid #FFF2D7;
        padding: 15px;
        background-color: #FFF2D7;
        color: #ffffff;
    }
    
    .form-control-user:focus {
        border-color: #4e73df;
        background-color: #444444;
        color: #ffffff;
    }

    
    .btn-primary {
        background-color: #A79277;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        padding: 10px;
        transition: background-color 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #74512D;
    }
    
    
    a {
        color: #4e73df;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    a:hover {
        color: #2e59d9;
    }

    .form-control-user:hover {
        background-color: #6F4E37;
    }

    h1, h4 {
        color: white
    }

    .login-image {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-image img {
 margin-right: 850px;
 margin-top: -200px;
 width: 400px;
 height: 300px;
 border-radius: 30px;
}
</style>

</head>

<body>

  <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center" style="height: 100vh;"> 
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5 login-card">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block text-center">
                                {{-- <img src="https://i.pinimg.com/originals/0d/45/cc/0d45cce4c9397bb2c957d48c3759038a.gif" alt="Profile Image" class="profile-image"> --}}
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">welcome</h1>
                                    </div>
                                    <form class="user" action="/sesi/login" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" value="{{Session::get('email')}}" placeholder="Masukan Alamat Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukan Password Anda" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">LOGIN</button>

                                        <div class="login-image">
                                            <img src="img/nyanpasu_.gif" alt="login ilustration">
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>