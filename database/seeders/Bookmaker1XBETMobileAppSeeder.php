<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"1XBET Mobile App Review"}',
             'value_es' => '{"0":"Reseña de la aplicación móvil de 1XBET"}',
             'value_fr' => '{"0":"Revue de l\'application mobile 1XBET"}',
             'value_pt' => '{"0":"Análise do aplicativo móvel da 1XBET"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Mobile applications allow users to quickly and conveniently access the full functionality of the platform. 1XBET, as one of the major bookmakers, does not stay behind and offers its own mobile versions for Android and iOS."}',
             'value_es' => '{"0":"Las aplicaciones móviles permiten a los usuarios acceder de manera rápida y conveniente a toda la funcionalidad de la plataforma. 1XBET, como uno de los principales operadores de apuestas, no se queda atrás y ofrece sus propias versiones móviles para Android e iOS."}',
             'value_fr' => '{"0":"Les applications mobiles permettent aux utilisateurs d’accéder rapidement et facilement à l’ensemble des fonctionnalités de la plateforme. 1XBET, en tant que l’un des principaux bookmakers, ne reste pas en retrait et propose ses propres versions mobiles pour Android et iOS."}',
             'value_pt' => '{"0":"Os aplicativos móveis permitem que os usuários acessem rápida e convenientemente toda a funcionalidade da plataforma. A 1XBET, como uma das grandes casas de apostas, não fica para trás e oferece suas próprias versões móveis para Android e iOS."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to a simple interface, fast page loading, and convenient navigation, players can place bets, use bonus offers, and manage their account directly from their smartphone. The apps are designed to ensure stable performance even with a weak internet connection, which is especially important during live betting and quick reactions to changing odds."}',
             'value_es' => '{"0":"Gracias a una interfaz sencilla, carga rápida de páginas y navegación cómoda, los jugadores pueden realizar apuestas, aprovechar ofertas de bonos y gestionar su cuenta directamente desde su smartphone. Las aplicaciones están diseñadas para garantizar un funcionamiento estable incluso con una conexión a internet débil, lo cual es especialmente importante durante las apuestas en vivo y la reacción rápida a los cambios de cuotas."}',
             'value_fr' => '{"0":"Grâce à une interface simple, un chargement rapide des pages et une navigation pratique, les joueurs peuvent placer des paris, utiliser les offres de bonus et gérer leur compte directement depuis leur smartphone. Les applications sont conçues pour assurer une performance stable même avec une connexion internet faible, ce qui est particulièrement important lors des paris en direct et des réactions rapides aux changements de cotes."}',
             'value_pt' => '{"0":"Graças a uma interface simples, carregamento rápido das páginas e navegação prática, os jogadores podem fazer apostas, aproveitar ofertas de bônus e gerenciar sua conta diretamente do smartphone. Os aplicativos são projetados para garantir desempenho estável mesmo com conexão de internet fraca, o que é especialmente importante durante apostas ao vivo e respostas rápidas às mudanças nas odds."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will discuss the pros and cons, how to install the apps for Android and iOS, and the features they provide to users."}',
             'value_es' => '{"0":"En esta reseña, hablaremos sobre los pros y contras, cómo instalar las aplicaciones para Android e iOS y las funciones que ofrecen a los usuarios."}',
             'value_fr' => '{"0":"Dans cette revue, nous aborderons les avantages et les inconvénients, comment installer les applications pour Android et iOS et les fonctionnalités qu’elles offrent aux utilisateurs."}',
             'value_pt' => '{"0":"Nesta análise, discutiremos os prós e contras, como instalar os aplicativos para Android e iOS e os recursos que eles oferecem aos usuários."}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the 1XBET Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de 1XBET"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles 1XBET"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da 1XBET"}',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Convenience and mobility",
                                 "1":"Full platform functionality",
                                 "2":"Statistics viewing",
                                 "3":"Banking operations",
                                 "4":"Video streaming integration"},
                             "1":
                                {"0":"In some countries, the app may be unavailable",
                                 "1":"High data consumption"}
                             }',
             'value_es' => '{"0":
                                {"0":"Comodidad y movilidad",
                                 "1":"Funcionalidad completa de la plataforma",
                                 "2":"Visualización de estadísticas",
                                 "3":"Operaciones bancarias",
                                 "4":"Integración de transmisiones de video"},
                             "1":
                                {"0":"En algunos países, la aplicación puede no estar disponible",
                                 "1":"Alto consumo de datos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Praticité et mobilité",
                                 "1":"Fonctionnalité complète de la plateforme",
                                 "2":"Consultation des statistiques",
                                 "3":"Opérations bancaires",
                                 "4":"Intégration de diffusion vidéo"},
                             "1":
                                {"0":"Dans certains pays, l’application peut être indisponible",
                                 "1":"Consommation élevée de données"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Conveniência e mobilidade",
                                 "1":"Funcionalidade completa da plataforma",
                                 "2":"Visualização de estatísticas",
                                 "3":"Operações bancárias",
                                 "4":"Integração de transmissões de vídeo"},
                             "1":
                                {"0":"Em alguns países, o aplicativo pode não estar disponível",
                                 "1":"Alto consumo de dados"}
                             }',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to install the app on Android?"}',
             'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
             'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
             'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Since the Android app is not available on the Play Market, to install 1XBET on Android, you first need to go to the official 1XBET website in the «Mobile Apps» section (the link to this page is at the bottom right of the site). Then download the APK file."}',
             'value_es' => '{"0":"Dado que la aplicación para Android no está disponible en Play Market, para instalar 1XBET en Android primero debes ir al sitio web oficial de 1XBET en la sección «Aplicaciones móviles» (el enlace a esta página se encuentra en la parte inferior derecha del sitio). Luego descarga el archivo APK."}',
             'value_fr' => '{"0":"Comme l’application Android n’est pas disponible sur le Play Market, pour installer 1XBET sur Android, vous devez d’abord vous rendre sur le site officiel de 1XBET dans la section « Applications mobiles » (le lien vers cette page se trouve en bas à droite du site). Ensuite, téléchargez le fichier APK."}',
             'value_pt' => '{"0":"Como o aplicativo para Android não está disponível no Play Market, para instalar o 1XBET no Android, você deve primeiro acessar o site oficial do 1XBET na seção «Aplicativos móveis» (o link para esta página está na parte inferior direita do site). Em seguida, baixe o arquivo APK."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, you need to allow installation from unknown sources in your system settings. Open your smartphone Settings. Go to Security or Biometrics and Security. Find the option Install from unknown sources or Allow app installation from this source. Then select your browser or file manager and enable permission for this source."}',
             'value_es' => '{"0":"Después de la descarga, debes permitir la instalación desde fuentes desconocidas en la configuración del sistema. Abre la Configuración de tu smartphone. Ve a Seguridad o Biometría y seguridad. Busca la opción Instalar desde fuentes desconocidas o Permitir la instalación de aplicaciones desde esta fuente. Luego selecciona el navegador o administrador de archivos y habilita el permiso para esta fuente."}',
             'value_fr' => '{"0":"Après le téléchargement, vous devez autoriser l’installation à partir de sources inconnues dans les paramètres de votre système. Ouvrez les Paramètres de votre smartphone. Allez dans Sécurité ou Biometrie et sécurité. Trouvez l’option Installer depuis des sources inconnues ou Autoriser l’installation d’applications depuis cette source. Ensuite, sélectionnez votre navigateur ou gestionnaire de fichiers et activez l’autorisation pour cette source."}',
             'value_pt' => '{"0":"Após o download, é necessário permitir a instalação de fontes desconhecidas nas configurações do sistema. Abra as Configurações do seu smartphone. Vá para Segurança ou Biometria e segurança. Encontre a opção Instalar a partir de fontes desconhecidas ou Permitir a instalação de aplicativos a partir desta fonte. Depois, selecione o navegador ou gerenciador de arquivos e ative a permissão para esta fonte."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Next, install the APK, launch the app, log in or register. The app will automatically adapt the interface to your device’s resolution, and you will be able to use all the site’s features."}',
             'value_es' => '{"0":"Luego, instala el APK, abre la aplicación, inicia sesión o regístrate. La aplicación adaptará automáticamente la interfaz a la resolución de tu dispositivo, y podrás utilizar todas las funciones del sitio."}',
             'value_fr' => '{"0":"Ensuite, installez l’APK, lancez l’application, connectez-vous ou inscrivez-vous. L’application adaptera automatiquement l’interface à la résolution de votre appareil et vous pourrez utiliser toutes les fonctionnalités du site."}',
             'value_pt' => '{"0":"Em seguida, instale o APK, abra o aplicativo, faça login ou registre-se. O aplicativo ajustará automaticamente a interface à resolução do seu dispositivo, permitindo que você use todas as funcionalidades do site."}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to install the app on iOS?"}',
             'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
             'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
             'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For Apple devices, the 1XBET app is available for download through the App Store. Simply open the App Store, type «1xBet» in the search bar, and download the app."}',
             'value_es' => '{"0":"Para dispositivos Apple, la aplicación 1XBET está disponible para descargar a través del App Store. Simplemente abre el App Store, escribe «1xBet» en la barra de búsqueda y descarga la aplicación."}',
             'value_fr' => '{"0":"Pour les appareils Apple, l’application 1XBET est disponible en téléchargement via l’App Store. Il suffit d’ouvrir l’App Store, de taper «1xBet» dans la barre de recherche et de télécharger l’application."}',
             'value_pt' => '{"0":"Para dispositivos Apple, o aplicativo 1XBET está disponível para download através da App Store. Basta abrir a App Store, digitar «1xBet» na barra de pesquisa e baixar o aplicativo."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If the app is not available in your country, some settings can be adjusted."}',
             'value_es' => '{"0":"Si la aplicación no está disponible en tu país, se pueden ajustar algunos ajustes."}',
             'value_fr' => '{"0":"Si l’application n’est pas disponible dans votre pays, certains réglages peuvent être modifiés."}',
             'value_pt' => '{"0":"Se o aplicativo não estiver disponível em seu país, algumas configurações podem ser ajustadas."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list_v2',
                'value_en' => '{"0":"Open Settings.",
                             "1":"Tap your name at the top to access your Apple ID.",
                             "2":"Select Media & Purchases.",
                             "3":"Tap View Account.",
                             "4":"Choose Country/Region.",
                             "5":"Tap Change Country or Region.",
                             "6":"From the list, select Cyprus or Nigeria.",
                             "7":"Review the terms and tap Agree.",
                             "8":"Enter the address and other details corresponding to the selected country, for example, a hotel or office address.",
                             "9":"Confirm the changes."}',
                'value_es' => '{"0":"Abre Configuración.",
                             "1":"Toca tu nombre en la parte superior para acceder a tu Apple ID.",
                             "2":"Selecciona Medios y compras.",
                             "3":"Pulsa Ver cuenta.",
                             "4":"Elige País/Región.",
                             "5":"Toca Cambiar país o región.",
                             "6":"En la lista, selecciona Chipre o Nigeria.",
                             "7":"Revisa los términos y pulsa Aceptar.",
                             "8":"Introduce la dirección y otros datos correspondientes al país seleccionado, por ejemplo, la dirección de un hotel u oficina.",
                             "9":"Confirma los cambios."}',
                'value_fr' => '{"0":"Ouvrez les Réglages.",
                             "1":"Touchez votre nom en haut pour accéder à votre Identifiant Apple.",
                             "2":"Sélectionnez Médias et achats.",
                             "3":"Appuyez sur Voir le compte.",
                             "4":"Choisissez Pays/Région.",
                             "5":"Touchez Changer de pays ou de région.",
                             "6":"Dans la liste, sélectionnez Chypre ou Nigéria.",
                             "7":"Prenez connaissance des conditions et appuyez sur Accepter.",
                             "8":"Entrez l’adresse et d’autres informations correspondant au pays choisi, par exemple, l’adresse d’un hôtel ou d’un bureau",
                             "9":"Confirmez les modifications."}',
                'value_pt' => '{"0":"Abra Ajustes.",
                             "1":"Toque no seu nome no topo para acessar seu Apple ID.",
                             "2":"Selecione Mídia e compras.",
                             "3":"Toque em Visualizar conta.",
                             "4":"Escolha País/Região.",
                             "5":"Toque em Alterar país ou região.",
                             "6":"Na lista, selecione Chipre ou Nigéria.",
                             "7":"Leia os termos e toque em Aceitar.",
                             "8":"Insira o endereço e outros dados correspondentes ao país escolhido, por exemplo, endereço de um hotel ou escritório.",
                             "9":"Confirme as alterações."}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"After downloading, open the app, log into your account or register, and the program will adapt to your iOS device."}',
             'value_es' => '{"0":"Después de descargarla, abre la aplicación, inicia sesión en tu cuenta o regístrate, y la aplicación se adaptará a tu dispositivo iOS."}',
             'value_fr' => '{"0":"Après le téléchargement, ouvrez l’application, connectez-vous à votre compte ou inscrivez-vous, et le programme s’adaptera à votre appareil iOS."}',
             'value_pt' => '{"0":"Após o download, abra o aplicativo, faça login na sua conta ou registre-se, e o programa se adaptará ao seu dispositivo iOS."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the 1XBET Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de 1XBET"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile 1XBET"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da 1XBET"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET mobile app provides full access to all sections of the platform: account creation, profile management, deposit and withdrawal, and participation in promotions."}',
             'value_es' => '{"0":"La aplicación móvil 1XBET proporciona acceso completo a todas las secciones de la plataforma: creación de cuenta, gestión de perfil, depósitos y retiros, y participación en promociones."}',
             'value_fr' => '{"0":"L’application mobile 1XBET offre un accès complet à toutes les sections de la plateforme : création de compte, gestion du profil, dépôts et retraits, et participation aux promotions."}',
             'value_pt' => '{"0":"O aplicativo móvel 1XBET oferece acesso completo a todas as seções da plataforma: criação de conta, gerenciamento de perfil, depósitos e saques, e participação em promoções."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In addition, live broadcasts of sporting events are available. Match statistics, charts, trends, and detailed team and player indicators can be accessed. In the casino section, slots, live dealer games, roulette, poker, and other formats are available."}',
             'value_es' => '{"0":"Además, están disponibles transmisiones en vivo de eventos deportivos. Se puede acceder a estadísticas de los partidos, gráficos, tendencias e indicadores detallados de equipos y jugadores. En la sección de casino, se encuentran disponibles tragamonedas, juegos con crupieres en vivo, ruleta, póker y otros formatos."}',
             'value_fr' => '{"0":"De plus, des diffusions en direct des événements sportifs sont disponibles. Les statistiques des matchs, les graphiques, les tendances et les indicateurs détaillés des équipes et des joueurs peuvent être consultés. Dans la section casino, les machines à sous, les jeux avec croupiers en direct, la roulette, le poker et d’autres formats sont disponibles."}',
             'value_pt' => '{"0":"Além disso, estão disponíveis transmissões ao vivo de eventos esportivos. É possível acessar estatísticas das partidas, gráficos, tendências e indicadores detalhados de equipes e jogadores. Na seção de cassino, estão disponíveis slots, jogos com dealers ao vivo, roleta, pôquer e outros formatos."}',
             'order' => 19
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The app also supports various payment methods — cards, e-wallets, cryptocurrencies — and shows the history of financial transactions. Some versions also include the ability to set limits, manage sessions, and other responsible gaming tools."}',
             'value_es' => '{"0":"La aplicación también admite diversos métodos de pago: tarjetas, monederos electrónicos y criptomonedas, y muestra el historial de transacciones financieras. Algunas versiones incluyen la posibilidad de establecer límites, gestionar sesiones y otras herramientas de juego responsable."}',
             'value_fr' => '{"0":"L’application prend également en charge différents moyens de paiement — cartes, portefeuilles électroniques, cryptomonnaies — et affiche l’historique des transactions financières. Certaines versions permettent également de définir des limites, de gérer les sessions et d’utiliser d’autres outils de jeu responsable."}',
             'value_pt' => '{"0":"O aplicativo também suporta diversos métodos de pagamento — cartões, carteiras eletrônicas, criptomoedas — e exibe o histórico de transações financeiras. Algumas versões incluem a possibilidade de definir limites, gerenciar sessões e outros recursos de jogo responsável."}',
             'order' => 20
            ]
        );
    }
}
