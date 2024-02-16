<?php include  "fucntions/header.php" ?>

<body>

    <h1 class="snl">Вы выбрали курс: Средний уровень</h1>
    <h2 class="vi_vibrali">Начнем с изучения: Падежам</h2>
    <h1 class="texta">Падежи</h1>
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/MeqILKf5GoA?si=F8VqJV6g4GzQfjav"  frameborder="0" allowfullscreen></iframe></div>



    <h2 class="vi_vibrali">Продолжим с изучения: Личных окончания казахского языка</h2>
    <h1 class="texta">Жалғау</h1>
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/G6EPpJsrCHE?si=Xjwf_t8B88ihMQkf"  frameborder="0" allowfullscreen></iframe></div>
    
    <h2 class="vi_vibrali">Продолжим с изучения: Окончаний множественных чисел</h2>
    <h1 class="texta">Көптік жалғау</h1>
    
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/5tHNECpkEeA?si=8zvZUk0fogM931iE"  frameborder="0" allowfullscreen></iframe></div>
    

    <form action="javascript:check();" class="quiz1" name="quiz" id="quiz">
        <div>
            <h3>Добавьте окончания множественного числа  аспап______</h3>
            <input type="radio" class="per" name="vp1" checked="checked" value="no" id="value1">лар<br>
            <input type="radio" class="per" name="vp1" value="no" id="value2">дар<br>
            <input type="radio" class="per" name="vp1" value="yes" id="value3">тар<br>
            <input type="radio" class="per" name="vp1" value="no" id="value4">тер<br>
        </div>
        <div>
            <h3>Добавьте окончания множественного числа маман______</h3>
            <input type="radio" class="per" name="vp2" checked="checked" value="no" id="value1">лар<br>
            <input type="radio" class="per" name="vp2" value="no" id="value2">дер<br>
            <input type="radio" class="per" name="vp2" value="yes" id="value3">дар<br>
            <input type="radio" class="per" name="vp2" value="no" id="value4">тер<br>
        </div>
        <div>
            <h3>Какие окончания у местоимения Менің?</h3>
            <input type="radio" class="per" name="vp3" checked="checked" value="yes" id="value1">-ым/-ім, -м<br>
            <input type="radio" class="per" name="vp3" value="no" id="value2">-сы/-сі, -ы/-і<br>
            <input type="radio" class="per" name="vp3" value="no" id="value3">-ың/-ің, -ң<br>
            <input type="radio" class="per" name="vp3" value="no" id="value4">-ыңыз/-іңіз, -ңыз/-ңіз<br>
        </div>
        <div>
            <h3>Как переводится Что это?</h3>
            <input type="radio" class="per" name="vp4" checked="checked" value="no" id="value1">Бұл кім<br>
            <input type="radio" class="per" name="vp4" value="no" id="value2">Бұл не үшін<br>
            <input type="radio" class="per" name="vp4" value="yes" id="value3">Бұл не<br>
            <input type="radio" class="per" name="vp4" value="no" id="value4">бұл қашан<br>
        </div>
        <div>
            <h3>Какие окончания у местоимения Біз?</h3>
            <input type="radio" class="per" name="vp5" checked="checked" value="no" id="value1">-<br>
            <input type="radio" class="per" name="vp5" value="no" id="value2">-сыздар/-сiздер<br>
            <input type="radio" class="per" name="vp5" value="no" id="value3">-сыңдар/-сiңдер<br>
            <input type="radio" class="per" name="vp5" value="yes" id="value4">-мыз/-мiз, -быз/-бiз, -пыз/-пiз<br>
        </div>
        <div>
            <h3>Как переводится Сіз кімсіз?</h3>
            <input type="radio" class="per" name="vp6" checked="checked" value="no" id="value1">Я кто?<br>
            <input type="radio" class="per" name="vp6" value="no" id="value2">Ты кто?<br>
            <input type="radio" class="per" name="vp6" value="yes" id="value3">Вы кто?<br>
            <input type="radio" class="per" name="vp6" value="no" id="value4">Они кто?<br>
        </div>
        <div>
            <h3>Санатта дәптер бар. Какой это падеж?</h3>
            <input type="radio" class="per" name="vp7" checked="checked" value="no" id="value1">Атау септік<br>
            <input type="radio" class="per" name="vp7" value="yes" id="value2">Жатыс септік<br>
            <input type="radio" class="per" name="vp7" value="no" id="value3">Ілік септік<br>
            <input type="radio" class="per" name="vp7" value="no" id="value4">Шығыс септік<br>
        </div>
        
        <div>
            <h3>Добавьте окончания множественного числа қарбыз______</h3>
            <input type="radio" class="per" name="vp8" checked="checked" value="yes" id="value1">дар<br>
            <input type="radio" class="per" name="vp8" value="no" id="value2">тер<br>
            <input type="radio" class="per" name="vp8" value="no" id="value3">дер<br>
            <input type="radio" class="per" name="vp8" value="no" id="value4">тар<br>
        </div>
        <div>
            <h3>Какой из следующих примеров относится к Шығыс септік?</h3>
            <input type="radio" class="per" name="vp9" checked="checked" value="no" id="value1">Боксшы қарсыласын ұрды<br>
            <input type="radio" class="per" name="vp9" value="no" id="value2">Дима ұшақта отыр<br>
            <input type="radio" class="per" name="vp9" value="yes" id="value3">Мен досымнан үйге барамын<br>
            <input type="radio" class="per" name="vp9" value="no" id="value4">Адам ғимаратқа кірді<br>
        </div>
        <div>
            <h3>Какой из следующих примеров относится к Барыс септік?</h3>
            <input type="radio" class="per" name="vp10" checked="checked" value="no" id="value1">Мишаның досы қазақ тілін үйретеді<br>
            <input type="radio" class="per" name="vp10" value="yes" id="value2">Адам ғимаратқа кірді<br>
            <input type="radio" class="per" name="vp10" value="no" id="value3">Атам газетті оқыды<br>
            <input type="radio" class="per" name="vp10" value="no" id="value4">Тас өзенде жатыр<br>
        </div>
        <div>
            <h3>Какой падеж владеет окончаниями -да/-де, -та/-те и -нда/-нде?</h3>
            <input type="radio" class="per" name="vp11" checked="checked" value="no" id="value1">Көмектес септік<br>
            <input type="radio" class="per" name="vp11" value="no" id="value2">Атау септік<br>
            <input type="radio" class="per" name="vp11" value="yes" id="value3">Жатыс септік<br>
            <input type="radio" class="per" name="vp11" value="no" id="value4">Табыс септік<br>
        </div>  
        <div>
            <h3> Добавьте окончания множественного числа сұрет______</h3>
            <input type="radio" class="per" name="vp12" checked="checked" value="no" id="value1">лер<br>
            <input type="radio" class="per" name="vp12" value="no" id="value2">лар<br>
            <input type="radio" class="per" name="vp12" value="yes" id="value3">тер<br>
            <input type="radio" class="per" name="vp12" value="no" id="value4">дер<br>
        </div>
        <div>
            <h3>Какой падеж имеет окончания -ды/-ді, -ты/-ті, -ны/-ні, -н?</h3>
            <input type="radio" class="per" name="vp13" checked="checked" value="yes" id="value1">Табыс септік<br>
            <input type="radio" class="per" name="vp13" value="no" id="value2">Шығыс септік<br>
            <input type="radio" class="per" name="vp13" value="no" id="value3">Ілік септік<br>
            <input type="radio" class="per" name="vp13" value="no" id="value4">Атау септік<br>
        </div>
        <div>
            <h3>Добавьте личные окончания 1-го лица единственного числа Мен дайын_______ </h3>
            <input type="radio" class="per" name="vp14" checked="checked" value="yes" id="value1">мын<br>
            <input type="radio" class="per" name="vp14" value="no" id="value2">іин<br>
            <input type="radio" class="per" name="vp14" value="no" id="value3">пін<br>
            <input type="radio" class="per" name="vp14" value="no" id="value4">пын<br>
        </div>
        <div>
            <h3> Добавьте личные окончания 1-го лица единственного числа  Мен бақытсыз_______ </h3>
            <input type="radio" class="per" name="vp15" checked="checked" value="yes" id="value1">бын<br>
            <input type="radio" class="per" name="vp15" value="no" id="value2">бін<br>
            <input type="radio" class="per" name="vp15" value="no" id="value3">пін<br>
            <input type="radio" class="per" name="vp15" value="no" id="value4">пын<br>
        </div>
        <div>
            <h3>Добавьте личные окончания 1-го лица единственного числа  Мен жиырмада_______ </h3>
            <input type="radio" class="per" name="vp16" checked="checked" value="no" id="value1">пін<br>
            <input type="radio" class="per" name="vp16" value="yes" id="value2">мын<br>
            <input type="radio" class="per" name="vp16" value="no" id="value3">пын<br>
            <input type="radio" class="per" name="vp16" value="no" id="value4">дын<br>
        </div>
        <div>
            <h3>Какие окончания у Шығыс септік?</h3>
            <input type="radio" class="per" name="vp17" checked="checked" value="no" id="value1">-ның/-нің, -дың/-дің, -тың/-тің<br>
            <input type="radio" class="per" name="vp17" value="yes" id="value2">-нан/-нен, -дан/-ден, -тан/-тен<br>
            <input type="radio" class="per" name="vp17" value="no" id="value3">-ды/-ді, -ты/-ті, -ны/-ні, -н<br>
            <input type="radio" class="per" name="vp17" value="no" id="value4">-ға/-ге, -қа/-ке, -на/-не, -а/-е<br>
        </div>
        <div>
            <h3>Какое окончания у Көмектес септік?</h3>
            <input type="radio" class="per" name="vp18" checked="checked" value="no" id="value1">-ның/-нің, -дың/-дің, -тың/-тің<br>
            <input type="radio" class="per" name="vp18" value="no" id="value2">-да/-де, -та/-те и -нда/-нде<br>
            <input type="radio" class="per" name="vp18" value="yes" id="value3">-мен, -бен, -пен<br>
            <input type="radio" class="per" name="vp18" value="no" id="value4">-нан/-нен, -дан/-ден, -тан/-тен<br>
        </div>
        <div>
            <h3>Добавьте личные окончания 1-го лица единственного числа Мен Қанат_______ </h3>
            <input type="radio" class="per" name="vp19" checked="checked" value="no" id="value1">пін<br>
            <input type="radio" class="per" name="vp19" value="no" id="value2">дын<br>
            <input type="radio" class="per" name="vp19" value="yes" id="value3">пын<br>
            <input type="radio" class="per" name="vp19" value="no" id="value4">дін<br>
        </div>
        <div>
            <h3>Добавьте личные окончания 1-го лица единственного числа Мен дүкенде _______</h3>
            <input type="radio" class="per" name="vp20" checked="checked" value="no" id="value1">бін<br>
            <input type="radio" class="per" name="vp20" value="no" id="value2">пын<br>
            <input type="radio" class="per" name="vp20" value="no" id="value3">пін<br>
            <input type="radio" class="per" name="vp20" value="yes" id="value4">мін<br>
        </div>
        <br>
        <br>
    </form>
    <div class="proverka">
        <input class="button" type="reset" name="reset" id="reset" value="Сбросить все ответы" onclick="refreshPage()">
        <input class="button" type="submit" id="submit" value="Проверить мои знания" onclick="check()">
    </div>

</body>
<div class="vperednazad">
    <a class="backlvl" href="nizkiy.php">предыдущий уровень</a>
    <a class="nextlvl " href="highlvl.php">следующий уровень</a>
</div>

</html>