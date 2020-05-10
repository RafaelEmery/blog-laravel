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
        <div id="accordion">

            <!-- Pergunta 1 -->
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    O que é este projeto?
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  O <strong>Rafa Talks</strong> é um projeto de um blog com um sistema administrativo de gestão de conteúdo (CMS). O projeto é resultado da minha necessidade de ter um projeto pessoal para expor habilidades no GitHub e testar novos conhecimentos, principalmente em Laravel, e do fato de que um blog, de certa forma, é considerado didático para o aprendizado do Laravel. Visto estas duas situações, decidi fazer um blog com um CMS para evoluir com o Framework.
                </div>
              </div>
            </div>

            <!-- Pergunta 2 -->
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Quais as funcionalidades e o que posso fazer nele?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Basicamente, ele possui as funções de um sistema de gerenciamento de conteúdo (CMS). No caso do Rafa Talks, o usuário pode fazer as operações em posts do blog e algumas em relação aos comentários e mensagens. Além disso, existe a possibilidade de usar uma Lixeira para posts apagados e um CRUD com operações do "Sobre Nós" do site.
                </div>
              </div>
            </div>

            <!-- Pergunta 3 -->
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    O que foi usado e como isto pode me acrescentar?
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  A ideia do projeto é aplicar conceitos, práticas e padrões de projeto para fixar, e posso citar: Factories e Seeds, Accessors, Mutators e Scopes, Soft Deletes, Clean Code e autenticação de usuário. Além disso, estudei muito sobre <strong>as boas práticas que podemos ter no Laravel</strong> para o código se tornar mais legível e com melhor manutenibilidade. 
                </div>
              </div>
            </div>

            <!-- Pergunta 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      Como usar as tabelas do sistema?
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headinFour" data-parent="#accordion">
                  <div class="card-body">
                    Apesar das tabelas serem intuitivas, escolhi usar botões com ícones ao invés de textos. O ícone que possui uma <strong>bandeira</strong> significa que destaca o registro, assim como o que possui um <strong>"i"</strong> significa informações/detalhes. O editar e excluir possuem as suas respectivas cores e ícones:<strong> amarelo e vermelho</strong>. Vale ressaltar que a tabela de Lixeira possui dois ícones - restaurar (verde) e deletar (vermelho) - e uma opção para esvaziar a Lixeira (deletar todos).
                  </div>
                </div>
            </div>

            <!-- Pergunta 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                      Algumas dicas básicas?
                    </button>
                  </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                    <ul>
                        <li>
                            Factories e Seeds para gerar dados: Use o comando <i>php artisan db:seed</i> no terminal para ter a base de dados falsa.
                        </li>
                        <li>
                            Usuário padrão: Teste, teste@gmail.com, 123456789. Suas informações estão na factory UserFactory.
                        </li>
                        <li>
                            Só pode ser destacado um registro por vez, e uma vez que este post está ativado, não consegue se desativar o mesmo.
                        </li>
                        <li>
                            Entre no arquivo de rotas <i>web.php</i> na pasta <i>routes</i> para ver as rotas. Breve resumo: '/admin/' é para o sistema administrativo e '/admin/nome_da_secao/nome_do_metodo' para acessar as páginas e métodos.
                        </li>
                    </ul> 
                  </div>
                </div>
            </div>

            <!-- Pergunta 6 -->
            <div class="card">
                <div class="card-header" id="headingSix">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Como consigo conversar com o desenvolvedor?
                    </button>
                  </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                  <div class="card-body">
                    É simples! Clique no botão acima escrito <i>Acesse o site do Desenvolvedor</i> e clique na seção de contato! Lá você irá ter as informações necessários para isso <i class="fas fa-smile"></i>
                  </div>
                </div>
            </div>

        </div> 
    </div>
</div>

@endsection