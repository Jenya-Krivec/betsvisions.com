<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET is an international platform for sports betting and casino gaming that was launched in 2020. The site is owned by TechSolutions Group N.V. and operates under a Curaçao license. 20BET offers more than 40 sports for betting, including football, tennis, basketball, hockey, esports, and even political events."}',
             'value_es' => '{"0":"20BET es una plataforma internacional de apuestas deportivas y juegos de casino que apareció en 2020. El sitio pertenece a la empresa TechSolutions Group N.V. y opera bajo una licencia de Curazao. 20BET ofrece más de 40 deportes para apostar, incluidos fútbol, tenis, baloncesto, hockey, deportes electrónicos e incluso eventos políticos."}',
             'value_fr' => '{"0":"20BET est une plateforme internationale de paris sportifs et de jeux de casino lancée en 2020. Le site appartient à la société TechSolutions Group N.V. et fonctionne sous une licence de Curaçao. 20BET propose plus de 40 disciplines sportives sur lesquelles parier, notamment le football, le tennis, le basketball, le hockey, l’esport et même les événements politiques."}',
             'value_pt' => '{"0":"A 20BET é uma plataforma internacional de apostas esportivas e jogos de cassino que foi lançada em 2020. O site pertence à empresa TechSolutions Group N.V. e opera sob uma licença de Curaçao. A 20BET oferece mais de 40 esportes para apostas, incluindo futebol, tênis, basquete, hóquei, eSports e até eventos políticos."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The platform is available in more than 15 languages, including English, German, Spanish, Portuguese, and French. The site is fully optimized for mobile devices, allowing users to place bets from anywhere, and the interface design is simple and convenient."}',
             'value_es' => '{"0":"La plataforma está disponible en más de 15 idiomas, entre ellos inglés, alemán, español, portugués y francés. El sitio está adaptado para dispositivos móviles, lo que permite apostar desde cualquier lugar, y su diseño es sencillo y fácil de usar."}',
             'value_fr' => '{"0":"La plateforme est disponible en plus de 15 langues, dont l’anglais, l’allemand, l’espagnol, le portugais et le français. Le site est optimisé pour les appareils mobiles, permettant de parier depuis n’importe où, et son interface est simple et agréable à utiliser."}',
             'value_pt' => '{"0":"A plataforma está disponível em mais de 15 idiomas, incluindo inglês, alemão, espanhol, português e francês. O site é totalmente otimizado para dispositivos móveis, permitindo fazer apostas de qualquer lugar, e o design da interface é simples e intuitivo."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET holds an official license issued by the Government of Curaçao, allowing it to operate on the international market. All personal user data is protected through advanced SSL encryption, and financial transactions are processed via trusted payment systems."}',
             'value_es' => '{"0":"20BET cuenta con una licencia oficial emitida por el Gobierno de Curazao, lo que le permite operar en el mercado internacional. Todos los datos personales de los usuarios están protegidos mediante un cifrado SSL avanzado, y las transacciones financieras se realizan a través de sistemas de pago seguros."}',
             'value_fr' => '{"0":"20BET détient une licence officielle délivrée par le gouvernement de Curaçao, ce qui lui permet d’opérer sur le marché international. Toutes les données personnelles des utilisateurs sont protégées par un cryptage SSL moderne, et les transactions financières sont effectuées via des systèmes de paiement fiables."}',
             'value_pt' => '{"0":"A 20BET possui uma licença oficial emitida pelo Governo de Curaçao, o que lhe permite atuar no mercado internacional. Todos os dados pessoais dos usuários são protegidos com criptografia SSL avançada, e as transações financeiras são processadas por meio de sistemas de pagamento confiáveis."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The site does not store payment information in plain form, which significantly increases the level of security. The company also strictly adheres to anti-fraud policies and regularly monitors suspicious transactions."}',
             'value_es' => '{"0":"El sitio no almacena información de pago en formato abierto, lo que aumenta considerablemente el nivel de seguridad. La empresa también sigue estrictamente una política antifraude y revisa regularmente las transacciones sospechosas."}',
             'value_fr' => '{"0":"Le site ne conserve pas les informations de paiement sous forme non chiffrée, ce qui renforce considérablement la sécurité. L’entreprise applique également une politique stricte de lutte contre la fraude et contrôle régulièrement les transactions suspectes."}',
             'value_pt' => '{"0":"O site não armazena informações de pagamento em formato aberto, o que aumenta significativamente o nível de segurança. A empresa também segue rigorosamente uma política antifraude e verifica regularmente as transações suspeitas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"One of the main advantages of 20BET is the large number of betting options available for each event. Players can choose between classic markets such as match winner, total, or handicap, and more specific ones like number of corners, goal scorers, half-time results, or combination bets."}',
             'value_es' => '{"0":"Una de las principales ventajas de 20BET es la gran cantidad de opciones de apuestas disponibles para cada evento. Los jugadores pueden elegir entre mercados clásicos como ganador, total o hándicap, y otros más detallados como número de saques de esquina, autores de los goles, resultados por tiempo o combinaciones de apuestas."}',
             'value_fr' => '{"0":"L’un des principaux avantages de 20BET est le grand nombre d’options de paris disponibles pour chaque événement. Les joueurs peuvent choisir entre des marchés classiques tels que le vainqueur du match, le total ou le handicap, ainsi que des options plus détaillées comme le nombre de corners, les buteurs, les résultats à la mi-temps ou les paris combinés."}',
             'value_pt' => '{"0":"Uma das principais vantagens da 20BET é a grande quantidade de opções de apostas disponíveis para cada evento. Os jogadores podem escolher entre mercados clássicos, como vencedor, total ou handicap, e outros mais específicos, como número de escanteios, autores dos gols, resultados por tempo ou apostas combinadas."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In football matches, there are over 500 markets available, allowing players to create complex accumulator bets. Basketball, tennis, and other popular sports also feature a wide variety of options."}',
             'value_es' => '{"0":"En los partidos de fútbol hay más de 500 mercados disponibles, lo que permite crear combinadas complejas. También hay una amplia variedad de opciones para el baloncesto, el tenis y otros deportes populares."}',
             'value_fr' => '{"0":"Lors des matchs de football, plus de 500 marchés sont proposés, ce qui permet de créer des paris combinés complexes. Le basketball, le tennis et d’autres sports populaires offrent également une grande variété d’options."}',
             'value_pt' => '{"0":"Nas partidas de futebol, há mais de 500 mercados disponíveis, permitindo criar apostas múltiplas complexas. Basquete, tênis e outros esportes populares também oferecem uma ampla variedade de opções."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers more than 30,000 events every month. The most popular among users are football, tennis, and basketball. There is also a dedicated esports section where you can bet on matches from Dota 2, CS2, Valorant, League of Legends, and other disciplines."}',
             'value_es' => '{"0":"20BET ofrece más de 30.000 eventos cada mes. Los más populares entre los usuarios son el fútbol, el tenis y el baloncesto. También hay una sección dedicada a los deportes electrónicos, donde se puede apostar en partidas de Dota 2, CS2, Valorant, League of Legends y otras disciplinas."}',
             'value_fr' => '{"0":"20BET propose plus de 30 000 événements chaque mois. Les plus populaires parmi les utilisateurs sont le football, le tennis et le basketball. Il existe également une section dédiée à l’e-sport, où il est possible de parier sur des matchs de Dota 2, CS2, Valorant, League of Legends et d’autres disciplines."}',
             'value_pt' => '{"0":"A 20BET oferece mais de 30 mil eventos todos os meses. Os mais populares entre os usuários são futebol, tênis e basquete. Há também uma seção dedicada aos esportes eletrônicos, onde é possível apostar em partidas de Dota 2, CS2, Valorant, League of Legends e outras modalidades."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The platform is easy to navigate — you can quickly find the desired tournament or match. For each event, the current odds are displayed, along with statistics that help players make informed decisions."}',
             'value_es' => '{"0":"La plataforma es fácil de navegar, lo que permite encontrar rápidamente el torneo o partido deseado. En cada evento se muestran las cuotas actuales, así como estadísticas que ayudan a tomar decisiones más informadas."}',
             'value_fr' => '{"0":"La plateforme est facile à utiliser, permettant de trouver rapidement le tournoi ou le match recherché. Pour chaque événement, les cotes actuelles sont affichées, ainsi que des statistiques utiles pour prendre des décisions éclairées."}',
             'value_pt' => '{"0":"A plataforma é fácil de navegar — é possível encontrar rapidamente o torneio ou partida desejada. Para cada evento, são exibidas as cotações atuais e estatísticas que ajudam os jogadores a tomar decisões mais informadas."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The casino section on 20BET features over 4,000 games from leading developers such as Pragmatic Play, NetEnt, Microgaming, Betsoft, and Play’n GO. The catalog includes classic slots, video games, roulette, blackjack, poker, and live games with real dealers."}',
             'value_es' => '{"0":"La sección de casino en 20BET cuenta con más de 4.000 juegos de los principales desarrolladores, como Pragmatic Play, NetEnt, Microgaming, Betsoft y Play’n GO. En el catálogo se pueden encontrar tragamonedas clásicas, juegos de video, ruleta, blackjack, póker y juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"La section casino de 20BET propose plus de 4 000 jeux issus de grands développeurs tels que Pragmatic Play, NetEnt, Microgaming, Betsoft et Play’n GO. Le catalogue comprend des machines à sous classiques, des jeux vidéo, la roulette, le blackjack, le poker et des jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"A seção de cassino da 20BET oferece mais de 4.000 jogos de desenvolvedores líderes, como Pragmatic Play, NetEnt, Microgaming, Betsoft e Play’n GO. No catálogo, é possível encontrar slots clássicos, jogos de vídeo, roleta, blackjack, pôquer e jogos ao vivo com dealers reais."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"For user convenience, all games are divided into categories. There is also a search option by provider or game title. The casino operates smoothly without delays, even on mobile devices."}',
             'value_es' => '{"0":"Para mayor comodidad, todos los juegos están organizados por categorías. También existe la opción de búsqueda por proveedor o por nombre del juego. El casino funciona de manera estable y sin retrasos, incluso en dispositivos móviles."}',
             'value_fr' => '{"0":"Pour plus de commodité, tous les jeux sont classés par catégories. Il est également possible de rechercher par fournisseur ou par nom de jeu. Le casino fonctionne de manière fluide et sans latence, même sur les appareils mobiles."}',
             'value_pt' => '{"0":"Para maior comodidade, todos os jogos estão organizados por categorias. Também há uma opção de busca por provedor ou nome do jogo. O cassino funciona de forma estável, sem atrasos, mesmo em dispositivos móveis."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers competitive odds that often exceed market averages. For example, in English Premier League matches, the odds for the favorite’s win can reach 1.95. In matches with roughly equal chances for both sides, 20BET frequently offers odds of 2.00 for each team."}',
             'value_es' => '{"0":"20BET ofrece cuotas competitivas que a menudo superan los promedios del mercado. Por ejemplo, en los partidos de la Premier League inglesa, la cuota para la victoria del favorito puede alcanzar 1.95. En los encuentros con probabilidades similares, 20BET suele ofrecer cuotas de 2.00 para ambos equipos."}',
             'value_fr' => '{"0":"20BET propose des cotes compétitives qui dépassent souvent la moyenne du marché. Par exemple, pour les matchs de la Premier League anglaise, la cote pour la victoire du favori peut atteindre 1,95. Dans les rencontres où les chances sont à peu près égales, 20BET offre souvent des cotes de 2,00 pour chaque équipe."}',
             'value_pt' => '{"0":"A 20BET oferece odds competitivas que muitas vezes superam a média do mercado. Por exemplo, em partidas da Premier League inglesa, a odd para a vitória do favorito pode chegar a 1,95. Em jogos com chances equilibradas, a 20BET costuma oferecer odds de 2,00 para ambas as equipes."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that 20BET allows players to view odds in different formats — decimal, fractional, or American — which makes it easy to adjust the interface according to personal preferences."}',
             'value_es' => '{"0":"También cabe destacar que 20BET permite a los jugadores visualizar las cuotas en diferentes formatos —decimal, fraccional o americano— lo que facilita adaptar la interfaz a las preferencias personales."}',
             'value_fr' => '{"0":"Il convient également de noter que 20BET permet aux joueurs d’afficher les cotes dans différents formats — décimal, fractionnaire ou américain — ce qui facilite l’adaptation de l’interface selon les préférences personnelles."}',
             'value_pt' => '{"0":"Também vale destacar que a 20BET permite que os jogadores visualizem as odds em diferentes formatos — decimal, fracionário ou americano — o que facilita ajustar a interface conforme as preferências pessoais."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers a wide range of live bets. Players can place wagers during matches as the odds are updated instantly."}',
             'value_es' => '{"0":"20BET ofrece una gran cantidad de apuestas en vivo. Los jugadores pueden apostar durante los partidos, ya que las cuotas se actualizan al instante."}',
             'value_fr' => '{"0":"20BET propose un grand nombre de paris en direct. Les joueurs peuvent miser pendant les matchs, car les cotes sont mises à jour instantanément."}',
             'value_pt' => '{"0":"A 20BET oferece uma grande variedade de apostas ao vivo. Os jogadores podem apostar durante as partidas, pois as odds são atualizadas instantaneamente."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Although the full live video streaming feature is still limited, most events include graphic simulations that display key moments of the game. The Live section interface is well designed and convenient for following multiple events simultaneously."}',
             'value_es' => '{"0":"Aunque la función completa de transmisión en vivo aún es limitada, la mayoría de los eventos cuentan con transmisiones gráficas que muestran los momentos clave del juego. La interfaz de la sección En Vivo está bien diseñada y resulta cómoda para seguir varios eventos a la vez."}',
             'value_fr' => '{"0":"Bien que la fonction complète de diffusion vidéo en direct soit encore limitée, la plupart des événements offrent des représentations graphiques montrant les moments clés du jeu. L’interface de la section Live est bien conçue et pratique pour suivre plusieurs événements en même temps."}',
             'value_pt' => '{"0":"Embora o recurso completo de transmissões ao vivo ainda seja limitado, a maioria dos eventos conta com transmissões gráficas que mostram os momentos principais do jogo. A interface da seção Ao Vivo é bem projetada e conveniente para acompanhar vários eventos simultaneamente."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET provides users with detailed statistics for pre-match analysis. In the statistics section, you can view previous team results, player form, head-to-head history, and performance indicators."}',
             'value_es' => '{"0":"20BET ofrece a los usuarios estadísticas detalladas para el análisis previo a los partidos. En la sección de estadísticas se pueden consultar los resultados anteriores de los equipos, el estado de forma de los jugadores, el historial de enfrentamientos directos y los indicadores de rendimiento."}',
             'value_fr' => '{"0":"20BET met à la disposition des utilisateurs des statistiques détaillées pour l’analyse d’avant-match. Dans la section des statistiques, il est possible de consulter les résultats précédents des équipes, la forme des joueurs, l’historique des confrontations directes et les indicateurs de performance."}',
             'value_pt' => '{"0":"A 20BET oferece aos usuários estatísticas detalhadas para a análise pré-jogo. Na seção de estatísticas, é possível ver os resultados anteriores das equipes, a forma dos jogadores, o histórico de confrontos diretos e os indicadores de desempenho."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Responsible Gaming Features"}',
                'value_es' => '{"0":"Funciones de Juego Responsable"}',
                'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
                'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The bookmaker supports responsible gaming principles. On the site, you can set limits on deposits and spending, as well as temporarily restrict access to your account."}',
             'value_es' => '{"0":"El operador respalda los principios de juego responsable. En el sitio, se pueden establecer límites de depósitos y gastos, así como restringir temporalmente el acceso a la cuenta."}',
             'value_fr' => '{"0":"Le bookmaker applique les principes de jeu responsable. Sur le site, il est possible de définir des limites de dépôts et de dépenses, ainsi que de restreindre temporairement l’accès au compte."}',
             'value_pt' => '{"0":"A casa de apostas apoia os princípios do jogo responsável. No site, é possível definir limites de depósitos e gastos, bem como restringir temporariamente o acesso à conta."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers more than 30 payment methods. These include Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, Jeton, as well as cryptocurrencies like Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"20BET ofrece más de 30 métodos de pago. Entre ellos se incluyen tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, ecoPayz, Jeton, así como criptomonedas como Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"20BET propose plus de 30 méthodes de paiement. Cela inclut les cartes bancaires Visa et Mastercard, les portefeuilles électroniques comme Skrill, Neteller, ecoPayz, Jeton, ainsi que les cryptomonnaies Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"20BET oferece mais de 30 métodos de pagamento. Entre eles estão cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, Jeton, bem como criptomoedas como Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is 10 dollars or the equivalent in the account currency. Withdrawals are processed quickly, usually within 24 hours, but bank transfers may take up to three days."}',
             'value_es' => '{"0":"El depósito mínimo es de 10 dólares o su equivalente en la moneda de la cuenta. Los retiros se procesan rápidamente, generalmente dentro de 24 horas, pero las transferencias bancarias pueden tardar hasta tres días."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 dollars ou l’équivalent dans la devise du compte. Les retraits sont traités rapidement, généralement sous 24 heures, mais les virements bancaires peuvent prendre jusqu’à trois jours."}',
             'value_pt' => '{"0":"O depósito mínimo é de 10 dólares ou o equivalente na moeda da conta. Os saques são processados rapidamente, geralmente em até 24 horas, mas transferências bancárias podem levar até três dias."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Customer support at 20BET operates around the clock. You can contact the support team via online chat on the website, email, or a special contact form on the site."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 20BET funciona las 24 horas. Puede ponerse en contacto con el equipo de soporte a través del chat en línea en el sitio web, por correo electrónico o mediante un formulario especial en la página."}',
             'value_fr' => '{"0":"Le service client de 20BET est disponible 24 heures sur 24. Vous pouvez contacter l’équipe d’assistance via le chat en ligne sur le site, par e-mail ou via un formulaire spécial sur le site."}',
             'value_pt' => '{"0":"O atendimento ao cliente da 20BET funciona 24 horas por dia. É possível entrar em contato com a equipe de suporte através do chat online no site, por e-mail ou por meio de um formulário especial na página."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and markets",
                                 "1":"Large variety of casino games",
                                 "2":"Support for cryptocurrencies",
                                 "3":"Loyalty program"},
                             "1":
                                {"0":"No video streaming",
                                 "1":"Restrictions for players from certain countries"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de eventos deportivos y mercados",
                                 "1":"Amplia variedad de juegos de casino",
                                 "2":"Soporte para criptomonedas",
                                 "3":"Programa de fidelidad"},
                             "1":
                                {"0":"Sin transmisión de video",
                                 "1":"Restricciones para jugadores de ciertos países"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d\'événements sportifs et de marchés",
                                 "1":"Grande variété de jeux de casino",
                                 "2":"Support des crypto-monnaies",
                                 "3":"Programme de fidélité"},
                             "1":
                                {"0":"Pas de diffusion vidéo",
                                 "1":"Restrictions pour les joueurs de certains pays"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande seleção de eventos esportivos e mercados",
                                 "1":"Ampla variedade de jogos de cassino",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Programa de fidelidade"},
                             "1":
                                {"0":"Sem transmissão de vídeo",
                                 "1":"Restrições para jogadores de alguns países"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to use 20BET?"}',
             'value_es' => '{"0":"¿Es legal usar 20BET?"}',
             'value_fr' => '{"0":"Est-il légal d’utiliser 20BET?"}',
             'value_pt' => '{"0":"É legal usar o 20BET?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under an international Curaçao license."}',
             'value_es' => '{"0":"Sí, la plataforma opera bajo una licencia internacional de Curazao."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous une licence internationale de Curaçao."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob uma licença internacional de Curaçao."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 39
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 40
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is 10 euros."}',
             'value_es' => '{"0":"El depósito mínimo es de 10 euros."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 10 euros."}',
             'value_pt' => '{"0":"O depósito mínimo é de 10 euros."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 41
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tardan en procesarse los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 42
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Usually within 24 hours, depending on the payment method."}',
             'value_es' => '{"0":"Normalmente en un plazo de 24 horas, dependiendo del método de pago."}',
             'value_fr' => '{"0":"Généralement sous 24 heures, selon le mode de paiement."}',
             'value_pt' => '{"0":"Geralmente em até 24 horas, dependendo do método de pagamento."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 43
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 44
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is an Android app, a web app for iOS, and a mobile version of the site."}',
             'value_es' => '{"0":"Sí, hay una aplicación para Android, una aplicación web para iOS y una versión móvil del sitio."}',
             'value_fr' => '{"0":"Oui, il existe une application Android, une application web pour iOS et une version mobile du site."}',
             'value_pt' => '{"0":"Sim, há um aplicativo para Android, um aplicativo web para iOS e uma versão móvel do site."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 45
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda?"}',
             'value_fr' => '{"0":"Peut-on utiliser les cryptomonnaies?"}',
             'value_pt' => '{"0":"É possível usar criptomoeda?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 46
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform accepts Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"Sí, la plataforma acepta Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"Oui, la plateforme accepte Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"Sim, a plataforma aceita Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 46
            ]
        );
    }
}
