<!-- Categories dropdown in ask page  -->

<select name="category" id="category" class="form-input" required>
    <option value="">-- Choose a category --</option>
    <?php
    include('./common/db.php');
    $query = "SELECT * FROM categories";
    $result =  $conn->query($query);
    foreach ($result as $row) {
        $name = $row['name'];
        $id = $row['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>
</select>