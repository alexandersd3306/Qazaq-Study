<?php include  "fucntions/header.php" ?>


<body>
    <script>

</script>

    <h1 class="snl">Вы выбрали курс: Выскоий уровень</h1>
    <h2 class="vi_vibrali">Углубленное изучение(Есть,Оқу,Жазба)</h2>
    <h2 class="vi_vibrali">Начнем с Слушания(Есть)</h2>
    <h2 class="vi_vibrali">1 аудио<br>
1-4 сұрақтар Дұрыс A, Ә немесе Б әрпін таңдаңыз
</h2>
    <audio src="audio/1list.mp3" style="height: 70px; width: 600px; transform: translate(70%); border: 2px solid #fff; padding: 10px 10px;" controls="controls"></audio>
    <form action="javascript:void(0);" class="quiz1" name="quiz1" id="quiz1">
        <div>
            <h3>Арайдың жасы нешеде?</h3>
            <input type="radio" class="per" name="vp1" checked="checked" value="no" id="value1">16<br>
            <input type="radio" class="per" name="vp1" value="yes" id="value2">15<br>
            <input type="radio" class="per" name="vp1" value="no" id="value3">14<br>
        </div>
        <div>
            <h3>Арайдың тұған қаласы?</h3>
            <input type="radio" class="per" name="vp2" checked="checked" value="no" id="value1">Шымкент <br>
            <input type="radio" class="per" name="vp2" value="yes" id="value2">Ақтөбе <br>
            <input type="radio" class="per" name="vp2" value="no" id="value3">Алматы <br>
        </div>
        <div>
            <h3>Арай Алматыға неше жасында кешіп келді?</h3>
            <input type="radio" class="per" name="vp3" checked="checked" value="yes" id="value1">7 <br>
            <input type="radio" class="per" name="vp3" value="no" id="value2">8 <br>
            <input type="radio" class="per" name="vp3" value="no" id="value3">9 <br>
        </div>
        <div>
            <h3>Арай нешінші мектепте оқиды?</h3>
            <input type="radio" class="per" name="vp4" checked="checked" value="no" id="value1">64 <br>
            <input type="radio" class="per" name="vp4" value="no" id="value2">54 <br>
            <input type="radio" class="per" name="vp4" value="yes" id="value3">74 <br>
        </div>
        <input class="button" type="button" value="Проверить тест 1" onclick="checkForm('quiz1', 4, [1, 2, 3, 4])">
        <br>
        <br>
        </form>
        <h2 class="vi_vibrali" style="margin-top:15px">5-7 сұрақтар <br>
     Келесі мәлімдемелер мәтінде келтірілген ақпаратқа сәйкес келе ме? <br>
Егер мәлімдеме мәтіндегі ақпаратқа сәйкес келсе, дұрыс деп жазыңыз. <br>
Егер мәлімдеме мәтіндегі ақпаратқа сәйкес келмесе, бұрыс жазыңыз.<br>

<form action="javascript:void(0);" class="quiz1" name="quiz2" id="quiz2">
        <div>
            <h3>Арайдын сүйікті пәндері тарих, физика.</h3>
            <input type="radio" class="per" name="vp5" checked="checked" value="no" id="value4">Дұрыс<br>
            <input type="radio" class="per" name="vp5" value="yes" id="value6">Бұрыс<br>
        </div>
        <div>
            <h3>Бос уақытында сурет салады, спортпен айналысады.</h3>
            <input type="radio" class="per" name="vp6" checked="checked" value="yes" id="value4">Дұрыс<br>
            <input type="radio" class="per" name="vp6" value="no" id="value6">Бұрыс<br>
        </div>
        <div>
            <h3>Болашакты мұғалім болғысы келеді.</h3>
            <input type="radio" class="per" name="vp7" checked="checked" value="yes" id="value4">Дұрыс<br>
            <input type="radio" class="per" name="vp7" value="no" id="value6">Бұрыс<br>
        </div>
    <input class="button" type="button" value="Проверить тест 2" onclick="checkForm('quiz2', 3, [1, 1, 2, 3])">

