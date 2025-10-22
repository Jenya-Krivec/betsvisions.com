<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit is an international bookmaker that appeared in 2016 and stands out for its focus on cryptocurrency. Here, you can place sports bets, play in the casino, and participate in live games and tournaments."}',
             'value_es' => '{"0":"1xBit es una casa de apuestas internacional que surgió en 2016 y se destaca por su enfoque en criptomonedas. Aquí puedes realizar apuestas deportivas, jugar en el casino y participar en juegos en vivo y torneos."}',
             'value_fr' => '{"0":"1xBit est un bookmaker international apparu en 2016 et se distingue par son accent sur les cryptomonnaies. Vous pouvez y placer des paris sportifs, jouer au casino et participer à des jeux en direct et à des tournois."}',
             'value_pt' => '{"0":"1xBit é uma casa de apostas internacional que surgiu em 2016 e se destaca pelo foco em criptomoedas. Aqui, você pode fazer apostas esportivas, jogar no cassino e participar de jogos ao vivo e torneios."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The website features a modern interface and operates smoothly even during peak loads. 1xBit also offers an extensive loyalty program and promotions for new players. The platform is designed for users who value privacy and fast cryptocurrency transactions."}',
             'value_es' => '{"0":"El sitio web tiene una interfaz moderna y funciona sin problemas incluso durante los momentos de mayor tráfico. 1xBit también ofrece un programa de fidelidad extenso y promociones para nuevos jugadores. La plataforma está dirigida a usuarios que valoran la privacidad y la rapidez en las transacciones con criptomonedas."}',
             'value_fr' => '{"0":"Le site dispose d’une interface moderne et fonctionne sans ralentissements même lors des pics de trafic. 1xBit propose également un programme de fidélité étendu et des promotions pour les nouveaux joueurs. La plateforme est conçue pour les utilisateurs qui apprécient la confidentialité et la rapidité des transactions en cryptomonnaies."}',
             'value_pt' => '{"0":"O site possui uma interface moderna e funciona sem atrasos mesmo durante os períodos de maior movimento. 1xBit também oferece um programa de fidelidade abrangente e promoções para novos jogadores. A plataforma é voltada para usuários que valorizam privacidade e rapidez nas transações com criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit operates under a Curacao license, which allows it to legally provide its services in many countries. Although this jurisdiction is not the strictest in terms of regulation, it provides a basic level of legal protection for users."}',
             'value_es' => '{"0":"1xBit opera bajo una licencia de Curazao, lo que le permite ofrecer legalmente sus servicios en muchos países. Aunque esta jurisdicción no es la más estricta en términos de regulación, proporciona un nivel básico de protección legal para los usuarios."}',
             'value_fr' => '{"0":"1xBit fonctionne sous licence de Curaçao, ce qui lui permet de fournir légalement ses services dans de nombreux pays. Bien que cette juridiction ne soit pas la plus stricte en matière de régulation, elle offre un niveau de protection juridique de base aux utilisateurs."}',
             'value_pt' => '{"0":"1xBit opera sob uma licença de Curaçao, o que lhe permite fornecer legalmente seus serviços em muitos países. Embora esta jurisdição não seja a mais rigorosa em termos de regulamentação, ela oferece um nível básico de proteção legal para os usuários."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The platform’s security is based on modern SSL encryption technologies, which ensure the protection of all transactions and personal data. Since 1xBit accepts only cryptocurrency, players gain additional privacy as the system does not require entering personal information or bank details."}',
             'value_es' => '{"0":"La seguridad de la plataforma se basa en tecnologías modernas de cifrado SSL, que garantizan la protección de todas las transacciones y datos personales. Dado que 1xBit acepta únicamente criptomonedas, los jugadores obtienen privacidad adicional, ya que el sistema no requiere ingresar información personal ni datos bancarios."}',
             'value_fr' => '{"0":"La sécurité de la plateforme repose sur des technologies modernes de cryptage SSL, qui garantissent la protection de toutes les transactions et données personnelles. Comme 1xBit n’accepte que les cryptomonnaies, les joueurs bénéficient d’une confidentialité supplémentaire, le système ne nécessitant pas la saisie d’informations personnelles ou de coordonnées bancaires."}',
             'value_pt' => '{"0":"A segurança da plataforma baseia-se em tecnologias modernas de criptografia SSL, que garantem a proteção de todas as transações e dados pessoais. Como 1xBit aceita apenas criptomoedas, os jogadores ganham privacidade adicional, pois o sistema não exige a inserção de informações pessoais ou dados bancários."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers an extremely wide range of options. The platform includes popular disciplines such as football, tennis, basketball, hockey, and boxing, as well as niche sports like snooker, darts, and futsal. For each match, hundreds of markets are available, allowing you to bet on the match result, totals, handicaps, goal scorers, and individual player statistics."}',
             'value_es' => '{"0":"1xBit ofrece una gama extremadamente amplia de opciones. La plataforma incluye disciplinas populares como fútbol, tenis, baloncesto, hockey y boxeo, así como deportes de nicho como snooker, dardos y futsal. Para cada partido, hay cientos de mercados disponibles que permiten apostar al resultado del encuentro, totales, hándicaps, goleadores y estadísticas individuales de los jugadores."}',
             'value_fr' => '{"0":"1xBit propose une gamme extrêmement large d’options. La plateforme inclut des disciplines populaires telles que le football, le tennis, le basket-ball, le hockey et la boxe, ainsi que des sports de niche comme le snooker, le fléchettes et le futsal. Pour chaque match, des centaines de marchés sont disponibles, permettant de parier sur le résultat, les totaux, les handicaps, les buteurs et les statistiques individuelles des joueurs."}',
             'value_pt' => '{"0":"1xBit oferece uma variedade extremamente ampla de opções. A plataforma inclui disciplinas populares como futebol, tênis, basquete, hóquei e boxe, assim como esportes de nicho como sinuca, dardos e futsal. Para cada partida, estão disponíveis centenas de mercados, permitindo apostar no resultado, totais, handicaps, artilheiros e estatísticas individuais dos jogadores."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit supports the most popular esports disciplines, including CS2, Dota 2, League of Legends, and Valorant, where you can also choose from a large number of betting options. It is possible to combine predictions and create accumulator bets."}',
             'value_es' => '{"0":"1xBit admite las disciplinas de esports más populares, como CS2, Dota 2, League of Legends y Valorant, donde también se puede elegir entre una gran cantidad de opciones de apuestas. Es posible combinar predicciones y crear apuestas acumuladas."}',
             'value_fr' => '{"0":"1xBit prend en charge les disciplines d’esports les plus populaires, telles que CS2, Dota 2, League of Legends et Valorant, où vous pouvez également choisir parmi un grand nombre d’options de paris. Il est possible de combiner les pronostics et de créer des paris combinés."}',
             'value_pt' => '{"0":"1xBit suporta as disciplinas de esports mais populares, incluindo CS2, Dota 2, League of Legends e Valorant, onde também é possível escolher entre uma grande quantidade de opções de apostas. É possível combinar previsões e criar apostas acumuladas."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit provides access to hundreds of sports events daily, covering both the most famous championships in Europe, Asia, and South America, as well as regional or amateur tournaments. You can choose from dozens of sports such as football, tennis, basketball, hockey, baseball, handball, water polo, or even exotic disciplines like cricket or Gaelic football."}',
             'value_es' => '{"0":"1xBit ofrece acceso a cientos de eventos deportivos diariamente, cubriendo tanto los campeonatos más famosos de Europa, Asia y América del Sur como torneos regionales o amateurs. Se puede elegir entre decenas de deportes como fútbol, tenis, baloncesto, hockey, béisbol, balonmano, waterpolo o incluso disciplinas exóticas como cricket o fútbol gaélico."}',
             'value_fr' => '{"0":"1xBit donne accès à des centaines d’événements sportifs chaque jour, couvrant à la fois les championnats les plus connus d’Europe, d’Asie et d’Amérique du Sud ainsi que les tournois régionaux ou amateurs. On peut choisir parmi des dizaines de sports tels que le football, le tennis, le basket-ball, le hockey, le baseball, le handball, le water-polo ou même des disciplines exotiques comme le cricket ou le football gaélique."}',
             'value_pt' => '{"0":"1xBit oferece acesso a centenas de eventos esportivos diariamente, abrangendo tanto os campeonatos mais famosos da Europa, Ásia e América do Sul quanto torneios regionais ou amadores. É possível escolher entre dezenas de esportes, como futebol, tênis, basquete, hóquei, beisebol, handebol, polo aquático ou até disciplinas exóticas como críquete ou futebol gaélico."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"A particular advantage of the platform is the ability to place live bets in real time. Odds on the site update almost instantly, allowing you to react to game changes and find profitable options even during a match. In addition, detailed statistics are available on the site, helping to analyze team results, assess player form, and forecast future events."}',
             'value_es' => '{"0":"Una ventaja particular de la plataforma es la posibilidad de realizar apuestas en vivo en tiempo real. Las cuotas en el sitio se actualizan casi al instante, lo que permite reaccionar a los cambios del juego y encontrar opciones rentables incluso durante un partido. Además, el sitio ofrece estadísticas detalladas que ayudan a analizar los resultados de los equipos, evaluar la forma de los jugadores y pronosticar eventos futuros."}',
             'value_fr' => '{"0":"Un avantage particulier de la plateforme est la possibilité de placer des paris en direct en temps réel. Les cotes sur le site se mettent à jour presque instantanément, permettant de réagir aux changements du jeu et de trouver des options rentables même pendant un match. De plus, des statistiques détaillées sont disponibles sur le site pour analyser les résultats des équipes, évaluer la forme des joueurs et prévoir les événements à venir."}',
             'value_pt' => '{"0":"Uma vantagem particular da plataforma é a possibilidade de fazer apostas ao vivo em tempo real. As odds no site são atualizadas quase instantaneamente, permitindo reagir às mudanças do jogo e encontrar opções lucrativas mesmo durante uma partida. Além disso, o site oferece estatísticas detalhadas que ajudam a analisar os resultados das equipes, avaliar a forma dos jogadores e prever eventos futuros."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit Casino offers a wide selection of games from leading industry providers. The bookmaker works with companies such as Pragmatic Play, BGaming, Spinomenal, Betsoft, Endorphina, Playson, and Evolution. The casino section hosts thousands of slots with various themes, ranging from classic fruit machines to modern video slots. In addition to slots, the platform features many table games, including roulette, blackjack, baccarat, and poker."}',
             'value_es' => '{"0":"El casino de 1xBit ofrece una amplia selección de juegos de los principales proveedores de la industria. El operador trabaja con compañías como Pragmatic Play, BGaming, Spinomenal, Betsoft, Endorphina, Playson y Evolution. La sección de casino incluye miles de tragamonedas con diferentes temáticas, desde las clásicas máquinas de frutas hasta los modernos video slots. Además de las tragamonedas, la plataforma cuenta con muchos juegos de mesa, como ruleta, blackjack, baccarat y póker."}',
             'value_fr' => '{"0":"Le casino 1xBit propose un large choix de jeux provenant des principaux fournisseurs du secteur. Le bookmaker collabore avec des sociétés telles que Pragmatic Play, BGaming, Spinomenal, Betsoft, Endorphina, Playson et Evolution. La section casino comprend des milliers de machines à sous aux thématiques variées, allant des machines à fruits classiques aux machines à sous vidéo modernes. En plus des machines à sous, la plateforme propose de nombreux jeux de table, tels que la roulette, le blackjack, le baccarat et le poker."}',
             'value_pt' => '{"0":"O cassino 1xBit oferece uma ampla variedade de jogos dos principais provedores do setor. A plataforma trabalha com empresas como Pragmatic Play, BGaming, Spinomenal, Betsoft, Endorphina, Playson e Evolution. A seção de cassino reúne milhares de slots com diferentes temas, desde os clássicos caça-níqueis de frutas até os modernos video slots. Além dos slots, há muitos jogos de mesa, incluindo roleta, blackjack, bacará e pôquer."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"A separate section is dedicated to live casino, where players can experience the atmosphere of a real gambling hall. Games with real dealers are streamed in high quality, and interactive chat allows communication with hosts in real time."}',
             'value_es' => '{"0":"Hay una sección especial de casino en vivo donde los jugadores pueden experimentar la atmósfera de un verdadero salón de juegos. Los juegos con crupieres reales se transmiten en alta calidad y el chat interactivo permite comunicarse con los presentadores en tiempo real."}',
             'value_fr' => '{"0":"Une section séparée est consacrée au casino en direct, où les joueurs peuvent ressentir l’atmosphère d’une véritable salle de jeux. Les parties avec de vrais croupiers sont diffusées en haute qualité et le chat interactif permet de communiquer avec les animateurs en temps réel."}',
             'value_pt' => '{"0":"Uma seção separada é dedicada ao cassino ao vivo, onde os jogadores podem experimentar a atmosfera de uma verdadeira sala de jogos. Os jogos com dealers reais são transmitidos em alta qualidade e o chat interativo permite comunicação com os anfitriões em tempo real."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers some of the highest odds among bookmakers. Since the platform works exclusively with cryptocurrency, the absence of fees allows the bookmaker to maintain more favorable odds. For top football matches, such as Champions League games or English, Spanish, and Italian league fixtures, odds for favorites often range between 1.90 and 1.95."}',
             'value_es' => '{"0":"1xBit ofrece algunas de las cuotas más altas entre los operadores. Como la plataforma opera exclusivamente con criptomonedas, la ausencia de comisiones permite que el operador mantenga cuotas más favorables. En los partidos de fútbol más importantes, como los de la Liga de Campeones o las ligas de Inglaterra, España e Italia, las cuotas para los favoritos suelen estar entre 1,90 y 1,95."}',
             'value_fr' => '{"0":"1xBit propose certains des meilleurs cotes parmi les bookmakers. Comme la plateforme fonctionne exclusivement avec des cryptomonnaies, l’absence de frais permet au bookmaker de maintenir des cotes plus avantageuses. Pour les matchs de football de haut niveau, tels que ceux de la Ligue des champions ou des championnats d’Angleterre, d’Espagne et d’Italie, les cotes des favoris se situent souvent entre 1,90 et 1,95."}',
             'value_pt' => '{"0":"1xBit oferece algumas das melhores odds entre as casas de apostas. Como a plataforma opera exclusivamente com criptomoedas, a ausência de taxas permite que o bookmaker mantenha odds mais favoráveis. Para os principais jogos de futebol, como partidas da Liga dos Campeões ou dos campeonatos da Inglaterra, Espanha e Itália, as odds para os favoritos frequentemente variam entre 1,90 e 1,95."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The situation is especially interesting in live betting markets. For example, during tennis matches, odds are updated immediately after each point, allowing players to react instantly to the flow of the game."}',
             'value_es' => '{"0":"La situación es especialmente interesante en los mercados de apuestas en vivo. Por ejemplo, durante los partidos de tenis, las cuotas se actualizan inmediatamente después de cada punto, lo que permite a los jugadores reaccionar al instante a la dinámica del juego."}',
             'value_fr' => '{"0":"La situation est particulièrement intéressante sur les marchés de paris en direct. Par exemple, lors des matchs de tennis, les cotes sont mises à jour immédiatement après chaque point, ce qui permet de réagir instantanément à la dynamique du jeu."}',
             'value_pt' => '{"0":"A situação é especialmente interessante nos mercados de apostas ao vivo. Por exemplo, durante partidas de tênis, as odds são atualizadas imediatamente após cada ponto, permitindo que os jogadores reajam instantaneamente à dinâmica do jogo."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"In the live betting section, odds are updated almost instantly, without noticeable delays. This allows players to react promptly to changes in the course of the match. During football games, bets can be placed on the result of a half, the number of goals, handicaps, or even events that will occur in the next few minutes."}',
             'value_es' => '{"0":"En la sección de apuestas en vivo, las cuotas se actualizan casi al instante, sin retrasos perceptibles. Esto permite a los jugadores reaccionar rápidamente a los cambios en el desarrollo del partido. Durante los partidos de fútbol, se pueden realizar apuestas sobre el resultado de la primera o segunda mitad, la cantidad de goles, las hándicaps o incluso eventos que ocurran en los próximos minutos."}',
             'value_fr' => '{"0":"Dans la section des paris en direct, les cotes sont mises à jour presque instantanément, sans délais perceptibles. Cela permet aux joueurs de réagir rapidement aux changements dans le déroulement du match. Lors des matchs de football, il est possible de parier sur le résultat de la mi-temps, le nombre de buts, les handicaps ou même les événements qui se produiront dans les prochaines minutes."}',
             'value_pt' => '{"0":"Na seção de apostas ao vivo, as odds são atualizadas quase instantaneamente, sem atrasos perceptíveis. Isso permite que os jogadores reajam rapidamente às mudanças no andamento da partida. Durante os jogos de futebol, é possível apostar no resultado do tempo, no número de gols, nos handicaps ou até em eventos que ocorrerão nos próximos minutos."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Live streaming is available for a significant number of events. Players can watch matches from a computer or mobile device without the need to go to third-party platforms. During the broadcast, key statistics are displayed on the screen at the same time, including possession percentage, shots on target, corners, and the number of fouls."}',
             'value_es' => '{"0":"La transmisión en vivo está disponible para un gran número de eventos. Los jugadores pueden ver los partidos desde un ordenador o dispositivo móvil sin necesidad de recurrir a plataformas externas. Durante la transmisión, se muestran simultáneamente estadísticas clave como el porcentaje de posesión, los tiros a puerta, los saques de esquina y la cantidad de faltas."}',
             'value_fr' => '{"0":"La diffusion en direct est disponible pour un nombre important d’événements. Les joueurs peuvent regarder les matchs depuis un ordinateur ou un appareil mobile sans avoir besoin de passer par des plateformes tierces. Pendant la diffusion, les statistiques clés sont affichées simultanément à l’écran, notamment le pourcentage de possession, les tirs cadrés, les corners et le nombre de fautes."}',
             'value_pt' => '{"0":"A transmissão ao vivo está disponível para um número significativo de eventos. Os jogadores podem assistir às partidas pelo computador ou dispositivo móvel sem precisar recorrer a plataformas externas. Durante a transmissão, as estatísticas principais são exibidas simultaneamente na tela, incluindo porcentagem de posse de bola, finalizações certas, escanteios e número de faltas."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to this section, players can view detailed statistics before and during the match. For football matches, information is available on the number of shots, ball possession, yellow cards, fouls, corners, and other parameters. In tennis, for example, it is possible to track the number of aces or double faults, in basketball the success rate of three-point shots, and in esports matches, round statistics or player performance."}',
             'value_es' => '{"0":"Gracias a esta sección, los jugadores pueden ver estadísticas detalladas antes y durante el partido. Para los partidos de fútbol, se ofrece información sobre el número de tiros, la posesión del balón, tarjetas amarillas, faltas, saques de esquina y otros parámetros. En tenis, por ejemplo, se puede seguir la cantidad de saques directos o dobles faltas, en baloncesto el porcentaje de aciertos en tiros de tres puntos y en partidos de deportes electrónicos los resultados de las rondas o el desempeño de los jugadores."}',
             'value_fr' => '{"0":"Grâce à cette section, les joueurs peuvent consulter des statistiques détaillées avant et pendant le match. Pour les matchs de football, les informations disponibles incluent le nombre de tirs, la possession de balle, les cartons jaunes, les fautes, les corners et d’autres paramètres. Au tennis, il est possible de suivre le nombre d’aces ou de doubles fautes, au basketball le pourcentage de réussite aux tirs à trois points, et dans les matchs d’e-sport les statistiques des manches ou la performance des joueurs."}',
             'value_pt' => '{"0":"Graças a esta seção, os jogadores podem visualizar estatísticas detalhadas antes e durante a partida. Para partidas de futebol, estão disponíveis informações sobre número de chutes, posse de bola, cartões amarelos, faltas, escanteios e outros parâmetros. No tênis, por exemplo, é possível acompanhar a quantidade de aces ou duplas faltas, no basquete a taxa de acertos em arremessos de três pontos e em partidas de esports, estatísticas de rounds ou desempenho dos jogadores."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"It is also worth noting that the section is integrated directly into the event interface. There is no need to open separate windows, as all data is available alongside the betting markets. This allows players to simultaneously monitor changes in odds and statistics. In addition, 1xBit provides a feature to view the history of your own bets."}',
             'value_es' => '{"0":"También cabe destacar que la sección está integrada directamente en la interfaz del evento. No es necesario abrir ventanas separadas, todos los datos están disponibles junto a los mercados de apuestas. Esto permite observar simultáneamente los cambios en las cuotas y las estadísticas. Además, 1xBit ofrece la función de consultar el historial de tus propias apuestas."}',
             'value_fr' => '{"0":"Il convient également de noter que cette section est intégrée directement dans l’interface de l’événement. Il n’est pas nécessaire d’ouvrir des fenêtres séparées, toutes les données sont disponibles à côté des marchés de paris. Cela permet de suivre simultanément l’évolution des cotes et les statistiques. De plus, 1xBit propose une fonction pour consulter l’historique de ses propres paris."}',
             'value_pt' => '{"0":"Também vale destacar que a seção está integrada diretamente na interface do evento. Não é necessário abrir janelas separadas, todos os dados estão disponíveis ao lado dos mercados de apostas. Isso permite acompanhar simultaneamente as mudanças nas odds e nas estatísticas. Além disso, 1xBit oferece a função de visualizar o histórico das próprias apostas."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit stands out among most bookmaker platforms by operating entirely on cryptocurrency. Players can use over forty different cryptocurrencies, including Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Binance Coin, and other popular tokens."}',
             'value_es' => '{"0":"1xBit se destaca entre la mayoría de las plataformas de apuestas por operar completamente con criptomonedas. Los jugadores pueden usar más de cuarenta criptomonedas diferentes, incluyendo Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Binance Coin y otros tokens populares."}',
             'value_fr' => '{"0":"1xBit se distingue parmi la plupart des plateformes de paris en fonctionnant entièrement avec des cryptomonnaies. Les joueurs peuvent utiliser plus de quarante cryptomonnaies différentes, notamment Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Binance Coin et d’autres tokens populaires."}',
             'value_pt' => '{"0":"1xBit se destaca entre a maioria das plataformas de apostas por operar totalmente com criptomoedas. Os jogadores podem usar mais de quarenta criptomoedas diferentes, incluindo Bitcoin, Ethereum, Litecoin, Dogecoin, Tether, Binance Coin e outros tokens populares."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Depositing funds is almost instantaneous. Once the transaction is confirmed on the network, the balance updates practically immediately. Withdrawals are processed just as quickly."}',
             'value_es' => '{"0":"El depósito de fondos es casi instantáneo. Una vez confirmada la transacción en la red, el saldo se actualiza prácticamente de inmediato. Los retiros se procesan de igual manera."}',
             'value_fr' => '{"0":"Le dépôt de fonds est presque instantané. Une fois la transaction confirmée sur le réseau, le solde est mis à jour pratiquement immédiatement. Les retraits sont traités avec la même rapidité."}',
             'value_pt' => '{"0":"O depósito de fundos é quase instantâneo. Assim que a transação é confirmada na rede, o saldo é atualizado praticamente de imediato. Os saques são processados com a mesma rapidez."}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Importantly, 1xBit does not require the traditional verification that is mandatory for most bookmakers. This allows players to remain anonymous."}',
             'value_es' => '{"0":"Es importante destacar que 1xBit no requiere la verificación tradicional que es obligatoria en la mayoría de las casas de apuestas. Esto permite que los jugadores permanezcan anónimos."}',
             'value_fr' => '{"0":"Il est important de noter que 1xBit ne requiert pas la vérification traditionnelle obligatoire pour la plupart des bookmakers. Cela permet aux joueurs de rester anonymes."}',
             'value_pt' => '{"0":"É importante notar que o 1xBit não exige a verificação tradicional, que é obrigatória na maioria das casas de apostas. Isso permite que os jogadores permaneçam anônimos."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 32
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 33
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"You can contact customer support via the website chat and email."}',
             'value_es' => '{"0":"Puede ponerse en contacto con el servicio de atención al cliente a través del chat en el sitio web y por correo electrónico."}',
             'value_fr' => '{"0":"Vous pouvez contacter le service client via le chat sur le site web et par e-mail."}',
             'value_pt' => '{"0":"Você pode entrar em contato com o suporte ao cliente através do chat no site e por e-mail."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 34
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 35
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Support for a large number of cryptocurrencies",
                                 "1":"Wide range of sports markets",
                                 "2":"No banking intermediaries",
                                 "3":"Detailed statistics"},
                             "1":
                                {"0":"Working exclusively with cryptocurrencies can be inconvenient"}
                             }',
             'value_es' => '{"0":
                                {"0":"Soporte para una gran cantidad de criptomonedas",
                                 "1":"Amplia gama de mercados deportivos",
                                 "2":"Sin intermediarios bancarios",
                                 "3":"Estadísticas detalladas"},
                             "1":
                                {"0":"Trabajar únicamente con criptomonedas puede ser inconveniente"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Prise en charge d’un grand nombre de cryptomonnaies",
                                 "1":"Large éventail de marchés sportifs",
                                 "2":"Pas d’intermédiaires bancaires",
                                 "3":"Statistiques détaillées"},
                             "1":
                                {"0":"Travailler uniquement avec des cryptomonnaies peut être gênant"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Suporte a uma grande quantidade de criptomoedas",
                                 "1":"Ampla gama de mercados esportivos",
                                 "2":"Sem intermediários bancários",
                                 "3":"Estatísticas detalhadas"},
                             "1":
                                {"0":"Trabalhar exclusivamente com criptomoedas pode ser inconveniente"}
                             }',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 36
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 37
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Which currencies does 1xBit accept?"}',
             'value_es' => '{"0":"¿Qué monedas acepta 1xBit?"}',
             'value_fr' => '{"0":"Quelles devises 1xBit accepte-t-il ?"}',
             'value_pt' => '{"0":"Quais moedas o 1xBit aceita?"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 38
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Primarily cryptocurrencies such as Bitcoin and Ethereum, but the list is much broader and depends on the region."}',
             'value_es' => '{"0":"Principalmente criptomonedas como Bitcoin y Ethereum, pero la lista es mucho más amplia y depende de la región."}',
             'value_fr' => '{"0":"Principalement des cryptomonnaies comme Bitcoin et Ethereum, mais la liste est beaucoup plus large et dépend de la région."}',
             'value_pt' => '{"0":"Principalmente criptomoedas como Bitcoin e Ethereum, mas a lista é muito mais ampla e depende da região."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 39
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Can fiat cards be used?"}',
             'value_es' => '{"0":"¿Se pueden usar tarjetas fiduciarias?"}',
             'value_fr' => '{"0":"Peut-on utiliser des cartes fiat ?"}',
             'value_pt' => '{"0":"É possível usar cartões fiduciários?"}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 40
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, the platform’s main focus is on cryptocurrencies."}',
             'value_es' => '{"0":"No, el enfoque principal de la plataforma son las criptomonedas."}',
             'value_fr' => '{"0":"Non, l’accent principal de la plateforme est mis sur les cryptomonnaies."}',
             'value_pt' => '{"0":"Não, o foco principal da plataforma são as criptomoedas."}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 41
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take to withdraw funds?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda el retiro de fondos?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour retirer des fonds ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para retirar fundos?"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 42
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Transactions are processed within an hour, but the exact time depends on the rules of the specific cryptocurrency."}',
             'value_es' => '{"0":"Las transacciones se procesan en una hora, pero el tiempo exacto depende de las reglas de la criptomoneda específica."}',
             'value_fr' => '{"0":"Les transactions sont traitées en une heure, mais le temps exact dépend des règles de la cryptomonnaie spécifique."}',
             'value_pt' => '{"0":"As transações são processadas em uma hora, mas o tempo exato depende das regras da criptomoeda específica."}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 43
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to play from my country?"}',
             'value_es' => '{"0":"¿Es legal jugar desde mi país?"}',
             'value_fr' => '{"0":"Est-il légal de jouer depuis mon pays ?"}',
             'value_pt' => '{"0":"É legal jogar do meu país?"}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 44
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Service availability depends on local legislation, so it is advisable to check the rules for your country before registering."}',
             'value_es' => '{"0":"La disponibilidad del servicio depende de la legislación local, por lo que es recomendable revisar las normas de tu país antes de registrarte."}',
             'value_fr' => '{"0":"La disponibilité du service dépend de la législation locale, il est donc conseillé de vérifier les règles pour votre pays avant de vous inscrire."}',
             'value_pt' => '{"0":"A disponibilidade do serviço depende da legislação local, portanto, é recomendável verificar as regras do seu país antes de se registrar."}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 45
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if there is a problem with a withdrawal?"}',
             'value_es' => '{"0":"¿Qué hacer si hay un problema con el retiro?"}',
             'value_fr' => '{"0":"Que faire en cas de problème avec un retrait ?"}',
             'value_pt' => '{"0":"O que fazer em caso de problema com o saque?"}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 46
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Contact customer support and keep all transaction receipts."}',
             'value_es' => '{"0":"Contacta con el servicio de atención al cliente y conserva todos los recibos de las transacciones."}',
             'value_fr' => '{"0":"Contactez le service client et conservez tous les reçus de transaction."}',
             'value_pt' => '{"0":"Entre em contato com o suporte ao cliente e guarde todos os recibos de transações."}',
             'order' => 46
            ]
        );
    }
}
