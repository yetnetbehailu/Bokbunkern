<?php

// Titel for the browser tab
$pageTitle = 'Böcker';

// Class for page-specific styling
$pageClass = 'books-page';

// Include header
require_once 'assets/includes/header.php';

// Connect to database
require_once 'assets/config/db.php';

// Fetch all books from the database
$sql = "SELECT * FROM books";
$stmt = $dbh->query($sql);
$books = $stmt->fetchAll();
?>

<!-- Anchor for scroll-to-top button -->
<div id="top"></div>

<main class="container books-container py-5">

  <!-- Search and filter section (frontend only, not connected to backend) -->
  <section class="my-4">
    <h2 class="visually-hidden">Search and filter</h2>
    <div class="search-section p-4 rounded-3">
      <div class="row g-3 align-items-end">

        <div class="col-12 col-md-8">
          <label for="searchInput" class="form-label">Sök efter böcker</label>
          <input type="text" id="searchInput" class="form-control" placeholder="Sök på titel eller författare...">
        </div>

        <div class="col-12 col-md-4">
          <label for="categoryFilter" class="form-label">Filtrera kategori</label>
          <select id="categoryFilter" class="form-select">
            <option value="alla">Alla kategorier</option>
            <option value="romantasy">romantasy</option>
            <option value="skräck">skräck</option>
            <option value="feelgood">feelgood</option>
            <option value="fantasy">fantasy</option>
            <option value="thriller">thriller</option>
            <option value="science fiction">science fiction</option>
          </select>
        </div>

      </div>
    </div>
  </section>



  <!-- Dynamically generated list of books from the database displayed using Bootstrap grid -->
  <section class="row row-cols-md-5 g-4 align-items-stretch book-grid">
    <h2 class="visually-hidden">Book list</h2>
    <?php if (!empty($books)): ?>

      <?php foreach ($books as $book): ?>
        <!-- Each book is displayed as a card with image, title, and description. The entire card is clickable and links to the detail page -->
        <div class="col d-flex">

          <a href="detail.php?id=<?= htmlspecialchars($book['id']) ?>" class="text-decoration-none w-100">

            <div class="card book-card h-100 w-100">

              <div class="ratio" style="--bs-aspect-ratio: 150%;">
                <img
                  src="<?= htmlspecialchars($book['image']) ?>"
                  alt="Omslag för <?= htmlspecialchars($book['title']) ?>"
                  class="w-100 h-100 object-fit-cover"
                  loading="lazy">
              </div>

              <div class="card-body d-flex flex-column">
                <h3 class="card-title h5"><?= htmlspecialchars($book['title']) ?></h3>
                <p class="author mb-2"><em><?= htmlspecialchars($book['author']) ?></em></p>
                <p class="card-text mb-0"><?= htmlspecialchars($book['description']) ?></p>
              </div>

            </div>

          </a>

        </div>
      <?php endforeach; ?>

    <?php else: ?>

      <div class="col-12">
        <p class="text-center">Inga böcker hittades.</p>
      </div>

    <?php endif; ?>

  </section>

</main>

<a href="#top" id="scrollTopBtn">
  <img src="assets/images/arrow_up_transparent.png" alt="Scrolla upp">
</a>

<?php

// Include footer
require_once 'assets/includes/footer.php';
?>