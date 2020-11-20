DROP TABLE Products;

CREATE TABLE Products (
    id          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prod_name   varchar(40),
    price       float,
    category    varchar(30),
    source      varchar(30),
    organic     boolean DEFAULT false,
    prod_desc   varchar(4000),
    prod_url    varchar(500)
);



/* Inserting produce */
INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Apple", 1.49, "produce", "local", false, 
"An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.", 
"https://media.grocerygateway.com/medias/14135-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0NjY2MzJ8aW1hZ2UvcG5nfGltYWdlcy9oZDIvaGQ3LzkwMjYyMTg4NTIzODIucG5nfGRiYWQ0ZmJlNzdmOGY0MDcxN2FjMjM0MWQ3YjQ4ZjMzY2U1NzM3ZThhMjgwYTY3MDdmOWZjZjY4NjJmNGVjYjQ"),

("Strawberries", 1.46, "produce", "local", false, 
"The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.", 
"https://media.grocerygateway.com/medias/00628055798118-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzMDkxOXxpbWFnZS9qcGVnfGltYWdlcy9oMGEvaDEzLzg4NDE2NDQ1Mzk5MzQuanBnfDU3OWMwZTAxYjBhMDA2ZTdhOTcyOWE4Yzg5NTEwNDMxZWZkNjViYTAwYzdiNTIyYmFkMDc3YzIyNTNhMGY2OWY"),

("Avocado, organic", 5.99, "produce", "local", true, 
"The avocado, a tree likely originating from south central Mexico, is classified as a member of the flowering plant family Lauraceae. The fruit of the plant, also called an avocado, is botanically a large berry containing a single large seed.", 
"https://media.grocerygateway.com/medias/4225-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNDEwOXxpbWFnZS9qcGVnfGltYWdlcy9oN2YvaDFlLzg4MzYxMzE1NTMzMTAuanBnfDYzZGM5NmM0ZDdmMDRhODkwOTgzY2I0ZTExNDJhNTE0MWMxN2M2ODg3MDcwNTliNWM1MWU5YWQyNGMyZTQxOTI"),

("Navel Orange", 0.99, "produce", "imported", false, 
"The orange is the fruit of various citrus species in the family Rutaceae; it primarily refers to Citrus sinensis, which is also called sweet orange, to distinguish it from the related Citrus aurantium, referred to as bitter orange.", 
"https://media.grocerygateway.com/medias/13107-2-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wyNDc1MjZ8aW1hZ2UvcG5nfGltYWdlcy9oNWIvaGUyLzkwMjYyMDg2OTQzMDIucG5nfDZmOWU5YzBjMjNmZjg2ODhkZDgzMDljZjkxODk3MjY4YzA2MzBmYmEyMWYzNWM4NGUwZTExMmY3OTZjNmYwMDk"),

("Blueberries, organic", 3.99, "produce", "local", true, 
"Blueberries are perennial flowering plants with blue or purple berries. They are classified in the section Cyanococcus within the genus Vaccinium. Vaccinium also includes cranberries, bilberries, huckleberries and Madeira blueberries. Commercial blueberries-both wild and cultivated -are all native to North America.", 
"https://media.grocerygateway.com/medias/00899062002912-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNjcyNnxpbWFnZS9qcGVnfGltYWdlcy9oYjkvaDA3Lzg4OTUzOTExMzc4MjIuanBnfDJhY2U4OWRjYzYzYjM3MmEzODBhOGYwMTkxYjFmYmQ4MDEyNDBiNTE0Yzc1ODZmZDc0Njc5YTUzNGMyOTg3Mzk"),

