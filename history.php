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
    <title>History</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
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
.styled-table thead tr {
    background-color: #0077b6;
    color: #ffffff;
    text-align: left;
    font-size: 15px;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
    letter-spacing: 1px;
}

.styled-table td {
    font-size: 14px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    font-size: 12;
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
.btn{
    background-color: #560bad;
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
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html">Transfer money</a></li>
                            <li class="scroll-to-section"><a href="history.php" class="active">transaction history </a></li>
                            <li class="scroll-to-section"><a href="allcust.php">All customers</a></li>
                            <li class="scroll-to-section"><a href="contact.php">Contact Us</a></li>
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="content">
           <center style="margin-top:10rem;">
            <h2 style="font-weight: bold;">Transaction History</h2>
            <p>This is all Transaction History</p>
        </center>
            <div class="container " style="padding:0px;">
                <div class="col-lg-12" style="padding:0px;">
                    <br><br>
                    <h1 class="text-warning text-center"> </h1>
                    <br>
                    <table id="tabledata" class="styled-table">
                        <thead>
                            <th>Transaction ID</th>
                            <th>Transaction Date</th>
                            <th>Sender's name </th>
                            <th> Recipient Name </th>
                            <th>sender's Account Number</th>
                            <th>Recipient's Account Number</th>
                            <th>Transacted Amount</th>
                            </tr>
                        </thead>
                        <?php

    include('connection.php');


    $query="SELECT * FROM `transaction` ";
    $query_run= mysqli_query($con,$query);


     while($res = mysqli_fetch_array($query_run)){
      ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $res['tid'];  ?>
                                </td>
                                <td>
                                    <?php
        echo   date("Y/m/d");
        ?>
                                </td>
                                <td>
                                    <?php echo $res['senderName'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['recipientName'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['senderAccountNum'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['recipientAccountNum'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['amount'];  ?>
                                </td>
                            </tr>
                        </tbody>
                        <?php 
     }

     mysqli_error($con);
      ?>
                    </table>
                </div>
    </section>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tabledata').DataTable();
    })
    </script>
</body>

</html>
<div class="trct_Btn">
    <a href="transact.html" class="btn btn-primary">Transfer Now</a>
</div>
</body>

</html>