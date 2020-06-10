<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter items-center justify-center'>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 my-10" action="<?= URL_ROOT; ?>/users/register" method="post">
            <h1 class="text-2xl text-center pb-8">Register Account</h1>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="name" name="name" placeholder="Name" value="<?= htmlspecialchars($data['name']); ?>">
                <?php if (isset($data['name_err'])) : ?>
                    <p class="text-red-500 text-xs italic"><?= $data['name_err']; ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" name="email" placeholder="Email" value="<?= htmlspecialchars($data['email']); ?>">

                <?php if (isset($data['email_err'])) : ?>
                    <p class="text-red-500 text-xs italic"><?= $data['email_err']; ?></p>
                <?php endif; ?>

            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" autocomplete="on" placeholder="******" value="<?= htmlspecialchars($data['password']); ?>">

                <?php if (isset($data['password_err'])) : ?>
                    <p class="text-red-500 text-xs italic"><?= $data['password_err']; ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">
                    Confirm Password
                </label>
                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="confirm_password" type="password" name="confirm_password" autocomplete="on" placeholder="******" value="<?= htmlspecialchars($data['confirm_password']); ?>">

                <?php if (isset($data['confirm_password_err'])) : ?>
                    <p class="text-red-500 text-xs italic"><?= $data['confirm_password_err']; ?></p>
                <?php endif; ?>
            </div>

            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</div>

<?php require APP_ROOT . '/views/include/footer.php'; ?>