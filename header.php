<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<header class="h-20 bg-white">
    <nav class="relative px-2 py-4">
        <div  class="container mx-auto flex justify-between items-center">
            Logo

            <ul class="md:flex space-x-6">
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
        
        <div>
    </nav>
</header>

<p>Header</p>