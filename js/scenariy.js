document.addEventListener("DOMContentLoaded", function() {
    const signInBtn = document.querySelector('.signin-btn');
    const signUpBtn = document.querySelector('.signup-btn');
    const formBox = document.querySelector('.form-box');

    signInBtn.addEventListener('click', function() {
        formBox.classList.remove('active');
    });

    signUpBtn.addEventListener('click', function() {
        formBox.classList.add('active');
    });
});