
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/reg-log.css">
    <Title>
        <?php include("configConnect.php");
    $Page_Title_Name = "Sales Invoice"; 
    echo $Page_Title_Name;
    ?>
    </Title>
</head>
<body>
<?php
$_SESSION["role"] = "user";
 include("navbar.php");?>
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
                                    <th>Invoice_ID</th>
                                    <th>Date</th>
                                    <th>Car_ID</th>
                                    <th>Customer_ID</th>
                                    <th>Staff_ID</th>
                                    <th>Total_Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM sales_invoice WHERE CONCAT(Invoice_ID,Date,Car_ID,Customer_ID,Staff_ID, Total_Price) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($mySqlConn, $query);

                                         if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Invoice_ID']; ?></td>                                                    
                                                    <td><?= $items['Date']; ?></td>
                                                    <td><?= $items['Car_ID']; ?></td>
                                                    <td><?= $items['Customer_ID']; ?></td>
                                                    <td><?= $items['Staff_ID']; ?></td>
                                                    <td><?= $items['Total_Price']; ?></td>
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