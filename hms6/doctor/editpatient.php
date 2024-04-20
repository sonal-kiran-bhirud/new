<?php
// session_start();
include('../connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM `patients` WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
 
// echo($res);

$row = mysqli_fetch_assoc($res);
// echo $row['name'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <script src="https://kit.fontawesome.com/6ee00b2260.js" crossorigin="anonymous"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: purple;


    }

    .topnav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* .topnav a.active {
  background-color: #2196F3;
  color: white;
} */

    .topnav .search-container {
      float: right;

      /* padding-right: 20px; */
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }


    #img {
      padding-left: 10px;
  }

  .butt:hover {
      background-color: purple;
      color: aliceblue;
  }

  /* .home:hover{
      background-color: black;
      color: black;

  } */

 

  .patient:hover {
      color: black;
  }

  .text {
      color: black;
      font-weight: 900;
  }

  .cardsize {
    height:125px;
    width:auto;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  
  .geeks { 
          /* width: 20%;*/ 
          top: 20%;  
          position: absolute; 
          /* left: 40%;  */
          /* border-bottom: 5px solid black;  */
          overflow: hidden; 
          animation: animate 3s linear forwards; 
      } 

      .geeks h6 { 
          color: purple; 
      } 

   /* Custom CSS for animation */
@keyframes fadeIn {
from { opacity: 0; }
to { opacity: 1; }
}

@keyframes fadeOut {
from { opacity: 1; }
to { opacity: 0; }
}

/* Doctor name */


@keyframes animate { 
          0% { 
              width: 0px; 
              height: 0px; 
          } 

          30% { 
              width: 50px; 
              height: 0px; 
          } 

          60% { 
              width: 50px; 
              height: 80px; 
          } 
        }

        /* doctor name */

.fade-in {
animation: fadeIn 0.5s ease forwards;
}

.fade-out {
animation: fadeOut 0.5s ease forwards;
}
.scale:hover{
transform: scale(1.1,1.1);
}

/* doctor name text */
@keyframes typing {
      from { width: 0 }
      to { width: 100% }
  }

  .animated-text {
      overflow: hidden; /* Ensures text remains within the box */
      /* Simulates cursor */
      white-space: nowrap; /* Prevents text from wrapping */
      animation: typing 3s steps(40, end) ;
  }


  #hiddenDiv {
    display: none;
  }
  
    /* .menu ul,li:hover {
  display: inline-block;
} */

    /* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
}
.user-img{
    width: 60px;
    height: 60px;
    border-radius: 100%;
    border: 1px solid #eee;
}



.sidebar{
    position: absolute;
    top: 0;
    left: 0;
    height: 130vh;
    width: 80px;
    background-color:purple ;
    padding: 0.4rem 0.8rem;
    transition: all 0.5s ease;
    position: fixed;
}


 .sidebar.active ~ .main-content{
    left: 250px;
    width: calc(100% - 250px);
}
.sidebar.active{
    width: 250px;
}
 .sidebar #btn{
    position: absolute;
    color: #fff;
    top: .2rem;
    left:50%;
    font-size: 1.2rem;
   line-height:40px;
    cursor: pointer;
    transform: translateX(-50%);
}

.sidebar.active #btn{
    left: 90%;

} 

.sidebar.top.logo{
    display: flex;
    color: #fff;
    height: 50px;
    width: 100%;
    align-items: center;
    pointer-events: none;
    opacity: 0;
}

.sidebar.active.top.logo{
    opacity: 1;
   
}

.top.logo i{
    font-size: 2rem;
    margin-right: 5px;
}

.user{
    display: flex;
    align-items: center;
    margin: 1rem 0;
}

.user p{
    color: #fff;
    opacity: 1;
    margin-left: 1rem;
   
} 

.bold{
    font-weight: 600;
}

.sidebar p{
    opacity: 0;
}
.sidebar.active p{
    opacity: 1;
}


.sidebar ul li{
    position: relative;
    list-style-type:none;
    height:50px;
    width: 90%;
    margin: 0.8rem auto;
    line-height: 50px;
    
}

.sidebar ul li a{
    
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    text-decoration: none;
    border-radius: 0.8rem;
    
    
}

.sidebar ul li a:hover{
    background-color: #fff;
    color: purple;
}

.sidebar ul li a i{
   min-width: 50px;
   text-align: center;
   height:50px;
   border-radius: 12px;
   line-height: 50px;
   
}

.sidebar .nav-item{
    opacity: 1;
    margin-left: 13px;
    
}

.sidebar ul li .tooltip{
    position: absolute;
    left:125px;
    top: 50%;
    transform: translateY(-50%, -50%);
    box-shadow: 0 0.5rem 0.8rem  rgba(0,0,0,0.2);
    border-radius: .6rem;
    padding: 0.4rem 1.2rem;
    line-height: 1.8rem;
    z-index:20;
    opacity: 0;
}

.sidebar ul li a:hover .tooltip{
    opacity: 1;
    
}

.sidebar.active ul li .tooltip{
    display: none;
}

.main-content{
    position: relative;
    min-height: 100vh;
    top: 0;
    left: 80px;
    width: calc(100% - 80px);
    height: 100vh;
    background-color: #f4f4f4;
    transition: all 0.5s ease;
    padding: 1rem;

} */

    .sidebar {
      position: fixed; /* Change from sticky to fixed */
      top: 0;
      left: 0;
      width: 80px;
      height: 100vh;
      background-color: purple;
      padding: 0.4rem 0.8rem;
      transition: all 0.5s ease;
      overflow-y: auto;
      overflow-x: hidden;
    }

    .accordion {
      font-family: Arial, Helvetica, sans-serif;
      background-color: purple;
      color: white;

      text-decoration: none;

      display: block;
      border: none;



      cursor: pointer;
      outline: none;

    }

    .accordion-button:hover {
      background-color: whitesmoke !important;
      color: purple !important;
    }

    .accordion-body a:hover {
      background-color: whitesmoke;
      color: purple;
    }

    .accordion-body a {
      padding: 6px 8px 6px 30px;
      text-decoration: none;
      font-size: 16px;
      color: white;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    .sidebar.active~.main-content {
      left: 250px;
      width: calc(100% - 250px);
    }

    .sidebar.active {
      width: 250px;
    }

    .sidebar #btn {
      position: absolute;
      color: #fff;
      top: .2rem;
      left: 50%;
      font-size: 1.2rem;
      line-height: 40px;
      cursor: pointer;
      transform: translateX(-50%);
    }

    .sidebar.active #btn {
      left: 90%;
    }

    .sidebar.top.logo {
      display: flex;
      color: #fff;
      height: 50px;
      width: 100%;
      align-items: center;
      pointer-events: none;
      opacity: 0;
    }

    .sidebar.active.top.logo {
      opacity: 1;
    }

    .top.logo i {
      font-size: 2rem;
      margin-right: 5px;
    }

    .user {
      display: flex;
      align-items: center;
      margin: 1rem 0;
    }

    .user p {
      color: #fff;
      opacity: 1;
      margin-left: 1rem;
    }

    .bold {
      font-weight: 600;
    }

    .sidebar p {
      opacity: 0;
    }

    .sidebar.active p {
      opacity: 1;
    }

    .sidebar ul li {
      position: relative;
      list-style-type: none;
      height: 50px;
      width: 90%;
      margin: 0.8rem auto;
      line-height: 50px;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      text-decoration: none;
      border-radius: 0.8rem;
    }

    .sidebar ul li a:hover {
      background-color: #fff;
      color: purple;
    }

    .sidebar ul li a i {
      min-width: 50px;
      text-align: center;
      height: 50px;
      border-radius: 12px;
      line-height: 50px;
    }

    .sidebar .nav-item {
      opacity: 1;
      margin-left: 13px;
    }

    .sidebar ul li .tooltip {
      position: absolute;
      left: 125px;
      top: 50%;
      transform: translateY(-50%, -50%);
      box-shadow: 0 0.5rem 0.8rem rgba(0, 0, 0, 0.2);
      border-radius: .6rem;
      padding: 0.4rem 1.2rem;
      line-height: 1.8rem;
      z-index: 20;
      opacity: 0;
    }

    .sidebar ul li a:hover .tooltip {
      opacity: 1;
    }

    .sidebar.active ul li .tooltip {
      display: none;
      /*display text size normal to bold  display:auto;*/
    }


    /* .sidebar.accordian#k#kk:hover{
   background-color: black;
   color: white;

} */

    .sidebar.active ul li .tooltip {
      display: none;
    }

    /* .accordion:hover {
    background-color: black;
    color: white;
} */

    .main-content {
      position: absolute;
      min-height: 100vh;
      top: 0;
      left: 80px;
      width: calc(100% - 80px);
      height: 100vh;
      background-color: #f4f4f4;
      transition: all 0.5s ease;
      padding: 1rem;
    }

    /* Change color of scrollbar in WebKit browsers */
    .sidebar::-webkit-scrollbar {
      width: 10px;
      /* Set the width of the scrollbar */
    }

    /* Change color of scrollbar thumb */
    .sidebar::-webkit-scrollbar-thumb {
      /* Set the color of the thumb */
      border-radius: 5px;
      /* Set the border radius of the thumb */
      height: 10px
    }

    /* Change color of scrollbar track */
    .sidebar::-webkit-scrollbar-track {
      background: #f1f1f1;
      /* Set the background color of the track */
    }


    #navbar {
      font-size: 12px;
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 2;
    }

    .container-fluid {
      background-color: purple;
      color: white;
      position: sticky;

    }


    .container-fluid a {
      float: left;
      display: block;
      background-color: purple;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;

    }

    .container-fluid a:hover {
      background-color: white;
      color: purple;
    }


    .dropdown-menu {
      background-color: purple;
      color: white;
    }

    .dropdown-menu:hover {
      background-color: white;
      color: purple;
    }

    .container-fluid .search-container {
      float: right;

      /* padding-right: 20px; */
    }

    .container-fluid input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .container-fluid .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      height: 37px;
      background: white;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .container-fluid .search-container button:hover {
      background: white;

    }


    /* {$prefix}accordion-btn-focus-box-shadow: #{$accordion-button-focus-box-shadow}; */
  </style>

