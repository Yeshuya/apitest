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
    <td><a href="product_details.php?id=<?php echo $value['id'];?>"> <?php echo $value['name'];?> </a></td>
    <td><?php echo $value['price']; ?></td>
    <td><?php echo $value['category_name']; ?></td>
  </tr>
<?php
}
?>
</table>
