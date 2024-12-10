function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
}

function changeTheme(){

    // scrollbarThumb = document.querySelector(':webkit-scrollbar-thumb'); 
    let links = document.querySelectorAll('a'); // Select all <a> elements

    if ( document.body.classList.contains('dark') ){
        document.body.classList.replace('dark', 'light');
        links.forEach(link.classList.replace('adark', 'alight'));
    }
    else if (document.body.classList.contains('light'))
    {
        document.body.classList.replace('light', 'dark');
        links.forEach(link => link.classList.replace('alight', 'adark'));
    }
}
