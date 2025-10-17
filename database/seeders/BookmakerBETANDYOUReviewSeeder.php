<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU betting company entered the betting market in 2018. On the site, you can place bets on more than 30 sports, including football, tennis, basketball, and esports."}',
             'value_es' => '{"0":"La casa de apuestas BETANDYOU apareció en el mercado de apuestas en 2018. En el sitio, puedes realizar apuestas en más de 30 deportes, incluidos fútbol, tenis, baloncesto y deportes electrónicos."}',
             'value_fr' => '{"0":"La société de paris BETANDYOU est apparue sur le marché des paris en 2018. Sur le site, vous pouvez parier sur plus de 30 sports, y compris le football, le tennis, le basketball et l’esport."}',
             'value_pt' => '{"0":"A empresa de apostas BETANDYOU entrou no mercado de apostas em 2018. No site, você pode fazer apostas em mais de 30 esportes, incluindo futebol, tênis, basquete e eSports."}',
             'order' => 1,
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The site is available in several languages, including English, Spanish, French, and Portuguese, making it convenient for international players. The interface is adapted for mobile devices. The site design is intuitive, allowing you to immediately see popular sports and games."}',
             'value_es' => '{"0":"El sitio está disponible en varios idiomas, entre ellos inglés, español, francés y portugués, lo que lo hace cómodo para jugadores internacionales. La interfaz está adaptada para dispositivos móviles. El diseño del sitio es intuitivo, permitiendo ver de inmediato los deportes y juegos más populares."}',
             'value_fr' => '{"0":"Le site est disponible en plusieurs langues, dont l’anglais, l’espagnol, le français et le portugais, ce qui le rend pratique pour les joueurs internationaux. L’interface est adaptée aux appareils mobiles. Le design du site est intuitif, permettant de voir immédiatement les sports et jeux populaires."}',
             'value_pt' => '{"0":"O site está disponível em vários idiomas, incluindo inglês, espanhol, francês e português, tornando-o conveniente para jogadores internacionais. A interface é adaptada para dispositivos móveis. O design do site é intuitivo, permitindo ver imediatamente os esportes e jogos mais populares."}',
             'order' => 2
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 3
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Security and License"}',
                'value_es' => '{"0":"Seguridad y Licencia"}',
                'value_fr' => '{"0":"Sécurité et Licence"}',
                'value_pt' => '{"0":"Segurança e Licença"}',
             'order' => 4
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU operates under a Curaçao license, which allows the platform to operate legally on the international market. All user personal data is protected with modern SSL encryption, and financial transactions are processed through verified payment systems."}',
             'value_es' => '{"0":"BETANDYOU opera bajo una licencia de Curazao, lo que permite que la plataforma funcione legalmente en el mercado internacional. Todos los datos personales de los usuarios están protegidos con cifrado SSL moderno, y las transacciones financieras se procesan a través de sistemas de pago verificados."}',
             'value_fr' => '{"0":"BETANDYOU fonctionne sous licence de Curaçao, ce qui permet à la plateforme d’opérer légalement sur le marché international. Toutes les données personnelles des utilisateurs sont protégées par un cryptage SSL moderne et les transactions financières sont traitées via des systèmes de paiement vérifiés."}',
             'value_pt' => '{"0":"BETANDYOU opera com uma licença de Curaçao, o que permite que a plataforma atue legalmente no mercado internacional. Todos os dados pessoais dos usuários são protegidos com criptografia SSL moderna, e as transações financeiras são processadas por meio de sistemas de pagamento verificados."}',
             'order' => 5
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform does not store card information in plain text, minimizing the risk of fraud. Additionally, users can further secure their accounts by setting up two-factor authentication, which enhances the protection of deposits and personal data."}',
             'value_es' => '{"0":"La plataforma no almacena información de las tarjetas en texto plano, minimizando el riesgo de fraude. Además, los usuarios pueden proteger aún más su cuenta configurando la autenticación de dos factores, lo que mejora la seguridad de los depósitos y los datos personales."}',
             'value_fr' => '{"0":"La plateforme ne stocke pas les informations des cartes en clair, ce qui minimise les risques de fraude. De plus, les utilisateurs peuvent renforcer la sécurité de leur compte en configurant l’authentification à deux facteurs, ce qui améliore la protection des dépôts et des données personnelles."}',
             'value_pt' => '{"0":"A plataforma não armazena informações de cartões em texto simples, minimizando o risco de fraude. Além disso, os usuários podem proteger ainda mais sua conta configurando a autenticação de dois fatores, o que aumenta a segurança dos depósitos e dos dados pessoais."}',
             'order' => 6
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Market Depth"}',
                'value_es' => '{"0":"Amplitud de Mercados de Apuestas"}',
                'value_fr' => '{"0":"Étendue des Marchés de Paris"}',
                'value_pt' => '{"0":"Largura dos Mercados de Apostas"}',
             'order' => 7
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers players a wide range of markets for each event. For football, classic betting options are available, such as team wins, totals, and handicaps, as well as more detailed predictions like the number of corners and goal scorers. For basketball and tennis, markets include correct scores, handicaps, and set totals."}',
             'value_es' => '{"0":"BETANDYOU ofrece a los jugadores una amplia variedad de mercados para cada evento. Para el fútbol, están disponibles opciones clásicas de apuesta, como victoria del equipo, totales y hándicaps, así como predicciones más detalladas sobre el número de saques de esquina y los goleadores. Para baloncesto y tenis, los mercados incluyen marcador exacto, hándicaps y totales de sets."}',
             'value_fr' => '{"0":"BETANDYOU propose aux joueurs un large éventail de marchés pour chaque événement. Pour le football, les options de pari classiques sont disponibles, telles que la victoire de l’équipe, les totaux et les handicaps, ainsi que des prévisions plus détaillées comme le nombre de corners et les buteurs. Pour le basket-ball et le tennis, les marchés incluent le score exact, les handicaps et les totaux de sets."}',
             'value_pt' => '{"0":"BETANDYOU oferece aos jogadores uma ampla variedade de mercados para cada evento. No futebol, estão disponíveis opções clássicas de apostas, como vitória da equipe, totais e handicaps, bem como previsões mais detalhadas sobre o número de escanteios e autores dos gols. Para basquete e tênis, os mercados incluem placar exato, handicaps e totais de sets."}',
             'order' => 8
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform allows the creation of complex accumulators and combination bets, enabling players to increase their potential winnings."}',
             'value_es' => '{"0":"La plataforma permite crear combinaciones complejas y apuestas acumuladas, lo que permite a los jugadores aumentar sus ganancias potenciales."}',
             'value_fr' => '{"0":"La plateforme permet de créer des paris combinés et des accumulations complexes, ce qui permet aux joueurs d’augmenter leurs gains potentiels."}',
             'value_pt' => '{"0":"A plataforma permite criar acumuladores complexos e apostas combinadas, permitindo que os jogadores aumentem seus ganhos potenciais."}',
             'order' => 9
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Sports Betting"}',
                'value_es' => '{"0":"Apuestas Deportivas"}',
                'value_fr' => '{"0":"Paris Sportifs"}',
                'value_pt' => '{"0":"Apostas Esportivas"}',
             'order' => 10
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting section features over 30,000 events, with football, tennis, basketball, and hockey being particularly popular. In addition to traditional sports, there is a section for esports, allowing bets on Dota 2, CS2, Valorant, and League of Legends matches."}',
             'value_es' => '{"0":"La sección de apuestas deportivas cuenta con más de 30.000 eventos, siendo especialmente populares el fútbol, el tenis, el baloncesto y el hockey. Además de los deportes tradicionales, hay una sección de esports que permite apostar en partidos de Dota 2, CS2, Valorant y League of Legends."}',
             'value_fr' => '{"0":"La section des paris sportifs propose plus de 30 000 événements, le football, le tennis, le basket-ball et le hockey étant particulièrement populaires. En plus des sports traditionnels, il existe une section esports permettant de parier sur des matchs de Dota 2, CS2, Valorant et League of Legends."}',
             'value_pt' => '{"0":"A seção de apostas esportivas apresenta mais de 30.000 eventos, sendo o futebol, tênis, basquete e hóquei especialmente populares. Além dos esportes tradicionais, há uma seção de esports que permite apostas em partidas de Dota 2, CS2, Valorant e League of Legends."}',
             'order' => 11
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides convenient filters by country, league, and event popularity. Active players can use accumulators to combine multiple events into a single bet."}',
             'value_es' => '{"0":"La plataforma ofrece filtros convenientes por país, liga y popularidad del evento. Los jugadores activos pueden utilizar acumuladores para combinar varios eventos en una sola apuesta."}',
             'value_fr' => '{"0":"La plateforme offre des filtres pratiques par pays, ligue et popularité de l’événement. Les joueurs actifs peuvent utiliser des paris combinés pour regrouper plusieurs événements en un seul pari."}',
             'value_pt' => '{"0":"A plataforma oferece filtros convenientes por país, liga e popularidade do evento. Jogadores ativos podem usar acumuladores para combinar vários eventos em uma única aposta."}',
             'order' => 12
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v3',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 13
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Casino"}',
                'value_es' => '{"0":"Casino"}',
                'value_fr' => '{"0":"Casino"}',
                'value_pt' => '{"0":"Cassino"}',
             'order' => 14
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The BETANDYOU casino section features over 4,000 games from leading providers such as Pragmatic Play, NetEnt, Microgaming, and Play’n GO. Users can play classic slots, video slots, roulette, blackjack, and poker, as well as live games with real dealers."}',
             'value_es' => '{"0":"La sección de casino de BETANDYOU cuenta con más de 4.000 juegos de proveedores líderes como Pragmatic Play, NetEnt, Microgaming y Play’n GO. Los usuarios pueden jugar a tragamonedas clásicas, tragamonedas de video, ruleta, blackjack y póker, así como juegos en vivo con crupieres reales."}',
             'value_fr' => '{"0":"La section casino de BETANDYOU propose plus de 4 000 jeux de fournisseurs renommés tels que Pragmatic Play, NetEnt, Microgaming et Play’n GO. Les utilisateurs peuvent jouer à des machines à sous classiques, des machines à sous vidéo, à la roulette, au blackjack et au poker, ainsi qu’à des jeux en direct avec de vrais croupiers."}',
             'value_pt' => '{"0":"A seção de cassino da BETANDYOU oferece mais de 4.000 jogos de provedores líderes como Pragmatic Play, NetEnt, Microgaming e Play’n GO. Os usuários podem jogar slots clássicos, slots de vídeo, roleta, blackjack e pôquer, assim como jogos ao vivo com dealers reais."}',
             'order' => 15
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Games are sorted by category, and there is an option to search by provider or name. The casino runs smoothly even on mobile devices, and cashback and bonuses for regular players allow for additional winnings."}',
             'value_es' => '{"0":"Los juegos están organizados por categorías y hay una opción de búsqueda por proveedor o nombre. El casino funciona de manera estable incluso en dispositivos móviles, y el cashback y los bonos para jugadores habituales permiten obtener ganancias adicionales."}',
             'value_fr' => '{"0":"Les jeux sont triés par catégories, avec la possibilité de rechercher par fournisseur ou par nom. Le casino fonctionne de manière stable même sur les appareils mobiles, et le cashback ainsi que les bonus pour les joueurs réguliers permettent de remporter des gains supplémentaires."}',
             'value_pt' => '{"0":"Os jogos estão organizados por categorias, e há uma opção de busca por provedor ou nome. O cassino funciona de forma estável mesmo em dispositivos móveis, e o cashback e os bônus para jogadores frequentes permitem ganhos adicionais."}',
             'order' => 16
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Odds"}',
                'value_es' => '{"0":"Cuotas"}',
                'value_fr' => '{"0":"Cotes"}',
                'value_pt' => '{"0":"Probabilidades"}',
             'order' => 17
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Odds on BETANDYOU often exceed average market levels. For example, in English Premier League matches, the odds for the favorite to win can reach 1.95, while in matches with roughly equal chances for both teams, the odds are around 2.00."}',
             'value_es' => '{"0":"Las cuotas en BETANDYOU a menudo superan los niveles promedio del mercado. Por ejemplo, en los partidos de la Premier League inglesa, las cuotas para la victoria del favorito pueden alcanzar 1,95, mientras que en encuentros con probabilidades aproximadamente iguales para ambos equipos, las cuotas rondan 2,00."}',
             'value_fr' => '{"0":"Les cotes sur BETANDYOU dépassent souvent les niveaux moyens du marché. Par exemple, lors des matchs de la Premier League anglaise, la cote pour la victoire du favori peut atteindre 1,95, tandis que pour les matchs avec des chances à peu près égales pour les deux équipes, les cotes se situent autour de 2,00."}',
             'value_pt' => '{"0":"As odds na BETANDYOU frequentemente superam os níveis médios do mercado. Por exemplo, em partidas da Premier League inglesa, as odds para a vitória do favorito podem chegar a 1,95, enquanto em partidas com chances aproximadamente iguais para ambas as equipes, as odds ficam em torno de 2,00."}',
             'order' => 18
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform allows displaying odds in decimal, American, and fractional formats. This enables users to choose the most convenient option and quickly compare potential winnings, which is especially useful for accumulator bets."}',
             'value_es' => '{"0":"La plataforma permite mostrar las cuotas en formatos decimal, americano y fraccionario. Esto permite a los usuarios elegir la opción más cómoda y comparar rápidamente las ganancias potenciales, lo que es especialmente útil para apuestas combinadas."}',
             'value_fr' => '{"0":"La plateforme permet d’afficher les cotes en formats décimal, américain et fractionnaire. Cela permet aux utilisateurs de choisir l’option la plus pratique et de comparer rapidement les gains potentiels, ce qui est particulièrement utile pour les paris combinés."}',
             'value_pt' => '{"0":"A plataforma permite exibir as odds nos formatos decimal, americano e fracionário. Isso permite que os usuários escolham a opção mais conveniente e comparem rapidamente os ganhos potenciais, o que é especialmente útil para apostas acumuladas."}',
             'order' => 19
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Live Streaming and In-Play Betting"}',
                'value_es' => '{"0":"Transmisión en Vivo y Apuestas en Tiempo Real"}',
                'value_fr' => '{"0":"Diffusion en Direct et Paris en Temps Réel"}',
                'value_pt' => '{"0":"Transmissão ao Vivo e Apostas em Tempo Real"}',
             'order' => 20
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU offers the ability to place live bets on dozens of sports events simultaneously. Odds are updated instantly, and players can adjust their bets during the match."}',
             'value_es' => '{"0":"BETANDYOU ofrece la posibilidad de realizar apuestas en vivo en docenas de eventos deportivos simultáneamente. Las cuotas se actualizan al instante y los jugadores pueden ajustar sus apuestas durante el partido."}',
             'value_fr' => '{"0":"BETANDYOU permet de placer des paris en direct sur des dizaines d’événements sportifs simultanément. Les cotes sont mises à jour instantanément et les joueurs peuvent ajuster leurs paris pendant le match."}',
             'value_pt' => '{"0":"A BETANDYOU oferece a possibilidade de fazer apostas ao vivo em dezenas de eventos esportivos simultaneamente. As odds são atualizadas instantaneamente, e os jogadores podem ajustar suas apostas durante a partida."}',
             'order' => 21
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For most events, graphical broadcasts are available, showing key moments of the game, and popular matches have video streams. The live betting interface is convenient and allows tracking multiple events at the same time, displaying the current score, match time, and statistical indicators for quick decision-making."}',
             'value_es' => '{"0":"Para la mayoría de los eventos, están disponibles transmisiones gráficas que muestran los momentos clave del juego, y los partidos más populares tienen transmisiones de video. La interfaz de apuestas en vivo es conveniente y permite seguir varios eventos al mismo tiempo, mostrando el marcador actual, el tiempo del partido y los indicadores estadísticos para tomar decisiones rápidas."}',
             'value_fr' => '{"0":"Pour la plupart des événements, des diffusions graphiques sont disponibles, montrant les moments clés du jeu, et les matchs populaires disposent de flux vidéo. L’interface des paris en direct est pratique et permet de suivre plusieurs événements en même temps, affichant le score actuel, le temps du match et les indicateurs statistiques pour une prise de décision rapide."}',
             'value_pt' => '{"0":"Para a maioria dos eventos, estão disponíveis transmissões gráficas que mostram os momentos-chave do jogo, e as partidas populares têm transmissões de vídeo. A interface de apostas ao vivo é prática e permite acompanhar vários eventos ao mesmo tempo, exibindo o placar atual, o tempo da partida e os indicadores estatísticos para decisões rápidas."}',
             'order' => 22
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Betting Statistics"}',
                'value_es' => '{"0":"Estadísticas de Apuestas"}',
                'value_fr' => '{"0":"Statistiques des Paris"}',
                'value_pt' => '{"0":"Estatísticas de Apostas"}',
             'order' => 23
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The platform provides detailed statistics that help analyze upcoming events. In the statistics section, you can view team results from previous matches, player form, head-to-head history, as well as performance indicators for teams and individual players."}',
             'value_es' => '{"0":"La plataforma ofrece estadísticas detalladas que ayudan a analizar los próximos eventos. En la sección de estadísticas, puedes ver los resultados de los equipos en partidos anteriores, la forma de los jugadores, el historial de enfrentamientos y los indicadores de rendimiento de los equipos y jugadores individuales."}',
             'value_fr' => '{"0":"La plateforme fournit des statistiques détaillées qui aident à analyser les événements à venir. Dans la section statistiques, vous pouvez consulter les résultats des équipes lors des matchs précédents, la forme des joueurs, l’historique des confrontations et les indicateurs de performance des équipes et des joueurs individuels."}',
             'value_pt' => '{"0":"A plataforma fornece estatísticas detalhadas que ajudam a analisar os próximos eventos. Na seção de estatísticas, você pode ver os resultados das equipes em partidas anteriores, a forma dos jogadores, o histórico de confrontos e os indicadores de desempenho das equipes e dos jogadores individuais."}',
             'order' => 24
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Payment and Withdrawal Methods"}',
                'value_es' => '{"0":"Métodos de Pago y Retiro"}',
                'value_fr' => '{"0":"Méthodes de Paiement et de Retrait"}',
                'value_pt' => '{"0":"Métodos de Pagamento e Saque"}',
             'order' => 25
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU supports more than 30 methods for deposits and withdrawals. These include Visa and Mastercard bank cards, e-wallets such as Skrill, Neteller, ecoPayz, Jeton, as well as cryptocurrencies like Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"BETANDYOU admite más de 30 métodos para depósitos y retiros. Entre ellos se incluyen tarjetas bancarias Visa y Mastercard, monederos electrónicos como Skrill, Neteller, ecoPayz, Jeton, así como criptomonedas como Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"BETANDYOU prend en charge plus de 30 méthodes pour les dépôts et les retraits. Cela comprend les cartes bancaires Visa et Mastercard, les portefeuilles électroniques tels que Skrill, Neteller, ecoPayz, Jeton, ainsi que les cryptomonnaies comme Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"BETANDYOU oferece suporte a mais de 30 métodos para depósitos e saques. Entre eles estão cartões bancários Visa e Mastercard, carteiras eletrônicas como Skrill, Neteller, ecoPayz, Jeton, assim como criptomoedas como Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 26
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is 1 dollar or the equivalent in the account currency. Withdrawals are usually processed within 24 hours, but bank transfers may take up to three days."}',
             'value_es' => '{"0":"El depósito mínimo es de 1 dólar o el equivalente en la moneda de la cuenta. Los retiros generalmente se procesan en 24 horas, aunque las transferencias bancarias pueden tardar hasta tres días."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 dollar ou l’équivalent dans la devise du compte. Les retraits sont généralement traités sous 24 heures, mais les virements bancaires peuvent prendre jusqu’à trois jours."}',
             'value_pt' => '{"0":"O depósito mínimo é de 1 dólar ou o equivalente na moeda da conta. Os saques geralmente são processados em 24 horas, mas transferências bancárias podem levar até três dias."}',
             'order' => 27
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'list',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 28
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'quick_info',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 29
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Support"}',
                'value_es' => '{"0":"Soporte"}',
                'value_fr' => '{"0":"Assistance"}',
                'value_pt' => '{"0":"Suporte"}',
             'order' => 30
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Customer support operates 24/7. You can contact them via the online chat on the website or by email."}',
             'value_es' => '{"0":"El servicio de atención al cliente funciona las 24 horas del día, los 7 días de la semana. Se puede contactar a través del chat en línea del sitio web o por correo electrónico."}',
             'value_fr' => '{"0":"Le service client est disponible 24h/24 et 7j/7. Vous pouvez le contacter via le chat en ligne sur le site ou par e-mail."}',
             'value_pt' => '{"0":"O atendimento ao cliente funciona 24 horas por dia, 7 dias por semana. É possível entrar em contato através do chat online no site ou por e-mail."}',
             'order' => 31
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'support',
             'value_en' => '{"0":""}',
             'value_es' => '{"0":""}',
             'value_fr' => '{"0":""}',
             'value_pt' => '{"0":""}',
             'order' => 32
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'table_v1',
             'value_en' => '{"0":
                                {"0":"Wide selection of sports events and markets",
                                 "1":"Large variety of casino games",
                                 "2":"Support for cryptocurrencies",
                                 "3":"Loyalty program for regular players",
                                 "4":"Regular bonuses and promotions"},
                             "1":
                                {"0":"Restrictions for players from certain countries",
                                 "1":"No live streaming for all matches"}
                             }',
             'value_es' => '{"0":
                                {"0":"Gran selección de eventos deportivos y mercados",
                                 "1":"Amplia variedad de juegos de casino",
                                 "2":"Soporte para criptomonedas",
                                 "3":"Programa de fidelidad para jugadores habituales",
                                 "4":"Bonos y promociones regulares"},
                             "1":
                                {"0":"Restricciones para jugadores de algunos países",
                                 "1":"No hay transmisiones en vivo para todos los partidos"}
                             }',
             'value_fr' => '{"0":
                                {"0":"Large choix d’événements sportifs et de marchés",
                                 "1":"Grande variété de jeux de casino",
                                 "2":"Prise en charge des cryptomonnaies",
                                 "3":"Programme de fidélité pour les joueurs réguliers",
                                 "4":"Bonus et promotions réguliers"},
                             "1":
                                {"0":"Restrictions pour les joueurs de certains pays",
                                 "1":"Pas de diffusion en direct pour tous les matchs"}
                             }',
             'value_pt' => '{"0":
                                {"0":"Grande variedade de eventos esportivos e mercados",
                                 "1":"Ampla seleção de jogos de cassino",
                                 "2":"Suporte a criptomoedas",
                                 "3":"Programa de fidelidade para jogadores regulares",
                                 "4":"Bônus e promoções regulares"},
                             "1":
                                {"0":"Restrições para jogadores de alguns países",
                                 "1":"Não há transmissões ao vivo para todas as partidas"}
                             }',
             'order' => 33
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 34
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 35
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Is it legal to use BETANDYOU?"}',
             'value_es' => '{"0":"¿Es legal usar BETANDYOU?"}',
             'value_fr' => '{"0":"Est-il légal d’utiliser BETANDYOU ?"}',
             'value_pt' => '{"0":"É legal usar o BETANDYOU?"}',
             'order' => 36
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 37
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform operates under a Curaçao license."}',
             'value_es' => '{"0":"Sí, la plataforma opera con licencia de Curazao."}',
             'value_fr' => '{"0":"Oui, la plateforme fonctionne sous licence de Curaçao."}',
             'value_pt' => '{"0":"Sim, a plataforma opera sob licença de Curaçao."}',
             'order' => 37
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 38
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo?"}',
             'order' => 38
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 39
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit is 1 dollar or the equivalent in your account currency."}',
             'value_es' => '{"0":"El depósito mínimo es de 1 dólar o el equivalente en la moneda de su cuenta."}',
             'value_fr' => '{"0":"Le dépôt minimum est de 1 dollar ou l’équivalent dans la devise de votre compte."}',
             'value_pt' => '{"0":"O depósito mínimo é de 1 dólar ou o equivalente na moeda da sua conta."}',
             'order' => 39
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 40
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"How fast are withdrawals processed?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tardan en procesarse los retiros?"}',
             'value_fr' => '{"0":"À quelle vitesse les retraits sont-ils traités ?"}',
             'value_pt' => '{"0":"Quão rápido os saques são processados?"}',
             'order' => 40
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 41
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Withdrawals are usually processed within 24 hours, but bank transfers may take up to three days."}',
             'value_es' => '{"0":"Los retiros generalmente se procesan en un plazo de 24 horas, pero las transferencias bancarias pueden tardar hasta tres días."}',
             'value_fr' => '{"0":"Les retraits sont généralement traités sous 24 heures, mais les virements bancaires peuvent prendre jusqu’à trois jours."}',
             'value_pt' => '{"0":"Os saques geralmente são processados dentro de 24 horas, mas transferências bancárias podem levar até três dias."}',
             'order' => 41
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 42
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Is there a mobile app?"}',
             'value_es' => '{"0":"¿Hay una aplicación móvil?"}',
             'value_fr' => '{"0":"Y a-t-il une application mobile ?"}',
             'value_pt' => '{"0":"Existe um aplicativo móvel?"}',
             'order' => 42
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 43
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there are mobile apps for Android and iOS."}',
             'value_es' => '{"0":"Sí, hay aplicaciones móviles para Android y iOS."}',
             'value_fr' => '{"0":"Oui, il existe des applications mobiles pour Android et iOS."}',
             'value_pt' => '{"0":"Sim, há aplicativos móveis para Android e iOS."}',
             'order' => 43
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 44
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda?"}',
             'value_fr' => '{"0":"Peut-on utiliser la cryptomonnaie ?"}',
             'value_pt' => '{"0":"É possível usar criptomoeda?"}',
             'order' => 44
            ]
        );
        Review::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 45
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the platform supports Bitcoin, Ethereum, Litecoin, and Tether."}',
             'value_es' => '{"0":"Sí, la plataforma admite Bitcoin, Ethereum, Litecoin y Tether."}',
             'value_fr' => '{"0":"Oui, la plateforme prend en charge Bitcoin, Ethereum, Litecoin et Tether."}',
             'value_pt' => '{"0":"Sim, a plataforma suporta Bitcoin, Ethereum, Litecoin e Tether."}',
             'order' => 45
            ]
        );
    }
}
