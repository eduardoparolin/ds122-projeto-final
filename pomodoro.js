// Get the modal
var modal = document.getElementById("new_task_modal");
var modal1 = document.getElementById("executing_task_modal");
var title = document.getElementById("title");

// Get the button that opens the modal
var btn = document.getElementById("new_task");
var uuidField = document.getElementById("uuid_field");
uuidField.value = String(Date.now());

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span1 = document.getElementsByClassName("close")[1];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        modal1.style.display = "none";
    }
}

function openModal(t) {
    // Open the modal
    title.innerText = t;
    document.getElementById('executing_task_modal').style.display = 'block';
}

window.onload = function() {
    // Check if there's a task with status 1
    var table = document.getElementsByTagName('table')[0];
    var rows = table.getElementsByTagName('tr');
    for (var i = 0; i < rows.length; i++) {
        var cols = rows[i].getElementsByTagName('td');
        if (cols.length > 0 && cols[2].innerText === 'Executando') {
            // Open the modal
            openModal(cols[1].innerText);
            break;
        }
    }
};