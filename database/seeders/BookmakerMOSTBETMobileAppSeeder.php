<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Mostbet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Mostbet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Mostbet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to Mostbet mobile applications for Android and iOS, users have full access to all services of the bookmaker platform. The apps allow not only placing bets on sports events but also playing casino games, slots, and live games with real dealers."}',
             'value_es' => '{"0":"Gracias a las aplicaciones móviles de Mostbet para Android e iOS, los usuarios tienen acceso completo a todos los servicios de la plataforma de apuestas. Las aplicaciones permiten no solo realizar apuestas en eventos deportivos, sino también jugar en el casino, tragamonedas y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Grâce aux applications mobiles Mostbet pour Android et iOS, les utilisateurs ont un accès complet à tous les services de la plateforme de paris. Les applications permettent non seulement de placer des paris sur des événements sportifs, mais aussi de jouer au casino, aux machines à sous et aux jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"Graças aos aplicativos móveis da Mostbet para Android e iOS, os usuários têm acesso completo a todos os serviços da plataforma de apostas. Os aplicativos permitem não apenas fazer apostas em eventos esportivos, mas também jogar no cassino, em slots e em jogos ao vivo com dealers reais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The interface is adapted for mobile screens, so all main functions are at your fingertips. It is also worth noting that Mostbet apps support current bonuses and promotions."}',
             'value_es' => '{"0":"La interfaz está adaptada a las pantallas móviles, por lo que todas las funciones principales están al alcance de la mano. También cabe destacar que las aplicaciones de Mostbet admiten bonos y promociones actuales."}',
             'value_fr' => '{"0":"L’interface est adaptée aux écrans mobiles, de sorte que toutes les fonctions principales sont à portée de main. Il convient également de noter que les applications Mostbet prennent en charge les bonus et promotions actuels."}',
             'value_pt' => '{"0":"A interface é adaptada para telas móveis, de modo que todas as funções principais estão ao alcance das mãos. Vale destacar também que os aplicativos Mostbet oferecem suporte a bônus e promoções atuais."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Mostbet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de Mostbet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles Mostbet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da Mostbet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Support for sports betting",
                                 "1":"Casino games",
                                 "2":"Convenient interface",
                                 "3":"Access to bonuses and promotions",
                                 "4":"Fast registration and login"},
                             "1":
                                {"0":"Limited support for some features",
                                 "1":"Possible restrictions in certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Soporte para apuestas deportivas",
                                 "1":"Juegos de casino",
                                 "2":"Interfaz conveniente",
                                 "3":"Acceso a bonos y promociones",
                                 "4":"Registro y inicio de sesión rápido"},
                             "1":
                                {"0":"Soporte limitado para algunas funciones",
                                 "1":"Posibles restricciones en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Support pour les paris sportifs",
                                 "1":"Jeux de casino",
                                 "2":"Interface pratique",
                                 "3":"Accès aux bonus et promotions",
                                 "4":"Inscription et connexion rapides"},
                             "1":
                                {"0":"Support limité pour certaines fonctionnalités",
                                 "1":"Restrictions possibles dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Suporte para apostas esportivas",
                                 "1":"Jogos de cassino",
                                 "2":"Interface conveniente",
                                 "3":"Acesso a bônus e promoções",
                                 "4":"Registro e login rápidos"},
                             "1":
                                {"0":"Suporte limitado para algumas funções",
                                 "1":"Possíveis restrições em alguns países"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet mobile app for Android devices is not available on the Play Store due to Google\'s gambling policy. Therefore, you need to visit the official platform website using a browser and go to the downloads section. In this section, you will find the Android app version in APK format."}',
             'value_es' => '{"0":"La aplicación móvil de Mostbet para dispositivos Android no está disponible en Play Store debido a la política de Google sobre juegos de azar. Por lo tanto, debes visitar el sitio web oficial de la plataforma desde un navegador y dirigirte a la sección de descargas. En esta sección encontrarás la versión de la aplicación para Android en formato APK."}',
             'value_fr' => '{"0":"L\'application mobile Mostbet pour les appareils Android n\'est pas disponible sur le Play Store en raison de la politique de Google sur les jeux d\'argent. Vous devez donc visiter le site officiel de la plateforme via un navigateur et accéder à la section des téléchargements. Dans cette section, vous trouverez la version Android de l\'application au format APK."}',
             'value_pt' => '{"0":"O aplicativo móvel Mostbet para dispositivos Android não está disponível na Play Store devido à política do Google sobre jogos de azar. Portanto, você precisa acessar o site oficial da plataforma pelo navegador e ir para a seção de downloads. Nesta seção, você encontrará a versão do aplicativo para Android no formato APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"After downloading the file to your device, you need to allow installation of apps from unknown sources in the security settings. To do this, open Settings on your device and go to the Security or Biometrics & Security section. Find the Install unknown apps option. Select the browser through which you downloaded the APK and enable the Allow from this source option."}',
             'value_es' => '{"0":"Después de descargar el archivo en tu dispositivo, necesitas permitir la instalación de aplicaciones desde fuentes desconocidas en la configuración de seguridad. Para ello, abre Configuración en tu dispositivo y ve a la sección Seguridad o Biometría y seguridad. Busca la opción Instalar aplicaciones desconocidas. Selecciona el navegador con el que descargaste el APK y activa la opción Permitir desde esta fuente."}',
             'value_fr' => '{"0":"Après avoir téléchargé le fichier sur votre appareil, vous devez autoriser l\'installation d\'applications provenant de sources inconnues dans les paramètres de sécurité. Pour ce faire, ouvrez Paramètres sur votre appareil et accédez à la section Sécurité ou Biometrie et sécurité. Trouvez l\'option Installer des applications inconnues. Sélectionnez le navigateur par lequel vous avez téléchargé le fichier APK et activez l\'option Autoriser à partir de cette source."}',
             'value_pt' => '{"0":"Após baixar o arquivo no seu dispositivo, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações de segurança. Para isso, abra Configurações no seu dispositivo e vá para a seção Segurança ou Biometria e segurança. Encontre a opção Instalar aplicativos de fontes desconhecidas. Selecione o navegador pelo qual você baixou o APK e ative a opção Permitir desta fonte."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Next, you should run the file and follow the on-screen instructions to complete the installation. After installation, you can log in to your account or register."}',
             'value_es' => '{"0":"A continuación, debes ejecutar el archivo y seguir las instrucciones en pantalla para completar la instalación. Después de la instalación, puedes iniciar sesión en tu cuenta o registrarte."}',
             'value_fr' => '{"0":"Ensuite, lancez le fichier et suivez les instructions à l\'écran pour terminer l\'installation. Après l\'installation, vous pouvez vous connecter à votre compte ou vous inscrire."}',
             'value_pt' => '{"0":"Em seguida, execute o arquivo e siga as instruções na tela para concluir a instalação. Após a instalação, você pode entrar na sua conta ou se registrar."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For iOS device users, the Mostbet mobile app is available on the App Store. Open the App Store and type «Mostbet» in the search bar. Then click the «Get» button, after which the app will download and automatically install on your device."}',
             'value_es' => '{"0":"Para los usuarios de dispositivos iOS, la aplicación móvil Mostbet está disponible en la App Store. Abre la App Store y escribe «Mostbet» en la barra de búsqueda. Luego haz clic en el botón «Obtener», después de lo cual la aplicación se descargará e instalará automáticamente en tu dispositivo."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’appareils iOS, l’application mobile Mostbet est disponible sur l’App Store. Ouvrez l’App Store et tapez «Mostbet» dans la barre de recherche. Cliquez ensuite sur le bouton « Obtenir », après quoi l’application se téléchargera et s’installera automatiquement sur votre appareil."}',
             'value_pt' => '{"0":"Para usuários de dispositivos iOS, o aplicativo móvel Mostbet está disponível na App Store. Abra a App Store e digite «Mostbet» na barra de pesquisa. Em seguida, clique no botão «Obter», após o qual o aplicativo será baixado e instalado automaticamente em seu dispositivo."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Once the installation is complete, you can open the app and log in to your account or create a new one."}',
             'value_es' => '{"0":"Una vez completada la instalación, puedes abrir la aplicación e iniciar sesión en tu cuenta o crear una nueva."}',
             'value_fr' => '{"0":"Une fois l’installation terminée, vous pouvez ouvrir l’application et vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Após a conclusão da instalação, você pode abrir o aplicativo e fazer login na sua conta ou criar uma nova."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Mostbet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de Mostbet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile Mostbet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da Mostbet"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet mobile app provides users with a wide range of features that make gameplay as convenient as possible. Users can place sports bets both pre-match and in live mode, while also viewing statistics to make informed decisions. The casino in the app includes hundreds of slots, table games, and live games with professional dealers."}',
             'value_es' => '{"0":"La aplicación móvil de Mostbet ofrece a los usuarios una amplia gama de funciones que hacen que la experiencia de juego sea lo más cómoda posible. Los usuarios pueden realizar apuestas deportivas tanto pre-partido como en vivo, además de consultar estadísticas para tomar decisiones informadas. El casino en la aplicación incluye cientos de tragamonedas, juegos de mesa y juegos en vivo con crupieres profesionales."}',
             'value_fr' => '{"0":"L’application mobile Mostbet offre aux utilisateurs une large gamme de fonctionnalités qui rendent le jeu aussi pratique que possible. Les utilisateurs peuvent placer des paris sportifs en pré-match et en direct, tout en consultant les statistiques pour prendre des décisions éclairées. Le casino de l’application comprend des centaines de machines à sous, de jeux de table et de jeux en direct avec des croupiers professionnels."}',
             'value_pt' => '{"0":"O aplicativo móvel Mostbet oferece aos usuários uma ampla gama de recursos que tornam o jogo o mais conveniente possível. Os usuários podem fazer apostas esportivas tanto no modo pré-jogo quanto ao vivo, além de visualizar estatísticas para tomar decisões informadas. O cassino no aplicativo inclui centenas de slots, jogos de mesa e jogos ao vivo com dealers profissionais."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"There is the option to watch live broadcasts of sports events. Deposits and withdrawals are supported through bank cards, e-wallets, local payment systems, and cryptocurrencies."}',
             'value_es' => '{"0":"Existe la opción de ver transmisiones en vivo de eventos deportivos. Los depósitos y retiros son compatibles mediante tarjetas bancarias, monederos electrónicos, sistemas de pago locales y criptomonedas."}',
             'value_fr' => '{"0":"Il est possible de regarder des diffusions en direct des événements sportifs. Les dépôts et retraits sont pris en charge via des cartes bancaires, des portefeuilles électroniques, des systèmes de paiement locaux et des cryptomonnaies."}',
             'value_pt' => '{"0":"Há a opção de assistir transmissões ao vivo de eventos esportivos. Depósitos e saques são suportados através de cartões bancários, carteiras eletrônicas, sistemas de pagamento locais e criptomoedas."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Users of the mobile app also gain access to exclusive bonuses and promotions, can set up notifications about bet results, changes in odds, and other events. With these features, the Mostbet app provides a comfortable gaming experience, fully allowing the desktop version of the platform to be replaced by the mobile format."}',
             'value_es' => '{"0":"Los usuarios de la aplicación móvil también tienen acceso a bonos y promociones exclusivas, pueden configurar notificaciones sobre resultados de apuestas, cambios en las cuotas y otros eventos. Con estas funciones, la aplicación de Mostbet ofrece una experiencia de juego cómoda, permitiendo reemplazar completamente la versión de escritorio por el formato móvil."}',
             'value_fr' => '{"0":"Les utilisateurs de l’application mobile ont également accès à des bonus et promotions exclusifs, peuvent configurer des notifications sur les résultats des paris, les changements de cotes et d’autres événements. Grâce à ces fonctionnalités, l’application Mostbet offre une expérience de jeu confortable, permettant de remplacer entièrement la version de bureau par le format mobile."}',
             'value_pt' => '{"0":"Os usuários do aplicativo móvel também têm acesso a bônus e promoções exclusivas, podem configurar notificações sobre resultados de apostas, alterações nas odds e outros eventos. Com esses recursos, o aplicativo Mostbet oferece uma experiência de jogo confortável, permitindo substituir completamente a versão para desktop pelo formato móvel."}',
             'order' => 17
            ]
        );
    }
}
