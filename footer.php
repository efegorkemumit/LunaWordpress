
<footer class="bg-slate-900 py-7 text-white shadow-2xl shadow-white">
    <div class="container mx-auto flex flex-wrap justify-between">
        <div class="w-full md:w-1/2 lg:w-1/4 mb-4 md:mb-0">
            <img class="w-30 h-11" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"/>
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