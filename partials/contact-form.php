
<?php
?>
<div class="row">
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="name"><?php _e('Name: ', 'mp');?></label>
            <input type="text" id="name" name="name" placeholder="<?php _e('Enter your name ', 'mp');?>">
            <div class="required"><?php _e('You need to fill this field ', 'mp');?></div>
        </div>
        <div class="form-group">
            <label for="email"><?php _e('Email: ', 'mp');?></label>
            <input type="email" id="email" name="email" placeholder="<?php _e('your@email.com ', 'mp');?>">
            <div class="required"><?php _e('You need to enter valid email ', 'mp');?></div>
        </div>
        <div class="form-group">
            <label for="message"><?php _e('Message: ', 'mp');?></label>
            <textarea  id="message" name="message" placeholder="<?php _e('Your message goes here...', 'mp');?>" rows="10"></textarea>
            <div class="required"><?php _e('Please fill this field... ', 'mp');?></div>
        </div>
        <div class="form-group">
            <input type="submit" class="mainButton" id="submit" name="submit"  value="Send...">
        </div>
    </form>
</div>