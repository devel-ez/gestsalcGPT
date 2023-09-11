function fncSweetAlert(type, text, url) {

    switch (type) {

        /*=============================================
        Quando ocorrer um erro
        =============================================*/

        case "error":

            if (url == null) {

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: text
                })

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: text
                }).then((result) => {

                    if (result.value) {

                        window.open(url, "_top");

                    }

                })

            }

            break;

        /*=============================================
        Quando for correto
        =============================================*/

        case "success":

            if (url == null) {

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: text,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                })

            } else {

                Swal.fire({
                    icon: 'success',
                    title: 'Confirmación',
                    text: text,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                }).then((result) => {

                    if (result.value) {

                        window.open(url, "_top");

                    }

                })

            }

            break;

        /*=============================================
        Quando estiver carregando
        =============================================*/

        case "loading":

            Swal.fire({
                allowOutsideClick: false,
                icon: 'info',
                text: text
            })
            Swal.showLoading()

            break;

        /*=============================================
        Quando necessitamos fechar o alerta suavemente
        =============================================*/

        case "close":

            Swal.close()

            break;



    }

}