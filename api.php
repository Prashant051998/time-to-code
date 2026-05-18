<?php
// Fetches recent programming-contest data from the clist.by API.
//
// Configuration: set the following environment variables before running.
// Get an API key at https://clist.by/ (account settings).
//
//   CLIST_USERNAME  your clist.by username
//   CLIST_API_KEY   your clist.by API key

$clist_username = getenv('CLIST_USERNAME') ?: '';
$clist_api_key  = getenv('CLIST_API_KEY')  ?: '';

if ($clist_username === '' || $clist_api_key === '') {
    die("Error: set CLIST_USERNAME and CLIST_API_KEY environment variables.\n");
}

$api_url = "https://clist.by:443/api/v1/contest/?username=" . urlencode($clist_username)
         . "&api_key=" . urlencode($clist_api_key)
         . "&order_by=-id";

$contest = json_decode(file_get_contents($api_url));
$first_duration = $contest->meta->limit;
?>
