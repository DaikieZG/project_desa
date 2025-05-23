<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Pengaduan Masyarakat - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-left">

            <div class="col-xl-5 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Masukan Biodata!</h1>
                                    </div>
                                    <form method="POST" action="proses_register.php" class="user">
                                        <div class="form-group">
                                            <input name="nik" type="text" id="nik"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Masukan NIK Anda..." required>
                                        </div>
                                        <div class="form-group">
                                            <input name="nama" type="text" id="nama"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Masukan Nama Anda..."
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input name="username" type="text" id="username"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Masukan Username Anda..."
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" id="password"
                                                class="form-control form-control-user" placeholder="Masukan Password"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input name="telp" type="text" id="telp"
                                                class="form-control form-control-user" id="exampleInputEmail"
                                                aria-describedby="emailHelp" placeholder="Masukan Nomor Telepon Anda..."
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        <hr>
                                        <a href="index.php" class="btn btn-success btn-user btn-block">
                                            <i class="fa fa-laptop fa-fw"></i> Sudah punya akun...? Silahkan Login
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>