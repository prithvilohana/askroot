<nav>
    <div class="container d-flex justify-between align-center">
        <div class="logo"> <a class="navbar-brand" href="./"> <img src="./public/images/logo.webp" alt="Logo" style="width: 140px;" /></a>
        </div>

        <div class="menu-toggle" id="menuToggle" style="font-size: 1.5rem; cursor: pointer; display: none;">
            &#9776;
        </div>

        <div class="nav-links d-flex align-center" id="navLinks" style="gap: 1.5rem;">
            <a href="./">Home</a>
            <a href="?categories=true">Categories</a>
            <a href="?latest=true">Latest Questions</a>
            <?php if (isset($_SESSION['user']) && isset($_SESSION['user']['user_id'])): ?>
                <a href="?u-id=<?php echo htmlspecialchars($_SESSION['user']['user_id']); ?>">My Questions</a>
            <?php endif; ?>
            <?php if (isset($_SESSION['user']['username'])) {
                $username = ucfirst(htmlspecialchars($_SESSION['user']['username']));
                $short = strlen($username) > 10 ? substr($username, 0, 10) . '...' : $username;
            ?>
                <a href="?ask=true">Ask Question</a>
                <a href="./server/requests.php?logout=true">Logout (<?= $short ?>)</a>
            <?php } else { ?>
                <a href="?login=true">Login</a>
                <a href="?signup=true">Signup</a>
            <?php } ?>
            <form method="GET" class="search-form d-flex align-center">
                <input type="text" name="q" placeholder="Search..." class="search-input" required>
                <button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
    </div>
</nav>

<script>
    const toggle = document.getElementById("menuToggle");
    const links = document.getElementById("navLinks");

    toggle.addEventListener("click", () => {
        links.classList.toggle("active");
    });
</script>