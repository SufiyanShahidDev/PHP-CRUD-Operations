<?php

include("config.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="dashboard.css">
</head>


<?php

$query = "select * from register.users";
$result = mysqli_query($connection, $query);


?>


<body>


    <section class="container">

        <section class="content-left">

            <div class="side-bar">
                <h2>Side Panel</h2>
                <ul>
                    <li class="active">Dashboard</li>
                    <li>Users</li>
                    <li>Logout</li>
                </ul>
            </div>
        </section>



        <!-- ================== -->

        <section class="content-right">
            <section class="heading">
                <h1>Admin Dashboard</h1>
            </section>

            <section class="main">

                <section class="table-head">
                    <h2>Users Data</h2>

                    <a href="./index.php" class='btn add-btn'>Add User</a>
                </section>

                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "            
                
                <tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['fullname'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['password'] . "</td>
                    <td>
                        <a href='./update.php?id={$row['id']}' class='btn edit-btn'>Update</a>
                        <a href='./delete.php?deleteid={$row['id']}' onclick='return confirm(\"Are you sure delete this user?\")' class='btn delete-btn'>Delete</a>
                    </td>
                </tr>";
                        }




                        ?>

                    </tbody>
                </table>


                <!-- <div style=" display: flex; justify-content: center;">
                <a class='btn edit-btn' style="text-decoration: none;" href="./index.php">Go Back</a>

            </div> -->
            </section>
        </section>

    </section>


</body>

</html>