<a href="insert.php">insert</a>
<?php
class view{
    public function data(){
        $connect=mysqli_connect('localhost','root','','cruds');

        $view="SELECT * FROM information";
        
        $res=mysqli_query($connect,$view);

        return $res;
        
    }
}
$oop= new view;
$value=$oop->data();




?>
<table border="5">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>phone</td>
        <td>action</td>
    </tr>
    <?php
	while($result=mysqli_fetch_array($value)){
	?>
    <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['name']?></td>
        <td><?php echo $result['phone']?></td>
        <td>
            <a href="delete.php?$id=<?php echo $result['id']?>">delete</a>
            <a href="edit.php?$id=<?php echo $result['id']?>">edit</a>
        </td>
    </tr>
    <?php } ?>
</table>