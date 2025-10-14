<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is an international bookmaker company founded in 2017 and is one of the most well-known online betting platforms. The website is available in more than forty languages, including English, Spanish, French, and Portuguese."}',
             'value_es' => '{"0":"22BET es una compañía internacional de apuestas fundada en 2017 y es una de las plataformas de apuestas en línea más conocidas. El sitio web está disponible en más de cuarenta idiomas, incluidos inglés, español, francés y portugués."}',
             'value_fr' => '{"0":"22BET est une société de paris internationale fondée en 2017 et est l’une des plateformes de paris en ligne les plus connues. Le site est disponible en plus de quarante langues, dont l’anglais, l’espagnol, le français et le portugais."}',
             'value_pt' => '{"0":"22BET é uma empresa de apostas internacional fundada em 2017 e é uma das plataformas de apostas online mais conhecidas. O site está disponível em mais de quarenta idiomas, incluindo inglês, espanhol, francês e português."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"On 22BET, users can place bets on sports and esports, as well as play in the casino. The interface is convenient and modern. Among its advantages are a rich line of events, fast bet settlements, and stable platform performance even during peak loads."}',
             'value_es' => '{"0":"En 22BET, los usuarios pueden realizar apuestas en deportes y esports, así como jugar en el casino. La interfaz es cómoda y moderna. Entre sus ventajas se encuentran una amplia línea de eventos, liquidación rápida de apuestas y un funcionamiento estable de la plataforma incluso durante los momentos de mayor tráfico."}',
             'value_fr' => '{"0":"Sur 22BET, les utilisateurs peuvent parier sur les sports et les esports, ainsi que jouer au casino. L’interface est pratique et moderne. Parmi ses avantages figurent une large gamme d’événements, des règlements rapides des paris et une performance stable de la plateforme même lors des pics de trafic."}',
             'value_pt' => '{"0":"No 22BET, os usuários podem apostar em esportes e esports, assim como jogar no cassino. A interface é conveniente e moderna. Entre suas vantagens estão uma linha rica de eventos, liquidação rápida das apostas e desempenho estável da plataforma mesmo durante períodos de alto tráfego."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET operates under an official Curaçao license, which ensures the company’s legal activity at the international level. This indicates that the bookmaker complies with established norms and standards for player protection."}',
             'value_es' => '{"0":"22BET opera bajo una licencia oficial de Curazao, lo que garantiza la actividad legal de la compañía a nivel internacional. Esto indica que el operador cumple con las normas y estándares establecidos para la protección de los jugadores."}',
             'value_fr' => '{"0":"22BET fonctionne sous une licence officielle de Curaçao, ce qui garantit l’activité légale de la société au niveau international. Cela montre que le bookmaker respecte les normes et standards établis pour la protection des joueurs."}',
             'value_pt' => '{"0":"22BET opera com uma licença oficial de Curaçao, o que garante a atividade legal da empresa em nível internacional. Isso demonstra que a casa de apostas cumpre as normas e padrões estabelecidos para a proteção dos jogadores."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"All personal and financial data of players are encrypted using modern SSL protocols. 22BET does not share data with third parties and adheres to a privacy policy in accordance with international requirements. During registration and before withdrawing large amounts, identity verification may be conducted."}',
             'value_es' => '{"0":"Todos los datos personales y financieros de los jugadores se cifran mediante protocolos SSL modernos. 22BET no comparte datos con terceros y sigue una política de privacidad conforme a los requisitos internacionales. Durante el registro y antes de retirar grandes sumas, puede realizarse una verificación de identidad."}',
             'value_fr' => '{"0":"Toutes les données personnelles et financières des joueurs sont cryptées à l’aide de protocoles SSL modernes. 22BET ne transmet pas les données à des tiers et respecte une politique de confidentialité conforme aux exigences internationales. Lors de l’inscription et avant le retrait de grosses sommes, une vérification d’identité peut être effectuée."}',
             'value_pt' => '{"0":"Todos os dados pessoais e financeiros dos jogadores são criptografados usando protocolos SSL modernos. A 22BET não compartilha informações com terceiros e segue uma política de privacidade de acordo com os requisitos internacionais. Durante o registro e antes de sacar grandes valores, pode ser realizada a verificação de identidade."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"On 22BET, users can place bets on events from over forty sports, including football, tennis, basketball, volleyball, hockey, baseball, boxing, motorsports, and even niche disciplines such as floorball, darts, snooker, or water polo. There is a separate esports section where you can bet on popular games including Counter-Strike, Dota 2, League of Legends, Valorant, as well as numerous tournaments. In addition to traditional sports, 22BET allows bets on politics, TV shows, and special events like the Oscars or the Eurovision Song Contest."}',
             'value_es' => '{"0":"En 22BET, los usuarios pueden apostar en eventos de más de cuarenta deportes, incluidos fútbol, tenis, baloncesto, voleibol, hockey, béisbol, boxeo, automovilismo e incluso disciplinas de nicho como floorball, dardos, snooker o waterpolo. Hay una sección separada de esports donde se puede apostar en juegos populares como Counter-Strike, Dota 2, League of Legends, Valorant, así como en numerosos torneos. Además de los deportes tradicionales, 22BET permite apostar en política, programas de televisión y eventos especiales como los Premios Oscar o el Festival de Eurovisión."}',
             'value_fr' => '{"0":"Sur 22BET, les utilisateurs peuvent parier sur des événements dans plus de quarante sports, y compris le football, le tennis, le basket-ball, le volley-ball, le hockey, le baseball, la boxe, les sports automobiles, et même des disciplines de niche comme le floorball, les fléchettes, le snooker ou le water-polo. Une section distincte est consacrée aux esports, où il est possible de parier sur des jeux populaires tels que Counter-Strike, Dota 2, League of Legends, Valorant, ainsi que sur de nombreux tournois. En plus des sports traditionnels, 22BET permet de parier sur la politique, les émissions télévisées et des événements spéciaux comme les Oscars ou le Concours Eurovision de la chanson."}',
             'value_pt' => '{"0":"No 22BET, os usuários podem apostar em eventos de mais de quarenta esportes, incluindo futebol, tênis, basquete, vôlei, hóquei, beisebol, boxe, automobilismo e até disciplinas de nicho como floorball, dardos, sinuca ou polo aquático. Há uma seção separada de esports onde é possível apostar em jogos populares como Counter-Strike, Dota 2, League of Legends, Valorant, além de inúmeros torneios. Além dos esportes tradicionais, o 22BET permite apostas em política, programas de TV e eventos especiais, como o Oscar ou o Festival Eurovisão da Canção."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Each sporting event comes with hundreds of betting options. In football matches, for example, you can bet not only on the winner or total goals but also on the number of corners, yellow cards, halftime results, the first goal scorer, or even the exact score. In basketball, bets are available on individual player points, the number of three-pointers, or totals by quarters."}',
             'value_es' => '{"0":"Cada evento deportivo viene acompañado de cientos de opciones de apuesta. En los partidos de fútbol, por ejemplo, se puede apostar no solo por el ganador o el total de goles, sino también por la cantidad de córners, tarjetas amarillas, resultado del primer tiempo, primer goleador o incluso el marcador exacto. En baloncesto, se pueden realizar apuestas sobre los puntos individuales de los jugadores, la cantidad de triples o los totales por cuarto."}',
             'value_fr' => '{"0":"Chaque événement sportif propose des centaines d’options de paris. Dans les matchs de football, par exemple, il est possible de parier non seulement sur le vainqueur ou le total de buts, mais aussi sur le nombre de corners, de cartons jaunes, le résultat de la première mi-temps, le premier buteur ou même le score exact. Au basket-ball, les paris sont disponibles sur les points individuels des joueurs, le nombre de tirs à trois points ou les totaux par quart-temps."}',
             'value_pt' => '{"0":"Cada evento esportivo oferece centenas de opções de aposta. Em partidas de futebol, por exemplo, é possível apostar não apenas no vencedor ou no total de gols, mas também no número de escanteios, cartões amarelos, resultado do primeiro tempo, autor do primeiro gol ou até mesmo no placar exato. No basquete, as apostas incluem pontos individuais dos jogadores, número de cestas de três pontos ou totais por quarto."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section on 22BET features popular championships, international tournaments, and local matches. Football traditionally takes center stage, with options to bet on English Premier League games as well as less popular leagues. Tennis, basketball, hockey, boxing, and even niche sports such as table tennis and cricket are also well represented."}',
             'value_es' => '{"0":"La sección de apuestas deportivas en 22BET incluye campeonatos populares, torneos internacionales y partidos locales. El fútbol ocupa tradicionalmente un lugar central, con la posibilidad de apostar en partidos de la Premier League inglesa y en ligas menos conocidas. El tenis, el baloncesto, el hockey, el boxeo e incluso deportes de nicho como el tenis de mesa y el cricket también están bien representados."}',
             'value_fr' => '{"0":"La section paris sportifs de 22BET rassemble les championnats populaires, les tournois internationaux et les matchs locaux. Le football occupe traditionnellement une place centrale, avec la possibilité de parier sur la Premier League anglaise ainsi que sur des championnats moins connus. Le tennis, le basket-ball, le hockey, la boxe et même des sports moins populaires comme le tennis de table et le cricket sont également bien représentés."}',
             'value_pt' => '{"0":"A seção de apostas esportivas da 22BET reúne campeonatos populares, torneios internacionais e partidas locais. O futebol ocupa tradicionalmente o lugar central, com opções para apostar em jogos da Premier League inglesa e em campeonatos menos conhecidos. Tênis, basquete, hóquei, boxe e até esportes de nicho como tênis de mesa e críquete também estão bem representados."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Each match offers numerous betting options. Users can bet on the winner, double chance, totals, handicap, exact score, number of goals, or individual player statistics. Additionally, there are special bets for specific moments in the game, such as who will receive the first warning or which player will score the first goal."}',
             'value_es' => '{"0":"Cada partido ofrece numerosas opciones de apuesta. Los usuarios pueden apostar por el ganador, doble oportunidad, totales, hándicap, marcador exacto, número de goles o estadísticas individuales de los jugadores. Además, existen apuestas especiales sobre momentos concretos del juego, como quién recibirá la primera advertencia o qué jugador marcará el primer gol."}',
             'value_fr' => '{"0":"Chaque match propose de nombreuses options de pari. Les utilisateurs peuvent parier sur le vainqueur, la double chance, les totaux, les handicaps, le score exact, le nombre de buts ou les statistiques individuelles des joueurs. Il existe également des paris spéciaux sur des moments précis du jeu, comme qui recevra le premier avertissement ou quel joueur marquera le premier but."}',
             'value_pt' => '{"0":"Cada partida oferece inúmeras opções de aposta. Os usuários podem apostar no vencedor, dupla chance, totais, handicap, placar exato, número de gols ou estatísticas individuais dos jogadores. Além disso, há apostas especiais para momentos específicos do jogo, como quem receberá o primeiro cartão ou qual jogador marcará o primeiro gol."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform supports both single bets and accumulators, allowing users to combine events and increase potential winnings. Thanks to the stable real-time updating of odds, users always have access to the most current information."}',
             'value_es' => '{"0":"La plataforma admite tanto apuestas simples como acumuladores, lo que permite combinar eventos y aumentar las posibles ganancias. Gracias a la actualización estable de las cuotas en tiempo real, los usuarios siempre disponen de la información más actualizada."}',
             'value_fr' => '{"0":"La plateforme prend en charge les paris simples et les paris combinés, permettant de combiner plusieurs événements et d’augmenter les gains potentiels. Grâce à la mise à jour stable des cotes en temps réel, les utilisateurs ont toujours accès aux informations les plus récentes."}',
             'value_pt' => '{"0":"A plataforma suporta apostas simples e acumuladores, permitindo combinar eventos e aumentar os ganhos potenciais. Graças à atualização estável das odds em tempo real, os usuários sempre têm acesso às informações mais atuais."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET casino is organized as a separate section that combines classic gambling games with modern entertainment formats. The catalog features over three thousand games from leading global developers, including NetEnt, Microgaming, Pragmatic Play, Evolution, Betsoft, Yggdrasil, and others."}',
             'value_es' => '{"0":"El casino 22BET está organizado como una sección independiente que combina los juegos de azar clásicos con formatos de entretenimiento modernos. El catálogo incluye más de tres mil juegos de los principales desarrolladores mundiales, como NetEnt, Microgaming, Pragmatic Play, Evolution, Betsoft, Yggdrasil y otros."}',
             'value_fr' => '{"0":"Le casino 22BET est conçu comme une section distincte qui combine les jeux de hasard classiques avec des formats de divertissement modernes. Le catalogue propose plus de trois mille jeux de développeurs mondiaux de premier plan, notamment NetEnt, Microgaming, Pragmatic Play, Evolution, Betsoft, Yggdrasil et d’autres."}',
             'value_pt' => '{"0":"O cassino 22BET é organizado como uma seção separada que combina jogos de azar clássicos com formatos de entretenimento modernos. O catálogo apresenta mais de três mil jogos de desenvolvedores globais líderes, incluindo NetEnt, Microgaming, Pragmatic Play, Evolution, Betsoft, Yggdrasil e outros."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The core of the casino consists of video slots such as Book of Dead, Gates of Olympus, and Sweet Bonanza. For fans of classic games, there is a section with roulette, blackjack, baccarat, and poker. All games feature convenient navigation, run without delays, and are available both in the browser and in the mobile app."}',
             'value_es' => '{"0":"El núcleo del casino está compuesto por tragamonedas de video como Book of Dead, Gates of Olympus y Sweet Bonanza. Para los amantes de los juegos clásicos, hay una sección con ruleta, blackjack, baccarat y póker. Todos los juegos cuentan con una navegación cómoda, funcionan sin retrasos y están disponibles tanto en el navegador como en la aplicación móvil."}',
             'value_fr' => '{"0":"Le cœur du casino est constitué de machines à sous vidéo telles que Book of Dead, Gates of Olympus et Sweet Bonanza. Pour les amateurs de jeux classiques, une section est dédiée à la roulette, au blackjack, au baccarat et au poker. Tous les jeux disposent d’une navigation pratique, fonctionnent sans délai et sont disponibles à la fois sur le navigateur et dans l’application mobile."}',
             'value_pt' => '{"0":"O núcleo do cassino é composto por slots de vídeo como Book of Dead, Gates of Olympus e Sweet Bonanza. Para os fãs de jogos clássicos, há uma seção com roleta, blackjack, bacará e pôquer. Todos os jogos possuem navegação conveniente, funcionam sem atrasos e estão disponíveis tanto no navegador quanto no aplicativo móvel."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET offers some of the most attractive odds among modern betting platforms, especially in major sports disciplines. For example, in English Premier League matches, the odds for favorites usually hover around 1.90, while underdogs can reach 4.50 or even higher. In ATP or WTA tennis tournaments, average odds are around 1.95."}',
             'value_es' => '{"0":"22BET ofrece algunas de las cuotas más atractivas entre las plataformas de apuestas modernas, especialmente en disciplinas deportivas principales. Por ejemplo, en los partidos de la Premier League inglesa, las cuotas para los favoritos suelen estar alrededor de 1,90, mientras que para los desvalidos pueden alcanzar 4,50 o incluso más. En torneos de tenis ATP o WTA, las cuotas medias rondan 1,95."}',
             'value_fr' => '{"0":"22BET propose certaines des cotes les plus attractives parmi les plateformes de paris modernes, notamment dans les disciplines sportives majeures. Par exemple, lors des matchs de Premier League anglaise, les cotes pour les favoris se situent généralement autour de 1,90, tandis que pour les outsiders, elles peuvent atteindre 4,50 voire plus. Dans les tournois de tennis ATP ou WTA, les cotes moyennes sont d’environ 1,95."}',
             'value_pt' => '{"0":"A 22BET oferece algumas das odds mais atraentes entre as plataformas de apostas modernas, especialmente em disciplinas esportivas principais. Por exemplo, em partidas da Premier League inglesa, as odds para os favoritos geralmente ficam em torno de 1,90, enquanto os azarões podem chegar a 4,50 ou mais. Em torneios de tênis ATP ou WTA, as odds médias são cerca de 1,95."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, odds update almost instantly. For instance, during a football match, after a goal is scored, the odds for one team to win can change from 2.10 to 1.40 within seconds."}',
             'value_es' => '{"0":"En modo en vivo, las cuotas se actualizan casi al instante. Por ejemplo, durante un partido de fútbol, después de un gol, las cuotas para que gane un equipo pueden cambiar de 2,10 a 1,40 en cuestión de segundos."}',
             'value_fr' => '{"0":"En mode live, les cotes se mettent à jour presque instantanément. Par exemple, pendant un match de football, après un but marqué, les cotes pour la victoire d’une équipe peuvent passer de 2,10 à 1,40 en quelques secondes."}',
             'value_pt' => '{"0":"No modo ao vivo, as odds são atualizadas quase instantaneamente. Por exemplo, durante uma partida de futebol, após um gol, as odds de vitória de uma equipe podem mudar de 2,10 para 1,40 em questão de segundos."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that 22BET is not limited to popular leagues. In esports disciplines like Dota 2 or CS2, odds often range from 1.80 to 2.10."}',
             'value_es' => '{"0":"Cabe destacar que 22BET no se limita solo a ligas populares. En disciplinas de esports como Dota 2 o CS2, las cuotas suelen variar entre 1,80 y 2,10."}',
             'value_fr' => '{"0":"Il convient de noter que 22BET ne se limite pas aux ligues populaires. Dans les disciplines esports comme Dota 2 ou CS2, les cotes fluctuent souvent entre 1,80 et 2,10."}',
             'value_pt' => '{"0":"Vale destacar que a 22BET não se limita apenas às ligas populares. Em disciplinas de esports como Dota 2 ou CS2, as odds frequentemente variam de 1,80 a 2,10."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides fast odds updates that change according to the development of the game. For example, in football matches, the odds for a team to win can shift from 2.20 to 1.65 immediately after a goal or a red card. Users can open multiple events simultaneously, switch between them without reloading the page, and instantly add selected bets to the betting slip."}',
             'value_es' => '{"0":"La plataforma ofrece actualizaciones rápidas de las cuotas que cambian según el desarrollo del juego. Por ejemplo, en los partidos de fútbol, las cuotas para que un equipo gane pueden pasar de 2,20 a 1,65 inmediatamente después de un gol o una tarjeta roja. Los usuarios pueden abrir varios eventos simultáneamente, cambiar entre ellos sin recargar la página y añadir las apuestas seleccionadas al cupón de forma instantánea."}',
             'value_fr' => '{"0":"La plateforme assure une mise à jour rapide des cotes qui évoluent en fonction du déroulement du jeu. Par exemple, lors d’un match de football, les cotes pour la victoire d’une équipe peuvent passer de 2,20 à 1,65 immédiatement après un but ou un carton rouge. Les utilisateurs peuvent ouvrir plusieurs événements simultanément, passer de l’un à l’autre sans recharger la page et ajouter instantanément les paris sélectionnés au coupon."}',
             'value_pt' => '{"0":"A plataforma fornece atualizações rápidas das odds que mudam de acordo com o desenvolvimento do jogo. Por exemplo, em partidas de futebol, as odds para vitória de uma equipe podem passar de 2,20 para 1,65 imediatamente após um gol ou cartão vermelho. Os usuários podem abrir vários eventos simultaneamente, alternar entre eles sem recarregar a página e adicionar instantaneamente as apostas selecionadas ao bilhete."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Live streaming is available for a significant portion of events, including football, tennis, basketball, hockey, and esports. The video stream is stable with minimal delay, allowing users to follow the match in real time and place bets without lag. If streaming is unavailable, an event visualization is offered, showing attacks, free kicks, corners, and shots on goal."}',
             'value_es' => '{"0":"La transmisión en vivo está disponible para una parte significativa de los eventos, incluidos fútbol, tenis, baloncesto, hockey y esports. La señal de vídeo es estable y con un retraso mínimo, lo que permite a los usuarios seguir el partido en tiempo real y apostar sin demoras. Si la transmisión no está disponible, se ofrece una visualización de los eventos que muestra ataques, tiros libres, córners y disparos a puerta."}',
             'value_fr' => '{"0":"La diffusion en direct est disponible pour une partie importante des événements, y compris le football, le tennis, le basketball, le hockey et les esports. Le flux vidéo est stable avec un délai minimal, permettant aux utilisateurs de suivre le match en temps réel et de placer leurs paris sans latence. Si la diffusion n’est pas disponible, une visualisation des événements est proposée, montrant les attaques, les coups francs, les corners et les tirs au but."}',
             'value_pt' => '{"0":"A transmissão ao vivo está disponível para uma parte significativa dos eventos, incluindo futebol, tênis, basquete, hóquei e esports. O fluxo de vídeo é estável com atraso mínimo, permitindo que os usuários acompanhem a partida em tempo real e façam apostas sem atraso. Se a transmissão não estiver disponível, é oferecida uma visualização do evento, mostrando ataques, faltas, escanteios e chutes ao gol."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"At 22BET, statistics serve as a supporting tool that helps players make informed decisions before placing bets. The statistics section gathers a large amount of data, allowing users to review previous match results, team form, average goals, fouls, shots, and other details."}',
             'value_es' => '{"0":"En 22BET, las estadísticas funcionan como una herramienta de apoyo que ayuda a los jugadores a tomar decisiones informadas antes de realizar apuestas. La sección de estadísticas recopila una gran cantidad de datos, lo que permite revisar los resultados de partidos anteriores, la forma de los equipos, el promedio de goles, faltas, tiros y otros detalles."}',
             'value_fr' => '{"0":"Chez 22BET, les statistiques constituent un outil complémentaire qui permet aux joueurs de prendre des décisions éclairées avant de placer leurs paris. La section statistiques rassemble un grand volume de données, permettant de consulter les résultats des matchs précédents, la forme des équipes, la moyenne de buts, les fautes, les tirs et d’autres détails."}',
             'value_pt' => '{"0":"No 22BET, as estatísticas funcionam como uma ferramenta de apoio que ajuda os jogadores a tomar decisões informadas antes de fazer apostas. A seção de estatísticas reúne uma grande quantidade de dados, permitindo revisar os resultados de partidas anteriores, a forma das equipes, a média de gols, faltas, chutes e outros detalhes."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The information updates automatically and is presented in a convenient format, enabling quick access to any team or tournament and viewing key figures without the need to visit external sources. For live betting, statistics are updated in real time. Players can see the number of attacks, shots on goal, corners, and cards during the match itself."}',
             'value_es' => '{"0":"La información se actualiza automáticamente y se presenta en un formato cómodo, lo que permite acceder rápidamente a cualquier equipo o torneo y ver las cifras clave sin necesidad de visitar fuentes externas. Para las apuestas en vivo, las estadísticas se actualizan en tiempo real. Los jugadores pueden ver la cantidad de ataques, tiros a puerta, córners y tarjetas durante el partido."}',
             'value_fr' => '{"0":"Les informations se mettent à jour automatiquement et sont présentées dans un format pratique, permettant de trouver rapidement n’importe quelle équipe ou tournoi et de consulter les chiffres clés sans avoir besoin de se rendre sur des sources externes. Pour les paris en direct, les statistiques sont mises à jour en temps réel. Les joueurs voient le nombre d’attaques, de tirs au but, de corners et de cartons pendant le match."}',
             'value_pt' => '{"0":"As informações são atualizadas automaticamente e apresentadas em um formato conveniente, permitindo acessar rapidamente qualquer equipe ou torneio e visualizar os números-chave sem precisar recorrer a fontes externas. Para apostas ao vivo, as estatísticas são atualizadas em tempo real. Os jogadores podem ver o número de ataques, chutes ao gol, escanteios e cartões durante a partida."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET supports responsible gaming principles. Users can set limits on deposits, spending, or the time spent on the site. These restrictions help manage expenses. The profile also includes a self-exclusion option, which blocks access to the account for a certain period. All measures can be easily activated through account settings."}',
             'value_es' => '{"0":"22BET respalda los principios de juego responsable. Los usuarios pueden establecer límites en los depósitos, en el gasto o en el tiempo que pasan en el sitio. Estas restricciones ayudan a controlar los gastos. En el perfil también está disponible la opción de autoexclusión, que bloquea el acceso a la cuenta durante un período determinado. Todas las medidas se pueden activar fácilmente a través de la configuración de la cuenta."}',
             'value_fr' => '{"0":"22BET soutient les principes de jeu responsable. Les utilisateurs peuvent définir des limites sur les dépôts, les dépenses ou le temps passé sur le site. Ces restrictions aident à gérer les dépenses. Le profil inclut également une option d’auto-exclusion, qui bloque l’accès au compte pendant une période donnée. Toutes les mesures peuvent être facilement activées via les paramètres du compte."}',
             'value_pt' => '{"0":"A 22BET apoia os princípios de jogo responsável. Os usuários podem definir limites para depósitos, gastos ou o tempo gasto no site. Essas restrições ajudam a controlar os gastos. O perfil também oferece a opção de autoexclusão, que bloqueia o acesso à conta por um determinado período. Todas as medidas podem ser ativadas facilmente nas configurações da conta."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET supports a wide range of payment methods. The site offers over 70 ways to deposit, including Visa and MasterCard, e-wallets, and dozens of cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"22BET admite una amplia variedad de métodos de pago. El sitio ofrece más de 70 formas de depósito, incluidas tarjetas Visa y MasterCard, monederos electrónicos y docenas de criptomonedas como Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"22BET prend en charge une grande variété de méthodes de paiement. Le site propose plus de 70 moyens de dépôt, y compris les cartes Visa et MasterCard, les portefeuilles électroniques et des dizaines de cryptomonnaies telles que Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"A 22BET suporta uma grande variedade de métodos de pagamento. O site oferece mais de 70 formas de depósito, incluindo cartões Visa e MasterCard, carteiras eletrônicas e dezenas de criptomoedas, como Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are processed almost instantly without fees from the bookmaker. Withdrawals are also straightforward, with requests handled quickly, from 15 minutes to a few hours depending on the chosen method. For example, transfers to a cryptocurrency wallet are almost immediate, while bank cards may take slightly longer."}',
             'value_es' => '{"0":"Los depósitos se procesan casi al instante sin comisiones por parte del operador. Los retiros también son sencillos, con solicitudes que se gestionan rápidamente, desde 15 minutos hasta unas pocas horas según el método elegido. Por ejemplo, las transferencias a una billetera de criptomonedas son casi inmediatas, mientras que las tarjetas bancarias pueden tardar un poco más."}',
             'value_fr' => '{"0":"Les dépôts sont traités presque instantanément, sans frais de la part du bookmaker. Les retraits sont également simples, les demandes étant traitées rapidement, de 15 minutes à quelques heures selon la méthode choisie. Par exemple, les transferts vers un portefeuille de cryptomonnaies sont quasi instantanés, tandis que les cartes bancaires peuvent nécessiter un peu plus de temps."}',
             'value_pt' => '{"0":"Os depósitos são processados quase que instantaneamente, sem taxas do bookmaker. Os saques também são simples, com solicitações processadas rapidamente, de 15 minutos a algumas horas, dependendo do método escolhido. Por exemplo, transferências para uma carteira de criptomoedas são quase imediatas, enquanto cartões bancários podem levar um pouco mais de tempo."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET customer support operates around the clock. You can reach them via the online chat on the website, by email, or by calling the hotline."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 22BET funciona las 24 horas. Se puede contactar a través del chat en línea en el sitio web, por correo electrónico o llamando a la línea directa."}',
             'value_fr' => '{"0":"Le service client de 22BET est disponible 24 heures sur 24. Vous pouvez les contacter via le chat en ligne sur le site, par e-mail ou en appelant la ligne directe."}',
             'value_pt' => '{"0":"O suporte ao cliente da 22BET funciona 24 horas por dia. É possível entrar em contato por meio do chat online no site, por e-mail ou ligando para a linha direta."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 38
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports and betting markets",
                                 "1":"User-friendly interface",
                                 "2":"Cryptocurrency support",
                                 "3":"24/7 customer support",
                                 "4":"Expanded live casino"},
                             "1":
                                {"0":"Lack of a license from European regulators",
                                 "1":"Not all features are available in some countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de deportes y mercados de apuestas",
                                 "1":"Interfaz fácil de usar",
                                 "2":"Soporte de criptomonedas",
                                 "3":"Atención al cliente 24/7",
                                 "4":"Casino en vivo ampliado"},
                             "1":
                                {"0":"Falta de licencia de reguladores europeos",
                                 "1":"No todas las funciones están disponibles en algunos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de sports et de marchés de paris",
                                 "1":"Interface conviviale",
                                 "2":"Support des cryptomonnaies",
                                 "3":"Service client 24h/24 et 7j/7",
                                 "4":"Casino en direct étendu"},
                             "1":
                                {"0":"Absence de licence des régulateurs européens",
                                 "1":"Toutes les fonctionnalités ne sont pas disponibles dans certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de esportes e mercados de apostas",
                                 "1":"Interface amigável",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Atendimento ao cliente 24/7",
                                 "4":"Cassino ao vivo expandido"},
                             "1":
                                {"0":"Falta de licença de reguladores europeus",
                                 "1":"Nem todos os recursos estão disponíveis em alguns países"}
                             }',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 39
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 40
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 41
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the app can be downloaded for Android and iOS from the official website."}',
             'value_es' => '{"0":"Sí, la aplicación se puede descargar para Android e iOS desde el sitio web oficial."}',
             'value_fr' => '{"0":"Oui, l’application peut être téléchargée pour Android et iOS depuis le site officiel."}',
             'value_pt' => '{"0":"Sim, o aplicativo pode ser baixado para Android e iOS no site oficial."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 42
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How quickly are winnings credited?"}',
             'value_es' => '{"0":"¿Qué tan rápido se acreditan las ganancias?"}',
             'value_fr' => '{"0":"À quelle vitesse les gains sont-ils crédités ?"}',
             'value_pt' => '{"0":"Com que rapidez os ganhos são creditados?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 43
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Usually within a few minutes after the withdrawal request is confirmed."}',
             'value_es' => '{"0":"Por lo general, dentro de unos minutos después de que se confirme la solicitud de retiro."}',
             'value_fr' => '{"0":"Généralement en quelques minutes après la confirmation de la demande de retrait."}',
             'value_pt' => '{"0":"Normalmente dentro de alguns minutos após a confirmação do pedido de saque."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 44
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Are live bets available on mobile devices?"}',
             'value_es' => '{"0":"¿Están disponibles las apuestas en vivo en dispositivos móviles?"}',
             'value_fr' => '{"0":"Les paris en direct sont-ils disponibles sur les appareils mobiles ?"}',
             'value_pt' => '{"0":"As apostas ao vivo estão disponíveis em dispositivos móveis?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 45
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 22BET mobile apps and the mobile version of the website support live bets and live event streaming."}',
             'value_es' => '{"0":"Sí, las aplicaciones móviles de 22BET y la versión móvil del sitio web permiten apuestas en vivo y transmisiones en directo de los eventos."}',
             'value_fr' => '{"0":"Oui, les applications mobiles 22BET et la version mobile du site prennent en charge les paris en direct et la diffusion en direct des événements."}',
             'value_pt' => '{"0":"Sim, os aplicativos móveis da 22BET e a versão móvel do site suportam apostas ao vivo e transmissões de eventos em tempo real."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 46
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to install additional software for live betting?"}',
             'value_es' => '{"0":"¿Es necesario instalar software adicional para apuestas en vivo?"}',
             'value_fr' => '{"0":"Faut-il installer un logiciel supplémentaire pour les paris en direct ?"}',
             'value_pt' => '{"0":"É necessário instalar software adicional para apostas ao vivo?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 47
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"No, all live bets can be placed without additional programs, you just need a stable internet connection and a modern browser or mobile app."}',
             'value_es' => '{"0":"No, todas las apuestas en vivo se pueden realizar sin programas adicionales, solo se necesita una conexión a internet estable y un navegador moderno o la aplicación móvil."}',
             'value_fr' => '{"0":"Non, tous les paris en direct peuvent être effectués sans programmes supplémentaires, il suffit d’avoir une connexion Internet stable et un navigateur moderne ou l’application mobile."}',
             'value_pt' => '{"0":"Não, todas as apostas ao vivo podem ser feitas sem programas adicionais, basta ter uma conexão de internet estável e um navegador moderno ou o aplicativo móvel."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 48
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How quickly is identity verification processed?"}',
             'value_es' => '{"0":"¿Qué tan rápido se realiza la verificación de identidad?"}',
             'value_fr' => '{"0":"À quelle vitesse se déroule la vérification d’identité ?"}',
             'value_pt' => '{"0":"Com que rapidez é processada a verificação de identidade?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 49
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Verification usually takes from a few hours up to one business day, depending on the workload of customer support."}',
             'value_es' => '{"0":"La verificación generalmente toma desde unas pocas horas hasta un día hábil, dependiendo de la carga de trabajo del servicio de atención al cliente."}',
             'value_fr' => '{"0":"La vérification prend généralement de quelques heures à un jour ouvrable, selon la charge de travail du service client."}',
             'value_pt' => '{"0":"A verificação geralmente leva de algumas horas até um dia útil, dependendo da carga de trabalho do suporte ao cliente."}',
             'order' => 49
            ]
        );
    }
}
