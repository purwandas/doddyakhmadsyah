<!DOCTYPE html>
<html>
<head>
	<title>Doddy Akhmadsyah</title>
	 <meta name="description" content="A professional HTML landing page for your mobile application. Developed by Vlad Sargu at VSArt.">
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/common/logo/logo_banteng.png')}}">
    <link rel="stylesheet" href="{{asset('dist/style.css')}}">
    <!-- End of StyleSheets -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body class="js-preload-me">
	<div class="preloader js-preloader">
		<span class="preloader__circle preloader__circle--primary"></span>
		<span class="preloader__circle preloader__circle--secondary"></span>
		<span class="preloader__circle preloader__circle--tertiary"></span>
	</div>

	<div class="page js-page">
		@include('mobile_menu')
		@include('header')
		@include('hero')
		@include('mukadimah')
		@include('profil')
		@include('visi_misi')
		@include('cara_pilih')
		@include('galery')
	</div>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="{{asset('dist/script.js')}}"></script>
</body>
</html>