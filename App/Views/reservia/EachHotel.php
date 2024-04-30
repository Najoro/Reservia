<article class="hostingEachCard">
    <div class="directionFleche">
        <a href="<?=$_SERVER['HTTP_REFERER']?>">
            <i class="fas fa-arrow-left "></i>
        </a>
    </div>
    <div class="hostingEachImage">
        <img class="hostingEachCardFigureImg" src="./dist/images/images/hebergements/4_small/<?= $hotel['label_image'] ?>" alt="Chambre avec un lit superposé avec une fenêtre vu sur la ville." />
    </div>
    <div class="hostingEachMain">
        <h1 class="hostingEachTitle">
            <?= $hotel['title'] ?>
        </h1>
        <div class="hostingStars">
            <?php for ($i = 0; $i < $hotel['etoils']; $i++) : ?>
                <i class="fas fa-star hostingMainCardGradeIcon" data-active="true"></i>
            <?php endfor; ?>
            <?php for ($j = 0; $j < (5 - $hotel['etoils']); $j++) : ?>
                <i class="fas fa-star hostingMainCardGradeIcon" data-active="false"></i>
            <?php endfor; ?>
        </div>
        <p class="hostingEachPrice">
            Nuit à partir de :<strong> <?= $hotel['price'] ?>K Ar</strong> <br/> <br>
            ville : <strong><?= $hotel['ville'] ?></strong> <br>
            Pays : <strong><?= $hotel['continent'] ?></strong> <br>

        </p>
        <p class="hostingEachDesc"><?= $hotel['description'] ?></p>
        <div class="hostingEachBtmContenaire">
            <a href="?controler=Reservia&action=index" class="hostingEachBtm hostinEachHeart"> 
                <i class="far fa-heart"></i>
            </a>
            <a href="#reservation" id="goReserve" class="hostingEachBtm hostinEachReserve">
                <div class="icone">
                    <i class="fas fa-shopping-bag"></i> 
                </div>
                <h5>Reserver</h5>
            </a>
        </div>
    </div>
    </a>
</article>
<article class="reservationContenaire reservation">
    <div class="directionFleche back">
        <a href="#">
            <i class="fas fa-arrow-left "></i>
        </a>
    </div>
    <h2 class="resercationTitle">Reservation</h2>
    <form class="reservationContenue" action=".?controler=Auth&action=user" method="post" >
        <div class="dateContenaire">
            <label for="debutSession">Debut</label>
            <input type="date" class="inputDate" name="debutSession" id="debutSession">
        </div>
        <div class="dateContenaire">
            <label for="finSession">Fin</label>
            <input type="date" class="inputDate" name="finSession" id="finSession">
        </div>
        <div class="dateContenaire">
            <label for="jours">
                Nombre du Sejours : 
                <input type="text" class="inputNone" name="jours" id="jours" value="0"disabled= "disabled">
                Jours
            </label>  
        </div>
        <div class="dateContenaire">
            <label for="prix_total">
                Prix Totale : 
                <input type="text"  class="inputNone" name="prix_total" id="prix_total" value="0" disabled= "disabled">
                Kar
            </label>
        </div>
        <div class="buttonReservation">
            <button class="btn btn-primary" type="submit">Emvoyer</button>
        </div>
    </form>
</article>