$(function(){
    //nao to consequindo fazer ele encontrar o header nem a class dele pra pode fazer os parametros
    $(window).scroll(function () {
        if($(this).scrollTop() > 200)
        {
            if (!$('_header').hasClass('fixed'))
            {
                $('_header').stop().addClass('fixed').css('top', '-100px').animate(
                    {
                        'top': '0px'
                    }, 500);
            }
        }
        else
        {
            $('_header').removeClass('fixed');
        }
  });


});