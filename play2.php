<?
$aff_link	= 'http://indocpa.go2cloud.org/aff_c?offer_id=12&aff_id=1278&url_id=162'; // Masukan URL Affiliate Reff IndoCPA Anda
$rt_key		= 'qem6dvs7txeh3mzsptpgwc45'; // Masukkan API Key RottenTomatoes
$sitename       = 'Watch Streaming HD Live Online'; // Nama Situs Movie atau Akun YouTube dll. 
?>

<?
$mid		= $_GET[movie];
$jsonfile 	= 'http://labs.stoodioo.com/movie/mov2.php?id='.$mid;
$data 		= json_decode(file_get_contents($jsonfile));
$title		= $data->title;
$poster		= $data->poster;
$genre		= $data->genre;
$plot		= $data->plot;
$runtime	= $data->runtime;
$backdrop	= $data->backdrop;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Now Playing : <?=$title;?></title>
<!--// Stylesheets //-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="css/scrollbar.css" rel="stylesheet" type="text/css" />
<!--// Javascript //-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/jquery.1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.lint.js"></script>
<script type="text/javascript" src="js/jquery.scroll.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="js/switch.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400-Myriad_Pro_700-Myriad_Pro_italic_400-Myriad_Pro_italic_700.font.js"></script>
<script src="js/c7-ui.js"></script>

<!--[if lte IE 7]><style>.comments .commentlinks{margin-left:250px;}
.comments .singlebtn{margin-left:380px;}
.comments ul li:hover .commentlinks{display:inline-block;}
.comments ul li.level2:hover .commentlinks{margin-left:210px;}
.comments ul li.level2:hover .singlebtn{margin-left:340px;}
</style><![endif]--><!-- that's IT-->
</head>
<body>
<span class="biglines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">
	<!-- Top Section -->
    <div class="top_sec">
    	<!-- Top Section Left Links -->
        <div class="toplinks">
        	<ul>
            	<li class="first"><?=$sitename;?></li>
                <li><a href="<?=$aff_link;?>">Mature Warning: On</a></li>
                <li><a href="<?=$aff_link;?>">Login</a></li>
                <li><a href="<?=$aff_link;?>">Signup</a></li>
            </ul>
        </div>
        <!-- Top Section right Links -->
        <div class="links_icons">
        	<ul>
            	<li><a href="<?=$aff_link;?>" class="browse">Browse</a></li>
                <li><a href="<?=$aff_link;?>" class="upload">Upload</a></li>
                <li class="last lang">Language: <a href="<?=$aff_link;?>"><img src="images/flag1.gif" alt="" /></a></li>
            </ul>
        </div>
    </div>
    <div style="height:50px;"></div>

    <div class="clear"></div>
    <!-- Banner -->
    <div id="banner">
    	<div id="slider2" class="leftsecbanner">
            <div class="contentdiv">
            <div style="width:791px;height:18px;margin:0px; padding:0px;"><div style="width:20px;float:left;margin:0px; padding-top:1px;"><img src="./images/loader.gif" width="14"></div><div style="width:740px;float:left;margin:0px; padding:0px;"><font size="3"><?=$title;?> &raquo; Loading...</font></div></div>
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
						<img src="./images/loading_bar2.gif"/>
					</div><!-- window -->
					<div class="window action">
						<a href="<?=$aff_link;?>" title="Click Here to Register a FREE ACCOUNT and Continue to Watch the HD Movie"></a>
					</div><!-- window -->
					
				</div>
			</div><!-- player -->

            </div>

        </div>
        <div id="paginate-slider2">
        	<div class="usual">
                <ul class="idTabs">
                  <li><a href="#idTab1" class="selected"><span>Played</span></a></li>
                  <li><a href="#idTab2"><span>Top Rated</span></a></li>

                </ul>
                <div id="idTab1" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<a href="#" title="<?=$title;?>" class="toc selected">
                        	<span class="thumb"><img src="<?=$backdrop;?>" width="77" height="50" alt="" /></span>
                            <span class="desc">
                            	<span class="title"><?=substr($title,0,10);?></span>
                                <span class="time"><?=$runtime;?></span>

                            </span>
                        </a>

<?

