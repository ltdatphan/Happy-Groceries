DROP TABLE Products;

CREATE TABLE Products (
    id          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prod_name   varchar(40),
    price       float,
    category    varchar(30),
    source      varchar(30),
    organic     boolean DEFAULT false,
    tags        varchar(200),
    prod_desc   varchar(4000),
    prod_url    varchar(500)
);



/* Inserting produce */
INSERT INTO Products (prod_name, price, category, source, organic, tags, prod_desc, prod_url)
VALUES ("Apple", 1.49, "produce", "local", false, "fruit",
"An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.", 
"https://media.grocerygateway.com/medias/14135-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0NjY2MzJ8aW1hZ2UvcG5nfGltYWdlcy9oZDIvaGQ3LzkwMjYyMTg4NTIzODIucG5nfGRiYWQ0ZmJlNzdmOGY0MDcxN2FjMjM0MWQ3YjQ4ZjMzY2U1NzM3ZThhMjgwYTY3MDdmOWZjZjY4NjJmNGVjYjQ"),

("Tomatoes", 3.07, "produce", "local", true, "vegetable organic",
"The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as a tomato plant. The species originated in western South America and Central America. The Nahuatl (the language used by the Aztecs) word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.", 
"https://media.grocerygateway.com/medias/4664-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w0NDMxMHxpbWFnZS9qcGVnfGltYWdlcy9oYzgvaDkxLzg4MzYxOTMwNTg4NDYuanBnfDA5ZWQwYjdmODM1MjZmZmJjZGMyYWVmYjc2YThmMTc4ZjY3ZGIwYTU1ZDM5MjI2OTkxMDcyNTAwMzc5NmQ2YjQ"),

("Avocado", 5.99, "produce", "local", true, "fruit vegetable organic",
"The avocado, a tree likely originating from south central Mexico, is classified as a member of the flowering plant family Lauraceae. The fruit of the plant, also called an avocado, is botanically a large berry containing a single large seed.", 
"https://media.grocerygateway.com/medias/4225-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNDEwOXxpbWFnZS9qcGVnfGltYWdlcy9oN2YvaDFlLzg4MzYxMzE1NTMzMTAuanBnfDYzZGM5NmM0ZDdmMDRhODkwOTgzY2I0ZTExNDJhNTE0MWMxN2M2ODg3MDcwNTliNWM1MWU5YWQyNGMyZTQxOTI"),

("Red Bell Pepper", 2.49, "produce", "local", false, "vegetable",
"The bell pepper is the fruit of plants in the Grossum cultivar group of the species Capsicum annuum. Cultivars of the plant produce fruits in different colours, including red, yellow, orange, green, white, and purple. Bell peppers are sometimes grouped with less pungent pepper varieties as 'sweet peppers'.", 
"https://media.grocerygateway.com/medias/75000-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNzc3MTh8aW1hZ2UvcG5nfGltYWdlcy9oYTEvaDE0Lzg5MzU3MTg4MTM3MjYucG5nfDE4OWRiM2ZlZWY0ZTVkMDRlODY2NTcxOWM1NjQxYmJiZDZlZjU5OGMxNTU0NTA3MjhkZmZmYjA2YTdiNGFmYWY"),

("Blueberries", 3.99, "produce", "local", true, "fruit organic",
"Blueberries are perennial flowering plants with blue or purple berries. They are classified in the section Cyanococcus within the genus Vaccinium. Vaccinium also includes cranberries, bilberries, huckleberries and Madeira blueberries. Commercial blueberries-both wild and cultivated -are all native to North America.", 
"https://media.grocerygateway.com/medias/00899062002912-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNjcyNnxpbWFnZS9qcGVnfGltYWdlcy9oYjkvaDA3Lzg4OTUzOTExMzc4MjIuanBnfDJhY2U4OWRjYzYzYjM3MmEzODBhOGYwMTkxYjFmYmQ4MDEyNDBiNTE0Yzc1ODZmZDc0Njc5YTUzNGMyOTg3Mzk"),

