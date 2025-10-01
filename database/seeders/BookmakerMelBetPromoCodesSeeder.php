<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMelBetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 1
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet offers not only welcome promotions but also ongoing campaigns for active users, which allows players to increase their potential winnings and make the game more exciting. Bonuses can be used for sports betting, casino games, live games, and more."}',
             'value_es' => '{"0":"MelBet no solo ofrece promociones de bienvenida, sino también campañas permanentes para los usuarios activos, lo que permite aumentar las ganancias potenciales y hacer el juego más emocionante. Los bonos se pueden utilizar en apuestas deportivas, juegos de casino, juegos en vivo y más."}',
             'value_fr' => '{"0":"MelBet ne propose pas seulement des offres de bienvenue, mais aussi des promotions régulières pour les utilisateurs actifs, ce qui permet d’augmenter les gains potentiels et de rendre le jeu plus attractif. Les bonus peuvent être utilisés pour les paris sportifs, les jeux de casino, les jeux en direct et bien plus encore."}',
             'value_pt' => '{"0":"A MelBet não oferece apenas promoções de boas-vindas, mas também campanhas contínuas para utilizadores ativos, permitindo aumentar os ganhos potenciais e tornar o jogo mais interessante. Os bónus podem ser usados em apostas desportivas, jogos de casino, jogos ao vivo e muito mais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 2
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain how you can boost your first deposit by using our promo code :promocode during registration. We will also look at the most popular promotional offers that can bring you additional rewards while playing."}',
             'value_es' => '{"0":"En esta reseña explicaremos cómo puedes aumentar tu primer depósito utilizando nuestro código promocional :promocode durante el registro. También analizaremos las ofertas promocionales más populares que pueden darte ingresos adicionales mientras juegas."}',
             'value_fr' => '{"0":"Dans cet article, nous expliquerons comment vous pouvez augmenter votre premier dépôt en utilisant notre code promo :promocode lors de l’inscription. Nous examinerons également les offres promotionnelles les plus populaires qui peuvent vous apporter des gains supplémentaires pendant vos sessions de jeu."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos como pode aumentar o seu primeiro depósito utilizando o nosso código promocional :promocode no momento do registo. Também veremos as ofertas promocionais mais populares que podem trazer-lhe ganhos adicionais durante o jogo."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 3
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 4
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To activate the bonus with the promo code :promocode, you first need to register on the MelBet website. You can register via phone, email, or in one click. At this stage, enter the promo code :promocode in the special field, which allows you to receive additional funds on your first deposit. Fill in all fields with accurate information. It is important to provide truthful data, as later you will be asked to complete the verification process."}',
             'value_es' => '{"0":"Para activar el bono con el código promocional :promocode, primero debes registrarte en el sitio web de MelBet. Puedes registrarte mediante teléfono, correo electrónico o con un solo clic. En esta etapa, introduce el código promocional :promocode en el campo especial, lo que te permitirá recibir fondos adicionales en tu primer depósito. Completa todos los campos con datos correctos. Es importante proporcionar información veraz, ya que más adelante se te pedirá pasar por el proceso de verificación."}',
             'value_fr' => '{"0":"Pour activer le bonus avec le code promotionnel :promocode, vous devez d’abord vous inscrire sur le site MelBet. Vous pouvez vous inscrire par téléphone, par e-mail ou en un clic. À cette étape, saisissez le code promotionnel :promocode dans le champ prévu à cet effet, ce qui vous permettra de recevoir des fonds supplémentaires sur votre premier dépôt. Remplissez tous les champs avec des informations exactes. Il est important de fournir des données véridiques, car par la suite, une procédure de vérification vous sera demandée."}',
             'value_pt' => '{"0":"Para ativar o bônus com o código promocional :promocode, primeiro é necessário registrar-se no site da MelBet. Você pode se registrar por telefone, e-mail ou com apenas um clique. Nesta etapa, insira o código promocional :promocode no campo especial, o que permitirá receber fundos adicionais no seu primeiro depósito. Preencha todos os campos com informações corretas. É importante fornecer dados verdadeiros, pois posteriormente será solicitado que você passe pelo processo de verificação."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 5
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Also, do not forget to specify where you will use the bonus funds. If you choose the bonus for sports betting, you can get an additional +100% after depositing from $1 to $110. If you choose the casino bonus, you can get an additional +100% and 55 FS after depositing from $5 to $560."}',
             'value_es' => '{"0":"Además, no olvides especificar dónde utilizarás los fondos del bono. Si eliges el bono para apuestas deportivas, podrás obtener un +100% adicional después de depositar desde 1 $ hasta 110 $. Si eliges el bono para el casino, podrás obtener un +100% adicional y 55 giros gratis después de depositar desde 5 $ hasta 560 $."}',
             'value_fr' => '{"0":"N’oubliez pas non plus d’indiquer où vous utiliserez les fonds du bonus. Si vous choisissez le bonus pour les paris sportifs, vous pouvez obtenir un +100 % supplémentaire après un dépôt allant de 1 $ à 110 $. Si vous choisissez le bonus pour le casino, vous pouvez obtenir un +100 % supplémentaire ainsi que 55 tours gratuits après un dépôt allant de 5 $ à 560 $."}',
             'value_pt' => '{"0":"Além disso, não se esqueça de indicar onde pretende usar os fundos do bônus. Se escolher o bônus para apostas esportivas, poderá receber +100% adicionais após um depósito entre 1 $ e 110 $. Se optar pelo bônus de cassino, poderá receber +100% adicionais e 55 rodadas grátis após um depósito entre 5 $ e 560 $."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 6
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 7
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You should also keep in mind that in order to withdraw bonus funds, you first need to meet the wagering requirements."}',
             'value_es' => '{"0":"También debes tener en cuenta que, para poder retirar los fondos del bono, primero es necesario cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Il est également important de noter que, pour pouvoir retirer les fonds du bonus, vous devez d’abord respecter les conditions de mise."}',
             'value_pt' => '{"0":"É importante observar que, para poder retirar os fundos do bônus, é necessário cumprir primeiro os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 8
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, the bonus amount must be wagered 5 times in accumulator bets. Each accumulator must contain 3 or more selections. At least 3 selections in the accumulator must have odds of 1.40 or higher."}',
             'value_es' => '{"0":"Para las apuestas deportivas, el monto del bono debe apostarse 5 veces en apuestas combinadas. Cada combinada debe contener 3 o más selecciones. Al menos 3 de las selecciones deben tener una cuota de 1,40 o superior."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le montant du bonus doit être misé 5 fois sur des paris combinés. Chaque pari combiné doit contenir 3 sélections ou plus. Au moins 3 sélections du combiné doivent avoir une cote de 1,40 ou supérieure."}',
             'value_pt' => '{"0":"Para as apostas esportivas, o valor do bônus deve ser apostado 5 vezes em apostas acumuladas. Cada acumulada deve conter 3 ou mais seleções. Pelo menos 3 seleções devem ter odds de 1,40 ou superiores."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 9
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The casino bonus must be wagered x40 within 7 days after activation. The maximum bet allowed when wagering the bonus is $5. Free spins will only be available after the wagering requirements are met."}',
             'value_es' => '{"0":"El bono de casino debe apostarse x40 en un plazo de 7 días tras la activación. La apuesta máxima permitida durante el cumplimiento del rollover es de 5 $. Los giros gratis estarán disponibles solo después de completar los requisitos de apuesta."}',
             'value_fr' => '{"0":"Le bonus de casino doit être misé x40 dans les 7 jours suivant son activation. La mise maximale autorisée pour remplir les conditions de mise est de 5 $. Les free spins ne seront disponibles qu’après avoir rempli les conditions de mise."}',
             'value_pt' => '{"0":"O bônus de cassino deve ser apostado x40 dentro de 7 dias após a ativação. A aposta máxima permitida durante o rollover é de 5 $. Os giros grátis só estarão disponíveis após o cumprimento dos requisitos de aposta."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 10
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 11
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet actively supports regular players by offering numerous bonuses and promotions. Active users can participate in weekly offers for sports betting and casino games. Among the most popular promotions are cashback on lost bets, free spins for slots, and boosted odds on top events."}',
             'value_es' => '{"0":"MelBet apoya activamente a los jugadores habituales ofreciendo numerosos bonos y promociones. Los usuarios activos pueden participar en ofertas semanales tanto para apuestas deportivas como para juegos de casino. Entre las promociones más populares se encuentran el reembolso en apuestas perdidas, giros gratis en tragamonedas y cuotas mejoradas en los eventos más destacados."}',
             'value_fr' => '{"0":"MelBet soutient activement ses joueurs réguliers en proposant de nombreux bonus et promotions. Les utilisateurs actifs peuvent participer à des offres hebdomadaires pour les paris sportifs et les jeux de casino. Parmi les promotions les plus populaires figurent le cashback sur les paris perdus, les tours gratuits sur les machines à sous et les cotes boostées sur les grands événements."}',
             'value_pt' => '{"0":"A MelBet apoia ativamente os jogadores regulares, oferecendo inúmeros bônus e promoções. Os usuários ativos podem participar de ofertas semanais para apostas esportivas e jogos de cassino. Entre as promoções mais populares estão o cashback em apostas perdidas, rodadas grátis em slots e odds aumentadas em eventos de destaque."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 12
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The platform also analyzes user activity and may send personalized bonuses in the form of free bets or additional funds for specific games. The loyalty program allows players to accumulate points that can be exchanged for promo codes, bonuses, and free bets."}',
             'value_es' => '{"0":"La plataforma también analiza la actividad de los usuarios y puede enviar bonos personalizados en forma de freebets o fondos adicionales para juegos específicos. El programa de fidelidad permite acumular puntos que pueden canjearse por códigos promocionales, bonos y freebets."}',
             'value_fr' => '{"0":"La plateforme analyse également l’activité des utilisateurs et peut envoyer des bonus personnalisés sous forme de freebets ou de fonds supplémentaires pour certains jeux. Le programme de fidélité permet d’accumuler des points qui peuvent être échangés contre des codes promo, des bonus et des freebets."}',
             'value_pt' => '{"0":"A plataforma também analisa a atividade dos usuários e pode enviar bônus personalizados na forma de freebets ou fundos extras para jogos específicos. O programa de fidelidade permite acumular pontos que podem ser trocados por códigos promocionais, bônus e freebets."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 13
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 14
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"MelBet occasionally offers no-deposit bonuses for active users. These can include free bets for sports wagering or free spins in the casino. For example, new players may receive free spins for subscribing to MelBet’s official social media accounts."}',
             'value_es' => '{"0":"MelBet ofrece ocasionalmente bonos sin depósito para usuarios activos. Estos pueden incluir freebets para apuestas deportivas o giros gratis en el casino. Por ejemplo, los nuevos jugadores pueden recibir giros gratis por suscribirse a las redes sociales oficiales de MelBet."}',
             'value_fr' => '{"0":"MelBet propose de temps à autre des bonus sans dépôt pour les utilisateurs actifs. Ceux-ci peuvent inclure des freebets pour les paris sportifs ou des tours gratuits au casino. Par exemple, les nouveaux joueurs peuvent recevoir des tours gratuits en s’abonnant aux réseaux sociaux officiels de MelBet."}',
             'value_pt' => '{"0":"A MelBet ocasionalmente oferece bônus sem depósito para usuários ativos. Estes podem incluir freebets para apostas esportivas ou rodadas grátis no cassino. Por exemplo, novos jogadores podem receber rodadas grátis ao se inscrever nas redes sociais oficiais da MelBet."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 15
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"For regular users, the platform also runs promotions that do not require account funding – such as free bets for participating in tournaments or specific sporting events."}',
             'value_es' => '{"0":"Para los usuarios habituales, la plataforma también organiza promociones que no requieren recargar la cuenta, como freebets por participar en torneos o en determinados eventos deportivos."}',
             'value_fr' => '{"0":"Pour les utilisateurs réguliers, la plateforme organise également des promotions ne nécessitant aucun dépôt, comme des freebets pour participer à des tournois ou à certains événements sportifs."}',
             'value_pt' => '{"0":"Para os usuários frequentes, a plataforma também realiza promoções que não exigem depósito – como freebets por participar de torneios ou de determinados eventos esportivos."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 16
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that the list of promotional offers may vary depending on the country. Therefore, we recommend checking the full list on the PROMO page."}',
             'value_es' => '{"0":"Cabe señalar que la lista de ofertas promocionales puede variar según el país. Por lo tanto, recomendamos consultar la lista completa en la página PROMO."}',
             'value_fr' => '{"0":"Il convient de noter que la liste des offres promotionnelles peut varier selon les pays. Nous vous conseillons donc de consulter la liste complète sur la page PROMO."}',
             'value_pt' => '{"0":"Vale destacar que a lista de ofertas promocionais pode variar de acordo com o país. Por isso, recomendamos verificar a lista completa na página PROMO."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 17
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"TOTO"}',
                'value_es' => '{"0":"TOTO"}',
                'value_fr' => '{"0":"TOTO"}',
                'value_pt' => '{"0":"TOTO"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 18
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"This is a special offer for sports betting enthusiasts. You need to select the results of several matches in a tournament, and if your predictions turn out to be correct, you can receive an additional payout. The more matches you include in your bet slip, the higher the potential bonus. The promotion covers popular leagues in football, basketball, and tennis, allowing users to increase their winnings."}',
             'value_es' => '{"0":"Se trata de una oferta especial para los aficionados a las apuestas deportivas. Es necesario seleccionar los resultados de varios partidos en un torneo y, si la serie de pronósticos resulta correcta, se puede obtener una ganancia adicional. Cuantos más partidos se incluyan en el cupón, mayor será el bono potencial. La promoción abarca ligas populares de fútbol, baloncesto y tenis, y permite a los usuarios aumentar sus ganancias."}',
             'value_fr' => '{"0":"Il s’agit d’une offre spéciale destinée aux amateurs de paris sportifs. Il faut choisir les résultats de plusieurs matchs dans un tournoi et, en cas de série correcte de pronostics, il est possible d’obtenir un gain supplémentaire. Plus le coupon contient de matchs, plus le bonus potentiel est élevé. La promotion couvre les ligues populaires de football, de basketball et de tennis, et permet aux utilisateurs d’augmenter leurs gains."}',
             'value_pt' => '{"0":"Esta é uma oferta especial para os fãs de apostas esportivas. É necessário selecionar os resultados de várias partidas em um torneio e, caso a sequência de previsões esteja correta, é possível receber um prêmio adicional. Quanto mais partidas forem incluídas no bilhete, maior será o bônus potencial. A promoção abrange ligas populares de futebol, basquete e tênis, permitindo que os usuários aumentem seus ganhos."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 19
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"You can receive:"}',
             'value_es' => '{"0":"Podrás recibir:"}',
             'value_fr' => '{"0":"Vous pourrez recevoir :"}',
             'value_pt' => '{"0":"Você poderá receber:"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 20
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'list_v2',
             'value_en' => '{"0":"100 bonus points for 8 correctly predicted results",
                             "1":"250 bonus points for 9 correctly predicted results",
                             "2":"1000 bonus points for 10 correctly predicted results",
                             "3":"3000 bonus points for 11 correctly predicted results",
                             "4":"7000 bonus points for 12 correctly predicted results"}',
             'value_es' => '{"0":"100 puntos de bonificación por 8 resultados correctamente predichos",
                             "1":"250 puntos de bonificación por 9 resultados correctamente predichos",
                             "2":"1000 puntos de bonificación por 10 resultados correctamente predichos",
                             "3":"3000 puntos de bonificación por 11 resultados correctamente predichos",
                             "4":"7000 puntos de bonificación por 12 resultados correctamente predichos"}',
             'value_fr' => '{"0":"100 points bonus pour 8 résultats correctement prédits",
                             "1":"250 points bonus pour 9 résultats correctement prédits",
                             "2":"1000 points bonus pour 10 résultats correctement prédits",
                             "3":"3000 points bonus pour 11 résultats correctement prédits",
                             "4":"7000 points bonus pour 12 résultats correctement prédits"}',
             'value_pt' => '{"0":"100 pontos de bônus por 8 resultados corretamente previstos",
                             "1":"250 pontos de bônus por 9 resultados corretamente previstos",
                             "2":"1000 pontos de bônus por 10 resultados corretamente previstos",
                             "3":"3000 pontos de bônus por 11 resultados corretamente previstos",
                             "4":"7000 pontos de bônus por 12 resultados corretamente previstos"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 21
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 22
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Go For Longer"}',
                'value_es' => '{"0":"No pare"}',
                'value_fr' => '{"0":"Vous pourrez jouer plus longtemps"}',
                'value_pt' => '{"0":"Vá mais além"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 23
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Go For Longer is a promotion for those who enjoy long-term bets and predicting several events in a row. The idea of the promotion is to increase your winnings depending on the number of correct predictions in a series of bets."}',
             'value_es' => '{"0":"No pare es una promoción para quienes disfrutan de apuestas prolongadas y de predecir varios eventos seguidos. La esencia de la promoción es aumentar tus ganancias según la cantidad de pronósticos correctos en una serie de apuestas."}',
             'value_fr' => '{"0":"Vous pourrez jouer plus longtemps est une promotion pour ceux qui aiment les paris longue durée et prédire plusieurs événements consécutifs. Le principe de la promotion est d’augmenter vos gains en fonction du nombre de pronostics corrects dans une série de paris."}',
             'value_pt' => '{"0":"Vá mais além é uma promoção para quem gosta de apostas de longa duração e de prever vários eventos consecutivos. O objetivo da promoção é aumentar os seus ganhos dependendo do número de previsões corretas numa série de apostas."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 24
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Place an accumulator bet consisting of three or more pre-match or LIVE events with odds of at least 1.5 every day. At least one event in the accumulator must have odds of 2.00 or higher. After each 7, 14, 21, 28, 35, and 42 consecutive days of participation in the challenge, you will receive a promo code for a free bet."}',
             'value_es' => '{"0":"Realiza una apuesta acumuladora que conste de tres o más eventos pre-partido o en vivo con cuotas de al menos 1,5 cada día. Al menos un evento en la acumuladora debe tener cuotas de 2,00 o más. Después de cada 7, 14, 21, 28, 35 y 42 días consecutivos de participación en la competición, recibirás un código promocional para una apuesta gratis."}',
             'value_fr' => '{"0":"Placez un pari accumulateur composé de trois événements ou plus pré-match ou en direct avec une cote d’au moins 1,5 chaque jour. Au moins un événement de l’accumulateur doit avoir une cote de 2,00 ou plus. Après chaque période de 7, 14, 21, 28, 35 et 42 jours consécutifs de participation, vous recevrez un code promo pour un pari gratuit."}',
             'value_pt' => '{"0":"Faça uma aposta acumuladora composta por três ou mais eventos pré-jogo ou LIVE com odds de pelo menos 1,5 todos os dias. Pelo menos um evento na acumuladora deve ter odds de 2,00 ou mais. Após cada 7, 14, 21, 28, 35 e 42 dias consecutivos de participação na corrida, você receberá um código promocional para uma aposta grátis."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 25
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 26
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"Royal Monday"}',
                'value_es' => '{"0":"Lunes de Reyes"}',
                'value_fr' => '{"0":"Royal Monday"}',
                'value_pt' => '{"0":"Segunda-feira Régia"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 27
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Every Monday you can receive a +100% deposit bonus for topping up your account. The bonus amount depends on the size of your deposit. The minimum deposit required to receive this bonus is $5, and the maximum is $100."}',
             'value_es' => '{"0":"Cada lunes puedes recibir un bono del +100% sobre el depósito al recargar tu cuenta. La cantidad del bono depende del tamaño de tu depósito. El depósito mínimo necesario para recibir este bono es de $5, y el máximo es de $100."}',
             'value_fr' => '{"0":"Chaque lundi, vous pouvez recevoir un bonus de +100% sur le dépôt en rechargeant votre compte. Le montant du bonus dépend de la taille de votre dépôt. Le dépôt minimum requis pour recevoir ce bonus est de 5 $, et le maximum est de 100 $."}',
             'value_pt' => '{"0":"Todo segunda-feira você pode receber um bônus de +100% no depósito ao adicionar fundos à sua conta. O valor do bônus depende do tamanho do depósito. O depósito mínimo necessário para receber este bônus é de $5, e o máximo é de $100."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 28
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw the bonus funds, you must meet the wagering requirements. To do this, place accumulator bets totaling six times the bonus amount within 24 hours of receiving the bonus, otherwise the bonus will be canceled. Each accumulator must contain three or more selections, each with odds of 1.65 or higher."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, debes cumplir con los requisitos de apuesta. Para ello, realiza apuestas acumuladoras por un total de seis veces el monto del bono en un plazo de 24 horas después de recibir el bono, de lo contrario, el bono será cancelado. Cada acumuladora debe contener tres o más selecciones, cada una con cuotas de 1,65 o superiores."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds du bonus, vous devez remplir les conditions de mise. Pour ce faire, placez des paris accumulateurs représentant six fois le montant du bonus dans les 24 heures suivant la réception du bonus, sinon le bonus sera annulé. Chaque accumulateur doit contenir trois sélections ou plus, chacune avec des cotes de 1,65 ou plus."}',
             'value_pt' => '{"0":"Para poder sacar os fundos do bônus, é necessário cumprir os requisitos de aposta. Para isso, faça apostas acumuladoras no valor de seis vezes o bônus dentro de 24 horas após receber o bônus, caso contrário, o bônus será cancelado. Cada acumuladora deve conter três ou mais seleções, cada uma com odds de 1,65 ou mais."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 29
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 30
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h2',
                'value_en' => '{"0":"MelBet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MelBet"}',
                'value_fr' => '{"0":"FAQ de MelBet"}',
                'value_pt' => '{"0":"Perguntas frequentes do MelBet"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 31
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Is a promo code required to receive the welcome bonus?"}',
             'value_es' => '{"0":"¿Se necesita un código promocional para recibir el bono de bienvenida?"}',
             'value_fr' => '{"0":"Faut-il un code promotionnel pour obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"É necessário um código promocional para receber o bônus de boas-vindas?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 32
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the welcome bonus is activated with a promo code."}',
             'value_es' => '{"0":"Sí, el bono de bienvenida se activa con un código promocional."}',
             'value_fr' => '{"0":"Oui, le bonus de bienvenue s’active avec un code promotionnel."}',
             'value_pt' => '{"0":"Sim, o bônus de boas-vindas é ativado com um código promocional."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 33
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to receive the bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para recibir el bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour recevoir le bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para receber o bônus?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 34
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"The minimum deposit depends on the chosen bonus: from $1 for sports bets, from $5 for casino games."}',
             'value_es' => '{"0":"El depósito mínimo depende del bono elegido: desde $1 para apuestas deportivas, desde $5 para juegos de casino."}',
             'value_fr' => '{"0":"Le dépôt minimum dépend du bonus choisi : à partir de 1 $ pour les paris sportifs, à partir de 5 $ pour les jeux de casino."}',
             'value_pt' => '{"0":"O depósito mínimo depende do bônus escolhido: a partir de $1 para apostas esportivas, a partir de $5 para jogos de cassino."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 35
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available for regular players?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos para jugadores habituales?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles pour les joueurs réguliers ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis para jogadores regulares?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 36
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Yes, regular players can receive cashback, free bets, and enhanced odds as part of ongoing promotions. The conditions of some of these promotions are described earlier in this review."}',
             'value_es' => '{"0":"Sí, los jugadores habituales pueden recibir reembolsos, apuestas gratis y cuotas mejoradas como parte de las promociones regulares. Las condiciones de algunas de estas promociones se describen más arriba en esta reseña"}',
             'value_fr' => '{"0":"Oui, les joueurs réguliers peuvent recevoir des cashback, des paris gratuits et des cotes améliorées dans le cadre des promotions régulières. Les conditions de certaines de ces promotions sont décrites plus haut dans cette revue."}',
             'value_pt' => '{"0":"Sim, jogadores regulares podem receber cashback, apostas grátis e odds aumentadas como parte de promoções regulares. As condições de algumas dessas promoções estão descritas acima nesta análise."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 37
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used for both categories at the same time?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos para ambas categorías al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus pour les deux catégories en même temps ?"}',
             'value_pt' => '{"0":"É possível usar os bônus para ambas as categorias ao mesmo tempo?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 38
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"No, the casino and sports betting bonuses are activated separately and cannot be combined."}',
             'value_es' => '{"0":"No, los bonos para casino y apuestas deportivas se activan por separado y no se pueden combinar."}',
             'value_fr' => '{"0":"Non, les bonus pour le casino et les paris sportifs s’activent séparément et ne se cumulent pas."}',
             'value_pt' => '{"0":"Não, os bônus de cassino e de apostas esportivas são ativados separadamente e não podem ser combinados."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 39
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'h3',
             'value_en' => '{"0":"Are there country restrictions?"}',
             'value_es' => '{"0":"¿Existen restricciones por país?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions selon le pays ?"}',
             'value_pt' => '{"0":"Existem restrições por país?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'melbet',
             'order' => 40
            ],
            ['key' => 'melbet',
             'bookmaker_id' => 2,
             'component' => 'p',
             'value_en' => '{"0":"Some bonuses and promo codes may not be available in certain countries."}',
             'value_es' => '{"0":"Algunos bonos y códigos promocionales pueden no estar disponibles en ciertos países."}',
             'value_fr' => '{"0":"Certains bonus et codes promotionnels peuvent ne pas être disponibles dans certains pays."}',
             'value_pt' => '{"0":"Alguns bônus e códigos promocionais podem não estar disponíveis em determinados países."}',
             'order' => 40
            ]
        );
    }
}
