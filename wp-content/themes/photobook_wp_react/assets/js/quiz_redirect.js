document.addEventListener('DOMContentLoaded', function () {
    let quiz_redirect_button = $(".js-button__trial")

    quiz_redirect_button.click(function (){
        window.location.href = window.location.href + 'trial-quiz/'
        console.log('acdca')
    })
})