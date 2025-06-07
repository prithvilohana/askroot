<!-- Ask question page -->

<div class="container mt-4 mb-4">
    <h2 class="text-center mb-4">Ask a New Question</h2>

    <form action="./server/requests.php" method="POST" class="col-12 col-8 p-4" style="margin: 0 auto; background: #fff; border: 1px solid #ccc; border-radius: 8px;">

        <div class="mb-3">
            <label for="title">Question Title</label><br>
            <input type="text" name="title" id="title" class="form-input" required placeholder="e.g., How does PHP handle sessions?">
        </div>

        <div class="mb-3">
            <label for="discription">Description</label><br>
            <textarea name="discription" id="discription" class="form-input" rows="6" required placeholder="Write details about your question..."></textarea>
        </div>

        <div class="mb-3">
            <label for="category">Select Category</label><br>
            <?php include('category.php'); ?>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-4">
            <button type="submit" name="ask" class="btn-primary">Submit Question</button>
        </div>

    </form>
</div>