("Seedless Watermelon", 7.99, "produce", "imported", false, "fruit",
"Watermelon is a plant species in the family Cucurbitaceae, a vine-like flowering plant originally domesticated in Africa. It is a highly cultivated fruit worldwide, having more than 1,000 varieties. Watermelon is a scrambling and trailing vine in the flowering plant family Cucurbitaceae.", 
"https://media.grocerygateway.com/medias/3421-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNTc1NDF8aW1hZ2UvcG5nfGltYWdlcy9oYmUvaGY2LzkwMTIxMzI2MTAwNzgucG5nfGZmNzY4YWJlODRmYzQwYjJkZGQ4NTFiNGM4ZTM2MWI3ZDk5N2QwODJiM2M1NjJlNTg0MWNiN2YyMGM3ZjRmNTE"),

("Golden Pineapple", 4.99, "produce", "imported", false, "fruit",
"The pineapple is a tropical plant with an edible fruit and the most economically significant plant in the family Bromeliaceae. The pineapple is indigenous to South America, where it has been cultivated for many centuries.", 
"https://media.grocerygateway.com/medias/00643126072003-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzOTc3MHxpbWFnZS9qcGVnfGltYWdlcy9oODkvaGQ1Lzg4NDE3MzE4OTk0MjIuanBnfDg3YTlmNzgyY2U5YjFjN2FhMGNjNjg2NGYzYjg1MzAyOGUxNjQ2YjNkOGE0MGU0ZDkyZDU2ODRiZjdiYjE2NDA"),

("English Cucumber", 2.50, "produce", "local", true, "vegetable organic",
"English (or hothouse) cucumbers are long, narrow and are sold wrapped in plastic to protect their thinner, unwaxed skin. English cucumbers are sometimes billed as seedless but the truth is they do have seeds. They're just smaller and thinner than regular cucumber seeds so you can chew right through them.", 
"https://media.grocerygateway.com/medias/4593-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyMDc3NXxpbWFnZS9qcGVnfGltYWdlcy9oNjQvaGM1Lzg4MzYxOTA3NjUwODYuanBnfGQ3NjEwZDRlOTVhMTliMTc2ZDBmODkyMmE3MzNkOGQwNzJmY2JmOWMzY2I1MmFmOTE3NTlmZDc0MTBjYmI0ZTY");



/* Inserting meats */
INSERT INTO Products (prod_name, price, category, source, organic, tags, prod_desc, prod_url)
VALUES ("Angus Eye of Round Roast", 18.49, "meats", "local", false, "beef boneless",
"The Aberdeen Angus, sometimes simply Angus, is a Scottish breed of small beef cattle. It derives from cattle native to the counties of Aberdeenshire and Angus in north-eastern Scotland. The Angus is naturally polled and solid black or red, though the udder may be white.", 
"https://media.grocerygateway.com/medias/00204354000000-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNjczN3xpbWFnZS9qcGVnfGltYWdlcy9oODUvaDIzLzg4NDEyMTU2NzIzNTAuanBnfDAzYjgyNDRkODg4YmNhZWJkYTZhMzRjNWFjZmU0MGE5ZTUxZjM1MTliNjM4MDNmMDM0ZmNlYjIyNWIyZDFkMzg"),

("Angus Bone Less Inside", 26.42, "meats", "local", false, "beef boneless",
"The Certified Angus brand is the world's top choice for premium beef. The stringent quality standards ensure superior flavour, preferred tenderness, and dependable quality. Less than 8% of beef meets the high standards of marbling, texture, and tenderness required to qualify as Certified Angus.", 
"https://media.grocerygateway.com/medias/00204352000002-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNjgwMXxpbWFnZS9qcGVnfGltYWdlcy9oZWIvaDE3Lzg4NDEyNjc1NzY4NjIuanBnfDNkOTI4NjE4NTlhNjhhNzkxYzY0ZTNmMjQ3ZjA1NThiYjA1MWFkOWI3NDVlOTIxNjRkZDcxMGZlZDZkZTc4ZjE"),

