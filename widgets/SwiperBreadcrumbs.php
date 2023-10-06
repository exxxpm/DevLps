<?php

namespace app\widgets;

use app\models\Entrance;
use app\models\Flat;
use app\models\Floor;
use app\models\Home;
use app\models\Objects;
use app\models\Room;
use yii\base\Widget;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;


class SwiperBreadcrumbs extends Widget{
    public $model_name;
    public $model_id;
    public array $links = [];

    public function generateLinks($model, $model_id) {
        switch ($model) {
            case 'Object':
                $object = Objects::findOne($model_id);
                return $this->generateLinksWithLabel($object->name, $this->model_name == 'Object' ? null : '/web/site/object/' . $object->id);
            case 'Home':
                $home = Home::findOne($model_id);
                $object_links = $this->generateLinks('Object', $home->object_id);
                return $this->generateLinksWithLabel($home->name, $this->model_name == 'Home' ? null : '/web/home/index/' . $home->id, $object_links);
            case 'Entrance':
                $entrance = Entrance::findOne($model_id);
                $home_links = $this->generateLinks('Home', $entrance->home_id);
                return $this->generateLinksWithLabel($entrance->name, $this->model_name == 'Entrance' ? null : '/web/entrance/index/' . $entrance->id, $home_links);
            case 'Floor':
                $floor = Floor::findOne($model_id);
                $entrance_links = $this->generateLinks('Entrance', $floor->entrance_id);
                return $this->generateLinksWithLabel($floor->name, $this->model_name == 'Floor' ? null : '/web/floor/index/' . $floor->id, $entrance_links);
            case 'Flat':
                $flat = Flat::findOne($model_id);
                $floor_links = $this->generateLinks('Floor', $flat->floor_id);
                return $this->generateLinksWithLabel($flat->name, $this->model_name == 'Flat' ? null : '/web/flat/index/' . $flat->id, $floor_links);
            case 'Room':
                $room = Room::findOne($model_id);
                $flat_links = $this->generateLinks('Flat', $room->flat_id);
                return $this->generateLinksWithLabel($room->name, null, $flat_links);
            case 'User':
                $room = Room::findOne($model_id);
                $flat_links = $this->generateLinks('Flat', $room->flat_id);
                return $this->generateLinksWithLabel($room->name, null, $flat_links);
            default:
                return [];
        }
    }

    private function generateLinksWithLabel($label, $url = null, $additionalLinks = []) {
        $link = ['label' => $label];
        if ($url !== null) {
            $link['url'] = $url;
        }
        return array_merge($additionalLinks, [$link]);
    }

    public function run(){
        $params = [
            'links' => $this->generateLinks($this->model_name, $this->model_id),
            'itemTemplate' => "<li class='breadcrumb-item swiper-slide' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='{position}' /></li>\n",
            'activeItemTemplate' => "<li class='breadcrumb-item active swiper-slide' itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>{link}<meta itemprop='position' content='{position}' /></li>\n",
            'options' => [
                'class' => 'breadcrumb swiper-wrapper',
                'itemscope' => 'itemscope',
                'itemtype' => 'http://schema.org/BreadcrumbList',
            ],
            'homeLink' => [
                'label' => 'Объекты',
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
