<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet is an international online platform for sports betting and casino games that has gained popularity among players due to its wide selection of sporting events. The company primarily operates in Asian markets, India, and CIS countries."}',
             'value_es' => '{"0":"4rabet es una plataforma internacional en línea de apuestas deportivas y juegos de casino que ha ganado popularidad entre los jugadores gracias a su amplia selección de eventos deportivos. La compañía opera principalmente en los mercados de Asia, India y los países de la CEI."}',
             'value_fr' => '{"0":"4rabet est une plateforme en ligne internationale de paris sportifs et de jeux de casino qui a gagné en popularité auprès des joueurs grâce à sa large sélection d’événements sportifs. La société opère principalement sur les marchés asiatiques, en Inde et dans les pays de la CEI."}',
             'value_pt' => '{"0":"4rabet é uma plataforma internacional online de apostas esportivas e jogos de cassino que ganhou popularidade entre os jogadores devido à sua ampla seleção de eventos esportivos. A empresa opera principalmente nos mercados da Ásia, Índia e países da CEI."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet bookmaker allows users to place bets on hundreds of events across various sports, from football and cricket to esports. In addition to the sports betting section, the site also features a casino section where players can enjoy thousands of games."}',
             'value_es' => '{"0":"La casa de apuestas 4rabet permite a los usuarios realizar apuestas en cientos de eventos de diversos deportes, desde fútbol y críquet hasta deportes electrónicos. Además de la sección de apuestas deportivas, el sitio cuenta con una sección de casino donde se pueden jugar miles de juegos."}',
             'value_fr' => '{"0":"Le bookmaker 4rabet permet aux utilisateurs de parier sur des centaines d’événements dans différents sports, du football et du cricket à l’esport. En plus de la section paris sportifs, le site propose également une section casino avec des milliers de jeux."}',
             'value_pt' => '{"0":"A casa de apostas 4rabet permite que os usuários façam apostas em centenas de eventos em diversos esportes, do futebol e críquete aos esports. Além da seção de apostas esportivas, o site também conta com uma seção de cassino, onde é possível jogar milhares de jogos."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The company pays special attention to service localization: users can change the interface language, choose the account currency, and use different payment methods depending on the region."}',
             'value_es' => '{"0":"La empresa presta especial atención a la localización del servicio: los usuarios pueden cambiar el idioma de la interfaz, elegir la moneda de la cuenta y utilizar diferentes métodos de pago según la región."}',
             'value_fr' => '{"0":"La société accorde une attention particulière à la localisation du service : les utilisateurs peuvent changer la langue de l’interface, choisir la devise du compte et utiliser différents moyens de paiement selon la région."}',
             'value_pt' => '{"0":"A empresa dedica atenção especial à localização do serviço: os usuários podem alterar o idioma da interface, escolher a moeda da conta e usar diferentes métodos de pagamento dependendo da região."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet operates under a license issued by Curaçao, which is a common standard among international bookmakers and online casinos. This license confirms that the company complies with key requirements for financial transparency and player protection."}',
             'value_es' => '{"0":"4rabet opera bajo una licencia emitida por Curazao, que es un estándar común entre las casas de apuestas internacionales y los casinos en línea. Esta licencia confirma que la empresa cumple con los requisitos clave de transparencia financiera y protección de los jugadores."}',
             'value_fr' => '{"0":"4rabet fonctionne sous une licence délivrée par Curaçao, ce qui est une norme courante parmi les bookmakers internationaux et les casinos en ligne. Cette licence confirme que la société respecte les principales exigences en matière de transparence financière et de protection des joueurs."}',
             'value_pt' => '{"0":"4rabet opera sob uma licença emitida por Curaçao, que é um padrão comum entre casas de apostas internacionais e cassinos online. Esta licença confirma que a empresa cumpre os principais requisitos de transparência financeira e proteção dos jogadores."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For the protection of personal data, modern SSL encryption is used, which prevents third parties from accessing information during registration, authorization, or financial transactions."}',
             'value_es' => '{"0":"Para proteger los datos personales se utiliza un cifrado SSL moderno, que impide que terceros accedan a la información durante el registro, la autorización o las transacciones financieras."}',
             'value_fr' => '{"0":"Pour la protection des données personnelles, un cryptage SSL moderne est utilisé, empêchant les tiers d’accéder aux informations lors de l’inscription, de l’autorisation ou des transactions financières."}',
             'value_pt' => '{"0":"Para a proteção de dados pessoais, é utilizado um moderno sistema de criptografia SSL, que impede que terceiros acessem informações durante o registro, a autorização ou as transações financeiras."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers players a wide range of options for betting on a variety of sports. The platform features matches in football, basketball, tennis, hockey, cricket, volleyball, boxing, MMA, and esports. For each match, dozens of betting options are available, including not only standard bets on the winner, totals, or handicaps but also bets on the number of corners, exact score, goal scorer, or the time of the goal."}',
             'value_es' => '{"0":"4rabet ofrece a los jugadores una amplia variedad de opciones para apostar en distintos deportes. La plataforma incluye partidos de fútbol, baloncesto, tenis, hockey, críquet, voleibol, boxeo, MMA y deportes electrónicos. Para cada partido, hay disponibles decenas de opciones de apuesta, que incluyen no solo apuestas estándar sobre el ganador, totales o hándicaps, sino también apuestas sobre el número de córners, el marcador exacto, el autor del gol o el momento del gol."}',
             'value_fr' => '{"0":"4rabet propose aux joueurs un large choix d’options pour parier sur différents sports. La plateforme propose des matchs de football, de basket-ball, de tennis, de hockey, de cricket, de volley-ball, de boxe, de MMA et d’esports. Pour chaque match, des dizaines d’options de paris sont disponibles, incluant non seulement les paris standard sur le vainqueur, les totaux ou les handicaps, mais aussi les paris sur le nombre de corners, le score exact, le buteur ou l’heure du but."}',
             'value_pt' => '{"0":"A 4rabet oferece aos jogadores uma ampla variedade de opções para apostar em diversos esportes. A plataforma inclui partidas de futebol, basquete, tênis, hóquei, críquete, vôlei, boxe, MMA e esports. Para cada partida, há dezenas de opções de aposta disponíveis, incluindo não apenas apostas padrão sobre o vencedor, totais ou handicaps, mas também apostas sobre o número de escanteios, placar exato, autor do gol ou horário do gol."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For the most popular matches, 4rabet expands the selection of markets, adding additional scenarios. Players can create accumulators from multiple events, combining different types of bets within a single slip. The platform actively supports not only traditional sports tournaments but also modern directions, including esports and virtual sports."}',
             'value_es' => '{"0":"En los partidos más populares, 4rabet amplía la selección de mercados, añadiendo escenarios adicionales. Los jugadores pueden crear apuestas combinadas de varios eventos, combinando distintos tipos de apuestas en un solo cupón. La plataforma apoya activamente no solo los torneos deportivos tradicionales, sino también modalidades modernas como los deportes electrónicos y los deportes virtuales."}',
             'value_fr' => '{"0":"Pour les matchs les plus populaires, 4rabet élargit la sélection des marchés en ajoutant des scénarios supplémentaires. Les joueurs peuvent créer des accumulations à partir de plusieurs événements, en combinant différents types de paris dans un seul ticket. La plateforme soutient activement non seulement les tournois sportifs traditionnels, mais aussi les disciplines modernes, notamment les esports et les sports virtuels."}',
             'value_pt' => '{"0":"Nos jogos mais populares, a 4rabet amplia a seleção de mercados, adicionando cenários adicionais. Os jogadores podem criar apostas combinadas de vários eventos, combinando diferentes tipos de apostas em um único cupom. A plataforma apoia ativamente não apenas torneios esportivos tradicionais, mas também modalidades modernas, incluindo esports e esportes virtuais."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In the sports betting section of 4rabet, it is quite convenient to find the desired events and quickly place bets. The interface is intuitive, so even new players can easily navigate the sections and menus."}',
             'value_es' => '{"0":"En la sección de apuestas deportivas de 4rabet, es bastante cómodo encontrar los eventos deseados y realizar apuestas rápidamente. La interfaz es intuitiva, por lo que incluso los jugadores nuevos pueden navegar fácilmente por las secciones y menús."}',
             'value_fr' => '{"0":"Dans la section paris sportifs de 4rabet, il est très pratique de trouver les événements souhaités et de placer rapidement ses paris. L’interface est intuitive, ce qui permet même aux nouveaux joueurs de naviguer facilement dans les sections et menus."}',
             'value_pt' => '{"0":"Na seção de apostas esportivas da 4rabet, é bastante conveniente encontrar os eventos desejados e fazer apostas rapidamente. A interface é intuitiva, portanto mesmo os jogadores novos conseguem navegar facilmente pelas seções e menus."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Players can bet on football championships in Europe, Asia, and South America, NBA games, ATP and WTA tournaments, hockey, baseball, handball competitions, as well as cricket events. 4rabet also offers esports bets, featuring disciplines such as Dota 2, CS2, Valorant, and FIFA."}',
             'value_es' => '{"0":"Los jugadores pueden apostar en campeonatos de fútbol en Europa, Asia y Sudamérica, partidos de la NBA, torneos ATP y WTA, competiciones de hockey, béisbol, balonmano, así como eventos de críquet. 4rabet también ofrece apuestas en esports, con disciplinas como Dota 2, CS2, Valorant y FIFA."}',
             'value_fr' => '{"0":"Les joueurs peuvent parier sur les championnats de football en Europe, en Asie et en Amérique du Sud, sur les matchs de la NBA, les tournois ATP et WTA, les compétitions de hockey, de baseball, de handball, ainsi que sur les événements de cricket. 4rabet propose également des paris sur l’esport, avec des disciplines telles que Dota 2, CS2, Valorant et FIFA."}',
             'value_pt' => '{"0":"Os jogadores podem apostar em campeonatos de futebol na Europa, Ásia e América do Sul, partidas da NBA, torneios ATP e WTA, competições de hóquei, beisebol, handebol, assim como eventos de críquete. A 4rabet também oferece apostas em esports, com disciplinas como Dota 2, CS2, Valorant e FIFA."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"When creating a bet slip, users can choose the bet format — single, accumulator, or system. For convenience, filters are provided to sort events by tournament, country, or match start time."}',
             'value_es' => '{"0":"Al crear un cupón de apuestas, los usuarios pueden elegir el formato de apuesta: simple, combinada o sistema. Para mayor comodidad, se proporcionan filtros que permiten ordenar los eventos por torneo, país o hora de inicio del partido."}',
             'value_fr' => '{"0":"Lors de la création d’un coupon de pari, les utilisateurs peuvent choisir le format du pari — simple, combiné ou système. Pour plus de commodité, des filtres permettent de trier les événements par tournoi, pays ou heure de début du match."}',
             'value_pt' => '{"0":"Ao criar um cupom de aposta, os usuários podem escolher o formato da aposta — simples, combinada ou sistema. Para maior comodidade, filtros permitem organizar os eventos por torneio, país ou horário de início da partida."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The casino section on 4rabet features thousands of games from leading developers, including slots and video slots. In addition to slots, the casino offers a wide selection of table games such as roulette, blackjack, baccarat, and poker. In the Live Casino section, professional dealers hosting games in real time create the atmosphere of a real club."}',
             'value_es' => '{"0":"La sección de casino en 4rabet cuenta con miles de juegos de desarrolladores líderes, incluidos tragamonedas y video tragamonedas. Además de las tragamonedas, el casino ofrece una amplia variedad de juegos de mesa como ruleta, blackjack, baccarat y póker. En la sección de Live Casino, los crupieres profesionales que dirigen los juegos en vivo crean la sensación de un club real."}',
             'value_fr' => '{"0":"La section casino de 4rabet propose des milliers de jeux de développeurs renommés, y compris des machines à sous et des vidéo-slots. En plus des machines à sous, le casino offre une large sélection de jeux de table tels que la roulette, le blackjack, le baccarat et le poker. Dans la section Live Casino, des croupiers professionnels animant les jeux en direct recréent l’ambiance d’un véritable club."}',
             'value_pt' => '{"0":"A seção de cassino na 4rabet apresenta milhares de jogos de desenvolvedores líderes, incluindo slots e video slots. Além dos slots, o cassino oferece uma grande variedade de jogos de mesa, como roleta, blackjack, bacará e pôquer. Na seção Live Casino, dealers profissionais conduzem os jogos ao vivo, criando a sensação de um clube real."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet platform constantly updates its game selection and adds new titles. All games are optimized for mobile devices. Additionally, players can use bonuses or participate in tournaments to increase their chances of winning."}',
             'value_es' => '{"0":"La plataforma 4rabet actualiza constantemente su oferta de juegos y añade nuevos títulos. Todos los juegos están adaptados para dispositivos móviles. Además, los jugadores pueden aprovechar bonos o participar en torneos para aumentar sus posibilidades de ganar."}',
             'value_fr' => '{"0":"La plateforme 4rabet met régulièrement à jour son catalogue et ajoute de nouveaux jeux. Tous les jeux sont adaptés aux appareils mobiles. De plus, les joueurs peuvent utiliser des bonus ou participer à des tournois pour augmenter leurs chances de gain."}',
             'value_pt' => '{"0":"A plataforma 4rabet atualiza constantemente seu catálogo de jogos e adiciona novos títulos. Todos os jogos são adaptados para dispositivos móveis. Além disso, os jogadores podem utilizar bônus ou participar de torneios para aumentar suas chances de ganhar."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet maintains high odds for both top sporting events and less popular matches. For football events, such as English Premier League or Champions League matches, odds on favorites usually range between 1.75–1.85, while for underdogs they are 4.20–5.60 and higher. For totals or handicaps, odds mostly stay around 1.95."}',
             'value_es' => '{"0":"4rabet mantiene altas cuotas tanto para los eventos deportivos más importantes como para los partidos menos populares. Para eventos de fútbol, como partidos de la Premier League inglesa o la Liga de Campeones, las cuotas para los favoritos suelen estar entre 1.75 y 1.85, mientras que para los equipos menos favoritos oscilan entre 4.20 y 5.60 o más. Para totales o hándicaps, las cuotas se mantienen principalmente alrededor de 1.95."}',
             'value_fr' => '{"0":"4rabet propose des cotes élevées pour les événements sportifs majeurs ainsi que pour les matchs moins populaires. Pour les matchs de football, tels que la Premier League anglaise ou la Ligue des champions, les cotes sur les favoris se situent généralement entre 1,75 et 1,85, tandis que pour les outsiders, elles vont de 4,20 à 5,60 et plus. Pour les totaux ou les handicaps, les cotes restent généralement autour de 1,95."}',
             'value_pt' => '{"0":"A 4rabet mantém altos níveis de odds tanto para os principais eventos esportivos quanto para partidas menos populares. Para eventos de futebol, como partidas da Premier League inglesa ou da Liga dos Campeões, as odds para os favoritos geralmente variam entre 1,75–1,85, enquanto para os azarões ficam em 4,20–5,60 ou mais. Para totais ou handicaps, as odds geralmente se mantêm em torno de 1,95."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"For tennis events with closely ranked players, the bookmaker often offers odds around 1.92. In basketball and cricket, for NBA or IPL matches, odds can be seen in the range of 1.88–1.90."}',
             'value_es' => '{"0":"Para eventos de tenis entre jugadores de ranking cercano, la casa de apuestas suele ofrecer cuotas alrededor de 1.92. En baloncesto y críquet, para partidos de la NBA o IPL, se pueden ver cuotas en el rango de 1.88–1.90."}',
             'value_fr' => '{"0":"Pour les matchs de tennis entre joueurs de classement proche, le bookmaker propose souvent des cotes autour de 1,92. Pour le basket-ball et le cricket, lors des matchs NBA ou IPL, les cotes se situent généralement entre 1,88 et 1,90."}',
             'value_pt' => '{"0":"Para partidas de tênis entre jogadores com ranking próximo, a casa de apostas costuma oferecer odds em torno de 1,92. No basquete e críquete, para partidas da NBA ou IPL, as odds podem ser vistas na faixa de 1,88–1,90."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Odds during live betting do not remain fixed but change in real time depending on the course of the game. This allows players to react instantly to changes in the situation, for example, by placing a bet on the next goal in a football match or on the winner of a game during a tennis set."}',
             'value_es' => '{"0":"Las cuotas durante las apuestas en vivo no permanecen fijas, sino que cambian en tiempo real según el desarrollo del juego. Esto permite a los jugadores reaccionar al instante a los cambios en la situación, por ejemplo, apostando al próximo gol en un partido de fútbol o al ganador de un juego durante un set de tenis."}',
             'value_fr' => '{"0":"Les cotes lors des paris en direct ne restent pas fixes, elles changent en temps réel selon le déroulement du match. Cela permet aux joueurs de réagir instantanément aux changements de situation, par exemple en pariant sur le prochain but dans un match de football ou sur le vainqueur d’un jeu pendant un set de tennis."}',
             'value_pt' => '{"0":"As odds durante as apostas ao vivo não permanecem fixas, mas mudam em tempo real de acordo com o andamento do jogo. Isso permite que os jogadores reajam instantaneamente às mudanças na situação, por exemplo, fazendo uma aposta no próximo gol em uma partida de futebol ou no vencedor de um game durante um set de tênis."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Although the platform does not provide live broadcasts, there is interactive graphics showing key events — attacks, free kicks, corners, yellow cards, or the score in the set. Bets can be placed in just a few seconds."}',
             'value_es' => '{"0":"Aunque la plataforma no ofrece transmisiones en directo, hay gráficos interactivos que muestran los eventos clave: ataques, tiros libres, córners, tarjetas amarillas o el marcador del set. Las apuestas se pueden realizar en solo unos segundos."}',
             'value_fr' => '{"0":"Bien que la plateforme ne propose pas de diffusion en direct, des graphiques interactifs montrent les événements clés — attaques, coups francs, corners, cartons jaunes ou score du set. Les paris peuvent être placés en quelques secondes seulement."}',
             'value_pt' => '{"0":"Embora a plataforma não forneça transmissões ao vivo, há gráficos interativos que mostram os principais eventos — ataques, cobranças de falta, escanteios, cartões amarelos ou o placar do set. As apostas podem ser feitas em apenas alguns segundos."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 26
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet pays attention to user safety not only in terms of financial transactions but also in responsible gaming. The platform provides tools that allow players to control their own activity. Users can set limits on maximum bets or deposit amounts, and restrict the duration of gaming sessions."}',
             'value_es' => '{"0":"4rabet presta atención a la seguridad de los usuarios no solo en términos de transacciones financieras, sino también en el juego responsable. La plataforma ofrece herramientas que permiten a los jugadores controlar su propia actividad. Se pueden establecer límites en las apuestas máximas o en los depósitos, y restringir la duración de las sesiones de juego."}',
             'value_fr' => '{"0":"4rabet accorde de l’importance à la sécurité des utilisateurs non seulement en ce qui concerne les transactions financières, mais aussi dans le cadre du jeu responsable. La plateforme propose des outils permettant aux joueurs de contrôler leur propre activité. Il est possible de définir des limites sur les mises maximales ou les dépôts, ainsi que de restreindre la durée des sessions de jeu."}',
             'value_pt' => '{"0":"A 4rabet dá atenção à segurança dos usuários não apenas em relação às transações financeiras, mas também ao jogo responsável. A plataforma oferece ferramentas que permitem aos jogadores controlar sua própria atividade. É possível definir limites para apostas máximas ou depósitos, além de restringir a duração das sessões de jogo."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"There is also the option for temporary or permanent self-exclusion from the platform. This feature allows players to take a break and return to gaming only after a certain period."}',
             'value_es' => '{"0":"También existe la opción de autoexclusión temporal o permanente de la plataforma. Esta función permite tomarse un descanso y regresar al juego solo después de un cierto período."}',
             'value_fr' => '{"0":"Il existe également la possibilité de s’auto-exclure temporairement ou définitivement de la plateforme. Cette fonction permet de faire une pause et de revenir au jeu uniquement après une certaine période."}',
             'value_pt' => '{"0":"Também existe a opção de autoexclusão temporária ou permanente da plataforma. Esse recurso permite fazer uma pausa e retornar ao jogo apenas após um determinado período."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The 4rabet platform offers a wide range of options for depositing and withdrawing funds, making it convenient for users from different regions. Players can use Visa and Mastercard bank cards, UPI, PayTM, GPay, IMPS, AstroPay, as well as cryptocurrencies, including Bitcoin, Ethereum, and USDT."}',
             'value_es' => '{"0":"La plataforma 4rabet ofrece una amplia variedad de opciones para depositar y retirar fondos, lo que la hace conveniente para usuarios de diferentes regiones. Los jugadores pueden usar tarjetas bancarias Visa y Mastercard, UPI, PayTM, GPay, IMPS, AstroPay, así como criptomonedas, incluyendo Bitcoin, Ethereum y USDT."}',
             'value_fr' => '{"0":"La plateforme 4rabet propose un large éventail d’options pour déposer et retirer des fonds, ce qui la rend pratique pour les utilisateurs de différentes régions. Les joueurs peuvent utiliser des cartes bancaires Visa et Mastercard, UPI, PayTM, GPay, IMPS, AstroPay, ainsi que des crypto-monnaies, y compris Bitcoin, Ethereum et USDT."}',
             'value_pt' => '{"0":"A plataforma 4rabet oferece uma grande variedade de métodos para depósitos e saques, tornando-a conveniente para usuários de diferentes regiões. Os jogadores podem usar cartões bancários Visa e Mastercard, UPI, PayTM, GPay, IMPS, AstroPay, assim como criptomoedas, incluindo Bitcoin, Ethereum e USDT."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Account deposits are almost instant in most cases, regardless of the chosen method. For withdrawals, the platform ensures relatively short processing times: e-wallets and cryptocurrencies are processed within a few hours, while bank transfers may take up to one business day."}',
             'value_es' => '{"0":"Los depósitos en la cuenta se realizan casi al instante en la mayoría de los casos, sin importar el método elegido. Para los retiros, la plataforma garantiza tiempos de procesamiento relativamente cortos: los monederos electrónicos y las criptomonedas se procesan en unas pocas horas, mientras que las transferencias bancarias pueden tardar hasta un día hábil."}',
             'value_fr' => '{"0":"Les dépôts sur le compte sont presque instantanés dans la plupart des cas, quel que soit le mode choisi. Pour les retraits, la plateforme garantit des délais de traitement relativement courts : les portefeuilles électroniques et les crypto-monnaies sont traités en quelques heures, tandis que les virements bancaires peuvent prendre jusqu’à un jour ouvrable."}',
             'value_pt' => '{"0":"Os depósitos na conta são quase instantâneos na maioria dos casos, independentemente do método escolhido. Para saques, a plataforma garante prazos de processamento relativamente curtos: carteiras eletrônicas e criptomoedas são processadas em algumas horas, enquanto transferências bancárias podem levar até um dia útil."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"It is also possible to set up multiple methods simultaneously, for example, keeping the main account on a card while using an e-wallet or cryptocurrency for bonus funds."}',
             'value_es' => '{"0":"También es posible configurar varios métodos al mismo tiempo, por ejemplo, mantener la cuenta principal en una tarjeta y usar un monedero electrónico o criptomoneda para los fondos de bonificación."}',
             'value_fr' => '{"0":"Il est également possible de configurer plusieurs méthodes simultanément, par exemple en conservant le compte principal sur une carte et en utilisant un portefeuille électronique ou une crypto-monnaie pour les fonds bonus."}',
             'value_pt' => '{"0":"Também é possível configurar vários métodos simultaneamente, por exemplo, mantendo a conta principal no cartão e usando uma carteira eletrônica ou criptomoeda para fundos de bônus."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"You can contact customer support via the chat on the website and the email address provided below."}',
             'value_es' => '{"0":"Puedes contactar con el servicio de atención al cliente a través del chat en el sitio web y del correo electrónico que se indica a continuación."}',
             'value_fr' => '{"0":"Vous pouvez contacter le service client via le chat sur le site et l’adresse e-mail indiquée ci-dessous."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte ao cliente através do chat no site e do e-mail fornecido abaixo."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of sports tournaments and markets",
                                 "1":"Extensive library of casino games",
                                 "2":"Many payment methods",
                                 "3":"Presence of responsible gaming features"},
                             "1":
                                {"0":"Withdrawals are sometimes delayed",
                                 "1":"No video streaming"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de torneos deportivos y mercados",
                                 "1":"Amplia biblioteca de juegos de casino",
                                 "2":"Muchos métodos de pago",
                                 "3":"Disponibilidad de funciones de juego responsable"},
                             "1":
                                {"0":"Los retiros a veces se retrasan",
                                 "1":"No hay transmisión de video"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre de tournois sportifs et de marchés",
                                 "1":"Large bibliothèque de jeux de casino",
                                 "2":"De nombreux moyens de paiement",
                                 "3":"Présence de fonctionnalités de jeu responsable"},
                             "1":
                                {"0":"Les retraits sont parfois retardés",
                                 "1":"Pas de diffusion vidéo"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande número de torneios esportivos e mercados",
                                 "1":"Ampla biblioteca de jogos de cassino",
                                 "2":"Muitos métodos de pagamento",
                                 "3":"Presença de recursos de jogo responsável"},
                             "1":
                                {"0":"Os saques às vezes são atrasados",
                                 "1":"Sem transmissões de vídeo"}
                             }',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 38
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4rabet"}',
                'value_fr' => '{"0":"FAQ de 4rabet"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4rabet"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 39
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is 4rabet legal in my country?"}',
             'value_es' => '{"0":"¿Es 4rabet legal en mi país?"}',
             'value_fr' => '{"0":"4rabet est-il légal dans mon pays ?"}',
             'value_pt' => '{"0":"O 4rabet é legal no meu país?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 40
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"It depends on local laws. 4rabet operates under a Curaçao license, but online gambling is prohibited in some countries."}',
             'value_es' => '{"0":"Depende de las leyes locales. 4rabet opera bajo una licencia de Curazao, pero en algunos países los juegos de azar en línea están prohibidos."}',
             'value_fr' => '{"0":"Cela dépend des lois locales. 4rabet fonctionne sous licence de Curaçao, mais les jeux d’argent en ligne sont interdits dans certains pays."}',
             'value_pt' => '{"0":"Depende das leis locais. O 4rabet opera com licença de Curaçao, mas os jogos de azar online são proibidos em alguns países."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 41
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"How do I verify my account and how long does it take?"}',
             'value_es' => '{"0":"¿Cómo verificar mi cuenta y cuánto tiempo tarda?"}',
             'value_fr' => '{"0":"Comment vérifier mon compte et combien de temps cela prend-il ?"}',
             'value_pt' => '{"0":"Como verificar minha conta e quanto tempo isso leva?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 42
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Usually, you need to provide documents (passport, ID) and proof of address. Processing time can range from a few hours to several days, depending on the workload of customer support and the extent of the checks."}',
             'value_es' => '{"0":"Normalmente, se deben proporcionar documentos (pasaporte, identificación) y comprobante de dirección. El tiempo de procesamiento puede variar desde unas pocas horas hasta varios días, según la carga de trabajo del servicio de atención al cliente y el alcance de las verificaciones."}',
             'value_fr' => '{"0":"En général, il faut fournir des documents (passeport, pièce d’identité) et une preuve de domicile. Le traitement peut prendre de quelques heures à plusieurs jours, selon la charge du service client et l’étendue des vérifications."}',
             'value_pt' => '{"0":"Normalmente, é necessário fornecer documentos (passaporte, identidade) e comprovante de endereço. O tempo de processamento pode variar de algumas horas a vários dias, dependendo da carga de trabalho do suporte ao cliente e da extensão das verificações."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 43
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Is the Cash Out feature available?"}',
             'value_es' => '{"0":"¿Está disponible la función de Cash Out?"}',
             'value_fr' => '{"0":"La fonction Cash Out est-elle disponible ?"}',
             'value_pt' => '{"0":"A função Cash Out está disponível?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 44
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The Cash Out feature is not available."}',
             'value_es' => '{"0":"La función de Cash Out no está disponible."}',
             'value_fr' => '{"0":"La fonction Cash Out n’est pas disponible."}',
             'value_pt' => '{"0":"A função Cash Out não está disponível."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 45
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use cryptocurrencies?"}',
             'value_es' => '{"0":"¿Se pueden usar criptomonedas?"}',
             'value_fr' => '{"0":"Peut-on utiliser des crypto-monnaies ?"}',
             'value_pt' => '{"0":"É possível usar criptomoedas?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 46
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, in many regions 4rabet supports deposits and withdrawals via Bitcoin, Ethereum, Tether, and other cryptocurrencies."}',
             'value_es' => '{"0":"Sí, en muchas regiones 4rabet admite depósitos y retiros a través de Bitcoin, Ethereum, Tether y otras criptomonedas."}',
             'value_fr' => '{"0":"Oui, dans de nombreuses régions, 4rabet prend en charge les dépôts et retraits via Bitcoin, Ethereum, Tether et d’autres crypto-monnaies."}',
             'value_pt' => '{"0":"Sim, em muitas regiões, a 4rabet suporta depósitos e saques via Bitcoin, Ethereum, Tether e outras criptomoedas."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 47
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if I forgot my password or cannot log in?"}',
             'value_es' => '{"0":"¿Qué debo hacer si olvidé mi contraseña o no puedo iniciar sesión?"}',
             'value_fr' => '{"0":"Que faire si j’ai oublié mon mot de passe ou si je ne peux pas me connecter ?"}',
             'value_pt' => '{"0":"O que fazer se eu esquecer minha senha ou não conseguir entrar?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 48
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"On the login page, you can use the password recovery feature by entering the email or phone number linked to your account. If problems persist, you can always contact customer support."}',
             'value_es' => '{"0":"En la página de inicio de sesión, puedes usar la función de recuperación de contraseña ingresando el correo electrónico o el número de teléfono vinculado a tu cuenta. Si persisten los problemas, siempre puedes contactar al servicio de atención al cliente."}',
             'value_fr' => '{"0":"Sur la page de connexion, vous pouvez utiliser la fonction de récupération de mot de passe en indiquant l’e-mail ou le numéro de téléphone associé à votre compte. En cas de problème, vous pouvez toujours contacter le service client."}',
             'value_pt' => '{"0":"Na página de login, você pode usar a função de recuperação de senha, informando o e-mail ou telefone vinculado à sua conta. Em caso de problemas, você sempre pode entrar em contato com o suporte ao cliente."}',
             'order' => 48
            ]
        );
    }
}
