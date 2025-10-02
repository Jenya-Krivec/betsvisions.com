<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de BetWinner"}',
                'value_fr' => '{"0":"Revue de l\'application mobile BetWinner"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da BetWinner"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is an international bookmaker specializing in sports betting and casino games. For user convenience, the company has developed mobile applications for Android and iOS, allowing users to place bets and play casino games directly from their smartphones."}',
             'value_es' => '{"0":"BetWinner es una casa de apuestas internacional especializada en apuestas deportivas y juegos de casino. Para la comodidad de los usuarios, la empresa ha desarrollado aplicaciones móviles para Android e iOS, que permiten realizar apuestas y jugar en el casino directamente desde el teléfono."}',
             'value_fr' => '{"0":"BetWinner est un bookmaker international spécialisé dans les paris sportifs et les jeux de casino. Pour la commodité des utilisateurs, la société a développé des applications mobiles pour Android et iOS, permettant de placer des paris et de jouer au casino directement depuis un smartphone."}',
             'value_pt' => '{"0":"BetWinner é uma casa de apostas internacional especializada em apostas esportivas e jogos de cassino. Para a conveniência dos usuários, a empresa desenvolveu aplicativos móveis para Android e iOS, permitindo fazer apostas e jogar no cassino diretamente pelo smartphone."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The mobile apps fully replicate the functionality of the web platform, providing quick access to all features, including live betting, match broadcasts, and bonus offers."}',
             'value_es' => '{"0":"Las aplicaciones móviles replican completamente la funcionalidad de la plataforma web, ofreciendo acceso rápido a todas las funciones, incluyendo apuestas en vivo, transmisiones de partidos y ofertas de bonificación."}',
             'value_fr' => '{"0":"Les applications mobiles reproduisent entièrement les fonctionnalités de la plateforme web, offrant un accès rapide à toutes les options, y compris les paris en direct, les diffusions de matchs et les offres de bonus."}',
             'value_pt' => '{"0":"Os aplicativos móveis reproduzem totalmente a funcionalidade da plataforma web, oferecendo acesso rápido a todos os recursos, incluindo apostas ao vivo, transmissões de partidas e ofertas de bônus."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the BetWinner Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de BetWinner"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles BetWinner"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da BetWinner"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Available sports betting and casino games",
                                 "1":"User-friendly interface",
                                 "2":"Live broadcasts and real-time betting",
                                 "3":"Cryptocurrency support"},
                             "1":
                                {"0":"Android app not available on Google Play",
                                 "1":"Limited support in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Apuestas deportivas y juegos de casino disponibles",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Transmisiones en vivo y apuestas en tiempo real",
                                 "3":"Soporte para criptomonedas"},
                             "1":
                                {"0":"La aplicación para Android no está disponible en Google Play",
                                 "1":"Soporte limitado en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Paris sportifs et jeux de casino disponibles",
                                 "1":"Interface conviviale",
                                 "2":"Diffusions en direct et paris en temps réel",
                                 "3":"Prise en charge des cryptomonnaies"},
                             "1":
                                {"0":"L’application Android n’est pas disponible sur Google Play",
                                 "1":"Support limité dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Apostas esportivas e jogos de cassino disponíveis",
                                 "1":"Interface amigável",
                                 "2":"Transmissões ao vivo e apostas em tempo real",
                                 "3":"Suporte a criptomoedas"},
                             "1":
                                {"0":"Aplicativo Android não disponível no Google Play",
                                 "1":"Suporte limitado em algumas regiões"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To install the BetWinner mobile app on Android, first open the official company website through your smartphone browser. Go to the mobile apps download page and download the APK file for Android."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil BetWinner en Android, primero abra el sitio web oficial de la empresa a través del navegador de su smartphone. Vaya a la página de descarga de aplicaciones móviles y descargue el archivo APK para Android."}',
             'value_fr' => '{"0":"Pour installer l’application mobile BetWinner sur Android, ouvrez d’abord le site officiel de l’entreprise via le navigateur de votre smartphone. Accédez à la page de téléchargement des applications mobiles et téléchargez le fichier APK pour Android."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel BetWinner no Android, primeiro abra o site oficial da empresa através do navegador do seu smartphone. Vá para a página de download dos aplicativos móveis e baixe o arquivo APK para Android."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, make sure that installing apps from unknown sources is allowed in your device settings. To do this, open «Settings» and go to the «Security» or «Biometrics and Security» section. Then find the «Install unknown apps» option. On modern versions of Android, this setting is activated for the specific app initiating the installation. In this case, it is the browser, so select it and enable permission to install apps from this source."}',
             'value_es' => '{"0":"Antes de la instalación, asegúrese de que esté permitido instalar aplicaciones desde fuentes desconocidas en la configuración de su dispositivo. Para ello, abra «Configuración» y vaya a la sección «Seguridad» o «Biometría y seguridad». Luego, busque la opción «Instalar aplicaciones desconocidas». En las versiones modernas de Android, esta configuración se activa para la aplicación específica que inicia la instalación. En este caso, es el navegador, así que selecciónelo y habilite el permiso para instalar aplicaciones desde esta fuente."}',
             'value_fr' => '{"0":"Avant l’installation, assurez-vous que l’installation d’applications provenant de sources inconnues est autorisée dans les paramètres de votre appareil. Pour ce faire, ouvrez « Paramètres » et accédez à la section « Sécurité » ou « Biométrie et sécurité ». Ensuite, trouvez l’option « Installer des applications inconnues ». Sur les versions modernes d’Android, ce paramètre s’active pour l’application spécifique qui lance l’installation. Dans ce cas, il s’agit du navigateur, alors sélectionnez-le et activez l’autorisation d’installer des applications depuis cette source."}',
             'value_pt' => '{"0":"Antes da instalação, verifique se a instalação de aplicativos de fontes desconhecidas está permitida nas configurações do seu dispositivo. Para isso, abra «Configurações» e vá para a seção «Segurança» ou «Biometria e Segurança». Em seguida, encontre a opção «Instalar aplicativos desconhecidos». Nas versões modernas do Android, esta configuração é ativada para o aplicativo específico que inicia a instalação. Neste caso, é o navegador, então selecione-o e ative a permissão para instalar aplicativos a partir desta fonte."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"After completing the installation, you can disable this permission for added security. Once the file is downloaded, install it on your smartphone. After installation, the app is ready to use, and you can log in to your account or create a new one."}',
             'value_es' => '{"0":"Después de completar la instalación, puede desactivar este permiso para mayor seguridad. Una vez descargado el archivo, instálelo en su smartphone. Tras la instalación, la aplicación estará lista para usar y podrá iniciar sesión en su cuenta o crear una nueva."}',
             'value_fr' => '{"0":"Après avoir terminé l’installation, vous pouvez désactiver cette autorisation pour plus de sécurité. Une fois le fichier téléchargé, installez-le sur votre smartphone. Après l’installation, l’application est prête à l’emploi et vous pouvez vous connecter à votre compte ou en créer un nouveau."}',
             'value_pt' => '{"0":"Após concluir a instalação, você pode desativar essa permissão para maior segurança. Depois de baixar o arquivo, instale-o em seu smartphone. Após a instalação, o aplicativo estará pronto para uso, e você poderá entrar na sua conta ou criar uma nova."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Installing the app on iOS devices is much simpler than on Android, as it can be downloaded directly from the App Store. To install the BetWinner mobile app on your iOS device, open the App Store on your iPhone or iPad. In the search bar, type «BetWinner», press «Search», and locate the official BetWinner app."}',
             'value_es' => '{"0":"La instalación de la aplicación en dispositivos iOS es mucho más sencilla que en Android, ya que se puede descargar directamente desde la App Store. Para instalar la aplicación móvil BetWinner en su dispositivo iOS, abra la App Store en su iPhone o iPad. En la barra de búsqueda, escriba «BetWinner», presione «Buscar» y encuentre la aplicación oficial de BetWinner."}',
             'value_fr' => '{"0":"L’installation de l’application sur les appareils iOS est beaucoup plus simple que sur Android, car elle peut être téléchargée directement depuis l’App Store. Pour installer l’application mobile BetWinner sur votre appareil iOS, ouvrez l’App Store sur votre iPhone ou iPad. Dans la barre de recherche, saisissez «BetWinner», appuyez sur «Rechercher» et trouvez l’application officielle BetWinner."}',
             'value_pt' => '{"0":"A instalação do aplicativo em dispositivos iOS é muito mais simples do que no Android, pois pode ser baixado diretamente da App Store. Para instalar o aplicativo móvel BetWinner no seu dispositivo iOS, abra a App Store no seu iPhone ou iPad. Na barra de pesquisa, digite «BetWinner», pressione «Buscar» e localize o aplicativo oficial BetWinner."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Next, tap the «Get» button to download and install the app on your device. Once the installation is complete, open the app and log in to your account or register if you are a new user."}',
             'value_es' => '{"0":"A continuación, toque el botón «Obtener» para descargar e instalar la aplicación en su dispositivo. Una vez completada la instalación, abra la aplicación e inicie sesión en su cuenta o regístrese si es un nuevo usuario."}',
             'value_fr' => '{"0":"Ensuite, appuyez sur le bouton «Obtenir» pour télécharger et installer l’application sur votre appareil. Une fois l’installation terminée, ouvrez l’application et connectez-vous à votre compte ou inscrivez-vous si vous êtes un nouvel utilisateur."}',
             'value_pt' => '{"0":"Em seguida, toque no botão «Obter» para baixar e instalar o aplicativo no seu dispositivo. Após a conclusão da instalação, abra o aplicativo e faça login na sua conta ou registre-se se for um novo usuário."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the BetWinner Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de BetWinner"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile BetWinner"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da BetWinner"}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The BetWinner mobile app allows users to place bets on sports and esports, play casino games, use bonuses, participate in promotions, watch matches via live broadcasts, and manage their balance. Users can deposit and withdraw funds through bank cards, e-wallets, and cryptocurrency."}',
             'value_es' => '{"0":"La aplicación móvil BetWinner permite a los usuarios realizar apuestas en deportes y deportes electrónicos, jugar en el casino, utilizar bonificaciones, participar en promociones, ver partidos en transmisiones en vivo y gestionar su saldo. Los usuarios pueden depositar y retirar fondos a través de tarjetas bancarias, monederos electrónicos y criptomonedas."}',
             'value_fr' => '{"0":"L’application mobile BetWinner permet aux utilisateurs de parier sur les sports et les esports, de jouer aux jeux de casino, d’utiliser des bonus, de participer à des promotions, de regarder des matchs en direct et de gérer leur solde. Les utilisateurs peuvent déposer et retirer des fonds via des cartes bancaires, des portefeuilles électroniques et des cryptomonnaies."}',
             'value_pt' => '{"0":"O aplicativo móvel BetWinner permite aos usuários fazer apostas em esportes e esports, jogar em cassinos, utilizar bônus, participar de promoções, assistir a partidas em transmissões ao vivo e gerenciar seu saldo. Os usuários podem depositar e sacar fundos por meio de cartões bancários, carteiras eletrônicas e criptomoedas."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The app also provides convenient access to the personal account, where users can view their betting history, manage their profile, and adjust account settings."}',
             'value_es' => '{"0":"La aplicación también proporciona un acceso conveniente a la cuenta personal, donde los usuarios pueden ver su historial de apuestas, gestionar su perfil y ajustar la configuración de la cuenta."}',
             'value_fr' => '{"0":"L’application offre également un accès pratique au compte personnel, où les utilisateurs peuvent consulter l’historique de leurs paris, gérer leur profil et modifier les paramètres du compte."}',
             'value_pt' => '{"0":"O aplicativo também fornece acesso conveniente à conta pessoal, onde os usuários podem ver seu histórico de apostas, gerenciar seu perfil e ajustar as configurações da conta."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner mobile apps offer a comfortable and secure way to access all platform features, allowing players to enjoy all the advantages of the bookmaker directly from their smartphones."}',
             'value_es' => '{"0":"Las aplicaciones móviles de BetWinner ofrecen un acceso cómodo y seguro a todas las funciones de la plataforma, permitiendo a los jugadores disfrutar de todas las ventajas de la casa de apuestas directamente desde sus teléfonos inteligentes."}',
             'value_fr' => '{"0":"Les applications mobiles BetWinner offrent un accès confortable et sécurisé à toutes les fonctionnalités de la plateforme, permettant aux joueurs de profiter de tous les avantages du bookmaker directement depuis leur smartphone."}',
             'value_pt' => '{"0":"Os aplicativos móveis BetWinner oferecem uma forma confortável e segura de acessar todos os recursos da plataforma, permitindo que os jogadores aproveitem todas as vantagens da casa de apostas diretamente do smartphone."}',
             'order' => 17
            ]
        );
    }
}
