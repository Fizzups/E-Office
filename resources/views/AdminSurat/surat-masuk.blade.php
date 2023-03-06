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

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../../assets/css/uikit.min.css">
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
                                    <img src="../assets/img/GAMAL 7.png" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="../assets/img/GAMAL 7.png"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Robby Alfian</h4>
                                                <p class="text-muted">rby.afn30@gmail.com</p><a href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
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
                            <img src="../assets/img/GAMAL 7.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Robby Alfian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="#addAkun" data-toggle="modal" data-target="#addAkunUser">

                                            <span class="link-collapse">Pengaturan Akun</span>
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
                            <a href="/beranda">
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
                                                    <a href="surat-masuk">
                                                        <span class="sub-item">Surat Masuk</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="surat-keluar">
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
                            <a href="# ----( LOGOUT )----">
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
                                        <input type="password" class="form-control" id="addpassword"
                                            name="password">
                                    </div>
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="modal-footer">
                                <a href="javascript:history.back()" class="btn btn-warning">Batal</a>
                                <button onclick="submitAddForm()" name="" type="submit"
                                    class="btn btn-primary mr-2">Simpan</button>
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
                        <button name="" type="submit" class="btn btn-primary mr-2">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->



        <!-- Modal Tambah -->
        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h2 class="modal-title">
                            <span class="fw-mediumbold">
                                Tambah</span>
                            <span class="fw-light">
                                Data Surat Masuk
                            </span>
                        </h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="add_surat-masuk" action={{ url('surat-masuk') }} method="POST" enctype=multipart/form-data>
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Terima</label>
                                        <input name="tanggal_masuk_surat" type="date"
                                            value="{{ old('tanggal_masuk_surat') }}"
                                            class="form-control @error('tanggal_masuk_surat') is-invalid @enderror">
                                        @error('tanggal_masuk_surat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default">
                                        <label>Tanggal Surat</label>
                                        <input name="tanggal_surat" type="date" value="{{ old('tanggal_surat') }}"
                                            class="form-control @error('tanggal_surat') is-invalid @enderror">
                                        @error('tanggal_surat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Nomor Surat</label>
                                        <input name="nomor_surat" type="text" value="{{ old('nomor_surat') }}" 
                                            class="form-control @error('nomor_surat') is-invalid @enderror">
                                        @error('nomor_surat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Pengirim</label>
                                        <input name="pengirim_surat" type="text"
                                            value="{{ old('pengirim_surat') }}"
                                            class="form-control @error('pengirim_surat') is-invalid @enderror">
                                        @error('pengirim_surat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="">Perihal</label>
                                        <textarea class="form-control" id="comment" rows="3" name="perihal" value="{{ old('perihal') }}"></textarea>
                                        @error('perihal')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="exampleFormControlFile1">Foto</label>
                                        <input type="file" class="form-control-file mt-3"
                                            id="exampleFormControlFile1" name="foto"
                                            class="form-control @error('foto') is-invalid @enderror">
                                        @error('foto')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label for="dokumen">Dokumen</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile2"
                                            name="dokumen"
                                            class="form-control @error('dokumen') is-invalid @enderror">
                                        @error('dokumen')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <a href="javascript:history.back()" class="btn btn-warning"> Batal</a>
                        <button onclick="submitAddForm()" name="" type="submit"
                            class="btn btn-primary mr-2 btnTambah"> Tambah</button>
                    </div>
                    </form>
                    <script>
                        function submitAddForm() {
                            $('#add_surat-masuk').submit();

                        }
                    </script>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Data Arsipan</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="/beranda">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/data-karyawan">Data Surat</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/data-karyawan">Surat Masuk</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Surat Masuk</h4>
                                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                            data-target="#addRowModal" style="">
                                            <i class="fa fa-plus mr-1 "></i>
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="basic-datatables" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Terima</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Nomor Surat</th>
                                                    <th>Pengirim</th>
                                                    <th>Perihal</th>
                                                    <th>Foto</th>
                                                    <th>Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Terima</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>Nomor Surat</th>
                                                    <th>Pengirim</th>
                                                    <th>Perihal</th>
                                                    <th>Foto</th>
                                                    <th>Dokumen</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($surat_masuk as $data_surat_masuk)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $data_surat_masuk->tanggal_surat }}</td>
                                                        <td>{{ $data_surat_masuk->tanggal_masuk_surat }}</td>
                                                        <td>{{ $data_surat_masuk->nomor_surat }}</td>
                                                        <td>{{ $data_surat_masuk->pengirim_surat }}</td>
                                                        <td>{{ $data_surat_masuk->perihal }}</td>
                                                        <td style="width:1%">
                                                            <div class="uk-file-img mr-3" uk-grid
                                                                uk-lightbox="animation: slide">
                                                                <div>
                                                                    <a class="uk-inline"
                                                                        href="{{ asset('assets/img/FileSuratMasuk/' . $data_surat_masuk->foto) }}">
                                                                        <img src="{{ asset('assets/img/FileSuratMasuk/' . $data_surat_masuk->foto) }}"
                                                                            class="m-2" width="1800"
                                                                            height="1200" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width:1%">
                                                            <div class="uk-file-img mr-3" uk-grid
                                                                uk-lightbox="animation: slide">
                                                                <div>
                                                                    <a class="uk-inline"
                                                                        href="{{ asset('assets/img/FileSuratMasuk/' . $data_surat_masuk->dokumen) }}">Dokumen</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
															<div class="form-button-action">
																<button type="button" data-toggle="modal"
                                                                    data-target="#editModal{{ $data_surat_masuk->id }}" title="edit"
                                                                    class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit" data-id="{{$data_surat_masuk->id}}">
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </button>
                                                            <form action="{{ route('delete.surat-masuk', $data_surat_masuk->id) }}"
                                                                method="POST">
																@method('PUT')
                                                                @csrf
                                                                @method('delete')
                                                                    <button type="button" data-toggle="modal"
                                                                    title="delete"
                                                                    class="btn btn-link btn-danger btnDelete"
                                                                    data-original-title="Delete"
                                                                    data-id="{{ $data_surat_masuk->id }}">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                    </button>
                                                            </form>
														</div>
                                                        </td>
                                                    </tr>

													{{-- MODAL EDIT --}}
                                                    <div class="modal fade" id="editModal{{ $data_surat_masuk->id }}"
                                                        tabindex="-1" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header no-bd">
                                                                    <h1 class="modal-title">
                                                                        <span class="fw-mediumbold">
                                                                            Edit</span>
                                                                        <span class="fw-light">
                                                                            Data Barang
                                                                        </span>
                                                                    </h1>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="edit_surat"
                                                                        action={{ route('update.surat', $data_surat_masuk->id) }}
                                                                        method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="row">
																			<div class="col-sm-6">
																				<div class="form-group form-group-default">
																					<label>Tanggal Surat</label>
																					<input name="tanggal_surat" type="date" value="{{ old('tanggal_surat') ?? $data_surat_masuk->tanggal_surat }}" 
																					class="form-control @error('tanggal_surat') is-invalid @enderror">
																					@error('tanggal_surat')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																			<div class="col-sm-6">
																				<div class="form-group form-group-default">
																					<label>Tanggal Terima</label>
																					<input name="tanggal_masuk_surat" type="date"
																						value="{{ old('tanggal_masuk_surat') ?? $data_surat_masuk->tanggal_masuk_surat }}"
																						class="form-control @error('tanggal_masuk_surat') is-invalid @enderror">
																					@error('tanggal_masuk_surat')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label>Nomor Surat</label>
																					<input name="nomor_surat" type="text" value="{{ old('nomor_surat') ?? $data_surat_masuk->nomor_surat }}" 
																					class="form-control @error('nomor_surat') is-invalid @enderror">
																					@error('nomor_surat')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label>Pengirim</label>
																					<input name="pengirim_surat" type="text"
																						value="{{ old('pengirim_surat') ?? $data_surat_masuk->pengirim_surat}}"
																						class="form-control @error('pengirim_surat') is-invalid @enderror">
																					@error('pengirim_surat')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label for="">Perihal</label>
																					<textarea class="form-control" id="comment" rows="3" name="perihal" 
                                                                                    value="{{ old('perihal') ?? $data_surat_masuk->perihal}}"></textarea>
																					@error('perihal')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
											
																				</div>
																			</div>
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label for="exampleFormControlFile1">Foto</label>
																					<input type="file" class="form-control-file mt-3"
																						id="exampleFormControlFile1" name="foto"
																						class="form-control @error('foto') is-invalid @enderror">
																					@error('foto')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label for="dokumen">Dokumen</label>
																					<input type="file" class="form-control-file" id="exampleFormControlFile2"
																						name="dokumen"
																						class="form-control @error('dokumen') is-invalid @enderror">
																					@error('dokumen')
																						<div class="text-danger">{{ $message }}</div>
																					@enderror
																				</div>
																			</div>
																		</div>
                                                                </div>
                                                                {{-- button submit --}}
                                                                <div class="modal-footer no-bd">
                                                                    <a href="javascript:history.back()"
                                                                        class="btn btn-warning">Batal</a>
                                                                    <button onclick="submitAddForm()" name="edit"
                                                                        type="submit"
                                                                        class="btn btn-primary mr-2 btnEdit">Submit</button>
                                                                </div>
                                                				@endforeach
                                                				</form>
                                                				<script>
                                                    				function submitAddForm() {
                                                        				$('#edit_surat').submit();
                                                    				}
                                                				</script>
                                    						</div>
                                						</div>
                            						</div>
													{{-- END MODAL --}}
                            				</tbody>
                            			</table>
                        			</div>
                    			</div>
                			</div>
            			</div>
        			</div>
    			</div>
    		</div>
    <footer class="footer">
        <div class="container-fluid">
            <div class="copyright ml-auto">
                2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                    href="https://www.themekita.com">ThemeKita</a>
            </div>
        </div>
    </footer>
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
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.20/dist/js/uikit-icons.min.js"></script>


    <script>
        $(document).ready(function() {
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
            $('#add-row').DataTable({
                "pageLength": 5,
            });

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

            // sweet-alert delete
            $('.btnDelete').click(function(e) {
                e.preventDefault();
                var suratmasukid = $(this).attr('data-id');
                var deleteid = $(this).closest("tr").find('.delete_id').val();

                swal({
                        title: "Yakin?",
                        text: "Anda akan menghapus data ini!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location = "surat-masuk/delete/" + suratmasukid + ""
                            swal("Data ini telah dihapus!", {
                                icon: "success",
                            });
                        } else {
                            swal("Data ini tidak jadi dihapus!");
                        }
                    });
            });

            // sweet-alert add
            $('.btnTambah').click(function(e) {
                e.preventDefault();

                swal({
                    title: "Di Tambahkan",
                    text: "Data telah masuk database!",
                    icon: "success",
                });
            });

			// sweet-alert edit
			$('.btnEdit').click(function(e) {
                e.preventDefault();
				var id = $(this).attr('data-id');
				
                swal({
                    title: "Data Di Update",
                    text: "Data telah masuk database!",
                    icon: "success",
                });
            });

        });
    </script>
</body>

</html>
