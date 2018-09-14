<!DOCTYPE html>
<html class="no-js" lang="">
<head >
	<title>Doddy Akhmadsyah</title>
	 <meta name="description" content="A professional HTML landing page for your mobile application. Developed by Vlad Sargu at VSArt.">
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/common/logo/logo_banteng.png')}}">
    <link rel="stylesheet" href="{{asset('dist/style.css')}}">
    <!-- End of StyleSheets -->
    
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css">
       <link rel="stylesheet" href="{{asset('demo/main.css')}}">
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

</head>
<body>
<div id="depreload" style="background-color: black;" class="tablex">
<div class="table-cellx wrapperx">
<div class="circlex">
  <canvas class="linex" width="860px" height="860px"></canvas>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Logo_PDI-Perjuangan_Transparent.png/600px-Logo_PDI-Perjuangan_Transparent.png" class="logox" alt="logox" />
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
  	@include('video')
	</div>
  

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><script src="{{asset('dist/script.js')}}"></script>
        <script src="{{asset('jquery.DEPreLoad.js')}}"></script>
     
 <script>
            $(window).load(function() {
                
                setMargin();

                setTimeout(function(){
                    $("#depreload .wrapperx").animate({ opacity: 1 });
                }, 400);

                setTimeout(function(){
                    $("#depreload .logox").animate({ opacity: 1 });
                }, 800);

                var canvas  = $("#depreload .linex")[0],
                    context = canvas.getContext("2d");

                context.beginPath();
                context.arc(280, 280, 260, Math.PI * 1.5, Math.PI * 1.6);
                context.strokeStyle = '#fff';
                context.lineWidth = 5;
                context.stroke();

                var loader = $("body").DEPreLoad({
                    OnStep: function(percent) {
                        console.log(percent + '%');

                        $("#depreload .linex").animate({ opacity: 1 });
                        $("#depreload .percx").text(percent + "%");

                        if (percent > 5) {
                            context.clearRect(0, 0, canvas.width, canvas.height);
                            context.beginPath();
                            context.arc(280, 280, 260, Math.PI * 1.5, Math.PI * (1.5 + percent / 50), false);
                            context.stroke();
                        }
                    },
                    OnComplete: function() {
                        $('#depreload').fadeOut(7000, function(){ $('#depreload').remove(); } );
                    }
                });
            });
            $(document).ready(function () {
              $(window).resize(function () {
                console.log($('.header').width());
                // console.log($(window).width());
                setMargin();
              })
            })

            function setMargin() {
              var width = $(window).width();

              if (width >= 973) {
                $('#main-image').css('margin-top', '0px');
                windowWidth = $(window).width()*80/100;
                windowWidth2 = $(window).width()*127.5/100;
              }else if (width >= 754) {
                $('#main-image').css('margin-top','0px');
                windowWidth = $(window).width()*80/100;
                windowWidth2 = $(window).width()*129.5/100;
              }else if (width >= 464) {
                $('#main-image').css('margin-top','60px');
                windowWidth = $(window).width()*80/100;
                windowWidth2 = $(window).width()*131.5/100;
              }else{
                $('#main-image').css('margin-top','90px');
                windowWidth = $(window).width()*80/100;
                windowWidth2 = $(window).width()*133.5/100;
              }

              console.log(width)

                $('.circlex').width(windowWidth);
                $('.circlex').height(windowWidth);
                $('.linex').width(windowWidth2);
                $('.linex').height(windowWidth2);
            }
</script>
	
</body>
</html>