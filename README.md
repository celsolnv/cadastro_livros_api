<h1> Cadastro de Livro </h1>

<meta charset="utf-8">
<br>

<h1>Instalação</h1>

<p>
    Esta API faz uso do php 7 e pode rodar em qualquer sistema operacional em que 
    esteja instalado php, apache e mysql.
</p>
<p>
    Para dar inicio, dê start no servidor apache e no mysql.
    Faça o download do projeto e jogue na pasta <cite> "htdocs"</cite> para que possa ser acessado 
    através da browser.
    Abra o <cite> phpmyadmin </cite> (você pode acessa-lo neste link -> <a href="http://localhost/phpmyadmin/ ">http://localhost/phpmyadmin/</a> ).
    Em seguida import o arquivo seed.sql para gerar o banco de dados que será usado.
    Caso tenha alguma senha para o usuário <cite> "root" </cite>, favor alterar no arquivo 
    <cite> "criarConexao.php"</cite> com suas credenciais.

</p>

<p>
    Após isso, é aconselhado o uso de uma extensão para habilitar o CORS. Você pode pesquisar
    por "extension allow cors access".
    Abaixo deixarei alguns links para algumas extensões para o navegador Chrome
</p>
<ul>
    <li>
        <a href="https://chrome.google.com/webstore/detail/allow-cors-access-control/lhobafahddgcelffkeicbaginigeejlf?hl=pt-BR">
            Allow CORS: Access-Control-Allow-Origin
        </a>
    </li>
    <li>
        <a href="https://chrome.google.com/webstore/detail/cross-domain-cors/mjhpgnbimicffchbodmgfnemoghjakai?hl=pt-BR">
            Cross Domain - CORS
        </a>
    </li>
    <li>
        <a href="https://chrome.google.com/webstore/detail/moesif-origin-cors-change/digfbfaphojjndkpccljibejjbppifbc?hl=pt-BR">
            Moesif Origin & CORS Changer
        </a>
    </li>
</ul>