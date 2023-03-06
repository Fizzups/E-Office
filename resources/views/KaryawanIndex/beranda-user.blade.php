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

		<div class="main-panel-mobile">
			<div class="content-mobile">
				<div class="panel-header bg-cover">
					<div class="page-inner py-5">
						<div class="col-md-12 align-items-md-center flex-column flex-md-row">
							{{-- @foreach ($karyawan as $item) --}}
							<div class="acc-mobile">
								<img src="/assets/img/chadengle.jpg" class="avatar-mobile img-fluid" alt="...">
								<h2 class="text-white fw-bold">{{ $user->nama }}</h2>
								<h5 class="text-white op-8 mb-2">{{ $karyawan->divisi }}</h5>
							</div>
							{{-- @endforeach --}}
						</div>
					</div>
				</div>
				<div class="page-inner mt--6">
					<div class="row d-flex justify-content-center mt--2">
						<div class="col-sm-6">
							<div class="card-mobile full-height" style="margin-bottom: 100px;">
								<div class="card-body pb-4">
									<div class="card-header" style="background-color: #fff">
                                        <h4 class="fw-bold">PENGUMUMAN</h4>
										<p>Libur Nasional</p>
										<p>Hari Buruh : 1 Mei 2023</p>
                                    </div>
									<div class="col-sm-12 d-flex justify-content-around pb-2 pt-4">
                                        <div class="col-sm-4 px-2 pb-2 pb-md-0 text-center">
											{{-- <a href="beranda-absensi-user"> --}}
												
												<form id="absen" action="{{ route('absensi',['id'=>$user->id]) }}" method="get">
													@csrf
													<button type="submit" class="col-md-12 btn btn-white btn-square-md shadow bg-white absen" style="border-radius: 20px;">
														<h1><i class="fa-solid fa-fingerprint text-orange"></i></h1>
														<h5>Absensi</h5>
													</button>
												
												</form>
											</a>                                         
                                        </div>
                                        <div class="col-sm-4 px-2 pb-2 pb-md-0 text-center">
											<a href="form-perizinan-user">
												<button class="col-md-12 btn btn-square-md shadow bg-white" style="border-radius: 20px;"> 
													<h1><i class="fa-solid fa-id-card text-orange"></i></h1>
													<h5>Izin/Cuti</h5>
												</button>
											</a>                                       
                                        </div>
                                    </div>
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
						<a href="{{ route('accountUser',['id'=>$user->id]) }}" class="nav-link">
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
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});

			$('.btnDelete').click(function (e) {
				e.preventDefault();

				swal({
					title: "Yakin?",
					text: "Anda akan menghapus data ini!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
					})
					.then((willDelete) => {
					if (willDelete) {
						swal("Data ini telah dihapus!", {
						icon: "success",
						});
					} else {
						swal("Data ini tidak jadi dihapus!");
					}
				});
			});

			
		});
	</script>
</body>
</html>