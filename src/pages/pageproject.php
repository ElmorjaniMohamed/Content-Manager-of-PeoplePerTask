<?php
require '../../php/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../dist/output.css">
  <link rel="stylesheet" href="../../global.css">
  <link rel="stylesheet" href="../../src/css/owl.carousel.min.css">
  <script src="../../dist/sandbox.js"></script>
  <title>PeoplePerTask</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark bg-slate-50">
  <header>
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
      <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
        <li class="flex gap-1">
          <img src="../../images/main-logo.svg" alt="main-logo">
          <div class="hf:hidden hl:hidden flex burgerMenu">
            <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
              class="cursor-pointer">
            <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
              class="cursor-pointer">
          </div>
        </li>
        <li>
          <ul class="justify-center items-center gap-4 hf:flex hidden">
            <li><a href="#"
                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                a
                member</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                Us</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                Us</a></li>
          </ul>
        </li>
        <li>
          <ul class="flex justify-center items-center gap-4">
            <li>
              <form class="relative hs:flex hidden">
                <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                      dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                  placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="../../images/search-icon.svg"
                    alt="search-icon"></button>
              </form>
            </li>
            <li class="hidden ht:flex justify-center items-center gap-3 flex-row">
              <button type="button"
                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]">Sign
                Up</button>
            </li>
            <li>
              <div class="flex ht:hidden burgerMenu">
                <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                  class="cursor-pointer">
                <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                  class="cursor-pointer">
              </div>
            </li>
            <li>
              <div id="theme-switcher" class="relative">
                <div id="selectThemeDropdown"
                  class="transform translate-y-3 hidden herothird:right-[-18px] right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Auto (system default)
                  </a>
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Default (light mode)
                  </a>
                  <a
                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                    Dark
                  </a>
                </div>
              </div>
              <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </button>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- dropdown menu -->
    <nav id="navDropdown" class="hf:hidden flex overflow-hidden hf:pb-0 dark:border-b-[1px] border-b-seperator">
      <ul
        class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
        id="navBurgerNav">
        <li>
          <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
            <li><a href="#"
                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                a
                member</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                Us</a></li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                Us</a></li>
          </ul>
        </li>
        <li class="hs:hidden flex">
          <ul class="flex justify-center items-center gap-4 flex-col">
            <li>
              <form class="relative hs:hidden flex">
                <input type="text"
                  class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                  placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="../../images/search-icon.svg"
                    alt="search-icon"></button>
              </form>
            </li>
            <li class="flex ht:hidden justify-center items-center gap-3 flex-col">
              <button type="button"
                class="flex w-[18rem] text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[18rem]">Sign
                Up</button>
            </li>
            <li>
              <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
              </button>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class=" bg-slate-50  dark:bg-mainColorDark px-6 flex justify-center items-center">
    <div class="container w-[100%] max-h-full mx-auto bg-mainBlue rounded-lg p-14">
      <form>
        <h1 class="text-center font-bold text-white text-4xl">Featured Projects</h1>
        <p class="mx-auto font-normal text-center text-white text-sm my-6 max-w-lg">Lorem ipsum dolor sit amet
          consectetur adipisicing elit.
          Voluptatibus quia quos vero vel iste tenetur dolor alias sit excepturi. Illo aliquam culpa facilis iusto
          beatae placeat accusantium non eum minima.</p>
        <div class="sm:flex items-center bg-white rounded-full overflow-hidden p-2 px-5 justify-center">
          <input id="search" class="text-sm font-poppins font-medium text-gray-400 flex-grow border-0 outline-none "
            type="text" placeholder="Search your project..." />
          <div class="ms:flex items-center justify-center px-6 rounded-full space-x-4 mx-auto ">
            <select id="Categories"
              class="text-sm text-gray-800 font-poppins font-semibold outline-none border-2 px-8 py-2 rounded-full">
              <?php
              $sql = "SELECT * FROM categories";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='$row[CategoryID]'> $row[CategoryName] </option>";
              }
              ?>
            </select>
            <button
              class="bg-[#FE8D4D] text-white text-sm font-light rounded-full px-6 py-3 font-poppins">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <section id="parent" class="flex justify-center items-center pt-12 w-full gap-8 flex-wrap">
    <?php

    $sql = 'SELECT * FROM projects';

    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) > 0):
      while ($row = mysqli_fetch_assoc($query)):
        $ProjectTitle = $row['ProjectTitle'];
        $DescriptionProject = $row['DescriptionProject'];
        $ProjectID = $row['ProjectID'];

        ?>
        <div class="flex justify-center items-center gap-6 flex-wrap">
          <div
            class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
            <div class="flex justify-center items-center flex-col gap-4">
              <img src="../../images/job-logo-1.png.svg" alt="first-job-logo">
              <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">
                <?= $ProjectTitle ?>
              </h3>
              <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">
                <?= $DescriptionProject ?>
              </p>
            </div>
            <div class="flex justify-center items-center flex-col gap-4 w-full">
              <div class="flex justify-between items-center flex-row w-full">
                <img src="../../images/List → Item → SVG (4).svg" alt="money-bag">
                <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 -
                  $25,000</p>
                <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
              </div>
              <div class="flex justify-between items-center flex-row w-full">
                <img src="../../images/List → Item → SVG (5).svg" alt="money-bag">
                <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London,
                  England</p>
                <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
              </div>
            </div>
            <div class="flex justify-center items-center flex-row w-full gap-4">
              <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img
                  src="../../images/SVG (3).svg" alt="heart-emoji"></div>
          
                <button type="button"
                  class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full"><a
                    href="./Projects/projectDetails.php?ProjectID=<?php echo $ProjectID; ?>">Apply Now</a>
                </button>
           
            </div>
          </div>

        <?php endwhile; endif; ?>

  </section>

  <footer class="bg-footer pt-12 mt-16 flex justify-center items-center flex-col gap-8">
    <div class="flex w-[100%] justify-center items-center ffff:px-16 px-8 ff:flex-row flex-col gap-4">
      <div class="flex justify-center items-center">
        <h3 class="w-[100%] font-poppins font-semibold text-slate-50 text-[36px]">
          Don't miss our weekly updates about freelancer career
        </h3>
      </div>
      <div class="w-[50%] flex justify-center items-center">
        <form class="relative flex">
          <input type="text"
            class="text-slate-50 shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-footer rounded-full pl-6 pr-28 w-[26rem] h-[60px] border-defaultText border-2 outline-none py-[1rem]"
            placeholder="Enter you email address...">
          <button type="submit" class="absolute right-2 top-2 text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
            font-poppins text-base font-medium w-[full]">Subscribe</button>
        </form>
      </div>
    </div>
    <div
      class="flex justify-between ffff:items-start items-center gap-2 font-poppins text-normal text-slate-50 w-[100%] ffff:px-16 px-8 ffff:flex-row flex-col">
      <div class="flex justify-center items-center gap-4 flex-col ffff:w-[40%] fff:w-[70%] w-[100%]">
        <div class="flex justify-start items-start flex-col">
          <img src="../../images/div.footer-brand.svg" alt="brandlogo">
          <p>
            PeoplePerTask is a Freelance Landing Website lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud
          </p>
        </div>
        <div class="flex justify-center items-center gap-2">
          <img src="../../images/Item → Link (1).svg" alt="facebook">
          <img src="../../images/Item → Link (2).svg" alt="twitter">
          <img src="../../images/Item → Link (3).svg" alt="youtube">
          <img src="../../images/Item → Link (4).svg" alt="linkedin">
          <img src="../../images/Item → Link (5).svg" alt="instagram">
        </div>
      </div>
      <div class="flex justify-center items-start gap-16 ff:flex-row flex-col">
        <div class="ffff:w-[60%] w-[100%] flex justify-center items-start gap-8 text-slate-50">
          <div class="flex justify-start items-start flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px] text-start">PPT</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>Why PPT</li>
              <li>Enterprise</li>
              <li>Customer Story</li>
              <li>Security</li>
              <li>Prcing</li>
            </ul>
          </div>
          <div class="flex justify-start items-center flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px]">Resources</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>Download</li>
              <li>Help Center</li>
              <li>Events</li>
              <li>Guides</li>
              <li>Partner</li>
              <li>Directories</li>
            </ul>
          </div>
          <div class="flex justify-start items-center flex-col gap-2">
            <h6 class="font-poppins font-semibold text-[18px]">Company</h6>
            <ul class="font-poppins font-normal text-[14px] gap-2">
              <li>About Us</li>
              <li>Conatct Us</li>
              <li>Products</li>
              <li>Login</li>
              <li>Sign Up</li>
              <li>FAQ</li>
            </ul>
          </div>
        </div>
        <div class="flex justify-center items-start gap-2 flex-col w-[40%]">
          <h6 class="font-poppins font-semibold text-[18px]">Get In Touch With Us</h6>
          <ul class="flex justify-start items-start flex-col gap-2">
            <li class="flex justify-start items-start gap-2 font-poppins font-normal text-[14px]">
              <img src="../../images/List → Item → SVG (1).svg" alt="address">
              <p>
                832 Thompson Drive, United States
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="../../images/List → Item → SVG (2).svg" alt="number">
              <p>
                +123 345123 556
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="../../images/List → Item → SVG (3).svg" alt="email">
              <p>
                support@peoplePerTask.id
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div
      class="text-slate-50 font-poppins font-normal text-[14px] flex justify-center items-center border border-b-0 border-l-0 border-r-0 border-t-1 border-seperator w-full p-4">
      <p>
        PeaplePerTask Landing Website - ©
        <span id="currentDate">
        </span>
        All Rights Reserved
      </p>
    </div>
    <script src="../../src/scripts/jquery.min.js"></script>
    <script src="../../src/scripts/owl.carousel.min.js"></script>
    <script src="../../src/scripts/owl.js"></script>

  </footer>

  <!-- Search Projects By Title -->
  <script>
    document.getElementById("search").addEventListener("input", function () {
      var search = document.getElementById("search").value;

      var x = new XMLHttpRequest();
      x.open("GET", "./ajax/search.php?search=" + search, true);
      x.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
          var res = JSON.parse(this.response);
          console.log(res);

          var parent = document.getElementById("parent");
          parent.innerHTML = "";

          res.forEach(e => {
            var div = document.createElement("div");
            div.className = "flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]";
            div.innerHTML = `
              <div class="flex justify-center items-center flex-col gap-4">
                <img src="../../images/job-logo-1.png.svg" alt="first-job-logo"> 
                <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">${e.ProjectTitle}</h3>
                <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">${e.DescriptionProject}</p>
              </div>
              <div class="flex justify-center items-center flex-col gap-4 w-full">
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="../../images/List → Item → SVG (4).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
                </div>
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="../../images/List → Item → SVG (5).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
                </div>
              </div>
              <div class="flex justify-center items-center flex-row w-full gap-4">
                <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="../../images/SVG (3).svg" alt="heart-emoji"></div>
                <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full"><a href="./Projects/projectDetails.php">Apply Now</a></button>
              </div>
            </div>`;

            parent.appendChild(div);
          });
        } else {
          var parent = document.getElementById("parent");
          parent.innerHTML = "";
        }
      };
      x.send();
    });
  </script>

  <!-- Filter Projects By Category  -->
  <script>
    document.getElementById("Categories").addEventListener("input", function () {
      var search = document.getElementById("Categories").value;

      var x = new XMLHttpRequest();
      x.open("GET", "./ajax/filter.php?Categories=" + search, true);
      x.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
          var res = JSON.parse(this.response);
          console.log(res);



          var parent = document.getElementById("parent");
          parent.innerHTML = "";

          res.forEach(e => {
            var div = document.createElement("div");
            div.className = "flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]";
            div.innerHTML = `
              <div class="flex justify-center items-center flex-col gap-4">
                <img src="../../images/job-logo-1.png.svg" alt="first-job-logo"> 
                <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">${e.ProjectTitle}</h3>
                <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">${e.DescriptionProject}</p>
              </div>
              <div class="flex justify-center items-center flex-col gap-4 w-full">
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="../../images/List → Item → SVG (4).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 - $25,000</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
                </div>
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="../../images/List → Item → SVG (5).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London, England</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
                </div>
              </div>
              <div class="flex justify-center items-center flex-row w-full gap-4">
                <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="../../images/SVG (3).svg" alt="heart-emoji"></div>
                <button type="button" class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full"><a href="./Projects/projectDetails.php">Apply Now</a></button>
              </div>
            </div>`;

            parent.appendChild(div);
          });
        } else {
          // var parent = document.getElementById("parent");
          // parent.innerHTML = "";
          console.error("no content")
        }
      };
      x.send();
    });
  </script>




</body>

</html>