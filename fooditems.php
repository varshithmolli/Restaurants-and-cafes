<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    
<body>

<?php
    include "db.php";
    $sql = "SELECT * FROM items";   
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) 
        {
            $items[]= $row["item_name"]; 
            $rates[]= $row["item_price"];
        }
    }
    echo "<table  align='center'>";

    for($i=0;$i<17;$i++)
    {
    echo "
        <tr>
            <td>$items[$i]</td>
            <td>$rates[$i]</td>
            <td><p id='$i'></p></td>
            <td><input type='button' id='$i' name='$i' value='add to cart' onclick='add($rates[$i],$i)'></td>
            <td><input type='button' id='$i' name='$i' value='remove from cart' onclick='remove($rates[$i],$i)'></td>
            ";

                echo "</tr>";
            }
            echo "<tr><td align = 'right'><p id='y'></p></td></tr>";
            "<tr><form method = 'post' action='display.php'>"; 
            "<td><input type='hidden' id='y' name ='val'></td>";
             "<td><input type='submit' value='add'></td>";
             "</form></tr>";
            echo "<script>
            var total = 0;
            var count = new Array(17);
            for(i=0;i<17;i++)
            {
                count[i]=0;
            }
            function add(x,i)
            {
                count[i]=count[i]+1;
                total = total + x;
                document.getElementById('y').innerHTML = total ;
                document.getElementById('i').innerHTML = 'added sucessfully';

            }
            function remove(x,i)
            {
                if(count[i]>0)
                {
                    count[i] = count[i]-1;
                    total = total -x ;
                    document.getElementById('y').innerHTML = total;
                    document.getElementById('i').innerHTML = 'removed sucessfully';
                }
            }
            </script>";
        "</table>";
?>

</body>
</html>