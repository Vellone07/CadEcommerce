# Sistema de Cadastro e Visualização de Produtos para Ecommerce

## Descrição do Projeto

Este projeto consiste em um sistema para cadastro de produtos, marcas e categorias destinado a um ecommerce. Além disso, oferece a funcionalidade de visualização do carrinho de compras. Foi desenvolvido utilizando PHP e MySQL, com uma interface construída em HTML e CSS.
![img](img/tela-inicial.png)

### Funcionalidades Principais

1. **Cadastro de Produtos**: Permite adicionar novos produtos ao sistema.
![img](img/cadastro-produtos.png)
2. **Cadastro de Marcas**: Permite adicionar novas marcas ao sistema.
![img](img/cadastro-marca.png)
3. **Cadastro de Categorias**: Permite adicionar novas categorias ao sistema.
![img](img/cadastro-categoria.png)
4. **Visualização do Carrinho**: Exibe os produtos adicionados ao carrinho.
![img](img/carrinho.png)

### Estrutura do Projeto

O projeto é composto pelos seguintes arquivos principais:

- `carrinho.php`
- `categoria.php`
- `index.php`
- `insere-categoria.php`
- `insere-marca.php`
- `insere-produto.php`
- `marca.php`
- `pedido.php`
- `produtos.php`

Além disso, inclui arquivos secundários para JavaScript, modelos, CSS e controladores.

#### Descrição dos Arquivos

1. **carrinho.php**: Responsável por exibir o conteúdo do carrinho de compras, incluindo o arquivo `controller/carrinho-busca.php` para buscar e exibir os produtos no carrinho.
   
2. **categoria.php**: Usado para cadastrar novas categorias de produtos, contém um formulário que envia dados para `insere-categoria.php` via método POST.

3. **index.php**: Página inicial que exibe os produtos disponíveis, incluindo o arquivo `controller/produtos-busca.php` para buscar e exibir os produtos.

4. **insere-categoria.php**: Processa o formulário de cadastro de categorias e insere os dados no banco de dados após validar o formulário.

5. **insere-marca.php**: Processa o formulário de cadastro de marcas e insere os dados no banco de dados após validação.

6. **insere-produto.php**: Processa o formulário de cadastro de produtos, insere os dados no banco de dados e redireciona para a página de produtos com uma mensagem de sucesso ou erro.

7. **marca.php**: Usado para cadastrar novas marcas de produtos, contém um formulário que envia os dados para `insere-marca.php` via método POST.

8. **pedido.php**: Exibe o resumo do pedido, incluindo o arquivo `controller/produtos-resumo.php` para buscar e exibir o resumo dos produtos do pedido.

9. **produtos.php**: Utilizado para cadastrar novos produtos, contém um formulário que envia os dados para `insere-produto.php` via método POST e popula os selects de categoria e marca com dados do banco de dados.

### Ferramentas Utilizadas

Para executar este projeto, é necessário ter o XAMPP e o phpMyAdmin instalados e configurados corretamente para gerenciar o banco de dados.

### Estrutura do Banco de Dados
![img](img/bdd.png)
O banco de dados foi estruturado de maneira a suportar as funcionalidades de cadastro e visualização de produtos, marcas e categorias.


### Fontes

- GitHub Docs
- Dio.me
- Chat,gpt
  
### Agradecimentos

Gostaríamos de expressar nossa gratidão ao professor Leo pela orientação e suporte ao longo deste projeto. Sua ajuda foi essencial para a realização deste trabalho.

## Contato
@Davi_Vellone