</form>
<h2 class="vi_vibrali">8-14 сұрақтар <br>
Бейнені қараңыз және үш сөзден және/немесе цифрдан аспайтын төмендегі сөйлемдерді аяқтаңыз. <br>
</h2>
<audio src="audio/2list.mp3" style="height: 70px; width: 600px; border: 2px solid #fff; padding: 10px 10px;  transform: translate(70%);" controls="controls"></audio>
<form action="javascript:void(0);" class="quiz1" name="quiz3" id="quiz3">
        <div>
            <h3>Наурыз - ең ... мейрамдардың бірі.</h3>
            <input type="radio" class="per" name="vp8" checked="checked" value="yes" id="value4">көне<br>
            <input type="radio" class="per" name="vp8" value="no" id="value6">көп<br>
            <input type="radio" class="per" name="vp8" checked="checked" value="no" id="value4">кене<br>
            <input type="radio" class="per" name="vp8" value="no" id="value6">көрпе<br>
        </div>
        <div>
            <h3>Наурыз ... халықтарының Жаңа жылы.</h3>
            <input type="radio" class="per" name="vp9" checked="checked" value="yes" id="value4">Орталық Азия<br>
            <input type="radio" class="per" name="vp9" value="no" id="value6">Аралық Азия<br>
            <input type="radio" class="per" name="vp9"  value="no" id="value4">Орман Азия <br>
            <input type="radio" class="per" name="vp9" value="no" id="value6">Ортада Азия
<br>
        </div>
        <div>
            <h3>Наурыз мейрамы ... жыл бұрын пайда болған.</h3>
            <input type="radio" class="per" name="vp10"  value="no" id="value4">50<br>
            <input type="radio" class="per" name="vp10" value="yes" id="value6">5000<br>
            <input type="radio" class="per" name="vp10" checked="checked" value="no" id="value4">500<br>
            <input type="radio" class="per" name="vp10" value="yes" id="value6">5500<br>
        </div>
        <div>
            <h3>"Наурыз" сөзі парсыдан "..." деп аударылады.</h3>
            <input type="radio" class="per" name="vp11"  value="no" id="value4">жасыл гүл <br>
            <input type="radio" class="per" name="vp11" value="no" id="value6">жаңа гүл <br>
            <input type="radio" class="per" name="vp11" checked="checked" value="no" id="value4">жасыл күн<br>
            <input type="radio" class="per" name="vp11" value="yes" id="value6">жаңа күн <br>
        </div>
        <div>
            <h3>Бул мейрамда міндетті түрде ... пісіреді.</h3>
            <input type="radio" class="per" name="vp12" checked="checked" value="no" id="value4">Наурыз көжек
<br>
            <input type="radio" class="per" name="vp12" value="yes" id="value6">Наурыз  көже <br>
            <input type="radio" class="per" name="vp12" value="no" id="value4">Наурыз кесе <br>
            <input type="radio" class="per" name="vp12" value="no" id="value6">Наурыз кеме <br>
        </div>
        <div>
            <h3>Бұл күні ... адамдар татуласады.</h3>
            <input type="radio" class="per" name="vp13" checked="checked" value="yes" id="value4">ренжискен <br>
            <input type="radio" class="per" name="vp13" value="no" id="value6">ренжиме<br>
            <input type="radio" class="per" name="vp13" value="no" id="value4">ренжыген <br>
            <input type="radio" class="per" name="vp13" value="no" id="value6">ренышпен <br>
        </div>
        <div>
            <h3>... бата береді</h3>
            <input type="radio" class="per" name="vp14" checked="checked" value="no" id="value4">Ақшақарлар<br>
            <input type="radio" class="per" name="vp14" value="yes" id="value6">Ақсақалдар <br>
            <input type="radio" class="per" name="vp14"  value="no" id="value4">Ақ самайлар <br>
            <input type="radio" class="per" name="vp14" value="no" id="value6">Ақ аршалар<br>
        </div>
