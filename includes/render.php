<?php

function view($template, $params=[]) {
    $layout = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'layout.php';
    $viewFile = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $template . '.php';
    extract($params);
    include $layout;
}

function breadCrumbs($breadCrumbs=[]) {
    $html = '<div class="breadcrumbs">';
    $counter = 1;
    foreach ($breadCrumbs as $breadCrumb) {
        $html .= '<a href="' . $breadCrumb['url'] . '" class="breadcrumb">' . $breadCrumb['title'] . '</a>';
        if ($counter < count($breadCrumbs)) {
            $html .= '<div class="arrow">&gt;</div>';
        }
        $counter++;
    }
    $html .= '</div>';

    return $html;
}