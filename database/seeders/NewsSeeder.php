<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert(
            [
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now(),
                'description' => ' В свежем 40-минутном ролике разработчики сосредоточились на сюжетном режиме Driven to Glory («Путь к славе»)',
                'title' => '40 МИНУТ ГЕЙМПЛЕЯ СЮЖЕТНОГО РЕЖИМА GRID LEGENDS',
                'updated_at' => now()


            ],
            [
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now(),
                'description' => 'В 2018 году Blizzard анонсировала Warcraft III: Reforged и воодушевила сообщество. Однако по пути обновлённая стратегия растеряла весь свой шарм и ряд обещанных функций.',
                'title' => 'РЕМЕЙК WARCRAFT III: RE-REFORGED',
                'updated_at' => now()
            ],
            [
                'author' => 'stopgame',
                'category_id' => 1,
                'created_at' => now(),
                'description' => 'Комьюнити-менеджеры 343 Industries озвучили ещё несколько исправлений для мультиплеера Halo Infinite — их вводят, чтобы бесплатная игра не казалась такой дорогой.',
                'title' => 'В HALO INFINITE ПОЗВОЛЯТ ЗАРАБАТЫВАТЬ ДОНАТНУЮ ВАЛЮТУ',
                'updated_at' => now()
            ],
            [
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now(),
                'description' => 'Команда Wine с гордостью сообщает о выходе нового стабильного релиза Wine 7.0.',
                'title' => 'Wine 7.0',
                'updated_at' => now()
            ],
            [
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now(),
                'description' => 'Выпущена первая стабильная версия свободного (GPLv3+) программного синтезатора Surge XT.',
                'title' => 'Surge XT 1.0.0',
                'updated_at' => now()
            ],
            [
                'author' => 'linux.org',
                'category_id' => 2,
                'created_at' => now(),
                'description' => 'Одновременно с ONLYOFFICE Docs состоялся релиз ONLYOFFICE DesktopEditors, который представляет ту же функциональность, но в виде самостоятельного десктопного приложения.',
                'title' => 'ONLYOFFICE 7.0',
                'updated_at' => now()
            ],
            [
                'author' => 'intermedia.ru',
                'category_id' => 3,
                'created_at' => now(),
                'description' => 'В первую же неделю после релиза пластинка возглавила альбомный чарт Apple Music в России.',
                'title' => 'Новый альбом The Weeknd',
                'updated_at' => now()
            ],
            [
                'author' => 'intermedia.ru',
                'category_id' => 3,
                'created_at' => now(),
                'description' => '"Дамы и господа, представляем "красивый" слоган и тематическое оформление #Евровидения 2022 года. Мы рады представить логотип Turin 2022, а также новый слоган — "Звук красоты", — говорится в сообщении.',
                'title' => 'Представлены логотип и слоган Евровидения-2022',
                'updated_at' => now()
            ],
            [
                'author' => 'NME',
                'category_id' => 3,
                'created_at' => now(),
                'description' => 'Британский рок-исполнитель Майлз Кейн рассказал, что у него и Ланы Дель Рей (Элизабет Грант) есть совместный неизданный материал на целый альбом. Об этом 20 января информирует портал NME.',
                'title' => 'Майлз Кейн заявил, что у него есть невыпущенный альбом с Ланой Дель Рей',
                'updated_at' => now()
            ],
            [
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now(),
                'description' => '"Позолоченный век" (HBO) - известный сценарист и создатель "Аббатства Даунтон" Джулиан Феллоуз готов представить новую историческую драму',
                'title' => 'Какие лучшие сериалы стоит посмотреть во второй половине января 2022 года',
                'updated_at' => now()
            ],
            [
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now(),
                'description' => 'Когда у 85-летнего Андре случается инсульт, Эммануэль спешит к постели отца. Больной и наполовину парализованный на больничной койке',
                'title' => 'Все прошло хорошо',
                'updated_at' => now()
            ],
            [
                'author' => 'kinonews.ru',
                'category_id' => 4,
                'created_at' => now(),
                'description' => '1 место – "Восемь сотен" (The Eight Hundred), $461,3 млн 2 место – "Плохие парни навсегда" (Bad Boys for Life), $426,5 млн 3 место – "Довод" (Tenet), $362,6 млн',
                'title' => 'Самые кассовые фильмы в мировом кинопрокате в 2020 году',
                'updated_at' => now()
            ],
            [
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now(),
                'description' => 'В основе использующейся в углеводородной энергетике новейшей технологии химического циклирования с кислородной аккумуляцией лежат так называемые CLOU-процессы',
                'title' => 'Российские ученые дают второе дыхание углеводородной энергетике',
                'updated_at' => now()
            ],
            [
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now(),
                'description' => '«Мрию» спроектировали и построили в конце 1980-х с одной единственной целью: требовалось создание авиатранспортной системы для проекта многоразового космического корабля «Буран».',
                'title' => 'Ан-225 «Мрия». Нужен ли пассажирский гигант?',
                'updated_at' => now()
            ],
            [
                'author' => 'naukatehnika.com',
                'category_id' => 5,
                'created_at' => now(),
                'description' => 'В статье автор рассказал об упрощенной модели своего изобретения. Давайте рассмотрим выкладки автора. НиТ предлагат обсудить прочитанное, оставляйте свои мнения в комментариях.',
                'title' => 'Вечный двигатель» Капитанова.',
                'updated_at' => now()
            ],

        );
    }
}
