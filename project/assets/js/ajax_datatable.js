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
    
    // $('#userdata tfoot th').each( function (i) {
    //     var title = $('#userdata thead th').eq( $(this).index() ).text();
    //     $(this).html( `<input type="text" class="form-control" placeholder="Search in ${title}" data-index="${i}" />` );
    // } );

    var userdataTable = $(`#userdata`).DataTable({
        "processing": true,
        "fixedColumns": true,
        "serverSide": true,
        'paging': true,
        "pagingType": 'full_numbers',
        "language": {
            "search": "",
            "searchPlaceholder": "Search Dealers",
        },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "order": [],  // Orderable false
        "ajax": {
            "url": `${baseUrl}datatable/get`,
            "dataSrc" : 'data',
            "type": 'POST',
        },
        "columnDefs": [
            { 
                "searchable": false, 
                "targets": [4,5] 
            },
            {
                "orderable": false,
                "targets": [3,4,5] 
            }
        ],
        "columns": [ 
            { "data": 'id' },
            { "data": 'user_id' },
            {
                "data": 'title',
                // "searchable": false,
                "render": $.fn.dataTable.render.ellipsis( 30 )
            },
            { "data": 'completed' },
            {
                "data": 'id',
                "render": function(data, type, row) {
                    if(type === 'display'){
                        return `<a href="${baseUrl}datatable/edit/${data}" class="btn btn-success">Edit</a>`;
                    }

                    return data;
                }
            },
            {
                "data": 'id',
                "render": function(data, type, row) {
                    if (type === 'display'){
                        return `<a href="${baseUrl}datatable/delete/${data}" class="btn btn-danger">Delete</a>`;
                    }

                    return data;
                }
            }
        ],
        "scrollY" : 400,
        "buttons": [
            {
                extend: 'csv',
                text: 'Copy all data',
                exportOptions: {
                    modifier: {
                        search: 'none'
                    }
                }
            }
        ],
        // "responsive": {
        //     breakpoints:[
        //         { name: 'desktop', width: Infinity },
        //         { name: 'tablet',  width: 1024 },
        //         { name: 'fablet',  width: 768 },
        //         { name: 'phone',   width: 480 }
        //     ],
        // },
        // "scrollX": true,
        "scrollCollapse": true,
    });

    var responsive = new $.fn.dataTable.Responsive( userdataTable, {
            breakpoints:[
                { name: 'desktop', width: Infinity },
                { name: 'tablet',  width: 1024 },
                { name: 'fablet',  width: 768 },
                { name: 'phone',   width: 480, paging: false }
            ],
    } );

    // Select option in filter
    userdataTable.on('init.dt', function(){
        var response = userdataTable.ajax.json();
        var selectOptions = '';
        
        selectOptions += `<option value="">--Select--</option>`;    // option for no filter

        // Adding Data in ID Format
        response.data.forEach(element => {
            selectOptions += `<option value="${element.completed}">${element.completed}</option>`;
        });

        // 
        $(`#completed-select`).html(selectOptions);
    });

    // Event to Filter
    $(`#userdata_filter`).on('input', 'input, select', function(){
        userdataTable.column($(this).data('index'))
        .search(this.value)
        .draw();
    });

    // Select2
    $('select:not(.not-select2)').select2();
});