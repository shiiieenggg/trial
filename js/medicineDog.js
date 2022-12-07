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
        price: 270.00  
        },
        
        {
        id:1,
        code:"ednkrfogg",
        imgSrc:" MedicineDog/dogmed2.png ", 
        category:" Dog Medicine", 
        name: " Simparica Trio ",
        description: "Use with caution in dogs with a history of seizures. Simparica Trio contains sarolaner, a member of the isoxazoline class, which has been associated with neurologic adverse reactions including tremors, ataxia, and seizures in dogs with or without a history of neurologic disorders. The safe use of Simparica Trio has not been evaluated in breeding, pregnant, or lactating dogs. The most frequently reported adverse reactions in clinical trials were vomiting and diarrhea.",
        rate : "images/stars.png", 
        instock: 40,
        price: 370.00  
        },
        
        {
        id:2,
        code:"ednkdgktffg",
        code:"dfiijdhfg",
        imgSrc:" MedicineDog/dogmed3.png ", 
        category:" Dog Medicine", 
        name: " Puppy Plex ",
        description: "Vitamins & Minerals Supplements for Dog & Growel Puppy Plex is a vitamin and minerals supplement for the dog, puppy Cat, and kitten. This is helpful to supplement vitamins and minerals requirements dog, Cat, puppy, and kitten Recommended Dosage for Puppy Plex is Dogs 10-20 ml Twice Daily. Pups and Cats 5 ml Twice Daily.",
        rate : "images/stars.png", 
        instock: 40,
        price:320.00  
        },
        
        {
        id:3,
        code:"edjkhfjdhfg",
        imgSrc:" MedicineDog/dogmed4.png ", 
        category:" Dog Medicine", 
        name: " Furglow (Liquid)",
        description: "Himalaya Furglow Liquid is used as an adjuvant in the treatment of dermatological conditions in canines and Cats, such as: allergic skin conditions, such as bites from various insects (fleas, ticks, etc.) and atopic dermatitis, fungal skin infections, skin that has scabs, and gloss-free fur.",
        rate : "images/stars.png", 
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
        instock: 40, 
        price: 450.00  
        },
        
        {
        id:5,
        code:"edhnfkgjitg",
        imgSrc:" MedicineDog/dogmed6.png ", 
        category:" Dog Medicine", 
        name: " Sure Grow 100",
        description:"Contains calcium, phosphorus, vitamin A and vitamin D3 to promote healthy growth for puppies of all breeds. Helps improve connective tissue and muscle strength for your growing puppy. Vitamin D3 helps your pup absorb calcium and phosphorus more easily. May assist in providing older dogs with some relief from pain and stiffness. Comes in a convenient, easy-to-administer chewable tablet.",
        rate : "images/stars.png",
        instock: 40, 
        price: 326.00 
        },
        
        {
        id:6,
        code:"edekrotrug",
        imgSrc:" MedicineDog/dogmed7.png ", 
        category:" Dog Medicine", 
        name: " TummyWorks ",
        description: "Relieves Diarrhea, Upset Stomach, Gas, Constipation & Bad Breath, Itching & Yeast Infections. Digestive Enzymes & Prebiotics. Made in USA. IMPROVES HEALTH and HAPPINESS: Extracts more energy and nutrients from your pet's food.",
        rate : "images/stars.png", 
        instock: 40,
        price: 260.00 
        },
        
        {
        id:7,
        code:"edhheuhreuif",
        imgSrc:" MedicineDog/dogmed8.png ", 
        category:" DOG Medicine", 
        name: " IDash Pet (Probiotics)",
        description: "Only Natural Pet Probiotic Blend contributes to the health and balance of your pet's intestinal tract by supplying natural microorganisms and prebiotics that support a healthy digestive tract and aid in nutrient absorption. This formula is a multi-strain combination of bio-available microorganisms in a prebiotic base of fructooligosaccharide (FOS). Manufactured to ensure maximum potency and stability at room temperature.",
        rate : "images/stars.png",
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
        instock: 40,
        price: 240.00 
        },
        
        {
        id:10,
        code:"edhnfrfkjg",
        imgSrc:" MedicineDog/dogmed11.png ", 
        category:" Dog Medicine", 
        name: " Petnc Brewers Yeast ",
        description: "PetNC's Natural Care Brewer's Yeast Dog Supplement is a high quality natural source of B-Vitamins to help support a healthy skin and coat. It’s veterinarian formulated and is a great source of dietary fiber with added garlic and minerals for a glossy coat and healthy skin. Wide range of benefits includes promoting healthy skin, hair, and eyes.",
        rate : "images/stars.png", 
        instock: 40,
        price: 260.00
        },
        
        {
        id:11,
        code:"edhjhfirfrd",
        imgSrc:" MedicineDog/dogmed12.png ", 
        category:" Dog Medicine", 
        name: " Simein Pets",
        description: "Does your Cat show signs of energy loss due to sickness or aging? A vitamin supplement can benefit your Cat's heart, liver, eyes, and immune system, helping to promote overall well-being for your loved animal so that it has the right amount of energy everyday. Senior Cats can especially benefit from vitamin supplements.",
        rate : "images/stars.png", 
        instock: 40,
        price: 230.00 
        }
        

];