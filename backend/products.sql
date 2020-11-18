DROP TABLE Products;

CREATE TABLE Products (
    id          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prod_name   varchar(30),
    price       float,
    category    varchar(30),
    source      varchar(30),
    organic     boolean DEFAULT false,
    prod_desc   varchar(4000),
    prod_url    varchar(500)
);

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Apple", 1.49, "produce", "local", false, 
"An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.", 
"https://media.grocerygateway.com/medias/14135-1-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3w0NjY2MzJ8aW1hZ2UvcG5nfGltYWdlcy9oZDIvaGQ3LzkwMjYyMTg4NTIzODIucG5nfGRiYWQ0ZmJlNzdmOGY0MDcxN2FjMjM0MWQ3YjQ4ZjMzY2U1NzM3ZThhMjgwYTY3MDdmOWZjZjY4NjJmNGVjYjQ");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Strawberries", 1.46, "meats", "local", false, 
"The garden strawberry is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.", 
"https://media.grocerygateway.com/medias/00628055798118-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzMDkxOXxpbWFnZS9qcGVnfGltYWdlcy9oMGEvaDEzLzg4NDE2NDQ1Mzk5MzQuanBnfDU3OWMwZTAxYjBhMDA2ZTdhOTcyOWE4Yzg5NTEwNDMxZWZkNjViYTAwYzdiNTIyYmFkMDc3YzIyNTNhMGY2OWY");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Avocado, organic", 5.99, "meats", "local", true, 
"The avocado, a tree likely originating from south central Mexico, is classified as a member of the flowering plant family Lauraceae. The fruit of the plant, also called an avocado, is botanically a large berry containing a single large seed.", 
"https://media.grocerygateway.com/medias/4225-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNDEwOXxpbWFnZS9qcGVnfGltYWdlcy9oN2YvaDFlLzg4MzYxMzE1NTMzMTAuanBnfDYzZGM5NmM0ZDdmMDRhODkwOTgzY2I0ZTExNDJhNTE0MWMxN2M2ODg3MDcwNTliNWM1MWU5YWQyNGMyZTQxOTI");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Navel Orange", 0.99, "beverages", "imported", false, 
"The orange is the fruit of various citrus species in the family Rutaceae; it primarily refers to Citrus × sinensis, which is also called sweet orange, to distinguish it from the related Citrus × aurantium, referred to as bitter orange. ", 
"https://media.grocerygateway.com/medias/13107-2-base-conversionFormat-1200-conversionFormat.png?context=bWFzdGVyfGltYWdlc3wyNDc1MjZ8aW1hZ2UvcG5nfGltYWdlcy9oNWIvaGUyLzkwMjYyMDg2OTQzMDIucG5nfDZmOWU5YzBjMjNmZjg2ODhkZDgzMDljZjkxODk3MjY4YzA2MzBmYmEyMWYzNWM4NGUwZTExMmY3OTZjNmYwMDk");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Blueberries, organic", 3.99, "dairy", "local", true, 
"Blueberries are perennial flowering plants with blue or purple berries. They are classified in the section Cyanococcus within the genus Vaccinium. Vaccinium also includes cranberries, bilberries, huckleberries and Madeira blueberries. Commercial blueberries—both wild and cultivated —are all native to North America.", 
"https://media.grocerygateway.com/medias/00899062002912-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNjcyNnxpbWFnZS9qcGVnfGltYWdlcy9oYjkvaDA3Lzg4OTUzOTExMzc4MjIuanBnfDJhY2U4OWRjYzYzYjM3MmEzODBhOGYwMTkxYjFmYmQ4MDEyNDBiNTE0Yzc1ODZmZDc0Njc5YTUzNGMyOTg3Mzk");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Seedless Watermelon", 7.99, "dairy", "imported", false, 
"Watermelon is a plant species in the family Cucurbitaceae, a vine-like flowering plant originally domesticated in Africa. It is a highly cultivated fruit worldwide, having more than 1,000 varieties. Watermelon is a scrambling and trailing vine in the flowering plant family Cucurbitaceae.", 
"https://media.grocerygateway.com/medias/629-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNDcyMHxpbWFnZS9qcGVnfGltYWdlcy9oOTUvaGI1Lzg4MzYwODQwMzk3MTAuanBnfGM2Nzk2YmZkZDUxODVhNTBmMjRmMDBkNTViYWZjY2ViNzZlNzBhYTUzODEyYzc4MGZmNmFiZmE0N2UxYzgxZWM");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Golden Pineapple", 4.99, "bakery", "imported", false, 
"The pineapple is a tropical plant with an edible fruit and the most economically significant plant in the family Bromeliaceae. The pineapple is indigenous to South America, where it has been cultivated for many centuries.", 
"https://media.grocerygateway.com/medias/00643126072003-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzOTc3MHxpbWFnZS9qcGVnfGltYWdlcy9oODkvaGQ1Lzg4NDE3MzE4OTk0MjIuanBnfDg3YTlmNzgyY2U5YjFjN2FhMGNjNjg2NGYzYjg1MzAyOGUxNjQ2YjNkOGE0MGU0ZDkyZDU2ODRiZjdiYjE2NDA");

INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("Large Mango", 1.99, "bakery", "imported", false, 
"A mango is a stone fruit produced from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for their edible fruit. Most of these species are found in nature as wild mangoes. The genus belongs to the cashew family Anacardiaceae.", 
"https://media.grocerygateway.com/medias/4959-1-base-conversionFormat-1200-conversionFormat.jpg?context=bWFzdGVyfGltYWdlc3wzNTM2OHxpbWFnZS9qcGVnfGltYWdlcy9oMzcvaDg1Lzg4MzYxODc1NTM4MjIuanBnfDk3ZTUwYzk4NzQ2NGZhMzFiZmQyZDJhNDgwNjFjMDk4YTE4MGNlODU1OGFmZjJiYWFmYmNkZjcwYmFlNTU5YmI");



/*
INSERT INTO Products (prod_name, price, category, source, organic, prod_desc, prod_url)
VALUES ("NAME", PRICE, "fruit", "local", false, 
"DESC", 
"URL");
*/