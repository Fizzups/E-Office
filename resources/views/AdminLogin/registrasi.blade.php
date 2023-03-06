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
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">


	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<style>
    body {
        font-family: poppins;
    }
    h1 {
        font-family: poppins;
    }
    a {
        font-family: poppins;
    }
</style>
<body>
    <div class="bg-image" 
        style="background-image: url('/assets/img/E-OFFICE.png');height: 100vh">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 3rem;">
                            <div class="card-body p-5">
                                <img src="/assets/img/Logo e-office (Orange).png" class="img-logo row col-12 m-auto" alt="">
                                    
                                    <form action="{{ route('registproses') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group form-floating-label mt-5">
										<input id="inputFloatingLabel" type="text" name="nama" class="form-control input-border-bottom" required="">
										<label for="inputFloatingLabel" class="placeholder">Name</label>
									</div>
                                    <div class="form-group form-floating-label">
										<input id="inputFloatingLabel2" type="username" name="username" class="form-control input-border-bottom" required="">
										<label for="inputFloatingLabel2" class="placeholder">UserName</label>
									</div>
                                    <div class="form-group form-floating-label">
										<input id="inputFloatingLabel3" type="password" name="password" class="form-control input-border-bottom" required="">
										<label for="inputFloatingLabel3" class="placeholder">Password</label>
									</div>
                                    <div class="d-flex justify-content-center mt-5">
                                        {{-- <a href="/login "class="btn btn-primary" type="submit" style="border-radius: 10px">Submit</a> --}}
                                        <button class="btn btn-primary btn-square-md" type="submit">Submit</button> 
                                    </div>                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>