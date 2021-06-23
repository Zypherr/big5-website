<?php

    if (isset($_POST['btn-send']))
    {
        $UserName = $_POST['Fname'];
        $Email = $_POST['Email'];
        $CountryCode = $_POST['Selectcountry'];
        $Contact = $_POST['Contact'];
        $Msg = $_POST['Msg'];

        $Headers = "From: $UserName | $Email";
        $Subject = "Big 5 Webiste - Partnership Contact form";

        $FullBody = "From: $UserName\nEmail: $Email\nCountry Call Code: $CountryCode\nContact Number: $Contact\nSite Form: Partnership Contact From\n \n $Msg";

        if (empty($UserName) || empty($Email) || empty($Msg))
        {
            header('location:https://big5esports.co.za/Partner-Opportunities.php?error');
        }
        else
        {
            $to = "info@big5esports.co.za";
            if (mail($to, $Subject, $FullBody, $Headers))
            {
                header("location:https://big5esports.co.za/Partner-Opportunities.php?success");
            }
        }
    }
    else
    {
        header("location:https://big5esports.co.za/Partner-Opportunities.php");
    }

?>