<input class="button" type="button" value="Проверить тест 3" onclick="checkForm('quiz3', 7, [2, 4, 5, 6])">
</form>
    <h2 class="vi_vibrali">
    15-20 cұрақтар <br>
    Дұрыс A, B, C немесе D әрпін таңдаңыз. <br></h2>
  <audio src="audio/3list.mp3" style="height: 70px; width: 600px; border: 2px solid #fff; padding: 10px 10px; transform: translate(70%);" controls="controls"></audio>
  <form action="javascript:void(0);" class="quiz1" name="quiz4" id="quiz4">
    <div>
        <h3>Самалдың досының туған күні қашан?</h3>
        <input type="radio" class="per" name="vp15" checked="checked" value="no" id="value4">27 маусым<br>
        <input type="radio" class="per" name="vp15" value="yes" id="value6">22 маусым  <br>
        <input type="radio" class="per" name="vp15"  value="no" id="value4">27 мамыр  <br>
        <input type="radio" class="per" name="vp15" value="no" id="value6">22 мамыр <br>
    </div>
    <div>
        <h3> Самал дүкенге кіммен барады? </h3>
        <input type="radio" class="per" name="vp16" checked="checked" value="no" id="value4">апайымен<br>
        <input type="radio" class="per" name="vp16" value="yes" id="value6">анасымен  <br>
        <input type="radio" class="per" name="vp16"  value="no" id="value4">ағасымен   <br>
        <input type="radio" class="per" name="vp16" value="no" id="value6">апасымен  <br>
    </div>

    <div>
        <h3>Самал қандай түсті киімдерді ұнатады?</h3>
        <input type="radio" class="per" name="vp17" checked="checked" value="yes" id="value4">қызыл, алқызыл күлгін<br>
        <input type="radio" class="per" name="vp17" value="no" id="value6">қоңыр, алқызыл, көк <br>
        <input type="radio" class="per" name="vp17"  value="no" id="value4">қызгылт, алқызыл, күлгін <br>
        <input type="radio" class="per" name="vp17" value="no" id="value6">коңыр, алқызыл, күлгін; <br>
    </div>

    <div>
        <h3>Самал қандай түсті кейпек сатып алды?</h3>
        <input type="radio" class="per" name="vp18" checked="checked" value="yes" id="value4">жасыл <br>
        <input type="radio" class="per" name="vp18" value="no" id="value6">қара <br>
        <input type="radio" class="per" name="vp18"  value="no" id="value4">қоңыр<br>
        <input type="radio" class="per" name="vp18" value="no" id="value6">қызыл <br>
    </div>
    <div>
        <h3>Самалдың досы нені унатады? </h3>
        <input type="radio" class="per" name="vp19" checked="checked" value="no" id="value4">кино көру, сурет салу 
<br>
        <input type="radio" class="per" name="vp19" value="no" id="value6">сурет жинау, тауға шығу<br>
        <input type="radio" class="per" name="vp19"  value="no" id="value4">кітап оқу, суға тусу<br>
        <input type="radio" class="per" name="vp19" value="yes" id="value6">кітап оқу, сурет салу<br>
    </div>
    <div>
        <h3>Самалдың досының туған күні қашан?</h3>
        <input type="radio" class="per" name="vp20" checked="checked" value="no" id="value4">көйлек<br>
        <input type="radio" class="per" name="vp20" value="no" id="value6">сурет құралдары <br>
        <input type="radio" class="per" name="vp20"  value="yes" id="value4">кұмыра<br>
        <input type="radio" class="per" name="vp20" value="no" id="value6">кітап<br>
    </div>
    <input class="button" type="button" value="Проверить тест 4" onclick="checkForm('quiz4', 6, [1, 2, 3, 5])">

