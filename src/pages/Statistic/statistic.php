<?php
// connexion
include_once("../../../php/conn.php");



$qeury_user = "SELECT * FROM users";
$userS = mysqli_query($conn, $qeury_user);

$qeury_region = "SELECT * FROM regions";
$region = mysqli_query($conn, $qeury_region);

$qeury_cities = "SELECT * FROM cities";
$cities = mysqli_query($conn, $qeury_cities);


function get_stats($column, $table)
{
    global $conn;

    // Check if the connection is valid
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT COUNT(*) AS $column FROM $table";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        echo mysqli_fetch_assoc($result)[$column];
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../dist/output.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ruslan+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="../../../dist/sandbox.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>PeoplePerTask</title>
</head>

<body class="font-poppins dark:bg-gray-900 text-mainBlue dark:text-white">
    <section class="flex flex-row">
    <side
            class="hidden md:block dark:bg-indigo-950 dark:border-none text-base rounded-3xl w-[25%]  py-[1%] px-[1%]  border">
            <div class="mb-[15%]">
                <img src="../../../images/Link_logo.svg.svg" alt="logo">
            </div>
            <ul class=" ml-[2%] mb-[10%] text-lg">
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <i class="ri-bubble-chart-line"></i>
                    <a href="../Statistic/statistic.php"><span class="mx-4">Statistic</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M3 22.1484C5.33579 19.4049 8.50702 17.7188 12 17.7188C15.493 17.7188 18.6642 19.4049 21 22.1484M16.5 8.30566C16.5 11.0579 14.4853 13.2891 12 13.2891C9.51472 13.2891 7.5 11.0579 7.5 8.30566C7.5 5.55341 9.51472 3.32227 12 3.32227C14.4853 3.32227 16.5 5.55341 16.5 8.30566Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="../users.php"><span class="mx-4">Users</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="27" viewBox="0 0 24 27" fill="none">
                        <path
                            d="M3 22.1484C5.33579 19.4049 8.50702 17.7188 12 17.7188C15.493 17.7188 18.6642 19.4049 21 22.1484M16.5 8.30566C16.5 11.0579 14.4853 13.2891 12 13.2891C9.51472 13.2891 7.5 11.0579 7.5 8.30566C7.5 5.55341 9.51472 3.32227 12 3.32227C14.4853 3.32227 16.5 5.55341 16.5 8.30566Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="../Freelancers/Freelancers.php"><span class="mx-4">Freelancers</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="20" viewBox="0 0 27 20" fill="#6366F1"
                        class="dark:fill-white">
                        <g clip-path="url(#clip0_817_33)">
                            <path
                                d="M26.2896 13.2302H23.9324C23.54 13.2302 23.2219 13.4658 23.2219 13.7565V17.9242C23.2219 18.2148 23.54 18.4505 23.9324 18.4505H26.2896C26.6819 18.4505 27 18.2148 27 17.9242V13.7565C27 13.4658 26.682 13.2302 26.2896 13.2302Z" />
                            <path
                                d="M20.4841 11.2291H18.1269C17.7345 11.2291 17.4164 11.4647 17.4164 11.7554V17.9242C17.4164 18.2148 17.7344 18.4504 18.1269 18.4504H20.4841C20.8764 18.4504 21.1945 18.2148 21.1945 17.9242V11.7554C21.1946 11.4647 20.8765 11.2291 20.4841 11.2291Z" />
                            <path
                                d="M8.87318 13.2302H6.51597C6.12361 13.2302 5.80554 13.4658 5.80554 13.7565V17.9242C5.80554 18.2148 6.12361 18.4505 6.51597 18.4505H8.87318C9.26554 18.4505 9.58366 18.2148 9.58366 17.9242V13.7565C9.58366 13.4658 9.26554 13.2302 8.87318 13.2302Z" />
                            <path
                                d="M3.06769 11.2291H0.710486C0.318069 11.2291 0 11.4647 0 11.7554V17.9242C0 18.2148 0.318069 18.4505 0.710486 18.4505H3.06769C3.46005 18.4505 3.77812 18.2149 3.77812 17.9242V11.7554C3.77812 11.4647 3.46005 11.2291 3.06769 11.2291Z" />
                            <path
                                d="M14.6787 8.56848H12.3214C11.9291 8.56848 11.611 8.80409 11.611 9.09477V17.9242C11.611 18.2149 11.929 18.4505 12.3214 18.4505H14.6787C15.071 18.4505 15.3891 18.2149 15.3891 17.9242V9.09477C15.3891 8.80409 15.071 8.56848 14.6787 8.56848Z" />
                            <path
                                d="M25.6562 10.6414C26.1342 10.6414 26.5371 10.3529 26.5371 9.98892V7.87999C26.5371 7.51962 26.1427 7.22746 25.6562 7.22746C25.1697 7.22746 24.7753 7.51962 24.7753 7.87999V8.40719L15.8282 1.742C15.6433 1.60432 15.3856 1.53463 15.1241 1.55225C14.863 1.56978 14.626 1.67253 14.4775 1.83262L7.737 9.09996L1.81709 6.30644C1.40676 6.11281 0.862177 6.20221 0.60084 6.5062C0.339443 6.81015 0.460129 7.2135 0.870517 7.40712L7.50797 10.5393C7.65449 10.6084 7.8184 10.6415 7.98049 10.6415C8.26138 10.6415 8.53693 10.5421 8.7073 10.3585L15.328 3.22024L23.5379 9.33639H22.8091C22.3226 9.33639 21.9282 9.62855 21.9282 9.98892C21.9282 10.3493 22.3226 10.6414 22.8091 10.6414C23.2032 10.6414 25.2551 10.6414 25.6541 10.6414H25.6562Z" />
                        </g>
                        <defs>
                            <clipPath id="clip0_817_33">
                                <rect width="27" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <a href="../Projects/projects.php"><span class="mx-4">Project</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700 hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22">
                        <path
                            d="M20.6667 20.5V12.625M12 20.5V9.25M3.33337 20.5L3.33337 16M13.5239 3.65594L19.1231 5.83638M10.6987 4.07604L4.63362 8.79981M21.8158 5.24426C22.4504 5.90327 22.4504 6.97173 21.8158 7.63074C21.1812 8.28975 20.1523 8.28975 19.5177 7.63074C18.8831 6.97173 18.8831 5.90327 19.5177 5.24426C20.1523 4.58525 21.1812 4.58525 21.8158 5.24426ZM4.48242 8.61926C5.11702 9.27827 5.11702 10.3467 4.48242 11.0057C3.84782 11.6648 2.81893 11.6648 2.18433 11.0057C1.54972 10.3467 1.54972 9.27827 2.18433 8.61926C2.81893 7.96025 3.84782 7.96025 4.48242 8.61926ZM13.1491 1.86926C13.7837 2.52827 13.7837 3.59673 13.1491 4.25574C12.5145 4.91475 11.4856 4.91475 10.851 4.25574C10.2164 3.59673 10.2164 2.52827 10.851 1.86926C11.4856 1.21025 12.5145 1.21025 13.1491 1.86926Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="../Categories/Categories.php"><span class="mx-4">Categories</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path
                            d="M13 16.25C14.7949 16.25 16.25 14.7949 16.25 13C16.25 11.2051 14.7949 9.75002 13 9.75002C11.205 9.75002 9.74996 11.2051 9.74996 13C9.74996 14.7949 11.205 16.25 13 16.25Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M20.2878 15.9546C20.1567 16.2516 20.1176 16.5811 20.1756 16.9006C20.2335 17.2201 20.3858 17.5149 20.6128 17.747L20.6719 17.8061C20.8551 17.989 21.0003 18.2062 21.0995 18.4454C21.1986 18.6845 21.2496 18.9408 21.2496 19.1996C21.2496 19.4585 21.1986 19.7148 21.0995 19.9539C21.0003 20.193 20.8551 20.4103 20.6719 20.5932C20.489 20.7763 20.2718 20.9216 20.0326 21.0207C19.7935 21.1199 19.5372 21.1709 19.2784 21.1709C19.0195 21.1709 18.7632 21.1199 18.5241 21.0207C18.285 20.9216 18.0677 20.7763 17.8848 20.5932L17.8257 20.5341C17.5936 20.3071 17.2988 20.1548 16.9793 20.0968C16.6598 20.0389 16.3303 20.078 16.0333 20.2091C15.742 20.334 15.4936 20.5412 15.3186 20.8055C15.1436 21.0697 15.0497 21.3793 15.0484 21.6962V21.8637C15.0484 22.3861 14.8409 22.8871 14.4715 23.2564C14.1021 23.6258 13.6011 23.8334 13.0787 23.8334C12.5564 23.8334 12.0554 23.6258 11.686 23.2564C11.3166 22.8871 11.1091 22.3861 11.1091 21.8637V21.775C11.1014 21.449 10.9959 21.1329 10.8062 20.8677C10.6165 20.6025 10.3514 20.4005 10.0454 20.2879C9.74837 20.1568 9.41886 20.1177 9.09938 20.1756C8.7799 20.2336 8.4851 20.3859 8.25299 20.6129L8.1939 20.672C8.01097 20.8551 7.79373 21.0004 7.55461 21.0995C7.3155 21.1987 7.05919 21.2497 6.80034 21.2497C6.54149 21.2497 6.28518 21.1987 6.04606 21.0995C5.80694 21.0004 5.58971 20.8551 5.40678 20.672C5.22364 20.4891 5.07836 20.2718 4.97924 20.0327C4.88011 19.7936 4.82909 19.5373 4.82909 19.2784C4.82909 19.0196 4.88011 18.7633 4.97924 18.5242C5.07836 18.285 5.22364 18.0678 5.40678 17.8849L5.46587 17.8258C5.69291 17.5937 5.84522 17.2989 5.90315 16.9794C5.96107 16.6599 5.92197 16.3304 5.79087 16.0334C5.66603 15.7421 5.45873 15.4936 5.19451 15.3187C4.93028 15.1437 4.62066 15.0498 4.30375 15.0485H4.13632C3.61393 15.0485 3.11293 14.841 2.74354 14.4716C2.37415 14.1022 2.16663 13.6012 2.16663 13.0788C2.16663 12.5564 2.37415 12.0554 2.74354 11.686C3.11293 11.3166 3.61393 11.1091 4.13632 11.1091H4.22496C4.55094 11.1015 4.86709 10.996 5.1323 10.8063C5.39751 10.6166 5.59953 10.3515 5.71208 10.0455C5.84318 9.74843 5.88229 9.41892 5.82436 9.09944C5.76643 8.77996 5.61412 8.48516 5.38708 8.25305L5.32799 8.19396C5.14485 8.01103 4.99957 7.79379 4.90045 7.55468C4.80132 7.31556 4.7503 7.05925 4.7503 6.8004C4.7503 6.54155 4.80132 6.28524 4.90045 6.04612C4.99957 5.80701 5.14485 5.58977 5.32799 5.40684C5.51092 5.2237 5.72816 5.07842 5.96727 4.9793C6.20639 4.88017 6.4627 4.82915 6.72155 4.82915C6.9804 4.82915 7.23671 4.88017 7.47583 4.9793C7.71494 5.07842 7.93218 5.2237 8.11511 5.40684L8.1742 5.46593C8.40631 5.69297 8.70111 5.84528 9.02059 5.90321C9.34007 5.96113 9.66958 5.92203 9.96663 5.79093H10.0454C10.3367 5.66609 10.5851 5.45879 10.7601 5.19457C10.9351 4.93034 11.029 4.62072 11.0303 4.30381V4.13638C11.0303 3.61399 11.2378 3.11299 11.6072 2.7436C11.9766 2.37421 12.4776 2.16669 13 2.16669C13.5224 2.16669 14.0234 2.37421 14.3927 2.7436C14.7621 3.11299 14.9697 3.61399 14.9697 4.13638V4.22502C14.9709 4.54193 15.0648 4.85156 15.2398 5.11578C15.4148 5.38001 15.6632 5.5873 15.9545 5.71214C16.2516 5.84324 16.5811 5.88235 16.9005 5.82442C17.22 5.76649 17.5148 5.61419 17.7469 5.38714L17.806 5.32805C17.989 5.14492 18.2062 4.99963 18.4453 4.90051C18.6844 4.80139 18.9407 4.75037 19.1996 4.75037C19.4584 4.75037 19.7147 4.80139 19.9539 4.90051C20.193 4.99963 20.4102 5.14492 20.5931 5.32805C20.7763 5.51098 20.9216 5.72822 21.0207 5.96734C21.1198 6.20645 21.1708 6.46276 21.1708 6.72161C21.1708 6.98046 21.1198 7.23677 21.0207 7.47589C20.9216 7.71501 20.7763 7.93224 20.5931 8.11517L20.5341 8.17426C20.307 8.40637 20.1547 8.70117 20.0968 9.02065C20.0388 9.34013 20.078 9.66964 20.2091 9.96669V10.0455C20.3339 10.3368 20.5412 10.5852 20.8054 10.7602C21.0696 10.9352 21.3793 11.0291 21.6962 11.0303H21.8636C22.386 11.0303 22.887 11.2378 23.2564 11.6072C23.6258 11.9766 23.8333 12.4776 23.8333 13C23.8333 13.5224 23.6258 14.0234 23.2564 14.3928C22.887 14.7622 22.386 14.9697 21.8636 14.9697H21.775C21.458 14.971 21.1484 15.0649 20.8842 15.2399C20.62 15.4149 20.4127 15.6633 20.2878 15.9546Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <rect width="26" height="26" />
                    </svg>
                    <a href="#"><span class="mx-4">Settings</span></a>
                </li>
            </ul>
            <hr class="mb-[10%]">
            </hr>
            <ul class="ml-[2%] text-lg">
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="27" viewBox="0 0 25 27" fill="none">
                        <path
                            d="M9.021 13.1182L11.021 15.333L15.521 10.3496M20.021 13.6719C20.021 19.1076 14.667 23.0611 12.719 24.3196C12.4976 24.4626 12.3869 24.5342 12.2307 24.5713C12.1094 24.6001 11.9326 24.6001 11.8113 24.5713C11.6551 24.5342 11.5444 24.4626 11.323 24.3196C9.37496 23.0611 4.021 19.1076 4.021 13.6719V8.37575C4.021 7.49036 4.021 7.04766 4.15176 6.66712C4.26727 6.33094 4.45498 6.03098 4.69865 5.79317C4.97449 5.52396 5.34879 5.36852 6.0974 5.05764L11.4592 2.83097C11.6671 2.74464 11.771 2.70147 11.878 2.68436C11.9728 2.66918 12.0692 2.66918 12.164 2.68436C12.271 2.70147 12.3749 2.74464 12.5828 2.83097L17.9446 5.05764C18.6932 5.36852 19.0675 5.52396 19.3433 5.79317C19.587 6.03098 19.7747 6.33094 19.8902 6.66712C20.021 7.04766 20.021 7.49036 20.021 8.37575V13.6719Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <rect x="0.0209961" y="0.382812" width="24" height="26.5781" />
                    </svg>
                    <a href="#"><span class="mx-4">Security</span></a>
                </li>
                <li
                    class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors dark:hover:bg-purple-700  hover:scale-110 rounded mb-[10%]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="28" viewBox="0 0 25 28" fill="none">
                        <path
                            d="M9.111 10.6875C9.3461 9.94737 9.81015 9.32327 10.421 8.92574C11.0318 8.5282 11.7499 8.38289 12.4482 8.51553C13.1465 8.64817 13.7798 9.0502 14.2361 9.65043C14.6923 10.2507 14.9421 11.0103 14.941 11.7949C14.941 14.0098 11.941 15.1172 11.941 15.1172M12.021 19.5469H12.031M22.021 14.0098C22.021 20.1259 17.5438 25.084 12.021 25.084C6.49815 25.084 2.021 20.1259 2.021 14.0098C2.021 7.89364 6.49815 2.93555 12.021 2.93555C17.5438 2.93555 22.021 7.89364 22.021 14.0098Z"
                            stroke="#6366F1" class="dark:stroke-white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <rect x="0.0209961" y="0.720703" width="24" height="26.5781" />
                    </svg>
                    <a href="#"><span class="mx-4">Help Center</span></a>
                </li>
                <li>
                    <button type="button" id="checkbox-wrapper">
                        <label class="text-[17px] relative inline-block w-[3.5em] h-[2em]">
                            <input type="checkbox" class="invisible focus:shadow-[0_0_1px_#007bff]">
                            <span
                                class="slider bg-white absolute cursor-pointer border transition duration-300 rounded-[30px] border-solid border-[#adb5bd] inset-0 before:absolute before:content-[''] before:h-[1.4em] before:w-[1.4em] before:bg-[#FE8D4D] before:transition before:duration-300 before:rounded-[20px] before:left-[0.27em] before:bottom-[0.25em]"></span>
                        </label>
                    </button>
                </li>
            </ul>
            <div class="flex flex-row ml-[4%]  my-[40%]">
                <div class="rounded-[50%] bg-slate-400 mr-[7%]">
                    <img class="rounded-[50%]" src="../../../images/young man in formalwear standing with hands on hip.svg"
                        alt="freelencer">
                </div>
                <div class="text-black dark:text-white">
                    <h1 class="text-2xl">Ali Riaz</h1>
                    <p>Web Developer</p>
                </div>
            </div>
            </div>
        </side>
        <main style="width: 100%;" class="bg-white dark:bg-gray-900">
            <nav class="flex flex-row justify-between items-center p-[1%]">
                <div class="text-black dark:text-white">
                    <div class="flex gap-2">
                        <h2 class="font-bold text-2xl"> Welcome Back,Ali</h2>
                        <img src="../../../images/Waving_Hand_Emoji.svg" alt="waving hand">
                    </div>
                    <p class="text-textG text-base">Here's what's happening with your store touday</p>
                </div>
                <div class="hidden md:block">
                    <div id="search"
                        class="flex flex-row justify-between text-xs border-4 w-72 rounded-3xl p-1 dark:bg-indigo-950 dark:border-none">
                        <p class="ml-[6%]">search for anyting</p>
                        <img class="mr-[10%]" src="../../../images/search-2905 1.svg" alt="search">
                    </div>
                </div>

            </nav>
            <div class="hidden md:block">
                <nav
                    class="bg-mainBlue dark:bg-purple-500 text-sm bg-opacity-75 p-4 text-mainBlue dark:text-purple-500 font-bold rounded-md h-[6%] flex flex-row items-center gap-5">
                    <div
                        class="flex flex-row gap-2 justify-center items-center bg-white rounded-3xl text-center ml-[7%] w-[15%] h-10 transition-transform duration-200 ease-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M18.3333 7.1V3.31666C18.3333 2.14166 17.8 1.66666 16.475 1.66666H13.1083C11.7833 1.66666 11.25 2.14166 11.25 3.31666V7.09166C11.25 8.275 11.7833 8.74166 13.1083 8.74166H16.475C17.8 8.75 18.3333 8.275 18.3333 7.1Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M18.3333 16.475V13.1083C18.3333 11.7833 17.8 11.25 16.475 11.25H13.1083C11.7833 11.25 11.25 11.7833 11.25 13.1083V16.475C11.25 17.8 11.7833 18.3333 13.1083 18.3333H16.475C17.8 18.3333 18.3333 17.8 18.3333 16.475Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M8.74984 7.1V3.31666C8.74984 2.14166 8.2165 1.66666 6.8915 1.66666H3.52484C2.19984 1.66666 1.6665 2.14166 1.6665 3.31666V7.09166C1.6665 8.275 2.19984 8.74166 3.52484 8.74166H6.8915C8.2165 8.75 8.74984 8.275 8.74984 7.1Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M8.74984 16.475V13.1083C8.74984 11.7833 8.2165 11.25 6.8915 11.25H3.52484C2.19984 11.25 1.6665 11.7833 1.6665 13.1083V16.475C1.6665 17.8 2.19984 18.3333 3.52484 18.3333H6.8915C8.2165 18.3333 8.74984 17.8 8.74984 16.475Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                        </svg>
                        <a href="#"><span>Dashboard</span></a>
                    </div>
                    <div
                        class="flex flex-row gap-2 justify-center items-center bg-white rounded-3xl text-center text-sm ml-[21%] w-[15%] h-10 transition-transform duration-200 ease-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="30" viewBox="0 0 33 27" fill="none">
                            <path d="M12.9551 17.4445H9.73242V18.7102H12.9551V17.4445Z" fill="#6366F1"
                                class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path d="M23.2676 17.4445H20.0449V18.7102H23.2676V17.4445Z" fill="#6366F1"
                                class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M13.2939 8.04659C14.1412 8.42898 14.6471 9.05087 14.6471 9.71005C14.6471 9.99093 14.9961 10.2194 15.4252 10.2194C15.7056 10.2194 16.011 10.2194 16.1725 10.2194V6.79219H15.8556C15.6776 6.79219 15.5333 6.69773 15.5333 6.58125C15.5333 6.46477 15.6776 6.37032 15.8556 6.37032H16.1725V5.89043C16.1725 5.6012 15.813 5.36583 15.371 5.36583C14.9291 5.36583 14.5695 5.60115 14.5695 5.89043C14.5695 6.00691 14.4252 6.10137 14.2472 6.10137C14.0692 6.10137 13.9249 6.00691 13.9249 5.89043C13.9249 5.36853 14.5736 4.94396 15.3709 4.94396C15.8243 4.94396 16.2294 5.08132 16.4948 5.29567C16.76 5.08132 17.1651 4.94396 17.6185 4.94396C18.4158 4.94396 19.0645 5.36853 19.0645 5.89043C19.0645 6.00691 18.9202 6.10137 18.7422 6.10137C18.5642 6.10137 18.42 6.00691 18.42 5.89043C18.42 5.6012 18.0604 5.36583 17.6185 5.36583C17.1765 5.36583 16.817 5.60115 16.817 5.89043V6.37032H17.1446C17.3226 6.37032 17.4669 6.46477 17.4669 6.58125C17.4669 6.69773 17.3226 6.79219 17.1446 6.79219H16.817V10.2194C16.9791 10.2194 17.2849 10.2194 17.5658 10.2194C17.994 10.2194 18.3424 9.99135 18.3424 9.71106C18.3424 9.04509 18.8348 8.42886 19.6595 8.06267C21.2125 7.37311 22.1397 6.22924 22.1397 5.00272C22.1397 2.9511 19.5685 1.27926 16.4141 1.30815C13.3195 1.33638 10.8235 3.00814 10.8498 5.03483C10.8655 6.23696 11.7792 7.36286 13.2939 8.04659Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M27.457 4.36641C28.3455 4.36641 29.0684 3.89328 29.0684 3.31172C29.0684 2.73017 28.3455 2.25703 27.457 2.25703C26.5685 2.25703 25.8457 2.73017 25.8457 3.31172C25.8457 3.89328 26.5685 4.36641 27.457 4.36641Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M17.3856 11.5383C17.7634 11.5383 18.0708 11.3371 18.0708 11.0898C18.0708 10.8425 17.7634 10.6413 17.3856 10.6413H15.6032C15.2253 10.6413 14.918 10.8425 14.918 11.0898C14.918 11.3371 15.2253 11.5383 15.6032 11.5383H17.3856Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M6.1875 4.36641C6.72059 4.36641 7.1543 4.08253 7.1543 3.7336C7.1543 3.38466 6.72059 3.10078 6.1875 3.10078C5.65441 3.10078 5.2207 3.38466 5.2207 3.7336C5.2207 4.08253 5.65441 4.36641 6.1875 4.36641Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M22.6139 12.5281C22.6139 12.4116 22.4697 12.3172 22.2917 12.3172C22.1137 12.3172 21.9694 12.4116 21.9694 12.5281C21.9694 14.4191 19.7036 15.9697 16.8558 16.0793V14.7538C18.5888 14.6472 19.9496 13.6898 19.9496 12.5281C19.9496 12.4116 19.8053 12.3172 19.6273 12.3172C19.4493 12.3172 19.3051 12.4116 19.3051 12.5281C19.3051 13.5284 18.0618 14.3422 16.5336 14.3422C15.0077 14.3422 13.7663 13.5284 13.7663 12.5281C13.7663 12.4116 13.622 12.3172 13.4441 12.3172C13.2661 12.3172 13.1218 12.4116 13.1218 12.5281C13.1218 13.6898 14.4807 14.647 16.2113 14.7538V16.0793C13.3634 15.9697 11.0977 14.4192 11.0977 12.5281C11.0977 12.4116 10.9533 12.3172 10.7754 12.3172C10.5974 12.3172 10.4531 12.4116 10.4531 12.5281C10.4531 14.6518 13.0078 16.3924 16.2113 16.5024V18.2883H15.2109C15.0329 18.2883 14.8886 18.3827 14.8886 18.4992C14.8886 18.6157 15.0329 18.7102 15.2109 18.7102H17.789C17.967 18.7102 18.1113 18.6157 18.1113 18.4992C18.1113 18.3827 17.967 18.2883 17.789 18.2883H16.8558V16.5024C20.0594 16.3924 22.6139 14.6518 22.6139 12.5281Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M8.76562 2.46797C9.12159 2.46797 9.41016 2.27909 9.41016 2.0461C9.41016 1.8131 9.12159 1.62422 8.76562 1.62422C8.40966 1.62422 8.12109 1.8131 8.12109 2.0461C8.12109 2.27909 8.40966 2.46797 8.76562 2.46797Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M23.5898 2.0461C23.9458 2.0461 24.2344 1.85722 24.2344 1.62422C24.2344 1.39123 23.9458 1.20235 23.5898 1.20235C23.2339 1.20235 22.9453 1.39123 22.9453 1.62422C22.9453 1.85722 23.2339 2.0461 23.5898 2.0461Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M24.8789 6.26485C25.2349 6.26485 25.5234 6.07597 25.5234 5.84297C25.5234 5.60998 25.2349 5.4211 24.8789 5.4211C24.5229 5.4211 24.2344 5.60998 24.2344 5.84297C24.2344 6.07597 24.5229 6.26485 24.8789 6.26485Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M8.76562 7.53047C9.12159 7.53047 9.41016 7.34159 9.41016 7.1086C9.41016 6.8756 9.12159 6.68672 8.76562 6.68672C8.40966 6.68672 8.12109 6.8756 8.12109 7.1086C8.12109 7.34159 8.40966 7.53047 8.76562 7.53047Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M26.168 8.37422V8.62207C26.5428 8.70923 26.8125 8.94308 26.8125 9.21797C26.8125 9.49287 26.5428 9.72671 26.168 9.81387V16.7107C27.4788 16.0011 29.3697 16.0016 30.6797 16.7107V8.37422C30.6797 7.56005 29.6677 6.89766 28.4238 6.89766C27.1799 6.89766 26.168 7.56005 26.168 8.37422Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M6.83203 16.7107V9.81387C6.45717 9.72671 6.1875 9.49287 6.1875 9.21797C6.1875 8.94308 6.45717 8.70923 6.83203 8.62207V8.37422C6.83203 7.56005 5.82005 6.89766 4.57617 6.89766C3.33229 6.89766 2.32031 7.56005 2.32031 8.37422V16.7107C3.63097 16.0012 5.52202 16.0016 6.83203 16.7107Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M9.41016 11.1164H12.6328C12.8108 11.1164 12.9551 11.022 12.9551 10.9055C12.9551 10.7889 12.8108 10.6945 12.6328 10.6945H9.41016C9.2322 10.6945 9.08789 10.7889 9.08789 10.9055C9.08789 11.022 9.2322 11.1164 9.41016 11.1164Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M23.9121 10.9055C23.9121 10.7889 23.7679 10.6945 23.5898 10.6945H20.3672C20.1892 10.6945 20.0449 10.7889 20.0449 10.9055C20.0449 11.022 20.1892 11.1164 20.3672 11.1164H23.5898C23.7679 11.1164 23.9121 11.022 23.9121 10.9055Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M28.4238 16.6008C26.8245 16.6008 25.5234 17.4524 25.5234 18.4992C25.5234 18.6157 25.6677 18.7102 25.8457 18.7102C26.0237 18.7102 26.168 18.6157 26.168 18.4992C26.168 17.685 27.1799 17.0227 28.4238 17.0227C29.6677 17.0227 30.6797 17.685 30.6797 18.4992C30.6797 19.3134 29.6677 19.9758 28.4238 19.9758C28.3422 19.9758 4.76238 19.976 4.57888 19.976C3.32823 19.976 2.32031 19.3112 2.32031 18.4992C2.32031 17.685 3.33229 17.0227 4.57617 17.0227C5.82005 17.0227 6.83203 17.685 6.83203 18.4992C6.83203 18.6157 6.97634 18.7102 7.1543 18.7102C7.33225 18.7102 7.47656 18.6157 7.47656 18.4992C7.47656 17.4524 6.17545 16.6008 4.57617 16.6008C2.9769 16.6008 1.67578 17.4524 1.67578 18.4992C1.67578 19.5417 2.9682 20.3977 4.58152 20.3977H28.4238C30.0231 20.3977 31.3242 19.5461 31.3242 18.4992C31.3242 17.4524 30.0231 16.6008 28.4238 16.6008Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M12.3105 9.21797C12.3105 9.10149 12.1662 9.00703 11.9883 9.00703H7.1543C6.97634 9.00703 6.83203 9.10149 6.83203 9.21797C6.83203 9.33445 6.97634 9.42891 7.1543 9.42891H11.9883C12.1662 9.42891 12.3105 9.33445 12.3105 9.21797Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M20.6895 9.21797C20.6895 9.33445 20.8337 9.42891 21.0117 9.42891H25.8457C26.0237 9.42891 26.168 9.33445 26.168 9.21797C26.168 9.10149 26.0237 9.00703 25.8457 9.00703H21.0117C20.8337 9.00703 20.6895 9.10149 20.6895 9.21797Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                        </svg>
                        <a href="#"><span>Active Projects</span></a>
                    </div>
                    <div
                        class="flex flex-row gap-2 justify-center items-center bg-white rounded-3xl text-center text-sm ml-[21%] w-[15%] h-10 transition-transform duration-200 ease-out hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 23 20" fill="none">
                            <path
                                d="M8.53943 2.32485C9.51236 1.89249 13.4876 1.89249 14.4606 2.32485V4H16V1.56747C16 0.527335 14.486 0 11.5 0C8.51404 0 7 0.527335 7 1.56747V4H8.53943V2.32485Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M22.012 4L11.4991 4.00158L0.988033 4C0.725751 4.00023 0.474318 4.08927 0.289031 4.24754C0.103744 4.40581 -0.000221312 4.62035 3.53736e-07 4.84397V12.3127L0.904287 12.9314V18H10.9539C10.9636 17.9283 10.9817 17.8576 11.0079 17.789C11.1215 17.4834 11.3724 17.2286 11.7057 17.0803C12.039 16.9319 12.4277 16.9021 12.7867 16.9974C12.6508 16.8038 12.5094 16.6008 12.3643 16.3914H2.79476V13.3185C3.67301 13.4438 4.7243 13.5406 5.86305 13.6152C7.56371 13.7231 9.26562 13.7818 10.9688 13.7913C11.0028 13.6369 11.0729 13.49 11.1749 13.3591C11.2768 13.2283 11.4086 13.1163 11.5623 13.0298C11.7087 12.9396 11.875 12.8756 12.0513 12.8418C12.2275 12.808 12.4099 12.805 12.5875 12.833C12.7651 12.8611 12.9342 12.9195 13.0845 13.0049C13.2348 13.0902 13.3633 13.2007 13.4621 13.3296C13.5793 13.4756 13.6928 13.6199 13.8045 13.7643C14.9153 13.7357 16.0261 13.686 17.137 13.6152C18.2757 13.5406 19.327 13.4438 20.2052 13.3185V16.3914H20.0155C20.2536 16.8054 20.5513 17.3321 20.9216 18H22.0957V12.9315L23 12.3127V4.84397C23.0002 4.62035 22.8963 4.40582 22.711 4.24755C22.5257 4.08928 22.2743 4.00023 22.012 4Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                            <path
                                d="M18.8929 13.7555C18.8048 13.6684 18.692 13.6018 18.565 13.562C18.4381 13.5222 18.3013 13.5106 18.1677 13.5283C18.034 13.5459 17.9078 13.5923 17.8012 13.6629C17.6945 13.7335 17.6108 13.8261 17.5581 13.9318C17.4705 13.8748 17.3698 13.8339 17.2625 13.8117C17.1551 13.7895 17.0436 13.7865 16.9348 13.803C16.8261 13.8194 16.7226 13.8549 16.6309 13.9072C16.5392 13.9595 16.4614 14.0274 16.4024 14.1067L16.33 14.1062C15.9035 13.5245 14.9698 13.9554 15.0902 14.4926C14.5905 13.751 14.0517 13.0244 13.4672 12.2987C12.8764 11.5643 11.5636 12.3258 12.1533 13.0594C13.0599 14.4748 14.6644 16.6801 14.6644 16.6801L13.2112 16.0851C13.1022 16.0405 12.9832 16.0163 12.8623 16.0141C12.7413 16.0119 12.6212 16.0318 12.5101 16.0725C12.399 16.1131 12.2995 16.1735 12.2183 16.2497C12.1371 16.3258 12.0762 16.4159 12.0396 16.5137C11.9854 16.6586 11.9869 16.8143 12.0438 16.9584C12.1008 17.1025 12.2102 17.2275 12.3564 17.3153C13.291 17.8771 15.2886 19.0823 16.2754 19.7122C16.5357 19.8784 16.8472 19.9772 17.1721 19.9965C17.4971 20.0158 17.8217 19.9549 18.1068 19.8212L20.1278 18.8736C20.5032 18.6976 20.7856 18.4071 20.9178 18.0608C21.05 17.7146 21.022 17.3386 20.8395 17.0093C20.158 15.7791 19.1631 14.0227 18.8929 13.7555Z"
                                fill="#6366F1" class="dark:fill-purple-500 bg-opacity-75 p-4" />
                        </svg>
                        <a href="#"><span>Job Apply</span></a>
                        <div class="md:hidden flex flex-row items-center border w-48 rounded-xl p-1">
                            <p class="mr-[60%] font-light">search</p>
                            <img src="../../../images/search-2905 1.svg" alt="search">
                        </div>
                    </div>
                </nav>
            </div>

            <div class="flex flex-wrap ">
                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5 mb-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-slate-800 rounded mb-3 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Projets</h5>
                                    <span class="font-bold text-xl text-slate-200">
                                        <?php $result = get_stats('ProjectTitle', 'projects'); ?>
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 2,99% </span>
                                <span class="whitespace-nowrap"> Since last month </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-slate-800 rounded mb-4 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Users</h5>
                                    <span class="font-bold text-xl text-slate-200">
                                        <?php $result = get_stats('username', 'users'); ?>
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 4,01%</span>
                                <span class="whitespace-nowrap"> Since last week </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Freelancers</h5>
                                    <span class="font-bold text-xl text-slate-200">
                                        <?php $result = get_stats('FreelancerName', 'freelancers'); ?>
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-red-500 mr-2"><i class="fas fa-arrow-down"></i> 1,25% </span>
                                <span class="whitespace-nowrap"> Since yesterday </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Testimentials</h5>
                                    <span class="font-bold text-xl text-slate-200">10 </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div
                                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-emerald-500">
                                        <i class="fas fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> 12% </span>
                                <span class="whitespace-nowrap"> Since last mounth </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

</body>

</html>