<?php
//Including Database configuration file.
include "connection.php";
//Getting value of "search" variable from "post_script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $category_name variable.
   $employee_name = $_POST['search'];
//Search query.
   $Query2 = "SELECT `employee_name`,`emp_id` FROM `employee_data` WHERE `employee_name` LIKE '%$employee_name%'";
 // echo $Query2;
//Query execution
   $result2 = mysqli_query($conn, $Query2);
//Creating unordered list to display result.
   echo '
 <ul style="list-style-type:none;">
   ';
   //Fetching result from database.
   while ($row2 = mysqli_fetch_assoc($result2)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "post_script.js" file.
        By passing fetched result as parameter. -->
   <li onclick='fill_category("<?php echo $row2['employee_name']; ?>","<?php echo $row2['emp_id'];?>")' >
   <a href="#">
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $row2['employee_name']; ?>
   </li></a>
   
   <?php
}}
?>
</ul>

 