<?php
session_start();


if (!isset($_SESSION['uname'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}

require '../control/dashboard_control.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cashier Dashboard</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- External CSS file -->
</head>
<body>

<div class="dashboard-container">
  
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?> (Cashier)</h1>
    </header>

   
    <nav>
        <ul>
            <li><a href="cashier_dashboard.php">Dashboard</a></li>
            <li><a href="account_details.php">Account Details</a></li>
            <li><a href="my_orders.php">My Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

   
    <main>
        <section>
            <h2>Your Recent Transactions</h2>
            <table border="1">
                <tr>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>

             
            </table>
        </section>
    </main>

  
    <footer>
        <p>&copy; 2025 SuperShop - All Rights Reserved</p>
    </footer>

</div>

</body>
</html>

