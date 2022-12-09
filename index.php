<?php
$xml = simplexml_load_file("data.xml");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <title>Flowers</title>
</head>
<body>
    <header class="header container" >
            <img class="header__firstimg" src="img/firstimg.png" alt="">
        <div class="block_one">
            <div class="header__items">
                <img class="header__item" src="img/Поиск1.png" alt=""></li>
                <img class="header__item" src="img/Корзинка.png" alt=""></li>
                <div class="header__buttom1">Sign Up</div>
                <div class="header__buttom2">Sign In</div>
            </div>

            <div class="welcome">
                <div class="welcome__title">
                    Kembang
                    Flower Mantap
                </div>
                <div class="welcome__subtitle">
                    Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the 
                    industry's standard dummy text ever since the 1500s
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="information container">

            <div class="information__tops">
                <div class="information__top">
                    <div>
                        <img src="img/Доставка.png" alt="">
                    </div>
                    <div class="information__headline">
                        Fast
                        Delivery
                    </div>
                </div>

                <div class="information__text">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard 
                </div>
            </div>
            <div class="information__tops">
                <div class="information__top">
                    <div>
                        <img src="img/Наушники.png" alt="">
                    </div>
                    <div class="information__headline">
                        Great Customer
                        Service
                    </div>
                </div>
                <div class="information__text">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard 
                </div>
            </div>
            <div class="information__tops">
                <div class="information__top">
                    <div>
                        <img src="img/Росток.png" alt="">
                    </div>
                    <div class="information__headline">
                        Orifinal
                        Plants
                    </div>
                </div>

                <div class="information__text">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard 
                </div>
            </div>
            <div class="information__tops">
                <div class="information__top">
                    <div>
                        <img src="img/Цена.png" alt="">
                    </div>
                    <div class="information__headline">
                        Affordable
                        Price
                    </div>
                </div>

                <div class="information__text">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard 
                </div>
            </div>
        </section>
            <div class="products__name container">
                Featured Plants
            </div>
         

        <div class="plants_gallery container">
            <?php foreach ($xml->plant as $plant) { ?>
                <div class="gallery_item">        
                    <img src="<?php echo $plant->photo ?>" alt="">
                    <p class="gallery_item_name"><?= $plant->name ?></p>
                    <p class="gallery_item_price">$ <?= $plant->price ?></p>
                </div>
            <?php }?>
        </div>


        <section class="buy container">
            <div class="buy__one">
                <div class="buy__name">
                    Buy more plants,
                    it helps you to be relaxed 
                </div>
                <div class="buy__subname">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                    gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et
                    mauris justo. Nulla eu enim non mauris maximus dignissim.
                    Maecenas vitae eros sapien. Quisque pellentesque tempus
                    dignissim.
                </div>
                    <img class="thirdimg" src="img/thirdimg.png" alt="">
            </div>
                <img class="buy__two" src="img/secondimg.png" alt="">
        </section>
        <section>
            <div class="box container">
                
                    <div class="box__left">
                        <div class="box__name">
                            Get your favourites plant on
                            our shop now
                        </div>
                        <li class="box__buttom">Visit Shop</li>
                    </div>
                        <img class="box__img" src="img/fourthimg.png" alt="">
            </div>
        </section>
    </main>
    <footer>
        <section>
            <div class="line container">
            </div>

            <div class="end container">
                <div class="end__text1">
                    <div class="end__textone">
                        Plantku
                    </div>
                    <div class="end__texttwo">
                        Plantku House
                    </div>
                    <div class="end__textthree">
                        Jl. Laksda Adisucipto No.51, Demangan, Kec.
                        Depok, Kota Yogyakarta, Daerah Istimewa
                        Yogyakarta 55282
                    </div>
                </div>
                <div class="end__center">
                    <div class="end__center__group">
                        <div class="end__centerone">
                            Perusahaan
                        </div>
                        <div class="end__centertwo">
                            Tentang Kami
                        </div>
                        <div class="end__centertree">
                            Hubungi Kami
                        </div>
                    </div>
                    <div class="end__center__group">
                        <div class="end__centerone">
                            Produk
                        </div>
                        <div class="end__centertwo">
                            Tanaman
                        </div>
                        <div class="end__centertree">
                            Tanaman Lain
                        </div>
                    </div>
                </div>
                <div class="end__end ">
                    <div class="end__endtext1">
                        Berlangganan Email Kami
                    </div>

                    <div class="end__endtext2">
                        Masukan Alamat Email
                    </div>
                    <div class="end__buttom">Submit</div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>
