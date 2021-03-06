
# RELATÓRIO FINAL DE PROJETO 

### ÍNDICE
**1. SIGLAS UTILIZADAS**  
**2. INTRODUÇÃO**    
**3. GERÊNCIA DE CONFIGURAÇÃO E AMBIENTE**    
**4. CARACTERÍSTICAS DA APLICAÇÃO**   
**5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA)**
- **5.1 METODOLOGIA DE GERENCIAMENTO DE SOFTWARE**  
- **5.2 METODOLOGIA DE DESENVOLVIMENTO DE PROJETO**  
- **5.3 FASES**  

**6. VISÃO DE IMPLANTAÇÃO**    
**7. VISÃO DE USO**    
**8. REVISÃO DO PROJETO**    
**9. REVISÃO INDIVIDUAL**

------------------------------------------------------------------

### 1. SIGLAS UTILIZADAS
1 - GP: Gerente de Projetos  
2 - DP: Dirigido a Plano  
3 - US: User Stories (Estórias de Usuário)  
4 - BDUF: Big Design Up Front  

### 2. INTRODUÇÃO
A Vídeo Locadora Imperial ainda não possui um sistema computacional para registro de suas principais atividades, por exemplo: cadastro de clientes, cadastro de filmes, busca de filmes, cadsatro de empréstimos e devoluções.  

Desta forma, a equipe foi procurada para desenvolver um sistema capaz de registrar tais informações, facilitando o gerenciamento do negócio em questão.  

O carro-chefe do negócio é o empréstimo de vídeos/filmes, que possuem cópias em várias mídias diferentes (VHS e Blu-Ray, por exemplo) e vários gêneros. O registro destas informações no sistema a ser desenvolvido é necessário.  

Os empréstimos tem um preço a depender do tipo de mídia e se o filme é lançamento ou catálogo. Porém é possível aumentar ou diminuir o preço e o prazo de devolução em ocasiões extraordinárias.  

Além disso, é necessário registrar as informações das distribuidoras e dos clientes. Os clientes podem ter dependentes.  

Quanto à devolução, caso haja atraso é aplicada uma multa.  

Consultas ao acervo de vídeos/filmes podem ser feitas pela internet.  

Diante do citado, a Equipe precisa elaborar todas as fases do desenvolvimento deste projeto de software para entregar no prazo estipulado. O levantamento de requisitos foi realizado mediante entrevistas e reuniões com o cliente. Desta forma, se faz necessário a conclusão da análise de requisitos, a documentação, o planejamento, a implementação e, por fim, a implantação do sistema.  

A Equipe irá se reunir periodicamente para discussão das tarefas. As reuniões serão tanto presenciais como online. Um Gerente de Projeto foi escolhido para ser facilitador da equipe: ajudar a organizar o cronograma, definir papéis e assistir as fases do projeto como um todo.  

Para controle de versões (tanto do código como de todos os outros artefatos do projeto) será usado a tecnologia Git, com o cliente online GitHub, embora alguns desenvolvedores também façam uso de clientes locais, como SourceTree e Kraken.  

A análise de requisitos será convertida em Estórias de Usuários, para facilitar a elaboração de cada uma das funcionalidades do sistema. Para cada requisito do cliente será feita uma ou mais Estórias de Usuários.  

Na fase de documentação, alguns artefatos podem ser úteis aos desenvolvedores, como os Diagramas de Classes, Entidade-Relacionamento, Sequencia e de Uso.

Para resolver a problemática apresentada a Equipe desenvolveu um software leve, intuitivo, rápido e online.
Com as tecnologias de desenvolvimento web utilizadas, o cliente terá um software capaz de ser executado em vários computadores com internet, ou seja, cada funcionário poderá utilizar um computador ao mesmo tempo que outros, sem prejudicar o armazenamento e recuperação de informações.  

Os únicos requisitos são: possuir um computador com internet e com um navegador, visto que utilizamos técnicas que fazem o processamento de informações ficar toda no servidor, e não em sua máquina local. Seu computador apenas exibirá os resultados do processamento.  

Além disso, o fato de o processamento e os dados estarem nas nuvens diminui o risco de perda de informações por sinistros (incêndios, alagamentos, quedas de energia, assaltos).  

Sua interface amigável encurta o espaço entre o usuário leigo e a aplicação. Botões intuitivos e a forma que os itens estão dispostos na tela tornam a experiência facilitada, mesmo para aqueles que não tem muita bagagem em informática.  

A velocidade é o diferencial: com uma conexão estável, o software faz o armazenamento e a recuperação das informações sem depender do disco rígido local.  

