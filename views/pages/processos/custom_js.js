
function updateDfdTextarea() {
    const idDfdInput = document.getElementById("idDfd");
    const idDfd2Textarea = document.getElementById("idDfd2");

    idDfd2Textarea.value = idDfd2Textarea.value.replace(/^\s*[\r\n]/gm, ''); // Remove empty lines

    return idDfdInput.value;
}

function maskedinput( ){

    $("#idNup").mask("99999.999999/9999-99");
    $("#idNrProcesso").mask("99999/9999");
    $("#idDfd").mask("99999/9999");
    $("#idDfd2").mask("99999/9999");
}

function addDfd() {
    const idDfdInputValue = updateDfdTextarea();

    if (idDfdInputValue) {
        const idDfd2Textarea = document.getElementById("idDfd2");
        idDfd2Textarea.value += idDfdInputValue + "\n";
        document.getElementById("idDfd").value = "";
    }
}


function deleteLastDfd() {
    const idDfd2Textarea = document.getElementById("idDfd2");
    const lines = idDfd2Textarea.value.trim().split("\n");

    if (lines.length > 0) {
        lines.pop();
        idDfd2Textarea.value = lines.join("\n");
    }
}