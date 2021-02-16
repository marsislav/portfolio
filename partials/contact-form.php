<?php 
if(isset($_POST['submit'])){
    $to = get_theme_mod('mp_email');
    $from = $_POST['email']; 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $subject = "Marsislav WP Theme:  Form submission";
    $subject2 = "Marsislav WP Theme : Copy of your form submission";
    $message =  $first_name . " " . $last_name . " with email " . $from . "and phone number: " . $phone . " wrote the following:" . "\n\n" . $_POST['message'] ;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    
    mail($from,$subject2,$message2,$headers2); 
     echo "<p class='success'>".__('Mail Sent. Thank you ', 'mp') . $first_name . __(', we will contact you shortly! :)', 'mp'). "</p>";

    }

?>
<form action="" method="post" class="contactForm">
  <div class="row">
    <div class="one-half column">
      <label for="first_name"><?php _e('First Name: ', 'mp'); ?> <span class="required">*</span></label> 
      <input type="text" name="first_name" class="cFirstName" placeholder="<?php _e('Enter your first name here...', 'mp'); ?>" required>
    </div>
    <div class="one-half column">
      <label for="last_name"><?php _e('Last name: ', 'mp'); ?>  <span class="required">*</span></label>
      <input type="text" name="last_name" class="cLastName" placeholder="<?php _e('Enter your last name here...', 'mp'); ?>" required>
    </div>
  </div>
  <div class="row">
    <div class="one-half column">
        <label for="phone"><?php _e('Phone number: ', 'mp'); ?></label>  
        <input type="number" name="phone" class="cPhone" placeholder="<?php _e('Enter your phone number here...', 'mp'); ?>">
     </div> 
    <div class="one-half column">
      <label for="email"><?php _e('Email address: ', 'mp'); ?> <span class="required">*</span></label>  
      <input type="email" name="email" class="cEmail" placeholder="<?php _e('you@email.com', 'mp'); ?>" required>
    </div>
  </div>
<label for="message"><?php _e('Message: ', 'mp'); ?> <span class="required">*</span></label><br>
<textarea rows="8" name="message" placeholder="<?php _e('Enter your message...', 'mp');?>" class="cMessage" required> </textarea><br>
<input type="submit" name="submit" class="mainButton submit send" value="<?php _e('Send... ', 'mp'); ?>">
</form>

<script>

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
