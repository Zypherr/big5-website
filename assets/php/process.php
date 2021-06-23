<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           header('location:https://big5esports.co.za/contact-us.php?error');
       }
       else
       {
           $to = "kds.gametech@gmail.com";

           if(mail($to,$Msg,$Email))
           {
               header("location:https://big5esports.co.za/contact-us.php?success");
           }
       }
    }
    else
    {
        header("location:https://big5esports.co.za/contact-us.php");
    }
?>