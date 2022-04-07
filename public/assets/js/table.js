$(document).ready(function() {

    listaUsers();
    var variable = url_list_usuarios;
});

function listaUsers() {
    $("#list_users").KTDatatable("destroy");
    $("#list_users").KTDatatable("init");
    $("#list_users").KTDatatable({
        data: {
            type: "remote",
            source: {
                read: {
                    url: url_list_usuarios,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                }
            },
            pageSize: 10,
            serverPaging: !0,
            serverFiltering: !0,
            serverSorting: !0
        },
        layout: {
            scroll: true,
            customScrollbar: true,
            scrollX: true,
            footer: !1,
            spinner: {
                color: '#FFF'
            }
        },
        sortable: !0,
        pagination: !0,
        search: {
            input: $("#search_products"),
            key: "search_products"
        },
        translate: {
            records: {
                processing: 'Cargando...',
                noRecords: 'Sin resultados'
            },
            toolbar: {
                pagination: {
                    items: {
                        info: 'Mostrando {{start}} - {{end}} de {{total}} resultados'
                    }
                }
            }
        },
        rows: {
            autoHide: false,
        },
        columns: [{
                field: "id",
                title: "ID",
                sortable: !1,
                textAlign: "center"
            },
            {
                field: "name",
                title: "Nombre",
                sortable: !1,
                textAlign: "center",
            },
            {
                field: "email",
                title: "Email",
                sortable: !1,
                textAlign: "center",
            },
            {
                field: "foto_id",
                title: 'Imagen',
                textAlign: "center",
                sortable: !1,
                autoHide: false,
                template: function(row, data, index) {
                    return '<img src="' + url_upload_img + '/' + row.img + '" width="50px" height="auto">';
                },
            },
        ],
    });
}