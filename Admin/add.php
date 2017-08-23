<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Add</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<h1 class="topic">Add to Database</h1>




<!-------------------------------------------------------------------------->

<br>
<div class="h2div" >Add Employee </div>
<br>

<div class="div">
<br>

    <form action="../sources/save_add_employee.php" method="post">
        <table>
            <tr>
                <td>First Name :</td>
                <td><input type="text" name="FName"></td> 
            </tr>
            <tr>
                <td>Last Name :</td>
                <td><input type="text" name="LName"></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td> Male :
                    <input type="radio" name="Gender" value="Male">
                    Female :
                    <input type="radio" name="Gender" value="Female" checked="checked"></td>
            </tr>
            <tr>
                <td>NIC :</td>
                <td><input type="text" name="Nic"></td>
            </tr>
            <tr>
                <td>Date Of Birth :</td>
                <td><input type="text" name="Dob"></td>
            </tr>
            <tr>
                <td>Type :</td>
                <td> Admin :
                <input type="radio" name="type" value="Administrator" checked="checked">
                Manager :
                <input type="radio" name="type" value="Manager">
                Stock Keeper :
                <input type="radio" name="type" value="StockKeeper">
                FSE :
                <input type="radio" name="type" value="FSE"></td>
            </tr>
            <tr>
                <td>Telephone Number :</td>
                <td><input type="text" name="TelNum"></td>
            </tr>
            <tr>
                <td>Address :</td>
                <td><input type="text" name="Address"></td>
            </tr>
            <tr>

                <td ><input class="bttn" type="submit" name="submit" value="Add Employee"></td>
                <td><input class="bttn" type="reset" name="clearemp" value="Clear"></td>
            </tr>
        </table>

    </form >
            
    




<!-------------------------------------------------------------------------->



<br>
<div class="h2div" >Add Shops </div>
<br>

<div class="div">
<br>


        <form action="../sources/save_add_shop.php" method="post">
            <table border="0">
                
                <tr>
                    <td><label class="">Shop Name</label></td>
                    <td><input type="text" class="" name="Sname"></td>
                </tr>
                <tr>
                    <td><label class="">Owner Name</label></td>
                    <td><input type="text" class="" name="Oname"></td>
                </tr>
                
                <tr>
                    <td><label class="">Owner NIC</label></td>
                    <td><input type="text" class="" name="NIC"></td>
                </tr>
                <tr>
                    <td><label class="">Contact Number</label></td>
                    <td><input type="text" class="" name="TPNum"></td>
                </tr>
                
                <tr>
                    <td><label class="">Address</label></td>
                    <td><input type="text" class="" name="address"></td>
                </tr>
                <tr>
                    <td><label class="">Route ID</label></td>
                    <td><input type="text" class="" name="RouteId"></td>
                </tr>
                <tr>
                    <td><input class="bttn" type="submit" name="submit" value="Save"></td>
                    <td><input class="bttn" type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
            
    



</div>

<!------------------------------------------------------------>

<br>
<div class="h2div" >Add Route </div>
<br>

<div class="div">
<br>

<form action="../sources/savw_add_route.php" method="post">
            <table border="0">
                
                <tr>
                    <td><label class="">Route Name</label></td>
                    <td><input type="text" class="" name="Rname"></td>
                </tr>
                <tr>
                    <td><label class="">Distance</label></td>
                    <td><input type="text" class="" name="Distance"></td>
                </tr>
            
                <tr>
                    <td><input class="bttn" type="submit" name="submit" value="Save"></td>
                    <td><input class="bttn" type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
            
    



</div>






</center>
  </body>
</html>