<?php

namespace Database\Seeders;

use App\Models\PromoCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bookmaker1xBitPromoCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 1
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit offers a comprehensive bonus system that includes welcome bonuses, promotional offers, and a loyalty program. The unique feature is that all rewards are credited in cryptocurrency. Despite the platform’s focus, players can receive generous bonuses both for sports betting and casino games."}',
             'value_es' => '{"0":"1xBit ofrece un sistema de bonificaciones completo que incluye bonos de bienvenida, promociones especiales y un programa de fidelidad. La característica única es que todas las recompensas se acreditan en criptomonedas. A pesar del enfoque de la plataforma, los jugadores pueden recibir bonificaciones generosas tanto para apuestas deportivas como para juegos de casino."}',
             'value_fr' => '{"0":"1xBit propose un système de bonus complet comprenant des bonus de bienvenue, des offres promotionnelles et un programme de fidélité. La particularité de la plateforme réside dans le fait que toutes les récompenses sont versées en cryptomonnaie. Malgré cette spécificité, les joueurs peuvent obtenir des bonus généreux aussi bien pour les paris sportifs que pour les jeux de casino."}',
             'value_pt' => '{"0":"A 1xBit oferece um sistema de bônus completo que inclui bônus de boas-vindas, promoções especiais e um programa de fidelidade. O diferencial é que todas as recompensas são creditadas em criptomoedas. Apesar desse foco, os jogadores podem receber bônus generosos tanto para apostas esportivas quanto para jogos de cassino."}',
             'order' => 1
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 2
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The bonus program is designed for both new and regular users. In this review, we’ll highlight some of the promotions that help active players increase their winnings. We’ll also explain how new users can claim their welcome bonus during registration using the promo code :promocode."}',
             'value_es' => '{"0":"El programa de bonificaciones está diseñado tanto para nuevos usuarios como para los habituales. En esta reseña explicaremos algunas de las promociones que ayudan a los jugadores activos a aumentar sus ganancias. También te contaremos cómo los nuevos usuarios pueden obtener su bono de bienvenida al registrarse con el código promocional :promocode."}',
             'value_fr' => '{"0":"Le programme de bonus est conçu pour les nouveaux utilisateurs comme pour les habitués. Dans cet article, nous présenterons certaines promotions qui permettent aux joueurs actifs d’augmenter leurs gains. Nous expliquerons également comment les nouveaux utilisateurs peuvent obtenir leur bonus de bienvenue lors de l’inscription avec le code promo :promocode."}',
             'value_pt' => '{"0":"O programa de bônus é voltado tanto para novos usuários quanto para clientes regulares. Nesta análise, vamos apresentar algumas promoções que ajudam os jogadores ativos a aumentar seus ganhos. Também explicaremos como os novos usuários podem obter o bônus de boas-vindas ao se registrar com o código promocional :promocode."}',
             'order' => 2
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 3
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"How to use the promo code :promocode?"}',
                'value_es' => '{"0":"¿Cómo usar el código promocional :promocode?"}',
                'value_fr' => '{"0":"Comment utiliser le code promo :promocode ?"}',
                'value_pt' => '{"0":"Como usar o código promocional :promocode?"}',
             'order' => 3
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 4
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The registration process at 1xBit is very simple and takes only a few minutes. To create an account, you just need to click the «Registration» button on the homepage, then enter your email and create a password. You can also register using social networks or a crypto wallet."}',
             'value_es' => '{"0":"El proceso de registro en 1xBit es muy sencillo y solo tarda unos minutos. Para crear una cuenta, basta con hacer clic en el botón «Registro» en la página principal, luego ingresar tu correo electrónico y crear una contraseña. También puedes registrarte mediante redes sociales o una billetera de criptomonedas."}',
             'value_fr' => '{"0":"Le processus d’inscription sur 1xBit est très simple et ne prend que quelques minutes. Pour créer un compte, il suffit de cliquer sur le bouton « Inscription » sur la page d’accueil, puis de saisir votre adresse e-mail et de créer un mot de passe. Il est également possible de s’inscrire via les réseaux sociaux ou un portefeuille crypto."}',
             'value_pt' => '{"0":"O processo de registro na 1xBit é muito simples e leva apenas alguns minutos. Para criar uma conta, basta clicar no botão «Registro» na página inicial, inserir seu e-mail e criar uma senha. Também é possível se registrar usando redes sociais ou uma carteira de criptomoedas."}',
             'order' => 4
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 5
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"At the registration stage, you can enter the promo code :promocode, which activates the welcome bonus. To receive it, you need to make a deposit from 0.1 mBTC to 1 BTC. In this case, you will get +100% of your deposit amount credited to your bonus account and 70 free spins."}',
             'value_es' => '{"0":"Durante el registro puedes ingresar el código promocional :promocode, que activa el bono de bienvenida. Para recibirlo, debes realizar un depósito de entre 0.1 mBTC y 1 BTC. En este caso, recibirás un +100% del monto depositado en tu cuenta de bonificación y 70 giros gratis"}',
             'value_fr' => '{"0":"Au moment de l’inscription, vous pouvez entrer le code promo :promocode, qui active le bonus de bienvenue. Pour l’obtenir, il faut effectuer un dépôt compris entre 0,1 mBTC et 1 BTC. Dans ce cas, vous recevrez +100 % du montant du dépôt sur votre compte bonus ainsi que 70 tours gratuits."}',
             'value_pt' => '{"0":"Durante o registro, você pode inserir o código promocional :promocode, que ativa o bônus de boas-vindas. Para recebê-lo, é necessário fazer um depósito entre 0.1 mBTC e 1 BTC. Nesse caso, você receberá +100% do valor depositado em sua conta de bônus e 70 giros grátis."}',
             'order' => 5
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 6
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-1.webp"}',
                'value_es' => '{"0":"img-1.webp"}',
                'value_fr' => '{"0":"img-1.webp"}',
                'value_pt' => '{"0":"img-1.webp"}',
             'order' => 6
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 7
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To be able to withdraw bonus funds, you must first meet the wagering requirements."}',
             'value_es' => '{"0":"Para poder retirar los fondos del bono, primero debes cumplir con los requisitos de apuesta."}',
             'value_fr' => '{"0":"Pour pouvoir retirer les fonds du bonus, il faut d\'abord remplir les conditions de mise."}',
             'value_pt' => '{"0":"Para poder sacar os fundos do bônus, é necessário primeiro cumprir os requisitos de apostas."}',
             'order' => 7
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 8
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"All welcome bonuses are subject to a 40x wagering requirement based on the deposit amount within 30 days after making the deposit. After this period, the bonus will be canceled. Free spins are available for 20 days from the moment they are credited. Free spins are subject to a 30x wagering requirement within 10 days after use."}',
             'value_es' => '{"0":"Todos los bonos de bienvenida están sujetos a un requisito de apuesta de 40x sobre el monto del depósito dentro de los 30 días posteriores a realizarlo. Una vez pasado este plazo, el bono será cancelado. Los giros gratis están disponibles durante 20 días desde el momento en que se acreditan. Los giros gratis están sujetos a un requisito de apuesta de 30x dentro de los 10 días posteriores a su uso."}',
             'value_fr' => '{"0":"Tous les bonus de bienvenue sont soumis à une exigence de mise de 40x du montant du dépôt dans les 30 jours suivant celui-ci. Après ce délai, le bonus sera annulé. Les tours gratuits sont disponibles pendant 20 jours à partir du moment où ils sont crédités. Les tours gratuits sont soumis à une exigence de mise de 30x dans les 10 jours suivant leur utilisation."}',
             'value_pt' => '{"0":"Todos os bônus de boas-vindas estão sujeitos a um requisito de apostas de 40x sobre o valor do depósito dentro de 30 dias após o depósito. Após esse período, o bônus será cancelado. Os giros grátis estão disponíveis por 20 dias a partir do momento em que são creditados. Os giros grátis estão sujeitos a um requisito de apostas de 30x dentro de 10 dias após o uso."}',
             'order' => 8
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 9
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Are there bonuses for clients who are already registered?"}',
                'value_es' => '{"0":"¿Existen bonos para los clientes que ya están registrados?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus pour les clients déjà inscrits ?"}',
                'value_pt' => '{"0":"Existem bônus para os clientes que já estão registrados?"}',
             'order' => 9
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 10
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"1xBit supports regular users and offers them a range of bonuses after registration. In particular, active players can receive cashback. Additionally, by making a deposit on Saturday, users can get 80 extra free spins for casino games. For sports betting, players can receive enhanced odds on key events."}',
             'value_es' => '{"0":"1xBit apoya a los usuarios habituales y les ofrece una serie de bonificaciones después del registro. En particular, los jugadores activos pueden recibir reembolsos de dinero. Además, al realizar un depósito el sábado, los usuarios pueden obtener 80 giros gratis adicionales para jugar en el casino. Para las apuestas deportivas, los jugadores pueden recibir cuotas mejoradas en los eventos principales."}',
             'value_fr' => '{"0":"1xBit soutient ses utilisateurs réguliers et leur propose une gamme de bonus après l’inscription. En particulier, les joueurs actifs peuvent recevoir un cashback. De plus, en effectuant un dépôt le samedi, les utilisateurs peuvent obtenir 80 tours gratuits supplémentaires pour jouer au casino. Pour les paris sportifs, il est possible de bénéficier de cotes améliorées sur les événements clés."}',
             'value_pt' => '{"0":"A 1xBit apoia os utilizadores regulares e oferece-lhes uma variedade de bónus após o registo. Em particular, os jogadores ativos podem receber cashback. Além disso, ao fazer um depósito no sábado, os utilizadores podem receber 80 rodadas grátis adicionais para jogar no casino. Para as apostas desportivas, os jogadores podem obter odds aumentadas em eventos importantes."}',
             'order' => 10
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 11
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Are there no deposit bonuses?"}',
                'value_es' => '{"0":"¿Existen bonos sin depósito?"}',
                'value_fr' => '{"0":"Y a-t-il des bonus sans dépôt ?"}',
                'value_pt' => '{"0":"Existem bônus sem depósito?"}',
             'order' => 11
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 12
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No deposit bonuses on 1xBit are rare, but sometimes they are available through special campaigns or partner programs. Such bonuses may come in the form of a small amount in cryptocurrency, free spins, or free bets for sports wagering."}',
             'value_es' => '{"0":"Los bonos sin depósito en 1xBit son poco frecuentes, pero a veces están disponibles a través de campañas especiales o programas de socios. Estos bonos pueden presentarse en forma de una pequeña cantidad en criptomoneda, giros gratis o apuestas gratis para deportes."}',
             'value_fr' => '{"0":"Les bonus sans dépôt sur 1xBit sont rares, mais ils sont parfois disponibles dans le cadre de campagnes spéciales ou de programmes partenaires. Ces bonus peuvent prendre la forme d’un petit montant en cryptomonnaie, de tours gratuits ou de paris gratuits pour les paris sportifs."}',
             'value_pt' => '{"0":"Os bónus sem depósito na 1xBit são raros, mas por vezes estão disponíveis através de campanhas especiais ou programas de parceria. Estes bónus podem ser oferecidos sob a forma de um pequeno montante em criptomoeda, rodadas grátis ou apostas grátis para desporto."}',
             'order' => 12
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 13
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Therefore, we recommend keeping an eye on updates on the official website or in Telegram channels, where current promo codes for no deposit bonuses are often published."}',
             'value_es' => '{"0":"Por lo tanto, recomendamos estar atento a las actualizaciones en el sitio web oficial o en los canales de Telegram, donde a menudo se publican los códigos promocionales más recientes para bonos sin depósito."}',
             'value_fr' => '{"0":"Nous recommandons donc de suivre les mises à jour sur le site officiel ou sur les canaux Telegram, où les codes promotionnels pour les bonus sans dépôt sont souvent publiés."}',
             'value_pt' => '{"0":"Por isso, recomendamos acompanhar as atualizações no site oficial ou nos canais do Telegram, onde frequentemente são publicados os códigos promocionais mais recentes para bónus sem depósito."}',
             'order' => 13
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 14
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"Accumulator of the Day"}',
                'value_es' => '{"0":"Combinada del día"}',
                'value_fr' => '{"0":"Pari Combiné du Jour"}',
                'value_pt' => '{"0":"Acumulador do Dia"}',
             'order' => 14
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 15
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This daily promotion is ideal for those who prefer combination bets. Every day, several ready-made accumulators appear on the site, compiled from the most popular sporting events. You can choose one of them, place a bet, and receive a 10% increased odds boost. If the accumulator wins, you’ll get higher profits without any additional conditions."}',
             'value_es' => '{"0":"Esta promoción diaria es ideal para quienes prefieren las apuestas combinadas. Cada día aparecen en el sitio varios acumuladores ya preparados, formados por los eventos deportivos más populares. Puedes elegir uno de ellos, realizar una apuesta y obtener una mejora del 10% en las cuotas. Si el acumulador gana, recibirás mayores beneficios sin condiciones adicionales."}',
             'value_fr' => '{"0":"Cette promotion quotidienne convient parfaitement à ceux qui préfèrent les paris combinés. Chaque jour, plusieurs accumulateurs prédéfinis apparaissent sur le site, composés des événements sportifs les plus populaires. Vous pouvez en choisir un, placer un pari et bénéficier d’une augmentation de cote de 10 %. Si l’accumulateur gagne, vous obtiendrez un profit plus élevé sans conditions supplémentaires."}',
             'value_pt' => '{"0":"Esta promoção diária é ideal para quem prefere apostas combinadas. Todos os dias, surgem no site vários acumuladores prontos, formados pelos eventos desportivos mais populares. Pode escolher um deles, fazer a aposta e receber um aumento de 10% nas odds. Se o acumulador ganhar, obterá um lucro maior sem quaisquer condições adicionais."}',
             'order' => 15
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 16
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This is one of the most convenient ways to increase your potential winnings without risking your own funds. In addition, you can modify the accumulator’s composition before confirming your bet."}',
             'value_es' => '{"0":"Es una de las formas más convenientes de aumentar tus posibles ganancias sin arriesgar tu propio dinero. Además, puedes modificar la composición del acumulador antes de confirmar la apuesta."}',
             'value_fr' => '{"0":"C’est l’un des moyens les plus pratiques d’augmenter vos gains potentiels sans risquer vos propres fonds. De plus, vous pouvez modifier la composition de l’accumulateur avant de confirmer votre pari."}',
             'value_pt' => '{"0":"É uma das formas mais convenientes de aumentar os ganhos potenciais sem arriscar o seu próprio dinheiro. Além disso, é possível alterar a composição do acumulador antes de confirmar a aposta."}',
             'order' => 16
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 17
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-3.webp"}',
                'value_es' => '{"0":"img-3.webp"}',
                'value_fr' => '{"0":"img-3.webp"}',
                'value_pt' => '{"0":"img-3.webp"}',
             'order' => 17
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 18
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"VIP Cashback"}',
                'value_es' => '{"0":"DEVOLUCIÓN VIP"}',
                'value_fr' => '{"0":"Cashback VIP"}',
                'value_pt' => '{"0":"Cashback VIP"}',
             'order' => 18
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 19
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"This is a loyalty program for active 1xBit players that returns a portion of lost funds. Place bets on 1xBit casino games that participate in the loyalty program. The more bets you place, the higher your level in the program."}',
             'value_es' => '{"0":"Este es un programa de fidelidad para los jugadores activos de 1xBit que devuelve una parte del dinero perdido. Realiza apuestas en los juegos de casino de 1xBit que participan en el programa de fidelidad. Cuantas más apuestas hagas, mayor será tu nivel en el programa."}',
             'value_fr' => '{"0":"Il s’agit d’un programme de fidélité pour les joueurs actifs de 1xBit qui rembourse une partie des pertes. Placez des paris sur les jeux de casino 1xBit participant au programme de fidélité. Plus vous pariez, plus votre niveau dans le programme augmente."}',
             'value_pt' => '{"0":"Este é um programa de fidelidade para jogadores ativos da 1xBit que devolve parte dos fundos perdidos. Faça apostas nos jogos de casino da 1xBit que participam do programa de fidelidade. Quanto mais apostas fizer, maior será o seu nível no programa."}',
             'order' => 19
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 20
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"The higher the level, the greater the cashback. For example, if you are at the Bronze level and you lose 100 mBTC between your last two requests, you’ll receive 5 mBTC back as cashback. If your level is Sapphire, you’ll receive 10 mBTC back."}',
             'value_es' => '{"0":"Cuanto más alto sea el nivel, mayor será el reembolso. Por ejemplo, si estás en el nivel Bronce y pierdes 100 mBTC entre tus dos últimas solicitudes, recibirás 5 mBTC como cashback. Si tu nivel es Zafiro, recibirás 10 mBTC."}',
             'value_fr' => '{"0":"Plus le niveau est élevé, plus le cashback est important. Par exemple, si vous êtes au niveau Bronze et que vous perdez 100 mBTC entre vos deux dernières demandes, vous recevrez 5 mBTC en cashback. Si votre niveau est Saphir, vous recevrez 10 mBTC."}',
             'value_pt' => '{"0":"Quanto mais alto o nível, maior será o cashback. Por exemplo, se estiver no nível Bronze e perder 100 mBTC entre os dois últimos pedidos, receberá 5 mBTC em cashback. Se o seu nível for Safira, receberá 10 mBTC."}',
             'order' => 20
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 21
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'img',
                'value_en' => '{"0":"img-2.webp"}',
                'value_es' => '{"0":"img-2.webp"}',
                'value_fr' => '{"0":"img-2.webp"}',
                'value_pt' => '{"0":"img-2.webp"}',
             'order' => 21
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 22
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h2',
                'value_en' => '{"0":"1xBit FAQs"}',
                'value_es' => '{"0":"Preguntas frecuentes de 1xBit"}',
                'value_fr' => '{"0":"FAQ de 1xBit"}',
                'value_pt' => '{"0":"Perguntas frequentes do 1xBit"}',
             'order' => 22
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 23
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"How to get the welcome bonus on 1xBit?"}',
             'value_es' => '{"0":"¿Cómo obtener el bono de bienvenida en 1xBit?"}',
             'value_fr' => '{"0":"Comment obtenir le bonus de bienvenue sur 1xBit ?"}',
             'value_pt' => '{"0":"Como obter o bônus de boas-vindas na 1xBit?"}',
             'order' => 23
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 24
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"You need to enter a promo code during registration and make your first deposit in cryptocurrency."}',
             'value_es' => '{"0":"Debes introducir un código promocional durante el registro y realizar tu primer depósito en criptomoneda."}',
             'value_fr' => '{"0":"Vous devez saisir un code promotionnel lors de l’inscription et effectuer votre premier dépôt en cryptomonnaie."}',
             'value_pt' => '{"0":"É necessário inserir um código promocional durante o registro e fazer o primeiro depósito em criptomoeda."}',
             'order' => 24
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 25
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Can bonuses be used simultaneously for casino and sports betting?"}',
             'value_es' => '{"0":"¿Se pueden usar los bonos simultáneamente para el casino y las apuestas deportivas?"}',
             'value_fr' => '{"0":"Peut-on utiliser les bonus simultanément pour le casino et les paris sportifs ?"}',
             'value_pt' => '{"0":"É possível usar os bônus simultaneamente para cassino e apostas esportivas?"}',
             'order' => 25
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 26
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, you can use bonuses simultaneously for both casino games and sports betting."}',
             'value_es' => '{"0":"Sí, puedes usar los bonos tanto para el casino como para las apuestas deportivas al mismo tiempo."}',
             'value_fr' => '{"0":"Oui, vous pouvez utiliser les bonus à la fois pour le casino et pour les paris sportifs."}',
             'value_pt' => '{"0":"Sim, você pode usar os bônus ao mesmo tempo para jogos de cassino e apostas esportivas."}',
             'order' => 26
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 27
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"What deposit amount is required to receive the welcome bonus?"}',
             'value_es' => '{"0":"¿Cuál es el monto del depósito necesario para recibir el bono de bienvenida?"}',
             'value_fr' => '{"0":"Quel montant de dépôt est nécessaire pour recevoir le bonus de bienvenue ?"}',
             'value_pt' => '{"0":"Qual o valor do depósito necessário para receber o bônus de boas-vindas?"}',
             'order' => 27
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 28
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"To receive the welcome bonus, you need to deposit at least 0.1 mBTC."}',
             'value_es' => '{"0":"Para recibir el bono de bienvenida, debes depositar al menos 0,1 mBTC."}',
             'value_fr' => '{"0":"Pour recevoir le bonus de bienvenue, vous devez déposer au moins 0,1 mBTC."}',
             'value_pt' => '{"0":"Para receber o bônus de boas-vindas, é necessário depositar pelo menos 0,1 mBTC."}',
             'order' => 28
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 29
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Is verification required to receive bonuses?"}',
             'value_es' => '{"0":"¿Es necesario realizar la verificación para recibir los bonos?"}',
             'value_fr' => '{"0":"Faut-il passer une vérification pour recevoir les bonus ?"}',
             'value_pt' => '{"0":"É necessário passar por verificação para receber os bônus?"}',
             'order' => 29
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 30
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"No, 1xBit does not require identity verification."}',
             'value_es' => '{"0":"No, 1xBit no requiere verificación de identidad."}',
             'value_fr' => '{"0":"Non, 1xBit ne demande pas de vérification d\'identité."}',
             'value_pt' => '{"0":"Não, a 1xBit não exige verificação de identidade."}',
             'order' => 30
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 31
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'h3',
             'value_en' => '{"0":"Do bonuses work on the mobile version of the site?"}',
             'value_es' => '{"0":"¿Los bonos funcionan en la versión móvil del sitio?"}',
             'value_fr' => '{"0":"Les bonus sont-ils valables sur la version mobile du site ?"}',
             'value_pt' => '{"0":"Os bônus funcionam na versão móvel do site?"}',
             'order' => 31
            ]
        );
        PromoCode::query()->updateOrCreate(
            ['key' => '1xbit',
             'order' => 32
            ],
            ['key' => '1xbit',
             'bookmaker_id' => 15,
             'component' => 'p',
             'value_en' => '{"0":"Yes, bonuses can be used on the 1xBit mobile version and in the Android app."}',
             'value_es' => '{"0":"Sí, los bonos se pueden usar en la versión móvil de 1xBit y en la aplicación para Android."}',
             'value_fr' => '{"0":"Oui, les bonus peuvent être utilisés sur la version mobile de 1xBit et dans l\'application Android."}',
             'value_pt' => '{"0":"Sim, os bônus podem ser usados na versão móvel da 1xBit e no aplicativo para Android."}',
             'order' => 32
            ]
        );
    }
}
