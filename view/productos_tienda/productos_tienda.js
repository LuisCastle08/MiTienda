
function agregar() {
    console.log("sss");
    
    const cantidadElemento = document.getElementById("cantidad");
    let cantidadActual = parseInt(cantidadElemento.textContent);
    cantidadActual += 1;
    cantidadElemento.textContent = cantidadActual;
}
