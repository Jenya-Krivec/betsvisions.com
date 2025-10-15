<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerLinebetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 1
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet offers a wide range of bonuses and promo codes aimed at both new and regular players. The platform combines sports betting and casino gaming, so the bonus offers cover both segments. Importantly, Linebet regularly updates its promotions, adding special offers for major events and seasonal tournaments."}',
             'value_es' => '{"0":"Linebet ofrece una amplia gama de bonos y códigos promocionales dirigidos tanto a nuevos como a jugadores habituales. La plataforma combina las apuestas deportivas y el casino, por lo que las ofertas de bonificación incluyen ambos segmentos. Es importante destacar que Linebet actualiza sus promociones con frecuencia, añadiendo ofertas especiales para grandes eventos y campeonatos de temporada."}',
             'value_fr' => '{"0":"Linebet propose un large éventail de bonus et de codes promotionnels destinés aussi bien aux nouveaux joueurs qu’aux utilisateurs réguliers. La plateforme associe paris sportifs et jeux de casino, ce qui permet de couvrir les deux domaines. Il est important de noter que Linebet met régulièrement à jour ses promotions, en ajoutant des offres spéciales pour les grands événements et les tournois saisonniers."}',
             'value_pt' => '{"0":"A Linebet oferece uma ampla variedade de bônus e códigos promocionais voltados tanto para novos usuários quanto para jogadores regulares. A plataforma combina apostas esportivas e jogos de cassino, por isso as ofertas de bônus abrangem ambos os segmentos. É importante ressaltar que a Linebet atualiza suas promoções regularmente, adicionando ofertas especiais para grandes eventos e campeonatos sazonais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 2
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will explain how to use the promo code :promocode during registration to receive additional bonus funds. We will also cover some useful promotions and the conditions for claiming them."}',
             'value_es' => '{"0":"En esta reseña te explicaremos cómo utilizar el código promocional :promocode al registrarte para obtener fondos adicionales de bonificación. También hablaremos de algunas promociones útiles y de las condiciones para obtenerlas."}',
             'value_fr' => '{"0":"Dans cet article, nous expliquerons comment utiliser le code promo :promocode lors de l’inscription afin d’obtenir des fonds bonus supplémentaires. Nous présenterons également certaines promotions intéressantes et les conditions pour en bénéficier."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos como usar o código promocional :promocode durante o registro para receber fundos de bônus adicionais. Também falaremos sobre algumas promoções úteis e as condições para obtê-las."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 3
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 4
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To activate a promo code on Linebet, you first need to create an account on the website. To do this, go to the official site and click the REGISTER button. Then, choose one of the registration methods — by phone, email, social networks, or in one click. Fill in all the fields with accurate information, as you will later need to complete identity verification."}',
             'value_es' => '{"0":"Para activar un código promocional en Linebet, primero debes crear una cuenta en el sitio web. Para ello, accede al sitio oficial y haz clic en el botón REGISTRO. Luego, elige uno de los métodos de registro: por teléfono, correo electrónico, redes sociales o en un solo clic. Rellena todos los campos con información actual, ya que más adelante deberás pasar por el proceso de verificación de identidad."}',
             'value_fr' => '{"0":"Pour activer un code promo sur Linebet, vous devez d’abord créer un compte sur le site. Pour ce faire, rendez-vous sur le site officiel et cliquez sur le bouton INSCRIPTION. Ensuite, choisissez l’une des méthodes d’inscription : par téléphone, par e-mail, via les réseaux sociaux ou en un clic. Remplissez tous les champs avec des informations exactes, car vous devrez ensuite passer la vérification d’identité."}',
             'value_pt' => '{"0":"Para ativar um código promocional na Linebet, primeiro é necessário criar uma conta no site. Para isso, acesse o site oficial e clique no botão REGISTRAÇÃO. Em seguida, escolha um dos métodos de registro: por telefone, e-mail, redes sociais ou com um clique. Preencha todos os campos com informações corretas, pois posteriormente será necessário passar pelo processo de verificação de identidade."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 5
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Next, select one of the bonus types: for sports betting or casino games. If you choose the sports betting bonus, after making a deposit between $1 and $110, you will receive a 100% bonus on the deposited amount. If you select the casino bonus, after depositing between $10 and $340, you will receive a 100% bonus plus 30 free spins. Once your deposit is made, the bonus will be credited automatically."}',
             'value_es' => '{"0":"A continuación, selecciona uno de los tipos de bono: para apuestas deportivas o para juegos de casino. Si eliges el bono para apuestas deportivas, tras realizar un depósito de entre $1 y $110, recibirás un bono del 100% del importe depositado. Si seleccionas el bono de casino, después de un depósito de entre $10 y $340, recibirás un bono del 100% y 30 giros gratis. Una vez realizado el depósito, el bono se acreditará automáticamente."}',
             'value_fr' => '{"0":"Choisissez ensuite le type de bonus : paris sportifs ou jeux de casino. Si vous optez pour le bonus de paris sportifs, après un dépôt compris entre 1 $ et 110 $, vous recevrez un bonus de 100 % du montant déposé. Si vous choisissez le bonus de casino, après un dépôt de 10 $ à 340 $, vous obtiendrez un bonus de 100 % ainsi que 30 tours gratuits. Une fois le dépôt effectué, le bonus sera automatiquement crédité."}',
             'value_pt' => '{"0":"Depois, selecione um dos tipos de bônus: para apostas esportivas ou para jogos de cassino. Se você escolher o bônus para apostas esportivas, após fazer um depósito entre US$ 1 e US$ 110, receberá um bônus de 100% do valor depositado. Se optar pelo bônus de cassino, após um depósito entre US$ 10 e US$ 340, receberá um bônus de 100% mais 30 rodadas grátis. Assim que o depósito for feito, o bônus será creditado automaticamente."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 6
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 7
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"If you want to withdraw your bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Si desea retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Si vous souhaitez retirer vos fonds bonus, vous devez d\'abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Se você quiser sacar os fundos do bônus, primeiro precisará cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 8
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered five times using accumulator bets. Each accumulator must include at least three events, and a minimum of three of those events must have odds of no less than 1.40."}',
             'value_es' => '{"0":"El bono para apuestas deportivas debe apostarse cinco veces en apuestas tipo combinada. Cada combinada debe incluir al menos tres eventos, y un mínimo de tres de ellos deben tener cuotas no inferiores a 1.40."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs doit être misé cinq fois sur des paris combinés. Chaque pari combiné doit comporter au moins trois événements, et un minimum de trois de ces événements doivent avoir une cote d’au moins 1,40."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado cinco vezes em apostas do tipo acumuladora. Cada acumuladora deve incluir pelo menos três eventos, e no mínimo três desses eventos devem ter odds de pelo menos 1.40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 9
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The casino bonus must be wagered 35 times the bonus amount within seven days after activation. During wagering, the bet amount cannot exceed $5. Free spins become available only after the deposit bonus is fully wagered and are credited in the game Juicy Fruits 27 Ways."}',
             'value_es' => '{"0":"El bono de casino debe apostarse 35 veces el monto del bono dentro de los siete días posteriores a la activación. Durante el proceso de apuesta, no se permite realizar apuestas superiores a $5. Los giros gratis estarán disponibles solo después de completar el requisito de apuesta del bono de depósito y se acreditan en el juego Juicy Fruits 27 Ways."}',
             'value_fr' => '{"0":"Le bonus de casino doit être misé 35 fois le montant du bonus dans les sept jours suivant son activation. Pendant le processus de mise, la mise maximale autorisée est de 5 $. Les tours gratuits deviennent disponibles uniquement après avoir misé le bonus de dépôt et sont crédités dans le jeu Juicy Fruits 27 Ways."}',
             'value_pt' => '{"0":"O bônus de cassino deve ser apostado 35 vezes o valor do bônus dentro de sete dias após a ativação. Durante o processo de apostas, não é permitido fazer apostas superiores a US$5. Os giros grátis ficam disponíveis apenas após o cumprimento total do bônus de depósito e são creditados no jogo Juicy Fruits 27 Ways."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 10
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 11
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Linebet supports regular players with ongoing promotions and loyalty programs. For example, after making a deposit on Monday, you can receive a 100% bonus of up to $100."}',
             'value_es' => '{"0":"Linebet apoya a los jugadores habituales con promociones regulares y programas de fidelidad. Por ejemplo, después de realizar un depósito el lunes, puedes recibir un bono del 100% de hasta 100 $."}',
             'value_fr' => '{"0":"Linebet soutient les joueurs réguliers grâce à des promotions continues et à des programmes de fidélité. Par exemple, après un dépôt effectué le lundi, vous pouvez obtenir un bonus de 100 % jusqu’à 100 $."}',
             'value_pt' => '{"0":"A Linebet apoia os jogadores regulares com promoções contínuas e programas de fidelidade. Por exemplo, ao fazer um depósito na segunda-feira, é possível receber um bônus de 100% até 100 $."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 12
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The platform also frequently runs promotions that provide an additional percentage on winnings for accumulator bets. Active players can earn VIP rewards such as cashback, free spins, and special casino bonuses."}',
             'value_es' => '{"0":"La plataforma también organiza promociones que otorgan un porcentaje adicional a las ganancias en apuestas combinadas. Los jugadores activos pueden recibir recompensas VIP como reembolsos, giros gratis y bonos especiales de casino."}',
             'value_fr' => '{"0":"La plateforme propose également des promotions offrant un pourcentage supplémentaire sur les gains des paris combinés. Les joueurs actifs peuvent recevoir des récompenses VIP telles que du cashback, des tours gratuits et des bonus spéciaux au casino."}',
             'value_pt' => '{"0":"A plataforma também realiza promoções que oferecem uma porcentagem adicional sobre os ganhos em apostas múltiplas. Os jogadores ativos podem receber recompensas VIP como cashback, rodadas grátis e bônus especiais de cassino."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 13
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 14
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, Linebet does not offer traditional no-deposit promotions. However, such offers appear on the site from time to time. Therefore, we recommend checking the PROMO section and subscribing to the newsletter to avoid missing a good deal."}',
             'value_es' => '{"0":"Actualmente, Linebet no ofrece promociones tradicionales sin depósito. Sin embargo, este tipo de ofertas aparecen en el sitio de vez en cuando. Por ello, recomendamos revisar la sección PROMO y suscribirse al boletín para no perder ninguna oferta ventajosa."}',
             'value_fr' => '{"0":"Pour le moment, Linebet ne propose pas de promotions traditionnelles sans dépôt. Cependant, de telles offres apparaissent périodiquement sur le site. Nous vous recommandons donc de consulter la section PROMO et de vous abonner à la newsletter afin de ne manquer aucune offre intéressante."}',
             'value_pt' => '{"0":"No momento, a Linebet não oferece promoções tradicionais sem depósito. No entanto, essas ofertas aparecem periodicamente no site. Por isso, recomendamos verificar a seção PROMO e assinar a newsletter para não perder nenhuma oferta vantajosa."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 15
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"LUCKY MONDAY PROMO"}',
                'value_es' => '{"0":"PROMOCIÓN LUNES DE LA SUERTE"}',
                'value_fr' => '{"0":"PROMO LUNDI CHANCEUX"}',
                'value_pt' => '{"0":"PROMOÇÃO SEGUNDA-FEIRA AFORTUNADA"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 16
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This feature allows users to receive additional bonuses. To participate, you need to deposit between $1 and $100 on Monday. This way, you can get a 100% bonus on your bonus account."}',
             'value_es' => '{"0":"Esta función permite a los usuarios recibir bonos adicionales. Para participar, debes depositar entre $1 y $100 el lunes. De esta manera, puedes obtener un bono del 100% en tu cuenta de bonos."}',
             'value_fr' => '{"0":"Cette fonctionnalité permet aux utilisateurs de recevoir des bonus supplémentaires. Pour participer, vous devez déposer entre 1 $ et 100 $ le lundi. Ainsi, vous pouvez obtenir un bonus de 100 % sur votre compte bonus."}',
             'value_pt' => '{"0":"Esta função permite que os usuários recebam bônus adicionais. Para participar, é necessário depositar entre $1 e $100 na segunda-feira. Dessa forma, você pode obter um bônus de 100% na conta de bônus."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 17
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"This promotion has wagering requirements. To clear the bonus, you must wager the bonus amount three times using accumulator bets within 24 hours of the bonus being credited. Each accumulator must include at least three events, and at least three of those events must have odds of 1.40 or higher. Create a betting slip, enter the stake amount, select the bonus account, and click the «Place Bet» button."}',
             'value_es' => '{"0":"Esta promoción tiene requisitos de apuesta. Para liberar el bono, debes apostar el monto del bono tres veces en apuestas combinadas dentro de las 24 horas posteriores a la acreditación del bono. Cada combinada debe incluir al menos tres eventos, y al menos tres de ellos deben tener cuotas de 1.40 o superiores. Crea un cupón de apuestas, ingresa el monto de la apuesta, selecciona la cuenta de bono y haz clic en el botón «Hacer apuesta»."}',
             'value_fr' => '{"0":"Cette promotion comporte des conditions de mise. Pour jouer le bonus, vous devez miser le montant du bonus trois fois sur des paris combinés dans les 24 heures suivant l’attribution du bonus. Chaque pari combiné doit inclure au moins trois événements, et au moins trois de ces événements doivent avoir une cote d’au moins 1,40. Créez un coupon, saisissez le montant de la mise, sélectionnez le compte bonus et cliquez sur le bouton « Placer le pari »."}',
             'value_pt' => '{"0":"Esta promoção possui requisitos de aposta. Para liberar o bônus, você deve apostar o valor do bônus três vezes em apostas acumuladas dentro de 24 horas após o crédito do bônus. Cada acumuladora deve incluir pelo menos três eventos, e pelo menos três desses eventos devem ter odds de 1,40 ou superiores. Crie um bilhete de aposta, insira o valor da aposta, selecione a conta de bônus e clique no botão «Fazer Aposta»."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 18
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 19
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Of The Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 20
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The promotion offers enhanced odds for a specific set of daily bets. Players can create an accumulator from the suggested events and receive a 10% increase on their winnings."}',
             'value_es' => '{"0":"La promoción ofrece cuotas mejoradas para un conjunto específico de apuestas diarias. Los jugadores pueden crear una combinada con los eventos sugeridos y recibir un aumento del 10% en sus ganancias."}',
             'value_fr' => '{"0":"La promotion offre des cotes améliorées pour un ensemble spécifique de paris quotidiens. Les joueurs peuvent créer un pari combiné avec les événements proposés et recevoir une augmentation de 10 % sur leurs gains."}',
             'value_pt' => '{"0":"A promoção oferece odds aumentadas para um conjunto específico de apostas diárias. Os jogadores podem criar uma acumuladora com os eventos sugeridos e receber um acréscimo de 10% nos ganhos."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 21
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"To participate, simply add the suggested events to your betting slip and place your bet. The offer is available every day and can be combined with other betting bonuses."}',
             'value_es' => '{"0":"Para participar, simplemente agrega los eventos sugeridos a tu cupón de apuestas y realiza la apuesta. La oferta está disponible todos los días y se puede combinar con otros bonos de apuestas."}',
             'value_fr' => '{"0":"Pour participer, il suffit d’ajouter les événements proposés à votre coupon et de placer le pari. L’offre est disponible chaque jour et peut être combinée avec d’autres bonus de paris."}',
             'value_pt' => '{"0":"Para participar, basta adicionar os eventos sugeridos ao seu bilhete de aposta e fazer a aposta. A oferta está disponível todos os dias e pode ser combinada com outros bônus de apostas."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 22
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 23
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Weekly Cashback"}',
                'value_es' => '{"0":"Devolución semanal"}',
                'value_fr' => '{"0":"Cashback hebdomadaire"}',
                'value_pt' => '{"0":"Cashback semanal"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 24
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The promotion allows you to receive 0.3% cashback on your staked funds throughout the week. The minimum payout is 1 USD. The maximum you can receive is 1000 USD. To qualify for the bonus, you must place a bet on an event with odds of 1.50 or higher."}',
             'value_es' => '{"0":"La promoción permite recibir un 0,3 % de devolución sobre los fondos apostados durante la semana. El pago mínimo es de 1 USD. El máximo que se puede recibir es de 1000 USD. Para obtener el bono, debe realizar una apuesta en un evento con cuotas de 1,50 o más."}',
             'value_fr' => '{"0":"La promotion permet de récupérer 0,3 % des fonds misés au cours de la semaine. Le paiement minimum est de 1 USD. Le montant maximum que vous pouvez recevoir est de 1000 USD. Pour bénéficier du bonus, vous devez placer un pari sur un événement avec des cotes de 1,50 ou plus."}',
             'value_pt' => '{"0":"A promoção oferece a possibilidade de receber 0,3% de cashback sobre os fundos apostados durante a semana. O pagamento mínimo é de 1 USD. O máximo que você pode receber é 1000 USD. Para receber o bônus, você deve fazer uma aposta em um evento com odds de 1,50 ou mais."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 25
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 26
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Cashback"}',
                'value_es' => '{"0":"Devolución VIP en Casino"}',
                'value_fr' => '{"0":"Cashback VIP Casino"}',
                'value_pt' => '{"0":"Cashback VIP do casino"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 27
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"The promotion provides a cashback on a portion of lost funds in the casino section for regular players. The cashback level depends on the player’s status in the VIP program. The platform offers weekly crediting, which can be used for replaying on slots, table games, or Live Casino."}',
             'value_es' => '{"0":"La promoción ofrece un reembolso de una parte de los fondos perdidos en la sección de casino para jugadores habituales. El nivel de cashback depende del estado del jugador en el programa VIP. La plataforma proporciona acreditaciones semanales que se pueden usar para volver a jugar en tragamonedas, juegos de mesa o Live Casino."}',
             'value_fr' => '{"0":"La promotion prévoit un remboursement d’une partie des fonds perdus dans la section casino pour les joueurs réguliers. Le niveau de cashback dépend du statut du joueur dans le programme VIP. La plateforme propose des crédits hebdomadaires, utilisables pour rejouer sur les machines à sous, les jeux de table ou le Live Casino."}',
             'value_pt' => '{"0":"A promoção oferece o retorno de parte dos fundos perdidos na seção de cassino para jogadores regulares. O nível de cashback depende do status do jogador no programa VIP. A plataforma oferece créditos semanais, que podem ser usados para jogar novamente em slots, jogos de mesa ou Live Casino."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 28
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 29
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h2',
                'value_en' => '{"0":"Linebet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Linebet"}',
                'value_fr' => '{"0":"FAQ de Linebet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Linebet"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 30
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Can you receive multiple welcome bonuses at the same time?"}',
             'value_es' => '{"0":"¿Se pueden recibir varios bonos de bienvenida al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on recevoir plusieurs bonus de bienvenue en même temps ?"}',
             'value_pt' => '{"0":"É possível receber vários bônus de boas-vindas ao mesmo tempo?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 31
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"No, it is not possible to receive multiple welcome bonuses."}',
             'value_es' => '{"0":"No, no es posible recibir varios bonos de bienvenida."}',
             'value_fr' => '{"0":"Non, il n’est pas possible de recevoir plusieurs bonus de bienvenue."}',
             'value_pt' => '{"0":"Não, não é possível receber vários bônus de boas-vindas."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 32
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Which odds are counted for wagering the welcome bonus on bets?"}',
             'value_es' => '{"0":"¿Qué cuotas se tienen en cuenta para apostar el bono de bienvenida?"}',
             'value_fr' => '{"0":"Quelles cotes sont prises en compte pour le pari du bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Quais odds são consideradas para o rollover do bônus de boas-vindas em apostas?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 33
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"You need to place bets on events with odds of at least 1.4."}',
             'value_es' => '{"0":"Debe realizar apuestas en eventos con cuotas de al menos 1,4."}',
             'value_fr' => '{"0":"Vous devez placer des paris sur des événements avec des cotes d’au moins 1,4."}',
             'value_pt' => '{"0":"É necessário apostar em eventos com odds de pelo menos 1,4."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 34
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available for already registered users?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos para usuarios ya registrados?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles pour les utilisateurs déjà enregistrés ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis para usuários já cadastrados?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 35
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, regular customers can receive bonuses on repeat deposits, cashback, and special promotions for popular events."}',
             'value_es' => '{"0":"Sí, los clientes habituales pueden recibir bonos por depósitos repetidos, cashback y promociones especiales en eventos populares."}',
             'value_fr' => '{"0":"Oui, les clients réguliers peuvent bénéficier de bonus sur les dépôts répétés, de cashback et de promotions spéciales sur des événements populaires."}',
             'value_pt' => '{"0":"Sim, clientes regulares podem receber bônus em depósitos repetidos, cashback e promoções especiais em eventos populares."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 36
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Where can I find a promo code to activate the bonus?"}',
             'value_es' => '{"0":"¿Dónde se puede encontrar un código promocional para activar el bono?"}',
             'value_fr' => '{"0":"Où puis-je trouver un code promo pour activer le bonus ?"}',
             'value_pt' => '{"0":"Onde posso encontrar um código promocional para ativar o bônus?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 37
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"You can use our promo code :promocode."}',
             'value_es' => '{"0":"Puede usar nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"Vous pouvez utiliser notre code promo :promocode."}',
             'value_pt' => '{"0":"Você pode usar nosso código promocional :promocode."}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 38
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to verify my account to receive the bonus?"}',
             'value_es' => '{"0":"¿Es necesario verificar la cuenta para recibir el bono?"}',
             'value_fr' => '{"0":"Faut-il vérifier son compte pour recevoir le bonus ?"}',
             'value_pt' => '{"0":"É necessário verificar a conta para receber o bônus?"}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'linebet',
             'order' => 39
            ],
            ['key' => 'linebet',
             'bookmaker_id' => 11,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the bonus can be withdrawn after identity verification."}',
             'value_es' => '{"0":"Sí, el bono se puede retirar después de la verificación de identidad."}',
             'value_fr' => '{"0":"Oui, le bonus peut être retiré après la vérification de l’identité."}',
             'value_pt' => '{"0":"Sim, o bônus pode ser retirado após a verificação de identidade."}',
             'order' => 39
            ]
        );
    }
}
