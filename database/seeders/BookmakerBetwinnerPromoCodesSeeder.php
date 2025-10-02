<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmakerBetwinnerPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 1
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner is an international betting company that offers its customers not only a wide selection of sporting events and casino games, but also a large number of bonuses and promotions. New players can take advantage of welcome bonuses that can be activated with the promo code :promocode during registration, while regular users benefit from a range of ongoing promotions."}',
             'value_es' => '{"0":"BetWinner es una casa de apuestas internacional que ofrece a sus clientes no solo una amplia selección de eventos deportivos y juegos de casino, sino también una gran cantidad de bonos y promociones. Los nuevos jugadores pueden acceder a bonos de bienvenida que se activan con el código promocional :promocode durante el registro, mientras que los usuarios habituales disfrutan de una serie de promociones regulares."}',
             'value_fr' => '{"0":"BetWinner est une société de paris internationale qui propose à ses clients non seulement un large choix d’événements sportifs et de jeux de casino, mais aussi un grand nombre de bonus et de promotions. Les nouveaux joueurs peuvent profiter de bonus de bienvenue activables avec le code promo :promocode lors de l’inscription, tandis que les utilisateurs réguliers bénéficient de plusieurs promotions permanentes."}',
             'value_pt' => '{"0":"A BetWinner é uma casa de apostas internacional que oferece aos seus clientes não apenas uma ampla seleção de eventos esportivos e jogos de cassino, mas também um grande número de bônus e promoções. Os novos jogadores podem aproveitar os bônus de boas-vindas, que podem ser ativados com o código promocional :promocode durante o registro, enquanto os usuários regulares contam com várias promoções contínuas."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 2
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"In this review, we will look at the procedure for activating a promo code during registration, explain the wagering requirements for bonus funds, and also highlight some promotional offers that may prove useful to you."}',
             'value_es' => '{"0":"En esta reseña, revisaremos el procedimiento para activar un código promocional durante el registro, explicaremos los requisitos de apuesta de los fondos de bonificación y también hablaremos de algunas ofertas promocionales que pueden resultarle de utilidad."}',
             'value_fr' => '{"0":"Dans cet article, nous examinerons la procédure d’activation d’un code promo lors de l’inscription, nous préciserons les conditions de mise des fonds bonus et nous présenterons également certaines offres promotionnelles qui pourront vous être utiles."}',
             'value_pt' => '{"0":"Nesta análise, veremos o procedimento para ativar um código promocional durante o registro, explicaremos os requisitos de apostas dos fundos de bônus e também apresentaremos algumas ofertas promocionais que podem ser úteis para você."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 3
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 4
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Registration on BetWinner is the first step towards receiving bonuses, and it is important to complete this stage correctly so as not to miss the chance to activate a promo code. There are several ways to create an account: by phone number, via email, in one click, or through social media. The most convenient and common method is email registration, as it allows you to immediately enter all required details and choose your account currency. At this stage, you can enter the promo code :promocode, which activates an increased bonus on your first deposit."}',
             'value_es' => '{"0":"Registrarse en BetWinner es el primer paso para obtener bonos, y es importante completar este proceso correctamente para no perder la oportunidad de activar un código promocional. Hay varias formas de crear una cuenta: por número de teléfono, por correo electrónico, en un solo clic o a través de redes sociales. El método más conveniente y común es el registro por correo electrónico, ya que permite ingresar de inmediato todos los datos necesarios y elegir la moneda de la cuenta. En esta etapa, puede ingresar el código promocional :promocode, que activa un bono aumentado en el primer depósito."}',
             'value_fr' => '{"0":"L’inscription sur BetWinner est la première étape pour obtenir des bonus, et il est important de bien la compléter afin de ne pas manquer l’opportunité d’activer un code promo. Il existe plusieurs options pour créer un compte : par numéro de téléphone, par e-mail, en un clic ou via les réseaux sociaux. La méthode la plus pratique et la plus courante est l’inscription par e-mail, car elle permet de saisir immédiatement toutes les informations nécessaires et de choisir la devise du compte. À ce stade, vous pouvez entrer le code promo :promocode, qui active un bonus augmenté sur le premier dépôt."}',
             'value_pt' => '{"0":"O registro na BetWinner é o primeiro passo para receber bônus, e é importante concluir esta etapa corretamente para não perder a chance de ativar um código promocional. Existem várias formas de criar uma conta: por número de telefone, por e-mail, em um clique ou por meio das redes sociais. O método mais conveniente e comum é o registro por e-mail, pois permite inserir imediatamente todos os dados necessários e escolher a moeda da conta. Nesta etapa, você pode inserir o código promocional :promocode, que ativa um bônus aumentado no primeiro depósito."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 5
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Don’t forget to indicate where you want to use the bonus funds. If you choose the sports betting bonus, when depositing from $1 to $100, you will receive an additional +100%. If you choose the casino bonus, when depositing from $10 to $300, you will receive an additional +100% and 30 free spins."}',
             'value_es' => '{"0":"No olvide indicar dónde desea usar los fondos de bonificación. Si elige el bono de apuestas deportivas, al depositar entre $1 y $100, recibirá un +100% adicional. Si elige el bono de casino, al depositar entre $10 y $300, recibirá un +100% adicional y 30 giros gratis."}',
             'value_fr' => '{"0":"N’oubliez pas de préciser où vous souhaitez utiliser vos fonds bonus. Si vous choisissez le bonus pour les paris sportifs, en déposant entre 1 $ et 100 $, vous recevrez +100 % supplémentaires. Si vous choisissez le bonus pour le casino, en déposant entre 10 $ et 300 $, vous recevrez +100 % supplémentaires ainsi que 30 tours gratuits."}',
             'value_pt' => '{"0":"Não se esqueça de indicar onde pretende usar os fundos de bônus. Se escolher o bônus para apostas esportivas, ao depositar de US$ 1 a US$ 100, receberá +100% adicionais. Se escolher o bônus para cassino, ao depositar de US$ 10 a US$ 300, receberá +100% adicionais e 30 rodadas grátis."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 6
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 7
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"You should take into account the wagering requirements, as only after meeting these conditions will you be able to withdraw the bonus funds."}',
             'value_es' => '{"0":"Debe tener en cuenta los requisitos de apuesta, ya que solo después de cumplir estas condiciones podrá retirar los fondos de bonificación."}',
             'value_fr' => '{"0":"Vous devez prendre en compte les conditions de mise, car ce n’est qu’après leur respect que vous pourrez retirer les fonds de bonus."}',
             'value_pt' => '{"0":"É necessário considerar os requisitos de aposta, pois somente após cumpri-los será possível retirar os fundos de bônus."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 8
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The sports betting bonus must be wagered 5 times with accumulator bets. Each accumulator must include at least 3 events. A minimum of 3 events in each accumulator must have odds of no less than 1.40."}',
             'value_es' => '{"0":"El bono de apuestas deportivas debe apostarse 5 veces en apuestas combinadas. Cada combinada debe incluir al menos 3 eventos. Un mínimo de 3 eventos en cada combinada debe tener cuotas no inferiores a 1.40."}',
             'value_fr' => '{"0":"Le bonus de paris sportifs doit être misé 5 fois sur des paris combinés. Chaque combiné doit inclure au moins 3 événements. Au minimum 3 événements dans chaque combiné doivent avoir une cote d’au moins 1,40."}',
             'value_pt' => '{"0":"O bônus de apostas esportivas deve ser apostado 5 vezes em apostas acumuladas. Cada acumulada deve incluir pelo menos 3 eventos. Um mínimo de 3 eventos em cada acumulada deve ter odds de pelo menos 1.40."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 9
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Casino bonuses are subject to a x35 wagering requirement within 7 days after activation. The maximum bet allowed while wagering the bonus is $5."}',
             'value_es' => '{"0":"Los bonos de casino están sujetos a un requisito de apuesta de x35 dentro de los 7 días posteriores a la activación. La apuesta máxima permitida durante el rollover del bono es de $5."}',
             'value_fr' => '{"0":"Les bonus de casino sont soumis à une exigence de mise de x35 dans les 7 jours suivant l’activation. La mise maximale autorisée lors du wagering du bonus est de 5 $."}',
             'value_pt' => '{"0":"Os bônus de cassino estão sujeitos a um requisito de aposta de x35 dentro de 7 dias após a ativação. A aposta máxima permitida durante o rollover do bônus é de US$5."}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 10
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 11
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"BetWinner has taken care not only of new players but also of those who have been using the platform for a long time. Registered clients have access to weekly and special promotions that allow them to receive additional bonuses when making a deposit or participating in sporting events."}',
             'value_es' => '{"0":"BetWinner se ha preocupado no solo por los nuevos jugadores, sino también por aquellos que llevan tiempo utilizando la plataforma. Los clientes registrados tienen acceso a promociones semanales y especiales que les permiten recibir bonos adicionales al realizar un depósito o al participar en eventos deportivos."}',
             'value_fr' => '{"0":"BetWinner a pensé non seulement aux nouveaux joueurs mais aussi à ceux qui utilisent la plateforme depuis longtemps. Les clients enregistrés ont accès à des promotions hebdomadaires et spéciales qui leur permettent d’obtenir des bonus supplémentaires lors d’un dépôt ou de leur participation à des événements sportifs."}',
             'value_pt' => '{"0":"A BetWinner pensou não apenas nos novos jogadores, mas também naqueles que já utilizam a plataforma há bastante tempo. Os clientes registrados têm acesso a promoções semanais e especiais que permitem receber bônus adicionais ao fazer um depósito ou ao participar de eventos esportivos."}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 12
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For example, there is a regular promotion where, if you deposit on Thursday, you will receive an additional +100% bonus on your deposit, as well as special offers for major tournaments such as World Championships or European Cups. In addition, users can take part in the loyalty program and accumulate points for their activity, which can later be exchanged for free bets or casino bonus funds."}',
             'value_es' => '{"0":"Por ejemplo, existe una promoción regular en la que, si deposita los jueves, recibirá un bono adicional del +100% sobre su depósito, además de ofertas especiales para torneos importantes como campeonatos mundiales o copas europeas. Además, los usuarios pueden participar en el programa de fidelidad y acumular puntos por su actividad, que posteriormente pueden canjear por apuestas gratuitas o fondos de bonificación para el casino."}',
             'value_fr' => '{"0":"Par exemple, une promotion régulière propose un bonus supplémentaire de +100% sur le dépôt effectué le jeudi, ainsi que des offres spéciales pour les grands tournois tels que les championnats du monde ou les coupes européennes. De plus, les utilisateurs peuvent participer au programme de fidélité et accumuler des points grâce à leur activité, qui peuvent ensuite être échangés contre des paris gratuits ou des fonds bonus pour le casino."}',
             'value_pt' => '{"0":"Por exemplo, há uma promoção regular em que, ao depositar às quintas-feiras, você recebe um bônus adicional de +100% sobre o valor depositado, além de ofertas especiais para grandes torneios como campeonatos mundiais ou copas europeias. Além disso, os usuários podem participar do programa de fidelidade e acumular pontos pela sua atividade, que podem ser trocados posteriormente por apostas grátis ou fundos de bônus para o cassino."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 13
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 14
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Currently, BetWinner does not offer traditional no deposit bonuses. However, sometimes during major tournaments, such promotions may appear. Therefore, we recommend keeping an eye on the PROMO page for updates."}',
             'value_es' => '{"0":"Actualmente, BetWinner no ofrece bonos clásicos sin depósito. Sin embargo, en ocasiones, durante los grandes torneos, pueden aparecer este tipo de promociones. Por ello, recomendamos estar atentos a la página PROMO para las novedades."}',
             'value_fr' => '{"0":"Actuellement, BetWinner ne propose pas de bonus classiques sans dépôt. Cependant, il arrive que de telles promotions soient disponibles lors des grands tournois. Nous vous conseillons donc de surveiller la page PROMO pour les mises à jour."}',
             'value_pt' => '{"0":"Atualmente, a BetWinner não oferece bônus clássicos sem depósito. No entanto, às vezes, durante grandes torneios, essas promoções podem aparecer. Por isso, recomendamos acompanhar a página PROMO para ficar por dentro das novidades."}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 15
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Big Match"}',
                'value_es' => '{"0":"El Gran Partido"}',
                'value_fr' => '{"0":"Grand match"}',
                'value_pt' => '{"0":"Grande Jogo"}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 16
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"The Big Match promotion is designed especially for fans of top football events. Place bets on BetWinner on the events listed on the bonus offer page, and get 100% cashback in case of a loss up to $10."}',
             'value_es' => '{"0":"La promoción Big Match está diseñada especialmente para los aficionados a los grandes eventos de fútbol. Realiza apuestas en BetWinner en los eventos que aparecen en la página de la oferta de bonificación y recibe un reembolso del 100% en caso de pérdida hasta $10."}',
             'value_fr' => '{"0":"La promotion Big Match a été créée spécialement pour les amateurs des grands événements de football. Pariez sur BetWinner sur les événements présentés sur la page de l’offre bonus et bénéficiez d’un remboursement de 100 % en cas de perte, jusqu’à 10 $."}',
             'value_pt' => '{"0":"A promoção Big Match foi criada especialmente para os fãs dos grandes eventos de futebol. Faça apostas na BetWinner nos eventos listados na página da oferta de bônus e receba 100% de reembolso em caso de perda até $10."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 17
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"To participate in the promotion, place a correct score bet starting from $5 on the events featured on the bonus offer page. If your bet loses, within 24 hours a promo code bonus will be automatically credited."}',
             'value_es' => '{"0":"Para participar en la promoción, haz una apuesta al marcador exacto a partir de $5 en los eventos que figuran en la página de la oferta de bonificación. En caso de perder, en un plazo de 24 horas se te acreditará automáticamente un bono en forma de código promocional."}',
             'value_fr' => '{"0":"Pour participer à la promotion, placez un pari sur le score exact à partir de 5 $ sur les événements indiqués sur la page de l’offre bonus. En cas de perte, un bonus sous forme de code promotionnel sera automatiquement crédité dans les 24 heures."}',
             'value_pt' => '{"0":"Para participar da promoção, faça uma aposta no placar exato a partir de $5 nos eventos destacados na página da oferta de bônus. Em caso de perda, em até 24 horas um bônus em forma de código promocional será automaticamente creditado."}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 18
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 19
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"Nil-Nil Draw"}',
                'value_es' => '{"0":"Empate a cero"}',
                'value_fr' => '{"0":"Match nul 0-0"}',
                'value_pt' => '{"0":"Empate a zero"}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 20
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This promotion is aimed at those who bet on football. If your first bet on a match loses, provided that the first half ended in a goalless draw, you will receive a promo code bonus equal to the lost stake, up to $23. It acts as a kind of insurance against the most unpredictable outcome in football, which often ruins players’ predictions."}',
             'value_es' => '{"0":"Esta promoción está dirigida a quienes apuestan al fútbol. Si tu primera apuesta en un partido resulta perdedora, siempre que la primera parte termine en empate sin goles, recibirás un bono en forma de código promocional equivalente al importe perdido, hasta un máximo de $23. Es una especie de seguro frente al resultado más impredecible del fútbol, que a menudo arruina los pronósticos de los jugadores."}',
             'value_fr' => '{"0":"Cette promotion s’adresse à ceux qui parient sur le football. Si votre premier pari sur un match est perdant, à condition que la première mi-temps se termine par un match nul sans but, vous recevrez un bonus sous forme de code promotionnel équivalent au montant de la mise perdue, jusqu’à 23 $. C’est une sorte d’assurance contre l’un des résultats les plus imprévisibles du football, qui gâche souvent les pronostics des joueurs."}',
             'value_pt' => '{"0":"Esta promoção é destinada a quem aposta em futebol. Se a sua primeira aposta em uma partida for perdida, desde que o primeiro tempo termine em empate sem gols, você receberá um bônus em forma de código promocional equivalente ao valor da aposta perdida, até $23. É uma espécie de seguro contra o resultado mais imprevisível do futebol, que muitas vezes estraga as previsões dos jogadores."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 21
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"All users who place single bets on full-time results can take part in this promotion. The main advantage of the Nil-Nil Draw is that even if your prediction fails, you won’t be left at a total loss."}',
             'value_es' => '{"0":"Todos los usuarios que realicen apuestas simples al resultado final pueden participar en esta promoción. La principal ventaja de Nil-Nil Draw es que, incluso si tu pronóstico falla, no quedarás completamente en negativo."}',
             'value_fr' => '{"0":"Tous les utilisateurs qui placent des paris simples sur le résultat final peuvent participer à cette promotion. L’avantage principal de l’offre Nil-Nil Draw est que, même en cas de mauvais pronostic, vous ne resterez pas complètement perdant."}',
             'value_pt' => '{"0":"Todos os usuários que fizerem apostas simples no resultado do tempo regulamentar podem participar desta promoção. A principal vantagem do Nil-Nil Draw é que, mesmo que sua previsão falhe, você não ficará totalmente no prejuízo."}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 22
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
                'value_en' => '{"0":"img-4.webp"}',
                'value_es' => '{"0":"img-4.webp"}',
                'value_fr' => '{"0":"img-4.webp"}',
                'value_pt' => '{"0":"img-4.webp"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 23
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
             'value_en' => '{"0":"100% Deposit Bonus every Thursday"}',
             'value_es' => '{"0":"Bono de Depósito del 100% todos los jueves"}',
             'value_fr' => '{"0":"Bonus de Dépôt de 100 % chaque jeudi"}',
             'value_pt' => '{"0":"Bónus de Depósito de 100% todas as quintas-feiras"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 24
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Every Thursday, BetWinner runs a promotion that allows players to receive a 100% deposit bonus. To participate, you need to make a deposit between $10 and $100."}',
             'value_es' => '{"0":"Cada jueves, BetWinner realiza una promoción que permite a los jugadores recibir un bono del 100% en el depósito. Para participar, debes realizar un depósito de entre $10 y $100."}',
             'value_fr' => '{"0":"Chaque jeudi, BetWinner organise une promotion qui permet aux joueurs de recevoir un bonus de dépôt de 100 %. Pour participer, vous devez effectuer un dépôt compris entre 10 $ et 100 $."}',
             'value_pt' => '{"0":"Todas as quintas-feiras, a BetWinner realiza uma promoção que permite aos jogadores receber um bônus de 100% no depósito. Para participar, é necessário fazer um depósito entre $10 e $100."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 25
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"This promotion comes with wagering requirements. To clear the bonus, you must wager the bonus amount 3 times within 24 hours of receiving it. Each accumulator bet must include at least 3 events, and the odds of any 3 events in the accumulator must be at least 1.40."}',
             'value_es' => '{"0":"Esta promoción tiene condiciones de apuesta. Para liberar el bono, debes apostar el importe del bono 3 veces en un plazo de 24 horas desde su acreditación. Cada apuesta combinada debe incluir al menos 3 eventos, y las cuotas de 3 de los eventos de la combinada deben ser como mínimo de 1.40."}',
             'value_fr' => '{"0":"Cette promotion est soumise à des conditions de mise. Pour débloquer le bonus, vous devez miser le montant du bonus 3 fois dans les 24 heures suivant son attribution. Chaque pari combiné doit inclure au moins 3 événements, et les cotes d’au moins 3 événements dans le combiné doivent être de 1.40 ou plus."}',
             'value_pt' => '{"0":"Esta promoção tem requisitos de aposta. Para liberar o bônus, é preciso apostar o valor do bônus 3 vezes dentro de 24 horas após o crédito. Cada aposta acumulada deve incluir pelo menos 3 eventos, e as odds de quaisquer 3 eventos do acumulador devem ser de no mínimo 1.40."}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 26
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'img',
             'value_en' => '{"0":"img-2.webp"}',
             'value_es' => '{"0":"img-2.webp"}',
             'value_fr' => '{"0":"img-2.webp"}',
             'value_pt' => '{"0":"img-2.webp"}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 27
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h2',
                'value_en' => '{"0":"BetWinner FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de BetWinner"}',
                'value_fr' => '{"0":"FAQ de BetWinner"}',
                'value_pt' => '{"0":"Perguntas frequentes do BetWinner"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 28
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can I choose a casino bonus instead of a sports betting bonus?"}',
             'value_es' => '{"0":"¿Se puede elegir un bono para casino en lugar de un bono para apuestas deportivas?"}',
             'value_fr' => '{"0":"Peut-on choisir un bonus de casino au lieu d’un bonus de paris sportifs ?"}',
             'value_pt' => '{"0":"É possível escolher um bônus de cassino em vez de um bônus de apostas esportivas?"}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 29
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, during registration you can choose which bonus to activate: either for sports betting or for casino games."}',
             'value_es' => '{"0":"Sí, durante el registro es posible elegir qué bono activar: para apuestas deportivas o para juegos de casino."}',
             'value_fr' => '{"0":"Oui, lors de l’inscription, il est possible de choisir quel bonus activer : pour les paris sportifs ou pour les jeux de casino."}',
             'value_pt' => '{"0":"Sim, durante o registro é possível escolher qual bônus ativar: para apostas esportivas ou para jogos de cassino."}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 30
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"How many times does the bonus need to be wagered to withdraw?"}',
             'value_es' => '{"0":"¿Cuántas veces hay que apostar el bono para poder retirarlo?"}',
             'value_fr' => '{"0":"Combien de fois faut-il miser le bonus pour pouvoir le retirer ?"}',
             'value_pt' => '{"0":"Quantas vezes é necessário apostar o bônus para poder sacá-lo?"}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 31
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"For sports betting, the bonus amount must be wagered five times in accumulator bets with three events, each having odds of at least 1.40. For casino, the wagering requirement is x35."}',
             'value_es' => '{"0":"En las apuestas deportivas, el importe del bono debe apostarse cinco veces en combinadas con tres eventos, cada uno con una cuota mínima de 1.40. En el casino, el requisito de apuesta es de x35."}',
             'value_fr' => '{"0":"Pour les paris sportifs, le montant du bonus doit être misé cinq fois sous forme de paris combinés comprenant trois événements, chacun avec une cote minimale de 1,40. Pour le casino, le wagering est de x35."}',
             'value_pt' => '{"0":"Nas apostas desportivas, o valor do bônus deve ser apostado cinco vezes em apostas acumuladas com três eventos, cada um com uma odd mínima de 1.40. No cassino, o requisito de apostas é x35."}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 32
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Do BetWinner promotions work in the mobile app?"}',
             'value_es' => '{"0":"¿Las promociones de BetWinner funcionan en la aplicación móvil?"}',
             'value_fr' => '{"0":"Les promotions BetWinner fonctionnent-elles dans l’application mobile ?"}',
             'value_pt' => '{"0":"As promoções da BetWinner funcionam no aplicativo móvel?"}',
             'order' => 32
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 33
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, all bonuses and promotional offers are available both in the mobile apps for Android and iOS and in the mobile version of the website."}',
             'value_es' => '{"0":"Sí, todos los bonos y ofertas promocionales están disponibles tanto en las aplicaciones móviles para Android y iOS como en la versión móvil del sitio web."}',
             'value_fr' => '{"0":"Oui, tous les bonus et offres promotionnelles sont disponibles à la fois dans les applications mobiles pour Android et iOS et dans la version mobile du site."}',
             'value_pt' => '{"0":"Sim, todos os bônus e ofertas promocionais estão disponíveis tanto nos aplicativos móveis para Android e iOS quanto na versão móvel do site."}',
             'order' => 33
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 34
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can I receive multiple bonuses at the same time?"}',
             'value_es' => '{"0":"¿Se pueden recibir varios bonos al mismo tiempo?"}',
             'value_fr' => '{"0":"Peut-on recevoir plusieurs bonus en même temps ?"}',
             'value_pt' => '{"0":"É possível receber vários bônus ao mesmo tempo?"}',
             'order' => 34
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 35
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Only one bonus can be active at a time. After fulfilling the wagering requirements or when a promotion ends, you can activate a new offer."}',
             'value_es' => '{"0":"Solo puede estar activo un bono a la vez. Tras cumplir con los requisitos de apuesta o finalizar la promoción, se puede activar una nueva oferta."}',
             'value_fr' => '{"0":"Un seul bonus peut être actif à la fois. Après avoir rempli les conditions de mise ou à la fin d’une promotion, vous pouvez activer une nouvelle offre."}',
             'value_pt' => '{"0":"Apenas um bônus pode estar ativo de cada vez. Após cumprir os requisitos de aposta ou quando a promoção terminar, você pode ativar uma nova oferta."}',
             'order' => 35
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 36
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'h3',
             'value_en' => '{"0":"Can cryptocurrency be used to activate bonuses?"}',
             'value_es' => '{"0":"¿Se puede usar criptomoneda para activar los bonos?"}',
             'value_fr' => '{"0":"Peut-on utiliser la cryptomonnaie pour activer les bonus ?"}',
             'value_pt' => '{"0":"É possível usar criptomoeda para ativar os bônus?"}',
             'order' => 36
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => 'betwinner',
             'order' => 37
            ],
            ['key' => 'betwinner',
             'bookmaker_id' => 3,
             'component' => 'p',
             'value_en' => '{"0":"Yes, deposits made with cryptocurrency also qualify for bonus programs."}',
             'value_es' => '{"0":"Sí, los depósitos en criptomonedas también participan en los programas de bonificación."}',
             'value_fr' => '{"0":"Oui, les dépôts en cryptomonnaie participent également aux programmes de bonus."}',
             'value_pt' => '{"0":"Sim, depósitos em criptomoeda também participam dos programas de bônus."}',
             'order' => 37
            ]
        );
    }
}
