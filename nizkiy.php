<?php include  "fucntions/header.php" ?>

<body>
    <h1 class="snl">Вы выбрали курс: Низкий уровень</h1>
    <h2 class="vi_vibrali">Начнем с изучения: Имен существительных </h2>
    <h1 class="texta">Зат есім</h1>
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/efrRh4HptmY?si=82DHJvhPbG8aIbdD" frameborder="0" allowfullscreen></iframe></div>
    
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/jBvnlISPovU?si=8RIeLogsDTfHz00I"  frameborder="0" allowfullscreen></iframe></div>
    
        
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/iarTeKGwRrk?si=2EOysvwA0gR2MVaV"  frameborder="0" allowfullscreen></iframe></div>
    
            
    <div style="display: flex; justify-content: center; align-items: center; margin:50px;">
    <iframe width="40%" height="400" src="https://www.youtube.com/embed/4bFtc1FVvso?si=T3w369mvO_Rq_61Q"  frameborder="0" allowfullscreen></iframe></div>
    
        <form action="javascript:check1();" class="quiz1" name="quiz" id="quiz">
        <div>
            <h3>Найдите соответствие для имен существительных</h3>
            <input type="radio" class="per" name="vp1" checked="checked" value="no" id="value1">-қар, -көр<br>
            <input type="radio" class="per" name="vp1" value="no" id="value2">-сын, -сін<br>
            <input type="radio" class="per" name="vp1" value="no" id="value3">-дан, -ден<br>
            <input type="radio" class="per" name="vp1" value="yes" id="value4">-лық, -лік<br>
        </div>
        <div>
            <h3>Укажите верный имена существительные.</h3>
            <input type="radio" class="per" name="vp2" checked="checked" value="no" id="value1">Көмекші<br>
            <input type="radio" class="per" name="vp2" value="no" id="value2">Тарсыл<br>
            <input type="radio" class="per" name="vp2" value="yes" id="value3">Қалам<br>
            <input type="radio" class="per" name="vp2" value="no" id="value4">Мәдениетті<br>
        </div>
        <div>
            <h3>Укажите имена существительные.</h3>
            <input type="radio" class="per" name="vp3" checked="checked" value="no" id="value1">Қарсы алу<br>
            <input type="radio" class="per" name="vp3" value="no" id="value2">Қалың<br>
            <input type="radio" class="per" name="vp3" value="no" id="value3">Көмектесу<br>
            <input type="radio" class="per" name="vp3" value="yes" id="value4">Басшы<br>
        </div>
        <div>
            <h3>Найдите основные имена существительные.</h3>
            <input type="radio" class="per" name="vp4" checked="checked" value="no" id="value1">Күздік<br>
            <input type="radio" class="per" name="vp4" value="no" id="value2">Көмекші<br>
            <input type="radio" class="per" name="vp4" value="yes" id="value3">Кітап<br>
            <input type="radio" class="per" name="vp4" value="no" id="value4">Әнші<br>
        </div>
        <div>
            <h3>Какое понятие обозначает сын есім?</h3>
            <input type="radio" class="per" name="vp5" checked="checked" value="yes" id="value1">заттың сынын <br>
            <input type="radio" class="per" name="vp5" value="no" id="value2">заттың қимыл-әрекетін<br>
            <input type="radio" class="per" name="vp5" value="no" id="value3">заттың ретін<br>
            <input type="radio" class="per" name="vp5" value="no" id="value4">заттың атын<br>
        </div>
        <div>
            <h3>Укажите зат существительные, образованные от етістік (добавление суффиксов).</h3>
            <input type="radio" class="per" name="vp6" checked="checked" value="no" id="value1">Жақсылық<br>
            <input type="radio" class="per" name="vp6" value="yes" id="value2">Бөлме<br>
            <input type="radio" class="per" name="vp6" value="no" id="value3">Дәріхана<br>
            <input type="radio" class="per" name="vp6" value="no" id="value4">Достық<br>
        </div>
        <div>
            <h3>Какие вопросы относятся к сын есім?</h3>
            <input type="radio" class="per" name="vp7" checked="checked" value="no" id="value1">кімдер?нелер?<br>
            <input type="radio" class="per" name="vp7" value="yes" id="value2">қандай?қай? <br>
            <input type="radio" class="per" name="vp7" value="no" id="value3">кім?не?<br>
            <input type="radio" class="per" name="vp7" value="no" id="value4">қайдан?<br>
        </div>
        <div>
            <h3>Какое относится к дара сын есім?</h3>
            <input type="radio" class="per" name="vp8" checked="checked" value="yes" id="value1">жасыл <br>
            <input type="radio" class="per" name="vp8" value="no" id="value2">үлкен-кіші<br>
            <input type="radio" class="per" name="vp8" value="no" id="value3">қызыл күрең<br>
            <input type="radio" class="per" name="vp8" value="no" id="value4">қызыл ала<br>
        </div>
        <div>
            <h3>Дүниежүзілік сөзіне сәйкес сұрақ?</h3>
            <input type="radio" class="per" name="vp9" checked="checked" value="no" id="value1">қайда?<br>
            <input type="radio" class="per" name="vp9" value="no" id="value2">кім?<br>
            <input type="radio" class="per" name="vp9" value="no" id="value3">не?<br>
            <input type="radio" class="per" name="vp9" value="yes" id="value4">қандай?<br>
        </div>
        <div>
            <h3>Какое слово является сапалық сын есім</h3>
            <input type="radio" class="per" name="vp10" checked="checked" value="no" id="value1">атақты<br>
            <input type="radio" class="per" name="vp10" value="yes" id="value2">тамаша <br>
            <input type="radio" class="per" name="vp10" value="no" id="value3">білімді<br>
            <input type="radio" class="per" name="vp10" value="no" id="value4">киелі<br>
        </div>
        <div>
            <h3>В каком предложении используется сан есім?</h3>
            <input type="radio" class="per" name="vp11" checked="checked" value="no" id="value1">1845-жылы ұлы Абай дүниеге келген<br>
            <input type="radio" class="per" name="vp11" value="yes" id="value2">30-40-тай адам жиналған екен<br>
            <input type="radio" class="per" name="vp11" value="no" id="value3">Сағат 6 ға 10 минут қалған кезде Азамат пәтерінен шықты<br>
            <input type="radio" class="per" name="vp11" value="no" id="value4">Біз 2-еу едік<br>
        </div>
        <div>
            <h3>Есептік сан есім қатысқан сөйлемді табыңыз</h3>
            <input type="radio" class="per" name="vp12" checked="checked" value="no" id="value1">Мен 11-ші сыныпта оқимын<br>
            <input type="radio" class="per" name="vp12" value="no" id="value2">Арада жыл жарым өтті<br>
            <input type="radio" class="per" name="vp12" value="yes" id="value3">Күллі ақыл мен ғылымды тоздыратұғын нәрсе бар<br>
            <input type="radio" class="per" name="vp12" value="no" id="value4">Бір үйден он бес – жиырмадан мал өреді<br>
        </div>
        <div>
            <h3>Определите дара сан есім </h3>
            <input type="radio" class="per" name="vp13" checked="checked" value="no" id="value1">екі-үш<br>
            <input type="radio" class="per" name="vp13" value="no" id="value2">төрттен бір <br>
            <input type="radio" class="per" name="vp13" value="no" id="value3">отыз бес<br>
            <input type="radio" class="per" name="vp13" value="yes" id="value4">үшінші <br>
        </div>
        <div>
            <h3>Найдите сан есім</h3>
            <input type="radio" class="per" name="vp14" checked="checked" value="no" id="value1">үйдің іші<br>
            <input type="radio" class="per" name="vp14" value="yes" id="value2">ондаған адам  <br>
            <input type="radio" class="per" name="vp14" value="no" id="value3">данагөй қария<br>
            <input type="radio" class="per" name="vp14" value="no" id="value4">әлденеше күн<br>
        </div>
        <div>
            <h3>Выберите предложение, в котором есть топтау сан есім</h3>
            <input type="radio" class="per" name="vp15" checked="checked" value="no" id="value1">Мен қазақпын мың өліп, мың тірілген.<br>
            <input type="radio" class="per" name="vp15" value="yes" id="value2">Бір қатарға он-оннан тізіле қалды.  <br>
            <input type="radio" class="per" name="vp15" value="no" id="value3">1910 жылы Қазанда «Бақытсыз Жамал» романы басылып шыққан.<br>
            <input type="radio" class="per" name="vp15" value="no" id="value4">Оың жасы қарақтарда.<br>
        </div>
        <div>
            <h3>Тұйық етістікті аңықтаңыз</h3>
            <input type="radio" class="per" name="vp16" checked="checked" value="yes" id="value1">Шегелеу<br>
            <input type="radio" class="per" name="vp16" value="no" id="value2">Комектес  <br>
            <input type="radio" class="per" name="vp16" value="no" id="value3">Көрсет <br>
            <input type="radio" class="per" name="vp16" value="no" id="value4">Түсіндір <br>
        </div>
        <div>
            <h3>жақтағы етістікті табыңыз</h3>
            <input type="radio" class="per" name="vp17" checked="checked" value="no" id="value1">Отырсыз <br>
            <input type="radio" class="per" name="vp17" value="yes" id="value2">Барамын <br>
            <input type="radio" class="per" name="vp17" value="no" id="value3">Келді <br>
            <input type="radio" class="per" name="vp17" value="no" id="value4">Алады<br>
        </div>
        <div>
            <h3>Етістік дегеніміз не?</h3>
            <input type="radio" class="per" name="vp18" checked="checked" value="no" id="value1">Заттың атың білдіреді  <br>
            <input type="radio" class="per" name="vp18" value="no" id="value2">тамаша<br>
            <input type="radio" class="per" name="vp18" value="no" id="value3">Заттың түрін тусін білдіреді<br>
            <input type="radio" class="per" name="vp18" value="yes" id="value4">заттың қимыл әрекетің  білдіреді<br>
        </div>
        <div>
            <h3>Етістіктің сұрақтарын көрсетіңіз</h3>
            <input type="radio" class="per" name="vp19" checked="checked" value="no" id="value1">Қалай?<br>
            <input type="radio" class="per" name="vp19" value="yes" id="value2">Не істеді? <br>
            <input type="radio" class="per" name="vp19" value="no" id="value3">Неден?<br>
            <input type="radio" class="per" name="vp19" value="no" id="value4">Қандай?<br>
        </div>
        <div>
            <h3>Тұйық етістікті ата</h3>
            <input type="radio" class="per" name="vp20" checked="checked" value="no" id="value1">Барамын  <br>
            <input type="radio" class="per" name="vp20" value="no" id="value2">Жүрсіз   <br>
            <input type="radio" class="per" name="vp20" value="yes" id="value3">Отыру <br>
            <input type="radio" class="per" name="vp20" value="no" id="value4">Ойлады<br>
        </div>
        <br>
        <br>
    </form>
    <div class="proverka">
        <input class="button" type="reset" name="reset" id="reset" value="Сбросить все ответы" onclick="refreshPage()">
        <input class="button" type="submit" id="submit" value="Проверить мои знания" onclick="check()">
    </div>
    <div class="vperednazad">
        <a class="backlvl" href="snyla.php">предыдущий уровень</a>
        <a class="nextlvl" href="sredniu.php">следующий уровень</a>
    </div>
</body>
</html>