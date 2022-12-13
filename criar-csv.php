<?php
$pessoas = array(
    ["nome", "idade", "cidade"],
    ["Luiz", 19, "Americana"],
    ["Bia", 17, "Santa Bárbara"],
    ["Carlos", 29, "Piracicaba"],
    ["Daniel",27,"Sumáre"]
);

$arquivo = fopen("dados.csv","a+");

foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo, $uma_pessoa, ";");
}
fclose($arquivo);
?>