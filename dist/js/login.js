
$(document).ready(function(){

    $('#btnLogin').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            url: base_url('login/checkLogin'),
            type: 'GET',
            data: {
                username: username,
                password: password
            },
            dataType: 'json',
            success: function(res) {
                if(res.result == true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        html: res.massage,
                        timer: 3000
                    }).then(() => {
                        window.location.href = base_url('dashboard/index')
                    })
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: res.message,
                    })
                }
            }
        })
    })
})