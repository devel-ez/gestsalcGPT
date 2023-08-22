$(document).ready(function () {
    var table = $('#example1').DataTable({
        // Suas opções do DataTable aqui
    });

    table.columns(2).every(function () { // Coluna "fase" é a coluna 2
        var column = this;
        column.nodes().to$().each(function (cell, cellIndex) {
            var fase = column.data()[cellIndex];
            var percentual = getPercentualPorFase(fase);
            var badgeClass = getBadgeClassPorFase(fase);

            var html = "<center>" +
                "<span class='" + badgeClass + " btnProgresso text-navy px-1'>" + percentual + "%" +
                "</span>" +
                "</center>";

            $(cell).html(html);
        });
    });

    function getPercentualPorFase(fase) {
        // Defina a lógica para retornar o percentual baseado na fase selecionada
        // Exemplo: se fase for 1, retorne 10%; se fase for 2, retorne 20%, etc.
        switch (fase) {
            case "1":
                return 10;
            case "2":
                return 20;
            // Defina mais casos conforme necessário
            default:
                return 0; // Percentual padrão se a fase não for reconhecida
        }
    }

    function getBadgeClassPorFase(fase) {
        // Defina a lógica para retornar a classe da badge baseada na fase selecionada
        // Exemplo: se fase for 1, retorne 'badge bg-danger'; se fase for 2, retorne 'badge bg-warning', etc.
        switch (fase) {
            case "1":
                return 'badge bg-danger';
            case "2":
                return 'badge bg-warning';
            // Defina mais casos conforme necessário
            default:
                return 'badge bg-secondary'; // Classe padrão se a fase não for reconhecida
        }
    }
});
