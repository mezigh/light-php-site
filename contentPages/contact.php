<?php $current_page="contact"; ?>

<?php $titre_page = "CONTACT";?>

<?php /*$script_page = "alert('COUCOU');";*/ ?>


<div id="contact" class="page_content">

    
    <p class='contact'>Pour toute question, n'hésitez pas à nous contacter.</p><br/>
    <p class='contact'>HOOBOO</p>
    <p class='contact'>7 rue Neuve</p>
    <p class='contact'>69001 Lyon</p>
    <p class='contact'>Tel: YY YY YY YY YY</p> 
    <p class='contact'>Fax: FF FF FF FF FF</p>
    <br/>

    
    
	<form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire">

		<label for="nom">Votre nom :</label>
		<input type="text" name="nom" size="45" maxlength="100">

		<label for="mail">Votre mail :</label>
		<input type="text" name="mail" size="45" maxlength="100">

		<label for="objet">Sujet : </label>
		<input type="text" name="objet" size="45" maxlength="120">

		<label for="message">Message : </label>
		<textarea name="message" cols="40" rows="8"></textarea>

		<input type="submit" name="Submit" value="Envoyer">


	</form>

   

</div>
	
