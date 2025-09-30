<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1XBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 1
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET has long been associated with being one of the most active bookmakers, offering a huge selection of promotions and bonuses. Thanks to its bonus system, players can receive additional funds right at the registration stage. This is not only a way to attract new users but also a real tool to increase a player’s winning potential."}',
             'value_es' => '{"0":"1XBET se ha asociado durante mucho tiempo con ser una de las casas de apuestas más activas, que ofrece una enorme selección de promociones y bonificaciones. Gracias a su sistema de bonificaciones, los jugadores pueden recibir fondos adicionales ya en la etapa de registro. Esto no solo es una forma de atraer a nuevos usuarios, sino también una herramienta real para aumentar el potencial de ganancias del jugador."}',
             'value_fr' => '{"0":"1XBET est depuis longtemps associée à l’une des sociétés de paris les plus actives, offrant un vaste choix de promotions et de bonus. Grâce à son système de bonus, les joueurs peuvent obtenir des fonds supplémentaires dès l’étape de l’inscription. Ce n’est pas seulement un moyen d’attirer de nouveaux utilisateurs, mais également un véritable outil pour accroître le potentiel de gains du joueur."}',
             'value_pt' => '{"0":"A 1XBET há muito tempo é associada a ser uma das casas de apostas mais ativas, oferecendo uma enorme variedade de promoções e bônus. Graças ao seu sistema de bônus, os jogadores podem receber fundos adicionais já na fase de registro. Isso não é apenas uma forma de atrair novos usuários, mas também uma ferramenta real para aumentar o potencial de ganhos do jogador."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 2
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is worth noting that the company constantly updates its promotional policy, introducing new offers and improving existing ones. In this review, we will take a detailed look at the bonus programs available to both new and regular customers."}',
             'value_es' => '{"0":"Cabe destacar que la compañía actualiza constantemente su política promocional, introduciendo nuevas ofertas y mejorando las ya existentes. En esta reseña analizaremos en detalle los programas de bonificación disponibles tanto para nuevos como para clientes habituales."}',
             'value_fr' => '{"0":"Il convient de noter que l’entreprise met constamment à jour sa politique promotionnelle, en introduisant de nouvelles offres et en améliorant les existantes. Dans cet article, nous examinerons en détail les programmes de bonus disponibles pour les nouveaux comme pour les clients réguliers."}',
             'value_pt' => '{"0":"Vale destacar que a empresa atualiza constantemente sua política promocional, introduzindo novas ofertas e aprimorando as já existentes. Nesta análise, vamos examinar em detalhes os programas de bônus disponíveis tanto para novos quanto para clientes regulares."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 3
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"How to use the promo code :promocode?"}',
             'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
             'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
             'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 4
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To get started, you need to register. The bookmaker offers several options for creating an account — via phone number, email, social networks, or in one click. Regardless of the method, you can enter the promo code :promocode in the special field, which allows you to receive an additional bonus after your first deposit. Also, don’t forget to specify the type of bonus: for sports accumulator bets, for single sports bets, or for casino play."}',
             'value_es' => '{"0":"Para comenzar, necesitas registrarte. La casa de apuestas ofrece varias opciones para crear una cuenta: mediante número de teléfono, correo electrónico, redes sociales o en un solo clic. Independientemente del método, puedes ingresar el código promocional :promocode en el campo correspondiente, lo que te permitirá obtener un bono adicional tras tu primer depósito. Además, no olvides indicar el tipo de bono: para apuestas combinadas deportivas, para apuestas simples deportivas o para juegos de casino."}',
             'value_fr' => '{"0":"Pour commencer, vous devez vous inscrire. Le bookmaker propose plusieurs options pour créer un compte — par numéro de téléphone, e-mail, réseaux sociaux ou en un clic. Quel que soit le mode choisi, vous pouvez entrer le code promo :promocode dans le champ prévu à cet effet, ce qui vous permettra d’obtenir un bonus supplémentaire après votre premier dépôt. N’oubliez pas non plus d’indiquer le type de bonus : pour les paris combinés sportifs, pour les paris simples sportifs ou pour le jeu au casino."}',
             'value_pt' => '{"0":"Para começar, é necessário se registrar. A casa de apostas oferece várias opções para criar uma conta — pelo número de telefone, e-mail, redes sociais ou em um clique. Independentemente do método, você pode inserir o código promocional :promocode no campo indicado, o que permite receber um bônus adicional após o primeiro depósito. Além disso, não se esqueça de escolher o tipo de bônus: para apostas múltiplas esportivas, para apostas simples esportivas ou para jogos de cassino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 5
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For accumulator sports bets, you can receive a 120% bonus if you deposit from $2 to $370; for single sports bets, you can receive a 100% bonus if you deposit from $1 to $370; for casino play, you can receive a 100% bonus + 150 FS if you deposit from $3 to $560."}',
             'value_es' => '{"0":"Para apuestas combinadas deportivas puedes recibir un bono del 120% si depositas entre 2 $ y 370 $; para apuestas simples deportivas puedes recibir un bono del 100% si depositas entre 1 $ y 370 $; para juegos de casino puedes recibir un bono del 100% + 150 giros gratis si depositas entre 3 $ y 560 $."}',
             'value_fr' => '{"0":"Pour les paris combinés sportifs, vous pouvez obtenir un bonus de 120% si vous déposez entre 2 $ et 370 $ ; pour les paris simples sportifs, vous pouvez obtenir un bonus de 100% si vous déposez entre 1 $ et 370 $ ; pour le casino, vous pouvez obtenir un bonus de 100% + 150 tours gratuits si vous déposez entre 3 $ et 560 $."}',
             'value_pt' => '{"0":"Para apostas múltiplas esportivas, você pode receber um bônus de 120% se depositar entre US$ 2 e US$ 370; para apostas simples esportivas, você pode receber um bônus de 100% se depositar entre US$ 1 e US$ 370; para jogos de cassino, você pode receber um bônus de 100% + 150 rodadas grátis se depositar entre US$ 3 e US$ 560."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 6
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 7
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To transfer the funds to the main deposit and be able to withdraw them, the wagering requirements must be met."}',
             'value_es' => '{"0":"Para transferir los fondos al depósito principal y poder retirarlos, es necesario cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Pour transférer les fonds vers le dépôt principal et pouvoir les retirer, il est nécessaire de remplir les conditions de mise."}',
             'value_pt' => '{"0":"Para transferir os fundos para o depósito principal e poder retirá-los, é necessário cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 8
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For the sports accumulator bonus, the bonus amount must be wagered 10 times using accumulator bets in Line or Live mode. Each accumulator must include at least 3 events, and a minimum of 3 events in the accumulator must have odds no lower than 1.50."}',
             'value_es' => '{"0":"Para el bono de apuestas combinadas deportivas, el monto del bono debe apostarse 10 veces en apuestas combinadas en Línea o en Vivo. Cada combinada debe incluir al menos 3 eventos, y un mínimo de 3 eventos en la combinada deben tener cuotas no inferiores a 1.50."}',
             'value_fr' => '{"0":"Pour le bonus de paris combinés sportifs, le montant du bonus doit être misé 10 fois en paris combinés sur la Ligne ou en Live. Chaque combiné doit inclure au moins 3 événements, et au minimum 3 événements du combiné doivent avoir des cotes d’au moins 1.50."}',
             'value_pt' => '{"0":"Para o bônus de apostas múltiplas esportivas, o valor do bônus deve ser apostado 10 vezes em apostas múltiplas na Linha ou ao Vivo. Cada múltipla deve incluir pelo menos 3 eventos, e no mínimo 3 eventos da múltipla devem ter odds não inferiores a 1.50."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 9
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For the single sports bets bonus, you need to place three winning single bets, using the full bonus amount on each bet. Each bet must be placed as a single wager with odds of at least 2.0."}',
             'value_es' => '{"0":"Para el bono de apuestas simples deportivas, es necesario realizar tres apuestas simples ganadoras, utilizando el monto total del bono en cada apuesta. Cada apuesta debe realizarse como una apuesta simple con una cuota mínima de 2.0."}',
             'value_fr' => '{"0":"Pour le bonus de paris simples sportifs, il faut effectuer trois paris simples gagnants, en utilisant le montant total du bonus sur chaque pari. Chaque pari doit être placé en tant que pari simple avec une cote minimale de 2.0."}',
             'value_pt' => '{"0":"Para o bônus de apostas simples esportivas, é necessário realizar três apostas simples vencedoras, utilizando todo o valor do bônus em cada aposta. Cada aposta deve ser feita como uma aposta simples com odds de pelo menos 2.0."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 10
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For the casino bonus, wagering requirements are x25 within 7 days after activation. The bonus is played through using the bonus account funds, and the maximum allowed bet must not exceed $5."}',
             'value_es' => '{"0":"Para el bono de casino, el requisito de apuesta es de x25 dentro de los 7 días posteriores a la activación. El bono debe jugarse con los fondos de la cuenta de bono, y la apuesta máxima permitida no debe superar los 5 $."}',
             'value_fr' => '{"0":"Pour le bonus de casino, les conditions de mise sont de x25 dans un délai de 7 jours après l’activation. Le bonus doit être misé avec les fonds du compte bonus, et la mise maximale ne doit pas dépasser 5 $."}',
             'value_pt' => '{"0":"Para o bônus de cassino, o requisito de aposta é de x25 no prazo de 7 dias após a ativação. O bônus deve ser jogado com os fundos da conta de bônus, e a aposta máxima não pode ultrapassar US$ 5."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 11
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
             'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
             'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 12
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"1XBET is not limited to welcome offers, as a large part of its promotions is aimed specifically at users who already have an account and actively place bets. Regular customers can participate in numerous weekly and daily promotions that cover both the sports section and the casino. Among the most common rewards are enhanced odds on selected events, free spins for slots, as well as special bonuses for taking part in tournaments or betting on major sporting matches."}',
             'value_es' => '{"0":"1XBET no se limita únicamente a las ofertas de bienvenida, ya que gran parte de sus promociones está dirigida específicamente a los usuarios que ya tienen una cuenta y realizan apuestas de manera activa. Los clientes habituales pueden participar en numerosas promociones semanales y diarias que abarcan tanto la sección deportiva como el casino. Entre las recompensas más comunes se encuentran las cuotas mejoradas en ciertos eventos, giros gratis para las tragamonedas y bonos especiales por participar en torneos o apostar en grandes partidos deportivos."}',
             'value_fr' => '{"0":"1XBET ne se limite pas uniquement aux offres de bienvenue, car une grande partie de ses promotions est destinée aux utilisateurs qui possèdent déjà un compte et qui parient activement. Les clients réguliers peuvent participer à de nombreuses promotions hebdomadaires et quotidiennes couvrant à la fois la section sportive et le casino. Parmi les récompenses les plus courantes figurent des cotes améliorées sur certains événements, des tours gratuits pour les machines à sous ainsi que des bonus spéciaux pour la participation à des tournois ou pour les paris sur de grands matchs sportifs."}',
             'value_pt' => '{"0":"A 1XBET não se limita apenas às ofertas de boas-vindas, pois grande parte das suas promoções é voltada especificamente para os usuários que já possuem uma conta e apostam ativamente. Os clientes regulares podem participar de inúmeras promoções semanais e diárias que abrangem tanto a seção esportiva quanto o cassino. Entre as recompensas mais comuns estão odds aumentadas em determinados eventos, rodadas grátis para slots e bônus especiais por participar de torneios ou apostar em grandes partidas esportivas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 13
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Another advantage is the system of personalized offers. The platform analyzes user activity and can send individual bonuses in the form of free bets or cashback on certain games. Particular attention is paid to the loyalty program, which allows players to accumulate points and exchange them for promo codes, free bets, or other rewards. Thus, even after the welcome bonus ends, users have plenty of opportunities to continue benefiting from their play."}',
             'value_es' => '{"0":"Otra ventaja es el sistema de ofertas personalizadas. La plataforma analiza la actividad del usuario y puede enviar bonos individuales en forma de apuestas gratuitas o reembolsos en determinados juegos. Se presta especial atención al programa de fidelidad, que permite acumular puntos y canjearlos por códigos promocionales, freebets u otras recompensas. De esta manera, incluso después de que finalice el bono de bienvenida, los usuarios disponen de suficientes oportunidades para seguir obteniendo beneficios de su juego."}',
             'value_fr' => '{"0":"Un autre avantage réside dans le système d’offres personnalisées. La plateforme analyse l’activité et peut envoyer des bonus individuels sous forme de paris gratuits ou de cashback sur certains jeux. Une attention particulière est accordée au programme de fidélité, qui permet d’accumuler des points et de les échanger contre des codes promotionnels, des freebets ou d’autres récompenses. Ainsi, même après l’expiration du bonus de bienvenue, les utilisateurs disposent de nombreuses opportunités pour continuer à tirer profit de leur activité de jeu."}',
             'value_pt' => '{"0":"Outra vantagem é o sistema de ofertas personalizadas. A plataforma analisa a atividade do usuário e pode enviar bônus individuais na forma de apostas grátis ou cashback em determinados jogos. Atenção especial é dada ao programa de fidelidade, que permite acumular pontos e trocá-los por códigos promocionais, freebets ou outras recompensas. Assim, mesmo após o término do bônus de boas-vindas, os usuários continuam a ter diversas oportunidades de obter benefícios com o seu jogo."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 14
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
             'value_en' => '{"0":"Are there no deposit bonuses?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
             'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
             'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 15
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"For regular users, the platform offers a wide range of promotions covering both sports betting and casino games. One of the key directions is the regular special offers that are updated weekly. These can include enhanced odds on specific matches, bonuses for participating in tournaments, or cashback on lost bets."}',
             'value_es' => '{"0":"Para los usuarios habituales, la plataforma ofrece una amplia gama de promociones que abarcan tanto las apuestas deportivas como los juegos de casino. Uno de los puntos clave son las ofertas especiales regulares que se actualizan semanalmente. Estas pueden incluir cuotas mejoradas en determinados partidos, bonificaciones por participar en torneos o reembolsos en apuestas perdidas."}',
             'value_fr' => '{"0":"Pour les utilisateurs réguliers, la plateforme propose un large éventail de promotions couvrant à la fois les paris sportifs et les jeux de casino. L’un des axes principaux est constitué par les offres spéciales régulières, mises à jour chaque semaine. Celles-ci peuvent inclure des cotes améliorées sur certains matchs, des bonus pour la participation à des tournois ou du cashback sur les paris perdus."}',
             'value_pt' => '{"0":"Para os usuários regulares, a plataforma oferece uma ampla variedade de promoções que abrangem tanto as apostas esportivas quanto os jogos de cassino. Um dos principais focos são as ofertas especiais regulares, que são atualizadas semanalmente. Estas podem incluir odds aumentadas em partidas específicas, bônus por participação em torneios ou cashback em apostas perdidas."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 16
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"There is also a promotion that allows you to receive up to 15% extra after you refer a friend to the 1XBET platform. In addition, you can get 100 free spins simply by subscribing to the 1XBET Casino Telegram channel."}',
             'value_es' => '{"0":"También existe una promoción que permite recibir hasta un 15% adicional después de invitar a un amigo a la plataforma 1XBET. Además, se pueden obtener 100 giros gratis simplemente suscribiéndose al canal de Telegram de 1XBET Casino."}',
             'value_fr' => '{"0":"Il existe également une promotion qui permet de recevoir jusqu’à 15 % supplémentaires après avoir invité un ami sur la plateforme 1XBET. De plus, il est possible d’obtenir 100 tours gratuits simplement en s’abonnant à la chaîne Telegram de 1XBET Casino."}',
             'value_pt' => '{"0":"Há também uma promoção que permite receber até 15% extra depois de indicar um amigo para a plataforma 1XBET. Além disso, é possível ganhar 100 giros grátis simplesmente ao se inscrever no canal do Telegram do 1XBET Casino."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 17
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Hyper Bonus"}',
                'value_es' => '{"0":"Hyper Bonus"}',
                'value_fr' => '{"0":"Hyper Bonus"}',
                'value_pt' => '{"0":"Hyper Bonus"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 18
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The promotion is aimed at players who prefer accumulator bets and want to get the maximum benefit from them. The essence of the offer is that the bookmaker increases the size of the potential winnings depending on the number of events in the coupon. The more matches the user selects for their accumulator, the higher the bonus percentage that can be added to the final payout. For 4 winning events, you get a 5% bonus, while for 25 events, it goes up to an impressive 250%."}',
             'value_es' => '{"0":"La promoción está dirigida a los jugadores que prefieren las apuestas combinadas y buscan obtener el máximo beneficio de ellas. La esencia de la oferta consiste en que la casa de apuestas aumenta el tamaño de las posibles ganancias según el número de eventos en el cupón. Cuantos más partidos elija el usuario para su combinada, mayor será el porcentaje de bonificación que se puede añadir al pago final. Por 4 eventos ganadores recibes un 5% de bonificación, y por 25 eventos nada menos que un 250%."}',
             'value_fr' => '{"0":"La promotion s’adresse aux joueurs qui privilégient les paris combinés et souhaitent en tirer un maximum d’avantages. Le principe de l’offre est que le bookmaker augmente le montant des gains potentiels en fonction du nombre d’événements inclus dans le coupon. Plus l’utilisateur sélectionne de matchs pour son combiné, plus le pourcentage de bonus ajouté au gain final sera élevé. Pour 4 événements gagnants, vous recevez un bonus de 5 %, et pour 25 événements, jusqu’à 250 %."}',
             'value_pt' => '{"0":"A promoção é destinada aos jogadores que preferem apostas múltiplas e querem obter o máximo benefício delas. A essência da oferta é que a casa de apostas aumenta o valor dos ganhos potenciais de acordo com o número de eventos no cupom. Quanto mais partidas o usuário selecionar para a sua múltipla, maior será a porcentagem de bônus que pode ser adicionada ao pagamento final. Por 4 eventos vencedores, você recebe 5% de bônus, e por 25 eventos, até 250%."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 19
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Each event in the accumulator must have odds of at least 1.2. The minimum winning amount from the accumulator required for the bonus to be credited is $2. The maximum bonus amount is $30,300."}',
             'value_es' => '{"0":"Cada evento en la combinada debe tener una cuota de al menos 1.2. La ganancia mínima en la combinada a partir de la cual se acredita el bono es de $2. El importe máximo de la bonificación es de $30,300."}',
             'value_fr' => '{"0":"Chaque événement du combiné doit avoir une cote d’au moins 1.2. Le gain minimum du combiné à partir duquel le bonus est crédité est de 2 $. Le montant maximum du bonus est de 30 300 $."}',
             'value_pt' => '{"0":"Cada evento na múltipla deve ter uma odd de pelo menos 1.2. O valor mínimo de ganho da múltipla a partir do qual o bônus é creditado é de $2. O valor máximo do bônus é de $30,300."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 20
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that the Hyper Bonus is not limited to certain types of sports — the promotion applies to a wide range of disciplines, including football, basketball, tennis, and other popular options."}',
             'value_es' => '{"0":"Es importante señalar que el Hyper Bonus no se limita a ciertos tipos de deportes: la promoción cubre una amplia gama de disciplinas, como fútbol, baloncesto, tenis y otros mercados populares."}',
             'value_fr' => '{"0":"Il est important de souligner que l’Hyper Bonus n’est pas limité à certains sports — la promotion s’applique à un large éventail de disciplines, notamment le football, le basketball, le tennis et d’autres disciplines populaires."}',
             'value_pt' => '{"0":"É importante destacar que o Hyper Bonus não é restrito apenas a determinados esportes — a promoção abrange uma ampla gama de modalidades, incluindo futebol, basquete, tênis e outras opções populares."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 21
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 22
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Apuesta Combinada del Día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 23
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Every day, the bookmaker compiles a selection of ready-made coupons consisting of events from the most popular sports tournaments. These may include Champions League matches, English Premier League games, NBA showdowns, or top tennis tournaments. Players are offered the chance to bet on one of these accumulators, and in the event of a win, the odds are increased by 10%."}',
             'value_es' => '{"0":"Cada día, la casa de apuestas elabora una selección de cupones ya preparados que incluyen eventos de los torneos deportivos más populares. Estos pueden ser partidos de la Liga de Campeones, encuentros de la Premier League inglesa, juegos de la NBA o torneos de tenis de primer nivel. Al jugador se le ofrece apostar en una de estas combinadas y, en caso de ganar, la cuota se incrementa en un 10 %."}',
             'value_fr' => '{"0":"Chaque jour, le bookmaker propose une sélection de coupons prêts à l’emploi composés d’événements issus des tournois sportifs les plus populaires. Il peut s’agir de matchs de Ligue des champions, de rencontres de Premier League anglaise, de confrontations NBA ou de grands tournois de tennis. Le joueur peut parier sur l’un de ces combinés et, en cas de succès, la cote est augmentée de 10 %."}',
             'value_pt' => '{"0":"Todos os dias, a casa de apostas prepara uma seleção de cupons prontos, compostos por eventos dos torneios esportivos mais populares. Podem ser partidas da Liga dos Campeões, jogos da Premier League inglesa, confrontos da NBA ou grandes torneios de tênis. O jogador tem a oportunidade de apostar em uma dessas múltiplas e, em caso de vitória, a odd é aumentada em 10%."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 24
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"This promotion saves time and simplifies the betting process. Many players are familiar with the feeling that searching for events to include in an accumulator can take a considerable amount of time, but here the bookmaker does it for you. At the same time, the set of events changes daily, giving you new options to choose from each time. Importantly, the odds on these coupons are not artificially lowered — they remain competitive and aligned with the bookmaker’s overall line."}',
             'value_es' => '{"0":"Esta promoción ahorra tiempo y simplifica el proceso de juego. Muchos jugadores conocen la sensación de que buscar eventos para una combinada puede llevar mucho tiempo, pero aquí la casa de apuestas lo hace por ti. Además, el conjunto de eventos cambia cada día, ofreciéndote nuevas opciones para elegir. Es importante señalar que las cuotas de estos cupones no se reducen artificialmente: se mantienen competitivas y coherentes con la línea general de la casa de apuestas."}',
             'value_fr' => '{"0":"Cette promotion fait gagner du temps et simplifie le processus de jeu. De nombreux parieurs connaissent la situation où la recherche d’événements pour constituer un combiné prend beaucoup de temps, mais ici, le bookmaker s’en charge pour vous. De plus, la sélection d’événements change chaque jour, vous offrant ainsi de nouvelles possibilités à chaque fois. Il est important de souligner que les cotes de ces coupons ne sont pas artificiellement réduites : elles restent compétitives et conformes à la ligne générale du bookmaker."}',
             'value_pt' => '{"0":"Esta promoção economiza tempo e simplifica o processo de jogo. Muitos jogadores conhecem a sensação de que procurar eventos para montar uma múltipla pode levar bastante tempo, mas aqui a casa de apostas faz isso por você. Além disso, o conjunto de eventos muda diariamente, oferecendo sempre novas opções para escolher. É importante destacar que as odds nesses cupons não são artificialmente reduzidas — elas permanecem competitivas e de acordo com a linha geral da casa de apostas."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 25
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 26
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET’s Goalless Football Refund"}',
                'value_es' => '{"0":"Reembolso de fútbol sin goles de 1XBET"}',
                'value_fr' => '{"0":"Remboursement football sans but de 1XBET"}',
                'value_pt' => '{"0":"Futebol sem Golos da 1XBET"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 27
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The promotion is aimed at football fans and provides additional protection against unpredictable results. The essence of this offer is that if a bet on a particular match ends in a goalless draw, you can receive a refund of your stake up to $20."}',
             'value_es' => '{"0":"La promoción está dirigida a los aficionados al fútbol y ofrece protección adicional frente a resultados impredecibles. La esencia de esta oferta es que, si una apuesta en un partido determinado termina en empate sin goles, se puede recibir un reembolso de la apuesta de hasta $20."}',
             'value_fr' => '{"0":"Cette promotion s’adresse aux fans de football et offre une protection supplémentaire contre les résultats imprévisibles. L’essence de cette offre est que si un pari sur un match particulier se termine par un score nul et vierge, vous pouvez récupérer votre mise jusqu’à 20 $."}',
             'value_pt' => '{"0":"A promoção é direcionada aos fãs de futebol e oferece proteção adicional contra resultados imprevisíveis. A essência desta oferta é que, se uma aposta em determinado jogo terminar em empate sem gols, você pode receber o reembolso do valor da aposta de até $20."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 28
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Importantly, the promotion does not impose any additional requirements. The refunded funds are not subject to wagering and can be used immediately for new bets."}',
             'value_es' => '{"0":"Es importante destacar que la promoción no requiere cumplir condiciones adicionales. Los fondos devueltos no están sujetos a requisitos de apuesta y se pueden utilizar inmediatamente para nuevas apuestas."}',
             'value_fr' => '{"0":"Il est important de noter que la promotion ne comporte aucune exigence supplémentaire. Les fonds remboursés ne sont pas soumis à des conditions de mise et peuvent être utilisés immédiatement pour de nouveaux paris."}',
             'value_pt' => '{"0":"É importante destacar que a promoção não exige condições adicionais. Os fundos reembolsados não estão sujeitos a apostas e podem ser usados imediatamente em novas apostas."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 29
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 30
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET’s No Risk Bet"}',
                'value_es' => '{"0":"Apuesta sin Riesgo de 1XBET"}',
                'value_fr' => '{"0":"Pari sans Risque de 1XBET"}',
                'value_pt' => '{"0":"Aposta Sem Risco da 1XBET"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 31
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"The No Risk Bet promotion at 1XBET is designed for users who want to reduce risks while playing and at the same time have a chance for an additional win. Its main feature is that in case of a loss, the stake is returned to the account as a free bet."}',
             'value_es' => '{"0":"La promoción No Risk Bet en 1XBET está diseñada para usuarios que desean reducir riesgos durante el juego y al mismo tiempo tener la oportunidad de obtener una ganancia adicional. Su característica principal es que, en caso de pérdida, la apuesta se devuelve a la cuenta en forma de apuesta gratuita."}',
             'value_fr' => '{"0":"La promotion No Risk Bet chez 1XBET est conçue pour les utilisateurs qui souhaitent réduire les risques pendant le jeu tout en ayant la possibilité de réaliser un gain supplémentaire. Sa principale caractéristique est qu’en cas de perte, la mise est retournée sur le compte sous forme de pari gratuit."}',
             'value_pt' => '{"0":"A promoção No Risk Bet na 1XBET é criada para usuários que querem reduzir riscos durante o jogo e, ao mesmo tempo, ter a chance de um ganho adicional. Sua principal característica é que, em caso de perda, a aposta é devolvida à conta como um free bet."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 32
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"To use the promotion, simply select an event included in the offer and place a bet. If the bet loses, the bookmaker automatically compensates the stake. The refunded funds are available for further use without any restrictions or wagering requirements."}',
             'value_es' => '{"0":"Para aprovechar la promoción, solo hay que seleccionar un evento incluido en la oferta y realizar la apuesta. Si la apuesta pierde, el operador compensa automáticamente la cantidad apostada. Los fondos devueltos están disponibles para su uso posterior sin restricciones ni requisitos de apuesta."}',
             'value_fr' => '{"0":"Pour profiter de la promotion, il suffit de sélectionner un événement inclus dans l’offre et de placer un pari. En cas de perte, le bookmaker rembourse automatiquement le montant du pari. Les fonds remboursés peuvent être utilisés ultérieurement sans restrictions ni conditions de mise."}',
             'value_pt' => '{"0":"Para usar a promoção, basta selecionar um evento incluído na oferta e fazer a aposta. Se a aposta perder, o bookmaker compensa automaticamente o valor apostado. Os fundos devolvidos estão disponíveis para uso posterior sem restrições ou requisitos de aposta."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 33
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 34
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h2',
                'value_en' => '{"0":"1XBET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1XBET"}',
                'value_fr' => '{"0":"FAQ de 1XBET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1XBET"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 35
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Is a promo code required to receive the welcome bonus?"}',
             'value_es' => '{"0":"¿Se necesita un código promocional para recibir el bono de bienvenida?"}',
             'value_fr' => '{"0":"Faut-il un code promo pour obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"É necessário um código promocional para receber o bônus de boas-vindas?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 36
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"In most cases, yes — a promo code is needed to activate the bonus during registration. Without it, the bonus may be smaller."}',
             'value_es' => '{"0":"En la mayoría de los casos, sí: se requiere un código promocional para activar el bono durante el registro. Sin él, el bono puede ser menor."}',
             'value_fr' => '{"0":"Dans la plupart des cas, oui — un code promo est nécessaire pour activer le bonus lors de l’inscription. Sans celui-ci, le bonus peut être moindre."}',
             'value_pt' => '{"0":"Na maioria dos casos, sim — é necessário um código promocional para ativar o bônus durante o registro. Sem ele, o bônus pode ser menor."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 37
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to receive the bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para recibir el bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour recevoir le bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para receber o bônus?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 38
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"It depends on the region and the chosen bonus. For accumulator bets on sports, the minimum deposit starts from $2, for single bets on sports — from $1, and for casino games — from $3."}',
             'value_es' => '{"0":"Depende de la región y del bono seleccionado. Para apuestas combinadas en deportes, el depósito mínimo comienza desde $2, para apuestas simples en deportes — desde $1, y para juegos de casino — desde $3."}',
             'value_fr' => '{"0":"Cela dépend de la région et du bonus choisi. Pour les paris combinés sur le sport, le dépôt minimum commence à partir de 2 $, pour les paris simples sur le sport — à partir de 1 $, et pour les jeux de casino — à partir de 3 $."}',
             'value_pt' => '{"0":"Depende da região e do bônus escolhido. Para apostas acumuladas em esportes, o depósito mínimo começa a partir de $2, para apostas simples em esportes — a partir de $1, e para jogos de cassino — a partir de $3."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 39
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Can promotions be unavailable in my country?"}',
             'value_es' => '{"0":"¿Pueden las promociones no estar disponibles en mi país?"}',
             'value_fr' => '{"0":"Les promotions peuvent-elles être indisponibles dans mon pays ?"}',
             'value_pt' => '{"0":"As promoções podem estar indisponíveis no meu país?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 40
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"Yes. Due to regulatory restrictions or local laws, some promotions or promo codes may not be valid in certain countries."}',
             'value_es' => '{"0":"Sí. Debido a restricciones regulatorias o leyes locales, algunas promociones o códigos promocionales pueden no estar vigentes en ciertos países."}',
             'value_fr' => '{"0":"Oui. En raison de restrictions réglementaires ou de lois locales, certaines promotions ou codes promotionnels peuvent ne pas être valables dans certains pays."}',
             'value_pt' => '{"0":"Sim. Devido a restrições regulatórias ou leis locais, algumas promoções ou códigos promocionais podem não ser válidos em determinados países."}',
             'order' => 40
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 41
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"What should I do if my bet does not meet the minimum odds or other conditions?"}',
             'value_es' => '{"0":"¿Qué debo hacer si mi apuesta no cumple con las cuotas mínimas u otras condiciones?"}',
             'value_fr' => '{"0":"Que faire si mon pari ne respecte pas les cotes minimales ou d’autres conditions ?"}',
             'value_pt' => '{"0":"O que fazer se minha aposta não atender às odds mínimas ou a outras condições?"}',
             'order' => 41
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 42
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"If the bet does not meet the promotion requirements (for example, an accumulator with too few events or odds below the minimum allowed), the bonus may not be credited, or the wagering requirement may not count. It is therefore better to adjust your bet."}',
             'value_es' => '{"0":"Si la apuesta no cumple con los requisitos de la promoción (por ejemplo, un combinada con demasiados pocos eventos o cuotas inferiores al mínimo permitido), el bono puede no ser acreditado o el requisito de apuesta no se contará. Por lo tanto, es mejor ajustar la apuesta."}',
             'value_fr' => '{"0":"Si le pari ne respecte pas les conditions de la promotion (par exemple, un combiné avec trop peu d’événements ou des cotes inférieures au minimum autorisé), le bonus peut ne pas être crédité ou le pari requis ne sera pas comptabilisé. Il est donc préférable d’ajuster votre pari."}',
             'value_pt' => '{"0":"Se a aposta não atender aos requisitos da promoção (por exemplo, um acumulador com eventos insuficientes ou odds abaixo do mínimo permitido), o bônus pode não ser creditado ou o requisito de aposta pode não ser contabilizado. Portanto, é melhor ajustar a aposta."}',
             'order' => 42
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 43
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use bonuses simultaneously for sports bets and casino games?"}',
             'value_es' => '{"0":"¿Puedo usar los bonos simultáneamente para apuestas deportivas y juegos de casino?"}',
             'value_fr' => '{"0":"Puis-je utiliser les bonus à la fois pour les paris sportifs et les jeux de casino ?"}',
             'value_pt' => '{"0":"Posso usar os bônus simultaneamente para apostas esportivas e jogos de cassino?"}',
             'order' => 43
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbet',
             'order' => 44
            ],
            ['key' => '1xbet',
             'bookmaker_id' => 1,
             'component' => 'p',
             'value_en' => '{"0":"No, the welcome bonus can be used either for accumulator sports bets, single sports bets, or for casino games."}',
             'value_es' => '{"0":"No, el bono de bienvenida se puede usar solo para apuestas deportivas combinadas, apuestas deportivas simples o para juegos de casino."}',
             'value_fr' => '{"0":"Non, le bonus de bienvenue peut être utilisé soit pour les paris combinés sportifs, soit pour les paris simples sportifs, soit pour les jeux de casino."}',
             'value_pt' => '{"0":"Não, o bônus de boas-vindas pode ser usado apenas para apostas esportivas acumuladas, apostas esportivas simples ou para jogos de cassino."}',
             'order' => 44
            ]
        );
    }
}
