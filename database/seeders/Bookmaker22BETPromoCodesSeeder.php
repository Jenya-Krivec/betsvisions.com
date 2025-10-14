<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker22BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 1
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET is one of the leading international platforms for online betting and gambling. Welcome bonuses and promotional offers allow players to instantly receive extra funds for sports betting or free spins for casino games, while regular promotions increase potential winnings."}',
             'value_es' => '{"0":"22BET es una de las principales plataformas internacionales de apuestas y juegos de azar en línea. Los bonos de bienvenida y las ofertas promocionales permiten recibir fondos adicionales para apostar en deportes o giros gratis para el casino, mientras que las promociones regulares aumentan las posibles ganancias."}',
             'value_fr' => '{"0":"22BET est l’une des principales plateformes internationales de paris en ligne et de jeux d’argent. Les bonus de bienvenue et les offres promotionnelles permettent d’obtenir immédiatement des fonds supplémentaires pour les paris sportifs ou des tours gratuits pour le casino, tandis que les promotions régulières augmentent les gains potentiels."}',
             'value_pt' => '{"0":"A 22BET é uma das principais plataformas internacionais de apostas e jogos de azar online. Os bônus de boas-vindas e as promoções permitem receber fundos extras para apostas esportivas ou rodadas grátis no cassino, enquanto as promoções regulares aumentam os ganhos potenciais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 2
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll talk about some useful promotional offers and the terms of participation in these promotions. We’ll also explain how you can boost your first deposit during registration by using our promo code: :promocode."}',
             'value_es' => '{"0":"En este análisis hablaremos sobre algunas promociones útiles y las condiciones para participar en ellas. También explicaremos cómo puedes aumentar tu primer depósito al registrarte utilizando nuestro código promocional: :promocode."}',
             'value_fr' => '{"0":"Dans cet article, nous présenterons plusieurs offres promotionnelles intéressantes et leurs conditions de participation. Nous expliquerons également comment augmenter votre premier dépôt lors de l’inscription en utilisant notre code promo : :promocode."}',
             'value_pt' => '{"0":"Neste artigo, falaremos sobre algumas ofertas promocionais úteis e as condições para participar delas. Também explicaremos como você pode aumentar seu primeiro depósito ao se registrar usando nosso código promocional: :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 3
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 4
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To get started, go to the official 22BET website and click the “Registration” button in the top right corner of the page. Then fill out a short form, indicating your country of residence, account currency, email address, name, and create a password. After that, enter the promo code :promocode in the special field to activate an exclusive bonus for new users."}',
             'value_es' => '{"0":"Para comenzar, accede al sitio web oficial de 22BET y haz clic en el botón “Registro” en la esquina superior derecha de la página. Luego completa un breve formulario indicando tu país de residencia, la moneda de tu cuenta, tu correo electrónico, tu nombre y una contraseña. Después, introduce el código promocional :promocode en el campo correspondiente para activar un bono exclusivo para nuevos usuarios."}',
             'value_fr' => '{"0":"Pour commencer, rendez-vous sur le site officiel de 22BET et cliquez sur le bouton « Inscription » en haut à droite de la page. Ensuite, remplissez un court formulaire en indiquant votre pays de résidence, la devise de votre compte, votre adresse e-mail, votre nom et un mot de passe. Puis, saisissez le code promotionnel :promocode dans le champ prévu à cet effet pour activer un bonus exclusif pour les nouveaux utilisateurs."}',
             'value_pt' => '{"0":"Para começar, acesse o site oficial da 22BET e clique no botão “Registro” no canto superior direito da página. Em seguida, preencha um breve formulário informando seu país de residência, a moeda da conta, o e-mail, o nome e crie uma senha. Depois, insira o código promocional :promocode no campo apropriado para ativar um bônus exclusivo para novos usuários."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 5
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"You can choose one of two welcome packages — for sports betting or for casino games. If you choose the sports betting bonus, after depositing from $1 to $125, you’ll receive a +100% bonus. If you select the casino bonus, after depositing from $10 to $1750, you’ll receive a +100% bonus."}',
             'value_es' => '{"0":"Puedes elegir uno de los dos paquetes de bienvenida: uno para apuestas deportivas o uno para el casino. Si eliges el bono de apuestas deportivas, tras depositar entre 1 y 125 dólares, recibirás un bono del +100%. Si eliges el bono de casino, al depositar entre 10 y 1750 dólares, recibirás también un bono del +100%."}',
             'value_fr' => '{"0":"Vous pouvez choisir l’un des deux packs de bienvenue — pour les paris sportifs ou pour le casino. Si vous optez pour le bonus de paris sportifs, après un dépôt compris entre 1 $ et 125 $, vous recevrez un bonus de +100 %. Si vous choisissez le bonus de casino, après un dépôt compris entre 10 $ et 1750 $, vous obtiendrez également un bonus de +100 %."}',
             'value_pt' => '{"0":"Você pode escolher entre dois pacotes de boas-vindas — um para apostas esportivas ou outro para jogos de cassino. Se escolher o bônus de apostas esportivas, após um depósito de US$ 1 a US$ 125, você receberá um bônus de +100%. Se escolher o bônus de cassino, após um depósito de US$ 10 a US$ 1750, também receberá um bônus de +100%."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 6
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 7
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Bonus funds are automatically credited after making a deposit. However, to withdraw them, wagering requirements must be met."}',
             'value_es' => '{"0":"Los fondos del bono se acreditan automáticamente después de realizar un depósito. Sin embargo, para poder retirarlos, deben cumplirse los requisitos de apuesta."}',
             'value_fr' => '{"0":"Les fonds bonus sont automatiquement crédités après le dépôt. Cependant, pour pouvoir les retirer, les conditions de mise doivent être respectées."}',
             'value_pt' => '{"0":"Os fundos de bônus são automaticamente creditados após o depósito. No entanto, para poder retirá-los, é necessário cumprir os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 8
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"To wager the sports betting bonus, you must place bets totaling five times the bonus amount on accumulator bets. Each accumulator must include at least three events, and at least three of those events must have odds of 1.4 or higher."}',
             'value_es' => '{"0":"Para liberar el bono de apuestas deportivas, se debe apostar una cantidad equivalente a cinco veces el importe del bono en apuestas combinadas. Cada combinada debe incluir al menos tres eventos, y al menos tres de ellos deben tener cuotas de 1.4 o superiores."}',
             'value_fr' => '{"0":"Pour débloquer le bonus de paris sportifs, il faut miser cinq fois le montant du bonus sur des paris combinés. Chaque combiné doit comporter au moins trois événements, dont au moins trois avec une cote de 1,4 ou plus."}',
             'value_pt' => '{"0":"Para liberar o bônus de apostas esportivas, é preciso apostar um valor cinco vezes maior que o valor do bônus em apostas acumuladas. Cada acumulada deve incluir pelo menos três eventos, e pelo menos três deles devem ter odds de 1,4 ou superiores."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 9
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"For the casino bonus, the wagering requirement is 50x the received amount. When wagering the casino bonus, the maximum allowed bet is $5. The wagering process must be completed within seven days."}',
             'value_es' => '{"0":"Para el bono de casino, el requisito de apuesta es de 50x el importe recibido. Durante el juego con el bono de casino, la apuesta máxima permitida es de 5 $. El requisito de apuesta debe cumplirse en un plazo de siete días."}',
             'value_fr' => '{"0":"Pour le bonus de casino, le montant reçu doit être misé 50 fois. Lors du jeu avec le bonus de casino, la mise maximale autorisée est de 5 $. Le bonus doit être misé dans un délai de sept jours."}',
             'value_pt' => '{"0":"Para o bônus de cassino, o requisito de aposta é de 50x o valor recebido. Ao apostar com o bônus de cassino, a aposta máxima permitida é de US$ 5. O requisito de aposta deve ser cumprido em até sete dias."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 10
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 11
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The 22BET platform offers numerous promotions for regular users, allowing them to continue receiving extra benefits. Among these offers is a weekly casino cashback, where you can get from 5% to 11% back."}',
             'value_es' => '{"0":"La plataforma 22BET ofrece numerosas promociones para los usuarios habituales, lo que les permite seguir obteniendo beneficios adicionales. Entre estas ofertas se encuentra un reembolso semanal en el casino, donde puedes recibir entre un 5% y un 11% de cashback."}',
             'value_fr' => '{"0":"La plateforme 22BET propose de nombreuses promotions pour les utilisateurs réguliers, leur permettant de continuer à bénéficier d’avantages supplémentaires. Parmi ces offres, on trouve un cashback hebdomadaire au casino, allant de 5 % à 11 %."}',
             'value_pt' => '{"0":"A plataforma 22BET oferece várias promoções para os usuários regulares, permitindo que continuem a receber benefícios adicionais. Entre essas ofertas está o cashback semanal no cassino, onde é possível receber entre 5% e 11% de reembolso."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 12
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Active players can also take part in tournaments and lotteries, earning cash rewards, free bets, or free spins."}',
             'value_es' => '{"0":"Los jugadores activos también pueden participar en torneos y sorteos, obteniendo recompensas en efectivo, apuestas gratis o giros gratis."}',
             'value_fr' => '{"0":"Les joueurs actifs peuvent également participer à des tournois et à des loteries, remportant des récompenses en argent, des paris gratuits ou des tours gratuits."}',
             'value_pt' => '{"0":"Os jogadores ativos também podem participar de torneios e sorteios, ganhando prêmios em dinheiro, apostas grátis ou rodadas grátis."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 13
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 14
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"22BET currently does not offer no deposit bonuses. However, such offers sometimes appear during major global matches. Therefore, we recommend checking the BONUSES section regularly and subscribing to the 22BET newsletter."}',
             'value_es' => '{"0":"22BET actualmente no ofrece bonos sin depósito. Sin embargo, este tipo de promociones a veces aparecen durante los grandes partidos internacionales. Por eso te recomendamos revisar regularmente la sección de BONOS y suscribirte al boletín informativo de 22BET."}',
             'value_fr' => '{"0":"22BET ne propose actuellement pas de bonus sans dépôt. Cependant, de telles offres apparaissent parfois lors des grands matchs internationaux. Nous vous recommandons donc de consulter régulièrement la section BONUS et de vous abonner à la newsletter de 22BET."}',
             'value_pt' => '{"0":"A 22BET atualmente não oferece bônus sem depósito. No entanto, essas ofertas às vezes aparecem durante grandes partidas internacionais. Por isso, recomendamos verificar regularmente a seção de BÔNUS e assinar a newsletter da 22BET."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 15
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Wednesday Cash Splash"}',
                'value_es' => '{"0":"¡Cash Splash los miércoles!"}',
                'value_fr' => '{"0":"Mercredi Cash Splash !"}',
                'value_pt' => '{"0":"Cash Splash de quarta-feira!"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 16
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Every Wednesday, 22BET offers an additional 50% deposit bonus. To participate in the promotion, you need to make a deposit between $10 and $210 on Wednesday. The funds are then automatically credited to your bonus account. This promotion comes with wagering requirements."}',
             'value_es' => '{"0":"Cada miércoles, 22BET ofrece un bono adicional del 50% sobre el depósito. Para participar en la promoción, debes realizar un depósito de entre $10 y $210 el miércoles. Los fondos se acreditarán automáticamente en tu cuenta de bonificación. Esta promoción tiene condiciones de apuesta."}',
             'value_fr' => '{"0":"Chaque mercredi, 22BET propose un bonus de dépôt supplémentaire de 50 %. Pour participer à la promotion, il vous suffit d’effectuer un dépôt compris entre 10 $ et 210 $ le mercredi. Les fonds sont ensuite automatiquement crédités sur votre compte bonus. Cette promotion comporte des conditions de mise."}',
             'value_pt' => '{"0":"Todas as quartas-feiras, a 22BET oferece um bônus adicional de 50% sobre o depósito. Para participar da promoção, é necessário fazer um depósito entre $10 e $210 na quarta-feira. Os fundos serão automaticamente creditados na sua conta de bônus. Esta promoção possui requisitos de aposta."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 17
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"When the bonus is credited to the casino bonus account, the wagering requirement is x40 of the received amount. While wagering the casino bonus, the maximum allowed bet is $5. The wagering must be completed within seven days."}',
             'value_es' => '{"0":"Cuando el bono se acredita en la cuenta de bonificación del casino, el requisito de apuesta es de x40 del monto recibido. Durante el proceso de apuesta del bono de casino, la apuesta máxima permitida es de $5. El bono debe apostarse en un plazo de siete días."}',
             'value_fr' => '{"0":"Lorsque le bonus est crédité sur le compte bonus du casino, les exigences de mise sont de x40 du montant reçu. Pendant le jeu du bonus, la mise maximale autorisée est de 5 $. Le bonus doit être misé dans un délai de sept jours."}',
             'value_pt' => '{"0":"Quando o bônus é creditado na conta de bônus do cassino, o requisito de aposta é de x40 do valor recebido. Durante o uso do bônus do cassino, a aposta máxima permitida é de $5. O bônus deve ser apostado dentro de sete dias."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 18
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 19
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Rebate Bonus"}',
                'value_es' => '{"0":"Bono de Recuperación"}',
                'value_fr' => '{"0":"Bonus de remise"}',
                'value_pt' => '{"0":"Bónus de Rebate"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 20
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The Rebate Bonus offers partial cashback. Every week, users receive 0.3% of their total bets. You can get from $10 up to $1200. To qualify for the bonus, you must place bets on sports events with odds of at least 1.50."}',
             'value_es' => '{"0":"El Bono de Recuperación ofrece un reembolso parcial en forma de cashback. Cada semana, los usuarios reciben el 0,3% de sus apuestas totales. Puedes obtener entre $10 y $1200. Para calificar para el bono, debes realizar apuestas en eventos deportivos con una cuota mínima de 1,50."}',
             'value_fr' => '{"0":"Le Bonus de remise offre un remboursement partiel sous forme de cashback. Chaque semaine, les utilisateurs reçoivent 0,3 % du montant total de leurs paris. Vous pouvez obtenir entre 10 $ et 1200 $. Pour être éligible, vous devez placer des paris sur des événements sportifs avec une cote d’au moins 1,50."}',
             'value_pt' => '{"0":"O Bónus de Rebate oferece um reembolso parcial em forma de cashback. Todas as semanas, os usuários recebem 0,3% do valor total das apostas. É possível receber entre $10 e $1200. Para se qualificar para o bônus, é necessário apostar em eventos esportivos com odds de pelo menos 1,50."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 21
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Cashback is credited automatically and can be used for further sports bets or casino games. Importantly, the funds do not need to be wagered."}',
             'value_es' => '{"0":"El cashback se acredita automáticamente y puede usarse para realizar más apuestas deportivas o jugar en el casino. Lo más importante es que los fondos no necesitan ser apostados nuevamente."}',
             'value_fr' => '{"0":"Le cashback est crédité automatiquement et peut être utilisé pour de nouveaux paris sportifs ou des jeux de casino. Il est important de noter que les fonds n’ont pas besoin d’être rejoués."}',
             'value_pt' => '{"0":"O cashback é creditado automaticamente e pode ser usado para novas apostas esportivas ou jogos de cassino. O mais importante é que os fundos não precisam ser apostados novamente."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 22
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 23
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"Bet Booster"}',
                'value_es' => '{"0":"Bet Booster"}',
                'value_fr' => '{"0":"Bet Booster"}',
                'value_pt' => '{"0":"Bet Booster"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 24
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"This promotion increases winnings from accumulator bets. Players can receive an additional percentage on their winnings depending on the number of events in the accumulator. For example, if the accumulator includes four winning events, the bonus is +5%, while fourteen winning events bring a +50% bonus."}',
             'value_es' => '{"0":"Esta promoción aumenta las ganancias de las apuestas combinadas. Los jugadores pueden recibir un porcentaje adicional de sus ganancias según la cantidad de eventos en la combinación. Por ejemplo, si la combinación incluye cuatro eventos ganadores, el bono es del +5%, mientras que catorce eventos ganadores otorgan un bono del +50%."}',
             'value_fr' => '{"0":"Cette promotion augmente les gains des paris combinés. Les joueurs peuvent recevoir un pourcentage supplémentaire sur leurs gains en fonction du nombre d’événements dans le combiné. Par exemple, si le combiné contient quatre événements gagnants, le bonus est de +5 %, tandis que quatorze événements gagnants rapportent un bonus de +50 %."}',
             'value_pt' => '{"0":"Esta promoção aumenta os ganhos das apostas múltiplas. Os jogadores podem receber um percentual adicional sobre os ganhos dependendo do número de eventos no múltiplo. Por exemplo, se o múltiplo tiver quatro eventos vencedores, o bônus é de +5%, enquanto catorze eventos vencedores concedem um bônus de +50%."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 25
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"The minimum bet to participate in the promotion is only $2. The maximum bonus amount is $5900. There are no wagering requirements for this promotion."}',
             'value_es' => '{"0":"La apuesta mínima para participar en la promoción es de solo $2. El monto máximo del bono es de $5900. No hay requisitos de apuesta para esta promoción."}',
             'value_fr' => '{"0":"La mise minimale pour participer à la promotion est de seulement 2 $. Le montant maximal du bonus est de 5900 $. Aucune condition de mise n’est requise pour cette promotion."}',
             'value_pt' => '{"0":"A aposta mínima para participar da promoção é de apenas $2. O valor máximo do bônus é de $5900. Não há requisitos de apostas para esta promoção."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 26
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 27
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h2',
                'value_en' => '{"0":"22BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 22BET"}',
                'value_fr' => '{"0":"FAQ de 22BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 22BET"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 28
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use multiple promo codes at the same time?"}',
             'value_es' => '{"0":"¿Puedo usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Puis-je utiliser plusieurs codes promotionnels en même temps ?"}',
             'value_pt' => '{"0":"Posso usar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 29
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"You can only use one promo code at a time."}',
             'value_es' => '{"0":"Solo se puede usar un código promocional a la vez."}',
             'value_fr' => '{"0":"Vous ne pouvez utiliser qu’un seul code promotionnel à la fois."}',
             'value_pt' => '{"0":"Você só pode usar um código promocional por vez."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 30
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"How to activate a promo code during registration?"}',
             'value_es' => '{"0":"¿Cómo activar un código promocional al registrarse?"}',
             'value_fr' => '{"0":"Comment activer un code promotionnel lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como ativar um código promocional durante o registro?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 31
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"You need to enter the promo code in the designated field when creating an account. After confirming the registration and depositing funds, the bonus is activated automatically."}',
             'value_es' => '{"0":"Debe ingresar el código promocional en el campo correspondiente al crear la cuenta. Tras confirmar el registro y realizar un depósito, el bono se activa automáticamente."}',
             'value_fr' => '{"0":"Vous devez saisir le code promotionnel dans le champ prévu lors de la création du compte. Après confirmation de l’inscription et dépôt de fonds, le bonus est activé automatiquement."}',
             'value_pt' => '{"0":"É necessário inserir o código promocional no campo indicado ao criar a conta. Após confirmar o registro e efetuar o depósito, o bônus é ativado automaticamente."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 32
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can I have multiple accounts to receive bonuses?"}',
             'value_es' => '{"0":"¿Puedo tener varias cuentas para recibir bonos?"}',
             'value_fr' => '{"0":"Puis-je avoir plusieurs comptes pour recevoir des bonus ?"}',
             'value_pt' => '{"0":"Posso ter várias contas para receber bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 33
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"No, creating multiple accounts is strictly prohibited. If the system detects duplicates, all related accounts may be blocked."}',
             'value_es' => '{"0":"No, la creación de varias cuentas está estrictamente prohibida. Si el sistema detecta duplicados, todas las cuentas relacionadas pueden ser bloqueadas."}',
             'value_fr' => '{"0":"Non, la création de plusieurs comptes est strictement interdite. Si le système détecte des doublons, tous les comptes associés peuvent être bloqués."}',
             'value_pt' => '{"0":"Não, criar várias contas é estritamente proibido. Se o sistema detectar duplicatas, todas as contas relacionadas poderão ser bloqueadas."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 34
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw the bonus immediately after receiving it?"}',
             'value_es' => '{"0":"¿Puedo retirar el bono inmediatamente después de recibirlo?"}',
             'value_fr' => '{"0":"Puis-je retirer le bonus immédiatement après l\'avoir reçu ?"}',
             'value_pt' => '{"0":"Posso sacar o bônus imediatamente após recebê-lo?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 35
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"No, to withdraw bonus funds you must first complete the wagering requirements. For more details about the conditions, see above in this review."}',
             'value_es' => '{"0":"No, para retirar los fondos del bono primero debe cumplir con los requisitos de apuesta. Para más detalles sobre las condiciones, consulte la parte superior de esta reseña."}',
             'value_fr' => '{"0":"Non, pour retirer les fonds du bonus, vous devez d\'abord remplir les conditions de mise. Pour plus de détails sur les conditions, voir ci-dessus dans cette revue."}',
             'value_pt' => '{"0":"Não, para sacar os fundos do bônus, você deve primeiro cumprir os requisitos de aposta. Para mais detalhes sobre as condições, veja acima nesta análise."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 36
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available through the mobile app?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos a través de la aplicación móvil?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles via l\'application mobile ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis através do aplicativo móvel?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '22bet',
             'order' => 37
            ],
            ['key' => '22bet',
             'bookmaker_id' => 10,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promotions and bonuses from 22BET are available both on the desktop version of the site and in the mobile apps."}',
             'value_es' => '{"0":"Sí, todas las promociones y bonos de 22BET están disponibles tanto en la versión de escritorio del sitio como en las aplicaciones móviles."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et bonus de 22BET sont disponibles à la fois sur la version de bureau du site et dans les applications mobiles."}',
             'value_pt' => '{"0":"Sim, todas as promoções e bônus da 22BET estão disponíveis tanto na versão desktop do site quanto nos aplicativos móveis."}',
             'order' => 37
            ]
        );
    }
}