</head>

<body>


  <div class="sidebar">

    <div class="top">
      <!-- <div class="logo">
                  <img src="img/logo.webp" alt="img"  class="user-img">
                  <span class="logo_name">Health Care</span>
              </div> -->
      <i class='bx bx-menu' id="btn"></i>
    </div>

    <div class="user">
      <img src="https://www.shutterstock.com/image-photo/medical-concept-indian-beautiful-female-600nw-1635029716.jpg"
        alt="img" width="50px" height="50px" class="user-img" style="border-radius: 50%;">
      <div>
        <p class="bold">Health Care</h4>
        <p>Doctor</p>


      </div>
    </div>

    <div class="accordion" style="background-color: purple;">
      <!-- Admin -->
      <div class="accordion-item" style="border: none;">
        <h2 class="accordion-header" id="headingDoctor">
          <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseDashboard" aria-expanded="true" aria-controls="collapseDoctor"
            style="background-color: purple;color:white;">


            <!-- <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard" style="color: white;"> -->
            <i class='bx bx-grid-alt'></i>

            <i class="fa-solid fa-user-crown fs-5 " style="color:white;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="fs-6 ms-3 d-none d-sm-inline" style="padding-bottom: 3px;">Patients</span>
          </button>
        </h2>
        <div id="collapseDashboard" class="accordion-collapse collapse" aria-labelledby="headingDoctor"
          data-bs-parent="#accordionExample">
          <div class="accordion-body" style="background-color: purple;color: white;">
            <a href="imppatientlist.php" class="list-group-item list-group-item-action">All Patients</a>
            <a href="ipdpatientslist.php" class="list-group-item list-group-item-action">Ipd Patients</a>
            
            <a href="opdpatientslist.php" class="list-group-item list-group-item-action">Opd patients</a>
            <a href="emergencypatientslist.php" class="list-group-item list-group-item-action">Emergency Patients</a>

            <!-- <a href="#" class="list-group-item list-group-item-action">Link 3</a> -->
          </div>

        </div>
      </div>
      <!-- Doctors -->


      <div class="accordion" style="background-color: purple;">
        <!-- Admin -->
        <div class="accordion-item" style="border: none;">
          <h2 class="accordion-header" id="headingDoctor">
            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseDoctor" aria-expanded="true" aria-controls="collapseDoctor"
              style="background-color: purple;color: white;">

              <!-- 
                      <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard" style="color: white;"> -->
              <i class="fa-solid fa-user-doctor"></i>

              <i class="fa-solid fa-user-crown fs-5 " style="color:purple;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="fs-6 ms-3 d-none d-sm-inline" style="padding-bottom: 3px;">Appointments</span>
            </button>
          </h2>
          <div id="collapseDoctor" class="accordion-collapse collapse" aria-labelledby="headingDoctor"
            data-bs-parent="#accordionExample">
            <div class="accordion-body" style="background-color: purple;color: white;">
              <a href="doctorappointmentlist.php" class="list-group-item list-group-item-action">Appointment  list</a>
              <!-- <a href="#" class="list-group-item list-group-item-action">Add Doctor</a> -->
              <!-- <a href="#" class="list-group-item list-group-item-action">Link 3</a> -->
            </div>
          </div>
        </div>

        
        <!-- Doctors -->
        <div class="accordion-item" style="border: none;">
          <h2 class="accordion-header" id="headingPatients">
            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapsePatients" aria-expanded="true" aria-controls="collapsePatients"
              style="background-color: purple;color: white;">

              <!-- <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard" style="color: white;" > -->
              <i class="fa-solid fa-users"></i>

              <i class="fa-solid fa-user-crown fs-5 " style="color:purple;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="fs-6 ms-3 d-none d-sm-inline" style="padding-bottom: 3px;">Nurse</span>

            </button>
          </h2>
          <div id="collapsePatients" class="accordion-collapse collapse" aria-labelledby="headingPatients"
            data-bs-parent="#accordionExample">
            <div class="accordion-body" style="background-color: purple;color: white;">
              <a href="doctornurseview.php" class="list-group-item list-group-item-action">Nurse Records</a>
              

            </div>
          </div>
        </div>
        <!-- Patients -->
       
        <!-- Accountant -->
        
        <div class="accordion-item" style="border: none;">
          <h2 class="accordion-header" id="headingBloodbank">
            <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseBloodbank" aria-expanded="true" aria-controls="collapseBloodbank"
              style="background-color: purple;color: white;">

              <!-- <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse"data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard" style="color: white;"> -->
              <i class="fa-solid fa-droplet"></i>

              <i class="fa-solid fa-user-crown fs-6 " style="color:purple;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <span class="fs-6 ms-3 d-none d-sm-inline" style="padding-bottom: 3px;">Blood Bank</span>
            </button>
          </h2>
          <div id="collapseBloodbank" class="accordion-collapse collapse" aria-labelledby="headingBloodbank"
            data-bs-parent="#accordionExample">
            <div class="accordion-body" style="background-color: purple;color: white;">
              <a href="dbloodbank.php" class="list-group-item list-group-item-action">Available Blood</a>
              <a href="donarlist.php" class="list-group-item list-group-item-action">Donar list</a>
            </div>
          </div>
        </div>
        <!-- Departments -->
        
        <!-- Inventory -->
        <div class="accordion-item" style="border: none;">
       
          



        </div>
      </div>
      <!-- New Register -->

    </div>







    <ul class="menu" style="padding-left: 0rem;" id="accordion">



          
        <li class="sidebar-item">