</form>
    <h2 class="vi_vibrali">Продолжим с Чтения(Оқу)</h2>
    <div class="blocki">
    Бір ғұлама шәкіртінің әр нәрседен үнемі шағымданып жүретінін көріп қалады. Содан бір күні ол шәкіртті шақыртып алып, тұзға жібереді. Үнемі зарланып жүретін шәкірт тұз алып келген кезде қария оған бір уыс тұзды бір стакан суға ерітіп іш дейді. Шәкірт бұлжытпай айтқанын орындаса да, тұзды суды көп іше алмай түкіре бастайды. “Дәмі қалай екен?” деп сұрайды қария. Шәкірті “Ащы” деп жауап береді ызаланып. Ғұлама шәкіртті қолынан ұстап, жақын жердегі бұлаққа алып барады. Бір уыс тұзды суға қосып, сол судан да ішіп көруін сұрайды. Бұлақтың мөлдір суын ішкен шәкірттен қайтадан судың дәмін сұрайды. “Tәтті” дейді шәкірт. “Тұздың дәмін сездің ба?” сұрағына да, “жоқ” деп жауап береді. Осы кезде ғұлама: “Өмірдегі қиындықтар осы тұз тәрізді, аз да емес, көп те емес – үнемі бірдей мөлшерде. Байқағаныңдай тұздың ненің ішіне қойылғандығы ғана маңызды. Сол сияқты, өмірдегі қиындықтардың да ащы болып, болмауы тек сенің сезімдеріне байланысты. Стакан емес, бұлақ болуға тырыс“, – деген екен. 
    </div>
    <h2 class="vi_vibrali">    1-4 сурактар </h2>
    <form action="javascript:void(0);" class="quiz1" name="quiz5" id="quiz5">
    <h3>1. Мәтін мазмұнына алшақ сөйлем</h3>
        <div>
            <input type="radio" class="per" name="vp21" value="yes" id="value1"> A) Бұлақтың суы да ащы болып шығады. <br>
            <input type="radio" class="per" name="vp21" value="no" id="value2"> Ә) Шәкірт тұздың дәмін сезеді.<br>
            <input type="radio" class="per" name="vp21" value="no" id="value3"> Б) Шәкірт үнемі шағымданып жүреді.<br>
            <input type="radio" class="per" name="vp21" value="no" id="value4"> В) Шәкірт бұлаққа бір уыс тұз тастайды.<br>
        </div>

        <h3>2. Мәтін мазмұнын қорытындылайтын нақыл сөз</h3>
        <div>
            <input type="radio" class="per" name="vp22" value="no id="value5"> A) Маңдайыңа жазылғанын көресің.<br>
            <input type="radio" class="per" name="vp22" value="yes" id="value6"> Ә) Өз өмірің өз қолыңда. <br>
            <input type="radio" class="per" name="vp22" value="no" id="value7"> Б) Өмірге өкпе артуға болмайды.<br>
            <input type="radio" class="per" name="vp22" value="no" id="value8"> В) Астың дәмін тұз келтіреді.<br>
        </div>

        <h3>3. Бұл оқушыны ғалым қайда жіберді?</h3>
        <div>
            <input type="radio" class="per" name="vp23" value="no" id="value9"> A) Сода үшін<br>
            <input type="radio" class="per" name="vp23" value="no" id="value10"> Ә) Қант үшін<br>
            <input type="radio" class="per" name="vp23" value="yes" id="value11"> Б) Тұз үшін<br>
            <input type="radio" class="per" name="vp23" value="no" id="value12"> В) Бұрыш үшін<br>
        </div>

        <h3>4. Оқушы стакан ішкенде не істеді?</h3>
        <div>
            <input type="radio" class="per" name="vp24" value="no" id="value13"> A) Тәттіні сезінді<br>
            <input type="radio" class="per" name="vp24" value="no" id="value14"> Ә) Суды тұзбен жұтып қойдым<br>
            <input type="radio" class="per" name="vp24" value="no" id="value15"> Б) Дұрыс жауап жоқ<br>
            <input type="radio" class="per" name="vp24" value="yes" id="value16"> В) Тұзды суды көп іше алмай түкіре бастайды<br>
        </div>
        <h3>5. Самалдың досының туған күні қашан?</h3>
        <div>
            <input type="radio" class="per" name="vp25" value="no" id="value17"> A) көйлек<br>
            <input type="radio" class="per" name="vp25" value="no" id="value18"> Ә) сурет құралдары<br>
            <input type="radio" class="per" name="vp25" value="yes" id="value19"> Б) кұмыра<br>
            <input type="radio" class="per" name="vp25" value="no" id="value20"> В) кітап<br>
        </div>
        <input class="button" type="button" value="Проверить тест 5" onclick="checkForm('quiz5', 5, [1, 2, 3, 5])">

    </form>
    <h2 class="vi_vibrali">    5-6 сурактар <br>
