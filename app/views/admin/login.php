<!-- Login Screen -->
<div id="loginScreen" class="login-screen">
    <div class="login-card">
        <div class="login-card__header">
            <i class="fas fa-gamepad"></i>
            <h2>Admin Panel</h2>
        </div>
        <form id="loginForm" class="login-form">
            <div class="form-group">
                <label for="username" class="form-label">
                    <i class="fas fa-user"></i> Username
                </label>
                <input type="text" id="username" class="form-input" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input type="password" id="password" class="form-input" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn--primary btn--full">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>
    </div>
</div>