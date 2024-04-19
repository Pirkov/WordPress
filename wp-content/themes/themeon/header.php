<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themeon
 */

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO-TRAINING Pirkov O.V.</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components/buttons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="section, card, card-header">
        <div class="nav">
            <div class="nav1">
                <div class="home">
                    <a class="btn btn-primary" href="<?php echo get_template_directory_uri(); ?>/url('seotraining')" role="button">
                        <img src="<?php the_field('logo'); ?>">
                    </a>
                </div>
                <div class="orders">
                    <a class="btn btn-outline-info" href="<?php echo get_template_directory_uri(); ?>/url('seotraining/?p=87' ) ) ); ?>" role="button">Замовлення</a>

                </div>
            </div>
            <div class="nav2">
                <div class="clients">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('client.client')}}" role="button">Клієнти</a>
                </div>
                <div class="statuses">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('status.status')}}" role="button">Статус замовлення</a>
                </div>
                <div class="payments">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('payment.payment')}}" role="button">Оплата</a>
                </div>
                <div class="cities">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('citie.citie')}}" role="button">Місто</a>
                </div>
                <div class="departments">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('department.department')}}" role="button">Відділення</a>
                </div>
                <div class="search">
                    <a class="btn btn-outline-info" href="{{ <?php echo get_template_directory_uri(); ?>/url('https://novaposhta.ua/') }}" role="button" target="_blank">Стан посилки</a>
                </div>
                <div class="rules">
                    <a class="btn btn-outline-info" href="{{ <?php echo get_template_directory_uri(); ?>/url('https://novaposhta.ua/') }}" role="button" target="_blank">Правила</a>
                </div>
                <div class="roles">
                    <a class="btn btn-outline-info" href="{{<?php echo get_template_directory_uri(); ?>/route('role.role')}}" role="button">Користувач</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>