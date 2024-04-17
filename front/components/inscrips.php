<div id="inscrips-pop-up">
    <div class="cross-container">
        <svg id="cross" version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384 512" style="enable-background:new 0 0 384 512;" xml:space="preserve">
            <style type="text/css">
                .st0 {
                    fill: #FFFFFF;
                }
            </style>
            <path class="st0" d="M376.6,84.5c11.3-13.6,9.5-33.8-4.1-45.1s-33.8-9.5-45.1,4.1L192,206L56.6,43.5c-11.3-13.6-31.5-15.4-45.1-4.1
                S-3.9,70.9,7.4,84.5L150.3,256L7.4,427.5c-11.3,13.6-9.5,33.8,4.1,45.1s33.8,9.5,45.1-4.1L192,306l135.4,162.5
                c11.3,13.6,31.5,15.4,45.1,4.1s15.4-31.5,4.1-45.1L233.7,256L376.6,84.5z" />
        </svg>
    </div>
    <div class="inscrips-container">
        <form id="adding-from" method="post" action="../back/controllers/inscription.php">
            <p>Inscription</p>
            <div>
                <label for="name"> Nom:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="surname"> Prenom(s):</label>
                <input type="text" name="surname">
            </div>
            <div>
                <label for="username"> Identifiant:</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password"> Mot de passe:</label>
                <input type="password" name="password" required>
            </div>
            <button class="add-button">Inserer</button>
        </form>
    </div>
</div>