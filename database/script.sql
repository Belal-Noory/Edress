CREATE database rudraksh;

CREATE TABLE enquiry(
    id int PRIMARY key AUTO_INCREMENT,
    fname VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    visa VARCHAR(255),
    country VARCHAR(255),
    states int,
    regdate INT detault null
);

CREATE TABLE eligibility(
    id int PRIMARY key AUTO_INCREMENT,
    name VARCHAR(255),
    phone VARCHAR(255),
    email VARCHAR(255),
    age VARCHAR(255),
    education VARCHAR(255),
    experince VARCHAR(255),
    visa VARCHAR(255),
    country VARCHAR(255),
    states int,
    regdate INT detault null
);

CREATE TABLE post(
    id int PRIMARY key AUTO_INCREMENT,
    title VARCHAR(255),
    details text,
    attachment VARCHAR(255),
    regdate BIGINT
);