<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AskRoot</title>
    <?php include('./client/commonFiles.php') ?>

</head>

<body>
    <?php
    session_start();
    include('./client/header.php');

    // signup redirection
    if (isset($_GET['signup']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/signup.php');
    } else if (isset($_GET['login']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/login.php');  // login redirection
    } else if (isset($_GET['ask'])) {
        include('./client/ask.php'); // question ask redirection
    } else if (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php'); // question details redirection
    } else if (isset($_GET['categories'])) {
        include('./client/categorieslist.php'); // categories list redirection
    } else if (isset($_GET['cat-id'])) {
        $cid = $_GET['cat-id'];
        include('./client/questions.php'); // questions based on categories redirection
    } else if (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        include('./client/questions.php'); // myquestions list redirection
    } else if (isset($_GET['latest'])) {
        include('./client/questions.php'); // lastes question list redirection
    }else if (isset($_GET['q'])) {
        $search = $_GET['q'];
        include('./client/questions.php'); // search question list redirection
    } else {
        include('./client/questions.php'); // default questions list redirection
    }




    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
</body>

</html>