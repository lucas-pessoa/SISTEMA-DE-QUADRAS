# Sistema de Reserva de Quadras - UFSCar

## Sobre o Projeto

O Sistema de Reserva de Quadras tem o objetivo de auxiliar a prática de reserva das quadras da Universidade Federal de São Carlos (UFSCar). 

Neste modelo, cada reserva pode ser feita por alunos, docentes e organização acadêmica, sendo que a diferença entre cada um é antecedência com que eles podem executar a reserva da quadra.

## Membros do grupo
- Alexandre Lara - **R.A.**: 587117
- Lucas Pessoa - **R.A.**: 551864
- Tiago Avellar - **R.A.**: 551910

## Configuração

Considerando que o desenvolvimento deste projeto se pautou no uso da linguagem de programação PHP, juntamente da conexão com o sistema de banco de dados MYSQL, tais aparatos são indispensáveis para que o projeto seja, de fato, executado em seu servidor.

Boa parte do projeto foi desenvolvido utilizando-se como base o ambiente de desenvolvimento [WAMP Server](http://www.wampserver.com/en/) (Apache, MySQL e PHP em Windows).

#### Instalação manual para WAMP

**1.** Instale o WAMP Server.

**2.** Mova o projeto, em sua totalidade para a pasta instalada por base no diretório `C:\wamp64\www`.

**3.** Crie seu banco de dados MySQL de acordo com o arquivo **ProjetoQuadras.sql**, presente na pasta `\restrito\` do projeto.

**4.** Execute o sistema a partir de sua URL e portas configuradas por padrão.

## Base de desenvolvimento

Para o desenvolvimento deste projeto foram utilizados os seguintes utilitários:

#### Bootstrap v4

O framework [Bootstrap v4](https://v4-alpha.getbootstrap.com/) foi utilizado para a elaboração básica da aparência elaborada no arquivo principal index.html, que é correspondente à página inicial que todos os usuários, ao acessarem o sistema, irão se deparar.

#### SB Admin 2
A aparência e efeitos interativos do sistema restrito, foram obtidos através do projeto [SB Admin 2](https://github.com/BlackrockDigital/startbootstrap-sb-admin-2), que também é um projeto livre e estruturado para *admin dashboard* sem implementações, apenas sendo ofertado o template.

#### JQuery
A biblioteca [JQuery](https://jquery.com/) foi utilizada como forma de otimizar as chamadas em javascript, em principal as chamadas assíncronas, bem como com o propósito de colocar efeitos junto ao sistema, tornando algumas transições mais suaves.

#### JQuery UI
O sistema de calendário dinâmico baseado em AJAX foi adaptado tendo por base a aplicação [JQuery UI](http://jqueryui.com/), desenvolvida totalmente com base na biblioteca JQuery.