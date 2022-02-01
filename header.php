<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/typography@0.5.x/dist/typography.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php $menuItems = wp_get_nav_menu_items('portfolio-menu');    ?>

    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
        </div>
        <div>

            <?php foreach ($menuItems as $item) { ?>
                <a class="hover:bg-teal-900 hover:text-white px-3 py-2 <?= $currentPageId == $item->object_id ? 'text-teal-900' : 'text-gray-400' ?> >" href="<?= $item->url; ?>">
                    <?php echo $item->title; ?>
                </a>
            <?php } ?>
        </div>
    </nav>

    <div class="container prose">