$rt_page	= 5;
$rt_request	= 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/upcoming.json?apikey='.$rt_key.'&page_limit='.$rt_page;
$rt_data	= json_decode(file_get_contents($rt_request));
$i=0;
while ($i < $rt_page )
{
$rt_imdbid	= $rt_data->movies[$i]->alternate_ids->imdb;
$rt_title       = $rt_data->movies[$i]->title;
$rt_year       = $rt_data->movies[$i]->year;
$rt_runtime     = $rt_data->movies[$i]->runtime;
$rt_release	= date('F j, Y', strtotime($rt_data->movies[$i]->release_dates->theater));
$rt_poster	= $rt_data->movies[$i]->posters->thumbnail;
$imdbid = $rt_imdbid;
	 $jsonfile2='http://gdata.youtube.com/feeds/api/videos?v=2&alt=jsonc&q='.str_replace(' ','+',$rt_title).'+('.$rt_year.')+trailer&max-results=1';
	 $data2 = json_decode(file_get_contents($jsonfile2));
	 $video_kode = $data2->data->items[0]->id;
         $gbr0 = 'http://i.ytimg.com/vi/'.$video_kode.'/0.jpg';
	 $gbr1 = 'http://i.ytimg.com/vi/'.$video_kode.'/1.jpg';
	 $gbr2 = 'http://i.ytimg.com/vi/'.$video_kode.'/2.jpg';
	 $gbr3 = 'http://i.ytimg.com/vi/'.$video_kode.'/3.jpg';
$h = floor (($rt_runtime - $d * 1440) / 60);
$m = $rt_runtime - ($d * 1440) - ($h * 60);
$runtime = $h.':'.$m;
?>
                        <a href="play.php?movie=<?=$rt_imdbid;?>" title="<?=$rt_title;?>" class="toc">
                            <span class="thumb"><img src="<?=$gbr2;?>" width="77" height="50" alt="" /></span>
                            <span class="desc">
                                <span class="title"><?=$rt_title;?></span>
                                <span class="time"><?=$runtime;?></span>

                            </span>
                        </a>
<? $i++; } ?>
                    </div>
                </div>
                <div id="idTab2" class="tabssection">
                    <div class="css-scrollbar simple">
<?
$rt_request2	= 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?apikey='.$rt_key.'&page_limit='.$rt_page;
$rt_data2	= json_decode(file_get_contents($rt_request2));
$i=0;
while ($i < 5 )
{
$rt_imdbid	= $rt_data2->movies[$i]->alternate_ids->imdb;
$rt_title       = $rt_data2->movies[$i]->title;
$rt_year       = $rt_data2->movies[$i]->year;
$rt_runtime     = $rt_data2->movies[$i]->runtime;
$rt_release	= date('F j, Y', strtotime($rt_data2->movies[$i]->release_dates->theater));
$rt_poster	= $rt_data2->movies[$i]->posters->thumbnail;
$rt_synopsis    = $rt_data2->movies[$i]->synopsis;
$imdbid = $rt_imdbid;
	 $jsonfile2='http://gdata.youtube.com/feeds/api/videos?v=2&alt=jsonc&q='.str_replace(' ','+',$rt_title).'+('.$rt_year.')+trailer&max-results=1';
	 $data2 = json_decode(file_get_contents($jsonfile2));
	 $video_kode = $data2->data->items[0]->id;
         $gbr0 = 'http://i.ytimg.com/vi/'.$video_kode.'/0.jpg';
	 $gbr1 = 'http://i.ytimg.com/vi/'.$video_kode.'/1.jpg';
	 $gbr2 = 'http://i.ytimg.com/vi/'.$video_kode.'/2.jpg';
	 $gbr3 = 'http://i.ytimg.com/vi/'.$video_kode.'/3.jpg';
$h = floor (($rt_runtime - $d * 1440) / 60);
$m = $rt_runtime - ($d * 1440) - ($h * 60);
$runtime = $h.':'.$m;
?>

                    	<a href="play.php?movie=<?=$rt_imdbid;?>" class="toc" title="<?=$rt_title;?>">
                        	<span class="thumb"><img src="<?=$gbr2;?>" width="77" height="50" alt="" /></span>
                            <span class="desc">
                            	<span class="title"><?=substr($rt_title,0,11);?></span>
                                <span class="time"><?=$runtime;?></span>

                            </span>
                        </a>
<? $i++; } ?>
                    </div>
                </div>


          	</div>
			<div class="clear"></div>
        </div>
        <script type="text/javascript" src="js/banner.js"></script>
    </div>
    <div class="clear"></div>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Column 1 -->
        <div class="col1">
        	<!-- Featured Playlist -->
        	<div class="featured_playlist">
            	<h3 class="heading">You Watching <?=$title;?></h3>
                <p><?=$plot;?><p>

            </div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<div class="recent_head">
                	<h3>Being Wathed</h3>
                    <a href="<?=$aff_link;?>" class="viewall">(View All)</a>
                    <div class="recent_buttons">
                    	<ul>
                        	<li class="gridbutn"><a href="#" class="switch_thumb">&nbsp;</a></li>

                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <ul class="display">
