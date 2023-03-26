<a id="toggle" href="#"><i class="fa fa-bars"></i></a>
	<div id="overlay"></div>	
	<nav id="menu" class="nav-section">
	<div id="mob_Logo"><img src="img/logo.png"  /></div>
	<div id="mob_menu_title" class="row text-center justify-content-center align-self-center " style="border-bottom:1px dotted #fff;padding-bottom:15px;">Orient Flower Jr. College</div>
	
	 <ul>
		<li><a href="./">Home</a></li>		
		<li><a href="./privacy">Privacy Policy</a></li> 
		<li><a href="./terms">Terms &amp; Conditions</a></li> 
		<li><a href="./refunds">Cancellations &amp; Refund</a></li> 
		<?php 		
		if( isset($_SESSION['Student_ID']) && isset($_COOKIE['KXZUR9VVPH2SJSD2SUQV']) ) 
		{
			?>
				<li><a href="#" class="logoutBtn">Logout</a></li> 
			<?php
		}
		?>
		
	  </ul>
	</nav>