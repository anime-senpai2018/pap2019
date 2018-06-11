
	$addtocart .= "</form>
    </div>";

/* ADD-TO-FAVORITES */ //
<?php

$q = "SELECT * FROM #__{vm}_favorites WHERE user_id ='$my->id' AND product_id='$product_id'" ;
      $db->query( $q );
      $db->next_record();
if ($db->f("user_id") < 1 ){
    if(!empty($_POST)) {
  $_POST['product_id'] = addslashes($product_id);
  $_POST['user_id'] = addslashes($user_id);


  $Sql = "INSERT INTO jos_vm_favorites SET product_id='$product_id', user_id='$my->id', fav_date=NOW()";
  $Query = mysql_query($Sql) or die("Niet geslaagd!");
  $addtofavorites = " this is a favorite";
} else {
$url= "index.php?page=shop.product_details&amp;flypage=$flypage&amp;product_id=$product_id&category_id=$category_id&amp;manufacturer_id=0&amp;option=com_virtuemart&amp;Itemid=26";
   $user_id=$auth["user_id"];
   if ( $user_id == 0 ){
      $addtofavorites = " please log in to add this products to your favorites";}

if ($db->f("user_id") > 1 ){ $addtofavorites = " this is a favorite";}
/* END ADD TO FAVORITES **/

/* LIST ALL REVIEWS **/
  if (PSHOP_ALLOW_REVIEWS == '1') {
?>