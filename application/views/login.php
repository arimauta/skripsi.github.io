<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>SISTEM PAKAR DIAGNOSIS DIABETES  MELLITUS </title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Custom styles for this template-->
        <link href="<?= base_url('assets/')?>css/sb-admin-2.min.css" rel="stylesheet" />
		<link rel="shortcut icon" href="<?= base_url('assets/')?>img/puskesmas.jpg" type="image/z-icon">
		<link rel="icon" href="<?= base_url('assets/')?>img/puskesmas.jpg" type="image/z-icon">
    </head>

    <body class="bg-gradient-success">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white shadow-lg pb-3 pt-3 font-weight-bold">
             <div class="textHeader">
        <h1 class="art-logo-name"><center>Sistem Pakar </center> </h1>
        <h2 class="art-logo-name"><center> Diagnosis Diabetes Melitus Menggunakan Metode Simple Additive Weighting(SAW)</center></h2>
        </div>
    </div>
        </nav>

        <div class="container">
            <!-- Outer Row -->
            <div class="row d-plex justify-content-between mt-2">
                <div class="col-xl-5 col-lg-5 col-md-5 mt-5">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-bleu-900 mb-4">Login Account</h1>
                                            <img src="assets/img/logounpam.png" alt="" width="30%" style="margin-bottom: 15px;">
                                        </div>
										<?php $error=$this->session->flashdata('message');
										if($error) {?>
										<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<?php echo $error; ?>                    
										</div>
										<?php }?> 

                                        <form class="user" action="<?php echo site_url('Login/login'); ?>" method="post">
                                            <div class="form-group">
                                                <input required autocomplete="off" type="text" class="form-control form-control-user" id="exampleInputUser" placeholder="Username" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <input required autocomplete="off" type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" />
                                            </div>
                                            <button name="submit" type="submit" class="btn btn-success btn-user btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Masuk</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="col-xl-6 col-lg-6 col-md-6 mt-5">
                    <div class="card bg-none o-hidden border-0 my-5 text-white" style="background: none;">
                        <div class="text-justify card-body p-0">
                            <h4 style="font-weight: 800;"> Sistem Pakar Diagnosis Diabetes Mellitus</h4>
                            <p class="pt-4">
                                Sistem Pakar merupakan suatu sistem informasi spesifik yang ditujukan untuk membantu manajemen dalam mengambil keputusan yang berkaitan dengan persoalan yang bersifat semi terstruktur. Diabetes merupakan penyakit kronis yang dapat berlangsung seumur hidup. DM mempengaruhi kualitas sumber daya manusia dan meningkatkan biaya pengobatan. Namun, kesadaran masyarakat akan dampak DM masih rendah dan banyak masyarakat yang tidak mengetahui bahwa dirinya berisiko terkena penyakit diabetes.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/')?>js/sb-admin-2.min.js"></script>
    </body>
</html>


