<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title') &mdash; {{ config('app.name') }}</title>
        <link rel="shortcut icon" href="{{ asset('img/stisla.png') }}">

		<!-- General CSS Files -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" />

		<!-- CSS Libraries -->
		@yield('stylesheet')

		<!-- Template CSS -->
		<link rel="stylesheet" href="{{ mix('css/style-admin.css') }}">
	</head>
	<body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                @include('admin.layouts.partials.nav')
                @include('admin.layouts.partials.sidebar')
                <div class="main-content">
                    @yield('content')
                </div>
                @include('admin.layouts.partials.footer')
            </div>
        </div>

        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltip.js/1.1.6/tooltip.min.js" integrity="sha512-VQvSspqj4VPIihOu36vhReegYws6UwrsigF1Tgm5ixVIFAjc1FN0Zbtc2awCoDHwxOm6oOOeD2fXeUfSr/gj6g==" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js" integrity="sha512-zMfrMAZYAlNClPKjN+JMuslK/B6sPM09BGvrWlW+cymmPmsUT1xJF3P4kxI3lOh9zypakSgWaTpY6vDJY/3Dig==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
        <script src="{{ mix('js/admin.js') }}"></script>

        <!-- JS Libraies -->
        @stack('js-libraries')

        <!-- Page Specific JS File -->
        @stack('js-custom')

        <!-- Template JS File -->
        <script src="{{ mix('js/template-admin.js') }}"></script>
	</body>
</html>
