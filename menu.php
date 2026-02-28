<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Castronautes Coffee - Accueil</title>

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxanium:wght@200..800&display=swap" rel="stylesheet">

        <script>
            if (localStorage.getItem('theme') === 'night') {
                document.documentElement.setAttribute('data-theme', 'night');
            }
        </script>

        <!-- CSS files -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/overlay.css">
        <link rel="stylesheet" href="css/hero.css">
        <link rel="stylesheet" href="css/history.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/team.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/night-access.css">

        
        <!-- JS files -->
        <script src="js/script.js" defer></script>
        <script src="js/nav.js" defer></script>
        <script src="js/form.js" defer></script>
        <script src="js/overlay.js" defer></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    </head>
    <body>
        <?php include 'nav.php'; ?>

        <main>
            <!-- section titre -->
            <section class="hero hero--menu" aria-labelledby="menu-title">
                <div class="hero-content row">
                    <h4 class="menu-kicker">Station de ravitaillement — Secteur comestible</h4>
                    <h1 id="menu-title">Ravitaillement</h1>
                    <p class="hero-subtitle">Des boissons. Des snacks. Préparés avec soin, parfois avec quelques effets secondaires…</p>
                </div>
            </section>

            <nav class="menu-tabs" aria-label="Filtres du menu">
                <button type="button" class="menu-tab is-active" data-filter="all" aria-pressed="true">
                    Tout afficher
                </button>

                <button type="button" class="menu-tab" data-filter="drink" aria-pressed="false">
                    Cafés orbitaux
                </button>

                <button type="button" class="menu-tab" data-filter="snack" aria-pressed="false">
                    Snacks spatiaux
                </button>
            </nav>

            <section class="drink" data-section="drink">
                <div class="section-header">
                    <p>Des liquides non identifiés chauds ou froids</p>
                    <h2>Cafés orbitaux</h2>
                    <span class="section-badge" aria-label="Nombre de références">06 références</span>
                </div>
                <div class="menu-grid">

                    <div class="menu_card">
                        <img src="assets/menu/D1.png" alt="Tasse de café chaud posée sur une soucoupe, tenue par des gants d’astronaute, avec une mousse scintillante évoquant un ciel étoilé" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Latte “Nébuleuse Noisette”</span>
                                <span class="is-night" hidden>Artefact LTT-7</span>
                            </h3>
                            <p>Mousse épaisse, douceur noisette, légère poussière d’étoiles cacao.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Attachement émotionnel excessif à la tasse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/D2.png" alt="Tasse de café sur une soucoupe, avec une mousse multicolore en spirale évoquant une galaxie, sous un ciel étoilé aux aurores lumineuses" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Cappuccino “Aurore Boréale”</span>
                                <span class="is-night" hidden>Objet AUR-9</span>
                            </h3>
                            <p>Lait onctueux, contraste doux-amer, finale lumineuse.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Optimisme injustifié face à des situations complexes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/D3.png" alt="Tasse de café noir fumant sur une soucoupe, tenue par des gants d’astronaute, avec la Terre et une explosion lumineuse en arrière-plan" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Espresso “Impact de Comète”</span>
                                <span class="is-night" hidden>Substance IMP-1</span>
                            </h3>
                            <p>Court, intense, percutant, étonnamment réconfortant.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Prise de décision immédiate sans consultation préalable.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/D4.png" alt="Tasse de cappuccino sur une soucoupe, garnie de crème et de cacao, avec une éclipse solaire lumineuse en arrière-plan" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Mocha “Éclipse Chocolat”</span>
                                <span class="is-night" hidden>Référence MCK-6</span>
                            </h3>
                            <p>Cacao profond, café intense, obscurité rassurante.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Sensation de clarté mentale trompeuse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/D5.png" alt="Verre de café glacé avec des glaçons sur une soucoupe, tenu par des gants d’astronaute, dans un paysage glacé" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Cold Brew “Cryo-Rivière”</span>
                                <span class="is-night" hidden>Carburant CRYO-RIVER</span>
                            </h3>
                            <p>Infusion lente, fraîche, claire, mystérieusement efficace.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Ne pas secouer pendant l’hyper-saut.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/D6.png" alt="Tasse de café latte avec un motif en feuille sur la mousse, entourée d’un anneau lumineux doré évoquant une ambiance cosmique" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Flat White “Orbite Douce”</span>
                                <span class="is-night" hidden>Échantillon ORB-4</span>
                            </h3>
                            <p>Equilibre parfait, texture soyeuse, sensation de stabilité prolongée.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Impression erronée que tout est parfaitement maîtrisé.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="snack" data-section="snack">
                <div class="section-header">
                    <p>Des solides suspects</p>
                    <h2>Snacks spatiaux</h2>
                    <span class="section-badge" aria-label="Nombre de références">03 références</span>
                </div>
                <div class="menu-grid">

                    <div class="menu_card">
                        <img src="assets/menu/S1.png" alt="Cookie aux pépites de chocolat posé sur une surface sombre, avec des éclats lumineux évoquant des météorites" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Cookie “Astéroïde aux Pépites”</span>
                                <span class="is-night" hidden>Unité CR-UNCH-3</span>
                            </h3>
                            <p>Biscuit irrégulier, pépites généreuses, trajectoire imprévisible.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Envie irrépressible d’en reprendre “pour équilibrer”.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/S2.png" alt="Brownie au chocolat au cœur fondant sur une soucoupe, avec un effet de trou noir lumineux en arrière-plan" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Brownie “Trou Noir” Chocolat</span>
                                <span class="is-night" hidden>Dossier TNC-8</span>
                            </h3>
                            <p>Cœur fondant, chocolat dense, absorption totale de l’attention.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Perte temporaire de la notion du temps.</p>
                            </div>
                        </div>
                    </div>

                    <div class="menu_card">
                        <img src="assets/menu/S3.png" alt="Biscuit sablé saupoudré de sucre devant une tasse de café, avec un effet de spirale lumineuse" height="200">
                        <div class="card_content">
                            <h3 class="menu-name">
                                <span class="is-day">Sablé “Orbite Vanillée”</span>
                                <span class="is-night" hidden>Instance ORB-2-V</span>
                            </h3>
                            <p>Texture friable, douceur stable, rotation lente autour du café.</p>
                            <div class="risk">
                                <p><i class="fa-solid fa-radiation"></i>Peut s’effriter en orbite.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>