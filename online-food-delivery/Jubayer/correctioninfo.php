<?php
    require_once "models/db_config.php";
    $query  = "select * from Delivery";
    $result = get($query);
?>

 


<html>

<body>

 

<p><h2 align="center">Corrected Information</h2></p>
    <div class="container">
   
  <table class="table">
        
   <tr>
   <tr>
            <th>Customer code</th>
            <th>Customer name</th>
            <th>Restaurant name</th>
            <th>Food Item</th>
            <th>Amount of food</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
			<th>Payment</th>
            
            
        </tr>
        
   
                  
<?php
    foreach($result as $row)
    {
        echo "<tr>";
    
        echo "<td>".$row["customer code"]."</td>";
		echo "<td>".$row["customer name"]."</td>";
		echo "<td>".$row["restaurant name"]."</td>";
		echo "<td>".$row["food item"]."</td>";
		echo "<td>".$row["amount of food"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["address"]."</td>";
        echo "<td>".$row["payment"]."</td>";
        
        echo '</tr>';
    }  
?>

 

 


 </table>
 <br>
</div>
</body>
</html>