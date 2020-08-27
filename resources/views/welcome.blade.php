<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
    <header>
        <div class="top-nav container">
            <div class="logo">CSS Grid Example</div>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </div> <!-- end top-nav -->

        <div class="hero container">
            <div class="hero-copy">
                <h1>CSS Grid Example</h1>
                <p>A practical example of using CSS Grid for a typical website layout.</p>
                <div class="hero-buttons">
                    <a href="#" class="button button-white">Button 1</a>
                    <a href="#" class="button button-white">Button 2</a>
                </div>
            </div> <!-- end hero-copy -->

            <div class="hero-image">
                <img src="img/macbook-pro-laravel.png" alt="hero image">
            </div>
        </div> <!-- end hero -->
    </header>


    <section class="featured-section">
        <div class="container">
            <h1 class="text-center">CSS Grid Example</h1>
            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>


            <div class="products text-center">
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
                <div class="product">
                    <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                    <a href="#"><span class="product-name">MacBook Pro</span></a>
                    <div class="product-price">$249.99</div>
                </div>
            </div>

            <div class="text-center button-container">
                <a href="#" class="button">View more products</a>
            </div>
        </div> <!-- end container -->
    </section> <!-- end featured-section -->

    <section class="blog-section">
        <div class="container">
            <div class="text-center">From Our Blog</div>

            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

            <div class="blog-posts">
                <div class="blog-post">
                    <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog Post Title 3</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post">
                    <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog Post Title 3</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post">
                    <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                    <a href="#">
                        <h2 class="blog-title">Blog Post Title 3</h2>
                    </a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
            </div> <!-- end blog-posts -->
        </div> <!-- end container -->
    </section> <!-- end blog-section -->


    <footer class="footer">
        <div class="footer-content container">
            <div class="made-with">Made with <i class="fa fa-heart"></i> by Andre Madarang</div>
            <ul>
                <li>Follow Me:</li>
                <li><a href="#"><i class="fa fa-globe"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div> <!-- end footer-content -->
    </footer>

</body>
</html>