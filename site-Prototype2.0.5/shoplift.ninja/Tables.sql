CREATE TABLE user_profile
(

PRIMARY KEY (user_name),
FOREIGN KEY (user_id) REFERENCES users(user_id)
)