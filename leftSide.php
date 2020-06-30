<div class="column1" style="background-color:#78C0E0;border-radius: 12px;box-shadow: 2px 2px 12px #78C0E0">
    <center>
    <img  src="logos/time2code logo.png" alt="" style="width:100px;height:100px;border-radius: 50%;">
    <h3><strong>Time2Code</strong></h3><br>
    <button class="ContestBtn" style="background-color: #452815">All Contest</button>
    <br>
    <button class="ContestBtn" style="background-color: #452815">Codechef</button>
    <br>
    <button class="ContestBtn" style="background-color: #fff;color: #185BB8;">Codeforces</button>
    <br>
    <button  class="ContestBtn" style="background-color:#2B3455"><a href="#HackerEarth"></a>HackerEarth</button>
    <br>
    <button class="ContestBtn" style="background-color:#FDA115">LeetCode</button>
    <br>
    <button class="ContestBtn" style="background-color:#2B5B96;color:#fff;">spoj</button>
    <br><br>
    <p><strong>Please select timezone</strong></p>
        <?php
/**
 * Timezones list with GMT offset
 *
 * @return array
 * @link http://stackoverflow.com/a/9328760
 */
session_start();
function tz_list() {
  $zones_array = array();
  $timestamp = time();
  foreach(timezone_identifiers_list() as $key => $zone) {
    date_default_timezone_set($zone);
    $zones_array[$key]['zone'] = $zone;
    $zones_array[$key]['diff_from_GMT'] = "UTC/GMT"." ".date('P', $timestamp);
  }
  return $zones_array;
}
?>
<div style="margin-top: -13px;width:100%; overflow:hidden">
  <form method="post" action="main.php">
  <select class="form-control" style="font-family: 'Courier New', Courier, monospace;width:420px;"  name="zoneVal">
   <!-- <option value="0">Plz,select timezone</option> -->
    <?php foreach(tz_list() as $t) { ?>
      <option value="<?php print $t['diff_from_GMT'] ?>">
        <?php 
        echo $t['diff_from_GMT']. $t['zone'];
         ?>
      </option>
    <?php } ?>
  </select>
  <input class="btn btn-success mt-1"  type="submit" name="submit" value="submit">
  </form>
</div>

   <?php 
// get data information from list_of_timezone
  
  if(isset($_POST['submit'])){
$zoneVal = $_POST['zoneVal'];
//echo "Your registration is: ".gettype($zoneVal);

///---------------offset value
$offset_value_get=0;
if($zoneVal[0]=='-'){
 //$hrMin=ltrim($zoneVal, '-');
 $hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
 $hrMin_int=(int)$hrMin;
 $min=$hrMin%100;
 $hr=($hrMin_int-$min)/100;
$offset_value=($hr*60+$min)*60;
 //echo "-".$offset_value;
 $strToint_offset="-".$offset_value;
 $offset_value_get=(int)$strToint_offset;
 //echo $offset_value_get;

}
else if($zoneVal[0]=='+'){
$hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
 $hrMin_int=(int)$hrMin;
 $min=$hrMin%100;
 $hr=($hrMin_int-$min)/100;
$offset_value=($hr*60+$min)*60;
 //echo $offset_value;
 $strToint_offset=$offset_value;
 $offset_value_get=(int)$strToint_offset;
//echo $offset_value_get;
}
}
else{
//$zoneVal = $_POST['zoneVal'];
//echo "Your registration is: ".gettype($zoneVal);

///---------------offset value
$offset_value_get=0;
 //$hrMin=ltrim($zoneVal, '-');
 //$hrMin = preg_replace("/[^0-9]/", "", $zoneVal);
$offset_value=330*60;
 //echo "-".$offset_value;
 $strToint_offset=$offset_value;
 $offset_value_get=(int)$strToint_offset;
 //echo $offset_value_get;

}



     ?>
    <br>
    
    <br>
    </center>

    <div>
    <h6 style="float: left;margin-left: 40px;"><a style="color:black;text-decoration: none;" href="#">About Us</a></h6>
    <h6 style="float: left;margin-left: 30px;"><a style="color:black;text-decoration: none;" href="#">Contact Us</a></h6>
    </div>
  </div>
  