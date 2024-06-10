<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Data</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- <fieldset>
      <legend><h3>Insert Customer Data</h3></legend>
      <form action="insert.php" method="GET">
        <label for="firstname">Firstname : </label>
        <input type="text" name="firstname" id="firstname" />
        <br />
        <label for="address">Address</label>
        <input type="text" name="address" id="address" />
        <br />
        <input type="submit" value="Add Data" />
        <input type="reset" value="Reset" />
      </form>
    </fieldset> -->
    <?php
     $dbc =  new PDO('mysql:host=localhost;dbname=customerdb','root','');
     $statement = $dbc->query("SELECT customerID,firstname FROM customer");
     $statement1 = $dbc->query("SELECT customerID,firstname FROM customer");
    ?>
    <fieldset>
      <legend><h3>Update Customer Data</h3></legend>
      <form action="update.php" method="GET">
        <label for="customerID">Firstname</label>
        <select name="customerID" id="">
          <option value="">-</option>
          <?php foreach($statement as $row) :?>
            <option value="<?= $row['customerID']?>"><?= $row['firstname']?></option>
          <?php endforeach ;?>
        </select>
        <br />
        <label for="firstname">Firstname : </label>
        <input type="text" name="firstname" id="firstname" />
        <br />
        <label for="address">Address</label>
        <input type="text" name="address" id="address" />
        <br />
        <input type="submit" value="Ubah Data" />
        <input type="reset" value="Reset" />
      </form>
    </fieldset>
    <fieldset>
      <legend><h3>Delete Customer Data</h3></legend>
      <form action="delete.php" method="GET">
        <label for="customerID">customerID</label>
        <select name="customerID" id="">
          <option value="">-</option>
          <?php foreach($statement1 as $row1) :?>
            <option value="<?= $row1['customerID']?>"><?= $row1['firstname']?></option>
          <?php endforeach ;?>
        </select>
        <br />
        <input type="submit" value="Delete" />
        <input type="reset" value="Reset" />
      </form>
    </fieldset>
  </body>
</html>
