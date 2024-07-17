# Sistema Gestor Financeiro
## Descrição do Projeto

Este projeto é um sistema gestor financeiro desenvolvido com o objetivo de ajudar os usuários a gerenciar suas finanças pessoais de forma eficiente. Através deste sistema, os usuários podem criar suas contas, registrar seus gastos e ganhos, visualizar o total de ganhos e a quantia restante, além de acessar o histórico completo de suas transações.
## Tecnologias Utilizadas

- Vite: Ferramenta de build e desenvolvimento rápida para projetos front-end.
- HTML: Utilizado para estruturar as páginas do sistema.
- CSS: Utilizado para estilizar e melhorar a aparência visual do sistema.
- JavaScript: Utilizado para adicionar interatividade e melhorar a experiência do usuário.
- Tailwind CSS: Framework de CSS para estilização rápida e eficiente.
- PHP: Utilizado para a lógica de backend e manipulação de dados.
- Laravel 11: Framework PHP utilizado para construir o sistema de forma eficiente e organizada.
- MySQL: Banco de dados utilizado para armazenar as informações dos usuários e transações.

## Funcionalidades

- Criação de Conta: Os usuários podem criar suas contas pessoais para acessar todos os serviços oferecidos pelo sistema.
- Registro de Gastos e Ganhos: Permite que os usuários registrem seus gastos e ganhos de forma prática.
- Resumo Financeiro: Visualize o total de ganhos e a quantia restante.
- Histórico de Transações: Acesse o histórico completo de todas as transações realizadas.

## Instalação

Clone o repositório:

    git clone https://github.com/seu-usuario/sistema-gestor-financeiro.git

Navegue até o diretório do projeto:

    cd sistema-gestor-financeiro

Instale as dependências do Composer:

    composer install

Instale as dependências do Node.js:

    npm install

Crie um arquivo .env a partir do .env.example:

    cp .env.example .env

Configure o arquivo .env com as informações do seu banco de dados MySQL.

Gere a chave da aplicação:

    php artisan key:generate

Execute as migrações para criar as tabelas no banco de dados:

    php artisan migrate

Compile os assets com o Vite:

    npm run build

Inicie o servidor de desenvolvimento:

    php artisan serve

## Contribuição

Sinta-se à vontade para contribuir com este projeto. Para isso, siga as etapas abaixo:

1. Faça um fork do projeto.
2. Crie uma nova branch:

        git checkout -b feature-nova-funcionalidade

3. Faça suas alterações e commit:

        git commit -m 'Adiciona nova funcionalidade'

4. Envie para a branch principal:

        git push origin feature-nova-funcionalidade

5. Abra um Pull Request.

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo LICENSE para mais informações.
