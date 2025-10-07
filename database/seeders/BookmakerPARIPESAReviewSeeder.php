<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa is an international bookmaker platform that combines sports betting and a wide selection of gambling games. The site has been operating since 2019 and is owned by Vezzali Limited, registered in Cyprus, with a license for activity issued by Curaçao. The platform targets players from different countries, offering a multilingual interface and multiple currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"Paripesa es una plataforma de apuestas internacional que combina apuestas deportivas y una amplia selección de juegos de azar. El sitio opera desde 2019 y pertenece a Vezzali Limited, registrada en Chipre, con una licencia de actividad emitida por Curazao. La plataforma está dirigida a jugadores de diferentes países, ofreciendo una interfaz multilingüe y múltiples monedas, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"Paripesa est une plateforme de paris internationale qui combine les paris sportifs et un large choix de jeux d\'argent. Le site fonctionne depuis 2019 et appartient à Vezzali Limited, enregistrée à Chypre, avec une licence délivrée par Curaçao. La plateforme s\'adresse à des joueurs de différents pays et propose une interface multilingue ainsi que plusieurs devises, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"Paripesa é uma plataforma internacional de apostas que combina apostas esportivas e uma ampla seleção de jogos de azar. O site opera desde 2019 e pertence à Vezzali Limited, registrada em Chipre, com licença emitida por Curaçao. A plataforma é direcionada a jogadores de diferentes países, oferecendo uma interface multilíngue e múltiplas moedas, incluindo criptomoedas."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The site features a modern design and stable performance on both computers and mobile devices. Paripesa offers over a thousand sports events daily, a wide variety of slots and table games in the casino, as well as ongoing promotions for both new and regular players."}',
             'value_es' => '{"0":"El sitio se destaca por un diseño moderno y un rendimiento estable tanto en computadoras como en dispositivos móviles. Paripesa ofrece más de mil eventos deportivos diariamente, una amplia variedad de tragamonedas y juegos de mesa en el casino, así como promociones continuas para jugadores nuevos y habituales."}',
             'value_fr' => '{"0":"Le site se distingue par un design moderne et des performances stables sur ordinateurs et appareils mobiles. Paripesa propose plus de mille événements sportifs par jour, un large choix de machines à sous et de jeux de table au casino, ainsi que des promotions régulières pour les nouveaux joueurs et les habitués."}',
             'value_pt' => '{"0":"O site apresenta um design moderno e desempenho estável tanto em computadores quanto em dispositivos móveis. Paripesa oferece mais de mil eventos esportivos diariamente, uma grande variedade de slots e jogos de mesa no cassino, além de promoções contínuas para novos e regulares jogadores."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa places significant emphasis on user security and compliance with international gambling standards. As mentioned earlier, the platform operates under a Curaçao license, which allows it to legally provide bookmaker services in many countries."}',
             'value_es' => '{"0":"Paripesa presta una atención significativa a la seguridad de los usuarios y al cumplimiento de los estándares internacionales en el ámbito de los juegos de azar. Como se mencionó anteriormente, la plataforma opera bajo una licencia de Curazao, lo que le permite ofrecer servicios de apuestas de manera legal en muchos países."}',
             'value_fr' => '{"0":"Paripesa accorde une attention particulière à la sécurité des utilisateurs et au respect des normes internationales dans le domaine des jeux d\'argent. Comme mentionné précédemment, la plateforme fonctionne sous licence de Curaçao, ce qui lui permet de fournir légalement des services de bookmaker dans de nombreux pays."}',
             'value_pt' => '{"0":"A Paripesa dá grande importância à segurança dos usuários e ao cumprimento dos padrões internacionais no setor de jogos de azar. Como mencionado anteriormente, a plataforma opera sob uma licença de Curaçao, permitindo fornecer legalmente serviços de apostas em muitos países."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To protect personal data, modern SSL encryption protocols are used, ensuring secure information transfer. All financial transactions go through verified payment systems, eliminating the risk of fraud."}',
             'value_es' => '{"0":"Para proteger los datos personales, se utilizan protocolos modernos de cifrado SSL que garantizan la transmisión segura de la información. Todas las transacciones financieras se realizan a través de sistemas de pago verificados, lo que elimina el riesgo de fraude."}',
             'value_fr' => '{"0":"Pour protéger les données personnelles, des protocoles de cryptage SSL modernes sont utilisés, garantissant la transmission sécurisée des informations. Toutes les transactions financières passent par des systèmes de paiement vérifiés, éliminant ainsi le risque de fraude."}',
             'value_pt' => '{"0":"Para proteger os dados pessoais, são utilizados protocolos modernos de criptografia SSL, garantindo a transmissão segura das informações. Todas as transações financeiras passam por sistemas de pagamento verificados, eliminando o risco de fraude."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The company also monitors adherence to fair play principles, using certified random number generators for slots and table games. Additionally, Paripesa follows a privacy policy that meets international data protection standards."}',
             'value_es' => '{"0":"La empresa también supervisa el cumplimiento de los principios de juego limpio, utilizando generadores de números aleatorios certificados para las tragamonedas y juegos de mesa. Además, Paripesa sigue una política de privacidad que cumple con los estándares internacionales de protección de datos."}',
             'value_fr' => '{"0":"L\'entreprise veille également au respect des principes de jeu équitable, en utilisant des générateurs de nombres aléatoires certifiés pour les machines à sous et les jeux de table. De plus, Paripesa applique une politique de confidentialité conforme aux normes internationales de protection des données."}',
             'value_pt' => '{"0":"A empresa também controla a conformidade com os princípios de jogo justo, usando geradores de números aleatórios certificados para slots e jogos de mesa. Além disso, a Paripesa segue uma política de privacidade que atende aos padrões internacionais de proteção de dados."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers users a wide range of betting options that will satisfy both beginners and experienced players. In football matches, you can bet not only on the winner but also on the number of yellow cards, corners, fouls, or the minute when the first goal will be scored. For basketball matches, bets are available on totals, handicaps, individual player statistics, three-pointers, and even the result of each quarter."}',
             'value_es' => '{"0":"Paripesa ofrece a los usuarios una amplia variedad de opciones de apuestas que satisfacen tanto a principiantes como a jugadores experimentados. En los partidos de fútbol, se puede apostar no solo al ganador, sino también al número de tarjetas amarillas, saques de esquina, faltas o al minuto en que se marcará el primer gol. Para los partidos de baloncesto, se ofrecen apuestas sobre totales, hándicaps, estadísticas individuales de los jugadores, triples e incluso el resultado de cada cuarto."}',
             'value_fr' => '{"0":"Paripesa propose aux utilisateurs une large gamme d’options de paris qui satisfera à la fois les débutants et les joueurs expérimentés. Lors des matchs de football, il est possible de parier non seulement sur le vainqueur mais également sur le nombre de cartons jaunes, de corners, de fautes ou la minute où le premier but sera marqué. Pour les matchs de basketball, les paris incluent les totaux, les handicaps, les statistiques individuelles des joueurs, les tirs à trois points et même le résultat de chaque quart-temps."}',
             'value_pt' => '{"0":"A Paripesa oferece aos usuários uma ampla variedade de opções de apostas que atendem tanto a iniciantes quanto a jogadores experientes. Em partidas de futebol, é possível apostar não apenas no vencedor, mas também no número de cartões amarelos, escanteios, faltas ou no minuto em que será marcado o primeiro gol. Para partidas de basquete, estão disponíveis apostas em totais, handicaps, estatísticas individuais dos jogadores, arremessos de três pontos e até o resultado de cada quarto."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Special attention is given to esports. Paripesa features lines for Dota 2, CS2, League of Legends, Valorant, and other disciplines, where you can bet on the match outcome, specific maps, or player statistics. In addition, markets for less popular sports such as darts, snooker, water polo, or handball are also available."}',
             'value_es' => '{"0":"Se presta especial atención a los deportes electrónicos. Paripesa tiene líneas para Dota 2, CS2, League of Legends, Valorant y otras disciplinas, donde se puede apostar tanto al resultado final como a mapas específicos o estadísticas de los jugadores. Además, se pueden encontrar mercados para deportes menos populares, como dardos, snooker, waterpolo o balonmano."}',
             'value_fr' => '{"0":"Une attention particulière est accordée à l’e-sport. Paripesa propose des lignes pour Dota 2, CS2, League of Legends, Valorant et d’autres disciplines, permettant de parier sur le résultat du match, des cartes spécifiques ou les statistiques des joueurs. De plus, il est possible de trouver des marchés pour des sports moins populaires tels que les fléchettes, le snooker, le water-polo ou le handball."}',
             'value_pt' => '{"0":"A atenção especial é dada aos esportes eletrônicos. A Paripesa apresenta linhas para Dota 2, CS2, League of Legends, Valorant e outras disciplinas, onde é possível apostar no resultado da partida, mapas específicos ou estatísticas dos jogadores. Além disso, também é possível encontrar mercados para esportes menos populares, como dardos, sinuca, polo aquático ou handebol."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"On the Paripesa website, hundreds of events are available every day, ranging from world championships and top European leagues to local tournaments and less popular disciplines. The main focus is on football, tennis, basketball, hockey, volleyball, boxing, baseball, and cricket. For football matches, an extremely detailed line is created, allowing bets not only on the result or totals but also on the exact score, goal scorers, number of cards, corners, offsides, or even the minute when a goal will be scored."}',
             'value_es' => '{"0":"En el sitio web de Paripesa, se presentan cientos de eventos cada día, desde campeonatos mundiales y ligas europeas de primer nivel hasta torneos locales y disciplinas menos populares. La atención principal se centra en el fútbol, el tenis, el baloncesto, el hockey, el voleibol, el boxeo, el béisbol y el cricket. Para los partidos de fútbol se ha creado una línea extremadamente detallada, que permite apostar no solo al resultado o totales, sino también al marcador exacto, los goleadores, el número de tarjetas, saques de esquina, fuera de juego o incluso el minuto en que se marcará un gol."}',
             'value_fr' => '{"0":"Sur le site Paripesa, des centaines d’événements sont proposés chaque jour, allant des championnats mondiaux et des principales ligues européennes aux tournois locaux et aux disciplines moins populaires. L’accent est mis sur le football, le tennis, le basketball, le hockey, le volleyball, la boxe, le baseball et le cricket. Pour les matchs de football, une ligne extrêmement détaillée est disponible, permettant de parier non seulement sur le résultat ou les totaux, mais aussi sur le score exact, les buteurs, le nombre de cartons, de corners, les hors-jeu ou même la minute où un but sera marqué."}',
             'value_pt' => '{"0":"No site da Paripesa, centenas de eventos estão disponíveis todos os dias, desde campeonatos mundiais e principais ligas europeias até torneios locais e disciplinas menos populares. O foco principal está no futebol, tênis, basquete, hóquei, vôlei, boxe, beisebol e críquete. Para partidas de futebol, é criada uma linha extremamente detalhada, permitindo apostar não apenas no resultado ou nos totais, mas também no placar exato, nos artilheiros, no número de cartões, escanteios, impedimentos ou até no minuto em que será marcado o gol."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The betting section interface is very convenient. Thanks to filters and search options, it is easy to quickly find the desired tournament, team, or country. Pre-match bets can be combined into accumulators, forming complex combinations."}',
             'value_es' => '{"0":"La interfaz de la sección de apuestas es bastante cómoda. Gracias a los filtros y al buscador, es fácil encontrar rápidamente el torneo, equipo o país deseado. Las apuestas prepartido se pueden combinar en apuestas acumuladas, formando combinaciones complejas."}',
             'value_fr' => '{"0":"L’interface de la section paris est très pratique. Grâce aux filtres et à la fonction de recherche, il est facile de trouver rapidement le tournoi, l’équipe ou le pays souhaité. Les paris avant match peuvent être combinés en paris combinés, formant des combinaisons complexes."}',
             'value_pt' => '{"0":"A interface da seção de apostas é bastante conveniente. Graças aos filtros e à busca, é possível encontrar rapidamente o torneio, a equipe ou o país desejado. As apostas pré-jogo podem ser combinadas em acumuladores, formando combinações complexas."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The casino section on Paripesa offers a large library of slots, table games, and live entertainment where you can experience the atmosphere of a real casino without leaving home. All games are developed by leading software providers, including NetEnt, Pragmatic Play, Play’n GO, Microgaming, and others."}',
             'value_es' => '{"0":"La sección de casino en Paripesa ofrece una gran biblioteca de tragamonedas, juegos de mesa y entretenimiento en vivo, donde se puede disfrutar de la atmósfera de un casino real sin salir de casa. Todos los juegos son desarrollados por proveedores de software líderes, como NetEnt, Pragmatic Play, Play’n GO, Microgaming, entre otros."}',
             'value_fr' => '{"0":"La section casino de Paripesa propose une vaste bibliothèque de machines à sous, jeux de table et divertissements en direct, permettant de ressentir l’atmosphère d’un vrai casino sans quitter son domicile. Tous les jeux sont développés par des fournisseurs de logiciels de premier plan, tels que NetEnt, Pragmatic Play, Play’n GO, Microgaming et d’autres."}',
             'value_pt' => '{"0":"A seção de cassino da Paripesa oferece uma grande biblioteca de slots, jogos de mesa e entretenimento ao vivo, permitindo sentir a atmosfera de um cassino real sem sair de casa. Todos os jogos são desenvolvidos por fornecedores de software líderes, como NetEnt, Pragmatic Play, Play’n GO, Microgaming e outros."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can choose between classic three-reel slots, modern video slots, and various themed storylines. You can also play roulette, baccarat, blackjack, and poker. Live games are especially popular, allowing you to play with a real dealer in real time. Thanks to high-quality video streaming, the gameplay feels very realistic."}',
             'value_es' => '{"0":"Se puede elegir entre tragamonedas clásicas de tres carretes, tragamonedas modernas de video y diferentes temáticas con historia. También se puede jugar a la ruleta, baccarat, blackjack y póker. Los juegos en vivo son especialmente populares, permitiendo jugar con un crupier real en tiempo real. Gracias a la alta calidad de la transmisión de video, la experiencia es muy realista."}',
             'value_fr' => '{"0":"Vous pouvez choisir entre des machines à sous classiques à trois rouleaux, des machines vidéo modernes et différents thèmes scénarisés. Il est également possible de jouer à la roulette, au baccarat, au blackjack et au poker. Les jeux en direct sont particulièrement populaires, offrant la possibilité de jouer avec un croupier réel en temps réel. Grâce à la haute qualité du flux vidéo, l’expérience de jeu est très réaliste."}',
             'value_pt' => '{"0":"Você pode escolher entre slots clássicos de três cilindros, slots de vídeo modernos e diversos temas com histórias. Também é possível jogar roleta, bacará, blackjack e pôquer. Os jogos ao vivo são especialmente populares, permitindo jogar com um dealer real em tempo real. Graças à alta qualidade do streaming de vídeo, a experiência de jogo é muito realista."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa regularly adds new games, updates its offerings, and hosts special tournaments where you can compete with other players for cash prizes. The casino interface is intuitive, with convenient filters to search by provider or game type."}',
             'value_es' => '{"0":"Paripesa añade regularmente nuevos juegos, actualiza sus ofertas y organiza torneos especiales en los que se puede competir con otros jugadores por premios en efectivo. La interfaz del casino es intuitiva, con filtros convenientes para buscar por proveedor o tipo de juego."}',
             'value_fr' => '{"0":"Paripesa ajoute régulièrement de nouveaux jeux, met à jour ses offres et organise des tournois spéciaux où il est possible de rivaliser avec d’autres joueurs pour des prix en argent. L’interface du casino est intuitive, avec des filtres pratiques pour rechercher par fournisseur ou type de jeu."}',
             'value_pt' => '{"0":"A Paripesa adiciona regularmente novos jogos, atualiza suas ofertas e realiza torneios especiais onde você pode competir com outros jogadores por prêmios em dinheiro. A interface do cassino é intuitiva, com filtros convenientes para buscar por fornecedor ou tipo de jogo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa pays special attention to odds for sports betting. The platform generally offers values that match the average level of leading European bookmakers. For example, in Champions League matches, odds for the favorite can range from 1.85 to 1.92, while for the underdog they range from 4.10 to 4.50. For matches between teams of roughly equal level, odds around 2.00 are often offered."}',
             'value_es' => '{"0":"Paripesa presta especial atención a las cuotas en las apuestas deportivas. La plataforma generalmente ofrece valores que se sitúan al nivel promedio de los principales corredores europeos. Por ejemplo, en los partidos de la Liga de Campeones, las cuotas para el favorito pueden variar entre 1.85 y 1.92, mientras que para el desfavorecido oscilan entre 4.10 y 4.50. Para encuentros entre equipos de nivel similar, a menudo se ofrecen cuotas cercanas a 2.00."}',
             'value_fr' => '{"0":"Paripesa accorde une attention particulière aux cotes pour les paris sportifs. La plateforme propose généralement des valeurs correspondant au niveau moyen des principaux bookmakers européens. Par exemple, pour les matchs de la Ligue des champions, les cotes pour le favori peuvent varier de 1,85 à 1,92, tandis que pour l’outsider, elles se situent entre 4,10 et 4,50. Pour des matchs entre équipes de niveau approximativement égal, des cotes proches de 2,00 sont souvent proposées."}',
             'value_pt' => '{"0":"A Paripesa dá atenção especial às odds para apostas desportivas. A plataforma geralmente oferece valores que correspondem ao nível médio das principais casas de apostas europeias. Por exemplo, em partidas da Liga dos Campeões, as odds para o favorito podem variar de 1,85 a 1,92, enquanto para o azarão variam de 4,10 a 4,50. Para partidas entre equipes de nível aproximadamente igual, frequentemente são oferecidas odds em torno de 2,00."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In tennis matches, odds for the favorite usually range from 1.70 to 1.80, while the opponent can have odds of 2.10 to 2.40. In basketball, particularly the NBA, bets on a slightly favored team are often rated around 1.90 to 1.95."}',
             'value_es' => '{"0":"En los partidos de tenis, las cuotas para el favorito suelen estar entre 1.70 y 1.80, mientras que para el oponente se pueden encontrar cuotas de 2.10 a 2.40. En baloncesto, especialmente en la NBA, las apuestas a un equipo con ligera ventaja se valoran generalmente en torno a 1.90-1.95."}',
             'value_fr' => '{"0":"Dans les matchs de tennis, les cotes pour le favori sont généralement comprises entre 1,70 et 1,80, tandis que pour l’adversaire, elles peuvent se situer entre 2,10 et 2,40. Dans le basketball, notamment la NBA, les paris sur une équipe légèrement favorite sont souvent évalués autour de 1,90 à 1,95."}',
             'value_pt' => '{"0":"Em partidas de tênis, as odds para o favorito geralmente variam de 1,70 a 1,80, enquanto o oponente pode ter odds de 2,10 a 2,40. No basquete, especialmente na NBA, apostas em uma equipe ligeiramente favorita costumam ser avaliadas em torno de 1,90 a 1,95."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"A feature of Paripesa is the stability of live odds. Even if the result changes quickly, for example a team scores a goal in football or a decisive set occurs in tennis, the odds do not shift sharply. The platform also provides tools to track odds dynamics, helping users analyze events and make informed decisions."}',
             'value_es' => '{"0":"Una característica de Paripesa es la estabilidad de las cuotas en vivo. Incluso si el resultado cambia rápidamente, por ejemplo, si un equipo marca un gol en fútbol o se juega un set decisivo en tenis, las cuotas no se alteran drásticamente. La plataforma también ofrece herramientas para seguir la dinámica de las cuotas, lo que ayuda a analizar los eventos y tomar decisiones fundamentadas."}',
             'value_fr' => '{"0":"Une particularité de Paripesa est la stabilité des cotes en direct. Même si le résultat change rapidement, par exemple lorsqu’une équipe marque un but au football ou qu’un set décisif se joue au tennis, les cotes ne changent pas brusquement. La plateforme dispose également d’outils pour suivre la dynamique des cotes, ce qui aide à analyser les événements et à prendre des décisions éclairées."}',
             'value_pt' => '{"0":"Uma característica da Paripesa é a estabilidade das odds ao vivo. Mesmo se o resultado mudar rapidamente, por exemplo, um time marcar um gol no futebol ou ocorrer um set decisivo no tênis, as odds não mudam de forma brusca. A plataforma também oferece ferramentas para acompanhar a dinâmica das odds, ajudando os usuários a analisar os eventos e tomar decisões informadas."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa allows users to place bets during matches and tournaments in real time. For example, in a football match, you can bet on the next goal, corner, or card immediately after the situation on the field changes."}',
             'value_es' => '{"0":"Paripesa permite a los usuarios realizar apuestas durante los partidos y torneos en tiempo real. Por ejemplo, en un partido de fútbol, puedes apostar al próximo gol, córner o tarjeta inmediatamente después de que la situación en el campo cambie."}',
             'value_fr' => '{"0":"Paripesa permet aux utilisateurs de placer des paris pendant les matchs et les tournois en temps réel. Par exemple, lors d’un match de football, vous pouvez parier sur le prochain but, corner ou carton dès que la situation sur le terrain change."}',
             'value_pt' => '{"0":"A Paripesa permite aos usuários fazer apostas durante partidas e torneios em tempo real. Por exemplo, em um jogo de futebol, você pode apostar no próximo gol, escanteio ou cartão imediatamente após a situação em campo mudar."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Live streams are available for some matches, including top football leagues, tennis tournaments, basketball championships, and esports matches. Although not all events are broadcast, access to video streams is almost always available for the most popular competitions."}',
             'value_es' => '{"0":"Las transmisiones en vivo están disponibles para algunos partidos, incluyendo las principales ligas de fútbol, torneos de tenis, campeonatos de baloncesto y partidos de esports. Aunque no todos los eventos se transmiten, el acceso a los flujos de video está casi siempre disponible para las competiciones más populares."}',
             'value_fr' => '{"0":"Les diffusions en direct sont disponibles pour certains matchs, notamment les principales ligues de football, les tournois de tennis, les championnats de basket-ball et les matchs d’e-sport. Bien que tous les événements ne soient pas diffusés, l’accès aux flux vidéo est presque toujours disponible pour les compétitions les plus populaires."}',
             'value_pt' => '{"0":"Transmissões ao vivo estão disponíveis para alguns jogos, incluindo as principais ligas de futebol, torneios de tênis, campeonatos de basquete e partidas de esports. Embora nem todos os eventos sejam transmitidos, o acesso aos fluxos de vídeo está quase sempre disponível para as competições mais populares."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The live betting interface on Paripesa makes it convenient to add selected events to your bet slip, view statistics on teams or players, and track the dynamics of events. The platform also provides graphical event models that help understand the progress of the match without constantly watching the broadcast."}',
             'value_es' => '{"0":"La interfaz de apuestas en vivo de Paripesa permite agregar cómodamente los eventos seleccionados a tu cupón, consultar estadísticas de equipos o jugadores y evaluar la dinámica de los eventos. La plataforma también ofrece modelos gráficos de los eventos que ayudan a entender el desarrollo del partido sin necesidad de ver constantemente la transmisión."}',
             'value_fr' => '{"0":"L’interface de paris en direct de Paripesa permet d’ajouter facilement les événements sélectionnés au ticket de pari, de consulter les statistiques des équipes ou des joueurs et d’évaluer la dynamique des événements. La plateforme fournit également des modèles graphiques des événements qui aident à comprendre le déroulement du match sans avoir à regarder constamment la diffusion."}',
             'value_pt' => '{"0":"A interface de apostas ao vivo da Paripesa permite adicionar facilmente os eventos selecionados ao seu bilhete de apostas, visualizar estatísticas sobre equipes ou jogadores e acompanhar a dinâmica dos eventos. A plataforma também fornece modelos gráficos dos eventos que ajudam a entender o andamento da partida sem precisar assistir constantemente à transmissão."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa provides users with access to detailed statistics for each event, allowing them to make more informed decisions. The statistics section focuses on information about recent matches of teams, their results in championships, average number of goals, combinations of offensive and defensive play, and other key indicators."}',
             'value_es' => '{"0":"Paripesa ofrece a los usuarios acceso a estadísticas detalladas de cada evento, lo que les permite tomar decisiones más informadas. La sección de estadísticas se centra en información sobre los últimos partidos de los equipos, sus resultados en los campeonatos, el promedio de goles, la combinación de juego ofensivo y defensivo, y otros indicadores clave."}',
             'value_fr' => '{"0":"Paripesa offre aux utilisateurs un accès à des statistiques détaillées pour chaque événement, ce qui leur permet de prendre des décisions plus éclairées. La section statistiques se concentre sur les informations concernant les derniers matchs des équipes, leurs résultats dans les championnats, le nombre moyen de buts, les combinaisons de jeu offensif et défensif, ainsi que d’autres indicateurs clés."}',
             'value_pt' => '{"0":"A Paripesa oferece aos usuários acesso a estatísticas detalhadas para cada evento, permitindo que tomem decisões mais fundamentadas. A seção de estatísticas concentra-se em informações sobre os últimos jogos das equipes, seus resultados nos campeonatos, a média de gols, combinações de jogo ofensivo e defensivo e outros indicadores importantes."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the Statistics section, it is possible to analyze both the overall dynamics of teams or players and detailed indicators for a specific season or tournament. For example, you can compare a team’s average performance in home and away matches."}',
             'value_es' => '{"0":"Gracias a la sección de Estadísticas, es posible analizar tanto la dinámica general de los equipos o jugadores como los indicadores detallados de una temporada o torneo específico. Por ejemplo, se puede comparar el rendimiento promedio de un equipo en partidos de local y de visitante."}',
             'value_fr' => '{"0":"Grâce à la section Statistiques, il est possible d’analyser à la fois la dynamique générale des équipes ou des joueurs et les indicateurs détaillés d’une saison ou d’un tournoi spécifique. Par exemple, il est possible de comparer la performance moyenne d’une équipe lors des matchs à domicile et à l’extérieur."}',
             'value_pt' => '{"0":"Graças à seção de Estatísticas, é possível analisar tanto a dinâmica geral das equipes ou jogadores quanto os indicadores detalhados de uma temporada ou torneio específico. Por exemplo, é possível comparar o desempenho médio de uma equipe em jogos em casa e fora."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa pays significant attention to security and monitoring user activity. The platform provides tools that help players control their spending. For example, users can set deposit limits, restrict the amount of bets, or limit the time spent on the site."}',
             'value_es' => '{"0":"Paripesa presta gran atención a la seguridad y al control de la actividad de los usuarios. La plataforma ofrece herramientas que ayudan a los jugadores a controlar sus gastos. Por ejemplo, los usuarios pueden establecer límites de depósito, restringir el monto de las apuestas o limitar el tiempo de permanencia en el sitio."}',
             'value_fr' => '{"0":"Paripesa accorde une grande importance à la sécurité et au contrôle de l’activité des utilisateurs. La plateforme propose des outils qui aident les joueurs à gérer leurs dépenses. Par exemple, les utilisateurs peuvent définir des limites de dépôt, restreindre le montant des mises ou limiter le temps passé sur le site."}',
             'value_pt' => '{"0":"A Paripesa dá grande atenção à segurança e ao controlo da atividade dos usuários. A plataforma oferece ferramentas que ajudam os jogadores a controlar seus gastos. Por exemplo, os usuários podem definir limites de depósito, restringir o valor das apostas ou limitar o tempo gasto no site."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The platform also offers the possibility of self-exclusion for a certain period. Once self-exclusion is activated, the account is blocked for all transactions and bets, helping players take a break and return to gaming later."}',
             'value_es' => '{"0":"La plataforma también ofrece la posibilidad de autoexclusión por un período determinado. Una vez activada la autoexclusión, la cuenta se bloquea para todas las transacciones y apuestas, lo que ayuda a los jugadores a tomarse un descanso y volver a jugar más tarde."}',
             'value_fr' => '{"0":"La plateforme offre également la possibilité de l’auto-exclusion pour une certaine période. Une fois l’auto-exclusion activée, le compte est bloqué pour toutes les transactions et mises, ce qui permet aux joueurs de faire une pause et de revenir jouer plus tard."}',
             'value_pt' => '{"0":"A plataforma também oferece a possibilidade de autoexclusão por um período determinado. Uma vez ativada a autoexclusão, a conta é bloqueada para todas as transações e apostas, ajudando os jogadores a fazer uma pausa e retornar ao jogo mais tarde."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The Paripesa website offers a wide range of methods for depositing and withdrawing funds, making the platform convenient for players from different countries. Deposits can be made using Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, as well as popular cryptocurrencies."}',
             'value_es' => '{"0":"El sitio web de Paripesa ofrece una amplia variedad de métodos para depositar y retirar fondos, lo que hace que la plataforma sea cómoda para jugadores de diferentes países. Los depósitos se pueden realizar con tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, ecoPayz, así como criptomonedas populares."}',
             'value_fr' => '{"0":"Le site Paripesa propose un large éventail de méthodes pour déposer et retirer des fonds, ce qui rend la plateforme pratique pour les joueurs de différents pays. Les dépôts peuvent être effectués avec des cartes bancaires Visa et Mastercard, des portefeuilles électroniques tels que Skrill, Neteller, ecoPayz, ainsi que des cryptomonnaies populaires."}',
             'value_pt' => '{"0":"O site da Paripesa oferece uma ampla variedade de métodos para depósito e retirada de fundos, tornando a plataforma conveniente para jogadores de diferentes países. Os depósitos podem ser feitos com cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, bem como criptomoedas populares."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To withdraw funds, account verification is required, which includes identity and payment details confirmation. After that, withdrawals are processed quickly: funds arrive in e-wallets within a few hours, on bank cards within 1–3 business days, and cryptocurrencies are usually credited instantly. The platform supports multiple payment methods simultaneously, so users can choose the most convenient option for themselves."}',
             'value_es' => '{"0":"Para retirar fondos, se requiere la verificación de la cuenta, que incluye la confirmación de identidad y los datos de pago. Después de esto, los retiros se procesan rápidamente: los fondos llegan a los monederos electrónicos en unas pocas horas, a las tarjetas bancarias en 1–3 días hábiles y las criptomonedas suelen acreditarse al instante. La plataforma admite varios métodos de pago al mismo tiempo, por lo que los usuarios pueden elegir la opción más conveniente para ellos."}',
             'value_fr' => '{"0":"Pour retirer des fonds, la vérification du compte est requise, incluant la confirmation de l’identité et des informations de paiement. Après cela, les retraits sont traités rapidement : les fonds arrivent dans les portefeuilles électroniques en quelques heures, sur les cartes bancaires en 1 à 3 jours ouvrables, et les cryptomonnaies sont généralement créditées instantanément. La plateforme prend en charge plusieurs méthodes de paiement simultanément, permettant aux utilisateurs de choisir l’option la plus pratique pour eux."}',
             'value_pt' => '{"0":"Para retirar fundos, é necessário verificar a conta, incluindo a confirmação da identidade e dos dados de pagamento. Após isso, os saques são processados rapidamente: os fundos chegam às carteiras eletrônicas em algumas horas, aos cartões bancários em 1–3 dias úteis, e as criptomoedas geralmente são creditadas instantaneamente. A plataforma suporta vários métodos de pagamento simultaneamente, permitindo que os usuários escolham a opção mais conveniente para si."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"You can contact Paripesa support via the website\'s online chat, email, and phone."}',
             'value_es' => '{"0":"Se puede contactar con el soporte de Paripesa a través del chat en línea del sitio web, correo electrónico y teléfono."}',
             'value_fr' => '{"0":"Vous pouvez contacter le support Paripesa via le chat en ligne du site, par e-mail et par téléphone."}',
             'value_pt' => '{"0":"É possível entrar em contato com o suporte da Paripesa através do chat online no site, e-mail e telefone."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 41
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"User-friendly website interface",
                                 "1":"Availability of live betting",
                                 "2":"Wide selection of casino games",
                                 "3":"Many deposit and withdrawal methods",
                                 "4":"24/7 customer support"},
                             "1":
                                {"0":"Not all countries have full site functionality",
                                 "1":"Video streams are not available for all events"}
                             }',
             'value_es' => '{"0":
                                {"0":"Interfaz de sitio web fácil de usar",
                                 "1":"Disponibilidad de apuestas en vivo",
                                 "2":"Gran selección de juegos de casino",
                                 "3":"Muchos métodos de depósito y retiro",
                                 "4":"Atención al cliente las 24 horas"},
                             "1":
                                {"0":"No todos los países tienen funcionalidad completa del sitio",
                                 "1":"Las transmisiones de video no están disponibles para todos los eventos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Interface du site conviviale",
                                 "1":"Disponibilité des paris en direct",
                                 "2":"Large choix de jeux de casino",
                                 "3":"Nombreux moyens de dépôt et de retrait",
                                 "4":"Support client disponible 24h/24"},
                             "1":
                                {"0":"Toutes les fonctionnalités du site ne sont pas disponibles dans tous les pays",
                                 "1":"Les flux vidéo ne sont pas disponibles pour tous les événements"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Interface do site amigável",
                                 "1":"Disponibilidade de apostas ao vivo",
                                 "2":"Grande variedade de jogos de cassino",
                                 "3":"Muitos métodos de depósito e saque",
                                 "4":"Suporte ao cliente 24 horas"},
                             "1":
                                {"0":"Nem todos os países têm funcionalidade completa do site",
                                 "1":"Transmissões de vídeo não estão disponíveis para todos os eventos"}
                             }',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 42
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Paripesa"}',
                'value_fr' => '{"0":"FAQ de Paripesa"}',
                'value_pt' => '{"0":"Perguntas frequentes do Paripesa"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 43
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Does Paripesa have an international license?"}',
             'value_es' => '{"0":"¿Paripesa tiene una licencia internacional?"}',
             'value_fr' => '{"0":"Paripesa possède-t-elle une licence internationale ?"}',
             'value_pt' => '{"0":"A Paripesa possui licença internacional?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 44
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Paripesa operates under a Curaçao license. In some countries, it also holds local licenses."}',
             'value_es' => '{"0":"Sí, Paripesa opera bajo una licencia de Curazao. En algunos países también cuenta con licencias locales."}',
             'value_fr' => '{"0":"Oui, Paripesa fonctionne sous licence de Curaçao. Dans certains pays, elle dispose également de licences locales."}',
             'value_pt' => '{"0":"Sim, a Paripesa opera sob uma licença de Curaçao. Em alguns países, também possui licenças locais."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 45
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are live match streams available?"}',
             'value_es' => '{"0":"¿Están disponibles las transmisiones en vivo de los partidos?"}',
             'value_fr' => '{"0":"Les diffusions en direct des matchs sont-elles disponibles ?"}',
             'value_pt' => '{"0":"As transmissões ao vivo das partidas estão disponíveis?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 46
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Not for all matches, in many cases video streams are not available."}',
             'value_es' => '{"0":"No para todos los partidos, en muchos casos no hay transmisiones de video disponibles."}',
             'value_fr' => '{"0":"Pas pour tous les matchs, dans de nombreux cas les flux vidéo ne sont pas disponibles."}',
             'value_pt' => '{"0":"Não para todos os jogos, em muitos casos as transmissões de vídeo não estão disponíveis."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 47
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 48
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"It depends on the method: e-wallets or local methods take a few hours, while bank cards or international transfers can take 1–2 days."}',
             'value_es' => '{"0":"Depende del método: las billeteras electrónicas o métodos locales tardan unas pocas horas, mientras que las tarjetas bancarias o transferencias internacionales pueden tardar 1-2 días."}',
             'value_fr' => '{"0":"Cela dépend du moyen : les portefeuilles électroniques ou les méthodes locales prennent quelques heures, tandis que les cartes bancaires ou les virements internationaux peuvent prendre 1 à 2 jours."}',
             'value_pt' => '{"0":"Depende do método: carteiras eletrônicas ou métodos locais levam algumas horas, enquanto cartões bancários ou transferências internacionais podem levar 1 a 2 dias."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 49
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are there responsible gaming features?"}',
             'value_es' => '{"0":"¿Existen funciones de juego responsable?"}',
             'value_fr' => '{"0":"Y a-t-il des fonctionnalités de jeu responsable ?"}',
             'value_pt' => '{"0":"Existem funções de jogo responsável?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 50
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, Paripesa provides options for self-exclusion, deposit limits, and time restrictions on play."}',
             'value_es' => '{"0":"Sí, Paripesa ofrece opciones de autoexclusión, límites de depósito y restricciones de tiempo de juego."}',
             'value_fr' => '{"0":"Oui, Paripesa propose des options d’auto-exclusion, des limites de dépôt et des restrictions de temps de jeu."}',
             'value_pt' => '{"0":"Sim, a Paripesa oferece opções de autoexclusão, limites de depósito e restrições de tempo de jogo."}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 51
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if Paripesa is unavailable in my country?"}',
             'value_es' => '{"0":"¿Qué hacer si Paripesa no está disponible en mi país?"}',
             'value_fr' => '{"0":"Que faire si Paripesa n’est pas disponible dans mon pays ?"}',
             'value_pt' => '{"0":"O que fazer se o Paripesa não estiver disponível no meu país?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 52
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"If access is restricted, it may be due to local laws or the absence of a local license. Paripesa provides information about availability in your country during registration."}',
             'value_es' => '{"0":"Si el acceso está limitado, puede ser por la legislación local o la falta de una licencia local. Paripesa ofrece información sobre la disponibilidad en tu país durante el registro."}',
             'value_fr' => '{"0":"Si l’accès est limité, cela peut être dû à la législation locale ou à l’absence de licence locale. Paripesa fournit des informations sur la disponibilité dans votre pays lors de l’inscription."}',
             'value_pt' => '{"0":"Se o acesso estiver restrito, pode ser devido à legislação local ou à ausência de licença local. A Paripesa fornece informações sobre a disponibilidade no seu país durante o registro."}',
             'order' => 52
            ]
        );
    }
}
