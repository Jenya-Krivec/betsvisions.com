<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerPARIPESAPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 1
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa offers users a wide range of bonuses and promotions aimed at both new and regular players. The bookmaker platform regularly introduces welcome offers, series bet promotions, cumulative bonuses, and other special deals."}',
             'value_es' => '{"0":"Paripesa ofrece a los usuarios una amplia variedad de bonos y promociones dirigidas tanto a nuevos jugadores como a los habituales. La plataforma de apuestas introduce regularmente ofertas de bienvenida, promociones por series de apuestas, bonos acumulativos y otras ofertas especiales."}',
             'value_fr' => '{"0":"Paripesa propose aux utilisateurs une large gamme de bonus et de promotions destinés aux nouveaux joueurs comme aux joueurs réguliers. La plateforme de paris introduit régulièrement des offres de bienvenue, des promotions pour les séries de paris, des bonus cumulés et d’autres offres spéciales."}',
             'value_pt' => '{"0":"A Paripesa oferece aos usuários uma ampla variedade de bônus e promoções voltadas tanto para novos jogadores quanto para os regulares. A plataforma de apostas introduz regularmente ofertas de boas-vindas, promoções para séries de apostas, bônus acumulativos e outras ofertas especiais."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 2
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Players can receive extra funds for sports betting, free spins for the casino, as well as special bonuses during tournaments or festive events. In this review, we will cover some of these offers and explain how you can increase your first deposit using the promo code :promocode."}',
             'value_es' => '{"0":"Los jugadores pueden recibir fondos adicionales para apuestas deportivas, giros gratis para el casino, así como bonos especiales durante torneos o eventos festivos. En esta reseña, revisaremos algunas de estas ofertas y explicaremos cómo puedes aumentar tu primer depósito usando el código promocional :promocode."}',
             'value_fr' => '{"0":"Les joueurs peuvent recevoir des fonds supplémentaires pour les paris sportifs, des tours gratuits pour le casino, ainsi que des bonus spéciaux lors de tournois ou d’événements festifs. Dans cet article, nous examinerons certaines de ces offres et expliquerons comment augmenter votre premier dépôt avec le code promo :promocode."}',
             'value_pt' => '{"0":"Os jogadores podem receber fundos extras para apostas esportivas, rodadas grátis para o cassino, bem como bônus especiais durante torneios ou eventos festivos. Nesta análise, vamos destacar algumas dessas ofertas e explicar como você pode aumentar seu primeiro depósito usando o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 3
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 4
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To activate the promo code :promocode on Paripesa, you first need to complete the standard registration process. You can register using your phone number, email, or a social media account. Depending on the method, there is a field to enter the promo code :promocode, so make sure to include it. Also, don’t forget to indicate where you will use the bonus funds, for sports betting or casino games."}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en Paripesa, primero debes completar el proceso de registro estándar. Puedes registrarte usando tu número de teléfono, correo electrónico o una cuenta de redes sociales. Dependiendo del método, hay un campo para ingresar el código promocional :promocode, así que asegúrate de introducirlo. También recuerda indicar dónde usarás los fondos del bono, ya sea en apuestas deportivas o en juegos de casino."}',
             'value_fr' => '{"0":"Pour activer le code promo :promocode sur Paripesa, vous devez d’abord compléter le processus d’inscription standard. Vous pouvez vous inscrire avec votre numéro de téléphone, votre adresse e-mail ou un compte de réseau social. Selon la méthode choisie, il existe un champ pour saisir le code promo :promocode, alors n’oubliez pas de l’indiquer. N’oubliez pas non plus de préciser où vous utiliserez les fonds du bonus, pour les paris sportifs ou pour les jeux de casino."}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode no Paripesa, primeiro você precisa concluir o processo de registro padrão. Você pode se registrar usando seu número de telefone, e-mail ou uma conta de rede social. Dependendo do método, há um campo para inserir o código promocional :promocode, então certifique-se de preenchê-lo. Também não se esqueça de indicar onde usará os fundos do bônus, seja para apostas esportivas ou jogos de cassino."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 5
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Next, you will need to make a deposit to activate the bonus. If you chose the sports betting bonus, the deposit must be between $1 and $330. If you chose the casino bonus, the deposit must be between $10 and $290."}',
             'value_es' => '{"0":"Luego, necesitarás realizar un depósito para activar el bono. Si elegiste el bono para apuestas deportivas, el depósito debe ser de entre $1 y $330. Si elegiste el bono para casino, el depósito debe ser de entre $10 y $290."}',
             'value_fr' => '{"0":"Ensuite, vous devrez effectuer un dépôt pour activer le bonus. Si vous avez choisi le bonus pour les paris sportifs, le dépôt doit être compris entre 1 $ et 330 $. Si vous avez choisi le bonus pour le casino, le dépôt doit être compris entre 10 $ et 290 $."}',
             'value_pt' => '{"0":"Em seguida, será necessário fazer um depósito para ativar o bônus. Se você escolheu o bônus para apostas esportivas, o depósito deve ser entre $1 e $330. Se você escolheu o bônus para cassino, o depósito deve ser entre $10 e $290."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 6
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 7
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Each of the two types of bonuses has wagering requirements. This means that to be able to withdraw the bonus funds, you must first meet these conditions."}',
             'value_es' => '{"0":"Cada uno de los dos tipos de bonos tiene requisitos de apuesta. Esto significa que para poder retirar los fondos del bono, primero debes cumplir con estas condiciones."}',
             'value_fr' => '{"0":"Chacun des deux types de bonus comporte des conditions de mise. Cela signifie que pour pouvoir retirer les fonds du bonus, vous devez d’abord respecter ces conditions."}',
             'value_pt' => '{"0":"Cada um dos dois tipos de bônus tem requisitos de aposta. Isso significa que para poder sacar os fundos do bônus, você deve primeiro cumprir essas condições."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 8
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered five times using accumulator bets. Each accumulator must include at least three events. At least three events in the accumulator must have odds of no less than 1.40."}',
             'value_es' => '{"0":"El bono para apuestas deportivas debe apostarse cinco veces mediante apuestas combinadas. Cada apuesta combinada debe incluir al menos tres eventos. Al menos tres eventos en la apuesta combinada deben tener cuotas no inferiores a 1.40."}',
             'value_fr' => '{"0":"Le bonus pour les paris sportifs doit être misé cinq fois avec des paris combinés. Chaque pari combiné doit inclure au moins trois événements. Au moins trois événements dans le pari combiné doivent avoir des cotes d’au moins 1,40."}',
             'value_pt' => '{"0":"O bônus para apostas esportivas deve ser apostado cinco vezes usando apostas acumuladas. Cada aposta acumulada deve incluir pelo menos três eventos. Pelo menos três eventos na aposta acumulada devem ter odds não inferiores a 1,40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 9
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 35 times the bonus amount within 7 days after activation. While wagering, bets cannot exceed $4."}',
             'value_es' => '{"0":"Los bonos de casino deben apostarse 35 veces el importe del bono dentro de los 7 días posteriores a la activación. Durante la apuesta, no se permite superar los $4 por apuesta."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 35 fois le montant du bonus dans les 7 jours suivant l’activation. Lors de la mise, il est interdit de dépasser 4 $."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. Ao apostar, não é permitido exceder $4 por aposta."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 10
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 11
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa actively supports regular players through ongoing promotions and special offers. Regular players can receive a 50% bonus on repeat deposits on Mondays, participate in tournaments with cash prizes, and get 3% cashback on a portion of their lost sports bets."}',
             'value_es' => '{"0":"Paripesa apoya activamente a los jugadores habituales a través de promociones continuas y ofertas especiales. Los jugadores habituales pueden recibir un bono del 50% por depósitos repetidos los lunes, participar en torneos con premios en efectivo y obtener un 3% de reembolso por parte de sus apuestas deportivas perdidas."}',
             'value_fr' => '{"0":"Paripesa soutient activement les joueurs réguliers grâce à des promotions continues et des offres spéciales. Les joueurs réguliers peuvent recevoir un bonus de 50 % sur les dépôts répétés le lundi, participer à des tournois avec des prix en argent et obtenir 3 % de cashback sur une partie de leurs pertes sur les paris sportifs."}',
             'value_pt' => '{"0":"A Paripesa apoia ativamente os jogadores regulares através de promoções contínuas e ofertas especiais. Jogadores regulares podem receber um bônus de 50% em depósitos repetidos às segundas-feiras, participar de torneios com prêmios em dinheiro e obter 3% de cashback sobre parte das apostas esportivas perdidas."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 12
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"In addition, the bookmaker offers personalized birthday bonuses as well as rewards for site activity. Some bonuses for regular users have wagering requirements, which we will explain in more detail later in this review."}',
             'value_es' => '{"0":"Además, el operador ofrece bonos personalizados de cumpleaños y recompensas por la actividad en el sitio. Algunos bonos para usuarios habituales tienen requisitos de apuesta, que explicaremos con más detalle más adelante en esta reseña."}',
             'value_fr' => '{"0":"De plus, le bookmaker propose des bonus personnalisés pour les anniversaires ainsi que des récompenses pour l’activité sur le site. Certains bonus pour les utilisateurs réguliers ont des conditions de mise, que nous expliquerons plus en détail plus loin dans cet article."}',
             'value_pt' => '{"0":"Além disso, a casa de apostas oferece bônus de aniversário personalizados, bem como recompensas pela atividade no site. Alguns bônus para usuários regulares possuem requisitos de aposta, que explicaremos com mais detalhes posteriormente nesta análise."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 13
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 14
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Paripesa gives 20 free spins for subscribing. Follow Paripesa on social media and receive 20 FS! To participate in the promotion, you need to subscribe on Telegram and Instagram. Then leave a comment under the promotional post with your game ID and make 2 screenshots confirming your subscription (one for each social network). Send the screenshots as a private message to the community manager on Telegram and the free spins will be credited within 24 hours after completing all the conditions."}',
             'value_es' => '{"0":"Paripesa regala 20 giros gratis por suscribirse. ¡Sigue a Paripesa en las redes sociales y recibe 20 FS! Para participar en la promoción, debes suscribirte en Telegram e Instagram. Luego deja un comentario en la publicación promocional con tu ID de juego y haz 2 capturas de pantalla que confirmen tu suscripción (una para cada red social). Envía las capturas de pantalla como mensaje privado al community manager en Telegram y los giros gratis se acreditarán dentro de las 24 horas después de cumplir con todas las condiciones."}',
             'value_fr' => '{"0":"Paripesa offre 20 tours gratuits pour s’abonner. Suivez Paripesa sur les réseaux sociaux et recevez 20 FS ! Pour participer à la promotion, vous devez vous abonner sur Telegram et Instagram. Ensuite, laissez un commentaire sous la publication promotionnelle avec votre identifiant de jeu et prenez 2 captures d’écran confirmant votre abonnement (une pour chaque réseau social). Envoyez les captures d’écran en message privé au community manager sur Telegram et les tours gratuits seront crédités dans les 24 heures après avoir rempli toutes les conditions."}',
             'value_pt' => '{"0":"A Paripesa oferece 20 rodadas grátis por se inscrever. Siga a Paripesa nas redes sociais e receba 20 FS! Para participar da promoção, é necessário se inscrever no Telegram e no Instagram. Depois, deixe um comentário na postagem da promoção com seu ID de jogo e tire 2 capturas de tela confirmando a inscrição (uma para cada rede social). Envie as capturas de tela como mensagem privada para o community manager no Telegram e as rodadas grátis serão creditadas em até 24 horas após cumprir todas as condições."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 15
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Keep an eye on the «Bonuses» section so you don’t miss such lucrative offers."}',
             'value_es' => '{"0":"Sigue la sección de «Bonos» para no perderte estas ofertas atractivas."}',
             'value_fr' => '{"0":"Surveillez la section « Bonus » pour ne pas manquer ces offres intéressantes."}',
             'value_pt' => '{"0":"Fique de olho na seção «Bônus» para não perder essas ofertas vantajosas."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 16
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Welcome package"}',
                'value_es' => '{"0":"Paquete de bienvenida"}',
                'value_fr' => '{"0":"Pack de bienvenue"}',
                'value_pt' => '{"0":"Pacote de boas-vindas"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 17
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This promotion from Paripesa allows new players to receive bonuses on their first four deposits. The first deposit gives 100% of the deposit amount and 30 free spins for the casino. The second deposit provides a 50% bonus up to the deposit and 35 free spins, the third deposit can bring 25% additional funds and 40 free spins, and the fourth deposit also gives a 25% bonus on the deposit and 45 free spins."}',
             'value_es' => '{"0":"Esta promoción de Paripesa permite a los nuevos jugadores recibir bonos en sus primeros cuatro depósitos. El primer depósito otorga el 100% del monto depositado y 30 giros gratis para el casino. El segundo depósito ofrece un bono del 50% sobre el depósito y 35 giros gratis, el tercer depósito puede otorgar un 25% de fondos adicionales y 40 giros gratis, y el cuarto depósito también ofrece un bono del 25% sobre el depósito y 45 giros gratis."}',
             'value_fr' => '{"0":"Cette promotion de Paripesa permet aux nouveaux joueurs de recevoir des bonus sur leurs quatre premiers dépôts. Le premier dépôt offre 100 % du montant du dépôt et 30 tours gratuits pour le casino. Le deuxième dépôt donne un bonus de 50 % jusqu’au dépôt et 35 tours gratuits, le troisième dépôt peut apporter 25 % de fonds supplémentaires et 40 tours gratuits, et le quatrième dépôt offre également un bonus de 25 % sur le dépôt et 45 tours gratuits."}',
             'value_pt' => '{"0":"Esta promoção da Paripesa permite que novos jogadores recebam bônus nos seus primeiros quatro depósitos. O primeiro depósito oferece 100% do valor depositado e 30 rodadas grátis para o cassino. O segundo depósito oferece um bônus de 50% até o depósito e 35 rodadas grátis, o terceiro depósito pode trazer 25% de fundos adicionais e 40 rodadas grátis, e o quarto depósito também oferece 25% de bônus sobre o depósito e 45 rodadas grátis."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 18
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Deposits must be made in the following amounts:"}',
             'value_es' => '{"0":"Los depósitos deben realizarse en los siguientes montos:"}',
             'value_fr' => '{"0":"Les dépôts doivent être effectués aux montants suivants :"}',
             'value_pt' => '{"0":"Os depósitos devem ser feitos nos seguintes valores:"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 19
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'list_v2',
             'value_en' => '{"0":"first deposit from $10 to $290",
                             "1":"second deposit from $10 to $330",
                             "2":"third deposit from $10 to $390",
                             "3":"fourth deposit from $10 to $440"}',
             'value_es' => '{"0":"primer depósito de $10 a $290",
                             "1":"segundo depósito de $10 a $330",
                             "2":"tercer depósito de $10 a $390",
                             "3":"cuarto depósito de $10 a $440"}',
             'value_fr' => '{"0":"premier dépôt de 10 $ à 290 $",
                             "1":"deuxième dépôt de 10 $ à 330 $",
                             "2":"troisième dépôt de 10 $ à 390 $",
                             "3":"quatrième dépôt de 10 $ à 440 $"}',
             'value_pt' => '{"0":"primeiro depósito de $10 a $290",
                             "1":"segundo depósito de $10 a $330",
                             "2":"terceiro depósito de $10 a $390",
                             "3":"quarto depósito de $10 a $440"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 20
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Bonuses must be wagered 35 times the bonus amount within 7 days after activation. Bets exceeding $4 are not allowed during wagering."}',
             'value_es' => '{"0":"Los bonos deben apostarse 35 veces el monto del bono dentro de los 7 días posteriores a la activación. No se permite realizar apuestas superiores a $4 durante el requisito de apuesta."}',
             'value_fr' => '{"0":"Les bonus doivent être misés 35 fois le montant du bonus dans les 7 jours suivant l’activation. Il est interdit de dépasser 4 $ par mise lors du pari."}',
             'value_pt' => '{"0":"Os bônus devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. Não é permitido fazer apostas acima de $4 durante o rollover."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 21
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 22
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Bonus for a series of losing bets"}',
                'value_es' => '{"0":"Bono por una serie de apuestas perdidas"}',
                'value_fr' => '{"0":"Bonus pour une série de paris perdants"}',
                'value_pt' => '{"0":"Bónus por uma série de apostas perdedoras"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 23
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to recover a portion of your lost bets. If a series of 20 sports bets does not result in a win, Paripesa returns part of the lost amount as a bonus to your account. The bonus is calculated for both express and single bets with odds no higher than 3."}',
             'value_es' => '{"0":"Esta promoción permite recuperar una parte de las apuestas perdidas. Si una serie de 20 apuestas deportivas no resulta ganadora, Paripesa devuelve parte del importe perdido en forma de bono a tu cuenta. El bono se calcula para apuestas combinadas y simples con cuotas no superiores a 3."}',
             'value_fr' => '{"0":"Cette promotion permet de récupérer une partie des mises perdues. Si une série de 20 paris sportifs n’aboutit pas à un gain, Paripesa rembourse une partie du montant perdu sous forme de bonus sur votre compte. Le bonus est calculé pour les paris simples et combinés avec des cotes ne dépassant pas 3."}',
             'value_pt' => '{"0":"Esta promoção permite recuperar parte das apostas perdidas. Se uma série de 20 apostas esportivas não resultar em vitória, a Paripesa devolve parte do valor perdido como bônus em sua conta. O bônus é calculado para apostas simples e acumuladas com odds não superiores a 3."}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 24
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to this promotion, you can get back some of your funds and continue playing. If for some reason the bonus funds do not appear in your account, it is recommended to contact customer support."}',
             'value_es' => '{"0":"Gracias a esta promoción, puedes recuperar parte de tu dinero y continuar jugando. Si por alguna razón los fondos del bono no se acreditan en tu cuenta, se recomienda contactar con el servicio de atención al cliente."}',
             'value_fr' => '{"0":"Grâce à cette promotion, vous pouvez récupérer une partie de vos fonds et continuer à jouer. Si, pour une raison quelconque, les fonds bonus ne sont pas crédités sur votre compte, il est conseillé de contacter le service client."}',
             'value_pt' => '{"0":"Graças a esta promoção, você pode recuperar parte do seu dinheiro e continuar jogando. Se por algum motivo os fundos do bônus não forem creditados em sua conta, recomenda-se entrar em contato com o suporte ao cliente."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 25
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-5.webp"}',
                'value_es' => '{"0":"img-5.webp"}',
                'value_fr' => '{"0":"img-5.webp"}',
                'value_pt' => '{"0":"img-5.webp"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 26
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator Bonus"}',
                'value_es' => '{"0":"BONO DE COMBINADA"}',
                'value_fr' => '{"0":"BONUS COMBINÉ"}',
                'value_pt' => '{"0":"BÓNUS DE ACUMULADOR"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 27
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Every day, there are over 1,000 sports events on the Paripesa website. The best and most reliable events are selected and grouped into several accumulator bets of two types: Line and Live. If the chosen accumulator wins, Paripesa increases the accumulator’s odds by 10%."}',
             'value_es' => '{"0":"Cada día, en el sitio web de Paripesa hay más de 1,000 eventos deportivos. Se seleccionan los eventos más destacados y confiables y se agrupan en varias apuestas combinadas de dos tipos: Línea y En Vivo. Si la apuesta combinada seleccionada gana, Paripesa aumenta las cuotas del acumulador en un 10%."}',
             'value_fr' => '{"0":"Chaque jour, plus de 1 000 événements sportifs sont disponibles sur le site Paripesa. Les événements les meilleurs et les plus fiables sont sélectionnés et regroupés en plusieurs paris combinés de deux types : Ligne et Live. Si le pari combiné choisi gagne, Paripesa augmente les cotes du combiné de 10 %."}',
             'value_pt' => '{"0":"Todos os dias, há mais de 1.000 eventos esportivos no site da Paripesa. Os melhores e mais confiáveis eventos são selecionados e agrupados em várias apostas acumuladas de dois tipos: Linha e Ao Vivo. Se o acumulador escolhido ganhar, a Paripesa aumenta as odds do acumulador em 10%."}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 28
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To participate in the promotion, simply go to the homepage or the Line and Live sections. Choose your favorite accumulator of the day, place your bet, and wait for the win."}',
             'value_es' => '{"0":"Para participar en la promoción, simplemente ve a la página principal o a las secciones Línea y En Vivo. Elige tu acumulador del día favorito, realiza la apuesta y espera la ganancia."}',
             'value_fr' => '{"0":"Pour participer à la promotion, il suffit de se rendre sur la page d’accueil ou dans les sections Ligne et Live. Choisissez votre combiné du jour préféré, placez votre pari et attendez le gain."}',
             'value_pt' => '{"0":"Para participar da promoção, basta acessar a página inicial ou as seções Linha e Ao Vivo. Escolha o acumulador do dia que mais gostar, faça a aposta e aguarde o prêmio."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 29
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 30
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h2',
                'value_en' => '{"0":"Paripesa FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de Paripesa"}',
                'value_fr' => '{"0":"FAQ de Paripesa"}',
                'value_pt' => '{"0":"Perguntas frequentes do Paripesa"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 31
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the welcome bonus?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de bienvenida?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Como obter o bônus de boas-vindas?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 32
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"To receive the welcome bonus, you need to register on the website, activate the promo code :promocode during registration, and make a deposit."}',
             'value_es' => '{"0":"Para recibir el bono de bienvenida, debes registrarte en el sitio web, activar el código promocional :promocode durante el registro y realizar un depósito."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue, vous devez vous inscrire sur le site, activer le code promo :promocode lors de l’inscription et effectuer un dépôt."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas, você precisa se registrar no site, ativar o código promocional :promocode durante o registro e fazer um depósito."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 33
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used in the mobile app?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar os bônus no aplicativo móvel?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 34
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all bonuses, including free spins and deposit offers, are available both on the website and in the mobile app."}',
             'value_es' => '{"0":"Sí, todos los bonos, incluidos los giros gratis y las ofertas de depósito, están disponibles tanto en el sitio web como en la aplicación móvil."}',
             'value_fr' => '{"0":"Oui, tous les bonus, y compris les tours gratuits et les offres de dépôt, sont disponibles à la fois sur le site et dans l’application mobile."}',
             'value_pt' => '{"0":"Sim, todos os bônus, incluindo giros grátis e ofertas de depósito, estão disponíveis tanto no site quanto no aplicativo móvel."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 35
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"What are the wagering requirements for sports betting and casino bonuses?"}',
             'value_es' => '{"0":"¿Cuáles son los requisitos de apuesta para los bonos de apuestas deportivas y de casino?"}',
             'value_fr' => '{"0":"Quelles sont les conditions de mise pour les bonus de paris sportifs et de casino ?"}',
             'value_pt' => '{"0":"Quais são os requisitos de apostas para os bônus de apostas esportivas e cassino?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 36
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, the bonus must be wagered five times on accumulators with three or more events, each with odds of at least 1.4. For the casino, the bonus amount must be wagered 35 times on slots within 7 days."}',
             'value_es' => '{"0":"Para las apuestas deportivas, el bono debe apostarse cinco veces en combinadas con tres o más eventos, cada uno con cuotas de al menos 1.4. Para el casino, el bono debe apostarse 35 veces en tragamonedas dentro de los 7 días."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le bonus doit être misé cinq fois sur des combinés comprenant trois événements ou plus, chacun avec une cote d’au moins 1,4. Pour le casino, le montant du bonus doit être misé 35 fois sur les machines à sous dans les 7 jours."}',
             'value_pt' => '{"0":"Para apostas esportivas, o bônus deve ser apostado cinco vezes em acumuladores com três ou mais eventos, cada um com odds de pelo menos 1,4. Para o cassino, o valor do bônus deve ser apostado 35 vezes em slots dentro de 7 dias."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 37
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"Are there any restrictions on withdrawing bonus funds?"}',
             'value_es' => '{"0":"¿Existen restricciones para retirar los fondos de bonificación?"}',
             'value_fr' => '{"0":"Y a-t-il des restrictions sur le retrait des fonds bonus ?"}',
             'value_pt' => '{"0":"Existem restrições para retirar fundos de bônus?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 38
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"Winnings from bonuses can only be withdrawn after fulfilling the wagering requirements; otherwise, the bonus amount will be canceled."}',
             'value_es' => '{"0":"Las ganancias de los bonos solo se pueden retirar después de cumplir con los requisitos de apuesta; de lo contrario, el importe del bono será cancelado."}',
             'value_fr' => '{"0":"Les gains provenant des bonus ne peuvent être retirés qu’après avoir rempli les conditions de mise ; sinon, le montant du bonus sera annulé."}',
             'value_pt' => '{"0":"Os ganhos de bônus só podem ser retirados após cumprir os requisitos de aposta; caso contrário, o valor do bônus será cancelado."}',
             'order' => 38
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 39
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'h3',
             'value_en' => '{"0":"How to find out about current promotions and no-deposit bonuses?"}',
             'value_es' => '{"0":"¿Cómo enterarse de las promociones actuales y los bonos sin depósito?"}',
             'value_fr' => '{"0":"Comment savoir quelles sont les promotions et les bonus sans dépôt disponibles ?"}',
             'value_pt' => '{"0":"Como saber sobre promoções atuais e bônus sem depósito?"}',
             'order' => 39
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'paripesa',
             'order' => 40
            ],
            ['key' => 'paripesa',
             'bookmaker_id' => 6,
             'component' => 'p',
             'value_en' => '{"0":"All current offers are available in the «Bonuses» section on the website. You can also subscribe to the Paripesa newsletter to receive information about special bonuses."}',
             'value_es' => '{"0":"Todas las ofertas actuales están disponibles en la sección «Bonos» del sitio web. También puedes suscribirte al boletín de Paripesa para recibir información sobre bonos especiales."}',
             'value_fr' => '{"0":"Toutes les offres actuelles sont disponibles dans la section « Bonus » sur le site. Vous pouvez également vous abonner à la newsletter de Paripesa pour recevoir des informations sur les bonus spéciaux."}',
             'value_pt' => '{"0":"Todas as ofertas atuais estão disponíveis na seção «Bônus» do site. Também é possível assinar a newsletter da Paripesa para receber informações sobre bônus especiais."}',
             'order' => 40
            ]
        );
    }
}
