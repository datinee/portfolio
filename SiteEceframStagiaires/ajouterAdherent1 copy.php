<form method="POST" action="ajouterAdherent2.php" enctype="multipart/form-data">
        <fieldset>
          <legend>Ajouter un adherent</legend>
          <table>
            <tr>
              <td><label> Nom </label></td>
              <td> <input type="text" name="nom"></td>
            </tr>
            <tr>
              <td><label> Prénom </label></td>
              <td> <input type="text" name="prenom"></td>
            </tr>
            <tr>
              <td> <label> Téléphone </label> </td>
              <td> <input type="text" name="telephone"></td>
            </tr>
            <tr>
              <td> <label> Adresse électronique </label> </td>
              <td> <input type="text" name="mail"></td>
            </tr>
            <tr>
              <td> <label> Adhérent </label> </td>
              <td> <input type="checkbox" name="adh"></td>
            </tr>
            <tr>
              <td> <input type="submit" value="OK"></td>
              <td> <a href="pageAccAdmin.php"><button type="button" class="btn btn-primary">Revenir à l'accueil</button></a></td>
            </tr>
          </table>
        </fieldset>
      </form>
