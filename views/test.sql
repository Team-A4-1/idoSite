-- password sql
SELECT users.id 
from users 
Inner JOIN usernames on users.username=usernames.id 
Inner JOIN passwords on users.username=passwords.id
WHERE usernames.username = "John" AND passwords.password ="Pass123"

--add new user
INSERT INTO `usernames` (username) VALUES ('Samson')
INSERT INTO `passwords` (password) VALUES ('Gertje69')
INSERT INTO `user atributes` (`id`, `rights`, `user id`) VALUES ('1', '1', '1');