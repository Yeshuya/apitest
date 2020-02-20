<?php
$category = file_get_contents('http://rdapi.herokuapp.com/category/read.php');

$details = json_decode($category,true);

$list = $details['records'];
?>

<h1> Category List </h1>
</br>
<table> 
  <tr>
    <td> Category </td>
    <td> Description </td>
  </tr>
<?php
foreach($list as $value){
?>
  <tr> 
    <td><?php echo $value['name']; ?></td>
    <td><?php echo $value['description']; ?></td>
  </tr>
<?php
}
?>
</table>
