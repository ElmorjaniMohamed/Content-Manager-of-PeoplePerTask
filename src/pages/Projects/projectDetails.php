<?php
require '../../../php/conn.php';
require '../script.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../dist/output.css">
    <title>PeoplePerTask</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="../../../dist/sandbox.js"></script>
</head>

<body class="bg-slate-50">
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
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
                                member</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                                Us</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="flex justify-center items-center gap-4">
                        <li>
                            <form class="relative hs:flex hidden" style="margin: auto;">
                                <input type="text"
                                    class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                                    dark:shadow-none bg-slate-50 rounded-full  py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                                    placeholder="Search Here...">
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="../../../images/search-icon.svg" alt="search-icon"></button>
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
                      <img class="w-full object-cover" src="../../../images/circle-man.webp" alt="Profile">
                    </button>
                    <div class="flex gap-2 pl-2">
                      <h2 class="font-semibold font-poppins text-lg text-mainBlue dark:text-mainPurple">'; ?>
                            <?php echo $_SESSION["username"] ?>
                            <?php echo '</h2>
                      <img src="../../../images/Waving Hand Emoji.svg" alt="waving hand">
                    </div>
                  </div>
                  <div id="dropdownMenu"
                    class="hidden absolute right-0 mt-3 flex w-60 flex-col gap-3 z-50 rounded-xl bg-slate-900 p-4 text-slate-100 shadow-lg">
                    <div class="flex gap-3 items-center">
                      <div
                        class="flex items-center justify-center rounded-full h-12 w-12 overflow-hidden border-2 border-mainBlue">
                        <img class="w-full object-cover" src="../../../images/circle-man.webp" alt="Profile">
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
                      <a href="../../../src/pages/Freelancers/profile.php" class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
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
                      <a href="../../../src/pages/logout.php">Logout</a>
                    </button>
                  </div>
                </div>
              </div>
            </li>';
                        } else {
                            echo '<li class="hidden ht:flex justify-center items-center gap-3 flex-row">
              <button type="button"
                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                In</button>
              <button type="button"
                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]"><a
                  href="../../../src/pages/signup2.php">Sign Up</a></button>
            </li>';
                        }
                        ?>
                        <li>
                            <div class="flex ht:hidden burgerMenu">
                                <img src="../../../images/burger-menu-light.svg" alt="burger-menu-light"
                                    id="burger-menu-light" class="cursor-pointer">
                                <img src="../../../images/burger-menu-dark.svg" alt="burger-menu-dark"
                                    id="burger-menu-dark" class="cursor-pointer">
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
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
            <ul class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
                id="navBurgerNav">
                <li>
                    <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
                        <li><a href="../../../index.php"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
                                member</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                                Us</a></li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
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
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="./images/search-icon.svg" alt="search-icon"></button>
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
                                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

    <?php
    $ProjectTitle = "";
    $ProjectDescription = "";
    if (isset($_GET["ProjectID"])) {

        $projectID = $_GET["ProjectID"];
        $sql = "SELECT username, ProjectTitle, DescriptionProject FROM projects INNER JOIN users ON projects.userid = users.userid WHERE ProjectID = '$projectID'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $ProjectTitle = $row["ProjectTitle"];
                    $ProjectDescription = $row["DescriptionProject"];
                    $username = $row["username"];

                }
            }
        }
    }
    ?>

    <section class="overflow-hidden bg-slate-50 py-11 font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full mb-8 md:w-1/2 md:mb-0">
                    <div class="sticky top-0 z-50 overflow-hidden ">
                        <div class="relative mb-6 lg:mb-10 lg:h-2/4 ">
                            <img src="../../../images/post-thumb-2.png.svg" alt="Photo project"
                                class="object-cover w-full lg:h-full rounded-lg ">
                        </div>
                        <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
                            <div class="flex gap-3 items-center pt-3">
                                <div class="flex items-center justify-center rounded-full h-12 w-12 overflow-hidden">
                                    <img class="w-full object-cover" src="../../../images/circle-man.webp"
                                        alt="Profile">
                                </div>
                                <div>
                                    <div class="flex gap-1 text-sm font-semibold">
                                        <span>
                                            <?php echo $username ?>
                                        </span>
                                        <span class="text-mainBlue">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                                                </path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="text-xs text-slate-400">support@ppt.ma</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 ">
                    <form class="lg:pl-20" action="../offers/offer.php" method="POST">
                        <div class="mb-8 ">
                            <h2 class="max-w-xl mb-6 text-2xl text-mainBlue font-bold dark:text-gray-400 md:text-4xl">
                                <?php echo !empty($ProjectTitle) ? $ProjectTitle : "No Title"; ?>
                            </h2>
                            <p class="max-w-md text-gray-700 dark:text-gray-400">
                                <?php echo !empty($ProjectDescription) ? $ProjectDescription : "No Description"; ?>
                            </p>

                        </div>

                        <div class="mb-8">
                            <h2
                                class="w-full pb-1 mb-4 text-2xl font-bold border-b border-mainBlue dark:text-gray-400 dark:border-gray-600">
                                Add Offer
                            </h2>
                        </div>
                        <div class="mb-8 ">
                            <input type="hidden"  name="id_project" value="<?= $_GET['ProjectID'] ?>">
                            <label for="Deadline" class="text-gray-800 text-sm font-bold">Deadline<span
                                    class="text-red-600">*</span></label>
                            <input type="date" id="Deadline" name="Deadline"
                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="" />
                            <label for="price" class="text-gray-800 text-sm font-bold">Price<span
                                    class="text-red-600">*</span></label>
                            <input id="Price" name="Price"
                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                placeholder="" />
                            <label for="Description" class="text-gray-800 text-sm font-bold">Description</label>
                            <textarea name="Description" id="Description" cols="30" rows="10"
                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-16 flex items-center pl-3 text-sm border-gray-300 rounded border"></textarea>
                        </div>
                        <div>
                            <button
                                class="flex items-center justify-center w-full h-10 p-4 text-slate-50 bg-mainBlue border border-mainBlue rounded-md dark:text-gray-200 dark:border-blue-600 hover:bg-indigo-600 hover:border-indigo-600 hover:text-gray-100 dark:bg-blue-500 dark:hover:bg-blue-700 dark:hover:border-blue-700 dark:hover:text-gray-300">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    </footer>

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
    < </body>

</html>