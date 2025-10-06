<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMOSTBETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 1
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet is an international betting platform that offers a wide range of bonuses and promotions designed for both new and regular players. Welcome bonuses, special offers, no-deposit deals, and loyalty programs help you maximize your potential winnings."}',
             'value_es' => '{"0":"Mostbet es una plataforma internacional de apuestas que ofrece una amplia gama de bonificaciones y promociones dirigidas tanto a nuevos como a jugadores habituales. Los bonos de bienvenida, las ofertas especiales, las promociones sin depósito y los programas de fidelidad te ayudarán a aumentar tus posibles ganancias."}',
             'value_fr' => '{"0":"Mostbet est une plateforme internationale de paris qui propose une large gamme de bonus et de promotions destinés aussi bien aux nouveaux qu’aux joueurs réguliers. Les bonus de bienvenue, les offres spéciales, les promotions sans dépôt et les programmes de fidélité vous aideront à augmenter vos gains potentiels."}',
             'value_pt' => '{"0":"A Mostbet é uma plataforma internacional de apostas que oferece uma ampla variedade de bônus e promoções voltadas tanto para novos quanto para jogadores regulares. Bônus de boas-vindas, ofertas especiais, promoções sem depósito e programas de fidelidade ajudam você a aumentar seus ganhos potenciais."}',
             'order' => 1,
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 2
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a closer look at the available promotions and bonus programs, explain how to activate and use them, and show you how to boost your first deposit using our promo code: :promocode."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle las promociones y programas de bonificación disponibles, las reglas para activarlos y utilizarlos, y también te mostraremos cómo aumentar tu primer depósito utilizando nuestro código promocional: :promocode."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail les promotions et programmes de bonus disponibles, les règles pour les activer et les utiliser, ainsi que la façon d’augmenter votre premier dépôt en utilisant notre code promotionnel : :promocode."}',
             'value_pt' => '{"0":"Nesta análise, examinaremos detalhadamente as promoções e programas de bônus disponíveis, explicaremos como ativá-los e utilizá-los e mostraremos como aumentar o seu primeiro depósito usando o nosso código promocional: :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 3
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 4
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To use the :promocode promo code on Mostbet, you first need to complete the registration process on the website. Go to the official site and click the REGISTER button. Then choose one of the registration methods: one-click, by phone, by email, or through a social network, and fill in all the required fields. Click the ADD PROMO CODE button and enter :promocode in the designated field."}',
             'value_es' => '{"0":"Para usar el código promocional :promocode en Mostbet, primero debes completar el proceso de registro en el sitio web. Ve al sitio oficial y haz clic en el botón REGISTRARSE. Luego elige uno de los métodos de registro: en un clic, por teléfono, por correo electrónico o a través de una red social, y completa todos los campos requeridos. Haz clic en el botón AÑADIR CÓDIGO PROMOCIONAL e introduce :promocode en el campo correspondiente."}',
             'value_fr' => '{"0":"Pour utiliser le code promo :promocode sur Mostbet, vous devez d’abord compléter le processus d’inscription sur le site. Rendez-vous sur le site officiel et cliquez sur le bouton INSCRIPTION. Choisissez ensuite l’une des méthodes d’inscription : en un clic, par téléphone, par e-mail ou via un réseau social, puis remplissez tous les champs requis. Cliquez sur le bouton AJOUTER UN CODE PROMO et saisissez :promocode dans le champ prévu à cet effet."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode na Mostbet, primeiro é necessário concluir o processo de registro no site. Acesse o site oficial e clique no botão REGISTAR-SE. Em seguida, escolha um dos métodos de registro: em um clique, por telefone, por e-mail ou por rede social, e preencha todos os campos obrigatórios. Clique no botão ADICIONAR CÓDIGO PROMOCIONAL e insira :promocode no campo indicado."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 5
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Also, don’t forget to specify where you plan to use the promo code — for casino games or sports betting. After making a deposit from $10 to $220, you will receive a 125% bonus on your deposit amount and 250 free spins."}',
             'value_es' => '{"0":"No olvides indicar dónde deseas usar el código promocional, si en el casino o en las apuestas deportivas. Después de realizar un depósito de entre $10 y $220, recibirás un bono del 125% sobre el monto del depósito y 250 giros gratis."}',
             'value_fr' => '{"0":"N’oubliez pas d’indiquer où vous souhaitez utiliser le code promo — pour les jeux de casino ou pour les paris sportifs. Après avoir effectué un dépôt compris entre 10 $ et 220 $, vous recevrez un bonus de 125 % du montant du dépôt et 250 tours gratuits."}',
             'value_pt' => '{"0":"Não se esqueça de especificar onde pretende usar o código promocional — para jogos de cassino ou apostas esportivas. Após fazer um depósito entre $10 e $220, você receberá um bônus de 125% sobre o valor do depósito e 250 rodadas grátis."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 6
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 7
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Keep in mind that to withdraw bonus funds, you must first meet the wagering requirements. If you chose the casino bonus, you need to wager the bonus amount sixty times. If you selected the sports betting bonus, you must wager the bonus amount five times on accumulator bets that include at least three events with odds of no less than 1.4."}',
             'value_es' => '{"0":"Ten en cuenta que, para retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta. Si elegiste el bono para el casino, deberás apostar el monto del bono sesenta veces. Si seleccionaste el bono para apuestas deportivas, deberás apostar el monto del bono cinco veces en apuestas combinadas con al menos tres eventos con cuotas no inferiores a 1.4."}',
             'value_fr' => '{"0":"Gardez à l’esprit que pour retirer les fonds du bonus, vous devez d’abord remplir les conditions de mise. Si vous avez choisi le bonus de casino, vous devez miser le montant du bonus soixante fois. Si vous avez choisi le bonus pour les paris sportifs, vous devez miser le montant du bonus cinq fois sur des paris combinés comportant au moins trois événements avec des cotes d’au moins 1.4."}',
             'value_pt' => '{"0":"Tenha em mente que, para sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de apostas. Se você escolheu o bônus de cassino, deve apostar o valor do bônus sessenta vezes. Se optou pelo bônus de apostas esportivas, deve apostar o valor do bônus cinco vezes em apostas múltiplas com pelo menos três eventos e odds não inferiores a 1.4."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 8
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 9
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet offers a wide range of bonuses and promotions designed for regular players. With these offers, for example, you can receive a cashback on your losses. In addition, the platform provides a bet insurance option, allowing you to recover part of your stake in case of a loss."}',
             'value_es' => '{"0":"Mostbet ofrece una amplia gama de bonos y promociones dirigidas a los jugadores habituales. Con estas ofertas, por ejemplo, puedes recuperar parte del dinero perdido en tu cuenta. Además, la plataforma ofrece la opción de seguro de apuestas, lo que te permite recuperar parte de tu dinero en caso de pérdida."}',
             'value_fr' => '{"0":"Mostbet propose une large gamme de bonus et de promotions destinés aux joueurs réguliers. Grâce à ces offres, par exemple, vous pouvez récupérer une partie de vos pertes sur votre compte. De plus, la plateforme offre une option d’assurance de pari, qui vous permet de récupérer une partie de votre mise en cas de perte."}',
             'value_pt' => '{"0":"A Mostbet oferece uma ampla variedade de bônus e promoções voltadas para jogadores frequentes. Com essas ofertas, por exemplo, é possível recuperar parte do dinheiro perdido na conta. Além disso, a plataforma disponibiliza a opção de seguro de aposta, que permite recuperar parte do valor apostado em caso de perda."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 10
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"For active players, special promotions are held regularly — for instance, by making a deposit on Tuesday, you can receive a +60% bonus. Mostbet also grants personalized birthday gifts, which are automatically credited to your account and allow you to place a few free bets on sports or play in the casino."}',
             'value_es' => '{"0":"Para los jugadores más activos, se organizan promociones especiales de forma regular; por ejemplo, al hacer un depósito los martes, recibirás un bono del +60%. Mostbet también ofrece regalos personalizados de cumpleaños, que se acreditan automáticamente en tu cuenta y te permiten realizar algunas apuestas gratuitas o jugar en el casino."}',
             'value_fr' => '{"0":"Pour les joueurs actifs, des promotions spéciales sont régulièrement organisées — par exemple, un bonus de +60 % est offert pour tout dépôt effectué le mardi. Mostbet offre également des cadeaux d’anniversaire personnalisés, crédités automatiquement sur votre compte, vous permettant de placer quelques paris gratuits ou de jouer au casino."}',
             'value_pt' => '{"0":"Para os jogadores mais ativos, promoções especiais são realizadas regularmente — por exemplo, ao fazer um depósito na terça-feira, você recebe um bônus de +60%. A Mostbet também oferece presentes personalizados de aniversário, creditados automaticamente na conta, permitindo fazer algumas apostas grátis em esportes ou jogar no cassino."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 11
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 12
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Mostbet does not always offer no-deposit bonuses, but such promotions occasionally appear. Their main advantage is that you don’t need to make a deposit to receive extra funds or free spins. Therefore, active players should keep an eye on updates in the «Promotions» section to avoid missing profitable offers."}',
             'value_es' => '{"0":"Mostbet no siempre ofrece bonos sin depósito, pero estas promociones aparecen de vez en cuando. Su principal ventaja es que no necesitas hacer un depósito para recibir dinero extra o giros gratis. Por eso, los jugadores activos deben estar atentos a las actualizaciones en la sección «Promociones» para no perder ofertas ventajosas."}',
             'value_fr' => '{"0":"Mostbet ne propose pas toujours de bonus sans dépôt, mais de telles promotions apparaissent parfois. Leur principal avantage est qu’il n’est pas nécessaire de déposer de l’argent pour obtenir des fonds supplémentaires ou des tours gratuits. Ainsi, les joueurs actifs devraient surveiller régulièrement la section « Promotions » afin de ne pas manquer les offres intéressantes."}',
             'value_pt' => '{"0":"A Mostbet nem sempre oferece bônus sem depósito, mas essas promoções aparecem ocasionalmente. A principal vantagem é que você não precisa fazer um depósito para receber fundos extras ou rodadas grátis. Por isso, os jogadores ativos devem ficar atentos às atualizações na seção «Promoções» para não perder ofertas vantajosas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 13
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
             'value_en' => '{"0":"SPORTS LOYALTY PROGRAMME"}',
             'value_es' => '{"0":"SPORTS LOYALTY PROGRAMME"}',
             'value_fr' => '{"0":"PROGRAMME DE FIDÉLITÉ SPORT"}',
             'value_pt' => '{"0":"PROG. FIDELIZAÇÃO DESPORTO"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 14
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Loyalty Program is a great opportunity to earn free bets, MOSTBET coins, bonus points, and achievement rewards. Stay active, play often, and grab your gifts! The number of bonuses and the exchange rate of MOSTBET coins depend on your status in the Loyalty Program. The more achievements you have, the higher your level and the better your rewards."}',
             'value_es' => '{"0":"El Programa de Lealtad es una excelente oportunidad para obtener apuestas gratis, monedas MOSTBET, puntos de bonificación y recompensas por logros. ¡Mantente activo, juega mucho y disfruta de tus premios! La cantidad de bonos y la tasa de conversión de las monedas MOSTBET dependen de tu nivel en el Programa de Lealtad. Cuantos más logros consigas, mayor será tu nivel y mejores las recompensas."}',
             'value_fr' => '{"0":"Le Programme de Fidélité est une excellente occasion d’obtenir des paris gratuits, des pièces MOSTBET, des points bonus et des récompenses pour vos réussites. Restez actif, jouez souvent et profitez de vos cadeaux ! Le nombre de bonus et le taux d’échange des pièces MOSTBET dépendent de votre statut dans le Programme de Fidélité. Plus vous avez de succès, plus votre statut est élevé et plus les récompenses sont intéressantes."}',
             'value_pt' => '{"0":"O Programa de Fidelidade é uma ótima oportunidade para ganhar apostas grátis, moedas MOSTBET, pontos de bônus e recompensas por conquistas. Mantenha-se ativo, jogue bastante e aproveite seus prêmios! A quantidade de bônus e a taxa de conversão das moedas MOSTBET dependem do seu nível no Programa de Fidelidade. Quanto mais conquistas você tiver, maior será seu status e melhores serão as recompensas."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 15
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Visit the dedicated section in your profile, complete exciting tasks, and receive well-deserved bonuses! The higher your loyalty level, the more free bets and coins you can earn."}',
             'value_es' => '{"0":"Ingresa a la sección correspondiente en tu perfil, completa tareas interesantes y recibe tus bonos merecidos. Cuanto más alto sea tu nivel de lealtad, mayor será la cantidad y el valor de las apuestas gratis y monedas que podrás obtener."}',
             'value_fr' => '{"0":"Accédez à la section dédiée dans votre profil, accomplissez des missions captivantes et recevez vos bonus mérités ! Plus votre niveau de fidélité est élevé, plus le nombre et la valeur des paris gratuits et des pièces augmentent."}',
             'value_pt' => '{"0":"Acesse a seção correspondente no seu perfil, conclua tarefas interessantes e receba seus bônus merecidos! Quanto maior o seu nível de fidelidade, mais apostas grátis e moedas você poderá receber."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 16
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"To successfully convert bonus funds into real money and withdraw them from your account, you must meet the wagering conditions: wager the bonus amount 5 times on accumulator bets with at least 3 events, each having odds of no less than 1.4, within 7 days."}',
             'value_es' => '{"0":"Para convertir los fondos de bonificación en dinero real y retirarlos, debes cumplir las condiciones de apuesta: apostar el monto del bono 5 veces en apuestas combinadas con al menos 3 eventos y una cuota mínima de 1.4 para cada uno, dentro de los 7 días."}',
             'value_fr' => '{"0":"Pour convertir vos bonus en argent réel et les retirer, vous devez remplir les conditions suivantes : miser le montant du bonus 5 fois sur des paris combinés comprenant au moins 3 événements, chacun avec une cote minimale de 1.4, dans un délai de 7 jours."}',
             'value_pt' => '{"0":"Para converter os fundos de bônus em dinheiro real e retirá-los, é necessário cumprir as condições: apostar o valor do bônus 5 vezes em apostas múltiplas com pelo menos 3 eventos e odds mínimas de 1.4 para cada um, dentro de 7 dias."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 17
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 18
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"ACCUMULATOR BOOSTER"}',
                'value_es' => '{"0":"Accumulator BOOSTER"}',
                'value_fr' => '{"0":"Accumulator BOOSTER"}',
                'value_pt' => '{"0":"REFORÇO DE COMBINADA"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 19
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The ACCUMULATOR BOOSTER promotion is designed for players who place accumulator bets. The platform automatically increases the odds of your bet slip if it includes four or more events with odds above 1.2. The bonus percentage depends on the number of events in the slip: four events increase the total odds by one percent, five events by two percent, six events by three percent, and so on."}',
             'value_es' => '{"0":"La promoción Accumulator Booster está pensada para los jugadores que realizan apuestas combinadas. La plataforma aumenta automáticamente la cuota del boleto si incluye cuatro o más eventos con cuotas superiores a 1.2. El porcentaje del bono depende del número de eventos: cuatro eventos aumentan la cuota total en un uno por ciento, cinco eventos en un dos por ciento, seis eventos en un tres por ciento, y así sucesivamente."}',
             'value_fr' => '{"0":"La promotion Accumulator Booster est conçue pour les joueurs qui placent des paris combinés. La plateforme augmente automatiquement la cote du pari si celui-ci comprend quatre événements ou plus avec une cote supérieure à 1,2. Le pourcentage de bonus dépend du nombre d’événements dans le pari : quatre événements augmentent la cote totale d’un pour cent, cinq événements de deux pour cent, six événements de trois pour cent, et ainsi de suite."}',
             'value_pt' => '{"0":"A promoção REFORÇO DE COMBINADA foi criada para jogadores que fazem apostas múltiplas. A plataforma aumenta automaticamente as odds do bilhete se ele incluir quatro ou mais eventos com odds superiores a 1,2. O valor do bônus depende do número de eventos: quatro eventos aumentam as odds totais em um por cento, cinco eventos em dois por cento, seis eventos em três por cento e assim por diante."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 20
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows players to earn higher winnings without additional risks and is activated automatically, making the betting process both convenient and profitable. A key advantage of this offer is that it applies to all sports events and does not require any wagering conditions."}',
             'value_es' => '{"0":"Esta promoción permite a los jugadores obtener mayores ganancias sin riesgos adicionales y se activa automáticamente, lo que hace que el proceso de apuestas sea cómodo y rentable. Una de las ventajas de esta oferta es que se aplica a todos los deportes y no requiere condiciones de apuesta."}',
             'value_fr' => '{"0":"Cette offre permet aux joueurs d’obtenir des gains plus élevés sans risques supplémentaires et s’active automatiquement, rendant le processus de pari pratique et avantageux. Un autre atout de cette promotion est qu’elle s’applique à tous les événements sportifs et ne nécessite aucune condition de mise."}',
             'value_pt' => '{"0":"Esta promoção permite que os jogadores obtenham ganhos maiores sem riscos adicionais e é ativada automaticamente, tornando o processo de apostas prático e vantajoso. Um diferencial desta oferta é que ela se aplica a todos os eventos esportivos e não possui requisitos de aposta."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 21
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 22
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"RISK-FREE BET"}',
                'value_es' => '{"0":"Apuesta Sin Riesgo"}',
                'value_fr' => '{"0":"Pari Sans Risque"}',
                'value_pt' => '{"0":"APOSTA SEM RISCO"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 23
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The Risk-Free Bet allows you to place bets without the risk of losing. You can choose an event, such as a football match, with odds of two or higher. If the bet doesn’t go your way, you’ll receive 100% of your stake back in the form of a bonus."}',
             'value_es' => '{"0":"La promoción Risk-Free Bet te permite realizar apuestas sin riesgo de pérdida. Puedes elegir un evento, por ejemplo un partido de fútbol, con una cuota de dos o superior. Si la apuesta no resulta ganadora, recibirás el 100% del importe apostado en forma de bono."}',
             'value_fr' => '{"0":"L’offre Risk-Free Bet vous permet de placer des paris sans risque de perte. Vous pouvez choisir un événement, par exemple un match de football, avec une cote de deux ou plus. Si le pari n’est pas gagnant, vous recevrez 100 % de votre mise sous forme de bonus."}',
             'value_pt' => '{"0":"A promoção Risk-Free Bet permite que você faça apostas sem risco de perda. Você pode escolher um evento, como uma partida de futebol, com odds de dois ou superiores. Se a aposta não for vencedora, você receberá 100% do valor apostado de volta em forma de bônus."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 24
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"The received bonus must be wagered five times on accumulator bets with at least three events, each having odds of 1.4 or higher. If the bonus is not wagered within four days from the moment it is credited, it will be automatically deducted from the gaming account."}',
             'value_es' => '{"0":"El bono recibido debe apostarse cinco veces en apuestas combinadas con al menos tres eventos, cada uno con una cuota mínima de 1.4. Si el bono no se utiliza dentro de los cuatro días posteriores a su recepción, se eliminará automáticamente de la cuenta de juego."}',
             'value_fr' => '{"0":"Le bonus reçu doit être rejoué cinq fois sur des paris combinés comportant au moins trois événements, chacun avec une cote minimale de 1,4. Si le bonus n’est pas misé dans les quatre jours suivant sa réception, il sera automatiquement retiré du compte de jeu."}',
             'value_pt' => '{"0":"O bônus recebido deve ser apostado cinco vezes em apostas múltiplas com pelo menos três eventos, cada um com odds mínimas de 1,4. Se o bônus não for utilizado dentro de quatro dias após o recebimento, ele será automaticamente removido da conta de jogo."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 25
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 26
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h2',
                'value_en' => '{"0":"Mostbet FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Mostbet"}',
                'value_fr' => '{"0":"FAQ de Mostbet"}',
                'value_pt' => '{"0":"Perguntas frequentes do Mostbet"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 27
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the welcome bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de bienvenida?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Como obter o bônus de boas-vindas?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 28
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Register on the website, enter the promo code during registration, and make your first deposit."}',
             'value_es' => '{"0":"Regístrate en el sitio web, introduce el código promocional durante el registro y realiza tu primer depósito."}',
             'value_fr' => '{"0":"Inscrivez-vous sur le site, saisissez le code promo lors de l’inscription et effectuez votre premier dépôt."}',
             'value_pt' => '{"0":"Registe-se no site, insira o código promocional durante o registro e faça o seu primeiro depósito."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 29
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used in the mobile app?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar os bônus no aplicativo móvel?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 30
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all bonuses are available both on the website and in the mobile app."}',
             'value_es' => '{"0":"Sí, todos los bonos están disponibles tanto en el sitio web como en la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, tous les bonus sont disponibles à la fois sur le site web et dans l’application mobile."}',
             'value_pt' => '{"0":"Sim, todos os bônus estão disponíveis tanto no site quanto no aplicativo móvel."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 31
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit methods are supported?"}',
             'value_es' => '{"0":"¿Qué métodos de depósito están disponibles?"}',
             'value_fr' => '{"0":"Quels sont les moyens de dépôt disponibles ?"}',
             'value_pt' => '{"0":"Quais métodos de depósito são aceitos?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 32
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Visa, Mastercard, e-wallets, cryptocurrencies, and local payment systems."}',
             'value_es' => '{"0":"Visa, Mastercard, monederos electrónicos, criptomonedas y sistemas de pago locales."}',
             'value_fr' => '{"0":"Visa, Mastercard, portefeuilles électroniques, crypto-monnaies et systèmes de paiement locaux."}',
             'value_pt' => '{"0":"Visa, Mastercard, carteiras eletrônicas, criptomoedas e sistemas de pagamento locais."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 33
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any restrictions on withdrawing winnings from bonuses?"}',
             'value_es' => '{"0":"¿Existen restricciones para retirar las ganancias de los bonos?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions pour retirer les gains issus des bonus ?"}',
             'value_pt' => '{"0":"Existem restrições para sacar os ganhos dos bônus?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 34
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Yes, winnings from bonuses are subject to wagering requirements according to the promotion terms. For detailed conditions, see the information above in this review."}',
             'value_es' => '{"0":"Sí, las ganancias de los bonos están sujetas a los requisitos de apuesta según los términos de la promoción. Para conocer los detalles, consulte la información anterior en esta reseña."}',
             'value_fr' => '{"0":"Oui, les gains provenant des bonus sont soumis aux conditions de mise selon les règles de la promotion. Pour plus de détails, consultez les informations ci-dessus dans cette revue."}',
             'value_pt' => '{"0":"Sim, os ganhos provenientes dos bônus estão sujeitos aos requisitos de apostas de acordo com os termos da promoção. Para detalhes, veja as informações acima nesta análise."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 35
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about current promotions?"}',
             'value_es' => '{"0":"¿Cómo enterarse de las promociones actuales?"}',
             'value_fr' => '{"0":"Comment connaître les promotions en cours ?"}',
             'value_pt' => '{"0":"Como saber sobre as promoções atuais?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'mostbet',
             'order' => 36
            ],
            ['key' => 'mostbet',
             'bookmaker_id' => 5,
             'component' => 'p',
             'value_en' => '{"0":"Check the «Promotions» section on the website or subscribe to the newsletter."}',
             'value_es' => '{"0":"Consulta la sección «Promociones» en el sitio web o suscríbete al boletín de noticias."}',
             'value_fr' => '{"0":"Consultez la section « Promotions » sur le site ou abonnez-vous à la newsletter."}',
             'value_pt' => '{"0":"Verifique a seção «Promoções» no site ou inscreva-se na newsletter."}',
             'order' => 36
            ]
        );
    }
}
