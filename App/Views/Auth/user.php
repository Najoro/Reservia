<h1 class="userSpaceTitle">Bienvenue <span><?= $user['name'] ?></span></h1>
<div class="userSpaceContenaire">
    <div class="userSpaceContenue">
        <h1 class="usserSpaceConteniareTitle">Espace Utilisateur</h1>
        <div class="userInformationContenaire">
            <div class="userImage">
                <div class="image">
                    <i class="far fa-user"></i>
                </div>
            </div>
            <div class="userInformation">
                <h6>name </h6>
                <strong>: <?= $user['name'] ?></strong>
            </div>
            <div class="userInformation">
                <h6>e-mail</h6>
                <strong>: <?= $user['email'] ?></strong>
            </div>
            <div class="userInformation">
                <h6>Telephone </h6>
                <p>: <?= $user['tel'] ?></p>
            </div>
            <a class="logOut" href="?controler=Auth&action=logOut">deconnecter</a>
        </div>
    </div>
    <div class="listeReservationContenaire">
        <h1 class="usserSpaceConteniareTitle">Mes Reservation</h1>
        <div class="listeReservationContenue">
            <h1>Liste de tous les reservations</h1>
        </div>
    </div>
</div>