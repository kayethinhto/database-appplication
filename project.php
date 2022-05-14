<!-- Based on oracle-test.php provided in tutorial 7 of cpsc304

  You must change the username and password on the OCILogon below to be your ORACLE username and password -->

  <html>
    <head>
        <title>CPSC 304 Project</title>

    </head>

    <body>
        <h1>CPSC 304 Project</h1>
        <p>By Kaye, Elizabeth, and Denis</p>
        <hr /><hr />

        <h2>Add a New Account (Insert)</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertAccountRequest" name="insertAccountRequest">
            id: <input type="text" name="id"> <br /><br />
            name: <input type="text" name="name"> <br /><br />
            email: <input type="text" name="email"> <br /><br />
            password: <input type="text" name="password"> <br /><br />
            dateCreated: <input type="text" name="dateCreated"> <br /><br />
            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form><hr />

        <h2>Remove an Account (Delete)</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="deleteAccountRequest" name="deleteAccountRequest">
            accID to delete: <input type="text" name="id"> <br /><br />
            <input type="submit" value="Delete" name="deleteSubmit"></p>
        </form><hr />

        <h2>Modify an Existing Account (Update)</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="updateAccountRequest" name="updateAccountRequest">
            accID: <input type="text" name="id"> <br /><br /><br />
            new name: <input type="text" name="name"> <br /><br />
            new email: <input type="text" name="email"> <br /><br />
            new password: <input type="text" name="password"> <br /><br />
            new dateCreated: <input type="text" name="dateCreated"> <br /><br />
            <input type="submit" value="Update" name="updateSubmit"></p>
        </form><hr />

        <h2>Get All Movies of a Certain Genre (Selection)</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayGetMovieByGenreRequest" name="displayGetMovieByGenreRequest">
            movie genre: <input type="text" name="genre"> <br /><br />
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h2>Show Movie Reviews (Projection)</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="showMovieReviewsRequest" name="showMovieReviewsRequest">
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h2>Display Account Names That Purchased Subscriptions (Join)</h2>
        <form method="GET" action="project.php">
            Subscription Type: <input type="text" name="subscriptionType"> <br /><br />
            <input type="hidden" id="displayNamesThatPurchasedSubscriptionRequest" name="displayNamesThatPurchasedSubscriptionRequest">
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h2>Newest Account Creation Date (Aggregation)</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="newestAccountRequest" name="newestAccountRequest">
            <input type="submit" name="countTupleRequest"></p>
        </form><hr />

        <h2>Display Accounts with Minimum Age Less than Average Minimum Age (Nested Aggregation with Group By)</h2>
        <p>Find all accounts for which the youngest age of all the profiles associated with the account is less than the average of all the youngest profiles for all accounts</p>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayAccountsByAgeRequest" name="displayAccountsByAgeRequest">
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h2>Display Profiles That Have Watched Every Movie (Division)</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayProfilesWhoWatchedAllMoviesRequest" name="displayProfilesWhoWatchedAllMoviesRequest">
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h2>Count Accounts</h2>
        <form method="GET" action="project.php">
            <input type="hidden" id="countAccountRequest" name="countAccountRequest">
            <input type="submit" name="countTupleRequest"></p>
        </form><hr /><hr />

        <h1>List All Tuples</h1><hr />

        <h3>Accounts</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayAccountRequest" name="displayAccountRequest">
            <input type="submit" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Account_Has_Credit_Card</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayAccount_Has_Credit_CardRequest" name="displayAccount_Has_Credit_CardRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Account_Pays_For_Subscription</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayAccount_Pays_For_SubscriptionRequest" name="displayAccount_Pays_For_SubscriptionRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>CreditCardInfo</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayCreditCardInfoRequest" name="displayCreditCardInfoRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Account_Has_Billing_Address</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayAccount_Has_Billing_AddressRequest" name="displayAccount_Has_Billing_AddressRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>BillingAddress</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayBillingAddressRequest" name="displayBillingAddressRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Location</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayLocationRequest" name="displayLocationRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>IndividualProfile</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayIndividualProfileRequest" name="displayIndividualProfileRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>RestrictionLevel</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayRestrictionLevelRequest" name="displayRestrictionLevelRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Review</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayReviewRequest" name="displayReviewRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Has_Watched</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayHas_WatchedRequest" name="displayHas_WatchedRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Marked_To_Watch</h3>
        <form method="GET" action="project.php">
            <input type="hidden" id="displayMarked_To_WatchRequest" name="displayMarked_To_WatchRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Movie</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayMovieRequest" name="displayMovieRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Movie_Has_Genre</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayMovie_Has_GenreRequest" name="displayMovie_Has_GenreRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>Genre</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayGenreRequest" name="displayGenreRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>MonthlySubscription</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayMonthlySubRequest" name="displayMonthlySubRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />

        <h3>YearlySubscription</h3>
        <form method="GET" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="displayYearlySubRequest" name="displayYearlySubRequest">
            <input type="submit" value="List" name="displayTupleRequest"></p>
        </form><hr />


        <?php
		//this tells the system that it's no longer just parsing html; it's now parsing PHP

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection.
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function printResult($result) { //prints results from a select statement
            echo "<br>Retrieved data from table demoTable:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["NAME"] . "</td></tr>"; //or just use "echo $row[0]"
            }

            echo "</table>";
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example,
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_emcd4", "a50906841", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        

        /* 

            INDIVIDUAL HELPER FUNCTIONS 

        */
        
        /* 

            DENIS

        */

        // Account table
        // DISPLAY
        function handleAccountDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Account");
            printAccounts($result, "Account"); // TODO
        }

        function printAccounts($result) {
            echo "<br>Retrieved Accounts:<br>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Date Created</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["NAME"] . "</td><td>" . 
                $row["EMAIL"] . "</td><td>" . 
                $row["PASSWORD"] . "</td><td>" . 
                $row["DATECREATED"] . "</td></tr>";
            }

            echo "</table>";
        }
        
        // INSERT
        function handleAccountInsertRequest() {
            global $db_conn;
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $date = $_POST['dateCreated'];
            $id = $_POST['id'];

            executePlainSQL("INSERT INTO Account VALUES ('$name', '$email', '$password', (DATE '$date'), $id)");
            OCICommit($db_conn);
        }

        // UPDATE
        function handleAccountUpdateRequest() {
            global $db_conn;

            $account_id = $_POST['id'];
            $new_name = $_POST['name'];
            $new_email = $_POST['email'];
            $new_password = $_POST['password'];
            $new_dateCreated = $_POST['dateCreated'];

            // you need the wrap the old name and new name values with single quotations
            executePlainSQL("UPDATE Account SET name = '$new_name' WHERE accountId = $account_id");
            executePlainSQL("UPDATE Account SET email = '$new_email' WHERE accountId = $account_id");
            executePlainSQL("UPDATE Account SET password = '$new_password' WHERE accountId = $account_id");
            executePlainSQL("UPDATE Account SET dateCreated = (DATE '$new_dateCreated') WHERE accountId = $account_id");
            //TODO: print confirmation
            OCICommit($db_conn);
        }
        
        // DELETE
        function handleAccountDeleteRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $account_id = $_POST['id'];

            $result = executePlainSQL("DELETE FROM Account WHERE accountId = $account_id");
            //TODO: print confirmation
            OCICommit($db_conn);
        }

        // COUNT
        function handleAccountCountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT Count(*) FROM Account");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The number of tuples in Account: " . $row[0] . "<br>";
            } // DONE
        }

        // AGGREGATION
        function handleNewestAccountRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT MAX(dateCreated) FROM Account");

            if (($row = oci_fetch_row($result)) != false) {
                echo "<br> The most recent account creation was on: " . $row[0] . "<br>";
            } // DONE
        }


        // Account_Has_Credit_Card
        function handleAccount_Has_Credit_CardDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Account_Has_Credit_Card");
            printAccount_Has_Credit_Card($result); // TODO
        }

        function printAccount_Has_Credit_Card($result) {
            echo "<br>Retrieved Accounts and Card IDs:<br>";
            echo "<table>";
            echo "<tr><th>accountId</th><th>cardId</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["CARDID"] . "</td></tr>";
            }

            echo "</table>";
        }


        // Account_Pays_For_Subscription
        function handleAccount_Pays_For_SubscriptionDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Account_Pays_For_Subscription");
            printAccount_Pays_For_Subscription($result); // TODO
        }

        function printAccount_Pays_For_Subscription($result) {
            echo "<br>Retrieved Accounts Paying for Subscriptions:<br>";
            echo "<table>";
            echo "<tr><th>accountId</th><th>subscriptionType</th><th>Rate</th><th>startDate</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["SUBSCRIPTIONTYPE"] . "</td><td>" . 
                $row["RATE"] . "</td><td>" . 
                $row["STARTDATE"] . "</td></tr>";
            }

            echo "</table>";
        }


        // CreditCardInfo
        function handleCreditCardInfoDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM CreditCardInfo");
            printCreditCardInfo($result); // TODO
        }

        function printCreditCardInfo($result) {
            echo "<br>Retrieved Credit Cards:<br>";
            echo "<table>";
            echo "<tr><th>name</th><th>number</th><th>expiryDate</th><th>cardId</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["NAME"] . "</td><td>" . 
                $row["NUM"] . "</td><td>" . 
                $row["EXPIRYDATE"] . "</td><td>" . 
                $row["CARDID"] . "</td></tr>";
            }

            echo "</table>";
        }


        // Account_Has_Billing_Address  
        function handleAccount_Has_Billing_AddressDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Account_Has_Billing_Address");
            printAccount_Has_Billing_Address($result); // TODO
        }

        
        function printAccount_Has_Billing_Address($result) {
            echo "<br>Retrieved Accounts With Billing Address:<br>";
            echo "<table>";
            echo "<tr><th>accountId</th><th>addressId</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["ADDRESSID"] . "</td></tr>";
            }

            echo "</table>";
        }


        // Billing_Address  
        function handleBilling_AddressDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM BillingAddress");
            printBilling_Address($result); // TODO
        }

        
        function printBilling_Address($result) {
            echo "<br>Retrieved Billing Addresses:<br>";
            echo "<table>";
            echo "<tr><th>addressId</th><th>streetNo</th><th>streetName</th><th>postalCode</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["ADDRESSID"] . "</td><td>" . 
                $row["STREETNO"] . "</td><td>" . 
                $row["STREETNAME"] . "</td><td>" . 
                $row["POSTALCODE"] . "</td></tr>";
            }

            echo "</table>";
        }


        // Location
        function handleLocationDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Location");
            printLocation($result); // TODO
        }
        
        function printLocation($result) {
            echo "<br>Retrieved Locations:<br>";
            echo "<table>";
            echo "<tr><th>postalCode</th><th>city</th><th>state</th><th>country</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["POSTALCODE"] . "</td><td>" . 
                $row["CITY"] . "</td><td>" . 
                $row["STATE"] . "</td><td>" . 
                $row["COUNTRY"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handledisplayNamesThatPurchasedSubscriptionRequest() {
            global $db_conn;
            $subscriptionType = $_GET['subscriptionType'];

            $result = executePlainSQL("SELECT a.name FROM Account a, Account_Pays_For_Subscription s WHERE a.accountId= s.accountId AND s.subscriptionType = '" . $subscriptionType . "'");
            printNamesPayingForSubscription($result, $subscriptionType); // TODO
        }

        function printNamesPayingForSubscription($result, $subscriptionType) {
            echo "<br>Account Names Paying For $subscriptionType Subscriptions:<br>";
            echo "<table>";
            echo "<tr><th>Account Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" .
                $row["NAME"] . "</td></tr>";
            }

            echo "</table>";
        }
        
        /* 

            ELIZABETH

        */

        // TODO: ADD handlers here
        function handleIndividualProfileRequestDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM IndividualProfile");
            printIndividualProfile($result);
        }

        function printIndividualProfile($result) {
            echo "<br>Retrieved IndividualProfile:<br>";
            echo "<table>";
            echo "<tr><th>Account ID</th><th>Nickname</th><th>Date Created</th><th>Age</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["NICKNAME"] . "</td><td>" . 
                $row["DATECREATED"] . "</td><td>" . 
                $row["AGE"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleRestrictionLevelDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM RestrictionLevel");
            printRestrictionLevel($result);
        }

        function printRestrictionLevel($result) {
            echo "<br>Retrieved RestrictionLevel:<br>";
            echo "<table>";
            echo "<tr><th>Age</th><th>Restriction Level</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["AGE"] . "</td><td>" . 
                $row["RESTRICTIONLEVEL"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleReviewDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Review");
            printReview($result);
        }

        function printReview($result) {
            echo "<br>Retrieved Review:<br>";
            echo "<table>";
            echo "<tr><th>Review ID</th><th>Account ID</th><th>Nickname</th><th>Movie ID</th><th>Title</th><th>Number of Stars</th><th>Description</th><th>Date Created</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["REVIEWID"] . "</td><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["NICKNAME"] . "</td><td>" . 
                $row["MOVIEID"] . "</td><td>" .
                $row["TITLE"] . "</td><td>" . 
                $row["NUMSTARS"] . "</td><td>" .
                $row["DESCRIPTION"] . "</td><td>" . 
                $row["DATECREATED"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleHas_WatchedDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Has_Watched");
            printHas_Watched($result);
        }

        function printHas_Watched($result) {
            echo "<br>Retrieved Has_Watched:<br>";
            echo "<table>";
            echo "<tr><th>Movie ID</th><th>Account ID</th><th>Nickname</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["MOVIEID"] . "</td><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["NICKNAME"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleMarked_To_WatchDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Marked_To_Watch");
            printMarked_To_Watched($result);
        }

        function printMarked_To_Watched($result) {
            echo "<br>Retrieved Marked_To_Watch:<br>";
            echo "<table>";
            echo "<tr><th>Movie ID</th><th>Account ID</th><th>Nickname</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["MOVIEID"] . "</td><td>" . 
                $row["ACCOUNTID"] . "</td><td>" . 
                $row["NICKNAME"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleShowMovieReviewsRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT nickname, title, numStars, description FROM Review");
            printReviewSelection($result);
        }

        function printReviewSelection($result) {
            echo "<br>Retrieved Reviews:<br>";
            echo "<table>";
            echo "<tr><th>Nickname</th><th>Title</th><th>numStars</th><th>description</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" .
                $row["NICKNAME"] . "</td><td>" .
                $row["TITLE"] . "</td><td>" . 
                $row["NUMSTARS"] . "</td><td>" .
                $row["DESCRIPTION"] . "</td></tr>";
            }

            echo "</table>";
        }

        function handleAccountsByAge() {
            global $db_conn;

            $result = executePlainSQL(
                "WITH Temp(accountId, minage) AS (
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
                WHERE Temp.minage <= (SELECT AVG(Temp.minage) FROM Temp)");

            printAccountsByAge($result);
        }

        function printAccountsByAge($result) {
            echo "<br>Find all accounts for which the age of the youngest profile is younger than the average of all the youngest profiles of all accounts (Nested Aggregation):<br>";
            echo "<table>";
            echo "<tr><th>AccountId</th><th>MinimumAge</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" .
                $row["ACCOUNTID"] . "</td><td>" .
                $row["MINAGE"] . "</td></tr>";
            }

            echo "</table>";
        }
                


        /* 

            KAYE

        */

        // TODO: ADD handlers here
        function handleMovieDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Movie");
            printMovies($result);
        }

        function printMovies($result) {
            echo "<br>Retrieved Movies:<br>";
            echo "<table>";
            echo "<tr><th>MovieID</th><th>Title</th><th>MaturityRating</th><th>Description</th><th>ReleaseDate</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["MOVIEID"] . "</td><td>" . 
                $row["TITLE"] . "</td><td>" . 
                $row["MATURITYRATING"] . "</td><td>" . 
                $row["DESCRIPTION"] . "</td><td>" . 
                $row["RELEASEDATE"] . "</td></tr>";
            }

            echo "</table>";
        }

        //MOVIE_HAS_GENRE HELPER
        function handleMovie_Has_GenreDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Movie_Has_Genre");
            printMovies_Has_Genre($result); // TODO
        }

        function printMovies_Has_Genre($result) {
            echo "<br>Retrieved Movies:<br>";
            echo "<table>";
            echo "<tr><th>GenreName</th><th>MovieID</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["GENRENAME"] . "</td><td>" . 
                $row["MOVIEID"] . "</td></tr>";
            }
            echo "</table>";
        }

        //GENRE HELPER
        function handleGenreDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Genre");
            printGenre($result); // TODO
        }

        function printGenre($result) {
            echo "<br>Retrieved Genres:<br>";
            echo "<table>";
            echo "<tr><th>GenreName</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" . 
                $row["NAME"] . "</td></tr>" ; 
            }
            echo "</table>";
        }

        //MONTHLY SUBSCRIPTION HELPER 
        function handleMonthlySubDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM MonthlySubscription");
            printMonthlySub($result); // TODO
        }

        function printMonthlySub($result) {
            echo "<br>Retrieved Monthly Subscriptions:<br>";
            echo "<table>";
            echo "<tr><th>SubscriptionType</th><th>Rate</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" .  
                $row["SUBSCRIPTIONTYPE"] . "</td><td>" . 
                $row["RATE"] . "</td></tr>";
            }
            echo "</table>";
        }

        //YEARLY SUBSCRIPTION HELPER 
        function handleYearlySubDisplayRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM YearlySubscription");
            printYearlySub($result); // TODO
        }

        function printYearlySub($result) {
            echo "<br>Retrieved Yearly Subscriptions:<br>";
            echo "<table>";
            echo "<tr><th>SubscriptionType</th><th>Rate</th>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                // echo $row[0];
                echo "<tr><td>" .  
                $row["SUBSCRIPTIONTYPE"] . "</td><td>" . 
                $row["RATE"] . "</td></tr>";
            }
            echo "</table>";
        }

        // SELECTION
        function handleGetMovieByGenreRequest() {
            global $db_conn;

            $genre_name = $_GET['genre'];
            
            $result = executePlainSQL(
                "WITH Temp(movieId, title, genreName) AS (
                    SELECT M.movieID, M.title, G.genreName
                    FROM Movie M, Movie_Has_Genre G
                    WHERE M.movieID = G.movieID
                )
                SELECT title, genreName 
                FROM Temp
                WHERE genreName = '$genre_name'");
            printMovieGenres($result, $genre_name);
        }

        function printMovieGenres($result, $genre_name) {
            echo "<br>Movies with genre: " . $genre_name . "<br>";
            echo "<table>";
            echo "<tr><th>MovieTitle</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["TITLE"] . "</td><tr>";
            }

            echo "</table>";
        }

        // DIVISION
        function handleGetProfilesWhoWatchedAllMoviesRequest() {
            global $db_conn;
            
            $result = executePlainSQL(
                "SELECT IP.accountId, IP.nickname
                FROM IndividualProfile IP
                WHERE NOT EXISTS (
                    (SELECT H.movieId
                    FROM Has_Watched H)
                    MINUS
                    (SELECT H.movieId
                    FROM Has_Watched H
                    WHERE H.accountId = IP.accountId AND H.nickname = IP.nickname)
                )");
            printProfilesWhoWatchedAllMovies($result);
        }

        function printProfilesWhoWatchedAllMovies($result) {
            echo "<br>Profiles who have watched every movie:<br>";
            echo "<table>";
            echo "<tr><th>AccountID</th><th>Nickname</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {

                echo "<tr><td>" . 
                $row["ACCOUNTID"] . "</td><td>" .
                $row["NICKNAME"] . "</td><tr>";
            }

            echo "</table>";
        }



        /* 

            END OF INDIVIDUAL HELPER FUNCTIONS
        
        */

        // HANDLE ALL POST ROUTES
        function handlePOSTRequest() {
            if (connectToDB()) {

                // for Account Table
                if (array_key_exists('resetAccountRequest', $_POST)) {
                    handleAccountResetRequest();
                } else if (array_key_exists('updateAccountRequest', $_POST)) {
                    handleAccountUpdateRequest();
                } else if (array_key_exists('insertAccountRequest', $_POST)) {
                    handleAccountInsertRequest();
                } else if (array_key_exists('deleteAccountRequest', $_POST)) {
                    handleAccountDeleteRequest();
                }
                // TODO: add more tables below

                disconnectFromDB();
            }
        }

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                // DENIS
                if (array_key_exists('displayAccountRequest', $_GET)) {
                    handleAccountDisplayRequest();
                }
                if (array_key_exists('countAccountRequest', $_GET)) {
                    handleAccountCountRequest();
                }
                if (array_key_exists('newestAccountRequest', $_GET)) {
                    handleNewestAccountRequest();
                }
                if (array_key_exists('displayAccount_Has_Credit_CardRequest', $_GET)) {
                    handleAccount_Has_Credit_CardDisplayRequest();
                }
                if (array_key_exists('displayAccount_Pays_For_SubscriptionRequest', $_GET)) {
                    handleAccount_Pays_For_SubscriptionDisplayRequest();
                }
                if (array_key_exists('displayCreditCardInfoRequest', $_GET)) {
                    handleCreditCardInfoDisplayRequest();
                }
                if (array_key_exists('displayAccount_Has_Billing_AddressRequest', $_GET)) {
                    handleAccount_Has_Billing_AddressDisplayRequest();
                }
                if (array_key_exists('displayBillingAddressRequest', $_GET)) {
                    handleBilling_AddressDisplayRequest();
                }
                if (array_key_exists('displayLocationRequest', $_GET)) {
                    handleLocationDisplayRequest();
                }
                if (array_key_exists('displayNamesThatPurchasedSubscriptionRequest', $_GET)) {
                    handledisplayNamesThatPurchasedSubscriptionRequest();
                }
                // ELIZABETH
                if (array_key_exists('displayIndividualProfileRequest', $_GET)) {
                    handleIndividualProfileRequestDisplayRequest();
                }
                if (array_key_exists('displayRestrictionLevelRequest', $_GET)) {
                    handleRestrictionLevelDisplayRequest();
                }
                if (array_key_exists('displayReviewRequest', $_GET)) {
                    handleReviewDisplayRequest();
                }
                if (array_key_exists('displayHas_WatchedRequest', $_GET)) {
                    handleHas_WatchedDisplayRequest();
                }
                if (array_key_exists('displayMarked_To_WatchRequest', $_GET)) {
                    handleMarked_To_WatchDisplayRequest();
                }
                if (array_key_exists('showMovieReviewsRequest', $_GET)) {
                    handleShowMovieReviewsRequest();
                }
                if (array_key_exists('displayAccountsByAgeRequest', $_GET)) {
                    handleAccountsByAge();
                }
                // KAYE
                if (array_key_exists('displayMovieRequest', $_GET)) {
                    handleMovieDisplayRequest();
                }
                if (array_key_exists('displayMovie_Has_GenreRequest', $_GET)) {
                    handleMovie_Has_GenreDisplayRequest();
                }
                if (array_key_exists('displayGenreRequest', $_GET)) {
                    handleGenreDisplayRequest();
                }
                if (array_key_exists('displayMonthlySubRequest', $_GET)) {
                    handleMonthlySubDisplayRequest();
                }
                if (array_key_exists('displayYearlySubRequest', $_GET)) {
                    handleMonthlySubDisplayRequest();
                }
                if (array_key_exists('displayGetMovieByGenreRequest', $_GET)) {
                    handleGetMovieByGenreRequest();
                }
                if (array_key_exists('displayProfilesWhoWatchedAllMoviesRequest', $_GET)) {
                    handleGetProfilesWhoWatchedAllMoviesRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit']) || isset($_POST['deleteSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['countTupleRequest']) || isset($_GET['displayTupleRequest'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>
