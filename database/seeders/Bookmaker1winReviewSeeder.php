<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win started operating in 2016. The company provides services not only in sports and esports betting but also offers the opportunity to play casino games, poker, and virtual games. The website is available in multiple languages and supports over thirty currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"1win comenzó a operar en 2016. La compañía ofrece servicios no solo en apuestas deportivas y de deportes electrónicos, sino también brinda la posibilidad de jugar en el casino, al póker y en juegos virtuales. El sitio web está disponible en varios idiomas y admite más de treinta monedas, incluidas criptomonedas."}',
             'value_fr' => '{"0":"1win a commencé ses activités en 2016. La société propose des services non seulement dans les paris sportifs et esports, mais offre également la possibilité de jouer au casino, au poker et à des jeux virtuels. Le site fonctionne en plusieurs langues et prend en charge plus de trente devises, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"1win começou a operar em 2016. A empresa oferece serviços não apenas em apostas esportivas e eSports, mas também dá a oportunidade de jogar em cassino, pôquer e jogos virtuais. O site está disponível em vários idiomas e suporta mais de trinta moedas, incluindo criptomoedas."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For user convenience, there is a mobile version of the website and apps for Android, while for iOS there is a web-based app. The platform has become popular due to the large number of promotions and bonuses available for both new and regular players. It is important to note that the company focuses on an international audience, so the website works reliably in many countries."}',
             'value_es' => '{"0":"Para mayor comodidad de los usuarios, existe una versión móvil del sitio web y aplicaciones para Android, mientras que para iOS hay una aplicación web. La plataforma se ha vuelto popular gracias a la gran cantidad de promociones y bonificaciones disponibles tanto para jugadores nuevos como para los habituales. Es importante destacar que la compañía se orienta a una audiencia internacional, por lo que el sitio funciona de manera estable en muchos países."}',
             'value_fr' => '{"0":"Pour plus de confort, il existe une version mobile du site et des applications pour Android, tandis que pour iOS, il existe une application web. La plateforme est devenue populaire grâce au grand nombre de promotions et de bonus disponibles pour les nouveaux joueurs comme pour les joueurs réguliers. Il est important de noter que la société s’adresse à un public international, le site fonctionnant de manière fiable dans de nombreux pays."}',
             'value_pt' => '{"0":"Para maior conveniência dos usuários, há uma versão móvel do site e aplicativos para Android, enquanto para iOS há um aplicativo web. A plataforma tornou-se popular devido à grande quantidade de promoções e bônus disponíveis tanto para novos quanto para jogadores regulares. É importante destacar que a empresa é voltada para um público internacional, portanto, o site funciona de maneira estável em muitos países."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Player security is one of the key aspects 1win focuses on. The company operates under an international Curacao license, which allows it to conduct online gambling activities in many countries worldwide."}',
             'value_es' => '{"0":"La seguridad de los jugadores es uno de los aspectos clave en los que 1win se centra. La compañía opera bajo una licencia internacional de Curazao, lo que le permite realizar actividades de juego en línea en muchos países del mundo."}',
             'value_fr' => '{"0":"La sécurité des joueurs est l’un des aspects clés sur lesquels 1win se concentre. La société opère sous une licence internationale de Curaçao, ce qui lui permet de mener des activités de jeux en ligne dans de nombreux pays du monde."}',
             'value_pt' => '{"0":"A segurança dos jogadores é um dos principais aspectos em que a 1win foca. A empresa opera sob uma licença internacional de Curaçao, que permite realizar atividades de jogos online em muitos países do mundo."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to SSL encryption, all transmitted information, including personal data and financial transactions, is protected from unauthorized access. Additionally, the company uses multi-level monitoring systems that help detect suspicious transactions and block potential fraudulent activity."}',
             'value_es' => '{"0":"Gracias al cifrado SSL, toda la información transmitida, incluidos los datos personales y las transacciones financieras, está protegida contra el acceso no autorizado. Además, la compañía utiliza sistemas de control multinivel que ayudan a detectar transacciones sospechosas y bloquear posibles actividades fraudulentas."}',
             'value_fr' => '{"0":"Grâce au cryptage SSL, toutes les informations transmises, y compris les données personnelles et les transactions financières, sont protégées contre tout accès non autorisé. De plus, l’entreprise utilise des systèmes de contrôle à plusieurs niveaux qui permettent de détecter les transactions suspectes et de bloquer les activités frauduleuses potentielles."}',
             'value_pt' => '{"0":"Graças à criptografia SSL, todas as informações transmitidas, incluindo dados pessoais e transações financeiras, estão protegidas contra acessos não autorizados. Além disso, a empresa utiliza sistemas de monitoramento em múltiplos níveis que ajudam a detectar transações suspeitas e bloquear possíveis atividades fraudulentas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is also important that 1win applies a user verification procedure. During account creation, it is not mandatory, but for withdrawing significant amounts, players may be asked to provide documents that confirm their identity."}',
             'value_es' => '{"0":"También es importante que 1win aplique un procedimiento de verificación de usuarios. Durante la creación de la cuenta no es obligatorio, pero para retirar cantidades significativas, se puede solicitar a los jugadores que proporcionen documentos que confirmen su identidad."}',
             'value_fr' => '{"0":"Il est également important de noter que 1win applique une procédure de vérification des utilisateurs. Lors de la création du compte, elle n’est pas obligatoire, mais pour le retrait de sommes importantes, les joueurs peuvent être invités à fournir des documents confirmant leur identité."}',
             'value_pt' => '{"0":"Também é importante destacar que a 1win aplica um procedimento de verificação dos usuários. Durante a criação da conta, não é obrigatório, mas para sacar valores significativos, os jogadores podem ser solicitados a fornecer documentos que confirmem sua identidade."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"For each match, especially for football matches, a huge number of betting options are available. Players can bet on the match result or the number of goals scored, as well as place bets on the number of corners, yellow cards, individual player statistics, or even the time intervals in which a goal will be scored."}',
             'value_es' => '{"0":"Para cada partido, especialmente los partidos de fútbol, está disponible una gran cantidad de opciones de apuestas. Se puede apostar al resultado del partido o al número de goles, así como realizar apuestas sobre el número de córners, tarjetas amarillas, estadísticas individuales de los jugadores o incluso los intervalos de tiempo en los que se marcará un gol."}',
             'value_fr' => '{"0":"Pour chaque match, en particulier pour les matchs de football, un grand nombre d’options de paris sont disponibles. Il est possible de parier sur le résultat du match ou le nombre de buts marqués, ainsi que sur le nombre de corners, de cartons jaunes, les statistiques individuelles des joueurs ou même les intervalles de temps pendant lesquels un but sera marqué."}',
             'value_pt' => '{"0":"Para cada partida, especialmente para partidas de futebol, está disponível uma grande quantidade de opções de apostas. É possível apostar no resultado do jogo ou no número de gols marcados, assim como fazer apostas sobre o número de escanteios, cartões amarelos, estatísticas individuais dos jogadores ou até mesmo nos intervalos de tempo em que o gol será marcado."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Besides football, detailed markets are also available in other popular sports such as basketball, tennis, and hockey. For example, in tennis, it is possible to bet not only on the match or set winner but also on the exact score and the number of games. In basketball matches, players can bet on the number of rebounds, assists, and three-point shots of individual players."}',
             'value_es' => '{"0":"Además del fútbol, los mercados detallados también están presentes en otros deportes populares como baloncesto, tenis y hockey. Por ejemplo, en tenis se puede apostar no solo al ganador del partido o del set, sino también al marcador exacto y al número de juegos. En los partidos de baloncesto, los jugadores pueden apostar al número de rebotes, asistencias y tiros de tres puntos de jugadores individuales."}',
             'value_fr' => '{"0":"Outre le football, des marchés détaillés sont également proposés dans d’autres sports populaires comme le basket-ball, le tennis et le hockey. Par exemple, au tennis, il est possible de parier non seulement sur le vainqueur du match ou du set, mais aussi sur le score exact et le nombre de jeux. Dans les matchs de basket-ball, les parieurs peuvent miser sur le nombre de rebonds, de passes et de tirs à trois points des joueurs individuels."}',
             'value_pt' => '{"0":"Além do futebol, mercados detalhados também estão disponíveis em outros esportes populares como basquete, tênis e hóquei. Por exemplo, no tênis, é possível apostar não apenas no vencedor da partida ou do set, mas também no placar exato e no número de games. Em partidas de basquete, os jogadores podem apostar no número de rebotes, assistências e arremessos de três pontos de jogadores individuais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In esports, bets can be placed not only on match outcomes but also on specific in-game events such as first blood, number of kills, maps won, or the duration of the match."}',
             'value_es' => '{"0":"En los deportes electrónicos, se pueden hacer apuestas no solo sobre el resultado del partido, sino también sobre eventos específicos del juego como la primera sangre, el número de asesinatos, mapas ganados o la duración del enfrentamiento."}',
             'value_fr' => '{"0":"Dans l’esport, les paris peuvent porter non seulement sur le résultat des matchs, mais aussi sur des événements spécifiques du jeu tels que le premier sang, le nombre de kills, les cartes gagnées ou la durée de l’affrontement."}',
             'value_pt' => '{"0":"No eSports, é possível apostar não apenas no resultado das partidas, mas também em eventos específicos do jogo, como first blood, número de kills, mapas vencidos ou a duração do confronto."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The main focus is on football, where you can find both top European championships and less popular leagues. Betting options include standard results, totals, and handicaps, complemented by bets on corners, cards, exact scores, goal scorers, and the time intervals in which goals are scored."}',
             'value_es' => '{"0":"El mayor énfasis está en el fútbol, donde se pueden encontrar tanto los principales campeonatos europeos como ligas menos populares. Las opciones de apuestas incluyen resultados estándar, totales y hándicaps, complementadas con apuestas sobre córners, tarjetas, marcador exacto, goleadores y los intervalos de tiempo en que se marcan los goles."}',
             'value_fr' => '{"0":"L’accent principal est mis sur le football, où l’on trouve à la fois les principaux championnats européens et des ligues moins populaires. Les options de paris incluent les résultats standards, les totaux et les handicaps, complétés par des paris sur les corners, les cartons, le score exact, les buteurs et les intervalles de temps des buts."}',
             'value_pt' => '{"0":"O maior foco está no futebol, onde é possível encontrar tanto os principais campeonatos europeus quanto ligas menos populares. As opções de apostas incluem resultados padrão, totais e handicaps, complementadas por apostas em escanteios, cartões, placar exato, artilheiros e intervalos de tempo em que os gols são marcados."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In basketball matches, players can bet on the final score, points per quarter, overall team performance, or individual player performance. In tennis, bets can be placed on the match winner, number of sets, or number of games. In hockey matches, bets are available on the exact score, number of penalty minutes, and performance in different periods."}',
             'value_es' => '{"0":"En los partidos de baloncesto, los jugadores pueden apostar al marcador final, los puntos por cuarto, el rendimiento general del equipo o el rendimiento de un jugador individual. En el tenis, se puede apostar al ganador del partido, al número de sets o al número de juegos. En los partidos de hockey, las apuestas disponibles incluyen marcador exacto, número de minutos de penalización y rendimiento en diferentes periodos."}',
             'value_fr' => '{"0":"Dans les matchs de basket-ball, les parieurs peuvent miser sur le score final, le nombre de points par quart-temps, la performance globale de l’équipe ou celle d’un joueur individuel. Au tennis, il est possible de parier sur le vainqueur du match, le nombre de sets ou le nombre de jeux. Dans les matchs de hockey, les paris disponibles incluent le score exact, le nombre de minutes de pénalité et la performance par période."}',
             'value_pt' => '{"0":"Em partidas de basquete, os jogadores podem apostar no placar final, nos pontos por quarto, no desempenho geral da equipe ou no desempenho de um jogador individual. No tênis, é possível apostar no vencedor da partida, no número de sets ou no número de games. Nas partidas de hóquei, as apostas disponíveis incluem placar exato, número de minutos de penalidade e desempenho em diferentes períodos."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at 1win contains a large variety of games. There are thousands of slots from leading providers, including NetEnt, Microgaming, Play’n GO, and others. Players can enjoy both classic three-reel slots and modern video slots. For those who prefer table games, there are different versions of roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"La sección de casino en 1win contiene una gran variedad de juegos. Hay miles de tragamonedas de proveedores líderes, incluidos NetEnt, Microgaming, Play’n GO y otros. Los jugadores pueden disfrutar tanto de las tragamonedas clásicas de tres carretes como de las modernas tragamonedas de video. Para quienes prefieren los juegos de mesa, hay diferentes versiones de ruleta, blackjack, baccarat y póker."}',
             'value_fr' => '{"0":"La section casino de 1win contient une grande variété de jeux. Il y a des milliers de machines à sous de fournisseurs réputés tels que NetEnt, Microgaming, Play’n GO et d’autres. Les joueurs peuvent profiter des machines à sous classiques à trois rouleaux ainsi que des machines à sous vidéo modernes. Pour ceux qui préfèrent les jeux de table, différentes versions de roulette, blackjack, baccarat et poker sont disponibles."}',
             'value_pt' => '{"0":"A seção de cassino da 1win contém uma grande variedade de jogos. Existem milhares de slots de provedores líderes, incluindo NetEnt, Microgaming, Play’n GO e outros. Os jogadores podem aproveitar tanto os slots clássicos de três rolos quanto os modernos slots de vídeo. Para quem prefere jogos de mesa, estão disponíveis diferentes versões de roleta, blackjack, baccarat e poker."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Special attention should be given to the live casino, where you can play with real dealers in live broadcast mode. Players can watch the game process in real time, communicate with the dealer and other participants, creating the feeling of a real casino. The live section offers various tables for roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"Se debe prestar especial atención al casino en vivo, donde se puede jugar con crupieres reales en modo de transmisión en directo. Los jugadores pueden ver el desarrollo del juego en tiempo real, comunicarse con el crupier y otros participantes, creando la sensación de un casino real. La sección en vivo ofrece varias mesas de ruleta, blackjack, baccarat y póker."}',
             'value_fr' => '{"0":"Une attention particulière doit être portée au casino en direct, où il est possible de jouer avec de vrais croupiers en diffusion en direct. Les joueurs peuvent suivre le déroulement du jeu en temps réel, communiquer avec le croupier et les autres participants, créant ainsi une expérience proche d’un vrai casino. La section live propose différentes tables de roulette, blackjack, baccarat et poker."}',
             'value_pt' => '{"0":"Atenção especial deve ser dada ao cassino ao vivo, onde é possível jogar com dealers reais em modo de transmissão ao vivo. Os jogadores podem acompanhar o jogo em tempo real, comunicar-se com o dealer e outros participantes, criando a sensação de um cassino real. A seção ao vivo oferece várias mesas de roleta, blackjack, baccarat e poker."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win also provides tools for convenient management of the gaming process. You can track your betting history, control deposits, use bonuses, and participate in promotions. All games are available both on desktop and in mobile applications."}',
             'value_es' => '{"0":"1win también proporciona herramientas para gestionar cómodamente el proceso de juego. Se puede seguir el historial de apuestas, controlar los depósitos, utilizar bonos y participar en promociones. Todos los juegos están disponibles tanto en escritorio como en aplicaciones móviles."}',
             'value_fr' => '{"0":"1win fournit également des outils pour gérer facilement le processus de jeu. Il est possible de suivre l’historique des paris, de contrôler les dépôts, d’utiliser les bonus et de participer aux promotions. Tous les jeux sont disponibles à la fois sur ordinateur et sur applications mobiles."}',
             'value_pt' => '{"0":"A 1win também oferece ferramentas para gerenciar o processo de jogo de forma prática. É possível acompanhar o histórico de apostas, controlar depósitos, usar bônus e participar de promoções. Todos os jogos estão disponíveis tanto no desktop quanto nos aplicativos móveis."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Odds at 1win play a key role since the potential winnings on each bet depend on them. For popular events, such as top football league matches or international tennis tournaments, the platform offers quite competitive figures that often exceed the average level. For example, in a Champions League match, the odds for the favorite can be around 1.95, while for a less likely outcome, they reach 3.50."}',
             'value_es' => '{"0":"Las cuotas en 1win juegan un papel clave, ya que de ellas depende cuánto se puede ganar en cada apuesta. Para eventos populares, como los partidos de las principales ligas de fútbol o torneos internacionales de tenis, la plataforma ofrece cifras bastante competitivas que a menudo superan el nivel promedio. Por ejemplo, en un partido de la Liga de Campeones, la cuota para el favorito puede ser de aproximadamente 1,95, mientras que para un resultado menos probable llega a 3,50."}',
             'value_fr' => '{"0":"Les cotes sur 1win jouent un rôle clé, car elles déterminent le montant que l’on peut gagner sur chaque pari. Pour les événements populaires, tels que les matchs des principales ligues de football ou les tournois internationaux de tennis, la plateforme propose des chiffres assez compétitifs, souvent supérieurs à la moyenne. Par exemple, lors d’un match de la Ligue des champions, la cote du favori peut être d’environ 1,95, tandis que pour un résultat moins probable, elle atteint 3,50."}',
             'value_pt' => '{"0":"As odds na 1win desempenham um papel fundamental, pois delas depende o quanto se pode ganhar em cada aposta. Para eventos populares, como partidas das principais ligas de futebol ou torneios internacionais de tênis, a plataforma oferece números bastante competitivos que frequentemente superam o nível médio. Por exemplo, em um jogo da Liga dos Campeões, a odd para o favorito pode ser cerca de 1,95, enquanto para um resultado menos provável chega a 3,50."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In live bets, the odds change in real time, allowing players to react quickly to match events. In an English Premier League match during the second half, the odds for a goal can be 2.30, and for the number of corners, 1.80."}',
             'value_es' => '{"0":"En las apuestas en vivo, las cuotas cambian en tiempo real, lo que permite reaccionar rápidamente a los eventos del partido. En un partido de la Premier League inglesa durante la segunda mitad, la cuota por un gol puede ser 2,30 y por el número de córners 1,80."}',
             'value_fr' => '{"0":"Dans les paris en direct, les cotes changent en temps réel, ce qui permet de réagir rapidement aux événements du match. Lors d’un match de Premier League anglaise pendant la seconde mi-temps, la cote pour un but peut être de 2,30, et pour le nombre de corners de 1,80."}',
             'value_pt' => '{"0":"Nas apostas ao vivo, as odds mudam em tempo real, permitindo reagir rapidamente aos eventos da partida. Em uma partida da Premier League inglesa durante o segundo tempo, a odd para um gol pode ser 2,30 e para o número de escanteios 1,80."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers a live streaming feature that allows users to watch matches and place bets in real time. To make predictions easier in live mode, the platform provides graphical match centers that show ball possession, team attacks, dangerous moments, and other key statistical indicators."}',
             'value_es' => '{"0":"1win ofrece la función de transmisiones en vivo, que permite a los usuarios ver los partidos y realizar apuestas en tiempo real. Para facilitar las predicciones en el modo en vivo, la plataforma cuenta con centros de partido gráficos que muestran la posesión del balón, los ataques de los equipos, los momentos peligrosos y otros indicadores estadísticos clave."}',
             'value_fr' => '{"0":"1win propose une fonction de diffusion en direct qui permet aux utilisateurs de regarder les matchs et de placer des paris en temps réel. Pour faciliter les prévisions en mode live, la plateforme dispose de centres de match graphiques qui montrent la possession du ballon, les attaques des équipes, les moments dangereux et d’autres indicateurs statistiques clés."}',
             'value_pt' => '{"0":"A 1win oferece a função de transmissões ao vivo, que permite aos usuários assistir aos jogos e fazer apostas em tempo real. Para facilitar as previsões no modo ao vivo, a plataforma dispõe de centros gráficos de partidas que mostram a posse de bola, ataques das equipes, momentos perigosos e outros indicadores estatísticos importantes."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Live streams are available not only for top leagues and international tournaments but also for less popular championships. To access the streams, it is enough to have an active account and a minimal balance. This allows users to place bets on sports events at any moment."}',
             'value_es' => '{"0":"Las transmisiones en vivo están disponibles no solo para las principales ligas y torneos internacionales, sino también para campeonatos menos populares. Para acceder a las transmisiones, basta con tener una cuenta activa y un saldo mínimo. Esto permite a los usuarios realizar apuestas en eventos deportivos en cualquier momento."}',
             'value_fr' => '{"0":"Les diffusions en direct sont disponibles non seulement pour les principales ligues et les tournois internationaux, mais aussi pour les championnats moins populaires. Pour accéder aux diffusions, il suffit d’avoir un compte actif et un solde minimal. Cela permet aux utilisateurs de parier sur des événements sportifs à tout moment."}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis não apenas para as principais ligas e torneios internacionais, mas também para campeonatos menos populares. Para acessar as transmissões, basta ter uma conta ativa e um saldo mínimo. Isso permite que os usuários façam apostas em eventos esportivos a qualquer momento."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win takes player safety seriously. The platform provides tools that allow users to control the time and money spent on betting. It is possible to set limits on deposits and session durations to avoid excessive spending."}',
             'value_es' => '{"0":"1win se toma muy en serio la seguridad de los jugadores. La plataforma ofrece herramientas que permiten controlar el tiempo y el dinero gastados en apuestas. Es posible establecer límites en los depósitos y en la duración de las sesiones para evitar gastos excesivos."}',
             'value_fr' => '{"0":"1win prend la sécurité des joueurs très au sérieux. La plateforme propose des outils permettant de contrôler le temps et l’argent dépensés en paris. Il est possible de fixer des limites sur les dépôts et la durée des sessions pour éviter les dépenses excessives."}',
             'value_pt' => '{"0":"A 1win leva a segurança dos jogadores a sério. A plataforma oferece ferramentas que permitem controlar o tempo e o dinheiro gastos em apostas. É possível definir limites para depósitos e para a duração das sessões, evitando gastos excessivos."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"If a player feels the need for a break, they can independently block their account for a certain period. This allows them to step away from betting and return to the game later."}',
             'value_es' => '{"0":"Si un jugador siente la necesidad de un descanso, puede bloquear su cuenta por un período determinado de manera independiente. Esto le permite alejarse de las apuestas y volver a jugar más tarde."}',
             'value_fr' => '{"0":"Si un joueur ressent le besoin de faire une pause, il peut bloquer son compte de manière autonome pour une certaine période. Cela permet de s’éloigner des paris et de revenir jouer plus tard."}',
             'value_pt' => '{"0":"Se um jogador sentir necessidade de uma pausa, ele pode bloquear sua conta por um período determinado de forma independente. Isso permite se afastar das apostas e retornar ao jogo mais tarde."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win offers a wide range of deposit and withdrawal methods, making the platform convenient for players from different countries. You can use Visa and MasterCard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, as well as a number of regional payment systems. Cryptocurrencies are also supported, including Bitcoin, Ethereum, Litecoin, Dogecoin, and more than twenty other popular digital currencies."}',
             'value_es' => '{"0":"1win ofrece una amplia variedad de métodos para depositar y retirar fondos, lo que hace que la plataforma sea conveniente para jugadores de diferentes países. Se pueden usar tarjetas bancarias Visa y MasterCard, monederos electrónicos como Skrill, Neteller, ecoPayz, así como varios sistemas de pago regionales. También se admiten criptomonedas, entre ellas Bitcoin, Ethereum, Litecoin, Dogecoin y más de veinte monedas digitales populares."}',
             'value_fr' => '{"0":"1win propose un large éventail de méthodes de dépôt et de retrait, rendant la plateforme pratique pour les joueurs de différents pays. Vous pouvez utiliser des cartes bancaires Visa et MasterCard, des portefeuilles électroniques tels que Skrill, Neteller, ecoPayz, ainsi que plusieurs systèmes de paiement régionaux. Les cryptomonnaies sont également prises en charge, y compris Bitcoin, Ethereum, Litecoin, Dogecoin et plus de vingt autres monnaies numériques populaires."}',
             'value_pt' => '{"0":"A 1win oferece uma ampla variedade de métodos de depósito e saque, tornando a plataforma conveniente para jogadores de diferentes países. É possível usar cartões bancários Visa e MasterCard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, assim como diversos sistemas de pagamento regionais. Criptomoedas também são suportadas, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin e mais de vinte outras moedas digitais populares."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are processed almost instantly, allowing players to start playing without delays. Withdrawals can take from a few minutes up to one day depending on the chosen method and amount. It is important to note that the platform does not charge fees for most transactions."}',
             'value_es' => '{"0":"Los depósitos se procesan casi al instante, lo que permite comenzar a jugar sin retrasos. Las retiradas pueden tardar desde unos minutos hasta un día, dependiendo del método y la cantidad elegida. Es importante señalar que la plataforma no cobra comisiones por la mayoría de las transacciones."}',
             'value_fr' => '{"0":"Les dépôts sont traités presque instantanément, permettant de commencer à jouer sans délai. Les retraits peuvent prendre de quelques minutes à un jour selon la méthode choisie et le montant. Il est important de noter que la plateforme ne prélève pas de frais pour la plupart des transactions."}',
             'value_pt' => '{"0":"Os depósitos são processados quase instantaneamente, permitindo começar a jogar sem atrasos. Os saques podem levar de alguns minutos até um dia, dependendo do método e do valor escolhido. É importante destacar que a plataforma não cobra taxas na maioria das transações."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The support service operates around the clock and is available in multiple languages. Users can contact support via the online chat on the website or by email."}',
             'value_es' => '{"0":"El servicio de atención al cliente funciona las 24 horas y está disponible en varios idiomas. Los usuarios pueden comunicarse a través del chat en línea en el sitio web o por correo electrónico."}',
             'value_fr' => '{"0":"Le service client est disponible 24 heures sur 24 et propose plusieurs langues. Les utilisateurs peuvent contacter le support via le chat en ligne sur le site ou par e-mail."}',
             'value_pt' => '{"0":"O serviço de suporte funciona 24 horas por dia e está disponível em vários idiomas. Os usuários podem entrar em contato pelo chat online no site ou por e-mail."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of casino games",
                                 "1":"Cryptocurrency support",
                                 "2":"Convenient mobile apps",
                                 "3":"Live video streaming and in-play betting",
                                 "4":"Many different promotions"},
                             "1":
                                {"0":"Curacao license does not provide full protection",
                                 "1":"Access restrictions in certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia selección de juegos de casino",
                                 "1":"Soporte de criptomonedas",
                                 "2":"Aplicaciones móviles convenientes",
                                 "3":"Transmisiones en vivo y apuestas en tiempo real",
                                 "4":"Muchas promociones variadas"},
                             "1":
                                {"0":"La licencia de Curazao no ofrece protección total",
                                 "1":"Restricciones de acceso en ciertos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de jeux de casino",
                                 "1":"Support des crypto-monnaies",
                                 "2":"Applications mobiles pratiques",
                                 "3":"Diffusions en direct et paris en direct",
                                 "4":"De nombreuses promotions variées"},
                             "1":
                                {"0":"La licence de Curaçao ne garantit pas une protection complète",
                                 "1":"Restrictions d’accès dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de jogos de cassino",
                                 "1":"Suporte a criptomoedas",
                                 "2":"Aplicativos móveis convenientes",
                                 "3":"Transmissões ao vivo e apostas em tempo real",
                                 "4":"Muitas promoções variadas"},
                             "1":
                                {"0":"A licença de Curaçao não oferece proteção total",
                                 "1":"Restrições de acesso em alguns países"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 39
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"What documents are required for verification on 1win?"}',
             'value_es' => '{"0":"¿Qué documentos se requieren para la verificación en 1win?"}',
             'value_fr' => '{"0":"Quels documents sont nécessaires pour la vérification sur 1win ?"}',
             'value_pt' => '{"0":"Quais documentos são necessários para verificação na 1win?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 40
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To confirm your identity, a passport or driver\'s license is usually requested."}',
             'value_es' => '{"0":"Para confirmar la identidad, normalmente se solicita el pasaporte o el permiso de conducir."}',
             'value_fr' => '{"0":"Pour confirmer l\'identité, un passeport ou un permis de conduire est généralement demandé."}',
             'value_pt' => '{"0":"Para confirmar a identidade, geralmente é solicitado o passaporte ou a carteira de motorista."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 41
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación?"}',
             'value_fr' => '{"0":"Combien de temps dure la vérification ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 42
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, document verification takes from a few hours up to one business day."}',
             'value_es' => '{"0":"En la mayoría de los casos, la verificación de documentos tarda desde unas pocas horas hasta un día hábil."}',
             'value_fr' => '{"0":"Dans la plupart des cas, la vérification des documents prend de quelques heures à une journée ouvrable."}',
             'value_pt' => '{"0":"Na maioria dos casos, a verificação de documentos leva de algumas horas até um dia útil."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 43
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can the account currency be changed after registration?"}',
             'value_es' => '{"0":"¿Se puede cambiar la moneda de la cuenta después del registro?"}',
             'value_fr' => '{"0":"Peut-on changer la devise du compte après l’inscription ?"}',
             'value_pt' => '{"0":"É possível mudar a moeda da conta após o registro?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 44
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"No, it is not possible to change the currency after creating the profile, so it should be selected during registration."}',
             'value_es' => '{"0":"No, no es posible cambiar la moneda después de crear el perfil, por lo que debe seleccionarse durante el registro."}',
             'value_fr' => '{"0":"Non, il n’est pas possible de changer la devise après la création du profil, il faut donc la choisir lors de l’inscription."}',
             'value_pt' => '{"0":"Não, não é possível mudar a moeda depois de criar o perfil, portanto deve ser escolhida durante o registro."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 45
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Do 1win promotions work in the mobile app?"}',
             'value_es' => '{"0":"¿Las promociones de 1win funcionan en la aplicación móvil?"}',
             'value_fr' => '{"0":"Les promotions 1win sont-elles valables dans l’application mobile ?"}',
             'value_pt' => '{"0":"As promoções da 1win funcionam no aplicativo móvel?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 46
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all bonuses and promotional offers are available in the Android and iOS apps, as well as in the mobile version of the website."}',
             'value_es' => '{"0":"Sí, todos los bonos y ofertas promocionales están disponibles en las aplicaciones para Android e iOS, así como en la versión móvil del sitio web."}',
             'value_fr' => '{"0":"Oui, tous les bonus et offres promotionnelles sont disponibles dans les applications Android et iOS ainsi que dans la version mobile du site."}',
             'value_pt' => '{"0":"Sim, todos os bônus e ofertas promocionais estão disponíveis nos aplicativos para Android e iOS, assim como na versão móvel do site."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 47
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used to activate bonuses?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda para activar los bonos?"}',
             'value_fr' => '{"0":"Peut-on utiliser la cryptomonnaie pour activer les bonus ?"}',
             'value_pt' => '{"0":"É possível usar criptomoeda para ativar bônus?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 48
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, deposits made in cryptocurrency also participate in the bonus programs."}',
             'value_es' => '{"0":"Sí, los depósitos realizados en criptomonedas también participan en los programas de bonificación."}',
             'value_fr' => '{"0":"Oui, les dépôts en cryptomonnaie participent également aux programmes de bonus."}',
             'value_pt' => '{"0":"Sim, depósitos em criptomoeda também participam dos programas de bônus."}',
             'order' => 48
            ]
        );
    }
}
