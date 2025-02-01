<?php
include '../control/showallcontrol.php';
?>

<html>
    <head>
        <title> All Users</title>
        <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<a href="../view/searchuser.php" >Search User here</a>
<table class="head">
    
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Emergency Contact Info</th>
            <th>Actions</th>
        </tr>
    
    <body >
        <?php
       
        if ($result->num_rows > 0) {
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["uname"] . "</td>";
                echo "<td>" . $row["fname"] . "</td>";
                echo "<td>" . $row["lname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["emci"] . "</td>";
                echo "<td>";
                echo "<a href=" . $row["id"] . "'>Edit</a>";
                echo "</td>";
                echo "<td>";
                echo "<a href=''>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No users found</td></tr>";
        }
        ?>
    </body>
</table>

</body>
</html>