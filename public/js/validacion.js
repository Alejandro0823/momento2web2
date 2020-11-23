function validar(){

var nombre = document.getElementById('nombre').value;
var edad = document.getElementById('edad').value;
var tipoanimal = document.getElementById('tipoanimal').value;
var descripcion = document.getElementById('descripcion').value;
var comida = document.getElementById('comida').value;

if(nombre === "" || edad === "" || tipoanimal === "" || descripcion === "" || comida ===""){
    alert("Todos los campos son obligatorios");
    return false;
}
else if(nombre.length>40){
alert("El nombre es muy largo");
return false;
}
else if(descripcion.length>100){
    alert("La descripcion es muy larga");
    return false;
}
else if(isNaN(edad)){
        alert("La edad ingresada no es un numero");
        return false;
}
    
}