<div class="container mt-4 mb-4 question-details">
    <h2 class="text-center mb-4">Question Details</h2>
    <div class="row justify-content-center" style="gap:20px; flex-wrap:nowrap;">
        <div class="col-8">
            <?php
            include('./common/db.php');
            $query = "SELECT * FROM questions WHERE id = '$qid'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $cid_q = $row['category_id'];
            echo '
        <div class="mb-4">
          <h4 class="mb-2" style="color:black;">Q:' . $qid . ' ' .  htmlspecialchars($row['title']) . '</h4>
          <p class="text-muted">' . nl2br(htmlspecialchars($row['discription'])) . '</p>
        </div>';
            include('answers.php')
            ?>

            <div class="answer-box">
                <form method="POST" action="./server/requests.php">
                    <input type="hidden" name="q-id" value="<?php echo $qid ?>">
                    <label for="answer" class="form-label">Write Your Answer</label>
                    <textarea name="answer" id="answer" rows="6" class="form-input" placeholder="Your Answer..." required></textarea>
                    <div class="mt-2">
                        <button type="submit" name="answer-btn" value="submit" class="btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4">
            <h3 class="mb-4">Related Questions</h3>
            <?php
            $query = "SELECT * FROM questions WHERE category_id ='$cid_q' and id!= '$qid'";
            $result = $conn->query($query);
            foreach ($result as $row) {
                $title = $row['title'];
                $id = $row['id'];
                echo "<div class='col-12 mb-4'>
                <div class='question-card p-2'>
                  <h6>
                    <a href='?q-id=$id' class='question-link'>
                      $title
                    </a>
                  </h6>
                </div>
              </div>";
            }
            ?>
        </div>
    </div>
</div>