function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
    document.getElementsByClassName('link').classList.toggle('adark');
}


function changeTheme() {
    const links = document.querySelectorAll('.link');
    
    if (document.body.classList.contains('dark')) {
        document.body.classList.toggle('light');
        links.forEach(link => {
            link.classList.remove('adark');
            link.classList.add('alight');
        });
    } 
    else if (document.body.classList.contains('light')) {
        document.body.classList.toggle('dark');
        links.forEach(link => {
            link.classList.remove('alight');
            link.classList.add('adark');
        });
    }
}

