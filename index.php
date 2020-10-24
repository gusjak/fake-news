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
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/typography.css">
    <link rel="stylesheet" href="/header.css">
    <link rel="stylesheet" href="/main.css">
</head>

<header>
    <h1 data-content="Fake">News</h1>
</header>

<body>

    <main>
        <?php foreach ($newsItems as $newsItem) : ?>
            <article class="item-1">
                <img src="<?php echo $newsItem['image'] ?>" class="responsive" alt="article image">
                <ul>
                    <li><?php echo $newsItem['author'] ?></li>
                    <li><?php echo date("d/m-Y", $newsItem['datePublished']) ?></li>
                </ul>
                <h2><?php echo $newsItem['title'] ?></h2>
                <p><?php echo $newsItem['content'] ?></p>
                <span><?php echo $newsItem['likes'] ?> <a class="link-1" href=""> Likes</a></span>
            </article>
        <?php endforeach; ?>

        <!-- 
            <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        <article class="item">
            <div class="thumbnail" style="background-image: url(https://images.unsplash.com/photo-1572657018299-fcb6280c9356?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1629&q=80)"></div>
            <ul>
                <li>Author</li>
                <li>20/10-2010</li>
            </ul>
            <h2>Title 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ea repellendus omnis rerum nemo, eos consectetur esse nihil quod non deleniti minus debitis necessitatibus aspernatur suscipit ipsa optio. Maiores minima dolorem amet quos veniam eius dolore minus quas nam vero.</p>
            <span>3782 Likes</span>
        </article>
        -->
    </main>
</body>

<footer>

</footer>

</html>