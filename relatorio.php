

<script language="javascript" src="paginas/js/fusioncharts3.js"></script>
    <script language="javascript" src="paginas/js/fusioncharts.charts.js"></script>
    <script language="javascript" src="paginas/js/fusioncharts.theme.fint.js"></script>

  <section style="background: #eaeaea;" id="container">

    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">


 <h3 style="margin-left: 2%;"><i class="fa fa-bar-chart-o"></i>   Relatório </h3>

<style type="text/css">



.info-box-icon {
     border-radius:3%;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    

    }
    .info-box {
    display: block;
    min-height: 90px;
    background: #fff;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    border-radius: 2px;
    margin-bottom: 15px;
}

    .progress-description, .info-box-text {
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
   text-overflow: ellipsis;
   margin-left: 35%;
  
  }
 
.info-box-number {
    display: block;
    font-weight: bold;
    font-size: 20px;
    margin-left: 35%;
  }


</style>

  
 






  <div class="col-lg-12 mt">
            <div class="row content-panel">
          
              
              <div class="panel-body">


 

<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua" style="color: #fff; background-color: #181945"><i  class="fa fa-wrench" class="iconeBOX" ></i></span>

            <div class="info-box-content">
              <span  class="info-box-text">Limpeza</span>
              <span class="info-box-number">
                

<?php


                   $select = "SELECT sum(qtdProduto) FROM mlimpeza";

                  $result = $conect->prepare($select);
                  $result->execute();
                  $mlimpeza = $result-> fetchColumn();
      
                    echo  $mlimpeza;

?>



              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua" style="color: #fff; background-color: #dd4b39"><i  class="fa fa-lightbulb-o " class="iconeBOX" ></i></span>

            <div class="info-box-content">
              <span  class="info-box-text">Elétrico</span>
              <span class="info-box-number">
                

<?php


                   $select = "SELECT sum(qtdProduto) FROM meletrico";

                  $result = $conect->prepare($select);
                  $result->execute();
                  $meletrico = $result-> fetchColumn();
      
                    echo  $meletrico;

?>





              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua" style="color: #fff; background-color: #00a65a"><i  class="fa fa-qrcode" class="iconeBOX" ></i></span>

            <div class="info-box-content">
              <span  class="info-box-text">Processamento de dados</span>
              <span class="info-box-number">


<?php


                   $select = "SELECT sum(qtdProduto) FROM mprocessamento";

                  $result = $conect->prepare($select);
                  $result->execute();
                  $mprocessamento = $result-> fetchColumn();
      
                    echo  $mprocessamento;

?>




              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua" style="color: #fff; background-color: #f39c12"><i  class="fa fa-pencil " class="iconeBOX" ></i></span>

            <div class="info-box-content">
              <span  class="info-box-text">Expediente</span>
              <span class="info-box-number">
                


<?php


                   $select = "SELECT sum(qtdProduto) FROM mexpediente";

                  $result = $conect->prepare($select);
                  $result->execute();
                  $mexpediente = $result-> fetchColumn();
      
                    echo  $mexpediente;

?>

              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>



        

</div>
</div>

</div> 
<!-- FIM DA BARRA DE RELATORIO -->




<!-- GRAFICO TABELA ELETRICO -->
 <div class="col-lg-12 " style="margin-top: 5%;" >
  <div class="showback">
              <section class="wrapper">
                              <div class="row">
                                <div class="main-chart">
                                  <!--CUSTOM CHART START -->
                                  <div class="border-head">
                                    <h3>ELÉTRICO</h3>
                                  </div>
                                
                                  <div id="chart-container">CARREGA GRÁFICO</div>
                               
                                  

 
 <script> 
      FusionCharts.ready(function () {
        var revenueChart = new FusionCharts({
        type: 'column2d',
        renderAt: 'chart-container',
        width: '800',
        height: '400',
        dataFormat: 'json',
        dataSource: {
          'chart': {
            
            'yaxisname': 'SAIDA DE PRODUTOS',
            'theme': 'fint'
          },
          'data': dados_grafico
          }
        
        });
        revenueChart.render();
      });
    </script>

                         
                                </div>
                                  
                              </div>
                              
              </section><!-- SECTION WRAPPER -->