("Angus Beef Striploin Roast", 52.88, "meats", "local", true, "beef organic boneless",
"The strip steak is a cut of beef steaks from the short loin from a cow. It consists of a muscle that does little work, the longissimus, making the meat particularly tender, although not as tender as the nearby psoas major or tenderloin.", 
"https://media.grocerygateway.com/medias/00204548000007-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNzM0NnxpbWFnZS9qcGVnfGltYWdlcy9oZmYvaDgwLzg5MDUxMjI2NzY3NjYuanBnfGU5MmQwNjA5NWUxZDc0OWU5OGMxMGZjYTk2NjA3NzBkZjVkODU3ZjdiZGIyNjgzNjAzOTBjNDU0NTE5NWNiMzY"),

("Angus Beef Meatballs", 10.79, "meats", "local", false, "ground beef boneless",
"A meatball is ground meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. There are many types of meatballs using different types of meats and spices.", 
"https://media.grocerygateway.com/medias/00204524000007-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzMzQwNXxpbWFnZS9qcGVnfGltYWdlcy9oYzQvaGY2Lzg4NDEyNjY0OTU1MTguanBnfGQ3MDAzZTYzOTg3NmVmOGEzMzMwYWU4MzYxZGMyNDkzNWViZDZhM2I3NWFhZDY5NmM2ZjZhNTNhNTM0MGZiMGI"),

("Pork Tenderloin", 8.81, "meats", "local", false, "boneless",
"The pork tenderloin, also called pork fillet or Gentleman's Cut, is a long thin cut of pork. As with all quadrupeds, the tenderloin refers to the psoas major muscle along the central spine portion, ventral to the lumbar vertebrae.", 
"https://media.grocerygateway.com/medias/00203246000005-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyMjA5NHxpbWFnZS9qcGVnfGltYWdlcy9oOGYvaDIyLzg4NDEyNTExMjczMjYuanBnfDIwMDBlMjViY2NhZmMyY2JjZmEzNjAyOWFiYmNiYTRlZjBmNWU2YTg1ZWRiMzllMDRkMGYzYzFmYzc0ODgxZTg"),

("Atlantic Salmon Filet", 17.74, "meats", "imported", true, "fish sea seafood",
"The Atlantic salmon is a species of ray-finned fish in the family Salmonidae which is the largest salmon and can grow up to a meter in length. It is found in the northern Atlantic Ocean and in rivers that flow into this ocean.", 
"https://media.grocerygateway.com/medias/00204072000009-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyODg1ODR8aW1hZ2UvanBlZ3xpbWFnZXMvaGM3L2gyOC84ODczNTc4MzY0OTU4LmpwZ3wzZjZlYzgwZDc2Y2Y2MDg3NGNiNDkzZjRjNGFkZjBhZjNhYTBmMWRhYTVkNzdmNTI1NmEyZGQ1YjNlNDg2ZmYx"),

("Chicken Thighs", 12.40, "meats", "local", true, "poultry yorkshire valley",
"Chicken thighs are sold with bone in and skin on, or boneless and skinless. They are dark meat making them extra flavorful, they contain more fat which ensures they bake up succulent and tasty. Thighs are more forgiving than Chicken Breasts which can more easily be overcooked.", 
"https://media.grocerygateway.com/medias/00209814000002-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w5NzQzMTh8aW1hZ2UvcG5nfGltYWdlcy9oMjAvaGNhLzkxOTY0MzI2ODcxMzQucG5nfGJmZTkxZWIxMWRiMWJjN2QwYTQzZTlhMjc0N2Y1YzM1NjJkMDZhOWEzNjZjNWJiZjEzZGNkNzI1MmEwY2Q4NTU"),

