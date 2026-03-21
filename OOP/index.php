<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>WELCOME TO OOP</h1>
    <?php include 'class.php'; ?>
    <?php 
    //create account
    $account3 = new Account("789");
    $account4 = new Account("012");

    //create bank account
    $saveAccount = new SavingAccount(100, 5);
    $checkAccount = new CheckingAccount(100, 50);

    echo "<h3>Saving Account</h3>";

    $saveAccount->transaction(500, "deposit");
    $saveAccount->transaction(200, "withdraw");
    $saveAccount->addInterest();

    echo " Interest Rate ". $saveAccount->getInterestRate() . "%<br>";
    echo "Balance: $" . $saveAccount->getBalance();

    echo "<h3>Checking Account</h3>";
    $checkAccount->transaction(300, "deposit");
    $checkAccount->withdraw(400);
    echo "Minimum Balance: $" . $checkAccount->getMinBalance() . "<br>";
    echo "Balance: $" . $checkAccount->getBalance() . "<br>";

    // $account1->accountNumber = "456";
    // $account1->balance = 2000;
    // $account1->deposit(100)
    //         ->deposit(200);
    // $account1->withdraw(300);
    // $account1->transaction(100, "deposit");
    // $account1->transaction(200, "deposit");
    // $account1->transaction(30, "withdraw");
    

    // echo "Account Number: " . $account->accountNumber . "<br>";
    // echo "Balance: " . $account->getBalance(). "<br>";
    // echo "<br>";
    // echo "Account Number: " . $account1->accountNumber . "<br>";
    // echo "Balance: " . $account1->getBalance(). "<br>";

    // $customer = new Customer(" Jane Doe ", "jane@example.com", "123-456-7890", "123 Main St");
    // // $customer->setName(" John Doe ");
    // echo "<br>";
    // echo "Customer Name: " . $customer->getName() . "<br>";
    // echo "Customer Email: " . $customer->getEmail() . "<br>";
    // echo "Customer Phone: " . $customer->getPhone() . "<br>";
    // echo "Customer Address: " . $customer->getAddress() . "<br>";
    ?>

</body>
</html>