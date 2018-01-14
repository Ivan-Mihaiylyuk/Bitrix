<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?
    $APPLICATION->ShowHead();

    use Bitrix\Main\Page\Asset;
    // CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/media.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/css/main.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/fonts.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/skins/tomato.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/libs/animate/animate.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/libs/magnific-popup/magnific-popup.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/libs/linea/styles.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/libs/font-awesome/css/font-awesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/libs/Bootstrap/bootstrap-grid.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/source/jquery.fancybox.css');
    // JS
    CJSCore::Init(array("jquery"));
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js');


    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/jquery/jquery-2.1.3.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/parallax/parallax.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/magnific-popup/jquery.magnific-popup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/mixitup/mixitup.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/scroll2id/PageScroll2id.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/waypoints/waypoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/animate/animate-css.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/libs/jqBootstrapValidation/jqBootstrapValidation.js');
     Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/common.js');




    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/plugins//fancybox/source/jquery.fancybox.pack.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery.sudoSlider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/myscripts.js');
    //STRING
    Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/favicon.ico' />");    
     Asset::getInstance()->addString("<title>Web-разработка</title>");      
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
   Asset::getInstance()->addString("<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>");
       //Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext' rel='stylesheet'>");
    ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"WebSite","@id":"#website","url":"http://SITE.ru/","name":"Название - Описание","potentialAction":{"@type":"SearchAction","target":"http://SITE.ru/search/index.php","query-input":"required name=search_term_string"}}

    </script>
    <script type='application/ld+json'>
        {"@context":"http://schema.org","@type":"Organization","url":"http://SITE.ru/","sameAs":[],"@id":"#organization","name":"Домен - Описание","logo":"http://SITE.ru/полный_путь_к_логотипу.png"}

    </script>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>


<div class="loader">
    <div class="loader_inner"></div>
</div>
    <header class="main_head main_color_bg" data-parallax="scroll" data-image-src="<?=SITE_TEMPLATE_PATH?>/img/bg.jpg" data-z-index="1">
<div class="container">
    <div class="row">

        <button class="toggle_menu">
  <span class="sandwich">
  <span class="sw-topper"></span>
  <span class="sw-bottom"></span>
  <span class="sw-footer"></span>
  </span>
        </button>
        <nav class="top_menu">
            <ul>
                <li><a href="#about">Обо мне</a></li>
                <li><a href="#resume">Резюме</a></li>
                <li><a href="#portfolio">Каталог</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </nav>
   </div>
    </div>
<div class="top_wrapper">
    <div class="top_descr">
    <div class="top_centered">
            <div class="top_text">
            <h1>Иван Михайлюк</h1>
            <p>Web-разработка</p>
        </div>
        </div>
    </div>
  </div>
 </header>


<section id="about" class="s_about bg_light">
    <div class="section_header">
        <h2>Обо мне</h2>
<div class="s_descr_wrap">
            <div class="s_descr">Познакомимся ближе</div>
    </div>
            </div>
            <div class="section_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-push-4 animation_1">
                            <h3>Фото</h3>
                            <div class="person">
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/photos.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?><br>
                                <a href="/img/1.jpg" class="popup"><img src="/img/1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-md-pull-4 animation_2">
                            <h3>Немного о себе</h3>
                            <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "file",
		"PATH" => "/include/main.php",
		"EDIT_TEMPLATE" => ""
	),
	false
);?><br>
                        </div>
                        <div class="col-md-4 animation_3 personal_last_block">
                            <h3>Персолнальная информация</h3>
                            <div class="persoal_header">
 <?$APPLICATION->IncludeComponent(
    "bitrix:main.include", 
    ".default", 
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/info.php",
        "EDIT_TEMPLATE" => ""
    ),
    false
);?>
                            </div>
                                <div class="social_wrap">
                                    <?$APPLICATION->IncludeComponent(
    "bitrix:main.include", 
    ".default", 
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/social.php",
        "EDIT_TEMPLATE" => ""
    ),
    false
);?>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
</section>
<section id="resume" class="s_resume">
    <div class="section_header">
        <h2>Резюме</h2>
<div class="s_descr_wrap">
            <div class="s_descr">Мои знания и достижения</div>          
        </div>
            <div class="section_content">
                <div class="container">
                    <div class="row">
                        <div class="resume_container">
                           <div class="col-md-6 col-sm-6 left">
                                <h3>Работа</h3>
                                <div class="resume_icon"><i class="icon-basic-case"></i></div>
                                <div class="resume_item">
                                    <div class="year">2017-2018</div>
                                    <div class="resume_description">ООО "Комплит"<strong>Инженер-программист</strong></div>
                                    <p>Комплексные решения по автоматизации технологических и бизнес-процессов предприятий</p>
                                </div>
                                <div class="resume_item">
                                    <div class="year">2016-2017</div>
                                    <div class="resume_description">Администрация города<strong>Программист</strong></div>
                                    <p>Поддержка и разработка сайтов государственных учреждений на Bitrix CMS</p>
                                </div>
                                <div class="resume_item">
                                    <div class="year">2013-2016</div>
                                    <div class="resume_description">ООО "Е-лайт" телеком<strong>Инженер-программист</strong></div>
                        <p>Разработка серверной инфраструктуры и вычислительной сети.</p>
                                </div>
                            </div>
                <div class="col-md-6 col-sm-6 right">
                    <h3>Учеба</h3>
                    <div class="resume_icon"><i class="icon-basic-book-pen"></i></div>
                    <div class="resume_item">
                        <div class="year">2017-2018</div>
                        <div class="resume_description">IT-портал GeekBrains<strong></strong></div>
                        <p>Фундаментальные основы программирования, термины и понятия. Разработка алгоритма.</p>
                    </div>
                    <div class="resume_item">
                        <div class="year">2016-2017</div>
                        <div class="resume_description">Администрация города<strong></strong></div>
                        <p>Основы «Lotes Notes», 1С Битрикс, государственные требования к сайтам ГОСТ 34.602-89.</p>
                    </div>
                    <div class="resume_item">
                        <div class="year">2013-2016</div>
                        <div class="resume_description">ООО "Е-лайт" телеком<strong></strong></div>
                        <p>Тренинги и кружки качества в области ИТ-коммуникаций и программирования.</p>
                    </div>
                </div>
            </div>
    </div>
                    </div>
                </div>
            </div>
