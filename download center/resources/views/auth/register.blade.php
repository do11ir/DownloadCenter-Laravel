<!doctype html>
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
							<form method="POST" action="{{ route('register') }}" class="signin-form">
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

