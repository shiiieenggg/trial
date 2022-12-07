const products = [

    {    id:0,
        code:"edhgfjag",
        imgSrc:" MedicineCat/Catmed1.png ", 
        category:"Cat Medicine", 
        name: " Revolution PLUS ",
        description: "Revolution® PLUS is a broad-spectrum feline parasite preventative that protects against the most common internal and external parasites, with dual action against fleas, delivered via a simple quick drying topical appliCation",
        rate : "images/stars.png", 
        instock: 40,
        price: 200.00  
        },
        
        {
        id:1,
        code:"edhfdfsresg",
        imgSrc:" MedicineCat/Catmed2.png ", 
        category:"Cat Medicine", 
        name: " Drontal ",
        description: "Drontal Tasty Bone Tablets have been developed specifically for efficient worm control in your dog or puppy. They are effective against adult and immature forms of Tapeworm and Roundworm, and mature forms of the Hookworm and Whipworm.",
        rate : "images/stars.png", 
        instock: 40,
        price: 250.00  
        },
        
        {
        id:2,
        code:"edsdgfhgg",
        imgSrc:" MedicineCat/Catmed3.png ", 
        category:"Cat Medicine", 
        name: " Respocare-Cat ",
        description: "Respocare-Cat L-Lysine Supportive Therapy In Respiratory Infections is a daily supplement to support the respiratory and immune systems. It also promotes tissue repair and collagen formation. It is a perfect supplement for multi-Cat households and boarding.",
        rate : "images/stars.png", 
        instock: 40,
        price: 200.00 
        },
        
        {
        id:3,
        code:"edsfdytug",
        imgSrc:" MedicineCat/Catmed4.png ", 
        category:"Cat Medicine", 
        name: " Cat Star ",
        description:"Cat Star tonic is a daily multivitamin and coat tonic for Cats. It contains 7 vitamins, 1 minerals, 1 amino acid, and omega fatty acids. Cat Star contains Taurine which is an important amino acid for Cats for normal vision and a healthy immune system.",
        rate : "images/stars.png", 
        instock: 40,
        price: 280.00 
        },
        
        {
        id:4,
        code:"edhdfygusrffsf",
        imgSrc:" MedicineCat/Catmed5.png ", 
        category:"Cat Medicine", 
        name: " Cat Ultra Vitamins ",
        description: "Calcium for Cats is essential for maintaining healthy bones and teeth. Your Cat needs to get a balanced diet that is rich in calcium. By your Cat having healthy bones and teeth they can keep on being the strong and lovely animal they are when it comes to play time or cuddle time with you. Our Ultra Vitamins have powerful ingredient combination that can be essential in muscle contraction and nerve impulse transmission. This can make sure to help your Cat not lose its reflexes and moving around ability so that play time can be anytime for you and your small best friend.",
        rate : "images/stars.png", 
        instock: 40,
        price: 200.00 
        },
        
        {
        id:5,
        code:"edhgfjdgghjjg",
        imgSrc:" MedicineCat/Catmed6.png ", 
        category:"Cat Medicine", 
        name: " Fish oil (Fatty Acids)",
        description:"Fish oil is a dietary source of omega-3 fatty acids. Your body needs omega-3 fatty acids for many functions, from muscle activity to cell growth. Omega-3 fatty acids are derived from food. They can't be manufactured in the body. Fish oil contains two omega-3s called docosahexaenoic acid (DHA) and eicosapentaenoic acid (EPA). Dietary sources of DHA and EPA are fatty fish, such as salmon, mackerel and trout, and shellfish, such as mussels, oysters and crabs. Some nuts, seeds and vegetable oils contain another omega-3 called alpha-linolenic acid (ALA).",
        rate : "images/stars.png", 
        instock: 40,
        price: 250.00 
        },
        
        {
        id:6,
        code:"edhsdfhfukrg",
        imgSrc:" MedicineCat/Catmed7.png ", 
        category:"Cat Medicine", 
        name: " VitaPet (Adults)",
        description:"Provides a full spectrum of essential vitamins, minerals, amino acids, and fatty acids to help maintain general health while promoting fresh breath.",
        rate : "images/stars.png", 
        instock: 40,
        price: 320.00 
        },
        
        {
        id:7,
        code:"edhereltrhsdfg",
        imgSrc:" MedicineCat/Catmed8.png ", 
        category:"Cat Medicine", 
        name: " GNC Pet Wellness ",
        description:"GNC Pets ESSENTIALS Multivitamin Dog Supplement Soft Chews give dogs the necessary vitamins and minerals to maintain healthy immune systems. This container of dog supplements comes with 60 easy to chew, bacon-flavored soft chew supplements, providing your pup with the essential tools for optimal overall health. Keep your pet healthy and strong for the long term with multivitamins for pets. Multivitamin dog supplements help improve dogs' overall health, making their skin and coats look shiny and great while improving overall function for all adult dogs.",
        rate : "images/stars.png", 
        instock: 40,
        price: 280.00
        },
        
        {
        id:8,
        code:"edhjkhudgfg",
        imgSrc:" MedicineCat/Catmed9.png ", 
        category:"Cat Medicine", 
        name: " Tomlyn Hairball Remedy ",
        description: "These hairballs can lead to blockages within your Cat's digestive system. Tomlyn Laxatone Hairball Remedy Chicken-Flavored Chews for Cats: Gently lubriCates ingested hair so that it passes in the stool. Adds important omega-3 and omega-6 fatty acids.",
        rate : "images/stars.png", 
        instock: 40,
        price: 180.00 
        },
        
        {
        id:9,
        code:"edjiikhidufg",
        imgSrc:" MedicineCat/Catmed10.png ", 
        category:"Cat Medicine", 
        name: " Plaque Off Powder (Cat)",
        description: "ProDen PlaqueOff Powder Cat is a natural feed supplement which has been shown to significantly reduce bad breath, plaque and tartar in Cats. Like all ProDen PlaqueOff products, ProDen PlaqueOff Powder Cat is made from Ascophyllum nodosum. The product should be used once daily and can be added to both wet and dry food.",
        rate : "images/stars.png", 
        instock: 40,
        price: 150.00 
        },
        
        {
        id:10,
        code:"edhjhdujhfurg",
        imgSrc:" MedicineCat/Catmed11.png ", 
        category:"Cat Medicine", 
        name: " L-lysine Immune Support ",
        description:"Immune support L-Lysine supplement powder is a vet quality supplement that supports your Cat's immune system, respiratory system and eye health. - High levels of L-lysine-500mg per scoop! - Tasty fish flavored powder that Cats will love!",
        rate : "images/stars.png", 
        instock: 40,
        price: 360.00 
        },
        
        {
        id:11,
        code:"edhjhrhrutg",
        imgSrc:" MedicineCat/Catmed12.png ", 
        category:"Cat Medicine", 
        name: " NaturVet Digestive Enzymes ",
        description: "NaturVet – Digestive Enzymes For Cats Plus Probiotics – 60 Soft Chews – Helps Support Diet Change & A Healthy Digestive Tract – Aids in the Absorption of Vitamins & Minerals – 30 Day Supply.",
        rate : "images/stars.png", 
        instock: 40,
        price: 230.00 
        }
        
];