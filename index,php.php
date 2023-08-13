
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/normalize.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <title>Sample Website</title>
</head>
<body>
    <header>
        <div class="header">
            <!-- ▼このロゴは押下するとトップページに飛ぶロゴ -->
            <h1>
                <a class="TopLogo_Url" href="#">
                    <!-- ▼ロゴの要素 -->
                    <!-- <img src="assets/images/resized_logo.png" alt="黒いロゴ"> -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/resized_logo.png" alt="黒いロゴ">

                    <!-- <img src="assets/images/final_resized_logo.png" alt="メインのロゴ"> -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/final_resized_logo.png" alt="メインのロゴ">

                </a>
            </h1>
            <nav>
                <ul class="header_nav">
                    <li class="header_nav_contant"><a href="#home">Service</a></li>
                    <li class="header_nav_contant"><a href="#about">Blog</a></li>
                    <li class="header_nav_contant"><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            
            <a Class="insta_Logo" href="https://www.instagram.com/atmmbd">
                <!-- <img src="assets/images/modified_image.png" alt="インスタグラムのロゴ"> -->
                <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/modified_image.png" alt="Description">

            </a>

        </div>
    </header>

    <main>
        <div class="main_visual"> 
            <!-- <img class="main_visual_img" src="assets/images/compressed_background_image_latest_2.jpeg" alt="クロミン画像">  -->
            <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/compressed_background_image_latest_2.jpeg" alt="きれいな画像">

        </div>
        <div class="Servis">
            <div class="Service_Content">
                <h2>Service</h2>
                <section class="Service_section">
                    <ul>
                        <li class="Service_Content">
                            <h3>
                                ディレクション
                            </h3>
                            <h4>DIRECTION</h4>
                            <!-- <img src="assets/images/resized_logo.bmp" alt=""> -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/resized_logo.bmp" alt="鉛筆のロゴ">

                            <p>お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。</p>
                        </li>
                        <li class="Service_Content">
                            <h3>
                                デザイン
                            </h3>
                            <h4>DESIGN</h4>
                            <!-- <img src="assets/images/resized_logo_new.bmp" alt=""> -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/resized_logo_new.bmp" alt="電球のロゴ">

                            <p>ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
                        </li>
                        <li class="Service_Content">
                            <h3>
                                コーディング
                            </h3>
                            <h4>CODING</h4>
                            <!-- <img src="assets/images/pc_logo.bmp" alt=""> -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/pc_logo.bmp" alt="パソコンのロゴ">

                            <p>デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <h2></h2>
        
    </main>
    <footer>
        <div class="fotter">
            <nav>
                <ul class="fotter_nav">
                    <li class="fotter_nav_contant"><a href="#home">Service</a></li>
                    <li class="fotter_nav_contant"><a href="#about">Blog</a></li>
                    <li class="fotter_nav_contant"><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</body>
</html>

