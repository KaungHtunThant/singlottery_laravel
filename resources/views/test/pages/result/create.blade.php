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
                <h1 class="h3 mb-0 text-gray-800">Results Form</h1>
            </div> -->
            <div class="card shadow h-100 py-2">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Results Form</h6>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="row">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">Batch</label>
                                    <select class="form-control" id="batch_id" name="batch_id">
                                        <option selected>--- Choose a batch ---</option>
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_name">First, Second & Third Prizes</label>
                                    <textarea class="form-control" id="" rows="3" name="t1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">10 Jackpot Prizes @ $10,000 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t2"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">10 Lucky Prizes @ $5,000 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">30 Gift Prizes @ $3,000 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t4"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">30 Consolation Prizes @ $2,000 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">50 Participation Prizes @ $1,000 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t6"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customer_name">315,000 2D  Delight Prizes @ $6 each</label>
                                    <textarea class="form-control" id="" rows="3" name="t7"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr class="divider">
                                <div class="d-flex justify-content-center">
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" name="result_insert" value="Submit">
                                    </div>
                                </div>
                            </div>
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