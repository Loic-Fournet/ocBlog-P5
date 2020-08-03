<?php

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=blog_oc;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function getArticles()
{
    $db = dbConnect();
	$req = $db->query('SELECT id, title, content FROM article ORDER BY date_created DESC LIMIT 0, 5');
	return $req;
}

function getArticle($articleId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, content FROM article WHERE id = ?');
    $req->execute(array($articleId));
    $article = $req->fetch();

    return $article;
}

function getComments($articleId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id,author, content FROM comment WHERE article_id = ? ORDER BY date_comment DESC');
    $comments->execute(array($articleId));

    return $comments;
}





