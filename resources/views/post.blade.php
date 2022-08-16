<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <link rel="stylesheet" href="/app.css">
       <!-- <script src="/app.js"> </scrpit> -->
    </head> 
    <body>
        <article> 
                <p>
                    By <a href="/authors/ <?= $post->author->username; ?>" > <?= $post->author->name; ?> </a> in <a href="/categories/{{ $post->category->slug }}"> <?= $post->category->name; ?> </a>
                </p>
            <!-- <h1><?= $post->title; ?></h1> -->
            <div>
                <?= $post->body; ?>
            </div>
        </article>
        <p><a href="/">Go Back </a></p>

    </body>
</html>