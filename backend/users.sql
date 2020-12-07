DROP TABLE Users;

/* Creating the Users table to keep track of the users registered on the site */
CREATE TABLE Users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL
);



/* Dummy test account */
/* Username: testuser1@example.com */
/* Password: password */
INSERT INTO Users (email, `password`, firstname, lastname) VALUES ('testuser1@example.com', '$2y$10$hQt.zVXBJD1OQPgA1d3squOIHtVd77BppWyBr3nAW3oWzdb2lG5mG', 'Test', 'UserOne');