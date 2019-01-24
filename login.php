<?php
require "db.php";
$data = $_POST;
if( isset($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users', 'login = ?', array($data ['login']));
if($user)
{
    /////логин действителен
    if (md5($data ['password']) == $user->password)
    {
        /////логиним пользователя
       $_SESSION['logged_user'] = $user;
       echo '<div style="color: green;">Вы авторизованы! <br> Можете перейти на <a href="/">главную</a>  страницу</div><hr>';

    }
    
    else
    {
    $errors[] = 'Неверный пароль!';
    }
    
}   
    else
    {
    $errors[] = 'Пользователь с таким именем не найден!';
    }

    if( ! empty($errors))
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
    
}

?>
<!DOCTYPE html>
<html lang="en"> 
   <head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="container">
        <form action="/login.php" method="post"> 
           <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png" alt="">
        <div class="dinput">
            <input type="text" name="login" placeholder="Введите логин" value="<?php echo @$data['login']; ?>">
        </div>
        
        <div class="dinput">
            <input type="password" name="password" placeholder="Введите пароль" value="<?php echo @$data['password']; ?>">
          
            
            <p><input type="checkbox" name="checkbox"> Запомнить</p> 
                           
            <input class="dwinput" type="submit" name="do_login" value="ВОЙТИ">
            <div class="aaa">
            <a href="#">Восстановить пароль</a><br>
            <a href="signup.php">Регистрация</a>
            </div>
        </div>
        </form>
        <div class="social">
        <i class="fa fa-vk" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-google-plus" aria-hidden="true"></i>
        <i class="fa fa-odnoklassniki" aria-hidden="true"></i>
        </div>
    </div>
</body>
</html>