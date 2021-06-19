
<?php

$pag= $_GET["pg"];

switch($pag){
  case "modulo1":
  ?>
  <br>
  <div class="alert alert-info" role="alert">
    <h4 class="alert-heading" align="center">Dica!</h4>
    <p align="center">O ponteiro <b>Maior</b> indica os <b>MINUTOS</b>.</p>

    <p align="center">O ponteiro <b>Menor</b> indica as <b>HORAS</b>.</p>
    <hr>
    <p class="mb-0" align="center">Quando o <b>ponteiro Maior</b>(dos minutos) indicar o número <b>12</b> (doze) os minutos são iguais a <b>zero</b>, tornando horas inteiras.</p>
  </div>
  <?php
  break;
  case "modulo2":
  //echo "<div class='card-body'><h3 class='card' align='center'> Dica marota </h3> </div>";
  ?>
  <br>
   <div class="alert alert-info" role="alert">
    <h4 class="alert-heading" align="center">Dica!</h4>
    <p align="center">O ponteiro <b>Maior</b> indica os <b>MINUTOS</b>.</p>

    <p align="center">O ponteiro <b>Menor</b> indica as <b>HORAS</b>.</p>
    <hr>
    <p class="mb-0" align="center">Multiplique o número indicado pelo ponteiro <b>maior</b> (dos minutos) por <b>5</b> (cinco).</p>
    <p class="mb-0" align="center"><b>Os minutos</b> exibidos no relógio acima são <b>menores</b> que 35 (trinta e cinco) e <b>maiores</b> que 20 (vinte).</p>
  </div>

  <?php
  break;
  case "modulo3":
  ?>
  <br>
  <div class="alert alert-info" role="alert">
    <h4 class="alert-heading" align="center">Dica!</h4>
    <table  class="tm-table-full-right tm-font-thin" width="100%" align="center">

      <tr>
        <td >

          <p align="center">O ponteiro <b>Maior</b> indica os <b>MINUTOS</b>.</p>

          <p align="center">O ponteiro <b>Menor</b> indica as <b>HORAS</b>.</p>
          <hr>
          <p class="mb-0" align="center">Multiplique o número indicado pelo ponteiro <b>Maior</b> (dos minutos) por <b> 5 </b>(cinco).</p>
          <p class="mb-0" align="center">Os minutos mostrados no relógio é <b>maior</b> que <b>10</b> (dez) e <b>menor</b> que <b>15</b> (quinze).</p>
        </td>
        <td width="50%" height="50%"><img src="coelho2.png"  width="20%" align="right"></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>

    </table>

  </div>
  <?php
  break;
  case "modulo4":
  ?>
  <br>
  <div class="alert alert-info" role="alert">
    <h4 class="alert-heading" align="center">Dica!</h4>
    <p align="center">O ponteiro <b>Maior</b> indica os <b>MINUTOS</b>.</p>

    <p align="center">O ponteiro <b>Menor</b> indica as <b>HORAS</b>.</p>
    <hr>
    <p class="mb-0" align="center">Multiplique o número indicado pelo <b>ponteiro Maior</b> (dos minutos) por <b>5</b> (cinco).</p>
  </div>
  <?php
  break;
}

?>
