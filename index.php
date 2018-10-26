<?php
session_start();

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;
$articles = $article->fetch_all();

?>
<html>
<head>
    <title>CMS</title>
    <link rel="stylesheet" href="assets/style.css" />


</head>
<body>

<div class="container">
    <a href="index.php" id="logo"><img
                src="assets/logo.png" />
    </a>

    <ol>
        <?php foreach ($articles as $article) {?>
        <li><a href="article.php?id=<?php echo $article['article_id'];?>">
                <?php echo $article['article_title'];?>
            </a>

           - Posted by <?php echo $article['username'];?> on <?php echo date('l jS, Y', $article['article_timestamp']);?>
        </li>
        <?php } ?>
    </ol>
    <br />
    <a href="admin">admin</a>
</div>
</body>
</html>