    <body>
        <section class="banner">
            <h1>BIENVENUE SUR ADRAR QUIZZ</h1>
        </section>

        <section class="switch-container">
        <label class="switch">
            <input type="checkbox" id="toggle-switch" onclick="toggleForms()" />
            <span class="slider round"></span>
        </label>
        <span id="switch-text">Vous n'avez pas de compte ?</span>
    </section>

    <main>
        <form id="login-box" class="base-box active">
            <h2>Connexion</h2>
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
            <label for="first-name">Prénom :</label>
            <input id="first-name" name="first-name" type="text" required />
            <label for="last-name">Nom :</label>
            <input id="last-name" name="last-name" type="text" required />
            <label for="signup-email">Adresse e-mail :</label>
            <input id="signup-email" name="signup-email" type="email" required />
            <label for="signup-password">Mot de passe :</label>
            <input id="signup-password" name="signup-password" type="password" required />
            <div class="form-button">
            <div class="error-message"></div>
                <button type="submit">Inscription</button>

            </div>
        </form>
    </main>

    <script>
        function toggleForms() {
            const loginBox = document.getElementById('login-box');
            const signupBox = document.getElementById('signup-box');
            const switchText = document.getElementById('switch-text');
            const toggleSwitch = document.getElementById('toggle-switch');

            if (toggleSwitch.checked) {
                loginBox.style.display = "none";
                signupBox.style.display = "block";
                switchText.textContent = "Vous avez déjà un compte ?";
            } else {
                loginBox.style.display = "block";
                signupBox.style.display = "none";
                switchText.textContent = "Vous n'avez pas de compte ?";
            }
        }

        window.onload = function () {
            document.getElementById('login-box').style.display = "block";
            document.getElementById('signup-box').style.display = "none";
        };
        

        const signupForm = document.querySelector('#signup-box');
        const errorMessage = document.querySelector('.error-message');
        const createAccountButton = signupForm.querySelector('button[type="submit"]');

        createAccountButton.addEventListener('click', (e) => {
        e.preventDefault();
        const errors = validateForm();
        if (errors) {
            const errorList = document.createElement('ul');
            errors.forEach((error) => {
            const errorListItem = document.createElement('li');
            errorListItem.textContent = error;
            errorList.appendChild(errorListItem);
            });
            errorMessage.textContent = '';
            errorMessage.appendChild(errorList);
            errorMessage.classList.add('show');
        } else {
            signupForm.submit();
        }
        });

        function validateForm() {
            const firstName = document.getElementById('first-name').value;
            const lastName = document.getElementById('last-name').value;
            const email = document.getElementById('signup-email').value;
            const password = document.getElementById('signup-password').value;

            const errors = [];

            if (!nameRegex.test(firstName)) errors.push('Le prénom est invalide.');
            if (!nameRegex.test(lastName)) errors.push('Le nom est invalide.');
            if (!emailRegex.test(email)) errors.push('L\'adresse email est invalide.');
            if (!passwordRegex.test(password)) errors.push('Le mot de passe doit contenir au moins 8 caractères.');

            return errors.length > 0 ? errors : null;
        }
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$/;
        const passwordRegex = /^.{8,}$/;
        const nameRegex = /^[a-zA-ZÀ-ÿ '-]+$/;
    </script>
</body>




