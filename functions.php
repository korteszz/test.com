<?php
function menu_html($current)
{
    $empty = '';
    $classCurrent = ' class="current"';

    $pages = [
        'index' => '<li><a href="index.php"%s>Home</a></li>',
        'about' => '<li><a href="about.php"%s>About Us</a></li>',
        'blog' => '<li><a href="blog.php"%s>Blog</a></li>',
        'gallery' => '<li><a href="gallery.php"%s>Gallery</a></li>',
        'contact' => '<li><a href="contact.php"%s>Contact</a></li>',
        'index_ru' => '<li><a href="index_ru.php"%s>Главная</a></li>',
        'about_ru' => '<li><a href="about_ru.php"%s>О нас</a></li>',
        'blog_ru' => '<li><a href="blog_ru.php"%s>Блог</a></li>',
        'gallery_ru' => '<li><a href="gallery_ru.php"%s>Галерея</a></li>',
        'contact_ru' => '<li><a href="contact_ru.php"%s>Конакты</a></li>'
    ];

    foreach ($pages as $key => $value) {
        //var_dump($key, $current, $key === $current);echo '<br>';
        if ($current === $key) {
            $pages[$key] = sprintf($pages[$key], $classCurrent);
        } else {
            $pages[$key] = sprintf($value, $empty);
        }
    }
    return '<div id="tooplate_menu">
                <ul>' . implode('', $pages) . '</ul>
            </div> <!-- end of tooplate_menu -->';
}