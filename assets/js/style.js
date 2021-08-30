// open browse image after click on profile picture
$('#profile-image').on('click', function() {
    $('#profile-image-upload').click();
});

// change image after selecting another profile picture
$('#profile-image-upload').on( 'change', (event) => {
    const file = event.currentTarget.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = (event) => {
            $('#profile-image').attr('src', event.target.result);
        };
        reader.readAsDataURL(file);
    }
});

// Account Deletion Confirmation Popup Window Open/Close
$('#account_deletion_confirmation').on('click', (event) => {
    event.preventDefault();
    $('#confirm-delete-wrapper').css('display','flex');
    $('body').css('overflow','hidden');
});

$('#account_deletion_cancel').on('click', (event) => {
    event.preventDefault();
    $('#confirm-delete-wrapper').css('display','none');
    $('body').css('overflow','visible');
});