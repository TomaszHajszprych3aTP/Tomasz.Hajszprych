CREATE DATABASE logins;
USE logins
CREATE TABLE loginInfo(
    id INT PRIMARY KEY AUTO_INCREMENT,
    log VARCHAR(255),
    pass VARCHAR(255)
);


INSERT INTO loginInfo (log, pass) VALUES
    ('login1', 'pass1'),
    ('login2', 'pass2'),
    ('login3', 'pass3');
