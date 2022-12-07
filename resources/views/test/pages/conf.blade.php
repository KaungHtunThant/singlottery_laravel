<?php
	//session_start function
	session_start();
	//Database Controls
	//Start connection
	function dbConnect(){
		$servername = "localhost";
		$username = "yuuji";
		$password = "3ug3n32c4r13T//";
		$db = "lottery";
		$conn = mysqli_connect($servername, $username, $password, $db);
		if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
		}
		else{
			return $conn;
		}
	}

	//Select $cols from $table
	function dbSelect($cols, $table){
		$conn = dbConnect();
		$sql = 'SELECT ';
		for ($i=0; $i <= count($cols)-1; $i++) {
			$sql = $sql.$cols[$i];
			if ($i != count($cols)-1){
				$sql = $sql.', ';
			}
		}
		$sql = $sql.' FROM '.$table.';';
		// if (!$conn -> query($sql)) {
		// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
		// }
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return $result;
	}

	function paymentSelect($var1){
		$conn = dbConnect();
		$sql = 'SELECT payment_method FROM payments WHERE payment_id='.$var1.';';
		// if (!$conn -> query($sql)) {
		// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
		// }
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return $result;
	}

	// function batchSelect($var1){
	// 	$conn = dbConnect();
	// 	$sql = 'SELECT end_date FROM batches WHERE batch_id='.$var1.';';
	// 	// if (!$conn -> query($sql)) {
	// 	// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
	// 	// }
	// 	$result = mysqli_query($conn, $sql);
	// 	mysqli_close($conn);
	// 	return $result;
	// }

	// function batchSelect(){
	// 	$conn = dbConnect();
	// 	$sql = 'SELECT TOP 1 * FROM batches ORDER BY batch_id DESC; ';
	// 	$result = $conn->query($sql);
	// 	// $result = mysqli_query($conn, $sql);
	// 	mysqli_close($conn);
	// 	return $result;
	// }

	function lastBatchSelect(){
		$conn = dbConnect();
		$result = dbSelect(array('*'), 'batches');
		$bidarray = array();
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	array_push($bidarray, $row['batch_id']);
            }
            mysqli_close($conn);
            return $bidarray[count($bidarray)-1]+1;
        }
		
	}



	function prizeSelect($var1){
		$conn = dbConnect();
		$sql = 'SELECT prize_name FROM prizes WHERE prize_id='.$var1.';';
		// if (!$conn -> query($sql)) {
		// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
		// }
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return $result;
	}

	function customersSelect(){
		$bid = lastBatchSelect();
		// echo '<script type="text/javascript">console.log('.$bid.');</script>';
		$bidarray = array();
		$conn = dbConnect();
		$sql = 'SELECT lottery_id FROM lotteries WHERE batch_id = 1045 AND NOT customer_name="Available";';
		// echo $sql;
		// if (!$conn -> query($sql)) {
		// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
		// }	
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	// echo '<script type="text/javascript">console.log('.$row['lottery_id'].');</script>';
            	array_push($bidarray, $row['lottery_id']);
            }
            mysqli_close($conn);
            return count($bidarray);
        }
	}

	function paidSelect(){
		$bid = lastBatchSelect();
		// echo '<script type="text/javascript">console.log('.$bid.');</script>';
		$bidarray = array();
		$conn = dbConnect();
		$sql = 'SELECT lottery_id FROM lotteries WHERE batch_id=1045 AND paid=1 AND NOT customer_name="Available";';
		// echo $sql;
		// if (!$conn -> query($sql)) {
		// 	echo '<script type="text/javascript">console.log('.$sql.');</script>';
		// }
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            	// echo '<script type="text/javascript">console.log('.$row['lottery_id'].');</script>';
            	array_push($bidarray, $row['lottery_id']);
            }
            mysqli_close($conn);
            return count($bidarray);
        }
		
		return $result;
	}

	function winnersSelect(){
		$conn = dbConnect();
		$sql = '
		SELECT * FROM lotteries JOIN results ON lotteries.lottery_no = results.result_lottery_no;
		';
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
		return $result;
	}

	//Page button functions
	//Login
	if(isset($_POST['login'])) {
        login();
    }

	function login(){
		$user = htmlspecialchars($_POST['user']);
		$pw = htmlspecialchars($_POST['password']);
		$conn = dbConnect();
		$sql = 'SELECT * FROM users WHERE username="'.$user.'";';
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			if($pw == $row["password"]){
				$_SESSION['user_id'] = $row["user_id"];
				$_SESSION['username'] = $row["username"];
				_goto('');
			}
		}
		mysqli_close($conn);
	}

	//Lottery_Insert
	if(isset($_POST['lottery_insert'])) {
        lottery_insert();
    }

	function lottery_insert(){
		$lottery_no = htmlspecialchars($_POST['lottery_no']);
        echo '<script type="text/javascript">console.log("'.$lottery_no.'");</script>';
        $batch_id = htmlspecialchars($_POST['batch_id']);
        echo '<script type="text/javascript">console.log("'.$batch_id.'");</script>';
        $customer_name = htmlspecialchars($_POST['customer_name']);
        if($customer_name == ''){
            $customer_name = 'Available';
        }
        echo '<script type="text/javascript">console.log("'.$customer_name.'");</script>';
        $customer_ph_no = htmlspecialchars($_POST['customer_ph_no']);
        if($customer_ph_no == ''){
            $customer_ph_no = 'NULL';
        }
        echo '<script type="text/javascript">console.log("'.$customer_ph_no.'");</script>';
        $payment_id = htmlspecialchars($_POST['payment_id']);
        if($payment_id == '--- Choose a payment option ---'){
            $payment_id = 'NULL';
        }
        echo '<script type="text/javascript">console.log("'.$payment_id.'");</script>';
        $paid = htmlspecialchars($_POST['paid']);
        echo '<script type="text/javascript">console.log("'.$paid.'");</script>';
        // exit;
		$conn = dbConnect();
		$sql = 'insert into lotteries(lottery_no, batch_id, user_id, customer_name, customer_ph_no, payment_id, paid) values('.$lottery_no.', '.$batch_id.', '.$_SESSION["user_id"].', "'.$customer_name.'", '.$customer_ph_no.', '.$payment_id.', '.$paid.')';
		if (!$conn -> query($sql)) {
  			echo '<script type="text/javascript">console.log('.htmlspecialchars($sql).');</script>';
		}
		_goto('LotteryForm_template.php');
		mysqli_close($conn);
	}

	if(isset($_POST['batch_insert'])) {
        batch_insert();
    }

    function batch_insert(){
    	$batch_id = htmlspecialchars($_POST['batch_id']);
    	$start_date = htmlspecialchars($_POST['start_date']);
    	$end_date = htmlspecialchars($_POST['end_date']);
    	$sql = "insert into batches(start_date, end_date) values('$start_date', '$end_date');";
    	$conn = dbConnect();
		if (!$conn -> query($sql)) {
	  			_goto('test.php');
			}
		mysqli_close($conn);
		_goto('LotteryForm_template.php');
    }

	//Results_Insert
	if(isset($_POST['result_insert'])) {
        result_insert();
    }

	function result_insert(){
		$batch_id = htmlspecialchars($_POST['batch_id']);
        $t1array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t1'])));
        $t2array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t2'])));
        $t3array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t3'])));
        $t4array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t4'])));
        $t5array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t5'])));
        $t6array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t6'])));
        $t7array = explode(" ",preg_replace('!\s+!', ' ', htmlspecialchars($_POST['t7'])));
        $sql = "insert into results(batch_id, prize_id, result_lottery_no) values('$batch_id', '1', '$t1array[0]'),('$batch_id', '2', '$t1array[1]'),('$batch_id', '3', '$t1array[2]')";
        for ($i=0; $i < count($t2array); $i++) {
            $sql = $sql.",('$batch_id', '4', '$t2array[$i]')";
        }
        for ($i=0; $i < count($t3array); $i++) {
            $sql = $sql.",('$batch_id', '5', '$t3array[$i]')";
        }
        for ($i=0; $i < count($t4array); $i++) {
            $sql = $sql.",('$batch_id', '6', '$t4array[$i]')";
        }
        for ($i=0; $i < count($t5array); $i++) {
            $sql = $sql.",('$batch_id', '7', '$t5array[$i]')";
        }
        for ($i=0; $i < count($t6array); $i++) {
            $sql = $sql.",('$batch_id', '8', '$t6array[$i]')";
        }
        for ($i=0; $i < count($t7array); $i++) {
            $sql = $sql.",('$batch_id', '9', '$t7array[$i]')";
        }
        $sql = $sql.";";
		$conn = dbConnect();
		if (!$conn -> query($sql)) {
	  			echo '<script type="text/javascript">console.log('.$sql.');</script>';
	  			_goto('test.php');
			}
		_goto('ResultForm_template.php');
		mysqli_close($conn);
	}

	//Other functions
	function _goto($page){
		header('Location: /SingLottery/public_html/'.$page);
		exit;
	}
?>