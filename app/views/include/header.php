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
    <title><?= SITE_NAME; ?> </title>
</head>

<body class="flex flex-col min-h-screen bg-grey">
    <header class="border-b md:flex md:items-center md:justify-between p-4 pb-0 shadow-lg md:pb-4  ">

        <!-- Logo text or image -->
        <div class="flex items-center justify-between mb-4 md:mb-0">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
            </a>
            <h1 class="leading-none text-2xl text-grey-darkest p-4 transition duration-500 ease-in-out   transform hover:-translate-y-1 hover:scale-110 ">
                <a class="no-underline text-grey-darkest hover:text-black" href="<?= URL_ROOT; ?>">
                    <?= SITE_NAME; ?>
                </a>
            </h1>
        </div>
        <!-- END Logo text or image -->

        <!-- Global navigation -->
        <nav class="">
            <ul class="list-reset md:flex md:items-center">

                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="md:ml-4">
                        <p class="border-t block no-underline  py-2 text-green-600 md:border-none md:p-0">
                            <?= $_SESSION['user_name'] ?> |
                        </p>
                    </li>
                    <li class="md:ml-4">
                        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/posts/add">
                            Add |
                        </a>
                    </li>
                    <li class="md:ml-4">
                        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/posts/dashboard">
                            Dashboard |
                        </a>
                    </li>
                    <li class="md:ml-4">
                        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/logout">
                            Logout |
                        </a>
                    </li>

                <?php else : ?>
                    <li class="md:ml-4">
                        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/login">
                            Login |
                        </a>
                    </li>
                    <li class="md:ml-4">
                        <a class="border-t block no-underline hover:underline py-2 text-grey-darkest hover:text-black md:border-none md:p-0" href="<?= URL_ROOT; ?>/users/register">
                            Register |
                        </a>
                    </li>
                <?php endif; ?>


            </ul>
        </nav>
    </header>