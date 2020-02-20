<?php
$category = file_get_contents('http://rdapi.herokuapp.com/category/read.php');

$details = json_decode($category,true);

$list = $details['records'];
?>

<h1> Category List </h1>
</br>
<table border="1px black solid"> 
  <tr>
    <th> Category </th>
    <th> Description </th>
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
