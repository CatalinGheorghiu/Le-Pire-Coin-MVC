<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <div class="flex-grow container mx-auto p-4 ">
        <h1 class="text-center py-10">Welcome</h1>
        <!-- Card -->
        <div class="my-8 mx-auto shadow-lg  px-10 xl:w-3/4">
            <hr class="border border-green-600">
            <div class="py-8 flex flex-wrap md:flex-no-wrap ">

                <div class="xl:w-64 lg:w-2/12 md:w-3/12 md:mb-0 mb-6 md:mr-10  sm:mx-auto flex-shrink-0 flex flex-col">
                    <img alt="ecommerce" class="mx-auto xl:w-3/5 lg:w-5/6 md:w-11/12 h-auto object-cover object-center rounded" src="https://dummyimage.com/400x400">
                </div>
                <!-- Content -->
                <div class="md:flex-grow">
                    <!-- Title -->
                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Volvo xc60</h2>
                    <!-- Price -->
                    <p class="leading-relaxed flex justify-between"><span class="italic"><i class="fas fa-hand-holding-usd text-green-500"></i> Price: </span> 2.500 €</p>
                    <!-- Location -->
                    <p class="leading-relaxed flex justify-between "> <span class="italic mr-10"><i class="fas fa-map-marked-alt text-green-500"></i> Location: </span> Jarville-La-Malgrange</p>
                    <hr class="my-3">
                    <!-- Mileage -->
                    <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="fas fa-route text-green-500"></i> Mileage: </span> 255 000 Km</p>
                    <!-- Registration date -->
                    <p class="leading-relaxed flex justify-between"> <span class="italic mr-10"><i class="far fa-calendar-alt text-green-500"></i> First registration: </span> 255 000 Km</p>




                    <p class="leading-relaxed py-2"></p>
                    <!-- Button MORE -->
                    <a class="text-green-500 inline-flex items-center mt-4 float-right">Learn More
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <!-- End of Button -->
                </div>
                <!-- End of content -->
            </div>

        </div>
        <!-- End of card -->
    </div>
</div>



<?php require APP_ROOT . '/views/include/footer.php'; ?>