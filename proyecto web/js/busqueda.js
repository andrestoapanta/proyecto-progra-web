function showSearch() {
    document.getElementById("buscar").style.display = "block";
}

function filterTable() {

    // Aqui se esta declarando las variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("buscar");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableBody");
    tr = table.getElementsByTagName("tr");

    // Aqui se recorren todas las filas de la tabla y oculta las que no coinciden
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td"); // Obtiene todas las celdas en la fila actual

        for (var j = 0; j < td.length; j++) { // Recorre cada celda de la fila
            txtValue = td[j].textContent || td[j].innerText;

            if (txtValue) {

                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = ""; // Muestra lo que coincide
                    break;

                } else {
                    tr[i].style.display = "none"; // Oculta lo que no coincide
                }
            }
        }
    }
}
