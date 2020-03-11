<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Le Predicator</title>
        <link href="assets/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <!-- La barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
            <div class="navbar-brand">Le Prédicator</div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Spécial Coupe Du Monde <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#champ">Spécial Championnats</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            <!-- La partie Coupe du Monde -->
            <div id="cdm">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div id="st1">Spécial Coupe Du Monde</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 text-center">
                            <div id="text">Cliquez sur le logo pour connaitre les prochains résultats</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 text-center">
                            <!-- Image qui est transformé en fonction grâce au clic  -->
                            <input id="btncdm" type="image" src="assets/img/cdm.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <!-- Class reprise par le JS -->
                            <div class="resultcdm"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- La partie Championnats -->
            <div id="champ">
                <div class="container-fluid">
                    <div id="choix" style="display: block;">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div id="st2">Spécial Championnats</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 text-center">
                                <div id="text">Choisissez le championnat</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3 text-center">
                                <!-- Image qui est transformé en fonction grâce au clic  -->
                                <input id="btnL1" type="image" src="assets/img/ligue1.png" />
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3 text-center">
                                <!-- Image qui est transformé en fonction grâce au clic  -->
                                <input id="btnLiga" type="image" src="assets/img/laliga.png" />
                            </div>
                        </div>
                    </div>
                    <div id="ballonsL1" style="display: none;">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-lg-6 text-center">
                                <div id="text">Choisissez le nombre de prédiction</div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Les ballons L1 avec une valeur pour les différenciers au moment du choix -->
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="1" type="image" src="assets/img/ballon_ligue1_1.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="2" type="image" src="assets/img/ballon_ligue1_2.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="3" type="image" src="assets/img/ballon_ligue1_3.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="4" type="image" src="assets/img/ballon_ligue1_4.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="5" type="image" src="assets/img/ballon_ligue1_5.png" /></div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div id="ballonsLiga" style="display: none;">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-lg-6 text-center">
                                <div id="text">Choisissez le nombre de prédiction</div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Les ballons Liga avec une valeur pour les différenciers au moment du choix -->
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="1" type="image" src="assets/img/ballon_liga_1.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="2" type="image" src="assets/img/ballon_liga_2.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="3" type="image" src="assets/img/ballon_liga_3.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="4" type="image" src="assets/img/ballon_liga_4.png" /></div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-1 text-center">
                                <input class="ballon" data-value="5" type="image" src="assets/img/ballon_liga_5.png" /></div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <!-- La partie Résultat -->
                    <div id="resultat" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Les liens vers les scripts -->
        <script src="assets/js/index.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5mdXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
