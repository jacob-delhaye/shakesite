<?php
if(isset($_POST['nom'])){
	$nom=$_POST['nom'];
}else{
	$nom="nom";
}
if(isset($_POST['email'])){
	$email=$_POST['email'];
}else{
	$email="email";
}
if(isset($_POST['sujet'])){
	$num=$_POST['sujet'];
	switch ($num) {
    case 1:
      $sujet="Proposition d'activité";
        break;
    case 2:
			$sujet="Rapport de bug";
        break;
    case 3:
			$sujet="Encouragement";
        break;
		case 4:
		  $sujet="Commentaire";
		    break;
		case 5:
			$sujet="Question";
		    break;
		case 6:
			$sujet="Recrutement";
		    break;
		case 6:
			$sujet="Autre";
				break;
}
}else{
	$sujet="sujet";
}
if(isset($_POST['message'])){
	$msg=$_POST['message'];

}else{
	$msg="message";
}
if(!empty($nom) && !empty($email) && !empty($msg)) {
$destinataire='shakinbox@gmail.com';
$msg="Vous avez reçu un nouveau message de $nom :
Message : $msg\r\n;
Répondez-lui à $email\r\n";

$msg = str_replace("\n.", "\n..", $msg);
mail($destinataire, $sujet, $msg);
echo "Votre message a bien été envoyé !";
}else{
echo "Il manque des informations dans le formulaire ! Vous pouvez revenir en arrière pour modifier.";
}
?>