("Chicken Breasts", 15.42, "meats", "local", true, "poultry yorkshire valley",
"Chicken is the most common type of poultry in the world. Owing to the relative ease and low cost of raising them in comparison to animals such as cattle or hogs, chickens have become prevalent throughout the cuisine of cultures around the world, and their meat has been variously adapted to regional tastes.", 
"https://media.grocerygateway.com/medias/00209810000006-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w5NjgxOTh8aW1hZ2UvcG5nfGltYWdlcy9oZmQvaDc2LzkxOTY0MzMxNDU4ODYucG5nfDdmYjYyNGIwZTAwNjFhZDg2NjQzY2ZkNzE5MzUwYjQ4NmRiN2NlMmUxODk0NDEzMTIwYTAwOWUyM2IyZDBiOGY");



/* Inserting Dairy */
INSERT INTO Products (prod_name, price, category, source, organic, tags, prod_desc, prod_url)
VALUES ("Black Diamond Mozzarella", 6.99, "dairy", "local", false, "cheese",
"Mozzarella is a traditionally southern Italian cheese made from Italian buffalo's milk by the pasta filata method. Fresh mozzarella is generally white but may vary seasonally to slightly yellow depending on the animal's diet.", 
"https://media.grocerygateway.com/medias/00068200885179-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wxNzYxNjh8aW1hZ2UvcG5nfGltYWdlcy9oOTYvaDgzLzkwOTQxMzc5NzA3MTgucG5nfDkyZDIwZjE1NjhmZTI1ZTkzZGY1ZjFlYTgwNjI2OGE4YWM1MDgzODE3MzRiMjZjNTY5ODA5MTgwYmFmN2Y4NjU"),

("2% Partly Skimmed Milk", 4.99, "dairy", "local", false, "drink beverage",
"Milk is a nutrient-rich liquid food produced by the mammary glands of mammals. It is the primary source of nutrition for young mammals, including breastfed human infants before they are able to digest solid food.", 
"https://media.grocerygateway.com/medias/00055300111017-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w2MDMxMnxpbWFnZS9qcGVnfGltYWdlcy9oZTUvaDkyLzg4MzY4Mzc3MzY0NzguanBnfGEyYTJjY2MxZTgwYTcyZDc1ZTczMGZkZGUxMmE1NzI0NDg4YzhjMmZkOTYzNWYyNDg5NDJkNDA2ZTE5MmNhZWQ"),

("Unsalted Butter Sticks", 6.49, "dairy", "local", false, "spread dip",
"Butter is a dairy product made from the fat and protein components of milk or cream. It is a semi-solid emulsion at room temperature, consisting of approximately 80% butterfat.", 
"https://media.grocerygateway.com/medias/00772468042051-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNDYwMDR8aW1hZ2UvcG5nfGltYWdlcy9oNGQvaDU2LzkxNDc0OTcwMjE0NzAucG5nfGUxNDM5MzA5YThmZmY4Yjk4NzIxNzk5MzFkYmQwMDc0YTg5NDFjOTdmNjUyY2Y3ZWZhNTU4ZThiMWY2MmMxNmQ"),

("3.8% Milk Homogenized", 4.49, "dairy", "local", true, "drink beverage",
"Homogenization is a mechanical treatment of the fat globules in milk brought about by passing milk under high pressure through a tiny orifice, which results in a decrease in the average diameter and an increase in number and surface area, of the fat globules.", 
"https://media.grocerygateway.com/medias/00772468000105-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w1NzQ2MHxpbWFnZS9qcGVnfGltYWdlcy9oNmMvaGIyLzg4NjIxMDI2MTgxNDIuanBnfGFhN2ViNjcyZTUzYzNhNDQ1MDg2ZDY4NDE2NGExOTdhYmMyODRhZTY2Mzg1NjY0Y2QwYjY1ZDllNTVkOWU5NmU"),

