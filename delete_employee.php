
<?php
require_once('connection.php');
$emp_id=$_GET['emp_id'];

$DeletePost="DELETE FROM `employee_data` WHERE emp_id= $emp_id";
$result = mysqli_query($conn,$DeletePost);




if ($result) {

 $response['status']  = 'success';
 $response['message'] = 'Employee Details Deleted Successfully ...';
     header('Location: list_of_employee.php');

    } else {
        $response['status']  = 'error';
 		$response['message'] = 'Something went wrong ...';
 		     header('Location: list_of_employee.php');

    }

    echo json_encode($response);


?>