("Seedless Watermelon", 7.99, "produce", "imported", false, 
"Watermelon is a plant species in the family Cucurbitaceae, a vine-like flowering plant originally domesticated in Africa. It is a highly cultivated fruit worldwide, having more than 1,000 varieties. Watermelon is a scrambling and trailing vine in the flowering plant family Cucurbitaceae.", 
"https://media.grocerygateway.com/medias/3421-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wzNTc1NDF8aW1hZ2UvcG5nfGltYWdlcy9oYmUvaGY2LzkwMTIxMzI2MTAwNzgucG5nfGZmNzY4YWJlODRmYzQwYjJkZGQ4NTFiNGM4ZTM2MWI3ZDk5N2QwODJiM2M1NjJlNTg0MWNiN2YyMGM3ZjRmNTE"),

("Golden Pineapple", 4.99, "produce", "imported", false, 
"The pineapple is a tropical plant with an edible fruit and the most economically significant plant in the family Bromeliaceae. The pineapple is indigenous to South America, where it has been cultivated for many centuries.", 
"https://media.grocerygateway.com/medias/00643126072003-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzOTc3MHxpbWFnZS9qcGVnfGltYWdlcy9oODkvaGQ1Lzg4NDE3MzE4OTk0MjIuanBnfDg3YTlmNzgyY2U5YjFjN2FhMGNjNjg2NGYzYjg1MzAyOGUxNjQ2YjNkOGE0MGU0ZDkyZDU2ODRiZjdiYjE2NDA"),

("Large Mango", 1.99, "produce", "imported", false, 
"A mango is a stone fruit produced from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for their edible fruit. Most of these species are found in nature as wild mangoes. The genus belongs to the cashew family Anacardiaceae.", 
"https://media.grocerygateway.com/medias/4959-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNTM2OHxpbWFnZS9qcGVnfGltYWdlcy9oMzcvaDg1Lzg4MzYxODc1NTM4MjIuanBnfDk3ZTUwYzk4NzQ2NGZhMzFiZmQyZDJhNDgwNjFjMDk4YTE4MGNlODU1OGFmZjJiYWFmYmNkZjcwYmFlNTU5YmI");



/* Inserting meats */
INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Angus Eye of Round Roast", 18.49, "meats", "local", false, 
"The Aberdeen Angus, sometimes simply Angus, is a Scottish breed of small beef cattle. It derives from cattle native to the counties of Aberdeenshire and Angus in north-eastern Scotland. The Angus is naturally polled and solid black or red, though the udder may be white.", 
"https://media.grocerygateway.com/medias/00204354000000-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNjczN3xpbWFnZS9qcGVnfGltYWdlcy9oODUvaDIzLzg4NDEyMTU2NzIzNTAuanBnfDAzYjgyNDRkODg4YmNhZWJkYTZhMzRjNWFjZmU0MGE5ZTUxZjM1MTliNjM4MDNmMDM0ZmNlYjIyNWIyZDFkMzg"),

("Angus Bone Less Inside", 26.42, "meats", "local", false, 
"The Certified Angus brand is the world's top choice for premium beef. The stringent quality standards ensure superior flavour, preferred tenderness, and dependable quality. Less than 8% of beef meets the high standards of marbling, texture, and tenderness required to qualify as Certified Angus.", 
"https://media.grocerygateway.com/medias/00204352000002-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNjgwMXxpbWFnZS9qcGVnfGltYWdlcy9oZWIvaDE3Lzg4NDEyNjc1NzY4NjIuanBnfDNkOTI4NjE4NTlhNjhhNzkxYzY0ZTNmMjQ3ZjA1NThiYjA1MWFkOWI3NDVlOTIxNjRkZDcxMGZlZDZkZTc4ZjE"),

("Angus Beef Striploin Roast", 52.88, "meats", "local", true, 
"The strip steak is a cut of beef steaks from the short loin from a cow. It consists of a muscle that does little work, the longissimus, making the meat particularly tender, although not as tender as the nearby psoas major or tenderloin.", 
"https://media.grocerygateway.com/medias/00204548000007-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyNzM0NnxpbWFnZS9qcGVnfGltYWdlcy9oZmYvaDgwLzg5MDUxMjI2NzY3NjYuanBnfGU5MmQwNjA5NWUxZDc0OWU5OGMxMGZjYTk2NjA3NzBkZjVkODU3ZjdiZGIyNjgzNjAzOTBjNDU0NTE5NWNiMzY"),

