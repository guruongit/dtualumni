<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <!-- required to be in head only -->
  <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
</head>

<body>

  <nav class="bg-white border-gray-200 px-2 lg:px-4 py-2.5 bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">

        <span class="self-center text-2xl lg:text-3xl font-semibold whitespace-nowrap ">Dtu Alum</span>
      </a>
      <div class="flex md:order-2">
       <a href="pages/donate.html"><button type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 ">Donate</button></a>
        <button data-collapse-toggle="navbar-cta" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
          aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div
        class="items-center absolute z-20 top-10 md:top-0  md:relative justify-between hidden w-11/12 md:flex md:w-auto md:order-1"
        id="navbar-cta">
        <ul
          class="flex flex-col lg:p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 sm:text-base md:font-medium md:border-0 md:bg-white  lg:text-xl leading-8 font-semibold text-gray-500">

          <li>
            <a href="/" class="mr-4 md:hidden hover:underline md:mr-3 ">Home</a>
          </li>
          <li>
            <a href="#notedAlumni" class="mr-4 hover:underline md:mr-3">Noted Alumni</a>
          </li>
          <li>
            <a href="./pages/about-us.html" class="mr-4 hover:underline md:mr-3">About</a>
          </li>
          <li>
            <a href="#Services" class="mr-4 hover:underline md:mr-3">Mentorship</a>
          </li>
          <li>
            <a href="#Events" class="mr-4 hover:underline md:mr-3">Events</a>
          </li>

          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-auto mr-4 rounded md:mr-3 md:border-0 md:p-0 md:w-auto active:border-0 hover:underline">Donations <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="./pages/donorsWall.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Donors Wall</a>
                  </li>
                  <li>
                    <a href="./pages/whydonate.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Why Donate?</a>
                  </li>
                  <li>
                    <a href="./pages/donate.html" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Donate Now</a>
                  </li>
                </ul>
                <!-- <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
                </div> -->
            </div>
        </li>

          <li>
            <a href="./pages/memories.html" class="mr-4 hover:underline md:mr-3 ">Memories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Memo Nav -->

  <section class="mx-auto">
    <img class="w-[100%] z-0" src="/dtualumni/public/img/dtu campuses.png" alt="">

  <nav class="fixed top-10 sm:left-1/4 lg:left-1/3 rounded-lg max-w-[16%] sm:max-w-md  mx-2 container flex items-center py-1 mt-4 sm:mt-12 bg-blue-100 ">
    <!-- <h1 class="text-3xl font-bold  underline text-bookmark-purple">
        Hello world!
    </h1> -->
    <div class="py-3  px-2"><img src="/dist/imgs/logo-bookmark.svg" alt=""></div>
    <ul class=" sm:flex  flex-1 justify-center  items-center gap-10 text-bookmark-blue uppercase text-sm ">
        <li>
            <a href="#oldc" class="block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Old Campus</a>
        </li>
        <li>
            <a href="#oldc" class="block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">MeetUps</a>
        </li>
        <li>
            <a href="#oldc" class="block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Events</a>
        </li>
        
       
        
        <li>
          <button  data-dropdown-toggle="dropdownNavbar1"
          class="flex  items-center justify-between uppercase mr-4 rounded md:mr-3  md:p-0 md:w-auto hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">            
          Batch Year 
            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
          
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownNavbar1"
          class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm dark:text-gray-400" aria-labelledby="dropdownLargeButton">
            <li>
              <a href="./donorsWall.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1950</a>
            </li>
            <li>
              <a href="./whydonate.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1960</a>
            </li>
            <li>
              <a href="./donate.html"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1970</a>
            </li>
          </ul>
          <!-- <div class="py-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
            </div> -->
        </div>
        </li>
        
    </ul>
    <div class="flex sm:hidden flex-1 justify-end">
        <i class=" text-2xl fas fa-bars"></i>
    </div>
    

</section>


  <!-- Old Campus -->
  
  <section id="oldc" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Old Campus</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/events.json')){
          $current_data = file_get_contents('admin/data/events.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>

    
  <!-- memo -->

  <div class="container mx-auto px-5 py-2" style="background-image: url('../public/images/hero.jpg');">
  
   
    
  </div>


</footer>


<script src="./script.js"></script>
<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

  </body>
</html>