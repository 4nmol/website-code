<html>
<head>
<style>
.eight-color-line {
    display: flex;
    height: 20px; /* Adjust height as needed */
color: purple;
    font-family: 'Lucida Calligraphy' ;/* Default font */
padding: 10px; /* Padding around the links */
    size: 16px; /* Default font size */
    border-radius: 5px;
/* Align child container horizontally */
  align-items: center;
  }

  .color-block {
    flex: 1;
  }

  /* Colors for the blocks */
  .color-block:nth-child(1) { background:linear-gradient(to right,red 0% ,orange 50%,red 110%);border: 5px solid white;}
  .color-block:nth-child(2) { background-color: yellow; }
  .color-block:nth-child(3) { background-color: yellow; }
  .color-block:nth-child(4) { background-color: yellow; }
  .color-block:nth-child(5) { background-color: yellow; }
  .color-block:nth-child(6) { background-color: yellow; }
  .color-block:nth-child(7) { background-color: yellow; }
  .color-block:nth-child(8) { background-color: yellow; }
.newa {
  background:linear-gradient(to right,black 0% ,#D2B48C 50%,black 110%);
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}
.container {
  display: flex;
  height: 100vh; /* Full viewport height */
}

.fixed {
   width: 100%;/* Half of the page width */
  position: fixed;
  
  overflow: auto; /* Enable scrolling if content overflows */
}



      
        .title {
            font-family:'Blackadder ITC', serif; 
            color: #6A0DAD;
            text-align: center;
            margin-top: 50px;
           background:linear-gradient(to right,#FF69B4 25%, white 50%,#FF69B4 100%);
font-size:50px;
 
        }
.subtitle {
            font-family:'Footlight MT Light'; 
            color: #ffffff; /* White text color */
            text-align: center;
            background:linear-gradient(to right,black 0% ,#6A0DAD 50%,black 110%);
            padding: 15px; /* Add padding to create space around the text */
            border: 5px solid white;
        }
.navigation {
    color: purple;
    font-family: 'Lucida Calligraphy' ;/* Default font */
    background:linear-gradient(to right, 
            #FF007F 0%, 
            #FF007F 14.28%, 
            #FF007F 28.56%, 
            #FF007F 48.84%, 
            #FF007F 57.12%, 
            skyblue 79.4%, 
            black 85.68%, 
             #FF007F 100%
        );
    padding: 10px; /* Padding around the links */
    size: 16px; /* Default font size */
    border-radius: 5px;
}
.backgrounda{
    border:3px solid #FF007F;
    background-color: #FFA500; /* Background color */
    background: linear-gradient(235deg,red,orange,white,yellow,white,yellow,orange,red);
}
.backgroundb{
 border: 2px solid #6A0DAD;
    background-color: #FF007F;
}
.last {
  font-family:'Blackadder ITC', serif;  /* Set the font family */
  font-size: 150px; /* Set the font size */
  color: #6A0DAD;/* Set the font color */
  font-weight: bold; /* Set font weight to bold */
  line-height: 1.6; /* Set line height for better readability */
  text-align: center; /* Align text to the center */
  text-decoration: underline; /* Add underline decoration */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Add text shadow */
  /* You can adjust the shadow color, size, and blur radius as needed */
}
</style>
</head>
<body>
<?php
$apiKey="rzp_test_kL9vNzqUL3y809"
?>

<div class="backgrounda" class="container">
<div class="fixed">
<div class="backgroundb">
<br>
    <header>
        <h1 class="title"><u>The Donation Nation</u></h1>
        <h2 class="subtitle">.•:*.•:*¨༺༻ ANIMAL RESCUE CHARITY༺༻¨*:•.*:•.</h2>
        <nav>
            <div class="navigation">
               <a href="checkout.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php"><b> Contact</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="blog.php">Blogs</a>
            </div>
        </nav>
    </header>
<br>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form class="newa" action="" method="POST"> 
<script 
src="https://checkout.razorpay.com/v1/checkout.js"
data-key="<?php echo $apiKey;?>"
data-amount="<?php echo $_POST['amount']*100;?>"
data-currency="INR"
data-id="<?php echo 'OID'.RAND(10,100).'end';?>"
data-buttontext="Click to start payment"
data-name="anurag kharade"
data-description="wlc to ak world"
data-image=""
data-prefill.name="<?php echo $_POST['name'];?>"
data-prefill.email="<?php echo $_POST['email'];?>"
data-prefill.contact="<?php echo $_POST['mobile'];?>"
data-theme.color="orchid;"
></script>
<input type="hidden" custom="hidden element" name="hidden" >
</form><h1 class="last">The Donation Nation</h1><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
