<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 2/16/18
 * Time: 2:49 PM
 */

namespace pantera\textAvatar;


use yii\helpers\ArrayHelper;

class TextAvatarHelper
{
    /**
     * Генерация аватара
     * @param string $string
     * @param array $options
     */
    public static function generate($string, $options = [])
    {
        //Удаляем все символы кроме букв и чисел
        $string = preg_replace("/[^a-zа-я\s1-9]/siu", "", $string);
        $limit = ArrayHelper::remove($options, 'limit', 2);
        $name = '';
        $words = explode(' ', $string);
        for ($i = 0; $i < $limit; $i++) {
            $name .= self::substr($words, $i);
        }
        return strtoupper($name);
    }

    /**
     * Обрезка слова из массива по ключу
     * @param array $words Массив слов
     * @param integer $key Порядковый номер слова в массиве которое нужно обрезать
     */
    private static function substr($words, $key)
    {
        if (count($words) > $key) {
            return mb_substr($words[$key], 0, 1, 'UTF-8');
        }
    }
}