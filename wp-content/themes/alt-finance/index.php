<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="./resources/lib/reset.css">
    <link rel="stylesheet" href="./resources/css/main.css"> -->

</head>
<body>
    
    <div id="wrapper">
        <!-- HEADER -->
        <?php get_header(); ?>
        <!-- END HEADER -->

        <!-- NAV -->
        <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container' => null,
            'menu_class' => 'menu'
        )); ?>
        <!-- END NAV -->

        <!-- CONTENT -->
        <secion class="content">
            <div class="container">
                <div class="c-left">
                    <div class="c-main">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, rerum perferendis? Quisquam ut quaerat modi aperiam eveniet, necessitatibus veritatis nam atque eos explicabo minus, beatae, cupiditate natus inventore a dolorum.
                        Consequuntur ipsa animi aperiam! Esse nam, minus enim facere ratione magnam atque quidem? Laudantium eos voluptatem eaque atque? Voluptate pariatur tempora sapiente, deserunt assumenda natus nesciunt consequuntur ducimus aperiam et.
                        In assumenda, autem repudiandae praesentium laudantium animi cumque odio! Nam omnis eos labore sed vitae quo error possimus repellat, voluptates eligendi voluptatem molestiae minima doloremque voluptas pariatur provident tempore similique!
                        Possimus delectus, cupiditate ipsum nam, facere tenetur, provident dicta doloremque sit porro reprehenderit fugiat. Ab consectetur reiciendis explicabo rem amet quisquam ipsa quos. Delectus unde suscipit ipsam architecto impedit amet?
                        Rem dicta ut, laborum quidem repudiandae similique, minima repellendus sit fuga, explicabo dolores fugiat modi consequatur eligendi iure totam nobis accusantium dolor ducimus ipsa labore harum sint ex reprehenderit! Dicta!
                        Distinctio laboriosam quo dolor aliquid autem facere consequuntur odio repudiandae voluptas! Ipsam explicabo mollitia provident, totam quos ipsa, reiciendis eos tempora culpa perspiciatis voluptatum distinctio aut voluptates vero debitis illum.
                        Id ad, facere impedit cupiditate vel aut odit iusto atque neque obcaecati corporis tenetur distinctio accusamus nesciunt ipsa corrupti, aliquid excepturi magnam expedita eius officiis animi hic. Soluta, molestiae voluptas.
                        Adipisci, error quos asperiores, veritatis voluptas recusandae dolorem voluptatibus rem corporis doloribus corrupti maiores. Rerum nam, in harum esse id beatae natus non reprehenderit incidunt quas culpa explicabo, dolorum inventore.
                        Similique eligendi nam vero impedit, atque exercitationem sapiente ipsam, reprehenderit repellat a rem minus fugit fuga quis autem consequuntur mollitia et ab explicabo accusantium? Optio, debitis! Ipsa totam tenetur ipsum.
                        Quas incidunt amet ab corporis hic accusamus vel vitae impedit dolorem? Iusto veniam magnam tempora ad quidem, voluptate ea at consequuntur, nam qui aspernatur. Impedit quo molestiae laborum repudiandae doloribus.
                    </div>
                    
                    <div class="c-news">
                        Три последние новости
                    </div>
                </div>

                <div class="c-right">
                    <p>Список основных продуктов компании</p>
                </div>
            </div>
        </secion>
        <!-- END CONTENT-->

        <!-- FOOTER -->
        <?php get_footer(); ?>
        <!-- END FOOTER -->

    </div>

</body>
</html>