Nosso software poderá ser utilizado por qualquer locadora de vídeos. Sua arquitetura flexível permite adaptar-se a contextos diferentes com pouca manutenção.  

Como consequência de o software estar em um servidor externo, as atualizações se darão por meio da internet, sem a necessidade da visita de um técnico especializado no local.  

Desta forma, apresentamos alguns aspectos do produto a seguir:  
As telas tentam trazer a melhor usabilidade para o usuário, tendo um aspecto limpo e fácil de usar. Por exemplo, a tela de cadastro de usuários possui a listagem dos registros e um botão em azul para se criar um novo usuário. Pode-se ver aqui: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/3%20-%20Usua%CC%81rios.png.   

Os botões de ação serão na cor azul com o escrito em branco, para se destacar do fundo branco do restante do sistema. O esquema de cores foi desenvolvido propositalmente em cores claras para facilitar a visão de todos os usuários, inclusive os que possuam pequenas dificuldades na visão.  

Além disso, o software possui controle de acesso, onde os usuários (tanto os clientes quanto os funcionários da Locadora) deverão se registrar e posteriormente logar no sistema para acesso às informações. Pode-se ver a tela de registro aqui: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/5%20-%20Registrar.png.  

É importante destacar que o sistema possui um layout padrão para todas as telas, aumentando a usabilidade deste, causando menor confusão ao usuário.  

No módulo de cadastros, o usuário/funcionário poderá fazer o registro e gerenciamento das informações do sistema (distribuidoras, filmes, gêneros, entre outros). Nesta tela é ilustrado o menu de cadastro, disponível apenas para funcionários da empresa, e não aos clientes: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/6%20-%20Menu%20cadastro.png.  

Mais detalhes das telas, módulos e funcionalidades do sistema podem ser vistos no item **7** **-** **VISÃO DE USO**.  


### 3. GERÊNCIA DE CONFIGURAÇÃO E AMBIENTE ###  
A tecnologia de desenvolvimento a ser utilizada é a Laravel (um Framework PHP) com Vue.js (uma . Biblioteca Javascript). Para banco de dados utilizaremos MySQL.  
Link para Laravel 5.7.15: https://laravel.com/   
Link para Vue.js 2.5.18: https://vuejs.org/  
Link para MySQL 8.0.13: https://www.mysql.com/  
Link para PHP 7.0.0: http://www.php.net/  
Link para Composer 1.8.0: https://getcomposer.org/  
Link para Node 10.14.1: https://nodejs.org/en/  
Link para NPM 6.4.1: https://www.npmjs.com/  

Como ferramentas, utilizaremos o PHP Storm, da JetBrains, para IDE, com licença de estudante cedida pelo CIN/UFPE. Alguns desenvolvedores utilizaram um PaaS chamado Cloud Nine como ambiente de desenvolvimento.  
Link para PHPStorm: https://www.jetbrains.com/phpstorm/     
Link para C9: https://c9.io    

### 4. CARACTERÍSTICAS DA APLICAÇÃO ###

### 5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA)

#### 5.1 METODOLOGIA DE GERENCIAMENTO DE SOFTWARE
A metodologia de desenvolvimento de software escolhida pela equipe é a Cascata (ou Waterfall). Entende-se que esta metodologia é mais aplicável neste projeto pelos fatores a seguir:

* a. Os membros da equipe possuem experiência neste modelo em questão. O entendimento e a posterior implantação de uma nova modalidade de desenvolvimento implicaria em possíveis atrasos no cronograma.
* b. Já possuímos os requisitos levantados: desta forma, poderemos prosseguir com a documentação e planejamento prévios antes de iniciarmos a codificação (característica da Waterfall/BDUF - Big Design Up Front).
* c. O cliente (neste caso, o professor) não estará presente nas fases do ciclo de vida do projeto. Deste modo, a refatoração dos pequenos releases se torna complicada. O cliente não estará apto para analisar todas as versões. ( * )
* d. Temos o controle de todo o processo, com visão adequada do cronograma, divisão de tarefas e papéis. ( * )
* e. Não há a necessidade de se desenvolver a primeira versão o mais rápido possível. Entendemos que, pelo fato de o prazo para entrega ser curto, a entrega de versões periódicas atrasaria o projeto. Portanto, optamos por entregar apenas uma versão final ao cliente. isto não impede, é claro, que versões internas sejam refatoradas e testadas iterativamente entre os membros da equipe. ( * )
* f. Dado o porte pequeno do projeto, não será desenvolvido um protótipo. ( * )
* g. Nós possuímos uma visão detalhada do mini-mundo e dos requisitos, portanto possuímos uma especificação detalhada do sistema. ( * )

