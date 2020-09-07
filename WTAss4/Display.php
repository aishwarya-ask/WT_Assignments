<?php
   if ($_POST['dropdownValue']){
    //call the function 
    $selected=$_POST['dropdownValue'];
	
   include 'Data.php';
   $url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new jsonData($url);

	$jsonArr = $show->completeData();
	$option=$show->option;
	$key=array_search($selected,$option);
	$details = $jsonArr['menu_items'][$key];
	
	
	$id = $details['id'];
	$short_name = $details['short_name'];
	$name = $details['name'];
	$description = $details['description'];
	$price_small = $details['price_small'];
	$price_large = $details['price_large'];
	$small_portion_name = $details['small_portion_name'];
	$large_portion_name = $details['large_portion_name'];
	
	
    
}

?>
    <html>
    <body>
	<center>
		<br><br><br>
	<table border="4" style='background-color:white;'>
	
    <tr><td><b>ID :</b></td><td><?php echo "$id"; ?></td></tr>
    <tr><td><b>Short Name :</b></td><td><?php echo "$short_name"; ?></td></tr>
    <tr><td>Name :</td><td><?php echo "$name"; ?></td></tr>
    <tr><td>Description :</td><td><?php echo "$description"; ?></td></tr>
    <tr><td>Price_Small :</td><td><?php echo "$price_small"; ?></td></tr>
    <tr><td>Price_Large :</td><td><?php echo "$price_large"; ?></td></tr>
    <tr><td>Small Portion Name : </td><td><?php echo "$small_portion_name"; ?></td></tr>
    <tr><td>Large Portion Name : </td><td><?php echo "$large_portion_name"; ?></td></tr>
    </table>
    </center>
    </body>
    </html>

