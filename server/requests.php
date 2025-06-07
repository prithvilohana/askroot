<?php
session_start();
include("../common/db.php");
//signup athentication
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `password`) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $username, $email, $password);
    $result = $stmt->execute();

    if ($result) {
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $stmt->insert_id];
        header("location: /askroot");
    } else {
        echo "Error creating user: " . $stmt->error;
    }
} else if (isset($_POST['login'])) {  //logic authentication
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = 0;
    $query = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            $username = $row['username'];
            $user_id = $row['id'];
        }
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        if (!empty($_POST['redirect'])) {
            header("Location: /askroot/" . $_POST['redirect']);
        } else {
            header("Location: /askroot");
        }
        exit();
    } else {
        echo "Error Login:";
    }
} else if (isset($_GET['logout'])) { //logout
    session_unset();
    header("location: /askroot");
} else if (isset($_POST['ask'])) {
    $title = $_POST['title'];
    $discription = $_POST['discription'];
    $category = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("INSERT INTO `questions` (`title`, `discription`, `category_id`,`user_id` ) VALUES (?, ?, ?, ?)");
    $question->bind_param('ssii', $title, $discription, $category, $user_id);
    $result = $question->execute();

    if ($result) {
        header("location: /askroot");
    } else {
        echo "Question Not Added " . $question->error;
    }
} else if (isset($_POST['answer-btn'])) { //logic answer
    $answer_text = $_POST['answer'];
    $question_id = $_POST['q-id'];
    $user_id = $_SESSION['user']['user_id'];
    $answer = $conn->prepare("INSERT INTO `answers` (`answer`, `question_id`, `user_id`) VALUES (?, ?, ?)");
    $answer->bind_param('sii', $answer_text, $question_id, $user_id);
    $result = $answer->execute();
    if ($result) {
        header("location: /askroot?q-id=$question_id");
    } else {
        echo "Answer Not Added " . $answer->error;
    }
} else if (isset($_GET['delete'])) { //delete question
    echo $did = $_GET['delete'];
    $query = $conn->prepare("DELETE FROM questions WHERE id='$did'");
    $result = $query->execute();
    if ($result) {
        header("location: /askroot");
    } else {
        echo "Question Not Deleted " . $query->error;
    }
}
