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