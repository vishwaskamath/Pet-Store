<?php
include_once 'config.php';
if (isset($_POST['btn-upload'])) {

   
    $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder = "uploads/";
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // new file size in KB
    $new_size = $file_size / 1024;
    // new file size in KB

    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file = str_replace(' ', '-', $new_file_name);

    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        $sql = "INSERT INTO trainer(img,name,phone) VALUES('$final_file','$name','$phone')";

        mysqli_query($con, $sql);
?>
        <script>
            alert('successfully uploaded');
            window.location.href = 'insert_trainer.php?success';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('error while uploading file');
            // window.location.href='index.php?fail';
        </script>
<?php
    }
}
?>
<?php 
$id= $_POST['id'];
if (isset($_POST['btn-uploaded'])) {
    
    $sql = "DELETE FROM trainer WHERE $id=id";

    mysqli_query($con, $sql);
    ?>
    <script>
            alert('successfully Deleted');
            window.location.href = 'delete_trainer.php?success';
        </script>
        <?php
    
}

?>