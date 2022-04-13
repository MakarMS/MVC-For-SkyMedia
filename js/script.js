$('.signin-button').on('click', function(e){

    var email = $(".email-input").val();
    var password = $(".password-input").val();

        $.ajax({
            url: '/ajax/auth',
            method: 'post',
            dataType: 'json',
            data: {"email": email, "password": password},
            success: function(data) {
                console.log(data);
                if (data['valid_data'] == 0){
                    $('.email-input').val('')
                    $('.password-input').val('')

                    $('.email-input').first().addClass("error_input");
                    $('.email-input').attr('placeholder', 'Invalid E-Mail or Password');
                    $('.password-input').first().addClass("error_input");

                }else if (data['valid_data'] == 1){
                    window.location = "http://mvc-for-skymedia/" + data['url'];
                }
            }
        });
    });

$('.email-input, .password-input').focusin(function (){
    $('.email-input').attr('placeholder', 'E-Mail');
    $('.email-input').removeClass("error_input");
    $('.password-input').removeClass("error_input");
})