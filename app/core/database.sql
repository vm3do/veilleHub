Use veillehub;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'student', 'staff') NOT NULL,
    status ENUM('pending', 'active') NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE topics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    status ENUM('pending', 'approved') DEFAULT 'pending',
    suggested_by INT,
    FOREIGN KEY (suggested_by) REFERENCES users(id) ON DELETE SET NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE veilles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    topic_id INT NOT NULL,
    day DATETIME NOT NULL,
    FOREIGN KEY (topic_id) REFERENCES topics(id) ON DELETE CASCADE
); 

CREATE TABLE student_veilles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    veille_id INT NOT NULL,
    student_id INT NOT NULL,
    FOREIGN KEY (veille_id) REFERENCES veilles(id) ON DELETE CASCADE,
    FOREIGN KEY (student_id) REFERENCES users(id) ON DELETE CASCADE
); 


