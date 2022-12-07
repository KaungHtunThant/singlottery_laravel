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
        <title>Lottery Form</title>
    </head>
    <body id="page-top">
        <?php include "static/header.php" ?>

        <div class="container">
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Lottery Form</h1>
            </div> -->
            <div class="card shadow h-100 py-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lottery Form</h6>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <!-- <input type="hidden" namm=""> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lottery_no">Lottery No.</label>
                                    <input type="text" class="form-control" name="lottery_no" id="lottery_no" aria-describedby="lottery_no_Help" placeholder="Enter lottery no." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="batch_id">Batch</label>
                                        <div class="col-8">
                                            <select class="form-control" id="batch_id" name="batch_id" required>
                                                <option value="" selected>None</option>
                                                <?php
                                                    $result = dbSelect(array('*'), 'batches');
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['batch_id']; ?>">
                                                        <?php echo $row['batch_id']; ?>
                                                    </option>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New<span class="d-none d-lg-inline"> Batch</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">Customer Name</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" aria-describedby="customer_name_Help" placeholder="Enter customer name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_ph_no">Customer Phone No.</label>
                                    <input type="text" class="form-control" name="customer_ph_no" id="customer_ph_no" aria-describedby="customer_ph_no_Help" placeholder="Enter customer phone no.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="payment_id">Payment Type</label>
                                    <select class="form-control" id="payment_id" name="payment_id">
                                        <option selected>--- Choose a payment option ---</option>
                                        <?php
                                            $result = dbSelect(array('*'), 'payments');
                                            if (mysqli_num_rows($result) > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['payment_id']; ?>">
                                                <?php echo $row['payment_method']; ?>
                                            </option>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="paid">Paid :</label>
                                    <input type="radio" class="btn-check" name="paid" id="option1" autocomplete="off" value="1" checked>
                                    <label class="btn btn-sm btn-outline-success" for="option1">Yes</label> | 
                                    <input type="radio" class="btn-check" name="paid" id="option2" autocomplete="off" value="0">
                                    <label class="btn btn-sm btn-outline-danger" for="option2">No</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <hr class="d-md-none divider">
                                    <div class="d-flex justify-content-center">
                                        <input class="btn btn-primary" type="submit" name="lottery_insert" value="Submit"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Batch 
                            <?php
                                echo lastBatchSelect();
                            ?>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <input type="hidden" name="batch_id" value="lastBatchSelect();">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="form-control" name="start_date" id="start_date" aria-describedby="start_date_Help" placeholder="Enter Start Date">
                            <label for="end_date">End Date</label>
                            <input type="text" class="form-control" name="end_date" id="end_date" aria-describedby="end_date_Help" placeholder="Enter End Date">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="batch_insert">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include "static/footer.php" ?>
        <?php include "static/bootstrap_core_jscript.php" ?>
        <?php include "static/core_plugin_jscript.php" ?>
        <?php include "static/custom_jscript_all.php" ?>
    </body>
</html>