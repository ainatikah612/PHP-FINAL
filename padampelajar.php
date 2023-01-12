<?php 
include "config.php"; 
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "DELETE FROM info_pelajar WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "<script>alert('data berjaya delete.');
        window.location='index.php'</script>"; 
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>