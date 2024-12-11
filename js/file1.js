function changeThemeOnStart() {
    var element = document.body;
    element.classList.toggle("dark");
    document.getElementsByClassName('link').classList.toggle('adark');
}

//function changeTheme(){
    //if ( document.body.classList.contains('dark') ){
        //document.body.classList.toggle('light');
        //document.getElementsByClassName('link').classList.toggle('alight');
    //}
    //else if (document.body.classList.contains('light'))
    //{
        //document.body.classList.toggle('dark');
        //document.getElementsByClassName('link').classList.toggle('adark');
    //}
//}

function changeTheme() {
    const links = document.getElementsByClassName('link');
    
    if (document.body.classList.contains('dark')) {
        document.body.classList.remove('dark');
        document.body.classList.add('light');
        for (let i = 0; i < links.length; i++) {
            links[i].classList.remove('adark');
            links[i].classList.add('alight');
        }
    } else {
        document.body.classList.remove('light');
        document.body.classList.add('dark');
        for (let i = 0; i < links.length; i++) {
            links[i].classList.remove('alight');
            links[i].classList.add('adark');
        }
    }
}
