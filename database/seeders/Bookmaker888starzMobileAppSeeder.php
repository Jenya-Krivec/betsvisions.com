<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 888Starz"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 888Starz"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 888Starz"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz has developed mobile applications for Android and iOS, allowing users to have full access to all platform features without the need to use the desktop version of the site. With the app, you can track odds changes in real time, place live bets, play slots and table games, watch live streams, and participate in promotions and bonus programs."}',
             'value_es' => '{"0":"888Starz ha desarrollado aplicaciones móviles para Android e iOS, que permiten a los usuarios acceder a todas las funciones de la plataforma sin necesidad de usar la versión de escritorio del sitio. Con la aplicación, puedes seguir los cambios en las cuotas en tiempo real, realizar apuestas en vivo, jugar a tragamonedas y juegos de mesa, ver transmisiones en directo y participar en promociones y programas de bonificación."}',
             'value_fr' => '{"0":"888Starz a développé des applications mobiles pour Android et iOS, permettant aux utilisateurs d\'accéder à toutes les fonctionnalités de la plateforme sans avoir besoin d\'utiliser la version bureau du site. Avec l\'application, vous pouvez suivre les changements des cotes en temps réel, placer des paris en direct, jouer aux machines à sous et aux jeux de table, regarder des diffusions en direct et participer aux promotions et programmes de bonus."}',
             'value_pt' => '{"0":"A 888Starz desenvolveu aplicativos móveis para Android e iOS, que permitem aos usuários ter acesso completo a todos os recursos da plataforma sem a necessidade de usar a versão para desktop do site. Com o aplicativo, é possível acompanhar as mudanças nas odds em tempo real, fazer apostas ao vivo, jogar slots e jogos de mesa, assistir a transmissões ao vivo e participar de promoções e programas de bônus."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The app interface is designed so that even beginners can easily navigate the sections and quickly find the desired feature. Additionally, the mobile applications support multiple languages and currencies, making them convenient for users from different countries."}',
             'value_es' => '{"0":"La interfaz de la aplicación está diseñada para que incluso los principiantes puedan navegar fácilmente por las secciones y encontrar rápidamente la función deseada. Además, las aplicaciones móviles admiten varios idiomas y monedas, lo que las hace convenientes para usuarios de diferentes países."}',
             'value_fr' => '{"0":"L\'interface de l\'application est conçue de manière à ce que même les débutants puissent naviguer facilement dans les sections et trouver rapidement la fonction souhaitée. De plus, les applications mobiles prennent en charge plusieurs langues et devises, ce qui les rend pratiques pour les utilisateurs de différents pays."}',
             'value_pt' => '{"0":"A interface do aplicativo foi projetada para que até mesmo iniciantes possam navegar facilmente pelas seções e encontrar rapidamente a função desejada. Além disso, os aplicativos móveis suportam vários idiomas e moedas, tornando-os convenientes para usuários de diferentes países."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 888Starz Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 888Starz"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 888Starz"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 888Starz"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Access to sports betting and casino games",
                                 "1":"Intuitive interface",
                                 "2":"Ability to watch live streams",
                                 "3":"Support for payment methods"},
                             "1":
                                {"0":"Android app not available on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso a apuestas deportivas y juegos de casino",
                                 "1":"Interfaz intuitiva",
                                 "2":"Posibilidad de ver transmisiones en vivo",
                                 "3":"Soporte para métodos de pago"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès aux paris sportifs et aux jeux de casino",
                                 "1":"Interface intuitive",
                                 "2":"Possibilité de regarder des diffusions en direct",
                                 "3":"Prise en charge des méthodes de paiement"},
                             "1":
                                {"0":"L\'application Android n\'est pas disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso a apostas esportivas e jogos de cassino",
                                 "1":"Interface intuitiva",
                                 "2":"Possibilidade de assistir a transmissões ao vivo",
                                 "3":"Suporte a métodos de pagamento"},
                             "1":
                                {"0":"Aplicativo para Android não disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To install the 888Starz app on Android, open the official platform website through your mobile browser. Go to the «Mobile Apps» section and click on the Android icon to download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación 888Starz en Android, abre el sitio web oficial de la plataforma a través de tu navegador móvil. Ve a la sección «Aplicaciones móviles» y haz clic en el ícono de Android para descargar el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l\'application 888Starz sur Android, ouvrez le site officiel de la plateforme via votre navigateur mobile. Allez dans la section «Applications mobiles» et cliquez sur l\'icône Android pour télécharger le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo 888Starz no Android, abra o site oficial da plataforma pelo navegador móvel. Vá para a seção «Aplicativos móveis» e clique no ícone do Android para baixar o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, make sure that installing apps from unknown sources is allowed in your device settings. To do this, open the «Security» section in settings, select the browser you used to download the file, and enable the option «Allow installation from this source»."}',
             'value_es' => '{"0":"Antes de la instalación, asegúrate de que la instalación de aplicaciones desde fuentes desconocidas esté habilitada en la configuración de tu dispositivo. Para hacerlo, abre la sección «Seguridad» en la configuración, selecciona el navegador que usaste para descargar el archivo y activa la opción «Permitir instalación desde esta fuente»."}',
             'value_fr' => '{"0":"Avant l\'installation, assurez-vous que l\'installation d\'applications provenant de sources inconnues est autorisée dans les paramètres de votre appareil. Pour ce faire, ouvrez la section «Sécurité» dans les paramètres, sélectionnez le navigateur utilisé pour télécharger le fichier et activez l\'option «Autoriser l\'installation depuis cette source»."}',
             'value_pt' => '{"0":"Antes da instalação, certifique-se de que a instalação de aplicativos de fontes desconhecidas esteja habilitada nas configurações do dispositivo. Para isso, abra a seção «Segurança» nas configurações, selecione o navegador usado para baixar o arquivo e ative a opção «Permitir instalação a partir desta fonte»."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Then tap the APK file to start the installation and follow the on-screen instructions. After the process is complete, the app will be ready to use."}',
             'value_es' => '{"0":"Luego toca el archivo APK para comenzar la instalación y sigue las instrucciones en pantalla. Tras completar el proceso, la aplicación estará lista para usarse."}',
             'value_fr' => '{"0":"Ensuite, appuyez sur le fichier APK pour commencer l\'installation et suivez les instructions à l\'écran. Une fois le processus terminé, l\'application sera prête à être utilisée."}',
             'value_pt' => '{"0":"Em seguida, toque no arquivo APK para iniciar a instalação e siga as instruções na tela. Após a conclusão do processo, o aplicativo estará pronto para uso."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, 888Starz offers a mobile app that can be downloaded from the App Store. Open the App Store on your iPhone or iPad, search for «888Starz», and tap «Get» to download."}',
             'value_es' => '{"0":"Para los usuarios de iOS, 888Starz ofrece una aplicación móvil que se puede descargar desde el App Store. Abre el App Store en tu iPhone o iPad, busca «888Starz» y toca «Obtener» para descargarla."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, 888Starz propose une application mobile téléchargeable depuis l’App Store. Ouvrez l’App Store sur votre iPhone ou iPad, recherchez «888Starz» et appuyez sur «Obtenir» pour la télécharger."}',
             'value_pt' => '{"0":"Para usuários de iOS, a 888Starz oferece um aplicativo móvel que pode ser baixado na App Store. Abra a App Store no seu iPhone ou iPad, pesquise por «888Starz» e toque em «Obter» para baixar."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This will place the app shortcut on your smartphone\'s home screen, allowing you to launch the app quickly at any time. It is important that your device’s operating system is up to date to avoid compatibility issues."}',
             'value_es' => '{"0":"Esto colocará un acceso directo de la aplicación en la pantalla de inicio de tu smartphone, permitiéndote abrir la app rápidamente en cualquier momento. Es importante que el sistema operativo de tu dispositivo esté actualizado para evitar problemas de compatibilidad."}',
             'value_fr' => '{"0":"Cela placera un raccourci de l’application sur l’écran d’accueil de votre smartphone, vous permettant de lancer l’application rapidement à tout moment. Il est important que le système d’exploitation de votre appareil soit à jour pour éviter des problèmes de compatibilité."}',
             'value_pt' => '{"0":"Isso colocará um atalho do aplicativo na tela inicial do seu smartphone, permitindo abrir o app rapidamente a qualquer momento. É importante que o sistema operacional do seu dispositivo esteja atualizado para evitar problemas de compatibilidade."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 888Starz Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 888Starz"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 888Starz"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 888Starz"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888Starz mobile app provides full access to all platform services. You can place sports bets and live bets, monitor odds, and view statistics. In the casino, slots, table games, and Live Casino with real dealers are available."}',
             'value_es' => '{"0":"La aplicación móvil 888Starz ofrece acceso completo a todos los servicios de la plataforma. Puedes realizar apuestas deportivas y apuestas en vivo, seguir las cuotas y consultar estadísticas. En el casino están disponibles tragamonedas, juegos de mesa y Live Casino con crupieres en vivo."}',
             'value_fr' => '{"0":"L’application mobile 888Starz offre un accès complet à tous les services de la plateforme. Vous pouvez placer des paris sportifs et des paris en direct, suivre les cotes et consulter les statistiques. Le casino propose des machines à sous, des jeux de table et un Live Casino avec des croupiers en direct."}',
             'value_pt' => '{"0":"O aplicativo móvel 888Starz oferece acesso completo a todos os serviços da plataforma. Você pode fazer apostas esportivas e apostas ao vivo, acompanhar as odds e visualizar estatísticas. No cassino, estão disponíveis slots, jogos de mesa e Live Casino com dealers ao vivo."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, the app allows you to deposit funds, withdraw money, and view transaction history. Through the mobile apps, you can participate in bonus programs, receive notifications about promotions and promo codes, and access 24/7 customer support."}',
             'value_es' => '{"0":"Además, la aplicación permite depositar fondos, retirar dinero y consultar el historial de transacciones. A través de las aplicaciones móviles, puedes participar en programas de bonos, recibir notificaciones sobre promociones y códigos promocionales, y acceder al soporte al cliente 24/7."}',
             'value_fr' => '{"0":"De plus, l’application permet de déposer des fonds, de retirer de l’argent et de consulter l’historique des transactions. Grâce aux applications mobiles, vous pouvez participer aux programmes de bonus, recevoir des notifications sur les promotions et les codes promotionnels, et bénéficier du support client 24/7."}',
             'value_pt' => '{"0":"Além disso, o aplicativo permite depositar fundos, retirar dinheiro e consultar o histórico de transações. Por meio dos aplicativos móveis, você pode participar de programas de bônus, receber notificações sobre promoções e códigos promocionais, e acessar o suporte ao cliente 24/7."}',
             'order' => 16
            ]
        );
    }
}
