<?php
class delete{
    public function data(){
        $id=$_GET['$id'];
        $connect=mysqli_connect('localhost','root','','cruds');
        $delete="DELETE FROM information WHERE id='$id' ";
        $data=mysqli_query($connect,$delete);

        if($data){
            header('location:view.php');
        }
    }
    
}
$obt= new delete;
$obt->data();


?>