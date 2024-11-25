<!DOCTYPE html>
<html>

<head>
    <title>Display Record</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/search-and-paginatin.css">
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="wrapper">
        <?php require_once "./includes/adminheader.php"; ?>
        <section>
            <div class="admin-img">
                <br><br>
                <?php
                include("config.php");
                require_once"./search/BinarySearchTree.php";
                error_reporting(0);


                $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
                $lname = isset($_GET['lname']) ? $_GET['lname'] : '';
                $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                $query = "SELECT * FROM inform ORDER BY fname ASC";
                $data = mysqli_query($conn, $query);
                $bst = new BinarySearchTree();

                while ($row = mysqli_fetch_assoc($data)) {
                    $bst->insert($row);
                }

                $results = $bst->search($bst->root, $fname, $lname);

                if (!empty($fname) || !empty($lname)) {
                    $filteredResult = array_filter($results, function ($result) use ($fname, $lname) {
                        $fnameMatch = empty($fname) || stripos($result['fname'], $fname) === 0;
                        $lnameMatch = empty($lname) || stripos($result['lname'], $lname) === 0;
                        return $fnameMatch && $lnameMatch;
                    });
                } else {
                    $filteredResult = $results;
                }

                $records_per_page = 8;
                $offset = ($page - 1) * $records_per_page;
                $total_rows = count($filteredResult);
                $total_pages = ceil($total_rows / $records_per_page);
                $paginated_results = array_slice($filteredResult, $offset, $records_per_page);

                ?>
                <div class="search-container">
                    <form method="GET" action="" class="search-form">
                        <input type="text" class="search-input" name="fname" placeholder="Search by Firstname" value="<?php echo $fname; ?>">
                        <input type="text" class="search-input" name="lname" placeholder="Search by Lastname" value="<?php echo $lname; ?>">
                        <button class="search-button" type="submit">Search</button>
                    </form>
                </div>
                <h3 align="center"><a href='admininform.php'><input type='submit' value='Add Record' class='add-button'></a></h3><br>
                <center>
                    <table border="3" cellspacing="7" width="93%">
                        <tr>
                            <th width="10%" height="40px" style="text-align:center">Teachers Information</th>
                        </tr>
                        <table border="3" cellspacing="7" width="93%">
                            <tr>
                                <th width="8%">First Name</th>
                                <th width="8%">Last Name</th>
                                <th width="10%">Gender</th>
                                <th width="15%">Email</th>
                                <th width="10%">Mobile</th>
                                <th width="10%">Address</th>
                                <th width="10%">Operations</th>
                            </tr>
                            <tbody id="tableBody">
                                <?php
                                if ($total_rows > 0) {
                                    foreach ($paginated_results as $result) {
                                        echo "<tr>
                                    <td>" . $result['fname'] . "</td>
                                    <td>" . $result['lname'] . "</td>
                                    <td>" . $result['gender'] . "</td>
                                    <td>" . $result['email'] . "</td>
                                    <td>" . $result['mobile'] . "</td>
                                    <td>" . $result['address'] . "</td>
                                    <td><a href='updaterecord.php?id=" . $result['id'] . "'><input type='submit' value='Update' class='update-button'></a>
                                    <a href='recorddelete.php?id=" . $result['id'] . "'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
                                </tr>";
                                    }
                                } else {
                                    echo "<td colspan='7'> No results found </td>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </table>
                </center>
                <div class="pagination-container">
                    <div class="pagination">
                        <?php
                        if ($total_rows > 0) {
                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo "<a href='recorddisplay.php?fname=$fname&lname=$lname&page=$i'" . ($i == $page ? " class='active'" : "") . ">$i</a>";
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </section>
        <?php require_once "./includes/adminfooter.php"; ?>
    </div>
    <script>
        function checkdelete() {
            return confirm('Are you sure you want to delete');
        }
    </script>
</body>

</html>