<!-- 
// Database connection
// $servername = "localhost";
// $username = "root";
// $password = "45Sas@rama";
// $dbname = "feedback";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// $name = $_POST['uname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $satisfaction = $_POST['satisfy'];
// $message = $_POST['msg'];

// $insert = "INSERT INTO feedback (name, email, phone, satisfaction, message) VALUES (?, ?, ?, ?, ?)";
// $stmt = $conn->prepare($insert);
// $stmt->bind_param("sssss", $name, $email, $phone, $satisfaction, $message);
// $query = $stmt->execute(); 

// if ($query) {
//     echo '<script> 
//         swal({
//             title: "Good job!",
//             text: "You clicked the button!",
//             icon: "success",
//             });
//         </script>';
// } else {
//     echo '<script> 
//         swal({
//             title: "Poor job!",
//             text: "You clicked the button!",
//             icon: "success",
//             });
//         </script>';
// }
// 
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "45Sas@rama";
$dbname = "feedback";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$satisfaction = $_POST['satisfy'];
$message = $_POST['msg'];

$insert = "INSERT INTO feedback (name, email, phone, satisfaction, message) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insert);
$stmt->bind_param("sssss", $name, $email, $phone, $satisfaction, $message);
$query = $stmt->execute();

$response = array();
if ($query) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

echo json_encode($response);
?>


