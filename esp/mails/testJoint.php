<?php

$mail = 'LopsemPyier@gmail.com'; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====Déclaration des messages au format texte et au format HTML.

$message_txt = "Test 1 2 1 2";

$message_html = "<html><head></head><body>Test 1 2 1 2</body></html>";

//==========

$file_name = "test.txt";
$path = $_SERVER['DOCUMENT_ROOT']."/files/";
echo $path."<br />";
$typepiecejointe = filetype($path.$file_name);
$data = chunk_split( base64_encode(file_get_contents($path.$file_name)) );

//=====Création de la boundary

$boundary = "-----=".md5(rand());

//==========



//=====Définition du sujet.

$sujet = "Test";

//=========



//=====Création du header de l'e-mail.

$header = "From: \"Enzow Valls\"<enzo.vasse@free.fr".$passage_ligne;

$header.= "Reply-to: \"LopsemPyier\" <LopsemPyier@gmail.com>".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========



//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

$message.= $passage_ligne."--".$boundary.$passage_ligne;

$message .= "Content-Type: $typepiecejointe; name=\"$file_name\" ".$passage_ligne;
$message .= "Content-Transfer-Encoding: base64 ".$passage_ligne;
$message .= "Content-Disposition: attachment; filename=\"$file_name\" ".$passage_ligne;
$message .= $passage_ligne;
$message .= $data.$passage_ligne.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========



//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);

//==========

echo "Mail envoyé";

?>