( * ) Características inerentes ao processo evolucionário de desenvolvimento de software.

Embora utilizemos majoritariamente os princípios do método Waterfall, algumas ideias do processo evolucionário foram utilizadas, mesmo que minimamante: a implementação, os testes e a validação dos requisitos foram intercalados e iterados entre os membros da equipe.

Por fim, conforme sugestão no enunciado do projeto, a ferramenta Kanban (aba Projects do GitHub) foi utilizada para auxiliar na divisão das tarefas e na observação de todo o ciclo de vida do projeto. Devido a distância geográfica entre os membros da equipe e o prazo curto para entrega, o Kanban, por ser visual, proporciona um rápido entendimento do estado atual das tarefas e seus responsáveis. Além disso, ele é fácil de trabalhar e está online na plataforma GitHub, juntamente a outros artefatos do projeto.  

O Kanban oferece um board (quadro) que pode ser dividido visualmente. A equipe optou por seguir a sugestão do professor e fazer a divisão em To-Do (a fazer), In progress (sendo realizado) e Done (feito). Além disso, labels (etiquetas) foram utilizadas para definir cada uma das tarefas (issues): Priority 1 para as tarefas de prioridade mais alta, Priority 2 para as tarefas de prioridade média e Priority 3 para as tarefas de baixa prioridade. Etiquetas com o nome da fase ou tipo também foram adicionadas: Documentation para as issues referentes a Documentação, Development para Desenvolvimento e assim por diante. O board que utilizaremos para gerenciar o projeto como um todo é o board "Tasks".

#### 5.2 METODOLOGIA DE DESENVOLVIMENTO DE PROJETO
A metodologia de gerenciamento de projeto escolhida pela equipe em reunião foi a DP - Dirigida a Plano. Os seguintes fatores justificam a escolha:
* a. Em acordo entre os membros da equipe, sentiu-se a necessidade de se ter um Gerente de Projetos para ser facilitador: organizar o cronograma, cobrar as entregas da equipe, entender o contexto do problema, dividir as tarefas, auxiliar em todas as fases do projeto, estimar prazos, mobilizar o time, entre outros.
* b. O projeto possui grande documentação: atas de reuniões, diversas estórias de usuários, artefatos modelados, relatórios, etc.
* c. O gerente de projetos elaborou um extensivo planejamento.
* d. Não há o envovimento do cliente. ( * )
* e. Não há entrega incremental, pois o cliente não está envolvido nas fases de desenvolvimento. Ou seja, não há validação por parte do cliente antes da entrega da versão final. ( * )
* f. Não há entrega de incrementos pequenos. Dado o porte pequeno do projeto, não sentiu-se necessidade de entregas pequenas e periódicas (pequenos releases).
* g. Não faremos uso da Programação em Pres (Pair Programming), devido a distância geográfica entre os membros da equipe. ( * )

( * ) Características do Método Ágil/XP.

Embora utilizemos dos conceitos da DP em sua maioria, não dispensamos algumas ideias interessantes ao projeto do Método Ágil, a saber:
* a. Foco nas pessoas e suas capacidades, não no processo em si.
* b. Manter a simplicidade, sempre que possível.
* c. Utilização de Estórias de Usuário para validar os requisitos.
* d. Utilização de testes TDD e BDD dentro do ciclo de implementação.
* e. Ritmo sustentável: pequenas quantidade de horas-trabalho diárias, devido ao contexto do projeto (distância geográfica entre os membros da equipe somada ao fato de que os membros possuem outras atividades no decorrer do dia).


Por fim, com base em SOMMERVILLE (2011), conseguimos inferir que, de fato, a melhor metodologia a ser utilizada é a DP. Segundo o texto abaixo, notamos seis respostas SIM (que implica o uso de DP) e apenas três NÃO (que implica o uso de Ágil):
* 1. É importante ter uma especificação e projeto? SIM
* 2. Os clientes não estão disponíveis para feedback? SIM
* 3. O Sistema a ser desenvolvido é grande? NÃO
* 4. O Sistema é complexo (ex. tempo real)? NÃO
* 5. Vai ter um ciclo de vida longo? SIM
* 6. Está utilizando ferramentas “ruins”? NÃO
* 7. O time está geograficamente distribuído? SIM
* 8. A cultura do time é orientada a documentação? SIM
* 9. O Time tem um perfil “fraco” de desenvolvimento? SIM
* 10.O sistema está sujeito a regulamentação externa? SIM  

