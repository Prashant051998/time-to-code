<?php 
  // require 'mainProject/header.php'; //header file included
// api call
 $api_url="https://clist.by:443/api/v1/contest/?username=nit1999&api_key=dbad3d4e191e4bc4d5f0b67befb110afd75cef1f&order_by=-id";
 $contest=json_decode(file_get_contents($api_url));
 $first_duration=$contest->meta->limit;
 ?>
