<!-- Login Screen -->
<div id="loginScreen" class="login-screen">
    <div class="login-card">
        <div class="login-card__header">
            <i class="fas fa-gamepad"></i>
            <h2>Admin Panel</h2>
        </div>
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert--error">
                <i class="fas fa-exclamation-circle"></i>
                <span><?= $_SESSION['error'] ?></span>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <form id="loginForm" action="<?= BASE_URL ?>/admin/authenticate" method="POST" class="login-form">
            <div class="form-group">
                <label for="username" class="form-label">
                    <i class="fas fa-user"></i> Username
                </label>
                <input type="text" id="username" name="username" class="form-input" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input type="password" id="password" name="password" class="form-input" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn--primary btn--full">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
    </div>
</div>