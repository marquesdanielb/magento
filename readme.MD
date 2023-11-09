<h1>Meta tag em multi site</h1>

<h3>Principais considerações</h3>

<p>
Para testar o módulo criado você deverá ter o </b>docker<b> e o <b>docker compose</b> instalados na sua máquina. Você pode verificar a instalação do mesmo através do comando <b>docker -v</b> e do compose através do comando docker-compose -v.
</p>
<p>
Existe no diretório app/code um outro módulo que não faz parte da avaliação do teste, porém me senti confortável para instalar o mesmo pois ele possui a função de desativar o Magento_TwoFactorAuth no modo de desenvolvimento, sendo assim não precisamos autenticar toda vez que entramos no backoffice da loja (somente com a senha).
</p>
<p>
Na minha loja magento não havia nenhuma configuração de lojas, apenas uma loja. Sendo assim criei três store-views diferentes e habilitei a configuração de adicionar a url_key de cada uma das lojas nos respectivos países. (Brasil, United Kingdom, United States) 
</p>
<p>
A inclusão da língua nas respectivas lojas estão funcionando corretamente. Se eu acessar a url magento.test/pt_br/ a meta tag com a indicação pt-br estará lá porém quando a página CMS /about-us/ é acessada somente o store_code da loja naquela view é renderizado ou seja, não consegui renderizar os três quando a página for comum as três store-views.
</p>

<h3>Como foi desenvolvido o módulo?</h3>

<p>
Para o desenvolvimento do módulo Custom_Hreflang eu utilizei como base o block CriticalCss do Magento_Theme. Através da análise desse bloco segui com o desenvolvimento baseado em criar um layout que adicionasse o bloco que eu desejava no head. Criando um móduto que inserisse as tags hreflang nas store-views indicadas tomando como base o código da loja.
</p>

<h3>Como testar esse projeto?</h3>
1. Clone o repositório para algum diretório escolhido no seu sistema de arquivos. O meu diretório se chamará <b>magento</b>.

2. Após clonar o repositório abra o mesmo no seu editor de preferência. Eu por exemplo uso o VsCode.

3. Após abrir sua IDE, você deverá ir até o terminal e inserir o comando <b>docker-compose up -d</b>

4. Assim que o Docker iniciar você deverá ir até a url magento.test e ai apertar, em conjunto, as teclas ctrl+u você verá como última tag do head a nossa meta tag criada.

5. Você poderá trocar a store-view e verificará que cada store-view terá uma meta tag diferente.
