<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/bitcoin.css" />
  <title>Converter EUR - BTC π±</title>
</head>

<body>
  <div class="container">

    <div class="convert-box">
      <div class="flag-box">
        <a href="bitcoin.php">
          <img src="/assets/img/bitcoin.png" alt="flag" />
        </a>
        <a href="dollars.php">
          <img src="/assets/img/dollars.png" alt="flag" />
        </a>
        <a href="rouble.php">
          <img src="/assets/img/rouble.png" alt="flag" />
        </a>
        <a href="pound.php">
          <img src="/assets/img/pound.png" alt="flag" />
        </a>
      </div>
      <h1>πΆπ·π±π΄π΅</h1>
      <div class="devise">
        <form method="POST">
          <input type="number" name="input-eurbtc" step="1.00" value="1" data-taux="1" />
          <span>EUR</span>
          <input type="submit" id="submit" name="submit" value="Convert">

        </form>
      </div>

      <?php
      if (isset($_POST["input-eurbtc"])) {
        $inputEurbtc = $_POST["input-eurbtc"];
        $sum = $inputEurbtc * 0.000053;

        echo "<input id='result' type='number' name='sum' value=$sum><span>BTC</span>";
      }

      ?>

    </div>
  </div>

</body>

</html>