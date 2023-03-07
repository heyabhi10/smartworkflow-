 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
 <?php
require_once('connection.php');
            $email=$_POST['email'];
            $password=$_POST['password'];

 $SelectData="SELECT * FROM `admin_data` WHERE email='$email' AND password='$password' LIMIT 1";
 $resultData=mysqli_query($conn,$SelectData);
 if($resultData){
 $result_count = mysqli_num_rows($resultData);
 if($result_count > 0){
 session_start();
  while ($row = $resultData->fetch_assoc()) {
  $_SESSION['logged_inadmin'] = true;
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['first_name'] = $row['first_name'];
  $_SESSION['last_name'] = $row['last_name'];
  $_SESSION['phone'] = $row['phone'];
  $_SESSION['detail'] = $row['detail'];

  }
    echo '<script>
        setTimeout(function () {
                                swal({
                                  title: "Done!",
                                  text: "Your Login Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"

                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "index.php";
                                  }
                                }); }, 1000);

            </script>';
   }
    else{
        echo '<script>

       setTimeout(function () {
                    swal({
                      title: "Oops!",
                      text: "Login credentials are invalid",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "login.php";
                      }
                    }); }, 1000);

            </script>';
    }
    }else {
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
                        window.location.href = "login.php";
                      }
                    }); }, 1000);

            </script>';
    }



?>

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>