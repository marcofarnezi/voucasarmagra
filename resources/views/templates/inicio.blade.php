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
                                Desde nova, sempre tive um grande problema com peso por ser muito ansiosa e estressada, e é claro, descontar isso na comida. As vezes fazia coisas como ficar uma semana inteira comendo apenas um unico tomate por dia para compensar os exageros e conseguir que minhas roupas voltassem a me servir. Passei até pela fase de vomitar por sentir culpa por comer.  Fazia academia, mas com uma alimentação tão ruim, nunca conseguia resultados satisfatórios. Cheguei a pesar 72Kg com 1,68m de altura, nesta época eu me achava enorme, mas o pior ainda estava por vir.
                            </p>
                            <p class="lead">
                                Em 2014 me mudei para outra cidade e fui morar sozinha. Lá, por causa da faculdade, ficava muito estressada e comia muita porcaria, engordei e cheguei aos 78kg. Após ir ao médico por diversos problemas com ansiedade, ele me passou um remédio que me fazia tão mal que voltei rapidamente aos 72Kg. Eu já não tomava mais o remédio com tanta frequência quando conheci meu namorado e não demorou para irmos morar junto. Parei completamente com o medicamento, e como sempre dizem, relacionamento bom engorda, então cheguei ao meu auge de 93kg.
                            </p>
                        </div>
                    </div>

                    <button class="btn wow tada btn-embossed btn-primary" id="inicio_mais">Leia mais</button>
                    <a href="#inicio_resto" style="display: none" id="inicio_ancora"></a>
                    <div id="inicio_resto" style="display: none"  class="content-section-a">
                        <p class="lead">
                            No final de 2015 conheci a dieta com pouco carboidrato lendo uma notícia sobre dieta de famosos, então comecei a pesquisar sobre ela. Li o livro do Dr. Atkins em 2 dias. Já estava por dentro de tudo e sabia que aquela seria a minha dieta, então eu e meu namorado começamos a segui-la e foi um verdadeiro sucesso, voltei para os meus 72kg em 3 meses. Estava muito feliz com os resultados e não pretendia parar. Nessa época eu via apenas os benefícios estéticos. Então veio ano novo e resolvemos “sair da dieta só durante a viagem”, mas é claro que isso não daria certo.
                        </p>
                        <p class="lead">
                            No início de 2016, junto com o novo semestre na faculdade veio aquela grande ansiedade e estresse e voltei a descontar na alimentação. Comia McDonalds todos os dias e a lixeira da minha casa só tinha embalagens de fast food. Eu não comia comida de verdade e cheguei aos 78kg novamente em 9 meses (confesso que não sei como não engordei mais).
                        </p>
                        <p class="lead">
                            Eu e meu namorado, depois de 2 anos morando juntos, começamos a falar em casamento, só que eu me olhava no espelho e pensava “vou ser uma noiva tão feia gorda desse jeito”. Então no dia 12 de setembro de 2016, retomei a vida low carb com o projeto <b><i>Vou Casar Magra</i></b>, agora com mais conhecimento sobre o assunto após passar por matérias mais específicas no curso de Biomedicina , ler artigos e me informar. Não via mais estética na dieta, via saúde. Hoje estou com 62kg e nem acredito que consegui passar dos 72, que foi tão presente em minha vida por tanto tempo. Minha saúde está ótima, meus problemas para dormir diminuíram e eu nunca estive melhor comigo mesma.
                        </p>
                        <p class="lead">
                            Inicialmente o projeto era meu, uma meta pessoal minha, mas gerou tantos resultados bons que, a pedido de muitas pessoas, decidi compartilhar minhas experiências e conhecimentos dando início ao blog e ao grupo no facebook, onde ensino mais do que emagrecimento, ensino a ter saúde, buscar sempre uma vida mais saudável e como consequência disto, melhorar também a aparência. Low carb não é uma dieta que promete milagres, é um estilo de vida que lhe trará saúde.
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