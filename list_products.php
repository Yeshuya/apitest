<?php
$products = file_get_contents('http://rdapi.herokuapp.com/product/read.php');

$details = json_decode($products,true);

$list = $details['records'];
?>

<table> 
  <tr>
    <td> Product </td>
    <td> Price </td>
    <td> Category </td>
  </tr>
<?php
foreach($list as $value){
?>
  <tr> 
    <td><?php echo $value['name']; ?></td>
    <td><?php echo $value['price']; ?></td>
    <td><?php echo $value['category_name']; ?></td>
  </tr>
<?php
}
?>
</table>