O board Kanban utilizado para o Desenvolvimento é o board "User stories". Optamos por criar um board específico para o desenvolvimento por manter o gerencimanento facilitado. As issues do board "User Stories" foram divididas por labels de Prioridade (1, 2, 3) de acordo com o Documento de Requisitos (o qual classificava-as como Alta, Média ou Baixa). A prioridade 1 refere-se a Alta, a 2 a Média e a 3 a Baixa. Outros labels foram adicionadas as issues do board "User Stories" para identificar o tipo de Estória: se ela é derivada de um Requisito Funcional (RF), Regra de Negócio (RN) ou Requisito Não-Funcional (RNF).  

#### 5.3 FASES
Houve a tentativa de se seguir os princípios da metodologia Waterfall. O projeto foi dividido em algumas fases, descritas abaixo. É importante salientar que a próxima fase só se iniciou no término da anterior, ou, pelo menos, quando a anterior esteve praticamente finalizada com suas tarefas mais importantes já concluídas. Além disso, destaca-se que embora a metodologia principal seja a Waterfall, alguns princípios do Processo Evolucionário foram lembrados.  

##### ANÁLISE/PROJETO
Nos primeiros momentos do projeto, inclusive na primeira reunião, houve confusão em relação às metodologias de desenvolvimento e de gerenciamento de projeto (ver ata da Meeting_1). Porém, após consulta ao material de apoio, as dúvidas foram sanadas e a confusão foi resolvida (ler seção de Metodologias).  

Além disso, a equipe teve dúvidas para escolher a tecnologia de desenvolvimento. A princípio sugeriu-se utilizar o Framework PHP Laravel (para front-end) somado à algum CMS Headless (sem cabeça, para back-end). Porém, após pesquisa e discussão entre os desenvolvedores, ficou definido que será usado o CMS Headless para back-end e React (biblioteca JavaScript) para front-end (ver ata Meeting_2).  

No que toca o gerenciamento do projeto, a equipe definiu os seguintes processos/princípios:
- Reuniões periódicas (presencial e online) para discussão do trabalho realizado e por fazer;
- Divisão dos papéis, tendo cada tarefa um responsável principal (que contará com a ajuda dos outros);
- Validação e refatoração dentro das fases ao surgir necessidade.  

Para divisão e acompanhamento das tarefas utilizou-se o método Kanban, já incluído na aba "Projects" da plataforma GitHub. O Kanban fornece um meio de visualizar e limitar o progresso do trabalho durante o processo de desenvolvimento do software (MATHARU et al., 2015).  
 
Alguns artefatos do software foram produzidos:  
- Estórias de Usuário, com base no Levantamento de Requisitos;  
- Diagrama de Classes, para facilitar a criação destas na etapa de codificação;  
- Diagramas de Casos de Uso, para as Estórias de Usuário mais importantes;  
- Diagramas de Sequência, também para as Estórias de Usuário mais importantes;  
- Diagrama Entidade Relacionamento, para servir de referência quanto a criação e manipulação do banco de dados.  

Para confecção dos artefatos utilizou-se a ferramenta online Draw.io: https://draw.io e MySQL Workbench, mantendo versões no repositório Git do projeto.

##### DOCUMENTAÇÃO  
A equipe sempre buscou ter uma documentação constante desde o primeiro dia de projeto (primeira reunião, Meeting_1). Há uma tentativa de contemplar a metodologia Waterfall, principalmente BDUF.  

Toda a documentação pode ser encontrada no repositório GitHub. A relação dos principais artefatos produzidos pode ser lida no subtópico **ANÁLISE/PROJETO** do tópico **5.3 FASES** deste documento.

Terminadas as fases de análise e documentação, iniciou-se a Implementação/Codificação e Testes.  

##### IMPLEMENTAÇÃO E TESTES
Faz-se importante destacar que neste projeto os testes foram simultâneos, senão intercalados, a codificação, contemplando um dos aspectos da Metodologia Ágil (Utilização de testes TDD e BDD dentro do ciclo de implementação).   
Os detalhes das tecnologias utilizadas podem ser vistas no tópico **3. GERÊNCIA DE CONFIGURAÇÃO E AMBIENTE** deste documento.

##### IMPLANTAÇÃO  
Tecnologia para o ambiente de implantação (SaaS/PaaS):  https://www.heroku.com/
Link:  http://locadora-imperial.herokuapp.com

### 6. VISÃO DE IMPLANTAÇÃO

Link vídeo Youtube: https://youtu.be/SdEv5Aywab0

