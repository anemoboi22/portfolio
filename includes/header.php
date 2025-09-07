<?php
if (!isset($title)) {
  $title = "Home";
}
$page = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title) ?> · Portfolio</title>
  <meta name="description" content="Modern developer portfolio built with PHP, Bootstrap, and vanilla JS.">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
  <header class="sticky-top bg-body-tertiary backdrop-blur border-bottom">
    <nav class="navbar navbar-expand-lg container py-2">
      <a class="navbar-brand fw-bold" href="./index.php">BM<span class="text-primary">.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
          <li class="nav-item"><a class="nav-link <?= $page === '/index.php' ? 'active' : '' ?>" href="./index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link <?= $page === '/about.php' ? 'active' : '' ?>" href="./about.php">About</a></li>
          <li class="nav-item"><a class="nav-link <?= $page === '/projects.php' ? 'active' : '' ?>" href="./projects.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link <?= $page === '/contact.php' ? 'active' : '' ?>" href="./contact.php">Contact</a></li>
          <li class="nav-item ms-lg-3">
            <button id="themeToggle" class="btn btn-sm btn-outline-secondary d-flex align-items-center" type="button" aria-label="Toggle dark mode">
              <i class="bi bi-moon-stars me-1" aria-hidden="true"></i><span class="d-none d-sm-inline">Theme</span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
  </header>