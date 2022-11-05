<a href="view.php">View</a>
<?php
class edit{
    public function edit_data(){
        $id=$_GET['$id'];
        $connect=mysqli_connect('localhost','root','','cruds');

        $edit="SELECT * FROM information WHERE id='$id'";

        $va=mysqli_query($connect,$edit);

        $val=mysqli_fetch_assoc($va);

        return $val;
    }
}
if(isset($_POST['btn'])){
include "update.php";
$po= new update;
$po->data();
}
$opt= new edit;
$values=$opt->edit_data();

?>

<form action="" method="post">
<label>Name</label>
<input type="text" name="name" value="<?php echo $values['name'] ?>">
<input type="hidden" name="blog_id" value="<?php echo $values['id'] ?>">
<label>Phone</label>
<input type="number" name="phone" value="<?php echo $values['phone'] ?>">
<input type="submit" name="btn" value="Update">
</form>