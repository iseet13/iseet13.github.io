<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мечети мира</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        
         <div class="section1">
                     <div class="spisok">
              <img class="logo1" src="11.png" alt="">
                     </div>
              <div class="solo">
                  <ul id="text">
            <?php if( isset($_SESSION['logged_user'])) : ?>
                  <li><a href="/logout.php">Выйти</a></li>
                  <?php else: ?>  <!--- если не авторизован -->
                  <li><a href="/login.php">Войти</a></li>
                  <?php endif; ?>
                  <li><a href="#">Франшиза</a></li>
                  <li><a href="#">Услуги</a></li>
                  <li><a href="#">О компании</a></li>
                  <li><a href="#">Главное</a></li>
                  </ul>
                  <p>Вы вошли как "<?php echo $_SESSION['logged_user']->login; ?>"!</p>
              </div>
         </div>   
               <div class="section2">
                <h1>The most beautiful mosques of the world</h1>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
                Illum, libero. Possimus labore,<br> 
                hic numquam non voluptate esse enim iusto vitae.</p>
                
                <a class="knopka" href="">READ MORE</a>
               </div>
            
    <div class="about">
          <h1>About Us</h1> 
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
          Iste officia consequuntur aliquam quidem, excepturi labore hic, modi provident, rem nam aspernatur, sit voluptate. <br>
          Neque, numquam magni incidunt voluptatum iste. Laboriosam harum, enim nihil architecto neque!</p>
        
           <img class="idea" src="https://images.vexels.com/media/users/3/128092/isolated/preview/b93c119029c78b0106e34486e9c70f26-idea-hand-drawn-icon-by-vexels.png" alt="">
    </div> 
        
           <div class="section3">
               <h1>Professional skils</h1>
               <!-- Put this script tag to the <head> of your page -->
               <script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>
               <!-- Put this div tag to the place, where the Poll block will be -->
               <iframe name="fXDf86e5" frameborder="0" src="https://vk.com/al_widget_poll.php?app=0&amp;width=100%25&amp;_ver=1&amp;poll_id=307851329_e8ca65011a5b880d24&amp;url=file%3A%2F%2F%2FC%3A%2FUsers%2Fadmin%2FDesktop%2F%25D0%25BC%25D0%25BE%25D0%25B9%2520%25D1%2581%25D0%25B0%25D0%25B9%25D1%2582%2Findex.html&amp;title=start&amp;description=&amp;startWidth=648&amp;referrer=&amp;16677da7a72" padding-left="30px" width="300px" height="144" scrolling="no" id="vkwidget1" style="overflow: hidden; height: 366px;"></iframe></div>
               <script type="text/javascript">
               VK.Widgets.Poll("vk_poll", {}, "307851329_e8ca65011a5b880d24");
               </script>
               
          <div class="section4">
             <div class="masjid1">
              <img src="kisspng-computer-icons-mosque-islam-building-mosque-5abf86c411bf23.1835864015225013160727.png" alt="">
              <h3>348 <br>
               mosques</h3>
              </div>
              <div class="masjid2">
                  <img src="https://cdn.onlinewebfonts.com/svg/img_469542.png" alt="">
                  <h3>212 <br>
                  panoramas</h3>
              </div><div class="masjid3">
                  <img src="https://png.icons8.com/ios-glyphs/1600/camera.png" alt="">
                  <h3>2457 <br>
                  photos</h3>
              </div>
              <div class="masjid4">
                  <img src="https://openclipart.org/image/2400px/svg_to_png/282302/1498734286.png" alt="">
                  <h3>201 <br>
                  reviews</h3>
              </div>
              </div> 
     <div class="section5">
        <div class="photo1 hover">
        <a href="#">
        <img src="https://artwalls.com.ua/image/cache/catalog/import_yml/354/892/111/505148527_w640_h640_cid1888409_pid354892111-72f007f1-1000x1000.jpg" alt="">
        </a>
         </div>
         <div class="photo1 hover">
         <a href="#">
             <img src="https://hdwallpaperup.com/wp-content/uploads/2015/05/Mosque-Islamic-Wallpaper-HD-1024x1024.jpg" alt="">
         </a>
         </div>
         <div class="phoro3 hover">
            <a href="#">
             <img src="http://bymosque.ru/wp-content/uploads/2017/10/D_qeCoWq_M.jpg" alt="">
             </a>
         </div>
         <div class="phoro4 hover">
            <a href="#">
             <img src="http://www.kfntravelguide.com/wp-content/uploads/2017/05/Majestic-Blue-Mosque-in-Turkey-1200x1200.jpg" alt="">
             </a>
         </div>
         <div class="phoro5 hover">
            <a href="#">
             <img src="https://hdqwalls.com/download/mosque-ap-2048x2048.jpg" alt="">
             </a>
         </div>
         <div class="phoro6 hover">
            <a href="#">
             <img src="https://pbs.twimg.com/media/Dh9DNgRXUAA2A5G.jpg" alt="">
             </a>
         </div>
         <div class="phoro7 hover">
            <a href="#">
             <img src="http://news.ufl.edu/media/newsufledu/images/2017/09/Hajj_09-01-17.jpg" alt="">
             </a>
         </div>
         <div class="phoro8 hover">
            <a href="#">
             <img src="http://img.25pp.com/uploadfile/soft/images/2015/0528/20150528031635385.jpg" alt="">
             </a>
         </div>
     </div>
          <div class="section6">
              <h2>LOAD MOVE WORK</h2>
          </div>
             <div class="section7">
                <h1>ONE WORK PROCESS</h1>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias quo quod debitis ea vitae labore quae.<br> Numquam sunt omnis maxime quas iure vel obcaecati, perferendis.</P>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/tPYoS6yHiyQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
             
        <div class="section8">
            <div class="logo1">
                <img src="http://pngimg.com/uploads/brilliant/brilliant_PNG45.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Exercitationem, repellat, voluptatibus!</p>
            </div>
            <logo2>
                <img src="https://banner2.kisspng.com/20180406/vee/kisspng-hipster-symbol-computer-icons-clip-art-bow-and-arrow-5ac7d0f3713790.6262452315230445954638.jpg" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Elit periam, deserunt.</p>
            </logo2>
            
        </div>
              
              
              
              
              
              
          </div>     
               
               
               
               
               
               
               
               
               
               
</body>
</html>