Na implatação do sistema escolhemos o Heroku que é uma plataforma como serviço (PaaS) que permite aos desenvolvedores criar, executar e operar aplicativos em nuvem. O Heroku disponibiliza um ambiente de execução de aplicações onde é possível escalar uma aplicação, sem ter contato com o sistema operacional e gerenciamento de hardware, apenas utilizamos o serviço.

Para escalar a aplicação é preciso criar uma conta Heroku e instalar no computador um software chamado Heroku Toolbelt, necessário para executar comandos no terminal e enviar a aplicação para o servidor. Após a instalação no terminal digitamos o comando "Heroku login" para autenticar as credenciais de acesso e em seguida digitamos o comando "heroku create locadora-imperial", em seguinda o sistema retorno o link do projeto que será utilizado para o acesso (http://locadora-imperial.herokuapp.com.) Nesse momento estamos pronto para fazer o deploy do aplicação.

Deploy da Aplicação  

Para o deploy da aplicação precisamos vincular o repositorio do nosso computador com o servidor Heroku, para isso entramos na pasta do sistema via comando terminal e digitamos o comando "heroku git:clone -a locadora-imperial" e em seguida digitamos o comando "heroku git push heroku develop:master", nesse processo irá compactar e enviar para o servidor o projeto. O Heroku tem capacidade de identificar qual é o tipo de linguagem está sendo usada no projeto. Neste caso irá identificar que é PHP e que possui um arquivo chamado "composer.json", e será instalado automaticamente as dependencias no servidor. A aplicação não estará em funcionamento, pois precisamos configurar um arquivo chamado Procfile e as váriáveis de ambiente no Heroku. 

Arquivo Procfile e Variáveis de Ambiente

Na raiz da aplicação é necessário criar um arquivo chamado "Procfile", onde possui as configurações necessáriás para configurar a pasta do projeto com os serviço do Apache. Também é necessário configurar as váriáveis de ambiente principalmente com relação ao banco de dados. Elas podem ser configuradas de duas formas, pode ser pelo dashboard do heroku via web ou via terminal.
 
- Interface Web

Para configurar as variaveis de ambiente devemos acessar a conta no heroku e entrar dentro do projeto em especifico, logo após acessar a aba "Settings" e ir na opção "Config Vars" e clicar no botão Reveal Config Vars. Nos campos da tela adicionar o nome e o conteudo de cada variável utilizada no arquivo .env do projeto Laravel.

- Terminal  

Para enviar as configurações via terminal deve ser digitado o seguinte comando "heroku config:set DB_CONNECTION: mysql", neste caso irá criar o nome da variável como "DB_CONNECTION" e o conteúdo como "mysql". Após essas alterações deve ser feito o commit na maquina e enviar para o repositório do heroku.

Banco de dados

Como o Heroku é um PaaS ele não possui banco de dados em seus serviços e para isso podemos adicionar um addon que são aplicações externas que podem ser vinculas ao Heroku, neste projeto utilizamos o ClearDB Mysql. Para criar o banco é necessário digitar o comando no terminal "heroku addons:create cleardb:ignite", será criado o banco de dados com as informações sobre o mesmo e para verificar essas informações é preciso digitar no terminal o seguinte comando "heroku config", onde será gerado um link com informações sobre o acesso ao banco. No link que mostra os parametros são so seguinte, primeiro é usuário, segundo a senha, terceiro endereço da url quarto nome do banco. Essas informações devem ser configurados nas variáveis de ambiente e também no arquivo .env do projeto.

Após essas configurações executar o comando no terminal "heroku run php artisan migrate". Este comando cria as tabelas no banco de dados da aplicação. Logo após basta acessar o sistema pelo endereço http://locadora-imperial.herokuapp.com, que estará disponível para o uso.

### 7. VISÃO DE USO  
Ao acessar o sistema da Locadora Imperial, em http://locadora-imperial.herokuapp.com, o usuário deve clicar em Registrar, no canto superior direito, caso ainda não tenha feito seu registro, ou em Login, também no canto superior direito, caso já possua um usuário e uma senha. Desta forma o usuário entrará na parte administrativa do site.  

Ver: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/1%20-%20LoginRegistro.png  

Na página de registro o usuário deve preencher seus dados pessoais e clicar no botão Registrar. Um e-mail será enviado ao endereço cadastrado informando sobre a ativação da nova conta.  

Ver: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/5%20-%20Registrar.png  

Em Cadastros>Usuários o usuário poderá ver a listagem de Usuários cadastrados. Ao clicar em Ver, ao lado de um registro, detalhes do Usuário serão exibidos. Também é possível Editar as informações do registro. Para se cadastrar um novo Usuário basta clicar no botão azul "Novo usuário". Desta forma, um formulário será exibido para se preencher os dados do novo Usuário. Ao final do preenchimento é necessário clicar em "Salvar".  

Ver: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/3%20-%20Usua%CC%81rios.png  

O mesmo acima se aplica para os menus Cadastros>Distribuidora, Cadastros>Filmes, Cadastros>Gênero, Cadastros>Mídia.  

Ver: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/6%20-%20Novo%20filme.png  

É necessário salientar que apenas os funcionários da empresa terão acesso aos menus de cadastro. Os clientes só terão acesso aos menus Reserva, Locação e Pagamento, além de poder alterar seus dados pessoais.  

As telas do sistema seguem um padrão, tanto para consulta quanto para inserção/atualização das informações. Pode-se ver, por exemplo, que todas elas possuem o botão verde com o sinal de "+", o que significa a adição de um novo registro, seja de filmes, mídias ou usuários, por exemplo.  

Ver: https://github.com/bacciotti/locadora/blob/master/6%20-%20Telas/7%20-%20Tipos%20de%20m%C3%ADdia.png  

Além disso, é possível notar que, sempre que há um campo de busca, tem-se uma ícone de uma lupa, para aumentar o nível de usabilidade do usuário.

Mais fotografias de telas do sistema podem ser encontradas em: https://github.com/bacciotti/locadora/tree/master/6%20-%20Telas  


### 8. REVISÃO DO PROJETO  
A equipe tentou tornar o andamento do projeto o mais prático possível. Depois de várias reuniões (presenciais e a distância) e várias tecnologias e metodologias cogitadas, optou-se pelo uso de Laravel (framework PHP), Cascata para Gerenciamento do Projeto, Boards Kanban como ferramenta de gerenciamento, para divisão das tarefas e responsabilidades e Dirigida a Plano como metodologia de desenvolvimento. Mais detalhes sobre as metodologias estão na seção 5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA).  

