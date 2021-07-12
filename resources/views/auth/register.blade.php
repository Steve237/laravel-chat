<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neochat</title>
	
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	
    <!-- Custom scroll CSS -->
    <link rel="stylesheet" href="assets/plugins/mcustomscroll/jquery.mCustomScrollbar.css">
	
    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>

	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">			
			<!-- Page Content -->
			<div class="content align-items-center">
					
				<div class="w-100 ">
					<div class="login-left">
						
						<!-- Login Tab Content -->
						<div class="account-content">
							<div class="login-header">
								<a href="index.html">
                                    <img src="assets/img/logo-full.png" alt="">
                                </a>
							</div>
							<div class="form-col">
								<div class="login-text-details">
									<h3>Sign up</h3>
									<p>Lets get you all setup so you can verify your oersonal account and begin setting up your Profile.</p>
								</div>
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

								<form method="POST" action="{{route('register')}}">
                                    @csrf
	                                <div class="form-group">
	                                    <label>Pseudo</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="name" :value="old('name')" type="text" required autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <label>Email</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="email" type="email" :value="old('email')" required>
	                                </div>
	                                <div class="form-group">
	                                    <label>Password</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="password" type="password"  required autocomplete="new-password">
	                                </div>
	                                <div class="form-group">
	                                    <label>Confirm Password</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="password_confirmation" type="password" required>
	                                </div>
	                                <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                            <a href="#" data-toggle="modal" data-target="#terms">
                                            <label class="form-check-label" for="remember">Accept terms and services</label>
                                            </a>
                                        </div>
	                                    </div>
	                                <div class="pt-1">
	                                	<div class="text-center">
	                                     	<button class="btn newgroup_create btn-block d-block w-100" type="submit"> 
                                                 {{ __('Register') }}
                                            </button>
	                                    </div>
	                                </div>
								
								<div class="text-center dont-have">
                                    {{ __('Already registered?') }}
                                    <a href="{{ route('login')}}">Login</a>
                                </div>
								</form>
							</div>
							<div class="back-btn-col text-center">
								<a href="index.html"><span><i class="fas fa-caret-left"></i></span> Back</a>
							</div>
						</div>
						<!-- /Login Tab Content -->
					</div>
					<div class="login-right signup-bg">
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
			
			<!-- Terms & Conditions -->
			<div class="modal fade" id="terms">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">
								Terms & Conditions
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="material-icons">close</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="terms-card">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum vulputate facilisi eu ultricies integer diam. Eu ullamcorper arcu dui, eget volutpat risus dui. Donec nulla mi neque, egestas tristique non. Vel pellentesque dolor nibh scelerisque turpis. Lacus magna vestibulum, quis aliquam nunc, euismod amet.</p>
								<p>Aliquet elit sapien orci ipsum faucibus fermentum habitant. Ac quam sit leo posuere nulla dignissim. In mi, velit vitae dictum ac. Suscipit orci, sit amet mi massa gravida lectus elit. Auctor lorem arcu quis commodo nibh ipsum. Lectus amet, ultrices nec amet sed condimentum donec.</p>
								<p class="mb-0">Arcu sed aenean venenatis arcu in at varius. Elementum, nunc, malesuada pretium cras sed praesent mi arcu urna. Erat maecenas lectus pharetra, blandit lectus.</p>
							</div>
							<div class="text-right mt-3 align-items-center">
                                <button type="button" class="btn btn-block newgroup_create mb-0 close-btn" data-dismiss="modal" aria-label="Close">
                                    Close
                                </button>
							</div>
						</div>       
					</div>
				</div>
			</div>
        <!-- /Terms & Conditions -->
			
		</div>
		<!-- /Main Wrapper -->
	  
	<!-- jQuery -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
	
	<!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	
	<!-- Custom Scroll JS -->
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js"></script>
	
	<!-- Custom JS -->
    <script src="assets/js/script.js"></script>
	
</body>
</html>