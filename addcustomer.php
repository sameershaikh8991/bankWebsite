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
    <title>Add customer</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
<style type="text/css">
    .contact-form {
   margin-top: -40px;
}
</style>
</head>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body>
    <center style="margin-top:9rem; padding-bottom: 0px;">
       <h2>Welcome to the Add newCustomer's Page</h2>
      <h4>Here are add new  Customers</h4>
      </center>
      <header class="header-area header-sticky" style="background-color: #0077b6;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">Art Factory</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" >Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html" >Transfer money</a></li>
                            <li class="scroll-to-section"><a href="history.php" >transaction history </a></li>
                            <li class="scroll-to-section"><a href="allcust.php">All customer</a></li>
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

    <section class="section" id="about">
        <div class="container">
            <div class="contact-form" style="border-radius: 68px;">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" id="name" name="cname" placeholder="Enter Name" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="email" id="email" name="email"  placeholder="E-mail" required="" class="contact-field">
                              </fieldset>
                            </div>

                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" id="name" name="accNo" placeholder="Account number" class="contact-field">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input  type="text" name="amount" placeholder="Amount"  required="" class="contact-field">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" name="add" id="form-submit" class="main-button">Add Customer</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
            
            </div>
    </section>



<?php 

include('connection.php');
if(isset($_POST['add'])){
	$cname=$_POST['cname'];
	$email=$_POST['email'];
	$accNumber=$_POST['accNo'];
	$amt=$_POST['amount'];

	$check="select * from customer WHERE accNo = '$accNumber'";
  $chk=mysqli_query($con,$check);

	if(mysqli_num_rows($chk)>0){
			?>
			<script>
		    		alert('Account number alredy present');
		    	</script>
		  <?php
	}else{
		$addQuery = "insert into customer(cname,accNo,email,currentBalance) values('$cname', '$accNumber','$email','$amt')";
	  $res=mysqli_query($con,$addQuery);
	    if($res){
	    	?>
	    	<script>
	    		alert('customer add successfully');
	    	</script>
	    	<?php 
	    }

	}
}

 ?>
