function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
}

function changeTheme(){
    if ( document.body.classList.contains('dark') ){
        document.body.classList.toggle('light');
        document.documentElement.style.cssText = "--mid-color: #797979"; //LIGHT MID COLOR
        document.documentElement.style.cssText =  "--darker-mid-color: #919292"; //LIGHT DARKER MID COLOR
    }
    else if (document.body.classList.contains('light'))
    {
        //dark mode changes
        document.body.classList.toggle('dark');
        document.documentElement.style.cssText = "--mid-color: #868686"; //DARK MID COLOR
        document.documentElement.style.cssText =  "--darker-mid-color: #6e6d6d"; //DARK DARKER MID COLOR
    }
}