</section>

<section id="portfolio" class="s_portfolio bg_dark">
    <div class="section_header">
        <h2>Каталог</h2>
<div class="s_descr_wrap">
            <div class="s_descr">Веб-дизайн сайтов</div>
    </div>
            </div>
            <div class="section_content">
                <div class="container">
                    <div class="row">
                        <div class="filter_div controls">
                    <ul>
                        <li class="filter active" data-filter="all">Все сайты</li>
                        <li class="filter" data-filter=".category-1">Строительство</li>
                        <li class="filter" data-filter=".category-2">Интерьер</li>
                        <li class="filter" data-filter=".category-3">Туризм</li>
                    </ul>
                </div>
                <div id="portfolio_grid">
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/1.jpg" alt="ALT"/>
                          <div class="port_item_cont">
                            <h3>"Новгородка"</h3>
                            <p>Баня из бруса</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>Баня из бруса "Новгородка"</h3>
                                    <p>Проект бани с душевой «Новгородка» – отличный вариант для обустройства комфортной жизни в частном доме или организации отдыха в банном комплексе, на турбазе. </p>
                                    <img src="img/portfolio-images/1.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-1">
                        <img src="img/portfolio-images/2.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Экодом"</h3>
                            <p>Строительство деревянных домов.</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Экодом"</h3>
                                    <p>Компания ЭкоДом, занимается строительством домов, бань, беседок ручной рубки из экологически чистого леса.</p>
                                    <img src="img/portfolio-images/2.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-2">
                        <img src="img/portfolio-images/3.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Living easy"</h3>
                            <p>Дизайн-проект по стандартам Британской высшей школы дизайна.</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Living easy"</h3>
                                    <p>Разработка дизайн-проектов и декорирование частных и общественных интерьеров. </p>
                                    <img src="img/portfolio-images/3.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-2">
                        <img src="img/portfolio-images/5.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Ривьера Каспия"</h3>
                            <p>Система "Умный дом" в каждой квартире.</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Ривьера Каспия"</h3>
                                    <p>Система «Умный Дом» в каждой квартире.</p>
                                    <img src="img/portfolio-images/5.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-2">
                        <img src="img/portfolio-images/7.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Studio DB"</h3>
                            <p>Студия дизайна интерьеров.</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Studio DB"</h3>
                                    <p>Дизайн проект квартир, дизайн интерьера в 3d</p>
                                    <img src="img/portfolio-images/7.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>      
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-3">
                        <img src="img/portfolio-images/8.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Сибирь Тревел"</h3>
                            <p>Уникальная экскурсия по самым необычным природным объектам Сибири.</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Сибирь Тревел"</h3>
                                    <p>Уникальная природа Сибири. Чистый воздух и нетронутый лес. Экскурсия на Бердские скалы и Экскурсия к Беловскому водопаду в одном маршруте. За один день Вы сможете увидеть и то и другое одновременно.  </p>
                                    <img src="img/portfolio-images/8.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>                              
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-3">
                        <img src="img/portfolio-images/4.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"Айда туда!"</h3>
                            <p>Интернет-портал про туризм</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"Айда туда!"</h3>
                                    <p>Отдых, отпуск, полезные советы туристов, путешествия, туризм, туры...</p>
                                    <img src="img/portfolio-images/4.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item category-3">
                        <img src="img/portfolio-images/6.jpg" alt="Alt" />
                        <div class="port_item_cont">
                            <h3>"PhuKetwed"</h3>
                            <p>Свадьба на Пхукете</p>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3>"PhuKetwed"</h3>
                                    <p>Phuketwed – это Человек, который занимается организацией свадеб в Тайланде.</p>
                                    <img src="img/portfolio-images/6.jpg" alt="Alt" />
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>

<section id="contacts" class="s_contacts bg_light">
    <div class="section_header">
        <h2>Контакты</h2>
<div class="s_descr_wrap">
            <div class="s_descr">Оставьте ваши сообщения</div>
    </div>
            </div>
            <div class="section_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="contact_box">
                                <div class="contacts_icon icon-basic-geolocalize-05"></div>
                                <h3>Адрес</h3>
                                <p>г. Санкт-Петербург, м. Дыбенко</p>
                                <div class="contact_box">
                                <div class="contacts_icon icon-basic-smartphone"></div>
                                <h3>Телефон</h3>
                                <p>+7 999 239 0777</p>
                            </div>
                            <div class="contact_box">
                                <div class="contacts_icon icon-basic-webpage-txt"></div>
                                <h3>Веб-сайт</h3>
                                <p><a href="//puteshestvie.ru" target="blank">webdesign</a></p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <form action="http://formspree.io/abc9987@mail.ru" class="main_form" novalidate target="_blank" method="post">
                        <label class="form-group">
                            <span class="color_element">*</span> Ваше имя:
                            <input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Ваш E-mail:
                            <input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
                            <span class="help-block text-danger"></span>
                        </label>
                        <label class="form-group">
                            <span class="color_element">*</span> Ваше сообщение:
                            <textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
                            <span class="help-block text-danger"></span>
                        </label>
                        <button>Отправить</button>
                    </form>
                </div>
        </div>
    </div>
</section>