Келесі мәлімдемелер мәтінде келтірілген ақпаратқа сәйкес келе ме? <br>
Егер мәлімдеме мәтіндегі ақпаратқа сәйкес келсе, дұрыс деп жазыңыз. <br>
Егер мәлімдеме мәтіндегі ақпаратқа сәйкес келмесе, бұрыс жазыңыз. <br></h2>
<form action="javascript:void(0);" class="quiz1" name="quiz6" id="quiz6">
    <h3>Шәкірті “Ащы” деп жауап береді ызаланып. </h3>
        <div>
            <input type="radio" class="per" name="vp26" value="no" id="value17"> Бұрыс<br>
            <input type="radio" class="per" name="vp26" value="yes" id="value18"> Дұрыс<br>
        </div>
        <h3>Үнемі жылап жүрген студент тұз әкелгенде, қарт адам оған бір уыс тұз ішпеуді айтады.  </h3>
        <div>
            <input type="radio" class="per" name="vp27" value="no" id="value17">Дұрыс<br>
            <input type="radio" class="per" name="vp27" value="no" id="value18"> Бұрыс<br>
        </div>
        <input class="button" type="button" value="Проверить тест 6" onclick="checkForm('quiz6', 2, [0, 0, 1, 2])">

    </form>




<div class="blocki">
Бір қарт адам екі ұшына құмыра ілінген жуан таяқты мойнына асып, бұлақтан үйіне су тасиды екен.Бұл құмыралардың бірінің жанында жарықшақ бар екен.Үйге жеткенше судың жартысы тамшылаумен азайып қалады екен. Ал екінші құмыра бүтін кемшіліксіз болыпты. <br> <br>
Қария үйіне жеткенде бір жарым құмыра су қалады екен. Бүтін құмыра өз міндетін таза орындаған үшін қатты тәкаппарланытын көрінеді, ал жарық құмыра болса қатты ұялып өкінеді екен. <br> <br>
Екі жыл өткен соң бір күн тесік құмыра, қарияға былай депті: –Қатты ыңғайсызданып жүрмін. Бүйірімдегі жарықшақтың кесірінен тасыған судың жартысы үйге жеткенше босқа төгіліп жатыр. 
<br><br>
Сонда қария күлімсіреп құмыраға былай депті: – Сен ештеңені байқамадың ба? Сен жақтағы жолдың тұсы гүлдерге толы. Ал екінші құмыраның тұсында ешқандай гүл жоқ. Мен о бастан сенің бүйіріңдегі жарықты біліп, сол тарапқа гүлдің тұқымын еккен болатынмын және күнде мен су тасығанда сен ол гүлдерді суарып өтесің. Екі жыл болды сол әдемі гүлдерді жинап үйімді сәндеп жүрмін. Егер де сенің сол тесігің болмағанда, үйімді осыншама көркейтіп, гүлдендіре алмас едім… <br> <br>
</div>
<h2 class="vi_vibrali">7-8 сұрақтар <br>
Дұрыс A, Ә, Б, В немесе Г әрпін таңдаңыз
</h2>
<form action="javascript:void(0);" class="quiz1" name="quiz7" id="quiz7">
        <h3>Қарияның даналығы байқалатын әрекет </h3>
            <div>
                <input type="radio" class="per" name="vp28" value="yes" id="value17"> Гүлдің тұқымын еккендігі <br>
                <input type="radio" class="per" name="vp28" value="no" id="value17"> Тесік құмыраны жұбатқаны <br>
                <input type="radio" class="per" name="vp28" value="no" id="value18"> Үйді әдемі гүлмен сәндендіруі <br>
                <input type="radio" class="per" name="vp28" value="no" id="value18"> Тесік құмыраны лақтырмағаны <br>
                <input type="radio" class="per" name="vp28" value="no" id="value18"> Гүлдерді суарғандығы  <br>

            </div>
            <h3>Мәтін мазмұнын түйіндейтін мақал-мәтел</h3>
            <div>
                <input type="radio" class="per" name="vp29" value="no" id="value17">Жағымпаз — жасқаншақ, Жаман — мақтаншақ<br>
                <input type="radio" class="per" name="vp29" value="no" id="value17"> Өзіңді өзің сыйламасаң, Өзгеден сый күтпе. <br>
                <input type="radio" class="per" name="vp29" value="no" id="value18"> Азаматтық жасай алмаған адам – Бұл өмірге келмеген адаммен бірдей. <br>
                <input type="radio" class="per" name="vp29" value="no" id="value18"> Айырылмастай досыңа, Қайырылмастай сөз айтпа.
            <br>
                <input type="radio" class="per" name="vp29" value="yes" id="value18"> Жақсы ниет — жарым ырыс<br>
            </div>
            <input class="button" type="button" value="Проверить тест 7" onclick="checkForm('quiz7', 2, [0, 0, 1, 2])">

    </form>

