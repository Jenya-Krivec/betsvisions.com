<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet has been operating since 2012 in many countries around the world. The bookmaker is registered in Cyprus and holds a Curaçao license. On the website, users can place sports bets and play casino games. Unlike many other bookmakers, MelBet focuses not only on popular sports such as football or tennis but also on niche disciplines, including esports, political events, and even lotteries."}',
             'value_es' => '{"0":"MelBet opera desde 2012 en muchos países del mundo. La casa de apuestas está registrada en Chipre y cuenta con una licencia de Curazao. En el sitio web, los usuarios pueden realizar apuestas deportivas y jugar en el casino. A diferencia de muchos otros bookmakers, MelBet se centra no solo en deportes populares como el fútbol o el tenis, sino también en disciplinas de nicho, incluyendo los esports, eventos políticos e incluso loterías."}',
             'value_fr' => '{"0":"MelBet est actif depuis 2012 dans de nombreux pays à travers le monde. Le bookmaker est enregistré à Chypre et possède une licence de Curaçao. Sur le site, les utilisateurs peuvent placer des paris sportifs et jouer au casino. Contrairement à de nombreux autres bookmakers, MelBet ne se concentre pas uniquement sur les sports populaires tels que le football ou le tennis, mais aussi sur des disciplines de niche, y compris les sports électroniques, les événements politiques et même les loteries."}',
             'value_pt' => '{"0":"A MelBet opera desde 2012 em muitos países ao redor do mundo. A casa de apostas é registrada em Chipre e possui licença de Curaçao. No site, os usuários podem fazer apostas esportivas e jogar no cassino. Diferente de muitas outras casas de apostas, a MelBet foca não apenas em esportes populares como futebol ou tênis, mas também em disciplinas de nicho, incluindo esports, eventos políticos e até loterias."}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Users can place bets not only from a computer but also through mobile apps for Android and iOS. The apps are optimized for fast performance even with an unstable internet connection, which is especially convenient for live betting. MelBet also allows accounts in more than twenty currencies, including euros, US dollars, and various cryptocurrencies, which significantly simplifies working with deposits and withdrawals."}',
             'value_es' => '{"0":"Los usuarios pueden realizar apuestas no solo desde una computadora, sino también a través de aplicaciones móviles para Android e iOS. Las aplicaciones están optimizadas para funcionar rápidamente incluso con una conexión a internet inestable, lo que resulta especialmente conveniente para las apuestas en vivo. MelBet también permite abrir cuentas en más de veinte monedas, incluyendo euros, dólares estadounidenses y varias criptomonedas, lo que facilita significativamente el trabajo con depósitos y retiros."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent placer des paris non seulement depuis un ordinateur, mais également via des applications mobiles pour Android et iOS. Les applications sont optimisées pour fonctionner rapidement même avec une connexion Internet instable, ce qui est particulièrement pratique pour les paris en direct. MelBet permet également d’ouvrir des comptes dans plus de vingt devises, y compris l’euro, le dollar américain et plusieurs cryptomonnaies, ce qui simplifie considérablement la gestion des dépôts et des retraits."}',
             'value_pt' => '{"0":"Os usuários podem fazer apostas não apenas pelo computador, mas também através de aplicativos móveis para Android e iOS. Os aplicativos são otimizados para desempenho rápido mesmo com conexão de internet instável, o que é especialmente conveniente para apostas ao vivo. A MelBet também permite abrir contas em mais de vinte moedas, incluindo euros, dólares americanos e várias criptomoedas, o que simplifica significativamente o trabalho com depósitos e saques."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"As mentioned above, MelBet operates under an international Curaçao license, which allows the company to provide services to players in various countries around the world. This is an important confirmation of the bookmaker’s legality and transparency, as having a license demonstrates compliance with international standards in the gambling industry."}',
             'value_es' => '{"0":"Como se mencionó anteriormente, MelBet opera bajo una licencia internacional de Curazao, lo que permite a la empresa ofrecer servicios a jugadores en diversos países del mundo. Esto es una confirmación importante de la legalidad y transparencia de la casa de apuestas, ya que contar con una licencia demuestra el cumplimiento de los estándares internacionales en la industria del juego."}',
             'value_fr' => '{"0":"Comme mentionné précédemment, MelBet fonctionne sous une licence internationale de Curaçao, ce qui permet à l’entreprise de fournir des services aux joueurs dans divers pays du monde. Il s’agit d’une confirmation importante de la légalité et de la transparence du bookmaker, car la possession d’une licence démontre le respect des normes internationales dans l’industrie des jeux d’argent."}',
             'value_pt' => '{"0":"Como mencionado acima, a MelBet opera com uma licença internacional de Curaçao, o que permite à empresa oferecer serviços a jogadores em diversos países do mundo. Isso é uma confirmação importante da legalidade e transparência da casa de apostas, já que possuir uma licença demonstra conformidade com os padrões internacionais na indústria de jogos de azar."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet uses modern SSL data encryption protocols that guarantee the protection of all personal information and financial transactions. Account details, bank cards, and any other confidential information cannot be intercepted by third parties. In addition, two-factor authentication can be enabled to provide an additional layer of security for players."}',
             'value_es' => '{"0":"MelBet utiliza protocolos modernos de cifrado de datos SSL que garantizan la protección de toda la información personal y las transacciones financieras. Los datos de la cuenta, las tarjetas bancarias y cualquier otra información confidencial no pueden ser interceptados por terceros. Además, se puede activar la autenticación de dos factores para proporcionar un nivel adicional de seguridad a los jugadores."}',
             'value_fr' => '{"0":"MelBet utilise des protocoles de cryptage des données SSL modernes qui garantissent la protection de toutes les informations personnelles et des transactions financières. Les informations de compte, les cartes bancaires et toutes autres données confidentielles ne peuvent pas être interceptées par des tiers. De plus, l’authentification à deux facteurs peut être activée pour offrir un niveau supplémentaire de sécurité aux joueurs."}',
             'value_pt' => '{"0":"A MelBet utiliza protocolos modernos de criptografia de dados SSL que garantem a proteção de todas as informações pessoais e transações financeiras. Dados da conta, cartões bancários e quaisquer outras informações confidenciais não podem ser interceptados por terceiros. Além disso, é possível ativar a autenticação de dois fatores, que oferece uma camada adicional de segurança para os jogadores."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers a large number of betting options for almost any sports tournament. You can bet not only on football or basketball matches but also on more specific disciplines that are often overlooked by other bookmakers. Thousands of matches are available daily on the site, and for each, the bookmaker provides a detailed line where you can choose between classic markets such as match result, total, or handicap, as well as more unusual options. For example, you can bet on the number of yellow cards in a football match, statistics during a hockey game, or even individual player performance in basketball."}',
             'value_es' => '{"0":"MelBet ofrece una gran cantidad de opciones de apuesta para casi cualquier torneo deportivo. No solo se puede apostar en partidos de fútbol o baloncesto, sino también en disciplinas más específicas que a menudo son ignoradas por otros operadores. Miles de partidos están disponibles a diario en el sitio, y para cada uno de ellos, la casa de apuestas ofrece una línea detallada donde se puede elegir entre mercados clásicos como resultado del partido, total o hándicap, así como opciones más inusuales. Por ejemplo, se puede apostar a la cantidad de tarjetas amarillas en un partido de fútbol, estadísticas durante un juego de hockey o incluso el rendimiento individual de un jugador en baloncesto."}',
             'value_fr' => '{"0":"MelBet propose un grand nombre d’options de paris pour presque tous les tournois sportifs. Il est possible de parier non seulement sur des matchs de football ou de basketball, mais aussi sur des disciplines plus spécifiques qui sont souvent ignorées par d’autres bookmakers. Des milliers de matchs sont disponibles chaque jour sur le site, et pour chacun d’eux, le bookmaker propose une ligne détaillée où l’on peut choisir entre des marchés classiques comme le résultat du match, le total ou le handicap, ainsi que des options plus originales. Par exemple, il est possible de parier sur le nombre de cartons jaunes dans un match de football, les statistiques pendant un match de hockey ou même sur les performances individuelles des joueurs de basketball."}',
             'value_pt' => '{"0":"A MelBet oferece uma grande quantidade de opções de apostas para quase todos os torneios esportivos. É possível apostar não apenas em partidas de futebol ou basquete, mas também em disciplinas mais específicas, que muitas vezes são ignoradas por outros bookmakers. Milhares de partidas estão disponíveis diariamente no site, e para cada uma delas, a casa de apostas fornece uma linha detalhada, onde você pode escolher entre mercados clássicos como resultado da partida, total ou handicap, assim como opções mais incomuns. Por exemplo, é possível apostar no número de cartões amarelos em uma partida de futebol, nas estatísticas durante um jogo de hóquei ou até no desempenho individual de um jogador de basquete."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"A distinctive feature of MelBet is that it focuses not only on popular leagues but also on lower divisions and less-publicized competitions. In addition to traditional sports, the line also includes esports disciplines. You can place bets on tournaments in CS:GO, Dota 2, League of Legends, and other games."}',
             'value_es' => '{"0":"Una característica distintiva de MelBet es que presta atención no solo a las ligas populares, sino también a divisiones inferiores y competiciones menos conocidas. Además de los deportes tradicionales, la línea también incluye disciplinas de esports. Se pueden realizar apuestas en torneos de CS:GO, Dota 2, League of Legends y otros juegos."}',
             'value_fr' => '{"0":"Une caractéristique distinctive de MelBet est qu’il accorde de l’attention non seulement aux ligues populaires, mais aussi aux divisions inférieures et aux compétitions moins médiatisées. Outre les sports traditionnels, la ligne comprend également des disciplines d’esports. On peut parier sur des tournois de CS:GO, Dota 2, League of Legends et d’autres jeux."}',
             'value_pt' => '{"0":"Uma característica distintiva da MelBet é que a atenção não se limita apenas às ligas populares, mas também às divisões inferiores e competições menos conhecidas. Além dos esportes tradicionais, a linha também inclui disciplinas de esports. É possível apostar em torneios de CS:GO, Dota 2, League of Legends e outros jogos."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is also important that MelBet does not limit itself to standard bet formats. Many events offer combined markets. For example, you can predict the exact score in a specific tennis set or choose a bet on a team’s success only in the first half of a match."}',
             'value_es' => '{"0":"También es importante que MelBet no se limite a los formatos de apuestas estándar. Muchos eventos ofrecen mercados combinados. Por ejemplo, se puede predecir el marcador exacto en un set específico de tenis o elegir una apuesta sobre el éxito de un equipo solo en la primera mitad del partido."}',
             'value_fr' => '{"0":"Il est également important de noter que MelBet ne se limite pas aux formats de paris standard. De nombreux événements offrent des marchés combinés. Par exemple, il est possible de prédire le score exact d’un set de tennis spécifique ou de parier sur le succès d’une équipe uniquement lors de la première mi-temps du match."}',
             'value_pt' => '{"0":"Também é importante que a MelBet não se limite apenas aos formatos de apostas padrão. Muitos eventos oferecem mercados combinados. Por exemplo, é possível prever o placar exato em um set específico de tênis ou escolher uma aposta no sucesso de uma equipe apenas na primeira metade da partida."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet pays the most attention to football, as it is the most popular sport among players. On the site, you can place bets on top European championships, international tournaments, and even regional leagues. For example, you can bet on the number of corners, yellow cards, the result of each half, or even on the exact performance of individual players."}',
             'value_es' => '{"0":"MelBet presta la mayor atención al fútbol, ya que es el deporte más popular entre los jugadores. En el sitio, se pueden realizar apuestas en los principales campeonatos europeos, torneos internacionales e incluso ligas regionales. Por ejemplo, se puede apostar al número de saques de esquina, tarjetas amarillas, resultado de cada mitad o incluso al rendimiento exacto de jugadores individuales."}',
             'value_fr' => '{"0":"MelBet accorde la plus grande attention au football, car c’est le sport le plus populaire parmi les joueurs. Sur le site, il est possible de parier sur les principaux championnats européens, les tournois internationaux et même les championnats régionaux. Par exemple, vous pouvez parier sur le nombre de corners, de cartons jaunes, le résultat de chaque mi-temps ou même sur les performances exactes de joueurs individuels."}',
             'value_pt' => '{"0":"A MelBet dá mais atenção ao futebol, pois é a modalidade mais popular entre os jogadores. No site, é possível apostar nos principais campeonatos europeus, torneios internacionais e até em ligas regionais. Por exemplo, você pode apostar no número de escanteios, cartões amarelos, no resultado de cada tempo ou até no desempenho exato de jogadores individuais."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In basketball, you can choose not only classic markets such as the winner or total, but also bet on the performance of each quarter or the statistics of a specific player. In tennis, markets are available for exact set scores, the number of breaks, or match duration. You can also bet on competitions in Dota 2, CS:GO, League of Legends, and other disciplines."}',
             'value_es' => '{"0":"En baloncesto, se pueden elegir no solo los mercados clásicos como ganador o total, sino también apostar al rendimiento de cada cuarto o a las estadísticas de un jugador específico. En tenis, hay mercados disponibles para el marcador exacto de los sets, el número de breaks o la duración del partido. También se puede apostar en competiciones de Dota 2, CS:GO, League of Legends y otras disciplinas."}',
             'value_fr' => '{"0":"Au basketball, il est possible de choisir non seulement les marchés classiques tels que le vainqueur ou le total, mais aussi de parier sur la performance de chaque quart-temps ou les statistiques d’un joueur spécifique. Au tennis, des marchés sont disponibles pour le score exact des sets, le nombre de breaks ou la durée du match. Vous pouvez également parier sur des compétitions de Dota 2, CS:GO, League of Legends et d’autres disciplines."}',
             'value_pt' => '{"0":"No basquete, você pode escolher não apenas mercados clássicos como vencedor ou total, mas também apostar no desempenho de cada quarto ou nas estatísticas de um jogador específico. No tênis, estão disponíveis mercados para o placar exato dos sets, número de quebras ou duração da partida. Também é possível apostar em competições de Dota 2, CS:GO, League of Legends e outras disciplinas."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that MelBet includes less popular sports in its line, which usually do not receive as much attention from other bookmakers. Here you can find events in cricket, water polo, snooker, and even chess."}',
             'value_es' => '{"0":"También cabe destacar que MelBet incluye en su línea deportes menos populares, que normalmente no reciben tanta atención de otros operadores. Aquí se pueden encontrar eventos de críquet, waterpolo, snooker e incluso ajedrez."}',
             'value_fr' => '{"0":"Il convient également de noter que MelBet inclut dans sa ligne des sports moins populaires, qui ne reçoivent généralement pas autant d’attention chez d’autres bookmakers. On peut y trouver des événements de cricket, water-polo, snooker et même d’échecs."}',
             'value_pt' => '{"0":"Vale destacar também que a MelBet inclui em sua linha esportes menos populares, que geralmente não recebem tanta atenção de outros bookmakers. Aqui você pode encontrar eventos de críquete, polo aquático, sinuca e até xadrez."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The main focus is on slots. The library includes thousands of games from providers such as Microgaming, Pragmatic Play, Play’n GO, and many others. You can play classic three-reel machines, video slots, and jackpot games. You can also enjoy roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"El enfoque principal está en las tragamonedas. La biblioteca cuenta con miles de juegos de proveedores como Microgaming, Pragmatic Play, Play’n GO y muchos más. Puedes jugar a máquinas clásicas de tres rodillos, tragamonedas de video y juegos con jackpots. También puedes disfrutar de la ruleta, el blackjack, el baccarat y el póker."}',
             'value_fr' => '{"0":"L’accent principal est mis sur les machines à sous. La bibliothèque comprend des milliers de jeux de fournisseurs tels que Microgaming, Pragmatic Play, Play’n GO et bien d’autres. Vous pouvez jouer aux machines classiques à trois rouleaux, aux machines à sous vidéo et aux jeux à jackpot. Vous pouvez également profiter de la roulette, du blackjack, du baccarat et du poker."}',
             'value_pt' => '{"0":"O foco principal está nos slots. A biblioteca possui milhares de jogos de provedores como Microgaming, Pragmatic Play, Play’n GO e muitos outros. Você pode jogar em máquinas clássicas de três rolos, slots de vídeo e jogos com jackpots. Também é possível jogar roleta, blackjack, bacará e pôquer."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The live casino section is equally interesting. Here you can play with real dealers via live streaming. These games create the atmosphere of a real casino, allowing interaction with the dealer and other players. Popular options include live roulette, blackjack, and baccarat."}',
             'value_es' => '{"0":"La sección de casino en vivo es igualmente interesante. Aquí puedes jugar con crupieres reales mediante transmisión en vivo. Estos juegos crean la atmósfera de un casino real, permitiendo la interacción con el crupier y otros jugadores. Entre las opciones más populares se encuentran la ruleta en vivo, el blackjack y el baccarat."}',
             'value_fr' => '{"0":"La section casino en direct est tout aussi intéressante. Vous pouvez y jouer avec de vrais croupiers via la diffusion en direct. Ces jeux recréent l’atmosphère d’un véritable casino, permettant l’interaction avec le croupier et les autres joueurs. Les options populaires incluent la roulette en direct, le blackjack et le baccarat."}',
             'value_pt' => '{"0":"A seção de cassino ao vivo é igualmente interessante. Aqui você pode jogar com dealers reais por meio de transmissão ao vivo. Esses jogos criam a atmosfera de um cassino real, permitindo interações com o dealer e outros jogadores. Entre as opções populares estão roleta ao vivo, blackjack e bacará."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Compared to other bookmakers, MelBet often offers more attractive odds, especially on popular sports. For example, in Champions League matches, the average odds for the favorite can be around 1.95. In ATP or WTA matches, MelBet often gives odds of 2.10 for the underdog and 1.75 for the favorite."}',
             'value_es' => '{"0":"En comparación con otros bookmakers, MelBet suele ofrecer cuotas más atractivas, especialmente en deportes populares. Por ejemplo, en los partidos de la Liga de Campeones, la cuota media para el favorito puede ser de 1,95. En los encuentros de ATP o WTA, MelBet suele ofrecer cuotas de 2,10 para el desvalido y 1,75 para el favorito."}',
             'value_fr' => '{"0":"Par rapport à d’autres bookmakers, MelBet propose souvent des cotes plus attractives, notamment pour les sports populaires. Par exemple, lors des matchs de la Ligue des champions, la cote moyenne pour le favori peut atteindre 1,95. Lors des rencontres ATP ou WTA, MelBet offre souvent des cotes de 2,10 pour l’outsider et de 1,75 pour le favori."}',
             'value_pt' => '{"0":"Em comparação com outras casas de apostas, a MelBet frequentemente oferece odds mais atraentes, especialmente em esportes populares. Por exemplo, em partidas da Liga dos Campeões, a odd média para o favorito pode ser de 1,95. Em partidas de ATP ou WTA, a MelBet frequentemente oferece odds de 2,10 para o azarão e 1,75 para o favorito."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Special attention should also be given to live betting. Here the odds update very quickly, but even in this mode, MelBet often maintains a competitive level. For instance, in an English Premier League match during the second half, the odds for a goal can be 2.30."}',
             'value_es' => '{"0":"También merece especial atención las apuestas en vivo. Aquí, las cuotas se actualizan muy rápidamente, pero incluso en este modo, MelBet mantiene un nivel competitivo. Por ejemplo, en un partido de la Premier League inglesa durante la segunda mitad, la cuota para un gol puede ser de 2,30."}',
             'value_fr' => '{"0":"Il convient également de prêter une attention particulière aux paris en direct. Ici, les cotes se mettent à jour très rapidement, mais même dans ce mode, MelBet maintient souvent un niveau compétitif. Par exemple, lors d’un match de Premier League anglaise pendant la deuxième mi-temps, la cote pour un but peut être de 2,30."}',
             'value_pt' => '{"0":"Vale também destacar as apostas ao vivo. Aqui, as odds são atualizadas muito rapidamente, mas mesmo nesse modo, a MelBet mantém frequentemente um nível competitivo. Por exemplo, em uma partida da Premier League inglesa durante o segundo tempo, a odd para um gol pode ser de 2,30."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can place bets on almost all the same markets available in pre-match lines, with the difference that the odds change literally every second. For example, in football, you can bet not only on the final result but also on the number of corners, cards, or even the next goal scorer. Particularly useful for players is the graphical match center, which allows you to track the course of the game through visual attack schemes, dangerous moments, and ball possession."}',
             'value_es' => '{"0":"Se pueden realizar apuestas en casi todos los mismos mercados disponibles en las líneas previas al partido, con la diferencia de que las cuotas cambian literalmente cada segundo. Por ejemplo, en el fútbol, se puede apostar no solo al resultado final, sino también al número de saques de esquina, tarjetas o incluso al próximo goleador. Especialmente útil para los jugadores es el centro de partido gráfico, que permite seguir el desarrollo del juego mediante esquemas visuales de ataque, momentos peligrosos y posesión del balón."}',
             'value_fr' => '{"0":"Il est possible de parier sur presque tous les mêmes marchés disponibles dans les lignes pré-match, à la différence que les cotes changent littéralement chaque seconde. Par exemple, au football, on peut parier non seulement sur le résultat final, mais aussi sur le nombre de corners, de cartons ou même sur le prochain buteur. Le centre de match graphique est particulièrement utile pour les joueurs, permettant de suivre le déroulement du match à travers des schémas d’attaque, les moments dangereux et la possession du ballon."}',
             'value_pt' => '{"0":"É possível fazer apostas em quase todos os mesmos mercados disponíveis nas linhas pré-jogo, com a diferença de que as odds mudam literalmente a cada segundo. Por exemplo, no futebol, você pode apostar não apenas no resultado final, mas também no número de escanteios, cartões ou até no próximo artilheiro. Particularmente útil para os jogadores é o centro de partida gráfico, que permite acompanhar o desenrolar do jogo através de esquemas visuais de ataque, momentos perigosos e posse de bola."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Another strong point of MelBet is the availability of live streams, which greatly enhance convenience for users. A large number of sporting events are broadcast directly on the site, allowing you to watch the game and place bets in the same window."}',
             'value_es' => '{"0":"Otro punto fuerte de MelBet es la disponibilidad de transmisiones en vivo, que aumentan significativamente la comodidad para los usuarios. Gran cantidad de eventos deportivos se transmiten directamente en el sitio, lo que permite ver el juego y realizar apuestas en la misma ventana."}',
             'value_fr' => '{"0":"Un autre point fort de MelBet est la disponibilité des diffusions en direct, qui améliorent considérablement le confort pour les utilisateurs. Un grand nombre d’événements sportifs sont diffusés directement sur le site, ce qui permet de regarder le match et de parier dans la même fenêtre."}',
             'value_pt' => '{"0":"Outro ponto forte da MelBet é a disponibilidade de transmissões ao vivo, que aumentam muito a conveniência para os usuários. Um grande número de eventos esportivos é transmitido diretamente no site, permitindo assistir ao jogo e fazer apostas na mesma janela."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The variety of streams is also impressive: in addition to top football leagues, you can watch basketball, tennis, hockey, volleyball, and even less popular disciplines. Another advantage is that to access the streams, it is enough to have an active account and a minimal balance."}',
             'value_es' => '{"0":"La variedad de transmisiones también impresiona: además de las principales ligas de fútbol, se pueden ver partidos de baloncesto, tenis, hockey, voleibol e incluso disciplinas menos populares. Otra ventaja es que para acceder a las transmisiones basta con tener una cuenta activa y un saldo mínimo."}',
             'value_fr' => '{"0":"La variété des diffusions est également impressionnante : en plus des principales ligues de football, on peut regarder des matchs de basketball, de tennis, de hockey, de volley-ball et même de disciplines moins populaires. Un autre avantage est que pour accéder aux diffusions, il suffit d’avoir un compte actif et un solde minimal."}',
             'value_pt' => '{"0":"A variedade de transmissões também impressiona: além das principais ligas de futebol, é possível assistir a partidas de basquete, tênis, hóquei, voleibol e até disciplinas menos populares. Outra vantagem é que, para acessar as transmissões, basta ter uma conta ativa e saldo mínimo."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet has a statistics section that helps make more informed predictions. The section provides data on previous encounters between teams, player form, average goals scored and conceded, as well as other key parameters."}',
             'value_es' => '{"0":"MelBet cuenta con una sección de estadísticas que ayuda a realizar predicciones más fundamentadas. En la sección se presentan datos sobre encuentros previos entre equipos, la forma de los jugadores, el promedio de goles marcados y recibidos, así como otros parámetros clave."}',
             'value_fr' => '{"0":"MelBet dispose d’une section statistiques qui aide à faire des prédictions plus éclairées. La section présente des données sur les confrontations précédentes entre les équipes, la forme des joueurs, la moyenne de buts marqués et encaissés, ainsi que d’autres paramètres clés."}',
             'value_pt' => '{"0":"A MelBet possui uma seção de estatísticas que ajuda a fazer previsões mais fundamentadas. A seção apresenta dados sobre encontros anteriores entre equipes, a forma dos jogadores, a média de gols marcados e sofridos, assim como outros parâmetros-chave."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For tennis matches, information is available on serve percentages and the number of double faults, while for basketball it includes the average performance of the team and players."}',
             'value_es' => '{"0":"Para los partidos de tenis se ofrece información sobre el porcentaje de saques ganados y la cantidad de dobles faltas, y para el baloncesto sobre el rendimiento promedio del equipo y de los jugadores."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, des informations sont fournies sur le pourcentage de services gagnés et le nombre de doubles fautes, et pour le basketball, sur la performance moyenne de l’équipe et des joueurs."}',
             'value_pt' => '{"0":"Para partidas de tênis, estão disponíveis informações sobre a porcentagem de saques vencidos e o número de duplas faltas, enquanto para o basquete inclui o desempenho médio da equipe e dos jogadores."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet pays attention to responsible gambling principles. You can set limits on deposits and bets, as well as on the time spent in your account. There is also an option to self-exclude for a certain period if needed."}',
             'value_es' => '{"0":"MelBet presta atención a los principios de juego responsable. Se pueden establecer límites en los depósitos y apuestas, así como en el tiempo de permanencia en la cuenta. También existe la opción de autoexclusión por un período determinado si es necesario."}',
             'value_fr' => '{"0":"MelBet accorde de l’importance aux principes de jeu responsable. Il est possible de définir des limites sur les dépôts et les mises, ainsi que sur le temps passé sur le compte. Il existe également une option d’auto-exclusion pour une période donnée si nécessaire."}',
             'value_pt' => '{"0":"A MelBet dá atenção aos princípios de jogo responsável. É possível definir limites para depósitos e apostas, bem como para o tempo de permanência na conta. Também há a opção de autoexclusão por um período determinado, se necessário."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides links to organizations that help address gambling addiction. The availability of these tools meets the modern requirements of the online betting industry."}',
             'value_es' => '{"0":"La plataforma proporciona enlaces a organizaciones que ayudan a combatir la adicción al juego. La disponibilidad de estas herramientas cumple con los requisitos modernos de la industria de apuestas en línea."}',
             'value_fr' => '{"0":"La plateforme fournit des liens vers des organisations qui aident à lutter contre la dépendance au jeu. La disponibilité de ces outils répond aux exigences actuelles de l’industrie des paris en ligne."}',
             'value_pt' => '{"0":"A plataforma fornece links para organizações que ajudam a combater o vício em jogos de azar. A disponibilidade dessas ferramentas atende aos requisitos modernos da indústria de apostas online."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"One of the key factors in the convenience of any bookmaker is the variety of payment methods. Traditional bank cards, including Visa and MasterCard, are available and remain the most familiar tools for depositing and withdrawing funds. In addition, there are electronic wallets, among which Skrill, Neteller, and Jeton are popular."}',
             'value_es' => '{"0":"Uno de los factores clave para la comodidad de cualquier casa de apuestas es la variedad de métodos de pago. Están disponibles las tarjetas bancarias tradicionales, incluidas Visa y MasterCard, que siguen siendo las herramientas más conocidas para depositar y retirar fondos. Además, existen monederos electrónicos, entre los que destacan Skrill, Neteller y Jeton."}',
             'value_fr' => '{"0":"L’un des facteurs clés de la commodité de tout bookmaker est la variété des méthodes de paiement. Les cartes bancaires traditionnelles, y compris Visa et MasterCard, sont disponibles et restent les outils les plus familiers pour déposer et retirer des fonds. En outre, il existe des portefeuilles électroniques, parmi lesquels Skrill, Neteller et Jeton sont populaires."}',
             'value_pt' => '{"0":"Um dos fatores-chave para a conveniência de qualquer casa de apostas é a variedade de métodos de pagamento. Cartões bancários tradicionais, incluindo Visa e MasterCard, estão disponíveis e continuam sendo as ferramentas mais conhecidas para depositar e sacar fundos. Além disso, há carteiras eletrônicas, entre as quais Skrill, Neteller e Jeton são populares."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is also possible to deposit or withdraw using Bitcoin, Ethereum, Litecoin, and several other digital currencies. It is worth noting that the processing speed of such payments is usually higher than with traditional banking methods."}',
             'value_es' => '{"0":"También es posible depositar o retirar mediante Bitcoin, Ethereum, Litecoin y varias otras monedas digitales. Cabe destacar que la velocidad de procesamiento de estos pagos suele ser mayor que la de los métodos bancarios tradicionales."}',
             'value_fr' => '{"0":"Il est également possible de déposer ou de retirer via Bitcoin, Ethereum, Litecoin et plusieurs autres devises numériques. Il convient de noter que la vitesse de traitement de ces paiements est généralement plus élevée que celle des méthodes bancaires traditionnelles."}',
             'value_pt' => '{"0":"Também é possível depositar ou sacar usando Bitcoin, Ethereum, Litecoin e várias outras moedas digitais. Vale destacar que a velocidade de processamento desses pagamentos costuma ser maior do que nos métodos bancários tradicionais."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Deposit processing is usually instant, while withdrawals typically take from a few minutes to a day, depending on the chosen method and the amount. It is also worth noting that MelBet does not charge its own fees for transactions, although additional charges may depend on the specific payment system."}',
             'value_es' => '{"0":"El depósito se acredita en la mayoría de los casos de forma instantánea, mientras que la retirada de fondos suele tardar desde unos minutos hasta un día, dependiendo del método elegido y del importe. También conviene señalar que MelBet no cobra comisiones por las transacciones, aunque los cargos adicionales pueden depender del sistema de pago específico."}',
             'value_fr' => '{"0":"Le dépôt est généralement instantané, tandis que le retrait prend habituellement de quelques minutes à un jour, selon la méthode choisie et le montant. Il est également important de souligner que MelBet ne prélève pas de frais pour les transactions, bien que des frais supplémentaires puissent dépendre du système de paiement spécifique."}',
             'value_pt' => '{"0":"O depósito geralmente é instantâneo, enquanto o saque normalmente leva de alguns minutos a um dia, dependendo do método escolhido e do valor. Também vale mencionar que a MelBet não cobra suas próprias taxas pelas transações, embora cobranças adicionais possam depender do sistema de pagamento específico."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet has a 24/7 customer support service, which you can contact via online chat, email, or by phone."}',
             'value_es' => '{"0":"MelBet cuenta con un servicio de atención al cliente disponible las 24 horas, al que puede contactar mediante chat en línea, correo electrónico o por teléfono."}',
             'value_fr' => '{"0":"MelBet dispose d’un service client disponible 24h/24, que vous pouvez contacter via le chat en ligne, par e-mail ou par téléphone."}',
             'value_pt' => '{"0":"A MelBet possui um serviço de atendimento ao cliente disponível 24 horas por dia, que pode ser contatado via chat online, e-mail ou telefone."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 41
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of bets and markets",
                                 "1":"Live streaming and live betting",
                                 "2":"Large variety of payment methods",
                                 "3":"Competitive odds"},
                             "1":
                                {"0":"Curacao license does not always guarantee full protection",
                                 "1":"Access is restricted in certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de apuestas y mercados",
                                 "1":"Transmisiones en vivo y apuestas en directo",
                                 "2":"Amplia variedad de métodos de pago",
                                 "3":"Cuotas competitivas"},
                             "1":
                                {"0":"La licencia de Curazao no siempre garantiza protección total",
                                 "1":"El acceso está restringido en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de paris et de marchés",
                                 "1":"Diffusions en direct et paris en direct",
                                 "2":"Grande variété de méthodes de paiement",
                                 "3":"Cotes compétitives"},
                             "1":
                                {"0":"La licence de Curaçao ne garantit pas toujours une protection totale",
                                 "1":"L’accès est limité dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de apostas e mercados",
                                 "1":"Transmissões ao vivo e apostas em tempo real",
                                 "2":"Ampla variedade de métodos de pagamento",
                                 "3":"Odds competitivas"},
                             "1":
                                {"0":"A licença de Curaçao nem sempre garante proteção total",
                                 "1":"O acesso é restrito em alguns países"}
                             }',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 42
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MelBet"}',
                'value_fr' => '{"0":"FAQ de MelBet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MelBet"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 43
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What documents are required for verification?"}',
             'value_es' => '{"0":"¿Qué documentos se requieren para la verificación?"}',
             'value_fr' => '{"0":"Quels documents sont nécessaires pour la vérification ?"}',
             'value_pt' => '{"0":"Quais documentos são necessários para verificação?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 44
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To confirm your identity, MelBet usually requests a passport or driver’s license. The verification process is necessary for security and to prevent fraud."}',
             'value_es' => '{"0":"Para confirmar su identidad, MelBet generalmente solicita un pasaporte o licencia de conducir. El proceso de verificación es necesario por motivos de seguridad y para prevenir fraudes."}',
             'value_fr' => '{"0":"Pour confirmer votre identité, MelBet demande généralement un passeport ou un permis de conduire. Le processus de vérification est nécessaire pour la sécurité et pour prévenir la fraude."}',
             'value_pt' => '{"0":"Para confirmar sua identidade, a MelBet normalmente solicita passaporte ou carteira de motorista. O processo de verificação é necessário para segurança e prevenção de fraudes."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 45
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación?"}',
             'value_fr' => '{"0":"Combien de temps prend la vérification ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 46
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, document verification takes from a few hours to one business day."}',
             'value_es' => '{"0":"En la mayoría de los casos, la verificación de documentos tarda desde unas pocas horas hasta un día hábil."}',
             'value_fr' => '{"0":"Dans la plupart des cas, la vérification des documents prend de quelques heures à un jour ouvrable."}',
             'value_pt' => '{"0":"Na maioria dos casos, a verificação dos documentos leva de algumas horas a um dia útil."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 47
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can I play and place bets from my mobile phone?"}',
             'value_es' => '{"0":"¿Se puede jugar y apostar desde el teléfono móvil?"}',
             'value_fr' => '{"0":"Peut-on jouer et parier depuis un téléphone portable ?"}',
             'value_pt' => '{"0":"É possível jogar e fazer apostas pelo telemóvel?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 48
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, MelBet has a mobile app for Android and iOS, as well as an adapted mobile version of the website."}',
             'value_es' => '{"0":"Sí, MelBet tiene una aplicación móvil para Android e iOS, además de una versión móvil adaptada del sitio web."}',
             'value_fr' => '{"0":"Oui, MelBet dispose d’une application mobile pour Android et iOS, ainsi que d’une version mobile adaptée du site web."}',
             'value_pt' => '{"0":"Sim, a MelBet tem uma aplicação móvel para Android e iOS, além de uma versão móvel adaptada do site."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 49
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What types of bets are available on MelBet?"}',
             'value_es' => '{"0":"¿Qué tipos de apuestas están disponibles en MelBet?"}',
             'value_fr' => '{"0":"Quels types de paris sont disponibles sur MelBet ?"}',
             'value_pt' => '{"0":"Quais tipos de apostas estão disponíveis na MelBet?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 50
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can place single bets, accumulators, and bets with different odds in real time."}',
             'value_es' => '{"0":"Se pueden hacer apuestas simples, combinadas y apuestas con diferentes cuotas en tiempo real."}',
             'value_fr' => '{"0":"Vous pouvez placer des paris simples, des combinés et des paris avec différentes cotes en temps réel."}',
             'value_pt' => '{"0":"É possível fazer apostas simples, múltiplas e apostas com diferentes odds em tempo real."}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 51
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can I change the account currency after registration?"}',
             'value_es' => '{"0":"¿Puedo cambiar la moneda de la cuenta después de registrarme?"}',
             'value_fr' => '{"0":"Puis-je changer la devise du compte après l\'inscription ?"}',
             'value_pt' => '{"0":"Posso mudar a moeda da conta após o registo?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 52
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is not possible to change the account currency on MelBet after creating a profile, so it is important to choose the desired currency during registration to avoid additional conversion fees."}',
             'value_es' => '{"0":"No es posible cambiar la moneda de la cuenta en MelBet después de crear un perfil, por lo que es importante elegir la moneda adecuada en el momento del registro para evitar comisiones adicionales por conversión."}',
             'value_fr' => '{"0":"Il n’est pas possible de changer la devise du compte sur MelBet après la création d’un profil, il est donc important de choisir la devise souhaitée lors de l’inscription afin d’éviter des frais de conversion supplémentaires."}',
             'value_pt' => '{"0":"Não é possível alterar a moeda da conta na MelBet depois de criar um perfil, por isso é importante escolher a moeda desejada no momento do registo para evitar taxas adicionais de conversão."}',
             'order' => 52
            ]
        );
    }
}
