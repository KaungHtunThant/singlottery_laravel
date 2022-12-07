<!DOCTYPE html>
<html>
    <head>
        <?php include "static/head.php" ?>
        <?php include "static/dataTable_css.php" ?>
        <title>(Title)</title>
    </head>
    <body id="page-top">
        <?php include "static/header.php" ?>

        <?php
            $lottery_no = htmlspecialchars($_POST['lottery_no']);
            echo '<script type="text/javascript">console.log("'.$lottery_no.'");</script>';
            $batch_id = htmlspecialchars($_POST['batch_id']);
            echo '<script type="text/javascript">console.log("'.$batch_id.'");</script>';
            $customer_name = htmlspecialchars($_POST['customer_name']);
            echo '<script type="text/javascript">console.log("'.$customer_name.'");</script>';
            $customer_ph_no = htmlspecialchars($_POST['customer_ph_no']);
            echo '<script type="text/javascript">console.log("'.$customer_ph_no.'");</script>';
            $payment_id = htmlspecialchars($_POST['payment_id']);
            if($payment_id == '--- Choose a payment option ---'){
                $payment_id = 'NULL';
            }
            echo '<script type="text/javascript">console.log("'.$payment_id.'");</script>';
            $paid = htmlspecialchars($_POST['paid']);
            echo '<script type="text/javascript">console.log("'.$paid.'");</script>';
            exit;
            $conn = dbConnect();
            $sql = 'insert into lotteries(lottery_no, batch_id, user_id, customer_name, customer_ph_no, payment_id, paid) values('.$lottery_no.', '.$batch_id.', '.$_SESSION["user_id"].', "'.$customer_name.'", '.$customer_ph_no.', '.$payment_id.', '.$paid.')';
            if (!$conn -> query($sql)) {
                echo '<script type="text/javascript">console.log('.$sql.');</script>';
            }
            _goto('LotteryForm_template.php');
            mysqli_close($conn);
        ?>

        <?php include "static/footer.php" ?>

        <?php include "static/bootstrap_core_jscript.php" ?>
        <?php include "static/core_plugin_jscript.php" ?>
        <?php include "static/custom_jscript_all.php" ?>
        <?php include "static/dataTable_jscript.php" ?>
    </body>
</html>