<?php

/* UEOChoixBundle:Default:index.html.twig */
class __TwigTemplate_2c8be85afe7ee26152f75a72fa5b62e549d45de3f9d0e0d44d3f42e63e50a0d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

  <!DOCTYPE html>
      <html lang=\"fr\">
  <head>
    <title>Inscriptions pédagogiques</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <META NAME=\"ROBOTS\" CONTENT=\"NOINDEX, NOFOLLOW\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\">
    
    <!-- Bootstrap -->
    <link href=\"http://ueoptionnelleshtml.soufiane.fr/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom styles for this template -->
    <link href=\"http://ueoptionnelleshtml.soufiane.fr/css/styles.css?v=12220\" rel=\"stylesheet\">
    
    <link rel=\"stylesheet\" href=\"http://ueoptionnelleshtml.soufiane.fr/css/bootstrap-3.0.3.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"http://ueoptionnelleshtml.soufiane.fr/css/bootstrap-multiselect.css\" type=\"text/css\">

    <script type=\"text/javascript\" src=\"http://ueoptionnelleshtml.soufiane.fr/js/jquery-2.0.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://ueoptionnelleshtml.soufiane.fr/js/bootstrap-3.0.3.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://ueoptionnelleshtml.soufiane.fr/js/bootstrap-multiselect.js\"></script>
    
    <!-- DataTables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.0-beta.1/css/jquery.dataTables.css\">
 
<!-- DataTables -->
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.0-beta.1/js/jquery.dataTables.js\"></script>

<!-- DataTables CSS -->
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css\">
 
<!-- DataTables -->
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css\"></script>

    
    </head>  
  <body id=\"index\">
  
  <div class=\"container\">
      <div class=\"header\">
        <ul class=\"nav nav-pills pull-right\">
          <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModalContact\"><span class=\"glyphicon glyphicon-envelope\"></span>  Contact</a></li>
        </ul>
        <h3 class=\"text-muted\"><a href=\"/Etudiant.php\">Inscriptions pédagogiques</a></h3>
      </div>

      <div class=\"jumbotron\">
        <h1>Master STIC - Spécialités ISRI, MIAGE et 2IBS
 - Inscriptions pédagogiques</h1>
        <p class=\"lead\">Cette application permet aux étudiants du Master STIC - ISRI, MIAGE et 2IBS de choisir leurs UE optionnelles</p>
        <p>Pour choisir vos UEs optionnelles vous devez :</p>
        <ol>
  <li>Vous inscrire et attendre le mail d'activation de votre compte - Vérifiez votre adresse mail!</li>
  <li>Vous loguer sur le système avec les login/password que vous avez choisis</li>
  <li>Faire vos choix à chaque semestre</li>
</ol> 
        <!-- Button trigger modal -->
<button class=\"btn btn-success btn-lg\" data-toggle=\"modal\" data-target=\"#myModalInscription\">
  Inscription
</button>
        <!-- Button trigger modal -->
<button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModalConnexion\">
  Connexion
</button>
        
      </div> <!-- End Introduction HP -->
      
      <div class=\"footer\">
        <p>&copy; UPJV 2013</p>
      </div>

    </div> <!-- /container -->


<!-- Modal -->
<div class=\"modal fade\" id=\"myModalInscription\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"form-signin\" role=\"form\">
          <h2 class=\"form-signin-heading\">Formulaire l inscription</h2>
          <p>Veuillez vous inscrire et attendre l activation de votre compte pour pouvoir faire vos choix d options.</p><p>

Les champs annotés d une astérisque * doivent être remplis.</p>
      <div class=\"form-group\">
        <label>Nom : </label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" required>
      </div>
      <div class=\"form-group\">
        <label>Prénom : </label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" required>
      </div>
      
      <div class=\"form-group\">
      <label>Choisir un parcours : </label>
<select class=\"form-control\">
<option value=\"7\">Master 1 2IBS</option>
<option value=\"6\">Master 1 ISRI</option>
<option value=\"5\">Master 1 MIAGE</option>
<option value=\"8\">Master 2 2IBS INFO</option>
<option value=\"9\">Master 2 2IBS INSTRUM</option>
<option value=\"4\">Master 2 ISRI</option>
<option value=\"3\">Master 2 MIAGE 2COM</option>
<option value=\"1\">Master 2 MIAGE OSIE</option>
<option value=\"2\">Master 2 MIAGE SIS</option>
</select>
      </div>
      
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Adresse email : </label>
        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre adresse email\" required>
      </div>
      
      
      <div class=\"form-group\">
        <label>Identifiant : </label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required>
      </div>
      
      <div class=\"form-group\">
        <label>Mot de passe : </label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Mot de passe\" required>
      </div>
      
      
      <div class=\"form-group\">
        <label>Confirmer mot de passe : </label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Mot de passe\" required>
      </div>
     
      <button type=\"submit\" class=\"btn btn-default\" >Envoyer</button>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- Modal -->
<div class=\"modal fade\" id=\"myModalConnexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"smallModel form-signin\">
        <h2 class=\"form-signin-heading\">Connexion</h2>
        <p><input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\" required autofocus></p>
        <p><input type=\"Mot de passe\" class=\"form-control\" placeholder=\"Mot de passe\" required></p>
        <label class=\"checkbox\">
          <input type=\"checkbox\" value=\"remember-me\"> Sauvegarder
        </label>
        <p><button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" onclick=window.location=\"/recapChoix.php\">Se connecter</button>
        <a href=\"#\">Mot de passe oublié</a>
        </p>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

    
<!-- Modal -->
<div class=\"modal fade\" id=\"myModalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <form class=\"form-signin\" role=\"form\">
      <h2 class=\"form-signin-heading\">Nous contacter par email</h2>
          <p>Vous avez des questions concernant les UE optionnelles ou l utilisation de l application web. contactez-nous.</p><p>

Les champs annotés de un astérisque * doivent être remplis.</p>
      <div class=\"form-group\">
        <label>Nom / Prenom</label>
        <input type=\"text\" class=\"form-control\" placeholder=\"Nom / Prénom\">
      </div>
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Adresse email</label>
        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Entrer votre adresse email\">
      </div>
      <div class=\"form-group\">
      <label>Parcourt</label>
      <select class=\"form-control\">
  <option>MIAGE</option>
  <option>2IBS</option>
</select>
      </div>
      <div class=\"form-group\">
      <label>Message</label>
      
      <textarea class=\"form-control\" rows=\"3\"></textarea>
      
      </div>
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\"> Recevoir une copie de message par email
        </label>
      </div>
      <button type=\"submit\" class=\"btn btn-default\" >Envoyer</button>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

  </body>
</html>    ";
    }

    public function getTemplateName()
    {
        return "UEOChoixBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
