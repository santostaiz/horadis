<!--  botão pra volta pro menu -->
<!-- uma hora e meia -->

<?php
$vet=$_SESSION["modulo3"];
$vetA=["0135","1135","1240","0235","1045","0915","0820","0335","0725","0405","0510","0625"]; // alternativas erradas
$vetB=["1145","0125","0210","1205","0945","1010","0320","0850","0550","0655","0440","0740"]; // alternativas erradas


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
      <h3 align='center'>Tente Novamente ! <a href='index.php?pg=modulo3&dica=true' class='alert-link'>Dica</a>.</h3>
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
<table class="tm-table-full-right tm-font-thin" align="center">

  <tr align="center">
    <td><div class="card-body"><h1 class="card">  <?php echo wordwrap($vet[$a_sorteio], 2, ':', true); ?> </h1> </div> </td>
    <td align="right"> <a href="index.php?pg=modulo3&dica=true"  class="btn btn-outline-info" > Dica</a></td>
  </tr>

  <tr><td>

    <a href="index.php?pg=modulo3&hora=<?php echo $alternativas[0];?>"><img src="relogio/<?php echo $alternativas[0];?>.png" width="200px" height="160px"></a>
    <a href="index.php?pg=modulo3&hora=<?php echo $alternativas[1];?>"><img src="relogio/<?php echo $alternativas[1];?>.png" width="200px" height="160px"></a>
    <a href="index.php?pg=modulo3&hora=<?php echo $alternativas[2];?>"><img src="relogio/<?php echo $alternativas[2];?>.png" width="200px" height="160px"></a>

  </td></tr>
    <tr><td></td></tr>

</table>
