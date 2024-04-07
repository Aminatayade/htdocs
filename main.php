<HTML><BODY><FORM Action= nom.php> 
 Veuillez saisir votre nom ici :<BR> 
 <INPUT TYPE=TEXT NAME=utilisateur><BR><BR> 
 <INPUT TYPE=SUBMIT VALUE="Soumettre"> 
</FORM> 
<A id="idLien" 
HREF="nom.php?U= <?php echo ($utilisateur); ?>" > 
 passer le nom d'utilisateur à la page 'nom.php' </A> 
</BODY></HTML>