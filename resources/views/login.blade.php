<!DOCTYPE html>
<html lang="en">
<head>


<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('bootstrap.min.css') }} >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('font-awesome.min.css') }} >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('animate.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('hamburgers.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('select2.min.css') }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= {{ asset('util.css') }}>
	<link rel="stylesheet" type="text/css" href= {{ asset('main.css') }}>
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<div class="profile_pic">
						<img src= {{ asset('images/cuervos.jpg') }}  alt="..." class="img-circle profile_img">
					</div>
				</div>
                {{Form::open(['route' => 'valida','class'=>'login100-form validate-form'])}}
                {{Form::token()}}


					<span class="login100-form-title">
						Login Sistema de Tutorias
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">

                        {!! Form::text('correo',null,['class'=>'input100', 'placeholder'=>'Correo']) !!}


						<span class="focus-input100"></span>
					</div>
                     @if($errors->first('password'))
			         <i> {{ $errors->first('password') }} </i>
		              @endif
                <br>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                        {{ Form::password('password', ['class' => 'input100','placeholder' => 'Contraseña']) }}
						<span class="focus-input100"></span>

					</div>
					<br>
					<div class="container-login100-form-btn">
                        {{Form::Submit('Iniciar Sesion',['class'=>'login100-form-btn'])}}
                        @if (Session::has('error'))
                        <div>{{ Session::get('error') }}</div>
	                    @endif
					</div>

			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src= {{ asset('vendor/jquery/jquery-3.2.1.min.js') }}></script>
<!--===============================================================================================-->
	<script src= {{ asset('vendor/bootstrap/js/popper.js') }}></script>
	<script src= {{ asset('vendor/bootstrap/js/bootstrap.min.js') }}></script>
<!--===============================================================================================-->
	<script src= {{ asset('vendor/select2/select2.min.js') }}></script>
<!--===============================================================================================-->
	<script src= {{ asset('vendor/tilt/tilt.jquery.min.js') }}></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src= {{ asset('js/main.js') }}></script>

</body>
</html>
