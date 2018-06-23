$(document).ready(function() {
    $('#dataTables-users').DataTable({
        responsive: true,
        language : {
            infoEmpty: "Nenhum usuário cadastrado!",
            info: "Total page _PAGE_ of _PAGES_",
            lengthMenu: "Filtrar por _MENU_",
            paginate: {
                "previous": "Voltar",
                "next": "Próximo"
            },
            search: "Pesquisar:"
        }
    });
});