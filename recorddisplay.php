<!DOCTYPE html>
<html>
<head>
    <title>Display Record</title>
    <style>
        /* Your existing styles here */
    </style>
</head>
<body>
<div class="wrapper">
    <header>
        <!-- Header content with navigation updating-->
    </header>

    <section>
        <div class="admin-img">
            <br><br>

            <!-- Search Form -->
            <input type="text" id="searchInput" placeholder="Search by Firstname or Lastname" style="margin-bottom: 20px;">
            <button onclick="performBinarySearch()">Search</button>
            
            <?php
            include("config.php");

            // Get records from the database sorted by fname
            $query = "SELECT * FROM inform ORDER BY fname ASC";
            $data = mysqli_query($conn, $query);
            $records = [];
            while ($row = mysqli_fetch_assoc($data)) {
                $records[] = $row;
            }

            // Binary Search Function
            function binarySearch($array, $searchTerm, $field) {
                $left = 0;
                $right = count($array) - 1;
                while ($left <= $right) {
                    $mid = floor(($left + $right) / 2);
                    if (strcasecmp($array[$mid][$field], $searchTerm) == 0) {
                        return $array[$mid]; // Match found
                    } elseif (strcasecmp($array[$mid][$field], $searchTerm) > 0) {
                        $right = $mid - 1;
                    } else {
                        $left = $mid + 1;
                    }
                }
                return null; // No match found
            }

            // Process Search Request
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $searchTerm = $_POST['searchTerm'];
                $filteredRecords = [];
                
                // Search by both `fname` and `lname`
                $foundByFname = binarySearch($records, $searchTerm, 'fname');
                $foundByLname = binarySearch($records, $searchTerm, 'lname');
                
                if ($foundByFname) $filteredRecords[] = $foundByFname;
                if ($foundByLname && $foundByLname !== $foundByFname) $filteredRecords[] = $foundByLname;
            } else {
                $filteredRecords = $records;
            }
            ?>

            <!-- Search Form HTML -->
            <form method="POST" action="">
                <input type="text" name="searchTerm" placeholder="Enter Firstname or Lastname">
                <button type="submit">Search</button>
            </form>

            <!-- Table Display -->
            <h3 align="center">
                <a href='admininform.php'><input type='submit' value='Add Record' class='add'></a>
            </h3>
            <center>
                <table border="3" cellspacing="7" width="93%">
                    <tr><th colspan="7" style="text-align:center">Teachers Information</th></tr>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Operations</th>
                    </tr>

                    <?php
                    if (!empty($filteredRecords)) {
                        foreach ($filteredRecords as $result) {
                            echo "<tr>
                                  <td>{$result['fname']}</td>
                                  <td>{$result['lname']}</td>
                                  <td>{$result['gender']}</td>
                                  <td>{$result['email']}</td>
                                  <td>{$result['mobile']}</td>
                                  <td>{$result['address']}</td>
                                  <td>
                                    <a href='updaterecord.php?id={$result['id']}'><input type='button' value='Update' class='update'></a>
                                    <a href='recorddelete.php?id={$result['id']}'><input type='button' value='Delete' class='delete' onclick='return confirm(\"Are you sure you want to delete?\")'></a>
                                  </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No records found</td></tr>";
                    }
                    ?>
                </table>
            </center>
        </div>
    </section>
    <footer>
        <p style="text-align: center;">Email: tms24@gmail.com | Contact: +977 9823267337 | ©2022</p>
    </footer>
</div>
</body>
</html>
