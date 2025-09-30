<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET began its operations in 2007–2008 and has since become one of the most well-known global bookmakers for sports betting and online casino games. The company operates in dozens of countries and features a multilingual interface, including English, Spanish, Portuguese, and others."}',
             'value_es' => '{"0":"1XBET comenzó sus operaciones en 2007–2008 y desde entonces se ha convertido en uno de los bookmakers globales más conocidos para apuestas deportivas y juegos de casino en línea. La empresa opera en decenas de países y cuenta con una interfaz multilingüe, incluyendo inglés, español, portugués y otros."}',
             'value_fr' => '{"0":"1XBET a commencé ses activités en 2007–2008 et est depuis devenu l’un des bookmakers mondiaux les plus connus pour les paris sportifs et les jeux de casino en ligne. La société opère dans des dizaines de pays et propose une interface multilingue, incluant l’anglais, l’espagnol, le portugais et d’autres langues."}',
             'value_pt' => '{"0":"A 1XBET iniciou suas atividades em 2007–2008 e, desde então, tornou-se uma das casas de apostas globais mais conhecidas para apostas esportivas e jogos de cassino online. A empresa opera em dezenas de países e possui uma interface multilíngue, incluindo inglês, espanhol, português e outros idiomas."}',
             'order' => 1
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting 1XBET\'s partnerships with famous sports clubs such as Barcelona and PSG, as well as its collaboration with the African Football Confederation (CAF). These facts confirm not only the company\'s financial capacity but also its authority on a global level."}',
             'value_es' => '{"0":"También vale la pena destacar las asociaciones de 1XBET con clubes deportivos famosos como el Barcelona y el PSG, así como su colaboración con la Confederación Africana de Fútbol (CAF). Estos hechos confirman no solo la capacidad financiera de la empresa, sino también su autoridad a nivel mundial."}',
             'value_fr' => '{"0":"Il convient également de souligner les partenariats de 1XBET avec des clubs sportifs célèbres tels que le FC Barcelone et le PSG, ainsi que sa collaboration avec la Confédération Africaine de Football (CAF). Ces faits confirment non seulement la capacité financière de l’entreprise, mais aussi son autorité à l’échelle mondiale."}',
             'value_pt' => '{"0":"Também vale destacar as parcerias da 1XBET com clubes esportivos famosos, como Barcelona e PSG, bem como sua colaboração com a Confederação Africana de Futebol (CAF). Esses fatos confirmam não apenas a capacidade financeira da empresa, mas também sua autoridade em nível global."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The website has a user-friendly structure, loads quickly even with a slow internet connection, and is adapted for various devices. Additionally, mobile applications for Android and iOS are available, allowing users to stay in the game anywhere."}',
             'value_es' => '{"0":"El sitio web tiene una estructura fácil de usar, se carga rápidamente incluso con una conexión a Internet lenta y está adaptado para varios dispositivos. Además, hay aplicaciones móviles para Android y iOS, lo que permite a los usuarios seguir jugando en cualquier lugar."}',
             'value_fr' => '{"0":"Le site dispose d’une structure conviviale, se charge rapidement même avec une connexion Internet faible et est adapté à différents appareils. De plus, des applications mobiles pour Android et iOS sont disponibles, permettant aux utilisateurs de rester dans le jeu partout."}',
             'value_pt' => '{"0":"O site possui uma estrutura amigável, carrega rapidamente mesmo com conexão à internet lenta e é adaptado para diversos dispositivos. Além disso, aplicativos móveis para Android e iOS estão disponíveis, permitindo que os usuários continuem jogando em qualquer lugar."}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Security and License"}',
             'value_es' => '{"0":"Seguridad y Licencia"}',
             'value_fr' => '{"0":"Sécurité et Licence"}',
             'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET holds a license from the Curacao regulator (Curacao eGaming), which allows it to accept bets in many countries. However, this license does not provide the same level of regulatory oversight as in the United Kingdom, Malta, or other strictly regulated jurisdictions."}',
             'value_es' => '{"0":"1XBET posee una licencia del regulador de Curazao (Curacao eGaming), que le permite aceptar apuestas en muchos países. Sin embargo, esta licencia no ofrece el mismo nivel de supervisión regulatoria que, por ejemplo, en el Reino Unido, Malta u otras jurisdicciones estrictamente reguladas."}',
             'value_fr' => '{"0":"1XBET détient une licence du régulateur de Curaçao (Curacao eGaming), qui lui permet d’accepter des paris dans de nombreux pays. Cependant, cette licence ne fournit pas le même niveau de contrôle réglementaire qu’au Royaume-Uni, à Malte ou dans d’autres juridictions strictement réglementées."}',
             'value_pt' => '{"0":"A 1XBET possui uma licença do regulador de Curaçao (Curacao eGaming), que lhe permite aceitar apostas em muitos países. No entanto, essa licença não oferece o mesmo nível de supervisão regulatória que, por exemplo, no Reino Unido, Malta ou outras jurisdições estritamente regulamentadas."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"From a technical security perspective, 1XBET uses modern data encryption methods, including SSL protocol, making it impossible for third parties to intercept personal information or payment details. All transactions take place in a secure environment."}',
             'value_es' => '{"0":"Desde el punto de vista de la seguridad técnica, 1XBET utiliza métodos modernos de cifrado de datos, incluido el protocolo SSL, lo que hace imposible que terceros intercepten la información personal o los datos de pago. Todas las transacciones se realizan en un entorno seguro."}',
             'value_fr' => '{"0":"Du point de vue de la sécurité technique, 1XBET utilise des méthodes modernes de cryptage des données, y compris le protocole SSL, ce qui rend impossible l’interception par des tiers des informations personnelles ou des données de paiement. Toutes les transactions se déroulent dans un environnement sécurisé."}',
             'value_pt' => '{"0":"Do ponto de vista da segurança técnica, a 1XBET utiliza métodos modernos de criptografia de dados, incluindo o protocolo SSL, tornando impossível que terceiros interceptem informações pessoais ou dados de pagamento. Todas as transações ocorrem em um ambiente seguro."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The company also pays attention to user verification. The identity confirmation procedure may seem somewhat lengthy, but it provides an additional level of security. This helps prevent the creation of fake accounts and protects players from risks associated with unauthorized use of funds. An important point is that 1XBET allows users to enable two-factor authentication, which increases control over their personal account."}',
             'value_es' => '{"0":"La compañía también presta atención a la verificación de usuarios. El procedimiento de confirmación de identidad puede parecer algo largo, pero proporciona un nivel adicional de seguridad. Esto ayuda a evitar la creación de cuentas falsas y protege a los jugadores de los riesgos asociados con el uso no autorizado de fondos. Un punto importante es que 1XBET permite activar la autenticación de dos factores, lo que aumenta el control sobre la cuenta personal."}',
             'value_fr' => '{"0":"La société accorde également de l’importance à la vérification des utilisateurs. La procédure de confirmation d’identité peut sembler un peu longue, mais elle offre un niveau de sécurité supplémentaire. Cela permet d’éviter la création de comptes frauduleux et protège les joueurs contre les risques liés à l’utilisation non autorisée des fonds. Un point important est que 1XBET permet d’activer l’authentification à deux facteurs, ce qui renforce le contrôle sur le compte personnel."}',
             'value_pt' => '{"0":"A empresa também dá atenção à verificação dos usuários. O procedimento de confirmação de identidade pode parecer um pouco demorado, mas fornece um nível adicional de segurança. Isso ajuda a evitar a criação de contas falsas e protege os jogadores contra riscos relacionados ao uso não autorizado de fundos. Um ponto importante é que a 1XBET permite habilitar a autenticação de dois fatores, o que aumenta o controle sobre a conta pessoal."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Betting Market Depth"}',
             'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
             'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
             'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"One of the main advantages of 1XBET is the large number of betting options covering events from all over the world. More than forty sports are offered, including football, basketball, tennis, hockey, boxing, and volleyball, as well as less popular disciplines such as snooker, darts, or water polo. The platform pays special attention to esports, offering tournaments in Dota 2, CS:GO, League of Legends, and other games."}',
             'value_es' => '{"0":"Una de las principales ventajas de 1XBET es la gran cantidad de opciones de apuestas que cubren eventos de todo el mundo. Se ofrecen más de cuarenta deportes, incluyendo fútbol, baloncesto, tenis, hockey, boxeo y voleibol, así como disciplinas menos populares como snooker, dardos o waterpolo. La plataforma presta especial atención a los deportes electrónicos, con torneos de Dota 2, CS:GO, League of Legends y otros juegos."}',
             'value_fr' => '{"0":"L’un des principaux avantages de 1XBET est le grand nombre d’options de paris couvrant des événements du monde entier. Plus de quarante sports sont proposés, notamment le football, le basketball, le tennis, le hockey, la boxe et le volley-ball, ainsi que des disciplines moins populaires telles que le snooker, les fléchettes ou le water-polo. La plateforme accorde une attention particulière à l’e-sport, avec des tournois de Dota 2, CS:GO, League of Legends et d’autres jeux."}',
             'value_pt' => '{"0":"Uma das principais vantagens da 1XBET é a grande quantidade de opções de apostas que abrangem eventos de todo o mundo. São oferecidos mais de quarenta esportes, incluindo futebol, basquete, tênis, hóquei, boxe e vôlei, bem como disciplinas menos populares, como sinuca, dardos ou polo aquático. A plataforma dedica atenção especial aos eSports, oferecendo torneios de Dota 2, CS:GO, League of Legends e outros jogos."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"A distinctive feature of 1XBET is the huge variety of betting markets for each match. In football, you can bet not only on classic outcomes like team victory or total goals. Available options include handicaps, exact score, individual player performance, number of corners, cards, or even the minute of the first goal."}',
             'value_es' => '{"0":"Una característica distintiva de 1XBET es la enorme variedad de mercados de apuestas para cada partido. En el fútbol, se puede apostar no solo a resultados clásicos como la victoria del equipo o el total de goles. Las opciones disponibles incluyen hándicaps, marcador exacto, rendimiento individual de los jugadores, número de saques de esquina, tarjetas o incluso el minuto del primer gol."}',
             'value_fr' => '{"0":"Une caractéristique distinctive de 1XBET est l’énorme variété de marchés de paris pour chaque match. Au football, il est possible de parier non seulement sur les résultats classiques comme la victoire d’une équipe ou le nombre de buts marqués. Sont également disponibles les handicaps, le score exact, la performance individuelle des joueurs, le nombre de corners, de cartons ou même la minute du premier but."}',
             'value_pt' => '{"0":"Uma característica distintiva da 1XBET é a enorme variedade de mercados de apostas para cada partida. No futebol, é possível apostar não apenas em resultados clássicos, como a vitória de uma equipe ou o total de gols. As opções disponíveis incluem handicaps, placar exato, desempenho individual dos jogadores, número de escanteios, cartões ou até mesmo o minuto do primeiro gol."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For those interested in unusual options, there are markets for political events, show business, awards, and even weather. 1XBET also caters to players who prefer complex combinations, offering parlay-type bets that allow combining dozens of events within a single coupon."}',
             'value_es' => '{"0":"Para quienes se interesan en opciones inusuales, existen mercados sobre eventos políticos, entretenimiento, premios e incluso el clima. 1XBET también atiende a jugadores que prefieren combinaciones complejas, ofreciendo apuestas tipo parlay que permiten combinar decenas de eventos en un solo cupón."}',
             'value_fr' => '{"0":"Pour ceux qui s’intéressent aux options atypiques, il existe des marchés sur les événements politiques, le show-business, les récompenses et même la météo. 1XBET s’adresse également aux joueurs qui préfèrent les combinaisons complexes, proposant des paris de type parlay permettant de combiner des dizaines d’événements dans un seul coupon."}',
             'value_pt' => '{"0":"Para aqueles interessados em opções incomuns, existem mercados sobre eventos políticos, entretenimento, prêmios e até mesmo clima. A 1XBET também atende a jogadores que preferem combinações complexas, oferecendo apostas tipo parlay que permitem combinar dezenas de eventos em um único cupom."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Sports Betting"}',
             'value_es' => '{"0":"Apuestas Deportivas"}',
             'value_fr' => '{"0":"Paris Sportifs"}',
             'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The platform offers over a thousand sports events daily, covering practically all popular sports and even disciplines that are usually not available with competitors. Football, as in most bookmakers, remains the leader in the number of events, and you can find matches from the Champions League or the English Premier League, as well as regional championships in Africa or Latin America."}',
             'value_es' => '{"0":"La plataforma ofrece más de mil eventos deportivos diarios, cubriendo prácticamente todos los deportes populares e incluso disciplinas que normalmente no están disponibles en otros competidores. El fútbol, como en la mayoría de las casas de apuestas, sigue siendo el líder en número de eventos, y se pueden encontrar partidos de la Liga de Campeones o la Premier League inglesa, así como campeonatos regionales en África o América Latina."}',
             'value_fr' => '{"0":"La plateforme propose plus de mille événements sportifs par jour, couvrant pratiquement tous les sports populaires et même des disciplines qui ne sont généralement pas disponibles chez les concurrents. Le football, comme chez la plupart des bookmakers, reste le leader en nombre d’événements, et l’on peut trouver des matchs de la Ligue des champions ou de la Premier League anglaise, ainsi que des championnats régionaux en Afrique ou en Amérique latine."}',
             'value_pt' => '{"0":"A plataforma oferece mais de mil eventos esportivos diariamente, abrangendo praticamente todos os esportes populares e até mesmo disciplinas que normalmente não estão disponíveis com os concorrentes. O futebol, como na maioria das casas de apostas, continua sendo o líder em número de eventos, e é possível encontrar partidas da Liga dos Campeões ou da Premier League inglesa, assim como campeonatos regionais na África ou na América Latina."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Basketball, tennis, hockey, boxing, and MMA are equally well represented on the platform. For example, in tennis, you can find matches not only at the ATP or WTA level. In basketball, in addition to the NBA, national championships in Europe, Asia, and even youth tournaments are available."}',
             'value_es' => '{"0":"El baloncesto, tenis, hockey, boxeo y MMA también están ampliamente representados en la plataforma. Por ejemplo, en tenis se pueden encontrar partidos no solo a nivel ATP o WTA. En baloncesto, además de la NBA, están disponibles los campeonatos nacionales de Europa, Asia e incluso torneos juveniles."}',
             'value_fr' => '{"0":"Le basketball, le tennis, le hockey, la boxe et le MMA sont également largement représentés sur la plateforme. Par exemple, au tennis, il est possible de trouver des matchs non seulement au niveau ATP ou WTA. En basketball, en plus de la NBA, les championnats nationaux d’Europe, d’Asie et même les tournois juniors sont disponibles."}',
             'value_pt' => '{"0":"Basquete, tênis, hóquei, boxe e MMA também estão amplamente representados na plataforma. Por exemplo, no tênis, é possível encontrar partidas não apenas no nível ATP ou WTA. No basquete, além da NBA, estão disponíveis campeonatos nacionais da Europa, Ásia e até torneios juvenis."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"An important factor is the availability of extended betting markets. In football, for instance, you can bet not only on the match result but also on individual player statistics, number of shots on goal, offsides, or even the sequence of goals scored."}',
             'value_es' => '{"0":"Un factor importante es la disponibilidad de mercados de apuestas extendidos. En fútbol, por ejemplo, se puede apostar no solo al resultado del partido, sino también a estadísticas individuales de los jugadores, número de tiros a puerta, fueras de juego o incluso la secuencia de goles marcados."}',
             'value_fr' => '{"0":"Un facteur important est la disponibilité de marchés de paris étendus. En football, par exemple, il est possible de parier non seulement sur le résultat du match, mais aussi sur les statistiques individuelles des joueurs, le nombre de tirs au but, les hors-jeu ou même la séquence des buts marqués."}',
             'value_pt' => '{"0":"Um fator importante é a disponibilidade de mercados de apostas estendidos. No futebol, por exemplo, é possível apostar não apenas no resultado da partida, mas também nas estatísticas individuais dos jogadores, número de finalizações, impedimentos ou até na sequência dos gols marcados."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The 1XBET casino section features thousands of slots from over a hundred international providers, including NetEnt, Pragmatic Play, Microgaming, and Evolution Gaming. You can play classic three-reel machines, modern video slots with bright graphics and complex mechanics, as well as jackpot games where winnings can reach significant amounts."}',
             'value_es' => '{"0":"La sección de casino de 1XBET cuenta con miles de tragamonedas de más de cien proveedores internacionales, incluidos NetEnt, Pragmatic Play, Microgaming y Evolution Gaming. Se pueden jugar máquinas clásicas de tres carretes, tragamonedas modernas con gráficos llamativos y mecánicas complejas, así como juegos de jackpot donde las ganancias pueden alcanzar sumas significativas."}',
             'value_fr' => '{"0":"La section casino de 1XBET propose des milliers de machines à sous provenant de plus d’une centaine de fournisseurs internationaux, dont NetEnt, Pragmatic Play, Microgaming et Evolution Gaming. Vous pouvez jouer aux machines classiques à trois rouleaux, aux machines vidéo modernes avec des graphismes colorés et une mécanique complexe, ainsi qu’aux jeux à jackpot où les gains peuvent atteindre des montants importants."}',
             'value_pt' => '{"0":"A seção de cassino da 1XBET reúne milhares de slots de mais de cem provedores internacionais, incluindo NetEnt, Pragmatic Play, Microgaming e Evolution Gaming. É possível jogar máquinas clássicas de três cilindros, slots de vídeo modernos com gráficos vibrantes e mecânicas complexas, assim como jogos de jackpot em que os ganhos podem atingir valores significativos."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The table games section also deserves special attention, offering roulette, baccarat, blackjack, and poker in various variations. For those who prefer the atmosphere of a real casino, there is a live games section with real dealers, streamed in high quality."}',
             'value_es' => '{"0":"La sección de juegos de mesa también merece atención especial, ofreciendo ruleta, baccarat, blackjack y póker en varias versiones. Para quienes prefieren la atmósfera de un casino real, existe una sección de juegos en vivo con crupieres reales, transmitida en alta calidad."}',
             'value_fr' => '{"0":"La section des jeux de table mérite également une attention particulière, avec la roulette, le baccarat, le blackjack et le poker dans différentes variantes. Pour ceux qui préfèrent l’atmosphère d’un véritable casino, il existe une section de jeux en direct avec des croupiers réels, diffusée en haute qualité."}',
             'value_pt' => '{"0":"A seção de jogos de mesa também merece atenção especial, oferecendo roleta, bacará, blackjack e pôquer em várias variações. Para quem prefere a atmosfera de um cassino real, há uma seção de jogos ao vivo com dealers reais, transmitida em alta qualidade."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"An important feature is the availability of demo versions of slots, allowing players to try games without risk using virtual credits."}',
             'value_es' => '{"0":"Una característica importante es la disponibilidad de versiones demo de las tragamonedas, que permiten probar los juegos sin riesgo utilizando créditos virtuales."}',
             'value_fr' => '{"0":"Un aspect important est la disponibilité des versions démo des machines à sous, permettant de tester les jeux sans risque en utilisant des crédits virtuels."}',
             'value_pt' => '{"0":"Um recurso importante é a disponibilidade de versões demo dos slots, permitindo que os jogadores experimentem os jogos sem risco usando créditos virtuais."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"From a technical standpoint, the casino is optimized for both desktop and mobile devices. The interface is simple and intuitive, and games load quickly even with average internet speed."}',
             'value_es' => '{"0":"Desde el punto de vista técnico, el casino está optimizado tanto para computadoras como para dispositivos móviles. La interfaz es simple e intuitiva, y los juegos se cargan rápidamente incluso con una velocidad de internet promedio."}',
             'value_fr' => '{"0":"D’un point de vue technique, le casino est optimisé pour les ordinateurs et les appareils mobiles. L’interface est simple et intuitive, et les jeux se chargent rapidement même avec une connexion Internet moyenne."}',
             'value_pt' => '{"0":"Do ponto de vista técnico, o cassino é otimizado para computadores e dispositivos móveis. A interface é simples e intuitiva, e os jogos carregam rapidamente mesmo com uma velocidade média de internet."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Odds"}',
             'value_es' => '{"0":"Cuotas"}',
             'value_fr' => '{"0":"Cotes"}',
             'value_pt' => '{"0":"Probabilidades"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The odds at 1XBET are considered among the highest among major bookmakers. For example, in Champions League matches, the odds on favorites often range from 1.95 to 2.05. In English Premier League or Spanish La Liga games, the odds on a draw at 1XBET often reach 3.50–3.70."}',
             'value_es' => '{"0":"Las cuotas en 1XBET se consideran de las más altas entre las grandes casas de apuestas. Por ejemplo, en los partidos de la Liga de Campeones, las cuotas para los favoritos suelen estar entre 1,95 y 2,05. En los partidos de la Premier League inglesa o La Liga española, las cuotas para el empate en 1XBET a menudo alcanzan 3,50–3,70."}',
             'value_fr' => '{"0":"Les cotes chez 1XBET sont considérées parmi les plus élevées parmi les grands bookmakers. Par exemple, lors des matchs de la Ligue des champions, les cotes sur les favoris se situent souvent entre 1,95 et 2,05. Lors des matchs de la Premier League anglaise ou de la Liga espagnole, les cotes sur le match nul chez 1XBET atteignent souvent 3,50–3,70."}',
             'value_pt' => '{"0":"As odds na 1XBET são consideradas algumas das mais altas entre as grandes casas de apostas. Por exemplo, em partidas da Liga dos Campeões, as odds para os favoritos geralmente variam entre 1,95 e 2,05. Em jogos da Premier League inglesa ou da La Liga espanhola, as odds para empate na 1XBET frequentemente chegam a 3,50–3,70."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Live betting is particularly interesting, where odds are updated instantly. For example, in a tennis match, when the favorite loses a set, the bookmaker may offer odds of 2.80–3.00 for their victory. In NBA games, the odds for an underdog win often hover around 3.20–3.40. In esports, especially in CS:GO or Dota 2 tournaments, match-level odds for popular teams can reach 1.90–1.95 for each side."}',
             'value_es' => '{"0":"Las apuestas en vivo resultan especialmente interesantes, ya que las cuotas se actualizan al instante. Por ejemplo, en un partido de tenis, cuando el favorito pierde un set, la casa de apuestas puede ofrecer cuotas de 2,80–3,00 para su victoria. En los partidos de la NBA, las cuotas para la victoria del desfavorecido suelen rondar 3,20–3,40. En los deportes electrónicos, especialmente en torneos de CS:GO o Dota 2, las cuotas a nivel de partido para equipos populares pueden llegar a 1,90–1,95 para cada bando."}',
             'value_fr' => '{"0":"Les paris en direct sont particulièrement intéressants, car les cotes sont mises à jour instantanément. Par exemple, dans un match de tennis, lorsque le favori perd un set, le bookmaker peut proposer des cotes de 2,80–3,00 pour sa victoire. Dans les matchs de la NBA, les cotes pour la victoire de l’outsider tournent souvent autour de 3,20–3,40. Dans l’e-sport, notamment lors des tournois de CS:GO ou Dota 2, les cotes à l’échelle des matchs pour les équipes populaires peuvent atteindre 1,90–1,95 pour chaque côté."}',
             'value_pt' => '{"0":"As apostas ao vivo são particularmente interessantes, pois as odds são atualizadas instantaneamente. Por exemplo, em uma partida de tênis, quando o favorito perde um set, a casa de apostas pode oferecer odds de 2,80–3,00 para sua vitória. Em jogos da NBA, as odds para a vitória do azarão frequentemente giram em torno de 3,20–3,40. No eSports, especialmente em torneios de CS:GO ou Dota 2, as odds em nível de partida para equipes populares podem atingir 1,90–1,95 para cada lado."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Thus, the main advantage of 1XBET’s odds is their consistently high level across different sports. Whether it’s football, tennis, basketball, or esports, players almost always receive more favorable conditions than the average."}',
             'value_es' => '{"0":"Por lo tanto, la principal ventaja de las cuotas de 1XBET es su nivel consistentemente alto en distintos deportes. Ya sea fútbol, tenis, baloncesto o esports, los jugadores casi siempre obtienen condiciones más favorables que la media."}',
             'value_fr' => '{"0":"Ainsi, le principal avantage des cotes chez 1XBET réside dans leur niveau constamment élevé sur différents sports. Qu’il s’agisse de football, tennis, basketball ou e-sport, le joueur obtient presque toujours des conditions plus avantageuses que la moyenne."}',
             'value_pt' => '{"0":"Portanto, a principal vantagem das odds da 1XBET é seu nível consistentemente alto em diferentes esportes. Seja futebol, tênis, basquete ou eSports, o jogador quase sempre recebe condições mais favoráveis do que a média."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
             'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
             'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
             'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET offers a huge number of events for live streaming, not only football or basketball but also hockey, tennis, volleyball, esports, and even less popular disciplines like futsal or cricket. Every day, the live section features hundreds of matches broadcast in good quality. Watching is free of charge, requiring only a registered account and a positive balance."}',
             'value_es' => '{"0":"1XBET ofrece una gran cantidad de eventos para transmisión en vivo, no solo fútbol o baloncesto, sino también hockey, tenis, voleibol, deportes electrónicos e incluso disciplinas menos populares como futsal o cricket. Cada día, la sección en vivo presenta cientos de partidos transmitidos en buena calidad. Verlos es gratuito, solo se requiere una cuenta registrada y un saldo positivo."}',
             'value_fr' => '{"0":"1XBET propose un très grand nombre d’événements en streaming en direct, non seulement le football ou le basketball, mais aussi le hockey, le tennis, le volley-ball, l’e-sport et même des disciplines moins populaires comme le futsal ou le cricket. Chaque jour, la section live propose des centaines de matchs diffusés en bonne qualité. Le visionnage est gratuit, il suffit d’avoir un compte enregistré et un solde positif."}',
             'value_pt' => '{"0":"A 1XBET oferece uma enorme quantidade de eventos para transmissão ao vivo, não apenas futebol ou basquete, mas também hóquei, tênis, vôlei, eSports e até disciplinas menos populares, como futsal ou críquete. Todos os dias, a seção ao vivo apresenta centenas de partidas transmitidas em boa qualidade. Assistir é gratuito, sendo necessário apenas ter uma conta registrada e saldo positivo."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The in-play betting system is implemented so that, for example, in a football match, odds change within seconds after a goal is scored or a yellow card is shown. Importantly, you can simultaneously watch matches, track real-time statistics, and place bets at the same time."}',
             'value_es' => '{"0":"El sistema de apuestas en tiempo real está diseñado de manera que, por ejemplo, en un partido de fútbol, las cuotas cambian en cuestión de segundos después de un gol o de una tarjeta amarilla. Es importante que se pueda ver el partido, seguir las estadísticas en tiempo real y apostar al mismo tiempo."}',
             'value_fr' => '{"0":"Le système de paris en direct est conçu de telle manière que, par exemple, dans un match de football, les cotes changent en quelques secondes après un but ou un carton jaune. Il est important de pouvoir regarder les matchs, suivre les statistiques en temps réel et parier simultanément."}',
             'value_pt' => '{"0":"O sistema de apostas em tempo real é implementado de forma que, por exemplo, em uma partida de futebol, as odds mudam em questão de segundos após um gol ou cartão amarelo. É importante que seja possível assistir às partidas, acompanhar estatísticas em tempo real e fazer apostas ao mesmo tempo."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another advantage is the number of available markets in live mode. While many bookmakers limit choices to basic bets, 1XBET allows betting on individual player statistics, number of corners, fouls, or even outcomes of specific periods in hockey or quarters in basketball."}',
             'value_es' => '{"0":"Otra ventaja es la cantidad de mercados disponibles en modo en vivo. Mientras que muchos bookmakers limitan las opciones a apuestas básicas, 1XBET permite apostar en estadísticas individuales de jugadores, número de tiros de esquina, faltas o incluso resultados de periodos específicos en hockey o cuartos en baloncesto."}',
             'value_fr' => '{"0":"Un autre avantage est le nombre de marchés disponibles en mode live. Alors que de nombreux bookmakers limitent le choix aux paris de base, 1XBET permet de parier sur les statistiques individuelles des joueurs, le nombre de corners, les fautes ou même les résultats de périodes spécifiques au hockey ou des quarts-temps au basketball."}',
             'value_pt' => '{"0":"Outra vantagem é o número de mercados disponíveis no modo ao vivo. Enquanto muitos bookmakers limitam as opções a apostas básicas, a 1XBET permite apostar em estatísticas individuais de jogadores, número de escanteios, faltas ou até resultados de períodos específicos no hóquei ou quartos no basquete."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Betting Statistics"}',
             'value_es' => '{"0":"Estadísticas de Apuestas"}',
             'value_fr' => '{"0":"Statistiques des Paris"}',
             'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Betting statistics at 1XBET are an important tool for players who take predictions seriously. The platform provides a large amount of data for both pre-match and live events, including detailed information about teams, players, their form, previous results, and head-to-head history. For example, in football matches, you can see how many goals a team has scored on average over the last five games, its position in the league table, and how often it loses away. In tennis, statistics include serve win percentage, number of breaks, average set duration, and each player’s efficiency metrics."}',
             'value_es' => '{"0":"Las estadísticas de apuestas en 1XBET son una herramienta importante para los jugadores que se toman en serio los pronósticos. La plataforma ofrece una gran cantidad de datos tanto para eventos pre-match como en vivo, incluyendo información detallada sobre equipos, jugadores, su forma, resultados anteriores y el historial de enfrentamientos directos. Por ejemplo, en partidos de fútbol se puede ver cuántos goles ha marcado un equipo de promedio en los últimos cinco partidos, su posición en la tabla y con qué frecuencia pierde como visitante. En tenis, las estadísticas incluyen el porcentaje de saques ganados, número de quiebres, duración promedio de los sets y el rendimiento de cada jugador."}',
             'value_fr' => '{"0":"Les statistiques de paris sur 1XBET sont un outil important pour les joueurs qui prennent les pronostics au sérieux. La plateforme fournit une grande quantité de données pour les événements pré-match et en direct, y compris des informations détaillées sur les équipes, les joueurs, leur forme, les résultats précédents et l’historique des confrontations. Par exemple, dans les matchs de football, il est possible de voir combien de buts une équipe a marqué en moyenne au cours des cinq derniers matchs, sa position dans le classement et la fréquence de ses défaites à l’extérieur. En tennis, les statistiques incluent le pourcentage de services gagnants, le nombre de breaks, la durée moyenne des sets et les indicateurs d’efficacité de chaque joueur."}',
             'value_pt' => '{"0":"As estatísticas de apostas na 1XBET são uma ferramenta importante para os jogadores que levam a sério as previsões. A plataforma fornece uma grande quantidade de dados tanto para eventos pré-jogo quanto ao vivo, incluindo informações detalhadas sobre equipes, jogadores, sua forma, resultados anteriores e histórico de confrontos diretos. Por exemplo, em partidas de futebol, é possível ver quantos gols uma equipe marcou em média nos últimos cinco jogos, sua posição na tabela e com que frequência perde fora de casa. No tênis, as estatísticas incluem porcentagem de saques vencidos, número de quebras, duração média dos sets e métricas de eficiência de cada jogador."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For live betting users, statistics are especially valuable as they allow more accurate predictions during a match. Players can see in real time how many shots on target a team has made, the number of corners, fouls, and yellow cards. In basketball or hockey, information is available on player performance in each period or quarter, as well as team comparisons."}',
             'value_es' => '{"0":"Para los usuarios de apuestas en vivo, las estadísticas son especialmente valiosas ya que permiten hacer pronósticos más precisos durante el partido. Los jugadores pueden ver en tiempo real cuántos tiros a puerta ha realizado un equipo, la cantidad de saques de esquina, faltas y tarjetas amarillas. En baloncesto o hockey, está disponible información sobre el rendimiento de los jugadores en cada periodo o cuarto, así como comparaciones de equipos."}',
             'value_fr' => '{"0":"Pour les utilisateurs de paris en direct, les statistiques sont particulièrement utiles car elles permettent des pronostics plus précis pendant un match. Les joueurs peuvent voir en temps réel le nombre de tirs cadrés, le nombre de corners, les fautes et les cartons jaunes. Au basketball ou au hockey, les informations sur les performances des joueurs dans chaque période ou quart-temps ainsi que les comparaisons d’équipes sont disponibles."}',
             'value_pt' => '{"0":"Para os usuários de apostas ao vivo, as estatísticas são especialmente valiosas, pois permitem previsões mais precisas durante a partida. Os jogadores podem ver em tempo real quantos chutes a gol uma equipe realizou, o número de escanteios, faltas e cartões amarelos. No basquete ou hóquei, estão disponíveis informações sobre o desempenho dos jogadores em cada período ou quarto, assim como comparações entre equipes."}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In addition to sports metrics, 1XBET provides statistics on the popularity of bets among users. You can see what percentage of players have chosen a particular outcome, which helps assess market trends. This can serve as an additional guide when making decisions, especially for those who enjoy combination bets or systems."}',
             'value_es' => '{"0":"Además de los indicadores deportivos, 1XBET ofrece estadísticas sobre la popularidad de las apuestas entre los usuarios. Se puede ver qué porcentaje de jugadores eligió un resultado determinado, lo que ayuda a evaluar tendencias del mercado. Esto puede ser una guía adicional al tomar decisiones, especialmente para quienes gustan de apuestas combinadas o sistemas."}',
             'value_fr' => '{"0":"En plus des indicateurs sportifs, 1XBET fournit des statistiques sur la popularité des paris parmi les utilisateurs. On peut voir quel pourcentage de joueurs a choisi un certain résultat, ce qui aide à évaluer les tendances du marché. Cela peut servir de guide supplémentaire pour la prise de décision, notamment pour ceux qui apprécient les paris combinés ou les systèmes."}',
             'value_pt' => '{"0":"Além dos indicadores esportivos, a 1XBET fornece estatísticas sobre a popularidade das apostas entre os usuários. É possível ver qual porcentagem de jogadores escolheu um determinado resultado, o que ajuda a avaliar as tendências do mercado. Isso pode servir como um guia adicional ao tomar decisões, especialmente para quem gosta de apostas combinadas ou sistemas."}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another interesting feature is the history of a user’s own bets, where successes and failures can be tracked, mistakes analyzed, and a personal strategy developed. The collection of statistical data is automated and available in a convenient format directly in the user’s account."}',
             'value_es' => '{"0":"Otra función interesante es el historial de apuestas del usuario, donde se pueden seguir éxitos y fracasos, analizar errores y desarrollar una estrategia personal. La recopilación de datos estadísticos está automatizada y disponible en un formato cómodo directamente en la cuenta del usuario."}',
             'value_fr' => '{"0":"Une autre fonctionnalité intéressante est l’historique des paris de l’utilisateur, où l’on peut suivre les succès et les échecs, analyser les erreurs et développer sa propre stratégie. La collecte des données statistiques est automatisée et disponible dans un format pratique directement dans le compte utilisateur."}',
             'value_pt' => '{"0":"Outra funcionalidade interessante é o histórico das próprias apostas do usuário, onde é possível acompanhar sucessos e falhas, analisar erros e desenvolver uma estratégia pessoal. A coleta de dados estatísticos é automatizada e disponível em um formato conveniente diretamente na conta do usuário."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Responsible Gaming Features"}',
             'value_es' => '{"0":"Funciones de Juego Responsable"}',
             'value_fr' => '{"0":"Fonctions de Jeu Responsable"}',
             'value_pt' => '{"0":"Funções de Jogo Responsável"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET pays serious attention to player safety and preventing gambling problems. The platform provides tools that help control your activity and avoid excessive betting. One such tool is setting limits on deposits, bets, and losses over a certain period. Limits can be adjusted, but changes only take effect after a certain time, preventing impulsive decisions."}',
             'value_es' => '{"0":"1XBET presta gran atención a la seguridad de los jugadores y a la prevención de problemas de juego. La plataforma ofrece herramientas que ayudan a controlar la actividad y evitar apuestas excesivas. Una de estas herramientas es establecer límites en depósitos, apuestas y pérdidas durante un período determinado. Los límites se pueden ajustar, pero los cambios solo entran en vigor después de cierto tiempo, evitando decisiones impulsivas."}',
             'value_fr' => '{"0":"1XBET accorde une grande importance à la sécurité des joueurs et à la prévention des problèmes liés au jeu. La plateforme propose des outils qui aident à contrôler son activité et à éviter les mises excessives. L’un de ces outils est la définition de limites sur les dépôts, les mises et les pertes sur une certaine période. Les limites peuvent être modifiées, mais les changements ne prennent effet qu’après un certain délai, ce qui empêche les décisions impulsives."}',
             'value_pt' => '{"0":"A 1XBET dá grande atenção à segurança dos jogadores e à prevenção de problemas com jogos de azar. A plataforma fornece ferramentas que ajudam a controlar a atividade e evitar apostas excessivas. Uma dessas ferramentas é a definição de limites para depósitos, apostas e perdas durante um determinado período. Os limites podem ser ajustados, mas as alterações só entram em vigor após algum tempo, prevenindo decisões impulsivas."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another important feature is the ability to temporarily block your account or apply self-restriction. A player can choose a period from a few days to several months during which they cannot place bets. Additionally, 1XBET offers a full self-exclusion option, allowing the account to be permanently closed. Another aspect is monitoring the time spent on gambling. 1XBET displays activity statistics, including time spent on the site and total expenditures."}',
             'value_es' => '{"0":"Otro elemento importante es la posibilidad de bloquear temporalmente la cuenta o aplicar auto-restricciones. El jugador puede elegir un período de varios días a varios meses durante el cual no podrá realizar apuestas. Además, 1XBET ofrece la opción de autoexclusión total, que permite cerrar la cuenta de forma permanente. Otro aspecto es el control del tiempo dedicado al juego. 1XBET muestra estadísticas de actividad, incluyendo el tiempo en el sitio y el gasto total."}',
             'value_fr' => '{"0":"Un autre élément important est la possibilité de bloquer temporairement son compte ou d’appliquer une auto-limitation. Le joueur peut choisir une période allant de quelques jours à plusieurs mois, pendant laquelle il ne pourra pas placer de paris. De plus, 1XBET propose une option d’auto-exclusion complète, permettant de fermer le compte définitivement. Un autre aspect est le suivi du temps passé à jouer. 1XBET affiche des statistiques d’activité, y compris le temps passé sur le site et le montant dépensé."}',
             'value_pt' => '{"0":"Outro elemento importante é a possibilidade de bloquear temporariamente a conta ou aplicar auto-restrições. O jogador pode escolher um período de alguns dias a vários meses, durante o qual não poderá fazer apostas. Além disso, a 1XBET oferece a opção de autoexclusão total, permitindo o encerramento permanente da conta. Outro aspecto é o monitoramento do tempo gasto jogando. A 1XBET exibe estatísticas de atividade, incluindo tempo no site e gastos totais."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The platform also provides educational materials and resources on responsible gaming. Users can find articles and advice explaining gambling risks, methods to control spending, and ways to avoid addiction."}',
             'value_es' => '{"0":"La plataforma también proporciona materiales educativos y recursos sobre juego responsable. Los usuarios pueden encontrar artículos y consejos que explican los riesgos del juego, métodos para controlar los gastos y formas de evitar la adicción."}',
             'value_fr' => '{"0":"La plateforme fournit également des ressources et des matériaux éducatifs sur le jeu responsable. Les utilisateurs peuvent trouver des articles et des conseils expliquant les risques liés aux jeux d’argent, les méthodes de contrôle des dépenses et les moyens d’éviter la dépendance."}',
             'value_pt' => '{"0":"A plataforma também fornece materiais educativos e recursos sobre jogo responsável. Os usuários podem encontrar artigos e dicas que explicam os riscos do jogo, métodos para controlar gastos e formas de evitar vícios."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Payment and Withdrawal Methods"}',
             'value_es' => '{"0":"Métodos de Pago y Retiro"}',
             'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
             'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Users can deposit and withdraw funds through more than 100 different methods, including Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, Qiwi, WebMoney, as well as local payment systems. Special attention is given to cryptocurrencies – players can use Bitcoin, Ethereum, Litecoin, Dogecoin, and other digital currencies."}',
             'value_es' => '{"0":"Los usuarios pueden depositar y retirar fondos mediante más de 100 métodos diferentes, incluidos tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, Qiwi, WebMoney, así como sistemas de pago locales. Se presta especial atención a las criptomonedas: los jugadores pueden usar Bitcoin, Ethereum, Litecoin, Dogecoin y otras monedas digitales."}',
             'value_fr' => '{"0":"Les utilisateurs peuvent déposer et retirer des fonds via plus de 100 méthodes différentes, y compris les cartes bancaires Visa et Mastercard, les portefeuilles électroniques tels que Skrill, Neteller, Qiwi, WebMoney, ainsi que les systèmes de paiement locaux. Une attention particulière est accordée aux crypto-monnaies : les joueurs peuvent utiliser Bitcoin, Ethereum, Litecoin, Dogecoin et d’autres monnaies numériques."}',
             'value_pt' => '{"0":"Os usuários podem depositar e sacar fundos através de mais de 100 métodos diferentes, incluindo cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, Qiwi, WebMoney, bem como sistemas de pagamento locais. Uma atenção especial é dada às criptomoedas – os jogadores podem usar Bitcoin, Ethereum, Litecoin, Dogecoin e outras moedas digitais."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To deposit, it is enough to choose a payment method, enter the amount, and confirm the transaction. Deposits are usually credited instantly, regardless of the method, and even for cryptocurrencies, confirmation occurs within a few minutes. Withdrawals are also processed quickly, although the duration may depend on the chosen method and amount. For example, transfers to an e-wallet are completed within an hour, while bank transfers can take several business days."}',
             'value_es' => '{"0":"Para depositar, basta con elegir un método de pago, ingresar el monto y confirmar la operación. Los depósitos generalmente se acreditan al instante, independientemente del método, y en el caso de las criptomonedas, la confirmación se realiza en pocos minutos. Los retiros también se procesan rápidamente, aunque la duración puede depender del método elegido y del monto. Por ejemplo, una transferencia a un monedero electrónico se realiza en aproximadamente una hora, mientras que una transferencia bancaria puede tardar varios días hábiles."}',
             'value_fr' => '{"0":"Pour effectuer un dépôt, il suffit de choisir un mode de paiement, saisir le montant et confirmer la transaction. Les dépôts sont généralement crédités instantanément, quel que soit le mode choisi, et même pour les crypto-monnaies, la confirmation se fait en quelques minutes. Les retraits sont également rapides, bien que la durée puisse dépendre du mode choisi et du montant. Par exemple, un transfert vers un portefeuille électronique se fait en environ une heure, tandis qu’un virement bancaire peut prendre plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"Para depositar, basta escolher um método de pagamento, inserir o valor e confirmar a transação. Os depósitos geralmente são creditados instantaneamente, independentemente do método, e mesmo para criptomoedas, a confirmação ocorre em poucos minutos. Os saques também são processados rapidamente, embora a duração possa depender do método escolhido e do valor. Por exemplo, transferências para carteiras eletrônicas são concluídas em cerca de uma hora, enquanto transferências bancárias podem levar vários dias úteis."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another feature is the ability to withdraw winnings in different currencies. The platform supports over 40 currencies, which helps avoid unnecessary conversion fees. For large winnings, special withdrawal methods are available, allowing funds to be received without delays or restrictions."}',
             'value_es' => '{"0":"Otra característica es la posibilidad de retirar ganancias en diferentes monedas. La plataforma admite más de 40 monedas, lo que ayuda a evitar comisiones de conversión innecesarias. Para ganancias altas, se pueden utilizar métodos de retiro especiales que permiten recibir los fondos sin demoras ni restricciones."}',
             'value_fr' => '{"0":"Une autre particularité est la possibilité de retirer ses gains dans différentes devises. La plateforme prend en charge plus de 40 devises, ce qui permet d’éviter les frais de conversion inutiles. Pour les gains élevés, des méthodes de retrait spéciales sont disponibles, permettant de recevoir les fonds sans retard ni limitation."}',
             'value_pt' => '{"0":"Outra funcionalidade é a possibilidade de retirar ganhos em diferentes moedas. A plataforma suporta mais de 40 moedas, o que ajuda a evitar taxas de conversão desnecessárias. Para ganhos elevados, existem métodos especiais de saque que permitem receber os fundos sem atrasos ou restrições."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 45
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 46
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 47
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 48
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET customer support operates 24/7 and offers several ways to communicate. The first and most popular option is the online chat on the website or in the mobile app. The second option is email, suitable for inquiries that require detailed review or documentation. 1XBET also provides telephone support."}',
             'value_es' => '{"0":"El servicio de atención al cliente de 1XBET funciona las 24 horas y ofrece varias formas de comunicación. La primera y más popular opción es el chat en línea en el sitio web o en la aplicación móvil. La segunda opción es el correo electrónico, adecuado para consultas que requieren una revisión detallada o documentación. 1XBET también ofrece soporte telefónico."}',
             'value_fr' => '{"0":"Le service client de 1XBET fonctionne 24h/24 et propose plusieurs moyens de communication. La première et la plus populaire est le chat en ligne sur le site ou dans l’application mobile. La deuxième option est l’e-mail, adaptée aux demandes nécessitant un examen détaillé ou des documents. 1XBET propose également un support téléphonique."}',
             'value_pt' => '{"0":"O suporte ao cliente da 1XBET funciona 24 horas por dia e oferece várias formas de comunicação. A primeira e mais popular opção é o chat online no site ou no aplicativo móvel. A segunda opção é o e-mail, adequado para consultas que exigem análise detalhada ou documentação. A 1XBET também oferece suporte telefônico."}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 49
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 50
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide range of markets",
                                 "1":"Competitive odds",
                                 "2":"Many deposit and withdrawal methods",
                                 "3":"Large casino and live games section",
                                 "4":"Availability of live streams"},
                             "1":
                                {"0":"Stream quality and accessibility depending on region",
                                 "1":"Interface can appear cluttered"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de mercados",
                                 "1":"Cuotas competitivas",
                                 "2":"Muchos métodos de depósito y retiro",
                                 "3":"Sección amplia de casino y juegos en vivo",
                                 "4":"Disponibilidad de transmisiones en vivo"},
                             "1":
                                {"0":"Calidad y accesibilidad de los streams según la región",
                                 "1":"La interfaz puede parecer sobrecargada"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large gamme de marchés",
                                 "1":"Cotes compétitives",
                                 "2":"De nombreux moyens de dépôt et de retrait",
                                 "3":"Grande section de casino et jeux en direct",
                                 "4":"Disponibilité des flux en direct"},
                             "1":
                                {"0":"Qualité et accessibilité des streams selon la région",
                                 "1":"L’interface peut sembler encombrée"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de mercados",
                                 "1":"Odds competitivas",
                                 "2":"Muitos métodos de depósito e saque",
                                 "3":"Grande seção de cassino e jogos ao vivo",
                                 "4":"Disponibilidade de transmissões ao vivo"},
                             "1":
                                {"0":"Qualidade e acessibilidade dos streams dependendo da região",
                                 "1":"A interface pode parecer sobrecarregada"}
                             }',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 51
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 51
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 52
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"How long does verification take and is it required for withdrawals?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda la verificación y es necesaria para los retiros?"}',
             'value_fr' => '{"0":"Combien de temps prend la vérification et est-elle nécessaire pour les retraits ?"}',
             'value_pt' => '{"0":"Quanto tempo leva a verificação e ela é necessária para saques?"}',
             'order' => 52
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 53
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Verification is usually required, especially for large amounts. In some cases, this process can take from a few hours to several days or even weeks if there are issues with the document quality, for example."}',
             'value_es' => '{"0":"La verificación generalmente es necesaria, especialmente para grandes cantidades. En algunos casos, este proceso puede tardar desde unas pocas horas hasta varios días o incluso semanas si hay problemas con la calidad del documento, por ejemplo."}',
             'value_fr' => '{"0":"La vérification est généralement requise, surtout pour les montants élevés. Dans certains cas, ce processus peut prendre de quelques heures à plusieurs jours, voire des semaines, s’il y a des problèmes de qualité du document, par exemple."}',
             'value_pt' => '{"0":"A verificação geralmente é necessária, especialmente para grandes quantias. Em alguns casos, esse processo pode levar de algumas horas a vários dias ou até semanas se houver problemas com a qualidade do documento, por exemplo."}',
             'order' => 53
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 54
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Does 1XBET have a license to operate in all countries?"}',
             'value_es' => '{"0":"¿Tiene 1XBET licencia para operar en todos los países?"}',
             'value_fr' => '{"0":"1XBET a-t-il une licence pour opérer dans tous les pays ?"}',
             'value_pt' => '{"0":"A 1XBET tem licença para operar em todos os países?"}',
             'order' => 54
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 55
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"No, the bookmaker is licensed by the Curacao regulator. It is recommended to check whether this license is valid in your country before registering."}',
             'value_es' => '{"0":"No, el operador tiene licencia del regulador de Curazao. Es recomendable verificar si esta licencia es válida en su país antes de registrarse."}',
             'value_fr' => '{"0":"Non, le bookmaker est licencié par le régulateur de Curaçao. Il est conseillé de vérifier si cette licence est valide dans votre pays avant de vous inscrire."}',
             'value_pt' => '{"0":"Não, a casa de apostas possui licença do regulador de Curaçao. É recomendável verificar se essa licença é válida em seu país antes de se registrar."}',
             'order' => 55
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 56
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What payment and withdrawal methods are available?"}',
             'value_es' => '{"0":"¿Qué métodos de pago y retiro están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les moyens de paiement et de retrait disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de pagamento e saque estão disponíveis?"}',
             'order' => 56
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 57
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Bank cards (Visa, Mastercard), e-wallets (Skrill, Neteller, Perfect Money), cryptocurrencies (Bitcoin, Ethereum, Litecoin), local payment systems, and internet banking are supported. The available methods depend on the country."}',
             'value_es' => '{"0":"Se admiten tarjetas bancarias (Visa, Mastercard), monederos electrónicos (Skrill, Neteller, Perfect Money), criptomonedas (Bitcoin, Ethereum, Litecoin), sistemas de pago locales y banca por internet. Los métodos disponibles dependen del país."}',
             'value_fr' => '{"0":"Les cartes bancaires (Visa, Mastercard), les portefeuilles électroniques (Skrill, Neteller, Perfect Money), les crypto-monnaies (Bitcoin, Ethereum, Litecoin), les systèmes de paiement locaux et la banque en ligne sont pris en charge. Les méthodes disponibles dépendent du pays."}',
             'value_pt' => '{"0":"Cartões bancários (Visa, Mastercard), carteiras eletrônicas (Skrill, Neteller, Perfect Money), criptomoedas (Bitcoin, Ethereum, Litecoin), sistemas de pagamento locais e internet banking são suportados. Os métodos disponíveis dependem do país."}',
             'order' => 57
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 58
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if my withdrawal is delayed or additional documents are requested?"}',
             'value_es' => '{"0":"¿Qué hacer si se retrasa mi retiro o se solicitan documentos adicionales?"}',
             'value_fr' => '{"0":"Que faire si mon retrait est retardé ou si des documents supplémentaires sont demandés ?"}',
             'value_pt' => '{"0":"O que fazer se meu saque estiver atrasado ou solicitarem documentos adicionais?"}',
             'order' => 58
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 59
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"First of all, contact customer support with an official request. Check the official website’s terms regarding verification and withdrawals in your country. If the delay is significant and there is suspicion of rights violations, you can contact the regulatory authority or a gambling consumer protection organization in your country."}',
             'value_es' => '{"0":"En primer lugar, contacte con el servicio de atención al cliente con una solicitud oficial. Revise los términos oficiales del sitio web sobre verificación y retiros en su país. Si el retraso es significativo y existe sospecha de violación de derechos, puede acudir al organismo regulador o a una organización de protección del consumidor de juegos de azar en su país."}',
             'value_fr' => '{"0":"Tout d’abord, contactez le service client avec une demande officielle. Vérifiez les conditions officielles du site Web concernant la vérification et les retraits dans votre pays. Si le retard est important et qu’il y a suspicion de violation des droits, vous pouvez contacter l’autorité de régulation ou une organisation de protection des joueurs dans votre pays."}',
             'value_pt' => '{"0":"Primeiro, entre em contato com o suporte ao cliente com uma solicitação oficial. Verifique os termos oficiais do site sobre verificação e saques em seu país. Se o atraso for significativo e houver suspeita de violação de direitos, você pode contatar a autoridade reguladora ou uma organização de proteção ao consumidor de jogos de azar em seu país."}',
             'order' => 59
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 60
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is it safe to use cryptocurrencies on 1XBET?"}',
             'value_es' => '{"0":"¿Es seguro usar criptomonedas en 1XBET?"}',
             'value_fr' => '{"0":"Est-il sûr d’utiliser des crypto-monnaies sur 1XBET ?"}',
             'value_pt' => '{"0":"É seguro usar criptomoedas na 1XBET?"}',
             'order' => 60
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 61
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes, cryptocurrencies are one of the options for depositing and withdrawing funds. However, you need to make sure that cryptocurrency transactions are not prohibited in your country and that the chosen crypto wallet belongs to you and is registered in your name, as the platform may require proof of ownership during withdrawals."}',
             'value_es' => '{"0":"Sí, las criptomonedas son una de las opciones para depositar y retirar fondos. Sin embargo, debe asegurarse de que las transacciones con criptomonedas no estén prohibidas en su país y de que la billetera de criptomonedas elegida le pertenezca y esté registrada a su nombre, ya que la plataforma puede solicitar prueba de propiedad al retirar fondos."}',
             'value_fr' => '{"0":"Oui, les crypto-monnaies sont l’une des options pour déposer et retirer des fonds. Cependant, vous devez vous assurer que les transactions en crypto-monnaies ne sont pas interdites dans votre pays et que le portefeuille crypto choisi vous appartient et est enregistré à votre nom, car la plateforme peut demander une preuve de propriété lors des retraits."}',
             'value_pt' => '{"0":"Sim, as criptomoedas são uma das opções para depositar e sacar fundos. No entanto, é necessário garantir que as transações com criptomoedas não sejam proibidas em seu país e que a carteira de criptomoedas escolhida seja sua e esteja registrada em seu nome, pois a plataforma pode exigir comprovação de propriedade durante os saques."}',
             'order' => 61
            ]
        );
    }
}
