<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBETANDYOUPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 1
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In the world of betting and casinos, bonus offers often set the tone for how profitable a platform can be. In the case of BETANDYOU, it’s important to know what opportunities are available for newcomers and regular players, how to activate promo codes, and what conditions apply to each bonus."}',
             'value_es' => '{"0":"En el mundo de las apuestas y los casinos, las ofertas de bonificación suelen marcar el tono de lo rentable que puede ser una plataforma. En el caso de BETANDYOU, es importante conocer qué oportunidades se ofrecen a los nuevos usuarios y a los jugadores habituales, cómo activar los códigos promocionales y cuáles son las condiciones de cada bono."}',
             'value_fr' => '{"0":"Dans le monde des paris et des casinos, les offres de bonus définissent souvent la rentabilité d’une plateforme. Dans le cas de BETANDYOU, il est essentiel de savoir quelles opportunités sont proposées aux nouveaux venus et aux joueurs réguliers, comment activer les codes promotionnels et quelles conditions accompagnent chaque bonus."}',
             'value_pt' => '{"0":"No mundo das apostas e dos cassinos, as ofertas de bônus geralmente determinam o quão vantajosa pode ser uma plataforma. No caso da BETANDYOU, é importante saber quais oportunidades são oferecidas aos novos usuários e aos jogadores regulares, como ativar os códigos promocionais e quais condições estão associadas a cada bônus."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 2
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we’ll take a closer look at how to use the :promocode during registration, whether there are rewards for already registered users, if no-deposit bonuses are available, as well as the latest promotions such as the Refer a MobCash Agent program and AdvanceBet."}',
             'value_es' => '{"0":"En esta reseña analizaremos en detalle cómo utilizar el :promocode al registrarse, si existen recompensas para los usuarios ya registrados, si hay bonos sin depósito disponibles, así como las promociones actuales, como el programa de referidos Refer a MobCash Agent y AdvanceBet."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons en détail comment utiliser le :promocode lors de l’inscription, s’il existe des récompenses pour les utilisateurs déjà enregistrés, si des bonus sans dépôt sont disponibles, ainsi que les promotions actuelles telles que le programme de parrainage Refer a MobCash Agent et AdvanceBet."}',
             'value_pt' => '{"0":"Nesta análise, explicaremos em detalhe como usar o :promocode durante o registro, se há recompensas para usuários já cadastrados, se estão disponíveis bônus sem depósito, bem como as promoções atuais, como o programa de indicação Refer a MobCash Agent e o AdvanceBet."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 3
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 4
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"First, go to the official BETANDYOU website and create a new account by clicking the REGISTER button. Enter your valid details in the registration form and add the promo code :promocode in the special field. Then choose one of the available bonus types: Casino Bonus, Free Bet, or Sports Betting Bonus. After filling in the required information and confirming your contact details, your account will be activated."}',
             'value_es' => '{"0":"Primero, accede al sitio web oficial de BETANDYOU y crea una nueva cuenta haciendo clic en el botón REGISTRO. Introduce tus datos válidos en el formulario de registro y añade el código promocional :promocode en el campo correspondiente. Luego selecciona uno de los tipos de bono disponibles: Bono de Casino, Apuesta Gratis o Bono para Apuestas Deportivas. Después de completar los datos requeridos y confirmar tu contacto, la cuenta será activada."}',
             'value_fr' => '{"0":"Commencez par vous rendre sur le site officiel de BETANDYOU et créez un nouveau compte en cliquant sur le bouton INSCRIPTION. Saisissez vos informations valides dans le formulaire d’inscription et entrez le code promotionnel :promocode dans le champ prévu à cet effet. Ensuite, choisissez l’un des types de bonus disponibles : bonus de casino, pari gratuit ou bonus de paris sportifs. Après avoir rempli les champs requis et confirmé vos coordonnées, votre compte sera activé."}',
             'value_pt' => '{"0":"Primeiro, acesse o site oficial da BETANDYOU e crie uma nova conta clicando no botão REGISTRO. Insira seus dados válidos no formulário de inscrição e adicione o código promocional :promocode no campo apropriado. Em seguida, escolha um dos tipos de bônus disponíveis: Bônus de Cassino, Aposta Grátis ou Bônus de Apostas Esportivas. Após preencher as informações necessárias e confirmar seus dados de contato, sua conta será ativada."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 5
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Next, you need to make a deposit. If you selected the Casino Bonus, you must deposit between $10 and $350 — you’ll receive a 100% bonus on your deposit amount plus 30 free spins. If you chose the Free Bet option, deposit at least $60 to receive a free bet equal to 20% of your deposit, up to a maximum of $30. If you selected the Sports Betting Bonus, deposit between $1 and $125 to receive a 100% bonus on your deposit. Once the deposit is processed, the bonus will be automatically credited to your bonus account."}',
             'value_es' => '{"0":"A continuación, debes realizar un depósito. Si elegiste el Bono de Casino, debes depositar entre $10 y $350, y recibirás un bono del 100% del importe depositado más 30 giros gratis. Si seleccionaste la Apuesta Gratis, realiza un depósito mínimo de $60 y obtendrás una apuesta gratuita equivalente al 20% de tu depósito, con un máximo de $30. Si elegiste el Bono de Apuestas Deportivas, deposita entre $1 y $125 para recibir un bono del 100% del depósito. Una vez procesado el depósito, el bono se acreditará automáticamente en tu cuenta de bonificación."}',
             'value_fr' => '{"0":"Ensuite, vous devez effectuer un dépôt. Si vous avez choisi le bonus de casino, vous devez déposer entre 10 $ et 350 $ — vous recevrez un bonus de 100 % du montant du dépôt ainsi que 30 tours gratuits. Si vous avez choisi le pari gratuit, déposez au moins 60 $ pour obtenir un pari gratuit équivalant à 20 % de votre dépôt, jusqu’à un maximum de 30 $. Si vous avez opté pour le bonus de paris sportifs, déposez entre 1 $ et 125 $ pour recevoir un bonus de 100 % du dépôt. Une fois le dépôt effectué, le bonus sera automatiquement crédité sur votre compte bonus."}',
             'value_pt' => '{"0":"Depois, é necessário fazer um depósito. Se você escolheu o Bônus de Cassino, deve depositar entre US$10 e US$350 — você receberá um bônus de 100% do valor depositado mais 30 rodadas grátis. Se escolheu a Aposta Grátis, deposite pelo menos US$60 e receba uma aposta grátis equivalente a 20% do valor depositado, com um máximo de US$30. Se escolheu o Bônus de Apostas Esportivas, deposite entre US$1 e US$125 para receber um bônus de 100% do depósito. Assim que o depósito for processado, o bônus será automaticamente creditado na sua conta de bônus."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 6
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 7
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Please note! To withdraw bonus funds, wagering requirements must be met."}',
             'value_es' => '{"0":"¡Atención! Para poder retirar los fondos del bono, es necesario cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Attention ! Pour pouvoir retirer les fonds du bonus, les conditions de mise doivent être respectées."}',
             'value_pt' => '{"0":"Atenção! Para poder sacar os fundos do bônus, é necessário cumprir os requisitos de aposta."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 8
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 35 times the bonus amount within 7 days of activation. The maximum allowed bet during wagering is $5. Free spins become available only after the deposit bonus is fully wagered and are credited in the game Wilds™ of Fortune."}',
             'value_es' => '{"0":"Los bonos de casino deben apostarse 35 veces el monto del bono dentro de los 7 días posteriores a la activación. La apuesta máxima permitida durante el proceso de apuesta es de $5. Los giros gratis estarán disponibles solo después de haber apostado completamente el bono por depósito y se acreditarán en el juego Wilds™ of Fortune."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 35 fois le montant du bonus dans un délai de 7 jours après leur activation. La mise maximale autorisée pendant le wagering est de 5 $. Les tours gratuits ne sont disponibles qu’après avoir rempli les conditions du bonus de dépôt et sont crédités dans le jeu Wilds™ of Fortune."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 35 vezes o valor do bônus dentro de 7 dias após a ativação. A aposta máxima permitida durante o rollover é de US$5. Os giros grátis ficam disponíveis apenas após o bônus de depósito ser totalmente apostado e são creditados no jogo Wilds™ of Fortune."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 9
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"To wager the free bet, place an express bet with at least 4 events, each with odds higher than 1.6, using the received promo code. The bonus must be used within 30 days from the date of registration."}',
             'value_es' => '{"0":"Para liberar la apuesta gratis, realiza una apuesta combinada con al menos 4 eventos con cuotas superiores a 1.6, utilizando el código promocional recibido. El bono debe utilizarse dentro de los 30 días posteriores al registro."}',
             'value_fr' => '{"0":"Pour miser le pari gratuit, effectuez un pari combiné comprenant au moins 4 événements avec des cotes supérieures à 1,6 en utilisant le code promotionnel reçu. Le bonus doit être utilisé dans les 30 jours suivant l’inscription."}',
             'value_pt' => '{"0":"Para liberar a aposta grátis, faça uma aposta múltipla com pelo menos 4 eventos com odds acima de 1.6, usando o código promocional recebido. O bônus deve ser usado dentro de 30 dias a partir da data de registro."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 10
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times the bonus amount in express bets. Each express must include at least 3 events, and a minimum of 3 events must have odds no lower than 1.40."}',
             'value_es' => '{"0":"El bono para apuestas deportivas debe apostarse 5 veces el monto del bono en apuestas combinadas. Cada apuesta combinada debe incluir al menos 3 eventos, y un mínimo de 3 eventos deben tener cuotas no inferiores a 1.40."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs doit être misé 5 fois le montant du bonus sur des paris combinés. Chaque combiné doit comprendre au moins 3 événements, dont un minimum de 3 avec des cotes d’au moins 1,40."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado 5 vezes o valor do bônus em apostas múltiplas. Cada múltipla deve incluir pelo menos 3 eventos, e um mínimo de 3 deles deve ter odds de no mínimo 1.40."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 11
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 12
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BETANDYOU supports existing customers through regular promotions. For example, after making a deposit on Thursday, you will receive a +100% bonus on the deposited amount. VIP players can get cashback, and express bets come with boosted odds."}',
             'value_es' => '{"0":"Sí, BETANDYOU apoya a los clientes existentes con promociones regulares. Por ejemplo, después de realizar un depósito un jueves, recibirás un bono del +100% sobre el monto depositado. Los jugadores VIP pueden obtener reembolsos en efectivo y las apuestas combinadas tienen cuotas mejoradas."}',
             'value_fr' => '{"0":"Oui, BETANDYOU soutient ses clients existants grâce à des promotions régulières. Par exemple, après un dépôt effectué un jeudi, vous recevrez un bonus de +100 % du montant déposé. Les joueurs VIP peuvent bénéficier d’un cashback, et les paris combinés profitent de cotes majorées."}',
             'value_pt' => '{"0":"Sim, a BETANDYOU oferece suporte aos clientes existentes com promoções regulares. Por exemplo, após fazer um depósito na quinta-feira, você recebe um bônus de +100% sobre o valor depositado. Jogadores VIP podem receber cashback, e apostas múltiplas contam com odds aumentadas."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 13
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"In addition, the referral program allows users to earn rewards for bringing in new players. Below in this review, we will discuss the details of this promotion."}',
             'value_es' => '{"0":"Además, el programa de referidos permite obtener recompensas por invitar a nuevos usuarios. Más abajo, en esta reseña, explicamos los detalles de esta promoción."}',
             'value_fr' => '{"0":"De plus, le programme de parrainage permet d’obtenir des récompenses en invitant de nouveaux utilisateurs. Nous détaillons cette promotion plus bas dans cet article."}',
             'value_pt' => '{"0":"Além disso, o programa de indicação permite ganhar recompensas por convidar novos usuários. Abaixo, nesta análise, explicamos os detalhes dessa promoção."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 14
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 15
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"BETANDYOU does not have permanently active no-deposit bonuses. Such offers appear rarely and for a limited time. For example, sometimes free spins without a deposit may be available for a specific slot. To avoid missing these promotions, it is recommended to regularly check the PROMO section."}',
             'value_es' => '{"0":"BETANDYOU no ofrece bonos sin depósito de forma permanente. Estas promociones aparecen rara vez y por tiempo limitado. Por ejemplo, a veces se pueden obtener giros gratis sin depósito en una tragamonedas específica. Para no perderte estas ofertas, se recomienda revisar con frecuencia la sección PROMO."}',
             'value_fr' => '{"0":"BETANDYOU ne propose pas de bonus sans dépôt actifs en permanence. Ces offres apparaissent rarement et pour une durée limitée. Par exemple, il peut parfois y avoir des tours gratuits sans dépôt sur une machine à sous spécifique. Pour ne pas manquer ces promotions, il est conseillé de consulter régulièrement la section PROMO."}',
             'value_pt' => '{"0":"A BETANDYOU não possui bônus sem depósito ativos de forma permanente. Essas ofertas aparecem raramente e por tempo limitado. Por exemplo, às vezes podem ser oferecidas rodadas grátis sem depósito em um slot específico. Para não perder essas promoções, recomenda-se verificar regularmente a seção PROMO."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 16
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_es' => '{"0":"RECOMIENDE A UN AGENTE MOBCASH"}',
                'value_fr' => '{"0":"REFER A MOBCASH AGENT"}',
                'value_pt' => '{"0":"REFIRA UM AGENTE MOBCASH"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 17
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Thanks to this promotion, you can become an agent and invite friends to register using your referral link. To receive a reward, the new agent must register and make a deposit. You will earn a percentage of the deposited amount credited to your account."}',
             'value_es' => '{"0":"Gracias a esta promoción, puedes convertirte en agente e invitar a tus amigos a registrarse mediante tu enlace de referencia. Para recibir una recompensa, el nuevo agente debe registrarse y realizar un depósito. Recibirás un porcentaje del monto depositado acreditado en tu cuenta."}',
             'value_fr' => '{"0":"Grâce à cette promotion, vous pouvez devenir agent et inviter vos amis à s’inscrire via votre lien de parrainage. Pour recevoir une récompense, le nouvel agent doit s’inscrire et effectuer un dépôt. Vous recevrez un pourcentage du montant déposé crédité sur votre compte."}',
             'value_pt' => '{"0":"Graças a esta promoção, você pode se tornar um agente e convidar amigos para se registrarem através do seu link de indicação. Para receber a recompensa, o novo agente deve se registrar e fazer um depósito. Você receberá uma porcentagem do valor depositado em sua conta."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 18
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"The promotion has four levels of engagement. On the first level, when your friend registers using your link, you receive 15% of their deposit amount. If your friend invites someone else to join BETANDYOU, that becomes the second level, and you earn 8% of the deposit. On the third level, you receive 5% of the deposit, and on the fourth level, 2%."}',
             'value_es' => '{"0":"La promoción tiene cuatro niveles de participación. En el primer nivel, cuando tu amigo se registra a través de tu enlace, recibes el 15% del monto depositado. Si tu amigo invita a otra persona a unirse a BETANDYOU, eso será el segundo nivel, y recibirás el 8% del depósito. En el tercer nivel, recibes el 5% del depósito, y en el cuarto, el 2%."}',
             'value_fr' => '{"0":"La promotion comporte quatre niveaux d’engagement. Au premier niveau, lorsque votre ami s’inscrit via votre lien, vous recevez 15 % du montant du dépôt. Si votre ami invite quelqu’un d’autre à rejoindre BETANDYOU, cela devient le deuxième niveau, et vous gagnez 8 % du dépôt. Au troisième niveau, vous recevez 5 %, et au quatrième niveau, 2 %."}',
             'value_pt' => '{"0":"A promoção possui quatro níveis de engajamento. No primeiro nível, quando seu amigo se registra pelo seu link, você recebe 15% do valor do depósito. Se seu amigo convidar outra pessoa para se juntar à BETANDYOU, isso será o segundo nível, e você receberá 8% do depósito. No terceiro nível, você recebe 5%, e no quarto, 2%."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 19
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 20
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"Advancebet"}',
                'value_es' => '{"0":"Advancebet"}',
                'value_fr' => '{"0":"Advancebet"}',
                'value_pt' => '{"0":"Apostaconfiança"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 21
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to place a bet even if your account balance is insufficient and your previous bets have not yet been settled. In other words, if you have unsettled bets, the platform may allow you to place the next bet on credit."}',
             'value_es' => '{"0":"Esta promoción te permite realizar una apuesta incluso si tu saldo no es suficiente y tus apuestas anteriores aún no han sido liquidadas. Es decir, si tienes apuestas pendientes, la plataforma puede permitirte realizar la siguiente apuesta a crédito."}',
             'value_fr' => '{"0":"Cette promotion vous permet de placer un pari même si votre solde est insuffisant et que vos paris précédents n’ont pas encore été réglés. Autrement dit, si vous avez des paris en attente, la plateforme peut vous autoriser à effectuer le pari suivant à crédit."}',
             'value_pt' => '{"0":"Esta promoção permite que você faça uma aposta mesmo que o saldo da sua conta não seja suficiente e suas apostas anteriores ainda não tenham sido liquidadas. Ou seja, se você tiver apostas pendentes, a plataforma pode permitir que faça a próxima aposta a crédito."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 22
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Your available advance is displayed in the «Bet Slip». Click the «Find Out» button in the «Available Advance» section to see the amount available for the trust bet. Trust bets can only be placed on Live sports events and sports events starting within the next 48 hours."}',
             'value_es' => '{"0":"Tu anticipo disponible se muestra en el «Cupón de apuestas». Haz clic en el botón «Saber» en la sección «Anticipo disponible» para ver el monto disponible para la apuesta de confianza. Las apuestas de confianza solo pueden realizarse en eventos deportivos en vivo y en eventos deportivos que comiencen en las próximas 48 horas."}',
             'value_fr' => '{"0":"L’avance disponible s’affiche dans le « Coupon de paris ». Cliquez sur le bouton « Découvrir » dans la rubrique « Avance disponible » pour voir le montant disponible pour le pari de confiance. Les paris de confiance ne peuvent être placés que sur les événements sportifs en direct et ceux qui débutent dans les 48 prochaines heures."}',
             'value_pt' => '{"0":"O adiantamento disponível é exibido no «Cupom de apostas». Clique no botão «Saber» na seção «Adiantamento disponível» para ver o valor disponível para a aposta de confiança. As apostas de confiança só podem ser feitas em eventos esportivos ao vivo e em eventos que comecem nas próximas 48 horas."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 23
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 24
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h2',
                'value_en' => '{"0":"BETANDYOU FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BETANDYOU"}',
                'value_fr' => '{"0":"FAQ de BETANDYOU"}',
                'value_pt' => '{"0":"Perguntas frequentes do BETANDYOU"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 25
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit required to activate the welcome bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo necesario para activar el bono de bienvenida?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum requis pour activer le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo necessário para ativar o bônus de boas-vindas?"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 26
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"For the sports betting bonus, a deposit of $1 is required; for receiving a free bet, $60; and for the casino bonus, $10."}',
             'value_es' => '{"0":"Para el bono de apuestas deportivas se requiere un depósito de $1; para recibir una apuesta gratis, $60; y para el bono de casino, $10."}',
             'value_fr' => '{"0":"Pour le bonus de paris sportifs, un dépôt de 1 $ est requis ; pour recevoir un pari gratuit, 60 $ ; et pour le bonus de casino, 10 $."}',
             'value_pt' => '{"0":"Para o bônus de apostas esportivas é necessário um depósito de $1; para receber uma aposta grátis, $60; e para o bônus de cassino, $10."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 27
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can I get a no-deposit bonus?"}',
             'value_es' => '{"0":"¿Se puede obtener un bono sin depósito?"}',
             'value_fr' => '{"0":"Peut-on obtenir un bonus sans dépôt ?"}',
             'value_pt' => '{"0":"É possível receber um bônus sem depósito?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 28
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Currently, no-deposit bonuses are not offered."}',
             'value_es' => '{"0":"Actualmente no se ofrecen bonos sin depósito."}',
             'value_fr' => '{"0":"Actuellement, aucun bonus sans dépôt n’est proposé."}',
             'value_pt' => '{"0":"Atualmente, os bônus sem depósito não são oferecidos."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 29
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"What happens if I don’t manage to wager the bonus in time?"}',
             'value_es' => '{"0":"¿Qué pasa si no logro cumplir con el requisito de apuesta a tiempo?"}',
             'value_fr' => '{"0":"Que se passe-t-il si je ne parviens pas à miser le bonus dans les délais ?"}',
             'value_pt' => '{"0":"O que acontece se eu não conseguir cumprir o requisito de apostas a tempo?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 30
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"If the wagering requirements are not met within the specified period, the bonus and any associated winnings will be canceled."}',
             'value_es' => '{"0":"Si no se cumplen los requisitos de apuesta dentro del período establecido, el bono y las ganancias asociadas serán cancelados."}',
             'value_fr' => '{"0":"Si les conditions de mise ne sont pas respectées dans le délai imparti, le bonus et les gains associés seront annulés."}',
             'value_pt' => '{"0":"Se os requisitos de apostas não forem cumpridos dentro do prazo determinado, o bônus e os ganhos associados serão cancelados."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 31
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Can I claim multiple welcome bonuses at the same time?"}',
             'value_es' => '{"0":"¿Puedo obtener varios bonos de bienvenida al mismo tiempo?"}',
             'value_fr' => '{"0":"Puis-je recevoir plusieurs bonus de bienvenue en même temps ?"}',
             'value_pt' => '{"0":"Posso receber vários bônus de boas-vindas ao mesmo tempo?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 32
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Only one welcome bonus can be activated at a time."}',
             'value_es' => '{"0":"Solo se puede activar un bono de bienvenida a la vez."}',
             'value_fr' => '{"0":"Un seul bonus de bienvenue peut être activé à la fois."}',
             'value_pt' => '{"0":"Apenas um bônus de boas-vindas pode ser ativado por vez."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 33
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to verify my account to claim the bonus?"}',
             'value_es' => '{"0":"¿Es necesario verificar la cuenta para recibir el bono?"}',
             'value_fr' => '{"0":"Faut-il vérifier son compte pour obtenir le bonus ?"}',
             'value_pt' => '{"0":"É necessário verificar a conta para receber o bônus?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betandyou',
             'order' => 34
            ],
            ['key' => 'betandyou',
             'bookmaker_id' => 13,
             'component' => 'p',
             'value_en' => '{"0":"Yes, BETANDYOU may require identity verification before withdrawing bonus funds."}',
             'value_es' => '{"0":"Sí, BETANDYOU puede solicitar la verificación de identidad antes de retirar los fondos del bono."}',
             'value_fr' => '{"0":"Oui, BETANDYOU peut demander une vérification d\'identité avant le retrait des fonds du bonus."}',
             'value_pt' => '{"0":"Sim, a BETANDYOU pode exigir a verificação de identidade antes de sacar os fundos do bônus."}',
             'order' => 34
            ]
        );
    }
}
