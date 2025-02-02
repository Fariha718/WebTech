<?php
require '../model/db.php';

// Create a database connection
$mydb = new mydb();
$conn = $mydb->openCon();

// Function to get recent transactions
function getRecentTransactions($conn) {
    // Use prepared statements to avoid SQL injection
    $stmt = $conn->trans("SELECT transaction_id, amount, status, date FROM transactions ORDER BY date DESC LIMIT 5");
    $stmt->execute();
    return $stmt->get_result();
}
?>


