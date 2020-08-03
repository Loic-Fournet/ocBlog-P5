<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon blog</title>
    <link href="" rel="stylesheet" />
</head>

<body>

<h1>My blog</h1>
<p>Derniers billets du blog :</p>

<?php
    while ($data = $articles->fetch())
    {
        var_dump("test");
        ?>
        <div>
            <h3>
                <?php echo htmlspecialchars($data['title']); ?>
            </h3>

            <p>
                <?php echo nl2br(htmlspecialchars($data['content'])); ?>
                <br />
                <em><a href="single.php?id=<?= $data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
    }
    $articles->closeCursor();
?>

<?php
while ($comment = $comments->fetch())
{
    var_dump("test02");
    ?>
    <p><?= nl2br(htmlspecialchars($comment['content']))?></p>
    <?php
}
$comments->closeCursor();
?>
</body>
</html>