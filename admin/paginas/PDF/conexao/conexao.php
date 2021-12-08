<?php



function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "sistema_almoxarifado");
    return $conexao;
}





/**
 include_once('conect/conect.php');
            if(isset($_POST['veriifcar'])){
              $data1 = trim(strip_tags($_POST['data1']));
              $data2 = trim(strip_tags($_POST['data2']));

$select = "SELECT * FROM releletrico WHERE data   BETWEEN   '$data1' AND '$data2'";
                try{
                  $result = $conect->prepare($select);
                    $result->execute();
                    $contar = $result->rowCount();
                    if ($contar>0) {
                      while($show = $result->FETCH(PDO::FETCH_OBJ)){

                    $nomee = $show->nome;
                    $qtdProduto = $show->qtdProduto;
                    $dataaa = $show->data;

 **/





if(isset($_GET['pdf'])) {

    $nomee = $_GET['pdf'];
function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM releletrico ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}
  
    
}

  function selectIdPessoa($nome){
    $banco = abrirBanco();
    $sql = "SELECT * FROM releletrico WHERE  nome=".$nome;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
    
}

function voltarIndex(){
    header("Location:index.php");
}
function formatoData($data){
            $array = explode("-", $data);
            // $data = 2016-04-14
            // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
            $novaData = $array[2]."/".$array["1"]."/".$array[0];
            return $novaData;
        }