</a>
<a href="logout.php" class="sidebar-link has-dropdown collapsed">
<i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;
<span class="fs-6">Logout</span>


<i class="lni lni-protection"></i>


</a>



</li>

    </ul>
  </div>


  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>


  <div class="main-content" style="padding: 0;">


    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
      <div class="container-fluid">


        <img src="https://marketplace.canva.com/EAFBb6P4OLs/1/0/1600w/canva-red-blue-simple-logo-hbl5vlZh180.jpg
      " alt="Bootstrap" width="55" height="54" style="border-radius: 50%; margin: 4px; float: right;">

        <a class="navbar-brand" href="doctordashboard.php" id="b">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">



          </ul>

          <svg xmlns="http://www.w3.org/2000/svg" href="logout.php" width="16" height="16" fill="currentColor"
            class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
            <path fill-rule="evenodd"
              d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
          </svg>

        </div>
      </div>
    </nav>
    <div class="container  box-shadow: 2px 2px;">
    <div class="row ">
        <div class="col-md-12">
            <div class="card ">

            <div class="header" style="background-color:purple;color:white;height:50px;">
                
                    <h3 class="card-title text-center">Patient Report Form</h3>
                  </div><br>
                <div class="card-body">
                    
                    <form method="post" action ="updatepatient.php" enctype="multipart/form-data">

                       
                        <div class="row ">
                          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                           
                            <div class="form-group col-md-4">
                            <label for="patient"> Select Patient type</label>
                                <select class="form-control" id="patient"  name="patient" required>
                               
                                <option value="" disabled selected hidden>Patient Types</option>
                                  <option value="OPD" <?php if($row['patient']== 'OPD'){ echo 'selected';}?>>OPD</option>
                                  <option value="IPD"<?php if($row['patient']== 'IPD'){ echo 'selected';}?>>IPD</option>
                                  <option value="Emergency"<?php if($row['patient']== 'Emergency'){ echo 'selected';}?>>Emergency</option>
