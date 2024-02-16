<?php include "fucntions/header.php" ?>

<body>
    <div class="body-cabinet">
        <article class="container">
            <div class="block">
                <section class="block__item block-item">
                    <h2 class="block-item__title">У вас уже есть аккаунт?</h2>
                    <button class="block-item__btn signin-btn">Войти</button>
                </section>
                <section class="block__item block-item">
                    <h2 class="block-item__title">У вас нет аккаунта?</h2>
                    <button class="block-item__btn signup-btn">Зарегистрироваться</button>
                </section>
            </div>
            <div class="form-box" style="background-color: rgb(76 122 153);">
                <form action="fucntions/login.php" class="form form__signin" method="POST">
                    <h1 class="from__title"><b>Вход</b></h1>
                    <p><input required type="text" id="loginSignIn" name="login" class="form__input" required placeholder="Логин"></p>
                    <p><input required type="password" id="passwordSignIn" name="password" class="form__input" required placeholder="Пароль"></p>
                    <p><button class="form__btn" type="submit" >Войти</button></p>
                    <p><a href="#" class="form__forgot">Восстановление пароля</a></p>
                </form>
                <form action="fucntions/register.php" class="form form__signup" method="POST">
                    <h1 class="from__title">Регистрация</h1>
                    <p><input required type="text" id="loginSignUp" name="login" class="form__input" placeholder="Логин" required></p>
                    <p><input required type="email" id="emailSignUp" name="email" class="form__input" placeholder="Email"></p>
                    <p><input required type="password" id="passwordSignUp" name="password" class="form__input" placeholder="Введите пароль" required></p>  
                    <h5 class="st">Выберите ваш уровень знания Казахского языка: </h5>
                    <p>
                    <select name="language_level" id="selectlvl" class="select">
                        <option value="1"><?php echo translate(1) ?></option>
                        <option value="2"><?php echo translate(2) ?></option>
                        <option value="3"><?php echo translate(3) ?></option>
                        <option value="4"><?php echo translate(4) ?></option>
                    </select>
                    </p>
                    <p><button class="form__btn form__btn_signup" type="submit">Зарегистрироваться</button></p>
                </form>
            </div>
        </article>
    </div>
</body>
<footer>
<?php
     if(isset($_SESSION['user_id'])){

    ?>
    <div>
        <a class="xxx4" href="" onclick="askQuestion()">Связь с нами</a>
    </div><?php } ?>
</footer>

</html>