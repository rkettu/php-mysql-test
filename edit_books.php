<?php include "menu.php"; ?>
<?php include "C:\\tests\\connection.php";
$selection=$_POST;
$stmt = $db->prepare("SELECT * FROM books WHERE books_id = :id");
$stmt->bindParam(':id',$_POST['books_id']);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
 ?>
<h1>Muokkaa kirjoja</h1>
<p>
  <form class="" action="edit_books.php" method="post">
    <label for="">Anna kirjan id </label>
    <input type="number" name="books_id" value="">
    <input type="submit" name="" value="Etsi">
  </form>
</p>
<p>
  <form class="" action="modify_books.php" method="post">
    <label for="">Kirjan ID : <?php echo $result["books_id"]; ?></label> <br>
    <input type="hidden" name="books_id" value="<?php echo $result["books_id"]; ?>"> <br>

    <label for="">Kirjan nimi</label> <br>
    <input type="text" name="books_name" value="<?php echo $result["books_name"]; ?>"> <br>

    <label for="">Tekijä</label> <br>
    <input type="text" name="author" value="<?php echo $result["author"]; ?>"> <br>

    <label for="">ISBN</label> <br>
    <input type="text" name="isbn" value="<?php echo $result["isbn"]; ?>"> <br>

    <input type="submit" name="" value="Tallenna">
  </form>
</p>

<?php include "footer.php"; ?>
