$(document).ready(function () {
    $('.form').on('submit', function () {
        correctData = true;
        event.preventDefault();
        console.log('click');
        var form =$(this).parent().parent().find('.close');
        var block=$(this).children('div');
        var name = block.children('.name');
        var phone = block.children('.phone');
        var email = block.children('.email');
        console.log(phone.val())
        if(!phone.val()) {
            phone.addClass('error-input');
           setTimeout( function () {
               phone.removeClass('error-input');
           },2000);
            correctData=false;
        }
        var data={
            phone:phone.val(),
            name:name.val(),
            email:email.val(),
            topic:$(this).find('.topic').val()
        };
       if (correctData) {
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: data,
                success: function (result) {
                    form.click();
                    $('#overlay').fadeIn(500, function () {
                        $('#modal-end')
                            .css("display", "block")
                            .animate({opacity: 1}, 200);
                        console.log(1);
                        $('#overlay')
                            .css("display", "block")
                            .animate({opacity: 0.8}, 200);

                        $('#overlay, #modal-close').click(function () {
                            $('#overlay').fadeOut(1000, function () {
                                $('#modal-end, #overlay')
                                    .css("display", "none")
                                    .animate({opacity: 0}, 200);
                            });
                        });
                    });
                }
            });
        }
    });
    $('.form_catalog').on('submit', function () {
        correctData = true;
        event.preventDefault();
        console.log('click');
        var form =$(this).parent().parent().find('.close');
        var block=$(this).children('div');
        var name = block.children('.name');
        var phone = block.children('.phone');
        var email = block.children('.email');
        console.log(phone.val())
        if(!phone.val()) {
            phone.addClass('error-input');
           setTimeout( function () {
               phone.removeClass('error-input');
           },2000);
            correctData=false;
        }
        var data={
            phone:phone.val(),
            name:name.val(),
            email:email.val(),
            topic:$(this).find('.topic').val()
        };
       if (correctData) {
            $.ajax({
                type: 'POST',
                url: 'mail.php',
                data: data,
                success: function (result) {
                    form.click();
                    $('#overlay').fadeIn(500, function () {
                        $('#modal-download')
                            .css("display", "block")
                            .animate({opacity: 1}, 200);
                        console.log(1);
                        $('#overlay')
                            .css("display", "block")
                            .animate({opacity: 0.8}, 200);

                        $('#overlay, #modal-close').click(function () {
                            $('#overlay').fadeOut(1000, function () {
                                $('#modal-download, #overlay')
                                    .css("display", "none")
                                    .animate({opacity: 0}, 200);
                            });
                        });
                    });
                }
            });
        }
    });
});
$('.close').on('click',function () {
   var frame= $('#youtube_player').remove();
    setTimeout(function () {$('#frame-bl').html(frame);},300)
});
    $("#back-top").hide();
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#back-top').fadeIn();
            } else {
               
            }
        });

        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
           $('.to-go').click(function () {
            var he=$('.bl2').offset().top;

            $('body,html').animate({
                scrollTop: he
            }, 800);
            return false;
        });
    
 
  $('.bl8 #carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 4,
    asNavFor: '.bl8 #slider'
  });
 
  $('.bl8 #slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: ".bl8 #carousel"
  });

    $('.bl17 #carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 7,
    asNavFor: '.bl17 #slider'
  });
 
  $('.bl17 #slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: ".bl17 #carousel"
  });
});