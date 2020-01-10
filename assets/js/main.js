$(document).ready(function() { 
    
    var swiper = new Swiper('.swiper-main', {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.fa-chevron-right',
            prevEl: '.fa-chevron-left',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        
    });
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === !1) {
                event.preventDefault();
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, !1)
    });
    
    $('[data-fancybox="gallery"]').fancybox();
    
    $('.eq-height').matchHeight();




    // fechar menu mobile
    $(document).on('click','.nav-link',function(e) {
        $("div#navbarSupportedContent").collapse('hide');
    });
    
    // menu flutuante
    // $(window).scroll(function () { 
    //     if ($(this).scrollTop() > 177) { 
    //         $( '.menu-fixo' ).css( "display", "block");
    //     } else { 
    //         $( '.menu-fixo' ).css( "display", "none" ); 
    //     } 
    // }); 

    //INI - Integrando block gallery com fancybox
    $('.blocks-gallery-item').click(function() {
        var idx_w = $(".blocks-gallery-item").index(this) // indice do elemento pai
        var idx = $(".blocks-gallery-item:eq('" + idx_w + "') figure img").index(this)// indice da imagem
        
        // obtem path da imgem em cada src do elemento
        var src = $(".blocks-gallery-item:eq('" + idx_w + "') figure img").eq(idx).attr('src')

        // verifica se existe pela quantidade
        var elem = $(".blocks-gallery-item:eq('" + idx_w + "') a").length
        if (elem == 0) {
            $(".blocks-gallery-item:eq('" + idx_w + "') figure").wrap("<a href='" + src + "'data-fancybox='gallery'></a>");
        }
    });

    var elem2 = $(".blocks-gallery-item a").length
    if (elem2 == 0) {
        for (let x = 0; x < $(".blocks-gallery-item figure").length; x++) {
            let src = $(".blocks-gallery-item:eq('" + x + "') figure img").attr('src')
            $(".blocks-gallery-item:eq('" + x + "') figure").wrap("<a href='" + src + "'data-fancybox='gallery'></a>");
            console.log(x + '-' + src)
        }
    }


     
    $('.nav-item a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 500);
    });
    

});

