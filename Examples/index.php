<?php session_start(); ?>
<html>
<head><title>Transformation Web Application</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<?php 
include ("head.html"); 
?> 
<!-- Table for Main Body -->
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<tr>
<td></td>
<td></td>

<td valign="top" align="left" width="90">

<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="result.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" /><br />
Enter Email of user: <input type="email" name="useremail"><br />
Enter Phone of user (1-XXX-XXX-XXXX): <input type="phone" name="phone">


<input type="submit" value="Send File" />
</form> </td>
<td></td>
<td></td>

</tr>
<tr>
<td></td>

<td>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="gallery.php" method="POST">
    
Enter Email of user for gallery to browse: <input type="email" name="email">
<input type="submit" value="Load Gallery" />
</form>

</td>
<td></td>
</tr>
</table>
</body>
</html>


















