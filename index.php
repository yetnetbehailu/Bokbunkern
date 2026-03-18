<?php
// Include header
require_once 'assets/includes/header.php';
?>

<main>
    <section class="hero-bg container-fluid">
        <div class="container hero-content">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-text text-center">
                        <h1>En bok är bättre när den diskuteras</h1>
                        <p>Bokbunkern samlar läsare som vill upptäcka nya böcker,
                            delta i livliga forumdiskussioner och hitta en gemenskap
                            bland andra bokälskare.
                        </p>
                        <a href="#" class="btn btn-explore-books">Utforska böcker</a>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="col-md-6">
                    <div class="book-carousel">

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--  -->
    <section class="bokbunkern-activities">
        <div class="container">
            <div class="row gx-5 align-items-stretch">

                <div class="col-md-5">
                    <div class="info-card">
                        <h2 class="mb-2">Därför trivs våra medlemmar</h2>
                        <ul>
                            <li><i class="fa-regular fa-face-grin-hearts me-2 fs-5"></i>Få personliga bokrekommendationer</li>
                            <li><i class="fa-regular fa-comments me-2 fs-5"></i>Gå med i diskussionsforum</li>
                            <li><i class="fa-regular fa-flag me-2 fs-5"></i>Följ läsutmaningar</li>
                            <li><i class="fa-regular fa-calendar-check me-2 fs-5"></i></i>Delta i våra klubbevent</li>
                            <li><i class="fa-solid fa-bullhorn me-2 fs-5"></i>Var med och forma bokklubben</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="info-card">
                        <h2 class="mb-2">Utforska forumet</h2>
                        <div class="d-flex align-items-center gap-3">
                            <div>
                                <p class="mb-2">
                                    Din plats för bokdiskussioner och gemenskap. Välj forum för boken du vill läsa,
                                    följ kategorier du gillar och dela dina tankar. Upptäck nya perspektiv och var med
                                    och rösta fram nästa månads läsning.
                                </p>
                                <a href="#" class="explore-link">
                                    <img src="assets/images/explore-arrow.png" class="explore-arrow" alt="">
                                </a>
                            </div>
                            <img src="assets/images/explore-forum.png" class="explore-forum-img" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- -->
    <section class="newsletter-content">
        <form class="container">
            <h2 class="mb-2">Få boktips direkt i inkorgen</h2>
            <p class="mb-2">
                Följ allt som händer — bara det bästa från bokklubben.
            </p>
            <div class="newsletter-row mb-2 d-flex">
                <input type="email" class="form-control" id="newsletter-email"
                    placeholder="Din e‑postadress" aria-label="Din e‑postadress" aria-describedby="emailHelp">
                <button type="submit" class="btn btn-newsletter">
                    Gå med
                </button>
            </div>
            <div id="emailHelp" class="form-text">
                Vi delar aldrig din e‑postadress med någon annan.
            </div>
        </form>
    </section>


</main>
<?php
// Include footer
require_once 'assets/includes/footer.php';
?>