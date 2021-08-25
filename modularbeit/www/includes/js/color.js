

//Scheme struktur 0: Body 1:Sidebar/navabar 2:cardbody 3:useranzeige 4:Titel


var colors = {
 blue : ['#f2f7f7', '#6FB3B8', '#BADFE7', '#C2EDCE', '#F6F6F2', 'blue'],
rosa : ['#FAFAFB', '#EFB7BA', '#E5C0C8', '#C2EDCE', '#F6F6F2', 'rosa'],
orange : ['#FAE5C7', '#FAC17A', '#DAB258', '#C2EDCE', '#F6F6F2', 'orange'],
green : ['#EDF5E1', '#5CDB95', '#05386B', '#EDF5E1', '#05386B', 'green'],
vampir : ['#1A1A1D', '#6F2232', '#950740', '#4E4E50', '#950740', 'vampir'],
pink : ['#E3E2DF', '#EE4C7C', '#EE4C7C', '#E3AFBC', '#EE4C7C', 'pink']
};

var root = document.querySelector(':root');
var scheme;

// Initialisierung des Farbschemas mit der zuletzt gewählten Farbe
function initColor() {
  if (getCookie('colorScheme') != "") {
  coloring(colors[getCookie('colorScheme')]);
} else {
  coloring(colors.orange);
}
}





  function coloring(colors) {

    root.style.setProperty('--body_color', colors[0]);
    root.style.setProperty('--side_nav_color', colors[1]);
    root.style.setProperty('--card_color', colors[2]);
    root.style.setProperty('--userfield_color', colors[3]);
    root.style.setProperty('--titel_color', colors[4]);

 /*    document.getElementById('sidebar').style.backgroundColor = colors[1];
    //document.getElementById('footer').style.backgroundColor = colors[1];
    document.getElementById('nav').style.backgroundColor = colors[1];
    document.getElementById('body').style.backgroundColor = colors[0];
    document.getElementById('card1').style.backgroundColor = colors[2];
    document.getElementById('card2').style.backgroundColor = colors[2];
    document.getElementById('card3').style.backgroundColor = colors[2];
    document.getElementById('titel').style.color = colors[4];
    document.getElementById('dropdownMenuButton1').style.backgroundColor = colors[2];
    document.getElementById('dropdownMenuButton1').style.ColorackgroundColor = colors[0]; */

    setCookie(colors[5], 30);

  }


  function setCookie(color, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = "colorScheme" + "=" + color + ";" + expires + ";path=/";
  } 


  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }


  