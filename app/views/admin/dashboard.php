<div class="admin-dashboard">
    <!-- SIDEBAR -->
    <aside class="admin-sidebar">
        <div class="sidebar-logo">
            <i class="fas fa-gamepad"></i>
            <span>GamingRec</span>
        </div>

        <div class="border-styled"></div>

        <ul class="sidebar-menu">
            <span class="menu-section-name">Dashboard</span>
            <li>
                <a href="<?= BASE_URL ?>/admin/dashboard">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <span class="menu-section-name">Master Data</span>
            <li class="active">
                <a href="#">
                    <i class="fas fa-database"></i>
                    <span>Input Kriteria</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cogs"></i>
                    <span>Output Kriteria</span>
                </a>
            </li>

            <span class="menu-section-name">Konfigurasi Input</span>
            <li>
                <a href="#">
                    <i class="fas fa-database"></i>
                    <span>Opsi Input</span>
                </a>
            </li>

            <span class="menu-section-name">Aturan Rekomendasi</span>
            <li>
                <a href="#">
                    <i class="fas fa-database"></i>
                    <span>Matriks Input-Output</span>
                </a>
            </li>

            <span class="menu-section-name">Konfigurasi Output</span>
            <li>
                <a href="#">
                    <i class="fas fa-database"></i>
                    <span>Hasil Rekomendasi</span>
                </a>
            </li>

            <span class="menu-section-name">Simulasi</span>
            <li>
                <a href="#">
                    <i class="fas fa-database"></i>
                    <span>Uji Rekomendasi</span>
                </a>
            </li>
            
            <div class="border-styled"></div>

            <li>
                <a href="<?= BASE_URL ?>/admin/logout" onclick="return confirm('Apakah Anda yakin ingin logout?')">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="admin-main">

        <!-- HEADER -->
        <div class="admin-header">
            <h1>Dashboard</h1>
            <p>Selamat datang di Admin Panel GamingRec</p>
        </div>

        <!-- CONTENT -->
        <div class="admin-content">

            <!-- STAT CARDS -->
            <div class="admin-cards">
                <div class="card">
                    <h3>Total Produk</h3>
                    <p class="card-number">0</p>
                </div>

                <div class="card">
                    <h3>Total Kriteria</h3>
                    <p class="card-number">0</p>
                </div>

                <div class="card">
                    <h3>Total Rule</h3>
                    <p class="card-number">0</p>
                </div>
            </div>

            <!-- SECTION -->
            <section class="admin-section">
                <h2>Informasi</h2>
                <p>
                    Halaman ini merupakan dashboard admin.  
                    Data statistik akan ditampilkan setelah integrasi database.
                </p>
            </section>

        </div>
    </main>

</div>
