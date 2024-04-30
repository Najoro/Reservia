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
            <a class="btn btn-warning" href="?controler=Auth&action=logOut">deconnecter</a>
        </div>
    </div>
    <div class="listeReservationContenaire">
        <h1 class="usserSpaceConteniareTitle">Mes Reservation</h1>
        <div class="listeReservationContenue">
            <div class="listAllReservevationContenaire">
                <table class="table table-striped"">
                    <thead>
                        <tr>
                        <th scope="col">nom Hotel</th>
                        <th scope="col">1erJour</th>
                        <th scope="col">dernier Jours</th>
                        <th scope="col">Nombre de jours</th>
                        <th scope="col">prix totals</th>
                        <th scope="col">Btm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Reservation liste</td>
                            <td>DateIn</td>
                            <td>DateOut</td>
                            <td>Stay jours</td>
                            <td>Prix totals</td>
                            <td>
                                <button class="btn btn-primary mx-2"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-danger mx-2"><i class="fa-solid fa-trash"></i> </button>
                            </td>
                        </tr>   
                        <tr>
                            <td>Reservation liste</td>
                            <td>DateIn</td>
                            <td>DateOut</td>
                            <td>Stay jours</td>
                            <td>Prix totals</td>
                            <td>
                                <button class="btn btn-primary mx-2"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-danger mx-2"><i class="fa-solid fa-trash"></i> </button>
                            </td>
                        </tr>   
                        <tr>
                            <td>Reservation liste</td>
                            <td>DateIn</td>
                            <td>DateOut</td>
                            <td>Stay jours</td>
                            <td>Prix totals</td>
                            <td>
                                <button class="btn btn-primary mx-2"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-danger mx-2"><i class="fa-solid fa-trash"></i> </button>
                            </td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
var_dump($_POST)
?>