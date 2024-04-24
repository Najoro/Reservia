<header class="search">
      <h1 class="searchHeaderTitle">Trouvez votre hébergement pour des vacances de rêve</h1>
      <p class="searchHeaderSubtitle">En plein centre de ville ou en pleine nature</p>
    </header>
    <!-- FORMULAIRE -->
    <form class="searchForm" action="action=index" method="GET">
      <span class="searchFormWrapicon">
        <i class="fas fa-map-marker-alt searchFormWrapiconIcon"></i>
      </span>
      <input class="searchFormSearchinput" name="search" type="search" placeholder="Marseille, France" size="1" />
      <button class="searchFormSubmitinput" type="submit">
        <span class="searchFormSubmitinputText">Rechercher</span>
        <i class="searchFormSubmitinputIcon fas fa-search"></i>
      </button>
    </form>
    <!-- END FORMULAIRE -->
    <!-- FILTRE -->
    <div class="searchFilters">
      <h2 class="searchFiltersTitle">Filtres</h2>
      <div class="searchFiltersFilter">
        <div class="searchFiltersFilterWrapicon">
          <i class="fas fa-money-bill-wave searchFiltersFilterWrapiconIcon"></i>
        </div>
        <span class="searchFiltersFilterTitle">Économique</span>
      </div>

      <div class="searchFiltersFilter">
        <div class="searchFiltersFilterWrapicon">
          <i class="fas fa-child searchFiltersFilterWrapiconIcon"></i>
        </div>
        <span class="searchFiltersFilterTitle">Familial</span>
      </div>

      <div class="searchFiltersFilter">
        <div class="searchFiltersFilterWrapicon">
          <i class="fas fa-heart searchFiltersFilterWrapiconIcon"></i>
        </div>
        <span class="searchFiltersFilterTitle">Romantique</span>
      </div>

      <div class="searchFiltersFilter">
        <div class="searchFiltersFilterWrapicon">
          <i class="fas fa-dog searchFiltersFilterWrapiconIcon"></i>
        </div>
        <span class="searchFiltersFilterTitle">Animaux autorisés</span>
      </div>
    </div>
    </div>
    <!-- END FILTRE -->
    <div class="searchResult">
        <div class="searchResultWrapicon">
          <i class="fas fa-info searchResultWrapiconIcon"></i>
        </div>
        <p class="searchResultText">
          Plus de 500 logements sont disponibles dans cette ville
        </p>
    </div>
<!-- end RESULT -->
</section>

<!-- HOSTING -->
<?php if(!empty($heberges)) : ?>
<section class="hosting" id="hosting">
    <div class="hostingMain">
        <!--header-->
        <header class="hostingMainHeader">
            <h3 class="hostingMainHeaderTitle">Hébergement à <?= $heberges[0]['ville'] ?></h3>
        </header>
        <!--end header-->
        <!--article-->
        <?php foreach ($heberges as $heberge) : ?>
            <article class="hostingMainCard">
                <a href=".?controler=Reservia&action=EachHotel&id=<?= $heberge['id']?>">
                    <figure class="hostingMainCardFigure">
                        <img class="hostingMainCardFigureImg" src="./dist/images/images/hebergements/4_small/<?= $heberge['label_image'] ?>" alt="Chambre avec un lit superposé avec une fenêtre vu sur la ville." />
                        <figcaption class="hostingMainCardFigureCaption">
                            <h3 class="hostingMainCardFigureCaptionTitle">
                                <?= $heberge['title'] ?>
                            </h3>
                        </figcaption>
                    </figure>
                    <p class="hostingMainCardDesc">
                        Nuit à partir de
                        <strong class="hostingMainCardDescPrice"> <?= $heberge['price'] ?>K Ar</strong>
                    </p>
                    <div class="hostingMainCardGrade">
                        <?php for ($i = 0; $i < $heberge['etoils']; $i++) : ?>
                            <i class="fas fa-star hostingMainCardGradeIcon" data-active="true"></i>
                        <?php endfor; ?>
                        <?php for ($j = 0; $j < (5 - $heberge['etoils']); $j++) : ?>
                            <i class="fas fa-star hostingMainCardGradeIcon" data-active="false"></i>
                        <?php endfor; ?>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
        <a class="hostingMainViewmore" href="#">Afficher plus</a>
    </div>

    <!--POPULAIRE-->
    <aside class="hostingPopular">
        <h2 class="hostingPopularTitle">Les plus populaire <i class="fas fa-chart-line"></i></h2>
        <!--article 1-->
        <?php foreach ($populaires as $populaire) : ?>
        <article class="hostingMainCard hostingPopularCard">
            <a class="hostingPopularWrapcontent" href="?controler=Reservia&action=EachHotel&id=<?= $populaire['id']?>">
                <div class="hostingPopularWrapcontentWrapimg">
                    <img class="hostingPopularWrapcontentWrapimgImg" src="./dist/images/images/hebergements/4_small/<?= $populaire['label_image'] ?>" alt="Chambre avec un lit superposé avec une fenêtre vu sur la ville." />
                </div>
                <div class="hostingPopularWrapcontentContent">
                    <h3 class="hostingMainCardFigureCaptionTitle">
                    <?= $populaire['title'] ?>
                    </h3>
                    <p class="hostingMainCardDesc">
                        Nuit à partir de
                        <strong class="hostingMainCardDescPrice"><?= $populaire['price'] ?>K Ar</strong>
                    </p>
                    <div class="hostingPopularWrapcontentContentWhitespace"></div>
                    <div class="hostingMainCardGrade">
                        <?php for ($i = 0; $i < $populaire['etoils']; $i++) : ?>
                            <i class="fas fa-star hostingMainCardGradeIcon" data-active="true"></i>
                        <?php endfor; ?>
                        <?php for ($j = 0; $j < (5 - $populaire['etoils']); $j++) : ?>
                            <i class="fas fa-star hostingMainCardGradeIcon" data-active="false"></i>
                        <?php endfor; ?>
                    </div>
                </div>
            </a>
        </article>
        <?php endforeach; ?>
    </aside>
</section>
<!-- ACTIVITY -->
<section class="activity" id="activity">
    <h2 class="activityTitle">Activités à <?= $activity[0]['ville'] ?></h2>
    <?php foreach ($activity as $act) : ?>
        <a href="#" class="activityCard activityCard<?=$act['id']?>">
            <div class="activityCardWrapimg">
                <img class="activityCardWrapimgImg" src="./dist/images/images/activites/4_small/<?=$act['label_image']?>" alt="<?= $act['name'] ?>" />
            </div>
            <h3 class="activityCardTitle"><?= $act['name'] ?></h3>
        </a>
    <?php endforeach; ?>
</section>
<?php else : ?>
<div class="BdIsEmptyContenaire">
    <h1>Le ville "<?=$_GET['search'] ?>" est introuvable</h1>
    <p>virifie Bien</p>
</div>
<?php endif ; ?>