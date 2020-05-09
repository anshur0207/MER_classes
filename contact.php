<?php include ('includes/header.php');?>
<link rel="stylesheet" type="text/css" href="assets/contact.css">

    <div class="container1">
  <form class="form-contact"></form>
    <div class="contact-box">
      <div class="left"></div>
      <div class="right">
        <h2>Contact Us</h2>
        <form method="POST" action="api/database/insert.php">
         
        <input type="text" class="field" name="name" id="name" placeholder="Name">


        <input type="text" class="field" name="fathers_name"  id="fathers_name" placeholder="Father's Name">


        <input type="text" class="field" name="class" id="class" placeholder="Class">


        <input type="text" class="field" name="email" id="email" placeholder="Your Email">


         <input type="text" class="field"  name="phone" id="phone" placeholder="Phone">


        <textarea placeholder="Message" name="message" id="message" class="field"></textarea> 

     <input type="submit" onclick="popUp()" value="Submit" >
      </div>
    </div>
  </div> 
  <script>
    function popUp(){
      alert("Thanks We Will Contact U soon")
    }
  </script>




<?php include ('includes/footer.php');?>