<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <div class="flex-grow container mx-auto p-4 ">
        <div class="text-gray-700 body-font relative">
            <h2 class="text-gray-900  text-center my-10 text-4xl title-font">Edit your announce</h2>
            <form action="<?= URL_ROOT; ?>/posts/edit/<?= $data['id']; ?>" method="post" class="edit-post" enctype="multipart/form-data">
                <div class="container px-5 mb-10  mx-auto flex">
                    <div class=" flex flex-col mx-auto relative z-10 w-full md:w-9/12 lg:w-11/12 xl:w-9/12">

                        <div class="flex flex-col justify-between  sm:flex-row sm:flex-wrap  lg:flex-row ">
                            <div>
                                <input name="title" type="text" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Title" value="<?= htmlspecialchars($data['title']); ?>">
                                <?php if (isset($data['title_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['title_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="price" type="number" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Price" value="<?= htmlspecialchars($data['price']); ?>">
                                <?php if (isset($data['title_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['title_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="mileage" type="number" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Mileage" value="<?= htmlspecialchars($data['mileage']); ?>">
                                <?php if (isset($data['mileage_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['mileage_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="registration_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2  my-2" placeholder="First registration" value="<?= htmlspecialchars($data['registration_date']); ?>">

                                <?php if (isset($data['first_registration_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['first_registration_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="cubic-capacity" type="number" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Cubic capacity" value="<?= htmlspecialchars($data['cubic_capacity']); ?>">
                                <?php if (isset($data['cubic_capacity_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['cubic_capacity_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="power" type="number" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Power" value="<?= htmlspecialchars($data['power']); ?>">
                                <?php if (isset($data['power_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['power_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="fuel" type="text" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Fuel" value="<?= htmlspecialchars($data['fuel']); ?>">
                                <?php if (isset($data['fuel_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['fuel_err']; ?></p>
                                <?php endif; ?>
                            </div>

                            <div>
                                <input name="location" type="text" class="w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Location" value="<?= htmlspecialchars($data['location']); ?>">
                                <?php if (isset($data['location_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['location_err']; ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <input name="phone" type="number" class=" w-full bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 my-2" placeholder="Phone number" value="<?= htmlspecialchars($data['phone_number']); ?>">
                                <?php if (isset($data['phone_number_err'])) : ?>
                                    <p class="text-red-500 text-xs italic mb-4"><?= $data['phone_number_err']; ?></p>
                                <?php endif; ?>
                            </div>

                        </div>



                        <textarea name="full-description" placeholder="Full description" class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 my-2 mb-10 resize-none"><?= htmlspecialchars($data['full_description']); ?></textarea>

                        <input type="file" name="file[]" class=" py-2 mb-10" id="file" accept="image/png, image/jpeg" multiple>

                        <input type="submit" name="edit-post" value="Edit post" class="text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




<?php require APP_ROOT . '/views/include/footer.php'; ?>