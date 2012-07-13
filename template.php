<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8"/>
	<meta name='description' content=""/>
	<meta name='keywords' content=""/>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<!-- pour ancienne version IE -->
	<!-- [if lt IE 9] >
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif] -->
	
	<?php if(!empty($titre_page)):?>
	<title><!-- Votre Societe --><?php echo $titre_page;?></title>
	<?php else: ?>
	<title><!-- Votre Societe --></title>
	<?php endif ; ?>

	<link rel="stylesheet" href="<?php echo WEBROOT; ?>styles/style.css" type="text/css" media="screen" charset="utf-8"/>
	
    <script type="text/javascript" src="<?php echo WEBROOT; ?>js/jquery.jscrollpane.min.js" ></script>
    <script type="text/javascript" src="<?php echo WEBROOT; ?>js/jquery.mousewheel.js" ></script>
	<script type="text/javascript" src="<?php echo WEBROOT; ?>js/supersized.js" ></script>
	<script type="text/javascript" src="<?php echo WEBROOT; ?>js/jquery.masonry.min.js" ></script>
	<script type="text/javascript" src="<?php echo WEBROOT; ?>js/devMedia.js" ></script>

	<?php if(isset($script_page)):?>
	<script type="text/javascript"><?php echo $script_page;?></script>
	<?php else:?>
	<?php endif;?>
     
</head>


<body>
	
	
	<div id="wrapper">
         
       	<div id="logo">
			<h1>Dev-Media</h1>	
			<!-- LE LOGO --><a href="<?php echo WEBROOT; ?>"><img src="<?php echo WEBROOT; ?>images/logo.png"/></a>
		</div>

		<div id="header">
			<p id="slogan"><!-- LE SLOGAN --></p>            
			<h1 id="titre_page"><?php if(!empty($titre_page)){echo $titre_page;}?></h1>
		</div>
                
        <?php if( !isset( $current_page ) ){ $current_page = "index" ;	}?>
                
		<!-- LE MENU --><div id="nav_menu"/>
			<ul>
				<li><a href="<?php echo WEBROOT; ?>news" <?php if($current_page =="news"){echo 'class="active"';}?> >NEWS</a></li>
				<li><a href="<?php echo WEBROOT; ?>ambiance" <?php if($current_page =="ambiance"){echo 'class="active"';}?> >AMBIANCE</a></li>
				<li><a href="<?php echo WEBROOT; ?>restaurant-bar" <?php if($current_page =="restaurant-bar"){echo 'class="active"';}?> >RESTAURANT/BAR</a></li>
				<li><a href="<?php echo WEBROOT; ?>music-jazz"<?php if($current_page =="music-jazz"){echo 'class="active"';}?>>MUSIC/JAZZ</a></li>
				<li><a href="<?php echo WEBROOT; ?>acces"<?php if($current_page =="acces"){echo 'class="active"';}?>>ACCÈS</a></li>
				<li><a href="<?php echo WEBROOT; ?>contact"<?php if($current_page =="contact"){echo 'class="active"';}?>>CONTACT</a></li>
				
			</ul>
		</div>
		
		<div id="main_content">
			
			<?php if(!empty($content)):?>
			<?php echo $content;?>
			<?php else:?>
			<?php endif;?>	
			
		</div>		
	</div><!--end wrapper -->
	<footer>
		<!-- URL DU COPYRIGHT --><a href="" id="copyright"><!-- COPYRIGHT -->copyright&copy;2012<!-- dev-media --></a>
		<nav id="footer_menu"/>
			<ul>
				<li><a href="<?php echo WEBROOT; ?>news" <?php if($current_page =="news"){echo 'class="active"';}?> >NEWS</a></li>
				<li><a href="<?php echo WEBROOT; ?>contact"<?php if($current_page =="contact"){echo 'class="active"';}?>>CONTACT</a></li>
				<li><a href="<?php echo WEBROOT; ?>site-map"<?php if($current_page =="site-map"){echo 'class="active"';}?>>PLAN DU SITE</a></li>
				<li><a href="<?php echo WEBROOT; ?>mentions-legales"<?php if($current_page =="mentions-legales"){echo 'class="active"';}?>>MENTIONS LEGALES</a></li>
				
			</ul>
		</nav>
	</footer><!--end footer -->
</body>

</html>