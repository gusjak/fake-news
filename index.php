<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/typography.css">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/links.css">
    <link rel="stylesheet" href="/button.css">
</head>

<header>
    <h1 data-content="Fake">News</h1>
</header>

<body>

    <main>
        <?php usort($newsItems, 'sortByDateNewest'); ?>
        <?php foreach ($newsItems as $newsItem) : ?>
            <article class="item">
                <div class="image" style="background-image: url(<?php echo $newsItem['image'] ?>);"></div>
                <ul>
                    <li>By <a href="#" class="link-1" onclick="return false;"><?php echo $newsItem['author'] ?></a></li>
                    <li><?php echo date("d M Y", $newsItem['datePublished']) ?></li>
                </ul>
                <h2><a href="#" class="link-2" onclick="return false;"><?php echo $newsItem['title'] ?></a></h2>
                <br>
                <p><?php echo $newsItem['content'] ?></p>
                <ul>
                    <li><span><?php echo $newsItem['likes'] ?></span> People liked this</li>
                    <a href="#" class="like-button" onclick="return false;"> <i class="fa fa-heart fa-lg"></i></a>
                </ul>
            </article>
        <?php endforeach; ?>
    </main>
</body>

<footer>
    <!-- Nothing to see here except emptiness -->
</footer>
<script src="main.js"></script>

</html>