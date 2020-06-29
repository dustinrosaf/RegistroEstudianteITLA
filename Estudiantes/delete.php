<?php 


    include '../helpers/utilities.php';
    
    session_start();

    $student = $_SESSION['student'];


    if(isset($_GET['id'])){

        $studentId = $_GET['id'];

        $elementIndex = getIndexElement($student,'id',$studentId);

        unset($student[$elementIndex]);

        $_SESSION['student'] = $student;

        
    }

    header("Location: ../index.php");
    exit()

?>

