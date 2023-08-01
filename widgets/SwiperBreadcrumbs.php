<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

class SwiperBreadcrumbs extends Widget
{
    public array $links = [];

    public function run()
    {
        $params = [
            'links' => $this->links,
            'itemTemplate' => "<li class='breadcrumb-item swiper-slide' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='{position}' /></li>\n",
            'activeItemTemplate' => "<li class='breadcrumb-item active swiper-slide' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='{position}' /></li>\n",
            'options' => [
                'class' => 'breadcrumb swiper-wrapper',
                'itemscope' => 'itemscope',
                'itemtype' => 'http://schema.org/BreadcrumbList',
            ],
            'homeLink' => [
                'label' => 'Обекты',
                'url' => '/web/site/',
                'template' => "<li class='breadcrumb-item' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='{position}' /></li>\n",
            ],
        ];

        try {
            echo Html::tag('nav', Breadcrumbs::widget($params), ['class' => 'swiper freeMode-slider--js', 'aria-label' => 'breadcrumb']);
        } catch (\Throwable $e) {

        }
    }
}

