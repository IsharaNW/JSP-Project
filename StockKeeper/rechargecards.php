<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>Recharge Cards</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<h1 class="topic">Recharge Cards</h1>

<br>
<div class="h2div" >Summary</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Type</th>
		<!--remaining amount-->
		<th class="tablerecharge">Re-Order level</th>
		<th class="tablerecharge">Buffer level</th>
	</tr>

    <!-- Selecting summary of recharge cards from the database -->
    <?php
            $sql_query = "select * from  mainstock_summary";
            $result = mysql_query($sql_query);

            while ($data = mysql_fetch_array($result)) 
            {
                $card_Type = $data['Type'];
                //remaining amount
                $card_ReorderLevel = $data['ReorderLevel'];
                $card_BufferLevel = $data['BufferLevel'];
        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$card_Type.'</td>
                		<!--ramaining amount-->
                		<td class="tablerecharge">'.$card_ReorderLevel.'</td>
                		<td class="tablerecharge">'.$card_BufferLevel.'</td>
                	</tr>';

            }
	?>

	</table>
			
	

<br>


</div>

<!-------------------------------------------------------------------------->

<br>
<div class="h2div" >Add Stock </div>
<br>

<div class="div">
<br>
<form action="../sources/save_add_stock.php" method="post">
      <table border="0">
        <tr>
          <th><label class="">Card Type</label></th>
          <th><label class="">Starting serial no</label></th>
          <th><label class="">Ending serial No</label><th>
          <th><label class="">Amount</label><th>
        </tr>
        <tr>
          <td><label class="">20 card</label></td>
          <td><input type="number" class="" name="Start20"></td>
          <td><input type="number" class="" name="End20"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="">50 card</label></td>
          <td><input type="number" class="" name="Start50"></td>
          <td><input type="number" class="" name="End50"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >100 card</label></td>
          <td><input type="number" class="" name="Start100"></td>
          <td><input type="number" class="" name="End100"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >200 card </label></td>
          <td><input type="number" class="" name="Start200"></td>
          <td><input type="number" class="" name="End200"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="" >500 card</label></td>
          <td><input type="number" class="" name="Start500"></td>
          <td><input type="number" class="" name="End500"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><label class="">1000 card</label></td>
          <td><input type="number" class="" name="Start1000"></td>
          <td><input type="number" class="" name="End1000"></td>
          <td><label class="">---</label></td>
        </tr>
        <tr>
          <td><input class="bttn" type="submit" name="submit" value="Add Stock"></td>
          <td><input class="bttn" type="reset" name="reset" value="Cancel"></td>
        
      </table>
    </form>
            
    



</div>

<!-------------------------------------------------------------------------->






<br>
<div class="h2div" >Transfer </div>
<br>

<div class="div">

    <!--actionpage eka wenas karanna-->
    <form action="../sources/save_transfered_stock.php" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td style=" width: 150px">
                    Date:
                </td>
                <td><input type="date" name="date"></td>
            </tr>

            <tr>
                <td style=" width: 150px">
                    FSE:
                </td>
                <td>
                    <select name="fse_id">
                        <option value="Select FSE" selected ><-------Select FSE---------></option>
                        <?php
                            
                            $sql_query2 ="SELECT * FROM user WHERE Type='FSE'";
                            $result=mysql_query($sql_query2);
                            if($result!="")
                            {
                                while ($row = mysql_fetch_array($result))
                                {
                                    echo '<option value="'.$row['Id'].'" >'.$row['Id'].'-'.$row['Name'].'</option>';

                                }
                            }
                        ?>
                    </select>

                </td>
            </tr>
            

            <tr>
                <td style=" width: 150px">
                    Amount of Rs.20 cards:
                </td>
                <td><input type="number" min="0" name="amount20" placeholder="Number of 20 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 150px">
                    Amount of Rs.50 cards:
                </td>
                <td><input type="number" min="0" name="amount50" placeholder="Number of 50 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 150px">
                    Amount of Rs.100 cards:
                </td>
                <td><input type="number" min="0" name="amount100" placeholder="Number of 100 cards"  title="only a number"></td>
            </tr>
             <tr>
                <td style=" width: 150px">
                    Amount of Rs.200 cards:
                </td>
                <td><input type="number" min="0" name="amount200" placeholder="Number of 200 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 150px">
                    Amount of Rs.500 cards:
                </td>
                <td><input type="number" min="0" name="amount500" placeholder="Number of 500 cards"  title="only a number"></td>
            </tr>

             <tr>
                <td style=" width: 150px">
                    Amount of Rs.1000 cards:
                </td>
                <td><input type="number" min="0" name="amount1000" placeholder="Number of 1000 cards"  title="only a number"></td>
            </tr>

              
               
            <tr>
              <td ><input class="bttn" type="submit" value="Transfer" name="transfer"></td>
              <td > <input class="bttn" type="reset" name="button" id="button" value="Cancel" onclick="clear()">
            </tr>

            


    </form>
</div>
<br>





</center>
  </body>
</html>