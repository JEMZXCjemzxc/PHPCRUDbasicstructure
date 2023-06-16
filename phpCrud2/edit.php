<?php
    include "conn.php";

    $id = $_GET['edit'];

    $sql ="SELECT * FROM client WHERE ID = '$id'";
    $query =$conn->query($sql);
    $row = $query->fetch_assoc();

?>

<!-- the form is copied from index-->
<form action="update.php" method ="post">
                <table width= "100%">
                    <tr>
                        <td>ID</td>
                        <td><input type="text"  value="<?=$row['ID'];?>"  name="ID" required readonly></td>
                    </tr>


                    <tr>
                        <td>First Name</td>
                        <td><input type="text" value="<?=$row['FNAME'];?>"  name="FNAME" required></td>

                        <!-- use value="=$row['FNAME'];" to get the value of the row you want to edit 
                    then show it in the input text above -->
                    
                    </tr>
                    <tr>
                        <td>Middle Initial</td>
                        <td><input type="text"  value="<?=$row['MI'];?>"  name="MI" required></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text"  value="<?=$row['LNAME'];?>"  name="LNAME" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" name="submit">UPDATE</button></td><br>
                        <td><button type="submit" name="submit">BACK</button></td>
                    </tr>

                </table>
            </form>