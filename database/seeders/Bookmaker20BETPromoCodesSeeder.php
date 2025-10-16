<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker20BETPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 1
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET offers welcome bonuses to new players, allowing them to receive extra funds to start with. The bookmaker regularly launches seasonal promotions and offers tied to major sporting events such as Champions League matches or ATP and WTA tennis tournaments. 20BET also provides bonuses for regular customers."}',
             'value_es' => '{"0":"20BET ofrece bonos de bienvenida a los nuevos jugadores, lo que les permite obtener fondos adicionales para comenzar. La casa de apuestas lanza regularmente promociones y ofertas estacionales relacionadas con grandes eventos deportivos, como partidos de la Liga de Campeones o torneos de tenis ATP y WTA. 20BET también ofrece bonos para clientes habituales."}',
             'value_fr' => '{"0":"20BET propose des bonus de bienvenue aux nouveaux joueurs, leur permettant d’obtenir des fonds supplémentaires pour bien démarrer. Le bookmaker lance régulièrement des promotions saisonnières et des offres liées à de grands événements sportifs, comme les matchs de la Ligue des champions ou les tournois de tennis ATP et WTA. 20BET propose également des bonus pour les clients réguliers."}',
             'value_pt' => '{"0":"A 20BET oferece bônus de boas-vindas para novos jogadores, permitindo que recebam fundos extras para começar. A casa de apostas lança regularmente promoções sazonais e ofertas relacionadas a grandes eventos esportivos, como partidas da Liga dos Campeões ou torneios de tênis ATP e WTA. A 20BET também oferece bônus para clientes regulares."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 2
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This review will help you learn how to use the :promocode promo code during registration, which bonuses are available for new and existing players, and what current promotions are offered on the platform."}',
             'value_es' => '{"0":"Esta reseña te ayudará a aprender cómo usar el código promocional :promocode al registrarte, qué bonos están disponibles para nuevos y antiguos jugadores, y qué promociones actuales ofrece la plataforma."}',
             'value_fr' => '{"0":"Cet article vous aidera à découvrir comment utiliser le code promo :promocode lors de l’inscription, quels bonus sont disponibles pour les nouveaux et les anciens joueurs, ainsi que les promotions actuellement proposées sur la plateforme."}',
             'value_pt' => '{"0":"Esta análise vai te ajudar a entender como usar o código promocional :promocode durante o registro, quais bônus estão disponíveis para novos e antigos jogadores e quais promoções atuais estão disponíveis na plataforma."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 3
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 4
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To activate the :promocode promo code on 20BET, you first need to register on the website. To do this, go to the official site and click the «SIGN IN» button. Registration takes place in three steps, where you need to provide accurate personal information. Please note that you must enter your real data, as identity verification will be required later."}',
             'value_es' => '{"0":"Para activar el código promocional :promocode en 20BET, primero debes registrarte en el sitio web. Para ello, accede al sitio oficial y haz clic en el botón «SIGN IN». El registro se realiza en tres pasos, donde deberás proporcionar información precisa y actual. Es importante ingresar tus datos reales, ya que más adelante será necesario verificar tu identidad."}',
             'value_fr' => '{"0":"Pour activer le code promo :promocode sur 20BET, vous devez d’abord vous inscrire sur le site. Pour cela, rendez-vous sur le site officiel et cliquez sur le bouton « SIGN IN ». L’inscription se déroule en trois étapes, au cours desquelles vous devez fournir des informations exactes et à jour. Il est important d’indiquer vos véritables données, car une vérification d’identité sera nécessaire par la suite."}',
             'value_pt' => '{"0":"Para ativar o código promocional :promocode na 20BET, primeiro é necessário se registrar no site. Para isso, acesse o site oficial e clique no botão «SIGN IN». O registro é feito em três etapas, nas quais você deve fornecer informações reais e atualizadas. É importante inserir seus dados verdadeiros, pois será necessário passar por um processo de verificação de identidade posteriormente."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 5
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"In the first step, enter the :promocode in the special field. Choose where you want to use your bonus — for sports betting or casino games. After that, you can proceed to the next steps."}',
             'value_es' => '{"0":"En el primer paso, introduce el código :promocode en el campo correspondiente. Elige si deseas usar el bono para apuestas deportivas o para juegos de casino. Después de eso, puedes continuar con los siguientes pasos."}',
             'value_fr' => '{"0":"Lors de la première étape, saisissez le code :promocode dans le champ prévu à cet effet. Choisissez où vous souhaitez utiliser votre bonus — pour les paris sportifs ou les jeux de casino. Ensuite, vous pouvez passer aux étapes suivantes."}',
             'value_pt' => '{"0":"Na primeira etapa, insira o código :promocode no campo designado. Escolha onde deseja usar o bônus — para apostas esportivas ou jogos de cassino. Depois disso, você pode prosseguir para as próximas etapas."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 6
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Next, to receive the bonus, you need to make a deposit. The amount of the bonus depends on the size of your deposit. If you choose the sports betting bonus, the deposit must be between $10 and $100, and you will receive +100% of the deposit amount as a bonus. If you choose the casino bonus, the deposit must be between $20 and $120, and you will receive +100% of the deposit amount as a bonus plus 120 free spins."}',
             'value_es' => '{"0":"Luego, para recibir el bono, deberás realizar un depósito. El monto del bono depende de la cantidad depositada. Si eliges el bono para apuestas deportivas, el depósito debe ser de entre $10 y $100, y recibirás un +100% del monto depositado como bono. Si eliges el bono para casino, el depósito debe ser de entre $20 y $120, y recibirás un +100% del monto depositado más 120 giros gratis."}',
             'value_fr' => '{"0":"Pour obtenir le bonus, vous devez effectuer un dépôt. Le montant du bonus dépendra de la somme déposée. Si vous choisissez le bonus pour les paris sportifs, le dépôt doit être compris entre 10 $ et 100 $, et vous recevrez +100 % du montant déposé en bonus. Si vous choisissez le bonus pour le casino, le dépôt doit être compris entre 20 $ et 120 $, et vous recevrez +100 % du montant déposé ainsi que 120 tours gratuits."}',
             'value_pt' => '{"0":"Em seguida, para receber o bônus, é necessário fazer um depósito. O valor do bônus depende do montante depositado. Se você escolher o bônus para apostas esportivas, o depósito deve ser entre US$10 e US$100, e você receberá +100% do valor depositado como bônus. Se escolher o bônus para cassino, o depósito deve ser entre US$20 e US$120, e você receberá +100% do valor depositado mais 120 rodadas grátis."}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 7
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 8
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Please note that to be able to withdraw your bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Ten en cuenta que, para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Veuillez noter que, pour pouvoir retirer vos fonds bonus, vous devez d’abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Observe que, para poder sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 9
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times using accumulator bets. Each accumulator must include at least two selections, and the total odds must be 2.00 or higher. You have 7 days to meet the wagering requirement."}',
             'value_es' => '{"0":"El bono de apuestas deportivas debe apostarse 5 veces utilizando apuestas combinadas. Cada combinada debe incluir al menos dos selecciones y la cuota total debe ser de 2.00 o superior. Dispones de 7 días para cumplir con el requisito de apuesta."}',
             'value_fr' => '{"0":"Le bonus pour les paris sportifs doit être misé 5 fois en utilisant des paris combinés. Chaque combiné doit inclure au moins deux sélections et la cote totale doit être de 2.00 ou plus. Vous disposez de 7 jours pour satisfaire à cette exigence."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado 5 vezes utilizando apostas múltiplas. Cada múltipla deve incluir pelo menos duas seleções, e a odd total deve ser de 2.00 ou superior. Você tem 7 dias para cumprir este requisito de apostas."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 10
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses must be wagered 40 times the bonus amount. You also have 7 days to complete this requirement."}',
             'value_es' => '{"0":"Los bonos del casino deben apostarse 40 veces el monto del bono. También dispones de 7 días para completar este requisito."}',
             'value_fr' => '{"0":"Les bonus de casino doivent être misés 40 fois le montant du bonus. Vous disposez également de 7 jours pour remplir cette condition."}',
             'value_pt' => '{"0":"Os bônus de cassino devem ser apostados 40 vezes o valor do bônus. Você também tem 7 dias para completar este requisito."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 11
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 12
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"20BET regularly offers bonuses for existing players. Active users can enjoy bonuses on reload deposits. The platform also features promotions with enhanced odds, accumulator bet bonuses, and a loyalty program for casino players."}',
             'value_es' => '{"0":"20BET ofrece regularmente bonos para jugadores habituales. Los usuarios activos pueden disfrutar de bonos por depósitos repetidos. La plataforma también propone promociones con cuotas mejoradas, bonos para apuestas combinadas y un programa de fidelidad para jugadores de casino."}',
             'value_fr' => '{"0":"20BET propose régulièrement des bonus pour les joueurs réguliers. Les utilisateurs actifs peuvent profiter de bonus sur les dépôts répétés. La plateforme offre également des promotions avec des cotes améliorées, des bonus pour les paris combinés et un programme de fidélité destiné aux joueurs de casino."}',
             'value_pt' => '{"0":"A 20BET oferece regularmente bônus para jogadores frequentes. Usuários ativos podem receber bônus em depósitos adicionais. A plataforma também disponibiliza promoções com odds aprimoradas, bônus para apostas múltiplas e um programa de fidelidade para jogadores de cassino."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 13
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"VIP clients can expect special offers such as cashback on sports bets and free spins for casino games."}',
             'value_es' => '{"0":"Los clientes VIP pueden beneficiarse de ofertas especiales, como reembolsos en apuestas deportivas y giros gratis para juegos de casino."}',
             'value_fr' => '{"0":"Les clients VIP peuvent bénéficier d’offres spéciales telles que des cashback sur les paris sportifs et des tours gratuits pour les jeux de casino."}',
             'value_pt' => '{"0":"Os clientes VIP podem contar com ofertas especiais, como cashback em apostas esportivas e rodadas grátis em jogos de cassino."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 14
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 15
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"At the moment, 20BET does not offer no-deposit bonuses, but occasionally there are temporary promotions that allow players to receive a small bonus without making a deposit. Therefore, it is recommended to regularly check the «PROMOTIONS» section on the website and subscribe to the newsletter."}',
             'value_es' => '{"0":"Actualmente, 20BET no ofrece bonos sin depósito, aunque a veces aparecen promociones temporales que permiten obtener un pequeño bono sin realizar un depósito. Por eso, se recomienda revisar regularmente la sección «PROMOTIONS» del sitio web y suscribirse al boletín informativo."}',
             'value_fr' => '{"0":"Pour le moment, 20BET ne propose pas de bonus sans dépôt, mais il arrive que des promotions temporaires permettent d’obtenir un petit bonus sans effectuer de dépôt. Il est donc conseillé de vérifier régulièrement la section «PROMOTIONS» du site et de s’abonner à la newsletter."}',
             'value_pt' => '{"0":"No momento, a 20BET não oferece bônus sem depósito, mas ocasionalmente surgem promoções temporárias que permitem receber um pequeno bônus sem necessidade de depósito. Por isso, recomenda-se verificar regularmente a seção «PROMOTIONS» do site e assinar a newsletter."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 16
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Saturday reload bonus"}',
                'value_es' => '{"0":"Bono de recarga del sábado"}',
                'value_fr' => '{"0":"Bonus de dépôt du samedi"}',
                'value_pt' => '{"0":"Bónus de recarga ao sábado"}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 17
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"This promotion allows you to receive additional funds on your deposit for sports betting. To participate, you need to make a deposit on Saturday between $10 and $100, and you will receive +100% of the deposit amount as a bonus."}',
             'value_es' => '{"0":"Esta promoción te permite obtener fondos adicionales en tu depósito para apuestas deportivas. Para participar, debes realizar un depósito el sábado entre $10 y $100, y recibirás un +100% del monto depositado como bono."}',
             'value_fr' => '{"0":"Cette promotion vous permet d’obtenir des fonds supplémentaires sur votre dépôt pour les paris sportifs. Pour y participer, vous devez effectuer un dépôt le samedi compris entre 10 et 100 dollars, et vous recevrez un bonus de +100 % du montant déposé."}',
             'value_pt' => '{"0":"Esta promoção permite que você receba fundos adicionais no seu depósito para apostas esportivas. Para participar, é necessário fazer um depósito no sábado entre US$10 e US$100, e você receberá um bônus de +100% do valor depositado."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 18
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Your free bet is valid for 2 days. It must be used on accumulator bets with at least three events. Each event must have odds of at least 1.50."}',
             'value_es' => '{"0":"Tu apuesta gratuita es válida por 2 días. Debe utilizarse en apuestas combinadas con al menos tres eventos. Cada evento debe tener una cuota mínima de 1.50."}',
             'value_fr' => '{"0":"Votre pari gratuit est valable pendant 2 jours. Il doit être utilisé sur des paris combinés comportant au moins trois événements. Chaque événement doit avoir une cote d’au moins 1,50."}',
             'value_pt' => '{"0":"Sua aposta grátis é válida por 2 dias. Ela deve ser usada em apostas múltiplas com pelo menos três eventos. Cada evento deve ter uma odd mínima de 1,50."}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 19
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 20
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Forecasts"}',
                'value_es' => '{"0":"Pronósticos"}',
                'value_fr' => '{"0":"Pronostics"}',
                'value_pt' => '{"0":"Previsões"}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 21
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The promotion allows you to earn extra funds for correctly predicting the results of the day’s events. To participate, the total amount of your deposits over the last 5 days must be at least 20 euros."}',
             'value_es' => '{"0":"La promoción te permite ganar fondos adicionales por predecir correctamente los resultados de los eventos del día. Para participar, el monto total de tus depósitos en los últimos 5 días debe ser de al menos 20 euros."}',
             'value_fr' => '{"0":"Cette promotion vous permet de recevoir des fonds supplémentaires en cas de bons pronostics sur les événements du jour. Pour participer, le montant total de vos dépôts au cours des 5 derniers jours doit être d’au moins 20 euros."}',
             'value_pt' => '{"0":"A promoção permite que você ganhe fundos extras por prever corretamente os resultados dos eventos do dia. Para participar, o valor total dos seus depósitos nos últimos 5 dias deve ser de pelo menos 20 euros."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 22
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"If you correctly predict the outcome of 8 selected matches, you’ll receive $50; for 9 correct predictions, you’ll get $100; and for 10 correct predictions, you’ll win $1,000."}',
             'value_es' => '{"0":"Si aciertas el resultado de 8 partidos, recibirás $50; por 9 aciertos, recibirás $100; y si aciertas los 10 partidos, ganarás $1,000."}',
             'value_fr' => '{"0":"Si vous prédisez correctement le résultat de 8 matchs, vous recevrez 50 dollars ; pour 9 bons pronostics, 100 dollars ; et pour 10 bons pronostics, 1 000 dollars."}',
             'value_pt' => '{"0":"Se você acertar o resultado de 8 partidas, receberá US$50; com 9 acertos, ganhará US$100; e com 10 acertos, receberá US$1.000."}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 23
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 24
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"Casino VIP Program"}',
                'value_es' => '{"0":"Programa Vip De 20BET"}',
                'value_fr' => '{"0":"Programme Vip De 20BET"}',
                'value_pt' => '{"0":"Programa Vip Da 20BET"}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 25
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"The 20BET Casino VIP Program is designed for regular players. Participants receive weekly cashback and free spins. The level of privileges depends on the player’s activity and the number of bets placed. You automatically become a member of the VIP program after making your first deposit."}',
             'value_es' => '{"0":"El programa VIP del casino 20BET está diseñado para jugadores habituales. Los participantes reciben reembolsos semanales y giros gratis. El nivel de privilegios depende de la actividad del jugador y de la cantidad de apuestas realizadas. Te conviertes automáticamente en miembro del programa VIP después de realizar tu primer depósito."}',
             'value_fr' => '{"0":"Le programme VIP du casino 20BET est conçu pour les joueurs réguliers. Les participants reçoivent un cashback hebdomadaire et des tours gratuits. Le niveau de privilèges dépend de l’activité du joueur et du nombre de mises effectuées. Vous devenez automatiquement membre du programme VIP après votre premier dépôt."}',
             'value_pt' => '{"0":"O programa VIP do cassino 20BET foi criado para jogadores regulares. Os participantes recebem cashback semanal e rodadas grátis. O nível de privilégios depende da atividade do jogador e da quantidade de apostas realizadas. Você se torna automaticamente membro do programa VIP após fazer seu primeiro depósito."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 26
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"All rewards come with a 10x wagering requirement. Funds obtained by exchanging points for real money are subject to a 5x wagering requirement."}',
             'value_es' => '{"0":"Todas las recompensas tienen un requisito de apuesta de 10x. Los fondos obtenidos al canjear puntos por dinero real están sujetos a un requisito de apuesta de 5x."}',
             'value_fr' => '{"0":"Toutes les récompenses sont soumises à une exigence de mise de 10x. Les fonds obtenus en échangeant des points contre de l’argent réel sont soumis à une exigence de mise de 5x."}',
             'value_pt' => '{"0":"Todas as recompensas têm um requisito de aposta de 10x. Os fundos obtidos pela troca de pontos por dinheiro real estão sujeitos a um requisito de aposta de 5x."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 27
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 28
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h2',
                'value_en' => '{"0":"20BET FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 20BET"}',
                'value_fr' => '{"0":"FAQ de 20BET"}',
                'value_pt' => '{"0":"Perguntas frequentes do 20BET"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 29
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can I receive multiple welcome bonuses at the same time?"}',
             'value_es' => '{"0":"¿Puedo recibir varios bonos de bienvenida al mismo tiempo?"}',
             'value_fr' => '{"0":"Puis-je recevoir plusieurs bonus de bienvenue en même temps ?"}',
             'value_pt' => '{"0":"Posso receber vários bônus de boas-vindas ao mesmo tempo?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 30
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"No, you can only receive one welcome bonus — either for sports betting or for casino games."}',
             'value_es' => '{"0":"No, solo puedes recibir un bono de bienvenida, ya sea para apuestas deportivas o para juegos de casino."}',
             'value_fr' => '{"0":"Non, vous ne pouvez recevoir qu’un seul bonus de bienvenue, soit pour les paris sportifs, soit pour les jeux de casino."}',
             'value_pt' => '{"0":"Não, você só pode receber um bônus de boas-vindas — para apostas esportivas ou para jogos de cassino."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 31
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Do I need to verify my account to receive the bonus?"}',
             'value_es' => '{"0":"¿Es necesario verificar la cuenta para recibir el bono?"}',
             'value_fr' => '{"0":"Dois-je vérifier mon compte pour recevoir le bonus ?"}',
             'value_pt' => '{"0":"É necessário verificar a conta para receber o bônus?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 32
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, the bonus can only be withdrawn after identity verification."}',
             'value_es' => '{"0":"Sí, el bono solo se puede retirar después de la verificación de identidad."}',
             'value_fr' => '{"0":"Oui, le bonus ne peut être retiré qu’après la vérification de l’identité."}',
             'value_pt' => '{"0":"Sim, o bônus só pode ser retirado após a verificação de identidade."}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 33
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What is the minimum deposit required to receive the welcome bonus?"}',
             'value_es' => '{"0":"¿Cuál es el depósito mínimo necesario para recibir el bono de bienvenida?"}',
             'value_fr' => '{"0":"Quel est le dépôt minimum requis pour recevoir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Qual é o depósito mínimo necessário para receber o bônus de boas-vindas?"}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 34
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"To receive the sports betting bonus, make a deposit of at least 10 dollars. To receive the casino bonus, make a deposit of at least 20 dollars."}',
             'value_es' => '{"0":"Para obtener el bono de apuestas deportivas, realiza un depósito de al menos 10 dólares. Para obtener el bono de casino, realiza un depósito de al menos 20 dólares."}',
             'value_fr' => '{"0":"Pour obtenir le bonus de paris sportifs, effectuez un dépôt d’au moins 10 dollars. Pour obtenir le bonus de casino, effectuez un dépôt d’au moins 20 dollars."}',
             'value_pt' => '{"0":"Para receber o bônus de apostas esportivas, faça um depósito de pelo menos 10 dólares. Para receber o bônus de cassino, faça um depósito de pelo menos 20 dólares."}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 35
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"What happens if the wagering requirements are not met on time?"}',
             'value_es' => '{"0":"¿Qué sucede si no se cumplen los requisitos de apuesta a tiempo?"}',
             'value_fr' => '{"0":"Que se passe-t-il si les conditions de mise ne sont pas remplies à temps ?"}',
             'value_pt' => '{"0":"O que acontece se os requisitos de apostas não forem cumpridos a tempo?"}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 36
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"If the player fails to meet the wagering requirements within the specified period, the bonus and all winnings obtained from it will be canceled."}',
             'value_es' => '{"0":"Si el jugador no logra cumplir con los requisitos de apuesta dentro del período establecido, el bono y todas las ganancias obtenidas con él serán anulados."}',
             'value_fr' => '{"0":"Si le joueur ne parvient pas à remplir les conditions de mise dans le délai imparti, le bonus et tous les gains obtenus grâce à celui-ci seront annulés."}',
             'value_pt' => '{"0":"Se o jogador não cumprir os requisitos de apostas dentro do prazo estipulado, o bônus e todos os ganhos obtidos com ele serão cancelados."}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 37
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used in the mobile app?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos en la aplicación móvil?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus dans l’application mobile ?"}',
             'value_pt' => '{"0":"É possível usar os bônus no aplicativo móvel?"}',
             'order' => 37
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '20bet',
             'order' => 38
            ],
            ['key' => '20bet',
             'bookmaker_id' => 12,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all bonuses and promotions are available in the 20BET mobile app for Android and in the web version for iOS."}',
             'value_es' => '{"0":"Sí, todos los bonos y promociones están disponibles en la aplicación móvil de 20BET para Android y en la versión web para iOS."}',
             'value_fr' => '{"0":"Oui, tous les bonus et promotions sont disponibles dans l’application mobile 20BET pour Android et dans la version web pour iOS."}',
             'value_pt' => '{"0":"Sim, todos os bônus e promoções estão disponíveis no aplicativo móvel da 20BET para Android e na versão web para iOS."}',
             'order' => 38
            ]
        );
    }
}
