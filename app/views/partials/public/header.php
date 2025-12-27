<?php
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


$basePath = trim(parse_url(BASE_URL, PHP_URL_PATH), '/');
if ($basePath && strpos($currentPath, $basePath) === 0) {
    $currentPath = trim(substr($currentPath, strlen($basePath)), '/');
}

if ($currentPath === '') {
    $currentPath = '/';
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamingRec - Sistem Rekomendasi Perangkat Gaming</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/fontawesome/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <header class="header">
        <nav class="nav">
            <div class="nav__logo">
                <i class="fas fa-gamepad"></i>
                <span>GamingRec</span>
            </div>
            <ul class="nav__menu">
                <li>
                    <a href="<?= BASE_URL ?>/"
                    class="nav__link <?= $currentPath === '/' ? 'nav__link--active' : '' ?>">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="<?= BASE_URL ?>/rekomendasi"
                    class="nav__link <?= $currentPath === 'rekomendasi' ? 'nav__link--active' : '' ?>">
                        Rekomendasi
                    </a>
                </li>

                <li>
                    <a href="<?= BASE_URL ?>/about"
                    class="nav__link <?= $currentPath === 'about' ? 'nav__link--active' : '' ?>">
                        Tentang
                    </a>
                </li>
            </ul>
            <button class="nav__toggle" id="navToggle">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>