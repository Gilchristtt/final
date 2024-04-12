-- Table: Roles
CREATE TABLE Roles (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO Roles (role_name) VALUES
    ('Super Admin'),
    ('Admin'),
    ('User');

-- Table: Users
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES Roles(role_id) ON DELETE CASCADE
);

-- Table: Services
CREATE TABLE Services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL
);



-- CREATE TABLE Testimonials (
--     testimonial_id INT AUTO_INCREMENT PRIMARY KEY,
--     user_id INT NOT NULL,
--     testimonial TEXT NOT NULL,
--     rating INT CHECK (rating >= 1 AND rating <= 5) NOT NULL,
--     FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
-- );


-- Table: Testimonials
CREATE TABLE Testimonials ( 
    testimonial_id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL, 
    testimonial TEXT NOT NULL, 
    rating INT NOT NULL, 
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE, 
    CHECK (rating >= 1 AND rating <= 5) 
);


-- Table: Tips
CREATE TABLE Tips (
    tip_id INT AUTO_INCREMENT PRIMARY KEY,
    tip_title VARCHAR(100) NOT NULL,
    tip_content TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

-- Table: Bookings
CREATE TABLE Bookings (
    booking_id INT AUTO_INCREMENT PRIMARY KEY,
    service_id INT NOT NULL,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    message TEXT,
    FOREIGN KEY (service_id) REFERENCES Services(service_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- Table: Products
CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
