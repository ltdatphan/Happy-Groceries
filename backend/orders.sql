DROP TABLE Orders;

/* Creating the Orders table to keep track of the orders made by all users registered on the site */
CREATE TABLE Orders (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    purchase_date DATE NOT NULL,
    total FLOAT NOT NULL
);



/* Dummy orders for test account */
/* Username: testuser1@example.com */
/* Password: password */
INSERT INTO Orders (email, purchase_date, total) 
VALUES ('testuser1@example.com', DATE('2020-09-13'), 26.47),
('testuser1@example.com', DATE('2020-09-13'), 15.36),
('testuser1@example.com', DATE('2020-10-01'), 32.98);