("Astro Natural Yogurt", 3.59, "dairy", "imported", false, "drink beverage",
"Yogurt, also spelled yoghurt, yogourt or yoghourt, is a food produced by bacterial fermentation of milk. The bacteria used to make yogurt are known as yogurt cultures.", 
"https://media.grocerygateway.com/medias/00068200750156-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0ODY2NjF8aW1hZ2UvcG5nfGltYWdlcy9oNjAvaDQxLzkxMzkzNjMxMTkxMzQucG5nfDJkNTY0NTQ1ZWFhNjZjZTE4YTQyZjhlNTg3MzgxZmUxNjgwY2UwZmQ1YjA4YzNmMDZkYzdkZDdlMjM1NDU3ZWM"),

("14% Sour Cream", 2.49, "dairy", "local", false, "spread dip",
"Sour cream or soured cream is a dairy product obtained by fermenting regular cream with certain kinds of lactic acid bacteria. The bacterial culture, which is introduced either deliberately or naturally, sours and thickens the cream.", 
"https://media.grocerygateway.com/medias/00772468042242-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzODA0MTJ8aW1hZ2UvcG5nfGltYWdlcy9oNDkvaDg1LzkxNzAwOTk4MzA4MTQucG5nfGIzOTkzNGZjZWM1NzI3NjVjOWI5MzE1NGY2NWUxYzc0MGNjMzY4MzdiYjNmMjUzNzg1ODU2ODMxYmZjYmI2NWQ"),

("Gay Lea Whipped Cream", 4.19, "dairy", "imported", false, "topping",
"Whipped cream is cream that is whipped by a whisk or mixer until it is light and fluffy, or by the expansion of dissolved gas, forming a colloid. It is often sweetened and sometimes flavored with vanilla.", 
"https://media.grocerygateway.com/medias/00066013583558-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNjI2NDV8aW1hZ2UvcG5nfGltYWdlcy9oYzYvaDQxLzkxMDQzNjk1NDkzNDIucG5nfDE1ZWE3NDhmNGVkYzI5ZmM3NWVmYjAyMzEwNmFiMjg1YmQyOTk5NTc3OGVkMGU3MGExNWQ4NTMyMWYzMDAwNzQ"),

("Silk Almond Milk", 4.69, "dairy", "imported", false, "drink beverage",
"Almond milk is a plant milk manufactured from almonds with a creamy texture and nutty flavor, although some types or brands are flavored in imitation of dairy milk.", 
"https://media.grocerygateway.com/medias/00025293001503-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0NTY0MDh8aW1hZ2UvcG5nfGltYWdlcy9oOTYvaDQ3LzkxNTI1NDI4MDE5NTAucG5nfDI1Mzk3NzUxMTZkZDA3NTc3ZWJhNzA1MzQ2N2VlYmQxY2ZiMTEzZGI5NDk0MDY5MDMwZjRjZDM1M2YyNGQyZWM");



/* Inserting Beverages */
INSERT INTO Products (prod_name, price, category, source, organic, tags, prod_desc, prod_url)
VALUES ("Coca-Cola Classic", 4.99, "beverages", "imported", false, "soft drink pop soda sweet",
"Coca-Cola, or Coke, is a carbonated soft drink manufactured by The Coca-Cola Company. Originally marketed as a temperance drink and intended as a patent medicine, it was invented in the late 19th century by John Stith Pemberton and was bought out by businessman Asa Griggs Candler.", 
"https://media.grocerygateway.com/medias/00067000102684-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w5MTAzMnxpbWFnZS9qcGVnfGltYWdlcy9oZTMvaDdkLzg4Mzk5NTA4OTMwODYuanBnfGYyMmJhZDY3NWUxYjA4MjdiM2JlMDRlNTc1YzEwZDIzMzQ5ZGExNWI2ZWQ3MmY5YTRjMDY3YzkwMjZkZTQ5ZjE"),

