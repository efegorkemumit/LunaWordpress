<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="h-20 bg-white shadow-lg">
    <nav class="relative px-2 py-4">
        <div  class="container mx-auto flex justify-between items-center">
            <img class="w-30 h-11" src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png"/>

            <ul class="hidden md:flex space-x-6">
                <li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline" href="#">Home</a></li>
                <li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline" href="#">News</a></li>
                <li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline" href="#">Services</a></li>
                <li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline" href="#">About</a></li>
                <li><a class="text-lg text-gray-700 hover:text-gray-950 hover:underline" href="#">Contact</a></li>
            </ul>

            <div class="md:flex space-x-6">
                <a  class="text-gray-700 hover:text-gray-950" href="">
                <i class="fa-brands fa-facebook"></i>
                </a>
                <a class="text-gray-700 hover:text-gray-950 href="">
                <i class="fa-brands fa-twitter"></i>
                </a>
                <a class="text-gray-700 hover:text-gray-950 href="">
                <i class="fa-brands fa-instagram"></i>
                </a>
            
            </div>      
            

            <button id="mobile-icon" class="md:hidden">
            <i onClick="changeIcon(this)" class="text-2xl text-red-900 fa-solid fa-bars"></i>
            </button>
        
        <div>

        <!-------Mobile menue start----->

        <div class="md:hidden flex justify-center mt-3 w-full">
            <div id="mobile-menu" class="mobile-menu absolute top-23 w-full">
                <ul class="bg-gray-100 shadow-lg font-bold h-screen">
                    <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4" ><a class="block pl-7" href="#">Home</a></li>

                    <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4" ><a class="block pl-7" href="#">News</a></li>
                    <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4" ><a class="block pl-7" href="#">Services</a></li>
                    <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4" ><a class="block pl-7" href="#">About</a></li>
                    <li class="border-b-2 border-white hover:bg-red-400 hover:text-white pl-4" ><a class="block pl-7" href="#">Contact</a></li>

                </ul>
            </div>
        </div>


         <!-------Mobile menue End----->

    </nav>
</header>

<style>
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

<p>Header</p>