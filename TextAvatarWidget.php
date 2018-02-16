<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 2/16/18
 * Time: 3:11 PM
 */

namespace pantera\textAvatar;


use yii\base\Widget;
use yii\helpers\Html;

class TextAvatarWidget extends Widget
{
    /* @var string Предзаданный маленький размер */
    const SIZE_SMALL = '16x16';
    /* @var string Предзаданный средний размер */
    const SIZE_MEDIUM = '32x32';
    /* @var string Предзаданный большой размер */
    const SIZE_LARGE = '64x64';

    /* @var string Строка котору нужно трансформировать */
    public $string;
    /* @var integer Лимит букв в результате */
    public $limit = 2;
    /* @var string Размер */
    public $size = self::SIZE_MEDIUM;
    /* @var string Цвет заливки */
    public $color = '#e5e5e5';
    /* @var string Html тег контейнера */
    public $tag = 'span';
    /* @var array|null Опции для контейнера */
    public $options;

    public function run()
    {
        parent::run();
        $avatar = TextAvatarHelper::generate($this->string, [
            'limit' => $this->limit,
        ]);
        $size = explode('x', $this->size);
        Html::addCssStyle($this->options, 'width: ' . $size[0] . 'px;', false);
        Html::addCssStyle($this->options, 'height: ' . $size[1] . 'px;', false);
        Html::addCssStyle($this->options, 'background-color: ' . $this->color . ';', false);
        Html::addCssClass($this->options, 'text-avatar');
        return Html::tag($this->tag, $avatar, $this->options);
    }

    public function init()
    {
        parent::init();
        TextAvatarAssets::register($this->view);
    }
}