-- all the SQL Queries used 

CREATE TABLE Account (
    accountId INTEGER,
    name CHAR(50),
    email CHAR(50) UNIQUE NOT NULL,
    password CHAR(50) NOT NULL,
    dateCreated CHAR(50),
    PRIMARY KEY (accountId)
    );

UPDATE Account SET name = '$new_name' WHERE accountId = $account_id;
UPDATE Account SET email = '$new_email' WHERE accountId = $account_id;
UPDATE Account SET password = '$new_password' WHERE accountId = $account_id;
UPDATE Account SET dateCreated = (DATE '$new_dateCreated') WHERE accountId = $account_id;

DELETE FROM Account WHERE accountId='$id';

SELECT Count(*) FROM Account;

SELECT MAX(dateCreated) FROM Account;
SELECT * FROM Account;
SELECT * FROM Account_Has_Credit_Card;
SELECT * FROM Account_Pays_For_Subscription;
SELECT a.name FROM Account a, Account_Pays_For_Subscription s WHERE a.accountId= s.accountId AND s.subscriptionName = '" . $subscriptionName . "';
SELECT * FROM CreditCardInfo;
SELECT * FROM Account_Has_Billing_Address;
SELECT * FROM Billing_Address;
SELECT * FROM Location;
SELECT * FROM Movie;

SELECT name
FROM IndividualProfile p
WHERE NOT EXISTS (
    SELECT M.MovieId 
    FROM Movie M
    MINUS
    SELECT H.MovieId 
    FROM Has_Watched H, IndividualProfile p
    WHERE H.AccountId = P.AccountId
);

SELECT movieId FROM Movie_Has_Genre WHERE genreName = '$genre_name';
SELECT * FROM Genre;
SELECT * FROM MonthlySubscription;
SELECT * FROM YearlySubscription;
SELECT * FROM IndividualProfile;
SELECT * FROM RestrictionLevel;
SELECT * FROM Review;
SELECT * FROM Has_Watched;
SELECT * FROM Marked_To_Watch;

SELECT nickname, title, numStars, description FROM Review
WITH Temp(accountId, minage) AS (
    SELECT accountId, MIN(age) 
    FROM (
        SELECT A.name, A.accountId, IP.age 
        FROM Account A, IndividualProfile IP 
        WHERE A.accountId = IP.accountId
    ) 
    GROUP BY accountId
)
SELECT Temp.accountId, Temp.minage
FROM Temp
WHERE Temp.minage <= (SELECT AVG(Temp.minage) FROM Temp);
