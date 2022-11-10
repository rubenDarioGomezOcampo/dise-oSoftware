
const validar = () => {
    var name = document.getElementById('name').value;
    var lastName = document.getElementById('lastName').value;
    if(name == "" || lastName=="") {
        alert('campos incompletos');
    }
}