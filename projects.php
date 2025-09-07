<?php $title = "Projects";
include __DIR__ . "/includes/header.php"; ?>
<main class="py-5">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between mb-4">
      <div>
        <h1 class="fw-bold">Projects</h1>
        <p class="text-secondary m-0">Filter by category and explore details.</p>
      </div>
      <div class="d-flex gap-2">
        <input id="search" type="search" class="form-control" placeholder="Search projects...">
        <select id="filter" class="form-select" style="max-width: 200px;">
          <option value="all" selected>All</option>
          <option value="php">PHP</option>
          <option value="c#">C#</option>
          <option value="frontend">Front‑End</option>
          <option value="fullstack">Full‑Stack</option>
          <option value="mobiledev">Mobile Development</option>
        </select>
      </div>
    </div>

    <div id="projectsGrid" class="row g-4"></div>
  </div>
</main>
<script>
  // Projects data (could be fetched from an API)
  window.PORTFOLIO_PROJECTS = [{
      title: "My Portfolio",
      tags: ["frontend"],
      img: "./assets/img/project-1.jpg",
      link: "https://github.com/anemoboi22/portfolio",
      desc: "A PHP Portfolio."
    },
    {
      title: "PAPOY",
      tags: ["fullstack", "php"],
      img: "./assets/img/project-2.jpg",
      link: "https://github.com/anemoboi22/PAPOY",
      desc: "CRUD web app with PHP + MySQL."
    },
    {
      title: "Lost and Found Tracker",
      tags: ["c#", "mobiledev"],
      img: "./assets/img/project-3.jpg",
      link: "https://github.com/anemoboi22/Lost-and-Found-Tracker",
      desc: "A tracker for lost items."
    }
  ];
</script>
<?php include __DIR__ . "/includes/footer.php"; ?>