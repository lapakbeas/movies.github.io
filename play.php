<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?
$aff_link       = 'aff here'; // Masukan URL Affiliate Reff AffiliateBuzz Anda
$mid            = $_GET[movie];
$jsonfile       = 'http://labs.stoodioo.com/movie/mov.php?id='.$mid;
$data           = json_decode(file_get_contents($jsonfile));
$title          = $data->title;
$poster         = $data->poster;
$genre          = $data->genre;
$plot           = $data->plot;
$runtime        = $data->runtime;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Watch Movies Online</title>
    <link rel="shortcut icon" href="http://www.google.com/s2/favicons?domain=www.pushplay.com" />
    <link rel="stylesheet" href="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/css/movie_player/main.php?site=vidcube&cache=12" type="text/css" />
    <script type="text/javascript" src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/js/movie_player/main.php?site=vidcube&cache=8"></script>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script>
    jQuery(document).ready(function()
    {
        var clicked = false;
        jQuery('#play-btn').click(function () {
            if (!clicked)
            {
                var a_el = jQuery(this);
                jQuery('#loader').css('display', 'block');
                setTimeout(function() {
                    jQuery('#loader').fadeOut('slow', function() {
                        jQuery(a_el).attr('href', '<?=$aff_link;?>');
                    });
                }, 1500);
                jQuery('#player').addClass('create-account');
                clicked = true;
            }
        });
    });
    </script>
</head>
 
<body>
 
    <div id="wrapper" class="container_16">
        <div id="header">
                <img src="header.png" alt="logo" />
                <a href="<?=$aff_link;?>" id="download">Download Now</a>
        <div class="clear"></div>
        </div><div id="player">
  <div id="player-top">
    <h3 class="movie-title"><? echo $title; ?> HD Streaming - 720p</h3>
    <p class="rating"> <img src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/stars.png" alt="stars" /><br />
    3582 Views </p>
    <div id="loader"> <img src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/loader.gif" alt="loader" /> </div>
    <a style="cursor:pointer;" id="play-btn">Play Now</a> </div>
    <p class="small-movie-title"><img src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/ajax-loader.gif" /> <? echo $title; ?> . LOADING...</p>
</div>
 
<div class="grid_16"> <br />
  <p style="line-height:75px;"><span style="font-weight:bold; font-size:20px; float:left; padding-left:25px;">Available Formats &nbsp;</span> <a href="<?=$aff_link;?>"><img style="float:left" src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/formats.png" /></a> &nbsp;&nbsp;<img src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/secure.png" /> <strong>Secure Scanned, No Virus Detected</strong></p>
</div>
<div class="grid_16"><span style="float: left; margin-right:20px; margin-bottom:10px;"><img src="<?=$poster;?>"" width="100" height="120"></span><b>Movie Title : <font color="red"><? echo $title; ?></font><br>
Movie Genre : <font color="red"><? echo $genre; ?></font><br/>Duration : <? echo $runtime; ?><br>Movie Synopsis : <? echo $plot; ?></b></div>
<div class="grid_16">
</div>
<div class="grid_16"><p><a href="<?=$aff_link;?>"><img src="http://wac.20F5.edgecastcdn.net/8020F5/200581/_tour/images/_movie_player/footer.png" /></a></p>
</div>
    <div class="clear"></div>
    </div>
        <div style="overflow:auto;position:relative; width:960px; margin:0px auto; padding:0px;">
        <p align="right"><a href="http://muvii123.com/" target="_blank" style="color:white; text-decoration: none; font-size:x-small;">Muvii123 | Movies Internet Download Database</a></p>
        </div>
    <!--#wrapper-->
</body>
</html>