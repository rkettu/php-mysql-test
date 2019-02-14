<?php include "menu.php"; ?>
<?php include "C:\\tests\\connection.php" ?>
<?php
  $sql="select * from books";
  $books=$db->query($sql);
  $arrayBooks=$books->fetchAll(PDO::FETCH_ASSOC);
 ?>

<h1>Kirjalista</h1>
<table border="2">
  <thead>
      <tr>
        <th>Kirja id</th> <th>Kirjan nimi</th> <th>Tekijä</th> <th>ISBN</th>
      </tr>
  </thead>
  <tbody>
    <?php
    foreach($arrayBooks as $row)
    {
      echo '<tr>';
      echo "<td>".$row["books_id"]."</td>";
      echo "<td>".$row["books_name"]."</td>";
      echo "<td>".$row["author"]."</td>";
      echo "<td>".$row["isbn"]."</td>";
      echo '</tr>';
    }
     ?>
  </tbody>
</table>

<?php include "footer.php"; ?>
