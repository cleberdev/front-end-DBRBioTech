<?php 
    include ("header.php"); 

    /**
     * Imprime o elemento com o primeiro termo 
     * adicionado em uma tag span para estilização
     * @param $termo -> type String
     */
    $termo_bold = function( $termo = "" ){

        if( !empty( $termo) ){

            $arr_string = explode(" ",$termo );
            $result = '<span class="term_bold">'. $arr_string[0].'</span>';
            unset( $arr_string[0] );

            $termo = $result .' '. implode(" ", $arr_string);
            echo $termo ;

        }

    };
    

?>

<section id="home" class="fdez-banner page-home">
    <div class="swiper-container swiper-main">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <figure>
                    <img src="assets/img/midia/banner1.jpg" alt="Banner destaque">
                    <div class="container position-relative">
                        <figcaption>
                            <div class="titulo">Qualidade e agilidade</div>
                            <div class="subtitulo">DBR sua melhor escolha</div>
                            <div class="box-btn">
                                <a class="btn-geral" href="" title="Link para o post">Conheça nossas soluções</a>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>


            <div class="swiper-slide">
                <figure>
                    <img src="assets/img/midia/banner1.jpg" alt="Banner destaque">
                    <div class="container position-relative">
                        <figcaption>
                            <div class="titulo">Lorem ipsim</div>
                            <div class="subtitulo">Um outro texto aqui</div>
                            <div class="box-btn">
                                <a class="btn-geral" href="" title="Link para o post">Confira</a>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>



        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <!-- <i class="fas fa-chevron-left"></i>
        <i class="fas fa-chevron-right"></i> -->
    </div>
</section>

<section id="quemsomos" class="fdez-sobre page-home">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <figure>
                    <img src="assets/img/midia/img-solucoes.jpg" alt="Imagem Soluções">
                </figure>
            </div>

            <div class="col-12 col-md-7 d-flex align-items-center">
                <div class="box-content">
                    <div class="box-titulo">
                        <h2><?php $termo_bold( "Soluções para laboratórios" ); ?> </h2>
                    </div>
                    <div class="box-text">
                        <p>
                            Desde 1995 no mercado de diagnóstico, a DBR Biotech representa no Brasil diversas empresas,
                            sendo todas devidamente certificadas pelos Padrões Internacionais de Qualidade.
                        </p>
                    </div>
                    <div class="box-btn">
                        <a class="btn-geral" href="" title="Link para o post">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="produtos" class="fdez-nossos-produtos page-home">
    <div class="container">
        <div class="box-titulo">
            <h2><?php $termo_bold( "Nossos Produtos" );?> </h2>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="box-itens">
                    <img src="assets/img/midia/img_mouse.png" alt="Imagem">
                    <h4>Pesquisa</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="box-btn-mais">
                        <img src="assets/img/midia/img-simb-mais.png" alt="Imagem">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="box-itens">
                    <img src="assets/img/midia/img_ampola.png" alt="Imagem">
                    <h4>Pesquisa</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="box-btn-mais">
                        <img src="assets/img/midia/img-simb-mais.png" alt="Imagem">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 d-flex justify-content-center">
                <div class="box-itens">
                    <img src="assets/img/midia/img-microscopio.png" alt="Imagem">

                    <h4>Pesquisa</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="box-btn-mais">
                        <img src="assets/img/midia/img-simb-mais.png" alt="Imagem">
                    </div>
                </div>
            </div>
        </div>

        <div class="box-btn">
            <a class="btn-geral" href="" title="Link para o post">Veja todos os produtos</a>
        </div>
    </div>
</section>

<section id="parceiros" class="fdez-parceiros page-home">
    <div class="container">
        <div class="box-titulo">
            <h2><?php $termo_bold( "Parceiros" );?> </h2>
        </div>

        <div class="box-destaques">
            
                <div class="box-itens">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/prc_IBL.jpg" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/prc_exbio.jpg" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/prc_spherotech.jpg" alt="Imagem">    
                    </figure>
                </div>

                <div class="box-itens">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                         <img src="assets/img/midia/img_cedarlane.jpg" alt="Imagem">    
                    </figure>
                </div>

                
                <div class="box-itens">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-nordi.png" alt="Imagem">
                    </figure>
                </div>
            
        </div>
        <hr class="linha">

        <div class="box-nao-destaques row">
            
                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-ucytech_logo.png" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img_affinit.jpg" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-FineTest.jpg" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-mpbio.jpg" alt="Imagem">
                    </figure>
                </div>


                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img_ortho_logo.png" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-randox.png" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-MediPlus.jpg" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-LUMIRADX.png" alt="Imagem">
                    </figure>
                </div>

                <div class="box-itens col-md-2">
                    <div class="box-hover">
                        <a href="#">
                            <p>Tenho interesse</p>   
                            <p><i class="fas fa-search"></i></p> 
                        </a>
                    </div>
                    <figure>
                        <img src="assets/img/midia/img-ids.png" alt="Imagem">
                    </figure>
                </div>

        </div>

    </div>
