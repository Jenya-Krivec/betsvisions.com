<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz is an international betting platform that has been operating since 2020, combining sports betting and casino sections. Players can place bets on thousands of sports events daily, make live bets, and also play in the casino, which offers slots from many global providers."}',
             'value_es' => '{"0":"888Starz es una plataforma de apuestas internacional que opera desde 2020 y combina secciones de apuestas deportivas y casino. Los jugadores pueden apostar en miles de eventos deportivos diariamente, realizar apuestas en vivo y también jugar en el casino, que ofrece tragamonedas de muchos proveedores internacionales."}',
             'value_fr' => '{"0":"888Starz est une plateforme de paris internationale qui fonctionne depuis 2020 et combine les sections de paris sportifs et de casino. Les joueurs peuvent parier sur des milliers d’événements sportifs chaque jour, placer des paris en direct et également jouer au casino, qui propose des machines à sous de nombreux fournisseurs mondiaux."}',
             'value_pt' => '{"0":"888Starz é uma plataforma de apostas internacional que opera desde 2020 e combina seções de apostas esportivas e cassino. Os jogadores podem apostar em milhares de eventos esportivos diariamente, fazer apostas ao vivo e também jogar no cassino, que oferece slots de vários provedores globais."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The site targets an international audience and supports dozens of languages, including English, French, Spanish, and Portuguese. The platform also accepts multiple currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"El sitio está orientado a una audiencia internacional y admite decenas de idiomas, incluidos inglés, francés, español y portugués. La plataforma también acepta múltiples monedas, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"Le site s’adresse à un public international et prend en charge des dizaines de langues, dont l’anglais, le français, l’espagnol et le portugais. La plateforme accepte également de nombreuses devises, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"O site é voltado para um público internacional e suporta dezenas de idiomas, incluindo inglês, francês, espanhol e português. A plataforma também aceita várias moedas, incluindo criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz operates under a license issued by Curaçao, one of the most common and recognized international regulators. This license ensures that the platform adheres to standards of fair play, financial transparency, and player data protection. All transactions on the site, including deposits and withdrawals, are conducted through encrypted connections using modern SSL protocols."}',
             'value_es' => '{"0":"888Starz opera bajo una licencia emitida por Curazao, uno de los reguladores internacionales más comunes y reconocidos. Esta licencia garantiza que la plataforma cumpla con los estándares de juego justo, transparencia financiera y protección de los datos de los jugadores. Todas las transacciones en el sitio, incluidos los depósitos y retiros, se realizan a través de conexiones cifradas mediante protocolos SSL modernos."}',
             'value_fr' => '{"0":"888Starz fonctionne sous une licence délivrée par Curaçao, l’un des régulateurs internationaux les plus courants et reconnus. Cette licence garantit que la plateforme respecte les normes de jeu équitable, de transparence financière et de protection des données des joueurs. Toutes les transactions sur le site, y compris les dépôts et les retraits, sont effectuées via des connexions cryptées utilisant des protocoles SSL modernes."}',
             'value_pt' => '{"0":"888Starz opera sob uma licença emitida por Curaçao, um dos reguladores internacionais mais comuns e reconhecidos. Esta licença garante que a plataforma siga os padrões de jogo justo, transparência financeira e proteção dos dados dos jogadores. Todas as transações no site, incluindo depósitos e saques, são realizadas por meio de conexões criptografadas utilizando protocolos SSL modernos."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The platform does not store payment card data and works only with verified financial operators. For additional security, users can enable two-factor authentication, providing an extra layer of protection when logging into their accounts. Overall, 888Starz maintains high cybersecurity standards, allowing players to focus on the game without worrying about their personal or financial information."}',
             'value_es' => '{"0":"La plataforma no almacena los datos de las tarjetas de pago y trabaja solo con operadores financieros verificados. Para mayor seguridad, los usuarios pueden activar la autenticación de dos factores, que proporciona una capa adicional de protección al iniciar sesión en sus cuentas. En general, 888Starz mantiene altos estándares de ciberseguridad, lo que permite a los jugadores concentrarse en el juego sin preocuparse por su información personal o financiera."}',
             'value_fr' => '{"0":"La plateforme ne conserve pas les données des cartes de paiement et collabore uniquement avec des opérateurs financiers vérifiés. Pour une sécurité supplémentaire, les utilisateurs peuvent activer l’authentification à deux facteurs, offrant un niveau supplémentaire de protection lors de la connexion à leur compte. Dans l’ensemble, 888Starz maintient des normes élevées en matière de cybersécurité, permettant aux joueurs de se concentrer sur le jeu sans se soucier de leurs informations personnelles ou financières."}',
             'value_pt' => '{"0":"A plataforma não armazena dados de cartões de pagamento e trabalha apenas com operadores financeiros verificados. Para maior segurança, os usuários podem ativar a autenticação de dois fatores, proporcionando uma camada extra de proteção ao acessar suas contas. De modo geral, 888Starz mantém altos padrões de cibersegurança, permitindo que os jogadores se concentrem no jogo sem se preocupar com suas informações pessoais ou financeiras."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"On 888Starz, players can find lines not only for popular sports like football, tennis, basketball, and hockey, but also for less common disciplines, including futsal, snooker, darts, water polo, and even esports. Bets can be placed on match winners or totals, corner counts, first goal scorers, or handicap by halves."}',
             'value_es' => '{"0":"En 888Starz, los jugadores pueden encontrar líneas no solo para deportes populares como fútbol, tenis, baloncesto y hockey, sino también para disciplinas menos comunes, incluyendo futsal, snooker, dardos, waterpolo e incluso esports. Se pueden realizar apuestas sobre el ganador del partido o totales, cantidad de saques de esquina, primer goleador o hándicap por mitades."}',
             'value_fr' => '{"0":"Sur 888Starz, les joueurs peuvent trouver des lignes non seulement pour les sports populaires comme le football, le tennis, le basket-ball et le hockey, mais aussi pour des disciplines moins courantes, telles que le futsal, le snooker, les fléchettes, le water-polo et même les esports. Il est possible de parier sur le vainqueur du match ou sur les totaux, le nombre de corners, le premier buteur ou le handicap par mi-temps."}',
             'value_pt' => '{"0":"No 888Starz, os jogadores podem encontrar linhas não apenas para esportes populares, como futebol, tênis, basquete e hóquei, mas também para disciplinas menos comuns, incluindo futsal, sinuca, dardos, polo aquático e até esports. É possível apostar no vencedor da partida ou no total, no número de escanteios, no autor do primeiro gol ou no handicap por tempo."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"For the most demanding players, 888Starz offers an extended betting line, where each match can feature hundreds of markets, allowing you to create combinations and accumulators. Live bets are especially popular, giving the opportunity to make predictions in real time."}',
             'value_es' => '{"0":"Para los jugadores más exigentes, 888Starz ofrece una línea de apuestas ampliada, donde cada partido puede incluir cientos de mercados, lo que permite crear combinaciones y acumuladores. Las apuestas en vivo son especialmente populares, brindando la posibilidad de realizar predicciones en tiempo real."}',
             'value_fr' => '{"0":"Pour les joueurs les plus exigeants, 888Starz propose une ligne de paris étendue, où chaque match peut contenir des centaines de marchés, permettant de créer des combinaisons et des paris multiples. Les paris en direct sont particulièrement populaires, offrant la possibilité de faire des pronostics en temps réel."}',
             'value_pt' => '{"0":"Para os jogadores mais exigentes, 888Starz oferece uma linha de apostas estendida, onde cada partida pode conter centenas de mercados, permitindo criar combinações e acumuladores. As apostas ao vivo são especialmente populares, proporcionando a oportunidade de fazer previsões em tempo real."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz also allows betting on tournaments in Counter-Strike, Dota 2, League of Legends, Valorant, and other esports disciplines. In addition, the platform regularly adds new sports and special markets, such as political events or entertainment shows."}',
             'value_es' => '{"0":"888Starz también permite apostar en torneos de Counter-Strike, Dota 2, League of Legends, Valorant y otras disciplinas de esports. Además, la plataforma agrega regularmente nuevos deportes y mercados especiales, como eventos políticos o shows de entretenimiento."}',
             'value_fr' => '{"0":"888Starz permet également de parier sur des tournois de Counter-Strike, Dota 2, League of Legends, Valorant et d’autres disciplines d’esports. De plus, la plateforme ajoute régulièrement de nouveaux sports et marchés spéciaux, comme des événements politiques ou des shows de divertissement."}',
             'value_pt' => '{"0":"O 888Starz também permite apostar em torneios de Counter-Strike, Dota 2, League of Legends, Valorant e outras disciplinas de esports. Além disso, a plataforma adiciona regularmente novos esportes e mercados especiais, como eventos políticos ou shows de entretenimento."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers more than 40 sports for betting, including football, basketball, tennis, hockey, volleyball, boxing, baseball, motorsports, and even less common disciplines like handball or floorball. You can bet on international competitions, including the Champions League or ATP tournaments, as well as local championships. All matches are conveniently organized by sport, country, and league, making it easy to find the event you want."}',
             'value_es' => '{"0":"888Starz ofrece más de 40 deportes para apostar, incluyendo fútbol, baloncesto, tenis, hockey, voleibol, boxeo, béisbol, automovilismo e incluso disciplinas menos comunes como balonmano o floorball. Se pueden realizar apuestas en competiciones internacionales, incluyendo la Liga de Campeones o torneos ATP, así como en campeonatos locales. Todos los partidos están organizados convenientemente por deporte, país y liga, lo que facilita encontrar el evento deseado."}',
             'value_fr' => '{"0":"888Starz propose plus de 40 sports pour les paris, notamment le football, le basket-ball, le tennis, le hockey, le volley-ball, la boxe, le baseball, les sports automobiles et même des disciplines moins courantes comme le handball ou le floorball. Il est possible de parier sur des compétitions internationales, y compris la Ligue des champions ou les tournois ATP, ainsi que sur les championnats locaux. Tous les matchs sont organisés de manière pratique par sport, pays et ligue, ce qui facilite la recherche de l’événement souhaité."}',
             'value_pt' => '{"0":"O 888Starz oferece mais de 40 esportes para apostas, incluindo futebol, basquete, tênis, hóquei, vôlei, boxe, beisebol, automobilismo e até disciplinas menos comuns como handebol ou floorball. É possível apostar em competições internacionais, incluindo a Liga dos Campeões ou torneios ATP, bem como em campeonatos locais. Todas as partidas estão organizadas de forma conveniente por esporte, país e liga, facilitando encontrar o evento desejado."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Esports deserves a special mention, as it is represented as a full-fledged category in the 888Starz line. Here, players can place bets on popular disciplines and follow match and tournament results in real time."}',
             'value_es' => '{"0":"El esports merece una mención especial, ya que se presenta como una categoría completa en la línea de 888Starz. Aquí, los jugadores pueden apostar en disciplinas populares y seguir los resultados de partidos y torneos en tiempo real."}',
             'value_fr' => '{"0":"L’esport mérite une mention spéciale, car il est présenté comme une catégorie à part entière dans la ligne de 888Starz. Les joueurs peuvent y parier sur des disciplines populaires et suivre les résultats des matchs et des tournois en temps réel."}',
             'value_pt' => '{"0":"O esports merece destaque especial, sendo representado como uma categoria completa na linha do 888Starz. Aqui, os jogadores podem apostar em disciplinas populares e acompanhar os resultados de partidas e torneios em tempo real."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888Starz casino is one of the main sections of the platform. The collection features thousands of slots from leading providers, including Pragmatic Play, NetEnt, Play’n GO, Microgaming, BGaming, Evolution, and many others. You can play both standard video slots and table games such as roulette, blackjack, baccarat, and poker. For fans of a real casino atmosphere, there is a Live Casino section with live dealers. Bets are placed in real time, and the games are streamed in high quality."}',
             'value_es' => '{"0":"El casino 888Starz es una de las secciones principales de la plataforma. La colección incluye miles de tragamonedas de proveedores líderes, como Pragmatic Play, NetEnt, Play’n GO, Microgaming, BGaming, Evolution y muchos más. Se puede jugar tanto a tragamonedas normales como a juegos de mesa, incluyendo ruleta, blackjack, baccarat y póker. Para los aficionados a la atmósfera de un casino real, hay una sección de Live Casino con crupieres en vivo. Las apuestas se realizan en tiempo real y los juegos se transmiten en alta calidad."}',
             'value_fr' => '{"0":"Le casino 888Starz est l’une des sections principales de la plateforme. La collection propose des milliers de machines à sous de fournisseurs renommés tels que Pragmatic Play, NetEnt, Play’n GO, Microgaming, BGaming, Evolution et bien d’autres. On peut jouer à des machines à sous classiques ainsi qu’à des jeux de table comme la roulette, le blackjack, le baccarat et le poker. Pour les amateurs de l’ambiance d’un vrai casino, il existe une section Live Casino avec des croupiers en direct. Les mises sont acceptées en temps réel et les parties sont diffusées en haute qualité."}',
             'value_pt' => '{"0":"O cassino 888Starz é uma das principais seções da plataforma. A coleção apresenta milhares de slots de provedores líderes, incluindo Pragmatic Play, NetEnt, Play’n GO, Microgaming, BGaming, Evolution e muitos outros. É possível jogar tanto slots padrão quanto jogos de mesa, como roleta, blackjack, baccarat e pôquer. Para os fãs da atmosfera de um cassino real, há uma seção de Live Casino com dealers ao vivo. As apostas são feitas em tempo real e os jogos são transmitidos em alta qualidade."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The platform also offers various tournaments with prize pools, promotions, and bonuses for active users. Most games have a demo mode, allowing players to try them without significant risks."}',
             'value_es' => '{"0":"La plataforma también ofrece varios torneos con premios, promociones y bonos para usuarios activos. La mayoría de los juegos tienen modo demo, lo que permite probarlos sin asumir grandes riesgos."}',
             'value_fr' => '{"0":"La plateforme propose également différents tournois avec des cagnottes, des promotions et des bonus pour les utilisateurs actifs. La plupart des jeux disposent d’un mode démo, permettant de les tester sans prendre de grands risques."}',
             'value_pt' => '{"0":"A plataforma também oferece vários torneios com prêmios, promoções e bônus para usuários ativos. A maioria dos jogos possui modo demo, permitindo testá-los sem grandes riscos."}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz casino runs smoothly on any device, including mobile. Players can enjoy their favorite slots and card games, whether they are playing from a computer or a phone."}',
             'value_es' => '{"0":"El casino 888Starz funciona de manera estable en cualquier dispositivo, incluidos los móviles. Los jugadores pueden disfrutar de sus tragamonedas y juegos de cartas favoritos, ya sea desde un ordenador o un teléfono."}',
             'value_fr' => '{"0":"Le casino 888Starz fonctionne de manière stable sur tous les appareils, y compris les mobiles. Les joueurs peuvent profiter de leurs machines à sous et jeux de cartes préférés, qu’ils jouent sur ordinateur ou sur téléphone."}',
             'value_pt' => '{"0":"O cassino 888Starz funciona de forma estável em qualquer dispositivo, incluindo móveis. Os jogadores podem desfrutar de seus slots e jogos de cartas favoritos, seja jogando no computador ou no telefone."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"At 888Starz, odds are set based on market dynamics and actual event statistics. For example, in major football championships, odds for the favorite to win often reach 2.00, while underdogs can exceed 4.00 or even 5.00."}',
             'value_es' => '{"0":"En 888Starz, las cuotas se establecen teniendo en cuenta la dinámica del mercado y las estadísticas reales de los eventos. Por ejemplo, en los principales campeonatos de fútbol, las cuotas para la victoria del favorito suelen alcanzar 2.00, mientras que para los desvalidos pueden superar 4.00 o incluso 5.00."}',
             'value_fr' => '{"0":"Chez 888Starz, les cotes sont établies en fonction de la dynamique du marché et des statistiques réelles des événements. Par exemple, dans les principaux championnats de football, les cotes pour la victoire du favori atteignent souvent 2,00, tandis que celles pour l’outsider peuvent dépasser 4,00 voire 5,00."}',
             'value_pt' => '{"0":"Na 888Starz, as odds são definidas com base na dinâmica do mercado e nas estatísticas reais dos eventos. Por exemplo, nos principais campeonatos de futebol, as odds para a vitória do favorito frequentemente chegam a 2,00, enquanto para os azarões podem ultrapassar 4,00 ou até 5,00."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In the live betting section, odds change rapidly according to the developments in the match. The site operates without delays, allowing players to react instantly and place bets at the most advantageous moment."}',
             'value_es' => '{"0":"En la sección de apuestas en vivo, las cuotas cambian rápidamente según el desarrollo del partido. El sitio funciona sin retrasos, lo que permite a los jugadores reaccionar al instante y realizar apuestas en el momento más ventajoso."}',
             'value_fr' => '{"0":"Dans la section des paris en direct, les cotes changent rapidement selon le déroulement du match. Le site fonctionne sans retard, permettant aux joueurs de réagir instantanément et de placer leurs mises au moment le plus avantageux."}',
             'value_pt' => '{"0":"Na seção de apostas ao vivo, as odds mudam rapidamente de acordo com o andamento da partida. O site funciona sem atrasos, permitindo que os jogadores reajam instantaneamente e façam apostas no momento mais vantajoso."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz supports different odds formats including decimal, American, and fractional. Overall, the odds level at 888Starz is among the highest compared to international bookmakers."}',
             'value_es' => '{"0":"888Starz admite diferentes formatos de cuotas, incluyendo decimal, americano y fraccionario. En general, el nivel de las cuotas en 888Starz está entre los más altos de los operadores internacionales."}',
             'value_fr' => '{"0":"888Starz prend en charge différents formats de cotes : décimal, américain et fractionnaire. Dans l’ensemble, le niveau des cotes chez 888Starz est parmi les plus élevés des bookmakers internationaux."}',
             'value_pt' => '{"0":"A 888Starz oferece diferentes formatos de exibição de odds, incluindo decimal, americano e fracionário. De modo geral, o nível das odds na 888Starz está entre os mais altos entre os bookmakers internacionais."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The live section interface is designed for easy navigation between events and to clearly see odds updates. For popular sports such as football, tennis, basketball, or esports, detailed graphical representations of key moments are available."}',
             'value_es' => '{"0":"La interfaz de la sección en vivo está diseñada para facilitar la navegación entre eventos y ver claramente las actualizaciones de cuotas. Para deportes populares como fútbol, tenis, baloncesto o deportes electrónicos, están disponibles representaciones gráficas detalladas de los momentos clave."}',
             'value_fr' => '{"0":"L’interface de la section en direct est conçue pour faciliter la navigation entre les événements et visualiser clairement les mises à jour des cotes. Pour les sports populaires tels que le football, le tennis, le basket-ball ou l’e-sport, des représentations graphiques détaillées des moments clés sont disponibles."}',
             'value_pt' => '{"0":"A interface da seção ao vivo é projetada para facilitar a navegação entre os eventos e visualizar claramente as atualizações de odds. Para esportes populares como futebol, tênis, basquete ou eSports, estão disponíveis representações gráficas detalhadas dos momentos principais do jogo."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Another advantage is the availability of match video streams, allowing users not only to watch the game but also to analyze the situation before placing a bet. Live streams are accessible even for non-registered users."}',
             'value_es' => '{"0":"Otra ventaja es la disponibilidad de transmisiones de video de los partidos, lo que permite a los usuarios no solo ver el juego, sino también analizar la situación antes de realizar una apuesta. Las transmisiones en vivo están disponibles incluso para usuarios no registrados."}',
             'value_fr' => '{"0":"Un autre avantage est la disponibilité des flux vidéo des matchs, permettant aux utilisateurs non seulement de regarder le jeu, mais aussi d’analyser la situation avant de placer un pari. Les diffusions en direct sont accessibles même aux utilisateurs non enregistrés."}',
             'value_pt' => '{"0":"Outra vantagem é a disponibilidade de transmissões de vídeo das partidas, permitindo que os usuários não apenas assistam ao jogo, mas também analisem a situação antes de fazer uma aposta. As transmissões ao vivo estão disponíveis mesmo para usuários não registrados."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers players a wide range of tools to analyze events and make informed decisions. In the statistics section, you can find detailed data about teams, players, and previous match results. For football matches, for example, there is a history of head-to-head encounters, team form, and data on goals, corners, and yellow cards."}',
             'value_es' => '{"0":"888Starz ofrece a los jugadores una amplia gama de herramientas para analizar eventos y tomar decisiones informadas. En la sección de estadísticas se pueden encontrar datos detallados sobre equipos, jugadores y resultados de partidos anteriores. Por ejemplo, para los partidos de fútbol, hay un historial de enfrentamientos directos, la forma de los equipos y datos sobre goles, córners y tarjetas amarillas."}',
             'value_fr' => '{"0":"888Starz propose aux joueurs un large éventail d’outils pour analyser les événements et prendre des décisions éclairées. Dans la section statistiques, vous pouvez trouver des données détaillées sur les équipes, les joueurs et les résultats des matchs précédents. Pour les matchs de football, par exemple, il y a un historique des confrontations directes, la forme des équipes et les données sur les buts, les corners et les cartons jaunes."}',
             'value_pt' => '{"0":"888Starz oferece aos jogadores uma ampla gama de ferramentas para analisar eventos e tomar decisões informadas. Na seção de estatísticas, você pode encontrar dados detalhados sobre equipes, jogadores e resultados de partidas anteriores. Para partidas de futebol, por exemplo, há histórico de confrontos diretos, forma das equipes e dados sobre gols, escanteios e cartões amarelos."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition, 888Starz provides charts showing the dynamics of odds changes before the match and in live mode, helping to determine the optimal time for placing bets. For those betting on esports or virtual sports, statistical data includes recent game results, team performance, and individual player metrics."}',
             'value_es' => '{"0":"Además, 888Starz proporciona gráficos que muestran la dinámica de los cambios en las cuotas antes del partido y en modo en vivo, ayudando a determinar el momento óptimo para realizar apuestas. Para quienes apuestan en esports o deportes virtuales, los datos estadísticos incluyen resultados recientes, rendimiento del equipo y métricas individuales de los jugadores."}',
             'value_fr' => '{"0":"De plus, 888Starz fournit des graphiques montrant la dynamique des changements de cotes avant le match et en mode live, ce qui aide à déterminer le moment optimal pour placer les paris. Pour ceux qui misent sur les esports ou les sports virtuels, les données statistiques incluent les résultats récents, la performance des équipes et les indicateurs individuels des joueurs."}',
             'value_pt' => '{"0":"Além disso, 888Starz fornece gráficos que mostram a dinâmica das mudanças nas odds antes da partida e em modo ao vivo, ajudando a determinar o momento ideal para fazer apostas. Para quem aposta em esports ou esportes virtuais, os dados estatísticos incluem resultados recentes, desempenho das equipes e métricas individuais dos jogadores."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz provides various tools that help players manage their activity and avoid excessive betting. In the personal account, you can set deposit limits and restrict the size of bets."}',
             'value_es' => '{"0":"888Starz ofrece diversas herramientas que ayudan a los jugadores a controlar su actividad y evitar apuestas excesivas. En la cuenta personal, se pueden establecer límites de depósito y restringir el tamaño de las apuestas."}',
             'value_fr' => '{"0":"888Starz propose divers outils qui aident les joueurs à contrôler leur activité et à éviter les paris excessifs. Dans le compte personnel, il est possible de définir des limites de dépôt et de restreindre la taille des mises."}',
             'value_pt' => '{"0":"888Starz oferece várias ferramentas que ajudam os jogadores a controlar sua atividade e evitar apostas excessivas. Na conta pessoal, é possível definir limites de depósito e restringir o tamanho das apostas."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In addition to financial limits, it is possible to set time limits for gaming sessions. Temporary breaks or full self-exclusion from the platform can also be activated, allowing players to pause and return to the game only after a certain period."}',
             'value_es' => '{"0":"Además de los límites financieros, es posible establecer límites de tiempo para las sesiones de juego. También se pueden activar pausas temporales o la autoexclusión completa de la plataforma, lo que permite hacer una pausa y volver a jugar solo después de un período determinado."}',
             'value_fr' => '{"0":"En plus des limites financières, il est possible de définir des limites de temps pour les sessions de jeu. Des pauses temporaires ou une auto-exclusion complète de la plateforme peuvent également être activées, permettant aux joueurs de faire une pause et de revenir au jeu uniquement après une période déterminée."}',
             'value_pt' => '{"0":"Além dos limites financeiros, é possível definir limites de tempo para as sessões de jogo. Também podem ser ativadas pausas temporárias ou autoexclusão completa da plataforma, permitindo que os jogadores façam uma pausa e retornem ao jogo apenas após um determinado período."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, 888Starz offers informational materials and advice on responsible gaming, including articles on gambling risks and ways to control personal spending."}',
             'value_es' => '{"0":"Adicionalmente, 888Starz proporciona materiales informativos y consejos sobre el juego responsable, incluidos artículos sobre los riesgos del juego y formas de controlar el gasto personal."}',
             'value_fr' => '{"0":"De plus, 888Starz fournit des documents d’information et des conseils sur le jeu responsable, y compris des articles sur les risques liés aux jeux d’argent et des moyens de contrôler ses dépenses personnelles."}',
             'value_pt' => '{"0":"Além disso, 888Starz fornece materiais informativos e conselhos sobre jogo responsável, incluindo artigos sobre os riscos do jogo e maneiras de controlar os gastos pessoais."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The 888Starz website offers a wide range of methods for depositing and withdrawing funds, making the platform convenient for players from different regions. Deposits can be made using Visa and Mastercard bank cards, as well as e-wallets like Skrill and Neteller. Additionally, cryptocurrencies including Bitcoin, Ethereum, and Tether are supported."}',
             'value_es' => '{"0":"El sitio web de 888Starz ofrece una amplia variedad de métodos para depositar y retirar fondos, lo que hace que la plataforma sea conveniente para jugadores de diferentes regiones. Los depósitos se pueden realizar con tarjetas bancarias Visa y Mastercard, así como con monederos electrónicos como Skrill y Neteller. Además, se admiten criptomonedas, incluyendo Bitcoin, Ethereum y Tether."}',
             'value_fr' => '{"0":"Le site 888Starz propose un large éventail de méthodes pour déposer et retirer des fonds, ce qui rend la plateforme pratique pour les joueurs de différentes régions. Les dépôts peuvent être effectués avec des cartes bancaires Visa et Mastercard, ainsi qu’avec des portefeuilles électroniques comme Skrill et Neteller. De plus, les crypto-monnaies telles que Bitcoin, Ethereum et Tether sont prises en charge."}',
             'value_pt' => '{"0":"O site 888Starz oferece uma ampla variedade de métodos para depositar e sacar fundos, tornando a plataforma conveniente para jogadores de diferentes regiões. Os depósitos podem ser feitos usando cartões bancários Visa e Mastercard, bem como carteiras eletrônicas como Skrill e Neteller. Além disso, criptomoedas como Bitcoin, Ethereum e Tether são suportadas."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are processed within a few minutes. Withdrawal times depend on the chosen method: e-wallets and cryptocurrencies are processed within a few hours, while bank transfers may take up to one business day. In the personal account, it is possible to set up multiple payment methods simultaneously."}',
             'value_es' => '{"0":"Los depósitos se procesan en unos pocos minutos. Los tiempos de retiro dependen del método elegido: los monederos electrónicos y las criptomonedas se procesan en pocas horas, mientras que las transferencias bancarias pueden tardar hasta un día hábil. En la cuenta personal, es posible configurar varios métodos de pago al mismo tiempo."}',
             'value_fr' => '{"0":"Les dépôts sont traités en quelques minutes. Les délais de retrait dépendent de la méthode choisie : les portefeuilles électroniques et les crypto-monnaies sont traités en quelques heures, tandis que les virements bancaires peuvent prendre jusqu’à un jour ouvrable. Dans le compte personnel, il est possible de configurer plusieurs méthodes de paiement simultanément."}',
             'value_pt' => '{"0":"Os depósitos são processados em poucos minutos. O tempo de saque depende do método escolhido: carteiras eletrônicas e criptomoedas são processadas em poucas horas, enquanto transferências bancárias podem levar até um dia útil. Na conta pessoal, é possível configurar vários métodos de pagamento simultaneamente."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 39
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz offers 24/7 support, which can be reached via live chat or email, and players can also call the hotline."}',
             'value_es' => '{"0":"888Starz ofrece soporte 24/7, al que se puede acceder mediante chat en vivo o correo electrónico, y los jugadores también pueden llamar a la línea directa."}',
             'value_fr' => '{"0":"888Starz propose un support 24h/24 et 7j/7, accessible via le chat en direct ou par e-mail, et les joueurs peuvent également appeler la hotline."}',
             'value_pt' => '{"0":"O 888Starz oferece suporte 24/7, que pode ser contatado via chat ao vivo ou e-mail, e os jogadores também podem ligar para a linha direta."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 40
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 41
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large selection of casino games",
                                 "1":"Support for cryptocurrencies",
                                 "2":"Availability of live betting",
                                 "3":"24/7 customer support"},
                             "1":
                                {"0":"Occasional delays in withdrawal processing"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de juegos de casino",
                                 "1":"Soporte para criptomonedas",
                                 "2":"Disponibilidad de apuestas en vivo",
                                 "3":"Atención al cliente 24/7"},
                             "1":
                                {"0":"Ocasionalmente hay retrasos en los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de jeux de casino",
                                 "1":"Prise en charge des crypto-monnaies",
                                 "2":"Disponibilité des paris en direct",
                                 "3":"Support client 24h/24 et 7j/7"},
                             "1":
                                {"0":"Des retards occasionnels dans les retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de jogos de cassino",
                                 "1":"Suporte a criptomoedas",
                                 "2":"Disponibilidade de apostas ao vivo",
                                 "3":"Suporte 24/7"},
                             "1":
                                {"0":"Ocasionalmente há atrasos nos saques"}
                             }',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 42
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888Starz"}',
                'value_fr' => '{"0":"FAQ de 888Starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888Starz"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 43
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is 888Starz safe?"}',
             'value_es' => '{"0":"¿888Starz es seguro?"}',
             'value_fr' => '{"0":"888Starz est-il sûr ?"}',
             'value_pt' => '{"0":"O 888Starz é seguro?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 44
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under a Curacao license and uses SSL encryption to protect user data."}',
             'value_es' => '{"0":"Sí, la plataforma funciona bajo una licencia de Curazao y utiliza cifrado SSL para proteger los datos de los usuarios."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous licence de Curaçao et utilise le cryptage SSL pour protéger les données des utilisateurs."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob licença de Curaçao e utiliza criptografia SSL para proteger os dados dos usuários."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 45
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Can I place live bets and watch streams?"}',
             'value_es' => '{"0":"¿Se pueden hacer apuestas en vivo y ver transmisiones?"}',
             'value_fr' => '{"0":"Peut-on placer des paris en direct et regarder des diffusions ?"}',
             'value_pt' => '{"0":"É possível fazer apostas ao vivo e assistir transmissões?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 46
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 888Starz supports live betting, and live streams are available for some events."}',
             'value_es' => '{"0":"Sí, 888Starz admite apuestas en vivo y hay transmisiones en directo disponibles para algunos eventos."}',
             'value_fr' => '{"0":"Oui, 888Starz propose les paris en direct et des diffusions en direct sont disponibles pour certains événements."}',
             'value_pt' => '{"0":"Sim, o 888Starz oferece apostas ao vivo e transmissões ao vivo estão disponíveis para alguns eventos."}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 47
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What payment methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de pago se aceptan?"}',
             'value_fr' => '{"0":"Quels moyens de paiement sont acceptés ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento são aceitos?"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 48
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Cryptocurrencies (Bitcoin, Ethereum, etc.), e-wallets, bank cards."}',
             'value_es' => '{"0":"Criptomonedas (Bitcoin, Ethereum, etc.), monederos electrónicos, tarjetas bancarias."}',
             'value_fr' => '{"0":"Cryptomonnaies (Bitcoin, Ethereum, etc.), portefeuilles électroniques, cartes bancaires."}',
             'value_pt' => '{"0":"Criptomoedas (Bitcoin, Ethereum, etc.), carteiras eletrônicas, cartões bancários."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 49
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en retirarse el dinero?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para sacar fundos?"}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 50
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals are usually processed within a few hours, but sometimes delays occur due to verifications, which can take up to a day or more."}',
             'value_es' => '{"0":"Los retiros generalmente se procesan en pocas horas, pero a veces hay retrasos debido a verificaciones, lo que puede tardar hasta un día o más."}',
             'value_fr' => '{"0":"Les retraits sont généralement traités en quelques heures, mais des retards peuvent survenir en raison de vérifications, ce qui peut prendre jusqu\'à un jour ou plus."}',
             'value_pt' => '{"0":"Os saques geralmente são processados em algumas horas, mas às vezes ocorrem atrasos devido a verificações, o que pode levar até um dia ou mais."}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 51
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How to verify an account and how long does it take?"}',
             'value_es' => '{"0":"¿Cómo verificar una cuenta y cuánto tiempo tarda?"}',
             'value_fr' => '{"0":"Comment vérifier un compte et combien de temps cela prend-il ?"}',
             'value_pt' => '{"0":"Como verificar uma conta e quanto tempo isso leva?"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 52
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To verify your account, you need to provide an identification document, such as a passport or driver’s license. The process can take from a few hours to several days."}',
             'value_es' => '{"0":"Para verificar su cuenta, debe proporcionar un documento de identificación, como pasaporte o licencia de conducir. El proceso puede durar desde unas pocas horas hasta varios días."}',
             'value_fr' => '{"0":"Pour vérifier votre compte, vous devez fournir un document d’identité, comme un passeport ou un permis de conduire. Le processus peut prendre de quelques heures à plusieurs jours."}',
             'value_pt' => '{"0":"Para verificar sua conta, você precisa fornecer um documento de identificação, como passaporte ou carteira de motorista. O processo pode levar de algumas horas a vários dias."}',
             'order' => 52
            ]
        );
    }
}
