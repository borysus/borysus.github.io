function changeThemeOnStart() {
    var element = document.body;
    var links = document.getElementsByClassName('link');
    element.classList.add('dark');
    for (var i = 0; i < links.length; i++) {
        links[i].classList.add('alight');
    }
    for (var i = 0; i < links.length; i++) {
        links[i].classList.toggle('alight');
    }
}

function changeTheme() {
    var links = document.getElementsByClassName('link');
    if (document.body.classList.contains('dark')) {
        document.body.classList.add('light');
        document.body.classList.remove('dark');
    } else if (document.body.classList.contains('light')) {
        document.body.classList.remove('light');
        document.body.classList.add('dark');
    }
    for (var i = 0; i < links.length; i++) {
        links[i].classList.toggle('alight');
    }
}
