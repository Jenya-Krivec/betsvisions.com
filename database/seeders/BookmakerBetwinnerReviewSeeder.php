<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner has been operating in the international online betting market since 2007 and has gained popularity in various countries. On BetWinner, users can place bets on sports, esports, and play in the casino. The number of registered users has already exceeded several million, and new players join the site every day."}',
             'value_es' => '{"0":"BetWinner opera en el mercado internacional de apuestas en línea desde 2007 y ha ganado popularidad en varios países. En BetWinner, los usuarios pueden apostar en deportes, deportes electrónicos y jugar en el casino. El número de usuarios registrados ya supera varios millones, y cada día se unen nuevos jugadores al sitio."}',
             'value_fr' => '{"0":"BetWinner opère sur le marché international des paris en ligne depuis 2007 et a gagné en popularité dans plusieurs pays. Sur BetWinner, les utilisateurs peuvent parier sur le sport, l’esport et jouer au casino. Le nombre d’utilisateurs enregistrés dépasse déjà plusieurs millions, et de nouveaux joueurs rejoignent le site chaque jour."}',
             'value_pt' => '{"0":"O BetWinner opera no mercado internacional de apostas online desde 2007 e conquistou popularidade em vários países. No BetWinner, os usuários podem fazer apostas em esportes, esports e jogar no cassino. O número de usuários registrados já ultrapassa vários milhões, e novos jogadores se juntam ao site todos os dias."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The interface is adapted to modern standards and is available in several dozen languages. The site performs quickly even under heavy load, which is especially important during major sporting events."}',
             'value_es' => '{"0":"La interfaz está adaptada a los estándares modernos y está disponible en varias decenas de idiomas. El sitio funciona rápidamente incluso bajo una carga elevada, lo que es especialmente importante durante grandes eventos deportivos."}',
             'value_fr' => '{"0":"L’interface est adaptée aux standards modernes et est disponible en plusieurs dizaines de langues. Le site fonctionne rapidement même sous une charge importante, ce qui est particulièrement important lors de grands événements sportifs."}',
             'value_pt' => '{"0":"A interface é adaptada aos padrões modernos e está disponível em várias dezenas de idiomas. O site funciona rapidamente mesmo sob alta carga, o que é especialmente importante durante grandes eventos esportivos."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner operates in the international betting market under a Curaçao license, which is one of the most common among international bookmakers. This license allows the company to legally offer gambling services in most countries around the world. The Curaçao license provides a basic legal framework and oversight of the platform’s activities."}',
             'value_es' => '{"0":"BetWinner opera en el mercado internacional de apuestas con una licencia de Curazao, que es una de las más comunes entre las casas de apuestas internacionales. Esta licencia permite a la empresa ofrecer legalmente servicios de juego en la mayoría de los países del mundo. La licencia de Curazao proporciona un marco legal básico y supervisión de las actividades de la plataforma."}',
             'value_fr' => '{"0":"BetWinner opère sur le marché international des paris avec une licence de Curaçao, qui est l’une des plus courantes parmi les bookmakers internationaux. Cette licence permet à l’entreprise d’offrir légalement des services de jeu dans la plupart des pays du monde. La licence de Curaçao fournit un cadre juridique de base et une supervision des activités de la plateforme."}',
             'value_pt' => '{"0":"BetWinner opera no mercado internacional de apostas com uma licença de Curaçao, que é uma das mais comuns entre as casas de apostas internacionais. Esta licença permite que a empresa ofereça serviços de jogo legalmente na maioria dos países do mundo. A licença de Curaçao fornece uma base legal e supervisão das atividades da plataforma."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner uses modern data protection methods, including SSL encryption, which reliably secures personal information and financial transactions. The company regularly updates its security system and implements new algorithms to protect accounts from hacks and suspicious activity. For additional user protection, identity verification mechanisms are applied, helping to prevent the creation of fake accounts and money laundering."}',
             'value_es' => '{"0":"BetWinner utiliza métodos modernos de protección de datos, incluido el cifrado SSL, que asegura de manera confiable la información personal y las transacciones financieras. La empresa actualiza regularmente su sistema de seguridad e implementa nuevos algoritmos para proteger las cuentas de hackeos y actividades sospechosas. Para una mayor protección de los usuarios, se aplican mecanismos de verificación de identidad, ayudando a prevenir la creación de cuentas falsas y el lavado de dinero."}',
             'value_fr' => '{"0":"BetWinner utilise des méthodes modernes de protection des données, y compris le cryptage SSL, qui sécurise de manière fiable les informations personnelles et les transactions financières. L’entreprise met régulièrement à jour son système de sécurité et met en œuvre de nouveaux algorithmes pour protéger les comptes contre le piratage et les activités suspectes. Pour une protection supplémentaire des utilisateurs, des mécanismes de vérification d’identité sont appliqués, aidant à prévenir la création de faux comptes et le blanchiment d’argent."}',
             'value_pt' => '{"0":"BetWinner utiliza métodos modernos de proteção de dados, incluindo criptografia SSL, que protege de forma confiável as informações pessoais e transações financeiras. A empresa atualiza regularmente seu sistema de segurança e implementa novos algoritmos para proteger as contas contra invasões e atividades suspeitas. Para proteção adicional dos usuários, mecanismos de verificação de identidade são aplicados, ajudando a prevenir a criação de contas falsas e a lavagem de dinheiro."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Another important component is the privacy policy that the platform adheres to. It clearly regulates how collected information is used and ensures that client data will not be shared with third parties without legal grounds."}',
             'value_es' => '{"0":"Otro componente importante es la política de privacidad que la plataforma cumple. Regula claramente cómo se utiliza la información recopilada y garantiza que los datos de los clientes no se compartirán con terceros sin bases legales."}',
             'value_fr' => '{"0":"Un autre élément important est la politique de confidentialité respectée par la plateforme. Elle régule clairement la manière dont les informations collectées sont utilisées et garantit que les données des clients ne seront pas transmises à des tiers sans fondement légal."}',
             'value_pt' => '{"0":"Outro componente importante é a política de privacidade que a plataforma segue. Ela regula claramente como as informações coletadas são utilizadas e garante que os dados dos clientes não sejam compartilhados com terceiros sem base legal."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers a huge variety of betting options, which is one of the main reasons the platform is popular among players. In football, you can bet on the match winner, totals, or handicaps, as well as on the number of corners, yellow cards, goal scorers, or even the time periods when goals will be scored."}',
             'value_es' => '{"0":"BetWinner ofrece una gran variedad de opciones de apuestas, lo que es una de las principales razones de la popularidad de la plataforma entre los jugadores. En el fútbol, se puede apostar al ganador del partido, totales o hándicaps, así como al número de saques de esquina, tarjetas amarillas, goleadores o incluso a los periodos de tiempo en los que se marcarán los goles."}',
             'value_fr' => '{"0":"BetWinner propose une grande variété d’options de paris, ce qui est l’une des principales raisons de la popularité de la plateforme auprès des joueurs. Au football, il est possible de parier sur le vainqueur du match, les totaux ou les handicaps, ainsi que sur le nombre de corners, de cartons jaunes, les buteurs ou même les périodes de temps où les buts seront marqués."}',
             'value_pt' => '{"0":"BetWinner oferece uma enorme variedade de opções de apostas, o que é uma das principais razões para a popularidade da plataforma entre os jogadores. No futebol, é possível apostar no vencedor da partida, totais ou handicaps, assim como no número de escanteios, cartões amarelos, artilheiros ou até nos períodos de tempo em que os gols serão marcados."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In tennis matches, besides betting on the match winner, you can place bets on individual set results, the exact score, the number of games, or even individual statistics of specific players. In basketball, the options are even broader: you can bet on the performance of individual players, the number of three-point shots, total fouls, or points per quarter."}',
             'value_es' => '{"0":"En los partidos de tenis, además de apostar al ganador del encuentro, se puede apostar a los resultados de sets individuales, al marcador exacto, al número de juegos o incluso a las estadísticas individuales de los jugadores. En baloncesto, las opciones son aún más amplias: se puede apostar al rendimiento de jugadores específicos, al número de tiros de tres puntos, a las faltas totales o a los puntos por cuarto."}',
             'value_fr' => '{"0":"Dans les matchs de tennis, en plus de parier sur le vainqueur du match, on peut parier sur les résultats des sets individuels, le score exact, le nombre de jeux ou même les statistiques individuelles des joueurs. Au basket-ball, les options sont encore plus larges : il est possible de parier sur la performance des joueurs, le nombre de tirs à trois points, le total des fautes ou les points par quart-temps."}',
             'value_pt' => '{"0":"Nos jogos de tênis, além de apostar no vencedor da partida, é possível apostar nos resultados de sets individuais, no placar exato, no número de games ou até nas estatísticas individuais de jogadores específicos. No basquete, as opções são ainda mais amplas: é possível apostar no desempenho de jogadores específicos, no número de cestas de três pontos, no total de faltas ou nos pontos por quarto."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It is also possible to bet on popular esports such as CS:GO, Dota 2, League of Legends, or Valorant. For example, you can wager on the map winner, first blood, or the duration of the match."}',
             'value_es' => '{"0":"También se puede apostar en deportes electrónicos populares como CS:GO, Dota 2, League of Legends o Valorant. Por ejemplo, se puede apostar al ganador del mapa, la primera sangre o la duración del partido."}',
             'value_fr' => '{"0":"Il est également possible de parier sur des esports populaires comme CS:GO, Dota 2, League of Legends ou Valorant. Par exemple, on peut parier sur le gagnant de la carte, le premier sang ou la durée du match."}',
             'value_pt' => '{"0":"Também é possível apostar em esports populares como CS:GO, Dota 2, League of Legends ou Valorant. Por exemplo, pode-se apostar no vencedor do mapa, no first blood ou na duração da partida."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At BetWinner, users can place bets on a wide range of sports, from popular ones like football, basketball, tennis, and hockey to less common disciplines such as snooker or cricket. Available events include not only top tournaments and championships but also regional competitions. In addition to traditional sports, the lineup features esports tournaments, where you can bet on matches in CS:GO, Dota 2, League of Legends, and other popular games."}',
             'value_es' => '{"0":"En BetWinner, los usuarios pueden apostar en una amplia gama de deportes, desde los más populares como el fútbol, baloncesto, tenis y hockey, hasta disciplinas menos comunes como el snooker o el cricket. Los eventos disponibles incluyen no solo los principales torneos y campeonatos, sino también competiciones regionales. Además de los deportes tradicionales, la oferta incluye torneos de esports, donde se puede apostar en partidos de CS:GO, Dota 2, League of Legends y otros juegos populares."}',
             'value_fr' => '{"0":"Chez BetWinner, les utilisateurs peuvent parier sur un large éventail de sports, des plus populaires comme le football, le basket-ball, le tennis et le hockey, aux disciplines moins courantes telles que le snooker ou le cricket. Les événements disponibles incluent non seulement les principaux tournois et championnats, mais aussi les compétitions régionales. En plus des sports traditionnels, la plateforme propose des tournois d’esports, où il est possible de parier sur des matchs de CS:GO, Dota 2, League of Legends et d’autres jeux populaires."}',
             'value_pt' => '{"0":"Na BetWinner, os usuários podem apostar em uma ampla variedade de esportes, desde os mais populares, como futebol, basquete, tênis e hóquei, até disciplinas menos comuns, como snooker ou críquete. Os eventos disponíveis incluem não apenas os principais torneios e campeonatos, mas também competições regionais. Além dos esportes tradicionais, a linha oferece torneios de esports, onde é possível apostar em partidas de CS:GO, Dota 2, League of Legends e outros jogos populares."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At BetWinner, there are bets that combine several events in a single slip. For example, in football, you can predict the match winner while simultaneously forecasting the number of goals, and in basketball, you can bet on the team’s result in the first half and the final total."}',
             'value_es' => '{"0":"En BetWinner, hay apuestas que combinan varios eventos en un solo cupón. Por ejemplo, en fútbol se puede predecir el ganador del partido y al mismo tiempo pronosticar el número de goles, y en baloncesto se puede apostar al resultado del equipo en la primera mitad y al total final."}',
             'value_fr' => '{"0":"Chez BetWinner, il existe des paris qui combinent plusieurs événements dans un même coupon. Par exemple, au football, vous pouvez prédire le vainqueur du match tout en prévoyant simultanément le nombre de buts, et au basket-ball, parier sur le résultat de l’équipe à la mi-temps et le total final."}',
             'value_pt' => '{"0":"Na BetWinner, estão disponíveis apostas que combinam vários eventos em um único bilhete. Por exemplo, no futebol, você pode prever o vencedor da partida e, ao mesmo tempo, estimar o número de gols, e no basquete, apostar no resultado da equipe no primeiro tempo e no total final."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The casino section at BetWinner offers a wide selection of games. Here, you can find thousands of slots from leading providers such as Microgaming, NetEnt, Play’n GO, and others. Both classic three-reel slots and modern video slots are available. In addition to slots, table games are also offered, including roulette, blackjack, baccarat, and various poker variants."}',
             'value_es' => '{"0":"La sección de casino en BetWinner ofrece una amplia variedad de juegos. Aquí se pueden encontrar miles de tragamonedas de los principales proveedores como Microgaming, NetEnt, Play’n GO y otros. Se ofrecen tanto tragamonedas clásicas de tres rodillos como modernas tragamonedas de video. Además de las tragamonedas, también hay juegos de mesa: ruleta, blackjack, baccarat y varias modalidades de póker."}',
             'value_fr' => '{"0":"La section casino de BetWinner propose un large choix de jeux. Vous y trouverez des milliers de machines à sous des principaux fournisseurs tels que Microgaming, NetEnt, Play’n GO et d’autres. Des machines à sous classiques à trois rouleaux ainsi que des machines à sous vidéo modernes sont disponibles. En plus des machines à sous, des jeux de table sont également proposés : roulette, blackjack, baccarat et différentes variantes de poker."}',
             'value_pt' => '{"0":"A seção de cassino na BetWinner oferece uma ampla variedade de jogos. Aqui, você pode encontrar milhares de slots dos principais provedores, como Microgaming, NetEnt, Play’n GO e outros. Estão disponíveis tanto slots clássicos de três cilindros quanto slots de vídeo modernos. Além dos slots, também estão disponíveis jogos de mesa: roleta, blackjack, bacará e várias modalidades de pôquer."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The live casino section deserves special attention, where you can play poker, roulette, blackjack, and baccarat. Here, you play with real dealers in a live broadcast, creating the atmosphere of a real casino. Players have the opportunity to interact with the dealers and other participants while observing the progress of the game."}',
             'value_es' => '{"0":"La sección de casino en vivo merece especial atención, donde se puede jugar al póker, la ruleta, el blackjack y el baccarat. Aquí se juega con crupieres reales en transmisión en vivo, lo que crea la atmósfera de un casino auténtico. Los jugadores tienen la oportunidad de interactuar con los crupieres y otros participantes y de seguir el desarrollo del juego."}',
             'value_fr' => '{"0":"La section casino en direct mérite une attention particulière, où vous pouvez jouer au poker, à la roulette, au blackjack et au baccarat. Vous jouez avec de vrais croupiers en direct, ce qui crée l’atmosphère d’un vrai casino. Les joueurs ont la possibilité d’interagir avec les croupiers et les autres participants et de suivre le déroulement du jeu."}',
             'value_pt' => '{"0":"A seção de cassino ao vivo merece atenção especial, onde é possível jogar pôquer, roleta, blackjack e bacará. Aqui, você joga com dealers reais em transmissão ao vivo, criando a atmosfera de um cassino de verdade. Os jogadores têm a oportunidade de interagir com os dealers e outros participantes, além de acompanhar o andamento do jogo."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that BetWinner provides players with convenient tools for managing their gaming experience. You can track your betting history, monitor deposits, and use bonuses during gameplay."}',
             'value_es' => '{"0":"Cabe destacar que BetWinner proporciona a los jugadores herramientas convenientes para gestionar su experiencia de juego. Se puede realizar un seguimiento del historial de apuestas, controlar los depósitos y utilizar los bonos durante la partida."}',
             'value_fr' => '{"0":"Il convient de noter que BetWinner offre aux joueurs des outils pratiques pour gérer leur expérience de jeu. Il est possible de suivre l’historique des paris, de contrôler les dépôts et d’utiliser les bonus pendant le jeu."}',
             'value_pt' => '{"0":"Vale destacar que a BetWinner oferece aos jogadores ferramentas práticas para gerenciar sua experiência de jogo. É possível acompanhar o histórico de apostas, controlar depósitos e utilizar bônus durante o jogo."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Odds play an important role in determining potential winnings, as they directly affect how much you can earn from a correct prediction. For popular events, such as matches in top football leagues or international tennis tournaments, the bookmaker often offers figures that exceed the average level. For example, in a Champions League match, the odds for the favorite might be 1.95, while a less likely outcome could have odds of 3.50."}',
             'value_es' => '{"0":"Las cuotas juegan un papel importante en la determinación de las ganancias potenciales, ya que dependen directamente de cuánto se puede obtener por una predicción correcta. Para eventos populares, como partidos de las principales ligas de fútbol o torneos internacionales de tenis, el operador suele ofrecer cifras que superan el nivel medio. Por ejemplo, en un partido de la Liga de Campeones, la cuota para el favorito podría ser 1.95, mientras que para un resultado menos probable, podría ser 3.50."}',
             'value_fr' => '{"0":"Les cotes jouent un rôle important dans la détermination des gains potentiels, car elles déterminent combien vous pouvez gagner avec un pronostic correct. Pour les événements populaires, tels que les matchs des principales ligues de football ou les tournois internationaux de tennis, le bookmaker propose souvent des cotes supérieures à la moyenne. Par exemple, lors d’un match de Ligue des champions, la cote pour le favori peut être de 1,95, tandis qu’un résultat moins probable peut avoir une cote de 3,50."}',
             'value_pt' => '{"0":"As odds desempenham um papel importante na determinação dos ganhos potenciais, pois é delas que depende quanto se pode receber por uma previsão correta. Para eventos populares, como partidas das principais ligas de futebol ou torneios internacionais de tênis, o site de apostas frequentemente oferece valores que superam a média. Por exemplo, em um jogo da Liga dos Campeões, a odd para o favorito pode ser 1,95, enquanto um resultado menos provável pode ter odd de 3,50."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is also worth noting. In an English Premier League match during the second half, the odds for a goal could be 2.30, while for the number of corners, they might be 1.80."}',
             'value_es' => '{"0":"También merece atención las apuestas en vivo. En un partido de la Premier League inglesa durante la segunda mitad, la cuota para un gol podría ser 2.30, y para el número de córners, 1.80."}',
             'value_fr' => '{"0":"Il convient également de prêter attention aux paris en direct. Lors d’un match de Premier League anglaise pendant la seconde mi-temps, la cote pour un but peut être de 2,30, et pour le nombre de corners, de 1,80."}',
             'value_pt' => '{"0":"Também vale a pena prestar atenção às apostas ao vivo. Em uma partida da Premier League inglesa durante o segundo tempo, a odd para um gol pode ser 2,30, e para o número de escanteios, 1,80."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner also offers special markets with boosted odds on specific events, making bets even more attractive. For example, in less popular championships or regional tournaments, the odds can be noticeably higher than those of other bookmakers."}',
             'value_es' => '{"0":"BetWinner también ofrece mercados especiales con cuotas aumentadas en eventos específicos, lo que hace que las apuestas sean aún más atractivas. Por ejemplo, en campeonatos menos populares o torneos regionales, las cuotas pueden ser notablemente más altas que las de otros operadores."}',
             'value_fr' => '{"0":"BetWinner propose également des marchés spéciaux avec des cotes augmentées sur certains événements, rendant les paris encore plus attractifs. Par exemple, pour des championnats moins populaires ou des tournois régionaux, les cotes peuvent être nettement plus élevées que celles des autres bookmakers."}',
             'value_pt' => '{"0":"A BetWinner também oferece mercados especiais com odds aumentadas em eventos específicos, tornando as apostas ainda mais atraentes. Por exemplo, em campeonatos menos populares ou torneios regionais, as odds podem ser significativamente mais altas do que as de outros sites de apostas."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"At BetWinner, you can watch matches live and place bets at the same time, allowing you to react quickly to events during the game. For example, during a football match, you can follow the game’s progress, track goals, corners, cards, and place bets immediately. Live betting is also available for tennis, basketball, hockey, and other sports."}',
             'value_es' => '{"0":"En BetWinner, puedes ver los partidos en vivo y realizar apuestas al mismo tiempo, lo que permite reaccionar rápidamente a los acontecimientos del juego. Por ejemplo, durante un partido de fútbol, puedes seguir el desarrollo del juego, registrar goles, córners, tarjetas y realizar apuestas de inmediato. También se pueden hacer apuestas en vivo en tenis, baloncesto, hockey y otros deportes."}',
             'value_fr' => '{"0":"Chez BetWinner, vous pouvez regarder les matchs en direct et parier en même temps, ce qui vous permet de réagir rapidement aux événements du jeu. Par exemple, lors d’un match de football, vous pouvez suivre le déroulement du match, suivre les buts, les corners, les cartons et placer vos paris immédiatement. Les paris en direct sont également disponibles pour le tennis, le basket-ball, le hockey et d’autres disciplines."}',
             'value_pt' => '{"0":"Na BetWinner, você pode assistir aos jogos ao vivo e fazer apostas ao mesmo tempo, permitindo reagir rapidamente aos acontecimentos da partida. Por exemplo, durante uma partida de futebol, você pode acompanhar o andamento do jogo, registrar gols, escanteios, cartões e fazer apostas imediatamente. Apostas ao vivo também estão disponíveis para tênis, basquete, hóquei e outras modalidades."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To make live predictions easier, graphical match centers are available, showing visual schemes of attacks, dangerous moments, ball possession, and other key statistics."}',
             'value_es' => '{"0":"Para facilitar las predicciones en modo en vivo, están disponibles centros de partidos gráficos que muestran esquemas visuales de ataques, momentos peligrosos, posesión del balón y otros indicadores estadísticos clave."}',
             'value_fr' => '{"0":"Pour faciliter les prévisions en mode live, des centres de match graphiques sont disponibles, montrant des schémas visuels des attaques, des moments dangereux, la possession du ballon et d’autres statistiques clés."}',
             'value_pt' => '{"0":"Para facilitar as previsões em modo ao vivo, estão disponíveis centros de partidas gráficos, que mostram esquemas visuais de ataques, momentos perigosos, posse de bola e outros indicadores estatísticos importantes."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Live broadcasts are available for top leagues and international tournaments as well as for less popular championships. To access the streams, you only need an active account and a minimal balance in your account."}',
             'value_es' => '{"0":"Las transmisiones en vivo están disponibles tanto para las principales ligas y torneos internacionales como para campeonatos menos populares. Para acceder a las transmisiones, solo se necesita tener una cuenta activa y un saldo mínimo en la cuenta."}',
             'value_fr' => '{"0":"Les diffusions en direct sont disponibles pour les principales ligues et tournois internationaux ainsi que pour les championnats moins populaires. Pour accéder aux diffusions, il suffit d’avoir un compte actif et un solde minimal sur votre compte."}',
             'value_pt' => '{"0":"As transmissões ao vivo estão disponíveis tanto para as principais ligas e torneios internacionais quanto para campeonatos menos populares. Para acessar as transmissões, basta ter uma conta ativa e um saldo mínimo na conta."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers a statistics section that helps make more informed predictions and analyze past matches. For each sporting event, you can review previous encounters between teams, player form, average goals scored and conceded, as well as other key indicators."}',
             'value_es' => '{"0":"BetWinner ofrece una sección de estadísticas que ayuda a realizar predicciones más fundamentadas y analizar partidos pasados. Para cada competición deportiva, se pueden consultar los encuentros anteriores entre los equipos, la forma de los jugadores, el promedio de goles marcados y encajados, así como otros indicadores clave."}',
             'value_fr' => '{"0":"BetWinner propose une section statistiques qui permet de faire des pronostics plus éclairés et d’analyser les matchs passés. Pour chaque compétition sportive, vous pouvez consulter les rencontres précédentes des équipes, la forme des joueurs, le nombre moyen de buts marqués et encaissés, ainsi que d’autres indicateurs clés."}',
             'value_pt' => '{"0":"A BetWinner oferece uma seção de estatísticas que ajuda a fazer previsões mais fundamentadas e a analisar partidas anteriores. Para cada competição esportiva, é possível consultar os confrontos anteriores entre as equipes, a forma dos jogadores, a média de gols marcados e sofridos, bem como outros indicadores-chave."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For tennis matches, information is provided on first serve win percentages, number of double faults, and overall player performance. In basketball, you can check the team’s and individual players’ average scoring, shooting accuracy, number of steals, and rebounds."}',
             'value_es' => '{"0":"Para los partidos de tenis, se proporciona información sobre el porcentaje de primeros servicios ganados, la cantidad de dobles faltas y el rendimiento general de los jugadores. En baloncesto, se puede revisar el promedio de anotación del equipo y de los jugadores individuales, la precisión de los lanzamientos, el número de robos y rebotes."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, des informations sont fournies sur le pourcentage de premiers services gagnés, le nombre de doubles fautes et la performance globale des joueurs. En basket-ball, il est possible de vérifier la performance moyenne de l’équipe et des joueurs individuels, la précision des tirs, le nombre d’interceptions et de rebonds."}',
             'value_pt' => '{"0":"Para partidas de tênis, são fornecidas informações sobre a porcentagem de acertos do primeiro saque, número de duplas faltas e desempenho geral dos jogadores. No basquete, é possível verificar a média de pontuação da equipe e dos jogadores individuais, a precisão dos arremessos, o número de roubos de bola e rebotes."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner supports the principles of responsible gaming. Users can set limits on deposits and time spent on the platform. This allows you to control your spending and reduce the risk of gambling addiction."}',
             'value_es' => '{"0":"BetWinner respalda los principios de juego responsable. Los usuarios pueden establecer límites en los depósitos y en el tiempo de permanencia en la plataforma. Esto permite controlar los gastos y reducir el riesgo de adicción al juego."}',
             'value_fr' => '{"0":"BetWinner soutient les principes du jeu responsable. Les utilisateurs peuvent fixer des limites sur les dépôts et le temps passé sur la plateforme. Cela permet de contrôler les dépenses et de réduire le risque de dépendance au jeu."}',
             'value_pt' => '{"0":"A BetWinner apoia os princípios do jogo responsável. Os usuários podem definir limites para depósitos e tempo de permanência na plataforma. Isso permite controlar os gastos e reduzir o risco de dependência de jogos de azar."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, it is possible to voluntarily restrict access to your account for a certain period. In this way, the company demonstrates a serious commitment to protecting its clients and adheres to international standards in responsible gaming."}',
             'value_es' => '{"0":"Además, es posible restringir voluntariamente el acceso a la cuenta por un período determinado. De esta manera, la empresa demuestra un compromiso serio con la protección de sus clientes y cumple con los estándares internacionales en materia de juego responsable."}',
             'value_fr' => '{"0":"De plus, il est possible de restreindre volontairement l’accès à son compte pendant une certaine période. Ainsi, l’entreprise montre son engagement sérieux envers la protection de ses clients et respecte les normes internationales en matière de jeu responsable."}',
             'value_pt' => '{"0":"Além disso, é possível restringir voluntariamente o acesso à conta por um período determinado. Dessa forma, a empresa demonstra um compromisso sério com a proteção de seus clientes e cumpre os padrões internacionais em termos de jogo responsável."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner offers a wide range of deposit and withdrawal methods. Traditional bank cards, including Visa and MasterCard, can be used. Additionally, the platform supports e-wallets such as Skrill, Neteller, ecoPayz, and many others."}',
             'value_es' => '{"0":"BetWinner ofrece una gran variedad de métodos para depositar y retirar fondos. Se pueden utilizar tarjetas bancarias tradicionales, incluidas Visa y MasterCard. Además, la plataforma admite monederos electrónicos como Skrill, Neteller, ecoPayz y muchos más."}',
             'value_fr' => '{"0":"BetWinner propose un large choix de méthodes de dépôt et de retrait. Les cartes bancaires traditionnelles, y compris Visa et MasterCard, peuvent être utilisées. De plus, la plateforme prend en charge les portefeuilles électroniques tels que Skrill, Neteller, ecoPayz et bien d’autres."}',
             'value_pt' => '{"0":"A BetWinner oferece uma grande variedade de métodos para depósito e saque. Cartões bancários tradicionais, incluindo Visa e MasterCard, podem ser utilizados. Além disso, a plataforma suporta carteiras eletrônicas como Skrill, Neteller, ecoPayz e muitas outras."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 38
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For those who prefer cryptocurrencies, Bitcoin, Ethereum, Litecoin, Dogecoin, and over twenty other digital currencies are available. Payments via cryptocurrency are generally processed faster than traditional banking methods."}',
             'value_es' => '{"0":"Para quienes prefieren criptomonedas, están disponibles Bitcoin, Ethereum, Litecoin, Dogecoin y más de veinte monedas digitales. Los pagos con criptomonedas generalmente se procesan más rápido que los métodos bancarios tradicionales."}',
             'value_fr' => '{"0":"Pour ceux qui préfèrent les crypto-monnaies, Bitcoin, Ethereum, Litecoin, Dogecoin et plus de vingt autres devises numériques sont disponibles. Les paiements en crypto-monnaies sont généralement traités plus rapidement que les méthodes bancaires traditionnelles."}',
             'value_pt' => '{"0":"Para quem prefere criptomoedas, estão disponíveis Bitcoin, Ethereum, Litecoin, Dogecoin e mais de vinte outras moedas digitais. Os pagamentos com criptomoedas geralmente são processados mais rapidamente do que os métodos bancários tradicionais."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 39
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are credited almost instantly, while withdrawals take from a few minutes up to a day, depending on the chosen method and amount. The platform does not charge its own fees for transactions. Furthermore, both the app and the website allow users to track the history of all financial operations. Below we have compiled some additional information about the bookmaker."}',
             'value_es' => '{"0":"Los depósitos se acreditan casi de manera instantánea, mientras que los retiros tardan desde unos minutos hasta un día, según el método y la cantidad elegidos. La plataforma no cobra comisiones adicionales por las transacciones. Además, tanto en la aplicación como en el sitio web, los usuarios pueden consultar el historial de todas las operaciones financieras. A continuación, hemos recopilado alguna información sobre el operador."}',
             'value_fr' => '{"0":"Les dépôts sont crédités presque instantanément, tandis que les retraits prennent de quelques minutes à une journée, selon la méthode et le montant choisis. La plateforme ne prélève pas de frais supplémentaires pour les transactions. De plus, l’application et le site permettent de suivre l’historique de toutes les opérations financières. Ci-dessous, nous avons rassemblé certaines informations sur le bookmaker."}',
             'value_pt' => '{"0":"Os depósitos são creditados quase instantaneamente, enquanto os saques podem levar de alguns minutos até um dia, dependendo do método e do valor escolhido. A plataforma não cobra taxas próprias pelas transações. Além disso, tanto o aplicativo quanto o site permitem acompanhar o histórico de todas as operações financeiras. Abaixo, reunimos algumas informações sobre o site de apostas."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 40
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 41
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 42
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 43
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Customer support is available 24/7. Several options are provided, including online chat on the website, email, and phone. Support is also accessible through social media platforms such as Facebook, Twitter, Instagram, and Telegram."}',
             'value_es' => '{"0":"El servicio de atención al cliente está disponible las 24 horas, los 7 días de la semana. Se ofrecen varias opciones, incluyendo chat en línea en el sitio web, correo electrónico y teléfono. También se puede contactar a través de redes sociales como Facebook, Twitter, Instagram y Telegram."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7. Plusieurs options sont proposées, y compris le chat en ligne sur le site, l’e-mail et le téléphone. Il est également possible de contacter le support via les réseaux sociaux tels que Facebook, Twitter, Instagram et Telegram."}',
             'value_pt' => '{"0":"O suporte ao cliente está disponível 24 horas por dia, 7 dias por semana. Estão disponíveis várias opções, incluindo chat online no site, e-mail e telefone. Também é possível entrar em contato por meio das redes sociais Facebook, Twitter, Instagram e Telegram."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 44
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 45
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide betting range",
                                 "1":"High odds",
                                 "2":"Over a hundred deposit and withdrawal methods",
                                 "3":"Live streaming",
                                 "4":"Convenient mobile app"},
                             "1":
                                {"0":"Interface cluttered with unnecessary elements"}
                             }',
             'value_es' => '{"0":
                                {"0":"Amplia variedad de apuestas",
                                 "1":"Altas cuotas",
                                 "2":"Más de cien métodos de depósito y retiro",
                                 "3":"Transmisiones en vivo",
                                 "4":"Aplicación móvil conveniente"},
                             "1":
                                {"0":"Interfaz sobrecargada con elementos innecesarios"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large gamme de paris",
                                 "1":"Cotes élevées",
                                 "2":"Plus de cent méthodes de dépôt et de retrait",
                                 "3":"Diffusions en direct",
                                 "4":"Application mobile pratique"},
                             "1":
                                {"0":"Interface surchargée avec des éléments inutiles"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Ampla variedade de apostas",
                                 "1":"Odds altas",
                                 "2":"Mais de cem métodos de depósito e saque",
                                 "3":"Transmissões ao vivo",
                                 "4":"Aplicativo móvel conveniente"},
                             "1":
                                {"0":"Interface sobrecarregada com elementos desnecessários"}
                             }',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 46
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 47
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"What documents are required for verification?"}',
             'value_es' => '{"0":"¿Qué documentos se requieren para la verificación?"}',
             'value_fr' => '{"0":"Quels documents sont nécessaires pour la vérification ?"}',
             'value_pt' => '{"0":"Quais documentos são necessários para a verificação?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 48
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To confirm your identity, a passport or driver’s license is usually requested."}',
             'value_es' => '{"0":"Para confirmar la identidad, normalmente se solicita un pasaporte o una licencia de conducir."}',
             'value_fr' => '{"0":"Pour confirmer votre identité, un passeport ou un permis de conduire est généralement demandé."}',
             'value_pt' => '{"0":"Para confirmar a identidade, normalmente é solicitado um passaporte ou carteira de motorista."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 49
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación?"}',
             'value_fr' => '{"0":"Combien de temps dure la vérification ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 50
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, document verification takes from a few hours up to one business day."}',
             'value_es' => '{"0":"En la mayoría de los casos, la verificación de documentos demora desde unas pocas horas hasta un día hábil."}',
             'value_fr' => '{"0":"Dans la plupart des cas, la vérification des documents prend de quelques heures à un jour ouvrable."}',
             'value_pt' => '{"0":"Na maioria dos casos, a verificação de documentos leva de algumas horas até um dia útil."}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 51
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can I play from a mobile phone?"}',
             'value_es' => '{"0":"¿Se puede jugar desde un teléfono móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer depuis un téléphone mobile ?"}',
             'value_pt' => '{"0":"É possível jogar a partir de um celular?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 52
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, mobile apps are available for Android and iOS, as well as a mobile version of the website."}',
             'value_es' => '{"0":"Sí, hay aplicaciones móviles disponibles para Android e iOS, así como una versión móvil del sitio web."}',
             'value_fr' => '{"0":"Oui, des applications mobiles sont disponibles pour Android et iOS, ainsi qu’une version mobile du site web."}',
             'value_pt' => '{"0":"Sim, aplicativos móveis estão disponíveis para Android e iOS, bem como uma versão móvel do site."}',
             'order' => 52
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 53
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can I change my account currency after registration?"}',
             'value_es' => '{"0":"¿Se puede cambiar la moneda de la cuenta después del registro?"}',
             'value_fr' => '{"0":"Peut-on changer la devise du compte après l’inscription ?"}',
             'value_pt' => '{"0":"É possível alterar a moeda da conta após o registro?"}',
             'order' => 53
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 54
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"No, it is not possible to change the currency after creating your profile, so you should choose the desired currency during registration."}',
             'value_es' => '{"0":"No, no es posible cambiar la moneda después de crear el perfil, por lo que se debe elegir la moneda deseada al registrarse."}',
             'value_fr' => '{"0":"Non, il n’est pas possible de changer la devise après la création du profil, il est donc conseillé de choisir la devise souhaitée lors de l’inscription."}',
             'value_pt' => '{"0":"Não, não é possível alterar a moeda após criar o perfil, por isso é importante escolher a moeda desejada durante o registro."}',
             'order' => 54
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 55
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How long does a withdrawal take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda un retiro?"}',
             'value_fr' => '{"0":"Combien de temps prend un retrait ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para realizar um saque?"}',
             'order' => 55
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 56
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Depending on the chosen method, withdrawals can take from a few minutes up to one day."}',
             'value_es' => '{"0":"Dependiendo del método elegido, los retiros pueden tardar desde unos minutos hasta un día."}',
             'value_fr' => '{"0":"Selon la méthode choisie, les retraits peuvent prendre de quelques minutes à une journée."}',
             'value_pt' => '{"0":"Dependendo do método escolhido, os saques podem levar de alguns minutos até um dia."}',
             'order' => 56
            ]
        );
    }
}
