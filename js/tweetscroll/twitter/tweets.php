<?php
session_start();
require_once("twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = $_GET['mlfryman'];
$notweets = $_GET['5'];
$consumerkey = "SmNZSWqH6sDalZ2Bvhkk4rvFk";
$consumersecret = "SjsfrYStwMvQbWcmN37dwWQswMxP7jZ7ZhCRimNr0KpWte177R";
$accesstoken = "37436396-uXtFEoN1Rf5soB7yYbTqhWnqsHTw9viULsgQiEbIb";
$accesstokensecret = "GsbvMAzBk1ZnuiYJ774SdyZQKTfmYcaKyQDe3A7xwYAFc";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>
