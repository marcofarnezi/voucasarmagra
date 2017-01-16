<!-- Credits -->
<div id="credits" class="content-section-a">
    <center>
        <img class="img-responsive " src="/img/linha_tempo.png" >
    </center>
    <div class="container">
        <div class="row">
            <!-- Use it -->
            <div id ="useit" class="content-section-a">

                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 pull-right wow fadeInRightBig">
                            <img class="img-responsive " src="/img/bio.jpg" alt="">
                        </div>

                        <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                            <p class="lead">
                                Desde nova sempre tive um grande problema com peso, por causa do temido efeito sanfona. Sempre fui muito ansiosa e estressada e é claro, sempre descontei isso na comida. As vezes fazia coisas do tipo fica uma semana inteira comendo apenas um tomate por dia, para compensar os exageros e conseguir que minhas roupas voltassem a me servir, passei até pela fase de vomitar após comer e me sentir culpada.  Fazia academia, mas com uma alimentação tão ruim nunca conseguia resultados satisfatórios, cheguei a pesar 72Kg com 1,68m de altura, nessa época e me achava enorme, mas o pior ainda estava por vir.
                            </p>
                            <p class="lead">
                                Em 2014 me mudei para outra cidade e fui morar sozinha, lá por causa da faculdade ficava muito estressada e comia muita porcaria, engordei e cheguei aos 78kg, mas após ir ao médico por diversos problemas com ansiedade ele me passou um remédio que me fazia tão mal que me fez voltar aos 72Kg. Eu já não tomava mais o remédio com tanta frequência quando conheci meu namorado e não demorou muito fomos morar juntos, parei completamente com o medicamento, e como sempre dizem, relacionamento bom engorda e então cheguei ao meu auge de 93kg.
                            </p>
                        </div>
                    </div>

                    <button class="btn wow tada btn-embossed btn-primary" id="inicio_mais">Leia mais</button>
                    <a href="#inicio_resto" style="display: none" id="inicio_ancora"></a>
                    <div id="inicio_resto" style="display: none"  class="content-section-a">
                        <p class="lead">
                            No final de 2015 conheci a dieta do Dr. Atkins lendo uma notícia sobre dieta de famosos, então comecei a pesquisar sobre ele, li o livro do Dr. Atkins em 2 dias já estava por dentro de tudo e sabia que aquela seria a minha dieta, então eu e meu namorado começamos a segui-la, e foi um verdadeiro sucesso, voltei para os meus 72kg rápido, estava muito feliz com os resultados, e não pretendia parar, nessa época eu via apenas os benefícios estéticos. Então veio ano novo e resolvemos “sair só durante a viagem” e teria dado certo se quando a gente voltou de viagem a gente realmente tivesse voltado para o estilo de vida.
                        </p>
                        <p class="lead">
                            No início de 2016, junto com o novo semestre na faculdade veio aquela grande ansiedade e estresse e voltei a descontar na alimentação novamente, comia McDonalds todos os dias, a lixeira da minha casa só tinha embalagens de fast food, eu não comia comida de verdade, cheguei aos 78kg novamente em 9 meses (confesso que não sei como não engordei mais).
                        </p>
                        <p class="lead">
                            Eu e meu namorado, depois de 2 anos morando juntos, começamos a falar em casamento, e eu me olhava no espelho e pensava “vou ser uma noiva tão feia gorda desse jeito”. Então no dia 12 de setembro de 2016 retomei a vida low carb com o projeto Vou casar magra, agora com mais conhecimento sobre o assunto após passar por matérias mais específicas no curso de Biomedicina e estudar muito mais, ler artigos e me informar, não via mais estética na dieta, via saúde. Hoje estou com 62kg, e nem acredito que consegui passar dos 72 que foi tão presente em minha vida por tanto tempo, minha saúde está ótima, meus problemas para dormir diminuíram e eu nunca estive melhor comigo mesmo.
                        </p>
                        <p class="lead">
                            Inicialmente o projeto era meu, uma meta pessoal minha, mas gerou tantos resultados bons que decidi compartilhar, a pedido de muitas pessoas, minhas experiências e conhecimentos dando início ao blog e ao grupo no facebook, onde ensino mais do que emagrecimento, ensino a ter saúde, buscar sempre uma vida mais saudável, e como consequência a disto melhorar a aparência também. Low carb não é uma dieta que promete milagres, é um estilo de vida que lhe trará saúde.
                        </p>
                    </div>
                </div>
                <!-- /.container -->
            </div>

        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#inicio_mais').click(function () {
            if ($("#inicio_resto").is(':visible')) {
                $("#inicio_resto").hide('slow');
                $(this).addClass('btn-primary') ;
                $(this).removeClass('btn-default');

                return true;
            }

            $("#inicio_resto").show('slow');
            $(this).removeClass('btn-primary') ;
            $(this).addClass('btn-default');
            $("#inicio_ancora").click();

            return true;
        });
    });
</script>

<div id="downloadlink" class="banner_nada content-section-a">
    {{-- <div class="container">
         <div class="row">
             <div class="col-md-6 col-md-offset-3 text-center wrap_title" style="color:rgb(0,128,128);">
                 <h2>Anuncie aqui.</h2>
                 <p class="lead" style="margin-top:0; color:rgb(0,58,58);">Divulgue sua marca para nossos leitores.</p>
                 <p><a class="btn btn-embossed btn-primary view" role="button">Anuncie agora</a></p>
             </div>
         </div>
     </div>--}}
</div>