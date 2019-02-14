<?php include "menu.php"; ?>

<?php
include 'connection.php';
	$stmt=$db->prepare("INSERT INTO books (books_id, books_name, author, isbn)
  VALUES(:books_id, :books_name, :author, :isbn)");
		$stmt->bindParam(':books_id', $_POST["books_id"]);
		$stmt->bindParam(':books_name', $_POST["books_name"]);
		$stmt->bindParam(':author', $_POST["author"]);
		$stmt->bindParam(':isbn', $_POST["isbn"]);


	$stmt->execute();
  if($stmt) {
    echo "Lisättiin kirja:<br>";
    print_r($_POST);
}
 ?>

<?php include "footer.php"; ?>
