## Sobre o projeto

Consiste em um projeto pessoal de um blog no qual o usuário pode fazer diversas modificações no conteúdo do site, tais quais: criar, consultar, atualizar e deletar posts, e editar informações contidas no site. Em outras palavras, pode ser considerado como um CMS (sistema de gestão de conteúdo).

## Propósito do projeto

A ideia do projeto é basicamente conseguir aplicar conceitos e boas praticas novas em um projeto real, para que o aprendizado seja fixado. Abaixo, temos alguns exemplos e aprendizados obtidos neste projeto.

## Algumas das boas práticas e recursos do Laravel usados

# Relacionamento One To Many

# Factories e Seeders

# Accessors

# Local Scopes

# Request

# Autênticação de usuário


## Abrindo o projeto

Primeiro, clone este repositório para a sua máquina

Após isso, talvez você precise rodar os seguintes comandos na pasta do projeto:

composer update

cp .env.example .env

php artisan key:generate

E para ele funcionar localmente, digite

php artisan serve

## URLs do projeto

Para o site, pode-se usar:
- '/sobre'
- '/contato'
- '/admin'

Para o sistema adminstrativo:
- '/admin/posts'
- '/admin/comentarios'
- '/admin/mensagens'
- '/admin/sobre'
- '/admin/lixeira'
- '/admin/ajuda'

## Blog

Na página inicial, temos uma listagem das postagens que estão no banco de dados. A primeira postagem sempre será a Destacada pelo usuário que administra o Blog e também existe a opção de realizar a listagem de acordo com sua categoria. 

(Aqui ficará a imagem do blog)

## Post

Cada postagem possui uma imagem principal que fica ao fundo e a opção e exibição de comentários.

(Aqui ficará a imagem de um Post)

## Sistema Adminstrativo

A listagem é feita por meio de tabelas para as principais funcionalidades. Para o caso das postagens, existem cinco ações que o usuário pode tomar: criar, destacar, consultar, editar e enviar para a Lixeira.


