// HTML code to display data in tabular format
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>DCS Prod List</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <!-- <th>Name</th> -->
                <th>Name</th>
                <th>Species</th>
                <th>Age</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                require 'connect.php';
                while($row = mysqli_fetch_accoc($result))
                {
            ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <!-- <td><?php echo $rows['name'];?></td> -->
                <!-- <td><?php echo $rows['short_name'];?></td> -->
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['species'];?></td>
                <td><?php echo $rows['age'];?></td>

            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
  
</html>