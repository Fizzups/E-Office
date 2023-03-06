<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>E-Office IdeKite</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon-E.png" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">


	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
		<div class="main-panel">
            <div class="container-fluid py-4">
                <div class="row">
                <div class="col-md-4">
                        <div class="card card-mobile">
                        <img src="/assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-cover">
                            <div class="row justify-content-center">
                                <div class="col-4 col-lg-4 order-lg-2">
                                    <div class="mt-n4 mt--5 mb-4 mb-lg-0">
                                        <a href="javascript:;">
                                            <img src="/assets/img/GAMAL 7.png" class="rounded-circle img-fluid border border-2 border-white">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">                           
                                <div class="text-center">
                                    <h5>{{ $user->nama }}<span class="font-weight-light">, 19</span></h5>
                                    <div class="h6 font-weight-300">
                                        <i class="ni location_pin mr-2"></i>Pontianak, Indonesia
                                    </div>
                                    <div class="h6 mt-4">
                                        <i class="ni business_briefcase-24 mr-2"></i>{{ $karyawan->divisi }}
                                    </div>
                                    <div>
                                        <i class="ni education_hat mr-2"></i>Politeknik Negeri Pontianak
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-account">
                            <div class="card-header pb-0" style="background-color: #fff; border-radius: 15px 15px 0px 0px" >
                            <div class="d-flex align-items-center pb-3">
                                <h2 class="mb-0 fw-bold">Edit Profil</h2>
                                <button class="btn btn-primary btn-sm ml-auto btnUbah" style="margin-right: 10px">Ubah</button>
                                <form action="{{route('logout')}}" method="get">
                                    @csrf
                                    <button class="btn btn-primary btn-sm ml-auto">Logout</button>
                                </form>
                                
                            </div>
                            </div>
                            <div class="card-body">
                            <p class="text-uppercase text-sm">Informasi Akun</p>
                            <form id="info_update" action="{{ route('updateAccount') }}" method="post">@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama</label>
                                        <input class="form-control" type="text" name="nama" value="{{ $user->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" name="username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Divisi</label>
                                        <input class="form-control" type="text" readonly value="{{ $karyawan->divisi }}">
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Informasi Kontak</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $karyawan->alamat }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kota</label>
                                        <input class="form-control" type="text" readonly value="Pontianak">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Negara</label>
                                        <input class="form-control" type="text" readonly value="Indonesia">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kode Pos</label>
                                        <input class="form-control" type="text" readonly value="437300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
                    
                        <div class="card-account" style="margin-bottom: 80px">
                            <div class="card-header pb-0" style="background-color: #fff; border-radius: 15px 15px 0px 0px" >
                            <div class="d-flex align-items-center pb-3">
                                <h2 class="mb-0 fw-bold">Pengaturan Akun</h2>
                                <button class="btn btn-primary btn-sm ml-auto btnUbah">Ubah</button>
                            </div>
                            </div>
                            <div class="card-body">                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password Lama</label>
                                        <input class="form-control" type="password" value="Pontianak">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Password Baru</label>
                                        <input class="form-control" type="password" value="Indonesia">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
			<div class="modal fade" id="notifikasi" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h2 class="modal-title">
                                <span class="fw-light">Inbox</span> 
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <li class="notification-items"> <i class="fa-regular fa-circle-check text-success notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Diterima</p>
                                    </div>
                                    <p>Izin anda selama 3 hari diterima</p>
                                    <time class="notification-time-label">2 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="notification-items"><i class="fa-regular fa-circle-xmark text-danger notification-icon"></i>
                                <div class="notification-chat">
                                    <div class="fw-bold">
                                        <p>Ditolak</p>
                                    </div>
                                    <p>Anda tidak dapat izin lebih dari 3 hari</p>
                                    <time class="notification-time-label">3 hari yang lalu</time>
                                </div>
                            </li>
                        </div>
                        <div class="modal-footer">
                        <a href="#" style="text-decoration: underline">Hapus semua notifikasi</a>
                        </div>
                    </div>
                </div>
            </div>

			<footer class="footer-mobile">
				<!-- Bottom Navbar -->
				<nav class="card-bar navbar fixed-bottom navbar-dark bg-orange navbar-expand">
					<ul class="navbar-nav nav-justified w-100">
					<li class="nav-item">
						<a href="#" class="nav-link" data-toggle="modal"  data-target="#notifikasi">
						<i class="fa-solid fa-bell"></i><br>
						Notification
						</a>
					</li>
					<li class="nav-item ">
						<a href="beranda-user/{{ $user->id }}" class="nav-link">
						<i class="fa-solid fa-house-chimney"></i><br>
						Home
						</a>
					</li>
					<li class="nav-item ">
						<a href="account-user" class="nav-link">
						<i class="fa-solid fa-user"></i><br>
						Account
						</a>
					</li>
					</ul>
				</nav>
			</footer>
		</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	
	<script >
		$(document).ready(function() {
			$('.btnUbah').click(function (e) {
				e.preventDefault();
				swal("Berhasil!", "Data telah diedit!", "success");
                $('#info_update').submit();
			});
		});
	</script>
</body>
</html>