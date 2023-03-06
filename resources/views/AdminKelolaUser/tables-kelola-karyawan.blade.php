<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>E-Office IdeKite</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../assets/img/icon-E.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['../../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    {{-- JQuery --}}
    <script src="/assets/js/core/jquery.3.2.1.min.js"></script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">


    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="orange2">

                <a href="/beranda" class="logo">
                    <img src="../assets/img/Logo e-office.png" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="orange">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/talha.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        New user registered
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file-1"></i>
                                                    <span class="text">Generated Report</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-database"></i>
                                                    <span class="text">Create New Database</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-pen"></i>
                                                    <span class="text">Create New Post</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-interface-1"></i>
                                                    <span class="text">Create New Task</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-list"></i>
                                                    <span class="text">Completed Tasks</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <i class="flaticon-file"></i>
                                                    <span class="text">Create New Invoice</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="../assets/img/mlane.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/mlane.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Muhammad Fazri</h4>
                                                <p class="text-muted">swty00@gmail.com</p><a href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tambahAkun"
                                            href="#">Tambah Akun</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#settingProfile"
                                            href="#">Pengaturan Akun</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#gantiPass"
                                            href="#">Ganti Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Muhammad Fazri
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                <li>
                                        <a href="#addAkun" data-toggle="modal" data-target="#addAkunUser">

                                            <span class="link-collapse">Tambah Akun</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#profile" data-toggle="modal" data-target="#settingProfile">

                                            <span class="link-collapse">Pengaturan Akun</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit" data-toggle="modal" data-target="#gantiPass">
                                            <span class="link-collapse">Ganti Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
						<li class="nav-item active">
							<a  href="/beranda">
                            <i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
                            <a href="/kelola-karyawan">
								<i class="fa-solid fa-address-book"></i>
                                <p>Data Karyawan</p>
                            </a>
                        </li>
						<li class="nav-item">
							<a href="/data-perizinan-karyawan">
								<i class="fa-solid fa-id-card-clip"></i>
								<p>Perizinan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/data-absensi-karyawan">
                                <i class="fa-solid fa-clipboard-user"></i>
								<p>Data Absensi</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#asset">
                                <i class="fa-solid fa-folder"></i>
								<p>Data Asset</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="asset">
								<ul class="nav nav-collapse">
									<li>
										<a href="/data-barang">
											<span class="sub-item">Data Barang</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#file">
								<i class="fa-solid fa-file-zipper"></i>
								<p>Data Arsipan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="file">
								<ul class="nav nav-collapse">
									<li>
										<a data-toggle="collapse" href="#subfile1">
											<span class="sub-item">Surat</span>
											<span class="caret"></span>
										</a>
										<div class="collapse" id="subfile1">
											<ul class="nav nav-collapse subnav">
												<li>
													<a href="#">
														<span class="sub-item">Surat Masuk</span>
													</a>
												</li>
                                                <li>
													<a href="#">
														<span class="sub-item">Surat Keluar</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="mx-4 mt-2">
                            <li class="nav-item active">
                                <a  href="# ----( LOGOUT )----">
                                <i class="fa-solid fa-chevron-left"></i>
                                    <p>Logout</p>
                                </a>
                        </li>
					</ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Modal Tambah Akun -->
        <div class="modal fade" id="addAkunUser" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header ">
						<h1 class="modal-title">
							<span class="fw-light">Tambah Akun</span> 
						</h1>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="addAkun" action={{ url('proses-registrasi') }} method="POST">
							@csrf
							<div class="row">
                                <div class="col-sm-12">
									<div class="form-group form-group-default">
										<label>Nama</label>
										<input id="addnama" name="nama" type="text" class="form-control">
									</div>
									<div class="form-group form-group-default">
										<label>Username</label>
										<input id="addusername" name="username" type="text" class="form-control">
									</div>
									<div class="form-group form-group-default">
										<label for="exampleFormControlFile1">Paswword</label>
										<input type="password" class="form-control" id="addpassword" name="password">
									</div>
								</div>
							</div>
							{{-- button --}}
							<div class="modal-footer">
								<a href="javascript:history.back()" class="btn btn-warning">Batal</a>
								<button onclick="submitAddForm()" name="" type="submit" class="btn btn-primary mr-2">Simpan</button>                        
							</div>
						</form>
						<script>
							function submitAddForm() {
								$('#addAkun').submit();
							}
						</script>
					</div>
				</div>
			</div>
		</div>
        <!-- End Modal -->

        <!-- Modal Pengaturan Akun -->
        <div class="modal fade" id="settingProfile" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h1 class="modal-title">
                            <span class="fw-light">Pengaturan Akun</span>
                        </h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Nama</label>
                                        <input id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input id="" type="text" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label for="exampleFormControlFile1">Foto Profile</label>
                                        <input type="file" class="form-control-file mt-3"
                                            id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:history.back()" class="btn btn-warning">Batal</a>
                        <button name="" type="submit" class="btn btn-primary mr-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Modal Ganti Password -->
        <div class="modal fade" id="gantiPass" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h1 class="modal-title">
                            <span class="fw-light">Ganti Password</span>
                        </h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Password Lama</label>
                                        <input id="" type="password" class="form-control">
                                    </div>
                                    <div class="form-group form-group-default">
                                        <label>Password Baru</label>
                                        <input id="" type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:history.back()" class="btn btn-warning">Batal</a>
                        <button name="" type="submit" class="btn btn-primary mr-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Data Karyawan</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="beranda">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/kelola-karyawan">Data Karyawan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Karyawan</h4>
                                        {{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                            data-target="#addRowModal" style="">
                                            <i class="fa fa-plus mr-1 "></i>
                                            Tambah
                                        </button> --}}
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Modal Tambah -->
                                    {{-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header no-bd">
                                                    <h1 class="modal-title">
                                                        <span class="fw-mediumbold">
                                                            Tambah</span>
                                                        <span class="fw-light">
                                                            Data Karyawan
                                                        </span>
                                                    </h1>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="add_karyawan" action={{ url('kelola-karyawan') }}
                                                        method="POST">
                                                        @csrf
                                                        <div class="row"> --}}

                                                            {{-- Nik --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>NIK</label>
                                                                    <input id="addNik" name="nik"
                                                                        type="text" min="1" max="10"
                                                                        value="{{ old('nik') }}"
                                                                        class="form-control @error('nik') is-invalid @enderror">
                                                                    @error('nik')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}

                                                            {{-- Nama --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Nama</label>
                                                                    <input id="addNama" name="nama"
                                                                        type="text" value="{{ old('nama') }}"
                                                                        class="form-control @error('nama') is-invalid @enderror">
                                                                    @error('nama')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}


                                                            {{-- Kelamin --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label class="form-label">Jenis Kelamin</label>
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <div class="form-check">
                                                                                <input class="form-radio-input" type="radio" name="gender" id="laki_laki" value="L" $z
                                                                                    {{ old('gender') == 'L' ? 'checked' : '' }}>
                                                                                <span class="form-check-label ml-2">Laki-laki</span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-6">
                                                                            <div class="form-check me-3">
                                                                                <input class="form-radio-input" type="radio" name="gender" id="perempuan" value="P"
                                                                                    {{ old('gender') == 'P' ? 'checked' : '' }}>
                                                                                <span class="form-check-label ml-2">Perempuan</span>
                                                                            </div>
                                                                        </div>    
                                                                    </div>
                                                                   
                                                                </div>
                                                                @error('gender')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div> --}}

                                                            {{-- Jabatan --}}
                                                            {{-- <div class="col-md-6 pr-0">
                                                                <div class="form-group form-group-default">
                                                                    <label class="form-label"
                                                                        for="jabatan">Jabatan</label>
                                                                    <select name="jabatan" class="form-control"
                                                                        id="formGroupDefaultSelect"
                                                                        value="{{ old('jabatan') }}">
                                                                        <option value="">&nbsp;</option>
                                                                        <option value="Direktur"
                                                                            {{ old('jabatan') == 'Direktur' ? 'selected' : '' }}>
                                                                            Direktur</option>
                                                                        <option value="Administrator"
                                                                            {{ old('jabatan') == 'Administrator' ? 'selected' : '' }}>
                                                                            Administrator</option>
                                                                        <option value="Staff"
                                                                            {{ old('jabatan') == 'Staff' ? 'selected' : '' }}>
                                                                            Staff</option>
                                                                        <option value="Teknisi"
                                                                            {{ old('jabatan') == 'Teknisi' ? 'selected' : '' }}>
                                                                            Teknisi</option>
                                                                    </select>
                                                                    @error('jabatan')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}

                                                            {{-- divisi --}}
                                                            {{-- <div class="col-md-6">
                                                                <div class="form-group form-group-default">
                                                                    <label>Divisi</label>
                                                                    <select name="divisi" class="form-control"
                                                                        id="formGroupDefaultSelect">
                                                                        <option value="">&nbsp;</option>
                                                                        <option value="Programmer"
                                                                            {{ old('divisi') == 'programmer' ? 'selected' : '' }}>
                                                                            Programmer</option>
                                                                        <option value="UI/UX"
                                                                            {{ old('divisi') == 'ui/ux' ? 'selected' : '' }}>
                                                                            UI/UX</option>
                                                                        <option value="Front-End"
                                                                            {{ old('divisi') == 'front_end' ? 'selected' : '' }}>
                                                                            Front-end</option>
                                                                        <option value="Back-End"
                                                                            {{ old('divisi') == 'back_end' ? 'selected' : '' }}>
                                                                            Back-end</option>
                                                                        <option value="Server Operator"
                                                                            {{ old('divisi') == 'server_operator' ? 'selected' : '' }}>
                                                                            Server Operator</option>
                                                                    </select>
                                                                    @error('divisi')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}

                                                            {{-- no_hp --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label for="no_hp">No.Hp</label>
                                                                    <input id="no_hp" name="no_hp"
                                                                        type="text"
                                                                        class="form-control @error('no_hp') is-invalid @enderror">
                                                                    @error('no_hp')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}

                                                            {{-- alamat --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input id="alamat" name="alamat"
                                                                        type="text"
                                                                        class="form-control @error('alamat') is-invalid @enderror">
                                                                    @error('alamat')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div> --}}

                                                            {{-- tanggal_mulai --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tanggal Mulai Kerja</label>
                                                                    <input id="" name="mulai_kerja"
                                                                        type="date" class="form-control">
                                                                </div>
                                                            </div> --}}

                                                            {{-- tanggal_selesai --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label>Tanggal Berakhir Kerja</label>
                                                                    <input id="" name="selesai_kerja"
                                                                        type="date" class="form-control">
                                                                </div>
                                                            </div> --}}

                                                            {{-- gaji --}}
                                                            {{-- <div class="col-sm-12">
                                                                <div class="form-group form-group-default">
                                                                    <label for="gaji">Gaji</label>
                                                                    <input id="gaji" name="gaji"
                                                                        type="text" min="0"
                                                                        class="form-control @error('gaji') is-invalid @enderror">
                                                                    @error('gaji')
                                                                        <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div> --}}

                                                {{-- button --}}
                                                {{-- <div class="modal-footer no-bd">
                                                    <a href="javascript:history.back()" class="btn btn-warning"> Batal</a>
                                                    <button onclick="submitAddForm()" name="" type="submit" class="btn btn-primary mr-2 btnAdd"> Tambah</button>
                                                </div>

                                                </form>
                                                <script>
                                                    function submitAddForm() {
                                                        $('#add_karyawan').submit();

                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- End Modal -->

                                    {{-- Table --}}
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>Nik</th>
                                                    {{-- <th>Gender</th> --}}
                                                    <th>Shift</th>
                                                    <th>Jabatan</th>
                                                    <th>Divisi</th>
                                                    <th>Gaji</th>
                                                    {{-- <th style="width: 1%" align-text="center">Opsi</th> --}}
                                                </tr>
                                            </thead>
                                            {{-- <tfoot>
												<tr>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jabatan</th>
                                                    <th>Divisi</th>
													<th>Opsi</th>
												</tr>
											</tfoot> --}}
                                            <tbody>
                                                @foreach ($karyawan as $item)
                                                    <tr>
                                                        <td>{{ $item->nama }}</td>
                                                        <td>{{ $item->relasi_karyawan->nik }}</td>
                                                        {{-- <td>{{ $item->relasi_karyawan->gender }}</td> --}}
                                                        <td>@if ($item->relasi_karyawan->shift == 'P')
                                                            Pagi
                                                            @else
                                                            Malam
                                                        @endif</td>
                                                        <td>{{ $item->relasi_karyawan->jabatan }}</td>
                                                        <td>{{ $item->relasi_karyawan->divisi }}</td>
                                                        {{-- <td>{{ $item->relasi_karyawan->no_hp }}</td>
                                                        <td>{{ $item->relasi_karyawan->alamat }}</td>
                                                        <td>{{ $item->relasi_karyawan->mulai_kerja }}</td>
                                                        <td>{{ $item->relasi_karyawan->selesai_kerja }}</td> --}}
                                                        <td>Rp.{{ $item->relasi_karyawan->gaji }}</td>

                                                        <td>
                                                            <div class="form-button-action">
                                                                {{-- form detail --}}
                                                                <button data-toggle="modal"
                                                                    data-target="#detailModal{{ $item->id }}"
                                                                    title="Detail"
                                                                    class="btn btn-link btn-warning btnDetail"
                                                                    data-original-title="Detail">
                                                                    <i class="fa-solid fa-circle-info"></i>
                                                                </button>
                                                                {{-- form edit --}}
                                                                <button type="button" data-toggle="modal"
                                                                    data-target="#editModal{{ $item->id }}"
                                                                    title="Edit" data-id="{{ $item->relasi_karyawan_id }}"
                                                                    data-nama="{{ $item->nama }}"
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit">
                                                                    <i class="fa-solid fa-user-pen"></i>
                                                                </button>

                                                                {{-- Form delete --}}
                                                                <button type="button"
                                                                    title="Delete" data-id="{{ $item->id }}"
                                                                    class="btn btn-link btn-danger btn-lg btnDelete"
                                                                    data-original-title="Delete">
                                                                    <i class="fa-solid fa-user-xmark"></i>
                                                                </button>


                                                                {{-- form delete --}}
                                                                {{-- <form id="btnDelete"
                                                                    action="{{ route('delete.karyawan', $item->id) }}"
                                                                    method="POST">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button data-toggle="modal" type="button"
                                                                        title="delete" id="delete"
                                                                        class="btn btn-link btn-danger btnDelete"
                                                                        data-original-title="Delete">
                                                                        <i class="fa-solid fa-user-xmark"></i>
                                                                    </button>
                                                                </form> --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    {{-- End Table --}}
                                                    

                                                <!-- Modal Detail -->
                                                    <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" role="dialog"aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title">
                                                                        <span class="fw-mediumbold">Detail</span>
                                                                        <span class="fw-light">{{ $item->nama }}</span>
                                                                    </h1>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container">
                                                                        <div class="col-12">
                                                                            <span class="fw-mediumbold"> 
                                                                                    <b>Nama</b> <span style="padding-left: 96px">{{$item->nama}}</span><br><hr>
                                                                                    <b>NIK</b> <span style="padding-left: 106px"> {{$item->relasi_karyawan->nik}}</span><br><hr>
                                                                                    <b>Jenis Kelamin</b> <span style="padding-left: 45px">{{$item->relasi_karyawan->gender == 'P' ? 'Perempuan' : 'Laki-laki'}}</span><br><hr>
                                                                                    <b>Shift</b> <span style="padding-left: 100px">{{$item->relasi_karyawan->shift}}</span><br><hr>
                                                                                    <b>Jabatan</b> <span style="padding-left: 82px">{{$item->relasi_karyawan->jabatan}}</span><br><hr>
                                                                                    <b>Divisi</b> <span style="padding-left: 95px">{{$item->relasi_karyawan->divisi}}</span><br><hr>
                                                                                    <b>No HP</b> <span style="padding-left: 90px">{{$item->relasi_karyawan->no_hp}}</span><br><hr>
                                                                                    <b>Alamat</b> <span style="padding-left: 86px">{{$item->relasi_karyawan->alamat == '' ? 'N/A' : $item->relasi_karyawan->alamat}}</span><br><hr>
                                                                                    <b>Mulai Kerja</b> <span style="padding-left: 58px">{{$item->relasi_karyawan->mulai_kerja}}</span><br><hr>
                                                                                    <b>Selesai Kerja</b> <span style="padding-left: 50px">{{$item->relasi_karyawan->selesai_kerja}}</span><br><hr>
                                                                                    <b>Gaji</b> <span style="padding-left: 103px">Rp. {{$item->relasi_karyawan->gaji}}</span><br>
                                                                            </span>  
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- End Modal -->

                                                <!-- Modal Edit -->
                                                    <div class="modal fade" id="editModal{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h1 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Edit</span>
                                                                        <span class="fw-light">
                                                                            Data Karyawan
                                                                        </span>
                                                                    </h1>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="add_karyawan_{{ $item->id}}"
                                                                        action={{ route('update.karyawan', $item->id) }}
                                                                        method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="row">

                                                                            {{-- Nik --}}
                                                                            <div class="col-sm-12">
                                                                            {{-- <input type="text" name="users_id" value="{{ $item->relasi_karyawan->users_id }}"> --}}
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>NIK</label>
                                                                                    {{-- <p>{{ $item->id }}</p> --}}
                                                                                    <input id="addNik"
                                                                                        name="nik" type="text"
                                                                                        min="1" max="10"
                                                                                        value="{{ old('nik') ?? $item->relasi_karyawan->nik }}"
                                                                                        class="form-control @error('nik') is-invalid @enderror">
                                                                                    @error('nik')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- Nama --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Nama</label>
                                                                                    <input id="addNama"
                                                                                        name="nama" type="text"
                                                                                        value="{{ old('nama') ?? $item->nama }}"
                                                                                        class="form-control @error('nama') is-invalid @enderror">
                                                                                    @error('nama')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- Shift --}}
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group form-group-default">
                                                                                    <label class="form-label">Shift</label>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <div class="form-check">
                                                                                                <input class="form-radio-input" type="radio" name="shift"id="pagi"value="P"
                                                                                                    @if ($item->relasi_karyawan->shift == 'P') checked 
                                                                                                    @endif>

                                                                                                {{-- {{ (old('gender') ?? $item->gender) == 'L' ? 'checked' : '' }}> --}}

                                                                                                <span class="form-check-label ml-2">Pagi</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6">    
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-radio-input" type="radio" name="shift" id="malam" value="M"
                                                                                                    @if ($item->relasi_karyawan->shift == 'M') checked @endif>
                                                                                                {{-- {{ (old('gender') ?? $item->gender) == 'P' ? 'selected' : '' }}> --}}
                                                                                                <span class="form-check-label ml-2">Malam</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @error('shift')
                                                                                    <div class="text-danger">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                            {{-- Kelamin --}}
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group form-group-default">
                                                                                    <label class="form-label">Jenis Kelamin</label>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <div class="form-check">
                                                                                                <input class="form-radio-input" type="radio" name="gender"id="laki_laki"value="L"
                                                                                                    @if ($item->relasi_karyawan->gender == 'L') checked 
                                                                                                    @endif>

                                                                                                {{-- {{ (old('gender') ?? $item->gender) == 'L' ? 'checked' : '' }}> --}}

                                                                                                <span class="form-check-label ml-2">Laki-laki</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-6">    
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-radio-input" type="radio" name="gender" id="perempuan" value="P"
                                                                                                    @if ($item->relasi_karyawan->gender == 'P') checked @endif>
                                                                                                {{-- {{ (old('gender') ?? $item->gender) == 'P' ? 'selected' : '' }}> --}}
                                                                                                <span class="form-check-label ml-2">Perempuan</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                @error('gender')
                                                                                    <div class="text-danger">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>

                                                                            {{-- Jabatan --}}
                                                                            <div class="col-md-6 pr-0">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label class="form-label"
                                                                                        for="jabatan">Jabatan</label>
                                                                                    <select name="jabatan"
                                                                                        class="form-control"
                                                                                        id="formGroupDefaultSelect"
                                                                                        value="{{ old('jabatan') }}">
                                                                                        <option value="">&nbsp;
                                                                                        </option>
                                                                                        <option value="Direktur"
                                                                                            {{ (old('jabatan') ?? $item->relasi_karyawan->jabatan) == 'Direktur' ? 'selected' : '' }}>
                                                                                            Direktur</option>
                                                                                        <option value="Administrator"
                                                                                            {{ (old('jabatan') ?? $item->relasi_karyawan->jabatan) == 'Administrator' ? 'selected' : '' }}>
                                                                                            Administrator</option>
                                                                                        <option value="Staff"
                                                                                            {{ (old('jabatan') ?? $item->relasi_karyawan->jabatan) == 'Staff' ? 'selected' : '' }}>
                                                                                            Staff</option>
                                                                                        <option value="Teknisi"
                                                                                            {{ (old('jabatan') ?? $item->relasi_karyawan->jabatan) == 'Teknisi' ? 'selected' : '' }}>
                                                                                            Teknisi</option>
                                                                                    </select>
                                                                                    @error('jabatan')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- divisi --}}
                                                                            <div class="col-md-6">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label class="form-label"
                                                                                        for="divisi">Divisi</label>
                                                                                    <select name="divisi"
                                                                                        class="form-control"
                                                                                        id="formGroupDefaultSelect"
                                                                                        value="{{ old('divisi') }}">
                                                                                        <option value="">&nbsp;
                                                                                        </option>
                                                                                        <option value="Programmer"
                                                                                            {{ (old('divisi') ?? $item->relasi_karyawan->divisi) == 'Programmer' ? 'selected' : '' }}>
                                                                                            Programmer</option>
                                                                                        <option value="UI/UX"
                                                                                            {{ (old('divisi') ?? $item->relasi_karyawan->divisi) == 'UI/UX' ? 'selected' : '' }}>
                                                                                            UI/UX</option>
                                                                                        <option value="Front End"
                                                                                            {{ (old('divisi') ?? $item->relasi_karyawan->divisi) == 'Front End' ? 'selected' : '' }}>
                                                                                            Front End</option>
                                                                                        <option value="Back End"
                                                                                            {{ (old('divisi') ?? $item->relasi_karyawan->divisi) == 'Back End' ? 'selected' : '' }}>
                                                                                            Back End</option>
                                                                                        <option value="Server Operator"
                                                                                            {{ (old('divisi') ?? $item->relasi_karyawan->divisi) == 'Server Operator' ? 'selected' : '' }}>
                                                                                            Server Operator</option>
                                                                                    </select>
                                                                                    @error('divisi')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- no_hp --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label for="no_hp">No.Hp</label>
                                                                                    <input id="no_hp"
                                                                                        name="no_hp" type="text"
                                                                                        value=" {{ old('no_hp') ?? $item->relasi_karyawan->no_hp }}"
                                                                                        class="form-control @error('no_hp') is-invalid @enderror">
                                                                                    @error('no_hp')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- alamat --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label
                                                                                        for="alamat">Alamat</label>
                                                                                    <input id="alamat"
                                                                                        name="alamat" type="text"
                                                                                        value="{{ old('alamat') ?? $item->relasi_karyawan->alamat }}"
                                                                                        class="form-control @error('alamat') is-invalid @enderror">
                                                                                    @error('alamat')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>

                                                                            {{-- tanggal_mulai --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Tanggal Mulai Kerja</label>
                                                                                    <input id=""
                                                                                        name="mulai_kerja"
                                                                                        value="{{ old('mulai_kerja') ?? $item->relasi_karyawan->mulai_kerja }}"
                                                                                        type="date"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            {{-- tanggal_selesai --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label>Tanggal Berakhir
                                                                                        Kerja</label>
                                                                                    <input id=""
                                                                                        name="selesai_kerja"
                                                                                        value="{{ old('selesai_kerja') ?? $item->relasi_karyawan->selesai_kerja }}"
                                                                                        type="date"
                                                                                        class="form-control">
                                                                                </div>
                                                                            </div>

                                                                            {{-- gaji --}}
                                                                            <div class="col-sm-12">
                                                                                <div
                                                                                    class="form-group form-group-default">
                                                                                    <label for="gaji">Gaji</label>
                                                                                    <input id="gaji" style="text-align: right"
                                                                                        name="gaji" type="text" min="0"
                                                                                        onkeyup="document.getElementById('gaji').innerHTML = formatCurrency(this.value);"
                                                                                        value="{{ old('gaji') ?? $item->relasi_karyawan->gaji }}"
                                                                                        class="angkaSemua money @error('gaji') is-invalid @enderror">
                                                                                    @error('gaji')
                                                                                        <div class="text-danger">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                        {{-- button submit edit --}}
                                                                        <div class="modal-footer no-bd">
                                                                            <a href="javascript:history.back()" class="btn btn-warning"> Batal </a>
                                                                            <button id="submitForm_{{ $item->id }}" name="add" type="submit" class="btn btn-primary mr-2 btnEdit"> Submit </button>

                                                                        </div>
                                                                </form>
                                                                <script>
                                                                    // function submitAddForm() {
                                                                    //     $('#add_karyawan').submit();

                                                                    // }

                                                                    $('#submitForm_{{ $item->id }}').click(function (e) { 
                                                                        e.preventDefault();
                                                                        $('#add_karyawan_{{ $item->id }}').submit();
                                                                    });
                                                                </script>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- End Modal Edit-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {{-- <footer class="footer">
        <div class="container-fluid">
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                    href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer> --}}
    </div>

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

    <!-- Jquery Auto Format -->
    <script src="/assets/js/simple.money.format.js"></script>
    


    <script>
        $(document).ready(function() {
            $(".money").simpleMoneyFormat();
             
            $(document).on("keypress", ".angkaSemua", function(e) {
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which >57)) {
                    return false;
                }
            });

            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                            )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });

            // Add Row
            // $('#add-row').DataTable({
            //     "pageLength": 5,
            // }); 

            var action =
                '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });

            // sweet-alert edit
            $('.btnEdit').click(function(e) {
                e.preventDefault();
                var id = $(this).attr('data-id');
                var nama = $(this).attr('data-nama');
 
                swal({
                        title: "Di Update",
                        text: "Data Berhasil Di Update",
                        icon: "success",
                    })
            });

            // sweet-alert delete
            $('.btnDelete').click(function(e) {
                id = $(this).attr('data-id')
                alert(id);
                e.preventDefault();
 
                // console.log('asd');
                swal({
                        title: "Yakin?",
                        text: "Anda akan menghapus data ini!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "/kelola-karyawan/delete/"+id;
                            swal("Data ini telah dihapus!", {
                                icon: "success",
                            });
                            $('#btnDelete').submit();
                        } else {
                            swal("Data ini tidak jadi dihapus!");
                        }
                    });
            });

            // sweet-alert add
            $('.btnAdd').click(function(e) {
                e.preventDefault();

                swal({
                    title: "Di Tambahkan",
                    text: "Data telah masuk database!",
                    icon: "success",
                });
            });


        });
    </script>
</body>

</html>
