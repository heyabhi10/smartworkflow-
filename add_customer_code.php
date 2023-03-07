 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php 

 require_once('connection.php');
 
 
            $employee_name=$_POST['employee_name'];
            $emp_id=$_POST['emp_id'];
            $phase=$_POST['phase'];
            $material_name=$_POST['material_name'];



 $InsertData="INSERT INTO `employee_data` ( `emp_id`, `employee_name`, `phase`, `material_name`) VALUES
                      ('$emp_id', '$employee_name', '$phase', '$material_name')";
// var_dump($InsertData);die();
 $resultData=mysqli_query($conn,$InsertData);
 if($resultData)
 {

       echo '<script>

       setTimeout(function () {
                                swal({
                                  title: "Done!",
                                  text: "Employee Added Successfully!",
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
                        window.location.href = "add_employee.php";
                      }
                    }); }, 1000);

            </script>';
    }



?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>