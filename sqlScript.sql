CREATE TABLE Account (
    name CHAR(50),
    email CHAR(50) NOT NULL,
    password CHAR(50) NOT NULL,
    dateCreated DATE,
    accountId INTEGER,
    PRIMARY KEY (accountId)
);

CREATE TABLE Account_Has_Credit_Card (
    accountId INTEGER,
	cardId INTEGER,
    PRIMARY KEY(accountId, cardId),
    FOREIGN KEY(accountId) REFERENCES Account ON DELETE CASCADE
);

CREATE TABLE BillingAddress (
    addressId INTEGER,
    streetNo INTEGER NOT NULL,
    streenName CHAR(50) NOT NULL,
    postalCode CHAR(20) NOT NULL UNIQUE,
    PRIMARY KEY (addressId)
);

CREATE TABLE Location (
    postalCode CHAR(20),
    city CHAR(50) NOT NULL,
    state CHAR(50) NOT NULL,
    country CHAR(50) NOT NULL,
    PRIMARY KEY (postalCode),
    FOREIGN KEY (postalCode) REFERENCES BillingAddress(postalCode) ON DELETE CASCADE
);

CREATE TABLE RestrictionLevel (
    age INTEGER,
    restrictionLevel CHAR(25) NOT NULL,
    PRIMARY KEY (age)
);

CREATE TABLE IndividualProfile (
    accountId INTEGER,
    nickname CHAR(50),
    dateCreated DATE NOT NULL,
    age INTEGER NOT NULL,
    PRIMARY KEY (accountId, nickname),
    FOREIGN KEY (accountId) REFERENCES Account ON DELETE CASCADE,
    FOREIGN KEY (age) REFERENCES RestrictionLevel(age) ON DELETE CASCADE
);

CREATE TABLE CreditCardInfo (
    name CHAR(50),
	num INTEGER NOT NULL, 
	expiryDate DATE NOT NULL, 
	cardId INTEGER, 
	PRIMARY KEY (cardId)
);

CREATE TABLE Account_Has_Billing_Address (
	accountId INTEGER NOT NULL,
	addressId INTEGER NOT NULL,
	PRIMARY KEY(accountId, addressId),
	FOREIGN KEY (accountId) REFERENCES Account ON DELETE CASCADE, 
	FOREIGN KEY (addressId) REFERENCES BillingAddress ON DELETE CASCADE
); 

CREATE TABLE Movie (
    movieId INTEGER,
    title CHAR(50) NOT NULL,
    maturityRating CHAR(2) NOT NULL,
    description CHAR(1000) NOT NULL,
    releaseDate DATE NOT NULL,
    PRIMARY KEY (movieId)
);

CREATE TABLE Review (
    reviewId INTEGER,
    accountId INTEGER,
    nickname CHAR(50),
    movieId INTEGER,
    title CHAR(50) NOT NULL,
    numStars INTEGER NOT NULL,
    description CHAR(1000),
    dateCreated DATE NOT NULL,
    PRIMARY KEY (reviewId),
    FOREIGN KEY (accountId, nickname) REFERENCES IndividualProfile(accountId, nickname) ON DELETE CASCADE,
    FOREIGN KEY (movieId) REFERENCES Movie ON DELETE CASCADE
);

CREATE TABLE Has_Watched (
    movieId INTEGER,
    accountId INTEGER,
    nickname CHAR(50),
    PRIMARY KEY (movieId, accountId, nickname),
    FOREIGN KEY (movieId) REFERENCES Movie(movieId) ON DELETE CASCADE,
    FOREIGN KEY (accountId, nickname) REFERENCES IndividualProfile(accountId, nickname) ON DELETE CASCADE
);

CREATE TABLE Marked_To_Watch (
    movieId INTEGER,
    accountId INTEGER,
    nickname CHAR(50),
    PRIMARY KEY (movieId, accountId, nickname),
    FOREIGN KEY (movieId) REFERENCES Movie(movieId) ON DELETE CASCADE,
    FOREIGN KEY (accountId, nickname) REFERENCES IndividualProfile(accountId, nickname) ON DELETE CASCADE
);

