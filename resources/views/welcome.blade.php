<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRINDER COFFEE SHOP PROJECT!</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
<body>
    <header>
        <!-- i try to implement sal.js but i it mess up my css. but it still working
    <div style="color : red;" data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-back" >
        <h1>HAI!</h1>
    </div>
    <div style="color : blue;" data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-back" >
        <h1>HAI!</h1>
    </div>
    <div style="color : silver;" data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-back" >
        <h1>HAI!</h1>
    </div>
    <div style="color : gold;" data-sal="flip-up" data-sal-delay="1000" data-sal-easing="ease-out-back" >
        <h1>HAI!</h1>
    </div>
    -->
        <div class="container">
            <nav class="nav">
                <div class="nav__logo">
                    <img src="/images/Icon/logo.svg" alt="logo">
                </div>
                <div class="nav__list">
                    <ul>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#menu">MENU</a></li>
                        <li><a href="#">MOODS</a></li>
                        <li><a href="#blog">BLOG</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#"><i class="bi bi-search"></i></a></li>
                    </ul>
                </div>
            </nav>
            <h1 class="nav__headline">Life begins after Coffee.</h1>
            <a href="#menu" class="nav__button">VIEW MENU</a>
        </div>
    </header>
    <section id="menu">
        <div class="container">
        <article class="menu">
            <div class="menu__info">
                <h2>What whould you like to have?</h2>
                <p>Coffee plunger pot sweet barista, grounds acerbic 
                coffee instant crema cream in half and half. Spoon lungo
                variety, as, siphon, ristretto, iced brewed and acerbic 
                affogato grinder</p>
            </div>
            <div class="menu__gallery">
                <?php
                    $file = "menu.json";
                    $anggota = file_get_contents($file);
                    $data = json_decode($anggota, true);
                    for($x=0; $x<sizeof($data);$x++){                  
                        echo " <div class='menu__gallery__box'>
                        <img src='/images/Home/Gallery ".($x+1).".jpg' alt=''>
                        <p>".$data[$x]["menu"]."</p>
                    </div>";
                    }
                ?>
            </div>
        </article>
        <article id="contact">
            <div class="contact">
            <h2>Extraction instant that variety white robusta strong</h2>
                <p>Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream 
                    in half and half. Spoon lungo variety, as, siphon, ristretto, iced brewed 
                    and acerbic affogato grinder. Mazagran café au lait wings spoon, 
                    percolator milk latte dark strong. Whipped, filter latte, filter 
                    aromatic grounds doppio caramelization half and half.</p>
                    <a href="#info" class="contact__button">CONTACT US</a>
            </div>
        </article>
        </div>
    </section>
    <section id="benefit">
        <article class="benefit">
            <h3>Health Benefits of Coffee</h3>
            <div class="benefit__gallery">
                <div class="benefit__gallery__box">
                    <div class="benefit__gallery__box--one">
                        <img src="/images/Icon/battery-full.svg" alt="battery">
                    </div>
                    <p>BOOST ENERGY LEVEL</p>
                </div>
                <div class="benefit__gallery__box">
                    <div class="benefit__gallery__box--second">
                        <img src="/images/Icon/sun.svg" alt="sun">
                    </div>
                    <p>REDUCE DEPRESSION</p>
                </div>
                <div class="benefit__gallery__box">
                    <div class="benefit__gallery__box--three">
                        <img src="/images/Icon/weight.svg" alt="wight">
                    </div>
                    <p>AID IN WEIGHT LOSS</p>
                </div>
            </div>
        </article>
    </section>
    <section id="blog">
        <div class="container">
            <div class="blog">
                <div class="blog__image">
                    <img src="/images/Home/blog 1.jpg" alt="blog">
                </div>
                <div class="blog__data">
                    <h5>BLOG</h5>
                    <h3>Qui espresso, grounds to go</h3>
                    <p class="blog__data__date">December 12, 2019 | Espresso</p>
                    <p>Skinny caffeine aged variety filter saucer redeye, sugar
                        sit steamed eu extraction organic. Beans, crema half
                        and half fair trade carajillo in a variety dripper doppio
                        pumpkin spice cup lungo, doppio, est trifecta breve and,
                        rich, extraction robusta a eu instant. Body sugar
                        steamed, aftertaste, decaffeinated coffee fair trade sit,
                        white shop fair trade galão, dark crema breve
                        frappuccino iced strong siphon trifecta in a at viennese.
                    </p>
                    <p><a href="#">READ MORE <i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
        </div> 
    </section>
    <footer id="info">
        <div class="container">
            <div class="footer">
                <div class="footer__logo">
                    <img src="/images/Icon/logo.svg" alt="">
                </div>
                <div class="footer__socialmedia">
                    <p>2800 S White Mountain Rd | Show Low AZ 85901
                    <br>(928) 537-1425 | info@grinder-coffee.com
                    <br><i class="bi bi-instagram"></i> <i class="bi bi-facebook"></i>
                    </p>
                </div>
                <div class="footer__newsletter">
                    <p>NEWSLETTER</p>
                    <input type="text" placeholder="YOUR EMAIL ADDRESS"><input type="button" value="SUBSCRIBE" class="subscribe">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>