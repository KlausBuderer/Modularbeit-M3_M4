
//Ändert den Pfad der Avatar anzeige bei einer Auswahl eines neuen Avatar Bildes
function setAvatar(name) {
    path = './images/avatars/';
    file = '.svg';

    filePath = path + name + file;
    document.getElementById("avatar").src = filePath;
    setCookieAvatar(filePath, 30);
}
//Schreibt den gewählten Avatar in ein Cookie
function setCookieAvatar(path, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = "avatar" + "=" + path + ";" + expires + ";path=/";
  } 