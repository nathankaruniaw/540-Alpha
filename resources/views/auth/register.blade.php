<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>

	@include('admin.admin_layouts.header')

</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo" style="background-color: #E0D5BB;">
		<div class="navbar-header">
			<!-- Logo -->
			<!-- <a class="navbar-brand" href="index.html"><img src="/dashboardAssets/logo/odoroki.png" alt=""></a> -->
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Simple login form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="panel panel-body login-form">

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="name" placeholder="Enter your name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
                            <div class="form-group has-feedback has-feedback-left">
                                <input id="username" placeholder="Enter your username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                <div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password" placeholder="Enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password-confirm" placeholder="Enter your password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn bg-pink-400 btn-block">{{ __('Register') }}<i class="icon-circle-right2 position-right"></i></button>
							</div>

                        </div>
                    </form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted text-center">
						<a style="background-color: #E0D5BB;color: white;" href="https://www.instagram.com/larv.studio/">Design and developed by LARVSTD</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>