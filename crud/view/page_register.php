<?php include_once 'dependencias.php'; ?>

<h2 class="text-center">
    Cadastro de Usuário <i class="fa fa-user-plus"></i>
</h2><hr>

<form action="../controller/insert_user.php" method="post">
    <div class="container">
        <div class="form-row">

            <div  class="col-md-6">
            Nome: <i class="fa fa-user"></i>
            <input class="form-control" type="text" name="name" required autofocus><br><br>
            </div>
            <div class="col-md-6">
            E-mail: <i class="fa fa-envelope"></i>
            <input class="form-control" type="text" name="email" required><br><br>
            </div>
            <div class="col-md-4">
            Senha: <i class="fa fa-key"></i>
            <input class="form-control" type="password" name="password" required><br><br>
            </div>
            <div class="col-md-3">
            <Data de Nascimento: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="birth" required><br>
            </div>
            <div class="col-md-3">
            Data de Emissão: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="emitted_date" required><br>
            </div>
            <div class="col-md-2">
            Hora de Emissão: <i class="fa fa-calendar"></i>
            <input class="form-control" type="time" name="emitted_hour" required><br>
            </div>
        
            <div class="col-md-3">
                <button class="btn btn-primary btn-lg">
                    Cadastrar Usuário <i class="fa fa-user-plus"></i>
                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>

            </div>

        </div>
    </div>
</form>

