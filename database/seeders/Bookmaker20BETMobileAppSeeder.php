<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 20BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 20BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET mobile solutions provide players with fast and full access to everything the bookmaker offers. The company ensured that Android users can install a convenient app that combines functionality, stability, and ease of use. At the same time, iPhone and iPad owners can use the optimized web version."}',
             'value_es' => '{"0":"Las soluciones móviles de 20BET brindan a los jugadores un acceso rápido y completo a todo lo que ofrece el operador. La empresa se aseguró de que los usuarios de Android puedan instalar una aplicación conveniente que combina funcionalidad, estabilidad y facilidad de uso. Al mismo tiempo, los propietarios de iPhone y iPad pueden usar la versión web optimizada."}',
             'value_fr' => '{"0":"Les solutions mobiles de 20BET offrent aux joueurs un accès rapide et complet à tout ce que le bookmaker propose. L’entreprise a veillé à ce que les utilisateurs Android puissent installer une application pratique qui allie fonctionnalité, stabilité et simplicité d’utilisation. Parallèlement, les propriétaires d’iPhone et d’iPad peuvent utiliser la version web optimisée."}',
             'value_pt' => '{"0":"As soluções móveis da 20BET oferecem aos jogadores acesso rápido e completo a tudo o que a casa de apostas oferece. A empresa garantiu que os usuários de Android possam instalar um aplicativo conveniente que combina funcionalidade, estabilidade e facilidade de uso. Ao mesmo tempo, os proprietários de iPhone e iPad podem usar a versão web otimizada."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The installation procedure for the apps differs from the standard one. But there is no need to worry about this, in this review we will explain how to install the apps for Android and iOS."}',
             'value_es' => '{"0":"El procedimiento de instalación de las aplicaciones difiere del estándar. Pero no hay de qué preocuparse, en esta reseña explicaremos cómo instalar las aplicaciones para Android e iOS."}',
             'value_fr' => '{"0":"La procédure d’installation des applications diffère de la procédure standard. Mais il n’y a pas de raison de s’inquiéter, dans cette revue nous expliquerons comment installer les applications pour Android et iOS."}',
             'value_pt' => '{"0":"O procedimento de instalação dos aplicativos difere do padrão. Mas não há motivo para preocupação, nesta análise explicaremos como instalar os aplicativos para Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 20BET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 20BET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 20BET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 20BET"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place sports bets, live bets",
                                 "1":"Ability to play in the casino",
                                 "2":"Ability to use bonuses",
                                 "3":"Ability to perform financial transactions",
                                 "4":"Push notifications support"},
                             "1":
                                {"0":"No official iOS app",
                                 "1":"Manual APK installation required on Android"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de realizar apuestas deportivas, apuestas en vivo",
                                 "1":"Posibilidad de jugar en el casino",
                                 "2":"Posibilidad de usar bonos",
                                 "3":"Posibilidad de realizar transacciones financieras",
                                 "4":"Compatibilidad con notificaciones push"},
                             "1":
                                {"0":"No hay aplicación oficial para iOS",
                                 "1":"Se requiere instalación manual del archivo APK en Android"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de placer des paris sportifs, paris en direct",
                                 "1":"Possibilité de jouer au casino",
                                 "2":"Possibilité d’utiliser des bonus",
                                 "3":"Possibilité d’effectuer des transactions financières",
                                 "4":"Prise en charge des notifications push"},
                             "1":
                                {"0":"Pas d’application officielle pour iOS",
                                 "1":"Installation manuelle du fichier APK requise sur Android"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas esportivas, apostas ao vivo",
                                 "1":"Possibilidade de jogar no cassino",
                                 "2":"Possibilidade de usar bônus",
                                 "3":"Possibilidade de realizar transações financeiras",
                                 "4":"Suporte a notificações push"},
                             "1":
                                {"0":"Sem aplicativo oficial para iOS",
                                 "1":"Instalação manual do arquivo APK necessária no Android"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To download the 20BET mobile app on Android, you need to visit the official bookmaker’s website in your browser. Then go to the «Mobile App» section and download the APK file."}',
             'value_es' => '{"0":"Para descargar la aplicación móvil 20BET en Android, debe visitar el sitio web oficial de la casa de apuestas en su navegador. Luego, vaya a la sección «Aplicación móvil» y descargue el archivo APK."}',
             'value_fr' => '{"0":"Pour télécharger l’application mobile 20BET sur Android, vous devez visiter le site officiel du bookmaker dans votre navigateur. Ensuite, allez dans la section « Application mobile » et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para baixar o aplicativo móvel 20BET no Android, você precisa visitar o site oficial da casa de apostas em seu navegador. Em seguida, vá para a seção «Aplicativo móvel» e baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, you need to allow installation of apps from unknown sources in your phone settings. To do this, open Settings on your smartphone and go to Security or Biometrics and Security. Find the Install apps from unknown sources option. Select the browser you used to download the APK file and enable permission for this app."}',
             'value_es' => '{"0":"Después de la descarga, debe permitir la instalación de aplicaciones de fuentes desconocidas en la configuración de su teléfono. Para hacerlo, abra Configuración en su teléfono y vaya a Seguridad o Biometría y seguridad. Busque la opción Instalar aplicaciones de fuentes desconocidas. Seleccione el navegador que utilizó para descargar el archivo APK y habilite el permiso para esta aplicación."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre téléphone. Pour ce faire, ouvrez Paramètres sur votre smartphone et accédez à Sécurité ou Biométrie et sécurité. Trouvez l’option Installer des applications provenant de sources inconnues. Sélectionnez le navigateur que vous avez utilisé pour télécharger le fichier APK et activez la permission pour cette application."}',
             'value_pt' => '{"0":"Após o download, você precisa permitir a instalação de aplicativos de fontes desconhecidas nas configurações do seu telefone. Para isso, abra Configurações no seu smartphone e vá para Segurança ou Biometria e segurança. Encontre a opção Instalar aplicativos de fontes desconhecidas. Selecione o navegador que você usou para baixar o arquivo APK e ative a permissão para este aplicativo."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"After that, the 20BET icon will appear on your home screen, and you can log in to your account or create a new one directly through the app."}',
             'value_es' => '{"0":"Después de esto, el ícono de 20BET aparecerá en la pantalla de inicio, y podrá iniciar sesión en su cuenta o crear una nueva directamente a través de la aplicación."}',
             'value_fr' => '{"0":"Après cela, l’icône 20BET apparaîtra sur votre écran d’accueil, et vous pourrez vous connecter à votre compte ou en créer un nouveau directement via l’application."}',
             'value_pt' => '{"0":"Depois disso, o ícone do 20BET aparecerá na tela inicial, e você poderá fazer login na sua conta ou criar uma nova diretamente através do aplicativo."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For Apple devices, the bookmaker offers a convenient web version that functions like a full app. To use it, open the official 20BET website through the Safari browser and wait for the page to fully load."}',
             'value_es' => '{"0":"Para los dispositivos Apple, la casa de apuestas ofrece una versión web conveniente que funciona como una aplicación completa. Para usarla, abra el sitio web oficial de 20BET a través del navegador Safari y espere a que la página se cargue completamente."}',
             'value_fr' => '{"0":"Pour les appareils Apple, le bookmaker propose une version web pratique qui fonctionne comme une application complète. Pour l’utiliser, ouvrez le site officiel de 20BET via le navigateur Safari et attendez que la page se charge complètement."}',
             'value_pt' => '{"0":"Para dispositivos Apple, a casa de apostas oferece uma versão web conveniente que funciona como um aplicativo completo. Para usá-la, abra o site oficial da 20BET através do navegador Safari e aguarde o carregamento completo da página."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Then, tap the «Share» button at the bottom of the screen, select «Add to Home Screen», and confirm adding the shortcut. The 20BET icon will appear on your screen."}',
             'value_es' => '{"0":"Luego, toque el botón «Compartir» en la parte inferior de la pantalla, seleccione «Agregar a la pantalla de inicio» y confirme la adición del acceso directo. El ícono de 20BET aparecerá en su pantalla."}',
             'value_fr' => '{"0":"Ensuite, appuyez sur le bouton « Partager » en bas de l’écran, sélectionnez « Sur l’écran d’accueil » et confirmez l’ajout du raccourci. L’icône 20BET apparaîtra sur votre écran."}',
             'value_pt' => '{"0":"Em seguida, toque no botão «Compartilhar» na parte inferior da tela, selecione «Adicionar à Tela de Início» e confirme a adição do atalho. O ícone da 20BET aparecerá na sua tela."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Now you can log in to your account or create a new one and use all the platform’s features."}',
             'value_es' => '{"0":"Ahora puede iniciar sesión en su cuenta o crear una nueva y utilizar todas las funciones de la plataforma."}',
             'value_fr' => '{"0":"Vous pouvez maintenant vous connecter à votre compte ou en créer un nouveau et profiter de toutes les fonctionnalités de la plateforme."}',
             'value_pt' => '{"0":"Agora você pode entrar na sua conta ou criar uma nova e usar todos os recursos da plataforma."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 20BET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 20BET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 20BET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 20BET"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET mobile app provides access to all platform services. Users can place bets on all types of sports — from football and tennis to esports. You can also play slots and table games."}',
             'value_es' => '{"0":"La aplicación móvil de 20BET ofrece acceso a todos los servicios de la plataforma. Los usuarios pueden realizar apuestas en todo tipo de deportes, desde fútbol y tenis hasta deportes electrónicos. También se puede jugar a tragamonedas y juegos de mesa."}',
             'value_fr' => '{"0":"L’application mobile 20BET permet d’accéder à tous les services de la plateforme. Les utilisateurs peuvent parier sur tous types de sports, du football et du tennis à l’e-sport. Il est également possible de jouer aux machines à sous et aux jeux de table."}',
             'value_pt' => '{"0":"O aplicativo móvel 20BET fornece acesso a todos os serviços da plataforma. Os usuários podem fazer apostas em todos os tipos de esportes — do futebol e tênis aos esports. Também é possível jogar slots e jogos de mesa."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"You will be able to view results, statistics, and odds dynamics. All financial transactions, including deposits and withdrawals, are carried out directly through the app. Thanks to push notifications, you won’t miss important events, bonuses, or changes in odds."}',
             'value_es' => '{"0":"Podrá ver resultados, estadísticas y la dinámica de las cuotas. Todas las transacciones financieras, incluidos depósitos y retiros, se realizan directamente a través de la aplicación. Gracias a las notificaciones push, no se perderá eventos importantes, bonos o cambios en las cuotas."}',
             'value_fr' => '{"0":"Vous pourrez consulter les résultats, les statistiques et la dynamique des cotes. Toutes les opérations financières, y compris les dépôts et les retraits, s’effectuent directement via l’application. Grâce aux notifications push, vous ne manquerez aucun événement important, bonus ou changement de cotes."}',
             'value_pt' => '{"0":"Você poderá visualizar resultados, estatísticas e a dinâmica das odds. Todas as transações financeiras, incluindo depósitos e saques, são realizadas diretamente pelo aplicativo. Graças às notificações push, você não perderá eventos importantes, bônus ou alterações nas odds."}',
             'order' => 17
            ]
        );
    }
}
