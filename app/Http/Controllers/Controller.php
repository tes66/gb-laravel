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
                'category' => 'allgames',
                'title' => '40 МИНУТ ГЕЙМПЛЕЯ СЮЖЕТНОГО РЕЖИМА GRID LEGENDS',
                'description' => ' В свежем 40-минутном ролике разработчики сосредоточились на сюжетном режиме Driven to Glory («Путь к славе»)',
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'category' => 'allgames',
                'title' => 'РЕМЕЙК WARCRAFT III: RE-REFORGED',
                'description' => 'В 2018 году Blizzard анонсировала Warcraft III: Reforged и воодушевила сообщество. Однако по пути обновлённая стратегия растеряла весь свой шарм и ряд обещанных функций.',
                'author' => 'stopgame',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'category' => 'allgames',
                'title' => 'В HALO INFINITE ПОЗВОЛЯТ ЗАРАБАТЫВАТЬ ДОНАТНУЮ ВАЛЮТУ',
                'description' => 'Комьюнити-менеджеры 343 Industries озвучили ещё несколько исправлений для мультиплеера Halo Infinite — их вводят, чтобы бесплатная игра не казалась такой дорогой.',
                'author' => 'ТАСС',
                'created_at' => now()
            ],
            [
                'id' => 4,
                'category' => 'linux',
                'title' => 'Wine 7.0',
                'description' => 'Команда Wine с гордостью сообщает о выходе нового стабильного релиза Wine 7.0.',
                'author' => 'linux.org',
                'created_at' => now()
            ],
            [
                'id' => 5,
                'category' => 'linux',
                'title' => 'Surge XT 1.0.0',
                'description' => 'Выпущена первая стабильная версия свободного (GPLv3+) программного синтезатора Surge XT.',
                'author' => 'linux.org',
                'created_at' => now()
            ],
            [
                'id' => 6,
                'category' => 'linux',
                'title' => 'ONLYOFFICE 7.0',
                'description' => 'Одновременно с ONLYOFFICE Docs состоялся релиз ONLYOFFICE DesktopEditors, который представляет ту же функциональность, но в виде самостоятельного десктопного приложения.',
                'author' => 'linux.org',
                'created_at' => now()
            ],
            [
                'id' => 7,
                'category' => 'music',
                'title' => 'Цена на газ в Европе выросла выше $650 за тысячу кубометров',
                'description' => 'Стоимость газа в Европе в понедельник достигла нового рекорда – 53,68 доллара за МВт ч, или 654,1 доллара за 1 тысячу кубометров, согласно данным лондонской биржи ICE.',
                'author' => 'Smotrim.ru',
                'created_at' => now()
            ],
            [
                'id' => 8,
                'category' => 'music',
                'title' => 'Новый альбом The Weeknd',
                'description' => 'В первую же неделю после релиза пластинка возглавила альбомный чарт Apple Music в России.',
                'author' => 'intermedia.ru',
                'created_at' => now()
            ],
            [
                'id' => 9,
                'category' => 'music',
                'title' => 'Загородная недвижимость в России за год подорожала в среднем на 18%',
                'description' => 'Средняя стоимость дома в продаже в целом по России составляет в конце августа 7,08 млн рублей против 6,71 млн в начале лета (+5%) и 5,99 млн рублей год назад (+18%)", - отмечают эксперты.',
                'author' => 'intermedia.ru',
                'created_at' => now()
            ],
            [
                'id' => 10,
                'category' => 'cinema',
                'title' => 'Какие лучшие сериалы стоит посмотреть во второй половине января 2022 года',
                'description' => '"Позолоченный век" (HBO) - известный сценарист и создатель "Аббатства Даунтон" Джулиан Феллоуз готов представить новую историческую драму',
                'author' => 'kinonews.ru',
                'created_at' => now()
            ],
            [
                'id' => 11,
                'category' => 'cinema',
                'title' => 'Все прошло хорошо',
                'description' => 'Когда у 85-летнего Андре случается инсульт, Эммануэль спешит к постели отца. Больной и наполовину парализованный на больничной койке',
                'author' => 'kinonews.ru',
                'created_at' => now()
            ],
            [
                'id' => 12,
                'category' => 'cinema',
                'title' => 'Боевик «Шан-Чи и легенда десяти колец» стал лидером российского проката',
                'description' => 'Теперь в активе фильма с Райаном Рейнольдсом в главной роли $147,4 млн международных сборов и $239,2 млн общемировых.',
                'author' => 'Кинобизнес сегодня',
                'created_at' => now()
            ],
            [
                'id' => 13,
                'category' => 'technologies',
                'title' => 'WhatsApp 1 ноября прекратит поддержку устройств с устаревшими версиями Android и iOS',
                'description' => 'В WhatsApp рекомендуют владельцам старых смартфонов обновить устройство или сохранить историю чатов до отключения, чтобы сохранить личные данные пользователя.',
                'author' => 'РИА Новости',
                'created_at' => now()
            ],
            [
                'id' => 14,
                'category' => 'technologies',
                'title' => 'AllMyBlog обвинил «Яндекс» в краже идеи при создании сервиса перевода видео',
                'description' => 'Непубличное акционерное общество «Оллмай.блог» подало на «Яндекс» в Арбитражный суд Москвы.',
                'author' => 'Компания',
                'created_at' => now()
            ],
            [
                'id' => 15,
                'category' => 'technologies',
                'title' => 'TSMC подняла цены на изготовление чипов для Apple меньше, чем для других',
                'description' => 'Лу Синчжи отмечает, что Apple обеспечивает более 20% доходов TSMC, однако прибыль составляет менее 20%, а валовая маржа продолжает опускаться ниже средней.',
                'author' => 'iXBT.com',
                'created_at' => now()
            ],
        ];
    }

    protected function getCategory(): array
    {
        return [
            [
                'title' => 'Все про игры',
                'url' => 'allgames'
            ],
            [
                'title' => 'Линукс',
                'url' => 'linux'
            ],
            [
                'title' => 'Музыка',
                'url' => 'music'
            ],
            [
                'title' => 'Фильмы',
                'url' => 'cinema'
            ],
            [
                'title' => 'Технологии',
                'url' => 'technologies'
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

    protected function getCategorySearch(string $item)
    {
        $data = [];
        foreach (static::getNews() as $news) {
            if ($news['category'] == $item) {
                array_push($data, $news);
            }
        }
        return $data;
    }
}