("Angus Beef Meatballs", 10.79, "meats", "local", false, 
"A meatball is ground meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. There are many types of meatballs using different types of meats and spices.", 
"https://media.grocerygateway.com/medias/00204524000007-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzMzQwNXxpbWFnZS9qcGVnfGltYWdlcy9oYzQvaGY2Lzg4NDEyNjY0OTU1MTguanBnfGQ3MDAzZTYzOTg3NmVmOGEzMzMwYWU4MzYxZGMyNDkzNWViZDZhM2I3NWFhZDY5NmM2ZjZhNTNhNTM0MGZiMGI"),

("Pork Tenderloin", 8.81, "meats", "local", false, 
"The pork tenderloin, also called pork fillet or Gentleman's Cut, is a long thin cut of pork. As with all quadrupeds, the tenderloin refers to the psoas major muscle along the central spine portion, ventral to the lumbar vertebrae.", 
"https://media.grocerygateway.com/medias/00203246000005-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyMjA5NHxpbWFnZS9qcGVnfGltYWdlcy9oOGYvaDIyLzg4NDEyNTExMjczMjYuanBnfDIwMDBlMjViY2NhZmMyY2JjZmEzNjAyOWFiYmNiYTRlZjBmNWU2YTg1ZWRiMzllMDRkMGYzYzFmYzc0ODgxZTg"),

("Atlantic Salmon Filet", 17.74, "meats", "imported", true, 
"The Atlantic salmon is a species of ray-finned fish in the family Salmonidae which is the largest salmon and can grow up to a meter in length. It is found in the northern Atlantic Ocean and in rivers that flow into this ocean.", 
"https://media.grocerygateway.com/medias/00204072000009-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wyODg1ODR8aW1hZ2UvanBlZ3xpbWFnZXMvaGM3L2gyOC84ODczNTc4MzY0OTU4LmpwZ3wzZjZlYzgwZDc2Y2Y2MDg3NGNiNDkzZjRjNGFkZjBhZjNhYTBmMWRhYTVkNzdmNTI1NmEyZGQ1YjNlNDg2ZmYx"),

("Chicken Thighs", 12.40, "meats", "local", true, 
"Chicken thighs are sold with bone in and skin on, or boneless and skinless. They are dark meat making them extra flavorful, they contain more fat which ensures they bake up succulent and tasty. Thighs are more forgiving than Chicken Breasts which can more easily be overcooked.", 
"https://media.grocerygateway.com/medias/00209814000002-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w5NzQzMTh8aW1hZ2UvcG5nfGltYWdlcy9oMjAvaGNhLzkxOTY0MzI2ODcxMzQucG5nfGJmZTkxZWIxMWRiMWJjN2QwYTQzZTlhMjc0N2Y1YzM1NjJkMDZhOWEzNjZjNWJiZjEzZGNkNzI1MmEwY2Q4NTU"),

("Chicken Breasts", 15.42, "meats", "local", true, 
"Chicken is the most common type of poultry in the world. Owing to the relative ease and low cost of raising them in comparison to animals such as cattle or hogs, chickens have become prevalent throughout the cuisine of cultures around the world, and their meat has been variously adapted to regional tastes.", 
"https://media.grocerygateway.com/medias/00209810000006-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w5NjgxOTh8aW1hZ2UvcG5nfGltYWdlcy9oZmQvaDc2LzkxOTY0MzMxNDU4ODYucG5nfDdmYjYyNGIwZTAwNjFhZDg2NjQzY2ZkNzE5MzUwYjQ4NmRiN2NlMmUxODk0NDEzMTIwYTAwOWUyM2IyZDBiOGY");





/*
INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("NAME", PRICE, "fruit", "local", false, 
"DESC", 
"URL");
*/