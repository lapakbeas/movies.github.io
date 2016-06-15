<?
 
$rt_key         = 'ygwpwnh5wu6tyfb5n5uxqf49'; //ganti dg API key kamu
 
 
header('Content-Type: text/xml');
 
echo '<?xml version="1.0" encoding="ISO-8859-1"?>
<rss version="2.0">
<channel>
<title>C#7 Movie Database</title>
<description>MovieDB RSS Feed</description>
<link>http://streaming.mandiricollections138.com/rssmovie.php</link>'; //ganti dengan URL tempat script ini disimpan
 
$rt_page        = 15; //jumlah entri rss movie
$rt_request     = 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/opening.json?limit='.$rt_page.'&country=us&apikey='.$rt_key;
$rt_data        = json_decode(file_get_contents($rt_request));
 
$i=0;
while ($i < $rt_page )
{
        $rt_movie_title = $rt_data->movies[$i]->title;
        $rt_movie_year  = $rt_data->movies[$i]->year;
        $rt_movie_id    = $rt_data->movies[$i]->id;
        $rt_movie_sinopsis = $data->movies[0]->synopsis;
        $rt_movie_rel   = date('l, F j, Y', strtotime($rt_data->movies[$i]->release_dates->theater));
       
 
                               
                echo '
<item>
<guid>'.$rt_movie_id.'</guid>
                        <title>'.$rt_movie_title.' ('.$rt_movie_year.')</title>
<description><![CDATA[Watch '.$rt_movie_title.' ('.$rt_movie_year.') Movie Online Streaming in HD for Free]]></description>
<link>'.$rt_movie_id.'</link>
<pubDate>'.$rt_movie_rel.' GMT</pubDate>
</item>';
 
       
        $i++;
   
}
echo '</channel>
</rss>';
?>