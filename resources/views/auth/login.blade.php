@extends('layouts.main')

@section('content')
<div class="panelForm">
	<div class="panelHeading">Login</div>
		<div class="panelBody">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
			{{ csrf_field() }}
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	   			<label for="email" class="controlLabel">E-Mail Address</label>
	   			<div class="controlBlock">
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				<label for="password" class="controlLabel">Password</label>
				<div class="controlBlock">
					<input id="password" type="password" class="form-control" name="password" required>
					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
			</div>
				<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>
				</div>
			</div>
				<div class="form-group">
				<div class="col-md-8 col-md-offset-4">
					<input type="submit" class="btn btn-primary" value='Login'>
					<a class="sidebar-category__item__link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