<?
$rt_request2	= 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?apikey='.$rt_key.'&page_limit='.$rt_page;
$rt_data2	= json_decode(file_get_contents($rt_request2));
$i=0;
while ($i < 4 )
{
$rt_imdbid	= $rt_data2->movies[$i]->alternate_ids->imdb;
$rt_title       = $rt_data2->movies[$i]->title;
$rt_year       = $rt_data2->movies[$i]->year;
$rt_runtime     = $rt_data2->movies[$i]->runtime;
$rt_release	= date('F j, Y', strtotime($rt_data2->movies[$i]->release_dates->theater));
$rt_poster	= $rt_data2->movies[$i]->posters->thumbnail;
$rt_synopsis    = $rt_data2->movies[$i]->synopsis;
$imdbid = $rt_imdbid;
	 $jsonfile2='http://gdata.youtube.com/feeds/api/videos?v=2&alt=jsonc&q='.str_replace(' ','+',$rt_title).'+('.$rt_year.')+trailer&max-results=1';
	 $data2 = json_decode(file_get_contents($jsonfile2));
	 $video_kode = $data2->data->items[0]->id;
         $gbr0 = 'http://i.ytimg.com/vi/'.$video_kode.'/0.jpg';
	 $gbr1 = 'http://i.ytimg.com/vi/'.$video_kode.'/1.jpg';
	 $gbr2 = 'http://i.ytimg.com/vi/'.$video_kode.'/2.jpg';
	 $gbr3 = 'http://i.ytimg.com/vi/'.$video_kode.'/3.jpg';
$h = floor (($rt_runtime - $d * 1440) / 60);
$m = $rt_runtime - ($d * 1440) - ($h * 60);
$runtime = $h.':'.$m;
$views   = rand(500,1030);
?>
                	<li>
                    	<a href="play.php?movie=<?=$rt_imdbid;?>" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="<?=$gbr1;?>" width="155" height="113" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="play.php?movie=<?=$rt_imdbid;?>" class="colr"><?=$rt_title;?></a></h4>
                            <div class="clear"></div>

                            <div class="clear"></div>
                            <p class="txt">
                            	<?=substr($rt_synopsis, 0, 200);?>
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#"><?=$sitename;?></a></p>
                                <p class="views"><span class="left">Views: </span><a href="#"><?=$views;?></a></p>
                            </div>
                            <div class="right">
                            	<p class="time"><?=$runtime;?></p>
                            	<p class="date"><span><?=$rt_release;?></span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="play.php?movie=<?=$rt_imdbid;?>" class="colr"><?=$rt_title;?></a></h6>
                            <div class="clear"></div>
                            <p class="time"><?=$runtime;?></p>
                            <p class="date"><?=$rt_release;?></p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views"><?=$views;?> Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>

<? $i++; } ?>
                </ul>
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col2">
        	<!-- Advertisment -->
        	<div class="adv">
            	<a href="#" title="<?=$title;?>"><img src="<?=$poster;?>" width="286" height="370" alt="<?=$title;?>" /></a>
            </div>
            <div class="clear"></div>

    </div>
</div></div>
<div class="clear"></div>
<!-- Footer -->
<div id="footer">
	<div class="inner">
    	<!-- Top button Section -->
        <div class="topbutonsec"><a href="#">Top</a></div>
        <div class="clear"></div>


<div class="clear"></div>
<div id="copyrights">
	<div class="inner">
    	<p>Copyright © 2013 <?=$sitename;?>. All rights reserved.</p>
        <div class="designdby">
        	<p>LP Developed By: <a href="http://stoodio2.com" target="_blank">STÒÓDIO2 Labs</a></p>

        </div>
    </div>
</div>
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="hit counter script" ><script  type="text/javascript" >
try {Histats.start(1,2310623,4,111,175,25,"00011111");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2310623&101" alt="hit counter script" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</html>