<?php
	//Start connection
	function dbConnect(){
		$servername = "localhost";							//rarely need to edit this
		$username = "root";								//must edit this
		$password = "";								//edit if required
		$db = "lottery";							//edit if required
		$conn = mysqli_connect($servername, $username, $password, $db);
		if ($conn->connect_error) {
	        die("Connection failed: " . $conn->connect_error);
		}
		else{
			return $conn;
		}
	}
	
	//Insert into lotteries
	function dbLotteryInsert(){
		$conn = dbConnect();
		$batch_id = htmlspecialchars($_POST['batch_id']);
		$user_id = 1;
		$customer_name = htmlspecialchars($_POST['customer_name']);
		$customer_ph_no = htmlspecialchars($_POST['customer_ph_no']);
		$payment_id = htmlspecialchars($_POST['payment_id']);
		$paid = htmlspecialchars($_POST['paid']);
		$sql = 'insert into lottries(lottery_no, batch_id, user_id, customer_name, customer_ph_no, payment_id, paid) values()';
		if (mysqli_query($conn, $sql)) {
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	
	//Insert into results
	// function dbLotteryInsert(){
	// 	$conn = dbConnect();
	// 	$batch_id = htmlspecialchars($_POST['batch_id']);
	// 	$user_id = 1;
	// 	$customer_name = htmlspecialchars($_POST['customer_name']);
	// 	$customer_ph_no = htmlspecialchars($_POST['customer_ph_no']);
	// 	$payment_id = htmlspecialchars($_POST['payment_id']);
	// 	$paid = htmlspecialchars($_POST['paid']);
	// 	$sql = 'insert into lottries(lottery_no, batch_id, user_id, customer_name, customer_ph_no, payment_id, paid) values()';
	// 	if (mysqli_query($conn, $sql)) {
	// 	} else {
	// 		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	// 	}
	// 	mysqli_close($conn);
	// }

	//Select ($col_list) from table;
	//the $col_list is an array so you have to create an array of columns in your table.
	//for eg. - dbSelect($col_list = array('id', 'name', 'age'));

	function dbLottriesSelect(){
		$conn = dbConnect();
		$sql = 'select * from lottries;';
		// for ($i=0; $i <= count($col_list)-1; $i++) {
		// 	$sql = $sql.$col_list[$i];
		// }
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo '<form method="post">
				        <tr>
				            <td>
				            	<input type="hidden" value="'.$row["lottery_id"].'" name="id">'.$row["lottery_id"].'
				            </td>
				            <td>
				            	<input type="text" name="lottery_id" value="'.$row["lottery_no"].'" placeholder="'.$row["lottery_no"].'">
				            </td>
				            <td>
				            	<input type="text" name="customer_name" value="'.$row["customer_name"].'" placeholder="'.$row["customer_name"].'">
				            </td>
				            <td>
				            	<input type="text" name="customer_ph_no" value="'.$row["customer_ph_no"].'" placeholder="'.$row["customer_ph_no"].'">
				            </td>
				            <td>
				            	<input type="text" name="payment_id" value="'.$row["payment_id"].'" placeholder="'.$row["payment_id"].'">
				            </td>
				            <td>
				            	<input type="text" name="paid" value="'.$row["paid"].'" placeholder="'.$row["paid"].'">
				            </td>
				            <td>
				            	<input type="submit" name="edit" value="Edit"> | <input type="submit" name="delete" value="Delete">
				            </td>
				        </tr>
				    </form>';	//This needs a lot of editing and might be the worst. Sorry. Edit according to your table
			}
		} else { echo "<tr><td colspan='4'>0 results</td></tr>"; }
		mysqli_close($conn);

	}

	function dbDelete(){
		$conn = dbConnect();
		$id = htmlspecialchars($_POST['id']);
		$sql = 'delete from users where id='.$id.';';
		if (mysqli_query($conn, $sql)) {
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	function dbEdit(){
		$conn = dbConnect();
		$id = htmlspecialchars($_POST['id']);		//edit according to your table
		$name = htmlspecialchars($_POST['name']);	//edit according to your table
		$age = htmlspecialchars($_POST['age']);	//edit according to your table
		$sql = 'update users set name="'.$name.'", age='.$age.' where id='.$id.';';	//edit according to your table
		if (mysqli_query($conn, $sql)) {
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	function _goto($page){
		//This doesn't work in https://000.webhost.com, I don't know why
		header('Location: '.$page);
		exit;
	}
	
	function _goto_alt($page){
		//Sorry for the Jscript T.T, only use this if _goto function doesn't work, like in https://000.webhost.com
		echo '<script>window.location.replace("'.$page.'")</script>";';
	}

?>
