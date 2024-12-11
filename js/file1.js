function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
    document.getElementsByClassName('link').classList.toggle('adark');
}


function changeTheme() {
    const links = document.querySelectorAll('.link');
    
    if (document.body.classList.contains('dark')) {
        document.body.classList.remove('dark');
        document.body.classList.add('light');
        links.forEach(link => {
            link.classList.remove('adark');
            link.classList.add('alight');
        });
    } else {
        document.body.classList.remove('light');
        document.body.classList.add('dark');
        links.forEach(link => {
            link.classList.remove('alight');
            link.classList.add('adark');
        });
    }
}

