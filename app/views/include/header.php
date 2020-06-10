<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9a99710b3e.js" crossorigin="anonymous"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL_ROOT; ?>/css/style.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <title><?= SITE_NAME; ?> </title>
</head>

<body class="flex flex-col min-h-screen bg-grey">
    <header class="text-gray-700 body-font">
        <nav class="w-full flex flex-wrap justify-between  items-center border-b shadow-lg bg-gray-200 p-4 ">

            <!-- Logo text or image -->
            <div class="flex items-center justify-between ">

                <a class="flex title-font font-medium items-center text-white ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                </a>

            </div>


            <div class="flex items-center flex-shrink-0  mr-6">
                <h1 class="leading-none text-2xl text-grey-darkest p-4 transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110 ">
                    <a class="no-underline hover:no-underline" href="<?= URL_ROOT; ?>">
                        <span class="text-2xl pl-2"><i class="em em-grinning"></i> <?= SITE_NAME; ?></span>
                    </a>
                </h1>
            </div>


            <!-- END Logo text or image -->

            <!-- Hamburger -->
            <div class="block md:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-900 border-gray-900 hover:text-gray-900 hover:border-gray-900">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <!-- End of hamburger -->

            <!-- Global navigation -->
            <div class="w-full flex-grow md:flex md:items-center md:w-auto hidden md:inline pt-6 md:pt-0" id="nav-content">
                <ul class="list-reset md:flex justify-end flex-1 items-center">

                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <li class="md:ml-4">
                            <p class="inline-block w-full text-center border-t block no-underline  py-2 text-green-600 md:border-none md:p-0">
                                <?= $_SESSION['user_name'] ?> |
                            </p>
                        </li>
                        <li class="md:ml-4">
                            <a class="inline-block w-full text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/posts/add">
                                Add |
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a class="inline-block w-full text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/posts/dashboard">
                                Dashboard |
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a class="inline-block w-full text-center border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/logout">
                                Logout |
                            </a>
                        </li>

                    <?php else : ?>
                        <li class="md:ml-4">
                            <a class="inline-block w-full text-center border-t  block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/login">
                                Login
                            </a>
                        </li>
                        <li class="md:ml-4">
                            <a class="inline-block w-full text-center border-t block no-underline hover:underline py-2 pb-0 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/register">
                                Register
                            </a>
                        </li>
                    <?php endif; ?>


                </ul>
            </div>
        </nav>
    </header>