<?php
$products = file_get_contents('http://rdapi.herokuapp.com/product/read.php?id='.$id);

$product_details = json_decode($products,true);

$details = array('records' => $product_details);

$list = $details['records'];
?>

<table> 
  <tr>
    <td> Product Name </td>
    <td> <?php echo $list['name'];?> </td>
  <tr>
  <tr>
    <td> Description </td>
    <td> <?php echo $list['description'];?> </td>
  <tr>
  <tr>
    <td> Price </td>
    <td> <?php echo $list['price'];?> </td>
  <tr>
  <tr>
    <td> Category </td>
    <td> <?php echo $list['category_name'];?> </td>
  <tr>
</table>
