<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Lotus Cable</title>

	<link href="{{asset('backend/assets')}}/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="{{asset('backend/assets')}}/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="{{asset('backend/assets')}}/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="{{asset('backend/assets')}}/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
	<link href="{{asset('backend/assets')}}/img/favicon.png" rel="icon" type="image/png">
	<link href="{{asset('backend/assets')}}/img/favicon.ico" rel="shortcut icon">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" href="{{asset('backend/assets')}}/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="{{asset('backend/assets')}}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('backend/assets')}}/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('backend/assets')}}/css/main.css">
</head>
<body>

    


    @yield('auth-content')




<script src="{{asset('backend/assets')}}/js/lib/jquery/jquery-3.2.1.min.js"></script>
<script src="{{asset('backend/assets')}}/js/lib/popper/popper.min.js"></script>
<script src="{{asset('backend/assets')}}/js/lib/tether/tether.min.js"></script>
<script src="{{asset('backend/assets')}}/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('backend/assets')}}/js/plugins.js"></script>
    <script type="text/javascript" src="{{asset('backend/assets')}}/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="{{asset('backend/assets')}}/js/app.js"></script>
</body>
</html>