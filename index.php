<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ADRAR QUIZZ </title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />

</head>
<body>
    <header class="header">
        <img alt="Logo" class="header-logo" src="./assets/img/logoadrarquizz.png"/>
        ADRAR QUIZZ
    </header>
    <section class="banner">
        BIENVENUE SUR ADRAR QUIZZ
    </section>
     <!-- Switch pour changer entre connexion et inscription -->
    <main class="login-container">
         <!-- Switch pour changer entre connexion et inscription -->

        <form id="login-box" class="login-box active">
            <h2> Connexion </h2>
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()"/>
                    <span class="slider"></span>
                </label>
                <span id="switch-text"> Vous n'avez pas de compte ? </span>
            </section>
            <label for="email"> Adresse e-mail </label>
            <input id="email" name="email" type="email"/>
            <label for="password"> Mot de passe </label>
            <input id="password" name="password" type="password"/>
            <button> Connexion </button>

           
        </form>

        <form id="signup-box" class="signup-box">
            <h2>Inscription</h2>
            <label for="first-name">Prénom</label>
            <input id="first-name" name="first-name" type="firstname"/>
            <label for="last-name">Nom</label>
            <input id="last-name" name="last-name" type="lastname"/>
            <label for="signup-email">Adresse e-mail</label>
            <input id="signup-email" name="signup-email" type="email"/>
            <label for="signup-password">Mot de passe</label>
            <input id="signup-password" name="signup-password" type="password"/>
            <button>Inscription</button>

            <!-- Switch pour changer entre inscription et connexion -->
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()"/>
                    <span class="slider"></span>
                </label>
                <span id="switch-text"> Vous avez déjà un compte ? </span>
            </section>
        </form>
    </main>

    <footer class="footer">
        <section class="footer-content">
            <article>
                <img alt="LinkedIn logo" class="footer-logo" src="https://via.placeholder.com/30" />
                <img alt="Other logo" class="footer-logo" src="https://via.placeholder.com/30" />
            </article>
            <article>
                <i class="fas fa-map-marker-alt"></i>
                11 Av. de l'Europe, 31520 Ramonville-Saint-Agne
            </article>
            <article>
                <i class="fas fa-phone"></i>
                05.34.31.38.10
            </article>
            <article>
                <i class="fas fa-envelope"></i>
                contact@adrar-numerique.com
            </article>
            <article>
                <i class="fas fa-gavel"></i>
                Mentions légales
            </article>
        </section>
    </footer>
</body>
</html>
