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
</head>
    <body class="account-page" style="background-color:white">

<div class="container">
    <div class="jumbotron" style="margin-top:250px;background-color:whitesmoke">
        <h5>
            Activate your account
        </h5>
        <p class="lead">
            @if (session('status') == 'verification-link-sent')
                {{__('Please click on the link we sent you by email to activate your account')}}
            @endif
        </p>
        <hr class="my-4">
        <p>You did not receive the email?</p>
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-primary">
                {{ __('Resend Verification Email') }}
            </button>
        </form>
    </div>
</div>
</body>
</html>
