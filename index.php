<?php
// Include header
require_once 'assets/includes/header.php';
?>
<?php
// Check if an action parameter exists in the URL
if (isset($_GET['action'])) {

    // Display message based on action value
    switch ($_GET['action']) {

        case 'empty':
            // Show warning if fields are empty
            echo '
            <div class="d-flex justify-content-center mt-3">
                <div class="alert alert-warning text-center" style="max-width: 500px; width: 100%;">
                    Fyll i både e-post och lösenord!
                </div>
            </div>
            ';
            break;

        case 'error':
            // Show error if login is incorrect
            echo '
            <div class="d-flex justify-content-center mt-3">
                <div class="alert alert-danger text-center" style="max-width: 500px; width: 100%;">
                    Fel e-post eller lösenord!
                </div>
            </div>
            ';
            break;

        case 'logout':
            // Show message when user logs out
            echo '
            <div class="d-flex justify-content-center mt-3">
                <div class="alert alert-info text-center" style="max-width: 500px; width: 100%;">
                    Du har loggats ut.
                </div>
            </div>
            ';
            break;
    }
}
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
                        <a href="books.php" class="btn btn-explore-books">Utforska böcker</a>
                    </div>
                </div>

                <!-- Carousel -->
                <div class="col-md-6 d-flex justify-content-center pe-5">
                    <div class="book-carousel">
                        <img src="assets/images/rygga-inte-undan.webp" alt="Bokomslaget till 'Rygga inte undan'" class="book-card-hero">
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
                                    <img src="assets/images/explore-arrow.png" class="explore-arrow" alt="Purple right-arrow">
                                </a>
                            </div>
                            <img src="assets/images/explore-forum.png" class="explore-forum-img" alt="Illustration av personer som sitter och står vid en hög böcker medan de läser">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- -->
    <section class="newsletter-content">
        <form class="container" method="POST" action="assets/includes/newsletter_subscription.php">
            <h3 class="mb-2">Få boktips direkt i inkorgen</h3>
            <p class="mb-2">
                Följ allt som händer — bara det bästa från bokklubben.
            </p>
            <div class="newsletter-row mb-2 d-flex">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
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

    <!--  -->
    <section class="container-fluid visual-guide">
        <h2 class="text-center">Så funkar bokklubben</h2>
        <ol class="d-flex instructions">
            <li>
                <img src="assets/images/join.svg" alt="Illustration av en person som registrerar sig som medlem">
                <h3>Bli medlem</h3>
                <p>Registrera dig snabbt och enkelt</p>
            </li>
            <li>
                <img src="assets/images/choose-book.svg" alt="Illustration av en person som väljer en bok att läsa">
                <h3>Välj bok</h3>
                <p>Hitta något nytt att läsa varje månad</p>
            </li>
            <li>
                <img src="assets/images/community.svg" alt="Illustration av personer som diskuterar och delar tankar i en bokklubb">
                <h3>Diskutera</h3>
                <p>Dela dina tankar med andra medlemmar</p>
            </li>
        </ol>
    </section>

    <!-- -->
    <section class="member-reviews">
        <h2 class="text-center">Vad våra medlemmar tycker</h2>
        <div class="reviews-carousel">
            <div class="review-card">
                <div class="review-header">
                    <img src="assets/images/profile1.webp" alt="Profilbild" class="review-avatar">
                    <span class="review-name">Ahmed Mo</span>
                </div>

                <p class="review-text">
                    Jag har aldrig känt mig så välkommen i en bokklubb.
                    Diskussionerna här gör varje bok dubbelt så bra.
                </p>

                <div class="review-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <img src="assets/images/profile2.jpg" alt="Profilbild" class="review-avatar">
                    <span class="review-name">Rosa Gonzales</span>
                </div>

                <p class="review-text">
                    Det bästa är gemenskapen — man hittar alltid någon som läser samma sak och vill prata om det.
                </p>

                <div class="review-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

            <div class="review-card">
                <div class="review-header">
                    <img src="assets/images/profile3.webp" alt="Profilbild" class="review-avatar">
                    <span class="review-name">Zenit Beyene</span>
                </div>

                <p class="review-text">
                    Bokbunkern har fått mig att läsa mer, tänka mer och
                    upptäcka böcker jag aldrig hade hittat själv.
                </p>

                <div class="review-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
    </section>

</main>
<?php
// Include footer
require_once 'assets/includes/footer.php';
?>