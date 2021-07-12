<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dreams Chat - Html Template</title>
        
        <!-- Favicon -->
        <link rel="icon" href="{{asset('assets/img/favicon.png')}}">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/swiper/swiper.min.css')}}">
    
        <!-- FancyBox CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
    
        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
        
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
							    <h3>Neochat</h3>
							</div>
							<div class="form-col">
								<div class="login-text-details">
									<h3>Reset Password</h3>
									<p>Enter the Credentials to Reset the Password</p>
								</div>
								<x-auth-validation-errors class="mb-4" :errors="$errors"/>

								<form method="POST" action="{{ route('password.update') }}">
									@csrf
									<!-- Password Reset Token -->
									<input type="hidden" name="token" value="{{$request->route('token')}}">
	                                <div class="form-group">
	                                    <label>Email</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="email" type="email" :value="old('email', $request->email)" required autofocus>
	                                </div>
	                                <div class="form-group">
	                                    <label>New Password</label>
	                                    <input class="form-control form-control-lg group_formcontrol" name="password" type="password">
	                                </div>
	                                <div class="form-group">
	                                    <label>Confirm Password</label>
	                                    <input class="form-control form-control-lg group_formcontrol"  type="password" name="password_confirmation" required>
	                                </div>
	                                <div class="pt-1">
	                                	<div class="text-center">
	                                     	<button class="btn newgroup_create btn-block d-block w-100" type="submit">
												{{__('Reset Password')}}
											</button>
	                                    </div>
	                                </div>
								</form>
							</div>
							<div class="back-btn-col text-center">
								<a href="{{route('login')}}">
									<span>
										<i class="fas fa-caret-left"></i>
									</span> 
									Back
								</a>
							</div>
						</div>
						<!-- /Login Tab Content -->
					</div>
					<div class="login-right pwd-bg">
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
		</div>
		<!-- /Main Wrapper -->
	  
	<!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
	
	<!-- Bootstrap Core JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
	<!-- Custom Scroll JS -->
    <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/plugins/mcustomscroll/jquery.mCustomScrollbar.js')}}"></script>
	
	<!-- Custom JS -->
    <script src="{{asset('assets/js/script.js')}}"></script>
	
</body>
</html>