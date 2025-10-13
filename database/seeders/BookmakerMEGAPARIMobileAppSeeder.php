<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de MegaPari"}',
                'value_fr' => '{"0":"Revue de l\'application mobile MegaPari"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da MegaPari"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari offers its users full-featured mobile applications for Android and iOS, providing access to all the main functions of the platform. With the apps, you can place sports bets and live bets, play in the casino, participate in promotions, and follow event results in real time."}',
             'value_es' => '{"0":"MegaPari ofrece a sus usuarios aplicaciones móviles completas para Android e iOS, que permiten acceder a todas las funciones principales de la plataforma. Con las aplicaciones, puedes realizar apuestas deportivas y en vivo, jugar en el casino, participar en promociones y seguir los resultados de los eventos en tiempo real."}',
             'value_fr' => '{"0":"MegaPari propose à ses utilisateurs des applications mobiles complètes pour Android et iOS, offrant un accès à toutes les fonctionnalités principales de la plateforme. Avec les applications, vous pouvez placer des paris sportifs et des paris en direct, jouer au casino, participer aux promotions et suivre les résultats des événements en temps réel."}',
             'value_pt' => '{"0":"MegaPari oferece aos seus usuários aplicativos móveis completos para Android e iOS, proporcionando acesso a todas as principais funções da plataforma. Com os aplicativos, você pode fazer apostas esportivas e apostas ao vivo, jogar no cassino, participar de promoções e acompanhar os resultados dos eventos em tempo real."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will discuss the pros and cons of MegaPari mobile applications. You will also learn how to install the apps on Android and iOS."}',
             'value_es' => '{"0":"En esta reseña, hablaremos de las ventajas y desventajas de las aplicaciones móviles de MegaPari. También aprenderás cómo instalar las aplicaciones en Android e iOS."}',
             'value_fr' => '{"0":"Dans cette revue, nous discuterons des avantages et des inconvénients des applications mobiles MegaPari. Vous découvrirez également comment installer les applications sur Android et iOS."}',
             'value_pt' => '{"0":"Nesta análise, discutiremos os prós e contras dos aplicativos móveis MegaPari. Você também aprenderá como instalar os aplicativos no Android e iOS."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the MegaPari Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de MegaPari"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles MegaPari"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da MegaPari"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ease of use",
                                 "1":"Apps are optimized for mobile devices",
                                 "2":"Intuitive interface",
                                 "3":"Push notifications"},
                             "1":
                                {"0":"Android app not available on Google Play Store",
                                 "1":"Need to use TestFlight for iOS"}
                             }',
             'value_es' => '{"0":
                                {"0":"Facilidad de uso",
                                 "1":"Las aplicaciones están optimizadas para dispositivos móviles",
                                 "2":"Interfaz intuitiva",
                                 "3":"Notificaciones push"},
                             "1":
                                {"0":"Aplicación de Android no disponible en Google Play Store",
                                 "1":"Necesidad de usar TestFlight para iOS"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Facilité d\'utilisation",
                                 "1":"Les applications sont optimisées pour les appareils mobiles",
                                 "2":"Interface intuitive",
                                 "3":"Notifications push"},
                             "1":
                                {"0":"L\'application Android n\'est pas disponible sur le Google Play Store",
                                 "1":"Nécessité d\'utiliser TestFlight pour iOS"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Facilidade de uso",
                                 "1":"Os aplicativos são otimizados para dispositivos móveis",
                                 "2":"Interface intuitiva",
                                 "3":"Notificações push"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Google Play Store",
                                 "1":"Necessidade de usar TestFlight para iOS"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To install the MegaPari app on Android, you need to open the official platform website through a mobile browser and go to the section for downloading the mobile app for Android. The link is located at the bottom of the page on the right."}',
             'value_es' => '{"0":"Para instalar la aplicación MegaPari en Android, debes abrir el sitio web oficial de la plataforma a través de un navegador móvil y acceder a la sección de descarga de la aplicación móvil para Android. El enlace se encuentra en la parte inferior de la página, a la derecha."}',
             'value_fr' => '{"0":"Pour installer l’application MegaPari sur Android, vous devez ouvrir le site officiel de la plateforme via un navigateur mobile et accéder à la section de téléchargement de l’application mobile pour Android. Le lien se trouve en bas de la page, à droite."}',
             'value_pt' => '{"0":"Para instalar o aplicativo MegaPari no Android, você precisa abrir o site oficial da plataforma através de um navegador móvel e acessar a seção de download do aplicativo móvel para Android. O link está localizado na parte inferior da página, à direita."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"After that, download the APK file to your device and allow installation from unknown sources in the settings. To do this, open «Settings» on your device and go to «Biometrics and Security». Find the «Install from Unknown Sources» option. Select the app through which you downloaded the APK, in this case the browser, and enable the «Allow from this source» option. You can now install the app."}',
             'value_es' => '{"0":"Después de eso, descarga el archivo APK en tu dispositivo y permite la instalación desde fuentes desconocidas en la configuración. Para ello, abre «Configuración» en tu dispositivo y ve a «Biometría y seguridad». Busca la opción «Instalar desde fuentes desconocidas». Selecciona la aplicación a través de la cual descargaste el APK, en este caso el navegador, y activa la opción «Permitir desde esta fuente». Ahora puedes instalar la aplicación."}',
             'value_fr' => '{"0":"Ensuite, téléchargez le fichier APK sur votre appareil et autorisez l’installation depuis des sources inconnues dans les paramètres. Pour cela, ouvrez « Paramètres » sur votre appareil et allez dans « Biométrie et sécurité ». Trouvez l’option « Installer à partir de sources inconnues ». Sélectionnez l’application via laquelle vous avez téléchargé l’APK, dans ce cas le navigateur, et activez l’option « Autoriser à partir de cette source ». Vous pouvez maintenant installer l’application."}',
             'value_pt' => '{"0":"Em seguida, baixe o arquivo APK para o seu dispositivo e permita a instalação a partir de fontes desconhecidas nas configurações. Para isso, abra «Configurações» no seu dispositivo e vá para «Biometria e segurança». Encontre a opção «Instalar a partir de fontes desconhecidas». Selecione o aplicativo pelo qual você baixou o APK, neste caso o navegador, e ative a opção «Permitir a partir desta fonte». Agora você pode instalar o aplicativo."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For the app to work correctly, you need a device running Android version 5.0 or higher, as well as enough free memory to install the file."}',
             'value_es' => '{"0":"Para que la aplicación funcione correctamente, necesitas un dispositivo con Android versión 5.0 o superior, así como suficiente memoria libre para instalar el archivo."}',
             'value_fr' => '{"0":"Pour que l’application fonctionne correctement, vous devez disposer d’un appareil sous Android version 5.0 ou supérieure, ainsi que d’un espace mémoire suffisant pour installer le fichier."}',
             'value_pt' => '{"0":"Para que o aplicativo funcione corretamente, você precisa de um dispositivo com Android versão 5.0 ou superior, bem como espaço de memória suficiente para instalar o arquivo."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, the mobile app can be downloaded from the App Store. However, there is a small detail: you need to install TestFlight first."}',
             'value_es' => '{"0":"Para los usuarios de iOS, la aplicación móvil se puede descargar desde App Store. Sin embargo, hay un pequeño detalle: primero debes instalar TestFlight."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, l’application mobile peut être téléchargée depuis l’App Store. Cependant, il y a un petit détail : il faut d’abord installer TestFlight."}',
             'value_pt' => '{"0":"Para usuários de iOS, o aplicativo móvel pode ser baixado na App Store. No entanto, há um pequeno detalhe: primeiro é necessário instalar o TestFlight."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Go to the TestFlight website and click «View in App Store» to open the App Store. You can find the link on the mobile apps download section on the official MegaPari website. Download the TestFlight app from the App Store. Wait for the installation to complete and open the TestFlight app. Click the «Continue» button. Allow notifications from TestFlight. In the opened window, install the MegaPari app. Wait for the installation to complete and open the MegaPari app."}',
             'value_es' => '{"0":"Visita el sitio web de TestFlight y haz clic en «Ver en App Store» para abrir App Store. Puedes encontrar el enlace en la sección de descarga de aplicaciones móviles en el sitio web oficial de MegaPari. Descarga la aplicación TestFlight desde App Store. Espera a que la instalación se complete y abre la aplicación TestFlight. Haz clic en el botón «Continuar». Permite las notificaciones de TestFlight. En la ventana que se abre, instala la aplicación MegaPari. Espera a que la instalación se complete y abre la aplicación MegaPari."}',
             'value_fr' => '{"0":"Allez sur le site de TestFlight et cliquez sur « Voir dans l’App Store » pour ouvrir l’App Store. Vous pouvez trouver le lien dans la section de téléchargement des applications mobiles sur le site officiel de MegaPari. Téléchargez l’application TestFlight depuis l’App Store. Attendez la fin de l’installation et ouvrez l’application TestFlight. Cliquez sur le bouton « Continuer ». Autorisez les notifications de TestFlight. Dans la fenêtre ouverte, installez l’application MegaPari. Attendez la fin de l’installation et ouvrez l’application MegaPari."}',
             'value_pt' => '{"0":"Acesse o site do TestFlight e clique em «Ver na App Store» para abrir a App Store. Você pode encontrar o link na seção de download de aplicativos móveis no site oficial da MegaPari. Baixe o aplicativo TestFlight na App Store. Aguarde a conclusão da instalação e abra o aplicativo TestFlight. Clique no botão «Continuar». Permita as notificações do TestFlight. Na janela aberta, instale o aplicativo MegaPari. Aguarde a conclusão da instalação e abra o aplicativo MegaPari."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the opened window, click the «Next» button. In the following window, allow notifications. Click «Start Testing» to launch MegaPari. Now you can place bets, enjoy games, and win big!"}',
             'value_es' => '{"0":"En la ventana que se abre, haz clic en el botón «Siguiente». En la ventana que aparece, permite las notificaciones. Haz clic en «Comenzar prueba» para iniciar MegaPari. ¡Ahora puedes hacer apuestas, disfrutar de los juegos y ganar grandes premios!"}',
             'value_fr' => '{"0":"Dans la fenêtre ouverte, cliquez sur le bouton « Suivant ». Dans la fenêtre suivante, autorisez les notifications. Cliquez sur « Commencer le test » pour lancer MegaPari. Vous pouvez maintenant placer des paris, profiter des jeux et gagner gros !"}',
             'value_pt' => '{"0":"Na janela aberta, clique no botão «Avançar». Na janela seguinte, permita as notificações. Clique em «Iniciar Teste» para lançar o MegaPari. Agora você pode fazer apostas, aproveitar os jogos e ganhar prêmios grandes!"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the MegaPari Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de MegaPari"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile MegaPari"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da MegaPari"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The MegaPari mobile app provides full access to all platform features. Users can place bets on sports, including football, tennis, basketball, hockey, esports, and other disciplines. The app supports live betting and live match broadcasts, allowing users to place bets in real time and track results."}',
             'value_es' => '{"0":"La aplicación móvil MegaPari ofrece acceso completo a todas las funciones de la plataforma. Los usuarios pueden realizar apuestas deportivas, incluyendo fútbol, tenis, baloncesto, hockey, deportes electrónicos y otras disciplinas. La aplicación admite apuestas en vivo y transmisiones en directo de los partidos, lo que permite realizar apuestas en tiempo real y seguir los resultados."}',
             'value_fr' => '{"0":"L’application mobile MegaPari offre un accès complet à toutes les fonctionnalités de la plateforme. Les utilisateurs peuvent parier sur des sports tels que le football, le tennis, le basketball, le hockey, l’e-sport et d’autres disciplines. L’application prend en charge les paris en direct et les diffusions en direct des matchs, permettant aux utilisateurs de parier en temps réel et de suivre les résultats."}',
             'value_pt' => '{"0":"O aplicativo móvel MegaPari oferece acesso completo a todas as funções da plataforma. Os usuários podem fazer apostas em esportes, incluindo futebol, tênis, basquete, hóquei, e-sports e outras disciplinas. O aplicativo suporta apostas ao vivo e transmissões de partidas em tempo real, permitindo que os usuários façam apostas em tempo real e acompanhem os resultados."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In addition, the app allows playing in the casino, including slots, table games, and live games with real dealers. Users can deposit funds and withdraw winnings using various payment methods, as well as participate in all promotions and bonus offers. The app also allows contacting customer support, including via chat."}',
             'value_es' => '{"0":"Además, la aplicación permite jugar en el casino, incluyendo tragamonedas, juegos de mesa y juegos en vivo con crupieres reales. Los usuarios pueden depositar fondos y retirar ganancias mediante varios métodos de pago, así como participar en todas las promociones y ofertas de bonos. La aplicación también permite contactar al servicio de atención al cliente, incluido el chat."}',
             'value_fr' => '{"0":"De plus, l’application permet de jouer au casino, y compris aux machines à sous, aux jeux de table et aux jeux en direct avec de vrais croupiers. Les utilisateurs peuvent déposer des fonds et retirer leurs gains via différents moyens de paiement, ainsi que participer à toutes les promotions et offres de bonus. L’application permet également de contacter le support client, notamment via le chat."}',
             'value_pt' => '{"0":"Além disso, o aplicativo permite jogar no cassino, incluindo slots, jogos de mesa e jogos ao vivo com dealers reais. Os usuários podem depositar fundos e retirar ganhos usando vários métodos de pagamento, bem como participar de todas as promoções e ofertas de bônus. O aplicativo também permite entrar em contato com o suporte ao cliente, incluindo via chat."}',
             'order' => 17
            ]
        );
    }
}
