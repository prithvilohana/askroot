<!-- main question page -->

<div class="container mt-4 mb-4 questions-main">
  <div class="row">
    <div class="col-8 col-md-8">
      <h2 class="text-center mb-4">All Questions</h2>
      <?php
      include('./common/db.php');
      if (isset($_GET['cat-id'])) {
        $query = "SELECT * FROM questions WHERE category_id = '$cid'";  // question based on categories
      } else if (isset($_GET['u-id'])) {
        $query = "SELECT * FROM questions WHERE user_id = '$uid'"; // question based on user
      } else if (isset($_GET['latest'])) {
        $query = "SELECT * FROM questions ORDER BY id DESC"; // latest questions
      } else if (isset($_GET['q'])) {
        $search = $conn->real_escape_string($search); // search questions
        $query = "SELECT * FROM questions WHERE title LIKE '%$search%' OR discription LIKE '%$search%'";
      } else {
        $query = "SELECT * FROM questions"; // all questions
      }
      $result = $conn->query($query);
      if ($result && $result->num_rows > 0) {
        $uid = isset($_GET['u-id']) ? $_GET['u-id'] : null;
        foreach ($result as $row) {
          $title = $row['title'];
          $id = $row['id'];
          echo "<div class='col-12 mb-4'>
                <div class='question-card p-4'>
                  <h6>
                    <a href='?q-id=$id' class='question-link'>
                      $title
                    </a>";
                    echo $uid?"<a href='./server/requests.php?delete=$id' class='delete-question'>Delete</a>":NULL;
                  echo"</h6>
                </div>
              </div>";
        }
      } else {
        echo '<p class="text-center">No questions found.</p>';
        echo '<div class="text-center mt-2">';
        echo '<a href="?ask=true"><button>Ask a Question</button></a>';
        echo '</div>';
      }
      ?>
    </div>

    <!-- category list -->
    <div class="col-4 mb-4">
      <div class="category-list-card">
        <?php
        include('categorieslist.php')
        ?>
      </div>
    </div>
  </div>
</div>