("Minute Maid Orange Juice", 1.99, "beverages", "imported", false, "drink sweet",
"Orange juice is a liquid extract of the orange tree fruit, produced by squeezing or reaming oranges. It comes in several different varieties, including blood orange, navel oranges, valencia orange, clementine, and tangerine.", 
"https://media.grocerygateway.com/medias/00059600061638-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w0MzY5N3xpbWFnZS9qcGVnfGltYWdlcy9oMmYvaDM4Lzg4Mzg0ODA2MjU2OTQuanBnfDIzYjhhMWM2YjJiYTU2OTFlMzFiMjJhMTllMTQ3ZjFmZWNhOTU0ZGJmZmIzMTljZGEyOGQzZDgyM2IwNTEzZWU"),

("Simply Peach", 5.49, "beverages", "imported", false, "drink juice sweet",
"Each delicious sip of Simply Peach is like a visit to the orchard. Made with real peach juice, it's all-natural delicious refreshment any time of day. Never any added preservatives, colors or artificial flavors.", 
"https://media.grocerygateway.com/medias/00059600060495-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNDY3MjF8aW1hZ2UvcG5nfGltYWdlcy9oYjYvaGU5LzkxNjY3OTMyMTE5MzQucG5nfGE0Y2Q5NjM1M2IxZGE0YzJlZTAzNzkzM2VhYzJmZTBhNGJiZmMxM2IxZjljNmI0YmJlYjAxZjlkMTUyZGRlZTE"),

("Bottle Green Ginger", 4.49, "beverages", "imported", false, "soft drink juice pop soda sweet",
"Ginger (Zingiber officinale) is a flowering plant whose rhizome, ginger root or ginger, is widely used as a spice and a folk medicine. It is a herbaceous perennial which grows annual pseudostems (false stems made of the rolled bases of leaves) about one meter tall bearing narrow leaf blades.", 
"https://media.grocerygateway.com/medias/00818526010010-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzMDIwOTB8aW1hZ2UvcG5nfGltYWdlcy9oYzMvaGQ5Lzg4MTQ2Mzc3MTEzOTAucG5nfGE3NjJjOGM3MjYxZTVjMGE4NmU4MjRmMmJkOGVhMWVkODlhYmU4Y2E5NjFiM2FhMWQwZWViYmY2OWVkMTNjMjA"),

("Tropicana Watermelon", 4.99, "beverages", "imported", false, "drink juice sweet",
"Enjoy the refreshing taste of summer in every glass of our Tropicana Watermelon drink. Made with a blend of summer's most delicious fruit juices, it's a unique juice drink with no artificial sweeteners or flavors.", 
"https://media.grocerygateway.com/medias/00048500021392-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0NzI1NTB8aW1hZ2UvcG5nfGltYWdlcy9oOGYvaDlhLzg5Nzk4MDQ0MjIxNzQucG5nfGMyMjVhOWU0YTE4YWQwYWY0ZWFmZjVmZWM3M2JjYzEyMmQ0NjY1ZGRkYTFlZWY4YjlkNmIyYTNhOGNjNThjOGE"),

("Monster Energy", 2.49, "beverages", "imported", false, "soft drink pop soda sports sweet",
"Monster Energy is an energy drink that was introduced by Hansen Natural Company in April of 2002. Monster Energy has a 35% share of the energy drink market, the second highest share after Red Bull.", 
"https://media.grocerygateway.com/medias/00070847811190-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzMzA1OHxpbWFnZS9qcGVnfGltYWdlcy9oMDUvaGM3Lzg4NDA0OTQ0MTU5MDIuanBnfDNlNjI3ZTBiNmY4YzU5MjA3MWUwNGJlMWE2NmVlNjY0YjM2ZTEyMmE4NjJjNGVkZTQ0ZWUzYjAzMjgwNzU4NDQ"),

