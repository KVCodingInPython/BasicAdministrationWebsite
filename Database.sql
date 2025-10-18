CREATE DATABASE Users;
CREATE TABLE Users (
    Username VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255),
    Gender VARCHAR(255),
    Country VARCHAR(255),
    City VARCHAR(255),
    Age INT,
    PRIMARY KEY (Username)
);