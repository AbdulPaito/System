<?php
// Step 1: Establish database connection
$host = 'localhost';  // Replace with your host
$user = ' ';   // Replace with your database username
$password = ' '; // Replace with your database password
$database = 'dataregister'; // Replace with your database name

$connection = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Execute query to fetch data
$query = "SELECT * FROM learners_profile";
$result = mysqli_query($connection, $query);

// Check if query execution was successful
if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        /* General section styling */
        #profile-section {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 20px auto;
            max-width: 9000px;
        }

        /* Heading styling */
        #profile-section h1 {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Paragraph styling */
        #profile-section p {
            font-size: 1.2em;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Table styling */
        .profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .profile-table th,
        .profile-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .profile-table th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .profile-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .profile-table tr:hover {
            background-color: #ddd;
        }
        .edit-button, .delete-button {
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        border-radius: 5px;
        }

        .edit-button {
            background: #007bff;
            color: #fff;
        }

        .edit-button:hover {
            background: #45a049;
        }

        .delete-button {
            background: #f44336;
            color: #fff;
        }

        .delete-button:hover {
            background: #e53935;
        }
    </style>
</head>
<body>

<section id="profile-section">
    <h1>Profile</h1>
    <p>Manage your profile here.</p>
    <table class="profile-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>COURSE</th>
                <th>STATUS</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <?php
            $counter = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['qualification']); ?></td>
                    <td></td>
                    <td><a class="edit-button" href="?id=<?php echo $row['id']; ?>">Edit</a></td>
                    <td><a class="delete-button" href="?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        <tbody>
            <!-- Profile rows will be added here -->
        </tbody>
    </table>
</section>

</body>
</html>
