document.addEventListener('DOMContentLoaded', function () {
    let archive_redirect_button = $(".js-button__archive")
    console.log('acdca')

    archive_redirect_button.click(function () {
        window.location.href = window.location.href + 'archive/'
        console.log('acdca')
    })
})