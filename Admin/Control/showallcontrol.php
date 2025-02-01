<?php
include '../model/db.php';

$mydb = new mydb();
$conobj =$mydb->openCon();
$result = $mydb->showAllUsers("admin",$conobj);
if($result->num_rows > 0){

echo "<fieldset>";
echo "<table>";

echo "<tr><td>ID</td> <td>Username</td> <td>First name</td> <td>Lastname</td> <td>Email</td>  <td>Phone</td>  <td>Emergency Contact Info</td>
<td>Actions</td></tr> ";    
foreach($result as $row){
    
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["uname"] . "</td>";
    echo "<td>" . $row["fname"] . "</td>";
    echo "<td>" . $row["lname"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
   
    echo "<td>" . $row["phone"] . "</td>";
    
    echo "<td>" . $row["emci"] . "</td>";
    echo "<td>";
    echo "<a href='../view/edit_profile.php?id=".$row["id"]."' >Edit </a>";
    echo "</td>";
    echo "<td>";
echo "<a href='' >Delete</a>";
echo "</td>";
echo"</tr>";

}
echo "</fieldset>";

echo "</table>";
}
else{
echo "No users found";
}


?>