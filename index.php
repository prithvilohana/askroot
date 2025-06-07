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

    if (isset($_GET['signup']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/signup.php');
    } else if (isset($_GET['login']) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include('./client/login.php');
    } else if (isset($_GET['ask'])) {
        include('./client/ask.php');
    } else if (isset($_GET['q-id'])) {
        $qid = $_GET['q-id'];
        include('./client/question-details.php');
    } else if (isset($_GET['categories'])) {
        include('./client/categorieslist.php');
    } else if (isset($_GET['cat-id'])) {
        $cid = $_GET['cat-id'];
        include('./client/questions.php');
    } else if (isset($_GET['u-id'])) {
        $uid = $_GET['u-id'];
        include('./client/questions.php');
    } else if (isset($_GET['lates'])) {
        include('./client/questions.php');
    }else if (isset($_GET['q'])) {
        $search = $_GET['q'];
        include('./client/questions.php');
    } else {
        include('./client/questions.php');
    }




    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
</body>

</html>