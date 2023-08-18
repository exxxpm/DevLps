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
    public array $rout_array = [
        'Object' => [
            'object_id' => '/web/site/object/',
        ],
        'Home' => [
            'object_id' => '/web/site/object/',
            'home_id' => '/web/home/index/',
        ],
        'Entrance' => [
            'object_id' => '/web/site/object/',
            'home_id' => '/web/home/index/',
            'entrance_id' => '/web/entrance/index/',
        ],
        'Floor' => [
            'object_id' => '/web/site/object/',
            'home_id' => '/web/home/index/',
            'entrance_id' => '/web/entrance/index/',
            'floor_id' => '/web/floor/index/',
        ],
        'Flat' => [
            'object_id' => '/web/site/object/',
            'home_id' => '/web/home/index/',
            'entrance_id' => '/web/entrance/index/',
            'floor_id' => '/web/floor/index/',
            'flat_id' => '/web/flat/index/',
        ],
        'Room' => [
            'object_id' => '/web/site/object/',
            'home_id' => '/web/home/index/',
            'entrance_id' => '/web/entrance/index/',
            'floor_id' => '/web/floor/index/',
            'flat_id' => '/web/flat/index/',
            'room_id' => '/web/room/index/'
        ]
    ];

    public $model_name;
    public $model_id;
    public array $links = [];

    public function run()
    {
        switch ($this->model_name) {
            case 'Object':
                $object = Objects::findOne($this->model_id);
                $this->links = [
                    ['label' => $object->name]
                ];
                break;
            case 'Home':
                $home = Home::findOne($this->model_id);
                $object = Objects::findOne($home->object_id);
                $this->links = [
                    ['label' => $object->name, 'url' => '/web/site/object/' . $object->id],
                    ['label' => $home->name]
                ];
                break;
            case 'Entrance':
                $entrance = Entrance::findOne($this->model_id);
                $home = Home::findOne($entrance->home_id);
                $object = Objects::findOne($entrance->object_id);
                $this->links = [
                    ['label' => $object->name, 'url' => '/web/site/object/' . $object->id],
                    ['label' => $home->name, 'url' => '/web/home/index/' . $home->id],
                    ['label' => $entrance->name]
                ];
                break;
            case 'Floor':
                $floor = Floor::findOne($this->model_id);
                $entrance = Entrance::findOne($floor->entrance_id);
                $home = Home::findOne($floor->home_id);
                $object = Objects::findOne($floor->object_id);
                $this->links = [
                    ['label' => $object->name, 'url' => '/web/site/object/' . $object->id],
                    ['label' => $home->name, 'url' => '/web/home/index/' . $home->id],
                    ['label' => $entrance->name, 'url' => '/web/entrance/index/' . $entrance->id],
                    ['label' => $floor->name]];
                break;
            case 'Flat':
                $flat = Flat::findOne($this->model_id);
                $floor = Floor::findOne($flat->floor_id);
                $entrance = Entrance::findOne($flat->entrance_id);
                $home = Home::findOne($flat->home_id);
                $object = Objects::findOne($flat->object_id);
                $this->links = [
                    ['label' => $object->name, 'url' => '/web/site/object/' . $object->id],
                    ['label' => $home->name, 'url' => '/web/home/index/' . $home->id],
                    ['label' => $entrance->name, 'url' => '/web/entrance/index/' . $entrance->id],
                    ['label' => $floor->name, 'url' => '/web/floor/index/' . $floor->id],
                    ['label' => $flat->name]
                ];
                break;
            case 'Room':
                $room = Room::findOne($this->model_id);
                $flat = Flat::findOne($room->flat_id);
                $floor = Floor::findOne($room->floor_id);
                $entrance = Entrance::findOne($room->entrance_id);
                $home = Home::findOne($room->home_id);
                $object = Objects::findOne($room->object_id);
                $this->links = [
                    ['label' => $object->name, 'url' => '/web/site/object/' . $object->id],
                    ['label' => $home->name, 'url' => '/web/home/index/' . $home->id],
                    ['label' => $entrance->name, 'url' => '/web/entrance/index/' . $entrance->id],
                    ['label' => $floor->name, 'url' => '/web/floor/index/' . $floor->id],
                    ['label' => $flat->name, 'url' => '/web/flat/index/' . $flat->id],
                    ['label' => $room->name]
                ];
                break;
        }

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