("Ribena Original", 11.49, "beverages", "imported", false, "drink juice blackcurrant sweet",
"Ribena is a British-origin brand of blackcurrant-based uncarbonated and carbonated soft drink and fruit drink concentrate. It was produced by GlaxoSmithKline (GSK) until 2013, when the brand was sold to Suntory.", 
"https://media.grocerygateway.com/medias/00062802182513-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wyOTIyNjh8aW1hZ2UvcG5nfGltYWdlcy9oYmQvaGVhLzg5NjY5OTQ5MTk0NTQucG5nfDMzN2VmMWIyMDY1YWFjYTM3NDRjODE0MmMyNDhlNmE5NGIzYjg4OWNkMTZhNWExNjU2YjJiODc0MzQ2NjAyZjY"),

("Gatorade Zero Berry", 6.29, "beverages", "imported", false, "energy soft drink pop soda sports sweet",
"Gatorade is classified as a 'sports drink.' Scientists at the University of Florida developed the drink in 1965 with the aim of boosting the performance of their football team, called the Gators.", 
"https://media.grocerygateway.com/medias/00057271162647-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w5MDM5ODN8aW1hZ2UvcG5nfGltYWdlcy9oYWEvaGI4LzkwNzAwNzY1MjY2MjIucG5nfDAxNDk0YzgzZWIyNDI1MDM2NDlmMjYzZjE5ZGRiNzljMTNmNDljNGVjYzU3YjhiMmQ1OTNmM2UxNjA3NWJkZDM");



/* Inserting Bakery */
INSERT INTO Products (prod_name, price, category, source, organic, tags, prod_desc, prod_url)
VALUES ("Three Meat Pizza", 3.99, "bakery", "imported", false, "lunch dinner frozen",
"Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients, which is then baked at a high temperature, traditionally in a wood-fired oven.", 
"https://media.grocerygateway.com/medias/00058336173035-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wxNTQ1MDF8aW1hZ2UvanBlZ3xpbWFnZXMvaDE0L2g3MS84ODc2MDQyOTQ0NTQyLmpwZ3xmODA5NmNmOGM3NWQxYTU3OTY4ZjA0ODAxYWFiOWE3M2RmMWIwYWU2ZThkNmZmMDFkMWU2MmUyMWJhOGVmODMw"),

("Two-Bite Brownies", 4.99, "bakery", "local", false, "snack cookie chocolate confection fudge cake dessert sweet",
"A chocolate brownie or simply a brownie is a square or rectangular chocolate baked confection. Brownies come in a variety of forms and may be either fudgy or cakey, depending on their density. They may include nuts, frosting, cream cheese, chocolate chips, or other ingredients.", 
"https://media.grocerygateway.com/medias/00770981095882-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNTA2OXxpbWFnZS9qcGVnfGltYWdlcy9oYTUvaGM3Lzg4NDE5NTc1NzI2MzguanBnfDAzMzZlZTYyMmVmMmRlMDBhYjY3Njc5MWQ2OWI1Y2M2NGJkMTQyM2YwOTgyZTE2MTQ4OTNjNWY5OWRiMWFhOGE"),

("Chocolate Cheesecake", 17.99, "bakery", "imported", false, "dessert snack sweet fudge",
"Cheesecake is a sweet dessert consisting of one or more layers. The main, and thickest layer, consists of a mixture of soft, fresh cheese, eggs, and sugar. If there is a bottom layer, it often consists of a crust or base made from crushed cookies, graham crackers, pastry, or sometimes sponge cake.", 
"https://media.grocerygateway.com/medias/00835910007166-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNzkyNzZ8aW1hZ2UvcG5nfGltYWdlcy9oMGQvaGExLzkwMzUwMDA2MTA4NDYucG5nfGE3MGE4Nzg0NzRhMWUwODZiZWZjYWE0YmY1MzA1OWU2N2M2MTM5MDFiZDY5MmYzY2UzNjkwZjgxODNhMDA0OWE"),

