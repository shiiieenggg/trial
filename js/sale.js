const products = [
    {
        id:0,
        code:"edhghiekrihg",
        imgSrc:" MedicineDog/dogmed1.png ", 
        category:" Dog Medicine", 
        name: " Petvit Power ",
        description: "Growel Petvit Power is a Multivitamin Supplements for Dog Puppy Cat and Kitten. Petvit Power is fulfilling all necessary vitamins requirement of Dog Puppy Cat and Kitten. Growel Petvit Power is helpful to Improves the health and weight gain of dogs, puppy Cats, and kittens.",
        rate : "images/stars.png", 
        instock: 40,
        saleicon:"images/discount.png",
        price: 270.00  
        },
        
        {
            id:1,
            code: "adgfgfsdd",
            imgSrc:" AccesoriesDog/dogac10.png ", 
            category:" Dog Accessories ", 
            name: " Dog Cute Collar Tag ",
            description: "Rich and vibrant color with gorgeous sparkling glitter. Available in many adorable colors to match your dog's collar or cat's collar. Excellent quality, stylish, extremely cute and beautiful. Tag is light weight, strong, durable and thick material. Hard clear epoxy coating on glitter face. Full polish plating on metal surfaces",
            rate : "images/stars.png", 
            saleicon:"images/discount.png",
            instock: 40,
            price: 120.00 
        },
        
        {
            id: 2,
            code:"sfhgjh",
            imgSrc:" BeddingCat/Catbed3.png ", 
            category:" Beddings Cat ", 
            name: " Shark Design Bedding ",
            description: "The self-warming lounge sleeper is the perfect snuggle spot for a smaller pet,pillow is detachable and washable. The eterior of this bed is made of a durable pp cotton,your pet will love curling up in. The overstuffed bolster surrounding the bed perfectly complements the soft,pillow-like sleeping surface.",
            rate : "images/stars.png", 
            saleicon:"images/discount.png",
            instock: 40,
            price: 570.00 
        },
        
        {
        id:3,
        code:"edjkhfjdhfg",
        imgSrc:" MedicineDog/dogmed4.png ", 
        category:" Dog Medicine", 
        name: " Furglow (Liquid)",
        description: "Himalaya Furglow Liquid is used as an adjuvant in the treatment of dermatological conditions in canines and Cats, such as: allergic skin conditions, such as bites from various insects (fleas, ticks, etc.) and atopic dermatitis, fungal skin infections, skin that has scabs, and gloss-free fur.",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 160.00 
        },
        
        {
        id:4,
        code:"eddekfjrifrhg",
        imgSrc:" MedicineDog/dogmed5.png ", 
        category:" Dog Medicine", 
        name: " NutriVet All in One ",
        description: "Nutri-Vet Multi-Vite Chewable Tablets provide a wide spectrum of the best vitamins for dogs, along with minerals to complement your dog’s normal diet. Veterinarian formulated for dogs one to seven years old, this multivitamin has a tasty liver flavor dogs can’t resist.",
        rate : "images/stars.png",
        saleicon:"images/discount.png",
        instock: 40, 
        price: 450.00  
        },
        
        {
            id:5,
            code:"edsddfgfhbfddsdfjag",
        imgSrc:" ToyCat/Cattoy8.png ", 
        category:" Cat Toy", 
        name: " Roden Plushie ",
        description:"Perfectly sized, lightweight toys that Cats can easily pick up, carry, and play with; these soft plush mice are also filled with Catnip for extra fun and excitement during playtime, making them even more irresistible to feline paws",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 400.00 
        },
        
        {
        id:6,
        code:"edekrotrug",
        imgSrc:" MedicineDog/dogmed7.png ", 
        category:" Dog Medicine", 
        name: " TummyWorks ",
        description: "Relieves Diarrhea, Upset Stomach, Gas, Constipation & Bad Breath, Itching & Yeast Infections. Digestive Enzymes & Prebiotics. Made in USA. IMPROVES HEALTH and HAPPINESS: Extracts more energy and nutrients from your pet's food.",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 260.00 
        },
        
        {
        id:7,
        code:"edhheuhreuif",
        imgSrc:" MedicineDog/dogmed8.png ", 
        category:" Dog Medicine", 
        name: " IDash Pet (Probiotics)",
        description: "Only Natural Pet Probiotic Blend contributes to the health and balance of your pet's intestinal tract by supplying natural microorganisms and prebiotics that support a healthy digestive tract and aid in nutrient absorption. This formula is a multi-strain combination of bio-available microorganisms in a prebiotic base of fructooligosaccharide (FOS). Manufactured to ensure maximum potency and stability at room temperature.",
        rate : "images/stars.png",
        saleicon:"images/discount.png",
        instock: 40, 
        price: 280.00 
        },
        
        {
        id:8,
        code:"ekjrigjig",
        imgSrc:" MedicineDog/dogmed9.png ", 
        category:" Dog Medicine", 
        name: " Makondo Pet ",
        description:"ANTI-INFLAMMATORY NATURAL BLEND: Our One and Only natural blend of Boswellia for Dogs, Fish Oil and Turmeric for Dogs helps to reduce joint inflammation while optimizing mobility and flexibility, acting in this way as a dog arthritis supplement.",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 240.00  
        },
        
        {
        id:9,
        code:"edsfjirtg",
        imgSrc:" MedicineDog/dogmed10.png ", 
        category:" Dog Medicine", 
        name: "Puppy Multi",
        description:"Gives puppies nutritional support so they start life off happy and healthy. Essential vitamins and nutrients replace those lost in food manufacturing or not contained in raw diets. Easy-to-digest formula. Free of grains, artificial colors and artificial flavors. Made with quality ingredients in a USA facility",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 240.00 
        },
        
        {
            id:10,
            code:"ewsfdfhgfg",
            imgSrc:" FoodDog/dogfood11.png ", 
            category:"Dog Food", 
            name: " PURINA Dog Chow ",
            description:"Made with high-quality protein sources, this savory dog food recipe supports strong muscles and immune health. And with 23 vitamins and minerals, it provides the 100% complete and balanced nutrition that adult dogs of all sizes and breeds need to help live long and healthy lives.",
            rate : "images/stars.png", 
            saleicon:"images/discount.png",
            instock: 40,
            price: 250.00 
        },
        
        {
        id:11,
        code:"edhjhfirfrd",
        imgSrc:" MedicineDog/dogmed12.png ", 
        category:" Dog Medicine", 
        name: " Simein Pets",
        description: "Does your Cat show signs of energy loss due to sickness or aging? A vitamin supplement can benefit your Cat's heart, liver, eyes, and immune system, helping to promote overall well-being for your loved animal so that it has the right amount of energy everyday. Senior Cats can especially benefit from vitamin supplements.",
        rate : "images/stars.png", 
        saleicon:"images/discount.png",
        instock: 40,
        price: 230.00 
        },

        {
            id: 12,
            code:"asdsgf",
            imgSrc:" BeddingCat/Catbed2.png ", 
            category:" Beddings Cat ", 
            name: " Circular Cat Bedding ",
            description: "The round pet bed allows pets to curl up while the raised rim creates a sense of security and provides head and neck support. The 20 inch round pet bed is perfect for Cats, small dogs and other pets up to 15 lbs.",
            rate : "images/stars.png", 
            saleicon:"images/discount.png",
            instock: 40,
            price: 570.00
            },

            {
                id:"13",
                code:"asrtugiyujhfvdd",
                imgSrc:" images/Catfood11.png ", 
                category:" Cat Food", 
                name: " Inter Nutri ",
                description: "Internutri Vigor Cat is a complete feed for Cats, extruded, monocolored, enriched with fishmeal for an irresistible taste and smell. Enriched with fishmeal obtained from fish that increases palatability and with high digestibility protein that promotes the digestive action.",
                rate : "images/stars.png", 
                saleicon:"images/discount.png",
                instock: 40,
                price: 270.00 
                },
           
                {
                id:"14",
                code:"asfdgfgyuyuiu",
                imgSrc:" images/Catfood12.png ", 
                category:" Cat Food", 
                name: " Prima Cat (Chicken) ",
                description: "Our grain-free chicken flavor food is suitable for all indoor Cats, but particularly for active Cats and young Cats, who have a higher need for energy. Grains have been replaced with alternative sources of carbohydrates, which are often suitable also for Cats with deliCate digestive systems.",
                rate : "images/stars.png",
                saleicon:"images/discount.png", 
                instock: 40,
                price: 330.00 
                },
 
                {
                id : 15,
                code:"fgfhghbfcdfvfgfjag",
                imgSrc:" ToyDog/dogtoy11.png ", 
                category:" Dog Toy", 
                name: "  Carrots Plushie ",
                description: "This sweet carrot is crafted from high quality minky and is stuffed with polyfil, making cleanup a breeze. It measures approximately 8 long and approximately 4 wide. Its faces is expertly embroidered. All of our plushies are one of a kind. Exact fabric shades and facial placement may vary. All of our items are IN STOCK and ready to ship - perfect for last minute gift giving.",
                rate : "images/stars.png", 
                saleicon:"images/discount.png",
                instock: 40,
                price: 120.00  
                },
                
                    
        
       
];