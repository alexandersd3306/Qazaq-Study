<?php include "fucntions/header.php" ?>

<body>
    <h1 style="text-align:center;"> Вы успешно зарегистрировались </h1>
    <div class="cab-container">
        <div class="cab">
            <h2 class="status1" style="font-size: 1.7em;"> уровень </h2>
            <div class="ava"><?php echo photo($_SESSION['language_level']) ?> </div>
        </div>
        <div class="cab">
            <h2 class="status1" style="font-size: 1.7em;"> логин </h2>
            <div class="ava tuta" style = "font-size: 1.3em"><?php echo $_SESSION['login'] ?> </div>
        </div>
        <div class="cab">
            <h2 class="status1" style="font-size: 1.7em;"> почта </h2>
            <div class="ava tuta" style = "font-size: 1.3em"><?php echo $_SESSION['email'] ?></div>
        </div>
    </div>

    <div class="cab-container">
        <div class="llllvl">
            <b>
                <a class="baag" href='<?php echo lvl($_SESSION['language_level'])?>'>
                    <?php echo translate($_SESSION['language_level'])?>
                </a>
            </b>
        </div>
    </div>
</body>
<footer>
    <?php
     if(isset($_SESSION['user_id'])){

    ?>
    <div>
        <a class="xxx4 svaa" style="margin-top: 13%;" href="" onclick="askQuestion()">Связь с нами</a>
    </div><?php } ?>
</footer>

</html>