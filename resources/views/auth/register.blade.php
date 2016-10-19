@extends('layouts.main')

@section('content')
<div class="panelForm">
	<div class="panelHeading">Register</div>
	<div class="panelBody">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
		{{ csrf_field() }}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="name" class="controlLabel">Name</label>
				<div class="controlBlock">
					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
						@endif
				</div>
			</div>
			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="controlLabel">E-Mail Address</label>
			<div class="controlBlock">
				<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
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
			<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
				<label for="password-confirm" class="controlLabel">Confirm Password</label>
				<div class="controlBlock">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					@if ($errors->has('password_confirmation'))
					<span class="help-block">
						<strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
					@endif
				</div>
			</div>
			<div class="form-group">
				<div class="controlBlock col-md-offset-4">
				<input type="submit" class="btn btn-primary" value="Register">
				</div>
			</div>
    	</form>
	</div>
</div>



@endsection
