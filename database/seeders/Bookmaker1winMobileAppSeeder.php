<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1win"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1win"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, the company has created a mobile app for Android, as well as a web app for iOS users, which operates directly through the Safari browser. Both versions provide quick access to betting, casino games, live streams, and bonus programs, making the 1win mobile product one of the most functional among competitors."}',
             'value_es' => '{"0":"Actualmente, la compañía ha creado una aplicación móvil para Android, así como una aplicación web para usuarios de iOS, que funciona directamente a través del navegador Safari. Ambas versiones ofrecen acceso rápido a apuestas, juegos de casino, transmisiones en vivo y programas de bonificación, lo que convierte al producto móvil de 1win en uno de los más funcionales entre sus competidores."}',
             'value_fr' => '{"0":"À l\'heure actuelle, la société a créé une application mobile pour Android, ainsi qu\'une application web pour les utilisateurs iOS, qui fonctionne directement via le navigateur Safari. Les deux versions offrent un accès rapide aux paris, aux jeux de casino, aux diffusions en direct et aux programmes de bonus, faisant du produit mobile 1win l\'un des plus fonctionnels parmi les concurrents."}',
             'value_pt' => '{"0":"Atualmente, a empresa criou um aplicativo móvel para Android, bem como um aplicativo web para usuários de iOS, que funciona diretamente através do navegador Safari. Ambas as versões oferecem acesso rápido a apostas, cassino, transmissões ao vivo e programas de bônus, tornando o produto móvel da 1win um dos mais funcionais entre os concorrentes."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will discuss the advantages and disadvantages of the mobile apps and take a detailed look at the installation process for Android and iOS smartphones."}',
             'value_es' => '{"0":"En esta reseña, hablaremos sobre las ventajas y desventajas de las aplicaciones móviles y revisaremos detalladamente el proceso de instalación en smartphones Android e iOS."}',
             'value_fr' => '{"0":"Dans cette revue, nous parlerons des avantages et des inconvénients des applications mobiles et examinerons en détail le processus d\'installation sur les smartphones Android et iOS."}',
             'value_pt' => '{"0":"Nesta análise, vamos falar sobre as vantagens e desvantagens dos aplicativos móveis e examinar detalhadamente o processo de instalação em smartphones Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 1win Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1win"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1win"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1win"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"User-friendly interface",
                                 "1":"Ability to place pre-match and live bets",
                                 "2":"Ability to play in the casino",
                                 "3":"Support for deposits and withdrawals",
                                 "4":"Push notifications"},
                             "1":
                                {"0":"No iOS app in the App Store",
                                 "1":"No Android app in Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz fácil de usar",
                                 "1":"Posibilidad de realizar apuestas pre-match y en vivo",
                                 "2":"Posibilidad de jugar en el casino",
                                 "3":"Soporte para depósitos y retiros",
                                 "4":"Notificaciones push"},
                             "1":
                                {"0":"No hay aplicación para iOS en App Store",
                                 "1":"No hay aplicación para Android en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface conviviale",
                                 "1":"Possibilité de placer des paris pré-match et en direct",
                                 "2":"Possibilité de jouer au casino",
                                 "3":"Support des dépôts et des retraits",
                                 "4":"Notifications push"},
                             "1":
                                {"0":"Pas d\'application iOS sur l\'App Store",
                                 "1":"Pas d\'application Android sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface amigável",
                                 "1":"Possibilidade de fazer apostas pré-jogo e ao vivo",
                                 "2":"Possibilidade de jogar no cassino",
                                 "3":"Suporte para depósitos e saques",
                                 "4":"Notificações push"},
                             "1":
                                {"0":"Sem aplicativo iOS na App Store",
                                 "1":"Sem aplicativo Android no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1win mobile app on Android, you need to visit the official bookmaker website from your mobile device and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil 1win en Android, debes visitar el sitio web oficial de la casa de apuestas desde tu dispositivo móvil y descargar el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application mobile 1win sur Android, vous devez visiter le site officiel du bookmaker depuis votre appareil mobile et télécharger le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel 1win no Android, você precisa acessar o site oficial da casa de apostas a partir do seu dispositivo móvel e baixar o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, you need to allow installation of apps from unknown sources in your phone settings. To do this, open your smartphone settings and go to the Security section. Find the option Allow installation from unknown sources. Select the browser from which you downloaded the APK file and enable the installation permission."}',
             'value_es' => '{"0":"Después de la descarga, necesitas permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración de tu teléfono. Para ello, abre la configuración de tu smartphone y ve a la sección Seguridad. Encuentra la opción Permitir instalación desde fuentes desconocidas. Selecciona el navegador desde el cual descargaste el archivo APK y activa el permiso de instalación."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre téléphone. Pour cela, ouvrez les paramètres de votre smartphone et allez dans la section Sécurité. Trouvez l’option Autoriser l’installation à partir de sources inconnues. Sélectionnez le navigateur à partir duquel vous avez téléchargé le fichier APK et activez l’autorisation d’installation."}',
             'value_pt' => '{"0":"Após o download, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone. Para isso, abra as configurações do smartphone e vá para a seção Segurança. Encontre a opção Permitir instalação de fontes desconhecidas. Selecione o navegador do qual você baixou o arquivo APK e ative a permissão de instalação."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Now you can run the file to install the app. After that, a shortcut will appear on the screen, and you can immediately log in to your account or create a new one."}',
             'value_es' => '{"0":"Ahora puedes ejecutar el archivo para instalar la aplicación. Después de eso, aparecerá un acceso directo en la pantalla y podrás iniciar sesión en tu cuenta o crear una nueva."}',
             'value_fr' => '{"0":"Vous pouvez maintenant lancer le fichier pour installer l’application. Après cela, un raccourci apparaîtra sur l’écran et vous pourrez immédiatement vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Agora você pode executar o arquivo para instalar o aplicativo. Depois disso, um atalho aparecerá na tela e você poderá entrar na sua conta imediatamente ou criar uma nova."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For iPhone and iPad users, 1win offers a web app that runs through the Safari browser."}',
             'value_es' => '{"0":"Para los usuarios de iPhone y iPad, 1win ofrece una aplicación web que funciona a través del navegador Safari."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’iPhone et d’iPad, 1win propose une application web qui fonctionne via le navigateur Safari."}',
             'value_pt' => '{"0":"Para usuários de iPhone e iPad, a 1win oferece um web app que funciona através do navegador Safari."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To use it, open the official 1win website on your mobile device and wait for the page to fully load. Then tap the Share button in the browser and select the Add to Home Screen option. After confirming the action, an icon will appear on the screen, which will open the web app in a format very close to a native application. This way, you get access to all 1win functionality without limitations."}',
             'value_es' => '{"0":"Para usarla, abre el sitio web oficial de 1win en tu dispositivo móvil y espera a que la página se cargue completamente. Luego toca el botón Compartir en el navegador y selecciona la opción Agregar a la pantalla de inicio. Después de confirmar la acción, aparecerá un icono en la pantalla que abrirá la aplicación web en un formato muy similar a una aplicación nativa. De esta manera, obtienes acceso a toda la funcionalidad de 1win sin limitaciones."}',
             'value_fr' => '{"0":"Pour l’utiliser, ouvrez le site officiel de 1win sur votre appareil mobile et attendez que la page se charge complètement. Ensuite, appuyez sur le bouton Partager dans le navigateur et sélectionnez l’option Ajouter à l’écran d’accueil. Après avoir confirmé l’action, une icône apparaîtra à l’écran, ouvrant l’application web dans un format très proche d’une application native. Ainsi, vous avez accès à toutes les fonctionnalités de 1win sans limitations."}',
             'value_pt' => '{"0":"Para utilizá-lo, abra o site oficial da 1win no seu dispositivo móvel e aguarde o carregamento completo da página. Em seguida, toque no botão Compartilhar no navegador e selecione a opção Adicionar à Tela de Início. Após confirmar a ação, um ícone aparecerá na tela, que abrirá o web app em um formato muito próximo de um aplicativo nativo. Dessa forma, você terá acesso a todas as funcionalidades da 1win sem limitações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 1win Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 1win"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1win"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1win"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The 1win mobile app combines all the main tools for sports betting and casino games. The app offers both pre-match and live bets. You can also watch live streams while placing bets in real time. The casino section includes thousands of slots, table games, and live dealer games, providing a full casino experience."}',
             'value_es' => '{"0":"La aplicación móvil 1win combina todas las herramientas principales para apuestas deportivas y juegos de casino. La aplicación ofrece apuestas tanto prepartido como en vivo. También se pueden ver transmisiones en directo mientras se realizan apuestas en tiempo real. La sección de casino incluye miles de tragamonedas, juegos de mesa y juegos con crupieres en vivo, ofreciendo una experiencia completa de casino."}',
             'value_fr' => '{"0":"L’application mobile 1win regroupe tous les outils principaux pour les paris sportifs et les jeux de casino. L’application propose des paris avant match et en direct. Il est également possible de regarder des diffusions en direct tout en pariant en temps réel. La section casino comprend des milliers de machines à sous, de jeux de table et de jeux avec croupiers en direct, offrant une expérience de casino complète."}',
             'value_pt' => '{"0":"O aplicativo móvel 1win combina todas as ferramentas principais para apostas esportivas e jogos de cassino. O aplicativo oferece apostas pré-jogo e ao vivo. Também é possível assistir a transmissões ao vivo enquanto faz apostas em tempo real. A seção de cassino inclui milhares de slots, jogos de mesa e jogos com dealers ao vivo, proporcionando uma experiência completa de cassino."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"With the app, you can deposit and withdraw funds using bank cards, e-wallets, and cryptocurrencies. The app supports push notifications, allowing you to track match results, new bonuses, and personalized offers. Thanks to interface optimization, the mobile app runs smoothly even with an unstable internet connection and provides full access to all features available on the desktop version of the site."}',
             'value_es' => '{"0":"Con la aplicación, puedes depositar y retirar fondos utilizando tarjetas bancarias, monederos electrónicos y criptomonedas. La aplicación admite notificaciones push, lo que permite seguir los resultados de los partidos, los nuevos bonos y las ofertas personalizadas. Gracias a la optimización de la interfaz, la aplicación móvil funciona sin problemas incluso con una conexión a internet inestable y proporciona acceso completo a todas las funciones disponibles en la versión de escritorio del sitio."}',
             'value_fr' => '{"0":"Grâce à l’application, vous pouvez déposer et retirer des fonds en utilisant des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies. L’application prend en charge les notifications push, permettant de suivre les résultats des matchs, les nouveaux bonus et les offres personnalisées. Grâce à l’optimisation de l’interface, l’application mobile fonctionne rapidement même avec une connexion internet instable et donne un accès complet à toutes les fonctionnalités disponibles dans la version desktop du site."}',
             'value_pt' => '{"0":"Com o aplicativo, você pode depositar e sacar fundos usando cartões bancários, carteiras eletrônicas e criptomoedas. O aplicativo suporta notificações push, permitindo acompanhar os resultados das partidas, novos bônus e ofertas personalizadas. Graças à otimização da interface, o aplicativo móvel funciona rapidamente mesmo com uma conexão de internet instável e oferece acesso total a todas as funções disponíveis na versão para desktop do site."}',
             'order' => 16
            ]
        );
    }
}
