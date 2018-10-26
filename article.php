<?php
session_start();

include_once ('includes/connection.php');
include_once ('includes/article.php');
$article = new Article;
$articles = $article->fetch_all();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
    $_SESSION['id'] = $id;

    $_SESSION['article_u'] = $data['username'];
?>
    <html>
    <head>
        <title>CMS</title>
   <link href="assets/style.css" rel="stylesheet">

    </head>
    <body>


    <div class="container">
        <a href="index.php" id="logo"><img
        src="assets/logo.png" />
        </a>
        <h4><?php echo $data['article_title'] ?>
            <small>
                - Posted by <?php echo $data['username'];?>
                on <?php echo date('l jS, Y', $data['article_timestamp'])?>
            </small>
        </h4>
        <p>
            <?php echo $data['article_content']?>

            <br /><a href="index.php">&larr; Back</a> <a style="float: right" href="admin/edit.php">Edit &#9998;</a>
        </p>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="blog/vendor/jquery/jquery.min.js"></script>
    <script src="blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="blog/js/clean-blog.min.js"></script>
    </body>
    </html>

<?php
} else {
    header('Location: index.php');
    exit();
}
