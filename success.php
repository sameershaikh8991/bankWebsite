<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Success</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">
    
</head>
<body class="fc">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700');

body{
    font-family: 'Quicksand', sans-serif;
    background-color: #E4F6FA;
}

.screen{
  cursor: pointer;
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    overflow: hidden;
    width: 330px;
    height: 360px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 2 12px 0 rgba(0,0,0,0.1);
    text-align: center;
}
.screen #topIcon{
    position: absolute;
    left: 50%;
    top: 30%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.screen .border-top{
    position: absolute;
    top: 0;
    height: 10px;
    width: 100%;
    background-color: #5AE9BA;
}

.screen h3{
    font-weight: 700;
    font-size: 24px;
    color: #606060;
    letter-spacing: 0;
    position: absolute;
    left: 50%;
    top: 55%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.screen p{
    font-weight: 400;
    font-size: 16px;
    color: #616161;
    letter-spacing: 0.18px;
    position: absolute;
    left: 50%;
    top: 68%;
    width: 90%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}



.screen button:focus{
    outline:0;
  
  : pointer;
}
#Bubbles{
    visibility: hidden;
}

.un{
    -webkit-user-select: none; /* Safari */        
    -moz-user-select: none; /* Firefox */
    -ms-user-select: none; /* IE10+/Edge */
    user-select: none; /* Standard */
}

.screen.un{
    border: 1px solid red;
}

.tr{
    -webkit-transition: all 0.2s ease-in;
    -moz-transition: all 0.2s ease-in;
    -ms-transition: all 0.2s ease-in;
    -o-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
}

.btn-overlay{
    
    background-color: #0cdded;
    border: 0;
    color: #fff;
    padding: 10px 15px;
    border-radius: 100px;
    font-size: 12px;
    letter-spacing: 0.8px;
    z-index: 999;
    width: 100px
}

.btn-overlay:hover{
    opacity: 1;
}

#NewTrc{
    position: fixed;
    right: 105px;
    top: 290px;
    width: fit-content;
}
#NewTrc a{
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    color: #000;
}
    </style>
<header class="header-area header-sticky" style='background-color:#0466c8'>
        <div class="container">
            <div class="row">
                <div class="col-13">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">CITY BANK</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php">Home</a></li>
                            <li class="scroll-to-section"><a href="transact.html">Transfer Money</a></li>
                            <li class="scroll-to-section"><a href="history.php">transaction history </a></li>
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


<section class="section" >
    <div class="screen un">
        <div class="border-top">
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="150" id="topIcon" fill="blue" class="bi bi-check2-circle" viewBox="0 0 16 16">
            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
        </svg>
        <h3>SUCCESS!</h3>
        <p>You have successfully transferred money.</p>
        <button type="button" id="NewTrc" class="btn-overlay restart tr"><a href="transact.html">New transction</a></button>
    </div>
</section>
</body>
</html>
