<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker4rabetPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 1
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers its users a wide range of bonuses and promo codes, aimed at both new and regular players. The reward system is designed to make sports betting and casino gaming more profitable. 4rabet regularly runs special promotions and tournaments that allow players to receive additional prizes and rewards."}',
             'value_es' => '{"0":"4rabet ofrece a sus usuarios una amplia gama de bonos y códigos promocionales, dirigidos tanto a jugadores nuevos como a los habituales. El sistema de recompensas está diseñado para hacer que las apuestas deportivas y los juegos de casino sean más rentables. 4rabet realiza regularmente promociones especiales y torneos que permiten a los jugadores obtener premios y recompensas adicionales."}',
             'value_fr' => '{"0":"4rabet propose à ses utilisateurs une large gamme de bonus et de codes promotionnels, destinés aussi bien aux nouveaux joueurs qu’aux joueurs réguliers. Le système de récompenses est conçu pour rendre les paris sportifs et les jeux de casino plus avantageux. 4rabet organise régulièrement des promotions et des tournois spéciaux qui permettent aux joueurs de recevoir des prix et des récompenses supplémentaires."}',
             'value_pt' => '{"0":"A 4rabet oferece aos seus usuários uma ampla gama de bônus e códigos promocionais, destinados tanto a novos jogadores quanto a jogadores regulares. O sistema de recompensas é projetado para tornar as apostas esportivas e os jogos de cassino mais lucrativos. A 4rabet realiza regularmente promoções especiais e torneios que permitem aos jogadores receber prêmios e recompensas adicionais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 2
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at some of the promotional offers. We will also explain how to get an extra bonus on your first deposit by using our promo code :promocode."}',
             'value_es' => '{"0":"En esta reseña, analizaremos en detalle algunas de las ofertas promocionales. También explicaremos cómo obtener un bono adicional en tu primer depósito utilizando nuestro código promocional :promocode."}',
             'value_fr' => '{"0":"Dans cette revue, nous examinerons en détail certaines offres promotionnelles. Nous expliquerons également comment obtenir un bonus supplémentaire sur votre premier dépôt en utilisant notre code promo :promocode."}',
             'value_pt' => '{"0":"Nesta análise, vamos examinar detalhadamente algumas das ofertas promocionais. Também explicaremos como obter um bônus extra no seu primeiro depósito usando nosso código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 3
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 4
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode on 4rabet, first go to the official website and click the «Registration» button. Then fill out the standard registration form, where you need to enter your phone number, create a password, and choose the currency of your account."}',
             'value_es' => '{"0":"Para usar el código promocional :promocode en 4rabet, primero ve al sitio web oficial y haz clic en el botón «Registro». Luego completa el formulario de registro estándar, donde deberás ingresar tu número de teléfono, crear una contraseña y elegir la moneda de tu cuenta."}',
             'value_fr' => '{"0":"Pour utiliser le code promo :promocode sur 4rabet, rendez-vous d’abord sur le site officiel et cliquez sur le bouton « Inscription ». Remplissez ensuite le formulaire d’inscription standard, où vous devez indiquer votre numéro de téléphone, créer un mot de passe et choisir la devise de votre compte."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode na 4rabet, primeiro acesse o site oficial e clique no botão «Registro». Em seguida, preencha o formulário de registro padrão, onde deve inserir o seu número de telefone, criar uma senha e escolher a moeda da sua conta."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 5
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Next, click «I have a promo code» and enter the code :promocode in the new field. After that, select one of the available welcome packages: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins», or «Live Casino Welcome Bonus 150%»."}',
             'value_es' => '{"0":"A continuación, haz clic en «Tengo un código promocional» e introduce el código :promocode en el nuevo campo. Después de eso, selecciona uno de los paquetes de bienvenida disponibles: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins» o «Live Casino Welcome Bonus 150%»."}',
             'value_fr' => '{"0":"Ensuite, cliquez sur « J’ai un code promo » et saisissez le code :promocode dans le nouveau champ. Choisissez ensuite l’un des packs de bienvenue disponibles : « Easiest Win Crash Pack 700 % », « Crash Welcome 700 % », « Sports Welcome Offer 700 % », « Slots 150 % Bonus + 200 Free Spins » ou « Live Casino Welcome Bonus 150 % »."}',
             'value_pt' => '{"0":"Depois, clique em «Tenho um código promocional» e insira o código :promocode no novo campo. Em seguida, escolha um dos pacotes de boas-vindas disponíveis: «Easiest Win Crash Pack 700%», «Crash Welcome 700%», «Sports Welcome Offer 700%», «Slots 150% Bonus + 200 Free Spins» ou «Live Casino Welcome Bonus 150%»."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 6
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Once you have entered the code and confirmed your profile, you need to make a minimum deposit of $3 or the equivalent in another currency, and the bonus will be credited automatically according to the selected package."}',
             'value_es' => '{"0":"Una vez que hayas introducido el código y confirmado tu perfil, deberás realizar un depósito mínimo de 3 dólares o el equivalente en otra moneda, y el bono se acreditará automáticamente según el paquete seleccionado."}',
             'value_fr' => '{"0":"Une fois le code saisi et votre profil confirmé, vous devez effectuer un dépôt minimum de 3 dollars ou l’équivalent dans une autre devise, et le bonus sera automatiquement crédité en fonction du pack choisi."}',
             'value_pt' => '{"0":"Depois de inserir o código e confirmar o seu perfil, é necessário fazer um depósito mínimo de 3 dólares ou o equivalente em outra moeda, e o bônus será creditado automaticamente de acordo com o pacote selecionado."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 7
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 8
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Note that to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Tenga en cuenta que para retirar los fondos del bono, primero debe cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que pour retirer les fonds du bonus, vous devez d\'abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Observe que, para sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 9
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To claim the welcome bonus from the «Easiest Win Crash Pack 700%», you need to make a deposit between $3 and $5 and wager your bonus 20 times within 7 days in the games Aviator, JetX, Chicken Road, and Chicken Road 2."}',
             'value_es' => '{"0":"Para obtener el bono de bienvenida del paquete «Easiest Win Crash Pack 700%», debe realizar un depósito entre 3 y 5 dólares y apostar el bono 20 veces en un plazo de 7 días en los juegos Aviator, JetX, Chicken Road y Chicken Road 2."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue du pack «Easiest Win Crash Pack 700%», vous devez effectuer un dépôt compris entre 3 et 5 dollars et miser votre bonus 20 fois en 7 jours sur les jeux Aviator, JetX, Chicken Road et Chicken Road 2."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas do pacote «Easiest Win Crash Pack 700%», você deve fazer um depósito entre 3 e 5 dólares e apostar o bônus 20 vezes em até 7 dias nos jogos Aviator, JetX, Chicken Road e Chicken Road 2."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 10
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To claim the welcome bonus from the «Crash Welcome 700%» package, you must deposit between $3 and $110 and wager your bonus 40 times within 7 days in the games Aviator, JetX, Chicken Road, and Chicken Road 2."}',
             'value_es' => '{"0":"Para obtener el bono de bienvenida del paquete «Crash Welcome 700%», debe depositar entre 3 y 110 dólares y apostar el bono 40 veces en un plazo de 7 días en los juegos Aviator, JetX, Chicken Road y Chicken Road 2."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue du pack «Crash Welcome 700%», vous devez déposer entre 3 et 110 dollars et miser votre bonus 40 fois en 7 jours sur les jeux Aviator, JetX, Chicken Road et Chicken Road 2."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas do pacote «Crash Welcome 700%», é necessário depositar entre 3 e 110 dólares e apostar o bônus 40 vezes em até 7 dias nos jogos Aviator, JetX, Chicken Road e Chicken Road 2."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 11
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To receive the welcome bonus from the «Sports Welcome Offer 700%» package, you need to deposit between $3 and $55 and wager your bonus 7 times on sports bets with odds higher than 1.5 within 7 days."}',
             'value_es' => '{"0":"Para recibir el bono de bienvenida del paquete «Sports Welcome Offer 700%», debe realizar un depósito entre 3 y 55 dólares y apostar el bono 7 veces en apuestas deportivas con cuotas superiores a 1.5 en un plazo de 7 días."}',
             'value_fr' => '{"0":"Pour obtenir le bonus de bienvenue du pack «Sports Welcome Offer 700%», vous devez effectuer un dépôt compris entre 3 et 55 dollars et miser votre bonus 7 fois sur des paris sportifs avec une cote supérieure à 1,5 dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas do pacote «Sports Welcome Offer 700%», você deve fazer um depósito entre 3 e 55 dólares e apostar o bônus 7 vezes em apostas esportivas com odds acima de 1,5 dentro de 7 dias."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 12
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To claim the bonus from the «Slots 150% Bonus + 200 Free Spins» package, you must deposit between $3 and $110 and wager your bonus 20 times within one day in the game Slots by Three Oaks."}',
             'value_es' => '{"0":"Para obtener el bono del paquete «Slots 150% Bonus + 200 Free Spins», debe depositar entre 3 y 110 dólares y apostar el bono 20 veces en un día en el juego Slots by Three Oaks."}',
             'value_fr' => '{"0":"Pour recevoir le bonus du pack «Slots 150% Bonus + 200 Free Spins», vous devez déposer entre 3 et 110 dollars et miser votre bonus 20 fois en une journée sur le jeu Slots by Three Oaks."}',
             'value_pt' => '{"0":"Para obter o bônus do pacote «Slots 150% Bonus + 200 Free Spins», é necessário depositar entre 3 e 110 dólares e apostar o bônus 20 vezes em um dia no jogo Slots by Three Oaks."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 13
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"To obtain the bonus from the «Live Casino Welcome Bonus 150%» package, you need to deposit between $3 and $110 and wager your bonus 45 times within one day in Live Casino by Evolution."}',
             'value_es' => '{"0":"Para recibir el bono del paquete «Live Casino Welcome Bonus 150%», es necesario realizar un depósito entre 3 y 110 dólares y apostar el bono 45 veces en un día en Live Casino by Evolution."}',
             'value_fr' => '{"0":"Pour bénéficier du bonus du pack «Live Casino Welcome Bonus 150%», vous devez effectuer un dépôt entre 3 et 110 dollars et miser votre bonus 45 fois en une journée sur Live Casino by Evolution."}',
             'value_pt' => '{"0":"Para receber o bônus do pacote «Live Casino Welcome Bonus 150%», você deve fazer um depósito entre 3 e 110 dólares e apostar o bônus 45 vezes em um dia no Live Casino by Evolution."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 14
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 15
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet doesn’t limit its offers to new players only. Regular users of the platform can participate in promotions and receive deposit bonuses. For example, making a repeat deposit can earn you a percentage of your deposit as a bonus. There is also a loyalty program where active players accumulate points that can be exchanged for bonus funds or free spins."}',
             'value_es' => '{"0":"4rabet no se limita a ofrecer bonos solo para nuevos jugadores. Los usuarios habituales de la plataforma pueden participar en promociones y recibir bonos por depósito. Por ejemplo, al realizar un depósito adicional, pueden obtener un porcentaje del monto como bono. Además, existe un programa de fidelidad donde los jugadores activos acumulan puntos que pueden canjear por fondos de bono o giros gratis."}',
             'value_fr' => '{"0":"4rabet ne se limite pas aux bonus destinés uniquement aux nouveaux joueurs. Les utilisateurs réguliers de la plateforme peuvent participer à des promotions et recevoir des bonus de dépôt. Par exemple, un dépôt supplémentaire peut donner droit à un pourcentage de celui-ci sous forme de bonus. Il existe également un programme de fidélité où les joueurs actifs accumulent des points échangeables contre des fonds bonus ou des tours gratuits."}',
             'value_pt' => '{"0":"A 4rabet não se limita a oferecer bônus apenas para novos jogadores. Os usuários regulares da plataforma podem participar de promoções e receber bônus de depósito. Por exemplo, ao fazer um novo depósito, é possível receber uma porcentagem do valor como bônus. Há também um programa de fidelidade em que jogadores ativos acumulam pontos que podem ser trocados por fundos de bônus ou rodadas grátis."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 16
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 17
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet occasionally offers no-deposit bonuses, but they are less common than deposit promotions. Currently, there are no active no-deposit bonuses on the site. However, we recommend checking the Bonuses section from time to time so you don’t miss an attractive offer."}',
             'value_es' => '{"0":"4rabet a veces ofrece bonos sin depósito, pero son menos frecuentes que las promociones con depósito. Actualmente, no hay bonos sin depósito disponibles en el sitio. Sin embargo, te recomendamos revisar la sección de Bonos de vez en cuando para no perderte una oferta atractiva."}',
             'value_fr' => '{"0":"4rabet propose parfois des bonus sans dépôt, mais ils sont moins fréquents que les promotions avec dépôt. Actuellement, aucun bonus sans dépôt n’est disponible sur le site. Cependant, nous vous recommandons de consulter régulièrement la section Bonus afin de ne pas manquer une offre intéressante."}',
             'value_pt' => '{"0":"A 4rabet ocasionalmente oferece bônus sem depósito, mas eles são menos comuns do que as promoções com depósito. No momento, não há bônus sem depósito disponíveis no site. No entanto, recomendamos verificar a seção de Bônus de tempos em tempos para não perder uma oferta vantajosa."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 18
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet Casino Welcome Offer"}',
                'value_es' => '{"0":"Oferta de bienvenida del casino 4rabet"}',
                'value_fr' => '{"0":"Offre de bienvenue du casino 4rabet"}',
                'value_pt' => '{"0":"Oferta de boas-vindas do cassino 4rabet"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 19
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet offers new users a generous 150% welcome bonus for casino play. To take advantage of this offer, you need to make a deposit, after which the bonus will be credited automatically. This significantly boosts your balance and lets you explore a variety of live dealer games."}',
             'value_es' => '{"0":"4rabet ofrece a los nuevos usuarios un generoso bono de bienvenida del 150% para jugar en el casino. Para aprovechar esta oferta, debes realizar un depósito, tras lo cual el bono se acreditará automáticamente. Esto aumenta significativamente tu saldo y te permite probar una gran variedad de juegos con crupieres en vivo."}',
             'value_fr' => '{"0":"4rabet propose aux nouveaux utilisateurs un généreux bonus de bienvenue de 150 % pour jouer au casino. Pour profiter de cette offre, il suffit d’effectuer un dépôt, après quoi le bonus sera crédité automatiquement. Cela permet d’augmenter considérablement votre solde et de découvrir une large sélection de jeux avec croupiers en direct."}',
             'value_pt' => '{"0":"A 4rabet oferece aos novos usuários um generoso bônus de boas-vindas de 150% para jogar no cassino. Para aproveitar esta oferta, é necessário fazer um depósito, e o bônus será creditado automaticamente. Isso aumenta significativamente o saldo e permite experimentar diversos jogos com crupiês ao vivo."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 20
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The deposit amount required to activate the bonus ranges from $3 to $110. Before any winnings can be withdrawn, the bonus must be wagered 45 times. The entire bonus must be wagered within 24 hours of activation, otherwise it will be forfeited."}',
             'value_es' => '{"0":"El monto del depósito necesario para activar el bono debe estar entre 3 y 110 dólares. Antes de poder retirar cualquier ganancia, se debe cumplir un requisito de apuesta de x45. Todo el bono debe apostarse dentro de las 24 horas posteriores a su activación, de lo contrario será anulado."}',
             'value_fr' => '{"0":"Le montant du dépôt requis pour activer le bonus doit être compris entre 3 et 110 dollars. Avant tout retrait, le bonus doit être misé 45 fois. L’intégralité du bonus doit être jouée dans les 24 heures suivant son activation, faute de quoi il sera annulé."}',
             'value_pt' => '{"0":"O valor do depósito para ativar o bônus deve estar entre US$3 e US$110. Antes de sacar quaisquer ganhos, o bônus deve ser apostado 45 vezes. Todo o bônus deve ser apostado dentro de 24 horas após a ativação; caso contrário, ele será cancelado."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 21
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"This promotion applies only to new players and is valid exclusively for Evolution Live games. Bets placed on other games are not counted. After completing the wagering requirements, the maximum withdrawal amount cannot exceed the bonus received. The use of multiple accounts is strictly prohibited — violators will lose their bonuses and have their accounts blocked."}',
             'value_es' => '{"0":"La promoción está disponible solo para nuevos jugadores y se aplica exclusivamente a los juegos de Evolution Live. Las apuestas en otros juegos no cuentan. Después de cumplir los requisitos de apuesta, el monto máximo de retiro no puede exceder el valor del bono recibido. El uso de múltiples cuentas está estrictamente prohibido: los infractores perderán sus bonos y sus cuentas serán bloqueadas."}',
             'value_fr' => '{"0":"Cette promotion est réservée aux nouveaux joueurs et s’applique uniquement aux jeux Evolution Live. Les paris effectués sur d’autres jeux ne sont pas pris en compte. Après avoir rempli les conditions de mise, le montant maximal retirable ne peut pas dépasser la valeur du bonus reçu. L’utilisation de plusieurs comptes est strictement interdite — les contrevenants perdront leurs bonus et verront leurs comptes bloqués."}',
             'value_pt' => '{"0":"A promoção é válida apenas para novos jogadores e aplica-se exclusivamente aos jogos Evolution Live. As apostas em outros jogos não são consideradas. Após cumprir os requisitos de aposta, o valor máximo que pode ser sacado não pode exceder o montante do bônus recebido. O uso de várias contas é estritamente proibido — os infratores perderão seus bônus e terão suas contas bloqueadas."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 22
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 23
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"Daily and Weekly Missions"}',
                'value_es' => '{"0":"Misiones Diarias y Semanales"}',
                'value_fr' => '{"0":"Missions Quotidiennes et Hebdomadaires"}',
                'value_pt' => '{"0":"Missões Diárias e Semanais"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 24
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"4rabet features an engaging promotion called «Daily and Weekly Missions». It’s a set of tasks with different difficulty levels — easy, medium, and hard — that are updated daily and weekly. By completing these missions, such as placing a certain number of bets, playing specific slot games, or building accumulators, players earn experience points (XP), level up, and unlock various rewards. As part of this promotion, you can receive free spins, cashback, free bets, or bonus funds."}',
             'value_es' => '{"0":"4rabet ofrece una interesante promoción llamada «Misiones Diarias y Semanales». Se trata de un conjunto de tareas con distintos niveles de dificultad —fácil, medio y difícil— que se actualizan cada día y cada semana. Al completar estas misiones, como realizar una cantidad determinada de apuestas, jugar a ciertos tragamonedas o crear combinadas, los jugadores obtienen puntos de experiencia (XP), suben de nivel y desbloquean diferentes recompensas. Dentro de esta promoción, puedes recibir giros gratis, reembolsos, apuestas gratuitas o fondos de bonificación."}',
             'value_fr' => '{"0":"4rabet propose une promotion intéressante intitulée « Missions Quotidiennes et Hebdomadaires ». Il s’agit d’un ensemble de défis de différents niveaux de difficulté — facile, moyen et difficile — qui sont mis à jour chaque jour et chaque semaine. En accomplissant ces missions, comme effectuer un certain nombre de paris, jouer à des machines à sous spécifiques ou créer des paris combinés, les joueurs gagnent des points d’expérience (XP), montent en niveau et débloquent diverses récompenses. Dans le cadre de cette promotion, vous pouvez obtenir des tours gratuits, du cashback, des paris gratuits ou des fonds bonus."}',
             'value_pt' => '{"0":"A 4rabet oferece uma promoção interessante chamada «Missões Diárias e Semanais». Trata-se de um conjunto de tarefas com diferentes níveis de dificuldade — fáceis, médias e difíceis — que são atualizadas diariamente e semanalmente. Ao completar essas missões, como fazer um determinado número de apostas, jogar slots específicos ou criar acumuladores, os jogadores ganham pontos de experiência (XP), sobem de nível e desbloqueiam várias recompensas. Nesta promoção, é possível receber rodadas grátis, cashback, apostas grátis ou fundos de bônus."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 25
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 27
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h2',
                'value_en' => '{"0":"4rabet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 4rabet"}',
                'value_fr' => '{"0":"FAQ de 4rabet"}',
                'value_pt' => '{"0":"Perguntas frequentes do 4rabet"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 28
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use multiple promo codes at the same time?"}',
             'value_es' => '{"0":"¿Puedo usar varios códigos promocionales al mismo tiempo?"}',
             'value_fr' => '{"0":"Puis-je utiliser plusieurs codes promo en même temps ?"}',
             'value_pt' => '{"0":"Posso usar vários códigos promocionais ao mesmo tempo?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 29
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No, only one promo code can be activated per account."}',
             'value_es' => '{"0":"No, solo se puede activar un código promocional por cuenta."}',
             'value_fr' => '{"0":"Non, un seul code promo peut être activé par compte."}',
             'value_pt' => '{"0":"Não, apenas um código promocional pode ser ativado por conta."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 30
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"How long does it take for the bonus to be credited after activating the promo code?"}',
             'value_es' => '{"0":"¿Cuánto tiempo tarda en acreditarse el bono después de activar el código promocional?"}',
             'value_fr' => '{"0":"Combien de temps faut-il pour que le bonus soit crédité après l’activation du code promo ?"}',
             'value_pt' => '{"0":"Quanto tempo leva para o bônus ser creditado após a ativação do código promocional?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 31
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"The bonus is credited within a few minutes after registration and making a deposit."}',
             'value_es' => '{"0":"El bono se acredita en pocos minutos después de registrarse y realizar el depósito."}',
             'value_fr' => '{"0":"Le bonus est crédité quelques minutes après l’inscription et le dépôt."}',
             'value_pt' => '{"0":"O bônus é creditado em poucos minutos após o registro e o depósito."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 32
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw funds before completing the wagering requirements?"}',
             'value_es' => '{"0":"¿Puedo retirar fondos antes de cumplir con los requisitos de apuesta?"}',
             'value_fr' => '{"0":"Puis-je retirer des fonds avant d’avoir rempli les conditions de mise ?"}',
             'value_pt' => '{"0":"Posso sacar os fundos antes de cumprir os requisitos de aposta?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 33
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"No, bonus funds cannot be withdrawn until the wagering requirements are met."}',
             'value_es' => '{"0":"No, los fondos del bono no se pueden retirar hasta que se cumplan los requisitos de apuesta."}',
             'value_fr' => '{"0":"Non, les fonds du bonus ne peuvent pas être retirés avant que les conditions de mise ne soient remplies."}',
             'value_pt' => '{"0":"Não, os fundos de bônus não podem ser retirados até que os requisitos de aposta sejam cumpridos."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 34
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses valid in the 4rabet mobile app?"}',
             'value_es' => '{"0":"¿Los bonos son válidos en la aplicación móvil de 4rabet?"}',
             'value_fr' => '{"0":"Les bonus sont-ils valables dans l’application mobile 4rabet ?"}',
             'value_pt' => '{"0":"Os bônus funcionam no aplicativo móvel 4rabet?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 35
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all promotions and bonuses are available both on the desktop version and in the mobile app."}',
             'value_es' => '{"0":"Sí, todas las promociones y bonos están disponibles tanto en la versión de escritorio como en la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et tous les bonus sont disponibles à la fois sur la version de bureau et dans l’application mobile."}',
             'value_pt' => '{"0":"Sim, todas as promoções e bônus estão disponíveis tanto na versão para desktop quanto no aplicativo móvel."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 36
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'h3',
             'value_en' => '{"0":"Are there country restrictions for activating bonuses?"}',
             'value_es' => '{"0":"¿Existen restricciones por país para activar los bonos?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions par pays pour l’activation des bonus ?"}',
             'value_pt' => '{"0":"Existem restrições por país para ativar os bônus?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '4rabet',
             'order' => 37
            ],
            ['key' => '4rabet',
             'bookmaker_id' => 7,
             'component' => 'p',
             'value_en' => '{"0":"Yes, some bonuses may be unavailable in certain regions due to local laws."}',
             'value_es' => '{"0":"Sí, algunos bonos pueden no estar disponibles en ciertas regiones debido a la legislación local."}',
             'value_fr' => '{"0":"Oui, certains bonus peuvent ne pas être disponibles dans certaines régions en raison de la législation locale."}',
             'value_pt' => '{"0":"Sim, alguns bônus podem não estar disponíveis em determinadas regiões devido à legislação local."}',
             'order' => 37
            ]
        );
    }
}
