<?php

require '../../php/conn.php';
require 'script.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>PeoplePerTask</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="../../dist/sandbox.js"></script>
    <style>
        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>
</head>

<body class="bg-body-bg bg-cover bg-center">
    <header class="dark:bg-mainColorDark bg-slate-50">
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
                            <form class="relative hs:flex hidden">
                                <input type="text"
                                    class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                                  dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                                    placeholder="Search Here...">
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="../../images/search-icon.svg" alt="search-icon"></button>
                            </form>
                        </li>
                        <li class="hidden ht:flex justify-center items-center gap-3 flex-row">
                            <button type="button"
                                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                                In</button>
                            <button type="button"
                                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]"><a
                                    href="signup2.php">Sign Up</a></button>
                        </li>
                        <li>
                            <div class="flex ht:hidden burgerMenu">
                                <img src="../../images/burger-menu-light.svg" alt="burger-menu-light"
                                    id="burger-menu-light" class="cursor-pointer">
                                <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark"
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
                            </div>
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
                <li class="hs:hidden flex">
                    <ul class="flex justify-center items-center gap-4 flex-col">
                        <li>
                            <form class="relative hs:hidden flex">
                                <input type="text"
                                    class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                                    placeholder="Search Here...">
                                <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                        src="../../images/search-icon.svg" alt="search-icon"></button>
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
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div
            class="max-w-2xl  mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
            <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Log in to <span
                    class="text-mainBlue  dark:text-mainPurple">PeoplePerTask</span></h1>
            <form action="./script.php" method="POST" class="my-10" id="loginForm">

                <div class="flex flex-col space-y-5">
                    <label for="email">
                        <input id="email" name="email" type="email"
                            value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"
                            class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                            placeholder="Enter email address">
                        <div class="error-message" id="emailError"></div>
                        <div class="success-message" id="emailSuccess"></div>


                    </label>
                    <label for="password">
                        <input id="password" name="password" type="password" 
                            value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>"
                            class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                            placeholder="Enter your password">
                        <div class="error-message" id="passwordError"></div>
                        <div class="success-message" id="passwordSuccess"></div>


                    </label>
                    <div class="flex flex-row justify-between items-center">
                        <div>
                            <label for="remember" class=" font-medium dark:text-white">
                                <input type="checkbox" id="remember" name="remembre"
                                    class="w-4 h-4 border-none focus:bg-mainBlue dark:focus:bg-mainPurple">
                                Remember me
                            </label>
                        </div>
                        <div>
                            <a href="#" class="font-normal text-sm text-zinc-500 dark:text-slate-50">Forgot
                                Password?</a>
                        </div>
                    </div>
                    <button name="login" id="login"type="submit" onclick="attemptLogin()"
                        class="w-full py-3 font-medium text-white bg-mainBlue dark:bg-mainPurple hover:bg-indigo-600 dark:hover:bg-violet-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center" >
                        <span>Login</span>
                    </button>
                    <div id="successMessage" class="success-message"></div>

                    <div class="flex justify-center items-center">
                        <span class="w-full border border-zinc-400"></span>
                        <span class="px-3 text-sm text-zinc-600 dark:text-slate-50">Or</span>
                        <span class="w-full border border-zinc-400"></span>
                    </div>

                    <button
                        class="w-full flex items-center justify-center py-3 font-medium text-black text-sm  bg-white border border-1 border-black rounded-full ">
                        <img class=" w-6 h-6 " src="../../images/logo-Apple.png" alt="">
                        <a href="#">Continue with Apple</a>
                    </button>

                    <button
                        class="w-full flex items-center justify-center py-3 font-medium text-sm text-white bg-sky-500 border border-none rounded-full ">
                        <span class="absolute bg-white border rounded-full p-2 left-8">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path fill="#EA4335 "
                                    d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z" />
                                <path fill="#34A853"
                                    d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z" />
                                <path fill="#4A90E2"
                                    d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z" />
                                <path fill="#FBBC05"
                                    d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z" />
                            </svg>
                        </span>
                        <a href="#">Continue with Google</a>
                    </button>
                </div>
            </form>
        </div>
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
    </footer>

    <script src="../../src/scripts/jquery.min.js"></script>
    <script src="../../src/scripts/owl.carousel.min.js"></script>
    <script src="../../src/scripts/owl.js"></script>
    <script>
    function attemptLogin() {
        var emailInput = document.getElementById('email');
        var passwordInput = document.getElementById('password');

        // Reset custom validation messages
        emailInput.setCustomValidity('');
        passwordInput.setCustomValidity('');

        // Validate email
        if (!emailInput.value) {
            emailInput.setCustomValidity('Email is required');
            document.getElementById('emailError').textContent = 'Email is required';
            document.getElementById('emailSuccess').textContent = '';
        } else if (!isValidEmail(emailInput.value)) {
            emailInput.setCustomValidity('Invalid email format');
            document.getElementById('emailError').textContent = 'Invalid email format';
            document.getElementById('emailSuccess').textContent = '';
        } else {
            document.getElementById('emailSuccess').textContent = 'Email is valid!';
        }

        // Validate password
        if (!passwordInput.value) {
            passwordInput.setCustomValidity('Password is required');
            document.getElementById('passwordError').textContent = 'Password is required';
            document.getElementById('passwordSuccess').textContent = '';
        } else if (passwordInput.value.length < 8) {
            passwordInput.setCustomValidity('Password must be at least 8 characters');
            document.getElementById('passwordError').textContent = 'Password must be at least 8 characters';
            document.getElementById('passwordSuccess').textContent = '';
        } else {
            document.getElementById('passwordSuccess').textContent = 'Password is valid!';
        }
    }

    // Function to validate email format
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
</script>


    < </body>

</html>