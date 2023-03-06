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
        <div class="content">
				<div class="page-inner mb-5">
					<div class="row d-flex justify-content-center mt-5">
						<div class="col-md-5 ">
							<a href="#">
								<div class="card card-home mt-3">
								<img src="{{$datang}}" class="img-fluid" alt="Responsive image"></a>
										<div class="d-flex align-items-center">
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-5 ">
							<a href="#">
								<div class="card card-home mt-3">
								<img src="/assets/img/bg-pulang.png" class="img-fluid" alt="Responsive image"></a>
										<div class="d-flex align-items-center">
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-5 ">
							<a href="#">
								<div class="card card-home mt-3">
								<img src="/assets/img/bg-mulai-istirahat.png" class="img-fluid" alt="Responsive image"></a>
										<div class="d-flex align-items-center">
										</div>
								</div>
							</a>
						</div>
						<div class="col-md-5 ">
							<a href="#">
								<div class="card card-home mt-3">
								<img src="/assets/img/bg-selesai-istirahat.png" class="img-fluid" alt="Responsive image"></a>
										<div class="d-flex align-items-center">
										</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer-mobile">
				<!-- Bottom Navbar -->
				<nav class="card-bar navbar fixed-bottom navbar-dark bg-orange navbar-expand ">
					<ul class="navbar-nav nav-justified w-100">
					<li class="nav-item">
						<a href="#" class="nav-link" data-toggle="modal"  data-target="#notifikasi">
						<i class="fa-solid fa-bell"></i><br>
						Notification
						</a>
					</li>
					<li class="nav-item ">
						<a href="beranda-user" class="nav-link">
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
			});
		});
	</script>
</body>
</html>