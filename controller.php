<?php

require('model.php');

function listArticles()
{
    $articles = getArticles();

    require('home.php');
}

function article()
{
    $article = getArticle($_GET['id']);
    $comments = getComments($_GET['id']);
    require('single.php');
}
