<?php

    if (isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Msg = $_POST['msg'];
        $Headers = "$UserName | $Email";
        $Subject = "Big 5 Webiste - Contact form";

        $FullBody = "From: $UserName\nEmail: $Email\nSite Form: Contact us\n \n $Msg";

        if (empty($UserName) || empty($Email) || empty($Msg))
        {
            header('location:https://big5esports.co.za/contact-us.php?error');
        }
        else
        {
            $to = "info@big5esports.co.za";
            if (mail($to, $Subject, $FullBody, $Headers))
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
