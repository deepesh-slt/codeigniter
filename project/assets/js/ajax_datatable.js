$(document).ready(function () {

    $.fn.dataTable.render.ellipsis = function ( cutoff ) {
        return function ( data, type, row ) {
            if ( type === 'display' ) {
                var str = data.toString(); // cast numbers
     
                return str.length < cutoff ?
                    str :
                    str.substr(0, cutoff-1) +'&#8230;';
            }
     
            // Search, order and type can use the original data
            return data;
        };
    };

    var userdataTable = $(`#userdata`).DataTable({
        "processing": true,
        "serverSide": true,
        'paging': true,
        "pagingType": 'full_numbers',
        "language": {
            "search": "Search Dealers:"
        },
        // order: [],
        "ajax": {
            "url": `${baseUrl}datatable/get`,
            "dataSrc" : 'data',
            "type": 'POST',
        },
        // "columnDefs":[
        //     {
        //         "targets": [0,1,2,3,4],
        //         "orderable": false,
        //     }
        // ],
        "columns": [ 
            {"data": 'id',},
            {
                "data": 'user_id',
                // render: function(data,type,row){
                //     if (type === 'filter'){
                //         return row.userId;
                //     } else {
                //         return `${row.userId} - ${data}`;
                //     }
                // },
            },
            {
                "data": 'title',
                render: $.fn.dataTable.render.ellipsis( 30 ),
            },
            { "data": 'completed'},
        ],
        "scrollY" : 400,
    });
});