</div>
</div> <!-- FIM DO ELETRICO 02 -->








<!-- GRAFICO TABELA ELETRICO -->
 <div class="col-lg-12 " style="margin-top: 5%;" >
  <div class="showback">
              <section class="wrapper">
                              <div class="row">
                                <div class="main-chart">
                                  <!--CUSTOM CHART START -->
                                  <div class="border-head">
                                    <h3>LIMPEZA</h3>
                                  </div>
                                  
                  

                        <div id="chart-container1">CARREGA GRÁFICO</div>
                               
                                  

 
 <script> 
      FusionCharts.ready(function () {
        var revenueChart = new FusionCharts({
        type: 'column2d',
        renderAt: 'chart-container1',
        width: '800',
        height: '400',
        dataFormat: 'json',
        dataSource: {
          'chart': {
            
            'yaxisname': 'SAIDA DE PRODUTOS',
            'theme': 'fint'
          },
          'data': dados_grafico1
          }
        
        });
        revenueChart.render();
      });
    </script>




  
                                </div>
                                  
                              </div>
                              
              </section><!-- SECTION WRAPPER -->
</div>
</div> <!-- FIM DO ELETRICO 02 -->








            





<!-- GRAFICO TABELA ELETRICO -->
 <div class="col-lg-12 " style="margin-top: 5%;" >
  <div class="showback">
              <section class="wrapper">
                              <div class="row">
                                <div class="main-chart">
                                  <!--CUSTOM CHART START -->
                                  <div class="border-head">
                                    <h3>MATERIAL DE EXPEDIENTE</h3>
                                  </div>
                                  
                  

                        <div id="chart-container2">CARREGA GRÁFICO</div>
                               
                                  

 
 <script> 
      FusionCharts.ready(function () {
        var revenueChart = new FusionCharts({
        type: 'column2d',
        renderAt: 'chart-container2',
        width: '800',
        height: '400',
        dataFormat: 'json',
        dataSource: {
          'chart': {
            
            'yaxisname': 'SAIDA DE PRODUTOS',
            'theme': 'fint'
          },
          'data': dados_grafico2
          }
        
        });
        revenueChart.render();
      });
    </script>




  
                                </div>
                                  
                              </div>
                              
              </section><!-- SECTION WRAPPER -->
</div>
</div> <!-- FIM DO ELETRICO 02 -->





<!-- GRAFICO TABELA ELETRICO -->
 <div class="col-lg-12 " style="margin-top: 5%;" >
  <div class="showback">
              <section class="wrapper">
                              <div class="row">
                                <div class="main-chart">
                                  <!--CUSTOM CHART START -->
                                  <div class="border-head">
                                    <h3>PROCESSAMENTO DE DADOS</h3>
                                  </div>
                                  
                  

                        <div id="chart-container3">CARREGA GRÁFICO</div>
                               
                                  

 
 <script> 
      FusionCharts.ready(function () {
        var revenueChart = new FusionCharts({
        type: 'column2d',
        renderAt: 'chart-container3',
        width: '800',
        height: '400',
        dataFormat: 'json',
        dataSource: {
          'chart': {
            
            'yaxisname': 'SAIDA DE PRODUTOS',
            'theme': 'fint'
          },
          'data': dados_grafico3
          }
        
        });
        revenueChart.render();
      });
    </script>




  
                                </div>
                                  
                              </div>
                              
              </section><!-- SECTION WRAPPER -->
</div>
</div> <!-- FIM DO ELETRICO 02 -->

  
  





  








      </section>
    </section>
   
  </section>



















