
<div class="formulaireContenaire">
    <div class="formulaireImage">
        <img src="/dist/images/hotel/hotel4.jpg" alt="image">
    </div>
    <div class="formulaireContenue">
        <?php if($errors) : ?>
            <div class="errorformulaire">
                <h1 class="errortitile">ERREUR</h1>
                <ul>
                    <?php foreach($errors as $key => $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif ; ?>
        <div class="formulaireHeader">
            <div class="formeImageIcone">
                <i class="fas fa-pen-nib"></i>
            </div>
            <h1 class="formeTitle">Creer une Compte</h1>
        </div>
        <form class="formulaire" action=".?controler=Auth&action=insert" method="POST">
        
            <input type="text" name="username" id="username" placeholder="Votre Nom">
            <input type="email" name="email" id="email" placeholder="E-mail">
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="password" name="ConfirmePassword" id="ConfirmePassword" placeholder="Confirmer le Mot de passe">
            <input type="number" name="tel" id="tel" placeholder="+261">
            <input class="button" type="submit" value="Creer Mon Compte">
        </form>
        <div class="formeFooterContenaire">
            <p>Vous avez dejat une compte ?</p>
            <a href="?controler=Auth&action=login">Se Connecter</a>
        </div>
    </div>
</div>