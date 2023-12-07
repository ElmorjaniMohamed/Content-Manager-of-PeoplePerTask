<?php

require_once 'php/conn.php';

require 'src/pages/script.php';



// if (!isset($_SESSION['user_id'])) {
//   header('location: src/pages/signup2.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/output.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
  <script src="dist/sandbox.js"></script>
  <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark bg-slate-50">
  <header>
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
      <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
        <li class="flex gap-1">
          <img src="./images/main-logo.svg" alt="main-logo">
          <div class="hf:hidden hl:hidden flex burgerMenu">
            <img src="./images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
              class="cursor-pointer">
            <img src="./images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
              class="cursor-pointer">
          </div>
        </li>
        <li>
          <ul class="justify-center items-center gap-4 hf:flex hidden">
            <li><a href="#"
                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
            </li>
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
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
              <form class="relative hs:flex hidden" style="margin: auto;">
                <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                      dark:shadow-none bg-slate-50 rounded-full  py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                  placeholder="Search Here...">
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="./images/search-icon.svg"
                    alt="search-icon"></button>
              </form>
            </li>
            <?php
            if (isset($_SESSION['User'])) {

            echo '<li>
              <div class="mx-auto flex justify-end">

                <div class="relative inline-block" id="dropdown">

                  <div class="flex items-center justify-center">
                    <button onclick="toggleDropdown()"
                      class="flex h-12 w-12 items-center justify-center rounded-full bg-mainBlue border-none text-slate-100 ring-slate-100 transition overflow-hidden">
                      <img class="w-full object-cover" src="./images/circle-man.webp" alt="Profile">
                    </button>
                    <div class="flex gap-2 pl-2">
                      <h2 class="font-semibold font-poppins text-lg text-mainBlue dark:text-mainPurple">'; ?> <?php  echo $_SESSION["username"]?> <?php echo '</h2>
                      <img src="./images/Waving Hand Emoji.svg" alt="waving hand">
                    </div>
                  </div>
                  <div id="dropdownMenu"
                    class="hidden absolute right-0 mt-3 flex w-60 flex-col gap-3 z-50 rounded-xl bg-slate-900 p-4 text-slate-100 shadow-lg">
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex items-center justify-center rounded-full h-12 w-12 overflow-hidden border-2 border-mainBlue">
                        <img class="w-full object-cover" src="./images/circle-man.webp" alt="Profile">
                      </div>
                      <div>
                        <div class="flex gap-1 text-sm font-semibold">
                          <span>Mickey Mouse</span>
                          <span class="text-mainBlue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="h-5 w-5">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                              </path>
                            </svg>
                          </span>
                        </div>
                        <div class="text-xs text-slate-400">mickey@mouse.com</div>
                      </div>
                    </div>
                    <div class="border-t border-slate-500/30"></div>
                    <div class="flex justify-around">
                      <div class="flex flex-col items-center justify-center">
                        <span class="text-3xl font-semibold">268</span>
                        <span class="text-sm text-mainBlue">Projects</span>
                      </div>
                      <div class="flex flex-col items-center justify-center">
                        <span class="text-3xl font-semibold">897</span>
                        <span class="text-sm text-mainBlue">Offers</span>
                      </div>
                    </div>
                    <div class="border-t border-slate-500/30"></div>
                    <div class="flex flex-col">
                      <a href="./src/pages/Freelancers/profile.php" class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                          <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                      <a href="#" class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                          <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <span>Help Center</span>
                      </a>
                    </div>
                    <button
                      class="flex justify-center gap-3 rounded-md bg-red-600 py-2 px-3 font-semibold hover:bg-red-500 focus:ring-2 focus:ring-red-400">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                          d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <a href="./src/pages/logout.php">Logout</a>
                    </button>
                  </div>
                </div>
              </div>
            </li>';
            }else {
             echo '<li class="hidden ht:flex justify-center items-center gap-3 flex-row">
              <button type="button"
                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]"><a
                  href="./src/pages/signup2.php">Sign Up</a></button>
            </li>';
            }
            ?>
            <li>
              <div class="flex ht:hidden burgerMenu">
                <img src="../../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                  class="cursor-pointer">
                <img src="../../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
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
            <li><a href="#" class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
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
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img src="./images/search-icon.svg"
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
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <main class="px-16 herothird:px-8">
    <section class="flex justify-center items-center hero:flex-row flex-col py-0">
      <div class="hero:w-[60%] w-[100%] flex justify-center items-start flex-col gap-6">
        <div>
          <h1
            class="herothird:text-[40px] herosecond:text-[50px] text-[60px] font-poppins font-semibold text-defaultText dark:text-slate-50">
            Unlock Your <span class="dark:text-mainPurple text-mainBlue">Freelance</span> Potential <span
              class="dark:text-mainPurple text-mainBlue">Today!</span>
          </h1>
          <p class="dark:text-textGrey text-defaultText">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae corporis<br> eveniet a omnis odit aut
            culpa accusantium quibusdam.
          </p>
        </div>
        <div class="flex justify-center items-center gap-6">
          <button type="button"
            class="text-slate-50 rounded-full bg-mainBlue py-[0.9rem] px-[2rem] flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]">Discover
            Now</button>
          <div class="flex justify-center items-center gap-4">
            <button type="button" class="p-[0.9rem] aspect-square rounded-full dark:bg-slate-50 bg-white"><img
                src="./images/SVG.svg" alt="playbutton-svg"></button>
            <p class="text-defaultText dark:text-textGrey">watch video</p>
          </div>
        </div>
      </div>
      <div>
        <img src="./images/hero-image.svg" alt="hero-image">
      </div>
    </section>
    <section class="py-12 justify-between items-start flex gap-4 hs:flex-nowrap flex-wrap">
      <img src="./images/company1.svg" alt="company1">
      <img src="./images/company2.svg" alt="company2">
      <img src="./images/company3.svg" alt="company3">
      <img src="./images/company4.svg" alt="company4">
      <img src="./images/company5.svg" alt="company5">
    </section>
    <section class="flex justify-between items-center hero:flex-row hero:gap-0 gap-6 flex-col pt-12 w-[100%]">
      <div
        class="w-[50%] hero:max-w-[40%] hf:max-w-[60%] max-w-full heromax:w-[100%] flex justify-between items-start flex-col gap-6">
        <div>
          <p class="font-normal text-mainBlue dark:text-mainPurple text-[19px] font-poppins">
            How it works
          </p>
          <h2 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-[35px]">
            Easily initiate your quest for a fulfilling job with us.
          </h2>
        </div>
        <div class="w-[100%]">
          <div class="flex flex-col justify-center gap-4">
            <div
              class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#FFFFFF26] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="bg-howitworks1 dark:bg-howitworksdark1 rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-mainPurple">1</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]">
                  Complete Your Profile
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg"
                    alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg"
                    alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div
              class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#ffffff96] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="dark:bg-[#141337] bg-[#ecf3fa] rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-[#2B3DC7]">2</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]">
                  Search for Vacancies
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg"
                    alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg"
                    alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div
              class="bg-slate-50 dark:bg-mainColorDark shadow-shadowBox dark:drop-shadow-[0px 7px 22px 0pxr gba(255, 255, 234, 0.10)] rounded-[20px] border-solid dark:border-[#343A47] flex justify-between items-center border-[#FFFFFF26] border-[2px] p-4">
              <div class="flex justify-center items-center gap-4">
                <div class="bg-howitworks3 dark:bg-[#152A2D] rounded-2xl p-[0.8rem] px-8">
                  <p class="font-poppins font-semibold text-[35px] text-[#30C736]">3</p>
                </div>
                <h6 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[27px]">
                  Apply for Jobs
                </h6>
              </div>
              <div>
                <button type="button">
                  <img class="dark:block hidden" src="./images/accordion-toggle-dark.svg"
                    alt="accordion toggle button darkmode">
                  <img class="dark:hidden block" src="./images/accordion-toggle-light.svg"
                    alt="accordion toggle button lightmode">
                </button>
              </div>
            </div>
            <div>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <img src="./images/howitworks.svg" alt="worker holding a pen">
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-12 relative">
      <div class="flex flex-row justify-between items-center w-full">
        <h2 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-[28px]">Featured Profile This
          Week</h2>
        <button type="button" class="text-mainBlue font-poppins text-base dark:text-mainPurple">View More</button>
      </div>
      <button type="button"
        class="absolute left-[-1.1rem] top-[14rem] customNextBtn z-10 rounded-full w-10 flex justify-center items-center aspect-square dark:bg-mainPurple bg-mainBlue drop-shadow-[0px_19px_29px_0px_#3E357824] shadow-[0px_19px_29px_0px_#3E357824]"><img
          src="./images/left-arrow.svg" alt="carousel-arrow-left"></button>
      <button type="button"
        class="absolute right-[-1rem] top-[14rem] z-10 customPrevBtn rounded-full w-10 aspect-square dark:bg-mainPurple bg-mainBlue flex justify-center items-center drop-shadow-[0px_19px_29px_0px_#3E357824] shadow-[0px_19px_29px_0px_#3E357824]"><img
          src="./images/right-arrow.svg" alt="carousel-arrow-right"></button>
      <div class="owl-carousel">
        <?php
        $sql = 'SELECT * FROM freelancers limit 4';

        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query) > 0):
          while ($row = mysqli_fetch_assoc($query)):
            ?>
            <div
              class="flex justify-center items-center flex-col gap-6 w-[330px] rounded-[18px] bg-white dark:bg-cardGrey shadow-[0px_2px_28px_0px_#3E35780A] drop-shadow-[0px_2px_28px_0px_#3E35780A] ">
              <div class="flex justify-start items-center gap-4 w-full">
                <div class="flex justify-center items-center relative">
                  <img src="./images/avatar-3.jpg.svg" alt="avatar-img">
                  <img src="./images/div.profile-online-status.svg" alt="online-status"
                    class="absolute bottom-[-0.4rem] right-0">
                </div>
                <div class="flex justify-center items-start gap-1 flex-col">
                  <div>
                    <p class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-xl">
                      <?php echo $row["FreelancerName"] ?>
                    </p>
                  </div>
                  <div>
                    <p class="text-defaultText dark:text-textGrey font-poppins font-normal text-[15px]">
                      <?php echo $row["Skills"] ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex justify-between w-[100%] items-center">
                <div class="flex justify-center items-center gap-2">
                  <img src="./images/star.svg" alt="star">
                  <img src="./images/star.svg" alt="star">
                  <img src="./images/star.svg" alt="star">
                  <img src="./images/star.svg" alt="star">
                  <img src="./images/stargrey.svg" alt="star-grey">
                  <p class="text-defaultText dark:text-slate-50 font-poppins font-bold text-base">4.6</p>
                </div>
                <button type="submit" class="text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-6 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-semibold">$86/hr</button>
              </div>
            </div>
          <?php endwhile ?>
        <?php endif ?>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div class="flex justify-center items-center gap-3 flex-col">
        <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Featured Projects</h2>
        <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm text-center max-w-[600px]">Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias
          sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
      </div>
      <?php

      $sql = 'SELECT * FROM projects';

      $query = mysqli_query($conn, $sql);

      if (mysqli_num_rows($query) > 0):
        while ($row = mysqli_fetch_assoc($query)):
          $ProjectTitle = $row['ProjectTitle'];
          $DescriptionProject = $row['DescriptionProject'];

          ?>
          <div class="flex justify-center items-center gap-6 flex-wrap">
            <div
              class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
              <div class="flex justify-center items-center flex-col gap-4">
                <img src="./images/job-logo-1.png.svg" alt="first-job-logo">
                <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">
                  <?= $ProjectTitle ?>
                </h3>
                <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">
                  <?= $DescriptionProject ?>
                </p>
              </div>
              <div class="flex justify-center items-center flex-col gap-4 w-full">
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="./images/List → Item → SVG (4).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">$14,000 -
                    $25,000</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey">/monthly</p>
                </div>
                <div class="flex justify-between items-center flex-row w-full">
                  <img src="./images/List → Item → SVG (5).svg" alt="money-bag">
                  <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">London,
                    England</p>
                  <p class="font-poppins text-[15px] font-medium text-center text-textGrey underline">View Maps</p>
                </div>
              </div>
              <div class="flex justify-center items-center flex-row w-full gap-4">
                <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img
                    src="./images/SVG (3).svg" alt="heart-emoji"></div>
                <button type="button"
                  class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Apply
                  Now</button>
              </div>
            </div>

          <?php endwhile; endif; ?>
    </section>
    <section class="flex justify-center items-center pt-8">
      <button type="button"
        class="text-slate-50 rounded-full bg-mainBlue py-3 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[12rem]"><a
          href="./src/pages/pageproject.php">View
          More</a></button>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div
        class="flex justify-around fff:flex-nowrap flex-wrap items-center rounded-[20px] dark:bg-cardGrey bg-mainBlue w-full fff:py-12 py-8 after:top-0 after:left-0 after:bg-no-repeat after:bg-cover after:content-none after:absolute after:z-10">
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">36.8k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Talented Freelancer</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">459k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">VIsitors</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">56.5k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Contract Made</p>
        </div>
        <div class="flex justify-center items-center gap-2 flex-col w-[150px]">
          <h5 class="font-poppins text-[50px] font-semibold text-center text-slate-50">852k</h5>
          <p class="font-poppins text-slate-50 font-normal text-base text-center">Companies</p>
        </div>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-8">
      <div class="flex justify-center items-center gap-3 flex-col">
        <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Pricing Plan</h2>
        <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm text-center max-w-[600px]">Lorem
          ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias
          sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
      </div>
      <div class="pt-8 flex justify-center items-center gap-6 flex-row hs:flex-nowrap flex-wrap">
        <div
          class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">FREE</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$0</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button"
              class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn
              More</button>
          </div>
        </div>
        <div
          class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">PREMIUM</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$175</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button"
              class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn
              More</button>
          </div>
        </div>
        <div
          class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
          <h1 class="font-poppins text-defaultText dark:text-slate-50 font-bold text-[26px]">PLATINUM</h1>
          <div class="flex justify-center items-center flex-col gap-4">
            <h3 class=" font-poppins font-semibold text-[#FE9E0F] text-[50px]">$500</h3>
            <p class="text-[#FE9E0F] font-poppins font-normal text-base">per month</p>
          </div>
          <div class="flex justify-center items-center flex-col gap-4 w-full">
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
            <div class="flex justify-center items-center gap-2">
              <img src="./images/Item → SVG.svg" alt="checkmark">
              <p class="font-poppins text-[15px] font-medium text-center text-defaultText dark:text-slate-50">Lorem
                ipsum dolor sit amet </p>
            </div>
          </div>
          <div class="flex justify-center items-center flex-row w-full gap-4">
            <button type="button"
              class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Learn
              More</button>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="flex justify-center items-center flex-col pt-12 w-full gap-4">
      <div class="flex justify-between items-center w-full">
        <div class="flex justify-center items-start gap-3 flex-col">
          <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Latest News</h2>
          <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm max-w-[600px]">Lorem ipsum
            dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias sit
            excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
        </div>
        <img src="../images/svgnews.svg" alt="svgnews">
      </div>
      <div class="flex items-center w-full justify-between gap-4 fs:flex-nowrap flex-wrap">
        <div
          class="rounded-[20px] bg-[url('../images/post-thumb-1.png.svg')] after:bg-[url('./images/div.overlay.svg')] after:bg-cover after:top-0 after:left-0 after:bg-no-repeat after:content-[''] bg-cover bg-no-repeat relative h-[400px] fs:w-[38%] w-[100%] p-4 bg-opacity-[20%] flex justify-end items-start flex-col gap-2">
          <button type="submit" class="absolute z-10 top-[0.5rem] right-[0.5rem] text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
              font-poppins text-base font-medium w-[full] uppercase">Peoples</button>
          <p class="text-slate-50 font-poppins text-base font-normal">
            <span>James</span>
            <span>24min read</span>
          </p>
          <h6 class="font-poppins text-slate-50 font-bold text-[28px]">
            A Media Critic Focuses on the
            Crisis in Local News
          </h6>
        </div>
        <div
          class="rounded-[20px] bg-[url('../images/post-thumb-2.png.svg')] bg-cover bg-no-repeat relative h-[400px] fs:w-[62%] w-[100%] p-4 bg-opacity-[20%] flex justify-end items-start flex-col gap-2">
          <button type="submit" class="absolute z-10 top-[0.5rem] right-[0.5rem] text-slate-50 rounded-full bg-[#FE8D4D] py-2 h-[45px] px-10 flex justify-center items-center dark:bg-[#FE8D4D]
            font-poppins text-base font-medium w-[full] uppercase">Technology</button>
          <p class="text-slate-50 font-poppins text-base font-normal">
            <span>James</span>
            <span>24min read</span>
          </p>
          <h6 class="font-poppins text-slate-50 font-bold text-[28px]">
            A Media Critic Focuses on the
            Crisis in Local News
          </h6>
        </div>
      </div>
    </section>
  </main>
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
          <img src="./images/div.footer-brand.svg" alt="brandlogo">
          <p>
            PeoplePerTask is a Freelance Landing Website lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud
          </p>
        </div>
        <div class="flex justify-center items-center gap-2">
          <img src="./images/Item → Link (1).svg" alt="facebook">
          <img src="./images/Item → Link (2).svg" alt="twitter">
          <img src="./images/Item → Link (3).svg" alt="youtube">
          <img src="./images/Item → Link (4).svg" alt="linkedin">
          <img src="./images/Item → Link (5).svg" alt="instagram">
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
              <img src="./images/List → Item → SVG (1).svg" alt="address">
              <p>
                832 Thompson Drive, United States
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="./images/List → Item → SVG (2).svg" alt="number">
              <p>
                +123 345123 556
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="./images/List → Item → SVG (3).svg" alt="email">
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
    <script src="./src/scripts/jquery.min.js"></script>
    <script src="./src/scripts/owl.carousel.min.js"></script>
    <script src="./src/scripts/owl.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <script>
      function toggleDropdown() {
        const dropdownMenu = document.getElementById('dropdownMenu');
        dropdownMenu.classList.toggle('hidden');
      }

      // Close the dropdown when clicking outside of the button or the menu
      window.onclick = function (event) {
        const dropdown = document.getElementById('dropdown');
        if (event.target !== dropdown && !dropdown.contains(event.target)) {
          const dropdownMenu = document.getElementById('dropdownMenu');
          dropdownMenu.classList.add('hidden');
        }
      };
    </script>
  </footer>
</body>

</html>