<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is an international bookmaker for sports betting and casino games, catering to players from many countries. On the platform, users can place pre-match bets as well as play in the casino with a wide selection of slots and live games."}',
             'value_es' => '{"0":"Mostbet es una casa de apuestas internacional para apuestas deportivas y juegos de casino, dirigida a jugadores de muchos países. En la plataforma se pueden realizar apuestas pre-partido y jugar en el casino con una amplia selección de tragamonedas y juegos en vivo."}',
             'value_fr' => '{"0":"Mostbet est un bookmaker international pour les paris sportifs et les jeux de casino, destiné aux joueurs de nombreux pays. Sur la plateforme, les utilisateurs peuvent placer des paris avant le match et jouer au casino avec un large choix de machines à sous et de jeux en direct."}',
             'value_pt' => '{"0":"Mostbet é uma casa de apostas internacional para apostas esportivas e jogos de cassino, voltada para jogadores de vários países. Na plataforma, é possível fazer apostas pré-jogo e jogar no cassino com uma ampla variedade de slots e jogos ao vivo."}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The website interface is easy to navigate and follows a standard structure typical for betting platforms. Event search is convenient, and there is a live section showing ongoing events. Mostbet supports a wide range of payment methods, including cryptocurrency and e-wallets. In this review, we will take a detailed look at the main aspects of this bookmaker."}',
             'value_es' => '{"0":"La interfaz del sitio es fácil de usar y sigue una estructura estándar típica de las plataformas de apuestas. La búsqueda de eventos es cómoda y cuenta con una sección en vivo donde se muestran los eventos en curso. Mostbet acepta una amplia variedad de métodos de pago, incluyendo criptomonedas y billeteras electrónicas. En esta reseña analizaremos en detalle los aspectos principales de esta casa de apuestas."}',
             'value_fr' => '{"0":"L’interface du site est facile à utiliser et suit une structure standard typique des plateformes de paris. La recherche d’événements est pratique et il existe une section live affichant les événements en cours. Mostbet propose un large éventail de méthodes de paiement, y compris les cryptomonnaies et les portefeuilles électroniques. Dans cet avis, nous examinerons en détail les principaux aspects de ce bookmaker."}',
             'value_pt' => '{"0":"A interface do site é fácil de usar e possui uma estrutura padrão típica de plataformas de apostas. A pesquisa de eventos é conveniente, e há uma seção ao vivo que mostra os eventos em andamento. Mostbet trabalha com uma grande variedade de métodos de pagamento, incluindo criptomoedas e carteiras eletrônicas. Nesta análise, examinaremos detalhadamente os principais aspectos desta casa de apostas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet operates under an international license issued by the Curaçao regulator, which is one of the most common permits for bookmakers operating in multiple countries. This license allows the company to legally provide online betting and casino services, but it is important to understand that the level of oversight from Curaçao is less strict than, for example, licenses issued in the United Kingdom or Malta."}',
             'value_es' => '{"0":"Mostbet opera bajo una licencia internacional emitida por el regulador de Curazao, que es uno de los permisos más comunes para casas de apuestas que operan en varios países. Esta licencia permite a la empresa ofrecer legalmente servicios de apuestas en línea y casino, aunque es importante entender que el nivel de supervisión de Curazao es menos estricto que, por ejemplo, las licencias emitidas en el Reino Unido o Malta."}',
             'value_fr' => '{"0":"Mostbet fonctionne sous une licence internationale délivrée par le régulateur de Curaçao, qui est l’une des autorisations les plus courantes pour les bookmakers opérant dans plusieurs pays. Cette licence permet à l’entreprise de fournir légalement des services de paris en ligne et de casino, mais il est important de comprendre que le niveau de contrôle de Curaçao est moins strict que, par exemple, les licences délivrées au Royaume-Uni ou à Malte."}',
             'value_pt' => '{"0":"Mostbet opera com base em uma licença internacional emitida pelo regulador de Curaçao, que é uma das autorizações mais comuns para casas de apostas que atuam em vários países. Esta licença permite à empresa fornecer legalmente serviços de apostas online e cassino, mas é importante entender que o nível de supervisão de Curaçao é menos rigoroso do que, por exemplo, as licenças emitidas no Reino Unido ou em Malta."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The platform uses modern encryption methods that protect players’ personal information and payment data. The use of SSL protocol ensures that third parties cannot access confidential information, while internal security systems prevent unauthorized logins and suspicious transactions. Additionally, the administration regularly monitors activity to detect fraudulent actions."}',
             'value_es' => '{"0":"La plataforma utiliza métodos modernos de cifrado que protegen la información personal de los jugadores y los datos de pago. El uso del protocolo SSL garantiza que terceros no tengan acceso a información confidencial, mientras que los sistemas de seguridad internos previenen accesos no autorizados y transacciones sospechosas. Además, la administración monitorea regularmente la actividad para detectar acciones fraudulentas."}',
             'value_fr' => '{"0":"La plateforme utilise des méthodes de cryptage modernes pour protéger les informations personnelles des joueurs et les données de paiement. L’utilisation du protocole SSL garantit que des tiers n’ont pas accès aux informations confidentielles, tandis que les systèmes de sécurité internes empêchent les connexions non autorisées et les transactions suspectes. De plus, l’administration effectue régulièrement une surveillance des activités afin de détecter les actions frauduleuses."}',
             'value_pt' => '{"0":"A plataforma utiliza métodos modernos de criptografia que protegem as informações pessoais dos jogadores e os dados de pagamento. O uso do protocolo SSL garante que terceiros não tenham acesso a informações confidenciais, enquanto os sistemas internos de segurança impedem acessos não autorizados e transações suspeitas. Além disso, a administração monitora regularmente a atividade para detectar ações fraudulentas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The verification procedure at Mostbet is mandatory for users planning to withdraw significant amounts. This includes checking documents that confirm identity and, in some cases, payment details. Users need to complete this verification only once, after which subsequent transactions are processed without additional delays."}',
             'value_es' => '{"0":"El procedimiento de verificación en Mostbet es obligatorio para los usuarios que planean retirar cantidades significativas. Esto incluye la revisión de documentos que confirmen la identidad y, en algunos casos, los datos de pago. Los usuarios solo deben completar esta verificación una vez, después de lo cual las transacciones posteriores se procesan sin demoras adicionales."}',
             'value_fr' => '{"0":"La procédure de vérification sur Mostbet est obligatoire pour les utilisateurs souhaitant retirer des montants importants. Cela inclut la vérification des documents confirmant l’identité et, dans certains cas, des informations de paiement. Les utilisateurs doivent effectuer cette vérification une seule fois, après quoi les transactions suivantes se déroulent sans retard supplémentaire."}',
             'value_pt' => '{"0":"O procedimento de verificação no Mostbet é obrigatório para usuários que planejam retirar quantias significativas. Isso inclui a verificação de documentos que confirmem a identidade e, em alguns casos, os dados de pagamento. Os usuários precisam realizar essa verificação apenas uma vez, após a qual as transações subsequentes são processadas sem atrasos adicionais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers a large number of betting options, covering both the most popular and lesser-known sports. On the site, users can place bets on football, basketball, tennis, hockey, volleyball, esports, boxing, baseball, cricket, table tennis, and even political events. For football matches, a wide betting line is available, where in addition to the main outcome, users can bet on totals, handicaps, combined bets, and the number of corners or cards."}',
             'value_es' => '{"0":"Mostbet ofrece una gran cantidad de opciones de apuestas, tanto en los deportes más populares como en los menos conocidos. En el sitio, los usuarios pueden apostar en fútbol, baloncesto, tenis, hockey, voleibol, deportes electrónicos, boxeo, béisbol, cricket, tenis de mesa e incluso eventos políticos. Para los partidos de fútbol, hay disponible una línea amplia de apuestas, donde además del resultado principal, se pueden realizar apuestas a totales, hándicaps, combinadas y al número de córners o tarjetas."}',
             'value_fr' => '{"0":"Mostbet propose un grand nombre d’options de paris, couvrant à la fois les sports les plus populaires et les moins connus. Sur le site, les utilisateurs peuvent parier sur le football, le basket-ball, le tennis, le hockey, le volley-ball, l’esport, la boxe, le baseball, le cricket, le tennis de table et même les événements politiques. Pour les matchs de football, une large gamme de paris est disponible, où en plus du résultat principal, il est possible de parier sur les totaux, les handicaps, les paris combinés et le nombre de corners ou de cartons."}',
             'value_pt' => '{"0":"Mostbet oferece uma grande variedade de opções de apostas, tanto para os esportes mais populares quanto para os menos conhecidos. No site, os usuários podem apostar em futebol, basquete, tênis, hóquei, vôlei, e-sports, boxe, beisebol, críquete, tênis de mesa e até eventos políticos. Para partidas de futebol, há uma linha de apostas ampla, onde, além do resultado principal, é possível apostar em totais, handicaps, apostas combinadas e no número de escanteios ou cartões."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Esports events form a separate category. In this area, Mostbet provides markets for matches in Dota 2, CS2, League of Legends, Valorant, and other popular disciplines."}',
             'value_es' => '{"0":"Los eventos de deportes electrónicos forman una categoría aparte. En este ámbito, Mostbet ofrece mercados para partidos de Dota 2, CS2, League of Legends, Valorant y otras disciplinas populares."}',
             'value_fr' => '{"0":"Les événements esports constituent une catégorie à part. Dans ce domaine, Mostbet propose des marchés pour les matchs de Dota 2, CS2, League of Legends, Valorant et d’autres disciplines populaires."}',
             'value_pt' => '{"0":"Os eventos de e-sports formam uma categoria separada. Neste segmento, a Mostbet oferece mercados para partidas de Dota 2, CS2, League of Legends, Valorant e outras disciplinas populares."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The live section also offers a large number of options that are constantly updated according to the course of events. However, it is worth noting that the depth of the line may vary depending on the sport or specific tournament: popular competitions have a wider offer, while secondary championships have fewer options."}',
             'value_es' => '{"0":"La sección en vivo también ofrece una gran cantidad de opciones que se actualizan constantemente según el desarrollo de los eventos. Sin embargo, cabe señalar que la profundidad de la línea puede variar según el deporte o el torneo específico: las competiciones populares tienen una oferta más amplia, mientras que los campeonatos secundarios tienen menos opciones."}',
             'value_fr' => '{"0":"La section en direct offre également un grand nombre d’options, constamment mises à jour selon le déroulement des événements. Il convient toutefois de noter que la profondeur de la ligne peut varier selon le sport ou le tournoi spécifique : les compétitions populaires bénéficient d’une offre plus large, tandis que les championnats secondaires proposent moins d’options."}',
             'value_pt' => '{"0":"A seção ao vivo também oferece muitas opções, que são constantemente atualizadas de acordo com o desenrolar dos eventos. No entanto, vale ressaltar que a profundidade da linha pode variar dependendo do esporte ou do torneio específico: competições populares têm uma oferta mais ampla, enquanto campeonatos secundários apresentam menos opções."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section interface is designed so that players can quickly navigate between events, view odds, and add selected outcomes to their bet slip without complicated page transitions."}',
             'value_es' => '{"0":"La interfaz de la sección de apuestas deportivas está diseñada para que los jugadores puedan navegar rápidamente entre los eventos, ver las cuotas y agregar los resultados seleccionados a su boleto sin transiciones complicadas entre páginas."}',
             'value_fr' => '{"0":"L’interface de la section paris sportifs est conçue de manière à ce que les joueurs puissent naviguer rapidement entre les événements, consulter les cotes et ajouter les résultats sélectionnés à leur ticket sans transitions compliquées entre les pages."}',
             'value_pt' => '{"0":"A interface da seção de apostas esportivas foi desenvolvida para que os jogadores possam navegar rapidamente entre os eventos, ver as odds e adicionar os resultados selecionados ao bilhete de apostas sem transições complicadas entre páginas."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For pre-match sports betting, Mostbet offers a wide selection of championships and tournaments. In this section, users can bet on top European football leagues, national leagues, and international cups. Mostbet also allows creating accumulators by combining several events from different sports."}',
             'value_es' => '{"0":"Para las apuestas deportivas previas al partido, Mostbet ofrece una amplia selección de campeonatos y torneos. En esta sección, los usuarios pueden apostar en las principales ligas de fútbol europeas, ligas nacionales y copas internacionales. Mostbet también permite crear apuestas combinadas al combinar varios eventos de diferentes deportes."}',
             'value_fr' => '{"0":"Pour les paris sportifs avant match, Mostbet propose une large sélection de championnats et de tournois. Dans cette section, les utilisateurs peuvent parier sur les principales ligues de football européennes, les championnats nationaux et les coupes internationales. Mostbet permet également de créer des paris combinés en regroupant plusieurs événements de différents sports."}',
             'value_pt' => '{"0":"Para apostas esportivas pré-jogo, a Mostbet oferece uma ampla seleção de campeonatos e torneios. Nesta seção, os usuários podem apostar nas principais ligas de futebol europeias, campeonatos nacionais e copas internacionais. A Mostbet também permite criar acumuladores combinando vários eventos de diferentes esportes."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Special attention should be given to the live betting functionality, which allows making predictions in real time. Odds change according to the course of events, and information updates occur without reloading the page. Additionally, statistics and brief analytical data are available to help make decisions during the game."}',
             'value_es' => '{"0":"Se debe prestar especial atención a la funcionalidad de apuestas en vivo, que permite hacer predicciones en tiempo real. Las cuotas cambian según el desarrollo de los eventos y la información se actualiza sin recargar la página. Además, hay estadísticas y datos analíticos breves que ayudan a tomar decisiones durante el juego."}',
             'value_fr' => '{"0":"Une attention particulière doit être portée à la fonctionnalité des paris en direct, qui permet de faire des pronostics en temps réel. Les cotes évoluent selon le déroulement des événements, et les informations sont mises à jour sans recharger la page. De plus, des statistiques et des données analytiques succinctes sont disponibles pour aider à prendre des décisions pendant le jeu."}',
             'value_pt' => '{"0":"Uma atenção especial deve ser dada à funcionalidade de apostas ao vivo, que permite fazer previsões em tempo real. As odds mudam de acordo com o desenrolar dos eventos e as informações são atualizadas sem recarregar a página. Além disso, estatísticas e dados analíticos breves estão disponíveis para ajudar na tomada de decisões durante o jogo."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Mostbet casino is a separate and full-fledged section of the platform, featuring thousands of games from leading global providers. It offers a vast selection of slots, table games, roulettes, and card games. The site presents games from well-known developers such as Pragmatic Play, NetEnt, Microgaming, Evolution Gaming, and Play’n GO."}',
             'value_es' => '{"0":"El casino de Mostbet es una sección independiente y completa de la plataforma, que cuenta con miles de juegos de los principales proveedores mundiales. Ofrece una gran variedad de tragamonedas, juegos de mesa, ruletas y juegos de cartas. En el sitio se presentan juegos de desarrolladores reconocidos como Pragmatic Play, NetEnt, Microgaming, Evolution Gaming y Play’n GO."}',
             'value_fr' => '{"0":"Le casino Mostbet constitue une section distincte et complète de la plateforme, comprenant des milliers de jeux provenant des principaux fournisseurs mondiaux. Il propose une vaste sélection de machines à sous, de jeux de table, de roulettes et de jeux de cartes. Le site présente des jeux de développeurs réputés tels que Pragmatic Play, NetEnt, Microgaming, Evolution Gaming et Play’n GO."}',
             'value_pt' => '{"0":"O cassino Mostbet é uma seção separada e completa da plataforma, que inclui milhares de jogos dos principais provedores globais. Oferece uma grande variedade de slots, jogos de mesa, roletas e jogos de cartas. No site estão disponíveis jogos de desenvolvedores renomados como Pragmatic Play, NetEnt, Microgaming, Evolution Gaming e Play’n GO."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In the slots section at Mostbet, players can enjoy classic «one-armed bandits» and modern video slots, fruit machines, and complex narrative slots. For convenience, there are filters by providers, popularity, and new releases."}',
             'value_es' => '{"0":"En la sección de tragamonedas de Mostbet, los jugadores pueden disfrutar de los clásicos «tragamonedas de un brazo» y de las modernas video slots, máquinas de frutas y tragamonedas con tramas complejas. Para mayor comodidad, existen filtros por proveedores, popularidad y novedades."}',
             'value_fr' => '{"0":"Dans la section des machines à sous de Mostbet, les joueurs peuvent profiter des classiques «bandits manchots» ainsi que des machines à sous vidéo modernes, des machines à fruits et des machines à sous avec des scénarios complexes. Pour plus de commodité, des filtres par fournisseur, popularité et nouveautés sont disponibles."}',
             'value_pt' => '{"0":"Na seção de slots da Mostbet, os jogadores podem aproveitar os clássicos «caça-níqueis» e os modernos video slots, máquinas de frutas e slots com histórias complexas. Para maior conveniência, há filtros por provedores, popularidade e novidades."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Special attention should be given to the live casino, which recreates the atmosphere of a real gaming hall. In this section, players interact with professional dealers in real time via video streaming. The most popular games here are roulette, blackjack, baccarat, poker, and show games like Crazy Time or Monopoly Live."}',
             'value_es' => '{"0":"Se debe prestar especial atención al casino en vivo, que reproduce la atmósfera de un auténtico salón de juego. En esta sección, los jugadores interactúan con crupieres profesionales en tiempo real a través de transmisión de video. Los juegos más populares aquí son la ruleta, el blackjack, el baccarat, el póker y los juegos de show como Crazy Time o Monopoly Live."}',
             'value_fr' => '{"0":"Une attention particulière doit être portée au casino en direct, qui recrée l’atmosphère d’une véritable salle de jeux. Dans cette section, les joueurs interagissent avec des croupiers professionnels en temps réel via la diffusion vidéo. Les jeux les plus populaires ici sont la roulette, le blackjack, le baccarat, le poker et les jeux de spectacle tels que Crazy Time ou Monopoly Live."}',
             'value_pt' => '{"0":"Uma atenção especial deve ser dada ao cassino ao vivo, que transmite a atmosfera de uma verdadeira sala de jogos. Nesta seção, os jogadores interagem com dealers profissionais em tempo real através de transmissão de vídeo. Os jogos mais populares aqui são roleta, blackjack, bacará, pôquer e jogos de show como Crazy Time ou Monopoly Live."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker pays significant attention to keeping odds competitive compared to leading European platforms. For example, in Champions League matches, the odds for the favorite can range from 1.85 to 1.90, while for the underdog they are around 4.20 to 4.60. For evenly matched teams, odds are often offered at around 2.00."}',
             'value_es' => '{"0":"La casa de apuestas presta especial atención a mantener las cuotas competitivas en comparación con las principales plataformas europeas. Por ejemplo, en los partidos de la Liga de Campeones, la cuota para el favorito puede oscilar entre 1,85 y 1,90, mientras que para el equipo menos favorito se sitúa entre 4,20 y 4,60. Para equipos de igual nivel, las cuotas suelen ser alrededor de 2,00."}',
             'value_fr' => '{"0":"Le bookmaker accorde une attention particulière à ce que les cotes restent compétitives par rapport aux principales plateformes européennes. Par exemple, pour les matchs de la Ligue des champions, la cote du favori peut se situer entre 1,85 et 1,90, tandis que pour l’outsider elle se situe autour de 4,20 à 4,60. Pour les équipes équilibrées, les cotes sont souvent proches de 2,00."}',
             'value_pt' => '{"0":"A casa de apostas dá grande atenção para manter as odds competitivas em comparação com as principais plataformas europeias. Por exemplo, em partidas da Liga dos Campeões, a odd para o favorito pode variar entre 1,85 e 1,90, enquanto para o azarão fica entre 4,20 e 4,60. Para equipes de nível semelhante, as odds frequentemente são em torno de 2,00."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For tennis matches, the odds for a favorite to win usually fluctuate around 1.75, while for the opponent they range from 2.20 to 2.50. In NBA basketball games, the average odds for a team with a slight advantage are approximately 1.95."}',
             'value_es' => '{"0":"En los partidos de tenis, las cuotas para que gane el favorito suelen estar alrededor de 1,75, mientras que para el oponente oscilan entre 2,20 y 2,50. En los partidos de baloncesto de la NBA, las cuotas medias para un equipo con ligera ventaja son aproximadamente 1,95."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, les cotes pour la victoire du favori fluctuent généralement autour de 1,75, tandis que pour l’adversaire elles vont de 2,20 à 2,50. Dans les matchs de NBA, les cotes moyennes pour une équipe avec un léger avantage sont d’environ 1,95."}',
             'value_pt' => '{"0":"Para partidas de tênis, as odds para a vitória do favorito geralmente ficam em torno de 1,75, enquanto para o adversário variam de 2,20 a 2,50. Em jogos da NBA, as odds médias para uma equipe com leve vantagem são aproximadamente 1,95."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"It is particularly pleasing that live odds do not drop sharply, as often happens with other bookmakers. For example, if a football team scores the first goal, the odds on its victory do not change significantly."}',
             'value_es' => '{"0":"Es especialmente agradable que las cuotas en vivo no caigan bruscamente, como ocurre a menudo en otras casas de apuestas. Por ejemplo, si un equipo de fútbol marca el primer gol, las cuotas de su victoria no cambian de manera significativa."}',
             'value_fr' => '{"0":"Il est particulièrement agréable que les cotes en direct ne chutent pas brusquement, comme c’est souvent le cas chez d’autres bookmakers. Par exemple, si une équipe marque le premier but dans un match de football, la cote de sa victoire ne change pas de manière significative."}',
             'value_pt' => '{"0":"É especialmente agradável que as odds ao vivo não caiam drasticamente, como acontece frequentemente em outras casas de apostas. Por exemplo, se uma equipe de futebol marca o primeiro gol, a odd de sua vitória não muda significativamente."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Players can place bets during a match or tournament with current odds that are updated almost instantly according to the course of events. Users can quickly react to changes in the situation, for example, if a team scores a goal or the flow of a tennis match shifts."}',
             'value_es' => '{"0":"Los jugadores pueden realizar apuestas durante un partido o torneo con cuotas actualizadas casi al instante según el desarrollo de los eventos. Se puede reaccionar rápidamente a los cambios en la situación, por ejemplo, si un equipo marca un gol o cambia el curso de un partido de tenis."}',
             'value_fr' => '{"0":"Les joueurs peuvent parier pendant un match ou un tournoi avec des cotes actualisées presque instantanément en fonction du déroulement des événements. Il est possible de réagir rapidement aux changements de situation, par exemple si une équipe marque un but ou si le cours d’un match de tennis change."}',
             'value_pt' => '{"0":"Os jogadores podem fazer apostas durante uma partida ou torneio com odds atualizadas quase instantaneamente de acordo com o desenrolar dos eventos. É possível reagir rapidamente às mudanças na situação, por exemplo, se uma equipe marca um gol ou se o andamento de uma partida de tênis muda."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The platform also offers live streams for some sporting events. Most often, matches from top football leagues, tennis tournaments, and esports events are available. Although not all events have streams due to broadcasting rights restrictions in specific regions, access to streams for popular tournaments is almost always available."}',
             'value_es' => '{"0":"La plataforma también ofrece transmisiones en vivo para algunos eventos deportivos. Más a menudo están disponibles partidos de las principales ligas de fútbol, torneos de tenis y eventos de deportes electrónicos. Aunque no todos los eventos tienen transmisión debido a restricciones de derechos de emisión en ciertas regiones, el acceso a transmisiones para torneos populares está casi siempre disponible."}',
             'value_fr' => '{"0":"La plateforme propose également des diffusions en direct pour certains événements sportifs. Le plus souvent, il s’agit de matchs des principales ligues de football, de tournois de tennis et d’événements esports. Bien que tous les événements ne soient pas diffusés en raison des restrictions de droits dans certaines régions, l’accès aux streams pour les tournois populaires est presque toujours garanti."}',
             'value_pt' => '{"0":"A plataforma também oferece transmissões ao vivo para alguns eventos esportivos. Na maioria das vezes, estão disponíveis partidas das principais ligas de futebol, torneios de tênis e eventos de e-sports. Embora nem todos os eventos tenham transmissão devido a restrições de direitos em regiões específicas, o acesso a streams de torneios populares está quase sempre disponível."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers key responsible gaming tools, including the option for self-exclusion, deposit limits, and bet limit settings. These tools help players control their spending."}',
             'value_es' => '{"0":"La plataforma ofrece herramientas básicas de juego responsable, incluyendo la posibilidad de autoexclusión, límites de depósito y configuración de límites de apuestas. Estas herramientas ayudan a controlar los gastos de los jugadores."}',
             'value_fr' => '{"0":"La plateforme propose les principaux outils de jeu responsable, y compris la possibilité d’auto-exclusion, les limites de dépôt et la configuration des limites de paris. Ces outils aident les joueurs à contrôler leurs dépenses."}',
             'value_pt' => '{"0":"A plataforma oferece os principais mecanismos de jogo responsável, incluindo a opção de autoexclusão, limites de depósito e configuração de limites de apostas. Essas ferramentas ajudam os jogadores a controlar seus gastos."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet collaborates with international organizations that specialize in supporting people with gambling-related problems. The site provides contact information for support services where users can seek advice or counseling."}',
             'value_es' => '{"0":"Mostbet colabora con organizaciones internacionales que se especializan en brindar apoyo a personas con problemas de juego. El sitio proporciona información de contacto de los servicios de ayuda a los que se puede recurrir para recibir asesoramiento o consulta."}',
             'value_fr' => '{"0":"Mostbet collabore avec des organisations internationales spécialisées dans le soutien aux personnes ayant des problèmes liés au jeu. Le site fournit les coordonnées des services d’assistance où il est possible de demander des conseils ou une consultation."}',
             'value_pt' => '{"0":"A Mostbet colabora com organizações internacionais que se especializam em apoiar pessoas com problemas relacionados ao jogo. O site fornece informações de contato de serviços de ajuda, onde é possível buscar aconselhamento ou orientação."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers a large number of deposit and withdrawal methods, making the platform convenient for players from different countries. Users can use Visa and Mastercard, e-wallets like Skrill, Neteller, and ecoPayz, as well as online payment systems and cryptocurrencies."}',
             'value_es' => '{"0":"Mostbet ofrece una gran cantidad de métodos de depósito y retiro, lo que hace que la plataforma sea conveniente para jugadores de diferentes países. Se pueden utilizar tarjetas Visa y Mastercard, monederos electrónicos como Skrill, Neteller y ecoPayz, así como sistemas de pago en línea y criptomonedas."}',
             'value_fr' => '{"0":"Mostbet propose un grand nombre de méthodes de dépôt et de retrait, rendant la plateforme pratique pour les joueurs de différents pays. Les utilisateurs peuvent utiliser des cartes Visa et Mastercard, des portefeuilles électroniques tels que Skrill, Neteller et ecoPayz, ainsi que des systèmes de paiement en ligne et des cryptomonnaies."}',
             'value_pt' => '{"0":"A Mostbet oferece uma grande variedade de métodos de depósito e saque, tornando a plataforma conveniente para jogadores de diferentes países. É possível utilizar cartões Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller e ecoPayz, além de sistemas de pagamento online e criptomoedas."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"You just need to choose the desired method, enter the amount, confirm the transaction, and the funds will appear in the account within a few minutes. This is especially convenient for live betting, where the speed of deposits can be very important."}',
             'value_es' => '{"0":"Solo es necesario elegir el método deseado, ingresar la cantidad, confirmar la transacción y los fondos se reflejarán en la cuenta en pocos minutos. Esto es especialmente útil para apuestas en vivo, donde la rapidez de los depósitos puede ser muy importante."}',
             'value_fr' => '{"0":"Il suffit de choisir la méthode souhaitée, d’indiquer le montant, de confirmer la transaction et les fonds apparaîtront sur le compte en quelques minutes. Cela est particulièrement pratique pour les paris en direct, où la rapidité des dépôts peut être très importante."}',
             'value_pt' => '{"0":"Basta escolher o método desejado, inserir o valor, confirmar a transação, e os fundos serão creditados na conta em poucos minutos. Isso é especialmente conveniente para apostas ao vivo, onde a velocidade do depósito pode ser muito importante."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, users must first complete account verification, which includes checking documents, confirming identity, and verifying payment details. After confirmation, withdrawals are processed quickly: funds to e-wallets arrive within a few hours, bank cards take longer — 1–3 business days, while cryptocurrencies are usually credited instantly."}',
             'value_es' => '{"0":"Para retirar fondos, los usuarios deben primero completar la verificación de la cuenta, que incluye la revisión de documentos, la confirmación de identidad y la verificación de los datos de pago. Tras la confirmación, los retiros se procesan rápidamente: los fondos en monederos electrónicos llegan en unas pocas horas, en tarjetas bancarias tardan más — 1–3 días hábiles, y las criptomonedas suelen acreditarse al instante."}',
             'value_fr' => '{"0":"Pour retirer des fonds, les utilisateurs doivent d’abord compléter la vérification de leur compte, qui inclut la vérification des documents, la confirmation de l’identité et la vérification des informations de paiement. Après confirmation, les retraits sont traités rapidement : les fonds sur les portefeuilles électroniques arrivent en quelques heures, sur les cartes bancaires cela prend plus de temps — 1 à 3 jours ouvrables, tandis que les cryptomonnaies sont généralement créditées instantanément."}',
             'value_pt' => '{"0":"Para sacar fundos, é necessário primeiro concluir a verificação da conta, que inclui a checagem de documentos, confirmação de identidade e verificação dos dados de pagamento. Após a confirmação, os saques são processados rapidamente: fundos em carteiras eletrônicas chegam em algumas horas, cartões bancários levam mais tempo — 1 a 3 dias úteis, enquanto criptomoedas geralmente são creditadas instantaneamente."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 37
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 38
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet customer support operates around the clock. To quickly resolve any issues, you can contact them via the online chat on the website. In addition to the chat, there is an email address where you can send documents for verification, for example."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Mostbet funciona las 24 horas. Para resolver cualquier problema rápidamente, se puede contactar a través del chat en línea en el sitio web. Además del chat, hay un correo electrónico donde se pueden enviar documentos para verificación, por ejemplo."}',
             'value_fr' => '{"0":"Le service client de Mostbet est disponible 24 heures sur 24. Pour résoudre rapidement un problème, vous pouvez les contacter via le chat en ligne sur le site. En plus du chat, il y a une adresse e-mail où il est possible d’envoyer des documents pour vérification, par exemple."}',
             'value_pt' => '{"0":"O suporte ao cliente da Mostbet funciona 24 horas por dia. Para resolver qualquer questão rapidamente, é possível entrar em contato através do chat online no site. Além do chat, há um e-mail para onde podem ser enviados documentos para verificação, por exemplo."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 39
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 40
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of sports markets",
                                 "1":"Many payment methods",
                                 "2":"Convenient live section",
                                 "3":"Mobile applications",
                                 "4":"Frequent promotions and bonuses"},
                             "1":
                                {"0":"Occasional delays in withdrawals",
                                 "1":"Limited number of live streams"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de mercados deportivos",
                                 "1":"Muchos métodos de pago",
                                 "2":"Sección en vivo conveniente",
                                 "3":"Aplicaciones móviles",
                                 "4":"Promociones y bonos frecuentes"},
                             "1":
                                {"0":"Retrasos ocasionales en los retiros",
                                 "1":"Número limitado de transmisiones en vivo"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre de marchés sportifs",
                                 "1":"De nombreux moyens de paiement",
                                 "2":"Section live pratique",
                                 "3":"Applications mobiles",
                                 "4":"Promotions et bonus fréquents"},
                             "1":
                                {"0":"Retards occasionnels dans les retraits",
                                 "1":"Nombre limité de diffusions en direct"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande número de mercados esportivos",
                                 "1":"Muitos métodos de pagamento",
                                 "2":"Seção ao vivo conveniente",
                                 "3":"Aplicativos móveis",
                                 "4":"Promoções e bônus frequentes"},
                             "1":
                                {"0":"Atrasos ocasionais nos saques",
                                 "1":"Número limitado de transmissões ao vivo"}
                             }',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 41
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Mostbet"}',
                'value_fr' => '{"0":"FAQ de Mostbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Mostbet"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 42
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Are there live streams on the platform?"}',
             'value_es' => '{"0":"¿Hay transmisiones en vivo en la plataforma?"}',
             'value_fr' => '{"0":"Y a-t-il des diffusions en direct sur la plateforme ?"}',
             'value_pt' => '{"0":"Existem transmissões ao vivo na plataforma?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 43
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there are live broadcasts for a number of popular matches, but not for all."}',
             'value_es' => '{"0":"Sí, hay transmisiones en vivo para varios partidos populares, pero no para todos."}',
             'value_fr' => '{"0":"Oui, il y a des retransmissions en direct pour plusieurs matchs populaires, mais pas pour tous."}',
             'value_pt' => '{"0":"Sim, há transmissões ao vivo para várias partidas populares, mas não para todas."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 44
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit methods are available and how fast are funds credited?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito están disponibles y qué tan rápido se acreditan los fondos?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt disponibles et à quelle vitesse les fonds sont-ils crédités ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito estão disponíveis e quão rápido os fundos são creditados?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 45
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, local payment systems, and cryptocurrencies are available. Deposits are credited within a few minutes."}',
             'value_es' => '{"0":"Están disponibles tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, ecoPayz, sistemas de pago locales y criptomonedas. Los depósitos se acreditan en unos pocos minutos."}',
             'value_fr' => '{"0":"Les cartes bancaires Visa et Mastercard, les portefeuilles électroniques tels que Skrill, Neteller, ecoPayz, les systèmes de paiement locaux et les cryptomonnaies sont disponibles. Les dépôts sont crédités en quelques minutes."}',
             'value_pt' => '{"0":"Cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, sistemas de pagamento locais e criptomoedas estão disponíveis. Os depósitos são creditados em poucos minutos."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 46
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds and which payment systems are supported?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos y qué sistemas de pago se aceptan?"}',
             'value_fr' => '{"0":"Combien de temps prend le retrait des fonds et quels systèmes de paiement sont pris en charge ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos e quais sistemas de pagamento são suportados?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 47
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals take from a few hours to several business days. E-wallets are usually processed within a few hours, bank cards in 1–3 days, and cryptocurrencies are instant."}',
             'value_es' => '{"0":"Los retiros tardan desde unas pocas horas hasta varios días hábiles. Las carteras electrónicas suelen procesarse en unas pocas horas, las tarjetas bancarias en 1–3 días, y las criptomonedas son instantáneas."}',
             'value_fr' => '{"0":"Les retraits prennent de quelques heures à plusieurs jours ouvrables. Les portefeuilles électroniques sont généralement traités en quelques heures, les cartes bancaires en 1 à 3 jours, et les cryptomonnaies sont instantanées."}',
             'value_pt' => '{"0":"Os saques levam de algumas horas a vários dias úteis. As carteiras eletrônicas geralmente são processadas em poucas horas, cartões bancários em 1–3 dias, e criptomoedas são instantâneas."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 48
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if there is a technical problem or a delay in the website or app?"}',
             'value_es' => '{"0":"¿Qué hacer si surge un problema técnico o un retraso en el sitio web o la aplicación?"}',
             'value_fr' => '{"0":"Que faire en cas de problème technique ou de retard sur le site ou l’application ?"}',
             'value_pt' => '{"0":"O que fazer se houver um problema técnico ou atraso no site ou no aplicativo?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 49
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"You should contact customer support via online chat or email."}',
             'value_es' => '{"0":"Debe comunicarse con el servicio de atención al cliente a través del chat en línea o el correo electrónico."}',
             'value_fr' => '{"0":"Vous devez contacter le service client via le chat en ligne ou par e-mail."}',
             'value_pt' => '{"0":"É necessário entrar em contato com o suporte ao cliente através do chat online ou por e-mail."}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 51
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Can bets be placed through the mobile app?"}',
             'value_es' => '{"0":"¿Se pueden hacer apuestas a través de la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on placer des paris via l’application mobile ?"}',
             'value_pt' => '{"0":"É possível fazer apostas através do aplicativo móvel?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 52
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The mobile app replicates most of the website’s features, including pre-match and live betting, deposits and withdrawals, viewing statistics, and live streams."}',
             'value_es' => '{"0":"La aplicación móvil reproduce la mayoría de las funciones del sitio web, incluyendo apuestas previas al partido y en vivo, depósitos y retiros, visualización de estadísticas y transmisiones en vivo."}',
             'value_fr' => '{"0":"L’application mobile reproduit la plupart des fonctionnalités du site, y compris les paris avant-match et en direct, les dépôts et retraits, la consultation des statistiques et les diffusions en direct."}',
             'value_pt' => '{"0":"O aplicativo móvel reproduz a maioria das funções do site, incluindo apostas pré-jogo e ao vivo, depósitos e saques, visualização de estatísticas e transmissões ao vivo."}',
             'order' => 52
            ]
        );
    }
}