<h2 class="vi_vibrali">9-12 сурактар <br>
Әр абзацты мағынасына сәйкес келетін сөйлеммен сәйкестендіріңіз
</h2>
<form action="javascript:checkForm('quiz8');" class="quiz1" name="quiz8" id="quiz8">
        <h3>Қарт үйге келгеннен кейін бір құмыра өзіне толы, екіншісі өкінеді. </h3>
        <div>
            <input type="radio" class="per" name="vp30" value="no" id="value17"> 1 абзац<br>
            <input type="radio" class="per" name="vp30" value="yes" id="value18"> 2 абзац<br>
            <input type="radio" class="per" name="vp30" value="no" id="value19"> 3 абзац<br>
            <input type="radio" class="per" name="vp30" value="no" id="value20"> 4 абзац<br>
        </div>
        <h3> Қария құмыраға күлімсіреп түсіндірді, оның тесігінің арқасында ол үйге бара жатқанда оларды суарып, әдемі гүлдер бақшасын құрды және үйін безендірді</h3>
        <div>
            <input type="radio" class="per" name="vp31" value="no" id="value17"> 1 абзац<br>
            <input type="radio" class="per" name="vp31" value="no" id="value18"> 2 абзац<br>
            <input type="radio" class="per" name="vp31" value="no" id="value19"> 3 абзац<br>
            <input type="radio" class="per" name="vp31" value="yes" id="value20"> 4 абзац<br>
        </div>
        <h3>Егде жастағы ер адам мойнына құмыра салынған суды алып жүрді, бірақ жартысы жарықшаққа байланысты ағып кетті. </h3>
        <div>
            <input type="radio" class="per" name="vp32" value="yes" id="value17"> 1 абзац<br>
            <input type="radio" class="per" name="vp32" value="no" id="value18"> 2 абзац<br>
            <input type="radio" class="per" name="vp32" value="no" id="value19"> 3 абзац<br>
            <input type="radio" class="per" name="vp32" value="no" id="value20"> 4 абзац<br>
        </div>
        <h3>Екі жылдан кейін шұңқырлы құмыра қарт адамға судың жартысы үйге бара жатқанда жарылып кетеді деп шағымданды. </h3>
        <div>
            <input type="radio" class="per" name="vp33" value="no" id="value17"> 1 абзац<br>
            <input type="radio" class="per" name="vp33" value="no" id="value18"> 2 абзац<br>
            <input type="radio" class="per" name="vp33" value="yes" id="value19"> 3 абзац<br>
            <input type="radio" class="per" name="vp33" value="no" id="value20"> 4 абзац<br>
        </div>
        <input class="button" type="button" value="Проверить тест 8" onclick="checkForm('quiz8', 4, [0, 1, 2, 4])">

</form>
<div class="blocki">
       Бразилия елінде жылына екі рет, дәлірек айтқанда, ақпан және наурыз айлары арлығында Амазонка өзені сағасында Атлантикалық мұхиттан ащы, анағұрлым ауыр судың келгені байқалады. Мұхит суы өзен ағымымен кездесіп, өзен суын ығыстыра бастайды. Соның нәтижесінде, биіктігі 6 метрге жететін алып толқындар пайда болады. 
    <br>
    Көктем кезінде Дания елінде таңғажайып құбылыс болады: Барлық аймақтардан ұшып келген миллионнан астам еуропалық қараторғай күн батпай тұрып үлкен топқа жиналады екен. Оңтүстіктен ұшып келген қараторғайлар күні бойы көк шалғында болып, кешкісін аспан төрінде топтық би билейді екен. 
    <br>
    Даттықтар бұл құбылысты «Қара Күн» деп атаса керек. Аталған құбылысты наурыз айынан бастап, сәуір айының ортасына дейін тамашалауға болады.  
    <br>
