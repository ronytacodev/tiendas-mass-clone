<?php include("template/header.php") ?>

<section class="catalog">
    <div class="container-info">
        <div class="group-catalog-text">
            <h1 class="catalog-title">
                ¡Revisa el NUEVO
                <br>
                <span>CATÁLOGO</span>
                !
            </h1>
            <p class="catalog-text">Aquí encontrarás los productos que tu familia necesita ¡con los mejores precios!</p>
            <a href="catalog.php" class="btn-catalog"><span class="btn-content">Ver Catálogo</span></a>
        </div>
        <div class="products">
            <img src="images/catalog-products.png" alt="catalog-products">
        </div>
    </div>
</section>

<section class="banner-two">
    <div class="texto">
        <div>
            <h3>¡MIRA MIS PRECIOS!</h3>
            <p>Caser@, yo tengo siempre los mejores precios, y además, cerquita a tu hogar.</p>
        </div>
        <div>
            <p>¡No te pierdas los mejores precios del barrio aquí!</p>
        </div>
        <button>QUIERO VER</button>
    </div>
    <div class="image">
        <img src="images/banner-two.png" alt="">
    </div>
</section>

<section id="tiendaMass" class="tienda-mass">
    <div class="group-text-tienda">
        <h3> Tiendas Mass</h3>
        <p>Nuestro propósito es ser la cadena con mayor cantidad de puntos de venta, para que todos los peruanos encuentren los productos de primera necesidad
            <strong>cerca a su hogar</strong>
            y a los <strong>mejores precios.</strong>
        </p>
    </div>
    <div class="slider-photos">
        <div class="show-store">
            <img src="images/store-exterior.jpg" alt="store-exterior" style="width: 100%;">
        </div>
        <div class="show-store">
            <img src="images/store-interior1.jpg" alt="store-interior1" style="width: 100%;">
        </div>
        <div class="show-store">
            <img src="images/store-interior2.jpg" alt="store-interior2" style="width: 100%;">
        </div>
        <div class="show-store">
            <img src="images/store-interior3.jpg" alt="store-interior3" style="width: 100%;">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

        <div class="row">
            <div class="column">
                <img src="images/store-exterior.jpg" alt="store-exterior" onclick="currentSlide(1)">
            </div>
            <div class="column">
                <img src="images/store-interior1.jpg" alt="store-interior1" onclick="currentSlide(2)">
            </div>
            <div class="column">
                <img src="images/store-interior2.jpg" alt="store-interior2" onclick="currentSlide(3)">
            </div>
            <!-- <div class="column">
                <img src="images/store-interior3.jpg" alt="store-interior3" onclick="currentSlide(4)">
            </div> -->
        </div>
    </div>
</section>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("show-store");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }
</script>

<?php include("template/footer.php") ?>