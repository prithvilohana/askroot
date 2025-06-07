<!-- showing answers -->

<div class="mb-4">
    <h3>Answers</h3>
    <?php
    $query = "SELECT * FROM answers WHERE question_id = '$qid'";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $answer = $row['answer'];
        echo '
        <div class="question-card mb-2 p-2"">
          <p >' . $answer . '</p>
          </div>';
    }
    ?>
</div>