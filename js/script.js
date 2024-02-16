function refreshPage() {
    location.reload();
}


function checkQuiz() {
    var yes = 0;
    var no = 0;
    var result = "";
    var choice;
    for (var answer = 1; answer <= 20; answer++) { // количество ответов в 1 вопросе
        var q = document.forms["quiz"].elements["vp" + answer]; // переменная
        for (var i = 0; i < q.length; i++) {
            if (q[i].checked) {
                choice = q[i].value;
            }
        }
        if (choice == "yes") {
            yes++;
        }
        if (choice == "no") {
            no++;
        }
    }
    switch (true) {
        case (yes <= 8):
            result = "У вас неудовлетворительный результат, просим пройти уровень повторно";
            break;
        case (yes >= 9 && yes <= 12):
            result = "Вам удалось пройти удовлетворитьно, но в лучших целях вам стоит пройти уровень повторно";
            break;
        case (yes >= 13 && yes <= 16):
            result = "Вам удалось пройти хорошо, просим перейти на следующий уровень";
            break;
        case (yes >= 16):
            result = "Вам удалось пройти на отлично, просим перейти на следующий уровень";
            break;
        default:
            result = "Вам стоит пройти уровень повторно :(";
            break;
    }
    console.log("Количество правельных ответов: " + yes)
    alert(result);
}


function check() {
    // Проверка сессии
    $.ajax({
        type: "POST",
        url: "/fucntions/check_session.php", // Путь к файлу на сервере, который проверяет сессию
        success: function(response) {
            if (response === "valid") {
                // Сессия действительна, выполняем основной код
                checkQuiz();
            } else {
                // Сессия не действительна, предпринимаем необходимые действия
                alert("Ваша сессия не действительна. Пожалуйста, войдите снова.");
                // Например, перенаправление на страницу входа или отображение сообщения
            }
        }
    });
}


function askQuestion() {
    var text = prompt('Пожалуйста, введите ваш вопрос');

    if (text !== null && text !== "") {
        var formData = new FormData();
        formData.append("question", text);
        alert("Ваш вопрос: " + text);
        $.ajax({
            url: "/fucntions/save_question.php", // Путь к файлу save_question.php
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                alert(data); // Отображаем ответ от сервера
            }
        });


    }
}


// function check1() {
//     // Проверка сессии
//     $.ajax({
//         type: "POST",
//         url: "/fucntions/check_session.php", // Путь к файлу на сервере, который проверяет сессию
//         success: function(response) {
//             if (response === "valid") {
//                 checkresult();
//             } else {
//                 alert("Ваша сессия не действительна. Пожалуйста, войдите снова.");
//             }
//         }
//     });
// }


// function checkresult() {
//     var yes = 0;

//     for (var answer = 1; answer <= 10; answer++) { // Измените на количество вопросов
//         var q = document.forms.quiz.elements["vp" + answer];
//         var choice;

//         if (q) {
//             for (var i = 0; i < q.length; i++) {
//                 if (q[i].checked) {
//                     choice = q[i].value;
//                 }
//             }

//             if (choice == "yes") {
//                 yes++;
//             }
//         }
//     }

//     var result = "";

//     switch (true) {
//         case (yes <= 2):
//             result = "У вас неудовлетворительный результат, просим пройти уровень повторно";
//             break;
//         case (yes >= 3 && yes <= 4):
//             result = "Вам удалось пройти удовлетворительно, но в лучших целях вам стоит пройти уровень повторно";
//             break;
//         case (yes >= 5 && yes <= 6):
//             result = "Вам удалось пройти хорошо, просим перейти на следующий уровень";
//             break;
//         case (yes >= 7):
//             result = "Вам удалось пройти на отлично, просим перейти на следующий уровень";
//             break;
//         default:
//             result = "Вам стоит пройти уровень повторно :(";
//             break;
//     }

//     console.log("Количество правильных ответов: " + yes)
//     alert(result);
// }



// Создаем объект для хранения количества правильных ответов для каждой формы
var formResults = {};
var ans = 0;
var allans = 0;

