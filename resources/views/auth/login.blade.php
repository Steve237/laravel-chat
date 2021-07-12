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
                                    <h2>Neochat</h2>
                                </a>
							</div>
							<div class="form-col">
								<div class="login-text-details">
									<h3>Log in</h3>
									<p>Login with your Data that you entered during your Registration</p>
								</div>
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
								<form method="POST" action="{{route('login')}}">
									@csrf
	                                <div class="form-group">
	                                    <label>Your Email</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="email" type="email" :value="old('email')" required autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <label>Password</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="password" type="password" required autocomplete="current-password">
	                                </div>
	                                <div class="form-group">
	                                	<div class="form-check">
                                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
	                                </div>
	                                <div class="pt-1">
	                                	<div class="text-center">
	                                     	<button class="btn newgroup_create btn-block d-block w-100">
												{{__('Log in')}}
											</button>
	                                    </div>
	                                </div>
								
								<div class="text-center dont-have">
									Don’t have an account? 
                                    <a href="{{route('register')}}">Register</a>
								</div>
								@if(Route::has('password.request'))
								<div class="text-center mt-3">
									<span class="forgot-link">
										<a href="{{route('password.request')}}" class="text-right"> 
											{{__('Forgot your password?')}}
										</a>
									</span>
								</div>
								@endif
								</form>
							</div>
							<div class="back-btn-col text-center">
								<a href="index.html">
									<span><i class="fas fa-caret-left"></i></span> 
									Back
								</a>
							</div>
						</div>
						<!-- /Login Tab Content -->
					</div>
					<div class="login-right">
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
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