<!DOCTYPE html>
<html lang="bt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <title>Currículo de Ti</title>
</head>
<body>
<h1 class="text-info  text-center  bg-dark fs-1 fw-bold">Preencha com cuidado seu currículo</h1>
<div class="container">

<form method="dados.php" action="post" class="row g-3">

<p><h3>Informações Pessoais</h3>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample">

  <div class="col-md-10">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputnome" name = "nome" placeholder="João da Silva Santos">
  </div>
  <div class="col-md-2">
    <label for="inputDataNasc" class="form-label">Data Nascimento</label>
    <input type="data" class="form-control" id="inputDataNasc" name="datanasc"placeholder="12/12/1999">
  </div>
  <div class="col-12">
    <label for="inputEndereco" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputEndereco" name="endereco"placeholder="Rua das margaridas, 104 ">
  </div>
  <div class="col-md-6">
    <label for="inputCidade" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCidade" placeholder="São Paulo">
  </div>
  <div class="col-md-4">
    <label for="inputEstado" class="form-label" >Estado</label>
    <select id="inputEstado" class="form-select">
      <option selected>Escolha...</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espirito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MT">Mato Grosso</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputCEP" placeholder="09884-098">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Objetivo</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Programador WEB">
  </div>


</div>


<p><h3>Informações Escolares</h3>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample1">

<div class="col-6">
    <label for="inputCurso" class="form-label">Curso</label>
    <input type="text" class="form-control" id="inputCurso" placeholder="Técnico de Informática">
  </div>

  <div class="col-6">
    <label for="inputInstituicao" class="form-label">Instituição</label>
    <input type="text" class="form-control" id="inputInstituicao" placeholder="Senac">
  </div>

  <div class="col-5">
    <label for="inputDataInicio" class="form-label">Data Início</label>
    <input type="text" class="form-control" id="inputDataInicio" placeholder="09/09/2021">
  </div>

  <div class="col-5">
    <label for="inputDataConclusao" class="form-label">Data Conclusão</label>
    <input type="text" class="form-control" id="inputDataConclusao" placeholder="30/12/2022">
  </div>
  <div class="col-2">
    <label for="inputCH" class="form-label">CH</label>
    <input type="text" class="form-control" id="inputCH" placeholder="20 horas">
  </div>

</div>

<p><h3>Experiências</h3>
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
Visualizar
  </button>
</p>

<div class="collapse row g-3" id="collapseExample2">

<div class="col-2">
    <label for="inputCargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" id="inputCargo" placeholder="Desenvolvedor Web Junior">
  </div>

  <div class="col-2">
    <label for="inputEmpresa" class="form-label">Empresa</label>
    <input type="text" class="form-control" id="inputEmpresa" placeholder="Google do Brasil">
  </div>

  <div class="col-6">
    <label for="inputDataInicioEmpresa" class="form-label">Data Início</label>
    <input type="text" class="form-control" id="inputDataInicioEmpresa" placeholder="09/09/2021">
  </div>

  <div class="col-6">
    <label for="inputDataConclusaoEmpresa" class="form-label">Data Conclusão</label>
    <input type="text" class="form-control" id="inputDataConclusaoEmpresa" placeholder="30/12/2022">
  </div>
  <div class="col-12">
    <label for="inputResumoAtividade" class="form-label">Resumo das atividades executadas</label>
    <input type="text" class="form-control" id="inputResumoAtividade" placeholder="Manutenção dos aplicativos legados, programação de novas funcionalidades,..">
  </div>
</div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Criar Curriculo</button>
  </div>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>    
</body>
</html>