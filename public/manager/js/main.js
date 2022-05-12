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


    // choose image
    function readURL(input) {
        if (input.files && input.files[0]) {
            var url = URL.createObjectURL(event.target.files[0]);
            $(input).parent().find('span.invalid-feedback').text('');
            $(input).parent().find('div.preview').show();
            $(input).parent().find('div.preview').attr("style", "background: #eef0f8 url('" + url + "') no-repeat top center; background-size: contain; display: block; background-position: center");
            $(input).parent().find('div.fill').addClass('active');
            $(input).parent().find('.b-drop').addClass('active');
        }
    }
    $("#file").change(function() {
        readURL(this);
      });


      function setWidthText() {
		let showChar = 150;
		var ellipsestext = "...";
		var data = ['content-show-lest>div'];
		data.forEach(function (value) {

			$('.' + value).each(function () {
				var content = $(this).html();
				if (content.length > showChar) {
					var c = content.substr(0, showChar);
					var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp';
					$(this).html(html);
				}

			});
		});
	}
	setWidthText();
})
