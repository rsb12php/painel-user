<?php 
    
    include_once 'dependencias.php'; 
    include_once '../model/Conexao.class.php';
    include_once '../model/Manager.class.php';

    $manager = new Manager();

    $id = $_POST['id'];

?>

<h2 class="text-center">
    Atualização de Usuário <i class="fa fa-user-edit"></i>
</h2><hr>

<form action="../controller/update_user.php" method="post">
    <div class="container">
        <div class="form-row">

            <?php foreach($manager->getInfo("user", $id) as $user_info): ?>

            <div  class="col-md-6">
            Nome: <i class="fa fa-user"></i>
            <input class="form-control" type="text" name="name" required autofocus 
            value="<?=$user_info['name']?>"><br><br>
            </div>
            <div class="col-md-6">
            E-mail: <i class="fa fa-envelope"></i>
            <input class="form-control" type="text" name="email" required 
            value="<?=$user_info['email']?>" ><br><br>
            </div>
            <div class="col-md-4">
            Senha: <i class="fa fa-key"></i>
            <input class="form-control" type="password" name="password" 
            value="<?=$user_info['password']?>" required><br><br>
            </div>
            <div class="col-md-3">
            Data de Nascimento: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="birth" 
            value="<?=$user_info['birth']?>" required><br>
            </div>
            <div class="col-md-3">
            Data de Emissão: <i class="fa fa-calendar"></i>
            <input class="form-control" type="date" name="emitted_date"
            value="<?=$user_info['emitted_date']?>" required><br>
            </div>
            <div class="col-md-2">
            Hora de Emissão: <i class="fa fa-calendar"></i>
            <input class="form-control" type="time" name="emitted_hour" 
            value="<?=$user_info['emitted_hour']?>"  required><br>
            </div>
        
            <div class="col-md-3">
            
            <input type="hidden" name="id" value="<?=$user_info['id']?>">

            <?php endforeach; ?>

                <button class="btn btn-warning btn-lg">
                    Atualizar Usuário <i class="fa fa-user-edit"></i>
                </button><br><br>

                <a href="../index.php">
                    Voltar
                </a>

            </div>

        </div>
    </div>
</form>

