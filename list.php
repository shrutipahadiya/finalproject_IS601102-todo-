<?php
echo "<h1> To do list system </h1></br>";
echo "Welcome, ".$_COOKIE['login'].'</br>';
echo "Below you may find your to-do items: ";
echo "</br></br>";
?>

<html>
 <body>
   <table>
     <tr>
       <?php foreach($result as $res):?>
       
        <tr>
	<td><a href='detail.php'><?php echo $res['todo_item']; ?></a> </td>  
   <td>
<form action='index.php' method='post'>
<input type='hidden' name='item_id' value='<?php echo $res['id'] ?>'/>
<input type='hidden' name='action' value='delete'/>
<input type='submit' value='Delete'/>
</form>
   </td>
   </tr>
       <?php endforeach;?>
     </tr>
   </table>
   <form method='post' action='index.php'>
      <strong>Description: </strong><input type='text' name='description' /> </br>
      <input type='hidden' name= 'action' value='add'/></br>
      <input type="submit" value="Add"/></br>
   </form>
 </body>
</html>
