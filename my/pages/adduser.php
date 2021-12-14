<section class="sec-config-account" id="sec-config-account">

    <div class="blc-create-user">
        <div class="title-block">Création d'utilisateur<span class="circle-blue"></span> <span class="circle-blue"></span></div>
        <span class="line-blue-bottom"></span>
        <form action="../php/login.php" method="post" class="form-sec-login">
            <div class="contain-two-input">
                <div class="contain-input">
                    <label for="firstname" class="label">Prénom</label>
                    <input type="text" name="firstname" id="firstname" class="firstname-input input">
                    <div class="line-blue-input"></div>
                </div>
                <div class="contain-input">
                    <label for="name" class="label">Nom</label>
                    <input type="text" name="name" id="name" class="name-input input">
                    <div class="line-blue-input"></div>
                </div>
            </div>
            <div class="contain-input mail-input bottom-input">
                <label for="mail" class="label">Email</label>
                <input type="text" name="mail" id="mail" class="mail-input input">
                <div class="line-blue-input"></div>
            </div>
            <div class="contain-two-input bottom-input">
                <div class="contain-input">
                    <label for="identifiant" class="label">Identifiant</label>
                    <input type="text" name="identifiant" id="identifiant" class="identifiant-input input">
                    <div class="line-blue-input"></div>
                </div>
                <div class="contain-input">
                    <label for="Mot de passe" class="label">Mot de passe</label>
                    <input type="text" name="Mot de passe" id="Mot de passe" class="Mot de passe-input input">
                    <div class="line-blue-input"></div>
                </div>
            </div>
            <div class="choice-type">
                <label for="radio-client" class="active-type type-account" id="type-client">
                    <svg class="account-client" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>
                    Client
                </label>
                <label for="radio-admin" class="type-account" id="type-admin">
                    <svg class="account-admin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shield-alt" class="svg-inline--fa fa-shield-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M466.5 83.7l-192-80a48.15 48.15 0 0 0-36.9 0l-192 80C27.7 91.1 16 108.6 16 128c0 198.5 114.5 335.7 221.5 380.3 11.8 4.9 25.1 4.9 36.9 0C360.1 472.6 496 349.3 496 128c0-19.4-11.7-36.9-29.5-44.3zM256.1 446.3l-.1-381 175.9 73.3c-3.3 151.4-82.1 261.1-175.8 307.7z"></path></svg>
                    Administrateur
                </label>
                <div class="radio-select">
                    <input type="radio" name="types-account" id="radio-client" checked>
                    <input type="radio" name="types-account" id="radio-admin">
                </div>
            </div>
        </form>
    </div>
    

</section>
