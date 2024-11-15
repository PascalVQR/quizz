<body>
    <section class="banner">
        <h1>BIENVENUE SUR ADRAR QUIZZ</h1>
    </section>
    <main class="login-container">
        <form id="login-box" class="base-box active">
            <h2>Connexion</h2>
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()" />
                    <span class="slider"></span>
                </label>
                <span id="switch-text">Vous n'avez pas de compte ?</span>
            </section>
            <label for="email">Adresse e-mail :</label>
            <input id="email" name="email" type="email" required />
            
            <label for="password">Mot de passe :</label>
            <input id="password" name="password" type="password" required />
            
            <div class="form-button">
                <button type="submit">Connexion</button>
            </div>
        </form>

        <form id="signup-box" class="base-box">
            <h2>Inscription</h2>
            <section class="switch-container">
                <label class="switch">
                    <input type="checkbox" onclick="toggleForms()" />
                    <span class="slider"></span>
                </label>
                <span id="switch-text">Vous avez déjà un compte ?</span>
            </section>
            <label for="first-name">Prénom :</label>
            <input id="first-name" name="first-name" type="text" required />
            
            <label for="last-name">Nom :</label>
            <input id="last-name" name="last-name" type="text" required />
            
            <label for="signup-email">Adresse e-mail :</label>
            <input id="signup-email" name="signup-email" type="email" required />
            
            <label for="signup-password">Mot de passe :</label>
            <input id="signup-password" name="signup-password" type="password" required />
            
            <div class="form-button">
                <button type="submit">Inscription</button>
            </div>
        </form>
    </main>

    <script>
        function toggleForms() {
            const loginBox = document.getElementById('login-box');
            const signupBox = document.getElementById('signup-box');
            const switchText = document.getElementById('switch-text');

            if (loginBox.style.display === "none") {
                loginBox.style.display = "block";
                signupBox.style.display = "none";
                switchText.textContent = "Vous n'avez pas de compte ?";
            } else {
                loginBox.style.display = "none";
                signupBox.style.display = "block";
                switchText.textContent = "Vous avez déjà un compte ?";
            }
        }

        window.onload = function () {
            document.getElementById('login-box').style.display = "block";
            document.getElementById('signup-box').style.display = "none";
        };
    </script>
</body>