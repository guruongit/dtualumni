<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="/dtualumni/tailwind.css" rel="stylesheet" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/dtualumni/css/style.css">
  </head>
  <body class="bg-grey">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class=" w-7 rounded-md bg-blue-600"><img src="https://img.collegepravesh.com/2015/10/DTU-Logo.png" alt=""></i>
          <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin Alumni Affairs</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <!-- <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
        <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
        />
      </div> -->
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Alumni Data</span>
      </div>
      <!-- <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Modify</span>
      </div> -->
      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Modify</span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
      >
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          <a href="#news">News</a>
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
        <a href="#donation">Donation</a>
        </h1>
        <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Main Carousel 
        </h1>
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
      </div>
    </div>


    <script type="text/javascript">
      function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropdown();

      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>

<div id="main">


<!-- News -->

<section id="news">

  <!-- Heading -->
  <div   class="bg-blue-100 h-10 text-center py-2">
    News
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>News Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/news.json')){

          $current_data = file_get_contents('admin/data/news.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Title-> ".$array_data[$i]['title'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add New News in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-news.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Title</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="title" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td><input class ="border-black border rounded-lg" type="date" name="date" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Older News from Data</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-news.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>




<section id="donation">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Donations
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Donations Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/donations.json')){

          $current_data = file_get_contents('admin/data/donations.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Title-> ".$array_data[$i]['title'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add New News in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-donations.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Title</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="title" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td><input class ="border-black border rounded-lg" type="date" name="date" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Form Data in JSON File</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-donations.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<!-- Ordering form -->
<section>

<div id="header">
  <h1>Reordering Form Data in JSON File</h1>
</div>

<br>
<br>
<?php

  if(file_exists('json/student_data.json')){

    $current_data = file_get_contents('json/student_data.json');
    $array_data = json_decode($current_data, true);
    echo '<hr>';
    

  
echo '<div id="table-data">';

  echo '<form id="submit_form" method="post" action="order-form.php">';  
    echo '<table width="100%" cellpadding="10px">';
    for($i = 0; $i<count($array_data); $i++){
     
      //echo '<li>';
     $get = "serial".$i; 
      echo '<tr><label>Name-> '.$array_data[$i]['name'].' | Old Serial-> '.$array_data[$i]['serial'].' | New Serial->  '.'</label><input  class ="border-black border  rounded-lg" type="number" name='.$get.' autocomplete="off" />   </tr>';
      //echo '</li>';
      echo '<hr>';
    }
      
      
      echo'<tr>
        <td></td>
        <td><input type="submit" name="submit" id="submit" /></td>
      </tr>';
      
    echo '</table>';
  echo '</form>';  
echo '</div>';

  }

?>


</section>
  </body>
</html>