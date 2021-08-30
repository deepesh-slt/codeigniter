switch (pageName) {
    case 'index':
        var url = 'https://jsonplaceholder.typicode.com/todos/';

        // Data Fetching Starteds
        fetch(url)
        .then(response => response.json())
        .then(data => printApiData(data));

        // Inserted Data into document with the help of DOM
        function printApiData(data) {
            var sectionContainer = document.querySelector('#data .row');
            var importedData = '';

            data.forEach(value => {
                importedData  +=  `<div class="col-12 col-sm-6 col-lg-4 col-xl-3 col-xxl-2 my-3">
                                            <div class="bg-white py-2 px-3 h-100">
                                                <h5> id: ${value.id}</h5>
                                                <h5> user id: ${value.userId}</h5>
                                                <h5> title: ${value.title}</h5>
                                                <h5> completed: ${value.completed }</h5>
                                            </div>
                                        </div>`;
            });

            sectionContainer.innerHTML = importedData;
        }
        
        break;
    
    // case 'userdata':
    //     var url = `${baseUrl}use_api/get_userdata`;

    //     // Data Fetching Starteds
    //     fetch(url)
    //     .then(response => response.json())
    //     .then(data => insert_userdata(data));

    //     // Inserted Data into document with the help of DOM
    //     function insert_userdata(data){
    //         var userdataContainer = document.querySelector('#userdata-container tbody');
    //         var importedData = '';

    //         data.forEach( value => {
    //             importedData += `<tr>
    //                                 <td>${value.fullname}</td>
    //                                 <td>${value.username}</td>
    //                                 <td>${value.email}</td>
    //                                 <td>${value.password}</td>
    //                                 <td><button class="btn btn-warning">Edit</button></td>
    //                                 <td><a target="_blank" href="${baseUrl}/use_api/delete_user/${value.id}" class="btn btn-danger">Delete</a></td>
    //                             </tr>`;
    //         });

    //         userdataContainer.innerHTML = importedData;
    //     }

    //     // Add Data to Database
    //     document.querySelector('form').addEventListener('submit', event => {
    //         event.preventDefault();

    //         var url = `${baseUrl}use_api/add_userdata`;

    //         var data = {
    //             'fullname' : event.currentTarget.querySelector(`input[name=fullname]`).value,
    //             'username' : event.currentTarget.querySelector(`input[name=username]`).value,
    //             'email' : event.currentTarget.querySelector(`input[name=email]`).value,
    //             'password' : event.currentTarget.querySelector(`input[name=password]`).value,
    //         };

    //         fetch(url, {
    //             method: 'POST',
    //             body: JSON.stringify(data),
    //             // headers: {
    //             //     'Content-Type': 'application/json; charset=UTF-8',
    //             // },
    //         })
    //         .then(response => response.json())
    //         .then( data => {
    //             // location.reload();
    //             console.log(data);
    //         });
    //     })
        

    //     break;

    default:
        break;
}

$('.edit-btn').on('click', function(event) {
    event.preventDefault();

    var dataParent = $(this).parents('tr');
    
    var data = {
        'id' : $(event.target).attr('data-id'),
        'fullname' : $(dataParent).children('td:nth-child(2)').text(),
        'username' : $(dataParent).children('td:nth-child(3)').text(),
        'email' : $(dataParent).children('td:nth-child(4)').text(),
        'password' : $(dataParent).children('td:nth-child(5 )').text(),
    };

    for (const key in data) {
        $(`form input[name=${key}]`).val(data[key]);
        // console.log(`form input[name=${key}]`);
    }

    $(`.btn-primary`).addClass('btn-warning').val('Edit User').attr('name', 'edit_user');
    window.scrollTo(0, 0);

});