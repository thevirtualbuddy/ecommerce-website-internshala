<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4><br>
          <p>
                <br>Contact E-Store Support<br><br>
                Need service or support? Start your request online and we’ll find you a solution.<br>
                Customers within 90 days of ownership are eligible for complimentary telephone technical support. 
                Online technical support for our products is available beyond the initial 90 days.
                Legal<br>
                For legal questions or any query, please fill the form and put your query in the message box. 
                We are happy to help you.

            </p>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-8">
        <div class="contact-form">
            <h2>CONTACT US</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-4">
	       <div class="contact-info">
	           <h2 class="title">Company Information :</h2>
	               <address>
				    <Corporate Address:<br><br>
                

                UPR eCommerce Private Limited<br>
                F-1/5, Okhla, Industrial Area, Phase-1,<br>
                New Delhi - 110020,<br>
                Delhi, INDIA <br><br>
             For any query call on 9650002107 between 09:30 to 18:30 IST or
             by email at help@estore.com<br><br>
	               </address>
	               
	            
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>