function checkForm(formId, numQuestions, criteria) {
    var yes = 0;
    var no = 0;
    var result = "";

    for (var answer = 1; answer <= numQuestions; answer++) {
        var q = document.forms[formId].elements["vp" + answer];
        var choice;

        if (q) {
            for (var i = 0; i < q.length; i++) {
                if (q[i].checked) {
                    choice = q[i].value;
                }
            }

            if (choice === "yes") {
                yes++;
            }
            if (choice === "no") {
                no++;
            }
        }
    }

    switch (true) {
        case (yes <= criteria[0]):
            result = "У вас неудовлетворительный результат, просим пройти уровень повторно";
            break;
        case (yes >= criteria[1]):
            result = "Вам удалось пройти удовлетворительно, но в лучших целях вам стоит пройти уровень повторно";
            break;
        case (yes >= criteria[2]):
            result = "Вам удалось пройти хорошо, просим перейти на следующий уровень";
            break;
        case (yes >= criteria[3]):
            result = "Вам удалось пройти на отлично, просим перейти на следующий уровень";
            break;
        default:
            result = "Вам стоит пройти уровень повторно :(";
            break;
    }
    // Сохраняем количество правильных ответов для данной формы
    formResults[formId] = yes;
    console.log("Количество правильных ответов в форме " + formId + ": " + yes);
    alert(result + " потому что количество правильных ответов в форме " + formId + ": " + yes);
}

function countAnswers() {
    var correctAnswers = 0;

    var vp38Value = document.getElementsByName("vp38")[0].value;
    var vp39Value = document.getElementsByName("vp39")[0].value;
    var vp40Value = document.getElementsByName("vp40")[0].value;
    var vp41Value = document.getElementsByName("vp41")[0].value;
    var vp42Value = document.getElementsByName("vp42")[0].value;
    var vp43Value = document.getElementsByName("vp43")[0].value;
    var vp44Value = document.getElementsByName("vp44")[0].value;
    var vp45Value = document.getElementsByName("vp45")[0].value;
    var vp46Value = document.getElementsByName("vp46")[0].value;
    var vp47Value = document.getElementsByName("vp47")[0].value;
    var vp48Value = document.getElementsByName("vp48")[0].value;
    var vp49Value = document.getElementsByName("vp49")[0].value;
    var vp50Value = document.getElementsByName("vp50")[0].value;
    var vp51Value = document.getElementsByName("vp51")[0].value;
    var vp52Value = document.getElementsByName("vp52")[0].value;

    // Здесь вы можете выполнить дополнительные действия с полученными значениями,
    // например, проверить правильность ответов и увеличить счетчик правильных ответов.

    if (vp38Value === "yes") {
        correctAnswers++;
    }
    if (vp39Value === "yes") {
        correctAnswers++;
    }
    if (vp41Value === "yes") {
        correctAnswers++;
    }
    if (vp42Value === "yes") {
        correctAnswers++;
    }
    if (vp43Value === "yes") {
        correctAnswers++;
    }
    if (vp44Value === "yes") {
        correctAnswers++;
    }
    if (vp45Value === "yes") {
        correctAnswers++;
    }
    if (vp46Value === "yes") {
        correctAnswers++;
    }
    if (vp47Value === "yes") {
        correctAnswers++;
    }
    if (vp48Value === "yes") {
        correctAnswers++;
    }
    if (vp49Value === "yes") {
        correctAnswers++;
    }
    if (vp50Value === "yes") {
        correctAnswers++;
    }
    if (vp51Value === "yes") {
        correctAnswers++;
    }
    if (vp52Value === "yes") {
        correctAnswers++;
    }
    alert("Количество правильных ответов в работе с текстом: " + correctAnswers);
    console.log("Количество правильных ответов в работе с текстом: " + correctAnswers);
    ans = correctAnswers;
}


function countAllAnswers() {
    var totalCorrectAnswers = 0;

    // Подсчитываем количество правильных ответов для каждой формы
    for (var form in formResults) {
        if (formResults.hasOwnProperty(form)) {
            totalCorrectAnswers += formResults[form];
            allans = ans + totalCorrectAnswers;
        }
    }
    alert("Общее количество правильных ответов: " + allans);
    console.log("Общее количество правильных ответов: " + allans);
}


function checkhigh() {
    // Проверка сессии
    $.ajax({
        type: "POST",
        url: "/fucntions/check_session.php", // Путь к файлу на сервере, который проверяет сессию
        success: function(response) {
            if (response === "valid") {
                countAllAnswers();
            } else {
                alert("Ваша сессия не действительна. Пожалуйста, войдите снова.");
            }
        }
    });
}