CREATE TABLE Genre (
    name CHAR(50),
    PRIMARY KEY (name)
);

CREATE TABLE Movie_Has_Genre (
    genreName CHAR(50),
    movieId INTEGER,
    PRIMARY KEY (genreName, movieId),
    FOREIGN KEY (genreName) REFERENCES Genre(name) ON DELETE CASCADE,
    FOREIGN KEY (movieId) REFERENCES Movie ON DELETE CASCADE
);

CREATE TABLE Subscription (
    subscriptionType CHAR(50),
    rate INTEGER,
    PRIMARY KEY (subscriptionType, rate)
);

CREATE TABLE Account_Pays_For_Subscription (
    accountId INTEGER,
    subscriptionType CHAR(50),
    rate INTEGER,
    startDate DATE NOT NULL,
    PRIMARY KEY (accountId),
    FOREIGN KEY (accountId) REFERENCES Account ON DELETE CASCADE,
    FOREIGN KEY (subscriptionType, rate) REFERENCES Subscription ON DELETE CASCADE
);

CREATE TABLE MonthlySubscription (
    subscriptionType CHAR(50),
    rate INTEGER,
    PRIMARY KEY (subscriptionType, rate),
    FOREIGN KEY (subscriptionType, rate) REFERENCES Subscription(subscriptionType, rate) ON DELETE CASCADE
);

CREATE TABLE YearlySubscription (
    subscriptionType CHAR(50),
    rate INTEGER,
    PRIMARY KEY (subscriptionType, rate),
    FOREIGN KEY (subscriptionType, rate) REFERENCES Subscription (subscriptionType, rate)ON DELETE CASCADE
);

-- Insert into Account
INSERT INTO Account
VALUES ('Frank Buffay', 'frankmelts@gmail.com', 'querty123', (DATE '2020-01-13'), 773619);

INSERT INTO Account
VALUES ('Monical Gell', 'moniclean@gmail.com', 'hu!e34f', (DATE '2019-12-29'), 348273);

INSERT INTO Account
VALUES ('Ross Green', 'dinosaurs@gmail.com', 'be49x@', (DATE '2015-07-07'), 599381);

INSERT INTO Account
VALUES ('Jill Hope', 'ilikeboats@yahoo.com', 'boatsrcool2', (DATE '2021-06-14'), 112085);

INSERT INTO Account
VALUES ('Aaron Wu', 'aawu@hotmail.com', 'querty123', (DATE '2016-10-11'), 169420);

-- Insert into Account_Has_Credit_Card
INSERT INTO Account_Has_Credit_Card
VALUES (773619, 30424);

INSERT INTO Account_Has_Credit_Card
VALUES (348273, 29193);

INSERT INTO Account_Has_Credit_Card
VALUES (599381, 8392);

INSERT INTO Account_Has_Credit_Card
VALUES (112085, 42037);

INSERT INTO Account_Has_Credit_Card
VALUES (169420, 13048);

-- Insert into BillingAddress
INSERT INTO BillingAddress
VALUES (380132, 890, 'Wilson Ave', '23666');

INSERT INTO BillingAddress
VALUES (811626, 1011, 'Portland Dr.', '42240');

INSERT INTO BillingAddress
VALUES (296973, 3347, 'McMurray St.', '11784');

INSERT INTO BillingAddress
VALUES (147058, 9974, 'Jensen St.', 'KT9 1NY');

INSERT INTO BillingAddress
VALUES (907743, 46, 'Woodgrove Cres.', 'V5K 7H8');

-- Insert into Location
INSERT INTO Location
VALUES ('23666', 'Hampton', 'Virginia', 'USA');

INSERT INTO Location
VALUES ('42240', 'Hopkinsville', 'Kentucky', 'USA');

INSERT INTO Location
VALUES ('11784', 'Selden', 'New York', 'USA');

INSERT INTO Location
VALUES ('KT9 1NY', 'Chessington', 'Yorkshire', 'England');

INSERT INTO Location
VALUES ('V5K 7H8', 'Vancouver', 'British Columbia', 'Canada');

-- Insert into RestrictionLevel
INSERT INTO RestrictionLevel
VALUES (5, 'Child');

