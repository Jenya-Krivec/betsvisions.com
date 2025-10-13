<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari is an international platform for sports betting and casino games. The site has a simple interface with a logical structure of sections, allowing users to easily navigate between different areas. The platform supports over forty languages and dozens of currencies, including cryptocurrencies, making it convenient for an international audience."}',
             'value_es' => '{"0":"MegaPari es una plataforma internacional para apuestas deportivas y juegos de casino. El sitio tiene una interfaz sencilla con una estructura lógica de secciones, lo que permite navegar fácilmente entre las diferentes áreas. La plataforma admite más de cuarenta idiomas y decenas de monedas, incluidas las criptomonedas, lo que la hace cómoda para una audiencia internacional."}',
             'value_fr' => '{"0":"MegaPari est une plateforme internationale dédiée aux paris sportifs et aux jeux de casino. Le site dispose d’une interface simple avec une structure de sections logique, ce qui permet de naviguer facilement entre les différentes rubriques. La plateforme prend en charge plus de quarante langues et de nombreuses devises, y compris les cryptomonnaies, ce qui la rend pratique pour un public international."}',
             'value_pt' => '{"0":"A MegaPari é uma plataforma internacional para apostas esportivas e jogos de cassino. O site tem uma interface simples com uma estrutura lógica de seções, permitindo navegar facilmente entre as diferentes áreas. A plataforma suporta mais de quarenta idiomas e dezenas de moedas, incluindo criptomoedas, tornando-a conveniente para um público internacional."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari caters to both experienced and new players, offering various betting formats and a large number of markets. Its popularity comes from the combination of extensive betting options, a wide selection of casino games, and diverse financial features for users around the world."}',
             'value_es' => '{"0":"MegaPari está dirigida tanto a jugadores experimentados como a principiantes, ofreciendo varios formatos de apuestas y una gran cantidad de mercados. Su popularidad se debe a la combinación de amplias oportunidades de apuestas, una gran selección de juegos de casino y múltiples opciones financieras para usuarios de todo el mundo."}',
             'value_fr' => '{"0":"MegaPari s’adresse aussi bien aux joueurs expérimentés qu’aux débutants, en proposant divers formats de paris et un grand nombre de marchés. Sa popularité s’explique par la combinaison d’un large éventail d’options de paris, d’un vaste choix de jeux de casino et de solutions financières variées pour les utilisateurs du monde entier."}',
             'value_pt' => '{"0":"A MegaPari atende tanto jogadores experientes quanto iniciantes, oferecendo vários formatos de apostas e uma grande variedade de mercados. Sua popularidade se deve à combinação de amplas opções de apostas, uma grande seleção de jogos de cassino e diversas soluções financeiras para usuários de todo o mundo."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari operates under a Curacao license, which is a common practice among international bookmakers. This type of licensing allows the company to offer its services to users from many countries, although in some regions the platform’s activity may be limited due to local regulations. The license ensures a basic level of security."}',
             'value_es' => '{"0":"MegaPari opera bajo una licencia de Curazao, una práctica común entre las casas de apuestas internacionales. Este tipo de licencia permite a la empresa ofrecer servicios a usuarios de muchos países, aunque en algunas regiones la actividad de la plataforma puede estar limitada por las regulaciones locales. La licencia garantiza un nivel básico de seguridad."}',
             'value_fr' => '{"0":"MegaPari fonctionne sous une licence de Curaçao, ce qui est une pratique courante parmi les bookmakers internationaux. Ce type de licence permet à l’entreprise de proposer ses services à des utilisateurs de nombreux pays, bien que dans certaines régions, l’activité de la plateforme puisse être limitée en raison des réglementations locales. La licence garantit un niveau de sécurité de base."}',
             'value_pt' => '{"0":"A MegaPari opera sob uma licença de Curaçao, o que é uma prática comum entre as casas de apostas internacionais. Esse tipo de licenciamento permite que a empresa ofereça serviços a usuários de diversos países, embora em algumas regiões a atividade da plataforma possa ser limitada devido às leis locais. A licença garante um nível básico de segurança."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To protect user privacy, all information is transmitted through encrypted connections that meet modern online security standards. MegaPari uses SSL encryption technology. There is also an option to enable two-step verification to prevent unauthorized access to the account."}',
             'value_es' => '{"0":"Para proteger la confidencialidad del usuario, toda la información se transmite mediante conexiones cifradas que cumplen con los estándares modernos de seguridad en línea. MegaPari utiliza tecnología de cifrado SSL. También es posible activar la verificación en dos pasos para evitar el acceso no autorizado a la cuenta."}',
             'value_fr' => '{"0":"Pour assurer la confidentialité, toutes les informations des utilisateurs sont transmises via des connexions chiffrées conformes aux normes modernes de sécurité en ligne. MegaPari utilise la technologie de cryptage SSL. Il est également possible d’activer la vérification en deux étapes afin d’éviter tout accès non autorisé au compte."}',
             'value_pt' => '{"0":"Para garantir a confidencialidade, todas as informações dos usuários são transmitidas por conexões criptografadas que atendem aos padrões modernos de segurança online. A MegaPari utiliza tecnologia de criptografia SSL. Também há a opção de ativar a verificação em duas etapas para evitar o acesso não autorizado à conta."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"When withdrawing funds, the company may require identity verification, which is a standard measure to prevent fraud and money laundering. Overall, the security level of MegaPari meets the standards of major international platforms."}',
             'value_es' => '{"0":"Al retirar fondos, la empresa puede solicitar la verificación de identidad, una práctica estándar para prevenir el fraude y el lavado de dinero. En general, el nivel de seguridad de MegaPari cumple con los requisitos de las principales plataformas internacionales."}',
             'value_fr' => '{"0":"Lors du retrait de fonds, l’entreprise peut demander une vérification d’identité, une pratique standard pour lutter contre la fraude et le blanchiment d’argent. Dans l’ensemble, le niveau de sécurité de MegaPari correspond aux exigences des grandes plateformes internationales."}',
             'value_pt' => '{"0":"Durante o processo de retirada, a empresa pode solicitar verificação de identidade, o que é uma prática padrão para combater fraudes e lavagem de dinheiro. No geral, o nível de segurança da MegaPari está de acordo com os padrões das principais plataformas internacionais."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari stands out for its wide selection of betting markets across various sporting events. The site features more than forty sports, including football, basketball, tennis, hockey, boxing, volleyball, Formula 1, baseball, as well as less common disciplines such as darts, futsal, and snooker."}',
             'value_es' => '{"0":"MegaPari se destaca por su amplia selección de mercados de apuestas en diversos eventos deportivos. El sitio ofrece más de cuarenta deportes, incluyendo fútbol, baloncesto, tenis, hockey, boxeo, voleibol, Fórmula 1, béisbol y disciplinas menos populares como dardos, fútbol sala y snooker."}',
             'value_fr' => '{"0":"MegaPari se distingue par un large choix de marchés de paris couvrant de nombreux événements sportifs. Le site propose plus de quarante disciplines, notamment le football, le basketball, le tennis, le hockey, la boxe, le volleyball, la Formule 1, le baseball, ainsi que des sports moins populaires comme les fléchettes, le futsal ou le snooker."}',
             'value_pt' => '{"0":"A MegaPari se destaca pela grande variedade de mercados de apostas em diferentes eventos esportivos. O site oferece mais de quarenta modalidades, incluindo futebol, basquete, tênis, hóquei, boxe, voleibol, Fórmula 1, beisebol e esportes menos populares, como dardos, futsal e sinuca."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For each football match, for example, several hundred betting options are available. Players can bet on the main outcome, halves, goal scorers, or the number of penalties."}',
             'value_es' => '{"0":"Por ejemplo, en cada partido de fútbol hay disponibles varios cientos de opciones de apuestas. Se puede apostar al resultado principal, a los tiempos, a los autores de los goles o al número de faltas."}',
             'value_fr' => '{"0":"Pour chaque match de football, par exemple, plusieurs centaines d’options de paris sont disponibles. Il est possible de miser sur le résultat principal, les mi-temps, les buteurs ou le nombre de fautes."}',
             'value_pt' => '{"0":"Por exemplo, em cada partida de futebol há centenas de opções de apostas disponíveis. É possível apostar no resultado principal, nos tempos, nos autores dos gols ou no número de faltas."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"A distinctive feature of MegaPari is the availability of extensive lines even for secondary tournaments and youth competitions. Esports also receive significant attention, with betting opportunities on popular disciplines including CS2, Dota 2, League of Legends, Valorant, and other professional tournaments."}',
             'value_es' => '{"0":"Una de las características distintivas de MegaPari es la disponibilidad de líneas amplias incluso para torneos secundarios y competiciones juveniles. Los deportes electrónicos también reciben gran atención, con apuestas en disciplinas populares como CS2, Dota 2, League of Legends, Valorant y otros torneos profesionales."}',
             'value_fr' => '{"0":"Une particularité de MegaPari est la présence de lignes détaillées même pour les tournois secondaires et les compétitions de jeunes. L’esport occupe également une place importante, avec des paris sur des disciplines populaires telles que CS2, Dota 2, League of Legends, Valorant et d’autres tournois professionnels."}',
             'value_pt' => '{"0":"Um dos diferenciais da MegaPari é oferecer linhas amplas até mesmo para torneios secundários e competições de base. Os esportes eletrônicos também têm grande destaque, com apostas em disciplinas populares como CS2, Dota 2, League of Legends, Valorant e outros torneios profissionais."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section is designed with a focus on convenience, speed, and a wide range of available events. The platform allows users to place pre-match bets on tens of thousands of events every week. The betting line includes the most popular championships in football, basketball, tennis, hockey, volleyball, and many other sports. There are also less-known options, such as bets on regional tournaments and amateur competitions."}',
             'value_es' => '{"0":"La sección de apuestas deportivas está diseñada con un enfoque en la comodidad, la rapidez y la variedad de eventos disponibles. La plataforma permite realizar apuestas previas al partido en decenas de miles de eventos cada semana. La línea incluye los campeonatos más populares de fútbol, baloncesto, tenis, hockey, voleibol y muchos otros deportes. También hay opciones menos conocidas, como apuestas en torneos regionales y competiciones amateur."}',
             'value_fr' => '{"0":"La section des paris sportifs est conçue pour offrir confort, rapidité et un large choix d’événements. La plateforme permet de placer des paris avant match sur des dizaines de milliers d’événements chaque semaine. La ligne comprend les championnats les plus populaires de football, basketball, tennis, hockey, volleyball et bien d’autres sports. Il existe également des options moins connues, comme les paris sur des tournois régionaux ou des compétitions amateurs."}',
             'value_pt' => '{"0":"A seção de apostas esportivas foi desenvolvida com foco na praticidade, rapidez e variedade de eventos. A plataforma permite fazer apostas pré-jogo em dezenas de milhares de eventos a cada semana. A linha inclui os campeonatos mais populares de futebol, basquete, tênis, hóquei, voleibol e muitos outros esportes. Também há opções menos conhecidas, como apostas em torneios regionais e competições amadoras."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The interface is built to make it easy for users to create a bet slip and add multiple events to an accumulator. For convenience, filters by sport type, tournament, and match start time are available."}',
             'value_es' => '{"0":"La interfaz está diseñada para que el usuario pueda crear fácilmente un cupón y añadir varios eventos a una apuesta combinada. Para mayor comodidad, hay filtros por tipo de deporte, torneo y hora de inicio de los partidos."}',
             'value_fr' => '{"0":"L’interface est conçue pour que l’utilisateur puisse facilement créer un coupon et ajouter plusieurs événements à un pari combiné. Des filtres par type de sport, tournoi et heure de début des matchs sont disponibles pour plus de commodité."}',
             'value_pt' => '{"0":"A interface foi criada para que o usuário possa montar facilmente um bilhete e adicionar vários eventos a uma aposta múltipla. Para maior comodidade, há filtros por tipo de esporte, torneio e horário de início das partidas."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari also offers a cash-out feature, allowing players to settle a bet early and secure their profit. Users can save their favorite markets and track them in real time."}',
             'value_es' => '{"0":"MegaPari también cuenta con una función de cash-out que permite cerrar la apuesta antes de tiempo y asegurar las ganancias. Los jugadores pueden guardar sus mercados favoritos y seguirlos en tiempo real."}',
             'value_fr' => '{"0":"MegaPari propose également une fonction de cash-out, qui permet de clôturer un pari avant la fin et de sécuriser ses gains. Les joueurs peuvent enregistrer leurs marchés favoris et les suivre en temps réel."}',
             'value_pt' => '{"0":"A MegaPari também oferece a função de cash-out, que permite encerrar uma aposta antecipadamente e garantir o lucro. Os jogadores podem salvar seus mercados favoritos e acompanhá-los em tempo real."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The casino section offers a vast selection of gaming content. There are over ten thousand games from more than a hundred providers, including renowned companies such as Pragmatic Play, Evolution, Microgaming, NetEnt, Endorphina, Spinomenal, and many others."}',
             'value_es' => '{"0":"La sección del casino ofrece una amplia variedad de contenido de juegos. Hay más de diez mil juegos de más de cien proveedores, incluidos nombres reconocidos como Pragmatic Play, Evolution, Microgaming, NetEnt, Endorphina, Spinomenal y muchos otros."}',
             'value_fr' => '{"0":"La section casino propose une vaste sélection de jeux. Plus de dix mille titres sont disponibles, provenant de plus d’une centaine de fournisseurs, dont des sociétés renommées telles que Pragmatic Play, Evolution, Microgaming, NetEnt, Endorphina, Spinomenal et bien d’autres."}',
             'value_pt' => '{"0":"A seção de cassino oferece uma ampla variedade de jogos. São mais de dez mil títulos de mais de cem provedores, incluindo empresas renomadas como Pragmatic Play, Evolution, Microgaming, NetEnt, Endorphina, Spinomenal e muitas outras."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the live casino section, you can play with real dealers in roulette, poker, baccarat, blackjack, and game shows like Crazy Time or Monopoly Live. Convenient filters by provider, genre, and betting level make it easy to find the desired game. The platform regularly adds new releases, and the «Popular» section is updated daily based on player activity. MegaPari also hosts internal tournaments where players can compete for additional prizes."}',
             'value_es' => '{"0":"En la sección de casino en vivo se puede jugar con crupieres reales a la ruleta, el póker, el bacará, el blackjack y a juegos tipo show como Crazy Time o Monopoly Live. Los filtros por proveedor, género y nivel de apuesta facilitan la búsqueda del juego deseado. La plataforma añade nuevos lanzamientos con regularidad, y la sección «Popular» se actualiza a diario según la actividad de los jugadores. MegaPari también organiza torneos internos en los que los jugadores pueden competir por premios adicionales."}',
             'value_fr' => '{"0":"Dans la section casino en direct, il est possible de jouer avec de vrais croupiers à la roulette, au poker, au baccarat, au blackjack et à des jeux télévisés comme Crazy Time ou Monopoly Live. Des filtres pratiques par fournisseur, genre et niveau de mise permettent de trouver facilement le jeu souhaité. La plateforme ajoute régulièrement de nouveaux titres, et la section «Populaire» est mise à jour chaque jour selon l’activité des joueurs. MegaPari organise également des tournois internes où les joueurs peuvent concourir pour des prix supplémentaires."}',
             'value_pt' => '{"0":"Na seção de cassino ao vivo, é possível jogar com crupiês reais em roleta, pôquer, bacará, blackjack e jogos de estúdio como Crazy Time ou Monopoly Live. Filtros práticos por provedor, gênero e nível de aposta ajudam a encontrar rapidamente o jogo desejado. A plataforma adiciona novos lançamentos regularmente, e a seção «Popular» é atualizada diariamente com base na atividade dos jogadores. A MegaPari também realiza torneios internos onde os jogadores podem competir por prêmios adicionais."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"At MegaPari, the odds are favorable, especially for popular matches. For example, in the English Premier League, the odds for a team to win often stay around 1.96. In basketball and tennis, the situation is similar, with odds remaining at a high level. For instance, in NBA games, you can see figures around 1.94, and in tennis matches, around 1.90–1.93."}',
             'value_es' => '{"0":"En MegaPari, las cuotas son atractivas, especialmente para los partidos populares. Por ejemplo, en la Premier League inglesa, las cuotas para la victoria de un equipo suelen mantenerse alrededor de 1,96. En baloncesto y tenis, la situación es similar, y las cuotas se mantienen en un nivel alto. Por ejemplo, en los partidos de la NBA se pueden ver cifras alrededor de 1,94, y en los partidos de tenis, alrededor de 1,90–1,93."}',
             'value_fr' => '{"0":"Sur MegaPari, les cotes sont avantageuses, surtout pour les matchs populaires. Par exemple, en Premier League anglaise, la cote pour la victoire d’une équipe se situe souvent autour de 1,96. Pour le basketball et le tennis, la situation est similaire, les cotes restant à un niveau élevé. Par exemple, dans les matchs NBA, on peut voir des chiffres autour de 1,94, et dans les matchs de tennis, autour de 1,90–1,93."}',
             'value_pt' => '{"0":"Na MegaPari, as odds são vantajosas, especialmente para partidas populares. Por exemplo, na Premier League inglesa, a odd para a vitória de um time geralmente fica em torno de 1,96. No basquete e no tênis, a situação é semelhante, com odds mantendo-se em um nível alto. Por exemplo, nos jogos da NBA, os números ficam em torno de 1,94, e nas partidas de tênis, em cerca de 1,90–1,93."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In Live mode, MegaPari performs steadily: the odds update quickly, allowing you to react in time to changes in the game."}',
             'value_es' => '{"0":"En el modo en vivo, MegaPari funciona de manera estable: las cuotas se actualizan rápidamente, lo que permite reaccionar a tiempo a los cambios del juego."}',
             'value_fr' => '{"0":"En mode live, MegaPari reste stable : les cotes se mettent à jour rapidement, permettant de réagir à temps aux changements dans le jeu."}',
             'value_pt' => '{"0":"No modo ao vivo, a MegaPari se mantém estável: as odds são atualizadas rapidamente, permitindo reagir a tempo às mudanças no jogo."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"On MegaPari, you can watch some matches directly on the site and place bets while the game is ongoing. This works for many popular sports, such as football, basketball, tennis, and hockey."}',
             'value_es' => '{"0":"En MegaPari se pueden ver algunos partidos directamente en el sitio y realizar apuestas mientras se desarrolla el juego. Esto funciona para muchos deportes populares, como fútbol, baloncesto, tenis y hockey."}',
             'value_fr' => '{"0":"Sur MegaPari, il est possible de regarder certains matchs directement sur le site et de placer des paris pendant le déroulement du jeu. Cela fonctionne pour de nombreux sports populaires, comme le football, le basketball, le tennis et le hockey."}',
             'value_pt' => '{"0":"Na MegaPari, é possível assistir a alguns jogos diretamente no site e fazer apostas enquanto a partida está acontecendo. Isso funciona para muitos esportes populares, como futebol, basquete, tênis e hóquei."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Placing bets in Live mode on the MegaPari site is also convenient. Odds change quickly, and if something happens on the field or court, the numbers update almost immediately. You can bet on the match winner, the number of goals, games, or points. This makes the game more dynamic, allowing you to watch the match and place bets at the same time."}',
             'value_es' => '{"0":"Hacer apuestas en modo Live en el sitio de MegaPari también es cómodo. Las cuotas cambian rápidamente, y si ocurre algo en el campo o en la cancha, los números se actualizan casi de inmediato. Se puede apostar al ganador del partido, al número de goles, juegos o puntos. Esto hace que la experiencia sea más dinámica, pudiendo ver el partido y apostar al mismo tiempo."}',
             'value_fr' => '{"0":"Parier en mode Live sur le site MegaPari est également pratique. Les cotes changent rapidement et, si quelque chose se passe sur le terrain ou sur le court, les chiffres se mettent à jour presque instantanément. Il est possible de parier sur le vainqueur du match, le nombre de buts, de jeux ou de points. Cela rend le jeu plus dynamique et permet de regarder le match tout en plaçant des paris."}',
             'value_pt' => '{"0":"Fazer apostas em modo Live no site da MegaPari também é conveniente. As odds mudam rapidamente, e se algo acontece no campo ou na quadra, os números são atualizados quase imediatamente. É possível apostar no vencedor da partida, no número de gols, games ou pontos. Isso torna o jogo mais dinâmico, permitindo assistir à partida e apostar ao mesmo tempo."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The platform includes basic statistics for events, which can be viewed both live and before the match. For football matches, there is data on shots on goal, ball possession, and other statistics that help make decisions for live betting."}',
             'value_es' => '{"0":"La plataforma incluye estadísticas básicas de los eventos, que se pueden consultar tanto en vivo como antes del partido. Para los partidos de fútbol, hay datos sobre tiros a puerta, posesión del balón y otras estadísticas que ayudan a tomar decisiones en apuestas en tiempo real."}',
             'value_fr' => '{"0":"La plateforme propose des statistiques de base pour les événements, visibles à la fois en direct et avant le match. Pour les matchs de football, des données sur les tirs au but, la possession du ballon et d’autres statistiques aident à prendre des décisions pour les paris en temps réel."}',
             'value_pt' => '{"0":"A plataforma inclui estatísticas básicas dos eventos, que podem ser visualizadas tanto ao vivo quanto antes da partida. Para jogos de futebol, há dados sobre chutes a gol, posse de bola e outras estatísticas que ajudam na tomada de decisões para apostas em tempo real."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Some games are accompanied by charts and updates according to competition standards. However, compared to specialized analytical services, the set of metrics here is more practical than professional."}',
             'value_es' => '{"0":"Algunos juegos incluyen gráficos y actualizaciones según los estándares de la competición. Sin embargo, en comparación con servicios analíticos especializados, el conjunto de métricas aquí es más práctico que profesional."}',
             'value_fr' => '{"0":"Certaines parties sont accompagnées de graphiques et de mises à jour selon les standards des compétitions. Cependant, comparé aux services d’analyse spécialisés, l’ensemble des indicateurs ici est plus pratique que professionnel."}',
             'value_pt' => '{"0":"Alguns jogos são acompanhados de gráficos e atualizações conforme os padrões das competições. No entanto, comparado a serviços analíticos especializados, o conjunto de métricas aqui é mais prático do que profissional."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari offers a large number of payment methods for deposits and withdrawals. There are over forty options, including bank cards, e-wallets, mobile payments, and a wide range of cryptocurrencies."}',
             'value_es' => '{"0":"MegaPari ofrece una gran cantidad de métodos de pago para depósitos y retiros. Hay más de cuarenta opciones, incluyendo tarjetas bancarias, monederos electrónicos, pagos móviles y una amplia variedad de criptomonedas."}',
             'value_fr' => '{"0":"MegaPari propose un grand nombre de méthodes de paiement pour les dépôts et les retraits. Il y a plus de quarante options, y compris les cartes bancaires, les portefeuilles électroniques, les paiements mobiles et un large éventail de cryptomonnaies."}',
             'value_pt' => '{"0":"A MegaPari possui uma grande variedade de métodos de pagamento para depósitos e saques. São mais de quarenta opções, incluindo cartões bancários, carteiras eletrônicas, pagamentos móveis e uma ampla gama de criptomoedas."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Deposits are usually instant, and withdrawals take a short time depending on the chosen method. MegaPari does not charge additional fees. All transactions go through secure channels, so security is also well handled."}',
             'value_es' => '{"0":"Los depósitos suelen ser instantáneos, y los retiros tardan poco tiempo dependiendo del método elegido. MegaPari no cobra comisiones adicionales. Todas las operaciones se realizan a través de canales seguros, por lo que la seguridad también está garantizada."}',
             'value_fr' => '{"0":"Les dépôts sont généralement instantanés, et les retraits prennent peu de temps selon la méthode choisie. MegaPari ne prélève pas de frais supplémentaires. Toutes les transactions passent par des canaux sécurisés, assurant ainsi une bonne protection."}',
             'value_pt' => '{"0":"Os depósitos geralmente são instantâneos, e os saques levam pouco tempo, dependendo do método escolhido. A MegaPari não cobra taxas adicionais. Todas as transações são feitas por canais seguros, garantindo também a segurança."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For those using cryptocurrency, there is an added advantage — transactions are faster, and minimum withdrawal amounts are lower than with regular payment methods."}',
             'value_es' => '{"0":"Para quienes usan criptomonedas, hay un beneficio adicional: las transacciones son más rápidas y los montos mínimos de retiro son más bajos que con los métodos de pago habituales."}',
             'value_fr' => '{"0":"Pour ceux qui utilisent les cryptomonnaies, il y a un avantage supplémentaire : les transactions sont plus rapides et les montants minimums pour les retraits sont plus bas que pour les méthodes de paiement classiques."}',
             'value_pt' => '{"0":"Para quem usa criptomoedas, há uma vantagem adicional — as transações são mais rápidas e os valores mínimos para saque são menores do que nos métodos de pagamento comuns."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The support team operates around the clock. If any questions arise regarding bets, withdrawals, or bonuses, you can contact them via the online chat directly on the site, send an email, or call the hotline."}',
             'value_es' => '{"0":"El servicio de atención al cliente funciona las 24 horas. Si surge alguna pregunta sobre apuestas, retiros o bonos, se puede contactar a través del chat en línea directamente en el sitio, enviar un correo electrónico o llamar a la línea directa."}',
             'value_fr' => '{"0":"Le service client est disponible 24 heures sur 24. En cas de questions concernant les paris, les retraits ou les bonus, vous pouvez les contacter via le chat en ligne directement sur le site, envoyer un e-mail ou appeler la hotline."}',
             'value_pt' => '{"0":"O serviço de atendimento funciona 24 horas por dia. Se surgirem dúvidas sobre apostas, saques ou bônus, você pode entrar em contato pelo chat online diretamente no site, enviar um e-mail ou ligar para a linha direta."}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 38
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Large number of casino games",
                                 "1":"Wide betting line",
                                 "2":"Many payment methods available",
                                 "3":"Availability of live bets and streams"},
                             "1":
                                {"0":"Account verification can take a long time",
                                 "1":"Access to streams depends on the region"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran cantidad de juegos de casino",
                                 "1":"Amplia línea de apuestas",
                                 "2":"Muchos métodos de pago disponibles",
                                 "3":"Disponibilidad de apuestas en vivo y transmisiones"},
                             "1":
                                {"0":"La verificación de la cuenta puede tardar mucho",
                                 "1":"El acceso a las transmisiones depende de la región"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Grand nombre de jeux de casino",
                                 "1":"Large gamme de paris",
                                 "2":"De nombreux moyens de paiement disponibles",
                                 "3":"Disponibilité des paris en direct et des diffusions"},
                             "1":
                                {"0":"La vérification du compte peut prendre du temps",
                                 "1":"L’accès aux diffusions dépend de la région"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande número de jogos de cassino",
                                 "1":"Linha de apostas ampla",
                                 "2":"Muitos métodos de pagamento disponíveis",
                                 "3":"Disponibilidade de apostas ao vivo e transmissões"},
                             "1":
                                {"0":"A verificação da conta pode levar bastante tempo",
                                 "1":"O acesso às transmissões depende da região"}
                             }',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 39
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MegaPari"}',
                'value_fr' => '{"0":"FAQ de MegaPari"}',
                'value_pt' => '{"0":"Perguntas frequentes do MegaPari"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 40
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can you place bets on MegaPari without verification?"}',
             'value_es' => '{"0":"¿Se pueden hacer apuestas en MegaPari sin verificación?"}',
             'value_fr' => '{"0":"Peut-on placer des paris sur MegaPari sans vérification ?"}',
             'value_pt' => '{"0":"É possível apostar na MegaPari sem verificação?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 41
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"After registration, you can immediately deposit funds and start betting. However, to withdraw money, MegaPari may ask you to verify your identity. Usually, a photo of your ID and a selfie are enough, and the verification takes less than a day."}',
             'value_es' => '{"0":"Después de registrarse, se puede depositar dinero y empezar a apostar de inmediato. Sin embargo, para retirar fondos, MegaPari puede solicitar la verificación de identidad. Normalmente basta con una foto del documento y un selfie, y la verificación tarda menos de un día."}',
             'value_fr' => '{"0":"Après l’inscription, vous pouvez déposer des fonds et commencer à parier immédiatement. Cependant, pour retirer de l’argent, MegaPari peut demander de vérifier votre identité. En général, une photo de votre pièce d’identité et un selfie suffisent, et la vérification prend moins d’une journée."}',
             'value_pt' => '{"0":"Após o registro, você pode depositar fundos e começar a apostar imediatamente. No entanto, para sacar dinheiro, a MegaPari pode solicitar a verificação de identidade. Normalmente, uma foto do documento e uma selfie são suficientes, e a verificação leva menos de um dia."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 42
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can you play on MegaPari from your phone?"}',
             'value_es' => '{"0":"¿Se puede jugar en MegaPari desde el teléfono?"}',
             'value_fr' => '{"0":"Peut-on jouer sur MegaPari depuis son téléphone ?"}',
             'value_pt' => '{"0":"É possível jogar na MegaPari pelo celular?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 43
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there is a mobile version of the site as well as apps for Android and iOS."}',
             'value_es' => '{"0":"Sí, hay una versión móvil del sitio y también aplicaciones para Android e iOS."}',
             'value_fr' => '{"0":"Oui, il existe une version mobile du site ainsi que des applications pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, existe uma versão móvel do site, assim como aplicativos para Android e iOS."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 44
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tardan los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse sont effectués les retraits ?"}',
             'value_pt' => '{"0":"Quão rápidas são as retiradas?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 45
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The speed depends on the chosen method. Funds sent to e-wallets or cryptocurrency accounts arrive almost instantly. If the withdrawal is made to a bank card, it may take up to three days."}',
             'value_es' => '{"0":"La velocidad depende del método elegido. Los fondos enviados a monederos electrónicos o cuentas de criptomonedas llegan casi al instante. Si el retiro se realiza a una tarjeta bancaria, puede tardar hasta tres días."}',
             'value_fr' => '{"0":"La rapidité dépend de la méthode choisie. Les fonds envoyés vers des portefeuilles électroniques ou des comptes en cryptomonnaie arrivent presque instantanément. Si le retrait se fait sur une carte bancaire, cela peut prendre jusqu’à trois jours."}',
             'value_pt' => '{"0":"A velocidade depende do método escolhido. Fundos enviados para carteiras eletrônicas ou contas de criptomoedas chegam quase instantaneamente. Se o saque for para um cartão bancário, pode levar até três dias."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 46
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Is MegaPari legal?"}',
             'value_es' => '{"0":"¿MegaPari es legal?"}',
             'value_fr' => '{"0":"MegaPari est-il légal ?"}',
             'value_pt' => '{"0":"A MegaPari é legal?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 47
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform has an official Curaçao license, which allows it to operate internationally."}',
             'value_es' => '{"0":"Sí, la plataforma cuenta con una licencia oficial de Curazao, que le permite operar a nivel internacional."}',
             'value_fr' => '{"0":"Oui, la plateforme possède une licence officielle de Curaçao, qui lui permet d’opérer à l’international."}',
             'value_pt' => '{"0":"Sim, a plataforma possui uma licença oficial de Curaçao, que permite operar internacionalmente."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 48
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can you have multiple accounts on MegaPari?"}',
             'value_es' => '{"0":"¿Se pueden tener varias cuentas en MegaPari?"}',
             'value_fr' => '{"0":"Peut-on avoir plusieurs comptes sur MegaPari ?"}',
             'value_pt' => '{"0":"É possível ter várias contas na MegaPari?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 49
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, creating multiple accounts is prohibited. If the system detects duplicates, all accounts may be blocked."}',
             'value_es' => '{"0":"No, está prohibido crear varias cuentas. Si el sistema detecta duplicados, todas las cuentas pueden ser bloqueadas."}',
             'value_fr' => '{"0":"Non, la création de plusieurs comptes est interdite. Si le système détecte des doublons, tous les comptes peuvent être bloqués."}',
             'value_pt' => '{"0":"Não, é proibido criar várias contas. Se o sistema detectar duplicatas, todas as contas podem ser bloqueadas."}',
             'order' => 49
            ]
        );
    }
}