</select>
                            </div>

                            <div class="form-group col-md-4">
                            <label for="fname"> Name</label>
                         <input type="text" class="form-control" placeholder="Enter First Name" name="fname" id="name "  value="<?php echo $row['fname'];?>"required>
                         <small id="nameValidation" style="color: red"></small>
                        </div>


                            <div class="form-group col-md-4">
                                <label for="gender">Select gender:</label>
                                <select class="form-control" id="gender"  name="gender" required>
                            <option value="" disabled selected hidden>Select Gender</option>
                           
                              <option value="Male"<?php if($row['gender']== 'Male'){ echo 'selected';}?>>Male</option>

                              <option value="female"<?php if($row['gender']== 'female'){ echo 'selected';}?>>Male</option>
                              <option value="other"<?php if($row['gender']== 'other'){ echo 'selected';}?>>Male</option>
                             
                            </select>
                            </div>

                            
                        

</div><br>


                        
                        <div class="row">
                           
                            <div class="form-group col-md-4">
                                <label for="aadhar">Adhar No</label>
                                <input type="text" class="form-control" placeholder="Enter Adhar No" name="aadhar" id="aadhar"   value="<?php echo $row['aadhar'];?>"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')"|size="12" minlength="12" maxlength="12"placeholder="123-899-783-123"required>
                            </div>
                        

                    <div class="form-group col-md-4">
                         <label for="address">Address</label>
                            <input type="text" textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Patient's Address"required  value="<?php echo $row['address'];?>"></textarea>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" id="contact"oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                        size="10"
                        minlength="10"
                        maxlength="10"
                        placeholder="0123456789"required  value="<?php echo $row['contact'];?>">
                    </div>
                  </div><br>


                  <div class="row">
                    <div class="form-group col-md-4">
                        <label for="ephone">Emergency Contact</label>
                            <input type="text" class="form-control" placeholder="Enter econtact" name="ephone" id="ephone"
                            oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                            size="10"
                            minlength="10"
                            maxlength="10"
                            placeholder="0123456789"  value="<?php echo $row['ephone'];?>">
                    </div>
                       

                          <div class="form-group col-md-4">
                                <label for="dob">DOB:</label>
                                <input type="date" class="form-control"  name="dob"  id="dob" placeholder="" value="<?php echo $row['dob'];?>"required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" placeholder="Age" name="age" id="age" value="<?php echo $row['age'];?>"required >
                            </div>
