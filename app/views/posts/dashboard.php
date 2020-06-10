<?php require APP_ROOT . '/views/include/header.php'; ?>
<?php flash('post_message'); ?>
<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <div class="flex-grow container mx-auto p-4 ">
        <h1 class="text-3xl text-center sm:text-4xl">Here are your latest posts</h1>
        <!-- Card -->
        <div class="my-8 px-5 mx-auto shadow-lg   xl:w-3/4">
            <!-- Start loop-->
            <?php foreach ($data['posts'] as $post) : ?>
                <?php $urls = explode(',', $post->img_url);
                $url = explode('/', $urls[0]);
                ?>

                <hr class="border border-green-600">

                <!-- Title -->
                <h2 class="text-xl text-center font-medium text-gray-900 title-font mt-5 md:mt-10 "><?= $post->title; ?></h2>
                
                <div class="pb-8 flex flex-wrap md:flex-no-wrap ">

                    <!-- Image -->
                    <img alt="ecommerce" class="my-5 mx-auto md:w-2/4 md:my-0 lg:w-3/5 object-cover object-center rounded" src="../upload/<?= $url[1]; ?>">

                    <!-- Content -->
                    <div class="md:flex-grow w-full md:w-2/4 md:px-10  lg:w-3/4 lg:flex-grow-0 ">
                        <div>
                            <!-- Price -->
                            <p class="leading-relaxed flex justify-between"><span class="italic"><i class="fas fa-hand-holding-usd text-green-500"></i> Price: </span> <?= $post->price; ?></p>
                            <!-- Location -->
                            <p class="leading-relaxed flex justify-between "> <span class="italic mr-10"><i class="fas fa-map-marked-alt text-green-500"></i> Location: </span> <?= $post->location; ?></p>
                            <hr class="my-3">
                            <!-- Mileage -->
                            <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="fas fa-route text-green-500"></i> Mileage: </span> <?= $post->mileage; ?> Km</p>
                            <!-- Registration date -->
                            <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="far fa-calendar-alt text-green-500"></i> First registration: </span> <?= $post->registration_date; ?></p>
                        </div>
                        <!-- Buttons -->
                        <div class="flex flex-col mx-auto mt-8 lg:mt-32">

                            <a class="bg-transparent text-center hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2  border border-blue-500 hover:border-transparent rounded cursor-pointer " href="<?= URL_ROOT; ?>/posts/edit/<?= $post->postId; ?>">
                                Edit
                            </a>

                            <form action="<?= URL_ROOT; ?>/posts/delete/<?= $post->postId; ?>" method="POST" class="flex flex mt-5">
                                <input type="submit" value="Delete" class="leading-tight w-full bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2  border border-red-500 hover:border-transparent rounded cursor-pointer">
                            </form>

                            <a class="bg-transparent text-center hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2  border border-green-500 hover:border-transparent rounded cursor-pointer mt-5" href="<?= URL_ROOT; ?>/posts/details/<?= $post->postId; ?>">Learn More
                                <i class="fas fa-long-arrow-alt-right ml-3 text-xl"></i>
                            </a>
                        </div>
                        <!-- End of Button -->
                    </div>
                    <!-- End of content -->

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<?php require APP_ROOT . '/views/include/footer.php'; ?>