<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Donne-moi tes données</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
  </div>
  <div>
      <label for="email">Email :</label>
      <input type="email" name="email" id="email"/>
  </div>
  <div>
      <label for="mdp">Mot de passe :</label>
      <input type="password" name="mdp" id="mdp"/>
  </div>
  <div>
      <label for="msg">Votre message :</label>
      <textarea name="msg" id="msg"></textarea>
  </div>
  <inpout type="hidden" name="frmContact" />
  <div>
      <input  type="submit" value="Envoyer"/>
  </div>
  </fieldset>
  <input type="hidden" value="frmContact" />

</form>
