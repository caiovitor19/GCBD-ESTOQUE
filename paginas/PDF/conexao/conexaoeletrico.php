<?php

function abrirBanco(){
     $conexao = new mysqli("localhost", "root", "", "sistema_almoxarifado");
    return $conexao;
}

function selectAllPessoa(){

    if(isset($_POST['BOTAOeletrico'])){
              $data1 = trim(strip_tags($_POST['data1']));
              $data2 = trim(strip_tags($_POST['data2']));



    $banco = abrirBanco();
    $sql = "SELECT * FROM releletrico WHERE data BETWEEN '$data1' AND '$data2'";
    $resultado = $banco->query($sql);
     $banco->close();
    $linha = mysqli_num_rows ($resultado);
    if ($linha>0) {
        while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
       

         
    }
    }
       else{

        echo "string";
    
header("Location: ../../home.php?acao=eletrico22");
        
    }
   

 return $grupo;
   
    }
  
    
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