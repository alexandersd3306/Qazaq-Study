<?php include  "fucntions/header.php" ?>


<body>
    <h1 class="snl">Вы выбрали курс: С нуля</h1>
    <h2 class="vi_vibrali">Начнем с изучения: Алфавита</h2>
    <h1 class="texta">Ә л i п п е</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/hsGs1mEms4I" frameborder="0" allowfullscreen></iframe></div>
    <h2 class="vi_vibrali">Продолжим с изучения: Цифр</h2>
    <h1 class="texta">Санау әні</h1>
    <div style="display: flex; justify-content: center; align-items: center;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/RuAgdgXVvUA?si=pbfRNN3-tQL2EKWm" frameborder="0" allowfullscreen></iframe></div>
    <form action="javascript:check();" class="quiz1" name="quiz" id="quiz">
        <div>
            <h3>Какая эта буква? <audio src="audio/Ы.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp1" checked="checked" value="no" id="value1">О<br>
            <input type="radio" class="per" name="vp1" value="yes" id="value2">Ы<br>
            <input type="radio" class="per" name="vp1" value="no" id="value3">У<br>
            <input type="radio" class="per" name="vp1" value="no" id="value4">А<br>
        </div>
        <div>
            <h3>Цифра пять на казахском?</h3>
            <input type="radio" class="per" name="vp2" checked="checked" value="no" id="value1">Он<br>
            <input type="radio" class="per" name="vp2" value="no" id="value2">Сегіз<br>
            <input type="radio" class="per" name="vp2" value="no" id="value3">Төрт<br>
            <input type="radio" class="per" name="vp2" value="yes" id="value4">Бес<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/І.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp3" checked="checked" value="no" id="value1">Ю<br>
            <input type="radio" class="per" name="vp3" value="no" id="value2">И <br>
            <input type="radio" class="per" name="vp3" value="yes" id="value3">І<br>
            <input type="radio" class="per" name="vp3" value="no" id="value4">Я<br>
        </div>
        <div>
            <h3>Сколько букв в цифре "Төрт"?</h3>
            <input type="radio" class="per" name="vp4" checked="checked" value="no" id="value1">Үш<br>
            <input type="radio" class="per" name="vp4" value="yes" id="value2">Төрт<br>
            <input type="radio" class="per" name="vp4" value="no" id="value3">Бес<br>
            <input type="radio" class="per" name="vp4" value="no" id="value4">Алты<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Ғ.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp5" checked="checked" value="no" id="value1">Т<br>
            <input type="radio" class="per" name="vp5" value="no" id="value2">Р<br>
            <input type="radio" class="per" name="vp5" value="no" id="value3">К<br>
            <input type="radio" class="per" name="vp5" value="yes" id="value4">Ғ<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Ң.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp6" checked="checked" value="no" id="value1">Қ<br>
            <input type="radio" class="per" name="vp6" value="yes" id="value2">Ң<br>
            <input type="radio" class="per" name="vp6" value="no" id="value3">Х<br>
            <input type="radio" class="per" name="vp6" value="no" id="value4">Ф<br>
        </div>
        <div>
            <h3>Сколько будет 1+5?</h3>
            <input type="radio" class="per" name="vp7" checked="checked" value="no" id="value1">Бес<br>
            <input type="radio" class="per" name="vp7" value="yes" id="value2">Алты<br>
            <input type="radio" class="per" name="vp7" value="no" id="value3">Жеті<br>
            <input type="radio" class="per" name="vp7" value="no" id="value4">Тоғыз<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Ө.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp8" checked="checked" value="no" id="value1">О<br>
            <input type="radio" class="per" name="vp8" value="no" id="value2">И<br>
            <input type="radio" class="per" name="vp8" value="yes" id="value3">Ө<br>
            <input type="radio" class="per" name="vp8" value="no" id="value4">У<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Қ.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp9" checked="checked" value="yes" id="value1">Қ<br>
            <input type="radio" class="per" name="vp9" value="no" id="value2">Р<br>
            <input type="radio" class="per" name="vp9" value="no" id="value3">К<br>
            <input type="radio" class="per" name="vp9" value="no" id="value4">Б<br>
        </div>

        <div>
            <h3>Какая эта буква? <audio src="audio/Ү.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp10" checked="checked" value="no" id="value1">Ы<br>
            <input type="radio" class="per" name="vp10" value="yes" id="value2">Ү<br>
            <input type="radio" class="per" name="vp10" value="no" id="value3">У<br>
            <input type="radio" class="per" name="vp10" value="no" id="value4">Э<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Ұ.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp11" checked="checked" value="yes" id="value1">Ұ<br>
            <input type="radio" class="per" name="vp11" value="no" id="value2">И<br>
            <input type="radio" class="per" name="vp11" value="no" id="value3">О<br>
            <input type="radio" class="per" name="vp11" value="no" id="value4">Я<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Һ.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp12" checked="checked" value="no" id="value1">Д<br>
            <input type="radio" class="per" name="vp12" value="no" id="value2">М<br>
            <input type="radio" class="per" name="vp12" value="no" id="value3">К<br>
            <input type="radio" class="per" name="vp12" value="yes" id="value4">Һ<br>
        </div>
        <div>
            <h3>Какая эта буква? <audio src="audio/Ә.mp3" style="height: 20px; width: 20px;" controls="controls"></audio></h3>
            <input type="radio" class="per" name="vp13" checked="checked" value="no" id="value1">Э<br>
            <input type="radio" class="per" name="vp13" value="no" id="value2">О<br>
            <input type="radio" class="per" name="vp13" value="no" id="value3">А<br>
            <input type="radio" class="per" name="vp13" value="yes" id="value4">Ә<br>
        </div>
        <div>
            <h3>Сколько будет 7-3?</h3>
            <input type="radio" class="per" name="vp14" checked="checked" value="yes" id="value1">Төрт<br>
            <input type="radio" class="per" name="vp14" value="no" id="value2">Алты<br>
            <input type="radio" class="per" name="vp14" value="no" id="value3">Екi<br>
            <input type="radio" class="per" name="vp14" value="no" id="value4">Бес<br>
        </div>
        <div>
            <h3>Цифра семь на казахском?</h3>
            <input type="radio" class="per" name="vp15" checked="checked" value="no" id="value1">Төрт<br>
            <input type="radio" class="per" name="vp15" value="yes" id="value2">Жеті<br>
            <input type="radio" class="per" name="vp15" value="no" id="value3">Алты<br>
            <input type="radio" class="per" name="vp15" value="no" id="value4">Бес<br>
        </div>
        <div>
            <h3>Какое слово соответствует цифре "9" в казахском языке?</h3>
            <input type="radio" class="per" name="vp16" checked="checked" value="no" id="value1">Төрт<br>
            <input type="radio" class="per" name="vp16" value="no" id="value2">Жеті<br>
            <input type="radio" class="per" name="vp16" value="no" id="value3">Нөл<br>
            <input type="radio" class="per" name="vp16" value="yes" id="value4">Тоғыз<br>
        </div>

        <div>
            <h3>Какое слово соответствует цифре "8" в казахском языке?</h3>
            <input type="radio" class="per" name="vp17" checked="checked" value="no" id="value1">Нөл<br>
            <input type="radio" class="per" name="vp17" value="yes" id="value2">Cегіз<br>
            <input type="radio" class="per" name="vp17" value="no" id="value3">Он<br>
            <input type="radio" class="per" name="vp17" value="no" id="value4">Тоғыз<br>
        </div>

        <div>
            <h3>Как переводится цифра "2" на казахском языке?</h3>
            <input type="radio" class="per" name="vp18" checked="checked" value="no" id="value1">Төрт<br>
            <input type="radio" class="per" name="vp18" value="yes" id="value2">Екі<br>
            <input type="radio" class="per" name="vp18" value="no" id="value3">Алты<br>
            <input type="radio" class="per" name="vp18" value="no" id="value4">Тоғыз<br>
        </div>
        <div>
            <h3>Сколько букв в слове "үш"?</h3>
            <input type="radio" class="per" name="vp19" checked="checked" value="no" id="value1">Он<br>
            <input type="radio" class="per" name="vp19" value="no" id="value2">үш<br>
            <input type="radio" class="per" name="vp19" value="yes" id="value3">Екі<br>
            <input type="radio" class="per" name="vp19" value="no" id="value4">Тоғыз<br>
        </div>

        <div>
            <h3>Какое слово соответствует цифре "10" в казахском языке?</h3>
            <input type="radio" class="per" name="vp20" checked="checked" value="yes" id="value1">Он<br>
            <input type="radio" class="per" name="vp20" value="no" id="value2">Сегіз<br>
            <input type="radio" class="per" name="vp20" value="no" id="value3">Бес<br>
            <input type="radio" class="per" name="vp20" value="no" id="value4">Алты<br>
        </div>
        <br>
        <br>
    </form>
</body>
<div class="proverka">
    <input class="button" type="reset" name="reset" id="reset" value="Сбросить все ответы" onclick="refreshPage()">
    <input class="button" type="submit" id="submit" value="Проверить мои знания" onclick="check()">
</div>
<a class="nextlvll" href="nizkiy.php">следующий уровень</a>

</html>