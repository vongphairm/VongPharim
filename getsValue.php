<?php
include "src/GetValue.php";
if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $province=$_POST['province'];
    $email=$_POST['email'];?>

        <div class="card bg-success card-sm">
        <div class="card-header text-center">Information</div>
        <div class="card">
           <div class="card-body text-center">
      <?php    
    $info=new GetValue($name,$gender,$province,$email); 
    echo "Name : ".$info->getName()."</br>";
    echo "Gender : ".$info->getGender()."</br>";
    echo "Province : ".$info->getProvince()."</br>";
    echo "Email : ".$info->getEmail()."</br>";   ?>

    </div>
        </div>
        </div>

<?php } ?>

