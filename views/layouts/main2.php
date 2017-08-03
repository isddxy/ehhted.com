<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="top-forms">
                    <div class="change" onmousedown="return false" onselectstart="return false">
                        Виды групп мышц
                        <a href="#" class="order order-top">
                            <div class="circle"></div>
                            <div class="circle"></div>
                            <div class="circle"></div>
                        </a>
                    </div>
                    <form class="search" action="#" method="get">
                        <input class="search-input" type="text" name="search" placeholder="Поиск по сайту" >
                        <button class="search-submit" type="submit" name="submit">
                            <img height="20" src="/web/img/icons/search.svg" alt="">
                        </button>
                    </form>
                </div>
                <div class="log-btns">
                    <a href="#" class="btn-default log-in md-trigger" data-modal="modal-1">Вход</a>
                    <a href="#" class="btn-bg btn-medium br-big btn-green md-trigger" data-modal="modal-2">Регистрация</a>
                    <a href="#" class="order">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </a>
                </div>
                <div class="clear"></div>

                <div class="top-forms-menu">
                    <ul>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Грудные мышцы</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Спина</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Плечи</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Руки</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Ноги</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Пресс</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Ягодичные мышцы</p>
                            </li>
                        </a>
                        <a href="#">
                            <li>
                                <img class="top-forms-menu-img" src="/web/img/icons/test2.png">
                                <p>Трапеция</p>
                            </li>
                        </a>
                    </ul>
                </div>

                <div class="top-menu">
                    <a href="/"><img src="/web/img/logotype.svg" class="logotype"></a>
                    <ul>
                        <li><a href="#">Упражнения</a></li>
                        <li><a href="#">Тренировки</a></li>
                        <li><a href="#">Питание</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<?= $content;?>

<div class="md-modal min-model md-effect-7" id="modal-1">
    <div class="md-header">
        <h4>Войти</h4>
        <img class="md-close closer" src="/web/img/icons/close.svg">
    </div>
    <div class="md-content-lightgreen">
        <button class="btn-bg btn-small br-small or-reg md-trigger with-full btn-vk" data-modal="modal-2">
            <img class="vk-logo" src="/web/img/vk-logo.svg">
            Войти через <strong>Вконтакте</strong></button>
        <div class="hr-label"><span class="hr-label__text">или</span></div>
        <form action="" method="post">
            <input class="model-input" type="mail" name="mail" placeholder="Адрес электронной почты">
            <input class="model-input" type="password" name="password" placeholder="Пароль">
            <input class="model-submit" type="submit" name="submit" value="Войти">
            <div class="model-checkbox">
                <input type="checkbox" checked > Запомнить
            </div>
            <a href="#" class="forgot">Забыли пароль?</a>
        </form>
    </div>
</div>

<div class="md-modal min-model md-effect-7" id="modal-2">
    <div class="md-header">
        <h4>Регистрация</h4>
        <img class="md-close closer" src="/web/img/icons/close.svg">
    </div>
    <div class="md-content-lightgreen">
        <button class="btn-bg btn-small br-small or-reg md-trigger with-full btn-vk" data-modal="modal-2">
            <img class="vk-logo" src="/web/img/vk-logo.svg">
            Войти через <strong>Вконтакте</strong></button>
        <div class="hr-label"><span class="hr-label__text">или</span></div>
        <form action="" method="post">
            <input class="model-input input-half" type="text" name="firstname" placeholder="Имя">
            <input class="model-input input-half" type="text" name="lastname" placeholder="Фамилия">
            <input class="model-input" type="mail" name="mail" placeholder="Адрес электронной почты">
            <input class="model-input" type="password" name="password" placeholder="Пароль">
            <input class="model-submit" type="submit" name="submit" value="Зарегистрироваться">
        </form>
        <button class="btn-small or-login md-trigger" data-modal="modal-1">Войти на сайт</button>
        <div class="clear"></div>
    </div>
</div>

<div class="md-modal min-model md-effect-1" id="modal-3">
    <div class="md-header">
        <h4>Когда вы занимались?</h4>
        <img class="md-close closer" src="/web/img/icons/close.svg">
    </div>
    <div class="md-content-lightgreen">
        <p>Выберите дату и время</p>
        <input type="date" min="2016-01-01" max="2018-01-01">
        <input type="time">
        <button class="btn-bgradius btn-small br-big">Выбрать</button>
        <div class="hr-label"><span class="hr-label__text">или</span></div>
        <button class="btn-bg btn-medium br-big with-full btn-green2">Сегодня</button>
        <div class="clear"></div>
    </div>
</div>

<div class="md-overlay"></div>



<script src="/js/scripts.min.js"></script>

<script>
    $('.change').click(function(){
        $('.top-forms-menu').toggle(350); // раскрытие меню в шапке
        $('.order-top').toggleClass('order-active'); //добавялет / удаляет класс эктив в шарики
    });

    $('.or-reg').click(function(){
        $('#modal-1').removeClass('md-show');
    });
    $('.or-login').click(function(){
        $('#modal-2').removeClass('md-show');
    });
</script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
