<article class="hostingEachCard">
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
            <a href="?controler=Reservia&action=index" class="hostingEachBtm hostinEachBack"> <i class="fa-solid fa-house"></i> Aceuil</a>
            <a href="?controler=Auth&action=login" class="hostingEachBtm hostinEachReserve"><i class="fas fa-shopping-bag"></i> Reserver</a>
        </div>
    </div>
    </a>
</article>
<article id="reservation" class="reservationContenaire">
    <h2 class="resercationTitle">Reservation</h2>
    <form class="reservationContenue" >
        <div class="dateContenaire">
            <label for="debutSession">Debut</label>
            <input type="date" name="debutSession" id="debutSession">
        </div>
        <div class="dateContenaire">
            <label for="finSession">Fin</label>
            <input type="date" name="finSession" id="finSession">
        </div>
        <div class="buttonReservation">
           <input type="submit" value="Envoyer">
        </div>
    </form>
</article>
