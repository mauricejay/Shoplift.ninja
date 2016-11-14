CREATE TABLE users(
                   user_id INTEGER(11) NOT NULL AUTO_INCREMENT, 
                   username VARCHAR(32) NOT NULL, 
                   password VARCHAR(32)  NOT NULL, 
                   first_name VARCHAR(32) NOT NULL, 
                   last_name VARCHAR(32) NOT NULL, 
                   email VARCHAR(1024) NOT NULL,
                   activate BOOLEAN DEFAULT '1' NOT NULL,
                   CONSTRAINT pk_user_id PRIMARY KEY (user_id)
                  );
                   
CREATE TABLE IF NOT EXISTS posts
                   (
                    post_id INTEGER(11) NOT NULL AUTO_INCREMENT,
                    post_type VARCHAR(1),
                    user_id INTEGER(11),
                    image_reference_url TEXT,
                    title VARCHAR(50), 
                    description TEXT,
                    price INTEGER(11),
                    is_sold BOOLEAN DEFAULT '0' NOT NULL,
                    CONSTRAINT pk_post_id PRIMARY KEY (post_id),
                    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users(user_id)
                    );
 
 ALTER TABLE posts ADD IF NOT EXISTS (price INTEGER(11));