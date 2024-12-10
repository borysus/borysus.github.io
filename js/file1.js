function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
}

function changeTheme(){

    // scrollbarThumb = document.querySelector(':webkit-scrollbar-thumb');

    if ( document.body.classList.contains('dark') ){
        document.body.classList.toggle('light');
        document.querySelector('a').classList.toggle('a-light');
        // document.scrollbarThumb.classList.toggle('webkit-scrollbar-thumb-light')
        // i gave up on root.style.setProperty('--mid-color', '#797979'); //LIGHT MID COLOR
        // root.style.setProperty('--darker-mid-color', '#919292'); //LIGHT DARKER MID COLOR
    }
    else if (document.body.classList.contains('light'))
    {
        document.body.classList.toggle('dark');
        document.querySelector('a').classList.toggle('a-dark');
        // document.scrollbarThumb.classList.toggle('webkit-scrollbar-thumb-dark')
        // root.style.setProperty('--mid-color', '#868686'); //DARK MID COLOR
        // root.style.setProperty('--darker-mid-color', '6e6d6d'); //DARK DARKER MID COLOR
    }
}
