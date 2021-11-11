<?php
include 'config.php';
$un=$_GET['un'];
if($un=='')
{
    echo "<script>alert('You are not allowed to open this page directly');</script>";
}
else
{
    $sql="SELECT * FROM admin WHERE username='$un'";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($run);
    if($row[isauth]=='1')
    {
        echo "<script>alert('Your account is already verified');</script>";
    }
    else
    {
        $sql="UPDATE `admin` SET `isauth`='1' WHERE username='$un'";
        if(mysqli_query($conn,$sql))
        {
            echo "<script>alert('Your account is verified now');</script>";
        }
        else
        {
            echo "<script>alert('Something went wrong');</script>";
        }
    }
    echo "<script>window.location.href='login.php';</script>";
}
;?>