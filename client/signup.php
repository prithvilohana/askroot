<div class="container-small mt-4">
  <h2 class="text-center mb-4">Create Your Account</h2>

  <form action="./server/requests.php" method="POST" class="col-12 col-6 p-4" style="margin: 0 auto 48px;background: #fff;border: 1px solid #ccc;border-radius: 8px;">
    <div class="mb-2">
      <label for="username">Username</label><br>
      <input type="text" name="username" id="username" required="" class="form-input" placeholder="Enter your username">
    </div>

    <div class="mb-2">
      <label for="email">Email</label><br>
      <input type="email" name="email" id="email" required="" class="form-input" placeholder="Enter your email">
    </div>

    <div class="mb-2">
      <label for="password">Password</label><br>
      <input type="password" name="password" id="password" required="" class="form-input" placeholder="Create a password">
</div>

    <div class="text-center mt-4">
      <button type="submit" name="signup" class="btn-primary">Sign Up</button>
    </div>

    <p class="text-center mt-2">Already have an account? <a href="?login=true">Login here</a></p>
  </form>
</div>
