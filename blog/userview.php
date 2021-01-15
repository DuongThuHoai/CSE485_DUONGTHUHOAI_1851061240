<?php include("../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
    </style>
</head>
<body>
<?php
        require "connection.php";
      ?>
      <?php
        if(isset($_GET["id"])){
            $id=$_GET["id"];
        }
      ?>
      <?php
        $sql_read= "SELECT * FROM drugs WHERE id = $id";
        $result = mysqli_query($conn,$sql_read);
        $rows= mysqli_fetch_array($result);
      ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12">
                    <div class="page-header"  style="margin-left: 400px">
                        <h1>View</h1>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>ID</label>
                        <p class="form-control-static"><?php echo $rows['id']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $rows['name']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Type</label>
                        <p class="form-control-static"><?php echo $rows['type']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Barcode</label>
                        <p class="form-control-static"><?php echo $rows['barcode']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Dose</label>
                        <p class="form-control-static"><?php echo $rows['dose']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Code</label>
                        <p class="form-control-static"><?php echo $rows['code']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Cost_price</label>
                        <p class="form-control-static"><?php echo $rows['cost_price']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Selling_price</label>
                        <p class="form-control-static"><?php echo $rows['selling_price']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Expiry</label>
                        <p class="form-control-static"><?php echo $rows['expiry']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Company_name</label>
                        <p class="form-control-static"><?php echo $rows['company_name']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Production_date</label>
                        <p class="form-control-static"><?php echo $rows['production_date']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Expiration_date</label>
                        <p class="form-control-static"><?php echo $rows['expiration_date']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Place</label>
                        <p class="form-control-static"><?php echo $rows['place']; ?></p>
                    </div>
                    <div class="form-group"  style="margin-left: 400px">
                        <label>Quantity</label>
                        <p class="form-control-static"><?php echo $rows['quantity']; ?></p>
                    </div>
                    
                    <p><a href="index.php" class="btn btn-primary"  style="margin-left: 400px">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>