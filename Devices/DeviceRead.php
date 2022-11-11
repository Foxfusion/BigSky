<?php

/**
  * Function to query information based on
  * a parameter: in this case, location.
  *
  */

if (isset($_POST['submit'])) {
  try {
    require "Device_Connection.php";
    

    $connection = new PDO($host, $username, $password,$db_name);

    $sql = "SELECT *
    FROM NetDevice
    WHERE DeviceName = :DeviceName";

    $DeviceName = $_POST['DeviceName'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':DeviceName', $DeviceName, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>

<?php
/* @var $_POST array */
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
<tr>
  <th>Net Device ID #</th>
  
  <th>Device Name</th>
  <th>Hostname</th>
  <th>IP Address</th>
  <th>Device Type</th>
  <th>Notes</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["NetDeviceID"]); ?></td>
<td><?php echo escape($row["DeviceName"]); ?></td>
<td><?php echo escape($row["Hostname"]); ?></td>
<td><?php echo escape($row["IPaddress"]); ?></td>
<td><?php echo escape($row["DeviceType"]); ?></td>
<td><?php echo escape($row["Notes"]); ?></td>

      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['DeviceName']); ?>.
  <?php }
} ?>

<h2>Find user based on location</h2>

<form method="post">
  <label for="DeviceName">DeviceName</label>
  <input type="text" id="DeviceName" name="DeviceName">
  <input type="submit" name="submit" value="View Results">
</form>

<a href="../FoxBase.php">Back to home</a>

