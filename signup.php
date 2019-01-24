<?php
require "db.php";

$data = $_POST;
if( isset($data['do_signup']))
{
    ////// Ввод данных регистрации

    $errors = array();
    if( trim($data['login']) =='')
    {
        $errors[] =  'Введите логин!' ;
    }
    
    if( trim($data['email']) =='')
    {
        $errors[] =  'Введите Email!' ;
    }
    
    if( $data['password'] =='')
    {
        $errors[] =  'Введите пароль!' ;
    }
    
    if( $data['password_2'] != $data['password'])
    {
        $errors[] =  'Повторный пароль введен не верно!' ;
    }
    
     if( R::count('users', "login = ?", array ($data['login'])) > 0)
    {
        $errors[] =  'Пользователь с таким логином уже существует!' ;
    }
    
    
     if( R::count('users', "email = ?", array ($data['email'])) > 0)
    {
        $errors[] =  'Пользователь с таким EMAIL уже существует!' ;
    }
    
    if( empty($errors))
    {
        // все хорошо, ошибок нет
        $user = R::dispense('users');
        $user->login = $data['login'];
        $user->email = $data['email'];
        $user->password = md5($data['password']);
        R::store($user);
        echo '<div style="color: green;">Вы успешно зарегистрированы!<br> Можете перейти на <a href="/">главную</a>  страницу</div><hr>';
    } else
    {
        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }

}

?>

<!DOCTYPE html>
<html lang="en"> 
   <head> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reg.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <form action="/signup.php" method="post"> 
           <img src="https://dwstroy.ru/lessons/les3373/demo/img/men.png" alt="">
            <div class="dinput">
             
            <p><strong>Ваш логин:</strong></p>
            <input type="text" name="login" value="<?php echo @$data['login']; ?>">
            
            <p><strong>Ваш Email:</strong></p>
            <input type="text" name="email" value="<?php echo @$data['email']; ?>">
            
            <p><strong>Ваш пароль:</strong></p>
            <input type="password" name="password" value="<?php echo @$data['password']; ?>">   
                  
            <p><strong>Введите пароль еще раз:</strong></p>
            <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
                   
            <input class="dwinput" type="submit" name="do_signup" value="Зарегистрироваться">
            </div>
        </form>
    </div>
</body>
</html>