</div><br>

                           
                    <div class="row">
                            <div class="form-group col-md-4">
                                <label for="height">Height</label>
                                <input type="height" class="form-control" placeholder="Height" name="height" id="height"required value="<?php echo $row['height'];?>" >
                            </div>
                       
                  
                            <div class="form-group col-md-4">
                                <label for="weight">Weight</label>
                                <input type="text" class="form-control" placeholder="Weight" name="weight" id="weight"required value="<?php echo $row['weight'];?>">
                            </div>

                 <div class="form-group col-md-4">
                 <label for="blood">blood group</label><br>
                    <select class="form-control" name="blood" id="blood"required >
                    <option value="" disabled selected hidden>Blood Group</option>
                    <!-- <option value= "disabled">Select Blood Group</option> -->
                      <option value="A"<?php if($row['blood']== 'A'){ echo 'selected';}?>>A</option>
                      <option value="A-"<?php if($row['blood']== 'A-'){ echo 'selected';}?>>A-</option>
                      <option value="B"<?php if($row['blood']== 'B'){ echo 'selected';}?>>B</option>
                      <option value="B-"<?php if($row['blood']== 'B-'){ echo 'selected';}?>>B-</option>
                      <option value="AB"<?php if($row['blood']== 'AB'){ echo 'selected';}?>>AB</option>
                      <option value="AB-"<?php if($row['blood']== 'AB-'){ echo 'selected';}?>>AB-</option>
                      <option value="O"<?php if($row['blood']== 'O'){ echo 'selected';}?>>O</option>
                      <option value="O-"<?php if($row['blood']== 'O-'){ echo 'selected';}?>>O-</option>
                    </select>
        </div>

