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
        <link rel="stylesheet" href="css/hero.css">
        <link rel="stylesheet" href="css/history.css">
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/team.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/night-access.css">
        <link rel="stylesheet" href="css/overlay.css">
        <link rel="stylesheet" href="css/responsive.css">

        
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
            <!-- SECTION : ÉQUIPE -->
            <section class="team" id="equipe">

                <section class="hero hero--team" aria-labelledby="menu-title">
                    <div class="hero-content row">
                        <h4 class="contact-kicker">Station de ravitaillement — Secteur comestible</h4>
                        <h1 id="contact-title">L’Équip(age) & Le Bureau Des Plaintes</h1>
                        <p class="contact-subtitle">Ils sont à l’origine du café, de l’ambiance et d’un certain nombre d’initiatives difficiles à expliquer.</p>
                    </div>
                </section>

                <div class="section-header">
                    <p>Des profils variés. Des compétences discutables. Une loyauté relative.</p>
                    <h2>Les Responsables</h2>
                    <span class="section-badge">(Théoriquement)</span>
                </div>

                <div class="cards">
                    <!-- Card 1 -->
                    <div class="card">
                        <img class="card-img is-day" src="assets/crew/castor1.webp" alt="Castor astronaute souriant devant le Castronaute Coffee, en combinaison spatiale blanche, ambiance chaleureuse et café ouvert en arrière-plan" height="200"/>
                        <img class="card-img is-night" src="assets/crew/castor1_N.webp" alt="Castor astronaute en uniforme sombre avec casque et étoiles, devant le Castronaute Coffee éclairé sous un ciel nocturne étoilé" hidden height="200"/>
                        <div class="card-content">
                            <h3 class="card-name">
                                <span class="is-day">Écorce</span>
                                <span class="is-night" hidden>AGENT ÉC-01</span>
                            </h3>
                            <p>« A juré fidélité à la cuillère en bois »</p>
                            <p class="card-desc">
                                <span class="is-day">Spécialiste des constructions lentes, des décisions assumées trop tard et des idées notées sur des bouts de bois.</span>
                                <span class="is-night" hidden>Superviser les opérations discrètes et maintenir l’illusion que tout est sous contrôle, même quand ce n’est clairement pas le cas.</span>
                            </p>
                            <p class="card-like">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-like.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-like-night.webp" alt="" hidden>
                                </span>Adore : Collectionner les cuillères en bois, le silence et le café encore brûlant.
                            </p>
                            <p class="card-unlike">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-unlike.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-unlike-night.webp" alt="" hidden>
                                </span>Déteste : les réunions sans ordre du jour et les phrases qui commencent par “normalement”.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card">
                        <img class="card-img is-day" src="assets/crew/castor2.webp" alt="Castor astronaute souriant dans l’intérieur chaleureux du Castronaute Coffee, en combinaison spatiale claire devant le comptoir et les lampes suspendues" height="200"/>
                        <img class="card-img is-night" src="assets/crew/castor2_N.webp" alt="Castor astronaute souriant avec ceinture à outils et casque fermé, dans le Castronaute Coffee éclairé, prêt pour des opérations nocturnes" hidden height="200"/>
                        <div class="card-content">
                            <h3 class="card-name">
                                <span class="is-day">Sciure</span>
                                <span class="is-night" hidden>AGENT SR-17</span>
                            </h3>
                            <p>« Répare des équipements avant qu’ils ne tombent en panne »</p>
                            <p class="card-desc">
                                <span class="is-day">Responsable des barrages, de la torréfaction et de la plupart des réparations qui n’auraient pas dû fonctionner.</span>
                                <span class="is-night" hidden>Maintenir la station opérationnelle à l’aide de matériaux non homologués et empêcher l’effondrement total avant le lever du jour.</span>
                            </p>
                            <p class="card-like">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-like.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-like-night.webp" alt="" hidden>
                                </span>Adore : Réparer presque tout avec des cure-dents, le bois brut et les machines capricieuses.
                            </p>
                            <p class="card-unlike">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-unlike.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-unlike-night.webp" alt="" hidden>
                                </span>Déteste : les notices et les boutons qui font bip sans raison.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="card">
                        <img class="card-img is-day" src="assets/crew/castor3.webp" alt="Castor astronaute souriant levant la main en signe de salut dans l’intérieur chaleureux du Castronaute Coffee" height="200"/>
                        <img class="card-img is-night" src="assets/crew/castor3_N.webp" alt="Castor astronaute souriant avec deux réservoirs de café fixés à son casque, dans l’intérieur chaleureux du Castronaute Coffee" hidden height="200"/>
                        <div class="card-content">
                            <h3 class="card-name">
                                <span class="is-day">Moka</span>
                                <span class="is-night" hidden>AGENT MK-42</span>
                            </h3>
                            <p>« J’ai une tasse, donc j’ai l’autorité (ou pas) »</p>
                            <p class="card-desc">
                                <span class="is-day">Chargé de tester les cafés à toute heure de la journée, même quand ce n’est pas nécessaire.</span>
                                <span class="is-night" hidden>Parcourir l’univers à la recherche des pilleurs de café, des grains disparus et des civilisations qui boivent encore du décaféiné.</span>
                            </p>
                            <p class="card-like">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-like.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-like-night.webp" alt="" hidden>
                                </span>Adore : Goûter sans raison valable, partir sans itinéraire et revenir avec une tasse différente.
                            </p>
                            <p class="card-unlike">
                                <span class="card-icon">
                                    <img class="is-day" src="assets/icon/Castor-unlike.webp" alt="" aria-hidden="true">
                                    <img class="is-night" src="assets/icon/Castor-unlike-night.webp" alt="" hidden>
                                </span>Déteste : Le décaféiné, rentrer trop tôt et expliquer où il était.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECTION : CONTACT -->
            <section class="contact" id="contact">
                <canvas class="contact-stars" aria-hidden="true"></canvas>
                <div class="contact-header">
                    <h2 id="contact-title">Contact</h2>
                    <p>Un doute existentiel, une anomalie, une question caféinée ? Écrivez-nous.</p>
                </div>

                <div class="contact-grid">
                <!-- Formulaire (2/3) -->
                    <div class="container-form">
                        <form class="contact-form" action="#" method="post" novalidate>
                            <div class="form-field">
                                <label for="contact-name">Nom <span>(ou nom de code)</span></label>
                                <input type="text" id="contact-name" name="name" required aria-describedby="error-name"/>
                                <p class="form-error" id="error-name" aria-live="polite">Erreur d’identification : vous êtes officiellement personne.</p>
                            </div>

                            <div class="form-field">
                                <label for="contact-email">Email <span>(ou canal de transmission)</span></label>
                                <input type="email" id="contact-email" name="email" required aria-describedby="error-email"/>
                                <p class="form-error" id="error-email" aria-live="polite">Transmission impossible : fréquence incorrecte.</p>
                            </div>

                            <div class="form-field">
                                <label for="contact-message">Message <span>(en langage humain ou en castor)</span></label>
                                <textarea type="text" id="contact-message" name="message" rows="6" required aria-describedby="error-message"></textarea>
                                <p class="form-error" id="error-message" aria-live="polite">Tu ne peux pas envoyer du vide. Même dans l’espace.</p>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" id="contact-consent" name="consent" required />
                                <label for="contact-consent">J'accepte les conséquences potentielles.</label>
                                <p class="form-error">Impossible d’envoyer ça sans un minimum de courage.</p>
                            </div>

                            <button class="form-submit" type="submit">Envoyer (à mes risques et périls)</button>
                            <div class="form-note">
                                <p class="form-note-title">Délais de réponse</p>
                                <p class="form-note-text">Inconnu : les castors font de leur mieux.</p>
                            </div>
                        </form>
                    </div>

                    <!-- Image (1/3) -->
                    <aside class="contact-media" aria-label="Illustration de contact">
                        <img class="contact-img" src="assets/other/send.webp" alt="" height="200"/>
                    </aside>
                </div>
            </section>
        </main>
        <?php include 'footer.php'; ?>
    </body>
</html>