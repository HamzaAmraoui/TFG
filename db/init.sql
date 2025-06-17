SET FOREIGN_KEY_CHECKS = 0;


CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE IF NOT EXISTS coches (
    id INT PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    version VARCHAR(50),
    precio INT,
    garantia INT,
    codigo VARCHAR(20) UNIQUE,
    existencias INT
);


INSERT INTO coches (marca, modelo, version, precio, garantia, codigo, existencias) VALUES
('Renault', 'Megane', '1.5 dCi 110 CV', 25000, 2, 'A123', 3),
('Renault', 'Megane', '1.6 dCi 130 CV', 28000, 3, 'B456', 2),
('Renault', 'Captur', '1.5 dCi 95 CV', 22000, 2, 'C789', 4),
('Renault', 'Captur', '1.6 dCi 130 CV', 27000, 3, 'D012', 1),
('Citroen', 'C3', '1.2 PureTech 83 CV', 21000, 3, 'E345', 5),
('Citroen', 'C3', '1.6 BlueHDi 100 CV', 23000, 4, 'F678', 2),
('Citroen', 'C4', '1.2 PureTech 100 CV', 26000, 3, 'G901', 1),
('Citroen', 'C4', '1.5 BlueHDi 130 CV', 29000, 4, 'H234', 0);

SET FOREIGN_KEY_CHECKS = 1;
