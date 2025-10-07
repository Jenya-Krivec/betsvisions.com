<?php

namespace Database\Seeders;

use App\Models\MobileApp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAMobileAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa Mobile App Review"}',
                'value_es' => '{"0":"Reseña de la aplicación móvil de Paripesa"}',
                'value_fr' => '{"0":"Revue de l\'application mobile Paripesa"}',
                'value_pt' => '{"0":"Análise do aplicativo móvel da Paripesa"}',
             'order' => 1
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers mobile solutions for both Android and iOS. The mobile apps allow players to access their accounts at any time, place sports bets, play casino games, track promotions, view statistics, and perform financial transactions."}',
             'value_es' => '{"0":"Paripesa ofrece soluciones móviles tanto para Android como para iOS. Las aplicaciones móviles permiten a los jugadores acceder a su cuenta en cualquier momento, realizar apuestas deportivas, jugar en el casino, seguir las promociones, consultar estadísticas y realizar operaciones financieras."}',
             'value_fr' => '{"0":"Paripesa propose des solutions mobiles pour Android et iOS. Les applications mobiles permettent aux joueurs d’accéder à leur compte à tout moment, de parier sur le sport, de jouer au casino, de suivre les promotions, de consulter les statistiques et d’effectuer des transactions financières."}',
             'value_pt' => '{"0":"A Paripesa oferece soluções móveis para Android e iOS. Os aplicativos móveis permitem que os jogadores acessem sua conta a qualquer momento, façam apostas esportivas, joguem no cassino, acompanhem promoções, consultem estatísticas e realizem transações financeiras."}',
             'order' => 2
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Since installing mobile applications often does not follow the standard procedure and may require additional settings, we have prepared this guide specifically for you. Below, we’ll explain how to complete the installation process."}',
             'value_es' => '{"0":"Dado que la instalación de las aplicaciones móviles no siempre sigue el método habitual y puede requerir ajustes adicionales, hemos preparado esta guía especialmente para ti. A continuación, te explicamos cómo hacerlo."}',
             'value_fr' => '{"0":"Comme l’installation des applications mobiles ne suit pas toujours la méthode classique et peut nécessiter des réglages supplémentaires, nous avons préparé ce guide spécialement pour vous. Ci-dessous, nous expliquons comment procéder."}',
             'value_pt' => '{"0":"Como a instalação dos aplicativos móveis nem sempre segue o método padrão e pode exigir configurações adicionais, preparamos este guia especialmente para você. A seguir, explicamos como fazer isso."}',
             'order' => 3
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Pros and Cons of the Paripesa Mobile Apps"}',
                'value_es' => '{"0":"Ventajas y desventajas de las aplicaciones móviles de Paripesa"}',
                'value_fr' => '{"0":"Avantages et inconvénients des applications mobiles Paripesa"}',
                'value_pt' => '{"0":"Vantagens e desvantagens dos aplicativos móveis da Paripesa"}',
             'order' => 4
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Access to betting and casino",
                                 "1":"Ability to use bonuses",
                                 "2":"User-friendly interface",
                                 "3":"Push notification support",
                                 "4":"Integration of financial features"},
                             "1":
                                {"0":"Not available on Google Play for Android",
                                 "1":"Not all features may be equally optimized"}
                             }',
             'value_es' => '{"0":
                                {"0":"Acceso a las apuestas y al casino",
                                 "1":"Posibilidad de usar bonos",
                                 "2":"Interfaz fácil de usar",
                                 "3":"Compatibilidad con notificaciones push",
                                 "4":"Integración de funciones financieras"},
                             "1":
                                {"0":"No disponible en Google Play para Android",
                                 "1":"No todas las funciones pueden estar igualmente optimizadas"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Accès aux paris et au casino",
                                 "1":"Possibilité d’utiliser des bonus",
                                 "2":"Interface conviviale",
                                 "3":"Prise en charge des notifications push",
                                 "4":"Intégration des fonctions financières"},
                             "1":
                                {"0":"Non disponible sur Google Play pour Android",
                                 "1":"Toutes les fonctions ne sont pas forcément optimisées de la même manière"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Acesso a apostas e cassino",
                                 "1":"Possibilidade de usar bônus",
                                 "2":"Interface intuitiva",
                                 "3":"Suporte a notificações push",
                                 "4":"Integração de funções financeiras"},
                             "1":
                                {"0":"Não disponível no Google Play para Android",
                                 "1":"Nem todas as funções podem estar igualmente otimizadas"}
                             }',
             'order' => 5
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on Android?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en Android?"}',
                'value_fr' => '{"0":"Comment installer l’application sur Android ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no Android?"}',
             'order' => 6
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To install the Paripesa mobile app on an Android device, you need to follow a few simple steps. First, the user should open the official bookmaker’s website through a mobile browser. On the homepage, there is a section with the Android logo where a link to download the APK installation file is available. Once you click on the link, the file will begin downloading automatically."}',
             'value_es' => '{"0":"Para instalar la aplicación móvil de Paripesa en un dispositivo Android, solo es necesario seguir unos sencillos pasos. Primero, el usuario debe abrir el sitio web oficial de la casa de apuestas a través de un navegador móvil. En la página principal hay una sección con el logotipo de Android, donde se encuentra el enlace para descargar el archivo de instalación APK. Al hacer clic en el enlace, la descarga comenzará automáticamente."}',
             'value_fr' => '{"0":"Pour installer l’application mobile Paripesa sur un appareil Android, il suffit de suivre quelques étapes simples. Tout d’abord, l’utilisateur doit ouvrir le site officiel du bookmaker via un navigateur mobile. Sur la page d’accueil, une section avec le logo Android contient le lien de téléchargement du fichier d’installation APK. Après avoir cliqué sur le lien, le téléchargement commencera automatiquement."}',
             'value_pt' => '{"0":"Para instalar o aplicativo móvel Paripesa em um dispositivo Android, é preciso seguir algumas etapas simples. Primeiro, o usuário deve abrir o site oficial da casa de apostas por meio de um navegador móvel. Na página inicial há uma seção com o logotipo do Android, onde está disponível o link para baixar o arquivo de instalação APK. Ao clicar no link, o download começará automaticamente."}',
             'order' => 7
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Before installation, you must allow the installation of apps from unknown sources in your phone’s settings. To do this, open Settings on your phone and go to the Security or Privacy section. Find the option «Install apps from unknown sources». Enable permission for the browser through which you downloaded the APK file and tap Allow."}',
             'value_es' => '{"0":"Antes de la instalación, es necesario permitir la instalación de aplicaciones de fuentes desconocidas en la configuración del teléfono. Para ello, abre los Ajustes del teléfono y dirígete a la sección de Seguridad o Privacidad. Busca la opción «Instalar aplicaciones de fuentes desconocidas». Activa el permiso para el navegador desde el cual descargaste el archivo APK y pulsa Permitir."}',
             'value_fr' => '{"0":"Avant l’installation, il faut autoriser l’installation d’applications provenant de sources inconnues dans les paramètres du téléphone. Pour cela, ouvrez les Paramètres de votre téléphone et accédez à la section Sécurité ou Confidentialité. Recherchez l’option «Installer des applications à partir de sources inconnues». Activez l’autorisation pour le navigateur utilisé pour télécharger le fichier APK et appuyez sur Autoriser."}',
             'value_pt' => '{"0":"Antes da instalação, é necessário permitir a instalação de aplicativos de fontes desconhecidas nas configurações do telefone. Para isso, abra as Configurações do seu telefone e vá para a seção Segurança ou Privacidade. Encontre a opção «Instalar aplicativos de fontes desconhecidas». Ative a permissão para o navegador usado para baixar o arquivo APK e toque em Permitir."}',
             'order' => 8
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"After the download is complete, install the APK file. The app installs within a few seconds, after which its icon will appear on the home screen. To activate your account, simply log in with your credentials or complete a quick registration."}',
             'value_es' => '{"0":"Una vez finalizada la descarga, instala el archivo APK. La aplicación se instala en pocos segundos y su icono aparecerá en la pantalla principal. Para activar la cuenta, solo hay que iniciar sesión con tus datos o realizar un registro rápido."}',
             'value_fr' => '{"0":"Une fois le téléchargement terminé, installez le fichier APK. L’application s’installe en quelques secondes et son icône apparaîtra sur l’écran d’accueil. Pour activer votre compte, il suffit de vous connecter avec vos identifiants ou de procéder à une inscription rapide."}',
             'value_pt' => '{"0":"Após a conclusão do download, instale o arquivo APK. O aplicativo será instalado em poucos segundos e o ícone aparecerá na tela inicial. Para ativar a conta, basta fazer login com seus dados ou realizar um registro rápido."}',
             'order' => 9
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to install the app on iOS?"}',
                'value_es' => '{"0":"¿Cómo instalar la aplicación en iOS?"}',
                'value_fr' => '{"0":"Comment installer l’application sur iOS ?"}',
                'value_pt' => '{"0":"Como instalar o aplicativo no iOS?"}',
             'order' => 10
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 11
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"On iOS devices, the Paripesa app is available for download from the App Store. Open the App Store on your iPhone or iPad, and search for «Paripesa». Once you find the official app, tap «Get». After the installation is complete, open the app, log in to your account, or create a new one."}',
             'value_es' => '{"0":"En los dispositivos iOS, la aplicación Paripesa está disponible para descargar desde la App Store. Abre la App Store en tu iPhone o iPad y busca «Paripesa». Una vez que encuentres la aplicación oficial, pulsa «Obtener». Tras completar la instalación, abre la aplicación, inicia sesión en tu cuenta o crea una nueva."}',
             'value_fr' => '{"0":"Sur les appareils iOS, l’application Paripesa est disponible en téléchargement sur l’App Store. Ouvrez l’App Store sur votre iPhone ou iPad et recherchez «Paripesa». Une fois que vous avez trouvé l’application officielle, appuyez sur « Obtenir ». Après l’installation, ouvrez l’application, connectez-vous à votre compte ou créez-en un nouveau."}',
             'value_pt' => '{"0":"Em dispositivos iOS, o aplicativo Paripesa está disponível para download na App Store. Abra a App Store no seu iPhone ou iPad e pesquise por «Paripesa». Ao encontrar o aplicativo oficial, toque em «Obter». Após a instalação, abra o aplicativo, faça login na sua conta ou crie uma nova."}',
             'order' => 12
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"If the app does not appear in the App Store in your country, you can find a direct link on the Paripesa website that redirects to the App Store page. Some account settings may also need to be adjusted before downloading."}',
             'value_es' => '{"0":"Si la aplicación no aparece en la App Store de tu país, puedes encontrar un enlace directo en el sitio web de Paripesa que te redirige a la página en la tienda. También será necesario ajustar algunas configuraciones de tu cuenta antes de la descarga."}',
             'value_fr' => '{"0":"Si l’application n’apparaît pas dans l’App Store de votre pays, vous pouvez trouver un lien direct sur le site de Paripesa qui redirige vers la page de l’App Store. Certains paramètres de compte devront également être ajustés avant le téléchargement."}',
             'value_pt' => '{"0":"Se o aplicativo não aparecer na App Store do seu país, você pode encontrar um link direto no site da Paripesa que redireciona para a página na loja. Também pode ser necessário ajustar algumas configurações da conta antes do download."}',
             'order' => 13
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Go to your account and tap on your name. Select «Country/Region», choose «Change Country or Region», and select Nigeria. Accept the terms of the user agreement. Fill in the address fields as shown in the example below."}',
             'value_es' => '{"0":"Accede a tu cuenta y toca tu nombre. Selecciona «País/Región», elige «Cambiar país o región» y selecciona Nigeria. Acepta los términos del acuerdo de usuario. Rellena los campos de dirección según el ejemplo a continuación."}',
             'value_fr' => '{"0":"Accédez à votre compte et appuyez sur votre nom. Sélectionnez « Pays/Région », choisissez « Modifier le pays ou la région » et sélectionnez le Nigeria. Acceptez les conditions du contrat utilisateur. Remplissez les champs d’adresse comme indiqué dans l’exemple ci-dessous."}',
             'value_pt' => '{"0":"Acesse sua conta e toque no seu nome. Selecione «País/Região», escolha «Alterar país ou região» e selecione Nigéria. Aceite os termos do contrato do usuário. Preencha os campos de endereço conforme o exemplo abaixo."}',
             'order' => 14
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
                'value_en' => '{"0":"Street: No 34 Adesanya ikeja",
                                "1":"City: Ikeja",
                                "2":"Postal code: 234",
                                "3":"Phone: 2348073560000"}',
                'value_es' => '{"0":"Calle: No 34 Adesanya ikeja",
                                "1":"Ciudad: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Teléfono: 2348073560000"}',
                'value_fr' => '{"0":"Rue: No 34 Adesanya ikeja",
                                "1":"Ville: Ikeja",
                                "2":"Code postal: 234",
                                "3":"Téléphone: 2348073560000"}',
                'value_pt' => '{"0":"Rua: No 34 Adesanya ikeja",
                                "1":"Cidade: Ikeja",
                                "2":"Código postal: 234",
                                "3":"Telefone: 2348073560000"}',
             'order' => 15
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"From the list of payment methods, select «None». Tap «Next». Open the App Store. In the search, enter «PariPesa» and install the app."}',
             'value_es' => '{"0":"En la lista de métodos de pago, selecciona «Ninguno». Pulsa «Siguiente». Abre la App Store. En la búsqueda, escribe «PariPesa» e instala la aplicación."}',
             'value_fr' => '{"0":"Dans la liste des moyens de paiement, sélectionnez « Aucun ». Appuyez sur « Suivant ». Ouvrez l’App Store. Dans la recherche, saisissez « PariPesa » et installez l’application."}',
             'value_pt' => '{"0":"Na lista de métodos de pagamento, selecione «Nenhum». Toque em «Avançar». Abra a App Store. Na pesquisa, digite «PariPesa» e instale o aplicativo."}',
             'order' => 16
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Features of the Paripesa Mobile App"}',
                'value_es' => '{"0":"Funciones de la aplicación móvil de Paripesa"}',
                'value_fr' => '{"0":"Fonctionnalités de l\'application mobile Paripesa"}',
                'value_pt' => '{"0":"Funcionalidades do aplicativo móvel da Paripesa"}',
             'order' => 17
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Paripesa mobile app offers full functionality for sports betting and casino gaming. Users can place bets on both pre-match events and live games, view current odds, and create accumulator bets. All sports sections, tournaments, and markets open with just a few taps, and the main events of the day are highlighted separately for convenience."}',
             'value_es' => '{"0":"La aplicación móvil de Paripesa ofrece una funcionalidad completa para apuestas deportivas y juegos de casino. Los usuarios pueden apostar tanto en eventos previos al partido como en directo, consultar las cuotas actualizadas y crear combinadas. Todas las secciones deportivas, torneos y mercados se abren con solo unos toques, y los principales eventos del día se muestran por separado para mayor comodidad."}',
             'value_fr' => '{"0":"L’application mobile Paripesa offre une fonctionnalité complète pour les paris sportifs et les jeux de casino. Les utilisateurs peuvent placer des paris sur les événements avant-match et en direct, consulter les cotes en temps réel et créer des paris combinés. Toutes les sections sportives, tournois et marchés s’ouvrent en quelques clics, et les principaux événements du jour sont affichés séparément pour plus de commodité."}',
             'value_pt' => '{"0":"O aplicativo móvel Paripesa oferece funcionalidade completa para apostas esportivas e jogos de cassino. Os usuários podem fazer apostas em eventos pré-jogo e ao vivo, acompanhar as cotações atualizadas e criar apostas múltiplas. Todas as seções esportivas, torneios e mercados abrem com apenas alguns toques, e os principais eventos do dia são exibidos separadamente para maior conveniência."}',
             'order' => 18
            ]
        );
        MobileApp::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports betting, the app features a casino section with thousands of slots, table games, and live tables with real dealers. Players can activate bonuses, participate in tournaments, deposit funds, and withdraw winnings without visiting the website. The app also supports push notifications about new promotions, odds changes, and bet results."}',
             'value_es' => '{"0":"Además de las apuestas deportivas, la aplicación incluye una sección de casino con miles de tragaperras, juegos de mesa y mesas en vivo con crupieres reales. Los jugadores pueden activar bonos, participar en torneos, depositar fondos y retirar ganancias sin necesidad de acceder al sitio web. La aplicación también admite notificaciones push sobre nuevas promociones, cambios en las cuotas y resultados de las apuestas."}',
             'value_fr' => '{"0":"En plus des paris sportifs, l’application comprend une section casino avec des milliers de machines à sous, des jeux de table et des tables en direct avec de vrais croupiers. Les joueurs peuvent activer des bonus, participer à des tournois, déposer des fonds et retirer leurs gains sans passer par le site web. L’application prend également en charge les notifications push concernant les nouvelles promotions, les changements de cotes et les résultats des paris."}',
             'value_pt' => '{"0":"Além das apostas esportivas, o aplicativo conta com uma seção de cassino com milhares de slots, jogos de mesa e mesas ao vivo com dealers reais. Os jogadores podem ativar bônus, participar de torneios, depositar fundos e sacar ganhos sem precisar acessar o site. O aplicativo também oferece suporte a notificações push sobre novas promoções, alterações nas cotações e resultados das apostas."}',
             'order' => 19
            ]
        );
    }
}
