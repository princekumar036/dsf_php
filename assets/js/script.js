
// NAV MENU TOGGLE
$(document).ready(function() {
    $('#navtoggle').click(function() {
        $('#navtoggle-open').toggle();
        $('#navtoggle-close').toggle();
        $('#navmenu').slideToggle();
    })
})


 // MOVEMENTS DESCRIPTION APPEARS ON HOVER ON LARGE SCREEN
if(window.screen.width >= 1024) {
    $('#movements article').hover(function() {
        $(this).find('#movement-description').slideToggle()
    })
}

// NAV ACTIVE STATUS
document.querySelectorAll('.navlink').forEach(link => {
    if (window.location.href === link.href) {
        link.classList.add('active')
    }
})
if (window.location.href.includes('statements-view')) {
    document.querySelector('.navlink[href="statements.php"]').classList.add('active')
}
if (window.location.href.includes('events-view')) {
    document.querySelector('.navlink[href="events.php"]').classList.add('active')
}


// MOVEMENTS SROLL ON CLICKING LEFT AND RIGHT BUTTON
    // ON LARGE SCREEN
document.querySelector('#slide-right').addEventListener('click', function(e) {
    document.querySelector('#movements').scrollBy({
        top: 0,
        left: 500,
        behavior: 'smooth'
        });
})
document.querySelector('#slide-left').addEventListener('click', function() {
    document.querySelector('#movements').scrollBy({
        top: 0,
        left: -500,
        behavior: 'smooth'
        });
})


