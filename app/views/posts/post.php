<?php include "header.phtml"; ?>
<div id="problem-here" class="flex-grow container mx-auto  p-4 ">
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4"><?= $post['title']; ?></h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base"><?= $post['body']; ?></p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
                    </div>
                </div>
            </div>
            <a class="text-green-500 inline-flex items-center mt-4" href="./">Back
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </section>
</div>
<?php include "footer.phtml"; ?>