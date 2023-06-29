<!doctype html>

<html>

<head>
    <title>
        GuitarLavka
    </title>

    <meta charset="UTF-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/comon.css">
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


    <div id="catalog">
        <div id="catalog-container">
            <div class="catalog-element" id="catalog-left">
                <div id="catalog-left-titles">
                    <h2>
                        Каталог
                    </h2>
                    <h2 style="color: #EA8305">
                        Фільтри
                    </h2>
                </div>

                <div class="catalog-left-types">
                    <div class="catalog-left-types-element">
                        <div class="catalog-left-types-element-title">
                            <h3>
                                Гітари
                            </h3>
                            <img src="src/arrow.png" alt="">
                        </div>

                        <div class="catalog-left-types-element-subelements">
                            <h4>
                                Акустичні
                            </h4>
                            <h4>
                                Електроакустичні гітари
                            </h4>
                            <h4>
                                Трансакустичні гітарі
                            </h4>
                            <h4>
                                Електрогітарі
                            </h4>
                            <h4>
                                Класичні гітарі
                            </h4>
                        </div>
                    </div>

                    <div class="catalog-left-types-element">
                        <div class="catalog-left-types-element-title">
                            <h3>
                                УКУЛЕЛЕ
                            </h3>
                            <img src="src/arrow.png" alt="">
                        </div>

                        <div class="catalog-left-types-element-subelements">
                            <h4>
                                Акустичні
                            </h4>
                            <h4>
                                Електроакустичні гітари
                            </h4>
                            <h4>
                                Трансакустичні гітарі
                            </h4>
                            <h4>
                                Електрогітарі
                            </h4>
                            <h4>
                                Класичні гітарі
                            </h4>
                        </div>
                    </div>
                </div>

                <div id="mobile-filter-button">
                    Фільтри
                </div>
            </div>

            <div class="catalog-element" id="catalog-right">
                <div id="catalog-right-top-bar">
                    <div class="catalog-right-top-bar-element">
                        <span>155 товарів</span>
                    </div>
                    <div class="catalog-right-top-bar-element">
                        <span>В наявності</span>
                    </div>
                    <div class="catalog-right-top-bar-element">
                        <span>Сортування</span>
                    </div>
                    <div class="catalog-right-top-bar-element">
                        <span>Показувати по</span>
                    </div>
                </div>

                <div id="catalog-items-container">
					@foreach ($products->slice(($page-1)*5, $page*5) as $product)
                    <div class="catalog-item">
                        <div class="catalog-item-photo">
                            <a href="/product/{{$product->id}}"><img src="{{asset($product->product_main_img)}}" alt=""></a>
                        </div>
                        <div class="catalog-item-info">
                            <div class="catalog-item-info-text">
                                <div class="catalog-item-info-text-left">
                                    <h5>
                                        {{$product->product_type}}
                                    </h5>
                                    <h2>
										{{$product->product_name}}
                                    </h2>

                                    <div class="catalog-item-info-text-left-price">
                                        <h3>
										${{$product->product_price}}
                                        </h3>
                                    </div>
                                </div>
                                <div class="catalog-item-info-text-right">
                                    <img src="src/favorites.png" alt="">
                                </div>
                            </div>

                            <div class="catalog-item-info-photos">
								@foreach ($product->additional_images->slice(0, 3) as $add_image)
									<img src="{{asset($add_image->image_path)}}" alt="">
								@endforeach
                            </div>

                            <div class = "catalog-item-button">
                                <span>
                                    ПЕРЕЙТИ ДО КОШИКУ
                                </span>
                            </div>
                        </div>
                    </div>
					@endforeach
                </div>
            </div>
        </div>

		<!-- <div id="catalogue-filters">
            <form method="get">
                <button type="submit" id="submit_filters">Застосувати фільтри</button>
                <div id="id_categories">
					<div>
						<label for="id_categories_0"><input type="checkbox" name="categories" value="1" id="id_categories_0" checked="">
						гітара</label>
					</div>
					<div>
						<label for="id_categories_1"><input type="checkbox" name="categories" value="2" id="id_categories_1" checked="">
						укулеле</label>
					</div>
					<div>
						<label for="id_categories_2"><input type="checkbox" name="categories" value="3" id="id_categories_2" checked="">
							Струни</label>
					</div>
					<div>
						<label for="id_categories_3"><input type="checkbox" name="categories" value="4" id="id_categories_3">
								World of tanks</label>

					</div>
				</div>
            </form>
        </div> -->

        <div id="catalog-page-selector">
            <h4>
                Перша
            </h4>
            <div id="catalog-pages">
                <img src="src/arrow.png" alt="" style="transform: rotate(180deg);">
				@for($i = 1; $i < ($products->count() / 5) + 1; $i++)
                <a href="?page={{$i}}">
                    {{$i}}
                </a>
				@endfor
                <img src="src/arrow.png" alt="">
            </div>
            
            <h4>
                Остання
            </h4>
        </div>
    </div>

    <div id="description">
        <p>
            Хороша акустична гітара – правильний шлях до правильного сприйняття нот, отже вона здатна прискорити процес навчання гри музичному інструменті. Компанія Guitar Lavka пропонує купити акустичну гітару з доставкою від провідних виробників Cort,
            Enya та Sigma Guitars.
        </p>
        <p>Шкірна акустична гітара, ціна на яку менше 5000 гривень (дешеві моделі), часто спотворюють якість звуку при грі, що ускладнює навчання, проте це не означає, що неможливо знайти недорогу гітару в інтернет-магазині Guitar Lavka. В акталозі є базова акустика (бюджетні моделі) вартістю до 10000 гривень. Такі моделі позбавлені додаткового лиску, але найголовніше – вони не спотворюють звук і здатні правильно навчити слухати ритм, ноти та такти під час навчання.</p>
        <a href="">
            <p>
                Детальніше...
            </p>
        </a>
    </div>
	<footer>
        <div id="footer-container">
            <div id="footer-left">
                <img src={{ asset('src/footerLogo.png') }} alt="">
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