O desenvolvimento foi feito utilizando uma branch do GitHub chamada "develop". Os analistas instalaram o servidor PHP, o Git e todas as outras ferramentas necessárias (banco de dados MySQL, Laravel, entre outros) em suas máquinas locais para se poder trabalhar. Antes de se iniciar o trabalho era efetuado um "git pull", para receber as versões atualizadas do código e, ao fim do trabalho, era efetuado um "git push" para atualizar o código com a versão desenvolvida. Mais detalhes podem ser lidos no arquivo "3 - Processo de Desenvolvimento.md" (https://github.com/bacciotti/locadora/blob/master/2%20-%20Documenta%C3%A7%C3%A3o/3%20-%20Processo%20de%20Desenvolvimento.md).  
  
Os principais problemas encontrados pela equipe foram:  
a) Distância geográfica: cada analista se encontrava em um ponto do país, o que dificultou a comunicação. Embora algumas reuniões tenham sido efetuadas a distância, o fato de a equipe se reunir presencialmente apenas uma vez ao mês tornou mais moroso o processo de tomadas de decisão e divisão de tarefas. Acredita-se que se a equipe estivesse em um mesmo ambiente geográfico o trabalho poderia ser finalizado anteriormente.  
b) Pouco conhecimento nas ferramentas: apenas um analista dispunha de vasta experiência em codificação. Todos os outros desenvolvedores tiveram que aprender a tecnologia/framework/contexto para começar a somar à equipe no que toca à codificação. Isso tomou horas-trabalho e atenção dos analistas, o que pode ter prejudicado o tempo total do projeto.  
c) Curso espaço de tempo, somada a outras demandas do curso: a equipe está inserida em um curso de mestrado profissional que trouxe demandas que não fossem do projeto em questão. O período proposto, embora tenha sido extenso, ainda foi pouco para se entregar um projeto com maior excelência. Alguns pontos ficaram a desejar, a saber: segurança das informações, backup, reuso do código, para citar alguns exemplos. Os depoimentos e opiniões de cada analista podem ser encontrados na Seção 9 - Revisão Individual, deste Relatório Final.

