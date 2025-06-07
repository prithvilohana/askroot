<!-- Categories List of all the categories in the database. -->

<div class="container mt-4 mb-4 categories-list">
    <h2 class="text-center mb-4">Browse Categories</h2>

    <div class="category-grid d-flex">
        <?php
        include('./common/db.php');
        $query = "SELECT * FROM categories";
        $result = $conn->query($query);
        if ($result && $result->num_rows > 0) {
            foreach ($result as $row) {
                $cat_id = $row['id'];
                echo '
        <div class="category-box">
            <h5><a href="?cat-id=' . urlencode($cat_id) . '">' . htmlspecialchars($row['name']) . '</a></h5>
        </div>';
            }
        } else {
            echo '<p class="text-center">No categories found.</p>';
        }
        ?>

    </div>
</div>