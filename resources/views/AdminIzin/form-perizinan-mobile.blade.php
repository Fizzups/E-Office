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
				<div class="page-inner">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8">
                            <div class="card card-mobile">
                                    <div class="mb-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <h2 class="">Pengajuan Perizinan</h2>
                                            <a href="javascript:history.back()" class="text-danger ml-auto"><i class="fa-solid fa-xmark fw-bold"></i></a>
                                        </div>
                                    </div>
                            </div>
							<div class="card card-mobile">
								<div class="card-body">
                                    <form id="add_Izin" action={{ url("/data-perizinan-karyawan") }} method="POST">
                                        @csrf
                                        <div class="row ">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="divisi">Nama</label>
                                                    <input type="text" id="nama" placeholder="" value="{{ old('nama') }}"
                                                    class="form-control @error('nama') is-invalid @enderror">
                                                    @error('nama')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group ">
                                                    <label for="divisi">Divisi</label>
                                                    <input type="text" id="divisi" placeholder="" value="{{ old('divisi') }}"
                                                    class="form-control @error('divisi') is-invalid @enderror">
                                                    @error('divisi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_mulai">Tanggal Mulai Izin / Cuti</label>
                                                    <input type="date" id="tgl_mulai" placeholder="" value="{{ old('tgl_mulai') }}" 
                                                    class="form-control @error('tgl_mulai') is-invalid @enderror">
                                                    @error('tgl_mulai')
                                                    <div class="text-danger">{{ $message }}</div>            
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_selesai">Tanggal Selesai Izin / Cuti</label>
                                                    <input type="date" id="tgl_selesai" placeholder="" value="{{ old('tgl_selesai') }}" 
                                                    class="form-control @error('tgl_selesai') is-invalid @enderror">
                                                    @error('tgl_selesai')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="alasan">Alasan Izin / Cuti</label>
                                                    <textarea id="alasan" rows="3" value="{{ old('alasan') }}" 
                                                    class="form-control @error('alasan') is-invalid @enderror"></textarea>
                                                    @error('alasan')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="bukti">Bukti Izin</label>
                                                    <input type="file" id="exampleFormControlFile1"  value="{{ old('exampleFormControlFile1') }}" 
                                                    class="form-control-file @error('bukti') is-invalid @enderror">
                                                    @error('bukti')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="d-flex">
										<button name="send" type="submit" class="btn btn-rounded btn-warning btn-sm ml-auto">Kirim</button>
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