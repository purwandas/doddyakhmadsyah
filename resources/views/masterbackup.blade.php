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
      <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
     <style type="text/css">
    .preloaderx {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #ed2f39;

    }
    .preloaderx .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
    }

    </style>
<script>
    $(document).ready(function(){
    	var duration = 2000;
      $(".preloaderx").fadeOut({
      	duration :duration
      });
    })
    </script>
</head>
<body>
	 <div class="preloaderx">
      <div class="loading">
        <img src="{{asset('assets/img/banteng.png')}}" width="500">
      </div>
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
		@include('video')
	</div>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="{{asset('dist/script.js')}}"></script>
</body>
</html>