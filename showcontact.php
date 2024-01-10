<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .panel-heading {
            background-color: #ff0000; /* Red color for panel heading background */
            color: #fff; /* White text color for panel heading */
            text-align: center;
            padding: 15px;
            font-size: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="panel-heading">
        Feedback List
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <!-- view data and operation here -->
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM contact";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr class="table-row">
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['cemail']; ?></td>
                        <td><?php echo $row['cmsg']; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>
