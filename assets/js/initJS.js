function typeWritter(texto,idElemento,tempo){
    var char = texto.split('').reverse();
    var typer = setInterval(function () {
        if (!char.length){ 
            document.getElementById(idElemento).innerHTML += "<br>";
            return clearInterval(typer);
        }
        var next = char.pop();
        document.getElementById(idElemento).innerHTML += next;
    }, tempo);
}

setTimeout(()=>{
    typeWritter("sadas","project-init",170); 
},0);
