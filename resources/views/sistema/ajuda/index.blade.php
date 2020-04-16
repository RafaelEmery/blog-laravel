@extends('layout.templateSistema')

@section('tituloPagina')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Ajuda</h1>
  <a  href="https://rafaelemery.github.io" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-info fa-sm"></i> &nbsp; Acesse o site do desenvolvedor</a>
</div>

@endsection

@section('conteudo') 

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">FAQ - Perguntas Feitas Frequentemente</h6>
    </div>
    <div class="card-body">

        <!-- Collapsable Card 1 -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapsePergunta1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePergunta1">
                <h6 class="m-0 font-weight-bold text-primary"> Pergunta 1 </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapsePergunta1">                
                <div class="card-body">
                    <div class="row">
                       <p>
                            Mussum Ipsum, cacilds vidis litro abertis. Viva Forevis aptent taciti sociosqu ad litora torquent. Copo furadis é disculpa de bebadis, arcu quam euismod magna. 
                            Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget.
                       </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collapsable Card 2 -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapsePergunta2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePergunta2">
                <h6 class="m-0 font-weight-bold text-primary"> Pergunta 2 </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapsePergunta2">                
                <div class="card-body">
                    <div class="row">
                       <p>
                            Delegadis gente finis, bibendum egestas augue arcu ut est. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. 
                            Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.
                       </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collapsable Card 3 -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapsePergunta3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsePergunta3">
                <h6 class="m-0 font-weight-bold text-primary"> Pergunta 3 </h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapsePergunta3">                
                <div class="card-body">
                    <div class="row">
                       <p>
                            Atirei o pau no gatis, per gatis num morreus. In elementis mé pra quem é amistosis quis leo. Admodum accumsan disputationi eu sit. 
                            Vide electram sadipscing et per. Interagi no mé, cursus quis, vehicula ac nisi.
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection