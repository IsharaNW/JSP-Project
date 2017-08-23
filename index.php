
<html>
<head>
    <title> JSP Enterprises</title>

    <link rel="stylesheet" href="./css/main.css" type="text/css">
    

</head>
<body bgcolor="#c0ccd9" background="Images/SmarTID.png" >




<div id="login">


<table>
	<tr>
		<td> <img src="Images/SmarTID.png"> </td>
		<td>
			
			<form action="sources/loginValidate.php" method="post">

            <table style="width: 400px;margin: auto;text-align: center">
                <tr><td  colspan="2"><h1 class="topic">Welcome to SmarTID</h1></td> </tr>
				<tr>
				    <td>User Name :</td>
				    <td><input type="text" name="username" placeholder="Enter User Name"></td>
				</tr>
				<tr>
				    <td>Password:</td>
				    <td><input type="password" name="password" placeholder="Enter Password"></td>
				</tr>
				<br>
				<tr>  <td colspan="2"><input type="submit" value="Login" name="login_sbtn"></td></tr>

			</table>
			</form>

		</td>
	</tr>
</table>


        
</div>

</body>
</html>
