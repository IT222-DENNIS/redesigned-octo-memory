<?php 
class User{
    public readonly string $username;
    public readonly UserProfile $profile;
    public function __construct(string $username){
        $this->username = $username;
    }
    public function setUsername(string $username){
        $this->username = $username;
    }
    public function setProfile(UserProfile $profile){
        $this->profile = $profile;
    }
    public function profile() : UserProfile{
        return $this->profile;
    }
}
Class UserProfile{
    public function __construct(public string $name,public string $phone){
        $this->name = $name;
        $this->phone = $phone;
    }
    public function changePhone(string $phone){
        $this->phone = $phone;
    }
    public function changeName(string $name){
        $this->name = $name;
    }
}
$user = new User("johnnibato");
$user->setProfile(new UserProfile("John Doe", "1234567890"));
echo $user->username .'<br>'; 
$user->profile()->changePhone("0987654321");
var_dump($user->profile());

// $user->username = "johndoe";
// $user->setUsername("johndoe");

