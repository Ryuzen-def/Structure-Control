<?php
$playerHealth = rand(85, 120);
$enemyHealth = rand(85, 120);

$namaPemain = array("Ryu the Swordman", "Nega of Darkness", "God of Black, Nega", "The Massive Mruk", "Mufid the Frezee", "Udin the Swordman");
$namaEnemy = array("Big Black Mruk", "Knight of Saiko", "Puki the butcher", "Toha the Magician", "Legend of Tamam", "Udin the Supreme");

$iconPemail = array("knight.png", "knight1.png", "knight2.png");
$iconEnemy = array("enemy.png", "enemy1.png", "enemy2.png");
?> //Config Character
<!DOCTYPE html>
<html>

<head>
    <title>Game RPG</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Game RPG</h1>
    <div class="wrapper">
        <div class="container">
            <h2>Pemain</h2>
            <img src="<?php echo $iconPemail[rand(0, 2)] ?>" alt="">
            <h3><?php echo $namaPemain[rand(0, 4)] ?></h3>
            <hr>
            <p>Kesehatan:
                <?php echo $playerHealth; ?>
            </p>
        </div>
        <div class="container">
            <h2>Musuh</h2>
            <img src="<?php echo $iconEnemy[rand(0, 2)] ?>" alt="">
            <h3><?php echo $namaEnemy[rand(0, 4)] ?></h3>
            <hr>
            <p>Kesehatan:
                <?php echo $enemyHealth; ?>
            </p>
        </div>
    </div>
    <h3>Keterangan</h3>
    <center>
        <div class="keterangan"> //Gameplay code
            <?php
            while ($playerHealth > 0 && $enemyHealth > 0) {
                // Indikator Player menyerang
                $playerAttack = rand(3, 25);
                $enemyHealth -= $playerAttack;
                echo "Pemain menyerang musuh dan mengurangi {$playerAttack} HP musuh. (Sisa HP musuh: {$enemyHealth})<br>";

                // Indikator Musuuh menyerang
                $enemyAttack = rand(3, 25);
                $playerHealth -= $enemyAttack;
                echo "Musuh menyerang pemain dan mengurangi {$enemyAttack} HP pemain. (Sisa HP pemain: {$playerHealth})<br><br>";

                // Percabangan (if-else) berdasarkan sisa kesehatan
                if ($playerHealth <= 20) {
                    echo "<p>Pemain sangat lemah!</p>";
                } elseif ($enemyHealth <= 20) {
                    echo "<p>Musuh sudah hampir kalah!</p>";
                }

                // Percabangan untuk kondisi khusus selama pertarungan
                if ($playerHealth <= 10) {
                    echo "<p>Pemain hampir mati! Butuh bantuan cepat!</p>";
                } elseif ($enemyHealth <= 10) {
                    echo "<p>Musuh juga hampir mati! Kesempatan untuk menang besar!</p>";
                }
            }

            // Hasil yang didapatkan / percabangan
            if ($playerHealth <= 0) {
                echo "<h2> Game Over. Anda kalah! </h2>";
            } elseif ($enemyHealth <= 0) {
                echo "<h2> Selamat! Anda menang! </h2>";
            }

            ?>
        </div>
    </center>
    </div>
</body>

</html>
