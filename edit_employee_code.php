 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php

 require_once('connection.php');

            $emp_id=$_POST['emp_id'];
            $employee_name=$_POST['employee_name'];
            $phase=$_POST['phase'];
            $material_name=$_POST['material_name'];

 $UpdateData="UPDATE `employee_data` SET `emp_id`= '$emp_id',`employee_name`='$employee_name',`phase`='$phase',`material_name`='$material_name'
  WHERE emp_id =$emp_id";

 //var_dump($UpdateData);die;
 $resultData=mysqli_query($conn,$UpdateData);
 if($resultData)
 {
	echo '<script>

       setTimeout(function () {
                                swal({
                                  title: "Done!",
                                  text: "Employee Details Updated Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "list_of_employee.php";
                                  }
                                }); }, 1000);

            </script>';




    } else {
      echo '<script>

       setTimeout(function () {
                    swal({
                      title: "Oops!",
                      text: "Something went wrong!",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "list_of_post.php";
                      }
                    }); }, 1000);

            </script>';
    }



?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>