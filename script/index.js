window.onload = function () {
    document.querySelectorAll('.comment').forEach(eleme =>{
        console.log(eleme.innerHTML)


var xhttp = new XMLHttpRequest();
xhttp.open("GET", "models/ajax.php?nb=" + eleme.innerHTML, true);
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        
        var reponse = this.responseText;
            eleme.style.display="block"
           eleme.innerHTML=reponse+" commentaires"
        
    }
}
xhttp.send();
})
};