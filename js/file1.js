function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
}

function changeTheme(){

    var root = document.querySelector(':root');

    if ( document.body.classList.contains('dark') ){
        document.body.classList.toggle('light');
        root.documentElement.style.setProperty("--mid-color: #797979"); //LIGHT MID COLOR
        root.documentElement.style.setProperty("--darker-mid-color: #919292"); //LIGHT DARKER MID COLOR
    }
    else if (document.body.classList.contains('light'))
    {
        //dark mode changes
        document.body.classList.toggle('dark');
        root.documentElement.style.setProperty("--mid-color: #868686"); //DARK MID COLOR
        root.documentElement.style.setProperty("--darker-mid-color: #6e6d6d"); //DARK DARKER MID COLOR
    }
}