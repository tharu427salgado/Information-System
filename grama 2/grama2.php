<?php
session_start();
if(!isset($_SESSION["email"])) {
    header("Location:../grama/grama.php");
    }
?>
<?php
if($_SESSION["email"])
?>
<?php
include "../Database/member.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
body {
  background-image: url('parliment1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration of the Chief Occupant</title>

    <!-- Icons font CSS-->

		
		
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="topnav">
        

  <a class="active" tite="Logout" href="logout.php">Logout</a>
  <a href="#news"><?php echo $_SESSION["email"]; ?></a>
  
</div>

    
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Fill the details of the Chief Occupant</h2>
                    <form method="POST">
                        <div class="input-group">
                            <label class="label">Enter Grama Niladhari Division</label>
                            <input class="input--style-4" type="text" name="division" required="" />
                        </div>
                        <div class="input-group">
                            <label class="label">Enter Village/Street/Estate</label>
                            <input class="input--style-4" type="text" name="village" required="" />
                        </div>
                        <div class="input-group">
                            <label class="label">Enter Household Number</label>
                            <input class="input--style-4" type="number" name="hnumber" required="" />
                        </div>
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name2" required="" />
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic2" required="" />
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday2" required="" />
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" value="Male" name="gender2" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone2" required="">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship2">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship2">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>






                    <h2 class="title">Fill the details of the member 01 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem1">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem1">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem1">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem1">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem1">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem1">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem1">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 02 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem2">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem2">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem2">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem2">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem2">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem2">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem2">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>    

                    <h2 class="title">Fill the details of the member 03 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem3">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem3">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem3">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem3">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem3" >
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem3">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem3">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem3">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 04 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem4">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem4">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem4">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem4">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem4">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem4">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem4">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem4">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem4">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 05 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem5">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem5">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem5">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem5">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem5">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem5">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem5">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem5">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem5">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 06 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem6">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem6">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem6">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem6">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem6">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem6">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem6">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem6">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem6">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 07 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem7">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem7">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem7">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem7">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem7">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem7">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem7">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem7">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem7">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Fill the details of the member 08 </h2>
                    
                        <div class="input-group">
                            <label class="label">Full name as per the national identity card</label>
                            <input class="input--style-4" type="text" name="name_mem8">
                        </div>
                        <div class="input-group">
                            <label class="label">National Identity card number</label>
                            <input class="input--style-4" type="text" name="nic_mem8">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of Birth</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday_mem8">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Male" checked="checked" name="gender_mem8">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Female" name="gender_mem8">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Phone Number</label>
                            <input class="input--style-4" type="text" name="phone_mem8">
                        </div>
                        <div class="input-group">
                            <label class="label">Relationship to the chief occupant</label>
                            <input class="input--style-4" type="text" name="relationship_mem8">
                        </div>
                        <div class="input-group">
                            <label class="label">Whether a Sri Lankan citizen or not?</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">Yes
                                    <input type="radio" checked="checked" value="Yes" name="citizenship_mem8">
                                        <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" value="No" name="citizenship_mem8">
                                        <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    <h2 class="title">Finish the form </h2>

                        <div class="input-group">
                            <label class="label">No.of members added including the chief occupant</label>
                            <input class="input--style-4" type="number" name="number" required="">
                        </div>
                        <div class="input-group">
                            <label class="label">Address of the chief occupant</label>
                            <input class="input--style-4" type="text" name="address" required="">
                        </div>
                        <div class="input-group">
                            <label class="label">Date</label>
                            <div class="input-group-icon">
                                <input class="input--style-4 js-datepicker" type="text" name="date" required="">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Special notes</label>
                            <input class="input--style-4" type="text" name="notes">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" type="submit" id="submit">Submit</button>
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--radius-2 btn--blue" type=button onClick="parent.location='../recordedsuccessfully/recordedsuccessfully.html'">Finish</button>                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
   

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->