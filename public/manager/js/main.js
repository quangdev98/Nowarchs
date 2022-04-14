$(document).ready(function(){
    // eye pass
    $(".eyes").click(function () {
        $(this).siblings('input').attr('type', function(index, attr){
            return attr == 'password' ? 'text' : 'password' ;
        });

        $(this).children().attr('src', function(index, attr){
            return attr == url + '/images/eyes_active.png' ? url + '/images/eyes_disable.png' : url + '/images/eyes_active.png' ;
        });
    });
})
