<?php include "templates/include/header.php" ?>

      <div id="adminHeader">
        <h2>Admin</h2>
        <p>Jestes zalogowany jako <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Wyloguj</a></p>
      </div>

      <h1>Wszystkie artykuly</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Data publikacji</th>
          <th>Artykul</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> artykuly w bazie.</p>

      <p><a href="admin.php?action=newArticle">Dodaj nowy artykul</a></p>

<?php include "templates/include/footer.php" ?>

