<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <?php include("model/function.php") ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site d'information sur Pokemon Go pour la communauté des joueurs de Troyes">
    <meta name="author" content="ToeiAzarothis">
    <link rel="author" href="humans.txt"/>
    <link rel="shortcut icon" href="img/volant.png">
    <!-- Balise OpenGraph -->
    <meta property="og:title" content="TSR votre auto-ecole Troyenne">
    <meta property="og:type" content="website">
    <meta property="og:description" content="L’auto-école troyes securite routiere vous invite à patienter sur ce decompte .">
    <meta property="op:markup_version" content="v0.1">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:url" content="patrick.hol.es/TSR">
    <meta property="og:image" content="http://mikomi.hol.es/img/opengraph.jpg">
    <!-- Fin Balise OG -->
    <title>Auto-ecole TSR</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet"type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"rel="stylesheet" type="text/css">
    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  </head>
  <body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll"> <button type="button" class="navbar-toggle"
            data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle
              navigation</span> Menu <i class="fa fa-bars"></i> </button> <a
            class="navbar-brand page-scroll" href="#page-top">TSR</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden"> </li>
            <li><a href="index.php" class="text-center">Accueil</a></li>
            <li><a href="#formulaire" class="page-scroll text-center"><span><i class="fa fa-arrow-down"></i></span></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!--  -->
    <header>
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Bonjour!</div>
          <div class="intro-heading">
            <p>Bienvenue sur la page de pre-inscription à l’auto-école TSR</p>
            <a href="#formulaire" class="page-scroll btn btn-xl">SUIVRE</a>
          </div>
        </div>
      </div>
    </header>
    <!--  -->
    <!-- Formulaire de preinscription -->
    <section id="formulaire">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 text-center">

            <!-- informations client -->
            <h3>Coordonnées :</h3>
            <div class="alert alert-info" role="alert">
              <p><span class="fa fa-info"></span> Merci de bien vouloir remplir
                soigneusement ce formulaire afin de poursuivre votre
                pré-inscription.</p>
            </div>
            <form role="form" method="POST" action="paiement.php"> <input value="2417"
                name="id_session" type="hidden"> <input value="1" name="type" type="hidden">
              <input value="1" name="form_inscription" type="hidden">
              <!-- block identite --> <label for="civilite">Civilité <span style="color:#f00;">*</span>
                :</label>
              <div class="row">
                <div class="col-xs-12">
                  <div class="form-group"> <label class="radio-inline"> <input
                        value="Homme" name="sexe_eleve" checked="checked" type="radio">
                      Monsieur </label> <label class="radio-inline"> <input value="Femme"
                        name="sexe_eleve" type="radio"> Madame </label> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group"> <label for="nom">Nom <span style="color:#f00;">*</span>
                      :</label> <input name="nom_eleve" id="nom" class="form-control"
                      value="" required="" type="text"> </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group"> <label for="prenom">Prénom <span style="color:#f00;">*</span>
                      :</label> <input name="prenom_eleve" id="prenom" class="form-control"
                      value="" required="" type="text"> </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <!-- date de naissance --> <label>Date de naissance <span style="color:#f00;">*</span>
                    : </label>
                  <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <select class="form-control" name="jour_naissance" required="">
                        <option>Jour</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-md-6">
                      <select name="mois_naissance" class="form-control" required="">
                        <option>Mois</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">Juillet</option>
                        <option value="08">Août</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                      </select>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <select name="annee_naissance" class="form-control" required="">
                        <option>Année</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2004">2004</option>
                        <option value="2003">2003</option>
                        <option value="2002">2002</option>
                        <option value="2001">2001</option>
                        <option value="2000">2000</option>
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                        <option value="1959">1959</option>
                        <option value="1958">1958</option>
                        <option value="1957">1957</option>
                        <option value="1956">1956</option>
                        <option value="1955">1955</option>
                        <option value="1954">1954</option>
                        <option value="1953">1953</option>
                        <option value="1952">1952</option>
                        <option value="1951">1951</option>
                        <option value="1950">1950</option>
                        <option value="1949">1949</option>
                        <option value="1948">1948</option>
                        <option value="1947">1947</option>
                        <option value="1946">1946</option>
                        <option value="1945">1945</option>
                        <option value="1944">1944</option>
                        <option value="1943">1943</option>
                        <option value="1942">1942</option>
                        <option value="1941">1941</option>
                        <option value="1940">1940</option>
                        <option value="1939">1939</option>
                        <option value="1938">1938</option>
                        <option value="1937">1937</option>
                        <option value="1936">1936</option>
                        <option value="1935">1935</option>
                        <option value="1934">1934</option>
                        <option value="1933">1933</option>
                        <option value="1932">1932</option>
                        <option value="1931">1931</option>
                        <option value="1930">1930</option>
                        <option value="1929">1929</option>
                        <option value="1928">1928</option>
                        <option value="1927">1927</option>
                        <option value="1926">1926</option>
                        <option value="1925">1925</option>
                        <option value="1924">1924</option>
                        <option value="1923">1923</option>
                        <option value="1922">1922</option>
                        <option value="1921">1921</option>
                        <option value="1920">1920</option>
                        <option value="1919">1919</option>
                        <option value="1918">1918</option>
                        <option value="1917">1917</option>
                        <option value="1916">1916</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <!-- lieu de naissance -->
                  <div class="form-group"> <label for="prenom">Lieu de
                      naissance <span style="color:#f00;">*</span> : </label>
                    <input name="lieu_naissance" id="lieu_naissance" class="form-control"
                      value="" required="" type="text"></div>
                </div>
              </div>
              <!-- block adresses -->
              <h4>Vos informations de contact</h4>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group"> <label for="adresse">Adresse<span style="color:#f00;">*</span>
                      : </label> <input name="adresse" id="adresse" class="form-control"
                      value="" required="" type="text"></div>
                </div>
                <div class="col-md-4">
                  <div class="form-group"> <label for="codepostal">Code postal
                      <span style="color:#f00;">*</span> : </label> <input name="codepostal"
                      id="codepostal" class="form-control" value="" required=""
                      type="text"></div>
                </div>
                <div class="col-md-4">
                  <div class="form-group"> <label for="ville">Ville <span style="color:#f00;">*</span>
                      : </label> <input name="ville" id="ville" class="form-control"
                      value="" required="" type="text"></div>
                </div>
              </div>
              <!-- block contact -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group"> <label for="telephone1">Télephone 1
                      <span style="color:#f00;">*</span> : </label> <input name="telephone1"
                      id="telephone1" class="form-control" value="" required=""
                      type="text"></div>
                </div>
                <div class="col-md-4">
                  <div class="form-group"> <label for="telephone2">Télephone 2
                      : </label> <input name="telephone2" id="telephone2" class="form-control"
                      value="" type="text"></div>
                </div>
                <div class="col-md-4">
                  <div class="form-group"> <label for="mail">Mail <span style="color:#f00;">*</span>
                      : </label> <input name="mail" id="mail" class="form-control"
                      value="" required="" type="text"></div>
                </div>
              </div>
              <input class="btn btn-danger"  name="reset" value="Effacer" type="reset">
              <input class="btn btn-success" name="submit" value="Ajouter" type="submit">
              <!-- champs requis -->
              <p><span style="color:#f00;">*</span> Champs obligatoires.</p>
              <hr> </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Fin inscription -->
    <!-- Footer -->
    <?php include("footer.php");?>
    <!-- Fin footer -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
  </body>
</html>
