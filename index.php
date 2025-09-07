<?php $title = "Home";
include __DIR__ . "/includes/header.php"; ?>

<main>
  <!-- Hero -->
  <section class="py-5 py-lg-6 position-relative overflow-hidden">
    <div class="container position-relative">
      <div class="row align-items-center g-5">
        <div class="col-lg-6 order-lg-1">
          <h1 class="display-5 fw-bold lh-1 mb-3">Hello, I’m <span class="text-primary">Jan Benedict</span> — Web Developer</h1>
          <p class="lead text-secondary">I craft responsive, accessible web experiences with PHP, Bootstrap, and modern JavaScript.</p>
          <div class="d-flex gap-3">
            <a href="./projects.php" class="btn btn-primary btn-lg px-4">View Projects</a>
            <a href="./assets/Resume.pdf" class="btn btn-outline-primary btn-lg px-4" target="_blank">Download CV</a>
          </div>
          <div class="mt-4 d-flex align-items-center gap-3 small text-secondary">
            <i class="bi bi-geo-alt"></i><span>Cebu, Philippines</span>
            <i class="bi bi-circle-fill dot-sep"></i>
            <span>Open to work</span>
          </div>
        </div>
        <div class="col-lg-6 order-lg-2">
          <div class="hero-card shadow-lg rounded-4 p-2 bg-body-secondary">
            <img src="./assets/img/profile.jpg" alt="Profile illustration" class="img-fluid rounded-4">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills -->
  <section class="py-5 border-top">
    <div class="container">
      <div class="row mb-4">
        <div class="col-lg-8">
          <h2 class="h1 fw-bold">Core Skills</h2>
          <p class="text-secondary">What I use to build fast, maintainable experiences.</p>
        </div>
      </div>
      <div class="row g-3 g-lg-4 row-cols-2 row-cols-md-3 row-cols-lg-6">
        <?php
        $skills = [
          ["bi bi-bootstrap", "Bootstrap 5"],
          ["bi bi-filetype-php", "PHP 8"],
          ["bi bi-code-slash", "JavaScript"],
          ["bi bi-braces", "HTML5"],
          ["bi bi-filetype-css", "CSS3"],
          ["bi bi-git", "Git"]
        ];
        foreach ($skills as $s):
        ?>
          <div class="col">
            <div class="card card-skill h-100 text-center p-3 shadow-sm rounded-4">
              <i class="<?= $s[0] ?> fs-2"></i>
              <div class="mt-2 fw-semibold"><?= htmlspecialchars($s[1]) ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Featured Projects -->
  <section class="py-5 border-top">
    <div class="container">
      <div class="d-flex align-items-end justify-content-between mb-3">
        <div>
          <h2 class="h1 fw-bold">Featured Projects</h2>
          <p class="text-secondary">A snapshot of things I’m proud of.</p>
        </div>
        <a class="btn btn-outline-secondary" href="./projects.php">See all</a>
      </div>

      <div class="row g-4">
        <?php
        $projects = [
          ["My Portfolio", "A PHP Portfolio.", "./assets/img/project-1.jpg", "https://github.com/anemoboi22/portfolio"],
          ["PAPOY", "CRUD web app using PHP + MySQL + Fetch API.", "./assets/img/project-2.jpg", "https://github.com/anemoboi22/PAPOY"],
          ["Lost and Found Tracker", "A tracker for lost items.", "./assets/img/project-3.jpg", "https://github.com/anemoboi22/Lost-and-Found-Tracker"]
        ];
        foreach ($projects as $p):
        ?>
          <div class="col-md-6 col-lg-4">
            <article class="card h-100 project-card shadow-sm rounded-4 overflow-hidden">
              <img src="<?= $p[2] ?>" class="card-img-top" alt="<?= htmlspecialchars($p[0]) ?>">
              <div class="card-body">
                <h3 class="h5 card-title"><?= htmlspecialchars($p[0]) ?></h3>
                <p class="card-text text-secondary"><?= htmlspecialchars($p[1]) ?></p>
                <a class="stretched-link" href="<?= $p[3] ?>" target="_blank" aria-label="View on GitHub"></a>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-5 border-top">
    <div class="container">
      <div class="rounded-4 p-4 p-lg-5 bg-primary-subtle d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
        <div>
          <h2 class="h3 fw-bold mb-1">Have a project in mind?</h2>
          <p class="m-0 text-secondary">Let’s build something great together.</p>
        </div>
        <a href="./contact.php" class="btn btn-primary btn-lg">Contact Me</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . "/includes/footer.php"; ?>