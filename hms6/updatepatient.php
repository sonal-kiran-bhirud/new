<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
</head>
<body>

<?php 

include('connection.php');
if(isset($_POST['update'])){
    $id = $_POST['id'];
    extract($_POST);

//   $id = $_POST['id'];
//   $old_file = $_POST['old_file'];


//   $myfile = $_FILES["myfile"]["name"];
// $tmpmyfile=$_FILES["myfile"]["tmp_name"];
// $folder = "uploads/".$myfile;

// if( move_uploaded_file ($tmpmyfile,$folder)) {
//     $old_file = $myfile;
// }


 $sql = "UPDATE patients SET `patient`='$patient', `fname`='$fname', `mname`='$mname', `lname`='$lname', `gender`='$gender', `aadhar`='$aadhar', `address`='$address', `contact`='$contact', `dob`='$dob', `age`='$age',`height`='$height',`weight`='$weight',`blood`='$blood',`occupation`='$occupation',`medical`='$medical',`indate`='$indate', `outdate`='$outdate', `roomno`='$roomno', `doctor`='$doctor',`nurse`='$nurse', `company`='$company', `insuranceid`='$insuranceid', `expirydate`='$expirydate', `holder`='$holder', `ephone`='$ephone',`relation`='$relation' WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo '<script>
        $(document).ready(function(){
            Swal.fire({
                title: "Good job!",
                text: "Data updated successfully!",
                icon: "success",
                confirmButtonText: "OK"
            }).then(function() {
                window.history.go(-2); // Redirect its main page 
            });
        });
    </script>';
    }
    else{
        echo "fail to update data";
    }
}





?>

</body>
</html>