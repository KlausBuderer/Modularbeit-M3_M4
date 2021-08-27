

var page = window.location.pathname.split("/").pop();

//Sidebar Text vergrössern anhand geöffneter Page
switch (page) {
    case 'kinder_uebersicht_template.php':
        document.getElementById("sb1").style.fontSize = "2.2vw";
        break;
        case 'mathe_uebersicht_template.php':
        document.getElementById("sb2").style.fontSize =  "2.0vw"; 
        break;
        case 'realien_uebersicht_template.php':
        document.getElementById("sb3").style.fontSize = "2.2vw"; 
        break;
        case 'englisch_uebersicht_template.php':
        document.getElementById("sb4").style.fontSize = "2.2vw"; 
        break;
        case 'guthaben.php':
        document.getElementById("sb5").style.fontSize = "2.2vw"; 
        break;
        case 'deutsch_uebersicht_template.php':
        document.getElementById("sb6").style.fontSize = "2.2vw"; 
        break;

    default:
        break;
}