INSERT INTO RestrictionLevel
VALUES (14, 'Teen');

INSERT INTO RestrictionLevel
VALUES (23, 'Adult');

INSERT INTO RestrictionLevel
VALUES (31, 'Adult');

INSERT INTO RestrictionLevel
VALUES (49, 'Adult');

INSERT INTO RestrictionLevel
VALUES (60, 'Adult');

-- Insert into IndividualProfile
INSERT INTO IndividualProfile
VALUES (773619, 'Frankie', (DATE '2020-02-13'), 31);

INSERT INTO IndividualProfile
VALUES (773619, 'Franks Mom', (DATE '2021-01-19'), 60);

INSERT INTO IndividualProfile
VALUES (348273, 'Monica', (DATE '2021-08-10'), 49);

INSERT INTO IndividualProfile
VALUES (599381, 'Rosstopher', (DATE '2020-11-05'), 49);

INSERT INTO IndividualProfile
VALUES (599381, 'Ben', (DATE '2021-08-25'), 5);

INSERT INTO IndividualProfile
VALUES (112085, 'Jill', (DATE '2022-02-02'), 23);

-- Insert into CreditCardInfo
INSERT INTO CreditCardInfo
VALUES ('Frank Buffay', 4732162939273463, (DATE '2022-02-13'), 30424);

INSERT INTO CreditCardInfo
VALUES ('Monica Gell', 318373625499640, (DATE '2025-01-19'), 29193);

INSERT INTO CreditCardInfo
VALUES ('Ross Green', 4555458273075324, (DATE '2023-08-10'), 8392);

INSERT INTO CreditCardInfo
VALUES ('Jill Hope', 349260113782551, (DATE '2024-11-05'), 42037);

INSERT INTO CreditCardInfo
VALUES ('Aaron Wu', 4485087373304222, (DATE '2024-08-25'), 13048);

-- Insert into Account_Has_Billing_Address
INSERT INTO Account_Has_Billing_Address
VALUES (773619, 380132);

INSERT INTO Account_Has_Billing_Address
VALUES (348273, 811626);

INSERT INTO Account_Has_Billing_Address
VALUES (599381, 296973);

INSERT INTO Account_Has_Billing_Address
VALUES (112085, 147058);

INSERT INTO Account_Has_Billing_Address
VALUES (169420, 907743);

-- Insert into Movie
INSERT INTO Movie
VALUES (94805, 'Dirty Dancing', 'M', 'People dance', (DATE '2020-02-13'));

INSERT INTO Movie
VALUES (75836, 'Die Hard', 'R', 'Dying is hard', (DATE '2021-01-19'));

INSERT INTO Movie
VALUES (98451, 'Elmo', 'E', 'Talking puppet', (DATE '2021-08-10'));

INSERT INTO Movie
VALUES (15200, 'Maze Runner', 'PG', 'Mazes n stuff', (DATE '2020-05-11'));

INSERT INTO Movie
VALUES (77138, 'Barnie', 'E', 'Purple Dine', (DATE '2021-08-25'));

-- Insert into Review
INSERT INTO Review
VALUES (215, 773619, 'Frankie', 94805, 'A gem!', 5, 'Loved it!', (DATE '2020-02-13'));

INSERT INTO Review
VALUES (23, 348273, 'Monica', 94805, 'Good one', 4, 'Was cool', (DATE '2021-01-19'));

INSERT INTO Review
VALUES (594, 112085, 'Jill', 75836, 'Bad one', 2, 'Bleh', (DATE '2021-08-10'));

INSERT INTO Review
VALUES (4523, 599381, 'Rosstopher', 77138, 'Hated it', 1, 'Trash >:(', (DATE '2020-11-05'));

INSERT INTO Review
VALUES (1485, 599381, 'Ben', 77138, 'Swell', 4, 'uwu xd', (DATE '2021-08-25'));

-- Insert into Has_Watched
INSERT INTO Has_Watched
VALUES (94805, 773619, 'Frankie');

INSERT INTO Has_Watched
VALUES (94805, 348273, 'Monica');

INSERT INTO Has_Watched
VALUES (75836, 112085, 'Jill');

