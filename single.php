<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="" rel="stylesheet"/>
    </head>
    <body>
        <h1>Mon super blog !</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($article['title']) ?>
            </h3>

            <p>
                <?= htmlspecialchars($article['content']) ?>
            </p>
        </div>

        <?php
            while ($comment = $comments->fetch())
            {
                var_dump("test02");
                ?>
                  <p><?= nl2br(htmlspecialchars($comment['content']))?></p>
                <?php
            }
        ?>
    </body>
</html>