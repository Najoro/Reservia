<div class="formulaireContenaire">
    <div class="formulaireImage">
        <img src="/dist/images/hotel/hotel.jpg" alt="image">
    </div>
    <div class="formulaireContenue">
        <div class="formulaireHeader">
        <?php if($error) : ?>
            <div class="errorformulaire">
                <ul>
                    <li><?= $error ?></li>
                </ul>
            </div>
        <?php endif ; ?>
            <div class="formeImageIcone">
                <i class="far fa-user"></i>
            </div>
            <h1 class="formeTitle">Me Connecter</h1>
        </div>
        <form class="formulaire" action="?controler=Auth&action=connecte" method="POST">
            <input type="text" name="username" id="username" placeholder="Votre Nom">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input class="button" type="submit" value="Connecter">
        </form>
        <div class="formeFooterContenaire">
            <p>Ne peut pas se connecte ?</p>
            <a href="?controler=Auth&action=sing">Creer une Compte</a>
        </div>
    </div>
</div>