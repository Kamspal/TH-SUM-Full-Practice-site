<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/new.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.css" type="text/css">
  	<link rel="stylesheet" href="/css/slide.css" type="text/css">
	
    
    <title>TH = SUM - What we're up to</title>
</head>
<body>

<header>
    <div class="logo">
        <a href="/home"><img src="/images/logo.jpg" alt=""></a>
	</div>

   <!-- Panel -->
   <div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="formLabel">
				<h3>CLIENT LOGIN</h3>
			<!-- end .formLabel --></div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix">
				<label class="grey">Username:</label>
                <input type="username" id="username" placeholder="">
			<!-- end .left --></div>
            <div class="left">
				<label class="grey">Password:</label>
                <input type="username" id="username" placeholder="">
			<!-- end .left --></div>

			
			<div class="left">
			<button class="button1" type="button">Login</button>
			<!-- end .left --></div>
			     <!-- end Login Form --></form>
			<br class="clearfloat" />
			<div class="paneltxt">
				Not a client?  Interested in working together? <a href="">Click here to request a quote for your next project!</a>
			<!-- end .paneltxt --></div>
			<span id="panelerror" style="margin-left: 298px; color: #fb6467; font-weight: bold; "/>
		</div>

    </div>

	<!-- The tab on top -->
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>


			<li id="toggle">
				<a id="open" class="open" href="#">Client Login</a>
				<a id="close" style="display: none;" class="close1" href="#">Close Panel</a>
			</li>
			<li class="right">&nbsp;</li>
		</ul>
	    </div> <!-- / top -->

	</div> <!--panel -->

</header>

@include('menu')
@yield('content')

<footer>
    <div class="footer-img">
        <img src="/images/footer.gif" alt="">
    </div>
    <div class="container-fluid">
        <div class="float-left">
            @ TH= SUM 2020. All Rights Reserved <br>
            <img class="dosome" src="/images/sumthingText.gif" alt="">
        </div>
        <div class="nav">
            Navigation <br>
            <a href="/home">// Home</a> <br>
            <a href="/about">// About</a> <br>
            <a href="/work">// Work</a> <br>
            <a href="/blog">// Blog</a> <br>
            <a href="/contact">// Contact</a> 
        </div>
            <div class="nav">
                    Social <br>
                    <a href="/blog">// Blog</a> <br>
                    <a href="">// Facebook</a> <br>
                    <a href="">// Twitter</a> <br>
            </div>
                <div class="nav float-right1">
                    105-1010 Chilco Street, Vancouver, British Columbia, V6G 2R6 <br>
                    //  p. 604.765.8831  // 
                    <a href="">e.hello@thesum.ca</a> 
                </div>
    </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="/js/slide.js" type="text/javascript"></script>
    <script>
         $(function() {
            var offset = $(".logo").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $(".logo").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $(".logo").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>

    <script>

    $(function() {
        $('.nav-links a[href^="/' + location.pathname.split("")[1] + '"]').addClass('active');
    });
    
    </script>

    @stack('post_scripts')
   
</body>
</html>