<?php
session_start();
$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // NOTE: Demo only — replace with real mailer like PHPMailer in production.
  $_SESSION['flash'] = "Thanks! Your message has been received.";
  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}
$title = "Contact";
include __DIR__ . "/includes/header.php";
?>
<main class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <h1 class="fw-bold mb-3">Let’s talk</h1>
        <p class="text-secondary">Have a project or opportunity? Send a quick message and I’ll get back to you.</p>
        <div class="vstack gap-2 small">
          <div><i class="bi bi-geo-alt me-2"></i>Cebu, Philippines</div>
          <div><i class="bi bi-envelope me-2"></i>benedictmondejar@gmail.com</div>
          <div><i class="bi bi-linkedin me-2"></i>janbenedictmondejar</div>
        </div>
      </div>
      <div class="col-lg-6">
        <?php if (!empty($_SESSION['flash'])): ?>
          <div class="alert alert-success rounded-4" role="alert">
            <?= $_SESSION['flash'];
            unset($_SESSION['flash']); ?>
          </div>
        <?php endif; ?>
        <form method="post" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            <div class="invalid-feedback">Please write a message.</div>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . "/includes/footer.php"; ?>