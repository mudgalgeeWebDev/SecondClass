<?php
      $name = $_POST['name'];
      $fname = $_POST['fname'];
      $email = $_POST['email'];
      $mobile = $_POST['mobile'];
      $pwd = $_POST['pwd'];
      $re-pwd = $_POST['re-pwd'];
      $gender = $_gender['gender']

    $con = mysqli_connect('localhost','root','','signup_form');
    if(isset($_POST['subbtn']))
    {
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $pwd=$_POST['pwd'];
        $re-pwd=$_POST['re-pwd'];
        $gender=$_POST['gender'];
    }
    /*
    else{

        $start = $conn->prepare("insert into student_details (name, fname, email, mobile, pwd, re-pwd, gender, values(?,?,?,?,?,?,?)" );
        $stmt->bind_parm("ssssssi",$name,$fname, $email, $mobile, $pwd, $re-pwd, $gender);
        echo "Registration Sucessfully....";
        $stmt->close();
        $conn->close:
        */

        $query=INSERT INTO `student_details`(`name`, `fname`, `email`, `mobile`, `pwd`, `re-pwd`, `gender`) 
        VALUES ('[$name]','[$fname]','[$email]','[$mobile]','[$pwd]','[$re-pwd]','[$gender]')

        $run=mysqli_query($con,$query);
        


    

?>
