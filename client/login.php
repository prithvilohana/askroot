<div class="container-small mt-4">
    <h2 class="text-center mb-4">Login to Your Account</h2>

    <form action="./server/requests.php" method="POST" class="col-12 col-6 p-4" style="margin: 0 auto 48px;background: #fff;border: 1px solid #ccc;border-radius: 8px;">
        <div class="mb-2">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required class="form-input" placeholder="Enter your email">
        </div>
        <div class="mb-2">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" required class="form-input" placeholder="Enter your password">
        </div>
        <div class="text-center mt-4">
            <button type="submit" name="login" class="btn-primary">Login</button>
        </div>
        <!-- Redirect field -->
        <input type="hidden" name="redirect" value="<?php echo isset($_GET['redirect']) ? htmlspecialchars($_GET['redirect']) : ''; ?>">
        <p class="text-center mt-2">Don't have an account? <a href="?signup=true">Sign up now</a></p>

    </form>
</div>