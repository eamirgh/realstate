<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo APP_URL ?>/tailwind.js"></script>
    <link rel="stylesheet" href="<?php echo APP_URL ?>/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title><?php echo $title ?? '' ?></title>
</head>

<body>
    <?php require_once(__DIR__ . './../partials/header.php'); ?>
    <main class="text-gray-600 body-font container my-8">
        <?php echo $content ?? ''; ?>
    </main>
    <?php require_once(__DIR__ . './../partials/footer.php'); ?>

    <script src="<?php echo APP_URL ?>/app.js"></script>
</body>

</html>