const datos = document.getElementById("datos");

const url = "http://localhost/pw-idt-19/personas.php";
let fila = ""
fetch(url)
.then(datos => datos.json())
.then(
    mijson => {
        mijson.forEach(element => {
            fila += `
            <tr>
                <td>${element.nombre}</td>
                <td>${element.apellido}</td>
                <td>${element.telefono}</td>
                <td>${element.domicilio}</td>
            </tr>`
        });
        datos.innerHTML = fila;
    }
)