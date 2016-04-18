<!DOCTYPE html>
<?php
//returns a big old hunk of JSON from a non-private IG account page.
function scrape_insta($username) {
	$insta_source = file_get_contents('http://instagram.com/'.$username);
	$shards = explode('window._sharedData = ', $insta_source);
	$insta_json = explode(';</script>', $shards[1]);
	$insta_array = json_decode($insta_json[0], TRUE);
	return $insta_array;
}
//Supply a username
$my_account = 'staytruetattoos';
//Do the deed
$results_array = scrape_insta($my_account);
 for($cnt=0; $cnt < 100; $cnt++)
{
 $latest_array = $results_array['entry_data']['ProfilePage'][0]['user']['media']['nodes'][$cnt];

 echo 'Latest Photo:<br/>';
 echo '<a href="http://instagram.com/p/'.$latest_array['code'].'"><img src="'.$latest_array['display_src'].'"></a></br>';
 echo 'Likes: '.$latest_array['likes']['count'].' - Comments: '.$latest_array['comments']['count'].'<br/>';
}
?>
