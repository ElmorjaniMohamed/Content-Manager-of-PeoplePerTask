<?php

require ("../../../php/conn.php");
session_start();

if (isset($_SESSION['User']) == 'Client') {
  header('location: ../profileuser.php');
}else {
  header('location: ../Freelancers/profile.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../../dist/output.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
  <script src="../../../dist/sandbox.js"></script>

  <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark bg-slate-50">
  <header>
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
      <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
        <li class="flex gap-1">
          <img src="../../../images/main-logo.svg" alt="main-logo">
          <div class="hf:hidden hl:hidden flex burgerMenu">
            <img src="../../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
              class="cursor-pointer">
            <img src="../../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
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
                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                    src="../../../images/search-icon.svg" alt="search-icon"></button>
              </form>
            </li>
            <li>
              <div class="mx-auto flex justify-end">
                <!-- Drodown -->
                <div class="relative inline-block" id="dropdown">
                  <!-- Dropdown Button -->
                  <div class="flex items-center justify-center">
                    <button onclick="toggleDropdown()"
                      class="flex h-12 w-12 items-center justify-center rounded-full bg-mainBlue border-none text-slate-100 ring-slate-100 transition overflow-hidden">
                      <img class="w-full object-cover" src="../../../images/circle-man.webp" alt="Profile">
                    </button>
                    <div class="flex gap-2 pl-2">
                      <h2 class="font-semibold font-poppins text-lg text-mainBlue dark:text-mainPurple">
                        <?php echo $_SESSION["username"] ?>
                      </h2>
                      <img src="../../../images/Waving Hand Emoji.svg" alt="waving hand">
                    </div>
                  </div>


                  <!-- Dropdown Menu -->
                  <div id="dropdownMenu"
                    class="hidden absolute right-0 mt-3 flex w-60 flex-col gap-3 z-50 rounded-xl bg-slate-900 p-4 text-slate-100 shadow-lg">
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex items-center justify-center rounded-full h-12 w-12 overflow-hidden border-2 border-mainBlue">
                        <img class="w-full object-cover" src="../../../images/circle-man.webp" alt="Profile">
                      </div>
                      <div>
                        <div class="flex gap-1 text-sm font-semibold">
                          <span>
                            <?php echo $_SESSION["username"] ?>
                          </span>
                          <span class="text-mainBlue">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="h-5 w-5">
                              <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                              </path>
                            </svg>
                          </span>
                        </div>
                        <div class="text-xs text-slate-400">support@ppt.ma</div>
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
                      <a href="../../../index.php"
                        class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                          id="house-user" class="h-5 w-5">
                          <path fill="#F8FAFC"
                            d="M21.7,10.3l-9-8c-0.4-0.3-0.9-0.3-1.3,0l-9,8c-0.4,0.4-0.5,1-0.1,1.4s1,0.5,1.4,0.1L4,11.4V21c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1v-9.6l0.3,0.3c0.4,0.4,1,0.3,1.4-0.1C22.1,11.3,22.1,10.6,21.7,10.3z M12,11c1.5,0,2.7,1.2,2.7,2.7c0,1.5-1.2,2.7-2.7,2.7c-1.5,0-2.7-1.2-2.7-2.7S10.5,11,12,11z M7,20c0-0.1,0-0.1,0.1-0.2c2.2-2.7,6.2-3.2,8.9-1c0.4,0.3,0.7,0.6,1,1c0,0,0,0.1,0.1,0.2H7z">
                          </path>
                        </svg>
                        <span>Home</span>
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
                    <button @click="isOpen=false"
                      class="flex justify-center gap-3 rounded-md bg-red-600 py-2 px-3 font-semibold hover:bg-red-500 focus:ring-2 focus:ring-red-400">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                          d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                          clip-rule="evenodd"></path>
                      </svg>
                      <a href="../logout.php">Logout</a>
                    </button>
                  </div>
                </div>
              </div>
            </li>
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
  <main class="profile-page">
    <section class="relative block h-500-px">
      <div class="absolute top-0 w-full h-full bg-center bg-cover bg-body-bg">
        <span id="blackOverlay" class="w-full h-full absolute opacity-50"></span>
      </div>
      <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
        style="transform: translateZ(0px)">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
          version="1.1" viewBox="0 0 2560 100" x="0" y="0">
          <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="relative py-16 bg-blueGray-200">
      <div class="container mx-auto px-4">
        <div class="relative flex flex-col min-w-0 break-words bg-slate-50 w-full mb-6 shadow-xl rounded-lg -mt-64">
          <div class="px-6">
            <div class="flex flex-wrap justify-center">
              <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                <div class="relative">
                  <img alt="..." src="../../../images/circle-man.webp"
                    class="shadow-xl rounded-full h-auto align-middle border-slate-50 border-4 absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                </div>
              </div>
              <div class="w-8 lg:w-4/12 px-8 lg:order-3 lg:text-right lg:self-center">
                <div class="py-6 px-5 mt-32 sm:mt-0">
                  <button type="button"
                    class="text-white bg-mainBlue hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-300 me-2 mb-2 transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                      id="plus-circle">
                      <path fill="#F8FAFC"
                        d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm4-9H13V8a1,1,0,0,0-2,0v3H8a1,1,0,0,0,0,2h3v3a1,1,0,0,0,2,0V13h3a1,1,0,0,0,0-2Z">
                      </path>
                    </svg>
                    <a href="">Add Offers</a>
                  </button>
                  <button type="button"
                    class="text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-yellow-200 me-2 mb-2">
                    <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                      viewBox="0 0 24 24" id="dashboard">
                      <path fill="#F8FAFC"
                        d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z">
                      </path>
                    </svg>
                    <a href="">Dashboard</a>
                  </button>
                </div>
              </div>
              <div class="w-full lg:w-4/12 px-4 lg:order-1">
                <div class="flex justify-center py-4 lg:pt-4 pt-8">
                  <div class="mr-4 p-3 text-center">
                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">22</span><span
                      class="text-lg font-semibold text-yellow-500">Projects</span>
                  </div>
                  <div class="mr-4 p-3 text-center">
                    <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">10</span><span
                      class="text-lg font-semibold text-yellow-500">Offers</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-12">
              <h3 class="text-4xl font-semibold leading-normal text-blueGray-700 mb-2">
                <?php echo $_SESSION["username"] ?>
              </h3>
              <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                Los Angeles, California
              </div>
              <div class="mb-2 text-blueGray-600 mt-10">
                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>Solution Manager - Creative Tim Officer
              </div>
              <div class="mb-2 text-blueGray-600">
                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>University of Computer Science
              </div>
            </div>
            <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
              <div class="flex flex-wrap justify-center">
                <div class="w-full lg:w-9/12 px-4">
                  <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                    An artist of considerable range, Jenna the name taken by
                    Melbourne-raised, Brooklyn-based Nick Murphy writes,
                    performs and records all of his own music, giving it a
                    warm, intimate feel with a solid groove structure. An
                    artist of considerable range.
                  </p>
                  <a href="#pablo" class="font-normal text-pink-500">Show more</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="relative bg-blueGray-200 pt-8 pb-6 mt-8">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-6/12 px-4 mx-auto text-center">
              <div class="text-sm text-blueGray-500 font-semibold py-1">
                Made with <a href="https://www.creative-tim.com/product/notus-js"
                  class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a
                  href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank">
                  Creative Tim</a>.
              </div>
            </div>
          </div>
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
          <img src="../../../images/div.footer-brand.svg" alt="brandlogo">
          <p>
            PeoplePerTask is a Freelance Landing Website lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud
          </p>
        </div>
        <div class="flex justify-center items-center gap-2">
          <img src="../../../images/Item → Link (1).svg" alt="facebook">
          <img src="../../../images/Item → Link (2).svg" alt="twitter">
          <img src="../../../images/Item → Link (3).svg" alt="youtube">
          <img src="../../../images/Item → Link (4).svg" alt="linkedin">
          <img src="../../../images/Item → Link (5).svg" alt="instagram">
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
              <img src="../../../images/List → Item → SVG (1).svg" alt="address">
              <p>
                832 Thompson Drive, United States
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="../../../images/List → Item → SVG (2).svg" alt="number">
              <p>
                +123 345123 556
              </p>
            </li>
            <li class="flex justify-start items-start gap-2">
              <img src="../../../images/List → Item → SVG (3).svg" alt="email">
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
    <script src="../../../src/scripts/jquery.min.js"></script>
    <script src="../../../src/scripts/owl.carousel.min.js"></script>
    <script src="../../../src/scripts/owl.js"></script>
  </footer>

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

  <script src="https://cdn.tiny.cloud/1/rc42racaernzwkvx6bn5it5s2fu73in8n0swr1xqfp2h81c5/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>

</body>

</html>