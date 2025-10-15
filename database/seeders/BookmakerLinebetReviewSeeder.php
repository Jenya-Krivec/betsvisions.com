<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet is an international platform for sports betting and casino games. The company operates under a Curacao license. Its main feature is the combination of sports betting, esports, and a large online casino section."}',
             'value_es' => '{"0":"Linebet es una plataforma internacional para apuestas deportivas y juegos de casino. La compañía opera bajo una licencia de Curazao. Su principal característica es la combinación de apuestas deportivas, deportes electrónicos y una gran sección de casino en línea."}',
             'value_fr' => '{"0":"Linebet est une plateforme internationale de paris sportifs et de jeux de casino. La société opère sous licence de Curaçao. Sa principale caractéristique est la combinaison des paris sportifs, des sports électroniques et d’une grande section de casino en ligne."}',
             'value_pt' => '{"0":"Linebet é uma plataforma internacional para apostas esportivas e jogos de cassino. A empresa opera sob licença de Curaçao. Sua principal característica é a combinação de apostas esportivas, e-sports e uma grande seção de cassino online."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The website has a modern design with a clear menu structure and logical navigation. For user convenience, multilingual interface support is available, including English, Spanish, French, Portuguese, and dozens of other languages. Linebet also accepts bets in multiple currencies, including cryptocurrencies."}',
             'value_es' => '{"0":"El sitio web tiene un diseño moderno con una estructura de menú clara y navegación lógica. Para mayor comodidad de los usuarios, se ofrece soporte multilingüe en la interfaz, incluyendo inglés, español, francés, portugués y decenas de otros idiomas. Linebet también acepta apuestas en varias monedas, incluidas las criptomonedas."}',
             'value_fr' => '{"0":"Le site dispose d’un design moderne avec une structure de menu claire et une navigation logique. Pour le confort des utilisateurs, l’interface prend en charge plusieurs langues, y compris l’anglais, l’espagnol, le français, le portugais et des dizaines d’autres langues. Linebet accepte également les paris dans plusieurs devises, y compris les cryptomonnaies."}',
             'value_pt' => '{"0":"O site possui um design moderno com uma estrutura de menu clara e navegação lógica. Para conveniência dos usuários, há suporte multilíngue na interface, incluindo inglês, espanhol, francês, português e dezenas de outros idiomas. A Linebet também aceita apostas em várias moedas, incluindo criptomoedas."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet uses modern SSL encryption protocols, which ensure the confidentiality of all information. This means that during betting, registration, or financial transactions, user data remains protected from unauthorized access. Monitoring systems are also implemented to track suspicious activity, preventing fraud and unauthorized account access."}',
             'value_es' => '{"0":"Linebet utiliza protocolos modernos de cifrado SSL, que garantizan la confidencialidad de toda la información. Esto significa que durante las apuestas, el registro o las transacciones financieras, los datos de los usuarios permanecen protegidos contra accesos no autorizados. También se implementan sistemas de monitoreo que rastrean actividades sospechosas, previniendo fraudes y accesos no autorizados a las cuentas."}',
             'value_fr' => '{"0":"Linebet utilise des protocoles de cryptage SSL modernes, garantissant la confidentialité de toutes les informations. Cela signifie que lors des paris, de l’inscription ou des transactions financières, les données des utilisateurs restent protégées contre tout accès non autorisé. Des systèmes de surveillance sont également en place pour suivre les activités suspectes, empêchant la fraude et l’accès non autorisé aux comptes."}',
             'value_pt' => '{"0":"Linebet utiliza protocolos modernos de criptografia SSL, garantindo a confidencialidade de todas as informações. Isso significa que, durante apostas, registro ou transações financeiras, os dados dos usuários permanecem protegidos contra acessos não autorizados. Sistemas de monitoramento também são implementados para rastrear atividades suspeitas, prevenindo fraudes e acessos não autorizados às contas."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The platform operates under a Curacao license, which is a standard practice for international bookmakers. This type of licensing allows Linebet to provide its services in many countries, although the level of regulation is not as strict as in Malta or the United Kingdom."}',
             'value_es' => '{"0":"La plataforma opera bajo una licencia de Curazao, que es una práctica estándar para las casas de apuestas internacionales. Este tipo de licencia permite a Linebet ofrecer sus servicios en muchos países, aunque el nivel de regulación no es tan estricto como en Malta o el Reino Unido."}',
             'value_fr' => '{"0":"La plateforme fonctionne sous licence de Curaçao, ce qui est une pratique standard pour les bookmakers internationaux. Ce type de licence permet à Linebet de fournir ses services dans de nombreux pays, bien que le niveau de réglementation ne soit pas aussi strict qu’à Malte ou au Royaume-Uni."}',
             'value_pt' => '{"0":"A plataforma opera sob licença de Curaçao, que é uma prática padrão para casas de apostas internacionais. Esse tipo de licença permite que a Linebet ofereça seus serviços em muitos países, embora o nível de regulamentação não seja tão rigoroso quanto em Malta ou no Reino Unido."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"There is also the option to set up additional security measures, including two-factor authentication, password changes via email, and temporary account locking in case of suspicious activity. The company also keeps a history of logins and notifies users about changes in security settings, allowing timely responses to potential threats."}',
             'value_es' => '{"0":"También existe la opción de configurar medidas de seguridad adicionales, como la autenticación de dos factores, el cambio de contraseña a través del correo electrónico y el bloqueo temporal de la cuenta en caso de actividad sospechosa. La empresa también mantiene un historial de inicios de sesión y notifica sobre cambios en la configuración de seguridad, lo que permite responder a posibles amenazas de manera oportuna."}',
             'value_fr' => '{"0":"Il est également possible de configurer des mesures de sécurité supplémentaires, telles que l’authentification à deux facteurs, la modification du mot de passe par e-mail et le verrouillage temporaire du compte en cas d’activité suspecte. L’entreprise conserve également l’historique des connexions et informe les utilisateurs des modifications des paramètres de sécurité, permettant de réagir rapidement aux menaces potentielles."}',
             'value_pt' => '{"0":"Também há a opção de configurar medidas de segurança adicionais, incluindo autenticação de dois fatores, alteração de senha por e-mail e bloqueio temporário da conta em caso de atividade suspeita. A empresa também mantém o histórico de logins e notifica sobre alterações nas configurações de segurança, permitindo respostas rápidas a possíveis ameaças."}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet features thousands of sports events daily, and for most of them, there are not just a few basic betting options. Players can choose between bets on the match result, totals, handicaps, number of corners, offsides, cards, goal scorers, or even specific time intervals when a goal will be scored."}',
             'value_es' => '{"0":"Linebet presenta miles de eventos deportivos a diario, y para la mayoría de ellos no solo hay unas pocas opciones básicas de apuesta. Los jugadores pueden elegir entre apuestas al resultado del partido, totales, hándicaps, número de córners, fuera de juego, tarjetas, goleadores o incluso intervalos de tiempo específicos en los que se marcará un gol."}',
             'value_fr' => '{"0":"Linebet propose des milliers d’événements sportifs chaque jour, et pour la plupart d’entre eux, il n’existe pas seulement quelques options de paris de base. Les joueurs peuvent choisir entre des paris sur le résultat du match, les totaux, les handicaps, le nombre de corners, les hors-jeu, les cartons, les buteurs ou même des intervalles de temps spécifiques où un but sera marqué."}',
             'value_pt' => '{"0":"Linebet apresenta milhares de eventos esportivos diariamente, e para a maioria deles não há apenas algumas opções básicas de aposta. Os jogadores podem escolher entre apostas no resultado da partida, totais, handicaps, número de escanteios, impedimentos, cartões, artilheiros ou até intervalos de tempo específicos em que um gol será marcado."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The largest variety of markets is offered for football. For top leagues such as the Premier League, La Liga, Serie A, or the Champions League, the number of available betting options exceeds five hundred. Attention is also given to less popular leagues, including national tournaments in South America, Asia, or Africa, where a large number of markets are also available."}',
             'value_es' => '{"0":"La mayor variedad de mercados se ofrece para el fútbol. Para las ligas principales como la Premier League, La Liga, Serie A o la Liga de Campeones, el número de opciones de apuesta disponibles supera las quinientas. También se presta atención a ligas menos populares, incluidos torneos nacionales en Sudamérica, Asia o África, donde también hay una gran cantidad de mercados."}',
             'value_fr' => '{"0":"La plus grande variété de marchés est proposée pour le football. Pour les championnats majeurs comme la Premier League, La Liga, la Serie A ou la Ligue des champions, le nombre d’options de paris disponibles dépasse cinq cents. Une attention particulière est également portée aux ligues moins populaires, notamment aux tournois nationaux en Amérique du Sud, en Asie ou en Afrique, où un grand nombre de marchés est également disponible."}',
             'value_pt' => '{"0":"A maior variedade de mercados é oferecida para o futebol. Para as principais ligas, como Premier League, La Liga, Serie A ou Liga dos Campeões, o número de opções de apostas disponíveis excede quinhentas. Também se dá atenção a ligas menos populares, incluindo torneios nacionais na América do Sul, Ásia ou África, onde também há uma grande quantidade de mercados."}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Besides football, a wide range of betting options is available for basketball, hockey, tennis, volleyball, baseball, boxing, MMA, and esports. In the rapidly growing esports segment, Linebet offers markets for CS2, Dota 2, League of Legends, Valorant, Overwatch, and other disciplines, allowing bets on rounds, map wins, first blood, or total kills."}',
             'value_es' => '{"0":"Además del fútbol, hay una amplia gama de opciones de apuesta para baloncesto, hockey, tenis, voleibol, béisbol, boxeo, MMA y deportes electrónicos. En el segmento de esports, que está en rápido crecimiento, Linebet ofrece mercados para CS2, Dota 2, League of Legends, Valorant, Overwatch y otras disciplinas, permitiendo apostar en rondas, victorias por mapa, primera sangre o totales de muertes."}',
             'value_fr' => '{"0":"Outre le football, une large gamme d’options de paris est disponible pour le basketball, le hockey, le tennis, le volleyball, le baseball, la boxe, le MMA et les sports électroniques. Dans le segment des esports en pleine expansion, Linebet propose des marchés pour CS2, Dota 2, League of Legends, Valorant, Overwatch et d’autres disciplines, permettant de parier sur les manches, les victoires sur la carte, le premier sang ou les totaux de kills."}',
             'value_pt' => '{"0":"Além do futebol, uma ampla variedade de opções de apostas está disponível para basquete, hóquei, tênis, vôlei, beisebol, boxe, MMA e esports. No segmento de esports, que está em rápido crescimento, a Linebet oferece mercados para CS2, Dota 2, League of Legends, Valorant, Overwatch e outras disciplinas, permitindo apostas em rounds, vitórias no mapa, first blood ou totais de kills."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers bets on over fifty different sports, including football, basketball, tennis, hockey, volleyball, baseball, handball, American football, and cricket. For each sport, a wide selection of championships is available, ranging from global tournaments to local regional leagues."}',
             'value_es' => '{"0":"Linebet ofrece apuestas en más de cincuenta deportes diferentes, incluidos fútbol, baloncesto, tenis, hockey, voleibol, béisbol, balonmano, fútbol americano y críquet. Para cada deporte, hay una amplia selección de campeonatos, que van desde torneos mundiales hasta ligas regionales locales."}',
             'value_fr' => '{"0":"Linebet propose des paris sur plus de cinquante sports différents, notamment le football, le basketball, le tennis, le hockey, le volleyball, le baseball, le handball, le football américain et le cricket. Pour chaque sport, une large sélection de championnats est disponible, allant des tournois mondiaux aux ligues régionales locales."}',
             'value_pt' => '{"0":"Linebet oferece apostas em mais de cinquenta esportes diferentes, incluindo futebol, basquete, tênis, hóquei, vôlei, beisebol, handebol, futebol americano e críquete. Para cada esporte, há uma ampla seleção de campeonatos, desde torneios globais até ligas regionais locais."}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In football matches, players can bet on match results, number of goals, cards, offsides, corners, goal scorers, or the minutes of the first or last goal. Combined markets are also available, allowing several events to be included within a single match."}',
             'value_es' => '{"0":"En los partidos de fútbol, los jugadores pueden apostar al resultado del partido, al número de goles, tarjetas, fuera de juego, córners, goleadores o a los minutos del primer o último gol. También hay mercados combinados que permiten incluir varios eventos dentro de un mismo partido."}',
             'value_fr' => '{"0":"Lors des matchs de football, les joueurs peuvent parier sur le résultat du match, le nombre de buts, les cartons, les hors-jeu, les corners, les buteurs ou les minutes du premier ou dernier but. Des marchés combinés sont également disponibles, permettant d’inclure plusieurs événements dans un seul match."}',
             'value_pt' => '{"0":"Em partidas de futebol, os jogadores podem apostar no resultado do jogo, no número de gols, cartões, impedimentos, escanteios, artilheiros ou nos minutos do primeiro ou último gol. Também estão disponíveis mercados combinados, permitindo incluir vários eventos em uma única partida."}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Basketball and tennis are the second most popular sports among Linebet users. In basketball, bets can be placed not only on the match result but also on the number of points per quarter, individual totals for players or teams, as well as special events, such as who will make the first three-point shot. In tennis, markets are offered on the number of games and sets, tiebreaks, and the outcome of individual games."}',
             'value_es' => '{"0":"El baloncesto y el tenis ocupan la segunda posición en popularidad entre los usuarios de Linebet. En baloncesto, se pueden hacer apuestas no solo al resultado del partido, sino también al número de puntos por cuarto, totales individuales de jugadores o equipos, así como a eventos especiales, como quién realizará el primer triple. En tenis, se ofrecen mercados sobre el número de juegos y sets, desempates y el resultado de juegos individuales."}',
             'value_fr' => '{"0":"Le basketball et le tennis occupent la deuxième position en popularité parmi les utilisateurs de Linebet. Pour le basketball, il est possible de parier non seulement sur le résultat du match, mais aussi sur le nombre de points par quart-temps, les totaux individuels des joueurs ou des équipes, ainsi que sur des événements spéciaux, par exemple qui réalisera le premier tir à trois points. Pour le tennis, des marchés sont proposés sur le nombre de jeux et de sets, les tie-breaks et le résultat de jeux individuels."}',
             'value_pt' => '{"0":"Basquete e tênis ocupam a segunda posição em popularidade entre os usuários da Linebet. No basquete, é possível apostar não apenas no resultado da partida, mas também no número de pontos por quarto, totais individuais de jogadores ou equipes, bem como em eventos especiais, como quem fará a primeira cesta de três pontos. No tênis, são oferecidos mercados sobre o número de games e sets, tie-breaks e o resultado de games individuais."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet Casino is designed as a full-featured section for gambling enthusiasts, matching the functionality of specialized online casinos. It hosts thousands of slots from leading developers, including Pragmatic Play, NetEnt, Microgaming, Playson, and other studios. Every user can find a game to their taste, from classic fruit machines to modern slots with 3D animation."}',
             'value_es' => '{"0":"El Casino de Linebet está diseñado como una sección completa para los aficionados al juego, con funcionalidades equivalentes a las de los casinos en línea especializados. Ofrece miles de tragamonedas de los principales desarrolladores, incluidos Pragmatic Play, NetEnt, Microgaming, Playson y otros estudios. Cada usuario puede encontrar un juego a su gusto, desde las clásicas máquinas de frutas hasta las modernas tragamonedas con animación 3D."}',
             'value_fr' => '{"0":"Le casino Linebet est conçu comme une section complète pour les amateurs de jeux de hasard, offrant une fonctionnalité comparable à celle des casinos en ligne spécialisés. Il propose des milliers de machines à sous des principaux développeurs, tels que Pragmatic Play, NetEnt, Microgaming, Playson et d’autres studios. Chaque utilisateur peut trouver un jeu à son goût, des machines à fruits classiques aux machines modernes avec animation 3D."}',
             'value_pt' => '{"0":"O cassino Linebet foi criado como uma seção completa para os amantes de jogos de azar, oferecendo funcionalidades equivalentes às de cassinos online especializados. Ele reúne milhares de slots dos principais desenvolvedores, incluindo Pragmatic Play, NetEnt, Microgaming, Playson e outros estúdios. Cada usuário pode encontrar um jogo ao seu gosto, desde as clássicas máquinas de frutas até slots modernos com animação 3D."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Special attention is given to the Live Casino section, where players can experience the atmosphere of a real casino. Professional dealers operate live, and the streams are broadcast in high quality without delays. The section features roulette, blackjack, baccarat, poker, and various game shows conducted by live hosts."}',
             'value_es' => '{"0":"Se presta especial atención a la sección Live Casino, donde los jugadores pueden experimentar la atmósfera de un casino real. Los crupieres profesionales trabajan en directo, y las transmisiones se realizan en alta calidad sin retrasos. Aquí se encuentran ruleta, blackjack, baccarat, póker y varios juegos tipo show conducidos por anfitriones en vivo."}',
             'value_fr' => '{"0":"Une attention particulière est accordée à la section Live Casino, où les joueurs peuvent vivre l’ambiance d’un casino réel. Des croupiers professionnels travaillent en direct et les diffusions sont en haute qualité sans délai. On y trouve la roulette, le blackjack, le baccarat, le poker et divers jeux de type show animés par des hôtes en direct."}',
             'value_pt' => '{"0":"Uma atenção especial é dada à seção Live Casino, onde os jogadores podem experimentar a atmosfera de um cassino real. Dealers profissionais trabalham ao vivo, e as transmissões são em alta qualidade sem atrasos. Aqui estão disponíveis roleta, blackjack, bacará, pôquer e vários jogos de show conduzidos por apresentadores ao vivo."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet Casino regularly updates its game collection with new releases. The platform supports demo mode for many games, allowing users to try most slots without risk. Users can also participate in tournaments and competitions with prize pools."}',
             'value_es' => '{"0":"El Casino de Linebet actualiza regularmente su colección de juegos con nuevos lanzamientos. La plataforma ofrece modo demo para muchos juegos, lo que permite probar la mayoría de las tragamonedas sin riesgo. Los usuarios también pueden participar en torneos y competiciones con premios en efectivo."}',
             'value_fr' => '{"0":"Le casino Linebet met régulièrement à jour sa collection de jeux avec de nouvelles sorties. La plateforme propose un mode démo pour de nombreux jeux, permettant d’essayer la plupart des machines à sous sans risque. Les utilisateurs peuvent également participer à des tournois et compétitions avec des cagnottes à gagner."}',
             'value_pt' => '{"0":"O cassino Linebet atualiza regularmente sua coleção de jogos com novos lançamentos. A plataforma oferece modo demo para muitos jogos, permitindo testar a maioria dos slots sem risco. Os usuários também podem participar de torneios e competições com prêmios em dinheiro."}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet uses a modern odds system, offering competitive quotations for all popular sports. For top events such as Champions League, Premier League, or NBA matches, the odds are often higher than at many other bookmakers, especially in pre-match markets. In football matches of top leagues, odds often reach 1.96, while in less popular championships, this figure rarely falls below 1.90."}',
             'value_es' => '{"0":"Linebet utiliza un sistema moderno de cuotas, ofreciendo cotizaciones competitivas para todos los deportes populares. Para eventos importantes, como los partidos de la Liga de Campeones, la Premier League o la NBA, las cuotas suelen ser más altas que en muchos otros operadores, especialmente en los mercados previos al partido. En los partidos de fútbol de las ligas principales, las cuotas suelen alcanzar 1,96, mientras que en campeonatos menos populares, este valor rara vez baja de 1,90."}',
             'value_fr' => '{"0":"Linebet utilise un système moderne de cotes, offrant des quotations compétitives pour tous les sports populaires. Pour les événements majeurs tels que les matchs de la Ligue des champions, de la Premier League ou de la NBA, les cotes sont souvent plus élevées que chez de nombreux autres bookmakers, notamment sur les marchés avant-match. Dans les matchs de football des principales ligues, les cotes atteignent souvent 1,96, tandis que dans les championnats moins populaires, ce chiffre descend rarement en dessous de 1,90."}',
             'value_pt' => '{"0":"Linebet utiliza um sistema moderno de odds, oferecendo cotações competitivas para todos os esportes populares. Para eventos principais, como partidas da Liga dos Campeões, Premier League ou NBA, as odds são frequentemente mais altas do que em muitos outros bookmakers, especialmente nos mercados pré-jogo. Nas partidas de futebol das principais ligas, as odds frequentemente atingem 1,96, enquanto em campeonatos menos populares, esse valor raramente cai abaixo de 1,90."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In tennis, Linebet also offers attractive conditions. For ATP or WTA matches, odds often appear as 1.85 for the favorite versus 1.95 for the underdog, while in basketball, odds for NBA events can reach 1.92."}',
             'value_es' => '{"0":"En el tenis, Linebet también ofrece condiciones atractivas. Para los partidos de ATP o WTA, las cuotas suelen ser de 1,85 para el favorito frente a 1,95 para el rival, mientras que en baloncesto, las cuotas en eventos de la NBA pueden alcanzar 1,92."}',
             'value_fr' => '{"0":"Au tennis, Linebet propose également des conditions intéressantes. Pour les matchs ATP ou WTA, les cotes apparaissent souvent comme 1,85 pour le favori contre 1,95 pour l’adversaire, tandis qu’au basketball, les cotes pour les événements NBA peuvent atteindre 1,92."}',
             'value_pt' => '{"0":"No tênis, a Linebet também oferece condições atrativas. Para partidas ATP ou WTA, as odds frequentemente aparecem como 1,85 para o favorito contra 1,95 para o adversário, enquanto no basquete, as odds para eventos da NBA podem chegar a 1,92."}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet has a full-featured live section with a huge selection of events, where you can bet on football matches, tennis, table tennis, cricket, and esports tournaments. The odds are updated almost instantly, without delays."}',
             'value_es' => '{"0":"Linebet cuenta con una sección de apuestas en vivo completa con una gran variedad de eventos, donde se puede apostar en partidos de fútbol, tenis, tenis de mesa, críquet y torneos de deportes electrónicos. Las cuotas se actualizan casi al instante, sin demoras."}',
             'value_fr' => '{"0":"Linebet dispose d’une section live complète avec une énorme sélection d’événements, où il est possible de parier sur des matchs de football, tennis, tennis de table, cricket et tournois d’esports. Les cotes sont mises à jour presque instantanément, sans délais."}',
             'value_pt' => '{"0":"A Linebet possui uma seção de apostas ao vivo completa com uma enorme variedade de eventos, onde é possível apostar em partidas de futebol, tênis, tênis de mesa, críquete e torneios de esports. As odds são atualizadas quase instantaneamente, sem atrasos."}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers high-quality match streaming, allowing users to watch the game and place bets simultaneously. This is convenient for players who use strategies related to analyzing the pace of the match or controlling possession."}',
             'value_es' => '{"0":"Linebet ofrece transmisión de los partidos en alta calidad, lo que permite ver el juego y realizar apuestas al mismo tiempo. Esto es conveniente para los jugadores que utilizan estrategias basadas en el análisis del ritmo del partido o el control de la posesión."}',
             'value_fr' => '{"0":"Linebet propose des diffusions de matchs en haute qualité, permettant de regarder le jeu tout en plaçant des paris simultanément. Cela est pratique pour les joueurs qui utilisent des stratégies basées sur l’analyse du rythme du match ou le contrôle de la possession."}',
             'value_pt' => '{"0":"A Linebet oferece transmissões de partidas em alta qualidade, permitindo assistir ao jogo e fazer apostas simultaneamente. Isso é conveniente para jogadores que utilizam estratégias baseadas na análise do ritmo da partida ou no controle da posse de bola."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"During the broadcast, graphical representations of events on the field, current statistics, and instant odds changes are also displayed. For convenience, there is a «quick bet» feature that allows placing a wager in just one click."}',
             'value_es' => '{"0":"Durante la transmisión también se muestran esquemas gráficos de los eventos en el campo, estadísticas actuales y cambios de cuotas en tiempo real. Para mayor comodidad, existe la función de «apuesta rápida», que permite realizar la apuesta con un solo clic."}',
             'value_fr' => '{"0":"Pendant la diffusion, des représentations graphiques des événements sur le terrain, les statistiques en cours et les changements instantanés des cotes sont également affichés. Pour plus de commodité, il existe une fonction de «pari rapide» qui permet de placer un pari en un seul clic."}',
             'value_pt' => '{"0":"Durante a transmissão, também são exibidos esquemas gráficos dos eventos em campo, estatísticas atuais e alterações instantâneas das odds. Para maior comodidade, há a função de «aposta rápida», que permite fazer a aposta em apenas um clique."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers a large set of data that helps make informed decisions before placing a bet or during the game. Each match provides detailed statistics of teams and players. The data is presented in a clear format, including graphs, charts, and tables."}',
             'value_es' => '{"0":"Linebet ofrece un amplio conjunto de datos que ayuda a tomar decisiones fundamentadas antes de realizar una apuesta o durante el juego. En cada partido se pueden encontrar estadísticas detalladas de equipos y jugadores. Los datos se presentan en un formato claro mediante gráficos, diagramas y tablas."}',
             'value_fr' => '{"0":"Linebet propose un vaste ensemble de données qui aide à prendre des décisions éclairées avant de placer un pari ou pendant le jeu. Chaque match fournit des statistiques détaillées sur les équipes et les joueurs. Les données sont présentées de manière claire sous forme de graphiques, diagrammes et tableaux."}',
             'value_pt' => '{"0":"A Linebet oferece um grande conjunto de dados que ajuda a tomar decisões fundamentadas antes de fazer uma aposta ou durante o jogo. Cada partida fornece estatísticas detalhadas de equipes e jogadores. Os dados são apresentados em um formato claro, incluindo gráficos, diagramas e tabelas."}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet also integrates the statistics with internal analytical tools, allowing users to compare multiple events simultaneously. This approach enables betting based on facts rather than emotions, which is why this section has become an important part of the platform."}',
             'value_es' => '{"0":"Linebet también integra las estadísticas con herramientas analíticas internas, lo que permite comparar varios eventos simultáneamente. Este enfoque permite realizar apuestas basadas en hechos y no en emociones, por lo que esta sección se ha convertido en una parte importante de la plataforma."}',
             'value_fr' => '{"0":"Linebet intègre également les statistiques avec des outils analytiques internes, permettant de comparer plusieurs événements simultanément. Cette approche permet de parier sur la base de faits plutôt que d’émotions, ce qui fait de cette section une partie importante de la plateforme."}',
             'value_pt' => '{"0":"A Linebet também integra as estatísticas com ferramentas analíticas internas, permitindo comparar múltiplos eventos simultaneamente. Essa abordagem possibilita apostar com base em fatos e não em emoções, razão pela qual esta seção se tornou uma parte importante da plataforma."}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet supports many popular payment methods for depositing and withdrawing funds. You can top up your balance using Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, as well as cryptocurrencies including Bitcoin, Ethereum, and Tether."}',
             'value_es' => '{"0":"Linebet admite muchos métodos de pago populares para depositar y retirar fondos. Puedes recargar tu saldo usando tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, ecoPayz, así como criptomonedas, incluyendo Bitcoin, Ethereum y Tether."}',
             'value_fr' => '{"0":"Linebet prend en charge de nombreux moyens de paiement populaires pour déposer et retirer des fonds. Vous pouvez recharger votre solde avec des cartes bancaires Visa et Mastercard, des portefeuilles électroniques tels que Skrill, Neteller, ecoPayz, ainsi que des cryptomonnaies, notamment Bitcoin, Ethereum et Tether."}',
             'value_pt' => '{"0":"A Linebet oferece suporte a diversos métodos de pagamento populares para depósitos e saques. É possível adicionar saldo usando cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, bem como criptomoedas, incluindo Bitcoin, Ethereum e Tether."}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The funds are credited almost instantly for most methods. Bank cards and some local payment systems may take from a few minutes up to one business day. Withdrawals can be made using the same payment methods."}',
             'value_es' => '{"0":"Los fondos se acreditan casi de forma instantánea en la mayoría de los métodos. Las tarjetas bancarias y algunos sistemas de pago locales pueden tardar desde unos minutos hasta un día hábil. Los retiros se pueden realizar utilizando los mismos métodos de pago."}',
             'value_fr' => '{"0":"Les fonds sont crédités presque instantanément pour la plupart des méthodes. Les cartes bancaires et certains systèmes de paiement locaux peuvent nécessiter de quelques minutes à un jour ouvrable. Les retraits peuvent être effectués avec les mêmes méthodes de paiement."}',
             'value_pt' => '{"0":"Os fundos são creditados quase instantaneamente na maioria dos métodos. Cartões bancários e alguns sistemas de pagamento locais podem levar de alguns minutos até um dia útil. Os saques podem ser feitos usando os mesmos métodos de pagamento."}',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Minimum and maximum limits for deposits and withdrawals depend on the chosen method and account currency. This information can be checked directly in the personal account before confirming the transaction."}',
             'value_es' => '{"0":"Los límites mínimos y máximos para depósitos y retiros dependen del método elegido y de la moneda de la cuenta. Esta información se puede consultar directamente en la cuenta personal antes de confirmar la transacción."}',
             'value_fr' => '{"0":"Les limites minimales et maximales pour les dépôts et les retraits dépendent de la méthode choisie et de la devise du compte. Ces informations peuvent être consultées directement dans le compte personnel avant de confirmer la transaction."}',
             'value_pt' => '{"0":"Os limites mínimos e máximos para depósitos e saques dependem do método escolhido e da moeda da conta. Essas informações podem ser consultadas diretamente na conta pessoal antes de confirmar a transação"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 35
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"You can contact customer support via the website chat, email, or by calling the hotline."}',
             'value_es' => '{"0":"Se puede contactar con el servicio de atención al cliente a través del chat del sitio web, por correo electrónico o llamando a la línea de atención."}',
             'value_fr' => '{"0":"Vous pouvez contacter le service client via le chat du site, par e-mail ou en appelant la hotline."}',
             'value_pt' => '{"0":"É possível contatar o suporte ao cliente pelo chat do site, e-mail ou ligando para a linha direta."}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 40
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of payment methods",
                                 "1":"Hundreds of markets for popular matches",
                                 "2":"Availability of live betting",
                                 "3":"Availability of live streams"},
                             "1":
                                {"0":"Identity verification may take time",
                                 "1":"Access restrictions apply in some regions"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran variedad de métodos de pago",
                                 "1":"Cientos de mercados en partidos populares",
                                 "2":"Disponibilidad de apuestas en vivo",
                                 "3":"Disponibilidad de transmisiones en directo"},
                             "1":
                                {"0":"La verificación de identidad puede tardar",
                                 "1":"Existen restricciones de acceso en algunas regiones"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix de méthodes de paiement",
                                 "1":"Des centaines de marchés pour les matchs populaires",
                                 "2":"Disponibilité des paris en direct",
                                 "3":"Disponibilité des diffusions en direct"},
                             "1":
                                {"0":"La vérification de l\'identité peut prendre du temps",
                                 "1":"Des restrictions d\'accès existent dans certaines régions"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de métodos de pagamento",
                                 "1":"Centenas de mercados em partidas populares",
                                 "2":"Disponibilidade de apostas ao vivo",
                                 "3":"Disponibilidade de transmissões ao vivo"},
                             "1":
                                {"0":"A verificação de identidade pode demorar",
                                 "1":"Existem restrições de acesso em algumas regiões"}
                             }',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 41
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 42
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to use Linebet in my country?"}',
             'value_es' => '{"0":"¿Es legal usar Linebet en mi país?"}',
             'value_fr' => '{"0":"Est-il légal d’utiliser Linebet dans mon pays ?"}',
             'value_pt' => '{"0":"É legal usar a Linebet no meu país?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 43
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet operates under a Curaçao license, but this does not automatically make the service available or legal in all countries. Check your local regulations and the platform’s terms for your country."}',
             'value_es' => '{"0":"Linebet opera bajo una licencia de Curazao, pero esto no hace que el servicio sea automáticamente disponible o legal en todos los países. Verifica las regulaciones locales y los términos de la plataforma para tu país."}',
             'value_fr' => '{"0":"Linebet fonctionne sous licence de Curaçao, mais cela ne rend pas automatiquement le service disponible ou légal dans tous les pays. Vérifiez la réglementation locale et les conditions de la plateforme pour votre pays."}',
             'value_pt' => '{"0":"A Linebet opera sob uma licença de Curaçao, mas isso não torna automaticamente o serviço disponível ou legal em todos os países. Verifique as regulamentações locais e os termos da plataforma para o seu país."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 44
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tardan en procesarse los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 45
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawal times vary depending on the chosen payment method. Cryptocurrencies and some e-wallets are processed almost instantly, while bank transfers can take several business days."}',
             'value_es' => '{"0":"El tiempo de retiro varía según el método de pago elegido. Las criptomonedas y algunos monederos electrónicos se procesan casi al instante, mientras que las transferencias bancarias pueden tardar varios días hábiles."}',
             'value_fr' => '{"0":"Le temps de traitement des retraits varie en fonction du mode de paiement choisi. Les cryptomonnaies et certains portefeuilles électroniques sont traités presque instantanément, tandis que les virements bancaires peuvent prendre plusieurs jours ouvrables."}',
             'value_pt' => '{"0":"O tempo de saque varia de acordo com o método de pagamento escolhido. Criptomoedas e algumas carteiras eletrônicas são processadas quase instantaneamente, enquanto transferências bancárias podem levar vários dias úteis."}',
             'order' => 45
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 46
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Are there mobile apps?"}',
             'value_es' => '{"0":"¿Hay aplicaciones móviles?"}',
             'value_fr' => '{"0":"Y a-t-il des applications mobiles ?"}',
             'value_pt' => '{"0":"Existem aplicativos móveis?"}',
             'order' => 46
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 47
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, full-featured mobile apps are available for Android and iOS smartphones, which can be downloaded from the official website."}',
             'value_es' => '{"0":"Sí, hay aplicaciones móviles completas para teléfonos Android e iOS, que se pueden descargar desde el sitio web oficial."}',
             'value_fr' => '{"0":"Oui, des applications mobiles complètes sont disponibles pour les smartphones Android et iOS, téléchargeables depuis le site officiel."}',
             'value_pt' => '{"0":"Sim, há aplicativos móveis completos para smartphones Android e iOS, que podem ser baixados no site oficial."}',
             'order' => 47
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 48
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"How to protect your account?"}',
             'value_es' => '{"0":"¿Cómo proteger tu cuenta?"}',
             'value_fr' => '{"0":"Comment protéger votre compte ?"}',
             'value_pt' => '{"0":"Como proteger sua conta?"}',
             'order' => 48
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 49
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Use a strong password, enable two-factor authentication when available, and regularly check your account transactions. Do not share your login details with third parties, and if you suspect unauthorized access, contact customer support immediately."}',
             'value_es' => '{"0":"Utiliza una contraseña segura, activa la autenticación de dos factores cuando esté disponible y revisa regularmente las transacciones de tu cuenta. No compartas tus datos de acceso con terceros y, si sospechas un acceso no autorizado, contacta de inmediato con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Utilisez un mot de passe sécurisé, activez l’authentification à deux facteurs lorsque cela est disponible et vérifiez régulièrement les opérations sur votre compte. Ne partagez pas vos informations de connexion avec des tiers et, en cas de suspicion d’accès non autorisé, contactez immédiatement le service client."}',
             'value_pt' => '{"0":"Use uma senha forte, ative a autenticação de dois fatores quando disponível e verifique regularmente as transações da sua conta. Não compartilhe seus dados de login com terceiros e, se suspeitar de acesso não autorizado, entre em contato imediatamente com o suporte ao cliente."}',
             'order' => 49
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 50
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can I have multiple accounts?"}',
             'value_es' => '{"0":"¿Se pueden tener varias cuentas?"}',
             'value_fr' => '{"0":"Peut-on avoir plusieurs comptes ?"}',
             'value_pt' => '{"0":"É possível ter várias contas?"}',
             'order' => 50
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 51
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"No, creating multiple accounts is prohibited. If duplicate accounts are detected, all of them may be blocked without the right to restoration."}',
             'value_es' => '{"0":"No, la creación de varias cuentas está prohibida. En caso de detectarse cuentas duplicadas, todas ellas pueden ser bloqueadas sin derecho a restauración."}',
             'value_fr' => '{"0":"Non, la création de plusieurs comptes est interdite. En cas de détection de comptes dupliqués, tous peuvent être bloqués sans possibilité de rétablissement."}',
             'value_pt' => '{"0":"Não, a criação de várias contas é proibida. Caso sejam detectadas contas duplicadas, todas poderão ser bloqueadas sem direito à restauração."}',
             'order' => 51
            ]
        );
    }
}
