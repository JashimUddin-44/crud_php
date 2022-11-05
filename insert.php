<a href="view.php">View</a>
<?php
class insert{
    public function data(){
         $name=$_POST['name'];
         $phone=$_POST['phone'];
        //  echo $name."<br>";
        //  echo $phone;
        $connect=mysqli_connect('localhost','root','','cruds');
        // if($connect){
        //     echo "connect";
        // }
        $insert="INSERT INTO information(name,phone) VALUES('$name','$phone')";
        // echo '<pre>';
        // print_r($insert);
        mysqli_query($connect,$insert);

    }
}
$oop= new insert;
if(!empty($_POST)){
	$oop->data($_POST['name'],$_POST['phone']);
}

?>
<form action="" method="post">
<label>Name</label>
<input type="text" name="name" placeholder="type your name">
<label>Phone</label>
<input type="number" name="phone" placeholder="type your number">
<input type="submit" name="btn" value="Save">
</form