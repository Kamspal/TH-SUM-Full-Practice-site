<header>
    <div class="logo">
        <a href="/home"><img src="images/logo.jpg" alt=""></a>
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

<footer>
    <div class="footer-img">
        <img src="images/footer.gif" alt="">
    </div>
    <div class="container-fluid">
        <div class="float-left">
            @ TH= SUM 2020. All Rights Reserved <br>
            <img class="dosome" src="images/sumthingText.gif" alt="">
        </div>
        <div class="nav">
            Navigation <br>
            <a href="">// Home</a> <br>
            <a href="">// About</a> <br>
            <a href="">// Work</a> <br>
            <a href="">// Blog</a> <br>
            <a href="">// Contact</a> 
        </div>
            <div class="nav">
                    Social <br>
                    <a href="">// Blog</a> <br>
                    <a href="">// Facebook</a> <br>
                    <a href="">// Twitter</a> <br>
            </div>
                <div class="nav float-right">
                    105-1010 Chilco Street, Vancouver, British Columbia, V6G 2R6 <br>
                    //  p. 604.765.8831  // 
                    <a href="">e.hello@thesum.ca</a> 
                </div>
    </div>
</footer>