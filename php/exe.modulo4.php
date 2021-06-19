<?php
$vet=$_SESSION["modulo4"];
$vetA=["0135","1135","1245","0235","1045","0925","0825","0335","0725","0450","0555","0625",
       "0115","0215","0315","0415","0515","0615","0715","0815","0915","1015","1115","1215",
      "1240","1140","1040","0940","0840","0940","0840","0745","0640","0540","0445","0340"]; // alternativas erradas

$vetB=["1145","0125","0250","1225","0945","1055","0325","0850","0550","0655","0440","0740",
       "0130","0230","0330","0430","0530","0630","0730","0830","0930","1030","1130","1230",
       "0100","0200","0300","0400","0500","0600","0700","0800","0900","1000","1100","1200"]; // alternativas erradas

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
             <h3 align='center'>Tente Novamente ! <a href='index.php?pg=modulo4&dica=true' class='alert-link'>Dica</a>.</h3>
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



switch($vet[$a_sorteio]){
  case "0105":
  $string="Uma Hora e Cinco Minutos";
  break;
  case "0205":
  $string="Duas Horas e Cinco Minutos";
  break;
  case "0305":
  $string="Três Horas e Cinco Minutos";
  break;
  case "0405":
  $string="Quatro Horas e Cinco Minutos";
  break;
  case "0505":
  $string="Cinco Horas e Cinco Minutos";
  break;
  case "0605":
  $string="Seis Horas e Cinco Minutos";
  break;
  case "0705":
  $string="Sete Horas e Cinco Minutos";
  break;
  case "0805":
  $string="Oito Horas e Cinco Minutos";
  break;
  case "0905":
  $string="Nove Horas e Cinco Minutos";
  break;
  case "1005":
  $string="Dez Horas e Cinco Minutos";
  break;
  case "1105":
  $string="Onze Horas e Cinco Minutos";
  break;
  case "1205":
  $string="Doze Horas e Cinco Minutos";
  break;

  case "0110":
  $string="Uma Hora e Dez Minutos";
  break;
  case "0210":
  $string="Duas Horas e Dez Minutos";
  break;
  case "0310":
  $string="Três Horas e Dez Minutos";
  break;
  case "0410":
  $string="Quatro Horas e Dez Minutos";
  break;
  case "0510":
  $string="Cinco Horas e Dez Minutos";
  break;
  case "0610":
  $string="Seis Horas e Dez Minutos";
  break;
  case "0710":
  $string="Sete Horas e Dez Minutos";
  break;
  case "0810":
  $string="Oito Horas e Dez Minutos";
  break;
  case "0910":
  $string="Nove Horas e Dez Minutos";
  break;
  case "1010":
  $string="Dez Horas e Dez Minutos";
  break;
  case "1110":
  $string="Onze Horas e Dez Minutos";
  break;
  case "1210":
  $string="Doze Horas e Dez Minutos";
  break;

  case "0120":
  $string="Uma Hora e Vinte Minutos";
  break;
  case "0220":
  $string="Duas Horas e Vinte Minutos";
  break;
  case "0320":
  $string="Três Horas e Vinte Minutos";
  break;
  case "0420":
  $string="Quatro Horas e Vinte Minutos";
  break;
  case "0520":
  $string="Cinco Horas e Vinte Minutos";
  break;
  case "0620":
  $string="Seis Horas e Vinte Minutos";
  break;
  case "0720":
  $string="Sete Horas e Vinte Minutos";
  break;
  case "0820":
  $string="Oito Horas e Vinte Minutos";
  break;
  case "0920":
  $string="Nove Horas e Vinte Minutos";
  break;
  case "1020":
  $string="Dez Horas e Vinte Minutos";
  break;
  case "1120":
  $string="Onze Horas e Vinte Minutos";
  break;
  case "1220":
  $string="Doze Horas e Vinte Minutos";
  break;
}

?>
<table class="tm-table-full-right tm-font-thin" align="center">
  <tr align="center">
    <td>  <div class="card-body"><h2 class="card"> <?php echo $string; ?></h2> </div> </td>
    <td align="right"> <a href="index.php?pg=modulo4&dica=true"  class="btn btn-outline-info" > Dica</a></td>
  </tr>
    <tr><td>

    <a href="index.php?pg=modulo4&hora=<?php echo $alternativas[0];?>"><img src="relogio/<?php echo $alternativas[0];?>.png" width="200px" height="160px"></a>
    <a href="index.php?pg=modulo4&hora=<?php echo $alternativas[1];?>"><img src="relogio/<?php echo $alternativas[1];?>.png" width="200px" height="160px"></a>
    <a href="index.php?pg=modulo4&hora=<?php echo $alternativas[2];?>"><img src="relogio/<?php echo $alternativas[2];?>.png" width="200px" height="160px"></a>

  </td></tr>

</table>
