CREATE TABLE income (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(100),
    amount DECIMAL(10,2) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    description TEXT
);

CREATE TABLE expense (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(100),
    amount DECIMAL(10,2) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    description TEXT
);

INSERT INTO income (type, amount, date, description)
                    VALUES ('$type', '$amount', '$date', '$desc')

INSERT INTO expense (type, amount, date, description)
                    VALUES ('$type', '$amount', '$date', '$desc')