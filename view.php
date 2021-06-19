<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <title>City bank</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
</head>
<style>
.header-area {
    background-color: #0077b6;
}

.styled-table {
    border-collapse: collapse;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 19px rgb(0 19 0 / 37%);
    margin-top: -32px;
}

.contact-form {
    margin-top: 62px;
}
.styled-table thead tr {
    background-color: #0077b6;
    color: #ffffff;
    text-align: left;
    font-size: 15px;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table td {
    font-size: 14px;
}
styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.trct_Btn{
  margin-top: 25px;
  margin-left: 45%;
}

table{
  justify-self: center;
  margin:0 auto ;
}
    
</style>
<body class="bg cs">
    <!------ Header----->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">city bank</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html" >Transfer money</a></li>
                            <li class="scroll-to-section"><a href="history.php" >transaction history </a></li>
                            <li class="scroll-to-section"><a href="allcust.php" >All customer</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>




   <section class="container">
      <div class="content">
        <center style="margin-top:10rem;">
            <h2 style="font-weight: bold;">Customer Details</h2>
        </center>
     <div class="container "  style="padding:0px;">
     <div class="col-lg-12"  style="padding:0px;">
     <br><br>
     <h1 class="text-warning text-center"  >  </h1>
     <br>
 <table  id="tabledata" class="styled-table" style="padding:0px;">
 <thead>
 <tr>
 <th>Customer name </th>
 <th>Account Number </th>
 <th>Email-id</th>
 <th>Current Balance</th>
 </tr >
 </thead>
 <?php

include('connection.php');


$accNo = $_GET['accNo'];

$query='select * from customer where accNo="'.$accNo.'"';
$query_run= mysqli_query($con,$query);


 while($res = mysqli_fetch_array($query_run)){
  ?>
<tbody>
 <tr class="text-center">
 <td> <?php echo $res['cname'];  ?> </td>
 <td> <?php echo $res['accNo'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['currentBalance'];  ?> </td>
 </tr>
</tbody>
 <?php 
 }

 mysqli_error($con);
  ?>
 

 </table>  

 
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
<div >
    <a href="Transact.html" class="btn btn-primary trct_Btn"><i class="fa fa-check mr-2"></i>Transact Now</a>
          
    </div>
      </div>
</section>
 </body>
 </html>

 