{{-- <!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ثبت نام در سایت</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{ asset('images/bg-1.jpg') }});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form ز class="signin-form">
                                @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">name</label>
			      			<input type="text" class="form-control" name="name" placeholder="name" required>
			      		</div>
                          <div class="form-group mb-3">
                            <label class="label" for="name">email</label>
                            <input type="email" class="form-control" name="email" placeholder="email" required>
                        </div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" name="password" class="form-control" placeholder="Password" required>
		            </div>

                    <div class="form-group mb-3">
		            	<label class="label" for="password">confirm password</label>
		              <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password" required>
		            </div>

					<div>
						<label for="role">نقش خود را انتخاب کنید:</label>
						<select name="role" id="role">
							<option value="student">دانشجو</option>
							<option value="master">استاد</option>
						</select>
					</div>
					
					<div id="student_fields">
						<label for="student_id">کد دانشجویی:</label>
						<input type="text" name="student_id" id="student_id">
					</div>
					
					<div id="master_fields" style="display:none;">
						<label for="master_id">کد استادی:</label>
						<input type="text" name="master_id" id="master_id">
						
					</div>
					
					<script>
						document.getElementById("role").addEventListener("change", function() {
							if (this.value === "master") {
								document.getElementById("master_fields").style.display = "block";
								document.getElementById("student_fields").style.display = "none";
							} else {
								document.getElementById("master_fields").style.display = "none";
								document.getElementById("student_fields").style.display = "block";
							}
						});
					</script>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			       
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
 --}}



























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>مرکز دانلود - ثبت نام</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">ثبت نام</h1>
                        <p class="signup-link register">قبلا ثبت نام کرده اید؟ <a href="{{ route('login') }}">وارد شوید</a></p>
                        <form class="text-left" method="POST" action="{{ route('register') }}">
                            <div class="form">
                           @csrf
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">نام و نام خانوادگی</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username"name="name" type="text" class="form-control" placeholder="نام خود را وارد کنید" required>
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">ایمیل</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="text" value="" class="form-control" placeholder="email@gmail.com" required>
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">رمزعبور</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="یک رمزعبور انتخاب کنید" required>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>

								<div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">تکرار رمزعبور</label>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password_confirmation" type="password" class="form-control" placeholder="رمزعبور خود را دوباره بنویسید" required>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                </div>
                                       <br>
								<div>
									<label for="role">نقش خود را انتخاب کنید:</label>
									<select name="role" id="role">
										<option value="student">دانشجو</option>
										<option value="master">استاد</option>
									</select>
								</div>
								<br>
								<div id="student_fields">
									<label for="student_id">کد دانشجویی:</label>
									<input type="text" name="student_id" id="student_id">
								</div>
								
								<div id="master_fields" style="display:none;">
									<label for="master_id">کد استادی:</label>
									<input type="text" name="master_id" id="master_id">
									
								</div>

								<br>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">تکمیل ثبت نام</button>
                                    </div>
                                </div>

                                
                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-2.js"></script>

	<script>
		document.getElementById("role").addEventListener("change", function() {
			if (this.value === "master") {
				document.getElementById("master_fields").style.display = "block";
				document.getElementById("student_fields").style.display = "none";
			} else {
				document.getElementById("master_fields").style.display = "none";
				document.getElementById("student_fields").style.display = "block";
			}
		});
	</script>

</body>
</html>