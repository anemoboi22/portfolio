<?php $title = "About";
include __DIR__ . "/includes/header.php"; ?>
<main class="py-5">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-lg-5">
        <img src="./assets/img/profile.jpg" class="img-fluid rounded-4 shadow-sm" alt="Profile">
      </div>
      <div class="col-lg-7">
        <h1 class="fw-bold mb-3">About Me</h1>
        <p class="lead text-secondary">I’m a web developer who loves building delightful UIs and scalable systems. My toolkit: PHP, Bootstrap, and modern JS. I focus on accessibility, performance, and clean code.</p>
        <div class="row g-3 mt-2">
          <div class="col-md-6">
            <div class="p-3 rounded-4 border bg-body-tertiary">
              <div class="small text-secondary">Experience</div>
              <div class="fw-semibold">Self study - 6 months</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 rounded-4 border bg-body-tertiary">
              <div class="small text-secondary">Location</div>
              <div class="fw-semibold">Cebu, PH</div>
            </div>
          </div>
        </div>
        <h2 class="h4 mt-4">Services</h2>
        <ul class="list-unstyled lh-lg">
          <li>• Responsive website development</li>
          <li>• CRUD apps with PHP/MySQL</li>
          <li>• Landing pages & SEO basics</li>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . "/includes/footer.php"; ?>