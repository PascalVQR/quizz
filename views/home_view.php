<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADRAR QUIZZ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />
</head>
<body>
    <header class="header">
        <img alt="Logo" class="header-logo" src="./assets/img/adrar_logo.png"/>
        <h1>ADRAR QUIZZ</h1>
    </header>
    <section class="banner">
        <h2>BIENVENUE SUR ADRAR QUIZZ</h2>
    </section>
    <main class="login-container">
        <!-- Formulaire de connexion -->
        <form id="login-box" class="base-box active">
            <h2>Connexion</h2>
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()"/>
                    <span class="slider"></span>
                </label>
                <span id="switch-text">Vous n'avez pas de compte ?</span>
            </section>
            <label for="email">Adresse e-mail</label>
            <input id="email" name="email" type="email" required/>
            <label for="password">Mot de passe</label>
            <input id="password" name="password" type="password" required/>
            <button type="submit">Connexion</button>
        </form>
        <!-- Formulaire d'inscription -->
        <form id="signup-box" class="base-box">
            <h2>Inscription</h2>
            <label for="first-name">Prénom</label>
            <input id="first-name" name="first-name" type="text" required/>
            <label for="last-name">Nom</label>
            <input id="last-name" name="last-name" type="text" required/>
            <label for="signup-email">Adresse e-mail</label>
            <input id="signup-email" name="signup-email" type="email" required/>
            <label for="signup-password">Mot de passe</label>
            <input id="signup-password" name="signup-password" type="password" required/>
            <button type="submit">Inscription</button>
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()"/>
                    <span class="slider"></span>
                </label>
                <span id="switch-text">Vous avez déjà un compte ?</span>
            </section>
        </form>
    </main>
    <footer>
        <section class="footer-icons">
            <a href="#"><img src="./assets/img/adrar_logo.png" alt="Logo de l'ADRAR"></a>
            <a href="#"><img src="./assets/img/linked_in_logo.png" alt="Logo de LinkedIn"></a>
        </section>
        <section class="footer-coordinates">
            <div>
                <span class="material-symbols-outlined icons-small">home</span>
                11 Av. de l'Europe, 31520 Ramonville-Saint-Agne
            </div>
            <div>
                <span class="material-symbols-outlined icons-small">phone</span>
                05.34.31.38.10
            </div>
            <div>
                <span class="material-symbols-outlined icons-small">mail</span>
                contact@adrar-numerique.com
            </div>
        </section>
        <section>
            <span class="material-symbols-outlined icons-small">balance</span>
            Mentions légales
        </section>
    </footer>

    <script>
        function toggleForms() {
            // Récupérer les formulaires
            const loginBox = document.getElementById("login-box");
            const signupBox = document.getElementById("signup-box");

            // Vérifier si le formulaire de connexion est actif
            const isLoginActive = loginBox.classList.contains("active");

            // Bascule les classes
            if (isLoginActive) {
                loginBox.classList.remove("active");
                signupBox.classList.add("active");
            } else {
                signupBox.classList.remove("active");
                loginBox.classList.add("active");
            }
        }
    </script>
</body>
</html>
