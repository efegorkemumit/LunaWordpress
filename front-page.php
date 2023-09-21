<?php get_header();?>

<div class="pt-24">

    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!---Left----->
        <div  class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase w-full text-3xl "> Youtube Efe Görkem</p>
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p class="text-xl mb-8"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <button class="mx-auto lg:mx-0 bg-white text-gray-700 font-bol rounded-xl shadow-lg my-6 py-4 px-8">
                Subscribe
            </button>
        </div>


         <!---Right----->

         <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:4/5 z-50" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png">
         </div>

    </div>
</div>


<div class="relative -mt-12 lg:-mt-24">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>

  <section>
    <div class ="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <h1 class="w-full my-2 text-5xl font-semibold text-center text-gray-800">Title</h1>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-2xl"> </div>
        </div>
      
        <div class="flex flex-wrap">
              <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3"></h3>
                <p class="text-gray-600 mb-8">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus a reiciendis quod, molestias sint deleniti possimus aliquam animi eaque esse optio iste consequatur porro assumenda.
                  </p>

              </div>
              <div class="w-full sm:w-1/2 p-6">
                <img class="w-72 md:4/5 z-50" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png">
                  </div>
              </div>

        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                  <img class="w-72 md:4/5 z-50" src="<?php echo get_template_directory_uri(); ?>/assets/img/hero.png">
                
                </div>
            
                <div class="w-full sm:w-1/2 p-6 mt-6">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3"></h3>
                        <p class="text-gray-600 mb-8">
                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus a reiciendis quod, molestias sint deleniti possimus aliquam animi eaque esse optio iste consequatur porro assumenda.
                        </p>

                          
                </div>
        



        </div>

      </div>
    </div>

</section>

<section class="bg-white">
<div class="container mx-auto flex bg-white flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
			<div class="relative w-full py-2 md:py-24 bg-indigo-700 md:w-1/2 flex flex-col item-center justify-center">
				
				<div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
				
				<div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
					<span class="md:block">What Our</span>
					<span class="md-block">Customers</span>
					<span class="block">Are Saying!</span>
				</div>

				<div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
					<button 
						class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
						x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
						&#8592;
					</button><button 
						class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
						x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
						&#8594;
					  </button>
				</div>
			</div>

			<div class="bg-gray-100 md:w-1/2">
				<div class="flex flex-col h-full relative">

					<div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
						<svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
					</div>
					 
					<div class="h-full relative z-10">
						<div x-show.immediate="testimonialActive === 1">
							<p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
<?php echo get_theme_mod('testimonial_1_text')?>
            </p>
						</div>
						
						<div x-show.immediate="testimonialActive === 2">
							<p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
              <?php echo get_theme_mod('testimonial_2_text')?>							</p>
						</div>
						
						<div x-show.immediate="testimonialActive === 3"> 
							<p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
              <?php echo get_theme_mod('testimonial_3_text')?>							</p>
						</div>
					</div>

					<div class="flex my-4 justify-center items-center">
						<button 
							@click.prevent="testimonialActive = 1" 
							class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
							:class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 1 }"	
						><?php echo get_theme_mod('testimonial_1_ab')?></button>
						<button 
							@click.prevent="testimonialActive = 2" 
							class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2"
							:class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 2 }"	
						><?php echo get_theme_mod('testimonial_2_ab')?></button>
						<button 
							@click.prevent="testimonialActive = 3" 
							class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2"
							:class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 3 }"
						><?php echo get_theme_mod('testimonial_3_ab')?></button>
					</div>
					 
					<div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
						<div class="text-center" x-show="testimonialActive == 1">
							<h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"><?php echo get_theme_mod('testimonial_1_name')?></h2>
							<small class="text-gray-500 text-xs md:text-sm truncate"><?php echo get_theme_mod('testimonial_1_city')?>.</small>
						</div>

						<div class="text-center" x-show="testimonialActive == 2">
							<h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"><?php echo get_theme_mod('testimonial_2_name')?></h2>
							<small class="text-gray-500 text-xs md:text-sm truncate"><?php echo get_theme_mod('testimonial_2_city')?>.</small>
						</div>

						<div class="text-center" x-show="testimonialActive == 3">
							<h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight"><?php echo get_theme_mod('testimonial_3_name')?></h2>
							<small class="text-gray-500 text-xs md:text-sm truncate"><?php echo get_theme_mod('testimonial_3_city')?>.</small>
						</div>	 
					</div>
				</div>
			</div>
		</div>
 
    </section>

    <section class="bg-white h-16">    </section>

<style>
			.serif {
				font-family: 'Zilla Slab', serif;
			}

			[x-cloak] { display: none; }

			.grid-indigo {
				background-image: radial-gradient(#5a67d8 2px, transparent 2px);
				background-size: 16px 16px;
			}
		</style>
<?php get_footer();?>
