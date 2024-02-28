CREATE DATABASE helpdesk;

use helpdesk;

CREATE TABLE roles (
  role_id INT AUTO_INCREMENT PRIMARY KEY,
  role VARCHAR(30) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
----------------------------------------------
CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  role_id INT,
  email VARCHAR(50) NOT NULL, 
  password VARCHAR(50) NOT NULL,

  CONSTRAINT role_id
        FOREIGN KEY (role_id)
        REFERENCES roles (role_id)
        ON DELETE CASCADE ON UPDATE CASCADE 

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE users ADD UNIQUE INDEX(role_id);
ALTER TABLE users ADD UNIQUE INDEX(password);
----------------------------------------------
CREATE TABLE user_data(
  data_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  user_id INT,

  CONSTRAINT fkuser_id
        FOREIGN KEY (user_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE,

  name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  dob DATE NOT NULL,
  address VARCHAR(255) NOT NULL,
  phone_number VARCHAR(30) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE user_data ADD UNIQUE INDEX(user_id);
----------------------------------------------
CREATE TABLE categories(
  category_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  category VARCHAR(100)
);
----------------------------------------------
CREATE TABLE tickets(
  ticket_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  user_id INT,
  
  CONSTRAINT fkkuser_id
        FOREIGN KEY (user_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE, 

  title VARCHAR(50),
  description VARCHAR(255),
  start_time DATETIME,
  last_update DATETIME,
  active boolean DEFAULT true,
  category_id INT,

  CONSTRAINT fkcategory_id
        FOREIGN KEY (category_id)
        REFERENCES categories(category_id)
        ON DELETE CASCADE ON UPDATE CASCADE


) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE tickets ADD INDEX(user_id);
ALTER TABLE tickets ADD UNIQUE INDEX(category_id);
----------------------------------------------
CREATE TABLE session(
  session_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  ticket_id INT,
  customer_id INT,
  employee_id INT,

  CONSTRAINT fkticket_id
        FOREIGN KEY (ticket_id)
        REFERENCES tickets (ticket_id)
        ON DELETE CASCADE ON UPDATE CASCADE, 

  CONSTRAINT fkcustomer_id
        FOREIGN KEY (customer_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE,

  CONSTRAINT fkemployee_id
        FOREIGN KEY (employee_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE session ADD UNIQUE INDEX(ticket_id);
ALTER TABLE session ADD UNIQUE INDEX(customer_id);
ALTER TABLE session ADD UNIQUE INDEX(employee_id);
----------------------------------------------
CREATE TABLE comments(
  comment_id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
  session_id INT,

  CONSTRAINT fksession_id
        FOREIGN KEY (session_id)
        REFERENCES session (session_id)
        ON DELETE CASCADE ON UPDATE CASCADE, 

  comment VARCHAR(255),
  date_time DATETIME,
  author_id INT,

  CONSTRAINT fkauthor_id
        FOREIGN KEY (author_id)
        REFERENCES users (user_id)
        ON DELETE CASCADE ON UPDATE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE comments ADD UNIQUE INDEX(session_id);
ALTER TABLE comments ADD UNIQUE INDEX(author_id);