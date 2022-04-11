$('.signin-button').on('click', function(e){

    var login = $(".email-input").val();
    var password = $(".password-input").val();


    console.log('Логин:' + login);
    console.log('Пароль:' + password);
        $.ajax({
            url: '/ajax/auth',
            method: 'post',
            dataType: 'json',
            data: {"login": login, "password": password},
            success: function(data) {
                if (data['valid_data'] == 0){
                    $('.email-input').val('')
                    $('.password-input').val('')

                    $('.email-input').first().addClass("error_input");
                    $('.email-input').attr('placeholder', 'Invalid E-Mail or Password');
                    $('.password-input').first().addClass("error_input");

                }
            }
        });
    });

$('.email-input, .password-input').focusin(function (){
    $('.email-input').attr('placeholder', 'E-Mail');
    $('.email-input').removeClass("error_input");
    $('.password-input').removeClass("error_input");
})