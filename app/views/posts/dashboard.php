<?php require APP_ROOT . '/views/include/header.php'; ?>

<div id="content" class='flex flex-col flex-auto bg-grey-lighter'>
    <div class="flex-grow container mx-auto p-4 ">
        <h1 class="text-5xl text-center">Dashboard</h1>

        <?php foreach ($data['posts'] as $post) : ?>
            <p><?= $post->name ?></p>
            <small>Added on <?= $post->postCreated ?></small>
            <br>
            <p>Title: <?= $post->title; ?></p>
            <p>Location: <?= $post->location; ?></p>
            <p>Price: <?= $post->price; ?></p>
            <p>Phone: +33<?= $post->phone_number; ?></p>
            <p>Mileage: <?= $post->mileage; ?></p>
            <p>Power: <?= $post->power; ?></p>
            <p>Fuel: <?= $post->fuel; ?></p>
            <p>Registration date: <?= $post->registration_date; ?></p>
            <p>Cubic capacity: <?= $post->cubic_capacity; ?></p>
            <p class="py-2">Full description: <?= $post->full_description; ?></p>

            <hr>
        <?php endforeach; ?>
    </div>
</div>



<?php require APP_ROOT . '/views/include/footer.php'; ?>