

<html lang="en">
<head><style>
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
  .color-block:nth-child(1) { background:linear-gradient(to right,black -10% ,skyblue 50%,black 110%);border: 3px solid white;}
  .color-block:nth-child(2) { background-color: #FF007F; }
  .color-block:nth-child(3) { background-color: #FF007F; }
  .color-block:nth-child(4) { background-color: #FF007F; }
  .color-block:nth-child(5) { background-color: #FF007F; }
  .color-block:nth-child(6) { background-color: #FF007F; }
  .color-block:nth-child(7) { background-color: #FF007F; }
  .color-block:nth-child(8) { background-color: #FF007F; }

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
    font-size:50px;
            color: #6A0DAD; 
            text-align: center;
            margin-top: 50px;
            background:linear-gradient(to right,#FF69B4 25%, white 50%,#FF69B4 100%);
 
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
            red 0%, 
            orange 14.28%, 
            yellow 28.56%, 
            yellow 42.84%, 
            yellow 57.12%, 
            yellow 71.4%, 
            yellow 85.68%, 
            yellow 100%
        );
    padding: 10px; /* Padding around the links */
    size: 16px; /* Default font size */
    border-radius: 5px;
}
.styled-heading {
    color: #6A0DAD; /* Font color */
    font-family: 'Footlight MT Light'; /* Font family */
    font-size: 36px; /* Font size */
    padding: 10px; /* Padding around the heading */
}
.backgrounda{
    border:3px solid #FF007F;
    background-color: #FFA500; /* Background color */
    background: linear-gradient(235deg,red,orange,white,yellow,white,orange,red);
}
.backgroundb{
 border: 2px solid #6A0DAD;
    
    background-color: #FF007F; /* Background color */
}
.fonta {
    color: purple; /* Font color */
    font-family: "Calisto MT", serif; /* Font family */
}
.alpha{
font-family: "Segoe Script", cursive; /* A beautiful cursive font */
  color: black; /* A soothing blue color */
  font-size: 16px; /* Adjust font size as needed */
  font-weight: bold; /* Make the text bold for emphasis */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
.beta{
font-family:'Lucida Calligraphy';   /* A beautiful cursive font */
  color:  #8B4513;/* A soothing blue color */
  font-size: 24px; /* Adjust font size as needed */
  font-weight: bold; /* Make the text bold for emphasis */
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
.btn {
  background:linear-gradient(to right,black 0% ,#D2B48C 50%,black 110%);
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}
.gama{
background:linear-gradient(to right,white 0% ,white 50%,grey 110%);
}
    </style>
    
</head>
<body>
<div class="backgrounda" class="container">
<div class="fixed">
<div class="backgroundb">
<br>
    <header>
        <h1 class="title"><u>The Donation Nation</u></h1>
        <h2 class="subtitle">.·:*.·:*¨༺༻ ANIMAL RESCUE CHARITY༺༻¨*:·.*:·.</h2>
        <nav>
            <div class="eight-color-line">
  <div class="color-block"><a href="checkout.php"><b>&nbsp;&nbsp;◉ Home&nbsp;&nbsp;</b></a></div>
  <div class="color-block"><a href="about.php">&nbsp;&nbsp;About&nbsp;&nbsp;</a></div>
  <div class="color-block"><a href="contact.php">&nbsp;&nbsp;Contact&nbsp;&nbsp;</a></div>
  <div class="color-block"><a href="blog.php">&nbsp;&nbsp;Blogs&nbsp;&nbsp;</a></div>
  <div class="color-block"></div>
  <div class="color-block"></div>
  <div class="color-block"></div>
  <div class="color-block"></div>
</div>

        </nav>
    </header>
<br>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 class="styled-heading"><u>HOME</u></h1>

   
<div class="alpha" style="padding:100px 300px;">
  <form action="payscript.php" method="post" style="padding: 25px;">
       <h1 ><i>Saving <u>❤ne</u> animal won’t change the world ,
but it will change world for that <u>❤ne</u> animal</i></h1>
       <h3 style="font-family:lato;">↓&nbsp;&nbsp;Form&nbsp;&nbsp;↓</h3>
         
        <label for="fname"><i class="beta">Full name</i></label><br>
        <input type="text" class="gama" name="name" placeholder="john M.doe"><br>
	<label for="email"><i class="beta">Email</i></label><br>
        <input type="text" class="gama" name="email" placeholder="john@example.com"><br>
        <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
 	<input type="hidden" value="<?php echo 1;?>" name="amount">	
	<label for="city"><i class="beta">Mobile</i></label><br>
        <input type="text" class="gama" name="mobile" placeholder="mobile number"><br>
        <label for="adr"><i class="beta">Addres</i></label><br>
        <input type="text" class="gama" name="address" placeholder="524 w. 15th street"><br>
     
     <input type="submit" value="click for donation" class="btn">
    </form>
  
 </div>
</div>
</body>
</html>
