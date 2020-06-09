<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <div class="flex-grow container mx-auto p-4 ">
        <!-- Card -->
        <div class="my-8 mx-auto shadow-lg  px-10 xl:w-3/4">
            <h1 class="text-2xl text-center  sm:text-4xl mb-5"><?= $data['post']->title; ?></h1>

            <div class="swiper-container h-pixels-300 md:h-pixels-500 lg:h-pixels-600 ">
                <div class="swiper-wrapper ">
                    <?php foreach ($data['images'] as $key => $img) : ?>
                        <img src="../../<?= $img; ?>" alt="" class=" object-center object-contain  swiper-slide lg:object-cover">
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next "></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="py-8 flex flex-wrap md:flex-no-wrap ">
                <!-- Content -->
                <div class="flex flex-wrap flex-col justify-between w-full md:flex-grow ">
                    <!-- Price -->
                    <p class="leading-relaxed flex justify-between mb-3 "><span class="italic"><i class="fas fa-hand-holding-usd text-green-500"></i> Price: </span> <span class=" text-xl font-bold"><?= $data['post']->price; ?> €</span></p>

                    <!-- Location -->
                    <p class="leading-relaxed flex justify-between mb-3"> <span class="italic "><i class="fas fa-map-marked-alt text-green-500"></i> Location: </span> <?= $data['post']->location; ?></p>

                    <hr class="my-5">

                    <!-- Mileage -->
                    <p class="leading-relaxed text-center flex flex-wrap justify-between  mb-3"> <span class="italic mb-2"><i class="fas fa-route text-green-500"></i> Mileage: </span> <?= $data['post']->mileage; ?> Km</p>

                    <!-- Registration date -->
                    <p class="leading-relaxed text-center flex flex-wrap justify-between my-3"> <span class="italic mb-2"><i class="far fa-calendar-alt text-green-500"></i> First registration: </span> <?= $data['post']->registration_date; ?></p>

                    <!-- Cubic capacity -->
                    <p class="leading-relaxed text-center flex flex-wrap justify-between my-3"> <span class="italic mb-2"><i class="fas fa-horse text-green-500"></i> Cubic Capacity: </span> <?= $data['post']->cubic_capacity; ?> ccm</p>

                    <!-- Power -->
                    <p class="leading-relaxed text-center flex flex-wrap justify-between my-3"> <span class="italic mb-2"><i class="fas fa-fighter-jet text-green-500"></i> Power: </span> <?= $data['post']->power; ?> kW</p>

                    <!-- Fuel -->
                    <p class="leading-relaxed text-center flex flex-wrap justify-between my-3"> <span class="italic mb-2"><i class="fas fa-gas-pump text-green-500"></i> Fuel: </span> <?= $data['post']->fuel; ?></p>
                </div>
            </div>
            <!-- Details -->
            <div class="w-full">
                <h2 class="underline text-center mb-10 font-bold">Vehicle Description</h2>
                <p class="pb-10 text-center">
                    <?= $data['post']->full_description; ?></p>
            </div>
            <div class="flex pb-10 text-justify">
                <!-- Button BACK -->

                <a class="mx-auto leading-tight bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white align-middle py-2 px-4 border border-green-500 hover:border-transparent rounded cursor-pointer" href="javascript:history.back()">
                    <i class="fas fa-long-arrow-alt-left  mr-4 "></i> Back
                </a>
            </div>

        </div>
    </div>
</div>






<?php require APP_ROOT . '/views/include/footer.php'; ?>