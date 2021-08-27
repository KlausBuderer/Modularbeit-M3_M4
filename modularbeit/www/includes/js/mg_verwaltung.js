
//Liest die Eingabe und öffnet ein neues Tab mit einem Gutschein
function printPdf(){
   var stunden = document.getElementById("h").value;
   var path = "pdfGutschein.php?h=" + stunden;
    document.getElementById("pdf").setAttribute("href",path);
    document.getElementById('pdf').click();
};