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
    <title>All customer</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
</head>
<style>
.header-area {
    background-color: #0077b6;
}
.contact-form {
    margin-top: 62px;
}
.container{
    margin-bottom: 50px;
}


.styled-table {
    border-collapse: collapse;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 19px rgb(0 19 0 / 37%);
}
.styled-table thead tr {
    background-color: #0077b6;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    letter-spacing: 1px;
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
  padding-top: 25px;
  margin-left: 45%;
}
table{
  margin-left: 8rem;
}

/*table {
  counter-reset: rowNumber;
}

table tr {
  counter-increment: rowNumber;
}

table tr td:first-child::before {
  content: counter(rowNumber);
  min-width: 1em;
  margin-right: 0.5em;
}*/

.css-serial {
 counter-reset: serial-number; /* Set the serial number counter to 0 */
}
.css-serial td:first-child:before {
 counter-increment: serial-number; /* Increment the serial number counter */
 content: counter(serial-number); /* Display the counter */
}
    
.btnAdd{
  margin-left: 70%;
  color: #fff;
  margin-top: 20px;
  margin-bottom: 20px;
}
a{
  color: #fff;
}

.btn{
    background-color: #3573dc;
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
                        <a href="index.php" class="logo">City bank</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html" >Transfer money</a></li>
                            <li class="scroll-to-section"><a href="history.php" >transaction history </a></li>
                            <li class="scroll-to-section"><a href="allcust.php" class="active">All customer</a></li>
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
<section>
      <center style="margin-top:9rem;">
       <h2>Welcome to the Customer's Page</h2>
      <h4>Here are the details to all the available Customers</h4>
      </center>

       <div class="container">
           <button class="btn btn-success btnAdd"><a href="addcustomer.php">add customer</a></button>
           <div>
               <table class="styled-table css-serial ">
               <thead>
               <tr>
                     <th>Sr No</th>
                     <th>Customer name </th>
                     <th>Account Number </th>
                     <th>Email-id</th>
                     <th>Current Balance</th>
                     <th>View Profile</th>
               </tr >
              </thead>
               <?php

              include('connection.php');


              $query="SELECT * FROM customer";
              $query_run= mysqli_query($con,$query);


               while($res = mysqli_fetch_array($query_run)){
                ?>
              <tbody> 
                <tr class="text-center">
                   <td>&nbsp;</td>
                   <td> <?php echo $res['cname'];  ?> </td>
                   <td> <?php echo $res['accNo'];  ?> </td>
                   <td> <?php echo $res['email'];  ?> </td>
                   <td> <?php echo $res['currentBalance'];  ?> </td>
                   <td> <button class="btn-primary btn"> <a href="view.php? accNo=<?php echo $res['accNo']; ?>"> View </a>  </button> </td>

                  </tr>
              </tbody>

               <?php 
               }

               mysqli_error($con);
                ?>
               

               </table>  
         </div>
      </div>

</section> 
 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 




 </script>

 </body>
 </html>

 