</div>
<h2 class="vi_vibrali" style="margin: top 35px;">
13-16 сұрақтар <br>
Дұрыс A, Ә, Б, В немесе Г әрпін таңдаңыз
</h2>
<form action="javascript:void(0);" class="quiz1" name="quiz9" id="quiz9">
        <section>
            <h3>13. Мәтіннің алғашқы бөліміне сай тақырыпты белгілеңіз</h3>
            <div>
                <input type="radio" class="per" name="vp34" value="no" id="value13a"> A) Дания еліндегі таңғажайып <br>
                <input type="radio" class="per" name="vp34" value="no" id="value13b"> B) Бразилия елінде <br>
                <input type="radio" class="per" name="vp34" value="no" id="value13c"> C) Мұхит суы <br>
                <input type="radio" class="per" name="vp34" value="yes" id="value13d"> D) Алып толқындар <br>
                <input type="radio" class="per" name="vp34" value="no" id="value13e"> E) Амазона өзені <br>
            </div>
        </section>

        <section>
            <h3>14. Мәтіннің екінші бөліміне сай тақырыпты белгілеңіз</h3>
            <div>
                <input type="radio" class="per" name="vp35" value="yes" id="value14a"> A) Дания еліндегі таңғажайып <br>
                <input type="radio" class="per" name="vp35" value="no" id="value14b"> B) Бразилия елінде <br>
                <input type="radio" class="per" name="vp35" value="no" id="value14c"> C) Мұхит суы <br>
                <input type="radio" class="per" name="vp35" value="no" id="value14d"> D) Алып толқындар <br>
                <input type="radio" class="per" name="vp35" value="no" id="value14e"> E) Амазона өзені <br>
            </div>
        </section>

        <section>
            <h3>15. Мәтіннің үшінші бөліміне сай тақырыпты белгілеңіз</h3>
            <div>
                <input type="radio" class="per" name="vp36" value="no" id="value15a"> A) Дания еліндегі таңғажайып <br>
                <input type="radio" class="per" name="vp36" value="no" id="value15b"> B) Амазона өзені <br>
                <input type="radio" class="per" name="vp36" value="yes" id="value15c"> C) құбылысты өткізу кезеңі <br>
                <input type="radio" class="per" name="vp36" value="no" id="value15d"> D) Алып толқындар <br>
                <input type="radio" class="per" name="vp36" value="no" id="value15e"> E) Бразилия елінде <br>
            </div>
        </section>

        <section>
            <h3>16. Қараторғайлар күн батпай тұрып неге топқа жиналады?</h3>
            <div>
                <input type="radio" class="per" name="vp37" value="no" id="value16a"> A) алыстан ұшып келгендіктен <br>
                <input type="radio" class="per" name="vp37" value="no" id="value16b"> B) барлық аймақтан келгендіктен <br>
                <input type="radio" class="per" name="vp37" value="no" id="value16c"> C) көктем болғандықтан <br>
                <input type="radio" class="per" name="vp37" value="no" id="value16d"> D) аспанға қалықтау үшін <br>
                <input type="radio" class="per" name="vp37" value="yes" id="value16e"> E) топтық би билеу үшін  <br>
            </div>
        </section>
        <input class="button" type="button" value="Проверить тест 9" onclick="checkForm('quiz9', 4, [0, 1, 2, 4])">

    </form>

    <h2 class="vi_vibrali">Продолжим с Правописания(Жазба)</h2>
    <section class="blocki">
        <p>Бір әлім адам жапанда келе жатып, аяғы астында бір үлкен тасқа сүрініп жығылып, ойлады: бұл 
            <select>
                <option value="yes" name="vp38" >тас</option>
                <option value="no" name="vp38" >көмек</option>
                <option value="no" name="vp38">жақсылық</option>
            </select>
            адамға зиян келтіретін тас екен, жолдан алып тастайын деп. Сол оймен тасты көтеріп еді, астынан бір сандық шықты,
            <select>
                <option  value="no" name="vp39">шағам</option>
                <option value="yes" name="vp39">сандықты</option>
            </select>
            ішінен бір жылан шығып , шағамын деп әлімге ұмтылды, әлім айтты: - Мен сені қараңғы, тар жерден, тұтқыннан шығардым, жақсылыққа жамандық бар ма? 
            Жылан айтты: - Бар. Әлім айтты: - Олай болса біреуге жүгінелік, төре саған тисе шағарсың,- деп. 
        </p>
        <p>
             <select>
                <option value="yes" name="vp40">жылан</option>
                <option value="no" name="vp40">әркім</option>
            </select>
            да бұл сөзге тоқтап, екеуі келе жатып, түйеге жолықты. Түйеге бұлар істерінің мәнісін айтып еді, түйе айтты: - Жақсылықка 
            <select>
                <option value="yes" name="vp41">жамандық</option>
                <option value="no" name="vp41">жіберсеңіз</option>
            </select>
            : мен адамның қанша ауыр жүгін, мүлкін тасып, өмірімше қызмет істесем де, адам қай уақытта шамамнан тысқары жүк артады да, жүре алмасам
            <select>
                <option value="yes" name="vp42" >ұрып-соғып</option>
                <option  value="no" name="vp42"> жылтырады</option>
            </select>
        </p>
        <p>
            ренжітеді. Жылан мұны есітіп, әлімнің мойнына бір оралды. Мұнан шығып жеміс ағаштарына келіп жүгінді. Бұл ағаш та айтты: - Жақсылықка жамандық бар;
            не үшін десеңіз: менің
            <select>
                <option value="no" name="vp43">қанша</option>
                <option  value="yes" name="vp43">жемісіммен</option>
            </select>
            адам күн көріп пайдаланып тұрса да, жемісімді жан ауыртпай
            <select>
                <option value="no" name="vp44">қоймайды</option>
                <option value="yes" name="vp44">қолымен</option>
            </select>
            қатты орып, жемісімді жерге түсіріп алып жейді,- деді. Жылан әлімнің мойнына тағы бір оралды. Онан кетіп бір итке жолығысты.
        </p>
        <p>
            <select>
                <option vlaue="yes" name="vp45">Ит</option>
                <option value="no" name="vp45">Иеме</option>
            </select>
            те айтты: - Жақсылыққа жамандық бар, мен иеме қанша
            <select>
                <option value="no" name="vp46">ұйықтамайды</option>
                <option value="yes" name="vp46">түн-күн</option>
            </select>
            ұйықтамай мүлкін, малын, өзін бағып 
            <select>
                <option value="yes" name="vp47">қызмет </option>
                <option value="no" name="vp47">қатты</option>
            </select>
            қылып едім, ақырында мен қартайып аурулы болған соң, таяқтап ұрып мені қуып жіберді,- деді. Жылан және бір             <select>
                <option value="no" name="vp48">бала</option>
                <option value="yes" name="vp48">оралып</option>
            </select>
            енді шағамын деді. Әлім айтты: - Енді тағы біреуге-ақ жүгінейік, төрелік тағы саған тисе, шаға бер. Сонан шығып бір топ ойнап жүрген балаларға келді. Ішінде бір             <select>
                <option value="yes" name="vp49">бала</option>
                <option value="no" name="vp49">әлім</option>
            </select>
            әлімге сәлем берді. Әлім сәлемін алып, сол балаға істерінің мәнісін             <select>
                <option value="yes" name="vp50">айтты</option>
                <option value="yes" name="vp50">Айт</option>
            </select>
            </p>
        <p>
        Бала есітіп болып: - Әй, ата, бекер сөйлейсің осы қолыңдағы кіп-             <select>
                <option value="yes" name="vp51">кішкентай</option>
                <option value="no" name="vp51">жеткізді</option>
            </select>
            қобдиға мойныңа үш оралған әйдік жылан сыюшы ма еді? - деді Сонда жылан да айтты: - Бұл сөз рас,- деп. Бала тіпті нанбады, «бұл сөзге көзбен көрмей кісі нанып болмас» деп. Сонда жылан баланы нандыру үшін иіріліп барды да, манағы қобдиға кіріп жатты. Бала сонда            <select>
                <option value="yes" name="vp52">тарс</option>
                <option value="no" name="vp52">жатты</option>
            </select>
            еткізіп сандықты жауып бекітті де, Әлімнің қолына берді, «апарып алған орынңызға қойыңыз» деп.          </p>
            <input class="button" type="button" value="Проверить результат" onclick="countAnswers()">

    </section>
    <div class="proverka">
        <input class="button" type="reset" name="reset" id="reset" value="Сбросить все ответы" onclick="refreshPage()">
        <input class="button" type="button" id="submit" value="Проверить мои знания" onclick="checkhigh()">
    </div>

    <div class="vperednazad">
        <a class="backlvl" href="sredniu.php">предыдущий уровень</a>
    </div>
</body>

</html>