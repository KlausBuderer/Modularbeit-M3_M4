
function setAvatar(name) {
    path = './images/avatars/';
    file = '.svg';

    filePath = path + name + file;
    document.getElementById("avatar").src = filePath;
    setCookieAvatar(filePath, 30);
}

function setCookieAvatar(path, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = "avatar" + "=" + path + ";" + expires + ";path=/";
  } 