function insertData() {

    var title = $('#title').val();
    var user_id = $('#user_id').val();
 
    $.ajax({
        type: 'POST',
        url: '/insert/job',
        data: { 
            title: title,
            user_id: user_id
        },
        success: function(response) {
            console.log(response);
            $('#result').html(response);
            if(response){
            $('#msg').text("job inserted successfully ");
            }
        },
        error: function(xhr, status, error) {
            console.error('Error:', xhr.responseText);
        }
    });
}