As principais tomadas de decisão referente ao projeto foram:  
a) Escolhe do Gerente de Projetos: a equipe decidiu em conjunto nomear um Gerente de projetos para que este seja o organizador, facilitador e distribuidor de tarefas e atribuições.  
b) Escolha da metodologia de gerenciamento: após leitura bibliográfica no material de apoio, a equipe optou por utilizar a metodologia de gerenciamento de projetos Waterfall (ou Cascata). Mais detalhes sobre as metodologias estão na seção 5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA).  
c) Escolha da metodologia para desenvolvimento: pela pouca experiência, a equipe optou por tentar não reinventar a roda, portanto foi escolhida a metodologia de desenvolvimento Dirigida a Plano, a mais conhecida pelos membros da equipe. Mais detalhes sobre as metodologias estão na seção 5. VISÃO E ANÁLISE DO PROJETO (ARQUITETURA).  
d) Escolha das tecnologias de desenvolvimento: a utilização do PHP com Laravel e do Banco de Dados SQL foi discutida pelos analistas com maior experiência em desenvolvimento da equipe. Chegou-se a conclusão que tais tecnologias seriam de mais fácil aprendizado e mais simples a configuração, tanto do ambiente de desenvolvimento quanto do produto final em si.  
  
Para dividir as tarefas utilizou-se os Boards Kanban, os quais dividem as tarefas em "A fazer", "Sendo feito" e "Resolvido/Feito" (e derivados). Desta forma, a equipe consegue situar-se no status do projeto mais rapidamente, com uma olhada rápida no board (quadro). As tarefas foram divididas com base na afinidade e experiência de cada membro. O membro com menor experiência em desenvolvimento ficou responsável pela redação e projeto de vários artefatos (modelagem). O gerente de projetos tentou auxiliar, mesmo que minimamente, todos os outros membros em suas tarefas, além de ficar responsável pela divisão de atribuições e posterior cobrança das tarefas. Os outros membros dividiram-se entre desenvolvimento e alguma tarefa assessória. Todas as divisões, atribuições e tarefas estão documentadas nos Boards Kanban, neste Relatório Final e nas Atas de Reuniões.

Ver "Boards Kanban" - https://github.com/bacciotti/locadora/projects
Ver "Atas de Reuniões" - https://github.com/bacciotti/locadora/tree/master/1%20-%20Atas%20de%20Reuni%C3%B5es

O monitoramento e controle foi executado em sua maior parte pelo Gerente de Projetos. Utilizou-se os Boards Kanban e sua função de comentários deste para se fazer a cobrança e o acompanhamento das atividades. Conversas pessoais informais também tiveram seu valor nas semanas em que a equipe estivera reunida presencialmente. As issues, módulo do GitHub, também foram utilizadas para acompanhar o andamento do projeto.

Ver "Issues" - https://github.com/bacciotti/locadora/issues

É importante ressaltar que foram criados dois boards Kanban: o "Tasks" e o "User Storeis". O primeiro refere-se às tarefas não relacionadas diretamente à codificação, como "Redação de Relatório Final" ou "Concecpção de Diagrama Entidade Relacionamento". Já o board "User Stories" diz respeito aos requisitos fornecidos pelo cliente que foram transformados em tarefas para os desenvolvedores.  

### 9. REVISÃO INDIVIDUAL  
#### Opinião de Lucas Bacciotti Moreira (lbm5):  
Pessoalmente o projeto foi muito importante. Vivi a rotina de uma Fábrica de Software, com as divisões de papéis, cobranças, discussões e prazos. O aprendizado de novas ferramentas (GitHub e Laravel, por exemplo) foram de suma importância para meu crescimento intelectual. A disciplina de Engenharia de Software me fez ver o mundo corporativo com outros olhos.  
Tive dificuldades em configurar o ambiente de desenvolvimento, pois a princípio queria ter implantado no Cloud 9 da Amazon, porém tive muitos problemas ao fazer upgrade do PHP, instalar o Composer, configurar o Artisan e o Laravel. Foram tantas dificuldades que optei por não utilizar mais o Cloud 9 e fazer o ambiente de desenvolvimento localmente mesmo. Após isso ainda tive que aprender o mínimo do Framework Laravel (já conheço e trabalho com PHP há anos, mas tive que ler a documentação do Laravel mesmo assim).  Além disso, como Gerente de Projetos, sempre estava com a preocupação de que algo ainda estava por fazer e sempre estava cobrando a equipe (e me cobrando também) de alguma forma. Cogitou-se a utilização de algum serviço de CMS Headless, porém creio que o Laravel foi a melhor escolha visto que a curva de aprendizado foi menor. Auxiliei minimanente o desenvolvedor principal (dm5) para poder obter mais experiência no framework. Enfim, o projeto foi de grande valia para meu crescimento intelectual e profissional.

