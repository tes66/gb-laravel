<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getNews(): array
    {
        return [
            [
                'id' => 1,
                'title' => '40 МИНУТ ГЕЙМПЛЕЯ СЮЖЕТНОГО РЕЖИМА GRID LEGENDS',
                'description' => ' В свежем 40-минутном ролике разработчики сосредоточились на сюжетном режиме Driven to Glory («Путь к славе»)',
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now()


            ],
            [
                'id' => 2,
                'title' => 'РЕМЕЙК WARCRAFT III: RE-REFORGED',
                'description' => 'В 2018 году Blizzard анонсировала Warcraft III: Reforged и воодушевила сообщество. Однако по пути обновлённая стратегия растеряла весь свой шарм и ряд обещанных функций.',
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'В HALO INFINITE ПОЗВОЛЯТ ЗАРАБАТЫВАТЬ ДОНАТНУЮ ВАЛЮТУ',
                'description' => 'Комьюнити-менеджеры 343 Industries озвучили ещё несколько исправлений для мультиплеера Halo Infinite — их вводят, чтобы бесплатная игра не казалась такой дорогой.',
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Wine 7.0',
                'description' => 'Команда Wine с гордостью сообщает о выходе нового стабильного релиза Wine 7.0.',
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'title' => 'Surge XT 1.0.0',
                'description' => 'Выпущена первая стабильная версия свободного (GPLv3+) программного синтезатора Surge XT.',
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'title' => 'ONLYOFFICE 7.0',
                'description' => 'Одновременно с ONLYOFFICE Docs состоялся релиз ONLYOFFICE DesktopEditors, который представляет ту же функциональность, но в виде самостоятельного десктопного приложения.',
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now()
            ],
            [
                'id' => 7,
                'title' => 'Новый альбом The Weeknd',
                'description' => 'В первую же неделю после релиза пластинка возглавила альбомный чарт Apple Music в России.',
                'author' => 'intermedia.ru',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 8,
                'title' => 'Представлены логотип и слоган Евровидения-2022',
                'description' => '"Дамы и господа, представляем "красивый" слоган и тематическое оформление #Евровидения 2022 года. Мы рады представить логотип Turin 2022, а также новый слоган — "Звук красоты", — говорится в сообщении.',
                'author' => 'intermedia.ru',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 9,
                'title' => 'Майлз Кейн заявил, что у него есть невыпущенный альбом с Ланой Дель Рей',
                'description' => 'Британский рок-исполнитель Майлз Кейн рассказал, что у него и Ланы Дель Рей (Элизабет Грант) есть совместный неизданный материал на целый альбом. Об этом 20 января информирует портал NME.',
                'author' => 'NME',
                'category_id' => 3,
                'created_at' => now()
            ],
            [
                'id' => 10,
                'title' => 'Какие лучшие сериалы стоит посмотреть во второй половине января 2022 года',
                'description' => '"Позолоченный век" (HBO) - известный сценарист и создатель "Аббатства Даунтон" Джулиан Феллоуз готов представить новую историческую драму',
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 11,
                'title' => 'Все прошло хорошо',
                'description' => 'Когда у 85-летнего Андре случается инсульт, Эммануэль спешит к постели отца. Больной и наполовину парализованный на больничной койке',
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 12,
                'title' => 'Самые кассовые фильмы в мировом кинопрокате в 2020 году',
                'description' => '1 место – "Восемь сотен" (The Eight Hundred), $461,3 млн 2 место – "Плохие парни навсегда" (Bad Boys for Life), $426,5 млн 3 место – "Довод" (Tenet), $362,6 млн',
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now()
            ],
            [
                'id' => 13,
                'title' => 'Российские ученые дают второе дыхание углеводородной энергетике',
                'description' => 'В основе использующейся в углеводородной энергетике новейшей технологии химического циклирования с кислородной аккумуляцией лежат так называемые CLOU-процессы',
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now()
            ],
            [
                'id' => 14,
                'title' => 'Ан-225 «Мрия». Нужен ли пассажирский гигант?',
                'description' => '«Мрию» спроектировали и построили в конце 1980-х с одной единственной целью: требовалось создание авиатранспортной системы для проекта многоразового космического корабля «Буран».',
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now()
            ],
            [
                'id' => 15,
                'title' => 'Вечный двигатель» Капитанова.',
                'description' => 'В статье автор рассказал об упрощенной модели своего изобретения. Давайте рассмотрим выкладки автора. НиТ предлагат обсудить прочитанное, оставляйте свои мнения в комментариях.',
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now()
            ],
        ];
    }

    protected function getCategory(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Все про игры',
                'slag' => 'allgames'
            ],
            [
                'id' => 2,
                'title' => 'Линукс',
                'slag' => 'linux'
            ],
            [
                'id' => 3,
                'title' => 'Музыка',
                'slag' => 'music'
            ],
            [
                'id' => 4,
                'title' => 'Фильмы',
                'slag' => 'cinema'
            ],
            [
                'id' => 5,
                'title' => 'Технологии',
                'slag' => 'technologies'
            ],
            [
                'id' => 6,
                'title' => 'Наука',
                'slag' => 'science'
            ]
        ];
    }

    protected function getNewOne(int $id)
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
    }

    protected function getCategoryOne(int $id)
    {
        foreach (static::getCategory() as $category) {
            if ($category['id'] == $id) {
                return $category;
            }
        }
    }

    protected function getCategorySearch(string $item)
    {
        $data = [];
        foreach (static::getCategory() as $category){
            if ($category['slag'] == $item){
                foreach (static::getNews() as $news) {
                    if ($news['category_id'] == $category['id']) {
                        array_push($data, $news);
                    }
                }
            }
        }
        return $data;
    }

    protected function countNews()
    {
        return count(static::getNews());
    }

    protected function countCategory()
    {
        return count(static::getCategory());
    }
}
