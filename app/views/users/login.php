<?php require APP_ROOT . '/views/include/header.php'; ?>
<?php if (isset($_GET['register'])) {
    if ($_GET['register'] == 'success') {
        echo  "<h2 class='success-alert '>Registration successfully! You can now login in to your account!</h2>";
    }
}; ?>
<div id="content" class='flex flex-col flex-auto bg-grey-lighter items-center justify-center'>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="login.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" required value="<?= htmlspecialchars($email); ?>" required>
                <?php if (isset($user_err)) : ?>
                    <p class="text-red-500 text-xs italic"><?= $user_err; ?></p>
                <?php endif; ?>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" minlength="6" name="password" autocomplete="on" placeholder="******" value="<?= htmlspecialchars($password); ?>" required>
                <?php if (isset($password_err)) : ?>
                    <p class=" text-red-500 text-xs italic"><?= $password_err; ?></p>
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
        <!-- <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p> -->
    </div>
</div>
<?php require APP_ROOT . '/views/include/footer.php'; ?>