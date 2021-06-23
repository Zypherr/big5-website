<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['Fname'];
       $Email = $_POST['Email'];
	   $CountryCode = $_POST['Selectcountry'];
	   $Contact = $_POST['Contact'];
       $Msg = $_POST['Msg'];
	   
       if(empty($UserName) || empty($Email) || empty($CountryCode) || empty($Contact) || empty($Msg))
       {
           header('location:https://big5esports.co.za/Parter-Opportunities.php?error');
       }
       else
       {
           $to = "kds.gametech@gmail.com";

           if(mail($to,$Msg,$Email))
           {
               header("location:https://big5esports.co.za/Parter-Opportunities.php?success");
           }
       }
    }
    else
    {
        header("location:https://big5esports.co.za/Parter-Opportunities.php");
    }
?>