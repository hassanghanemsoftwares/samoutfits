// <?php
// $servername = "localhost";
// $username = "samfit_admin";
// $password = "admin@2022";
// $dbname = "samfit_accounting";
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
// }
// $sql = "SELECT id, relation_id FROM transactions where relation_id is not null";
// $result = $conn->query($sql);
// $res = $result->fetch_all(MYSQLI_ASSOC);
// foreach ($res as $r) {
// 	$relation_id = $r['relation_id'];
// 	$sql1 = "SELECT id, trans_type FROM transactions where id = '$relation_id'";
// 	$result1 = $conn->query($sql1);
// 	$res1 = $result1->fetch_assoc();
// 	if (!$res1) {
// 		var_dump($r, $res1);
// 		// $trans_id = $r['id'];
// 		// $sql2 = "UPDATE transactions SET relation_id = NULL where id = '$trans_id'";
// 		// if ($conn->query($sql2) === TRUE) {
// 		// 	echo "Record updated successfully";
// 		// } else {
// 		// 	echo "Error updating record: " . $conn->error;
// 		// }
// 	}
// }
