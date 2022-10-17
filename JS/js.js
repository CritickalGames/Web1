
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
    alert(JSON.parse(this.responseText));
    const myObj = JSON.parse(this.responseText);
    var vari= myObj[1];
    alert(vari);
}
xmlhttp.open("GET", "../JS/backend-script.php");
xmlhttp.send();
