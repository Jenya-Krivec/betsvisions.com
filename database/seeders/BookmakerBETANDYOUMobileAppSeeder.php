<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Revue de l\'application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da BETANDYOU"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU mobile apps are designed to allow players to fully immerse themselves in the world of sports betting and casino games without needing to use a browser. The apps work on both Android and iOS and support the full functionality available on the website."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BETANDYOU están diseñadas para que los jugadores puedan sumergirse por completo en el mundo de las apuestas deportivas y los juegos de casino sin necesidad de usar un navegador. Las aplicaciones funcionan tanto en Android como en iOS y ofrecen toda la funcionalidad disponible en el sitio web."}',
             'value_fr' => '{"0":"Les applications mobiles BETANDYOU sont conçues pour permettre aux joueurs de s’immerger complètement dans le monde des paris sportifs et des jeux de casino sans avoir besoin d’utiliser un navigateur. Les applications fonctionnent sur Android et iOS et offrent toutes les fonctionnalités disponibles sur le site web."}',
             'value_pt' => '{"0":"Os aplicativos móveis BETANDYOU foram criados para que os jogadores possam se envolver completamente no mundo das apostas esportivas e dos jogos de cassino sem precisar usar um navegador. Os aplicativos funcionam tanto no Android quanto no iOS e suportam todas as funcionalidades disponíveis no site."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to an optimized interface and adaptation to different screen sizes, users can place sports bets, play casino games, and follow live events. In addition, the apps support multiple languages, making them convenient for an international audience, and regular updates ensure stable operation and the security of all transactions."}',
             'value_es' => '{"0":"Gracias a una interfaz optimizada y adaptada a diferentes tamaños de pantalla, los usuarios pueden apostar en deportes, jugar en el casino y seguir eventos en tiempo real. Además, las aplicaciones admiten varios idiomas, lo que las hace convenientes para una audiencia internacional, y las actualizaciones regulares garantizan un funcionamiento estable y la seguridad de todas las transacciones."}',
             'value_fr' => '{"0":"Grâce à une interface optimisée et adaptée aux différentes tailles d’écran, les utilisateurs peuvent placer des paris sportifs, jouer au casino et suivre les événements en direct. De plus, les applications prennent en charge plusieurs langues, ce qui les rend pratiques pour un public international, et les mises à jour régulières garantissent un fonctionnement stable et la sécurité de toutes les transactions."}',
             'value_pt' => '{"0":"Graças a uma interface otimizada e à adaptação a diferentes tamanhos de tela, os usuários podem fazer apostas esportivas, jogar no cassino e acompanhar eventos ao vivo. Além disso, os aplicativos suportam vários idiomas, tornando-os convenientes para um público internacional, e atualizações regulares garantem operação estável e segurança de todas as transações."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the BETANDYOU Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de BETANDYOU"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles BETANDYOU"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da BETANDYOU"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"User-friendly interface",
                                 "1":"Ability to place sports bets and play casino games",
                                 "2":"Support for multiple languages",
                                 "3":"Ability to use bonuses"},
                             "1":
                                {"0":"No Android app available on Play Store",
                                 "1":"Not all older smartphone models support the apps"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz fácil de usar",
                                 "1":"Posibilidad de realizar apuestas deportivas y jugar en el casino",
                                 "2":"Compatibilidad con varios idiomas",
                                 "3":"Posibilidad de usar bonos"},
                             "1":
                                {"0":"No hay aplicación de Android disponible en Play Store",
                                 "1":"No todos los modelos antiguos de teléfonos admiten las aplicaciones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface conviviale",
                                 "1":"Possibilité de placer des paris sportifs et de jouer au casino",
                                 "2":"Prise en charge de plusieurs langues",
                                 "3":"Possibilité d’utiliser des bonus"},
                             "1":
                                {"0":"Aucune application Android disponible sur le Play Store",
                                 "1":"Toutes les anciennes modèles de smartphones ne prennent pas en charge les applications"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Possibilidade de fazer apostas esportivas e jogar no cassino",
                                 "2":"Suporte para vários idiomas",
                                 "3":"Possibilidade de usar bônus"},
                             "1":
                                {"0":"Aplicativo Android não disponível na Play Store",
                                 "1":"Nem todos os modelos antigos de smartphones suportam os aplicativos"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To install the BETANDYOU mobile app on Android, first visit the official bookmaker\'s website through your browser. Then go to the mobile app download section and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil BETANDYOU en Android, primero visite el sitio web oficial del corredor a través de su navegador. Luego, vaya a la sección de descarga de la aplicación móvil y descargue el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application mobile BETANDYOU sur Android, commencez par visiter le site officiel du bookmaker via votre navigateur. Ensuite, allez dans la section de téléchargement de l’application mobile et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel BETANDYOU no Android, primeiro acesse o site oficial do bookmaker através do navegador. Em seguida, vá para a seção de download do aplicativo móvel e baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Before opening the file for installation, you need to allow installation from unknown sources in your phone settings. To do this, open Settings on your smartphone and go to the Biometrics and Security section. Find the option Install apps from unknown sources. Select the browser through which you downloaded the APK file and enable the permission for this app. After that, you can open the downloaded file and start the installation process."}',
             'value_es' => '{"0":"Antes de abrir el archivo para la instalación, debe permitir la instalación desde fuentes desconocidas en la configuración de su teléfono. Para hacerlo, abra Configuración en su smartphone y vaya a la sección Biometría y seguridad. Busque la opción Instalar aplicaciones de fuentes desconocidas. Seleccione el navegador a través del cual descargó el archivo APK y habilite el permiso para esta aplicación. Después de eso, puede abrir el archivo descargado e iniciar el proceso de instalación."}',
             'value_fr' => '{"0":"Avant d’ouvrir le fichier pour l’installation, vous devez autoriser l’installation à partir de sources inconnues dans les paramètres de votre téléphone. Pour cela, ouvrez Paramètres sur votre smartphone et allez dans la section Biométrie et sécurité. Trouvez l’option Installer des applications à partir de sources inconnues. Sélectionnez le navigateur avec lequel vous avez téléchargé le fichier APK et activez la permission pour cette application. Après cela, vous pouvez ouvrir le fichier téléchargé et lancer le processus d’installation."}',
             'value_pt' => '{"0":"Antes de abrir o arquivo para a instalação, é necessário permitir a instalação a partir de fontes desconhecidas nas configurações do telefone. Para isso, abra Configurações no seu smartphone e vá para a seção Biometria e Segurança. Encontre a opção Instalar aplicativos de fontes desconhecidas. Selecione o navegador pelo qual você baixou o arquivo APK e ative a permissão para este aplicativo. Depois disso, você pode abrir o arquivo baixado e iniciar o processo de instalação."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Once the installation is complete, the BETANDYOU icon will appear on your home screen, and you can log in to your account or create a new one directly through the app. The installation takes minimal time, and the app is immediately ready to use."}',
             'value_es' => '{"0":"Una vez completada la instalación, el ícono de BETANDYOU aparecerá en la pantalla de inicio, y podrá iniciar sesión en su cuenta o crear una nueva directamente desde la aplicación. La instalación toma muy poco tiempo y la aplicación está lista para usarse de inmediato."}',
             'value_fr' => '{"0":"Une fois l’installation terminée, l’icône BETANDYOU apparaîtra sur votre écran d’accueil et vous pourrez vous connecter à votre compte ou en créer un nouveau directement via l’application. L’installation prend très peu de temps et l’application est immédiatement prête à l’emploi."}',
             'value_pt' => '{"0":"Após a conclusão da instalação, o ícone do BETANDYOU aparecerá na tela inicial, e você poderá entrar na sua conta ou criar uma nova diretamente pelo aplicativo. A instalação leva muito pouco tempo e o aplicativo está imediatamente pronto para uso."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For iPhone and iPad users, installing the BETANDYOU mobile app works a little differently. First, open the Safari browser and go to the official bookmaker’s website. In the mobile app section, select the iOS version."}',
             'value_es' => '{"0":"Para los usuarios de iPhone y iPad, la instalación de la aplicación móvil BETANDYOU funciona un poco diferente. Primero, abra el navegador Safari y vaya al sitio web oficial del corredor. En la sección de la aplicación móvil, seleccione la versión para iOS."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’iPhone et d’iPad, l’installation de l’application mobile BETANDYOU se fait un peu différemment. Tout d’abord, ouvrez le navigateur Safari et rendez-vous sur le site officiel du bookmaker. Dans la section de l’application mobile, sélectionnez la version iOS."}',
             'value_pt' => '{"0":"Para usuários de iPhone e iPad, a instalação do aplicativo móvel BETANDYOU funciona um pouco diferente. Primeiro, abra o navegador Safari e acesse o site oficial do bookmaker. Na seção de aplicativo móvel, selecione a versão para iOS."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The download is carried out through TestFlight, so you need to install this app if it is not already on your device. Then follow the on-screen instructions, confirm the installation, and grant the necessary permissions for the app to run."}',
             'value_es' => '{"0":"La descarga se realiza a través de TestFlight, por lo que debe instalar esta aplicación si aún no está en su dispositivo. Luego siga las instrucciones en pantalla, confirme la instalación y otorgue los permisos necesarios para que la aplicación funcione."}',
             'value_fr' => '{"0":"Le téléchargement s’effectue via TestFlight, donc vous devez installer cette application si elle n’est pas déjà présente sur votre appareil. Ensuite, suivez les instructions à l’écran, confirmez l’installation et accordez les autorisations nécessaires pour exécuter l’application."}',
             'value_pt' => '{"0":"O download é feito através do TestFlight, portanto, você precisa instalar este aplicativo se ainda não estiver em seu dispositivo. Em seguida, siga as instruções na tela, confirme a instalação e conceda as permissões necessárias para o funcionamento do aplicativo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Once the installation is complete, you will have access to all platform features, and you can log in to your account or register a new one."}',
             'value_es' => '{"0":"Una vez completada la instalación, tendrá acceso a todas las funciones de la plataforma y podrá iniciar sesión en su cuenta o registrar una nueva."}',
             'value_fr' => '{"0":"Une fois l’installation terminée, vous aurez accès à toutes les fonctionnalités de la plateforme et pourrez vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Após a conclusão da instalação, você terá acesso a todos os recursos da plataforma e poderá entrar na sua conta ou registrar uma nova."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the BETANDYOU Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de BETANDYOU"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile BETANDYOU"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da BETANDYOU"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU mobile app provides full access to all platform services. Users can place sports bets, including live bets, as well as create combined and accumulator bets. They can also play slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil BETANDYOU ofrece acceso completo a todos los servicios de la plataforma. Los usuarios pueden realizar apuestas deportivas, incluyendo apuestas en vivo, así como crear apuestas combinadas y acumuladoras. También pueden jugar a tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile BETANDYOU offre un accès complet à tous les services de la plateforme. Les utilisateurs peuvent placer des paris sportifs, y compris des paris en direct, ainsi que créer des paris combinés et des paris accumulés. Ils peuvent également jouer aux machines à sous, aux jeux de table et aux jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"O aplicativo móvel BETANDYOU oferece acesso completo a todos os serviços da plataforma. Os usuários podem fazer apostas esportivas, incluindo apostas ao vivo, bem como criar apostas combinadas e acumuladoras. Também é possível jogar slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Through the mobile apps, it is possible to perform financial operations, including depositing funds and withdrawing winnings. Push notifications ensure you don’t miss important events, promotions, or changes in odds, and availability in multiple languages makes the app convenient for players from different countries."}',
             'value_es' => '{"0":"A través de las aplicaciones móviles, es posible realizar operaciones financieras, incluyendo depósitos y retiros. Las notificaciones push aseguran que no se pierda eventos importantes, promociones o cambios en las cuotas, y la disponibilidad en varios idiomas hace que la aplicación sea conveniente para jugadores de diferentes países."}',
             'value_fr' => '{"0":"Grâce aux applications mobiles, il est possible d’effectuer des opérations financières, y compris déposer des fonds et retirer des gains. Les notifications push garantissent de ne manquer aucun événement important, promotion ou changement de cotes, et la disponibilité en plusieurs langues rend l’application pratique pour les joueurs de différents pays."}',
             'value_pt' => '{"0":"Através dos aplicativos móveis, é possível realizar operações financeiras, incluindo depósitos e saques. As notificações push garantem que você não perca eventos importantes, promoções ou alterações nas odds, e a disponibilidade em vários idiomas torna o aplicativo conveniente para jogadores de diferentes países."}',
             'order' => 17
            ]
        );
    }
}
