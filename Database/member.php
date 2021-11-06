<?php 
    $db_name = "grama_niladhari";
    $username = "root";
    $password = "";
    $servername = "127.0.0.1";
    $con = mysqli_connect($servername,$username,$password,$db_name);
    
if (isset($_POST['submit'])) {
    $Grama_Division = $_POST["division"];
    $Village = $_POST["village"];
    $HouseNumber = $_POST["hnumber"];
    $Occupant_Name = $_POST["name2"];
    $Occupant_NIC = $_POST["nic2"];
    $Occupant_DOB = date('Y-m-d', strtotime($_POST["birthday2"]));
    $Occupant_Gender = $_POST["gender2"];
    $Occupant_Telno = $_POST["phone2"];
    $Occupant_SriLankan = $_POST["citizenship2"];

    $Name_mem1 = $_POST["name_mem1"];
    $NIC_mem1 = $_POST["nic_mem1"];
    $DOB_mem1 = date('Y-m-d', strtotime($_POST["birthday_mem1"]));
    $Gender_mem1 = $_POST["gender_mem1"];
    $Telno_mem1 = $_POST["phone_mem1"];
    $Relationship_mem1 = $_POST["relationship_mem1"];
    $SriLankan_mem1 = $_POST["citizenship_mem1"];

    $Name_mem2 = $_POST["name_mem2"];
    $NIC_mem2 = $_POST["nic_mem2"];
    $DOB_mem2 = date('Y-m-d', strtotime($_POST["birthday_mem2"]));
    $Gender_mem2 = $_POST["gender_mem2"];
    $Telno_mem2 = $_POST["phone_mem2"];
    $Relationship_mem2 = $_POST["relationship_mem2"];
    $SriLankan_mem2 = $_POST["citizenship_mem2"];

    $Name_mem3 = $_POST["name_mem3"];
    $NIC_mem3 = $_POST["nic_mem3"];
    $DOB_mem3 = date('Y-m-d', strtotime($_POST["birthday_mem3"]));
    $Gender_mem3 = $_POST["gender_mem3"];
    $Telno_mem3 = $_POST["phone_mem3"];
    $Relationship_mem3 = $_POST["relationship_mem3"];
    $SriLankan_mem3 = $_POST["citizenship_mem3"];

    $Noof_members = $_POST["number"];
    $Address = $_POST["address"];
    $Date = date('Y-m-d', strtotime($_POST["date"]));
    $Notes =$_POST["notes"];

    $sql = "INSERT INTO `member_details`(`Grama_Division`, `Village`, `HouseNumber`, `Occuapnt_Name`, `Occupant_NIC`, `Occupant_DOB`, `Occupant_Gender`, `Occupant_Telno`, `Occupant_SriLankan`, `Name_mem1`, `NIC_mem1`, `DOB_mem1`, `Gender_mem1`, `Telno_mem1`, `Relationship_mem1`, `SriLankan_mem1`, `Name_mem2`, `NIC_mem2`, `DOB_mem2`, `Gender_mem2`, `Telno_mem2`, `Relationship_mem2`, `SriLankan_mem2`, `Name_mem3`, `NIC_mem3`, `DOB_mem3`, `Gender_mem3`, `TelNo_mem3`, `Relationship_mem3`, `SriLankan_mem3`, `Noof_members`, `Address`, `Date`, `Notes`) VALUES('$Grama_Division','$Village','$HouseNumber','$Occupant_Name','$Occupant_NIC','$Occupant_DOB','$Occupant_Gender','$Occupant_Telno','$Occupant_SriLankan','$Name_mem1','$NIC_mem1','$DOB_mem1','$Gender_mem1','$Telno_mem1','$Relationship_mem1','$SriLankan_mem1','$Name_mem2','$NIC_mem2','$DOB_mem2','$Gender_mem2','$Telno_mem2','$Relationship_mem2','$SriLankan_mem2','$Name_mem3','$NIC_mem3','$DOB_mem3','$Gender_mem3','$Telno_mem3','$Relationship_mem3','$SriLankan_mem3','$Noof_members','$Address','$Date','$Notes')";
    $result = mysqli_query($con,$sql);
    
    if($result) {
        echo "registered successfully";
    }
    else {
        echo "some error occured";
    }
}
?>