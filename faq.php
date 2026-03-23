<?php

// Include header
require_once 'assets/includes/header.php';
?>

<main class="mb-4">
    <!-- Start of FAQ page -->
    <div class="mt-5 p-3 bg-cust2 rounded border-cust container">
        <div class="text-center">
            <h1>Vanliga frågor (FAQ)</h1>
        </div>

        <div class="px-5">
            <h4 class="text-center px-5">
                Här hittar du svar på vanliga frågor om vår bokklubb. Om du inte hittar det du söker, tveka inte att kontakta oss!
            </h4><br>

            <!-- FAQ section -->
            <div class="d-flex flex-column gap-3 m-3 pb-5">

                <div class="btn-group">
                    <button class="btn dropdown-color dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hur fungerar bokklubben?
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item">I vår bokklubb har man möjllighet att rösta fram månadens bok, man kan diskutera specifika böcker med andra och man kan hitta nästa läsning!</p>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn dropdown-color dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vart röstar man på månadens bok?
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item">Detta gör man på forum sidan!</p>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn dropdown-color dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vart hittar jag boktips?
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item">På bok sidan!</p>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <button class="btn dropdown-color dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Vart kan jag diskutera böcker?
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item">Om du går in på forum sidan och klickar på den boken du vill diskutera så kommer en kort beskrivning av boken samt ett kommentars fält upp. Dela dina åsikter och hitta likasinnade!.</p>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</main>

<?php
// Include footer
require_once 'assets/includes/footer.php';
?>