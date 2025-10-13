<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerMEGAPARIPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 1
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari is a modern international platform for sports betting and casino games. The platform offers not only standard first deposit bonuses but also special promotions."}',
             'value_es' => '{"0":"MegaPari es una moderna plataforma internacional para apuestas deportivas y juegos de casino. La plataforma ofrece no solo los bonos estándar por el primer depósito, sino también promociones especiales."}',
             'value_fr' => '{"0":"MegaPari est une plateforme internationale moderne dédiée aux paris sportifs et aux jeux de casino. La plateforme propose non seulement des bonus standards pour le premier dépôt, mais aussi des promotions spéciales."}',
             'value_pt' => '{"0":"A MegaPari é uma plataforma internacional moderna para apostas esportivas e jogos de cassino. A plataforma oferece não apenas bônus padrão pelo primeiro depósito, mas também promoções especiais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 2
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will take a detailed look at the bonuses available for new and regular users, as well as the current promotions, their usage terms, and wagering requirements. We will also explain how to receive additional bonuses when registering with the promo code :promocode."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle qué bonos están disponibles para los nuevos y los usuarios habituales, así como las promociones actuales, sus condiciones de uso y los requisitos de apuesta. También explicaremos cómo obtener bonos adicionales al registrarse con el código promocional :promocode."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail les bonus disponibles pour les nouveaux et les anciens utilisateurs, ainsi que les promotions actuelles, leurs conditions d’utilisation et les exigences de mise. Nous expliquerons également comment obtenir des bonus supplémentaires lors de l’inscription avec le code promotionnel :promocode."}',
             'value_pt' => '{"0":"Nesta análise, vamos detalhar quais bônus estão disponíveis para novos e antigos usuários, além das promoções ativas, suas condições de uso e requisitos de aposta. Também explicaremos como receber bônus adicionais ao se registrar com o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 3
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 4
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To use the promo code :promocode when registering on MegaPari, you need to visit the official website and complete the standard registration form by providing the required details such as email address, phone number, country of residence, and account currency. You can register via email, phone, or social networks. Please note that it is important to enter accurate information, as you will later need to complete the identity verification process to be able to withdraw funds."}',
             'value_es' => '{"0":"Para utilizar el código promocional :promocode al registrarte en MegaPari, debes acceder al sitio web oficial y completar el formulario de registro estándar proporcionando los datos necesarios, como correo electrónico, número de teléfono, país de residencia y moneda de la cuenta. Puedes registrarte mediante correo electrónico, teléfono o redes sociales. Es importante que introduzcas información válida, ya que más adelante deberás pasar el proceso de verificación de identidad para poder retirar fondos."}',
             'value_fr' => '{"0":"Pour utiliser le code promotionnel :promocode lors de votre inscription sur MegaPari, vous devez vous rendre sur le site officiel et remplir le formulaire d’inscription standard en indiquant les informations requises telles que votre adresse e-mail, votre numéro de téléphone, votre pays de résidence et la devise du compte. Vous pouvez vous inscrire par e-mail, téléphone ou via les réseaux sociaux. Il est important de fournir des informations exactes, car vous devrez ensuite passer par une vérification d’identité afin de pouvoir retirer vos gains."}',
             'value_pt' => '{"0":"Para usar o código promocional :promocode ao se registrar na MegaPari, é necessário acessar o site oficial e preencher o formulário padrão de registro, informando os dados necessários, como e-mail, número de telefone, país de residência e moeda da conta. É possível se registrar por e-mail, telefone ou redes sociais. É importante fornecer informações corretas, pois será necessário passar pelo processo de verificação de identidade para poder sacar fundos posteriormente."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 5
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"In the special field, enter the promo code :promocode to receive additional bonuses on your first deposit. You can choose a bonus for sports betting, a casino bonus, or receive free bets. To get a +100% bonus for sports betting, you need to deposit between $5 and $330. To get a +100% bonus for casino games and 50 free spins, you need to deposit between $5 and $500. To receive a +15% bonus in the form of a free bet, you need to deposit between $35 and $115."}',
             'value_es' => '{"0":"En el campo especial, introduce el código promocional :promocode para obtener bonos adicionales en tu primer depósito. Puedes elegir un bono para apuestas deportivas, un bono para juegos de casino o recibir apuestas gratis. Para obtener un bono del +100% en apuestas deportivas, debes depositar entre $5 y $330. Para obtener un bono del +100% en casino y 50 giros gratis, debes depositar entre $5 y $500. Para recibir un bono del +15% en forma de apuesta gratuita, debes depositar entre $35 y $115."}',
             'value_fr' => '{"0":"Dans le champ dédié, saisissez le code promotionnel :promocode pour recevoir des bonus supplémentaires sur votre premier dépôt. Vous pouvez choisir un bonus pour les paris sportifs, un bonus de casino ou recevoir des paris gratuits. Pour obtenir un bonus de +100 % sur les paris sportifs, vous devez déposer entre 5 $ et 330 $. Pour recevoir un bonus de +100 % pour le casino et 50 tours gratuits, il faut déposer entre 5 $ et 500 $. Pour bénéficier d’un bonus de +15 % sous forme de pari gratuit, le dépôt doit être compris entre 35 $ et 115 $."}',
             'value_pt' => '{"0":"No campo especial, insira o código promocional :promocode para receber bônus adicionais no primeiro depósito. Você pode escolher um bônus para apostas esportivas, um bônus de cassino ou receber apostas grátis. Para obter um bônus de +100% em apostas esportivas, é necessário depositar entre US$5 e US$330. Para receber um bônus de +100% em jogos de cassino e 50 giros grátis, é necessário depositar entre US$5 e US$500. Para obter um bônus de +15% em forma de aposta grátis, é necessário depositar entre US$35 e US$115."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 6
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 7
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Please note that in order to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Ten en cuenta que, para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que pour pouvoir retirer les fonds du bonus, il est nécessaire de remplir d’abord les conditions de mise."}',
             'value_pt' => '{"0":"Tenha em mente que, para poder sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 8
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To wager the sports betting bonus, you need to place the bonus amount five times in accumulator bets. Each accumulator must include at least three events, and at least three of those events must have odds of 1.40 or higher."}',
             'value_es' => '{"0":"Para liberar el bono de apuestas deportivas, debes apostar el monto del bono cinco veces en apuestas combinadas. Cada combinación debe incluir al menos tres eventos, y al menos tres de ellos deben tener una cuota mínima de 1.40."}',
             'value_fr' => '{"0":"Pour débloquer le bonus de paris sportifs, vous devez miser le montant du bonus cinq fois sous forme de paris combinés. Chaque pari combiné doit comporter au moins trois événements, et au moins trois de ces événements doivent avoir une cote minimale de 1.40."}',
             'value_pt' => '{"0":"Para liberar o bônus de apostas esportivas, é preciso apostar o valor do bônus cinco vezes em apostas do tipo acumulada. Cada acumulador deve incluir pelo menos três eventos, e no mínimo três deles devem ter odds de 1,40 ou superiores."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 9
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 35 times the bonus amount within 7 days of activation. The maximum allowed bet during wagering is $5. Free spins become available only after the deposit bonus is fully wagered and are credited for the game Golden Mine by Mancala."}',
             'value_es' => '{"0":"Los bonos de casino deben apostarse 35 veces el valor del bono dentro de los 7 días posteriores a la activación. La apuesta máxima permitida durante el rollover es de $5. Los giros gratis estarán disponibles solo después de cumplir los requisitos del bono de depósito y se acreditan para el juego Golden Mine de Mancala."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 35 fois le montant du bonus dans un délai de 7 jours après activation. La mise maximale autorisée pendant le wagering est de 5 $. Les tours gratuits sont disponibles uniquement après avoir rempli les conditions du bonus de dépôt et sont attribués pour le jeu Golden Mine de Mancala."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. A aposta máxima permitida durante o rollover é de US$5. Os giros grátis ficam disponíveis apenas após o cumprimento do bônus de depósito e são creditados para o jogo Golden Mine da Mancala."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 10
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"To wager a free bet, place an accumulator bet with at least four different sports events, each with odds of 1.6 or higher, using the received promo code. The bonus must be used within 30 days of registration."}',
             'value_es' => '{"0":"Para liberar una apuesta gratuita, realiza una apuesta combinada con al menos cuatro eventos deportivos, cada uno con una cuota igual o superior a 1.6, utilizando el código promocional recibido. El bono debe utilizarse dentro de los 30 días posteriores al registro."}',
             'value_fr' => '{"0":"Pour miser un pari gratuit, placez un pari combiné comportant au moins quatre événements sportifs, chacun avec une cote égale ou supérieure à 1.6, en utilisant le code promotionnel reçu. Le bonus doit être utilisé dans les 30 jours suivant l’inscription."}',
             'value_pt' => '{"0":"Para liberar a aposta grátis, faça uma aposta acumulada com pelo menos quatro eventos esportivos, cada um com odds iguais ou superiores a 1,6, utilizando o código promocional recebido. O bônus deve ser utilizado dentro de 30 dias após o registro."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 11
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 12
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For regular MegaPari customers, there are numerous bonuses and promotions that allow players to continue receiving additional benefits even after the welcome offers have ended. The platform provides a weekly cashback of 3% on lost sports bets."}',
             'value_es' => '{"0":"Para los clientes habituales de MegaPari también existen numerosos bonos y promociones que permiten seguir obteniendo beneficios adicionales incluso después de finalizar las ofertas de bienvenida. La plataforma ofrece un reembolso semanal del 3% sobre las apuestas deportivas perdidas."}',
             'value_fr' => '{"0":"Pour les clients réguliers de MegaPari, de nombreux bonus et promotions sont également disponibles, permettant de continuer à bénéficier d’avantages supplémentaires même après la fin des offres de bienvenue. La plateforme offre un cashback hebdomadaire de 3 % sur les paris sportifs perdus."}',
             'value_pt' => '{"0":"Para os clientes regulares da MegaPari, também existem diversos bônus e promoções que permitem continuar recebendo benefícios adicionais mesmo após o término das ofertas de boas-vindas. A plataforma oferece um reembolso semanal de 3% sobre as apostas esportivas perdidas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 13
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Equally attractive are the tournaments and lotteries, where players can compete and win cash prizes, free bets, or free spins. Access to these promotions allows active users to significantly increase their winnings."}',
             'value_es' => '{"0":"Igualmente interesantes son los torneos y loterías, donde los jugadores pueden participar en competiciones y ganar premios en efectivo, apuestas gratis o giros gratis. El acceso a estas promociones permite a los jugadores activos aumentar considerablemente sus ganancias."}',
             'value_fr' => '{"0":"Les tournois et les loteries sont tout aussi intéressants, permettant aux joueurs de participer à des compétitions et de remporter des récompenses en argent, des paris gratuits ou des tours gratuits. L’accès à ces offres permet aux joueurs actifs d’augmenter considérablement leurs gains."}',
             'value_pt' => '{"0":"Os torneios e loterias também são bastante atrativos, permitindo que os jogadores participem de competições e ganhem prêmios em dinheiro, apostas grátis ou giros grátis. O acesso a essas promoções permite que os jogadores ativos aumentem significativamente seus ganhos."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 14
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 15
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"MegaPari offers no deposit bonuses. For example, on your birthday you can receive a personalized gift in the form of a promo code."}',
             'value_es' => '{"0":"MegaPari ofrece bonos sin depósito. Por ejemplo, en tu cumpleaños puedes recibir un regalo personalizado en forma de código promocional."}',
             'value_fr' => '{"0":"MegaPari propose des bonus sans dépôt. Par exemple, le jour de votre anniversaire, vous pouvez recevoir un cadeau personnalisé sous forme de code promotionnel."}',
             'value_pt' => '{"0":"A MegaPari oferece bônus sem depósito. Por exemplo, no dia do seu aniversário, você pode receber um presente personalizado em forma de código promocional."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 16
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Additionally, every Wednesday you can take advantage of the SPIN TO WIN promotion. Within this offer, you can win cash prizes or free spins. The received bonuses and free spins must be wagered in the «Slots» section within 3 days of receiving them, with a wagering requirement of x20. If the bonuses are not wagered within this period, they will be automatically canceled."}',
             'value_es' => '{"0":"Además, todos los miércoles puedes aprovechar la promoción SPIN TO WIN. Dentro de esta oferta puedes ganar dinero en tu cuenta o giros gratis. Los bonos y giros obtenidos deben apostarse en la sección «Tragamonedas» dentro de los 3 días posteriores a su recepción, con un requisito de apuesta de x20. Si no se cumplen las condiciones en ese plazo, los bonos se cancelarán automáticamente."}',
             'value_fr' => '{"0":"De plus, chaque mercredi, vous pouvez profiter de la promotion SPIN TO WIN. Dans le cadre de cette offre, vous pouvez gagner de l’argent sur votre compte ou des tours gratuits. Les bonus et tours gratuits obtenus doivent être misés dans la section «Machines à sous» dans un délai de 3 jours après leur réception, avec une exigence de mise de x20. Si les bonus ne sont pas joués dans ce délai, ils seront automatiquement annulés."}',
             'value_pt' => '{"0":"Além disso, todas as quartas-feiras você pode aproveitar a promoção SPIN TO WIN. Nessa oferta, é possível ganhar dinheiro em sua conta ou giros grátis. Os bônus e giros recebidos devem ser apostados na seção «Caça-níqueis» dentro de 3 dias após o recebimento, com um requisito de aposta de x20. Caso o bônus não seja utilizado dentro desse prazo, ele será automaticamente cancelado."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 17
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Mega Booster"}',
                'value_es' => '{"0":"Mega Booster"}',
                'value_fr' => '{"0":"Mega Booster"}',
                'value_pt' => '{"0":"Mega Booster"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 18
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The promotion offers increased winnings for accumulator bets. In this offer, an additional bonus is automatically credited after placing an accumulator bet that includes four or more events. The bonus amount depends on the number of events and their odds."}',
             'value_es' => '{"0":"La promoción ofrece ganancias aumentadas para las apuestas combinadas. En esta oferta, se otorga automáticamente un bono adicional después de realizar una apuesta acumulada que incluya cuatro o más eventos. El monto del bono depende del número de eventos y de sus cuotas."}',
             'value_fr' => '{"0":"Cette promotion offre une augmentation des gains pour les paris combinés. Dans le cadre de cette offre, un bonus supplémentaire est automatiquement accordé après avoir placé un pari combiné comprenant quatre événements ou plus. Le montant du bonus dépend du nombre d’événements et de leurs cotes."}',
             'value_pt' => '{"0":"A promoção oferece ganhos aumentados para apostas acumuladas. Nesta oferta, um bônus adicional é creditado automaticamente após realizar uma aposta acumulada com quatro ou mais eventos. O valor do bônus depende da quantidade de eventos e de suas odds."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 19
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"For example, if your accumulator includes 4 winning events, you can receive a +5% boost to your winnings, and if it includes 19 events, the boost can reach as much as +175%. The minimum bet amount required to participate is $2."}',
             'value_es' => '{"0":"Por ejemplo, si tu combinación tiene 4 eventos ganadores, puedes recibir un aumento del +5% en tus ganancias, y si incluye 19 eventos, el aumento puede llegar hasta +175%. El monto mínimo de apuesta para participar es de $2."}',
             'value_fr' => '{"0":"Par exemple, si votre pari combiné comprend 4 événements gagnants, vous pouvez recevoir un bonus de +5 % sur vos gains, et s’il en comprend 19, le bonus peut atteindre +175 %. Le montant minimum de la mise requis pour participer est de 2 $."}',
             'value_pt' => '{"0":"Por exemplo, se sua aposta acumulada tiver 4 eventos vencedores, você poderá receber um aumento de +5% nos ganhos, e se incluir 19 eventos, o aumento pode chegar a +175%. O valor mínimo da aposta para participar é de US$2."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 20
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 21
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Your birthday with MEGAPARI!"}',
                'value_es' => '{"0":"¡Su cumpleaños con MEGAPARI!"}',
                'value_fr' => '{"0":"Votre anniversaire avec MEGAPARI !"}',
                'value_pt' => '{"0":"O seu aniversário com a MEGAPARI!"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 22
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"The birthday promotion offers special bonuses that make the celebration more enjoyable and rewarding. You can receive personalized gifts in the form of free spins, free bets, or deposit bonuses. To take advantage of this offer, make sure your profile contains your correct birth date and personal details."}',
             'value_es' => '{"0":"La promoción de cumpleaños ofrece bonos especiales que hacen que la celebración sea más agradable y beneficiosa. Puedes recibir regalos personalizados en forma de giros gratis, apuestas gratuitas o bonos de depósito. Para aprovechar esta oferta, asegúrate de que tu perfil contenga la fecha de nacimiento y los datos personales correctos."}',
             'value_fr' => '{"0":"La promotion d’anniversaire offre des bonus spéciaux qui rendent la célébration plus agréable et avantageuse. Vous pouvez recevoir des cadeaux personnalisés sous forme de tours gratuits, de paris gratuits ou de bonus de dépôt. Pour profiter de cette offre, assurez-vous que votre profil contient la date de naissance et les informations personnelles correctes."}',
             'value_pt' => '{"0":"A promoção de aniversário oferece bônus especiais que tornam a celebração mais agradável e vantajosa. Você pode receber presentes personalizados na forma de rodadas grátis, apostas grátis ou bônus de depósito. Para aproveitar esta oferta, verifique se o seu perfil contém a data de nascimento e os dados pessoais corretos."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 23
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 24
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 25
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"This is a daily offer for players who enjoy accumulator bets. Every day, the MegaPari team selects a combination of events with enhanced odds. This promotion allows you to receive an additional +10% on your main winnings."}',
             'value_es' => '{"0":"Esta es una oferta diaria para los jugadores que disfrutan de las apuestas combinadas. Cada día, el equipo de MegaPari selecciona una combinación de eventos con cuotas mejoradas. Esta promoción te permite obtener un +10% adicional sobre tus ganancias principales."}',
             'value_fr' => '{"0":"Il s’agit d’une offre quotidienne destinée aux joueurs qui aiment les paris combinés. Chaque jour, l’équipe de MegaPari sélectionne une combinaison d’événements avec des cotes améliorées. Cette promotion vous permet de recevoir +10 % supplémentaires sur vos gains principaux."}',
             'value_pt' => '{"0":"Esta é uma oferta diária para os jogadores que gostam de apostas acumuladas. Todos os dias, a equipe da MegaPari seleciona uma combinação de eventos com probabilidades aumentadas. Esta promoção permite receber um bônus adicional de +10% sobre os seus ganhos principais."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 26
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 27
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h2',
                'value_en' => '{"0":"MegaPari FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de MegaPari"}',
                'value_fr' => '{"0":"FAQ de MegaPari"}',
                'value_pt' => '{"0":"Perguntas frequentes do MegaPari"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 28
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can I use multiple promo codes?"}',
             'value_es' => '{"0":"¿Puedo usar varios códigos promocionales?"}',
             'value_fr' => '{"0":"Puis-je utiliser plusieurs codes promo ?"}',
             'value_pt' => '{"0":"Posso usar vários códigos promocionais?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 29
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"You can only use one promo code at a time."}',
             'value_es' => '{"0":"Solo se puede usar un código promocional a la vez."}',
             'value_fr' => '{"0":"Vous ne pouvez utiliser qu’un seul code promo à la fois."}',
             'value_pt' => '{"0":"Só é possível usar um código promocional de cada vez."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 30
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"How to use a promo code during registration?"}',
             'value_es' => '{"0":"¿Cómo usar un código promocional durante el registro?"}',
             'value_fr' => '{"0":"Comment utiliser un code promo lors de l’inscription ?"}',
             'value_pt' => '{"0":"Como usar um código promocional durante o registro?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 31
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"When creating an account, enter the promo code in the designated field. After confirming your registration and making a deposit, the bonus will be activated automatically."}',
             'value_es' => '{"0":"Al crear una cuenta, introduce el código promocional en el campo correspondiente. Tras confirmar el registro y realizar un depósito, el bono se activará automáticamente."}',
             'value_fr' => '{"0":"Lors de la création de votre compte, saisissez le code promo dans le champ prévu à cet effet. Après avoir confirmé votre inscription et effectué un dépôt, le bonus sera activé automatiquement."}',
             'value_pt' => '{"0":"Ao criar uma conta, insira o código promocional no campo indicado. Após confirmar o registro e fazer um depósito, o bônus será ativado automaticamente."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 32
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can I have multiple accounts to receive bonuses?"}',
             'value_es' => '{"0":"¿Puedo tener varias cuentas para recibir bonos?"}',
             'value_fr' => '{"0":"Puis-je avoir plusieurs comptes pour recevoir des bonus ?"}',
             'value_pt' => '{"0":"Posso ter várias contas para receber bônus?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 33
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, creating multiple accounts is strictly prohibited. If the system detects duplicates, all associated accounts may be blocked without the possibility of recovery."}',
             'value_es' => '{"0":"No, la creación de varias cuentas está estrictamente prohibida. Si el sistema detecta duplicados, todas las cuentas asociadas pueden ser bloqueadas sin posibilidad de recuperación."}',
             'value_fr' => '{"0":"Non, la création de plusieurs comptes est strictement interdite. Si le système détecte des doublons, tous les comptes associés peuvent être bloqués sans possibilité de récupération."}',
             'value_pt' => '{"0":"Não, criar várias contas é estritamente proibido. Se o sistema detectar duplicatas, todas as contas associadas poderão ser bloqueadas sem possibilidade de recuperação."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 34
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Can I withdraw a bonus immediately after receiving it?"}',
             'value_es' => '{"0":"¿Puedo retirar un bono inmediatamente después de recibirlo?"}',
             'value_fr' => '{"0":"Puis-je retirer un bonus immédiatement après l’avoir reçu ?"}',
             'value_pt' => '{"0":"Posso sacar um bônus imediatamente após recebê-lo?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 35
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"No, to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"No, para retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Non, pour retirer les fonds du bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Não, para sacar os fundos do bônus, você deve primeiro cumprir os requisitos de aposta."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 36
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'h3',
             'value_en' => '{"0":"Are bonuses available through the mobile app?"}',
             'value_es' => '{"0":"¿Están disponibles los bonos a través de la aplicación móvil?"}',
             'value_fr' => '{"0":"Les bonus sont-ils disponibles via l’application mobile ?"}',
             'value_pt' => '{"0":"Os bônus estão disponíveis no aplicativo móvel?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'megapari',
             'order' => 37
            ],
            ['key' => 'megapari',
             'bookmaker_id' => 9,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all MegaPari promotions and bonuses are available both on the desktop version and in the mobile apps."}',
             'value_es' => '{"0":"Sí, todas las promociones y bonos de MegaPari están disponibles tanto en la versión de escritorio como en las aplicaciones móviles."}',
             'value_fr' => '{"0":"Oui, toutes les promotions et tous les bonus MegaPari sont disponibles à la fois sur la version bureau et dans les applications mobiles."}',
             'value_pt' => '{"0":"Sim, todas as promoções e bônus da MegaPari estão disponíveis tanto na versão para desktop quanto nos aplicativos móveis."}',
             'order' => 37
            ]
        );
    }
}
