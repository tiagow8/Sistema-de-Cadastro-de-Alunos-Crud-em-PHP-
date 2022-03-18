<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Alunos</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #ffeabc;">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #0e87f2;
        color: #ffffff
      }
   
    </style>


    <?php //echo '<p>Hello World</p>'; ?> 



    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Aluno <i class="fa-duotone fa-person"></i></h5>
        <p class="card-text">Cadastrar um novo aluno no sistema.</p>
        <a href="alunos_inserir.php" class="btn btn-primary">Adicionar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Listar Alunos Adicionados<i class="fa-solid fa-people-group"></i></h5>
        <p class="card-text">Listagem de Alunos cadastrados no sistema.</p>
        <a href="alunos_list.php" class="btn btn-primary">Listagem</a>
      </div>
    </div>
  </div>
</div>


    </div>


  </body>
</html>