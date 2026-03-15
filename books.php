<?php

$pageClass = 'books-page';

// include header and navigation
require_once 'assets/includes/header.php';

echo "Databasuppkoppling fungerar hehehhe!";

?>


<main class="container">
 
  <!-- Search and filter -->
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


  <!-- bilder -->
  <section class="row row-cols-md-5 g-4 align-items-stretch book-grid">
    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/acotar.jpg" class="w-100 h-100 object-fit-container" alt="Skräck">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">A court of thornes and roses</h5>
          <p class="card-text mb-0">Fantasy om kärlek, förbannelser och farliga fae.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/alchemised.jpg" class="w-100 h-100 object-fit-cover" alt="Skräck">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Alchemised</h5>
          <p class="card-text mb-0">Mörk fantasy om en kvinna gjord till ett vapen som försöker återta sin frihet.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/babel.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Babel</h5>
          <p class="card-text mb-0">Dark academia om språk, makt och revolution.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/frankenstein.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Frankenstein</h5>
          <p class="card-text mb-0">En forskare skapar ett monster och måste leva med konsekvenserna.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/glas.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Doktor Glas</h5>
          <p class="card-text mb-0">En läkare överväger mord för att göra det rätta.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/harrypotter.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Harry Potter</h5>
          <p class="card-text mb-0">En pojke som upptäcker att han är en magiker och går till en skola för magiker.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/körsbär.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Bokhandeln under körsbärsträdet</h5>
          <p class="card-text mb-0">En bibliotekarie hjälper människor hitta rätt i livet genom böcker.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/mary.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Project Hail Mary</h5>
          <p class="card-text mb-0">En ensam astronaut måste rädda jorden.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/moon.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">When the Moon Hatched</h5>
          <p class="card-text mb-0">Fantasy om drakar, magi och förbjuden kärlek.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/mörkare.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Så du vill ha det mörkare</h5>
          <p class="card-text mb-0">Mörka berättelser om det skrämmande i vardagen.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/odin.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Odinsbarn</h5>
          <p class="card-text mb-0">Nordisk fantasy om identitet, makt och hemligheter.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/ot.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">A Game of Thrones</h5>
          <p class="card-text mb-0">Fantasy om maktkamp, intriger och kampen om tronen.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/prejudice.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Pride and Prejudice</h5>
          <p class="card-text mb-0">En klassisk romantikberättelse om kärlek och fördomar.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/pumpkin.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">The Pumpkin Spice Café</h5>
          <p class="card-text mb-0">En mysig småstadsromans i ett höstigt café.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/resturang.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">The Kamogawa Food Detectives</h5>
          <p class="card-text mb-0">En restaurang som återskapar människors minnesvärda måltider.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/rings.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">The Lord of the Rings</h5>
          <p class="card-text mb-0">En episk fantasyberättelse om kampen mot mörker.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/rygga.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Rygga inte undan</h5>
          <p class="card-text mb-0">En thriller om ett dödligt hot som måste stoppas i tid.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/silver.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Quicksilver</h5>
          <p class="card-text mb-0">Mörk romantasy om makt, magi och farlig kärlek.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/spellshop.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">The Spell Shop</h5>
          <p class="card-text mb-0">En magisk butik där magi och mysterier väntar.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/spricktand.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Spricktand</h5>
          <p class="card-text mb-0">En mörk uppväxtskildring i Arktis med inslag av myt och andlighet.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/sunrise.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Sunrise on the Reaping</h5>
          <p class="card-text mb-0">En kamp på liv och död i Hungerspelen.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/tart.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Tart</h5>
          <p class="card-text mb-0">En tonåring navigerar skandal, vänskap och att hitta sin identitet.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/wing.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Fourth wing</h5>
          <p class="card-text mb-0">Fantasy om drakar, överlevnad och farliga allianser.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/wuthering.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Wuthering Heights</h5>
          <p class="card-text mb-0">En klassisk romantik om kärlek, räddning och försoning.</p>
        </div>
      </div>
    </div>

    <div class="col d-flex">
      <div class="card h-100 w-100">
        <div class="ratio" style="--bs-aspect-ratio: 150%;">
          <img src="assets/images/yellow.jpg" class="w-100 h-100 object-fit-cover" alt="Romantasy">
        </div>
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Yellowface</h5>
          <p class="card-text mb-0">En satirisk thriller om stöld, identitet och litterär framgång.</p>
        </div>
      </div>
    </div>


  </section>
</main>

<?php
require_once 'assets/includes/footer.php';
?>