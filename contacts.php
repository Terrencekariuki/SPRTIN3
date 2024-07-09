<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial scale=1.0">
    <title>MJENGO CONSTRUCTION COMPANY</title>
    <link rel ="stylesheet" href="style.css">
    <image  src="images/burjkhalifa.jpg " height="100">
</head>
<body style="background-image: url('images/effel.webp'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    
    <h1>OUR OFFICES AND CONTACTS</h1>
    <hr>
    <div>
        <button onclick="document.location='index.html'"  type="button">Introduction</button>
          </div>
   
    <!--company network-->

   <P>Mjengo construction company is a well know company for its superb constructions all over the east african region.because of this, we have offices in 5 countries in east africa and we are looking forward to openning more in the near future to expand our business</P> 
   <p>We have offices in kenya,uganda,tanzania,ethiopia and rwanda.Since we are a kenyan company we have many offices in kenya and provide quality services to our customers </p>
   
   <h3>Locations of our offices in kenya</h3>
   <hr>
   <!--table of the offices and managers incharge in kenya-->
   <p>Below is a table of the branches and their managers names</p>
   <table border="2" style="background-color:rgb(87, 87, 105)">
           <?php
                    include_once("dbconnect.php");
                     $sql = "SELECT * FROM `companydetails`";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        // echo "id: " . $row["name"]. " " . $row["phone"]. " " . $row["clients_residence"]. "<br>";
                    
   ?>
   
    <tr>
        <th width="150"><?php print $row["clients_residence"] ?></th>
        <td><?php print $row["name"]?></td>
        <td><?php print $row["phone"]?></td>
    </tr>
    <!-- </tr>
        <tr align="center">
            <td><?php print $row["name"]?></td>
            <
        </tr>
        <tr align="center">
            <td><?php print $row["phone"]?></td>
           
    </tr> -->
   

   <?php
            }
        }
        else {
            echo "0 results";
        }
        $conn->close();
   ?>
   </table>

   <!--table of the offices and managers incharge in kenya-->

   <br>
   <br>
    </div>
        <div>
            <button onclick="document.location='loans.html'"  type="button">Loans and Mortgages</button>
              </div>
    <footer>
        <hr>
        &copy;<small>all rights reserved<br></small>
       <small> <a href="mjengoconstruction@gmail.com">mjengoconstruction@gmail.com</a></small>
    
        </footer>
</body>
</html> 