<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_db = 'laciba';
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }
  $sql = "SELECT * FROM laciba";
  $result = $mysqli->query($sql);
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Titol</th>
          <th scope="col">Auditoria</th>
          <th scope="col">ISBN</th>
          <th scope="col">Descriptors</th>
        </tr>
      </thead>
      <tbody gag>
  <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
          <th scope="row"><?php echo $row ['id'];?></th>
          <td> <?php $row['titol']; ?></td>
          <td>Editor</td>
          <td>3290420</td>
          <td>hyhy</td>
          <td>543534</td>
          </tr>
    <?php } ?>
          </tbody>
        </table>
<?php
  $mysqli->close();
?>
