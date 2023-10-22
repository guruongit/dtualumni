<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      @variants responsive {
      /* Hide scrollbar for Chrome, Safari and Opera */
      .no-scrollbar::-webkit-scrollbar {
          display: none;
      }

      /* Hide scrollbar for IE, Edge and Firefox */
      .no-scrollbar {
          -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;  /* Firefox */
      }
    }
      
    }
  </style>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css">
  <link rel="stylesheet" href="../style.css">
  <style>
    /* html{
    scroll-snap-type: y mandatory;
}

section{
    scroll-snap-align: start;
    scroll-behavior: smooth;
} */
/* .scroll-container{
  scroll-behavior: smooth;
  scroll-snap-type: mandatory;
}
.scroll-page{
  scroll-snap-align: start;
} */
  </style>
</head>

<body>


  <!--div for snap scroll  -->
<div class="scroll-container lg:snap-y lg:snap-mandatory flex-col h-screen w-full mx:auto overflow-y-scroll no-scrollbar">
  <div class="snap-start">
    
  <nav class="bg-white border-gray-200 px-2 lg:px-4 py-2.5 bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">

        <span class="flex gap-2 self-center text-2xl lg:text-3xl font-semibold whitespace-nowrap "><span><img class="h-10 w-10" src="./public/img/dtu-logo.png" alt=""></span>Alumni Affairs</span>
      </a>
      <div class="flex md:order-2">
       <a href="./whydonate.html"><button type="button"
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
            <a href="/dtualumni" class="mr-4 md:hidden hover:underline md:mr-3 ">Home</a>
          </li>
          <li>
            <a href="./about-us.html" class="mr-4 hover:underline md:mr-3">About</a>
          </li>
          <li>
            <a href="./notable-alumni.php" class="mr-4 hover:underline md:mr-3">Notable Alumni</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-auto mr-4 rounded md:mr-3 md:border-0 md:p-0 md:w-auto active:border-0 hover:underline">Donations <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:uselessclassbg-gray-700 dark:uselessclassdivide-gray-600">
                  <ul class="py-2 text-sm dark:uselessclasstext-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="./donorsWall.php" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donor Wall</a>
                    </li>
                    <li>
                      <a href="./whydonate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Why Donate?</a>
                    </li>
                    <li>
                      <a href="./donate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donate Now</a>
                    </li>
                  </ul>
                  <!-- <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasstext-gray-400 dark:uselessclasshover:text-white">Sign out</a>
                  </div> -->
              </div>
          </li>
        <li>
          <a href="./memories.php" class="mr-4 hover:underline md:mr-3 ">Memories</a>
        </li>
        <li>
          <a href="/dtualumni/index.php#Events" class="mr-4 hover:underline md:mr-3">Events</a>
        </li>
          <li>
            <a href="./initiatives.html" class="mr-4 hover:underline md:mr-3">Alumni Initiatives</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
    
    <div class="h-56 w-full bg-gray-50 ">
        <div class="w-full mx-auto container h-56 flex justify-center items-center">
          
  
            <div class="text-5xl  font-bold w-full text-center  mx-auto">
        Notable Alumni
            </div>
          
        </div>
      </div>
      
  </div>  


  <div class="scroll-page min-h-screen snap-start h-max container mx-auto py-5">
  <div class="container lg:px-10 py-2"> 
    <h2 class="text-4xl text-center font-bold">
      Distinguished Alumni
    </h2>
    
    <div class="grid  w-4/5 text-left mx-auto text-xl my-4">
      <p class="mb-3 text-gray-500  text-center">DTU alumni have carved remarkable paths of success, making significant contributions in diverse fields worldwide, serving as inspiring role models for future generations.</p>
  </div>
  </div>
   <section id="TopDonors">
  
      <div class="relative w-11/12 mx-auto px-10 pt-10">
        <p class="text-3xl font-bold py-2">Distinguished Alumni</p>
  
        <div class="swiper-container-alumni-1" x-ref="container">
            <div class="swiper-wrapper" id="">
              <!--20 Slides -->
              <?php
                    if(file_exists('admin/data/alumnicarousel.json')){
                      $current_data = file_get_contents('admin/data/alumnicarousel.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[33vh] w-full object-cover imageAlum-1"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-1">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
          
              <!-- <div class="swiper-slide  ">
                <div class="flex flex-col rounded shadow overflow-hidden">
                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                  >
                  <img class="h-[40vh] w-full object-cover imageAlum-1"
                      src=""
                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                      <p class="classAlum-1"></p>
                    </div>
                    <div
                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
    
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                
              <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-1 "></p>
                        <p class="classAlum-1"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
      
                      </div>
                    </div>
                  </div>
                </div> -->
          </div>
        </div>
        <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
        <div class="flex items-center">
          <button
            class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
          </button>
        </div>
        <div class=" z-10 flex items-center">
          <button
            class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
          </button>
        </div>
        
      </div>
      <!-- Alumni details SideNav -->
      <section id="side-popup-alumni" class="hidden">
        <div class="fixed top-0 z-30 right-0 h-[100vh] w-[100vw] bg-black bg-opacity-50"></div>
        <div id="read-more" class="fixed top-0 z-40 right-0 h-[100vh] w-[100vw] lg:w-[50vw] bg-gray-50 flex flex-col gap-4 p-8">
          <span id="close-popup-alumni" class="material-symbols-outlined place-self-end cursor-pointer">
              cancel
          </span>
          <h3 id="side-popup-alumni-head" class="text-2xl font-semibold">Raj Soin</h3>
          <p id="side-popup-alumni-paragraph" class="text-lg text-gray-700 overflow-y-auto">Dr Rajesh K Soin, an alumnus of 1969 batch of Mechanical Engineering and now chairman and CEO of Soin
            LLC at Ohio in the US, donated the amount Rs 5 crore for the construction of a multipurpose hall at
            his alma mater Delhi Technological University</p>
        </div>
      </section>
    </section>

    <div class="justify-center scroll-page-up lg:mt-24 xl:mt-36 lg:flex hidden">
      <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
        keyboard_double_arrow_up
        </span>
    </div>

  </div>
   
  
  <div class="scroll-page min-h-screen snap-start w-full bg-slate-100">
      <div class="min-h-screen lg:flex container min-w-screen mx-auto items-center">
    <div class="md:w-2/5 px-10 lg:mt-0 pt-8">
      <h2 class="text-4xl font-bold">
        Alumni in Business
      </h2>
      <div class="grid grid-row-1 divide-y-2 gap-2 sm:grid-row-2 text-left text-xl my-4">
        <p class="mb-3 text-gray-500">DTU's alumni in business have achieved extraordinary feats, spearheading thriving ventures, and driving innovation across industries. With their sharp acumen and entrepreneurial spirit, they have established successful startups, held leading positions in multinational corporations, and fostered a culture of creativity and growth. Their transformative leadership and business acumen continue to shape the global business landscape.</p>
        
    </div>
    </div>
            <div id="scholarshipFunds" class="relative mx-auto w-full md:w-1/2">
              <div class=" w-12/12 mx-auto px-10">
                <p class="text-3xl font-bold py-2"></p>
          
                <div class="swiper-container-alumni-2" x-ref="container">
                    <div class="swiper-wrapper">
                      <!--35 Slides -->
                      <?php
                    if(file_exists('admin/data/businessAlumni.json')){
                      $current_data = file_get_contents('admin/data/businessAlumni.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum-2"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-2">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
                      
                      <!-- <div class="swiper-slide  ">
                        <div class="flex flex-col rounded shadow overflow-hidden">
                          <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                          >
                          <img class="h-[40vh] w-full object-cover imageAlum-2"
                              src=""
                              onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                            <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                              <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                              <p class="classAlum-2"></p>
                            </div>
                            <div
                              class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div><div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                            <div class="flex flex-col rounded shadow overflow-hidden">
                              <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                              >
                              <img class="h-[40vh] w-full object-cover imageAlum-2"
                                  src=""
                                  onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                  <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                  <p class="classAlum-2"></p>
                                </div>
                                <div
                                  class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide  ">
                            <div class="flex flex-col rounded shadow overflow-hidden">
                              <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                              >
                              <img class="h-[40vh] w-full object-cover imageAlum-2"
                                  src=""
                                  onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                  <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                  <p class="classAlum-2"></p>
                                </div>
                                <div
                                  class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide  ">
                            <div class="flex flex-col rounded shadow overflow-hidden">
                              <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                              >
                              <img class="h-[40vh] w-full object-cover imageAlum-2"
                                  src=""
                                  onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                  <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                  <p class="classAlum-2"></p>
                                </div>
                                <div
                                  class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide  ">
                            <div class="flex flex-col rounded shadow overflow-hidden">
                              <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                              >
                              <img class="h-[40vh] w-full object-cover imageAlum-2"
                                  src=""
                                  onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                  <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                  <p class="classAlum-2"></p>
                                </div>
                                <div
                                  class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                
                                </div>
                              </div>
                            </div>
                          </div><div class="swiper-slide  ">
                            <div class="flex flex-col rounded shadow overflow-hidden">
                              <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                              >
                              <img class="h-[40vh] w-full object-cover imageAlum-2"
                                  src=""
                                  onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                  <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                  <p class="classAlum-2"></p>
                                </div>
                                <div
                                  class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-2"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                    <p class="classAlum-2"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-2"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                    <p class="classAlum-2"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-2"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                    <p class="classAlum-2"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-2"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                    <p class="classAlum-2"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                  
                                  </div>
                                </div>
                              </div>
                            </div><div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-2"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                    <p class="classAlum-2"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                  >
                                  <img class="h-[40vh] w-full object-cover imageAlum-2"
                                      src=""
                                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                      <p class="classAlum-2"></p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide  ">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                  >
                                  <img class="h-[40vh] w-full object-cover imageAlum-2"
                                      src=""
                                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                      <p class="classAlum-2"></p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide  ">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                  >
                                  <img class="h-[40vh] w-full object-cover imageAlum-2"
                                      src=""
                                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                      <p class="classAlum-2"></p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="swiper-slide  ">
                                <div class="flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                  >
                                  <img class="h-[40vh] w-full object-cover imageAlum-2"
                                      src=""
                                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                      <p class="classAlum-2"></p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
                    
                                    </div>
                                  </div>
                                </div>
                              </div>
                      <div class="swiper-slide  ">
                        <div class="flex flex-col rounded shadow overflow-hidden">
                          <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                          >
                          <img class="h-[40vh] w-full object-cover imageAlum-2"
                              src=""
                              onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                            <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                              <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                              <p class="classAlum-2"></p>
                            </div>
                            <div
                              class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide  ">
                          <div class="flex flex-col rounded shadow overflow-hidden">
                            <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                            >
                            <img class="h-[40vh] w-full object-cover imageAlum-2"
                                src=""
                                onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                              <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-2 "></p>
                                <p class="classAlum-2"></p>
                              </div>
                              <div
                                class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-2 ">
              
                              </div>
                            </div>
                          </div>
                        </div> -->
                  </div>
                </div>
                <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
                <div class="flex items-center">
                  <button
                    class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
                  </button>
                </div>
                <div class=" z-10 flex items-center">
                  <button
                    class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
                  </button>
                </div>
              </div>
               </div>

              </div>
              <div class="justify-center scroll-page-up lg:-mt-12 lg:flex hidden">
               <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
                 keyboard_double_arrow_up
                 </span>
             
              </div>
      </div>
    
    
    <div class="scroll-page min-h-screen snap-start w-full ">
      <div class="min-h-screen lg:flex flex-row-reverse container  mx-auto items-center ">
    <div class="lg:w-2/5 text-center lg:text-start px-5 lg:pr-10 lg:mt-0 pt-8">
      <h2 class="text-4xl font-bold">
    Alumni in Science and Technology
    
      </h2>
      <div class="grid grid-row-1 divide-y-2 gap-2 sm:grid-row-2 text-left text-xl my-4">
        <p class="mb-3 text-gray-500">DTU's alumni in science and technology have made groundbreaking contributions to their respective fields, pushing the boundaries of knowledge and innovation. From pioneering research in cutting-edge technologies to developing sustainable solutions, their scientific prowess has led to significant advancements. Through their groundbreaking discoveries and inventions, DTU alumni continue to shape the future of science and technology, inspiring the next generation of researchers and engineers.</p>
        
    </div>
    </div>
    <div class="relative mx-auto w-full md:w-1/2">
      <div class=" w-12/12 mx-auto px-10">
        <p class="text-3xl font-bold py-2"></p>
    
        <div class="swiper-container-alumni-2" x-ref="container">
            <div class="swiper-wrapper" >
              <!--8 Slides -->
              <?php
                    if(file_exists('admin/data/scienceAndTechnologyAlumni.json')){
                      $current_data = file_get_contents('admin/data/scienceAndTechnologyAlumni.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-3">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';
                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
              <!-- <div class="swiper-slide  ">
                <div class="flex flex-col rounded shadow overflow-hidden">
                  <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                  >
                  <img class="h-[40vh] w-full object-cover imageAlum-3"
                      src=""
                      onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                      <p class="classAlum-3"></p>
                    </div>
                    <div
                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
    
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div> <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div> <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide  ">
                  <div class="flex flex-col rounded shadow overflow-hidden">
                    <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                    >
                    <img class="h-[40vh] w-full object-cover imageAlum-3"
                        src=""
                        onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                      <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                        <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-3"></p>
                        <p class="classAlum-3"></p>
                      </div>
                      <div
                        class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-3">
      
                      </div>
                    </div>
                  </div>
                </div> -->
          </div>
        </div>
        <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
        <div class="flex items-center">
          <button
            class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
          </button>
        </div>
        <div class=" z-10 flex items-center">
          <button
            class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
          </button>
        </div>
      </div>
      </div>
      </div>
      <div class="justify-center scroll-page-up lg:-mt-12 lg:flex hidden">
        <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
          keyboard_double_arrow_up
          </span>
      
       </div>
      </div>
  
      <div class="scroll-page min-h-screen snap-start w-full bg-slate-100">
          <div class="min-h-screen lg:flex container  mx-auto items-center ">
        <div class="md:w-2/5 px-10 lg:mt-0 pt-8">
          <h2 class="text-4xl font-bold">
            Alumni in Civil Services
          </h2>
          <div class="grid grid-row-1 divide-y-2 gap-2 sm:grid-row-2 text-left text-xl my-4">
            <p class="mb-3 text-gray-500">DTU alumni in civil services have demonstrated exemplary dedication and service to the nation. With their unwavering commitment and strong ethical values, they have made significant contributions to governance and public administration. Their leadership skills and expertise in diverse domains have helped shape the nation's development and improve the lives of its citizens.</p>
            
        </div>
        </div>
                <div  class="relative mx-auto w-full md:w-1/2">
                  <div class=" w-12/12 mx-auto px-10">
                    <!-- <p class="text-3xl font-bold py-2"></p> -->
              
                    <div class="swiper-container-alumni-2" x-ref="container">
                        <div class="swiper-wrapper">
                          <!--6 Slides -->
                          <?php
                    if(file_exists('admin/data/civilServiceAlumni.json')){
                      $current_data = file_get_contents('admin/data/civilServiceAlumni.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum-4"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-4">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
                          <!-- <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div><div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div><div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-slide  ">
                              <div class="flex flex-col rounded shadow overflow-hidden">
                                <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                                >
                                <img class="h-[40vh] w-full object-cover imageAlum-4"
                                    src=""
                                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-4"></p>
                                    <p class="classAlum-4"></p>
                                  </div>
                                  <div
                                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-4">
                  
                                  </div>
                                </div>
                              </div>
                            </div> -->
                      </div>
                    </div>
                    <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
                    <div class="flex items-center">
                      <button
                        class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
                      </button>
                    </div>
                    <div class=" z-10 flex items-center">
                      <button
                        class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
                      </button>
                    </div>
                  </div>
                   </div>
          </div>
          <div class="justify-center scroll-page-up lg:-mt-12 lg:flex hidden">
            <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
              keyboard_double_arrow_up
              </span>
          
           </div>
          </div>
        
        
        <div class="scroll-page min-h-screen snap-start w-full ">
          <div class="min-h-screen lg:flex flex-row-reverse container  mx-auto items-center ">
        <div class="lg:w-2/5 text-center lg:text-start px-5 lg:pr-10 lg:mt-0 pt-8">
          <h2 class="text-4xl font-bold">
        Alumni in Art and Entertainment
        
          </h2>
          <div class="grid grid-row-1 divide-y-2 gap-2 sm:grid-row-2 text-left text-xl my-4">
            <p class="mb-3 text-gray-500">DTU's alumni in art and entertainment have captivated audiences worldwide with their creative brilliance and exceptional talent. From award-winning artists to renowned actors, they have left an indelible mark on the cultural landscape. Their artistic expressions have not only entertained but also inspired and challenged societal norms, showcasing the power of creativity and imagination. DTU alumni in art and entertainment continue to inspire aspiring artists and enrich the world of creativity.</p>
            
        </div>
        </div>
        <div class="relative mx-auto w-full md:w-1/2">
          <div class=" w-12/12 mx-auto px-10">
            <p class="text-3xl font-bold py-2"></p>
        
            <div class="swiper-container-alumni-2" x-ref="container">
                <div class="swiper-wrapper" id="scholarshipcarousel">
                  <!-- 15 Slides -->
                  <?php
                    if(file_exists('admin/data/artsAndEntertainmentAlumni.json')){
                      $current_data = file_get_contents('admin/data/artsAndEntertainmentAlumni.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum-5"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-5">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
                  <!-- <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div><div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div><div class="swiper-slide  ">
                      <div class="flex flex-col rounded shadow overflow-hidden">
                        <div class="flex-shrink-0 relative alumni cursor-pointer" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                        >
                        <img class="h-[40vh] w-full object-cover imageAlum-5"
                            src=""
                            onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                          <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                            <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum-5"></p>
                            <p class="classAlum-5"></p>
                          </div>
                          <div
                            class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-5">
          
                          </div>
                        </div>
                      </div>
                    </div> -->
              </div>
            </div>
            <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
            <div class="flex items-center">
              <button
                class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
              </button>
            </div>
            <div class=" z-10 flex items-center">
              <button
                class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
              </button>
            </div>
          </div>
        </div>
      </div>
           

  <!-- <footer class="p-4 bg-gray-200  rounded-lg shadow  md:py-6 md:pb-20 border" id="contact">

    <div class="flex flex-col-reverse md:flex-row sm:items-center sm:justify-between lg:mx-20">
      <div>
        <ul
          class="flex justify-center text-center md:text-left  flex-wrap md:grid md::grid-cols-1 items-center my-6 text-xl leading-8 font-semibold text-gray-500 sm:mb-0 ">
          <li>
            <a href="pages/whydonate.html" class="mr-4 hover:underline md:mr-6 ">Donate</a>
          </li>
          <li>
            <a href="pages/notable-alumni.html" class="mr-4 hover:underline md:mr-6">Notable Alumni</a>
          </li>
          <li>
            <a href="pages/about-us.html" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          
          <li>
            <a href="pages/memories.html" class="hover:underline">Memories</a>
          </li>
          <li>
            <a href="/#Events" class="mr-4 hover:underline md:mr-6">Events</a>
          </li>
          <li>
            <a href="/pages/initiatives.html" class="mr-4 hover:underline md:mr-6 ">Alumni Initiatives</a>
          </li>

        </ul>

      </div>
      <div class="bg-white rounded-lg md:w-1/2 lg:w-max shadow-lg ">
        <div class="py-3 lg:py-5 px-4 w-full lg:w-[600px]">
          <h2 class="mb-2 text-4xl w-full tracking-tight font-extrabold text-center text-gray-900 ">Contact Us</h2>
          <form action="#" class="space-y-3">
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
              <input type="email" id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5    "
                placeholder="" required>
            </div>
            <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
              <input type="text" id="subject"
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500    "
                placeholder="Let us know how we can help you" required>
            </div>
            <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
              <textarea id="message" rows="3"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500   "
                placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit"
              class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 ">Send
              message</button>
          </form>
        </div>
      </div>
    </div>
    <div>
      <p class="text-sm text-center my-2 text-gray-500 ">© 2023 All rights reserved.</p>
    </div>
  </footer> -->
  <footer class="p-4 bg-gray-200  rounded-lg shadow  md:py-6 md:pb-20 border" id="contact">

<div class="flex flex-col-reverse md:flex-row sm:items-center sm:justify-between lg:mx-20">
  <div>
    <ul
      class="flex justify-center text-center md:text-left  flex-wrap md:grid md::grid-cols-1 items-center my-6 text-xl leading-8 font-semibold text-gray-500 sm:mb-0 ">
      <li>
        <a href="./donate.html" class="mr-4 hover:underline md:mr-6 ">Donate</a>
      </li>
      <li>
        <a href="./notable-alumni.php" class="mr-4 hover:underline md:mr-6">Noted Alumni</a>
      </li>
      <li>
        <a href="./about-us.html" class="mr-4 hover:underline md:mr-6">About</a>
      </li>
      <li>
        <a href="./initiatives.html" class="mr-4 hover:underline md:mr-6">Initiatives</a>
      </li>

      <li>
        <a href="/dtualumni/index.php#Events" class="hover:underline">Events</a>
      </li>
      <!-- <li>
        <a href="#Mentorship" class="mr-4 hover:underline md:mr-6 ">Mentorship</a>
      </li> -->

    </ul>

  </div>
  <div class="bg-white rounded-lg md:w-1/2 lg:w-max shadow-lg ">
    <div class="py-3 lg:py-5 px-4 w-full lg:w-[600px]">
      <h2 class="mb-2 text-4xl w-full tracking-tight font-extrabold text-center text-gray-900 ">Contact Us</h2>
        
      <form action="mailto:deanalumniaffairs@dtu.ac.in" method="post" enctype="text/plain" class="space-y-3">
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 ">Your name</label>
          <input name="name" type="text" id="name"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
             required>
        </div>
        <div>
          <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
          <input type="email" id="email" name="mail"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
             required>
        </div>
        <div>
          <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
          <input type="text" id="subject" name="subject"
            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 "
            required>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
          <textarea id="message" rows="3" type="text" name="message"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
            ></textarea>
        </div>
        <button type="submit"
          class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 ">Send
          message</button>
      </form>
    </div>
  </div>
</div>
<div>
  <p class="text-sm text-center mt-8 mb-2 text-gray-500 ">© 2023, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
</div>
</footer>
</div>
       </div>


  <!-- <script src="../script.js"></script> -->
  <script src="./notableAlumni.js"></script>
  <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</body>

</html>