# sha512-Password-PHP
Hashing Password
1. We take $username and $password from from user input
2. $hashed is hashing with sha512 with username and password concatenation
3. Applying if condition to check user password length because we at least need 64 character to match password
4. If password character length is less than or equal to 64. We change $hashed string character from left with random string equal to length of $password
5. If password character length is greater than or equal to 64. We change $hashed string character from left with random string equal to length of 64
6. In $dbPassword we get encrypted password which we can save into database 

Matching Password

1. We take $username and $password from from user input
2. Get $dbPassword from database
3. $hashed is hashing with sha512 with username and password concatenation
4. Compare $password string length is less than or equal to 64 we trim $dbPassword and $hashed according $password length
5. If  $password string length is greater than 64 we trim $dbPassword and $hashed with 64 character
6. We compare $trim with $dbtrim to match password

Advantages

1. No secrete salt to match password
2. All user input to encrypt password
3. 99.99 percent no chance of rainbow attack on password
4. 99.99 percent no chance of brute force attack on password
5. No direct hash password in to database

Disadvantage

1. Username change affect already saved password
