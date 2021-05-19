<?php
include '../partials/connection.php';
if(isset($_GET['delete']))
{
    $sno = $_GET['delete'];
    echo $sno;
    $sql2 = "DELETE FROM `LOGIN` WHERE `LOGIN`.`SID` = $sno";
    $result2 = mysqli_query($Connect_DB,$sql2);
    if($result2)
    {
        header("location:/_CRUD/index.php");
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
if(isset($_POST['snoEdit']))
{
    $SNO = $_POST['snoEdit'];
    $EMAIL  = $_POST['_email1'];
    $PASSWORD  = $_POST['_password1'];
    echo $SNO;
    $sql = "UPDATE `LOGIN` SET `EMAIL` = '$EMAIL', `PASSWORD` = '$PASSWORD' WHERE `LOGIN`.`SID` = $SNO";
    $result = mysqli_query($Connect_DB,$sql);
    if ($result)
    {
        header("location:/_CRUD/index.php");
    }
    else
    {
        header("location:/_CRUD/index.php");
    }

}
}
?>