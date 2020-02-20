<?php
$products = file_get_contents('http://rdapi.herokuapp.com/product/read.php');

$details = json_decode($products,true);

$list = $details['records'];
?>

<h1> Product List </h1>
</br>
<table> 
  <tr>
    <th> Product </th>
    <th> Price </th>
    <th> Category </th>
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
