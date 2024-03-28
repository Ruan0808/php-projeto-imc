<link rel="stylesheet" href="stilo.css">
<head>
    <style>
        h1{
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<header>
<?php 
$nom = $_GET["Nome"];
$sob = $_GET["sobrenome"];
$id = $_GET["idade"];
$pes = $_GET["peso"];
$veg = $_GET["vegan"] ??"";
$vege = $_GET["vege"]??"";
$lac = $_GET["lac"]??"";
$agu = $_GET["agua"];
$pm = $_GET["pm"]?? "";
$alt = $_GET["alt"]??"";
$imc = $pes/$alt;
$imcform = number_format($imc, 1, ',');
$aguj =  $pes * 0.04  ;
$aguformj = number_format($aguj, 1, ',' );
$agui = $pes * 0.03;
$aguformi = number_format($agui, 1, ',');

?>
<h1>Sua dieta está pronta</h1>
<footer>
    <p><p>Recebemos suas informações e estamos animados para ajudá-lo a começar sua jornada para uma vida mais saudável. Um de nossos especialistas revisará seus dados e entrará em contato em breve com um plano personalizado que atenda às suas necessidades e objetivos específicos.</p></p>
</footer>


<h2>Água e imc</h2>
<div class="aguaandimc">
    
    <?php 
if($id > 1 and $id < 59 and $agu < $aguj and $imc > 
24.9 and $imc < 18.9 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando normal";
}
elseif($id > 1 and $id < 59 and $agu < $aguj and $imc > 25.0 and $imc < 29.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando sobrepeso";
}
elseif($id > 1 and $id < 59 and $agu < $aguj and $imc > 30.0 and $imc < 34.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 1";
}
elseif($id > 1 and $id < 59 and $agu < $aguj and $imc >35.0 and $imc < 39.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 2";
}
elseif($id > 1 and $id < 59 and $agu < $aguj and $imc >40 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 3";
}
elseif($id > 1 and $id < 59 and $agu > $aguj and $imc > 24.9 and $imc < 18.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando normal";
}
elseif($id > 1 and $id < 59 and $agu > $aguj and $imc > 25.0 and $imc < 29.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando sobrepeso";
}
elseif($id > 1 and $id < 59 and $agu > $aguj and $imc > 30.0 and $imc < 34.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 1";
}
elseif($id > 1 and $id < 59 and $agu > $aguj and $imc >35.0 and $imc < 39.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 2";
}
elseif($id > 1 and $id < 59 and $agu > $aguj and $imc >40 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformj  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 3";
}

if($id > 60 and $agu < $agui and $imc > 
24.9 and $imc < 18.9 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando normal";
}
elseif($id > 60 and $agu < $agui and $imc > 25.0 and $imc < 29.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando sobrepeso";
}
elseif($id > 60 and $agu < $agui and $imc > 30.0 and $imc < 34.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 1";
}
elseif($id > 60 and $agu < $agui and $imc >35.0 and $imc < 39.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 2";
}
elseif($id > 60 and $agu < $agui and $imc >40 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é menor que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 3";
}
elseif($id > 60 and $agu > $agui and $imc > 24.9 and $imc < 18.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando normal";
}
elseif($id > 60 and $agu > $agui and $imc > 25.0 and $imc < 29.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando sobrepeso";
}
elseif($id > 60 and $agu > $agui and $imc > 30.0 and $imc < 34.9){
    echo " Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 1";
}
elseif($id > 60 and $agu > $agui and $imc >35.0 and $imc < 39.9){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 2";
}
elseif($id > 60 and $agu > $agui and $imc >40 ){
    echo "Ao analisar sua formulário, identificamos que sua quantidade de água é maior que o indicado o certo de água para beber é de $aguformi  litros, também identificamos que seu IMC está $imcform Indicando obesidade grau 3";
}
echo "<br>";
echo "Esperamos ajudar com nossa dieta e garantir que você fique cada vez mais feliz com sigo mesmo";
?>
</header>
</div>
<div class="dieta">
    <header>
        <footer></footer> <h2>Dieta</h2>
    </header>
    <?php 
    if($veg == 'S' & $vege =='N' & $lac == 'N' & $pm =='P'  ) {
        echo "Café da Manhã:

        Smoothie verde com espinafre, banana, proteína de ervilha em pó e leite de amêndoas sem açúcar.
        <br>
        Lanche da Manhã:
        
        Uma maçã e um punhado de nozes.
        <br>
        Almoço:
        
        Salada de quinoa com tomate cereja, pepino, abacate, grão-de-bico e um molho de limão e tahine.
        <br>
        Lanche da Tarde:
        
        Palitos de cenoura e aipo com homus.
        <br>
        Jantar:
        
        Tofu grelhado com brócolis ao vapor e batata-doce assada.
        <br>
        Ceia:
        
        Iogurte vegano com frutas vermelhas e sementes de chia.";
    }

    elseif($veg == "S" and $vege =="N" and $lac == "N" and $pm =="M"){
        echo "Café da Manhã:

        Panquecas de aveia e banana com manteiga de amendoim e xarope de agave.
        Smoothie de proteína vegana com leite de soja, morangos congelados, e sementes de linhaça.
        <br>
        Lanche da Manhã:
        
        Mix de nozes e sementes com frutas secas.
        <br>
        Almoço:
        
        Bowl de arroz integral com feijão preto, guacamole, pico de gallo, e folhas verdes.
        Hambúrguer de lentilha com batata-doce assada e salada verde.
        <br>
        Lanche da Tarde:
        
        Barrinha de proteína vegana.
        Iogurte vegano com granola caseira e frutas frescas.
        <br>
        Jantar:
        
        Tofu marinado e grelhado com quinoa e legumes assados no forno.
        Curry de grão-de-bico com espinafre e arroz de coco.
        <br>
        Ceia:
        
        Shake de proteína vegana com leite de amêndoa e manteiga de nozes.
        <br>
        Dicas Importantes:
        
        Inclua uma variedade de fontes de proteína ao longo do dia, como tofu, tempeh, seitan, lentilhas, grão-de-bico, e proteínas em pó veganas.
        <br>
        Não esqueça de consumir gorduras saudáveis, como abacate, nozes, sementes e óleos vegetais, que são importantes para a saúde hormonal e podem ajudar no ganho de massa.
        <br>
        Mantenha-se hidratado e considere suplementos de B12 e ômega-3 à base de algas, se necessário.";
    }
    elseif($veg == "S" and $vege =="S" and $lac == "N" and $pm =="P"){
        echo "Café da Manhã:

        Iogurte natural com baixo teor de gordura (vegetariano) ou iogurte vegano à base de coco.
        Granola caseira sem açúcar.
        Frutas frescas, como morangos ou mirtilos.
        <br>
        Lanche da Manhã:
        
        Smoothie de frutas com leite de amêndoas (vegano) ou leite desnatado (vegetariano).
        <br>
        Almoço:
        
        Salada grande com folhas verdes, tomates, pepinos, e grão-de-bico.
        Queijo cottage com baixo teor de gordura (vegetariano) ou tofu (vegano).
        Vinagrete de azeite de oliva e limão.
        <br>
        Lanche da Tarde:
        
        Palitos de vegetais (cenoura, pepino, aipo) com hummus.
        Uma pequena porção de nozes ou sementes.
        <br>
        Jantar:
        
        Stir-fry de legumes variados com tofu (vegano) ou paneer (vegetariano).
        Arroz integral ou quinoa como acompanhamento.
        Molho de soja com baixo teor de sódio ou tamari (vegano).
        <br>
        Ceia:
        
        Gelatina de agar-agar com frutas (vegano) ou um copo de leite desnatado (vegetariano).
        <br>
        Dicas:
        
        Beba bastante água ao longo do dia.
        <br>
        Inclua exercícios físicos regulares na sua rotina.
        <br>
        Evite açúcares refinados e alimentos processados.
        <br>
        Consulte um nutricionista para personalizar sua dieta de acordo com suas necessidades individuais.";
    }
    elseif($veg == "S" and $vege =="S" and $lac == "N" and $pm =="M"){
        echo "Café da Manhã:

        Omelete de claras com espinafre e tomate (vegetariano).
        Iogurte grego com baixo teor de gordura com frutas frescas e sementes de chia (vegetariano).
        Tofu mexido com legumes e temperos (vegano).
        <br>
        Lanche da Manhã:
        
        Shake de proteína de ervilha com leite de amêndoas e banana (vegano).
        Queijo cottage com pedaços de abacaxi (vegetariano).
        <br>
        Almoço:
        
        Salada de quinoa com grão-de-bico, abacate, pepino e molho de tahine (vegano).
        Lasanha de berinjela com ricota e espinafre (vegetariano).
        <br>
        Lanche da Tarde:
        
        Barrinha de proteína vegana (vegano).
        Leite desnatado com cacau em pó e mel (vegetariano).
        <br>
        Jantar:
        
        Stir-fry de tofu com brócolis, pimentão e molho de soja sobre arroz integral (vegano).
        Ovos cozidos com batata-doce assada e aspargos (vegetariano).
        <br>
        Ceia:
        
        Iogurte natural com nozes e mel (vegetariano).
        Smoothie de leite de soja com manteiga de amendoim e cacau em pó (vegano).
        <br>
        Dicas:
        
        Inclua uma variedade de fontes de proteína ao longo do dia, como leguminosas, tofu, tempeh, seitan, ovos e laticínios para vegetarianos.
        <br>
        Consuma gorduras saudáveis, como abacate, nozes e sementes, que são importantes para a saúde hormonal e podem ajudar no ganho de massa.
        <br>
        Mantenha-se hidratado e considere suplementos de B12 e ômega-3 à base de algas, se necessário.";
    }
    elseif($veg == "N" and $vege =="S" and $lac == "N" and $pm =="P"){
        echo "Café da Manhã:

        Iogurte natural desnatado com frutas frescas e uma colher de sopa de sementes de chia.
        <br>
        Lanche da Manhã:
        
        Uma maçã e um punhado de amêndoas.
        <br>
        Almoço:
        
        Salada de folhas verdes com tomate, pepino, cenoura ralada e queijo feta.
        Arroz integral e lentilhas cozidas temperadas com ervas.
        <br>
        Lanche da Tarde:
        
        Palitos de cenoura e pepino com hummus.
        Um copo de leite desnatado.
        <br>
        Jantar:
        
        Sopa de legumes caseira com pedaços de queijo cottage.
        Torradas integrais.
        <br>
        Ceia:
        
        Uma taça de iogurte grego com baixo teor de gordura e uma pitada de canela.
        <br>
        Dicas:
        
        Beba bastante água ao longo do dia.
        <br>
        Inclua exercícios físicos regulares na sua rotina.
        <br>
        Evite açúcares refinados e alimentos processados.
        <br>
        Consulte um nutricionista para personalizar sua dieta de acordo com suas necessidades individuais";
    }
    elseif($veg == "N" and $vege =="S" and $lac == "N" and $pm =="M"){
        echo "Café da Manhã:

        Omelete de claras com espinafre e tomates cereja.
        Iogurte grego com granola caseira e frutas vermelhas.
        <br>
        Lanche da Manhã:
        
        Smoothie de banana com leite desnatado, manteiga de amendoim e aveia.
        <br>
        Almoço:
        
        Salada de grão-de-bico com quinoa, abacate, pimentões e molho de azeite de oliva.
        Sanduíche integral com queijo cottage, rúcula e tomate.
        <br>
        Lanche da Tarde:
        
        Mix de nozes e frutas secas.
        Queijo ricota com mel e canela.
        <br>
        Jantar:
        
        Lasanha vegetariana com ricota, espinafre e molho de tomate caseiro.
        Salada verde com molho de iogurte.
        <br>
        Ceia:
        
        Iogurte natural com sementes de chia e um fio de mel.
        <br>
        Dicas:
        
        Ajuste as porções de acordo com suas necessidades calóricas e objetivos de treino.
        <br>
        Inclua fontes de proteína em todas as refeições, como ovos, laticínios e leguminosas.
        <br>
        Não esqueça de consumir carboidratos complexos e gorduras saudáveis para fornecer energia e auxiliar na recuperação muscular.
        <br>
        Mantenha-se hidratado e considere suplementos de B12 e ômega-3 à base de algas, se necessário12.";
    }
    elseif($veg == "N" and $vege =="N" and $lac == "S" and $pm =="P"){
        echo "Café da Manhã:

        1 xícara de chá de ervas (verde, branco, hibisco, hortelã).
        1 xícara de salada de frutas com 1 colher de sobremesa de linhaça triturada e 1 colher de sobremesa de mel1.
        <br>
        Lanche da Manhã:
        
        1 porção de fruta (banana, rodela média de abacaxi, goiaba).
        2 amêndoas1.
        <br>
        Almoço:
        
        2 colheres de sopa de arroz integral.
        1 concha média de feijão.
        1 filé médio de carne magra (alcatra, patinho, filé-mignon) grelhado.
        1 xícara de brócolis no vapor1.
        <br>
        Lanche da Tarde:
        
        1 pote de iogurte de soja.
        1 barrinha de sementes (gergelim, linhaça)1.
        <br>
        Jantar:
        
        Salada de folhas verde-escuras (couve, agrião, rúcula) à vontade com 2 colheres de sopa de cenoura crua ralada e 2 azeitonas temperadas com 1 colher de sobremesa de azeite, pouco sal, limão.
        2 colheres de sopa de arroz integral (ou arroz 7 grãos).
        1 concha média de lentilha.
        1 filé médio de frango grelhado com ervas (alecrim, cebolinha, salsinha";
    }
    elseif($veg == "N" and $vege =="N" and $lac == "S" and $pm =="M"){
        echo "Café da Manhã:

        Crepioca: Misture 1 ovo e 2 colheres de sopa de goma de mandioca hidratada (tapioca). Cozinhe em uma frigideira antiaderente até dourar dos dois lados.
        1 copo de suco verde: Bata couve, abacaxi, 1 colher de sopa de linhaça, gengibre e água de coco até obter um suco homogêneo1.
        <br>

        Lanche da Manhã:
        
        1 kiwi
        2 castanhas-do-pará
        <br>
        Almoço:
        
        Salada de folhas verdes (alface e rúcula) temperada com azeite extravirgem e limão
        Brócolis e cenoura refogados
        Arroz integral
        Feijão
        Peixe grelhado
        Sobremesa: 1 laranja com o bagaço
        <br>
        Lanche da Tarde:
        
        Creme de papaia: 1/2 mamão-papaia, 1 banana, leite de coco o suficiente para ficar cremoso e 1 colher de sopa de semente de linhaça
        <br>
        Jantar:
        
        Sopa mista: cenoura, abobrinha, chuchu, brócolis, macarrão à base de milho e carne moída
        <br>        
        Ceia:
        
        Iogurte sem lactose
        1 xícara de chá de morangos";
    }
    elseif($veg == "S" and $vege =="N" and $lac == "S" and $pm =="P"){
        echo "Café da Manhã:

        Smoothie de banana e espinafre: 1 banana, 1 xícara de espinafre, 1 colher de sopa de sementes de chia, 250 ml de leite de amêndoas.
        <br>
        Lanche da Manhã:
        
        1 maçã e 1 colher de sopa de manteiga de amendoim sem açúcar.
        <br>
        Almoço:
        
        Salada de quinoa: quinoa cozida, tomate cereja, pepino, pimentão, cebola roxa, temperada com suco de limão e azeite de oliva.
        Hambúrguer de cogumelos com salada de alface, tomate e abacate1.
        <br>
        Lanche da Tarde:
        
        Iogurte de coco com frutas vermelhas e um punhado de nozes.
        <br>
        Jantar:
        
        Stir-fry de legumes: brócolis, cenoura, pimentão, tofu e molho de soja, servido com arroz integral1.
        Sopa de lentilha1.
        <br>
        Ceia:
        
        Chá de camomila e 2 biscoitos de aveia veganos.";
    }
    elseif($veg == "S" and $vege =="N" and $lac == "S" and $pm =="M"){
        echo "Café da Manhã:

        Vitamina de banana com leite de amêndoas, aveia e sementes de chia.
        Torradas integrais com pasta de amendoim.
        <br>
        Lanche da Manhã:
        
        Mix de nozes e sementes (amêndoas, castanhas, sementes de girassol).
        <br>
        Almoço:
        
        Salada de folhas verdes com quinoa, grão de bico, tomate cereja e abacate, temperada com azeite de oliva e limão.
        Arroz integral com lentilhas e legumes assados (berinjela, abobrinha, cenoura).
        <br>
        Lanche da Tarde:
        
        Smoothie de frutas vermelhas com leite de coco e proteína vegetal em pó.
        Bolachas de arroz com pasta de tofu.
        <br>
        Jantar:
        
        Macarrão integral com molho de tomate caseiro e almôndegas de lentilha.
        Brócolis no vapor.
        <br>
        Ceia:
        
        Iogurte de soja com granola sem açúcar e frutas secas.";
    }
    elseif($veg == "S" and $vege =="S" and $lac == "S" and $pm =="P"){
        echo "Café da Manhã:

        Smoothie verde: Espinafre, banana, maçã, sementes de chia e leite de amêndoas.
        <br>
        Lanche da Manhã:
        
        Palitos de cenoura e pepino com hummus.
        <br>
        Almoço:
        
        Salada de folhas verdes com tomate, pepino, grão de bico e quinoa, temperada com azeite de oliva e limão.
        Sopa de legumes com lentilhas.
        <br>
        Lanche da Tarde:
        
        Iogurte de coco com frutas vermelhas e um punhado de nozes.
        <br>
        Jantar:
        
        Stir-fry de tofu e legumes variados (brócolis, pimentão, cogumelos) com arroz integral.
        <br>
        Ceia:
        
        Chá de ervas e duas torradas integrais com abacate.
        ";
    }
    elseif($veg == "S" and $vege =="S" and $lac == "S" and $pm =="M"){
        echo "Café da Manhã:

        Vitamina de banana com leite de amêndoas, aveia e sementes de chia.
        Torradas integrais com pasta de amendoim.
        <br>
        Lanche da Manhã:
        
        Mix de nozes e sementes (amêndoas, castanhas, sementes de girassol).
        <br>
        Almoço:
        
        Salada de folhas verdes com quinoa, grão de bico, tomate cereja e abacate, temperada com azeite de oliva e limão.
        Arroz integral com lentilhas e legumes assados (berinjela, abobrinha, cenoura).
        <br>
        Lanche da Tarde:
        
        Smoothie de frutas vermelhas com leite de coco e proteína vegetal em pó.
        Bolachas de arroz com pasta de tofu.
        <br>
        Jantar:
        
        Macarrão integral com molho de tomate caseiro e almôndegas de lentilha.
        Brócolis no vapor.
        <br>
        Ceia:
        
        Iogurte de soja com granola sem açúcar e frutas secas.";
    }
    elseif($veg == "N" and $vege =="N" and $lac == "N" and $pm =="P"){
        echo "Café da Manhã:

        Omelete de claras com espinafre e tomate.
        1 fatia de pão integral com abacate.
        <br>
        Lanche da Manhã:
        
        1 maçã e 10 amêndoas.
        <br>
        Almoço:
        
        Salada de folhas verdes com pepino, cenoura ralada e grão de bico.
        Peito de frango grelhado.
        Arroz integral.
        <br>
        Lanche da Tarde:
        
        Iogurte natural sem lactose com morangos picados e sementes de chia.
        <br>
        Jantar:
        
        Sopa de legumes com lentilhas.
        Salada de quinoa com legumes assados.
        <br>
        Ceia:
        
        Chá de ervas sem açúcar e 2 biscoitos integrais.";
    }
    elseif($veg == "N" and $vege =="N" and $lac == "N" and $pm =="M"){
        echo "Café da Manhã:

        Omelete com 3 claras e 1 gema, espinafre e cogumelos.
        1 fatia de pão integral com abacate.
        <br>
        Lanche da Manhã:
        
        1 banana e 1 colher de sopa de manteiga de amendoim.
        <br>
        Almoço:
        
        Salada de folhas verdes com tomate, pepino e grão de bico.
        Quinoa ou arroz integral.
        Peito de frango ou tofu grelhado.
        <br>
        Lanche da Tarde:
        
        Iogurte natural sem lactose com frutas vermelhas e sementes de chia.
        <br>
        Jantar:
        
        Salmão ou tempeh grelhado.
        Batata doce assada.
        Brócolis no vapor.
        <br>
        Ceia:
        
        Shake de proteína vegetal com leite de amêndoas.";
    }
    ?>
    </div>
