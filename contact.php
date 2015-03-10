<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
 <form action="" method="POST" enctype="multipart/form-data" >
 <input type="hidden" name="action" value="submit">
  <div class="form-group">
    <label for="InputName">Name</label>
    <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="InputEmail">Email Address</label>
    <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="InputMessage">Message</label>
    <input type="text" name="message" class="form-control" id="InputMessage" placeholder="Enter message">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("leansoftwareservices@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?>  