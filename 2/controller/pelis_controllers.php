<?php

    require_once("models/pelis_model.php");

    class pelis_controllers{

        public static function MostrarPelis(){

            
            $pelis[] = new pelis_model(1, "THOR: LOVE AND THUNDER", "Thor: Love and Thunder retoma la acción tras los sucesos ocurridos en Vengadores: Endgame. El dios del trueno decide retirarse y dejar la vida de superhéroe atrás. Después de abandonar la Nueva Asgard y dejarla en manos de su querida amiga Valquiria, Thor se marcha junto a los Guardianes de la Galaxia en un viaje que le lleva a plantearse su vida y su propia existencia. Pero este momento no le podrá durar mucho, ya que rápidamente tendrá que volver a la acción para enfrentarse a Gorr, un villano que ha planeado asesinar a todos los dioses. Pero esta no será la única casuística a la que tendrá que hacer frente el dios del trueno, por si fuera poco, su ex Jane Foster, quien ahora es la portadora del Mjölnir, también entra en escena.", "3.0/5.0","img\peli1.jpg", "https://www.youtube.com/embed/tgB1wUcmbbw", "Cuarta entrega de Thor en solitario, la ¿29? del Universo Cinematográfico Marvel (se me lían las películas a estas alturas) y con la amenaza / promesa (en función de si te hace menos o más ilusión) de estrenar al menos una más este año -Black Panther: Wakanda Forever (2022)- y tres el año que viene: Ant-Man and the Wasp: Quantumania (2023), Guardianes de la Galaxia Vol. 3 (2023) y Capitana Marvel 2 (2023). De los Vengadores, por ahora, sin noticias, aunque la certeza de aunar en un nuevo grupo a todas las caras nuevas del UCM no parece muy probable. ¿Os imagináis un Vengadores 5 con Shang-Chi, Caballero Luna, Ms. Marvel, Hulka, Kate Bishop y algún que otro Eterno como condimento? Creerme: yo pagaría feliz mi entrada por beberme ese gazpacho superheroico." );

            
            $pelis[] = new pelis_model(2, "BLACK PHONE", "Un sádico asesino secuestra a Finney Shaw, un chico tímido e inteligente de 13 años, y le encierra en un sótano insonorizado donde de nada sirven sus gritos. Cuando un teléfono roto y sin conexión empieza a sonar, Finney descubre que a través de él puede oír las voces de las anteriores víctimas, las cuales están decididas a impedir que Finney acabe igual que ellas.", "4.5/5.0","img\peli2.jpg", "https://www.youtube.com/embed/XhcEnHDKHco", "Black Phone se convierte así en una película realmente deliciosa. Cualitativamente hablando, no estamos lejos de Sinister, aunque el terror en ésta no admita fisuras de ningún tipo. Aquí el juego es distinto, tanto, que incluso se permite algún deje cómico (ese conspiranoico vecino cocainómano) y el terror deja más de un agarre para que tanto protagonista como espectador respiren. Derrickson maneja la tensión con metrónomo, dosificando con inteligencia el suspense de la doble vía narrativa presente (aunque la del hermano se acabe por comer a la de la hermana) y acaba por dar forma, ya no sólo a un gran villano y futuro disfraz de Halloween / figura de Funko, sino a una gran película de terror que deberá estar en lo más alto del género del 2022." );


            $pelis[] = new pelis_model(3, "LIGHTYEAR", "La película cuenta los orígenes de Buzz Lightyear, el héroe que inspiró el juguete, y nos da a conocer la historia de este legendario Guardián Espacial narrada como una apasionante aventura intergaláctica. El mundo de Buzz siempre me ha fascinado, ha declarado el director Angus MacLane. En Toy Story se vislumbraba apenas la historia de este Guardián Espacial y siempre quise explorar ese mundo más a fondo. '¿Qué película vio Andy para desear tener un juguete de Buzz Lightyear?' Esta es la pregunta que formulé al presentar el proyecto de Lightyear y yo quería ver esa película. Y he tenido la suerte de hacerlo realidad.", "4.0/5.0","img\peli3.jpg", "https://www.youtube.com/embed/BwZs3H_UN3k", "  Se cumplen 27 años del estreno de Toy Story (1995). Recordemos: la primera película de dibujos animada únicamente con efectos digitales, así como el primer largometraje de la compañía Pixar que, posteriormente, sería adquirida por Disney en 2006. John Lasseter, director de la película y director histórico de Pixar, hace tiempo que ya está fuera de la foto -ya sabéis: política de cancelación del Siglo XXI-, y hoy en día el que figura como director creativo de la compañía es Pete Docter, ahí es nada, la mente pensante detrás de Monstruos S.A. (2001), Up (2009), Del revés (2015) y Soul (2020). Pero es que Docter también estaba detrás de Toy Story, dado que la idea original surge del trabajo en común entre Lasseter, Docter, Andrew Stanton (otro gigante de Pixar) y Joe Ranft (fallecido prematuramente en 2005 a la edad de 45 años). El hecho es que desde el lanzamiento de Disney+.");


            $pelis[] = new pelis_model(4, "JURASSIC WORLD: DOMINION", "Esta nueva entrega transcurre cuatro años después de la destrucción de Isla Nublar vista en Jurassic World: El reino caído. Ahora, los dinosaurios conviven con los seres humanos en todo el mundo. Este frágil equilibrio cambiará el futuro y decidirá, de una vez por todas, si las personas seguirán siendo los principales depredadores en un planeta que comparten con los animales más temibles de la creación. Owen Grady (Chris Pratt), el experto en rapaces, regresa en una nueva aventura junto a Claire Dearing (Bryce Dallas Howard), la guía del parque. Esta tercera entrega de la saga Jurassic World, basada en los libros de Michael Crichton, la produce Steven Spielberg (Ready Player One, Los archivos del Pentágono).", "2.5/5.0","img\peli4.jpg", "https://www.youtube.com/embed/fb5ELWi-ekk", "Ya en 1990, cuando Michael Crichton publicó su novela Jurassic Park, un jugoso relato de aventura 'sci-fi' situado en un parque de dinosaurios moderno que, a la vez, estaba plagado de las teorías del caos que el profesor Ian Malcolm iba contrastando y ratificando mientras los dinosaurios arrasaban con todo, había cierto aire de déjà vu. Al fin y al cabo, la idea de crear un parque temático revolucionario en lo científico donde las criaturas del mismo se revelaban asesinando a los despistados visitantes, Crichton, ya la había llevado a cabo en su segundo largometraje como director: Almas de metal (1973). Lo que entonces eran robots tematizados, ahora eran dinosaurios de la época jurásica: la ciencia-ficción ponía en solfa los problemas de la ciencia cuando se escapaba de las reglas éticas de la no-ficción; si juegas a ser Dios, igual viene un tyrannosaurus rex y te arranca la cabeza.Ste.");

            
            $pelis[] = new pelis_model(5, "TOP GUN: MAVERICK", "Después de más de treinta años de servicio, a Pete 'Maverick' Mitchell (Tom Cruise) su reputación le precede. Maverick fue uno de los mejores aviadores de la Armada, condecorado con medallas de combate y menciones, y responsable de hazañas legendarias. Claro que él no se esperaba volver a la academia de pilotos de combate Top Gun, donde le requieren como instructor de vuelo para formar a una nueva generación de jóvenes pilotos de combate, hombres y mujeres. Allí conocerá a Bradley 'Rooster' Bradshaw (Milles Teller), el hijo de Goose, su antiguo compañero fallecido, mientras intentará adaptarse a las nuevas tecnologías y la guerra de los drones. Esta película es la secuela de Top Gun: Idolos del aire (1986), mítico filme de los años 80 dirigido por Tony Scott.", "3.0/5.0","img\peli5.jpg", "https://www.youtube.com/embed/qSqVVswa420", "Sinceridad ante todo: ni me gustó Top Gun (Ídolos del aire) (1986) cuando la vi de pequeño, ni me ha vuelto a gustar cuando la volví a ver ayer por la noche, por eso de refresacarla antes de enfrentarme a su segunda parte: Top Gun: Maverick. Y es raro, porque de Tony Scott, director de la primera (e icónica) película, me gusta casi todo: El ansia (1983), Superdetective en Hollywood II (1987), El último Boy Scout (1991), Amor a quemarropa (1993), Marea roja (1995), El fuego de la venganza (2004), etc. Pero no Top Gun. Quizá fuera la sensación de estar fuera de un fenómeno mundial -por mundial, me refiero a mi clase de EGB, que andaban chicos y chicas locos con ella-, que amasó 350 millones de dólares en su estreno y ascendió a Tom Cruise a un estrellato del que ya nunca se ha bajado. Tom Cruise en 'Top Gun, ídolos del aire' en 1985Top Gun,.");

           
            $pelis[] = new pelis_model(6, "DOCTOR STRANGE EN EL MULTIVERSO DE LA LOCURA", "En esta nueva aventura, el Doctor Strange (Benedict Cumberbatch) va a poner a prueba los límites de sus poderes y esto le llevará a explorar una nueva dimensión de sus capacidades. Tras haber fallado su hechizo, cuando trataba de ayudar a Spider-Man (Tom Holland) con su identidad secreta,  tiene que recurrir a una vieja amiga, Wanda Maximoff (Elizabeth Olsen) para enmendar su error. Como nunca antes, el famoso hechicero de Marvel explorará los oscuros rincones del Multiverso, donde deberá contar con nuevos y viejos aliados si quiere sobrevivir a las peligrosas realidades alternativas del universo y enfrentarse a un nuevo misterioso enemigo.", "4.5/5.0","img\peli6.jpg", "https://www.youtube.com/embed/KREBGtEeW9U", " La irrupción de Sam Raimi en el Universo Cinematográfico Marvel ha sido la mejor noticia posible, dentro del contexto cinematográfico superheroico, que podíamos llevarnos este 2022. En Marvel están convencidos de que los autores deben estar plegados a las directrices de la casa madre: política de productores desde el título 0 a la serie n+1. Pero eso tiene sus riesgos y las últimas producciones de Disney/Marvel: Capitana Marvel (2019), Spider-Man: Lejos de casa (2019), Viuda Negra (2021), Shang-Chi y la leyenda de los diez anillos (2021), Eternals (2021) y Spider-Man: No-way Home (2021); con todos sus aciertos (muchos) y errores (unos cuantos), sí adolecían de una falta de carácter autoral -y eso que Chloë Zhao venía para dejar su sello- que se redimía frente a la espectacularidad y, en algunos casos (como la última Spider-Man), innovación de las propuestas. ");

            
            $pelis[] = new pelis_model(7, "EL HOMBRE DEL NORTE", "Islandia, principios del siglo X. El peuqño príncipe nórdico Amleth ve como su padre el rey Horvendill (Ethan Hawke) es asesinado a manos del sanguinario Fjölnir (Claes Bang). Ya entrado en la edad adulta (y con los rasgos de Alexander Skarsgård) emprende una misión de venganza en la que no se detendrá ante nada y ante nadie, dejando un pavoroso reguero de sangre a su paso. El argumento se basa en una historia que  aparece en Gesta Danorum (Historia de los daneses), una colección de tradiciones orales escrita hacia el año 1200 por Saxo Grammaticus. Una historia nórdica que inspiró el Hamlet de Shakespeare, ambientada en el mundo de los vikingos y dirigida el cineasta Robert Eggers, responsable de El faro (2019) y La bruja: Una leyenda de Nueva Inglaterra (2015).", "4.0/5.0","img\peli7.jpg", "https://www.youtube.com/embed/7HZ4tBQEiB0", "Con solo dos películas en su haber: La bruja (2015), una de las cumbres del terror contemporáneo, y El faro (2019), una pesadilla expresionista que mezclaba en un salto sin red terror y comedia bruta, el cineasta norteamericano Robert Eggers da el salto a las grandes superproducciones (90 millones de dólares) de la mano de Universal y Focus Features con El hombre del norte, una película de vikingos -¡gran subgénero que nos ha dado películas de la talla de Los vikingos (1958) de Richard Fleischer o La furia de los vikingos (1961) de Mario Bava!-, que cruza el folk horror más lisérgico -hay mucha brujería e iconografía pagana absolutamente deliciosa- con la violencia más salvaje y gore que uno se pueda llevar a la cara (algo realmente poco habitual en los blockbusters norteamericanos). El cineasta la ha definido como un cruce entre Andrei Rublev (1966) de Andrei Tarkovsky y Conan el bárbar");


            return $pelis;

        }


    } 


?>