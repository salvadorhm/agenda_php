CREATE TABLE personas(
    id_persona integer PRIMARY KEY AUTOINCREMENT,
    nombre varchar(100) NOT NULL,
    primer_apellido varchar(100) NOT NULL
);

INSERT INTO personas(nombre, primer_apellido) values("Dejah", "Thoris");
INSERT INTO personas(nombre, primer_apellido) values("John", "Carter");
