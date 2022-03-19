<?php

  // on initialise la variable page
  $page = "contact";

  // on charge le HTML depuis un autre fichier
  include("inc/header.tpl.php");


?>

<h2 class="right__title">Contact</h2>


<form action="" method="post" class="contact-form">
  
  <div class="contact-form__row">
    <div>
      <input type="radio" name="gender" id="genderMrs" value="madame">
      <label for="genderMrs">Mme</label> /
      <input type="radio" name="gender" id="genderMr" value="monsieur">
      <label for="genderMr">M</label>
    </div>
    <input type="text" name="firstname" placeholder="Prénom" value="" class="contact-form__item">
    <input type="text" name="lastname" placeholder="Nom" value="" class="contact-form__item">
  </div>
  
  <div class="contact-form__row">
    <input type="email" name="email" placeholder="Adresse e-mail" class="contact-form__item">
  </div>
  
  <div class="contact-form__row contact-form__row--bottom">
    <label for="source" class="contact-form__label">J'ai connu ce site grâce à</label>
    <select name="source" id="source" class="contact-form__item">
      <option value="">choisir</option>
      <option value="fb">Facebook</option>
      <option value="twitter">Twitter</option>
      <option value="google">Google</option>
      <option value="bouche-a-oreilles">Bouche à oreilles</option>
      <option value="jpp">JT de 13h de Jean-Pierre Pernault</option>
      <option value="autre">Autre</option>
    </select>
  </div>
  <div class="contact-form__row">
    <label for="message" class="contact-form__label">Pour laisser un commentaire c'est par ici :</label>
  </div>
  <div class="contact-form__row contact-form__row--bottom">
    <textarea name="message" id="message" placeholder="Votre message" class="contact-form__item contact-form__item--textarea "></textarea>
  </div>
  <div class="contact-form__row contact-form__row--bottom">
    <input type="checkbox" name="infos-ok" id="infos-ok" class="contact-form__item contact-form__item--checkbox">
    <label for="infos-ok">Je certifie la véracité de ces informations</label>
  </div>
  <div class="contact-form__row contact-form__row--bottom">
    <label for="fileUpload">Ajouter un fichier :</label>&nbsp;
    <input type="file" name="fileUpload" id="fileUpload">
  </div>
  
  <button class="contact-form__submit">Envoyer</button>
  
</form>

<?php

  // on charge le HTML depuis un autre fichier
  include("inc/footer.tpl.php");

?>