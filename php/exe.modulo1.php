
<?php

$vet=$_SESSION["modulo1"];
$vetA=["0130","0135","0230","0235","0330","0335","0405","0430","0510","0530","0625","0630","0725","0820","0915","1045","1135","1240"]; // alternativas erradas
$vetB=["0125","0210","0320","0440","0550","0655","0730","0740","0830","0850","0930","0945","1010","1030","1130","1145","1205","1230"]; // alternativas erradas


$hora= $_GET["hora"];
if(($_GET["dica"]=="true")){
  $a_c=$_SESSION["hora"];
  $vet[$a_sorteio]=$_SESSION["hora"];
  $a_b=$vetB[$_SESSION["b"]];
  $a_a=$vetA[$_SESSION["a"]];
  $alternativas=[$a_a,$a_b,$a_c];
  sort($alternativas);
}else{
  if($hora!=null){

    if($hora==$_SESSION["hora"]){
      //  unset($_SESSION["hora"]);
      //echo $_SESSION["hora"]; //acertou

      echo "<div class='alert alert-success' role='alert'>
      <h3 align='center'>Parabéns Você Acertou!</h3>
      </div>";
      $a_sorteio= array_rand($vet); //sorteia posição alternativas corretas
      $a=array_rand($vetA);
      $b=array_rand($vetB);

      $_SESSION["a"]=$a;
      $_SESSION["b"]=$b;
      $_SESSION["hora"]=$vet[$a_sorteio];

      $a_c=$vet[$a_sorteio];

      $a_b=$vetB[$b];
      $a_a=$vetA[$a];
      $alternativas=[$a_a,$a_b,$a_c];
      sort($alternativas);

    }else{

      $a_c=$_SESSION["hora"];
      $vet[$a_sorteio]=$_SESSION["hora"];

      echo"<div class='alert alert-danger' role='alert'>
      <h3 align='center'>Tente Novamente ! <a href='index.php?pg=modulo1&dica=true' class='alert-link'>Dica</a>.</h3>
      </div>";
      $a_b=$vetB[$_SESSION["b"]];
      $a_a=$vetA[$_SESSION["a"]];
      $alternativas=[$a_a,$a_b,$a_c];
      sort($alternativas);

    }
  }else{
    $a_sorteio= array_rand($vet); //sorteia posição alternativas corretas
    $a=array_rand($vetA);
    $b=array_rand($vetB);

    $_SESSION["a"]=$a;
    $_SESSION["b"]=$b;

    $_SESSION["hora"]=$vet[$a_sorteio];
    $a_c=$vet[$a_sorteio];

    $a_b=$vetB[$b];
    $a_a=$vetA[$a];
    $alternativas=[$a_a,$a_b,$a_c];
    sort($alternativas);
  }

}
?>
<table class="tm-table-full-width tm-font-thin" align="center">

  <tr>
    <td align="right">  <!-- arrumar esse botão  -->
      <a href="index.php?pg=modulo1&dica=true"  class="btn btn-outline-info" > Dica</a>
    </td>
  </tr>

  <tr align="center">
    <td><img src="relogio/<?php echo $vet[$a_sorteio]; ?>.png" alt="11_horas" width="200px" height="160px"></td>
  </tr>
  <div class="btn-group-vertical">
    <tr  align="center" ><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">  <a href="index.php?pg=modulo1&hora=<?php echo $alternativas[0];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue ">  <?php echo wordwrap($alternativas[0], 2, ':', true); ?></a></td></tr>
    <tr  align="center"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">    <a href="index.php?pg=modulo1&hora=<?php echo $alternativas[1];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue ">  <?php echo wordwrap($alternativas[1], 2, ':', true); ?></a></td></tr>
    <tr  align="center"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">   <a href="index.php?pg=modulo1&hora=<?php echo $alternativas[2];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue ">  <?php echo wordwrap($alternativas[2], 2, ':', true); ?></a></td></tr>
  </div>
  <input type="hidden" name="correta" class="btn btn-primary" value="<?php $vet[$a_sorteio] ?>">


</table>
