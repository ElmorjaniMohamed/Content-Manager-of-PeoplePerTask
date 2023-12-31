<?php
include("../../../php/conn.php");

$ProjectID = $_GET['id'];

$qeury = "SELECT * FROM projects WHERE  ProjectID = $ProjectID";
$result = mysqli_query($conn, $qeury);

$row2 = mysqli_fetch_assoc($result);

$qeury_user = "SELECT * FROM users";
$userS = mysqli_query($conn, $qeury_user);

$UserID = $row2['userid'];

$query = "SELECT username FROM users where userid = $UserID";
$result = mysqli_query($conn, $query);
$old_username = mysqli_fetch_assoc($result)["username"];


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
    <script src="../../../dist/sandbox.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <title>PeoplePerTask</title>
</head>

<body class="font-poppins dark:bg-gray-900 text-mainBlue dark:text-white">

    <form action="../Projects/update.php" method="POST">
        <div>
            <div>
                <div class="flex justify-center pt-4">
                    
                    <!--Modal-->
                    <div
                        class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50">
                        </div>

                        <div
                            class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                            <div
                                class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 18 18">
                                    <path
                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                    </path>
                                </svg>
                            </div>

                            <!-- Add margin if you want to see some of the overlay behind the modal-->
                            <div class="modal-content py-4 text-left px-6">
                                <!--Title-->
                                <div class="flex justify-between items-center pb-3">
                                    <p class="text-2xl text-center text-mainBlue font-bold">Edit Your
                                        Information
                                    </p>
                                    <div class="modal-close cursor-pointer z-50">
                                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg"
                                            width="18" height="18" viewBox="0 0 18 18">
                                            <path
                                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>

                                <!--Body-->
                                <input type="hidden" id="ProjectID" name="ProjectID" value="<?= $ProjectID ?>" >
                                
                                <label for="ProjectTitle" class="text-gray-800 text-sm font-bold">Name</label>
                                <input id="ProjectTitle" name="ProjectTitle" value="<?= $row2["ProjectTitle"] ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Ex: Name Project" /> 
                                
                                    <label for="DescriptionProject"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Tilte</label>
                                <input id="DescriptionProject" name="DescriptionProject" value="<?= $row2["DescriptionProject"] ?>"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Ex: Description Project" />
                                
                                    <label for="Category"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Category</label>
                                <input id="CategoryID" name="CategoryID" value=""
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                    placeholder="Ex: Desgin..." />

                                <label for="Category"
                                    class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Username</label>
                                <select id="default" name="username"
                                    class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border">
                                    
                                    <option selected value="<?= $UserID ?>">
                                        <?= $old_username ?>
                                    </option>

                                    <?php
                                    $qeury_user = "SELECT * FROM users";
                                    $userS = mysqli_query($conn, $qeury_user);
                                    while ($row = mysqli_fetch_assoc($userS)) {
                                        echo "<option value='$row[userid]'> $row[username] </option>";
                                    }
                                    ?>

                                </select>

                                <!--Footer-->
                                <div class="flex justify-end pt-2">
                                    <button name="submit" type="submit"
                                        class="px-4 bg-transparent p-2 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Submit</button>
                                    <button
                                        class="modal-close px-4 bg-mainBlue p-2 rounded-lg text-white hover:bg-indigo-400">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="../../dist/sandbox.js"></script>
    <script src="../../scripts/modalupdate.js"></script>
    <script src=""></script>
</body>

</html>