("Sourdough Bread", 3.99, "bakery", "local", false, "dough snack",
"Sourdough bread is made by the fermentation of dough using naturally occurring lactobacilli and yeast. The lactic acid produced by the lactobacilli gives it a more sour taste and improved keeping qualities.", 
"https://media.grocerygateway.com/medias/00202467000009-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNjIyMHxpbWFnZS9qcGVnfGltYWdlcy9oM2MvaDkzLzg4NDExNjIwNjM5MDIuanBnfGNjMjA3ZTNjNmI5Yjg3MzA5NzQ5ZWRhMzFjZmE1N2Y4ZDk4YTFmMWE4MmJiZjQ5NWMzNTk3ODE2NTVmYzAyM2I"),

("Garlic Bread", 2.99, "bakery", "local", false, "snack dough",
"Garlic bread consists of bread, topped with garlic and olive oil or butter and may include additional herbs, such as oregano or chives. It is then either grilled or broiled until toasted or baked in a conventional or bread oven.", 
"https://media.grocerygateway.com/medias/00772468008675-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wxOTg4NXxpbWFnZS9qcGVnfGltYWdlcy9oNGEvaGQyLzg4NDIwOTY2NDAwMzAuanBnfGRkNDFjZDExZjdiNmRhMmIzYmZiNGU4NTBhOWY0Zjk1ZDk2MmQxMWM1N2MyY2MwNzJiZTc2NTY1ZWU3YTJmZGY"),

("Baguette", 3.29, "bakery", "local", false, "snack dough bread french",
"A baguette is a long, thin loaf of French bread that is commonly made from basic lean dough. It is distinguishable by its length and crisp crust. A baguette has a diameter of about 5 to 6 centimetres and a usual length of about 65 cm, although a baguette can be up to 1 m long.", 
"https://media.grocerygateway.com/medias/00062240220006-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNDQ4MnxpbWFnZS9qcGVnfGltYWdlcy9oMzIvaGIxLzg4Mzg5MDEyNjg1MTAuanBnfDNmM2ZiOWQ0OGQxODE4OWU3MzlmMzc1YTg2YjczNzgzNjVmODZlOTIyMzZiYWI2NDQwNzY3MmEzNTQwZWM1MGI"),

("Dempster's Deluxe Bun", 3.99, "bakery", "local", false, "snack bread dough hamburger",
"A bun is a small, sometimes sweet, bread-based item or roll. Though they come in many shapes and sizes, they are most commonly hand-sized or smaller, with a round top and flat bottom. Buns are usually made from flour, sugar, milk, yeast and butter.", 
"https://media.grocerygateway.com/medias/00068721620921-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0MDM3Mzl8aW1hZ2UvcG5nfGltYWdlcy9oZjkvaDdmLzkxMzY0NDk2NTA3MTgucG5nfGVjZjBhY2IwZWNiN2EzYWUyMWE1NTljNWVkYWYzNDNmYzk3ZjVhNmZlNzdiMjQ5Yjg3YzE1MWEzOWE4NjYzMDI"),

("Chocolate Chip Muffins", 4.99, "bakery", "local", false, "snack dessert confection sweet",
"A muffin is an individual-sized, baked product. It can refer to two distinct items, a part-raised flatbread that is baked and then cooked on a griddle and a cupcake-like quickbread that is chemically leavened and then baked in a mold.", 
"https://media.grocerygateway.com/medias/00772468008170-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3w3OTg0N3xpbWFnZS9qcGVnfGltYWdlcy9oYjUvaDQ5Lzg4Njc5MTY5MDY1MjYuanBnfDJkZDBmN2U2MjRmNDI3MjQzYTI0NzhhMTUxMzFkZTdhMTQ3OGVlZGNlZDUzN2NhOGM0MWM3ZDk0OWUxMWM0NDM");