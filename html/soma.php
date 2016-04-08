<?php
include('cabecalho.php');
?>

<h2 class="text-center">Função Somar</h2>

<form>
  <!-- Valor 1 -->
  <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
            <label for="valor1">Valor 1</label>
            <input type="text" class="form-control" id="valor1" placeholder="Digite um número">
        </div>
      </div>
  </div>
  <!-- Valor 2 -->
  <div class="container">
      <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
          <label for="valor1">Valor 2</label>
          <input type="text" class="form-control" id="valor2" placeholder="Digite um número">
        </div>
      </div>
    </div>
    <!-- Somar -->
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <div class="form-group">
            <button id="somar" onclick="somarValores()" class="btn btn-default">Somar</button>
          </div>
        </div>
      </div>
</form>

<script type="text/javascript">
      function somarValores(){
        var v1 = document.getElementById("valor1").value;
        var v2 = document.getElementById("valor2").value;
        var resultado = parseInt(v1) + parseInt(v2);
        alert("O resultado é " + resultado + ".");
        console.log (resultado);
    }
</script>
<?php
include('rodape.php');
?>
