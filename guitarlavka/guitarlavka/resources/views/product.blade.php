<!doctype html>

<html>

<head>
    <title>
        GuitarLavka
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>


<body>
    
    <header>
        <div id = "top-header">
            <div class="top-header-element" id="left-top-header">
                Kyiv
            </div>
            <div class="top-header-element" id="center-top-header">
                <a class="socials-logos" href="">
                    <img src="{{ asset('src/socials/inst.svg') }}" alt="">
                </a>
                <a class="socials-logos" href="">
                    <img src="{{ asset('src/socials/telegram.svg') }}" alt="">
                </a>
                <a class="socials-logos" href="">
                    <img src="{{ asset('src/socials/youtube.svg') }}" alt="">
                </a>
                <a class="socials-logos" href="">
                    <img src="{{ asset('src/socials/whatsup.png') }}" alt="">
                </a>

            </div>
            <div class="top-header-element" id="right-top-header">
                +380630215097
            </div>
        </div>

        <div id = "main-header">
            <div class="main-header-element" id="main-header-logo">
				<a href="/">
                	<img src="{{ asset('src/logoPNG.png') }}" alt="">
				</a>
                <span>Головна / Каталог</span>
            </div>

            <div class="main-header-element" id="main-header-nav">
                <div id="nav-menu">
                    <nav>
                        <a  href="/catalog">КАТАЛОГ </a>
                    </nav>
                    <nav>
                        <a  href="">ПОСЛУГИ </a>
                    </nav>
                    <nav>
                        <a  href="">ПРО НАС</a> 
                    </nav>
                    <nav>
                        <a  href="">ДОСТАВКА </a>
                    </nav>
                    <nav>
                        <a  href="">ВІДГУКИ </a>
                    </nav>
                    <nav>
                        <a  href="">НАВЧАННЯ </a>
                    </nav>
                </div>
            </div>

            <div class="main-header-element" id="main-header-right">
                <a  href=""> <img src="{{ asset('src/search.png') }}" alt=""></a>
                <a  href=""> <img src="{{ asset('src/bin.png')}}" alt=""> </a>
                <a  href=""> <img src="{{ asset('src/favorites.png')}}" alt=""> </a>
            </div>
        </div>
    </header>

    <div id="product-card">
        <div id="product-card-container">
            <div class="product-card-section" id="product-card-left">
                <img id="big-picture" src="{{asset($product_content->product_main_img)}}" alt="">
				@foreach ($product_content->additional_images->slice(0, 5) as $key=>$add_image)
                	<img class="small-picture" id="small-picture{{$key+1}}" src="{{asset($add_image->image_path)}}" alt="">
				@endforeach
            </div>

            <div class="product-card-section" id="product-card-right">
                <div id="product-card-title">
                    <h5>
						{{$product_content->product_type}}
                    </h5>
                    <h2>
						{{$product_content->product_name}}
                    </h2>
                </div>
                <div id="product-card-description">
                    <p>
						{{$product_content->product_description}}
                    </p>
                    <p style="color: #A1880A; align-self: flex-end;">
                        Детальніше...
                    </p>
                    <p style="color: #A1880A;">
                        В наявності
                    </p>
                </div>

                <div id="product-card-price">
                    <h2>
						${{$product_content->product_price}}
                    </h2>
                    <div id="product-card-button">
                        <h3>
                            В Кошик
                        </h3>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <div id="product-description">
        <div id="headlines">
            <h3>
                ОПИС
            </h3>
            <h3>
                ХАРАКТЕРИСТИКИ
            </h3>
            <h3>
                ГАРАНТІЯ
            </h3>
            <h3>
                ДОСТАВКА І ОПЛАТА
            </h3>
            <h3>
                ПОВЕРНЕННЯ
            </h3>
        </div>

        <div class="section-info">
            <ul>
				@foreach($product_content->characteristics as $characteristic)
                <li>
					{{$characteristic->characteristic_text}}
                </li>
				@endforeach
            </ul>
        </div>
    </div>

    <div id="packaging">
            <div id="packaging-content">
                <div id="youtube-preview"> 
                    <img src="{{asset('src/youtubepreview.png')}}" alt="">
                </div>
                <div id="packaging-info">
                    <h2>
                        БЕРЕЖНО УПАКОВУЄМО КОЖНИЙ ІНСТУМЕНТ
                    </h2>
                    <ul>
                        <li>
                            Термопакет
                        </li>
                        <li>
                            Чохол
                        </li>
                        <li>
                            3 кулі пухирчастого паперу
                        </li>
                        <li>
                            Картонна коробка
                        </li>
                        <li>
                            Страхуємо вантаж
                        </li>
                        <li>
                            Бережна доставка
                        </li>
                    </ul>
                </div>
            </div>
    </div>

    <div id="popular">
        <div id="popular-container">
            <div class="section-title">
                <h2>
                    Популярні товари
                </h2>
            </div>

            <div id="popular-products">
				@foreach ($products->slice(0, 4) as $product )
                <div class="popular-products-element">
					<a href="/product/{{$product->id}}">
						<img src="{{asset($product->product_main_img)}}" alt="">
					</a>
                    <div class="popular-products-element-text">
                        <span>
                            <h4>
							{{$product->product_type}}
                            </h4>
                            <h2>
							{{$product->product_name}}
                            </h2>
                            <h3>${{$product->product_price}}</h3>
                            
                        </span>
                    </div>
                </div>
				@endforeach
            </div>
        </div>
    </div>

    <footer>
        <div id="footer-container">
            <div id="footer-left">
                <img src={{asset('src/footerLogo.png')}} alt="">
                <span>
                    Ми працюємо по всій Україні,<br>
                    тому можемо зробити онлайн-показ<br>
                    інструменту і доставити його до ваших дверей<br>
                </span>
            </div>
            <div id="footer-right">
                <div class="footer-right-column">
                    <h3>
                        КАТАЛОГ
                    </h3>
                    <div class="footer-right-links">
                        <a href="index.html">
                            Гітарі
                        </a>
                        <a href="">
                            Укулеле
                        </a>
                        <a href="">
                            Аксесуарі
                        </a>
                        <a href="">
                            Струні
                        </a>
                    </div>
                </div>

                <div class="footer-right-column">
                    <h3>
                        СЕРВІС
                    </h3>
                    <div class="footer-right-links">
                        <a href="">
                            Оплата
                        </a>
                        <a href="">
                            Гарантія
                        </a>
                        <a href="">
                            Доставка
                        </a>
                    </div>
                </div>

                <div class="footer-right-column">
                    <h3>
                        ПОСЛУГИ
                    </h3>
                    <div class="footer-right-links">
                        <a href="">
                            Ремонт
                        </a>
                        <a href="">
                            Онлайн підбір
                        </a>
                        <a href="">
                            Навчання
                        </a>
                        <a href="">
                            Комісійка
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>


</html>
