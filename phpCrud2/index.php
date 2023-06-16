<?php
include "conn.php";
?>


<style>
    #divheader {
        margin:auto;
        width:500px;
        border-radius:3px;
        padding:10px;
    }

    input[type = text]{
        width 100%;
    }

</style>

<html>
    <head>
        <title>
            Crud Op
        </title>
    </head>
    <body>
        <div id=divheader> 
            <form action="insert.php" method ="post">
                <table width= "100%">
                    
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="FNAME" required></td>
                    </tr>
                    <tr>
                        <td>Middle Initial</td>
                        <td><input type="text" name="MI" required></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="LNAME" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">Register</button></td>
                    </tr>
                </table>
            </form>

            <?php
               if(isset($_SESSION['success'])){

                echo "<div style='background:green; color:white; padding:3px; border-radius: 3px;'> ". $_SESSION['success']. "</div>";
                unset($_SESSION['success']);       
               }

               if(isset($_SESSION['error'])){
               echo "<div style='background:red; color:white; padding:3px; border-radius: 3px;'> ". $_SESSION['error']. "</div>";
                unset($_SESSION['error']);       
               }
              
            ?>

            <table border="1" width="100%">
                <tr>
                    <th>First name</th>
                    <th>MI</th>
                    <th>last name</th>
                    <th>actions</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM client ORDER BY LNAME ASC";// assending order
                    $query = $conn->query($sql);

                    //fetch_assoc is used to fetch all the data inputed
                    while($row = $query -> fetch_assoc()){               
                ?>

                <tr>
                   <td align ="left"><?=$row['FNAME'];?></td>
                   <td align ="left"><?=$row['MI'];?></td>
                   <td align ="left"><?=$row['LNAME'];?></td>

                   <td align ="right"> <!-- put the edit and del at the right side-->             
                        <a href="edit.php?edit=<?=$row['ID'];?>">EDIT</a>

                        <!--call the id from the database you want to delete-->
                        <a href="delete.php?delete=<?=$row['ID'];?>">DELETE</a>
                   </td>
                </tr>

                <?php 
                    } //all the data inside this table is closed in a php 
                ?>



            </table>




        </div>
    </body>



</html>


