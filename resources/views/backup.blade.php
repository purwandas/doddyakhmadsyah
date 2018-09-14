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
	#loader {
		position: absolute;
		left: 50%;
		top: 50%;
		z-index: 1;
		width: 150px;
		height: 150px;
	
		margin: -75px 0 0 -75px;
		border: 16px solid #f3f3f3;
		border-radius: 50%;
		border-top: 16px solid #ed2f39;
		-webkit-animation: spin 1s linear infinite;
		animation: spin 2s linear infinite;
	}
	.bg-oke{
		z-index: 2;
		width: 1365px;
		height: 1000px;
		background-color: black;

	}


	@-webkit-keyframes spin {
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}

	/* Add animation to "page content" */
	.animate-bottom {
		position: relative;
		-webkit-animation-name: animatebottom;
		-webkit-animation-duration: 1s;
		animation-name: animatebottom;
		animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
		from { bottom:-100px; opacity:0 } 
		to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom { 
		from{ bottom:-100px; opacity:0 } 
		to{ bottom:0; opacity:1 }
	}

</style>
<script>
	$(document).ready(function(){
		var duration = 2000;
		$("#loader").fadeOut({
			duration :duration
		});
		$(".bg-oke").fadeOut({
			duration :duration
		});
	})
</script>
</head>
<body>
	<div class="contianer-fluid">
	<div class="bg-oke">
		&nbsp;
			<div id="loader">
			<div id="loaderID">
				
			</div>
		</div>
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


</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="{{asset('dist/script.js')}}"></script>
</body>
</html>