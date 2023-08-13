function formatNUP(input) {


    // Detecta o pressionamento da tecla backspace
    if (event && event.inputType === 'deleteContentBackward') {
        return;
    }

    // Remove caracteres não numéricos
    let inputValue = input.value.replace(/\D/g, '');

    // Preenche a máscara com underlines e caracteres especiais
    let maskedValue = '';
    let maskIndex = 0;

    for (let i = 0; i < 20; i++) {
        if (i === 5 || i === 12 || i === 17) {
            maskedValue += (i === 5 ? '.' : (i === 12 ? '/' : '-'));
        } else if (maskIndex < inputValue.length) {
            maskedValue += inputValue[maskIndex];
            maskIndex++;
        } else {
            maskedValue += '_';
        }
    }

    // Atualiza o valor do input com a máscara
    input.value = maskedValue;
}


function formatDfdNrProcesso(input) {


    // Detecta o pressionamento da tecla backspace
    if (event && event.inputType === 'deleteContentBackward') {
        return;
    }

    // Remove caracteres não numéricos
    let inputValue = input.value.replace(/\D/g, '');

    // Preenche a máscara com underlines e caracteres especiais
    let maskedValue = '';
    let maskIndex = 0;

    for (let i = 0; i < 9; i++) {
        if (i === 4 || i === 9) {
            maskedValue += (i === 4 ? '/' : (i === 9 ? '/' : '-'));
        } else if (maskIndex < inputValue.length) {
            maskedValue += inputValue[maskIndex];
            maskIndex++;
        } else {
            maskedValue += '_';
        }
    }

    // Atualiza o valor do input com a máscara
    input.value = maskedValue;
}

function updateDfdTextarea() {
    const idDfdInput = document.getElementById("idDfd");
    const idDfd2Textarea = document.getElementById("idDfd2");

    idDfd2Textarea.value = idDfd2Textarea.value.replace(/^\s*[\r\n]/gm, ''); // Remove empty lines

    return idDfdInput.value;
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