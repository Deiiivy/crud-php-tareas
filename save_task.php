
<?php 

include("db.php");
if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    echo $title;
    echo $description;

    $query = "INSERT INTO taks(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("query failed");
    }

    $_SESSION['message'] = 'taks saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
}
?>