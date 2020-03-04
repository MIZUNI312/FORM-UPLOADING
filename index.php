<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>STUDENT REGISTRATION FORM</h3>

 
<table align="center" cellpadding = "10">

<form action="post.php" method="post">
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="20" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="10" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
  <!----- Middle Name ---------------------------------------------------------->
<tr>
<td>MIDDLE NAME</td>
<td><input type="text" name="Middle_Name" maxlength="10" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
 <!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30" required></textarea></td>
</tr>
  
<!----- Date of Birth ---------------------------------------------------------->
<tr>
<td>DATE OF BIRTH</td>
<td><input type="date" name="Date_of_Birth" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Place of Birth ---------------------------------------------------------->
<tr>
<td>PLACE OF BIRTH</td>
<td><input type="text" name="Place_of_Birth" maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" required />
Female <input type="radio" name="Gender" value="Female" required />
</td>
</tr>
  
<!----- Guardian ---------------------------------------------------------->
<tr>
<td>GUARDIAN</td>
<td><input type="text" name="Guardian" maxlength="40" required />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Contact Number ---------------------------------------------------------->
<tr>
<td>CONTACT NUMBER</td>
<td>
<input type="text" id="Contact_Number" name="Contact_Number" placeholder="+63*********"3 maxlength="13"  pattern="[+0-9]{13}" required value="+63" />
</td>
</tr>
  
<!----- Civil Status ---------------------------------------------------------->
<tr>
<td>CIVIL STATUS</td>
<td><input type="text" name="Civil_Status" maxlength="20" required />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Year Level ---------------------------------------------------------->
<tr>
<td>YEAR LEVEL</td>
<td>
<select name="Year_Level" id="Year_Level" required>
<option value="-1">Year Level:</option>
<option value="1st year">1st Year</option>
<option value="2nd year">2nd Year</option>
<option value="3rd year">3rd Year</option>
<option value="4th year">4th Year</option>
<option value="5th year">5th Year</option>
</td>
</tr>

<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSE</td>
<td>
<select name="Course" id="Course" required>
<option value="-1">Course:</option>
<option value="BS-IT">BS-IT</option>
<option value="BS-CPE">BS-CPE</option>
<option value="BS-DS">BS-DS</option>
<option value="BS-TCM">BS-TCM</option>

<!----- School Year ---------------------------------------------------------->
<tr>
<td>SCHOOL YEAR</td>
<td><input type="text" name="School_Year" maxlength="30" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 

</body>
</html>