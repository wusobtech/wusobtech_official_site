// console.log($('#comment_reply-21').html());
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#comment_form').on('submit', function(e) {
    e.preventDefault();
    var formdata = new FormData(this);
    $.ajax({
        url: "/make-comment",
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: formdata,
        success: function(data) {
            $('#comment_field').val('');
            console.log(data);        
            if (data.success) {
                successMsg("Success", data.msg);          
                errorMsg("Error", data.msg);        
            }
            $('.comment_count').each(function() {
                $(this).text(parseInt($(this).text()) + 1);
            });
        }
    });
});

$('.limit_50').each(function() {
    var text = $(this).text();
    console.log(text);
    $(this).html(text.substr(0, 50));
    $(this).css('display', 'block');
});


$('.limit_100').each(function() {
    var text = $(this).text();
    console.log(text);
    $(this).html(text.substr(0, 100));
    $(this).css('display', 'block');
});





$('#subscribe_form').submit(function(e) {
    e.preventDefault();
    console.log('processing');
    var form = new FormData(this);
    $.ajax({
        url: "/subscribe",
        type: "POST",
        cache: false,
        contentType: false,
        processData: false,
        data: form,
        success: function(data) {
            console.log(data);
            $('#subscribe_btn').css('background-color', 'green');
            $('#subscribe_btn_text').text('Subscribed!');
            $('#subscribe_btn_text').text(data.msg);
        }
    });
});