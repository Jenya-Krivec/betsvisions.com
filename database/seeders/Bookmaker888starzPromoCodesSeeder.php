<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker888starzPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 1
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz is a modern international bookmaker where you can bet on sports and play casino games. One of the reasons for this bookmaker’s popularity is its bonus system, which includes welcome offers for new players, cashback, tournaments, and regular promotions for loyal customers."}',
             'value_es' => '{"0":"888Starz es una casa de apuestas internacional moderna donde se pueden realizar apuestas deportivas y jugar en el casino. Una de las razones de su popularidad es su sistema de bonificaciones, que incluye ofertas de bienvenida para nuevos jugadores, reembolsos, torneos y promociones regulares para clientes habituales."}',
             'value_fr' => '{"0":"888Starz est un bookmaker international moderne où l’on peut parier sur le sport et jouer au casino. L’une des raisons de la popularité de ce site réside dans son système de bonus, qui comprend des offres de bienvenue pour les nouveaux joueurs, du cashback, des tournois et des promotions régulières pour les clients fidèles."}',
             'value_pt' => '{"0":"888Starz é uma casa de apostas internacional moderna onde é possível fazer apostas esportivas e jogar no cassino. Um dos motivos da popularidade do site é o seu sistema de bônus, que inclui ofertas de boas-vindas para novos jogadores, cashback, torneios e promoções regulares para clientes fiéis."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 2
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a closer look at some of these promotions and explain how to get extra funds on your bonus account using the promo code :promocode after your first deposit."}',
             'value_es' => '{"0":"En esta reseña analizaremos con más detalle algunas de estas promociones y explicaremos cómo obtener fondos adicionales en tu cuenta de bonificación utilizando el código promocional :promocode después del primer depósito."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons plus en détail certaines de ces promotions et expliquerons comment obtenir des fonds supplémentaires sur votre compte bonus en utilisant le code promo :promocode après votre premier dépôt."}',
             'value_pt' => '{"0":"Nesta análise, vamos examinar mais detalhadamente algumas dessas promoções e explicar como obter fundos extras na sua conta de bônus usando o código promocional :promocode após o primeiro depósito."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 3
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 4
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode, you first need to complete the registration process on the 888Starz website. You can create an account using your email, phone number, social networks, or in one click. Make sure to fill in all registration fields with accurate information, as you will later need to verify your identity."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode, primero debes completar el proceso de registro en el sitio web de 888Starz. Puedes crear una cuenta con tu correo electrónico, número de teléfono, redes sociales o en un solo clic. Asegúrate de completar todos los campos del formulario con información veraz, ya que más adelante será necesario verificar tu identidad."}',
             'value_fr' => '{"0":"Pour utiliser le code promo :promocode, vous devez d’abord compléter la procédure d’inscription sur le site 888Starz. Vous pouvez créer un compte à l’aide de votre adresse e-mail, de votre numéro de téléphone, via les réseaux sociaux ou en un seul clic. Assurez-vous de remplir tous les champs du formulaire avec des informations exactes, car vous devrez ensuite vérifier votre identité."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode, primeiro é necessário concluir o processo de registro no site da 888Starz. Você pode criar uma conta usando seu e-mail, número de telefone, redes sociais ou com um clique. Certifique-se de preencher todos os campos com informações corretas, pois será necessário verificar sua identidade mais tarde."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 5
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"During registration, you can enter the promo code :promocode, which activates an additional bonus. You can choose one of two bonuses — for sports betting or for casino games."}',
             'value_es' => '{"0":"Durante el registro, puedes ingresar el código promocional :promocode, que activará un bono adicional. Puedes elegir entre dos tipos de bonos: uno para apuestas deportivas o uno para juegos de casino."}',
             'value_fr' => '{"0":"Lors de l’inscription, vous pouvez saisir le code promo :promocode, qui activera un bonus supplémentaire. Vous pouvez choisir l’un des deux bonus proposés : pour les paris sportifs ou pour les jeux de casino."}',
             'value_pt' => '{"0":"Durante o registro, é possível inserir o código promocional :promocode, que ativa um bônus adicional. Você pode escolher entre dois tipos de bônus: um para apostas esportivas ou outro para jogos de cassino."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 6
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"If you choose the sports betting bonus, after depositing between $1 and $100, you will receive +120% of the deposit amount to your bonus account. If you choose the casino bonus, after depositing between $10 and $300, you will receive +100% of the deposit amount and 30 free spins."}',
             'value_es' => '{"0":"Si eliges el bono para apuestas deportivas, al depositar entre $1 y $100 recibirás un +120% del monto depositado en tu cuenta de bonificación. Si eliges el bono de casino, al depositar entre $10 y $300 recibirás un +100% del monto del depósito y 30 giros gratis."}',
             'value_fr' => '{"0":"Si vous choisissez le bonus pour les paris sportifs, après un dépôt compris entre 1 $ et 100 $, vous recevrez +120 % du montant du dépôt sur votre compte bonus. Si vous optez pour le bonus de casino, après un dépôt compris entre 10 $ et 300 $, vous recevrez +100 % du montant du dépôt ainsi que 30 tours gratuits."}',
             'value_pt' => '{"0":"Se escolher o bônus para apostas esportivas, ao depositar entre US$ 1 e US$ 100, você receberá +120% do valor do depósito em sua conta de bônus. Se escolher o bônus de cassino, ao depositar entre US$ 10 e US$ 300, você receberá +100% do valor do depósito e 30 giros grátis."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 7
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 8
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Please note! To be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"¡Atención! Para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Attention ! Pour pouvoir retirer les fonds du bonus, il est nécessaire de remplir les conditions de mise."}',
             'value_pt' => '{"0":"Atenção! Para poder sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de aposta."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 9
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Sports betting bonuses must be wagered 10 times the bonus amount on accumulator bets. Each accumulator must include at least 3 events, and at least 3 of those events must have odds of 1.4 or higher. Create your bet slip, enter the stake amount, select the bonus account, and click the «Place Bet» button."}',
             'value_es' => '{"0":"Los bonos de apuestas deportivas deben apostarse 10 veces el monto del bono en apuestas combinadas. Cada combinación debe incluir al menos 3 eventos, y al menos 3 de ellos deben tener cuotas de 1.4 o superiores. Crea tu boleto de apuesta, ingresa el monto, selecciona la cuenta de bono y haz clic en el botón «Realizar apuesta»."}',
             'value_fr' => '{"0":"Les bonus pour les paris sportifs doivent être misés 10 fois le montant du bonus sur des paris combinés. Chaque combiné doit inclure au moins 3 événements, et au moins 3 d’entre eux doivent avoir une cote de 1.4 ou plus. Créez votre coupon de pari, saisissez le montant de la mise, sélectionnez le compte bonus et cliquez sur le bouton « Placer le pari »."}',
             'value_pt' => '{"0":"Os bônus de apostas esportivas devem ser apostados 10 vezes o valor do bônus em apostas múltiplas. Cada múltipla deve incluir pelo menos 3 eventos, e pelo menos 3 desses eventos devem ter odds de 1.4 ou superiores. Crie seu bilhete de aposta, insira o valor, selecione a conta de bônus e clique no botão «Fazer aposta»."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 10
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 35 times the bonus amount within 7 days after activation. When wagering, it is not allowed to place bets higher than $5."}',
             'value_es' => '{"0":"Los bonos de casino deben apostarse 35 veces el valor del bono dentro de los 7 días posteriores a la activación. Durante el proceso de apuesta, no se permiten apuestas superiores a $5."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 35 fois le montant du bonus dans un délai de 7 jours après l’activation. Il est interdit de placer des mises supérieures à 5 $ pendant le processus de mise."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. Durante o processo de apostas, não é permitido fazer apostas superiores a US$ 5."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 11
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 12
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, 888Starz supports regular customers and offers ongoing promotions that go beyond just welcome bonuses. Registered users can participate in tournaments with large prize pools, receive cashback, bonuses for activity, or for repeated deposits. There are also weekend programs — for example, you can get a +100% bonus after making a deposit on Sunday. On your birthday, you can receive free bets and free spins."}',
             'value_es' => '{"0":"Sí, 888Starz apoya a sus clientes habituales y ofrece promociones regulares que no se limitan solo a los bonos de bienvenida. Los usuarios registrados pueden participar en torneos con grandes premios, recibir reembolsos, bonos por actividad o por depósitos repetidos. También existen programas de fin de semana; por ejemplo, puedes obtener un bono del +100% tras realizar un depósito el domingo. En tu cumpleaños, puedes recibir apuestas gratuitas y giros gratis."}',
             'value_fr' => '{"0":"Oui, 888Starz soutient ses clients réguliers et propose des promotions continues qui ne se limitent pas uniquement aux bonus de bienvenue. Les utilisateurs enregistrés peuvent participer à des tournois avec de gros fonds de prix, recevoir du cashback, des bonus d’activité ou pour des dépôts répétés. Des programmes spéciaux de week-end sont également disponibles — par exemple, vous pouvez obtenir un bonus de +100 % après un dépôt effectué le dimanche. Le jour de votre anniversaire, vous pouvez recevoir des paris gratuits et des tours gratuits."}',
             'value_pt' => '{"0":"Sim, a 888Starz apoia seus clientes regulares e oferece promoções contínuas que vão além dos bônus de boas-vindas. Os usuários registrados podem participar de torneios com grandes prêmios, receber cashback, bônus por atividade ou por depósitos repetidos. Há também programas de fim de semana — por exemplo, é possível obter um bônus de +100% após fazer um depósito no domingo. No dia do seu aniversário, você pode receber apostas grátis e rodadas grátis."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 13
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Regular players are encouraged to subscribe to the 888Starz newsletter or check the «Promotions» section to avoid missing new offers, as they are updated regularly. The loyalty bonus system is one of the brand’s strongest advantages."}',
             'value_es' => '{"0":"Se recomienda a los jugadores habituales suscribirse al boletín informativo de 888Starz o revisar la sección «Promociones» para no perderse las nuevas ofertas, ya que se actualizan constantemente. El sistema de bonificación para clientes fieles es uno de los puntos más fuertes de la marca."}',
             'value_fr' => '{"0":"Les joueurs réguliers sont encouragés à s’abonner à la newsletter de 888Starz ou à consulter la section «Promotions» afin de ne pas manquer les nouvelles offres, qui sont régulièrement mises à jour. Le programme de fidélité est l’un des atouts majeurs de la marque."}',
             'value_pt' => '{"0":"Os jogadores frequentes são incentivados a se inscrever na newsletter da 888Starz ou verificar a seção «Promoções» para não perder novas ofertas, que são atualizadas regularmente. O sistema de bônus de fidelidade é um dos pontos fortes da marca."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 14
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 15
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses on 888Starz appear periodically as part of promotions. Unfortunately, such offers are not available at the moment. We recommend subscribing to the 888Starz newsletter or checking the «Bonuses» section to avoid missing new offers, as they are updated regularly."}',
             'value_es' => '{"0":"Los bonos sin depósito en 888Starz aparecen periódicamente como parte de promociones. Lamentablemente, en este momento no hay tales ofertas disponibles. Te recomendamos suscribirte al boletín de 888Starz o revisar la sección «Bonos» para no perderte las nuevas promociones, ya que se actualizan con frecuencia."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sur 888Starz apparaissent périodiquement dans le cadre de promotions. Malheureusement, de telles offres ne sont pas disponibles pour le moment. Nous vous recommandons de vous abonner à la newsletter de 888Starz ou de consulter la section «Bonus» afin de ne pas manquer les nouvelles offres, car elles sont régulièrement mises à jour."}',
             'value_pt' => '{"0":"Os bônus sem depósito na 888Starz aparecem periodicamente como parte de promoções. Infelizmente, essas ofertas não estão disponíveis no momento. Recomendamos inscrever-se na newsletter da 888Starz ou verificar a seção «Bônus» para não perder novas ofertas, pois elas são atualizadas regularmente."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 16
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 17
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This is a rewards system for the most active players. All users automatically participate in the loyalty program, which consists of 8 levels. The more bets a player places, the higher their status and cashback percentage."}',
             'value_es' => '{"0":"Es un sistema de recompensas para los jugadores más activos. Todos los usuarios participan automáticamente en el programa de fidelidad, que consta de 8 niveles. Cuantas más apuestas realice el jugador, mayor será su estatus y porcentaje de reembolso."}',
             'value_fr' => '{"0":"Il s’agit d’un système de récompenses destiné aux joueurs les plus actifs. Tous les utilisateurs participent automatiquement au programme de fidélité, composé de 8 niveaux. Plus un joueur place de paris, plus son statut et son pourcentage de cashback augmentent."}',
             'value_pt' => '{"0":"É um sistema de recompensas para os jogadores mais ativos. Todos os usuários participam automaticamente do programa de fidelidade, que é composto por 8 níveis. Quanto mais apostas o jogador fizer, maior será seu status e a porcentagem de reembolso."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 18
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited weekly and can reach up to 11% of the total amount lost. The money is returned to the main account and has no wagering requirements. In addition, VIP players receive exclusive offers."}',
             'value_es' => '{"0":"El reembolso se acredita semanalmente y puede alcanzar hasta el 11% del total de las pérdidas. El dinero se devuelve a la cuenta principal y no tiene requisitos de apuesta. Además, los jugadores VIP reciben ofertas exclusivas."}',
             'value_fr' => '{"0":"Le cashback est crédité chaque semaine et peut atteindre jusqu’à 11 % du montant total des pertes. L’argent est reversé sur le compte principal sans condition de mise. De plus, les joueurs VIP bénéficient d’offres exclusives."}',
             'value_pt' => '{"0":"O reembolso é creditado semanalmente e pode chegar a até 11% do valor total perdido. O dinheiro é devolvido para a conta principal e não possui requisitos de apostas. Além disso, os jogadores VIP recebem ofertas exclusivas."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 19
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 20
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Sunday Boom"}',
                'value_es' => '{"0":"Domingo explosivo"}',
                'value_fr' => '{"0":"Boum du dimanche"}',
                'value_pt' => '{"0":"Explosão de Domingo"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 21
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"This is a weekly promotion from 888Starz that takes place every Sunday and is aimed at players who enjoy casino games. To participate in this promotion, you need to make a deposit between $5 and $300 on Sunday."}',
             'value_es' => '{"0":"Esta es una promoción semanal de 888Starz que se celebra todos los domingos y está dirigida a los jugadores de casino. Para participar en esta promoción, debes realizar un depósito de entre 5 y 300 dólares el domingo."}',
             'value_fr' => '{"0":"Il s’agit d’une promotion hebdomadaire proposée par 888Starz, organisée chaque dimanche et destinée aux joueurs de casino. Pour participer à cette promotion, il faut effectuer un dépôt compris entre 5 et 300 dollars le dimanche."}',
             'value_pt' => '{"0":"Esta é uma promoção semanal da 888Starz que ocorre todos os domingos e é voltada para os jogadores de cassino. Para participar desta promoção, é necessário fazer um depósito entre US$5 e US$300 no domingo."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 22
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The bonus must be wagered 30 times the bonus amount in the «Slots» section within 5 days after activation. During the wagering process, the bet amount must not exceed $5."}',
             'value_es' => '{"0":"El bono debe apostarse 30 veces el monto del bono en la sección de «Tragamonedas» dentro de los 5 días posteriores a la activación. Durante el proceso de apuesta, no se permite superar una apuesta de 5 dólares."}',
             'value_fr' => '{"0":"Le bonus doit être misé 30 fois le montant du bonus dans la section « Machines à sous » dans un délai de 5 jours après son activation. Pendant le processus de mise, il est interdit de dépasser une mise de 5 dollars."}',
             'value_pt' => '{"0":"O bônus deve ser apostado 30 vezes o valor do bônus na seção «Caça-níqueis» dentro de 5 dias após a ativação. Durante o processo de apostas, não é permitido exceder a aposta de US$5."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 23
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 24
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"Celebrate your birthday with 888starz"}',
                'value_es' => '{"0":"Celebre su cumpleaños con 888starz"}',
                'value_fr' => '{"0":"Fêtez votre anniversaire avec 888starz"}',
                'value_pt' => '{"0":"Celebre o seu aniversário com a 888starz"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 25
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"888Starz doesn’t forget about its customers on their birthday. All registered users who have verified their identity can receive a personal gift. This may be a promo code for a free express sports bet worth 10% of the first deposit made on your birthday, or 20 free spins in the casino game Mancala Quest."}',
             'value_es' => '{"0":"888Starz no se olvida de sus clientes en su cumpleaños. Todos los usuarios registrados que hayan verificado su identidad pueden recibir un regalo personal. Este puede ser un código promocional para una apuesta deportiva gratuita tipo combinada por un valor del 10% del primer depósito realizado en tu cumpleaños o 20 giros gratis en el juego de casino Mancala Quest."}',
             'value_fr' => '{"0":"888Starz n’oublie pas ses clients le jour de leur anniversaire. Tous les utilisateurs enregistrés ayant vérifié leur identité peuvent recevoir un cadeau personnalisé. Il peut s’agir d’un code promotionnel pour un pari sportif gratuit de type combiné d’une valeur de 10 % du premier dépôt effectué le jour de votre anniversaire, ou de 20 tours gratuits au casino sur le jeu Mancala Quest."}',
             'value_pt' => '{"0":"A 888Starz não se esquece dos seus clientes no dia do aniversário. Todos os usuários registrados que confirmaram sua identidade podem receber um presente personalizado. Pode ser um código promocional para uma aposta esportiva gratuita do tipo combinada no valor de 10% do primeiro depósito feito no dia do seu aniversário ou 20 rodadas grátis no jogo de cassino Mancala Quest."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 26
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To receive the bonus, you need to have an active account and make a deposit of at least $10 on your birthday. The bonuses have no wagering requirements and can be used within 7 days."}',
             'value_es' => '{"0":"Para recibir el bono, debes tener una cuenta activa y realizar un depósito mínimo de 10 dólares en tu cumpleaños. Los bonos no tienen requisitos de apuesta y pueden utilizarse dentro de los 7 días."}',
             'value_fr' => '{"0":"Pour obtenir le bonus, il faut avoir un compte actif et effectuer un dépôt d’au moins 10 dollars le jour de son anniversaire. Les bonus n’ont pas de conditions de mise et peuvent être utilisés dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Para receber o bônus, é necessário ter uma conta ativa e fazer um depósito mínimo de US$10 no dia do aniversário. Os bônus não têm requisitos de aposta e podem ser utilizados dentro de 7 dias."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 27
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 28
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h2',
                'value_en' => '{"0":"888Starz FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 888Starz"}',
                'value_fr' => '{"0":"FAQ de 888Starz"}',
                'value_pt' => '{"0":"Perguntas frequentes do 888Starz"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 29
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"How to activate a promo code on 888Starz?"}',
             'value_es' => '{"0":"¿Cómo activar un código promocional en 888Starz?"}',
             'value_fr' => '{"0":"Comment activer un code promotionnel sur 888Starz ?"}',
             'value_pt' => '{"0":"Como ativar um código promocional na 888Starz?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 30
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"The promo code is entered in the special field during registration."}',
             'value_es' => '{"0":"El código promocional se introduce en el campo especial durante el registro."}',
             'value_fr' => '{"0":"Le code promotionnel doit être saisi dans le champ prévu à cet effet lors de l’inscription."}',
             'value_pt' => '{"0":"O código promocional deve ser inserido no campo específico durante o registro."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 31
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit to receive a bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo para recibir el bono?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum pour obtenir le bonus ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo para receber o bônus?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 32
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"To receive the sports betting bonus, you need to deposit at least $1, and to receive the casino bonus, you need to deposit at least $10."}',
             'value_es' => '{"0":"Para obtener el bono de apuestas deportivas, debes depositar al menos $1, y para el bono de casino, al menos $10."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de paris sportifs, il faut déposer au moins 1 $, et pour le bonus de casino, au moins 10 $."}',
             'value_pt' => '{"0":"Para receber o bônus de apostas esportivas, é necessário depositar pelo menos $1, e para o bônus de cassino, pelo menos $10."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 33
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Is it possible to receive multiple bonuses at the same time?"}',
             'value_es' => '{"0":"¿Es posible recibir varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Est-il possible de recevoir plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível receber vários bônus ao mesmo tempo?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 34
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"No, only one bonus can be active at a time. A new bonus can be activated after the previous one is completed."}',
             'value_es' => '{"0":"No, solo un bono puede estar activo a la vez. Se puede activar un nuevo bono después de completar el anterior."}',
             'value_fr' => '{"0":"Non, un seul bonus peut être actif à la fois. Un nouveau bonus peut être activé après la fin du précédent."}',
             'value_pt' => '{"0":"Não, apenas um bônus pode estar ativo por vez. Um novo bônus pode ser ativado após o término do anterior."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 35
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available on mobile?"}',
             'value_es' => '{"0":"¿Los bonos están disponibles en dispositivos móviles?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles sur mobile ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis no celular?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 36
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promotions and promo codes are valid on the mobile version of the site and in the apps."}',
             'value_es' => '{"0":"Sí, todas las promociones y códigos promocionales son válidos en la versión móvil del sitio y en las aplicaciones."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et tous les codes promotionnels sont valables sur la version mobile du site et dans les applications."}',
             'value_pt' => '{"0":"Sim, todas as promoções e códigos promocionais são válidos na versão móvel do site e nos aplicativos."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 37
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'h3',
             'value_en' => '{"0":"Are there country restrictions for receiving bonuses?"}',
             'value_es' => '{"0":"¿Existen restricciones por país para recibir bonos?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions par pays pour recevoir des bonus ?"}',
             'value_pt' => '{"0":"Existem restrições de país para receber bônus?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '888starz',
             'order' => 38
            ],
            ['key' => '888starz',
             'bookmaker_id' => 8,
             'component' => 'p',
             'value_en' => '{"0":"Yes, some bonuses may not be available in certain regions."}',
             'value_es' => '{"0":"Sí, algunos bonos pueden no estar disponibles en ciertas regiones."}',
             'value_fr' => '{"0":"Oui, certains bonus peuvent ne pas être disponibles dans certaines régions."}',
             'value_pt' => '{"0":"Sim, alguns bônus podem não estar disponíveis em determinadas regiões."}',
             'order' => 38
            ]
        );
    }
}
