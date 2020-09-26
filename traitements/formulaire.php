<?php

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe']) && !empty($_POST['numeroTel']) && !empty($_POST['choix']) ){
    //variables

    //nom
    $nom = strip_tags($_POST['nom']);
    //echo "$nom";
    
    //prenom 
    $prenom = strip_tags($_POST['prenom']);

    //sexe
    $sexe = $_POST['sexe'];

    //numéro de tel
    if(preg_match("#[0][6][2][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel'] ) || preg_match("#[0][6][5][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel'])  || preg_match("#[0][6][6][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel']) || preg_match("#[0][7][4][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel']) || preg_match("#[0][7][7][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel']) || preg_match("#[0][1][1][- \.?]?([0-9][0-9][- \.?]?){3}$#", $_POST['numeroTel'])){
        $numeroTel = $_POST['numeroTel'];
    } else {
        header('Location: http://localhost/anniversaire/pages/form.php?info=<div class="reponse">Veuillez renseigner le numéro de téléphone au bon format svp !</div>'); 
        die();
    }
    //choix
    $choix = $_POST['choix'];

    //sauvegarde
    $fich_info = fopen("../stockage/sauvegarde.txt", "a+");

    fputs($fich_info, "{$nom}|{$prenom}|{$sexe}|{$numeroTel}|{$choix}" . PHP_EOL);

    fclose($fich_info);
}
    //Reponse

    header('Location: http://localhost/anniversaire/pages/inscription.html');

?>