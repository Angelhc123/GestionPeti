-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS gestion_login;

-- Selección de la base de datos
USE gestion_login;

-- Creación de la tabla de usuarios
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserción de un usuario de ejemplo
INSERT INTO users (name, email, password) VALUES
('Administrador', 'admin@peti.com', '$2y$10$C2VvZcZIzIl9m17a7ZLHPu2t9VwbycmC2sXOdv30md63A1T7hKm0u'); -- Contraseña: admin123

-- Creación de la tabla de sesiones (para el manejo de sesiones del login)
CREATE TABLE IF NOT EXISTS sessions (
    id VARCHAR(255) PRIMARY KEY, -- La clave primaria debe ser VARCHAR(255) para coincidir con el tipo de `id` que Laravel usa para las sesiones
    user_id INT NOT NULL,
    payload TEXT NOT NULL, -- Agregar la columna payload
    last_activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- columna que mantiene el seguimiento de la última actividad
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE -- Para eliminar las sesiones relacionadas cuando un usuario sea eliminado
);


-- Selección de la base de datos
USE gestion_login;

-- Modificación de la tabla de sesiones para agregar las columnas faltantes
ALTER TABLE sessions
ADD COLUMN ip_address VARCHAR(45) NOT NULL AFTER user_id,
ADD COLUMN user_agent TEXT NOT NULL AFTER ip_address;
