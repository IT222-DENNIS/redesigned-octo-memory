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

    $account3 = new Account("789");
    $account4 = new Account("012");

    $account = new BankAccount(0);
    $account1 = new BankAccount(100);

    $account->accountNumber = "123";
    // $account->balance = 1000;

    $account1->accountNumber = "456";
    // $account1->balance = 2000;

    // $account->deposit(500)
    //         ->deposit(50);
    // $account->withdraw(200);
    $account->transaction(500, "deposit");
    $account->transaction(200, "withdraw");

    // $account1->deposit(100)
    //         ->deposit(200);
    // $account1->withdraw(300);
    $account1->transaction(100, "deposit");
    $account1->transaction(200, "deposit");
    $account1->transaction(30, "withdraw");

    echo "Account Number: " . $account->accountNumber . "<br>";
    echo "Balance: " . $account->getBalance(). "<br>";
    echo "<br>";
    echo "Account Number: " . $account1->accountNumber . "<br>";
    echo "Balance: " . $account1->getBalance(). "<br>";

    $customer = new Customer(" Jane Doe ", "jane@example.com", "123-456-7890", "123 Main St");
    // $customer->setName(" John Doe ");
    echo "<br>";
    echo "Customer Name: " . $customer->getName() . "<br>";
    echo "Customer Email: " . $customer->getEmail() . "<br>";
    echo "Customer Phone: " . $customer->getPhone() . "<br>";
    echo "Customer Address: " . $customer->getAddress() . "<br>";
    ?>

</body>
</html>