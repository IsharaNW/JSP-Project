<?php
require("../DB/dbcon.php");
?>

<html lang="en">
  <head>
    <title>stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
		<h1 class="topic">stock</h1>

<br>
<div class="h2div" >Main Stock - Recharge cards</div>
<br>

<div class="div">
<br>

<table class="table1 normaltable" >

	<tr>
		<th class="tablerecharge">Type</th>
		<!--<th class="tablerecharge">Remaining Amount</th>-->
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
                //$card_RemainingAmount = $data['RemainingAmount'];
                $card_ReorderLevel = $data['ReorderLevel'];
                $card_BufferLevel = $data['BufferLevel'];
        
                echo '
                	<tr>
                		<td class="tablerecharge">'.$card_Type.'</td>
                		
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
<div class="h2div" >  Main Stock - Damage Cards </div>
<br>

<div class="div">
<br>

    
    

</div>

<!-------------------------------------------------------------------------->






<br>
<div class="h2div" >Main Stock - SIM </div>
<br>

<div class="div">

   
</div>
<br>





</center>
  </body>
</html>