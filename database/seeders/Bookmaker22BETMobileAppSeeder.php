<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 22BET"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 22BET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET mobile applications for Android and iOS are designed for those who want full access to the platform without being tied to a computer. With the apps, you can place sports bets, including football, tennis, basketball, hockey, and esports, as well as play in the casino."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 22BET para Android e iOS están diseñadas para quienes desean tener acceso completo a la plataforma sin depender de un ordenador. Con las aplicaciones, puedes realizar apuestas deportivas, incluyendo fútbol, tenis, baloncesto, hockey y deportes electrónicos, así como jugar en el casino."}',
             'value_fr' => '{"0":"Les applications mobiles 22BET pour Android et iOS sont conçues pour ceux qui souhaitent avoir un accès complet à la plateforme sans être attachés à un ordinateur. Avec les applications, vous pouvez placer des paris sportifs, y compris sur le football, le tennis, le basketball, le hockey et les esports, ainsi que jouer au casino."}',
             'value_pt' => '{"0":"Os aplicativos móveis 22BET para Android e iOS foram criados para quem deseja ter acesso completo à plataforma sem depender de um computador. Com os aplicativos, é possível fazer apostas esportivas, incluindo futebol, tênis, basquete, hóquei e esports, além de jogar no cassino."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The interface is adapted for mobile devices, providing comfortable navigation even on small screens. Importantly, the functionality of the mobile apps is almost identical to the full version of the website."}',
             'value_es' => '{"0":"La interfaz está adaptada para dispositivos móviles, lo que permite una navegación cómoda incluso en pantallas pequeñas. Es importante destacar que la funcionalidad de las aplicaciones móviles es casi idéntica a la versión completa del sitio web."}',
             'value_fr' => '{"0":"L’interface est adaptée aux appareils mobiles, offrant une navigation confortable même sur de petits écrans. Il est important de noter que les fonctionnalités des applications mobiles sont presque identiques à celles de la version complète du site."}',
             'value_pt' => '{"0":"A interface é adaptada para dispositivos móveis, garantindo navegação confortável mesmo em telas pequenas. É importante destacar que a funcionalidade dos aplicativos móveis é praticamente idêntica à versão completa do site."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 22BET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 22BET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 22BET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 22BET"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Convenient navigation",
                                 "1":"Push notifications support",
                                 "2":"Access to all types of bets",
                                 "3":"Ability to watch live streams",
                                 "4":"Promotion support"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                 "1":"Some features may be restricted in certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Navegación cómoda",
                                 "1":"Compatibilidad con notificaciones push",
                                 "2":"Acceso a todo tipo de apuestas",
                                 "3":"Posibilidad de ver transmisiones en vivo",
                                 "4":"Soporte para promociones"},
                             "1":
                                {"0":"Aplicación de Android no disponible en Google Play",
                                 "1":"Algunas funciones pueden estar restringidas en ciertos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Navigation pratique",
                                 "1":"Prise en charge des notifications push",
                                 "2":"Accès à tous les types de paris",
                                 "3":"Possibilité de regarder les diffusions en direct",
                                 "4":"Support des promotions"},
                             "1":
                                {"0":"Application Android non disponible sur Google Play",
                                 "1":"Certaines fonctionnalités peuvent être limitées dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Navegação conveniente",
                                 "1":"Suporte a notificações push",
                                 "2":"Acesso a todos os tipos de apostas",
                                 "3":"Possibilidade de assistir a transmissões ao vivo",
                                 "4":"Suporte a promoções"},
                             "1":
                                {"0":"Aplicativo Android não disponível no Google Play",
                                 "1":"Algumas funções podem ser restritas em certos países"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Since the Android app is not available on Google Play due to Google’s gambling policies, the installation procedure differs from the standard one. To install the 22BET app on Android, you need to open the official website via a mobile browser and go to the Android app download section."}',
             'value_es' => '{"0":"Dado que la aplicación de Android no está disponible en Google Play debido a las políticas de juegos de azar de Google, el procedimiento de instalación es diferente al estándar. Para instalar la aplicación 22BET en Android, debes abrir el sitio web oficial a través de un navegador móvil y acceder a la sección de descarga de la aplicación Android."}',
             'value_fr' => '{"0":"Comme l’application Android n’est pas disponible sur Google Play en raison des politiques de jeu de Google, la procédure d’installation diffère de la procédure standard. Pour installer l’application 22BET sur Android, vous devez ouvrir le site officiel via un navigateur mobile et accéder à la section de téléchargement de l’application Android."}',
             'value_pt' => '{"0":"Como o aplicativo Android não está disponível no Google Play devido às políticas de jogos de azar do Google, o procedimento de instalação difere do padrão. Para instalar o aplicativo 22BET no Android, é necessário abrir o site oficial por meio de um navegador móvel e acessar a seção de download do aplicativo Android."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"After downloading the APK file, you must allow the installation of apps from unknown sources in your device settings. To do this, open «Settings», go to «Biometrics and Security», find «Install unknown apps», select the browser through which you downloaded the file, and enable the «Allow from this source» option."}',
             'value_es' => '{"0":"Después de descargar el archivo APK, debes permitir la instalación de aplicaciones de fuentes desconocidas en la configuración del dispositivo. Para ello, abre «Configuración», ve a «Biometría y seguridad», busca «Instalar aplicaciones desconocidas», selecciona el navegador desde el cual descargaste el archivo y activa la opción «Permitir desde esta fuente»."}',
             'value_fr' => '{"0":"Après avoir téléchargé le fichier APK, vous devez autoriser l’installation d’applications provenant de sources inconnues dans les paramètres de votre appareil. Pour cela, ouvrez « Paramètres », allez dans « Biométrie et sécurité », trouvez « Installer des applications inconnues », sélectionnez le navigateur avec lequel vous avez téléchargé le fichier et activez l’option « Autoriser à partir de cette source »."}',
             'value_pt' => '{"0":"Após baixar o arquivo APK, é preciso permitir a instalação de aplicativos de fontes desconhecidas nas configurações do dispositivo. Para isso, abra «Configurações», vá para «Biometria e segurança», encontre «Instalar apps desconhecidos», selecione o navegador pelo qual baixou o arquivo e ative a opção «Permitir desta fonte»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"After that, the APK file can be installed on the device. For stable app performance, the device should have Android version 5.0 or higher and enough free storage for the file."}',
             'value_es' => '{"0":"Después de esto, el archivo APK se puede instalar en el dispositivo. Para un rendimiento estable de la aplicación, el dispositivo debe tener Android versión 5.0 o superior y suficiente espacio libre para el archivo."}',
             'value_fr' => '{"0":"Après cela, le fichier APK peut être installé sur l’appareil. Pour un fonctionnement stable de l’application, l’appareil doit disposer d’Android version 5.0 ou supérieure et de suffisamment d’espace libre pour le fichier."}',
             'value_pt' => '{"0":"Depois disso, o arquivo APK pode ser instalado no dispositivo. Para o funcionamento estável do aplicativo, o dispositivo deve ter Android versão 5.0 ou superior e espaço livre suficiente para o arquivo."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For iOS, the app installation process is no different from installing other apps since it is available on the App Store. Simply open the App Store, type «22BET» in the search bar, and tap «Get»."}',
             'value_es' => '{"0":"Para iOS, el proceso de instalación de la aplicación no difiere del de otras aplicaciones, ya que está disponible en la App Store. Simplemente abre la App Store, escribe «22BET» en la barra de búsqueda y pulsa «Obtener»."}',
             'value_fr' => '{"0":"Pour iOS, le processus d’installation de l’application ne diffère pas de celui des autres applications, car elle est disponible sur l’App Store. Il suffit d’ouvrir l’App Store, de taper «22BET» dans la barre de recherche et d’appuyer sur «Obtenir»."}',
             'value_pt' => '{"0":"Para iOS, o processo de instalação do aplicativo não difere da instalação de outros aplicativos, pois ele está disponível na App Store. Basta abrir a App Store, digitar «22BET» na barra de pesquisa e tocar em «Obter»."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The app will be installed on your device, after which you will have full access to sports betting, casino games, live bets, and promotions."}',
             'value_es' => '{"0":"La aplicación se instalará en tu dispositivo y, a partir de ese momento, tendrás acceso completo a apuestas deportivas, juegos de casino, apuestas en vivo y promociones."}',
             'value_fr' => '{"0":"L’application sera installée sur votre appareil, après quoi vous aurez un accès complet aux paris sportifs, au casino, aux paris en direct et aux promotions."}',
             'value_pt' => '{"0":"O aplicativo será instalado no seu dispositivo, e a partir daí você terá acesso completo a apostas esportivas, cassino, apostas ao vivo e promoções."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 22BET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 22BET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 22BET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 22BET"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET mobile app allows users to place bets on dozens of sports, including esports, participate in live betting, and watch live match broadcasts. Users can play slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil 22BET permite a los usuarios realizar apuestas en decenas de deportes, incluido el esports, participar en apuestas en vivo y ver transmisiones en directo de los partidos. Los usuarios pueden jugar a tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile 22BET permet aux utilisateurs de parier sur des dizaines de sports, y compris l’esport, de participer à des paris en direct et de regarder les matchs en streaming. Les utilisateurs peuvent jouer aux machines à sous, aux jeux de table et aux jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O aplicativo móvel 22BET permite aos usuários fazer apostas em dezenas de esportes, incluindo esports, participar de apostas ao vivo e assistir a transmissões ao vivo das partidas. Os usuários podem jogar em slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The app supports all bonus offers and promotions, provides the ability to deposit funds and withdraw winnings using various payment methods. Additionally, round-the-clock customer support is available through the app. The app ensures stable performance even during peak loads and automatically synchronizes with the user’s account on the website."}',
             'value_es' => '{"0":"La aplicación admite todas las ofertas de bonificación y promociones, y ofrece la posibilidad de depositar fondos y retirar ganancias mediante varios métodos de pago. Además, la atención al cliente está disponible las 24 horas a través de la aplicación. La aplicación garantiza un funcionamiento estable incluso durante picos de carga y se sincroniza automáticamente con la cuenta del usuario en el sitio web."}',
             'value_fr' => '{"0":"L’application prend en charge toutes les offres et promotions de bonus, offre la possibilité de déposer des fonds et de retirer ses gains via différents moyens de paiement. De plus, le support client est disponible 24h/24 via l’application. L’application assure une performance stable même lors des pics de charge et se synchronise automatiquement avec le compte de l’utilisateur sur le site web."}',
             'value_pt' => '{"0":"O aplicativo oferece suporte a todas as ofertas de bônus e promoções, possibilita depósitos e saques usando diversos métodos de pagamento. Além disso, o suporte ao cliente está disponível 24 horas por dia pelo aplicativo. O aplicativo garante funcionamento estável mesmo durante picos de uso e sincroniza automaticamente com a conta do usuário no site."}',
             'order' => 16
            ]
        );
    }
}
