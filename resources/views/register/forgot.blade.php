<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>找回密码 - {{ env('APP_NAME') }}</title>
	<link rel="stylesheet" href="{{ url('/asset/register/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ url('/asset/register/css/my-login.css') }}">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="{{ url('/asset/register/img/devops.png') }}" alt="devops">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">找回密码</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{url('account/forgot')}}">
								@if ($errors)
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								@if ($login_success)
									<div class="alert alert-success">
										<h6><b>密码重置邮件已发送到，请登录操作：</b></h6>
										<ol>
											@foreach ($login_success as $key => $url)
												<li><a href='mailto:{{ $url }}' target="_blank">{{ $url }}</a></li>
											@endforeach
										</ol>
									</div>
								@endif
								<div class="form-group">
									<label for="email">邮箱地址</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ @$request_params['email'] }}" required autofocus>
									<div class="invalid-feedback">
										无效的邮箱地址
									</div>
									<div class="form-text text-muted">
										点击“找回密码”，我们将发送密码重置链接到您的邮箱
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit"  id="btnSubmit" class="btn btn-primary btn-block">
										找回密码
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; {{ date('Y') }} &mdash; {{ env('LDAP_USER_DOMAIN') }}
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ url('/asset/register/js/jquery-3.3.1.slim.min.js') }}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="{{ url('/asset/register/js/my-login.js') }}"></script>
</body>
</html>