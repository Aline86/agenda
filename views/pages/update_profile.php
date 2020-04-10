<?php
require 'header.php'; ?>
<div class="container">
<div class="activation_form">
    <?php foreach($user as $user_data){?>
    <form method="POST" action="index.php?controller=login&action=update_profile" onchange="return traitement();"  ><!--<i class="fas fa-eye-slash"></i>-->
    <input type="text" class="input" id="pseudo" name="pseudo" placeholder="Votre pseudo" value="<?php echo $user_data->pseudo; ?>" />
    <br />
    <input type="text" class="input" id="login" name="login" placeholder="login" />
    <span id="circlelogin"><i class="fas fa-check-circle"></i></span><span id="loginmessage">Veuillez renseigner votre identifiant</span>
    <br />
    <input type="password" class="input" id="pass1" name="password" placeholder="mot de passe" /><button class="button" id="oeil1" onclick=" visible(); return false"><i class="fas fa-eye"></i></button>
    <span id="pass1circle"><i class="fas fa-check-circle"></i></span><span id="pass1result">Mot de passe entre 7 et 16 caractères</span>
    <br />
    <input class="input" type="submit" value="Valider" />
    </form>
    <?php }?>
</div>
</div>

<?php require_once 'footer.php' ?>
<script>

   var js = document.createElement('script');
   js.type = 'text/javascript';
   js.src = 'script/update_profile.js' ;
   //Ajout de la balise dans la page
   document.body.appendChild(js);
   
</script>