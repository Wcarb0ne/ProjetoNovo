<header class="main_header container">        
    <div class="content">
    
    </div>
</header>
<nav>

    <ul>
        <!-- vai se o botao de click -->
        <li><div class="btn-social" id="btnToggle"><span class="icon icon-sharethis"></span></div>

            <ul class="Menu-social">

                <li><a href=""><span class="icon icon-instagram"></span></a></li>
                <li><a href=""><span class="icon icon-twitter"></span></a></li>
                <li><a href=""><span class="icon icon-facebook"></span></a></li>
                <li><a href=""><span class="icon icon-pinterest"></span></a></li>

            </ul>

        </li>
    </ul>

</nav>

<script>

    $(document).ready(function(){
        $('#btoSocial').click(function(){

            if(!$(this).hasClass('ativo')){
                $(this).addClass('ativo');
                $('.Menu-social').fadeIn(300);
            }
            else{
                $(this).removeClass('ativo');
                $('.Menu-social').fadeOut(300);
            }

        });
    });

</script>