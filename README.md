# yii2-text-avatar

## Установка

~~~
composer require pantera-digital/yii2-text-avatar "@dev"
~~~

## Использование

### Виджет
~~~
echo TextAvatarWidget::widget([
    'string' => 'Jon Smith',
    'size' => '60x60',
    'color' => '#CBCBCB',
    'options' => [
        'class' => ' without-img marketplace-view-author-row-avatar',
    ],
]);
~~~
##### Настройка
~~~
strign => Строчка которую нужно преобразовать в текстовый аватар
size => Размер аватара
color => Цвет заливки
options => Массив опция для контейнера
limit => указывает сколько слов должно быть обрезанно
tag => Html тег контейнера
~~~


##### Хелпер
~~~
echo TextAvatarHelper::generate("Jon Smith")
~~~
##### Настройка
Метод generate Применяет два параметра
1) Строчка которую нужно преобразовать в текстовый аватар
2) Массив с одним параметром limit указывает сколько слов должно быть обрезанно
