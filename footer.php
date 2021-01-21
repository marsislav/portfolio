<footer>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId=521065838010951&autoLogAppEvents=1" nonce="1Ay25rec"></script>
    <div class="container">
        <div class="statistic">
        <div class="fb-like" data-href="https://www.facebook.com/Marsislav-WEB-development-103395978413374" data-width="200" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
       <!-- Default Statcounter code for Marsislav.net https://marsislav.net -->
       <div class="counter">
       <?php _e('Visitors: ', 'mp');?>
<!-- Default Statcounter code for Marsislav.net
https://marsislav.net -->
<script type="text/javascript">
var sc_project=11928820; 
var sc_invisible=0; 
var sc_security="3ae143c0"; 
var sc_text=2; 
var scJsHost = "https://";
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/11928820/0/3ae143c0/0/"
alt="Web Analytics Made Easy -
StatCounter"></a></div></noscript>
<!-- End of Statcounter Code -->
</div>
<!-- End of Statcounter Code -->
            

        </div>
        <div class="information">
        <div class="row">
          <div class="one-half column">
               <ul class="social">
                    <?php if (get_theme_mod ('mp_facebook_handle') ) {?>
                         <li> <a href="https://facebook.com/<?php echo get_theme_mod('mp_facebook_handle'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod ('mp_twitter_handle') ) {?>
                         <li> <a href="https://twitter.com/<?php echo get_theme_mod('mp_twitter_handle'); ?>" target="_blank"><i class="fab fa-twitter"></i></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod ('mp_instagram_handle') ) {?>
                         <li> <a href="https://instagram.com/<?php echo get_theme_mod('mp_instagram_handle'); ?>" target="_blank"><i class="fab fa-instagram-square"></i></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod ('mp_linkedin_handle') ) {?>
                         <li> <a href="https://linkedin.com/<?php echo get_theme_mod('mp_linkedin_handle'); ?>" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod ('mp_email') ) {?>
                         <li> <a href="mailto:<?php echo get_theme_mod('mp_email'); ?>"><i class="fas fa-envelope"></i></a> </li>
                    <?php } ?>
                    <?php if (get_theme_mod ('mp_phone_number') ) {?>
                         <li> <a href="tel:<?php echo get_theme_mod('mp_phone_number'); ?>"><i class="fas fa-phone-square-alt"></i></a> </li>
                    <?php } ?>
                    </ul>
               </div>
               <div class="one-half column">
                    <div class="copyright">
                         <p class="copyright-text"><?php echo get_theme_mod('mp_footer_copyright_text'); ?></p>
                         <?php if (get_theme_mod('mp_footer_tos_page')) {?>
                              <p><a href="<?php the_permalink(get_theme_mod('mp_footer_tos_page'));?>"><?php _e('Terms of Services','mp'); ?></a></p>
                         <?php } ?>

                         <?php if (get_theme_mod('mp_footer_privacy_page')) {?>
                              <p><a href="<?php the_permalink(get_theme_mod('mp_footer_privacy_page'));?>"><?php _e('Privacy Policy','mp'); ?></a></p>
                         <?php } ?>
                    </div>
               </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>                    
</body>
</html>