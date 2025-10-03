<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1winPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 1
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win is an international platform for online sports betting and casino games. The company pays special attention to bonus programs and promotional offers. That is why users are offered a wide range of promotions on the website and in the mobile app, starting with a welcome package for new players and continuing with ongoing bonuses for active customers."}',
             'value_es' => '{"0":"1win es una plataforma internacional para apuestas deportivas en línea y juegos de casino. La compañía presta especial atención a los programas de bonificación y a las ofertas promocionales. Por eso, los usuarios disponen de una amplia gama de promociones en el sitio web y en la aplicación móvil, que comienzan con un paquete de bienvenida para los nuevos jugadores y continúan con bonos permanentes para los clientes activos."}',
             'value_fr' => '{"0":"1win est une plateforme internationale de paris sportifs en ligne et de jeux de casino. L’entreprise accorde une attention particulière aux programmes de bonus et aux offres promotionnelles. C’est pourquoi une large gamme de promotions est proposée aux utilisateurs sur le site web et dans l’application mobile, allant du pack de bienvenue pour les nouveaux joueurs jusqu’aux bonus réguliers pour les clients actifs."}',
             'value_pt' => '{"0":"1win é uma plataforma internacional para apostas esportivas online e jogos de cassino. A empresa dá especial atenção aos programas de bônus e às ofertas promocionais. Por isso, os usuários encontram uma ampla variedade de promoções no site e no aplicativo móvel, que começam com um pacote de boas-vindas para novos jogadores e seguem com bônus permanentes para clientes ativos."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 2
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a closer look at all the available offers, explain the terms of activation and wagering requirements, and answer the most frequently asked questions related to the use of promo codes."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle todas las ofertas disponibles, explicaremos las condiciones de activación y los requisitos de apuesta, y responderemos a las preguntas más frecuentes relacionadas con el uso de códigos promocionales."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail toutes les offres disponibles, expliquerons les conditions d’activation et les exigences de mise, et répondrons aux questions les plus fréquentes concernant l’utilisation des codes promotionnels."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar todas as ofertas disponíveis, explicar as condições de ativação e os requisitos de apostas, além de responder às perguntas mais frequentes relacionadas ao uso de códigos promocionais."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 3
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 4
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"New users can enter the promo code :promocode during the account creation stage to receive extra funds in their bonus account. To do this, simply visit the official website, click on the “Register” button, and fill out the form. Select ‘Add promo code’ and a field will appear where you should enter our promo code :promocode."}',
             'value_es' => '{"0":"Los nuevos usuarios pueden introducir el código promocional :promocode durante el proceso de creación de cuenta y recibir fondos adicionales en su cuenta de bonificación. Para ello, basta con acceder al sitio web oficial, hacer clic en el botón «Registro» y completar el formulario. Luego, seleccione ‘Añadir código promocional’ y aparecerá un campo en el que deberá introducir nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"Les nouveaux utilisateurs peuvent saisir le code promotionnel :promocode dès l’étape de création de leur compte afin de recevoir des fonds supplémentaires sur leur compte bonus. Pour ce faire, il suffit d’accéder au site officiel, de cliquer sur le bouton « Inscription » et de remplir le formulaire. Cliquez sur ‘Ajouter un code promo’, puis un champ apparaîtra pour y saisir notre code :promocode."}',
             'value_pt' => '{"0":"Novos usuários podem inserir o código promocional :promocode já na etapa de criação da conta para receber fundos extras na conta de bônus. Para isso, basta acessar o site oficial, clicar no botão «Registro» e preencher o formulário. Em seguida, clique em ‘Adicionar código promocional’ e aparecerá um campo onde você deve inserir o código :promocode."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 5
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To receive the +100% bonus, you need to make a deposit between $3 and $500. Keep in mind that the size of the bonus depends on the amount of your deposit — the larger the deposit, the bigger the bonus."}',
             'value_es' => '{"0":"Para recibir el bono del +100% es necesario realizar un depósito de entre 3 y 500 dólares. Tenga en cuenta que el monto del bono depende de la cantidad depositada: cuanto mayor sea el depósito, mayor será el bono."}',
             'value_fr' => '{"0":"Pour obtenir le bonus de +100 %, il est nécessaire d’effectuer un dépôt compris entre 3 et 500 dollars. Notez que le montant du bonus dépend de la somme déposée : plus le dépôt est élevé, plus le bonus sera important."}',
             'value_pt' => '{"0":"Para receber o bônus de +100%, é necessário fazer um depósito entre 3 e 500 dólares. Tenha em mente que o valor do bônus depende do valor do depósito: quanto maior o depósito, maior será o bônus."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 6
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In order to withdraw bonus funds, you must first meet the wagering requirements. This means wagering the bonus amount 40 times."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, primero hay que cumplir con los requisitos de apuesta. Esto implica apostar 40 veces el importe del bono."}',
             'value_fr' => '{"0":"Afin de pouvoir retirer les fonds du bonus, il faut d’abord respecter les conditions de mise, ce qui implique de miser le montant du bonus 40 fois."}',
             'value_pt' => '{"0":"Para poder sacar os fundos de bônus, é preciso primeiro cumprir os requisitos de apostas. Isso significa apostar o valor do bônus 40 vezes."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 7
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 8
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 9
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"1win actively supports its regular users. For those who already have an account, there are ongoing promotions such as casino cashback, bonuses for multi-bets, and bonuses on the first four deposits. In addition, thanks to the 1win Wheel promotion, users can receive various rewards every day, including Bitcoin, real money, vouchers, 1win Coins, free bets, and free spins."}',
             'value_es' => '{"0":"1win apoya activamente a sus usuarios habituales. Para quienes ya tienen una cuenta, hay promociones regulares como cashback en el casino, bonos por apuestas múltiples y bonos en los primeros cuatro depósitos. Además, con la promoción 1win Wheel, cada día es posible obtener diferentes recompensas: Bitcoin, dinero real, vales, 1win Coins, apuestas gratis y giros gratis."}',
             'value_fr' => '{"0":"1win soutient activement ses utilisateurs réguliers. Pour ceux qui possèdent déjà un compte, des promotions régulières sont disponibles, telles que le cashback au casino, les bonus sur les paris combinés et les bonus sur les quatre premiers dépôts. De plus, grâce à la promotion 1win Wheel, il est possible de recevoir chaque jour divers cadeaux : Bitcoin, argent réel, bons, 1win Coins, paris gratuits et tours gratuits."}',
             'value_pt' => '{"0":"A 1win apoia ativamente os seus utilizadores regulares. Para aqueles que já possuem uma conta, estão disponíveis promoções regulares, como cashback no cassino, bônus por apostas múltiplas e bônus nos quatro primeiros depósitos. Além disso, com a promoção 1win Wheel, é possível receber diariamente diferentes prêmios: Bitcoin, dinheiro real, vouchers, 1win Coins, apostas grátis e rodadas grátis."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 10
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The platform continuously updates its list of offers so that even experienced players can benefit from additional advantages."}',
             'value_es' => '{"0":"La plataforma actualiza constantemente su lista de ofertas para que incluso los jugadores más experimentados puedan aprovechar beneficios adicionales."}',
             'value_fr' => '{"0":"La plateforme met continuellement à jour sa liste d’offres afin que même les joueurs expérimentés puissent profiter d’avantages supplémentaires."}',
             'value_pt' => '{"0":"A plataforma atualiza constantemente a sua lista de ofertas para que até mesmo os jogadores mais experientes possam obter vantagens adicionais."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 11
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 12
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, 1win offers several no-deposit promotions where players can receive various rewards. Every day, you can take part in the 1win Wheel promotion by simply logging into your account and spinning the wheel."}',
             'value_es' => '{"0":"Actualmente, 1win ofrece varias promociones sin depósito en las que los jugadores pueden obtener diferentes recompensas. Cada día puedes participar en la promoción 1win Wheel, solo necesitas iniciar sesión en tu cuenta y girar la ruleta."}',
             'value_fr' => '{"0":"Actuellement, 1win propose plusieurs promotions sans dépôt permettant aux joueurs de recevoir diverses récompenses. Chaque jour, vous pouvez participer à la promotion 1win Wheel en vous connectant simplement à votre compte et en faisant tourner la roue."}',
             'value_pt' => '{"0":"Atualmente, a 1win oferece várias promoções sem depósito onde os jogadores podem receber diferentes recompensas. Todos os dias é possível participar da promoção 1win Wheel, bastando entrar na sua conta e girar a roleta."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 13
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"You can also get an additional 200 1win Coins just for installing the mobile app on Android or iOS. Another 100 1win Coins are available for subscribing to push notifications. By linking a loyalty card, you will also receive 100 1win Coins."}',
             'value_es' => '{"0":"Además, puedes recibir 200 1win Coins adicionales simplemente por instalar la aplicación móvil en Android o iOS. También se pueden obtener 100 1win Coins por suscribirse a las notificaciones push. Y al vincular una tarjeta de fidelidad, recibirás otros 100 1win Coins."}',
             'value_fr' => '{"0":"Vous pouvez également obtenir 200 1win Coins supplémentaires simplement en installant l’application mobile sur Android ou iOS. De plus, 100 1win Coins sont offerts pour l’abonnement aux notifications push. En liant une carte de fidélité, vous recevrez également 100 1win Coins."}',
             'value_pt' => '{"0":"Também é possível receber 200 1win Coins adicionais apenas por instalar o aplicativo móvel no Android ou iOS. Além disso, você pode ganhar 100 1win Coins ao se inscrever para receber notificações push. E ao vincular um cartão de fidelidade, você também recebe 100 1win Coins."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 14
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome Bonus"}',
                'value_es' => '{"0":"Bono de bienvenida"}',
                'value_fr' => '{"0":"Bonus de bienvenue"}',
                'value_pt' => '{"0":"Bônus de boas-vindas"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 15
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"This is the main bonus for new 1win players. After registration and the first deposit, the user receives a 100% bonus. For example, by depositing from $3 to $500, you can get the same amount credited to your account."}',
             'value_es' => '{"0":"Este es el bono principal para los nuevos jugadores de 1win. Tras el registro y el primer depósito, el usuario recibe un bono del 100%. Por ejemplo, al depositar entre 3 y 500 dólares, puedes obtener la misma cantidad adicional en tu cuenta."}',
             'value_fr' => '{"0":"C’est le bonus principal pour les nouveaux joueurs de 1win. Après l’inscription et le premier dépôt, l’utilisateur reçoit un bonus de 100 %. Par exemple, en déposant entre 3 et 500 dollars, vous pouvez obtenir le même montant crédité sur votre compte."}',
             'value_pt' => '{"0":"Este é o principal bónus para novos jogadores da 1win. Após o registo e o primeiro depósito, o utilizador recebe um bónus de 100%. Por exemplo, ao depositar entre 3 e 500 dólares, pode receber o mesmo valor adicional na sua conta."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 16
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"But the welcome program does not end there. After the second deposit, you can receive +120% on your bonus balance, after the third +130%, and after the fourth +150%."}',
             'value_es' => '{"0":"Pero el programa de bienvenida no termina ahí. Después del segundo depósito puedes recibir un +120% en tu saldo de bono, tras el tercero +130% y después del cuarto +150%."}',
             'value_fr' => '{"0":"Mais le programme de bienvenue ne s’arrête pas là. Après le deuxième dépôt, vous pouvez recevoir +120 % sur votre solde bonus, après le troisième +130 %, et après le quatrième +150 %."}',
             'value_pt' => '{"0":"Mas o programa de boas-vindas não termina aí. Após o segundo depósito pode receber +120% no saldo de bónus, após o terceiro +130% e depois do quarto +150%."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 17
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw the bonus funds, you first need to meet the wagering requirements. The bonus amount must be wagered 40 times."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, primero es necesario cumplir con los requisitos de apuesta. El importe del bono debe apostarse 40 veces."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds bonus, il est nécessaire de remplir les conditions de mise. Le montant du bonus doit être misé 40 fois."}',
             'value_pt' => '{"0":"Para poder levantar os fundos de bónus, é necessário primeiro cumprir os requisitos de apostas. O montante do bónus deve ser apostado 40 vezes."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 18
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 19
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Casino Cashback"}',
                'value_es' => '{"0":"Reembolso de Casino"}',
                'value_fr' => '{"0":"Cashback de Casino"}',
                'value_pt' => '{"0":"Cashback de Cassino"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 20
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"The Casino Cashback promotion is designed for regular players who actively play in the casino. Each week, 30% of lost funds is credited as cashback. The maximum cashback amount can reach several hundred dollars, depending on the player’s activity."}',
             'value_es' => '{"0":"La promoción de Casino Cashback está destinada a los jugadores habituales que participan activamente en el casino. Cada semana se acredita el 30% de los fondos perdidos como reembolso. El monto máximo de cashback puede alcanzar varios cientos de dólares, según la actividad del jugador."}',
             'value_fr' => '{"0":"La promotion Casino Cashback est destinée aux joueurs réguliers qui jouent activement au casino. Chaque semaine, 30 % des pertes sont créditées sous forme de cashback. Le montant maximum du cashback peut atteindre plusieurs centaines de dollars, selon l’activité du joueur."}',
             'value_pt' => '{"0":"A promoção Casino Cashback é destinada aos jogadores regulares que jogam ativamente no cassino. A cada semana, 30% dos valores perdidos são creditados como reembolso. O valor máximo de cashback pode chegar a várias centenas de dólares, dependendo da atividade do jogador."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 21
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"It is important to note that the received funds can be immediately used for casino bets or withdrawn to a bank account."}',
             'value_es' => '{"0":"Es importante destacar que los fondos recibidos pueden utilizarse inmediatamente para apuestas en el casino o retirarse a una cuenta bancaria."}',
             'value_fr' => '{"0":"Il est important de noter que les fonds reçus peuvent être utilisés immédiatement pour parier au casino ou être retirés sur un compte bancaire."}',
             'value_pt' => '{"0":"É importante destacar que os valores recebidos podem ser usados imediatamente para apostas no cassino ou retirados para uma conta bancária."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 22
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 23
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus on a multiple bet"}',
                'value_es' => '{"0":"Bono por apuesta combinada"}',
                'value_fr' => '{"0":"Bonus sur un pari combiné"}',
                'value_pt' => '{"0":"Bônus em aposta múltipla"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 24
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"In this promotion, if you place a bet with 5 or more events, a percentage of the winnings is added to the net profit. The more events included in the accumulator, the higher the additional bonus."}',
             'value_es' => '{"0":"En esta promoción, si realizas una apuesta con 5 o más eventos, se añade un porcentaje de las ganancias al beneficio neto. Cuantos más eventos tenga la combinada, mayor será el bono adicional."}',
             'value_fr' => '{"0":"Dans cette promotion, si vous placez un pari comprenant 5 événements ou plus, un pourcentage des gains est ajouté au profit net. Plus le nombre d’événements dans le combiné est élevé, plus le bonus supplémentaire est important."}',
             'value_pt' => '{"0":"Nesta promoção, ao fazer uma aposta com 5 ou mais eventos, um percentual dos ganhos é adicionado ao lucro líquido. Quanto mais eventos houver no acumulador, maior será o bônus adicional."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 25
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"You can receive extra percentages on your winnings according to the following scale:"}',
             'value_es' => '{"0":"Puedes recibir porcentajes extra sobre tus ganancias según la siguiente escala:"}',
             'value_fr' => '{"0":"Vous pouvez recevoir des pourcentages supplémentaires sur vos gains selon l’échelle suivante :"}',
             'value_pt' => '{"0":"Você pode receber percentuais extras sobre seus ganhos de acordo com a seguinte escala:"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 26
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'list_v2',
             'value_en' => '{"0":"for 5 events in the accumulator you get +7% to the winnings",
                             "1":"for 6 events in the accumulator you get +8% to the winnings",
                             "2":"for 7 events in the accumulator you get +9% to the winnings",
                             "3":"for 8 events in the accumulator you get +10% to the winnings",
                             "4":"for 9 events in the accumulator you get +11% to the winnings",
                             "5":"for 10 events in the accumulator you get +10% to the winnings",
                             "6":"for 11 events in the accumulator you get +15% to the winnings"}',
             'value_es' => '{"0":"por 5 eventos en la combinada obtendrás +7% de las ganancias",
                             "1":"por 6 eventos en la combinada obtendrás +8% de las ganancias",
                             "2":"por 7 eventos en la combinada obtendrás +9% de las ganancias",
                             "3":"por 8 eventos en la combinada obtendrás +10% de las ganancias",
                             "4":"por 9 eventos en la combinada obtendrás +11% de las ganancias",
                             "5":"por 10 eventos en la combinada obtendrás +10% de las ganancias",
                             "6":"por 11 eventos en la combinada obtendrás +15% de las ganancias"}',
             'value_fr' => '{"0":"pour 5 événements dans le combiné vous obtenez +7% sur les gains",
                             "1":"pour 6 événements dans le combiné vous obtenez +8% sur les gains",
                             "2":"pour 7 événements dans le combiné vous obtenez +9% sur les gains",
                             "3":"pour 8 événements dans le combiné vous obtenez +10% sur les gains",
                             "4":"pour 9 événements dans le combiné vous obtenez +11% sur les gains",
                             "5":"pour 10 événements dans le combiné vous obtenez +10% sur les gains",
                             "6":"pour 11 événements dans le combiné vous obtenez +15% sur les gains"}',
             'value_pt' => '{"0":"por 5 eventos no acumulador você recebe +7% nos ganhos",
                             "1":"por 6 eventos no acumulador você recebe +8% nos ganhos",
                             "2":"por 7 eventos no acumulador você recebe +9% nos ganhos",
                             "3":"por 8 eventos no acumulador você recebe +10% nos ganhos",
                             "4":"por 9 eventos no acumulador você recebe +11% nos ganhos",
                             "5":"por 10 eventos no acumulador você recebe +10% nos ganhos",
                             "6":"por 11 eventos no acumulador você recebe +15% nos ganhos"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 27
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 28
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h2',
                'value_en' => '{"0":"1win FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1win"}',
                'value_fr' => '{"0":"FAQ de 1win"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1win"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 29
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can a promo code be activated after completing registration?"}',
             'value_es' => '{"0":"¿Se puede activar un código promocional después de completar el registro?"}',
             'value_fr' => '{"0":"Peut-on activer un code promo après avoir terminé l\'inscription ?"}',
             'value_pt' => '{"0":"É possível ativar um código promocional após concluir o registro?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 30
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"No, the promo code must be entered during registration."}',
             'value_es' => '{"0":"No, el código promocional debe introducirse durante el registro."}',
             'value_fr' => '{"0":"Non, le code promo doit être saisi lors de l\'inscription."}',
             'value_pt' => '{"0":"Não, o código promocional deve ser inserido durante o registro."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 31
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit required to activate the bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo necesario para activar el bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum requis pour activer le bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo necessário para ativar o bônus?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 32
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"You need to deposit at least 3 dollars or the equivalent in another currency. The bonus is activated after making the first deposit, and additional funds are credited to your balance."}',
             'value_es' => '{"0":"Es necesario depositar al menos 3 dólares o el equivalente en otra moneda. El bono se activa después de realizar el primer depósito y se acreditan fondos adicionales en su saldo."}',
             'value_fr' => '{"0":"Il faut déposer au moins 3 dollars ou l’équivalent dans une autre devise. Le bonus s’active après le premier dépôt et des fonds supplémentaires sont crédités sur votre solde."}',
             'value_pt' => '{"0":"É necessário depositar pelo menos 3 dólares ou o equivalente em outra moeda. O bônus é ativado após o primeiro depósito e fundos adicionais são creditados no seu saldo."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 33
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used to activate bonuses?"}',
             'value_es' => '{"0":"¿Se puede utilizar criptomoneda para activar los bonos?"}',
             'value_fr' => '{"0":"Peut-on utiliser des cryptomonnaies pour activer les bonus ?"}',
             'value_pt' => '{"0":"É possível usar criptomoedas para ativar os bônus?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 34
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, cryptocurrency deposits also participate in bonus programs."}',
             'value_es' => '{"0":"Sí, los depósitos en criptomonedas también participan en los programas de bonificación."}',
             'value_fr' => '{"0":"Oui, les dépôts en cryptomonnaies participent également aux programmes de bonus."}',
             'value_pt' => '{"0":"Sim, os depósitos em criptomoedas também participam dos programas de bônus."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 35
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Are there no deposit bonuses at 1win?"}',
             'value_es' => '{"0":"¿Existen bonos sin depósito en 1win?"}',
             'value_fr' => '{"0":"Existe-t-il des bonus sans dépôt sur 1win ?"}',
             'value_pt' => '{"0":"Existem bónus sem depósito na 1win?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 36
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"Yes, there are. These include the 1win Wheel, a bonus for installing the mobile app, a bonus for subscribing to push notifications, and for linking a loyalty card."}',
             'value_es' => '{"0":"Sí, existen. Incluyen la 1win Wheel, un bono por instalar la aplicación móvil, un bono por suscribirse a las notificaciones push y por vincular la tarjeta de fidelidad."}',
             'value_fr' => '{"0":"Oui, ils existent. Il s\'agit de la 1win Wheel, d\'un bonus pour l\'installation de l\'application mobile, d\'un bonus pour l\'abonnement aux notifications push et pour la liaison de la carte de fidélité."}',
             'value_pt' => '{"0":"Sim, existem. Incluem a 1win Wheel, um bónus por instalar a aplicação móvel, um bónus por subscrever as notificações push e por associar o cartão de fidelidade."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 37
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonus funds be withdrawn without wagering?"}',
             'value_es' => '{"0":"¿Se pueden retirar los fondos de bonificación sin requisitos de apuesta?"}',
             'value_fr' => '{"0":"Peut-on retirer les fonds bonus sans conditions de mise ?"}',
             'value_pt' => '{"0":"É possível levantar os fundos de bónus sem requisitos de apostas?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1win',
             'order' => 38
            ],
            ['key' => '1win',
             'bookmaker_id' => 4,
             'component' => 'p',
             'value_en' => '{"0":"No, withdrawals are only possible after meeting the wagering requirements. This is standard practice at most betting companies."}',
             'value_es' => '{"0":"No, los retiros solo son posibles después de cumplir con los requisitos de apuesta. Esta es una práctica estándar en la mayoría de las casas de apuestas."}',
             'value_fr' => '{"0":"Non, les retraits ne sont possibles qu\'après avoir respecté les exigences de mise. C\'est une pratique courante dans la plupart des sociétés de paris."}',
             'value_pt' => '{"0":"Não, os levantamentos só são possíveis após cumprir os requisitos de aposta. Esta é uma prática comum na maioria das casas de apostas."}',
             'order' => 38
            ]
        );
    }
}