</section>

<section id="eventos" class="fdez-eventos page-home">
    <div class="container">
        <div class="box-titulo">
            <h2><?php $termo_bold( "Eventos" );?></h2>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-eventos.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>1 de dezembro de 2019</span>
                        <h3>Evento 1</h3>
                        <p>Um breve resumo do evento aqui. Um breve resumo do evento aqui. Um breve resumo do evento
                            aqui. </p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-eventos.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>1 de dezembro de 2019</span>
                        <h3>Evento 1</h3>
                        <p>Um breve resumo do evento aqui. Um breve resumo do evento aqui. Um breve resumo do evento
                            aqui. </p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">Saiba mais <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-eventos.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>1 de dezembro de 2019</span>
                        <h3>Evento 1</h3>
                        <p>Um breve resumo do evento aqui. Um breve resumo do evento aqui. Um breve resumo do evento
                            aqui. </p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">Saiba mais <i class="fas fa-long-arrow-alt-right"></i> </a>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="box-btn">
            <a class="btn-geral" href="" title="Link para o post">Veja nosso calendário completo</a>
        </div>

    </div>
</section>

<!--  ??? o título parece ser Notícias e não newsletter(layout) ???  -->
<section id="newsletter" class="fdez-newsletter page-home">
    <div class="container">
        <div class="box-titulo">
            <h2><?php $termo_bold( "Newsletter" );?></h2>
        </div>

        <div class="row">
            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-newsletter.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>POR ADMIN | 1 DE NOVEMBRO, 2019</span>
                        <h3>Nova descoberta na Medicina</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus purus...</p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">leia mais <i class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-newsletter.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>POR ADMIN | 1 DE NOVEMBRO, 2019</span>
                        <h3>Nova descoberta na Medicina</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus purus...</p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">leia mais <i class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="box-card">
                    <figure>
                        <img src="assets/img/midia/img-newsletter.jpg" alt="Imagem">
                    </figure>

                    <div class="box-body">
                        <span>POR ADMIN | 1 DE NOVEMBRO, 2019</span>
                        <h3>Nova descoberta na Medicina</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus purus...</p>
                    </div>

                    <div class="box-footer-card">
                        <a href="#" title="Link para o post">leia mais <i class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="box-btn">
            <a class="btn-geral" href="" title="Link para o post">Ver todas as notícias</a>
        </div>

    </div>
</section>

                            
<section id="contato" class="fdez-form-1 page-home" >
    <div class="container">
        <form>
            <div class="form-row">
                <div class="col-12 col-md-4">
                    <div class="box-titulo">
                        <h2><?php $termo_bold( "Solicite uma proposta" );?></h2>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Digite seu e-mail aqui">
                </div>

                <div class="col-12 col-md-2">
                    <div class="box-btn">
                        <input class="btn-geral" type="submit" value="Enviar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



<section class="fdez-mapa page-home">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="box-endeco">
                    <figure>
                        <img src="assets/img/logotipo.png" alt="Logomarca">
                    </figure>
                    <p><i class="fas fa-phone-alt"></i>+55 11 3907-1433</p>
                    <p><i class="fas fa-envelope"></i>vendas@dbrbiotech.com.br</p>
                    <address>
                      <p><i class="fas fa-map-marker-alt"></i>R. Alfeu Taváres, 212 - Rudge Ramos, São Bernardo do Campo - SP, 09641-000</p> 
                     </address>
                </div>
            </div>
            <div class="offset-md-1 col-12 col-md-4">
                <img src="assets/img/midia/img-mapa.jpg" alt="Imagem">
            </div>
            <div class="col-12 col-md-3">
                <div class="btn-social">
                    <div class="box-content-social">
                        <a href="" target="_blank" title="Instagram">
                            <span class="fa-stack fa-2x">
                                <i class="fas xfa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x xfa-inverse"></i>
                            </span>
                        </a>
    
                        <a href="" target="_blank" title="Linkedin">
                            <span class="fa-stack fa-2x">
                                <i class="fas xfa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x xfa-inverse"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include ("footer.php"); ?>