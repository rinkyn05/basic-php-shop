<?php
// index.php
include('config/config.php');
$active_page = 'inicio'; // Define la página activa
include('includes/header.php');
?>

<!-- Contenido principal de la página de inicio -->
<div class="container">
    <!-- Sección de imágenes destacadas -->
    <section class="featured-images">
        <div class="main-image">
            <img src="images/main-image.jpg" alt="Imagen Principal">
        </div>
        <div class="side-images">
            <img src="images/side-image1.jpg" alt="Imagen Lateral 1">
            <img src="images/side-image2.jpg" alt="Imagen Lateral 2">
        </div>
    </section>

    <!-- Sección de banners -->
    <section class="banners">
        <div class="banner">
            <img src="images/banner1.jpg" alt="Banner 1">
        </div>
        <div class="banner">
            <img src="images/banner2.jpg" alt="Banner 2">
        </div>
        <div class="banner">
            <img src="images/banner3.jpg" alt="Banner 3">
        </div>
    </section>

    <!-- Sección de productos -->
    <section class="products">
        <?php
        // Supongamos que tienes una consulta a la base de datos para obtener los productos
        // Aquí hay un ejemplo de cómo podría ser la estructura de los productos
        $products = [
            [
                'image' => 'images/product1.jpg',
                'name' => 'Producto 1',
                'price' => '\$10.99',
            ],
            [
                'image' => 'images/product2.jpg',
                'name' => 'Producto 2',
                'price' => '\$15.99',
            ],
            [
                'image' => 'images/product2.jpg',
                'name' => 'Producto 2',
                'price' => '\$20.99',
            ],
            // Añade más productos según sea necesario
        ];
        ?>

        <?php foreach ($products as $product): ?>
            <div class="product">
                <div class="product-image">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                </div>
                <div class="product-name">
                    <?php echo $product['name']; ?>
                </div>
                <div class="product-price">
                    <?php echo $product['price']; ?>
                </div>
                <div class="product-buttons">
                    <button class="btn-details">
                        <i class="fas fa-info-circle"></i> Ver detalles
                    </button>
                    <button class="btn-cart">
                        <i class="fas fa-shopping-cart"></i> Agregar al carrito
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>

<?php
include('includes/footer.php');
?>

<!-- CSS para el diseño responsive -->
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .featured-images {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .main-image {
        width: 60%;
    }

    .main-image img {
        width: 100%;
        height: auto;
    }

    .side-images {
        width: 35%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .side-images img {
        width: 100%;
        height: auto;
    }

    .banners {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .banner {
        width: 32%;
    }

    .banner img {
        width: 100%;
        height: auto;
    }

    .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .product {
        width: 32%;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        padding: 10px;
        box-sizing: border-box;
    }

    .product-image img {
        width: 100%;
        height: auto;
    }

    .product-name {
        font-size: 1.2em;
        margin: 10px 0;
    }

    .product-price {
        font-size: 1.1em;
        color: #f60;
        margin-bottom: 10px;
    }

    .product-buttons button {
        margin-right: 10px;
        padding: 8px 12px;
        background-color: #28a745;
        color: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
    }

    .product-buttons button i {
        margin-right: 5px;
    }

    .product-buttons .btn-cart {
        background-color: #007bff;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .featured-images, .banners {
            flex-direction: column;
        }

        .main-image, .side-images, .banner {
            width: 100%;
            margin-bottom: 10px;
        }

        .product {
            width: 48%;
        }
    }

    @media (max-width: 480px) {
        .product {
            width: 100%;
        }
    }
</style>