<?php
include '../connection.php';

if(isset($_POST['submit_id'])){
    $new_user_id = $_POST['id_value'];
}

$delete_selected_user = "DELETE FROM `users` WHERE id = $new_user_id";
$delete_selected_user_now = mysqli_query($connect,$delete_selected_user);
if($delete_selected_user_now){
    header('Location: ../admin_dashboard.php');
}
else{
    echo "There's some problem while deleting from database!";
}
$delete_selected_details = "DELETE FROM `details` WHERE id = $new_user_id";
$delete_selected_details_now = mysqli_query($connect,$delete_selected_details);
if($delete_selected_details_now){
    header('Location: ../php/admin_dashboard.php');
}
else{
    echo "There's some problem while deleting from database!";
}

?>