<?php
      include 'conn.php';
      
      $consulta = "SELECT * FROM meletrico";
      $con_resultado = mysqli_query($conn,$consulta);
     
      
      $dados = array();
      while($row = mysqli_fetch_array($con_resultado)) 
      { 
        $dados_a [] = $row['nome'];
        $dados_b [] = $row['Pretirados'];
       
      }
      


  
   $dados_grafico = "";
      for($i = 0; $i <= count($dados_a)-1; $i++) {
        $dados_grafico = $dados_grafico."{'label': '".$dados_a [$i]."', 'value': '".$dados_b [$i]."'}, ";
      }
  
        
      $tamanho = strlen($dados_grafico);
      $dados_grafico = substr($dados_grafico, 0, $tamanho-2);
      $dados_grafico = "[$dados_grafico]";
      //echo $dados_grafico;
      
      echo "<script type='text/javascript'>var dados_grafico = $dados_grafico;</script>";
 




?>


<?php
      include 'conn.php';
      
      $consulta1 = "SELECT * FROM mlimpeza";
      $con_resultado1 = mysqli_query($conn,$consulta1);
     
      
      $dados1 = array();
      while($row = mysqli_fetch_array($con_resultado1)) 
      { 
        $dados_a1 [] = $row['nome'];
        $dados_b1 [] = $row['Pretirados'];
       
      }
      


  
   $dados_grafico1 = "";
      for($i = 0; $i <= count($dados_a1)-1; $i++) {
        $dados_grafico1 = $dados_grafico1."{'label': '".$dados_a1 [$i]."', 'value': '".$dados_b1 [$i]."'}, ";
      }
  
        
      $tamanho1 = strlen($dados_grafico1);
      $dados_grafico1 = substr($dados_grafico1, 0, $tamanho1-2);
      $dados_grafico1 = "[$dados_grafico1]";
      //echo $dados_grafico;
      
      echo "<script type='text/javascript'>var dados_grafico1 = $dados_grafico1;</script>";
 




?>




<?php
      include 'conn.php';
      
      $consulta2 = "SELECT * FROM mexpediente";
      $con_resultado2 = mysqli_query($conn,$consulta2);
     
      
      $dados2 = array();
      while($row = mysqli_fetch_array($con_resultado2)) 
      { 
        $dados_a2 [] = $row['nome'];
        $dados_b2 [] = $row['Pretirados'];
       
      }
      


  
   $dados_grafico2 = "";
      for($i = 0; $i <= count($dados_a2)-1; $i++) {
        $dados_grafico2 = $dados_grafico2."{'label': '".$dados_a2 [$i]."', 'value': '".$dados_b2 [$i]."'}, ";
      }
  
        
      $tamanho2 = strlen($dados_grafico2);
      $dados_grafico2 = substr($dados_grafico2, 0, $tamanho2-2);
      $dados_grafico2 = "[$dados_grafico2]";
      //echo $dados_grafico;
      
      echo "<script type='text/javascript'>var dados_grafico2 = $dados_grafico2;</script>";
 




?>


<?php
      include 'conn.php';
      
      $consulta3 = "SELECT * FROM mprocessamento";
      $con_resultado3 = mysqli_query($conn,$consulta3);
     
      
      $dados3 = array();
      while($row = mysqli_fetch_array($con_resultado3)) 
      { 
        $dados_a3 [] = $row['nome'];
        $dados_b3 [] = $row['Pretirados'];
       
      }
      


  
   $dados_grafico3 = "";
      for($i = 0; $i <= count($dados_a3)-1; $i++) {
        $dados_grafico3 = $dados_grafico3."{'label': '".$dados_a3 [$i]."', 'value': '".$dados_b3 [$i]."'}, ";
      }
  
        
      $tamanho3 = strlen($dados_grafico3);
      $dados_grafico3 = substr($dados_grafico3, 0, $tamanho3-2);
      $dados_grafico3 = "[$dados_grafico3]";
      //echo $dados_grafico;
      
      echo "<script type='text/javascript'>var dados_grafico3 = $dados_grafico3;</script>";
 



?>


