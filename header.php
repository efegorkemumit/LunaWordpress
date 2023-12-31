<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body class="leading-normal tracking-normal text-white gradient"  <?php body_class();?>>

<header class="h-20 bg-white shadow-lg">
    <nav class="relative px-2 py-4">
        <div  class="container mx-auto flex justify-between items-center">
<a href="<?php echo site_url();?>">

            <?php 
            $custom_logo_url = get_theme_mod('custom_logo');
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

            <?php

            class My_custom_Walker extends Walker_Nav_Menu{

                public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

                    $output .= '<li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline"
                     href="'.esc_url($item->url).'">'.esc_html($item->title).'</a></li>';

                }
            }


            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'items_wrap' => '<ul class="hidden md:flex space-x-6">%3$s</ul>',
                'depth'=>1,
                'walker' => new My_custom_Walker(),


            ) );
            ?>

            <div class="md:flex space-x-6">
                <a target="_blank" href="<?php echo get_theme_mod('facebook_link'); ?>" class="text-gray-700 hover:text-gray-950" href="">
                <i class="fa-brands fa-facebook"></i>
                </a>
                <a target="_blank" href="<?php echo get_theme_mod('twitter_link'); ?>" class="text-gray-700 hover:text-gray-950 href="">
                <i class="fa-brands fa-twitter"></i>
                </a>
                <a target="_blank" href="<?php echo get_theme_mod('instagram_link'); ?>" class="text-gray-700 hover:text-gray-950 href="">
                <i class="fa-brands fa-instagram"></i>
                </a>
            
            </div>      
            

            <button id="mobile-icon" class="md:hidden">
            <i onClick="changeIcon(this)" class="text-2xl text-red-900 fa-solid fa-bars"></i>
            </button>
        
        <div>

        <!-------Mobile menue start----->

        <div class="md:hidden flex justify-center mt-3 w-full text-black">
            <div id="mobile-menu" class="mobile-menu absolute top-23 w-full">
              
                <?php

class My_custom_Walker2 extends Walker_Nav_Menu{

    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

        $output .= '<li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4"><a class="block pl-7"
         href="'.esc_url($item->url).'">'.esc_html($item->title).'</a></li>';

    }
}


wp_nav_menu( array(
    'theme_location' => 'primary_menu',
    'items_wrap' => '<ul class="bg-gray-100 shadow-lg font-bold h-screen">%3$s</ul>',
    'depth'=>1,
    'walker' => new My_custom_Walker2(),


) );
?>

                
            </div>
        </div>


         <!-------Mobile menue End----->

    </nav>
</header>

<style>
    .gradient
    {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }
    .mobile-menu{
        left:-200%;
        transition:0.5s;
    }
    .mobile-menu.active{
        left:0;
    }
    .mobile-menu ul li ul {
        display:none;
    }
    .mobile-menu ul li:hover ul {
        display:block;
    }
    .top-23
    {
        top:85px;
    }
</style>

<script>
    const mobile_icon = document.getElementById('mobile-icon');
    const mobile_menu = document.getElementById('mobile-menu');
    const hamburger_icon = document.querySelector('#mobile-icon i');

    function openCloseMenu(){
        mobile_menu.classList.toggle('block');
        mobile_menu.classList.toggle('active');
    }
    function changeIcon(icon){
        icon.classList.toggle("fa-xmark");
    }

    mobile_icon.addEventListener('click',openCloseMenu)

</script>

