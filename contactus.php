
<!DOCTYPE html>
<html>
<head>
    
  <link rel="stylesheet" type="text/css" href="contact us/styles.css">
  <link rel="stylesheet" type="text/css" href="headerfooter/style.css">
  <title>Contact us</title>

</head>

<body>
<?php include 'headerfooter/header.php'; ?>
    <div class="one">
        <div class="two"><h2>Contact Us</h2></div>

        <div class="container">
       
        
  
    
  
            <div class="five">
                
                <div class="four"><h3>Send Us</h3></div>
                    <form class="form" action="detail.php" method="post">
                       <div><input type="text"  name="name" placeholder="Name" required ></div> 
                       <div><input type="email"  name="email" placeholder="Email address" required ></div> 
                       <div><input type="tel"  name="phone" placeholder="Phone number" required ></div> 
                       <div><textarea  name="address" placeholder="Address" ></textarea></div> 
                        <button type="submit">Submit</button>
                    </form>

            </div>
        
    
            <div class="contactinfo">
                <div class="contact"><h3>Contact Information</h3></div>
                
                
                <div class="contact1">
                    
                    <div class="contact2">
                        
                        phone - <a href="tel:+1234567890">+1 234-567-890</a><br>
                    </div>

                    <div class="contact3">
                       
                        E- mail -<a href="mailto:your-email@example.com">your-email@example.com</a><br>
                    </div>

                    <div class="contact4">
                       
                        Address -<a href="https://maps.google.com/?q=40.7128,-74.0060" target="_blank">121 street, Kandy road, Sri Lanka</a><br>
                    </div>

            </div>
            
    
        </div>

    </div>
</div>
    
    <script src="contactus.js"></script>
    <?php include 'headerfooter/footer.php'; ?>
    </body>
    </html>