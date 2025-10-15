<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Linebet"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Linebet"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Linebet"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet mobile applications are designed so that players can conveniently access all features of the platform. The apps allow placing sports bets, live betting, playing in the casino, and participating in promotions."}',
             'value_es' => '{"0":"Las aplicaciones móviles de Linebet están diseñadas para que los jugadores puedan acceder cómodamente a todas las funciones de la plataforma. Las aplicaciones permiten realizar apuestas deportivas, apuestas en vivo, jugar en el casino y participar en promociones."}',
             'value_fr' => '{"0":"Les applications mobiles de Linebet sont conçues pour permettre aux joueurs d’accéder facilement à toutes les fonctionnalités de la plateforme. Les applications permettent de parier sur le sport, de placer des paris en direct, de jouer au casino et de participer à des promotions."}',
             'value_pt' => '{"0":"Os aplicativos móveis da Linebet foram criados para que os jogadores possam acessar convenientemente todos os recursos da plataforma. Os aplicativos permitem fazer apostas esportivas, apostas ao vivo, jogar no cassino e participar de promoções."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The interface is adapted for smartphone and tablet screens. Thanks to regular updates, the interface remains modern, and the app works stably even under heavy server load."}',
             'value_es' => '{"0":"La interfaz está adaptada a las pantallas de teléfonos inteligentes y tabletas. Gracias a las actualizaciones regulares, la interfaz se mantiene moderna y la aplicación funciona de manera estable incluso con una carga elevada en los servidores."}',
             'value_fr' => '{"0":"L’interface est adaptée aux écrans des smartphones et des tablettes. Grâce aux mises à jour régulières, l’interface reste moderne et l’application fonctionne de manière stable même en cas de forte charge des serveurs."}',
             'value_pt' => '{"0":"A interface é adaptada para telas de smartphones e tablets. Graças às atualizações regulares, a interface permanece moderna e o aplicativo funciona de forma estável mesmo sob grande carga nos servidores."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Linebet Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de Linebet"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles Linebet"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da Linebet"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Intuitive interface",
                                 "1":"Ability to place sports bets and play in the casino",
                                 "2":"Ability to deposit and withdraw funds",
                                 "3":"Support for various payment systems",
                                 "4":"Receiving push notifications"},
                             "1":
                                {"0":"No Android app available in Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz intuitiva",
                                 "1":"Posibilidad de realizar apuestas deportivas y jugar en el casino",
                                 "2":"Posibilidad de depositar y retirar fondos",
                                 "3":"Soporte para varios sistemas de pago",
                                 "4":"Recepción de notificaciones push"},
                             "1":
                                {"0":"No hay aplicación de Android disponible en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface intuitive",
                                 "1":"Possibilité de placer des paris sportifs et de jouer au casino",
                                 "2":"Possibilité de déposer et retirer des fonds",
                                 "3":"Prise en charge de différents systèmes de paiement",
                                 "4":"Réception de notifications push"},
                             "1":
                                {"0":"Aucune application Android disponible sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface intuitiva",
                                 "1":"Possibilidade de fazer apostas esportivas e jogar no cassino",
                                 "2":"Possibilidade de depositar e retirar fundos",
                                 "3":"Suporte para vários sistemas de pagamento",
                                 "4":"Recebimento de notificações push"},
                             "1":
                                {"0":"Nenhum aplicativo Android disponível no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To install the Linebet mobile app on Android, you need to visit the official bookmaker’s website from your mobile device, as the app is not available on Google Play. Then go to the «Mobile App» section and download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil de Linebet en Android, debes visitar el sitio web oficial del corredor desde tu dispositivo móvil, ya que la aplicación no está disponible en Google Play. Luego, ve a la sección «Aplicación móvil» y descarga el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application mobile Linebet sur Android, vous devez visiter le site officiel du bookmaker depuis votre appareil mobile, car l’application n’est pas disponible sur Google Play. Ensuite, allez dans la section «Application mobile» et téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel Linebet no Android, você precisa acessar o site oficial do bookmaker a partir do seu dispositivo móvel, pois o aplicativo não está disponível no Google Play. Em seguida, vá para a seção «Aplicativo móvel» e baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, you need to allow the installation of apps from unknown sources. To do this, open Settings on your smartphone and go to the Biometrics and Security section. Find the option Install apps from unknown sources, select the browser through which you downloaded the APK, and enable permission for this app."}',
             'value_es' => '{"0":"Antes de la instalación, debes permitir la instalación de aplicaciones desde fuentes desconocidas. Para ello, abre Configuración en tu smartphone y dirígete a la sección Biometría y seguridad. Busca la opción Instalar aplicaciones desde fuentes desconocidas, selecciona el navegador con el que descargaste el APK y habilita el permiso para esta aplicación."}',
             'value_fr' => '{"0":"Avant l’installation, vous devez autoriser l’installation d’applications provenant de sources inconnues. Pour ce faire, ouvrez les Paramètres de votre smartphone et accédez à la section Biométrie et sécurité. Trouvez l’option Installer des applications provenant de sources inconnues, sélectionnez le navigateur par lequel vous avez téléchargé l’APK et activez l’autorisation pour cette application."}',
             'value_pt' => '{"0":"Antes da instalação, é necessário permitir a instalação de aplicativos de fontes desconhecidas. Para isso, abra Configurações no seu smartphone e vá para a seção Biometria e segurança. Encontre a opção Instalar aplicativos de fontes desconhecidas, selecione o navegador pelo qual você baixou o APK e ative a permissão para este aplicativo."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"After the installation is complete, you can log in to your account or register and use all the features of the site in full."}',
             'value_es' => '{"0":"Después de completar la instalación, puedes iniciar sesión en tu cuenta o registrarte y utilizar todas las funciones del sitio por completo."}',
             'value_fr' => '{"0":"Après l’installation, vous pouvez vous connecter à votre compte ou vous inscrire et utiliser toutes les fonctionnalités du site dans leur intégralité."}',
             'value_pt' => '{"0":"Após a instalação, você pode entrar na sua conta ou se registrar e utilizar todos os recursos do site na íntegra."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"For iOS device owners, the app is available for download in the App Store. However, the installation procedure is slightly different from the usual."}',
             'value_es' => '{"0":"Para los propietarios de dispositivos iOS, la aplicación está disponible para descargar en App Store. Sin embargo, el procedimiento de instalación es un poco diferente al habitual."}',
             'value_fr' => '{"0":"Pour les propriétaires d’appareils iOS, l’application est disponible en téléchargement sur l’App Store. Cependant, la procédure d’installation est légèrement différente de l’ordinaire."}',
             'value_pt' => '{"0":"Para os proprietários de dispositivos iOS, o aplicativo está disponível para download na App Store. No entanto, o procedimento de instalação é um pouco diferente do habitual."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"First, go to the TestFlight website and click «View in App Store» to open the App Store and download the app. Wait for the installation to complete and open the TestFlight app. Press the «Continue» button and allow notifications from TestFlight. In the opened window, install the Linebet app. Wait for the Linebet app installation to finish and open it. In the window that appears, click «Next». In the next window, give consent to receive notifications."}',
             'value_es' => '{"0":"Primero, visita el sitio web de TestFlight y haz clic en «Ver en App Store» para abrir App Store y descargar la aplicación. Espera a que se complete la instalación y abre la aplicación TestFlight. Pulsa el botón «Continuar» y permite las notificaciones de TestFlight. En la ventana que se abre, instala la aplicación Linebet. Espera a que finalice la instalación de Linebet y ábrela. En la ventana que aparece, haz clic en «Siguiente». En la siguiente ventana, da tu consentimiento para recibir notificaciones."}',
             'value_fr' => '{"0":"Tout d’abord, rendez-vous sur le site TestFlight et cliquez sur «Voir dans l’App Store» pour ouvrir l’App Store et télécharger l’application. Attendez la fin de l’installation et ouvrez l’application TestFlight. Appuyez sur le bouton «Continuer» et autorisez les notifications de TestFlight. Dans la fenêtre ouverte, installez l’application Linebet. Attendez la fin de l’installation de Linebet et ouvrez-la. Dans la fenêtre qui apparaît, cliquez sur «Suivant». Dans la fenêtre suivante, acceptez de recevoir des notifications."}',
             'value_pt' => '{"0":"Primeiro, acesse o site TestFlight e clique em «Ver na App Store» para abrir a App Store e baixar o aplicativo. Aguarde a conclusão da instalação e abra o aplicativo TestFlight. Pressione o botão «Continuar» e permita notificações do TestFlight. Na janela aberta, instale o aplicativo Linebet. Aguarde a instalação do Linebet terminar e abra-o. Na janela que aparecer, clique em «Avançar». Na próxima janela, dê seu consentimento para receber notificações."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Click «Start Testing» to launch Linebet. Now you can place bets, enjoy games, and win big prizes!"}',
             'value_es' => '{"0":"Pulsa «Comenzar prueba» para iniciar Linebet. ¡Ahora puedes hacer apuestas, disfrutar de los juegos y ganar grandes premios!"}',
             'value_fr' => '{"0":"Cliquez sur «Commencer les tests» pour lancer Linebet. Vous pouvez maintenant placer des paris, profiter des jeux et remporter de gros gains !"}',
             'value_pt' => '{"0":"Clique em «Iniciar Teste» para lançar o Linebet. Agora você pode fazer apostas, aproveitar os jogos e ganhar grandes prêmios!"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Linebet Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de Linebet"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile Linebet"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da Linebet"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet mobile applications support almost all functions available on the website. You can place bets on sports, including football, basketball, tennis, hockey matches, esports, and virtual sports events. The casino section features thousands of slots from leading providers, table games, and live casino with real dealers."}',
             'value_es' => '{"0":"Las aplicaciones móviles de Linebet admiten casi todas las funciones disponibles en el sitio web. Se pueden realizar apuestas en deportes, incluyendo fútbol, baloncesto, tenis, partidos de hockey, deportes electrónicos y eventos deportivos virtuales. La sección de casino cuenta con miles de tragamonedas de los principales proveedores, juegos de mesa y casino en vivo con crupieres reales."}',
             'value_fr' => '{"0":"Les applications mobiles Linebet prennent en charge presque toutes les fonctionnalités disponibles sur le site. Vous pouvez parier sur le sport, y compris le football, le basket-ball, le tennis, les matchs de hockey, l’esport et les événements sportifs virtuels. La section casino propose des milliers de machines à sous de fournisseurs renommés, des jeux de table et un casino en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"Os aplicativos móveis da Linebet suportam praticamente todas as funções disponíveis no site. É possível fazer apostas em esportes, incluindo futebol, basquete, tênis, partidas de hóquei, esports e eventos esportivos virtuais. A seção de cassino apresenta milhares de slots de provedores líderes, jogos de mesa e cassino ao vivo com dealers reais."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Users can deposit and withdraw funds, view their transaction history, and receive bonuses. The app allows receiving push notifications about important events, match results, and changes in bets. There is also the option to contact customer support via chat or email."}',
             'value_es' => '{"0":"Los usuarios pueden depositar y retirar fondos, consultar el historial de transacciones y recibir bonos. La aplicación permite recibir notificaciones push sobre eventos importantes, resultados de partidos y cambios en las apuestas. También existe la opción de contactar con el servicio de atención al cliente mediante chat o correo electrónico."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent déposer et retirer des fonds, consulter l’historique des transactions et recevoir des bonus. L’application permet de recevoir des notifications push sur les événements importants, les résultats des matchs et les changements de paris. Il est également possible de contacter le service client par chat ou par e-mail."}',
             'value_pt' => '{"0":"Os usuários podem depositar e sacar fundos, visualizar o histórico de transações e receber bônus. O aplicativo permite receber notificações push sobre eventos importantes, resultados de partidas e alterações nas apostas. Também há a opção de entrar em contato com o suporte ao cliente via chat ou e-mail."}',
             'order' => 17
            ]
        );
    }
}
