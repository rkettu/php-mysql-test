<?php include "menu.php"; ?>
<?php include "C:\\tests\\connection.php" ?>

<h1>Lisää kirja</h1>
<form class="" action="new_books.php" method="post">
  <label for="">Kirjan ID</label> <br>
  <input type="text" name="books_id" value=""> <br>

  <label for="">Kirjan nimi</label> <br>
  <input type="text" name="books_name" value=""> <br>

  <label for="">Tekijä</label> <br>
  <input type="text" name="author" value=""> <br>

  <label for="">ISBN</label> <br>
  <input type="text" name="isbn" value=""> <br>

  <input type="submit" name="" value="Tallenna">
</form>


<?php include "footer.php"; ?>
