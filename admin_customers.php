<?php 
    include("login_Session.php");
    if ($_SESSION["role"] == "user" || ($_SESSION["role"] == "guest")) {
        $_SESSION["role"] = "admin";
        }
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/reg-log.css">
    <Title>
        <?php 
    $Page_Title_Name = "Admin Page"; 
    echo $Page_Title_Name;
    ?>
    </Title>
</head>
<body>
<?php include("navbar.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter User Details here</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Sex</th>
                                    <th>DOB</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>Postcode</th>
                                    <th>Register ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   include("configConnect.php");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM customer WHERE CONCAT(Customer_ID,Customer_FName,Customer_LName, Customer_SEX,Customer_DOB,Customer_Contact_Num,Customer_Address,Customer_Postcode,register_ID) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($mySqlConn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Customer_ID']; ?></td>
                                                    <td><?= $items['Customer_FName']; ?></td>
                                                    <td><?= $items['Customer_LName']; ?></td>
                                                    <td><?= $items['Customer_SEX']; ?></td>
                                                    <td><?= $items['Customer_DOB']; ?></td>
                                                    <td><?= $items['Customer_Contact_Num']; ?></td>
                                                    <td><?= $items['Customer_Address']; ?></td>
                                                    <td><?= $items['Customer_Postcode']; ?></td>
                                                    <td><?= $items['register_ID']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>