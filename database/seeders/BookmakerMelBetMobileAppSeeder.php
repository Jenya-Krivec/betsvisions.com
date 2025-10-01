<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de MelBet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile MelBet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da MelBet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet mobile applications for Android and iOS are designed to give users full access to all the features of the bookmaker without the need to open a browser on a computer. The apps allow placing sports bets, playing in the casino, participating in live events, and receiving bonuses directly from the phone."}',
             'value_es' => '{"0":"Las aplicaciones móviles de MelBet para Android e iOS están diseñadas para que los usuarios puedan acceder por completo a todas las funciones de la casa de apuestas sin necesidad de abrir un navegador en el ordenador. Las aplicaciones permiten realizar apuestas deportivas, jugar en el casino, participar en eventos en vivo y recibir bonos directamente desde el teléfono."}',
             'value_fr' => '{"0":"Les applications mobiles MelBet pour Android et iOS sont conçues pour permettre aux utilisateurs d’accéder pleinement à toutes les fonctionnalités du bookmaker sans avoir à ouvrir un navigateur sur un ordinateur. Les applications permettent de parier sur le sport, de jouer au casino, de participer à des événements en direct et de recevoir des bonus directement depuis le téléphone."}',
             'value_pt' => '{"0":"Os aplicativos móveis da MelBet para Android e iOS foram desenvolvidos para que os usuários possam ter acesso completo a todas as funcionalidades da casa de apostas sem precisar abrir um navegador no computador. Os aplicativos permitem fazer apostas esportivas, jogar no cassino, participar de eventos ao vivo e receber bônus diretamente pelo celular."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The interface is optimized for small screens, and the app’s performance leaves a positive impression even with an unstable internet connection. It is worth noting the adaptation of the apps to different screen sizes, making usage convenient on any device, including tablets."}',
             'value_es' => '{"0":"La interfaz está optimizada para pantallas pequeñas, y el rendimiento de las aplicaciones resulta satisfactorio incluso con una conexión a Internet inestable. Cabe destacar la adaptación de las aplicaciones a distintos tamaños de pantalla, lo que hace que su uso sea cómodo en cualquier dispositivo, incluidos los tablets."}',
             'value_fr' => '{"0":"L’interface est optimisée pour les petits écrans et les performances des applications restent agréables même avec une connexion Internet instable. Il convient de noter l’adaptation des applications à différentes tailles d’écran, ce qui rend l’utilisation pratique sur tous les appareils, y compris les tablettes."}',
             'value_pt' => '{"0":"A interface é otimizada para telas pequenas e o desempenho dos aplicativos causa uma boa impressão mesmo com conexão à internet instável. Vale destacar a adaptação dos aplicativos a diferentes tamanhos de tela, tornando o uso conveniente em qualquer dispositivo, incluindo tablets."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MelBet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MelBet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MelBet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MelBet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Quick access to bets and the casino",
                                 "1":"User-friendly interface",
                                 "2":"Deposit and withdrawal of funds",
                                 "3":"Push notifications"},
                             "1":
                                {"0":"Some features are unavailable in certain countries",
                                 "1":"No Android app available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso rápido a apuestas y casino",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Depósito y retiro de fondos",
                                 "3":"Notificaciones push"},
                             "1":
                                {"0":"Algunas funciones no están disponibles en ciertos países",
                                 "1":"No hay aplicación de Android disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès rapide aux paris et au casino",
                                 "1":"Interface conviviale",
                                 "2":"Dépôt et retrait de fonds",
                                 "3":"Notifications push"},
                             "1":
                                {"0":"Certaines fonctionnalités ne sont pas disponibles dans certains pays",
                                 "1":"Aucune application Android disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso rápido a apostas e cassino",
                                 "1":"Interface amigável",
                                 "2":"Depósito e saque de fundos",
                                 "3":"Notificações push"},
                             "1":
                                {"0":"Algumas funções não estão disponíveis em determinados países",
                                 "1":"Aplicativo Android não disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Due to Google’s policy on gambling, the Android mobile app is not available on Google Play. To install the app on Android, you need to visit the official MelBet website via a mobile browser. Then go to the mobile apps section and download the APK file to your device."}',
             'value_es' => '{"0":"Debido a la política de Google sobre juegos de azar, la aplicación móvil para Android no está disponible en Google Play. Para instalar la aplicación en Android, debes visitar el sitio web oficial de MelBet desde un navegador móvil. Luego ve a la sección de aplicaciones móviles y descarga el archivo APK en tu dispositivo."}',
             'value_fr' => '{"0":"En raison de la politique de Google concernant les jeux d’argent, l’application mobile pour Android n’est pas disponible sur Google Play. Pour installer l’application sur Android, vous devez visiter le site officiel de MelBet via un navigateur mobile. Ensuite, rendez-vous dans la section des applications mobiles et téléchargez le fichier APK sur votre appareil."}',
             'value_pt' => '{"0":"Devido à política do Google sobre jogos de azar, o aplicativo móvel para Android não está disponível no Google Play. Para instalar o aplicativo no Android, é necessário acessar o site oficial da MelBet através de um navegador móvel. Em seguida, vá para a seção de aplicativos móveis e baixe o arquivo APK no seu dispositivo."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, open your phone settings and allow installation from unknown sources. To do this, go to your phone’s Settings and navigate to Security. Find the option Install from unknown sources. Select the browser from which you downloaded the APK file and enable permission for this source."}',
             'value_es' => '{"0":"Después de descargarlo, abre la configuración de tu teléfono y permite la instalación desde fuentes desconocidas. Para ello, ve a Configuración y luego a Seguridad. Busca la opción Instalar desde fuentes desconocidas. Selecciona el navegador desde el cual descargaste el archivo APK y activa el permiso para esta fuente."}',
             'value_fr' => '{"0":"Après le téléchargement, ouvrez les paramètres de votre téléphone et autorisez l’installation depuis des sources inconnues. Pour ce faire, allez dans Paramètres, puis dans Sécurité. Trouvez l’option Installer depuis des sources inconnues. Sélectionnez le navigateur depuis lequel vous avez téléchargé le fichier APK et activez l’autorisation pour cette source."}',
             'value_pt' => '{"0":"Após o download, abra as configurações do seu telefone e permita a instalação a partir de fontes desconhecidas. Para isso, vá em Configurações e depois em Segurança. Encontre a opção Instalar de fontes desconhecidas. Selecione o navegador de onde você baixou o arquivo APK e habilite a permissão para essa fonte."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"After that, you can open the downloaded APK file and install the app. The process takes a few minutes, after which you get full access to all platform sections, including sports betting, casino, live events, and financial transactions."}',
             'value_es' => '{"0":"Después de eso, puedes abrir el archivo APK descargado e instalar la aplicación. El proceso toma unos minutos y después tendrás acceso completo a todas las secciones de la plataforma, incluyendo apuestas deportivas, casino, eventos en vivo y transacciones financieras."}',
             'value_fr' => '{"0":"Après cela, vous pouvez ouvrir le fichier APK téléchargé et installer l’application. Le processus prend quelques minutes, après quoi vous aurez un accès complet à toutes les sections de la plateforme, y compris les paris sportifs, le casino, les événements en direct et les transactions financières."}',
             'value_pt' => '{"0":"Depois disso, você pode abrir o arquivo APK baixado e instalar o aplicativo. O processo leva alguns minutos, e depois disso você terá acesso completo a todas as seções da plataforma, incluindo apostas esportivas, cassino, eventos ao vivo e transações financeiras."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For iOS devices, installation is simpler than on Android since the app is available in the App Store. You need to open the App Store and search for the official MelBet app. After pressing the «Get» button, the app will download and automatically install on your device."}',
             'value_es' => '{"0":"Para dispositivos iOS, la instalación es más sencilla que en Android, ya que la aplicación está disponible en App Store. Debes abrir App Store y buscar la aplicación oficial de MelBet. Tras pulsar el botón «Obtener», la aplicación se descargará e instalará automáticamente en tu dispositivo."}',
             'value_fr' => '{"0":"Pour les appareils iOS, l’installation est plus simple que sur Android car l’application est disponible sur l’App Store. Il suffit d’ouvrir l’App Store et de rechercher l’application officielle MelBet. Après avoir appuyé sur le bouton «Obtenir», l’application se télécharge et s’installe automatiquement sur votre appareil."}',
             'value_pt' => '{"0":"Para dispositivos iOS, a instalação é mais simples do que no Android, pois o aplicativo está disponível na App Store. É necessário abrir a App Store e procurar o aplicativo oficial MelBet. Após pressionar o botão «Obter», o aplicativo será baixado e instalado automaticamente no seu dispositivo."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"At the first launch, log in to your existing account or register a new one. All functions available in the desktop version, including live betting, casino, and financial operations, are accessible directly from the app."}',
             'value_es' => '{"0":"Al iniciar la aplicación por primera vez, inicia sesión en tu cuenta existente o regístrate como nuevo usuario. Todas las funciones disponibles en la versión de escritorio, incluidas apuestas en vivo, casino y operaciones financieras, están disponibles directamente desde la aplicación."}',
             'value_fr' => '{"0":"Lors du premier lancement, connectez-vous à votre compte existant ou inscrivez-vous pour créer un nouveau compte. Toutes les fonctionnalités disponibles dans la version de bureau, y compris les paris en direct, le casino et les opérations financières, sont accessibles directement depuis l’application."}',
             'value_pt' => '{"0":"No primeiro lançamento, faça login na sua conta existente ou registre uma nova. Todas as funções disponíveis na versão desktop, incluindo apostas ao vivo, cassino e operações financeiras, estão acessíveis diretamente pelo aplicativo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the MelBet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de MelBet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile MelBet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da MelBet"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The MelBet mobile app allows you to place sports bets at any time, follow live events, and make real-time bets, which is especially convenient during important matches."}',
             'value_es' => '{"0":"La aplicación móvil MelBet permite realizar apuestas deportivas en cualquier momento, seguir eventos en vivo y apostar en tiempo real, lo cual resulta especialmente cómodo durante partidos importantes."}',
             'value_fr' => '{"0":"L’application mobile MelBet permet de placer des paris sportifs à tout moment, de suivre des événements en direct et de parier en temps réel, ce qui est particulièrement pratique lors des matchs importants."}',
             'value_pt' => '{"0":"O aplicativo móvel MelBet permite fazer apostas esportivas a qualquer momento, acompanhar eventos ao vivo e apostar em tempo real, o que é especialmente conveniente durante partidas importantes."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The casino section includes thousands of slots, table games, and live games with real dealers, creating the atmosphere of a real casino."}',
             'value_es' => '{"0":"La sección de casino incluye miles de tragamonedas, juegos de mesa y juegos en vivo con crupieres reales, creando la atmósfera de un casino real."}',
             'value_fr' => '{"0":"La section casino comprend des milliers de machines à sous, des jeux de table et des jeux en direct avec de vrais croupiers, créant l’ambiance d’un véritable casino."}',
             'value_pt' => '{"0":"A seção de cassino inclui milhares de slots, jogos de mesa e jogos ao vivo com dealers reais, criando a atmosfera de um cassino verdadeiro."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The app supports various deposit and withdrawal methods, including bank cards, e-wallets, and cryptocurrencies, and allows you to view your transaction history. You can also use bonuses and participate in promotions. It is possible to set limits on deposits and session time."}',
             'value_es' => '{"0":"La aplicación admite diversos métodos de depósito y retiro, incluidas tarjetas bancarias, monederos electrónicos y criptomonedas, y permite ver el historial de transacciones. También se pueden usar bonos y participar en promociones. Es posible establecer límites de depósito y de tiempo de sesión."}',
             'value_fr' => '{"0":"L’application prend en charge différents moyens de dépôt et de retrait, y compris les cartes bancaires, les portefeuilles électroniques et les cryptomonnaies, et permet de consulter l’historique des transactions. Il est également possible d’utiliser des bonus et de participer à des promotions. Il est possible de définir des limites de dépôt et de temps de session."}',
             'value_pt' => '{"0":"O aplicativo suporta vários métodos de depósito e saque, incluindo cartões bancários, carteiras eletrônicas e criptomoedas, e permite visualizar o histórico de transações. Também é possível usar bônus e participar de promoções. É possível definir limites para depósitos e tempo de sessão."}',
             'order' => 17
            ]
        );
    }
}
