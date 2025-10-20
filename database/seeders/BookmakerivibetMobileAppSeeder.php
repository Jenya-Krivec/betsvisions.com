<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Ivibet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Ivibet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Ivibet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet offers modern web applications for Android and iOS, allowing users to conveniently and quickly access all platform services directly from smartphones and tablets. With these applications, players can place sports bets, watch live match broadcasts, play slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"Ivibet ofrece aplicaciones web modernas para Android e iOS, que permiten a los usuarios acceder de manera rápida y conveniente a todos los servicios de la plataforma directamente desde teléfonos inteligentes y tabletas. Con estas aplicaciones, los jugadores pueden realizar apuestas deportivas, ver transmisiones en vivo de los partidos, jugar a las tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Ivibet propose des applications web modernes pour Android et iOS, permettant aux utilisateurs d’accéder rapidement et facilement à tous les services de la plateforme directement depuis les smartphones et tablettes. Grâce à ces applications, les joueurs peuvent placer des paris sportifs, regarder les matchs en direct, jouer aux machines à sous, aux jeux de table et aux jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"Ivibet oferece aplicativos web modernos para Android e iOS, permitindo que os usuários acessem de forma rápida e conveniente todos os serviços da plataforma diretamente de smartphones e tablets. Com esses aplicativos, os jogadores podem fazer apostas esportivas, assistir a transmissões ao vivo, jogar em slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The interface of the web applications is designed so that users can easily navigate a large number of events, quickly find their favorite tournaments, and create a betting slip in just a few clicks. Ivibet web applications combine mobile optimization with all the features of the desktop version."}',
             'value_es' => '{"0":"La interfaz de las aplicaciones web está diseñada para que los usuarios puedan navegar fácilmente entre una gran cantidad de eventos, encontrar rápidamente sus torneos favoritos y crear un cupón de apuestas en pocos clics. Las aplicaciones web de Ivibet combinan la optimización móvil con todas las funciones de la versión de escritorio."}',
             'value_fr' => '{"0":"L’interface des applications web est conçue pour que les utilisateurs puissent naviguer facilement parmi un grand nombre d’événements, trouver rapidement leurs tournois préférés et créer un coupon en quelques clics. Les applications web d’Ivibet combinent optimisation mobile et toutes les fonctionnalités de la version de bureau."}',
             'value_pt' => '{"0":"A interface dos aplicativos web foi projetada para que os usuários possam navegar facilmente por uma grande quantidade de eventos, encontrar rapidamente seus torneios favoritos e criar um cupom de apostas em apenas alguns cliques. Os aplicativos web do Ivibet combinam otimização móvel com todos os recursos da versão para desktop."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Ivibet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de Ivibet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles Ivibet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da Ivibet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place sports bets",
                                 "1":"Ability to play in the casino",
                                 "2":"Ability to perform financial transactions",
                                 "3":"Convenient interface"},
                             "1":
                                {"0":"No push notifications",
                                 "1":"No full-featured apps for Android and iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de realizar apuestas deportivas",
                                 "1":"Posibilidad de jugar en el casino",
                                 "2":"Posibilidad de realizar transacciones financieras",
                                 "3":"Interfaz conveniente"},
                             "1":
                                {"0":"Sin notificaciones push",
                                 "1":"No hay aplicaciones completas para Android e iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de placer des paris sportifs",
                                 "1":"Possibilité de jouer au casino",
                                 "2":"Possibilité d’effectuer des transactions financières",
                                 "3":"Interface pratique"},
                             "1":
                                {"0":"Pas de notifications push",
                                 "1":"Pas d’applications complètes pour Android et iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas esportivas",
                                 "1":"Possibilidade de jogar no cassino",
                                 "2":"Possibilidade de realizar transações financeiras",
                                 "3":"Interface conveniente"},
                             "1":
                                {"0":"Sem notificações push",
                                 "1":"Sem aplicativos completos para Android e iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To use the Ivibet web application on Android, simply open a mobile browser, go to the official platform website, and wait for the page to fully load."}',
             'value_es' => '{"0":"Para usar la aplicación web de Ivibet en Android, simplemente abra un navegador móvil, vaya al sitio web oficial de la plataforma y espere a que la página se cargue por completo."}',
             'value_fr' => '{"0":"Pour utiliser l’application web Ivibet sur Android, il suffit d’ouvrir un navigateur mobile, de se rendre sur le site officiel de la plateforme et d’attendre que la page soit complètement chargée."}',
             'value_pt' => '{"0":"Para usar o aplicativo web do Ivibet no Android, basta abrir um navegador móvel, acessar o site oficial da plataforma e aguardar o carregamento completo da página."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"After the page has loaded, you can create a shortcut on your home screen for quick access, allowing you to use the site like a regular mobile application."}',
             'value_es' => '{"0":"Después de que la página se haya cargado, puede crear un acceso directo en la pantalla de inicio para acceder rápidamente, lo que le permitirá usar el sitio como una aplicación móvil normal."}',
             'value_fr' => '{"0":"Une fois la page chargée, vous pouvez créer un raccourci sur l’écran d’accueil pour un accès rapide, ce qui vous permettra d’utiliser le site comme une application mobile classique."}',
             'value_pt' => '{"0":"Após o carregamento da página, você pode criar um atalho na tela inicial para acesso rápido, permitindo usar o site como um aplicativo móvel comum."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To install the Ivibet web application on iOS, open a mobile browser such as Safari or Chrome, go to the official platform website, and wait for the page to fully load."}',
             'value_es' => '{"0":"Para instalar la aplicación web de Ivibet en iOS, abra un navegador móvil como Safari o Chrome, vaya al sitio web oficial de la plataforma y espere a que la página se cargue por completo."}',
             'value_fr' => '{"0":"Pour installer l’application web Ivibet sur iOS, ouvrez un navigateur mobile tel que Safari ou Chrome, rendez-vous sur le site officiel de la plateforme et attendez que la page soit complètement chargée."}',
             'value_pt' => '{"0":"Para instalar o aplicativo web do Ivibet no iOS, abra um navegador móvel, como Safari ou Chrome, acesse o site oficial da plataforma e aguarde o carregamento completo da página."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"You can now add a shortcut to your device\'s home screen using the «Add to Home Screen» feature. After that, you can log into your account or create a new one."}',
             'value_es' => '{"0":"Ahora puede agregar un acceso directo a la pantalla de inicio del dispositivo utilizando la función «Agregar a la pantalla de inicio». Luego, puede iniciar sesión en su cuenta o crear una nueva."}',
             'value_fr' => '{"0":"Vous pouvez maintenant ajouter un raccourci sur l’écran d’accueil de votre appareil à l’aide de la fonction « Ajouter à l’écran d’accueil ». Ensuite, vous pouvez vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Agora você pode adicionar um atalho à tela inicial do dispositivo usando o recurso «Adicionar à Tela de Início». Em seguida, você pode entrar na sua conta ou criar uma nova."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Ivibet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de Ivibet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile Ivibet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da Ivibet"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet web applications provide full access to all platform features, including sports betting. Players can also enjoy slots, table games, and live games with real dealers. The application supports live betting and real-time statistics, which helps make more informed decisions."}',
             'value_es' => '{"0":"Las aplicaciones web de Ivibet ofrecen acceso completo a todas las funciones de la plataforma, incluidas las apuestas deportivas. Los jugadores también pueden disfrutar de tragamonedas, juegos de mesa y juegos en vivo con crupieres reales. La aplicación admite apuestas en vivo y estadísticas en tiempo real, lo que ayuda a tomar decisiones más informadas."}',
             'value_fr' => '{"0":"Les applications web d’Ivibet offrent un accès complet à toutes les fonctionnalités de la plateforme, y compris les paris sportifs. Les joueurs peuvent également profiter des machines à sous, des jeux de table et des jeux en direct avec de vrais croupiers. L’application prend en charge les paris en direct et les statistiques en temps réel, ce qui aide à prendre des décisions plus éclairées."}',
             'value_pt' => '{"0":"Os aplicativos web do Ivibet oferecem acesso completo a todos os recursos da plataforma, incluindo apostas esportivas. Os jogadores também podem aproveitar slots, jogos de mesa e jogos ao vivo com dealers reais. O aplicativo oferece suporte a apostas ao vivo e estatísticas em tempo real, ajudando a tomar decisões mais informadas."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"With the applications, users can deposit funds, withdraw money, view betting history, and manage their account. It is also possible to use bonuses, participate in promotions, take part in tournament competitions, and accumulate loyalty points. Multicurrency support and multiple languages make Ivibet web applications a convenient and versatile tool for mobile betting and casino gaming."}',
             'value_es' => '{"0":"Con las aplicaciones, los usuarios pueden depositar fondos, retirar dinero, ver el historial de apuestas y gestionar su cuenta. También es posible usar bonos, participar en promociones, competir en torneos y acumular puntos de fidelidad. El soporte multimoneda y los múltiples idiomas hacen que las aplicaciones web de Ivibet sean una herramienta conveniente y versátil para las apuestas móviles y los juegos de casino."}',
             'value_fr' => '{"0":"Avec les applications, les utilisateurs peuvent déposer des fonds, retirer de l’argent, consulter l’historique des paris et gérer leur compte. Il est également possible d’utiliser des bonus, de participer à des promotions, de prendre part à des tournois et d’accumuler des points de fidélité. La prise en charge de plusieurs devises et langues fait des applications web d’Ivibet un outil pratique et polyvalent pour les paris mobiles et les jeux de casino."}',
             'value_pt' => '{"0":"Com os aplicativos, os usuários podem depositar fundos, sacar dinheiro, visualizar o histórico de apostas e gerenciar sua conta. Também é possível usar bônus, participar de promoções, competir em torneios e acumular pontos de fidelidade. O suporte a várias moedas e idiomas torna os aplicativos web do Ivibet uma ferramenta prática e versátil para apostas móveis e jogos de cassino."}',
             'order' => 15
            ]
        );
    }
}
