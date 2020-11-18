DROP TABLE Product;

CREATE TABLE Product (
    id          int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    prod_name   varchar(30),
    prod_desc   varchar(4000),
    price       float,
    category    varchar(30),
    source      varchar(30),
    organic     boolean DEFAULT false,
    prod_url    varchar(500)
);

INSERT INTO Product (prod_name, prod_desc, price, category, source, organic, prod_url)
VALUES ("Banana", "Rich with potassium and absolutely delicious!", 0.69, "fruit", "imported", false, "https://cdn.mos.cms.futurecdn.net/42E9as7NaTaAi4A6JcuFwG-1200-80.jpg");

INSERT INTO Product (prod_name, prod_desc, price, category, source, organic, prod_url)
VALUES ("Apple", "Rich with vitamin C and crunchy to eat!", 0.49, "fruit", "local", false, "https://cdn3.volusion.com/hckyx.hepad/v/vspfiles/photos/CONC-REDAPPLE-2.jpg?v-cache=1396136943");