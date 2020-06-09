<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <h1 class="text-center py-5 text-4xl underline shadow-lg w-1/2 mx-auto">Latest announces</h1>
    <div class="flex-grow container mx-auto p-4 ">


        <!-- Card -->
        <div class="my-8 mx-auto shadow-lg  px-10 xl:w-3/4">

            <!-- Start loop-->
            <?php foreach ($data['posts'] as $post) : ?>
                <?php $urls = explode(',', $post->img_url);
                $url = explode('/', $urls[0]);
                ?>
                <hr class="border border-green-600">
                <div class="py-8 flex flex-wrap md:flex-no-wrap ">

                    <div class="xl:w-64 lg:w-2/12 md:w-3/12 md:mb-0 mb-6 md:mr-10  sm:mx-auto flex-shrink-0 flex flex-col">
                        <!-- Image -->
                        <?php if (isset($url[1])) : ?>
                            <img alt="ecommerce" class="mx-auto xl:w-3/5 lg:w-5/6 md:w-11/12 sm:w-64 h-auto object-cover object-center rounded" src="upload/<?= $url[1]; ?>">
                        <?php else : ?>
                            <img alt="ecommerce" class="mx-auto xl:w-3/5 lg:w-5/6 md:w-11/12 sm:w-64 h-auto object-cover object-center rounded" src="upload/no-image-available.png">
                        <?php endif; ?>

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
                        <a class="text-green-500 inline-flex items-center mt-4 float-right" href="<?= URL_ROOT; ?>/posts/details/<?= $post->postId; ?>">Learn More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <!-- End of Button -->
                    </div>
                    <!-- End of content -->
                </div>
            <?php endforeach; ?>
            <!-- End loop -->
        </div>
        <!-- End of card -->
    </div>
</div>



<?php require APP_ROOT . '/views/include/footer.php'; ?>