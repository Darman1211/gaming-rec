<?php

$dashboardActive = !isset($_GET['page']) || isset($_GET['page']) && $_GET['page'] == 'dashboard';
$inputActive = isset($_GET['page']) && $_GET['page'] == 'input_kriteria';
$outputActive = isset($_GET['page']) && $_GET['page'] == 'output_kriteria';
$outputActive = isset($_GET['page']) && $_GET['page'] == 'output_kriteria';
$opsiInputActive = isset($_GET['page']) && $_GET['page'] == 'opsi_input';
$matriksActive = isset($_GET['page']) && $_GET['page'] == 'matriks_input_output';
$hasilActive = isset($_GET['page']) && $_GET['page'] == 'hasil_rekomendasi';
$ujiActive = isset($_GET['page']) && $_GET['page'] == 'uji_rekomendasi';

?>

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
            <li class="<?= $dashboardActive ? 'active' : '' ?>">
                <a href="?page=dashboard">
                    <i class="fas fa-chart-line"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <span class="menu-section-name">Master Data</span>
            <li class="<?= $inputActive ? 'active' : '' ?>">
                <a href="?page=input_kriteria">
                    <i class="fas fa-database"></i>
                    <span>Input Kriteria</span>
                </a>
            </li>
            <li class="<?= $outputActive ? 'active' : '' ?>">
                <a href="?page=output_kriteria">
                    <i class="fas fa-cogs"></i>
                    <span>Output Kriteria</span>
                </a>
            </li>

            <span class="menu-section-name">Konfigurasi Input</span>
            <li class="<?= $opsiInputActive ? 'active' : '' ?>">
                <a href="?page=opsi_input">
                    <i class="fas fa-database"></i>
                    <span>Opsi Input</span>
                </a>
            </li>

            <span class="menu-section-name">Aturan Rekomendasi</span>
            <li class="<?= $matriksActive ? 'active' : '' ?>">
                <a href="?page=matriks_input_output">
                    <i class="fas fa-database"></i>
                    <span>Matriks Input-Output</span>
                </a>
            </li>

            <span class="menu-section-name">Konfigurasi Output</span>
            <li class="<?= $hasilActive ? 'active' : '' ?>">
                <a href="?page=hasil_rekomendasi">
                    <i class="fas fa-database"></i>
                    <span>Hasil Rekomendasi</span>
                </a>
            </li>

            <span class="menu-section-name">Simulasi</span>
            <li class="<?= $ujiActive ? 'active' : '' ?>">
                <a href="?page=uji_rekomendasi">
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
        <div class="admin-header">
            <h1>Dashboard</h1>
            <p>Selamat datang di Admin Panel GamingRec</p>
        </div>

        <!-- CONTENT -->
        <div class="admin-content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 'dashboard';
            }
            
            switch ($page) {
                case 'dashboard':
                    include 'content/dashboard.php';
                    break;
                case 'input_kriteria':
                    include 'content/input_kriteria.php';
                    break;
                case 'output_kriteria':
                    include 'content/output_kriteria.php';
                    break;
                case 'opsi_input':
                    include 'content/opsi_input.php';
                    break;
                case 'matriks_input_output':
                    include 'content/matriks_input_output.php';
                    break;
                case 'hasil_rekomendasi':
                    include 'content/hasil_rekomendasi.php';
                    break;
                case 'uji_rekomendasi':
                    include 'content/uji_rekomendasi.php';
                    break;
                default:
                    include 'content/dashboard.php';
                    break;
            }
            ?>
        </div>
    </main>
</div>
