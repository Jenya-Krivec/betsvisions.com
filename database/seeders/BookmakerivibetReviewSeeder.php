<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet is a modern bookmaker for sports betting and casino games, which entered the market in 2022. It is owned by TechOptions Group B.V., holds a Curaçao license, and targets players from different countries."}',
             'value_es' => '{"0":"Ivibet es una casa de apuestas moderna para apuestas deportivas y juegos de casino, que llegó al mercado en 2022. Es propiedad de TechOptions Group B.V., tiene licencia de Curazao y está orientada a jugadores de diferentes países."}',
             'value_fr' => '{"0":"Ivibet est un bookmaker moderne pour les paris sportifs et les jeux de casino, qui est apparu sur le marché en 2022. Il appartient à TechOptions Group B.V., possède une licence de Curaçao et s’adresse à des joueurs de différents pays."}',
             'value_pt' => '{"0":"Ivibet é uma casa de apostas moderna para apostas esportivas e jogos de cassino, que entrou no mercado em 2022. Pertence à TechOptions Group B.V., possui licença de Curaçao e é voltada para jogadores de diferentes países."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The website has a simple interface, making it easy to find events or place bets. The platform supports multiple languages and accepts both traditional currencies and cryptocurrencies."}',
             'value_es' => '{"0":"El sitio web tiene una interfaz sencilla, que facilita encontrar eventos o realizar apuestas. La plataforma admite varios idiomas y acepta tanto monedas tradicionales como criptomonedas."}',
             'value_fr' => '{"0":"Le site dispose d’une interface simple, permettant de trouver facilement les événements ou de placer des paris. La plateforme prend en charge plusieurs langues et accepte à la fois les devises traditionnelles et les cryptomonnaies."}',
             'value_pt' => '{"0":"O site tem uma interface simples, facilitando encontrar eventos ou fazer apostas. A plataforma suporta vários idiomas e aceita tanto moedas tradicionais quanto criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet operates under an international Curaçao license, which allows the company to provide bookmaker services in most countries around the world. Although the Curaçao license has a simplified regulation compared to European jurisdictions, it still guarantees the legal operation of the company."}',
             'value_es' => '{"0":"Ivibet opera bajo una licencia internacional de Curazao, que permite a la empresa ofrecer servicios de apuestas en la mayoría de los países del mundo. Aunque la licencia de Curazao tiene una regulación simplificada en comparación con las jurisdicciones europeas, sigue siendo una garantía de la legalidad de la empresa."}',
             'value_fr' => '{"0":"Ivibet fonctionne sous une licence internationale de Curaçao, ce qui permet à l’entreprise de fournir des services de paris dans la plupart des pays du monde. Bien que la licence de Curaçao soit régulée de manière plus simplifiée par rapport aux juridictions européennes, elle garantit néanmoins l’activité légale de l’entreprise."}',
             'value_pt' => '{"0":"Ivibet opera com base em uma licença internacional de Curaçao, que permite à empresa oferecer serviços de apostas na maioria dos países do mundo. Embora a licença de Curaçao tenha uma regulamentação simplificada em comparação com as jurisdições europeias, ainda garante a operação legal da empresa."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All transactions on the platform are protected by SSL encryption, ensuring the secure transmission of personal and financial information. During withdrawals, the system may request documents for verification, which helps prevent fraud."}',
             'value_es' => '{"0":"Todas las transacciones en la plataforma están protegidas por cifrado SSL, lo que garantiza la transmisión segura de información personal y financiera. Durante los retiros, el sistema puede solicitar documentos para verificación, lo que ayuda a prevenir fraudes."}',
             'value_fr' => '{"0":"Toutes les transactions sur la plateforme sont protégées par un cryptage SSL, garantissant la transmission sécurisée des informations personnelles et financières. Lors des retraits, le système peut demander des documents pour vérification, ce qui aide à prévenir la fraude."}',
             'value_pt' => '{"0":"Todas as transações na plataforma são protegidas por criptografia SSL, garantindo a transmissão segura de informações pessoais e financeiras. Durante os saques, o sistema pode solicitar documentos para verificação, ajudando a prevenir fraudes."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For popular tournaments such as the Champions League, the Premier League, or the NBA, Ivibet offers hundreds of different markets for each event. Players can bet not only on the team’s victory or total goals but also on statistical indicators, yellow cards, corners, goal scorers, or even specific time periods of the match."}',
             'value_es' => '{"0":"Para los torneos populares como la Liga de Campeones, la Premier League o la NBA, Ivibet ofrece cientos de mercados diferentes para cada evento. Los jugadores pueden apostar no solo por la victoria del equipo o el total de goles, sino también por indicadores estadísticos, tarjetas amarillas, saques de esquina, goleadores o incluso periodos específicos del partido."}',
             'value_fr' => '{"0":"Pour les tournois populaires tels que la Ligue des Champions, la Premier League ou la NBA, Ivibet propose des centaines de marchés différents pour chaque événement. Les joueurs peuvent parier non seulement sur la victoire de l’équipe ou le total des buts, mais aussi sur les statistiques, les cartons jaunes, les corners, les buteurs ou même sur des périodes spécifiques du match."}',
             'value_pt' => '{"0":"Para torneios populares como a Liga dos Campeões, a Premier League ou a NBA, Ivibet oferece centenas de mercados diferentes para cada evento. Os jogadores podem apostar não apenas na vitória da equipe ou no total de gols, mas também em indicadores estatísticos, cartões amarelos, escanteios, artilheiros ou até períodos específicos da partida."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For tennis, hockey, volleyball, and esports matches, expanded betting options are also available. In both pre-match and live events, the lines are regularly updated, and for top championships, odds change in real time according to the dynamics of the game. Lesser-known tournaments have a more modest number of markets."}',
             'value_es' => '{"0":"Para los partidos de tenis, hockey, voleibol y esports, también están disponibles opciones de apuestas ampliadas. En los eventos previos al partido y en los en vivo, las líneas se actualizan regularmente, y para los campeonatos principales, las cuotas cambian en tiempo real según la dinámica del juego. Los torneos menos conocidos tienen un número más modesto de mercados."}',
             'value_fr' => '{"0":"Pour les matchs de tennis, de hockey, de volley-ball et d’e-sport, des options de paris étendues sont également disponibles. Dans les événements pré-match et en direct, les lignes sont régulièrement mises à jour, et pour les championnats de premier plan, les cotes changent en temps réel selon la dynamique du jeu. Les tournois moins connus disposent d’un nombre plus limité de marchés."}',
             'value_pt' => '{"0":"Para partidas de tênis, hóquei, vôlei e esports, também estão disponíveis opções de apostas ampliadas. Em eventos pré-jogo e ao vivo, as linhas são atualizadas regularmente, e para os principais campeonatos, as odds mudam em tempo real de acordo com a dinâmica do jogo. Torneios menos conhecidos têm um número mais modesto de mercados."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section of Ivibet features current events from over thirty sports, including football, tennis, basketball, hockey, volleyball, and esports. It is easy to switch between tournaments, access detailed statistics, and create a bet slip in just a few clicks. The platform supports single and accumulator bets, allowing users to combine events from different championships."}',
             'value_es' => '{"0":"La sección de apuestas deportivas de Ivibet incluye eventos actuales de más de treinta deportes, incluyendo fútbol, tenis, baloncesto, hockey, voleibol y esports. Es fácil cambiar entre torneos, acceder a estadísticas detalladas y crear un cupón de apuestas en solo unos clics. La plataforma admite apuestas simples y combinadas, lo que permite a los usuarios combinar eventos de diferentes campeonatos."}',
             'value_fr' => '{"0":"La section des paris sportifs d’Ivibet rassemble les événements actuels de plus de trente sports, y compris le football, le tennis, le basketball, le hockey, le volley-ball et l’e-sport. Il est facile de naviguer entre les tournois, d’accéder à des statistiques détaillées et de créer un coupon de pari en quelques clics. La plateforme prend en charge les paris simples et combinés, permettant de combiner des événements de différents championnats."}',
             'value_pt' => '{"0":"A seção de apostas esportivas do Ivibet reúne eventos atuais de mais de trinta esportes, incluindo futebol, tênis, basquete, hóquei, vôlei e esports. É fácil alternar entre torneios, acessar estatísticas detalhadas e criar um cupom de apostas em apenas alguns cliques. A plataforma suporta apostas simples e acumuladas, permitindo combinar eventos de diferentes campeonatos."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The esports section is particularly popular, featuring games such as CS2, Dota 2, Valorant, and League of Legends with a full range of live betting options. Overall, Ivibet’s sports section stands out for its stable performance and wide selection of events."}',
             'value_es' => '{"0":"La sección de esports es especialmente popular, con juegos como CS2, Dota 2, Valorant y League of Legends, con toda la línea de apuestas en vivo. En general, la sección deportiva de Ivibet se destaca por su funcionamiento estable y la amplia variedad de eventos."}',
             'value_fr' => '{"0":"La section e-sport est particulièrement populaire, avec des disciplines telles que CS2, Dota 2, Valorant et League of Legends, offrant une gamme complète de paris en direct. Dans l’ensemble, la section sportive d’Ivibet se distingue par sa stabilité et son large choix d’événements."}',
             'value_pt' => '{"0":"A seção de esports é especialmente popular, com jogos como CS2, Dota 2, Valorant e League of Legends, oferecendo uma linha completa de apostas ao vivo. No geral, a seção esportiva do Ivibet se destaca pelo funcionamento estável e pela ampla variedade de eventos."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet Casino library features over five thousand games from global providers, including NetEnt, Pragmatic Play, Play’n GO, Evolution, and Microgaming. Players can enjoy slots, table games, roulette, poker, including games with live dealers. All games are organized by category, and there is a search function by name or provider. Importantly, there is also the option to play in demo mode."}',
             'value_es' => '{"0":"La biblioteca de Casino de Ivibet cuenta con más de cinco mil juegos de proveedores internacionales, incluyendo NetEnt, Pragmatic Play, Play’n GO, Evolution y Microgaming. Los jugadores pueden disfrutar de tragamonedas, juegos de mesa, ruleta, póker, incluidos juegos con crupieres en vivo. Todos los juegos están organizados por categorías y hay una función de búsqueda por nombre o proveedor. Es importante destacar que también existe la opción de jugar en modo demo."}',
             'value_fr' => '{"0":"La bibliothèque du Casino Ivibet propose plus de cinq mille jeux de fournisseurs mondiaux, notamment NetEnt, Pragmatic Play, Play’n GO, Evolution et Microgaming. Les joueurs peuvent profiter des machines à sous, des jeux de table, de la roulette, du poker, y compris avec des croupiers en direct. Tous les jeux sont classés par catégories, et une recherche par nom ou fournisseur est disponible. Il est important de noter qu’il est également possible de jouer en mode démo."}',
             'value_pt' => '{"0":"A biblioteca do Casino Ivibet reúne mais de cinco mil jogos de provedores globais, incluindo NetEnt, Pragmatic Play, Play’n GO, Evolution e Microgaming. Os jogadores podem jogar slots, jogos de mesa, roleta, pôquer, incluindo jogos com dealers ao vivo. Todos os jogos estão organizados por categoria, e há uma função de busca por nome ou provedor. É importante destacar que também existe a opção de jogar no modo demo."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to the Live Casino section, players can experience the atmosphere of a real casino with professional dealers. In addition to the main catalog, Ivibet regularly hosts tournaments for users."}',
             'value_es' => '{"0":"Gracias a la sección de Live Casino, los jugadores pueden experimentar la atmósfera de un casino real con crupieres profesionales. Además del catálogo principal, Ivibet organiza regularmente torneos para los usuarios."}',
             'value_fr' => '{"0":"Grâce à la section Live Casino, les joueurs peuvent ressentir l’ambiance d’un véritable casino avec des croupiers professionnels. En plus du catalogue principal, Ivibet organise régulièrement des tournois pour les utilisateurs."}',
             'value_pt' => '{"0":"Graças à seção Live Casino, os jogadores podem sentir a atmosfera de um cassino real com dealers profissionais. Além do catálogo principal, o Ivibet organiza regularmente torneios para os usuários."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For football matches in top leagues, for example in the Barcelona vs. Real Madrid game, odds stay around 2.40. For Premier League or Serie A matches, odds for the favorites usually range between 1.60 and 1.80. For basketball and hockey, Ivibet offers odds close to market levels."}',
             'value_es' => '{"0":"Para los partidos de fútbol de las ligas principales, por ejemplo en el encuentro Barcelona contra Real Madrid, las cuotas se mantienen alrededor de 2,40. Para los partidos de la Premier League o la Serie A, las cuotas para los favoritos suelen oscilar entre 1,60 y 1,80. En baloncesto y hockey, Ivibet ofrece cuotas cercanas a los niveles del mercado."}',
             'value_fr' => '{"0":"Pour les matchs de football des ligues principales, par exemple lors du match Barcelone contre Real Madrid, les cotes se situent autour de 2,40. Pour les matchs de la Premier League ou de la Serie A, les cotes des favoris oscillent généralement entre 1,60 et 1,80. Pour le basketball et le hockey, Ivibet propose des cotes proches des niveaux du marché."}',
             'value_pt' => '{"0":"Para os jogos de futebol das principais ligas, por exemplo na partida Barcelona vs. Real Madrid, as odds se mantêm em torno de 2,40. Para os jogos da Premier League ou da Série A, as odds para os favoritos geralmente variam entre 1,60 e 1,80. No basquete e no hóquei, o Ivibet oferece odds próximas aos níveis de mercado."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In live mode, odds change almost instantly. This speed in line formation reflects a well-tuned analytics system, allowing users to react to changes in real time without delays."}',
             'value_es' => '{"0":"En modo en vivo, las cuotas cambian casi al instante. Esta rapidez en la formación de la línea refleja un sistema de análisis bien ajustado, que permite a los usuarios reaccionar a los cambios en tiempo real sin demoras."}',
             'value_fr' => '{"0":"En mode live, les cotes changent presque instantanément. Cette rapidité dans la formation des lignes témoigne d’un système d’analyse bien réglé, permettant aux utilisateurs de réagir aux changements en temps réel sans retard."}',
             'value_pt' => '{"0":"No modo ao vivo, as odds mudam quase instantaneamente. Essa rapidez na formação da linha reflete um sistema de análise bem ajustado, permitindo que os usuários reajam às mudanças em tempo real sem atrasos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In the live betting section, users can choose events from football, tennis, basketball, hockey, esports, and other disciplines. Odds are updated in real time, allowing for quick reactions to changes in the course of events. The live interface is optimized for fast access to markets, viewing statistics, and placing bets in just a few clicks."}',
             'value_es' => '{"0":"En la sección de apuestas en vivo, los usuarios pueden elegir eventos de fútbol, tenis, baloncesto, hockey, esports y otras disciplinas. Las cuotas se actualizan en tiempo real, lo que permite reaccionar rápidamente a los cambios en el desarrollo de los eventos. La interfaz en vivo está optimizada para un acceso rápido a los mercados, consultar estadísticas y realizar apuestas en solo unos clics."}',
             'value_fr' => '{"0":"Dans la section des paris en direct, les utilisateurs peuvent choisir des événements de football, tennis, basketball, hockey, esports et d’autres disciplines. Les cotes sont mises à jour en temps réel, permettant de réagir rapidement aux changements du déroulement des événements. L’interface live est optimisée pour un accès rapide aux marchés, la consultation des statistiques et la réalisation de paris en quelques clics."}',
             'value_pt' => '{"0":"Na seção de apostas ao vivo, os usuários podem escolher eventos de futebol, tênis, basquete, hóquei, esports e outras disciplinas. As odds são atualizadas em tempo real, permitindo reações rápidas às mudanças no desenrolar dos eventos. A interface ao vivo é otimizada para acesso rápido aos mercados, visualização de estatísticas e realização de apostas em apenas alguns cliques."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet provides the ability to track events through graphical visualization, showing attacks, goals, fouls, and other key moments. For some matches, live streams are also available. This allows users to assess the situation in the match without the need to switch to external resources."}',
             'value_es' => '{"0":"Ivibet ofrece la posibilidad de seguir los eventos mediante visualización gráfica, mostrando ataques, goles, faltas y otros momentos clave. Para algunos partidos, también hay transmisiones en directo. Esto permite evaluar la situación del partido sin necesidad de recurrir a recursos externos."}',
             'value_fr' => '{"0":"Ivibet offre la possibilité de suivre les événements grâce à une visualisation graphique, montrant les attaques, les buts, les fautes et d’autres moments clés. Pour certains matchs, des retransmissions en direct sont également disponibles. Cela permet d’évaluer la situation du match sans avoir besoin de passer par des ressources externes."}',
             'value_pt' => '{"0":"O Ivibet oferece a possibilidade de acompanhar os eventos por meio de visualização gráfica, mostrando ataques, gols, faltas e outros momentos-chave. Para alguns jogos, também há transmissões ao vivo. Isso permite avaliar a situação da partida sem a necessidade de recorrer a recursos externos."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet has a statistics section that allows users to evaluate events before placing bets and make more informed decisions. For football, detailed match information is available: ball possession, shots on goal, corners, fouls, goal scorers, and a timeline of key moments. In tennis, users can view serve history, points won on serve, set scores, and winning streaks. For basketball and hockey, statistics include team scoring, shooting percentages, interim results, and player statistics."}',
             'value_es' => '{"0":"Ivibet cuenta con una sección de estadísticas que permite a los usuarios evaluar los eventos antes de realizar apuestas y tomar decisiones más fundamentadas. Para el fútbol, se dispone de información detallada de los partidos: posesión del balón, tiros a puerta, saques de esquina, faltas, goleadores y cronología de los momentos clave. En tenis, los usuarios pueden consultar el historial de saques, los puntos ganados en el servicio, el marcador de sets y las rachas de victorias. Para baloncesto y hockey, las estadísticas incluyen puntuación de los equipos, porcentaje de aciertos, resultados intermedios y estadísticas de los jugadores."}',
             'value_fr' => '{"0":"Ivibet dispose d’une section statistiques qui permet aux utilisateurs d’évaluer les événements avant de placer des paris et de prendre des décisions plus éclairées. Pour le football, des informations détaillées sur les matchs sont disponibles : possession de balle, tirs au but, corners, fautes, buteurs et chronologie des moments clés. Au tennis, les utilisateurs peuvent consulter l’historique des services, les points gagnés au service, le score des sets et les séries de victoires. Pour le basketball et le hockey, les statistiques incluent le score des équipes, les pourcentages de réussite, les résultats intermédiaires et les statistiques des joueurs."}',
             'value_pt' => '{"0":"O Ivibet possui uma seção de estatísticas que permite aos usuários avaliar os eventos antes de fazer apostas e tomar decisões mais fundamentadas. Para o futebol, estão disponíveis informações detalhadas das partidas: posse de bola, finalizações, escanteios, faltas, artilheiros e cronologia dos momentos-chave. No tênis, os usuários podem consultar o histórico de saques, pontos ganhos no saque, placar dos sets e sequências de vitórias. Para basquete e hóquei, as estatísticas incluem pontuação das equipes, percentuais de acerto, resultados parciais e estatísticas dos jogadores."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In addition to numerical data, Ivibet offers graphical widgets and interactive tables, allowing users to track events in real time and compare statistics between teams or players."}',
             'value_es' => '{"0":"Además de los datos numéricos, Ivibet ofrece widgets gráficos y tablas interactivas que permiten seguir los eventos en tiempo real y comparar estadísticas entre equipos o jugadores."}',
             'value_fr' => '{"0":"En plus des données chiffrées, Ivibet propose des widgets graphiques et des tableaux interactifs permettant de suivre les événements en temps réel et de comparer les performances entre équipes ou joueurs."}',
             'value_pt' => '{"0":"Além dos dados numéricos, o Ivibet oferece widgets gráficos e tabelas interativas que permitem acompanhar os eventos em tempo real e comparar estatísticas entre equipes ou jogadores."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet has responsible gaming features that allow users to set deposit and betting limits, temporarily block their account, or completely self-exclude from the platform. The website also includes a section with tips on responsible gambling and contacts for organizations that provide support for gambling-related problems."}',
             'value_es' => '{"0":"Ivibet cuenta con funciones de juego responsable que permiten a los usuarios establecer límites de depósito y apuestas, bloquear temporalmente su cuenta o autoexcluirse por completo de la plataforma. El sitio web también incluye una sección con consejos sobre el juego responsable y contactos de organizaciones que brindan apoyo en problemas relacionados con el juego."}',
             'value_fr' => '{"0":"Ivibet dispose de fonctionnalités de jeu responsable permettant aux utilisateurs de définir des limites de dépôt et de mise, de bloquer temporairement leur compte ou de s’auto-exclure complètement de la plateforme. Le site comprend également une section avec des conseils sur le jeu responsable et les coordonnées d’organisations offrant un soutien en cas de problèmes liés au jeu."}',
             'value_pt' => '{"0":"O Ivibet possui recursos de jogo responsável que permitem aos usuários definir limites de depósito e apostas, bloquear temporariamente a conta ou se autoexcluir completamente da plataforma. O site também inclui uma seção com dicas sobre jogo responsável e contatos de organizações que oferecem suporte em problemas relacionados ao jogo."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet supports a wide range of methods for deposits and withdrawals, making the platform convenient for players from different countries. Available options include Visa and Mastercard bank cards, e-wallets like Skrill and Neteller, as well as popular cryptocurrencies such as Bitcoin, Ethereum, and Tether. The minimum deposit is $5. The maximum withdrawal amount is $4,000 per day, $16,000 per week, and $50,000 per month."}',
             'value_es' => '{"0":"Ivibet admite una amplia variedad de métodos para depósitos y retiros, lo que hace que la plataforma sea conveniente para jugadores de diferentes países. Las opciones disponibles incluyen tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill y Neteller, así como criptomonedas populares como Bitcoin, Ethereum y Tether. El depósito mínimo es de $5. El monto máximo de retiro es de $4,000 por día, $16,000 por semana y $50,000 por mes."}',
             'value_fr' => '{"0":"Ivibet prend en charge un large éventail de méthodes pour les dépôts et les retraits, rendant la plateforme pratique pour les joueurs de différents pays. Les options disponibles incluent les cartes bancaires Visa et Mastercard, les portefeuilles électroniques tels que Skrill et Neteller, ainsi que les crypto-monnaies populaires comme Bitcoin, Ethereum et Tether. Le dépôt minimum est de 5 $. Le montant maximum de retrait est de 4 000 $ par jour, 16 000 $ par semaine et 50 000 $ par mois."}',
             'value_pt' => '{"0":"O Ivibet oferece uma grande variedade de métodos para depósitos e saques, tornando a plataforma conveniente para jogadores de diferentes países. As opções disponíveis incluem cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill e Neteller, bem como criptomoedas populares como Bitcoin, Ethereum e Tether. O depósito mínimo é de $5. O valor máximo de saque é $4.000 por dia, $16.000 por semana e $50.000 por mês."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are usually processed instantly, while withdrawals to bank cards can take several business days. Cryptocurrency transactions, on the other hand, are processed much faster, sometimes within a few minutes. Ivibet supports multiple currencies and allows accounts to be opened in fiat or cryptocurrency simultaneously."}',
             'value_es' => '{"0":"Los depósitos generalmente se procesan al instante, mientras que los retiros a tarjetas bancarias pueden tardar varios días hábiles. Por otro lado, las transacciones con criptomonedas se procesan mucho más rápido, a veces en pocos minutos. Ivibet admite múltiples monedas y permite abrir cuentas en moneda fiduciaria o criptomoneda simultáneamente."}',
             'value_fr' => '{"0":"Les dépôts sont généralement traités instantanément, tandis que les retraits sur les cartes bancaires peuvent prendre plusieurs jours ouvrables. Les transactions en crypto-monnaies, en revanche, sont beaucoup plus rapides, parfois en quelques minutes. Ivibet prend en charge la multi-devises et permet d’ouvrir un compte en devises fiduciaires ou en crypto-monnaie simultanément."}',
             'value_pt' => '{"0":"Os depósitos geralmente são processados instantaneamente, enquanto os saques para cartões bancários podem levar vários dias úteis. As transações em criptomoedas, por outro lado, são processadas muito mais rapidamente, às vezes em poucos minutos. O Ivibet oferece suporte a múltiplas moedas e permite abrir contas em moeda fiduciária ou criptomoeda simultaneamente."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet customer support operates around the clock. You can contact them via the website chat or by email."}',
             'value_es' => '{"0":"El servicio de atención al cliente de Ivibet funciona las 24 horas. Se puede contactar a través del chat en el sitio web o por correo electrónico."}',
             'value_fr' => '{"0":"Le service client d’Ivibet est disponible 24h/24. Il est possible de les contacter via le chat du site ou par e-mail."}',
             'value_pt' => '{"0":"O suporte ao cliente do Ivibet funciona 24 horas por dia. É possível entrar em contato através do chat no site ou por e-mail."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of games and sports markets",
                                 "1":"Cryptocurrency support",
                                 "2":"Availability of live bets",
                                 "3":"Mobile-friendly interface"},
                             "1":
                                {"0":"Curaçao license does not provide a high level of protection",
                                 "1":"Occasional long verification times for withdrawals"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de juegos y mercados deportivos",
                                 "1":"Soporte para criptomonedas",
                                 "2":"Disponibilidad de apuestas en vivo",
                                 "3":"Interfaz adaptada para dispositivos móviles"},
                             "1":
                                {"0":"La licencia de Curazao no ofrece un alto nivel de protección",
                                 "1":"Casos de verificaciones prolongadas en los retiros"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre de jeux et de marchés sportifs",
                                 "1":"Prise en charge des cryptomonnaies",
                                 "2":"Disponibilité des paris en direct",
                                 "3":"Interface adaptée aux appareils mobiles"},
                             "1":
                                {"0":"La licence de Curaçao n’offre pas un niveau de protection élevé",
                                 "1":"Cas de vérifications longues pour les retraits"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande quantidade de jogos e mercados esportivos",
                                 "1":"Suporte a criptomoedas",
                                 "2":"Disponibilidade de apostas ao vivo",
                                 "3":"Interface adaptada para dispositivos móveis"},
                             "1":
                                {"0":"A licença de Curaçao não oferece alto nível de proteção",
                                 "1":"Casos de verificações longas em saques"}
                             }',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Ivibet"}',
                'value_fr' => '{"0":"FAQ de Ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Ivibet"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 38
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"How quickly is account verification completed at Ivibet?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación de la cuenta en Ivibet?"}',
             'value_fr' => '{"0":"Combien de temps prend la vérification du compte chez Ivibet ?"}',
             'value_pt' => '{"0":"Quão rápido é o processo de verificação de conta no Ivibet?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 39
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Verification usually requires uploading photos of documents and can take anywhere from a few hours to several business days, depending on the workload of the support team."}',
             'value_es' => '{"0":"La verificación generalmente requiere subir fotos de los documentos y puede tardar desde unas pocas horas hasta varios días hábiles, según la carga de trabajo del equipo de soporte."}',
             'value_fr' => '{"0":"La vérification nécessite généralement de télécharger des photos des documents et peut prendre de quelques heures à plusieurs jours ouvrables, selon la charge de travail de l’équipe d’assistance."}',
             'value_pt' => '{"0":"A verificação geralmente exige o envio de fotos dos documentos e pode levar de algumas horas a vários dias úteis, dependendo da carga de trabalho da equipe de suporte."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 40
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Which currencies can be used for betting?"}',
             'value_es' => '{"0":"¿Qué monedas se pueden usar para apostar?"}',
             'value_fr' => '{"0":"Quelles devises peuvent être utilisées pour les paris ?"}',
             'value_pt' => '{"0":"Quais moedas podem ser usadas para apostas?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 41
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The platform accepts both fiat currencies and popular cryptocurrencies, making it convenient for international users."}',
             'value_es' => '{"0":"La plataforma acepta tanto monedas fiduciarias como criptomonedas populares, lo que la hace conveniente para usuarios internacionales."}',
             'value_fr' => '{"0":"La plateforme accepte à la fois les devises fiduciaires et les cryptomonnaies populaires, ce qui la rend pratique pour les utilisateurs internationaux."}',
             'value_pt' => '{"0":"A plataforma aceita tanto moedas fiduciárias quanto criptomoedas populares, tornando-a conveniente para usuários internacionais."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 42
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Are mobile apps available and do they work reliably?"}',
             'value_es' => '{"0":"¿Están disponibles las aplicaciones móviles y funcionan de manera estable?"}',
             'value_fr' => '{"0":"Les applications mobiles sont-elles disponibles et fonctionnent-elles de manière fiable ?"}',
             'value_pt' => '{"0":"Os aplicativos móveis estão disponíveis e funcionam de forma estável?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 43
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet has a mobile version of the website as well as web apps for Android and iOS, which provide most of the features of the desktop version."}',
             'value_es' => '{"0":"Ivibet cuenta con una versión móvil del sitio web, así como aplicaciones web para Android e iOS, que ofrecen la mayoría de las funciones de la versión de escritorio."}',
             'value_fr' => '{"0":"Ivibet dispose d’une version mobile du site ainsi que d’applications web pour Android et iOS, offrant la plupart des fonctionnalités de la version bureau."}',
             'value_pt' => '{"0":"O Ivibet possui uma versão móvel do site, bem como web apps para Android e iOS, que oferecem a maioria das funcionalidades da versão desktop."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 44
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to pay taxes on winnings at Ivibet?"}',
             'value_es' => '{"0":"¿Es necesario pagar impuestos sobre las ganancias en Ivibet?"}',
             'value_fr' => '{"0":"Faut-il payer des impôts sur les gains chez Ivibet ?"}',
             'value_pt' => '{"0":"É necessário pagar impostos sobre os ganhos no Ivibet?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 45
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Paying taxes on winnings depends on the laws of your country."}',
             'value_es' => '{"0":"El pago de impuestos sobre las ganancias depende de la legislación de su país."}',
             'value_fr' => '{"0":"Le paiement des impôts sur les gains dépend de la législation de votre pays."}',
             'value_pt' => '{"0":"O pagamento de impostos sobre os ganhos depende da legislação do seu país."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 46
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"What are the withdrawal limits?"}',
             'value_es' => '{"0":"¿Cuáles son los límites de retiro?"}',
             'value_fr' => '{"0":"Quelles sont les limites de retrait ?"}',
             'value_pt' => '{"0":"Quais são os limites de saque?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 47
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The daily withdrawal limit at Ivibet is up to $4,000."}',
             'value_es' => '{"0":"El límite diario de retiro en Ivibet es de hasta $4,000."}',
             'value_fr' => '{"0":"La limite quotidienne de retrait chez Ivibet est de 4 000 $."}',
             'value_pt' => '{"0":"O limite diário de saque no Ivibet é de até $4.000."}',
             'order' => 47
            ]
        );
    }
}
