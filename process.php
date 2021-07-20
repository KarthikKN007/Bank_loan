<?php

    $servername="localhost";
    $username="hariharan";
    $password="wordpass@test5";
    $dbname="loanapplication";
    $table="customerdata";
    //$action= $_POST["action"];
    //$action="GET_ALL";

//creating connection
    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed");
        echo"connection failed";
        return;
    } 
    $firstname = $_GET["memfirstname"];
    $lastname = $_GET["memlastname"];
    $dob = $_GET["memdob"];
    $gender = $_GET["memgender"];
    $phone = $_GET["memphone"];
    $email = $_GET["mememail"];
    $maritialstatus = $_GET["memmaritalstatus"];
    $address = $_GET["memaddress"];
    $state = $_GET["memstate"];
    $pincode = $_GET["mempincode"];
    $country =$_GET["memcountry"];
    $dependentstatus =$_GET["memdependentstatus"];
    $noofdependents = $_GET["memnoofdependents"];
    $coborrowerstatus = $_GET["memcoborrowerstatus"];
    $comembername = $_GET["memconame"];
    $comemberage = $_GET["memcoage"];
    $comemberincome = $_GET["memcoincome"];
    $loantype=$_GET["memloantype"];
    $stateofhomeloan=$_GET["memstateofhomeloan"];
    $cityofhomeloan=$_GET["memcityofhomeloan"];
    $brandcarloan=$_GET["brandcarloan"];
    $modelcarloan=$_GET["modelcarloan"];
    $purchaseprice=$_GET["mempurchaseprice"];
    $downpayment=$_GET["memdownpayment"];
    $desiredamount=$_GET["memdesiredamount"];

//$sql="insert into $table(firstname) VALUES('$firstname')";
    $sql="insert into $table(firstname,lastname,dob,gender,phone,email,maritialstatus,address,state,pincode,country,dependentstatus,noofdependents,coborrowerstatus,comembername,comemberage,comemberincome,loantype,stateofhomeloan,cityofhomeloan,brandcarloan,modelcarloan,purchaseprice,downpayment,desiredamount) VALUES('$firstname','$lastname','$dob','$gender','$phone','$email','$maritialstatus','$address','$state','$pincode','$country','$dependentstatus','$noofdependents','$coborrowerstatus','$comembername','$comemberage','$comemberincome','$loantype','$stateofhomeloan','$cityofhomeloan','$brandcarloan','$modelcarloan','$purchaseprice','$downpayment','$desiredamount')";
    $result=$conn->query($sql);
    if($result==true)
        echo "success";
    else echo"failure";
    $conn->close();
    return;

    


?>