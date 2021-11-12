<?php
    //si la variable submit a ete envoyer et cliquer
    if(isset($_POST['submit']))//'submit'
	  {
		if(!empty($_POST['nom']) && !empty($_POST['pnom']) && !empty($_POST['tel']))
		{
	    $nom=$_POST['nom'];
		//la variable $nom recoit la variable envoyee 'nom'
		$pnom=$_POST['pnom'];
		$tel=$_POST['tel'];
		$sexe=$_POST['sexe'];
		$universite=$_POST['univ'];
		$message=$_POST['msg']; 
		$timing=time();
		$date_time=date('y-m-d H:i:s',$timing);   //variable de recuperation du temps avec la fonction time
	     //appel du fichier de la connexion a la base de donnee
	 require('connexion.php'); //on peut meme utiliser include('connexion.php');  
	 
	 $requete=$bdd-> prepare('INSERT INTO formulaire (nom,pnom,tel,sexe,univ,msg,date_time)VALUES(?,?,?,?,?,?,?)');//pdonneesaration de la variable
	 $requete-> execute(array($nom, $pnom, $tel, $sexe, $universite, $message, $date_time));// execution de la pdonneesaration
	   
	   
	   echo '<h1>vos donnees ont ete sauvegarder </h1>' ;
// affichage de resultat de la base de donnee.
		}
	else
		{
			header('Location: index.php');
		}
	} 
?>