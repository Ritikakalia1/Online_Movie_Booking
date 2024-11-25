<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .center {
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: red;
        }
        a {
            text-decoration: none;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div>
        <a href="logout.php" style="color: blue;">Log Out</a> | 
        <a href="index.php" style="color: blue;">Back To Home</a>
    </div>
    <div class="center">
        <h1>Congratulations! Your payment was successful and your seat has been booked.</h1>
        <a href="ticket_show.php" target="_blank" style="color: blue;">
            <h3>View Your Ticket</h3>
        </a>
    </div>
</body>
</html>