</div><br>

                            <div class="row">

                            <div class="form-group col-md-4">
                                <label for="occupation">Occupation</label>
                            <input type="text" class="form-control" placeholder="Occupation" name="occupation" id="occupation" value="<?php echo $row['occupation'];?>" required>
                            <small id="occupationValidation" style="color: red"></small>
                            </div>

                       
                              <div class="form-group col-md-4">
                              <label for="medical">Medical History</label>
                            <input type="text" class="form-control" placeholder="Medical History" name="medical" id="medical" value="<?php echo $row['medical'];?>" required >
                            <small id="medicalValidation" style="color: red"></small>
                            </div>

                              
                            <div class="form-group col-md-4">
                                <label for="indate">Indate</label>
                                <input type="date" class="form-control" placeholder="Enter Indate" name="indate" id="indate" value="<?php echo $row['indate'];?>" required>
                               
                              </div>
</div><br>

                            

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="outdate">Outdate:</label>
                                <input type="date" class="form-control"  name="outdate" id="outdate"  value="<?php echo $row['outdate'];?>" required>
                              </div>
                         
                           
                                <div class="form-group col-md-4">
                                    <label for="roomno">Room No</label>
                                    <input type="text" class="form-control" placeholder="Enter Room Number" name="roomno" id="roomno"  value="<?php echo $row['roomno'];?>" required>
                                </div>
    
                                  
                                <div class="form-group col-md-4">
                                    <label for="doctor">doctor assigned</label>
                            <input type="text" class="form-control" placeholder=" Dr. Name" name="doctor" id="doctor"  value="<?php echo $row['doctor'];?>" required>
                                   
                                  </div>
</div><br>

    
                               
             <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="nurse">Nurse Assigned </label>
                                    <input type="text" class="form-control" placeholder="Nurse Name" name="nurse" id="nurse" value="<?php echo $row['nurse'];?>" required >
                                  </div>
</div><br>
                               

                                <div>
                                    <button  onclick="preventsubmit(event);toggleDiv();" class="btn btn-danger">Insurance</button>   
                                </div> 

                                <p>Insurance Details</p>

                                <div id="hiddenDiv">

                            
                                
                           
                                <div class="row">

<div class="form-group col-md-4">
                 <label for="company"> Insurance Company</label>
                 <input type="text" class="form-control" id="company" name="company" placeholder="Holder" value="<?php echo $row['company'];?>" >
             </div>

             
     <div class="form-group col-md-4">
                 <label for="holder">Holder Name</label>
                 <input type="text" class="form-control" id="holder" name="holder" placeholder="Holder"value="<?php echo $row['holder'];?>">
             </div>



               
             <div class="form-group col-md-4">
             <label for="insuranceid">Insurance Id</label>
<input type="text" class="form-control" id="insuranceid" name="insuranceid" placeholder="Insurance ID" value="<?php echo $row['insuranceid'];?>">
</div>
</div><br>
<div class="row">

   <div class="form-group col-md-4">
                 <label for="expirydate">Expiry Date</label>
                 <input type="date" class="form-control" id="expirydate" name="expirydate" placeholder="Holder" value="<?php echo $row['expirydate'];?>">
             </div>


             
