<html lang="en">
  <head>
    <title> Damage Stock</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/main.css">
  </head>

  <body bgcolor="#e0e0e0">
<center>
 
<h1 class="topic">Damage Stock</h1>


              <div class="h2div" >Summary</div>
                <br>

                <div class="div">
                <br>

                <table class="table1 normaltable" >  <!include the data retrived from the database here>

                    <tr>
                      <th class="tablestock">Date</th>
                      <th class="tablestock">Type</th>
                      <th class="tablestock">Serial No</th>
                    </tr>
                    <tr>
                      <td class="tablestock">2015.02.15</td>
                      <td class="tablestock">RS30</td>
                      <td class="tablestock">15252528955</td>
                    </tr>
                    <tr>
                      <td class="tablestock">2015.02.15</td>
                      <td class="tablestock">RS30</td>
                      <td class="tablestock">15252528955</td>
                    </tr>
                    <tr>
                      <td class="tablestock">2015.02.15</td>
                      <td class="tablestock">RS30</td>
                      <td class="tablestock">15252528955</td>
                    </tr>
                    <tr>
                      <td class="tablestock">2015.02.15</td>
                      <td class="tablestock">RS30</td>
                      <td class="tablestock">15252528955</td>
                    </tr>
                    <tr>
                      <td class="tablestock">2015.02.15</td>
                      <td class="tablestock">RS30</td>
                      <td class="tablestock">15252528955</td>
                    </tr>
                  </table>
                      
                  

                <br>
                <button class="bttn" width="50px"> Clear</button>

                </div>
                <br>



                <div class="h2div" >Add Damage Cards </div>
                <br>

                <div class="div">

                 <form action="" method="post">
        <table style="margin: auto; width: 600px;padding: 20px">

            <tr>
                <td style=" width: 150px">
                    Serial No:
                </td>
                <td><input type="text" name="c_id" placeholder="Serial Number"  title=""></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    Date:
                </td>
                <td><input type="date" name="bday"></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    Type:
                </td>
                <td><select id="type" name="type">
                      <option value="30">Rs.20</option>
                      <option value="50">Rs.50</option>
                      <option value="100">Rs.100</option>
                      <option value="300">Rs.200</option>
                      <option value="300">Rs.500</option>
                      <option value="1000">Rs.1000</option>
                    </select></td>
            </tr>
            <tr>
                <td style=" width: 150px">
                    FSE:
                </td>
                <td><select><!include a function to select fses' in the db></select>></td>
            </tr>

            <tr>
              <td><input type="submit" value="Submit" name="submit"></td>
              <td> <input type="submit" name="button" id="button" value="Cancel" onclick="clear()">
            </tr>


    </form>
                </div>
                <br>  




 


</center>
  </body>
</html>
