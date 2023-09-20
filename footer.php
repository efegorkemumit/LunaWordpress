
<footer class="bg-slate-900 py-7 text-white shadow-2xl shadow-white">
    <div class="container mx-auto flex flex-wrap justify-between">
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
        <a href="<?php echo site_url();?>">
        <?php 
            $custom_logo_url = get_theme_mod('footer_custom_logo');
            if($custom_logo_url)
            {
                echo '<img class="w-30 h-11" src="'.esc_url($custom_logo_url).'" />';

            }
            else
            {
                echo '<img class="w-30 h-11" src="'.get_template_directory_uri(). '/assets/img/logo.png'.'" />';
            }



            ?>
</a>


            <p class="text-gray-400 mt-4 text-xs"><?php echo get_theme_mod('copyright'); ?></p>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
          <h3 class="text-2xl font-semibold mb-4">LINKS</h3>
          <?php 
          if(is_active_sidebar('footer-1')){
            dynamic_sidebar('footer-1');
          }
          
          
          ?>
         
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
          <h3 class="text-2xl font-semibold mb-4">LINKS</h3>
          <?php 
          if(is_active_sidebar('footer-2')){
            dynamic_sidebar('footer-2');
          }
          
          
          ?>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
          <h3 class="text-2xl font-semibold mb-4">ADDRESS</h3>
         <p class="text-gray-400">Address : <?php echo get_theme_mod('address'); ?> </p>
         <p class="text-gray-400">Phone : <?php echo get_theme_mod('phone'); ?> </p>
         <p class="text-gray-400">Email : <?php echo get_theme_mod('email'); ?> </p>
         <div class="md:flex space-x-6 mt-3">
                <a target="_blank" href="<?php echo get_theme_mod('facebook_link'); ?>" class="text-white hover:text-gray-300" href="">
                <i class="fa-brands fa-facebook"></i>
                </a>
                <a target="_blank" href="<?php echo get_theme_mod('twitter_link'); ?>" class="text-white hover:text-gray-300 href="">
                <i class="fa-brands fa-twitter"></i>
                </a>
                <a target="_blank" href="<?php echo get_theme_mod('instagram_link'); ?>" class="text-white hover:text-gray-300 href="">
                <i class="fa-brands fa-instagram"></i>
                </a>
            
            </div>      
        </div>

    



    </div>
</footer>
<?php wp_footer();?>
</body>
</html>