INSERT INTO Has_Watched
VALUES (77138, 599381, 'Ben');

INSERT INTO Has_Watched
VALUES (94805, 599381, 'Rosstopher');

INSERT INTO Has_Watched
VALUES (75836, 599381, 'Rosstopher');

INSERT INTO Has_Watched
VALUES (98451, 599381, 'Rosstopher');

INSERT INTO Has_Watched
VALUES (15200, 599381, 'Rosstopher');

INSERT INTO Has_Watched
VALUES (77138, 599381, 'Rosstopher');

-- Insert into Marked_To_Watch
INSERT INTO Marked_To_Watch
VALUES (75836, 599381, 'Rosstopher');

INSERT INTO Marked_To_Watch
VALUES (98451, 599381, 'Ben');

INSERT INTO Marked_To_Watch
VALUES (94805, 773619, 'Franks Mom');

INSERT INTO Marked_To_Watch
VALUES (94805, 348273, 'Monica');

INSERT INTO Marked_To_Watch
VALUES (15200, 112085, 'Jill');

-- Insert into Genre
INSERT INTO Genre
VALUES ('Romance');

INSERT INTO Genre
VALUES ('Action');

INSERT INTO Genre
VALUES ('Kids');

INSERT INTO Genre
VALUES ('Comedy');

INSERT INTO Genre
VALUES ('Fantasy');

-- Insert into Movie_Has_Genre
INSERT INTO Movie_Has_Genre
VALUES ('Romance', 94805);

INSERT INTO Movie_Has_Genre
VALUES ('Action', 75836);

INSERT INTO Movie_Has_Genre
VALUES ('Kids', 98451);

INSERT INTO Movie_Has_Genre
VALUES ('Action', 15200);

INSERT INTO Movie_Has_Genre
VALUES ('Comedy', 94805);

INSERT INTO Movie_Has_Genre
VALUES ('Kids', 77138);

-- Insert into Subscription
INSERT INTO Subscription
VALUES ('Starter', 5);

INSERT INTO Subscription
VALUES ('Standard', 10);

INSERT INTO Subscription
VALUES ('Basic', 15);

INSERT INTO Subscription
VALUES ('Premium', 20);

INSERT INTO Subscription
VALUES ('Platinum', 25);

INSERT INTO Subscription
VALUES ('Starter', 55);

INSERT INTO Subscription
VALUES ('Standard', 110);

INSERT INTO Subscription
VALUES ('Basic', 165);

INSERT INTO Subscription
VALUES ('Premium', 220);

INSERT INTO Subscription
VALUES ('Platinum', 275);

-- Insert into MonthlySubscription
INSERT INTO MonthlySubscription
VALUES ('Starter', 5);

INSERT INTO MonthlySubscription
VALUES ('Standard', 10);

INSERT INTO MonthlySubscription
VALUES ('Basic', 15);

INSERT INTO MonthlySubscription
VALUES ('Premium', 20);

INSERT INTO MonthlySubscription
VALUES ('Platinum', 25);

-- Insert into YearlySubscription
INSERT INTO YearlySubscription
VALUES ('Starter', 55);

INSERT INTO YearlySubscription
VALUES ('Standard', 110);

INSERT INTO YearlySubscription
VALUES ('Basic', 165);

INSERT INTO YearlySubscription
VALUES ('Premium', 220);

INSERT INTO YearlySubscription
VALUES ('Platinum', 275);

-- Insert into Account_Pays_For_Subscription
INSERT INTO Account_Pays_For_Subscription
VALUES (773619, 'Starter', 55, (DATE '2020-01-13'));

INSERT INTO Account_Pays_For_Subscription
VALUES (348273, 'Standard', 10, (DATE '2020-01-13'));

INSERT INTO Account_Pays_For_Subscription
VALUES (599381, 'Basic', 15, (DATE '2020-01-13'));

INSERT INTO Account_Pays_For_Subscription
VALUES (112085, 'Premium', 220, (DATE '2020-01-13'));

INSERT INTO Account_Pays_For_Subscription
VALUES (169420, 'Platinum', 275, (DATE '2020-01-13'));