#### Opinião de Diego Menegazzi (dm5):  
O projeto da locadora no inicio pareceu que seria simples, mas como sempre na área de desenvolvimento de software, nada é simples. Ainda estamos trabalhando no desenvolvimento do software, mas o projeto trouxe uma outra visão, principalmente em se tratando de documentação. A ferramenta GitHub é muito poderosa quando se trata em gestão de projetos. Nela podemos sempre acompanhar a equipe e principalmente o andamento do projeto. Nosso gerente de projetos (lbm5), na maioria das vezes fez a comunicação pela ferramenta e por incrível que parece funcionou muito bem. Conseguimos desmembrar o projeto em duas branch, onde na master fica a parte de documentações e na branch develop fica o software. Conseguimos trabalhar com o framework Laravel, eu particularmente já tinha trabalhado com o ele, mas nunca com entrega do produto para um cliente, pois seguir um cronograma ou seguir o que o cliente solicita nas User Stories é muito diferente, pois devemos fazer o que ele solicitou e entregar no prazo. Essa troca de experiencia entre os colegas também foi importante, fizemos várias discussões construtivas e que ajudou a desenvolver um ótimo trabalho.  

#### Opinião de Carlos Alexandre Porto (cap):    
Eu particularmente aprendi bastante com esse projeto. Como sou graduado em Engenharia de Telecomunicações, nunca tive contato com esse tipo de dinâmica de desenvolvimento de software em grupo. Me senti trabalhando em uma fábrica de software sem efetivamente tê-lo feito. Aprendi a trabalhar com a ferramenta GitHub e também a documentar um processo de desenvolvimento de software do zero. Percebi que a aparente dificuldade no desenvolvimento das atividades gerada pela grande distância geográfica entre os integrantes foi muito bem resolvida pela equipe e pelo correto uso das ferramentas disponíveis.  
Presenciei mais de uma vez, e conforme o prazo se aproximava, uma crescente tensão da equipe e por vezes até um pequeno desentendimento entre os membros desenvolvedores, de forma que pude trabalhar também as habilidades de resolução de conflitos e comunicação interpessoal. Finalmente, relato que nem sempre achei que iríamos conseguir terminar o projeto, porém aprendi que o grupo conseguiu trabalhar muito bem sob pressão. Foi um grande aprendizado para a minha formação, tanto intelectual quanto emocional.  
  
#### Opinião de Gustavo Costa Meireles (gcm3):   
O projeto tem sido muito importante pra mim por que estou experimentando o processo de desenvolvimento de software em equipe pela primeira vez. As demais experiências que tive com desenvolvimento foram sozinho. Então essa parte de discussões, troca de informação, divisão de tarefas, uso de ferramentas de compartilhamento de informações, dentre outros, é novo para mim e se mostrou um grande desafio. Mas a equipe se mostrou muito homogênea, tornando fácil todo esse processo de trabalho em equipe e curva de apredizagem das ferramentas utilizadas. 
O gerente de projetos (lbm5) fez a divisão das tarefas e a comunicação com a equipe pelo GitHub, e o processo funcionou muito bem. Após a parte de documentação e projeto de software começamos a parte de desenvolvimento, após a escolha por trabalhar com o framework Laravel, o nosso desenvolvedor principal (dm5) montou o ambiente de desenvolvimento e auxiliou os demais membros da equipe que não tinham experiencia com o framework.
Apesar da minha dificuldade incial para me adaptar ao sistema de projeto em equipe, consegui me adaptar ao sistema e contribuir com a equipe. Todas as dúvidas e dificuldades que algum membro da equipe encontrava era prontamente solucionado pelos demais membros, tornando um ambiente de muito aprendizado e de grande crescimento profissional.

#### Opinião de Welington Mothé de Oliveira (wmo):    
Este projeto possibilitou ampliar meu conhecimento sobre o desenvolvimento em equipe. Apesar de já ter desenvolvido em equipe por outras vezes, na maior parte da vida desenvolvi projetos de forma independente e ter essa visão de trabalho em equipe com papeis, requisitos e tarefas bem definidas utilizando a ferramenta do GitHub para integrar e possibilitar a visão de todo o projeto se mostrou o maior ganho de aprendizado que tive.
Independentemente das ferramentas escolhidas teria uma grande curva de aprendizado, por não trabalhar diretamente com desenvolvimento atualmente, mas o framework Laravel me pareceu bem simples e facilitou bastante o desenvolvimento do sistema.
Acredito que as metodologias de projeto e desenvolvimento adotadas pela equipe (Cascata e Dirigida a Plano) foram as melhores para o projeto e tentamos seguir à risca todos os seus princípios.
Enfim, o projeto trouxe muitos benefícios para todos os envolvidos.
