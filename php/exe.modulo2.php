<?php

$vet=$_SESSION["modulo2"];
$vetA=["0135","1135","1240","0235","1045","0920","0820","0335","0725","0405","0510","0625"]; // alternativas erradas
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
      <h3 align='center'>Tente Novamente ! <a href='index.php?pg=modulo2&dica=true' class='alert-link'>Dica</a>.</h3>
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

$x=0;
for($i=0;$i<3;$i++){
  switch($alternativas[$i]){
    case "0115":
    $string[$x]="Uma Hora e Quinze Minutos";$x++;
    break;
    case "0215":
    $string[$x]="Duas Horas e Quinze Minutos";$x++;
    break;
    case "0315":
    $string[$x]="Três Horas e Quinze Minutos";$x++;
    break;
    case "0415":
    $string[$x]="Quatro Hora e Quinze Minutos";$x++;
    break;
    case "0515":
    $string[$x]="Cinco Horas e Quinze Minutos";$x++;
    break;
    case "0615":
    $string[$x]="Seis Horas e Quinze Minutos";$x++;
    break;
    case "0715":
    $string[$x]="Sete Horas e Quinze Minutos";$x++;
    break;
    case "0815":
    $string[$x]="Oito Horas e Quinze Minutos";$x++;
    break;
    case "0915":
    $string[$x]="Nove Horas e Quinze Minutos";$x++;
    break;
    case "1015":
    $string[$x]="Dez Horas e Quinze Minutos";$x++;
    break;
    case "1115":
    $string[$x]="Onze Horas e Quinze Minutos";$x++;
    break;
    case "1215":
    $string[$x]="Doze Horas e Quinze Minutos";$x++;
    break;
    //// alternativas incorretas
    case "0135":
    $string[$x]="Uma Hora e Trinta e Cinco Minutos";$x++;
    break;
    case "1135":
    $string[$x]="Onze Horas e Trinta e Cinco Minutos";$x++;
    break;
    case "1240":
    $string[$x]="Doze Horas e Quarenta Minutos";$x++;
    break;
    case "0235":
    $string[$x]="Duas Horas e Trinta e Cinco Minutos";$x++;
    break;
    case "1045":
    $string[$x]="Dez Horas e Quarenta e Cinco Minutos";$x++;
    break;
    case "0920":
    $string[$x]="Nove Horas e Vinte Minutos";$x++;
    break;
    case "0820":
    $string[$x]="Oito Horas e Vinte Minutos";$x++;
    break;
    case "0335":
    $string[$x]="Três Horas e Trinta e Cinco Minutos";$x++;
    break;
    case "0725":
    $string[$x]="Sete Horas e Vinte e Cinco Minutos";$x++;
    break;
    case "0405":
    $string[$x]="Quatro Horas e Cinco Minutos";$x++;
    break;
    case "0510":
    $string[$x]="Cinco Horas e Dez Minutos";$x++;
    break;
    case "0625":
    $string[$x]="Seis Horas e Vinte e Cinco Minutos";$x++;
    break;
    case "1145":
    $string[$x]="Onze Horas e Quarenta e Cinco Minutos";$x++;
    break;
    case "0125":
    $string[$x]="Uma Hora e Vinte e Cinco Minutos";$x++;
    break;
    case "0210":
    $string[$x]="Duas Horas e Dez Minutos";$x++;
    break;
    case "1205":
    $string[$x]="Doze Horas e Cinco Minutos";$x++;
    break;
    case "0945":
    $string[$x]="Nove Horas e Quarenta e Cinco Minutos";$x++;
    break;
    case "1010":
    $string[$x]="Dez Horas e Dez Minutos";$x++;
    break;
    case "0320":
    $string[$x]="Três Horas e Vinte Minutos";$x++;
    break;
    case "0850":
    $string[$x]="Oito Horas e Cinquenta Minutos";$x++;
    break;
    case "0550":
    $string[$x]="Cinco Horas e Cinquenta Minutos";$x++;
    break;
    case "0655":
    $string[$x]="Seis Horas e Cinquenta e Cinco Minutos";$x++;
    break;
    case "0440":
    $string[$x]="Quatro Horas e Quarenta Minutos";$x++;
    break;
    case "0740":
    $string[$x]="Sete Horas e Quarenta Minutos";
    $x++;
    break;

  }
}



?>
<table class="tm-table-full-width tm-font-thin" align="center">

  <tr>
    <td align="right">  <!-- arrumar esse botão  -->
        <a href="index.php?pg=modulo2&dica=true"  class="btn btn-outline-info" > Dica</a>
    </td>
  </tr>
  <tr align="center">
    <td><img src="relogio/<?php echo $vet[$a_sorteio]; ?>.png" alt="11_horas" width="200px" height="160px"></td>
  </tr>
  <div class="btn-group-vertical">
    <tr  align="center" ><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">  <a href="index.php?pg=modulo2&hora=<?php echo $alternativas[0];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue btn btn-info">  <?php echo $string[0]; ?></a></td></tr>
    <tr  align="center"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">   <a href="index.php?pg=modulo2&hora=<?php echo $alternativas[1];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue btn btn-info">  <?php echo $string[1]; ?></a></td></tr>
    <tr  align="center"><td class="tm-plan-table-cell tm-plan-table-cell-pad-small text-xs-center">   <a href="index.php?pg=modulo2&hora=<?php echo $alternativas[2];?>" class="tm-bg-blue-1 tm-btn-rounded tm-btn-blue btn btn-info">  <?php echo $string[2]; ?></a></td></tr>
  </div>
  <input type="hidden" name="correta" class="btn btn-primary" value="<?php echo $vet[$a_sorteio];?>">


</table>
