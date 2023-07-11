<center>
    <form method="POST">
        <p>Guess the number between 1-100</p><br>
        <input type="number" name="guess" placeholder="Here">
        <input type="submit" name="submit" value="Guess"> <br>
        <?php
        session_start();
        if (!$_SESSION) {
            # code...
            $_SESSION['randomNum'] = rand(1, 100);
        }
        if (isset($_POST['submit'])) {
            $guessedNum = $_POST['guess'];
            $randomNum = $_SESSION['randomNum'];
            if ($randomNum < $guessedNum) {
                echo 'lesser';
            } else if ($randomNum > $guessedNum) {
                echo 'higher';
            } else {
                echo 'you find the number' . $randomNum;
                session_destroy();
            }
        }
        ?>
    </form>
</center>