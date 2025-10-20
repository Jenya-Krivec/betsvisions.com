<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerivibetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 1
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet rewards both new and regular players by offering bonuses, free bets, and free spins. New customers can claim a generous welcome package, while existing users can enjoy regular promotions that help increase their winnings."}',
             'value_es' => '{"0":"Ivibet premia tanto a los nuevos jugadores como a los habituales con bonos, apuestas gratis y giros gratuitos. Los nuevos clientes pueden obtener un generoso paquete de bienvenida, mientras que los jugadores regulares disfrutan de promociones frecuentes que ayudan a aumentar sus ganancias."}',
             'value_fr' => '{"0":"Ivibet récompense à la fois les nouveaux joueurs et les habitués en offrant des bonus, des paris gratuits et des tours gratuits. Les nouveaux clients peuvent profiter d’un généreux pack de bienvenue, tandis que les joueurs réguliers bénéficient de promotions fréquentes pour augmenter leurs gains."}',
             'value_pt' => '{"0":"A Ivibet recompensa tanto os novos jogadores quanto os regulares com bônus, apostas grátis e rodadas gratuitas. Os novos clientes podem aproveitar um generoso pacote de boas-vindas, enquanto os usuários frequentes têm acesso a promoções regulares que ajudam a aumentar seus ganhos."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 2
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a look at some of the most popular promotions that can boost your profits. We’ll also explain how you can get extra funds in your bonus account using our promo code :promocode during registration."}',
             'value_es' => '{"0":"En este análisis revisaremos algunas de las promociones más populares que pueden incrementar tus premios. También te explicaremos cómo obtener fondos adicionales en tu cuenta de bonificación utilizando nuestro código promocional :promocode durante el registro."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons certaines des promotions les plus populaires qui peuvent accroître vos gains. Nous expliquerons également comment obtenir des fonds supplémentaires sur votre compte bonus en utilisant notre code promo :promocode lors de l’inscription."}',
             'value_pt' => '{"0":"Neste artigo, analisaremos algumas das promoções mais populares que podem ampliar seus lucros. Também explicaremos como obter fundos extras na sua conta de bônus usando nosso código promocional :promocode durante o registro."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 3
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 4
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"To receive additional funds in your bonus account with our promo code :promocode, you need to complete a simple registration process. First, go to the official website and click the «SIGN UP» button. In the registration form, you’ll need to complete three steps and enter your current details. In the first step, there’s a field for entering the promo code — enter :promocode there. Also, don’t forget to choose where you’d like to use your bonus funds — for sports betting or casino games."}',
             'value_es' => '{"0":"Para recibir fondos adicionales en tu cuenta de bonificación con nuestro código promocional :promocode, debes completar un sencillo proceso de registro. Primero, ve al sitio web oficial y haz clic en el botón «SIGN UP». En el formulario de registro deberás completar tres pasos e ingresar tus datos actuales. En el primer paso hay un campo para ingresar el código promocional; introduce allí el código :promocode. No olvides elegir dónde usarás los fondos del bono, si en apuestas deportivas o en el casino."}',
             'value_fr' => '{"0":"Pour recevoir des fonds supplémentaires sur votre compte bonus avec notre code promo :promocode, vous devez effectuer une simple procédure d’inscription. Rendez-vous d’abord sur le site officiel et cliquez sur le bouton « SIGN UP ». Dans le formulaire d’inscription, vous devrez suivre trois étapes et saisir vos informations actuelles. À la première étape, il y a un champ pour entrer le code promo — saisissez-y :promocode. N’oubliez pas non plus de choisir où vous souhaitez utiliser vos fonds bonus, pour les paris sportifs ou les jeux de casino."}',
             'value_pt' => '{"0":"Para receber fundos adicionais na sua conta de bônus com o nosso código promocional :promocode, é necessário completar um simples processo de registro. Primeiro, acesse o site oficial e clique no botão «SIGN UP». No formulário de registro, será preciso concluir três etapas e inserir seus dados atuais. Na primeira etapa, há um campo para inserir o código promocional — digite :promocode. Também não se esqueça de escolher onde pretende usar os fundos do bônus, seja em apostas esportivas ou em jogos de cassino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 5
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"If you choose the sports betting bonus, after depositing from $5 to $150, you can receive a +100% bonus to your account based on the deposit amount. If you choose the casino bonus, after depositing from $20 to $100, you can receive a +100% bonus on your deposit and 120 free spins within four days."}',
             'value_es' => '{"0":"Si eliges el bono para apuestas deportivas, después de realizar un depósito de entre $5 y $150, podrás recibir un bono del +100% sobre el monto depositado. Si eliges el bono de casino, tras un depósito de entre $20 y $100, recibirás un bono del +100% sobre el depósito y 120 giros gratis durante cuatro días."}',
             'value_fr' => '{"0":"Si vous choisissez le bonus pour les paris sportifs, après un dépôt de 5 $ à 150 $, vous pourrez obtenir un bonus de +100 % sur le montant du dépôt. Si vous choisissez le bonus de casino, après un dépôt de 20 $ à 100 $, vous recevrez un bonus de +100 % sur le dépôt ainsi que 120 tours gratuits répartis sur quatre jours."}',
             'value_pt' => '{"0":"Se você escolher o bônus de apostas esportivas, após um depósito entre US$5 e US$150, poderá receber um bônus de +100% sobre o valor depositado. Se optar pelo bônus de cassino, após um depósito entre US$20 e US$100, receberá um bônus de +100% sobre o valor do depósito e 120 giros grátis ao longo de quatro dias."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 6
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 7
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw your bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Ten en cuenta que, para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que pour pouvoir retirer vos fonds bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Observe que, para poder sacar os fundos do bônus, é necessário cumprir primeiro os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 8
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times the bonus amount in accumulator bets. Each accumulator bet must include at least two selections with total odds of 2.0 or higher. The bonus must be wagered within 7 days."}',
             'value_es' => '{"0":"El bono de apuestas deportivas debe apostarse 5 veces el monto del bono en apuestas combinadas. Cada apuesta combinada debe incluir al menos dos selecciones con una cuota total de 2.0 o superior. El bono debe apostarse en un plazo de 7 días."}',
             'value_fr' => '{"0":"Le bonus pour les paris sportifs doit être misé 5 fois le montant du bonus sur des paris combinés. Chaque pari combiné doit comprendre au moins deux sélections avec une cote totale de 2.0 ou plus. Le bonus doit être misé dans un délai de 7 jours."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado 5 vezes o valor do bônus em apostas acumuladas. Cada aposta acumulada deve incluir pelo menos duas seleções com cotas totais de 2.0 ou superiores. O bônus deve ser apostado dentro de 7 dias."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 9
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonus funds are subject to a 40x wagering requirement. Free spins from the first deposit are credited in sets of 30 per day for 4 days, totaling 120 free spins. The first 30 free spins are added immediately after successful bonus activation."}',
             'value_es' => '{"0":"Los fondos del bono de casino están sujetos a un requisito de apuesta de 40x. Los giros gratis del primer depósito se acreditan en conjuntos de 30 por día durante 4 días, sumando un total de 120 giros gratis. Los primeros 30 giros gratis se añaden inmediatamente después de la activación exitosa del bono."}',
             'value_fr' => '{"0":"Les fonds du bonus de casino sont soumis à une exigence de mise de 40x. Les tours gratuits du premier dépôt sont crédités par lots de 30 par jour pendant 4 jours, pour un total de 120 tours gratuits. Les 30 premiers tours gratuits sont ajoutés immédiatement après l’activation réussie du bonus."}',
             'value_pt' => '{"0":"Os fundos do bônus de cassino têm um requisito de aposta de 40x. Os giros grátis do primeiro depósito são creditados em conjuntos de 30 por dia durante 4 dias, totalizando 120 giros grátis. Os primeiros 30 giros grátis são adicionados imediatamente após a ativação bem-sucedida do bônus."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 10
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 11
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"For regular users, Ivibet offers a reward system to maintain interest in the game even after using the welcome bonus. Registered players can take advantage of a number of ongoing promotions. For example, after making a deposit of at least $20 on Friday, you’ll receive a +50% bonus on the deposit amount and 25 free spins."}',
             'value_es' => '{"0":"Para los usuarios habituales, Ivibet ofrece un sistema de recompensas que mantiene el interés en el juego incluso después de utilizar el bono de bienvenida. Los jugadores registrados pueden aprovechar una serie de promociones regulares. Por ejemplo, al realizar un depósito mínimo de $20 un viernes, recibirás un bono del +50% sobre el monto depositado y 25 giros gratis."}',
             'value_fr' => '{"0":"Pour les utilisateurs réguliers, Ivibet propose un système de récompenses afin de maintenir l’intérêt du jeu même après avoir utilisé le bonus de bienvenue. Les joueurs inscrits peuvent profiter de plusieurs promotions régulières. Par exemple, après un dépôt d’au moins 20 $ le vendredi, vous recevrez un bonus de +50 % sur le montant déposé ainsi que 25 tours gratuits."}',
             'value_pt' => '{"0":"Para os usuários regulares, a Ivibet oferece um sistema de recompensas para manter o interesse no jogo mesmo após utilizar o bônus de boas-vindas. Os jogadores registrados podem aproveitar várias promoções regulares. Por exemplo, ao fazer um depósito mínimo de $20 na sexta-feira, você receberá um bônus de +50% sobre o valor depositado e 25 giros grátis."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 12
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"In addition, for active casino users, there is a loyalty program called the VIP Program Casino, which allows players to accumulate points and exchange them for real money or free spins. For sports betting enthusiasts, there is also a loyalty program that lets players receive bonus funds in their account every month."}',
             'value_es' => '{"0":"Además, los usuarios activos del casino pueden beneficiarse del programa de fidelidad VIP Program Casino, que permite acumular puntos y canjearlos por dinero real o giros gratis. Para los aficionados a las apuestas deportivas, también existe un programa de fidelidad que permite recibir fondos de bonificación en la cuenta cada mes."}',
             'value_fr' => '{"0":"De plus, les utilisateurs actifs du casino peuvent bénéficier du programme de fidélité VIP Program Casino, qui leur permet d’accumuler des points et de les échanger contre de l’argent réel ou des tours gratuits. Pour les amateurs de paris sportifs, un programme de fidélité est également disponible, offrant chaque mois des fonds bonus sur leur compte."}',
             'value_pt' => '{"0":"Além disso, os usuários ativos do cassino podem participar do programa de fidelidade VIP Program Casino, que permite acumular pontos e trocá-los por dinheiro real ou giros grátis. Para os fãs de apostas esportivas, também existe um programa de fidelidade que permite receber fundos de bônus na conta todos os meses."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 13
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 14
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The Ivibet team occasionally launches temporary promotions that allow players to receive free spins or bonus funds. Such offers usually appear during holiday periods or when participating in tournaments."}',
             'value_es' => '{"0":"El equipo de Ivibet lanza ocasionalmente promociones temporales en las que es posible obtener giros gratis o fondos de bonificación. Estas ofertas suelen aparecer durante los periodos festivos o al participar en torneos."}',
             'value_fr' => '{"0":"L’équipe d’Ivibet lance de temps en temps des promotions temporaires permettant d’obtenir des tours gratuits ou des fonds bonus. Ces offres apparaissent généralement pendant les périodes de fête ou lors de la participation à des tournois."}',
             'value_pt' => '{"0":"A equipe da Ivibet lança ocasionalmente promoções temporárias que permitem receber giros grátis ou fundos de bônus. Essas ofertas geralmente aparecem durante períodos festivos ou ao participar de torneios."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 15
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Currently, there is a promotion where you can receive 10 free spins. To take part in the offer, you need to install the application on your smartphone or PC. The free spins will become available within an hour after logging into your account. Winnings obtained from free spins are subject to a 40x wagering requirement. The bonus must be wagered within 7 days."}',
             'value_es' => '{"0":"Actualmente, hay una promoción activa con la que puedes recibir 10 giros gratis. Para participar, debes instalar la aplicación en tu teléfono inteligente o PC. Los giros gratis estarán disponibles dentro de una hora después de iniciar sesión en tu cuenta. Las ganancias obtenidas con los giros gratis están sujetas a un requisito de apuesta de x40. El bono debe apostarse en un plazo de 7 días."}',
             'value_fr' => '{"0":"Actuellement, une offre est en cours qui vous permet d’obtenir 10 tours gratuits. Pour participer à la promotion, il faut installer l’application sur votre smartphone ou votre PC. Les tours gratuits seront disponibles dans l’heure suivant votre connexion à votre compte. Les gains obtenus grâce aux tours gratuits sont soumis à une exigence de mise de x40. Le bonus doit être rejoué dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Atualmente, há uma promoção ativa em que você pode receber 10 giros grátis. Para participar, é necessário instalar o aplicativo em seu smartphone ou PC. Os giros grátis estarão disponíveis dentro de uma hora após o login na sua conta. Os ganhos obtidos com os giros grátis estão sujeitos a um requisito de aposta de x40. O bônus deve ser apostado dentro de 7 dias."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 16
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Fortune Wheel Bonus"}',
                'value_es' => '{"0":"Bono de Ruleta de la suerte"}',
                'value_fr' => '{"0":"Bonus Roue de la Fortune"}',
                'value_pt' => '{"0":"Bónus Roda da Fortuna"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 17
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This is one of the most exciting promotions from Ivibet, allowing players to receive free spins, free bets, and real money rewards. To participate, select the Fortune Wheel when making a deposit. Deposit at least 20 USD to receive the Silver Wheel. If you deposit at least 100 USD, you’ll get the Golden Wheel. Open the wheel and click «Spin»!"}',
             'value_es' => '{"0":"Esta es una de las promociones más interesantes de Ivibet, que permite obtener giros gratis, apuestas gratis y dinero real. Para participar, selecciona la Rueda de la Fortuna al realizar un depósito. Deposita al menos 20 USD para recibir la rueda de plata. Si depositas al menos 100 USD, obtendrás la rueda de oro. ¡Abre la rueda y haz clic en «Girar»!"}',
             'value_fr' => '{"0":"Il s’agit de l’une des promotions les plus intéressantes d’Ivibet, permettant d’obtenir des tours gratuits, des paris gratuits et de l’argent réel. Pour participer, sélectionnez la Roue de la Fortune lors de votre dépôt. Déposez au moins 20 USD pour recevoir la roue d’argent. Si vous déposez au moins 100 USD, vous obtiendrez la roue d’or. Ouvrez la roue et cliquez sur « Tourner » !"}',
             'value_pt' => '{"0":"Esta é uma das promoções mais interessantes da Ivibet, que permite ganhar giros grátis, apostas grátis e dinheiro real. Para participar, selecione a Roda da Fortuna ao fazer um depósito. Deposite pelo menos 20 USD para receber a roda de prata. Se depositar pelo menos 100 USD, receberá a roda de ouro. Abra a roda e clique em «Girar»!"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 18
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The bonus can be claimed for every deposit made at any time, but no more than three bonuses of each type can be received per day."}',
             'value_es' => '{"0":"El bono se puede recibir por cada depósito realizado en cualquier momento, pero no más de tres bonos de cada tipo por día."}',
             'value_fr' => '{"0":"Le bonus peut être obtenu pour chaque dépôt effectué à tout moment, mais pas plus de trois bonus de chaque type par jour."}',
             'value_pt' => '{"0":"O bônus pode ser recebido para cada depósito feito a qualquer momento, mas não mais que três bônus de cada tipo por dia."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 19
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 20
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Friday Reload"}',
                'value_es' => '{"0":"VIERNES DE RECARGAS"}',
                'value_fr' => '{"0":"Bonus Du Vendredi"}',
                'value_pt' => '{"0":"RECARGA DE SEXTA-FEIRA"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 21
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Every Friday, Ivibet offers a 50% deposit bonus of up to $150. To participate, simply make a minimum deposit of $5. After depositing $5 or more, you’ll also receive 50 free spins over the course of two days."}',
             'value_es' => '{"0":"Cada viernes, Ivibet ofrece un bono del 50% en el depósito de hasta $150. Para participar, solo necesitas realizar un depósito mínimo de $5. Después de depositar $5 o más, también recibirás 50 giros gratis distribuidos en dos días."}',
             'value_fr' => '{"0":"Chaque vendredi, Ivibet propose un bonus de dépôt de 50 % jusqu’à 150 $. Pour participer, il suffit d’effectuer un dépôt minimum de 5 $. Après avoir déposé 5 $ ou plus, vous recevrez également 50 tours gratuits répartis sur deux jours."}',
             'value_pt' => '{"0":"Todas as sextas-feiras, a Ivibet oferece um bônus de 50% no depósito de até $150. Para participar, basta fazer um depósito mínimo de $5. Após depositar $5 ou mais, você também receberá 50 giros grátis ao longo de dois dias."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 22
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"The credited funds can be used for casino games. Winnings from free spins are subject to a 40x wagering requirement."}',
             'value_es' => '{"0":"Los fondos recibidos se pueden utilizar para jugar en el casino. Las ganancias obtenidas con los giros gratis están sujetas a un requisito de apuesta de 40x."}',
             'value_fr' => '{"0":"Les fonds crédités peuvent être utilisés pour les jeux de casino. Les gains obtenus grâce aux tours gratuits sont soumis à une exigence de mise de 40x."}',
             'value_pt' => '{"0":"Os fundos recebidos podem ser usados para jogar no cassino. Os ganhos obtidos com os giros grátis estão sujeitos a um requisito de aposta de 40x."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 23
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 24
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Program Casino"}',
                'value_es' => '{"0":"Programa VIP de Casino"}',
                'value_fr' => '{"0":"Programme Vip De ivibet"}',
                'value_pt' => '{"0":"Programa VIP Casino"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 25
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"This is a loyalty system for regular Ivibet customers. Players earn special points for every bet placed in the casino. These points can be exchanged for cash prizes or free spins. The system has several levels — from basic to elite. The more bets you place, the higher your status and the more favorable the conversion rates become."}',
             'value_es' => '{"0":"Este es un sistema de fidelidad para los clientes habituales de Ivibet. Los jugadores ganan puntos especiales por cada apuesta realizada en el casino. Estos puntos se pueden canjear por premios en efectivo o giros gratis. El sistema cuenta con varios niveles, desde el básico hasta el élite. Cuantas más apuestas hagas, mayor será tu estatus y más ventajosas serán las condiciones de conversión de puntos."}',
             'value_fr' => '{"0":"Il s’agit d’un programme de fidélité destiné aux clients réguliers d’Ivibet. Les joueurs gagnent des points spéciaux pour chaque pari effectué au casino. Ces points peuvent être échangés contre des prix en argent ou des tours gratuits. Le système comporte plusieurs niveaux — du niveau de base au niveau élite. Plus vous pariez, plus votre statut est élevé et plus les conditions de conversion sont avantageuses."}',
             'value_pt' => '{"0":"Este é um sistema de fidelidade para os clientes regulares da Ivibet. Os jogadores ganham pontos especiais por cada aposta feita no cassino. Esses pontos podem ser trocados por prêmios em dinheiro ou giros grátis. O sistema possui vários níveis — do básico ao elite. Quanto mais apostas você fizer, maior será o seu status e mais vantajosas serão as taxas de conversão de pontos."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 26
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Free spins are subject to a 10x wagering requirement. Funds obtained by exchanging points for real money are credited with a 5x wagering requirement."}',
             'value_es' => '{"0":"Los giros gratis están sujetos a un requisito de apuesta de 10x. Los fondos obtenidos al canjear puntos por dinero real están sujetos a un requisito de apuesta de 5x."}',
             'value_fr' => '{"0":"Les tours gratuits sont soumis à une exigence de mise de 10x. Les fonds obtenus en échangeant des points contre de l’argent réel sont soumis à une exigence de mise de 5x."}',
             'value_pt' => '{"0":"Os giros grátis estão sujeitos a um requisito de aposta de 10x. Os fundos obtidos ao trocar pontos por dinheiro real estão sujeitos a um requisito de aposta de 5x."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 27
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 28
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h2',
                'value_en' => '{"0":"Ivibet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Ivibet"}',
                'value_fr' => '{"0":"FAQ de Ivibet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Ivibet"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 29
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can the promo code be used without making a deposit?"}',
             'value_es' => '{"0":"¿Se puede usar el código promocional sin realizar un depósito?"}',
             'value_fr' => '{"0":"Peut-on utiliser le code promotionnel sans effectuer de dépôt ?"}',
             'value_pt' => '{"0":"É possível usar o código promocional sem fazer um depósito?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 30
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"No, Ivibet currently does not offer no-deposit promo codes. To activate the welcome bonus, you need to make a deposit."}',
             'value_es' => '{"0":"No, actualmente Ivibet no ofrece códigos promocionales sin depósito. Para activar el bono de bienvenida es necesario realizar un depósit"}',
             'value_fr' => '{"0":"Non, pour le moment Ivibet ne propose pas de codes promotionnels sans dépôt. Pour activer le bonus de bienvenue, vous devez effectuer un dépôt."}',
             'value_pt' => '{"0":"Não, atualmente a Ivibet não oferece códigos promocionais sem depósito. Para ativar o bônus de boas-vindas, é necessário fazer um depósito."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 31
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"What is the validity period of the welcome bonuses?"}',
             'value_es' => '{"0":"¿Cuál es el período de validez de los bonos de bienvenida?"}',
             'value_fr' => '{"0":"Quelle est la durée de validité des bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Qual é o prazo de validade dos bônus de boas-vindas?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 32
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Bonus funds and free spins are valid for 7 days. If the wagering requirements are not met within this period, the bonus funds will be canceled."}',
             'value_es' => '{"0":"Los fondos de bonificación y los giros gratis son válidos durante 7 días. Si los requisitos de apuesta no se cumplen dentro de este período, los fondos de bonificación serán cancelados."}',
             'value_fr' => '{"0":"Les fonds bonus et les tours gratuits sont valables pendant 7 jours. Si les conditions de mise ne sont pas remplies dans ce délai, les fonds bonus seront annulés."}',
             'value_pt' => '{"0":"Os fundos de bônus e os giros grátis são válidos por 7 dias. Se os requisitos de aposta não forem cumpridos dentro desse período, os fundos de bônus serão cancelados."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 33
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Can a promo code be used multiple times?"}',
             'value_es' => '{"0":"¿Se puede usar un código promocional varias veces?"}',
             'value_fr' => '{"0":"Peut-on utiliser un code promotionnel plusieurs fois ?"}',
             'value_pt' => '{"0":"É possível usar um código promocional várias vezes?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 34
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Ivibet promo codes are one-time use. Once used during registration, they cannot be applied again."}',
             'value_es' => '{"0":"Los códigos promocionales de Ivibet son de un solo uso. Una vez utilizados durante el registro, no se pueden aplicar de nuevo."}',
             'value_fr' => '{"0":"Les codes promotionnels Ivibet sont à usage unique. Une fois utilisés lors de l’inscription, ils ne peuvent pas être réutilisés."}',
             'value_pt' => '{"0":"Os códigos promocionais da Ivibet são de uso único. Depois de usados durante o registro, não podem ser aplicados novamente."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 35
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"How can I check the status of my bonus?"}',
             'value_es' => '{"0":"¿Cómo puedo verificar el estado de mi bono?"}',
             'value_fr' => '{"0":"Comment vérifier le statut de mon bonus ?"}',
             'value_pt' => '{"0":"Como verificar o status do meu bônus?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 36
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"All active bonuses are displayed in the user profile under the Bonuses section. There, you can view the amount, wagering requirements, and validity period."}',
             'value_es' => '{"0":"Todos los bonos activos se muestran en el perfil de usuario en la sección Bonos. Allí se puede consultar el monto, los requisitos de apuesta y el período de validez."}',
             'value_fr' => '{"0":"Tous les bonus actifs sont affichés dans le profil utilisateur, dans la section Bonus . Vous pouvez y consulter le montant, les conditions de mise et la durée de validité."}',
             'value_pt' => '{"0":"Todos os bônus ativos são exibidos no perfil do usuário na seção Bônus. Lá você pode ver o valor, os requisitos de aposta e o período de validade."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 37
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available for live bets?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos para apuestas en vivo?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles pour les paris en direct ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis para apostas ao vivo?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'ivibet',
             'order' => 38
            ],
            ['key' => 'ivibet',
             'bookmaker_id' => 14,
             'component' => 'p',
             'value_en' => '{"0":"Yes, bonus funds can be used for live bets."}',
             'value_es' => '{"0":"Sí, los fondos de bonificación se pueden usar para apuestas en vivo."}',
             'value_fr' => '{"0":"Oui, les fonds bonus peuvent être utilisés pour les paris en direct."}',
             'value_pt' => '{"0":"Sim, os fundos de bônus podem ser usados para apostas ao vivo."}',
             'order' => 38
            ]
        );
    }
}
