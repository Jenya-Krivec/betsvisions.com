<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet mobile apps for Android and iOS provide full access to all platform features without the need to open the desktop version. The apps allow you to place sports bets, play casino games, make live bets, and claim bonuses."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 4rabet para Android e iOS ofrecen acceso completo a todas las funciones de la plataforma sin necesidad de abrir la versión de escritorio. Las aplicaciones permiten realizar apuestas deportivas, jugar en el casino, hacer apuestas en vivo y recibir bonos."}',
             'value_fr' => '{"0":"Les applications mobiles 4rabet pour Android et iOS offrent un accès complet à toutes les fonctionnalités de la plateforme sans avoir besoin d’ouvrir la version de bureau. Les applications permettent de placer des paris sportifs, de jouer au casino, de faire des paris en direct et de bénéficier de bonus."}',
             'value_pt' => '{"0":"Os aplicativos móveis 4rabet para Android e iOS fornecem acesso total a todos os recursos da plataforma sem a necessidade de abrir a versão para desktop. Os aplicativos permitem fazer apostas esportivas, jogar no cassino, realizar apostas ao vivo e receber bônus."}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The Android app is available for free download directly from the official 4rabet website, while the iOS version is available as a web app. Below, we will explain the installation process for these two operating systems."}',
             'value_es' => '{"0":"La aplicación para Android está disponible para descarga gratuita directamente desde el sitio web oficial de 4rabet, mientras que la versión para iOS está disponible como aplicación web. A continuación, explicaremos el proceso de instalación para estos dos sistemas operativos."}',
             'value_fr' => '{"0":"L’application Android est disponible en téléchargement gratuit directement depuis le site officiel de 4rabet, tandis que la version iOS est disponible en tant qu’application web. Ci-dessous, nous expliquerons le processus d’installation pour ces deux systèmes d’exploitation."}',
             'value_pt' => '{"0":"O aplicativo para Android está disponível para download gratuito diretamente no site oficial da 4rabet, enquanto a versão para iOS está disponível como aplicativo web. A seguir, explicaremos o processo de instalação para esses dois sistemas operacionais."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 4rabet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 4rabet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 4rabet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 4rabet"}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place bets and play casino games",
                                 "1":"Ability to deposit and withdraw funds",
                                 "2":"24/7 support",
                                 "3":"Intuitive interface",
                                 "4":"Fast registration and login"},
                             "1":
                                {"0":"Apps are not available in Google Play or App Store",
                                 "1":"Requires up-to-date operating system version"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de realizar apuestas y jugar en el casino",
                                 "1":"Posibilidad de depositar y retirar fondos",
                                 "2":"Soporte 24/7",
                                 "3":"Interfaz intuitiva",
                                 "4":"Registro e inicio de sesión rápidos"},
                             "1":
                                {"0":"Las aplicaciones no están disponibles en Google Play ni en App Store",
                                 "1":"Requiere tener la versión más reciente del sistema operativo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de placer des paris et de jouer au casino",
                                 "1":"Possibilité de déposer et retirer des fonds",
                                 "2":"Assistance 24h/24 et 7j/7",
                                 "3":"Interface intuitive",
                                 "4":"Inscription et connexion rapides"},
                             "1":
                                {"0":"Les applications ne sont pas disponibles sur Google Play ni sur l’App Store",
                                 "1":"Nécessite une version à jour du système d’exploitation"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas e jogar no cassino",
                                 "1":"Possibilidade de depositar e retirar fundos",
                                 "2":"Suporte 24/7",
                                 "3":"Interface intuitiva",
                                 "4":"Registro e login rápidos"},
                             "1":
                                {"0":"Os aplicativos não estão disponíveis no Google Play ou App Store",
                                 "1":"Necessário ter a versão mais recente do sistema operacional"}
                             }',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To install the app on Android, open the official 4rabet website through your device\'s browser and click on the Android icon at the bottom of the page to go to the app download page. Download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación en Android, abra el sitio web oficial de 4rabet a través del navegador de su dispositivo y haga clic en el ícono de Android en la parte inferior de la página para ir a la página de descarga de la aplicación. Descargue el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application sur Android, ouvrez le site officiel de 4rabet via le navigateur de votre appareil et cliquez sur l’icône Android en bas de la page pour accéder à la page de téléchargement de l’application. Téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo no Android, abra o site oficial da 4rabet através do navegador do seu dispositivo e clique no ícone do Android na parte inferior da página para ir à página de download do aplicativo. Baixe o arquivo APK."}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Before installing the app, you need to allow installation from unknown sources in your security settings. To do this, open Settings on your device and go to Security and Privacy. Select the browser you used to download the APK and enable the option Allow installation from this source."}',
             'value_es' => '{"0":"Antes de instalar la aplicación, debe permitir la instalación desde fuentes desconocidas en la configuración de seguridad. Para hacerlo, abra Configuración en su dispositivo y vaya a Seguridad y Privacidad. Seleccione el navegador con el que descargó el APK y active la opción Permitir instalación desde esta fuente."}',
             'value_fr' => '{"0":"Avant d’installer l’application, vous devez autoriser l’installation à partir de sources inconnues dans les paramètres de sécurité. Pour ce faire, ouvrez Paramètres sur votre appareil et allez dans Sécurité et Confidentialité. Sélectionnez le navigateur que vous avez utilisé pour télécharger le fichier APK et activez l’option Autoriser l’installation à partir de cette source."}',
             'value_pt' => '{"0":"Antes de instalar o aplicativo, você precisa permitir a instalação a partir de fontes desconhecidas nas configurações de segurança. Para isso, abra Configurações no seu dispositivo e vá para Segurança e Privacidade. Selecione o navegador que você usou para baixar o APK e ative a opção Permitir instalação a partir desta fonte."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"After that, you can click on the file to start the installation. Once the installation is complete, the app will be ready to use."}',
             'value_es' => '{"0":"Después de eso, puede hacer clic en el archivo para iniciar la instalación. Una vez completada la instalación, la aplicación estará lista para usar."}',
             'value_fr' => '{"0":"Ensuite, vous pouvez cliquer sur le fichier pour commencer l’installation. Une fois l’installation terminée, l’application sera prête à être utilisée."}',
             'value_pt' => '{"0":"Depois disso, você pode clicar no arquivo para iniciar a instalação. Após a conclusão da instalação, o aplicativo estará pronto para uso."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For iOS users, a web app is available, which can be added to the device’s home screen. To do this, open the Safari browser and go to the official 4rabet website. Make sure the page is fully loaded, then click on the iOS icon and select the option «Add to Home Screen»."}',
             'value_es' => '{"0":"Para los usuarios de iOS, se ofrece una aplicación web que se puede agregar a la pantalla de inicio del dispositivo. Para hacerlo, abra el navegador Safari y vaya al sitio web oficial de 4rabet. Asegúrese de que la página se cargue completamente y luego haga clic en el ícono de iOS y seleccione la opción «Agregar a la pantalla de inicio»."}',
             'value_fr' => '{"0":"Pour les utilisateurs iOS, une application web est disponible et peut être ajoutée à l’écran d’accueil de l’appareil. Pour cela, ouvrez le navigateur Safari et rendez-vous sur le site officiel de 4rabet. Assurez-vous que la page est complètement chargée, puis cliquez sur l’icône iOS et choisissez l’option « Ajouter à l’écran d’accueil »."}',
             'value_pt' => '{"0":"Para usuários de iOS, está disponível um web app que pode ser adicionado à tela inicial do dispositivo. Para isso, abra o navegador Safari e acesse o site oficial da 4rabet. Certifique-se de que a página esteja totalmente carregada, clique no ícone iOS e selecione a opção «Adicionar à Tela Inicial»."}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"After confirmation, the shortcut will appear on your smartphone’s screen, allowing you to quickly launch the app at any time."}',
             'value_es' => '{"0":"Después de la confirmación, el acceso directo aparecerá en la pantalla de su smartphone, lo que le permitirá iniciar la aplicación rápidamente en cualquier momento."}',
             'value_fr' => '{"0":"Après confirmation, le raccourci apparaîtra sur l’écran de votre smartphone, ce qui vous permettra de lancer l’application rapidement à tout moment."}',
             'value_pt' => '{"0":"Após a confirmação, o atalho aparecerá na tela do seu smartphone, permitindo que você abra o aplicativo rapidamente a qualquer momento."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 4rabet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 4rabet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 4rabet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 4rabet"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet mobile app allows users to place bets on a variety of sports events, including football, cricket, tennis, basketball, and other disciplines. Users can place live bets in real time and track match progress with interactive graphics. Numerous casino games are available, including slots, roulette, blackjack, baccarat, as well as Live Casino with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil de 4rabet permite a los usuarios realizar apuestas en una variedad de eventos deportivos, incluyendo fútbol, críquet, tenis, baloncesto y otras disciplinas. Los usuarios pueden hacer apuestas en vivo en tiempo real y seguir el desarrollo de los partidos mediante gráficos interactivos. Están disponibles numerosos juegos de casino, incluyendo tragamonedas, ruleta, blackjack, baccarat, así como Live Casino con crupieres en vivo."}',
             'value_fr' => '{"0":"L’application mobile 4rabet permet aux utilisateurs de placer des paris sur une variété d’événements sportifs, notamment le football, le cricket, le tennis, le basket-ball et d’autres disciplines. Les utilisateurs peuvent placer des paris en direct en temps réel et suivre le déroulement des matchs grâce à des graphiques interactifs. De nombreux jeux de casino sont disponibles, y compris les machines à sous, la roulette, le blackjack, le baccarat, ainsi que le Live Casino avec des croupiers en direct."}',
             'value_pt' => '{"0":"O aplicativo móvel 4rabet permite que os usuários façam apostas em diversos eventos esportivos, incluindo futebol, críquete, tênis, basquete e outras modalidades. Os usuários podem fazer apostas ao vivo em tempo real e acompanhar o andamento das partidas com gráficos interativos. Diversos jogos de cassino estão disponíveis, incluindo slots, roleta, blackjack, bacará, bem como o Live Casino com dealers ao vivo."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses and promotions are accessible directly through the app, and users can also deposit and withdraw funds. Customer support operates around the clock, allowing any issues to be resolved promptly."}',
             'value_es' => '{"0":"Los bonos y promociones se pueden acceder directamente desde la aplicación, y los usuarios también pueden depositar y retirar fondos. El soporte al cliente funciona las 24 horas, lo que permite resolver cualquier problema de manera rápida."}',
             'value_fr' => '{"0":"Les bonus et promotions sont accessibles directement via l’application, et les utilisateurs peuvent également déposer et retirer des fonds. Le service client est disponible 24h/24, permettant de résoudre rapidement tout problème."}',
             'value_pt' => '{"0":"Bônus e promoções estão acessíveis diretamente pelo aplicativo, e os usuários também podem depositar e retirar fundos. O suporte ao cliente funciona 24 horas, permitindo resolver qualquer questão rapidamente."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet mobile apps provide users with convenient and full access to all platform services, making gameplay comfortable anytime and anywhere."}',
             'value_es' => '{"0":"Las aplicaciones móviles de 4rabet ofrecen a los usuarios un acceso cómodo y completo a todos los servicios de la plataforma, haciendo que el juego sea cómodo en cualquier momento y lugar."}',
             'value_fr' => '{"0":"Les applications mobiles 4rabet offrent aux utilisateurs un accès pratique et complet à tous les services de la plateforme, rendant le jeu confortable à tout moment et en tout lieu."}',
             'value_pt' => '{"0":"Os aplicativos móveis 4rabet oferecem aos usuários acesso confortável e completo a todos os serviços da plataforma, tornando o jogo conveniente a qualquer hora e em qualquer lugar."}',
             'order' => 16
            ]
        );
    }
}
