<?php
// ==============================
// PAGE SETUP
// ==============================

// Titel for the browser tab
$pageTitle = 'Böcker';

// Class for page-specific styling
$pageClass = 'books-page';

// Include header
require_once 'assets/includes/header.php';

// Connect to database
require_once 'assets/config/db.php';

// ==============================
// FETCH BOOKS FROM DATABASE
// ==============================

$sql = "SELECT * FROM books";
$stmt = $dbh->query($sql);
$books = $stmt->fetchAll();
?>

<!-- ============================== -->
<!-- MAIN CONTENT -->
<!-- ============================== -->
<main class="container">

  <!-- ============================== -->
  <!-- SEARCH & FILTER -->
  <!-- ============================== -->
  <section class="my-4">
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

  <!-- ============================== -->
  <!-- BOOK LIST -->
  <!-- ============================== -->
  <section class="row row-cols-md-5 g-4 align-items-stretch book-grid">

    <?php foreach ($books as $book): ?>

      <div class="col d-flex">
        <div class="card book-card h-100 w-100">

          <div class="ratio" style="--bs-aspect-ratio: 150%;">
            <img src="<?= $book['image'] ?>" class="w-100 h-100 object-fit-cover">
          </div>

          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $book['title'] ?></h5>
            <p class="card-text mb-0"><?= $book['description'] ?></p>
          </div>

        </div>
      </div>

    <?php endforeach; ?>

  </section>

</main>

<?php
// ==============================
// FOOTER
// ==============================
require_once 'assets/includes/footer.php';
?>