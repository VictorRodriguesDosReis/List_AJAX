//Insert the input's value into table and database
function insert() {
    var xhttp = new XMLHttpRequest();
    var nome = document.getElementById("nome").value;

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("table").innerHTML += this.responseText;
        }
    };
    xhttp.open("GET", "insert.php?name="+nome, true);
    xhttp.send();
}

//Remove the selected row from table and in the database
function remove(row) {
    var xhttp = new XMLHttpRequest();

    document.getElementById(row).style.display = "none";

    xhttp.open("GET", "delete.php?id="+row, true);
    xhttp.send();

}