<div class="form-group col-md-4">
                 <label for="ephone">Emergency Contact</label>
                 <input type="text" class="form-control" id="ephone" name="ephone" placeholder="Emergency Contact"
                 name="contacts" id="contacts"
                 oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                 size="10"
                 minlength="10"
                 maxlength="10"
                 placeholder="0123456789" value="<?php echo $row['ephone'];?>" >
                
               </div>
</div><br>


            <div class="row">     
             <div class="form-group col-md-4">
                 <label for="relation">Relation</label>
                 <input type="text" class="form-control" id="relation" name="relation" placeholder="Relation" value="<?php echo $row['relation'];?>">
             
               </div>
</div><br>


                                            <script>
                                                function toggleDiv() {
                                                 var div = document.getElementById('hiddenDiv');
                                                if (div.style.display === 'none') {
                                                 div.style.display = 'block';
                                                } else {
                                                div.style.display = 'none';
                                              }
                                            }
                                                </script>


                                </div>




                                <div class="card-footer footer" >

                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="check"> 
                                       <label class="form-check-label" for="check">By submitting this form, I hereby declare that the information provided above is accurate and true to the best of my knowledge.</label>
                                       </div>

                            <div style="text-align:center">
                                <button type="submit" name="submit"  id="submit" class="btn btn-primary button">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset" name="reset"  id="reset" class="btn btn-dark button">Reset</button>
                                </div>
                        <div>
                        </div>
                                        </div>

                       
                    </form>
                </div>
            </div>
        </div>
    </div>

           
<script>
    // let hideshow=document.getElementByClass('emergency')

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
function preventsubmit(event)
{
    event.preventDefault();
}
</script>
<script>
    //validation for firstname.
      document
        .getElementById("fname")
        .addEventListener("input", function (event) {
          var fnameInput = event.target.value;
          var fnameRegex = /^[A-Za-z\s]+$/;
          var fnameValidation = document.getElementById("fnameValidation");

          if (!fnameRegex.test(fnameInput)) {
            fnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            fnameValidation.textContent = "";
          }
        });
        //Validation for Middlename.
        document
        .getElementById("mname")
        .addEventListener("input", function (event) {
          var mnameInput = event.target.value;
          var mnameRegex = /^[A-Za-z\s]+$/;
          var mnameValidation = document.getElementById("mnameValidation");

          if (!mnameRegex.test(mnameInput)) {
            mnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            mnameValidation.textContent = "";
          }
        });

        //Valiadtion for lastname.
        document
        .getElementById("lname")
        .addEventListener("input", function (event) {
          var lnameInput = event.target.value;
          var lnameRegex = /^[A-Za-z\s]+$/;
          var lnameValidation = document.getElementById("lnameValidation");

          if (!lnameRegex.test(lnameInput)) {
            lnameValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            lnameValidation.textContent = "";
          }
        });

        //Validations for occupation filed.
        document
        .getElementById("occupation")
        .addEventListener("input", function (event) {
          var occupationInput = event.target.value;
          var occupationRegex = /^[A-Za-z\s]+$/;
          var occupationValidation = document.getElementById("occupationValidation");

          if (!occupationRegex.test(mnameInput)) {
            occupationValidation.textContent =
              "Name must contain only letters and spaces.";
          } else {
            occupationValidation.textContent = "";
          }
        });
    
        //Validations for submit filed.
      document
        .getElementById("registrationForm")
        .addEventListener("submit", function (event) {
          var inputs = document.querySelectorAll("input");
          var isValid = true;

          inputs.forEach(function (input) {
            if (!input.checkValidity()) {
              isValid = false;
            }
          });

          if (!isValid) {
            event.preventDefault();
          }
        });
</script>

</div>






</body>

<script>
  let btn = document.querySelector("#btn");
  let sidebar = document.querySelector(".sidebar");
  let searchBtn = document.querySelector(".bx-search");

  btn.onclick = function () {
    sidebar.classList.toggle("active");
  };
</script>

</html>`