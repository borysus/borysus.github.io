function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
}

function changeTheme(){
    if ( document.body.classList.contains('dark') ){
        document.body.classList.replace('dark', 'light');
    }
    else if (document.body.classList.contains('light'))
    {
        document.body.classList.replace('light', 'dark');
    }
}