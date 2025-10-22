<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Revue de l\'application mobile 1xBit"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da 1xBit"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit mobile app for Android is designed to give you access to all the platform’s services without needing to use a computer. The app allows you to place bets on sports events, play in the casino, participate in live games and tournaments, and manage your account and finances."}',
             'value_es' => '{"0":"La aplicación móvil de 1xBit para Android está diseñada para que puedas acceder a todos los servicios de la plataforma sin necesidad de usar una computadora. La aplicación te permite realizar apuestas en eventos deportivos, jugar en el casino, participar en juegos en vivo y torneos, y gestionar tu cuenta y finanzas."}',
             'value_fr' => '{"0":"L’application mobile 1xBit pour Android est conçue pour vous permettre d’accéder à tous les services de la plateforme sans avoir besoin d’utiliser un ordinateur. L’application vous permet de parier sur des événements sportifs, de jouer au casino, de participer à des jeux en direct et à des tournois, ainsi que de gérer votre compte et vos finances."}',
             'value_pt' => '{"0":"O aplicativo móvel 1xBit para Android foi criado para que você possa acessar todos os serviços da plataforma sem precisar usar um computador. O aplicativo permite fazer apostas em eventos esportivos, jogar no cassino, participar de jogos ao vivo e torneios, além de gerenciar sua conta e finanças."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will look at the advantages and disadvantages of the app as well as its main features. Since the Android app is not available on Google Play, we will also cover an alternative installation procedure."}',
             'value_es' => '{"0":"En esta reseña, analizaremos las ventajas y desventajas de la aplicación, así como sus principales funciones. Dado que la aplicación para Android no está disponible en Google Play, también revisaremos un procedimiento de instalación alternativo."}',
             'value_fr' => '{"0":"Dans cet examen, nous allons examiner les avantages et les inconvénients de l’application ainsi que ses principales fonctionnalités. Comme l’application Android n’est pas disponible sur Google Play, nous aborderons également une procédure d’installation alternative."}',
             'value_pt' => '{"0":"Nesta análise, vamos explorar os prós e contras do aplicativo, bem como suas principais funcionalidades. Como o aplicativo para Android não está disponível no Google Play, também abordaremos um procedimento de instalação alternativo."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 1xBit Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1xBit"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1xBit"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1xBit"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Ability to place sports bets",
                                 "1":"Ability to play in the casino",
                                 "2":"Deposit and withdrawal options",
                                 "3":"User-friendly interface",
                                 "4":"Cryptocurrency support"},
                             "1":
                                {"0":"No official iOS app",
                                 "1":"No Android app on Google Play"}
                             }',
             'value_es' => '{"0":
                                {"0":"Posibilidad de realizar apuestas deportivas",
                                 "1":"Posibilidad de jugar en el casino",
                                 "2":"Opciones de depósito y retiro",
                                 "3":"Interfaz fácil de usar",
                                 "4":"Soporte de criptomonedas"},
                             "1":
                                {"0":"No hay aplicación oficial para iOS",
                                 "1":"No hay aplicación de Android en Google Play"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Possibilité de placer des paris sportifs",
                                 "1":"Possibilité de jouer au casino",
                                 "2":"Options de dépôt et de retrait",
                                 "3":"Interface conviviale",
                                 "4":"Support des cryptomonnaies"},
                             "1":
                                {"0":"Pas d’application officielle pour iOS",
                                 "1":"Pas d’application Android sur Google Play"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Possibilidade de fazer apostas esportivas",
                                 "1":"Possibilidade de jogar no cassino",
                                 "2":"Opções de depósito e saque",
                                 "3":"Interface amigável",
                                 "4":"Suporte a criptomoedas"},
                             "1":
                                {"0":"Sem aplicativo oficial para iOS",
                                 "1":"Sem aplicativo Android no Google Play"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To install the 1xBit mobile app on Android, go to the official platform website using a mobile browser. Then navigate to the mobile app download section, the link is located at the bottom right of the page. Download the APK file."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil 1xBit en Android, accede al sitio web oficial de la plataforma desde un navegador móvil. Luego, ve a la sección de descarga de la aplicación móvil, el enlace se encuentra en la parte inferior derecha de la página. Descarga el archivo APK."}',
             'value_fr' => '{"0":"Pour installer l’application mobile 1xBit sur Android, accédez au site officiel de la plateforme via un navigateur mobile. Ensuite, allez dans la section de téléchargement de l’application mobile, le lien se trouve en bas à droite de la page. Téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel 1xBit no Android, acesse o site oficial da plataforma através de um navegador móvel. Em seguida, vá para a seção de download do aplicativo móvel, o link está localizado na parte inferior direita da página. Baixe o arquivo APK."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, you need to allow installation from unknown sources in your device settings. To do this, open Settings on your device and go to the Biometrics and Security section. Find the Install from Unknown Sources option and enable it for the app from which you downloaded the APK."}',
             'value_es' => '{"0":"Antes de la instalación, debes permitir la instalación desde fuentes desconocidas en la configuración de tu dispositivo. Para hacerlo, abre Configuración en tu dispositivo y ve a la sección Biometría y Seguridad. Busca la opción Instalar desde fuentes desconocidas y actívala para la aplicación desde la que descargaste el APK."}',
             'value_fr' => '{"0":"Avant l’installation, vous devez autoriser l’installation à partir de sources inconnues dans les paramètres de votre appareil. Pour ce faire, ouvrez Paramètres sur votre appareil et allez dans la section Biométrie et Sécurité. Trouvez l’option Installer à partir de sources inconnues et activez-la pour l’application depuis laquelle vous avez téléchargé l’APK."}',
             'value_pt' => '{"0":"Antes da instalação, é necessário permitir a instalação a partir de fontes desconhecidas nas configurações do seu dispositivo. Para isso, abra Configurações no seu dispositivo e vá para a seção Biometria e Segurança. Encontre a opção Instalar a partir de fontes desconhecidas e ative-a para o aplicativo de onde você baixou o APK."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"After that, open the file and wait for the installation process to complete. Once installed, you can log into your account or register using your existing email, social networks, or crypto wallet."}',
             'value_es' => '{"0":"Después, abre el archivo y espera a que finalice el proceso de instalación. Una vez instalado, puedes iniciar sesión en tu cuenta o registrarte usando tu correo electrónico, redes sociales o cartera de criptomonedas."}',
             'value_fr' => '{"0":"Ensuite, ouvrez le fichier et attendez la fin du processus d’installation. Une fois installé, vous pouvez vous connecter à votre compte ou vous inscrire en utilisant votre e-mail, vos réseaux sociaux ou votre portefeuille crypto."}',
             'value_pt' => '{"0":"Depois, abra o arquivo e aguarde a conclusão do processo de instalação. Após a instalação, você pode entrar na sua conta ou se registrar usando seu e-mail, redes sociais ou carteira de criptomoedas."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"For iPhone and iPad users, the official 1xBit app is currently unavailable on the App Store. However, you can play through a mobile browser. The mobile version of the site supports all the main features available on the desktop version and allows convenient play even without a separate app."}',
             'value_es' => '{"0":"Para los usuarios de iPhone y iPad, la aplicación oficial de 1xBit no está disponible actualmente en la App Store. Sin embargo, puedes jugar a través del navegador móvil. La versión móvil del sitio admite todas las funciones principales disponibles en la versión de escritorio y permite jugar cómodamente incluso sin una aplicación separada."}',
             'value_fr' => '{"0":"Pour les utilisateurs d’iPhone et d’iPad, l’application officielle 1xBit n’est actuellement pas disponible sur l’App Store. Cependant, vous pouvez jouer via un navigateur mobile. La version mobile du site prend en charge toutes les principales fonctionnalités disponibles sur la version de bureau et permet de jouer facilement même sans application séparée."}',
             'value_pt' => '{"0":"Para usuários de iPhone e iPad, o aplicativo oficial 1xBit não está disponível atualmente na App Store. No entanto, você pode jogar através do navegador móvel. A versão móvel do site oferece todos os recursos principais disponíveis na versão para desktop e permite jogar de forma conveniente mesmo sem um aplicativo separado."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 1xBit Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 1xBit"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1xBit"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1xBit"}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The 1xBit mobile app provides full access to all the platform’s features. Users can place bets on hundreds of sporting events, including top championships in football, tennis, basketball, and hockey. They can also play slots, table games, and live games with real dealers."}',
             'value_es' => '{"0":"La aplicación móvil de 1xBit ofrece acceso completo a todas las funciones de la plataforma. Los usuarios pueden realizar apuestas en cientos de eventos deportivos, incluidos los principales campeonatos de fútbol, tenis, baloncesto y hockey. También pueden jugar a tragamonedas, juegos de mesa y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"L’application mobile 1xBit offre un accès complet à toutes les fonctionnalités de la plateforme. Les utilisateurs peuvent parier sur des centaines d’événements sportifs, y compris les principaux championnats de football, tennis, basketball et hockey. Ils peuvent également jouer aux machines à sous, aux jeux de table et aux jeux en direct avec des croupiers réels."}',
             'value_pt' => '{"0":"O aplicativo móvel 1xBit fornece acesso completo a todos os recursos da plataforma. Os usuários podem fazer apostas em centenas de eventos esportivos, incluindo os principais campeonatos de futebol, tênis, basquete e hóquei. Também podem jogar slots, jogos de mesa e jogos ao vivo com dealers reais."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The app allows depositing and withdrawing funds. Users can track their betting history, view detailed match statistics, and manage account settings and notifications."}',
             'value_es' => '{"0":"La aplicación permite depositar y retirar fondos. Los usuarios pueden seguir el historial de apuestas, ver estadísticas detalladas de los partidos y gestionar la configuración de la cuenta y las notificaciones."}',
             'value_fr' => '{"0":"L’application permet de déposer et de retirer des fonds. Les utilisateurs peuvent suivre l’historique de leurs paris, consulter des statistiques détaillées des matchs et gérer les paramètres du compte et les notifications."}',
             'value_pt' => '{"0":"O aplicativo permite depositar e sacar fundos. Os usuários podem acompanhar o histórico de apostas, visualizar estatísticas detalhadas das partidas e gerenciar as configurações da conta e notificações."}',
             'order' => 15
            ]
        );
    }
}
