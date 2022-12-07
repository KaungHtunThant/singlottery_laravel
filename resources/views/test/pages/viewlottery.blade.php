<?php
    include 'config/conf_new.php';
    if(!isset($_SESSION['user_id'])){
        _goto('Login_template.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "static/head.php" ?>
        <?php include "static/dataTable_css.php" ?>
        <title>Lotteries Table</title>
    </head>
    <body id="page-top">
        <?php include "static/header.php" ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lottries List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Batch</th>
                                    <th>Lottery Number</th>
                                    <th>Customer Name</th>
                                    <th>Customer Phone No.</th>
                                    <th>Payment Method</th>
                                    <th>Paid</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Batch</th>
                                    <th>Lottery Number</th>
                                    <th>Customer Name</th>
                                    <th>Customer Phone No.</th>
                                    <th>Payment Method</th>
                                    <th>Paid</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                    $result = dbSelect(array('*'), 'lotteries');
                                    if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['lottery_id']; ?></td>
                                    <td><?php echo $row['batch_id']; ?></td>
                                    <td><?php echo $row['lottery_no']; ?></td>
                                    <td><?php echo $row['customer_name']; ?></td>
                                    <td><?php echo $row['customer_ph_no']; ?></td>
                                    <td><?php
                                            if($row['payment_id']!=''){
                                                $presult = paymentSelect($row['payment_id']);
                                                echo mysqli_fetch_assoc($presult)['payment_method'];
                                            }
                                        ?>
                                    </td>
                                    <td><?php if ($row['paid'] == 1){
                                                echo 'Yes';
                                            }
                                            else{
                                                echo 'No';
                                            }
                                        ?>
                                        
                                    </td>
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
        <!-- /.container-fluid -->

        <?php include "static/footer.php" ?>

        <?php include "static/bootstrap_core_jscript.php" ?>
        <?php include "static/core_plugin_jscript.php" ?>
        <?php include "static/custom_jscript_all.php" ?>
        <?php include "static/dataTable_jscript.php" ?>
    </body>
</html>