<!DOCTYPE HTML>
<html>
<head>
<?
$aff_link	= 'http://indocpa.go2cloud.org/aff_c?offer_id=12&aff_id=1278&url_id=162'; // Masukan URL Affiliate Reff AffiliateBuzz Anda
$mid		= $_GET[movie];
$jsonfile 	= 'http://labs.stoodioo.com/movie/mov.php?id='.$mid;
$data 		= json_decode(file_get_contents($jsonfile));
$title		= $data->title;
$poster		= $data->poster;
$genre		= $data->genre;
$plot		= $data->plot;
$runtime	= $data->runtime;
?>
<title>Watch <?=$title;?> Movie in HD Quality</title> 
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link rel="stylesheet" href="http://labs.stoodioo.com/lp/style.c7.css"/>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body>

	<div style="height:30px;"></div>
    <div style="overflow:auto;position:relative; width:842px; background: #FFF; height:55px; margin:0px auto;border:1px dotted #666; border-bottom:3px solid black; padding:0px;">
	<img src="header.png">
	</div>
	<div id="content">
			
			
			<div id="player">
				<div class="interface button play"></div>
				<div class="interface button pause"></div>
				<div class="interface progressBar">
					<div class="interface progressStatus"></div>
				</div>
				<div class="interface volumeControl">
					<div>
						<div class="volumeLink selected"></div>
						<div class="volumeLink selected"></div>
						<div class="volumeLink"></div>
						<div class="volumeLink"></div>
						<div class="volumeLink"></div>
					</div>
				</div>
				<div id="statusWindow">
					<div class="window play">
					</div><!-- window -->
					<div class="window loading">
						<img src="loading_bar2.gif"/>
					</div><!-- window -->
					<div class="window action">
						<a href="<?=$aff_link;?>" title="Click Here to Register a FREE ACCOUNT and Continue to Watch the HD Movie">FREE ACCOUNT</a>
					</div><!-- window -->
					
				</div>
			</div><!-- player -->
			<div style="height:150px; margin-left:25px; margin-right:25px; margin-top:10px; margin-bottom:0px; border-bottom: 1px black solid; padding-bottom:10px;">
			<div style="width:130px; height:150px; padding:0px; float:left;">
			<img src="<?=$poster;?>" width="120" height="150">
			</div>
			<div style="width:500px; float:left;">
			<h2><?=$title;?> - HD Quality 720p</h2>
			<p><b>Genre : <?=$genre;?> | Runtime : <?=$runtime;?> Minutes</b></p>
			<p><?=$plot;?></p>
			</div>
			<div style="width:150px; float:right;">
			<a href="<?=$aff_link;?>" title="Download <?=$title;?> HD Movie to PC"><img src="download.png"></a><p align="center">Secure Scanned.<br><br>
			<img src="c7-star-full.png"><img src="c7-star-full.png"><img src="c7-star-full.png"><img src="c7-star-half.png"><img src="c7-star-empty.png"><br><b>
			<?
			echo number_format(rand( 1500, 5000));
			?>
			Views</b>
			</p>
			</div>
			</div>
			
	</div><!-- content -->
	<div style="overflow:auto;position:relative; width:842px; margin:0px auto; padding:0px;">
	<p align="right"><font color="white" size="1"><a href="http://stoodio2.com" target="_blank" style="color:white;">ST“”DIO2 Inc.</a></font></p>
	</div>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://labs.stoodioo.com/lp/c7-ui.js"></script>
</body>
</html>