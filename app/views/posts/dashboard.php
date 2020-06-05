<?php require APP_ROOT . '/views/include/header.php'; ?>
<?php flash('add_success'); ?>
<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <h1 class="text-5xl text-center">Here are your latest posts</h1>
    <div class="flex-grow container mx-auto p-4 ">
        <!-- Card -->
        <div class="my-8 mx-auto shadow-lg  px-10 xl:w-3/4">
            <?php foreach ($data['posts'] as $post) : ?>
                <hr class="border border-green-600">
                <div class="py-8 flex flex-wrap md:flex-no-wrap ">

                    <div class="xl:w-64 lg:w-2/12 md:w-3/12 md:mb-0 mb-6 md:mr-10  sm:mx-auto flex-shrink-0 flex flex-col">
                        <!-- Image -->
                        <img alt="ecommerce" class="mx-auto xl:w-3/5 lg:w-5/6 md:w-11/12 sm:w-64 h-auto object-cover object-center rounded" src="https://dummyimage.com/400x400">
                    </div>
                    <!-- Content -->
                    <div class="md:flex-grow w-full">
                        <!-- Title -->
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?= $post->title; ?></h2>
                        <!-- Price -->
                        <p class="leading-relaxed flex justify-between"><span class="italic"><i class="fas fa-hand-holding-usd text-green-500"></i> Price: </span> <?= $post->price; ?></p>
                        <!-- Location -->
                        <p class="leading-relaxed flex justify-between "> <span class="italic mr-10"><i class="fas fa-map-marked-alt text-green-500"></i> Location: </span> <?= $post->location; ?></p>
                        <hr class="my-3">
                        <!-- Mileage -->
                        <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="fas fa-route text-green-500"></i> Mileage: </span> <?= $post->mileage; ?> Km</p>
                        <!-- Registration date -->
                        <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="far fa-calendar-alt text-green-500"></i> First registration: </span> <?= $post->registration_date; ?></p>

                        <p class="leading-relaxed py-2"></p>
                        <!-- Button MORE -->
                        <div class="mt-6">
                            <a class="text-green-500 inline-flex items-center  float-right" href="<?= URL_ROOT; ?>/posts/details/<?= $post->postId; ?>">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2 cursor-pointer ">
                                Edit
                            </a>
                            <a class=" leading-tight bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded cursor-pointer">
                                Delete
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