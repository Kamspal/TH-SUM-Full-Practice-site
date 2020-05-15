<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/favicon.ico" />

    <link rel="stylesheet" href="/css/new.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
  	<link rel="stylesheet" href="/css/slide.css" type="text/css">
	
    
    <title>TH = SUM</title>
</head>
<body>

<section id="blog">
    <div class="container1">
        <div class="left1">
            <a href="/blog">Blog</a>
        <br class="clearfloat">
            <div class="sidebar">
                Topics:
                <div class="sidebarnav">
                    <ul>
                        <li><a href=""><i class="fa fa-plus-circle" aria-hidden="true"></i>News</a> (12)
                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="js/slide.js" type="text/javascript"></script>
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
        $(function(){

            $('.nav-links a').click(function(){

            $('.nav-links .active').removeClass('active'); // remove the class from the currently selected
            $(this).addClass('active'); // add the class to the newly clicked link

        });

        });
    </script>
   
</body>
</html>





