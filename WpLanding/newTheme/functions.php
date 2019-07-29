<?php


    add_filter('show_admin_bar', '__return_false'); 
    define('NEWTHEME_THEME_ROOT', get_template_directory_uri());
    define('NEWTHEME_CSS_DIR', NEWTHEME_THEME_ROOT . '/build/css');
    define('NEWTHEME_JS_DIR', NEWTHEME_THEME_ROOT . '/build/js');
    define('NEWTHEME_IMG_DIR', NEWTHEME_THEME_ROOT . '/build/images/');
    define('NEWTHEME_AJAX_DIR', NEWTHEME_THEME_ROOT . '/build/ajax/');
    
    
    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
    function theme_name_scripts() {
        wp_enqueue_style( 'animate', NEWTHEME_CSS_DIR . '/animate.css');
        wp_enqueue_style( 'main', NEWTHEME_CSS_DIR . '/main.css');
        wp_enqueue_style( 'theme', get_stylesheet_uri());


        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.0.min.js');
        wp_enqueue_script( 'jquery');

        wp_enqueue_script( 'slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
        wp_enqueue_script( 'wow', NEWTHEME_JS_DIR . '/wow.min.js');
        wp_enqueue_script( 'textyle', NEWTHEME_JS_DIR . '/textyle.min.js');
        wp_enqueue_script( 'particlesjs', NEWTHEME_JS_DIR . '/particles.min.js');

        wp_enqueue_script( 'main', NEWTHEME_JS_DIR . '/main.js');
    }

    add_action( 'init', 'register_post_types' );
        add_theme_support('post-thumbnails');

        function register_post_types(){

            register_post_type('faq', array(
                'labels' => array(
                    'name'               => 'Вопрос-ответ', // основное название для типа записи
                    'singular_name'      => 'Вопрос', // название для одной записи этого типа
                    'add_new'            => 'Добавить ответ', // для добавления новой записи
                    'add_new_item'       => 'Добавление ответа', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование ответа', // для редактирования типа записи
                    'new_item'           => 'Новое ответ', // текст новой записи
                    'view_item'          => 'Смотреть ответ', // для просмотра записи этого типа.
                    'search_items'       => 'Искать ответ', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'ЧАВО' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title','editor') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );
                
            register_post_type('Team', array(
                'labels' => array(
                    'name'               => 'Team', // основное название для типа записи
                    'singular_name'      => 'Team', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Команда' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title','thumbnail') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            register_post_type('slick', array(
                'labels' => array(
                    'name'               => 'Image', // основное название для типа записи
                    'singular_name'      => 'Slick', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Слайдер' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            register_post_type('portfolio', array(
                'labels' => array(
                    'name'               => 'portfolio', // основное название для типа записи
                    'singular_name'      => 'portfolio', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Портфолио' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title', 'editor') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            register_post_type('BlogPost', array(
                'labels' => array(
                    'name'               => 'BlogPost', // основное название для типа записи
                    'singular_name'      => 'BlogPost', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Блог' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title', 'editor') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            register_post_type('Pricing', array(
                'labels' => array(
                    'name'               => 'price', // основное название для типа записи
                    'singular_name'      => 'Pricing', // название для одной записи этого типа
                    'add_new'            => 'Добавить -', // для добавления новой записи
                    'add_new_item'       => 'Добавление -', // заголовка у вновь создаваемой записи в админ-панели.
                    'edit_item'          => 'Редактирование -', // для редактирования типа записи
                    'new_item'           => 'Новое -', // текст новой записи
                    'view_item'          => 'Смотреть -', // для просмотра записи этого типа.
                    'search_items'       => 'Искать -', // для поиска по этим типам записи
                    'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                    'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                    'menu_name'          => 'Цена' // название меню
                ),
                'public'              => false,
                'show_ui'             => true, // зависит от public
                'menu_icon'           => 'dashicons-welcome-learn-more', 
                'supports'            => array('title') // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
                
            ) );

            register_post_type('Quote', array(
                'labels'             => array(
                    'name'               => 'Цитаты', // Основное название типа записи
                    'singular_name'      => 'Цитата', // отдельное название записи типа Book
                    'add_new'            => 'Добавить новую -',
                    'add_new_item'       => 'Добавить новую -',
                    'edit_item'          => 'Редактировать -',
                    'new_item'           => 'Новая -',
                    'view_item'          => 'Посмотреть -',
                    'search_items'       => 'Найти -',
                    'not_found'          => '- не найдено',
                    'not_found_in_trash' => '- Не найдено',
                    'parent_item_colon'  => '',
                    'menu_name'          => 'Цитаты'
        
                  ),
                'public'             => false,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => true,
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
            ) );

            register_post_type('Mark', array(
                'labels'             => array(
                    'name'               => 'Mark', // Основное название типа записи
                    'singular_name'      => 'Mark', // отдельное название записи типа Book
                    'add_new'            => 'Добавить новую -',
                    'add_new_item'       => 'Добавить новую -',
                    'edit_item'          => 'Редактировать -',
                    'new_item'           => 'Новая -',
                    'view_item'          => 'Посмотреть -',
                    'search_items'       => 'Найти -',
                    'not_found'          => '- не найдено',
                    'not_found_in_trash' => '- Не найдено',
                    'parent_item_colon'  => '',
                    'menu_name'          => 'Mark'
        
                  ),
                'public'             => false,
                'show_ui'            => true,
                'supports'           => array()
            ) );
    }

    $posts = get_posts( array(
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'faq'
    ) );
    
    function getReviews(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'Team'
        );
            $reviews = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $review['name'] = $post->post_title;
                $review['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
                $reviews[] = $review;
            }
        
        return $reviews;
    }

    function getSlick(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'slick'
        );
        $variables = [];
        foreach(get_posts($args) as $post){
            $variable = get_fields($post->ID);
            $variables[] = $variable;
        }
        return $variables;
    }

    function getPortfolio(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'portfolio'
        );
            $portfolios = [];
            foreach(get_posts($args) as $post){
                $portfolio = get_fields($post->ID);
                $portfolio['title'] = $post->post_title;
                $portfolio['job'] = $post->post_content;
                $portfolios[] = $portfolio;
            }
        
        return $portfolios;
    }

    function getBlogPost(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'BlogPost'
        );
            $BlogPosts = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $review['title'] = $post->post_title;
                $review['content'] = $post->post_content;
                $BlogPosts[] = $review;
            }
        
        return $BlogPosts;
    }

    function getPricing(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'Pricing'
        );
            $Pricing = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $review['title'] = $post->post_title;
                $Pricing[] = $review;
            }
        
        return $Pricing;
    }

    function getQuote(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'Quote'
        );
            $reviews = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $review['title'] = $post->post_title;
                $review['content'] = $post->post_content;
                $review['thumbnail'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
                $reviews[] = $review;
            }
        return $reviews;
    }

    function getMark(){
        $args = array(
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'Mark'
        );
            $reviews = [];
            foreach(get_posts($args) as $post){
                $review = get_fields($post->ID);
                $review['title'] = $post->post_title;
                $review['content'] = $post->post_content;
                $review['time'] = human_time_diff(get_the_time('U'), current_time('timestamp')) . ' назад';
                $reviews[] = $review;
            }
        return $reviews;
    }

    // remove tag 'span' from the form
    add_filter('wpcf7_form_elements', function($content) {
        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
        return $content;
    });


    add_filter('style_loader_tag', 'sj_remove_type_attr', 10, 2);
    add_filter('script_loader_tag', 'sj_remove_type_attr', 10, 2);
    function sj_remove_type_attr($buffer) {
        return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );    }
   

    