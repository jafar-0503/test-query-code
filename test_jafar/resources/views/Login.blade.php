<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="/BahanStudy/css/bootstrap.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/font-awesome.min.css" rel="stylesheet">
    <link href="/BahanStudy/css/prettyPhoto.css" rel="stylesheet">
    <link href="/BahanStudy/css/price-range.css" rel="stylesheet">
    <link href="/BahanStudy/css/animate.css" rel="stylesheet">
	<link href="/BahanStudy/css/main.css" rel="stylesheet">
	<link href="/BahanStudy/css/responsive.css" rel="stylesheet">

</head>

<body>

	<section id="form">
		<div class="container">
			<div class="row">

        <!-- Form Login -->
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Login to your account</h2>
						<form action="/Masuk" method="post">
							<input type="email" placeholder="Email Address" name="email"/>
              <input type="password" placeholder="Password" name="password" />

							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">

        <!--sign up form-->
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form action="/Daftar" method="post">
							<input type="text" placeholder="Name" name="nama"/>
							<input type="email" placeholder="Email Address" name="email"/>
							<input type="password" placeholder="Password" name="password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    <script src="/BahanStudy/js/jquery.js"></script>
  	<script src="/BahanStudy/js/price-range.js"></script>
    <script src="/BahanStudy/js/jquery.scrollUp.min.js"></script>
  	<script src="/BahanStudy/js/bootstrap.min.js"></script>
    <script src="/BahanStudy/js/jquery.prettyPhoto.js"></script>
    <script src="/BahanStudy/js/main.js"></script>
</body>
</html>
