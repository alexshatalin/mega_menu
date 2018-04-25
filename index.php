<!DOCTYPE html>
<html>
  <head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<script src="dev_template/template.js"></script>
  </head>
  <body>
    <div class="cs_page_container">
    	<header class="cs_main_menu">
	  		<nav class="header_top_menu">
	  			<div class="cs_header_container centered">
						<div class="menu_inner_section">
							<div class="search_container">
								<?php require('content/search_bar.php');?>
							</div>
							<ul class="sub_menu">
								<li><a href="/blog">blog</a></li>
								<li><a href="/live-chat"><span class="icon fa fa-commenting-o"></span>live chat</a></li>
								<li><a href="/request-info">request info</a></li>
								<li><a href="/"><span class="fa fa-globe"></span><span class="selected_name">english</span><span class="fa fa-chevron-down"></span></a>
									<ul class="dropdown">
										<li><a href="/sites/es/">Español</a></li>
										<li><a href="/sites/it/">Italiano</a></li>
										<li><a href="/sites/fr/">Français</a></li>
										<li><a href="/sites/de/">Deutsch</a></li>
										<li><a href="/sites/jp/">日本語</a></li>
									</ul>
								</li>
							</ul>
						</div>
	  			</div>
	  		</nav>
	  		<nav class="header_bottom_menu">
				<div data-menu-active="true" class="mega_menu">
					<div class="mega_menu__header">
						<div class="cs_header_container centered">
							<div class="header_logo"><a href="/"></a></div>
							<div id="csMobileMenuBtn" class="mobile_menu_btn"><span></span></div>
		  					<div class="menu_inner_section">
								<ul class="mega_menu__links">
				  					<li><a data-id="solutions" href="/solutions">solutions<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a data-id="products" href="/products">products<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a data-id="services" href="/services">services<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a data-id="company" href="/company">company<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a data-id="partners" href="/partners">partners<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a data-id="resources" href="/resources">resources<span class="fa fa-chevron-down"></span></a></li>
				  					<li><a href="/default">15-day free trail</a></li>
				  				</ul>
			  				</div>
			  			</div>
					</div>
					<div class="mega_menu__body">
						<div data-id="solutions" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel solutions</div>
						</div>
						<div data-id="products" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel products</div>
						</div>
						<div data-id="services" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel services</div>
						</div>
						<div data-id="company" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel company</div>
						</div>
						<div data-id="partners" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel partners</div>
						</div>
						<div data-id="resources" class="mega_menu__panel">
							<div data-menu-active="true" class="cs_header_container centered">single_menu_panel resources</div>
						</div>
					</div>
				</div>
	  		</nav>
	  	</header>
		<div class="cs_page_content">
			<div class="mobile_nav_section">
    			<div class="mobile_nav_content">
    				<?php require('content/search_bar.php');?>
					<?php require('content/mobile_menu_list.php');?>

    			</div>
    		</div>
    		<div class="cs_main_section">
    			<main>
	    			<img src="images/page_tmp.png" />
	    		</main>
    		</div>
    	</div>
    </div>
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/cs_menu.js"></script>
  </body>
</html>
