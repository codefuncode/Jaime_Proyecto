CREATE TABLE Cliente (
		id_cliente int(11) NOT NULL AUTO_INCREMENT,
		nombre VARCHAR(10) NOT NULL,
		apellidos VARCHAR(10) NOT NULL,
		inicial CHAR NULL,
		apodo VARCHAR(10) NULL,
		direccion_postal VARCHAR(255) NOT NULL,
		codigo_area VARCHAR(10) NOT NULL,
		direccion_fisica VARCHAR(255) NOT NULL,
		pueblo VARCHAR(20) NOT NULL,
		fecha de naciminto DATE NOT NULL,
		genero VARCHAR(8) NOT NULL,
		email VARCHAR(255) NULL,
		telefono VARCHAR(10) NULL,
		ocupacion VARCHAR(30) NULL,
		PRIMARY KEY (id_cliente)
);




CREATE TABLE Visita (
    id_visita int(11) NOT NULL AUTO_INCREMENT,
    id_cliente int(11) NOT NULL,
    razon_visita LONGTEXT NOT NULL,
    estado_visita VARCHAR(20) NOT NULL,
    facha_visita DATETIME NOT NULL,
    PRIMARY KEY (id_visita),
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)
);




CREATE TABLE Casos (
	--  id de caso se udsa numero de record para efectos 
    id_caso int(11) NOT NULL AUTO_INCREMENT,
    id_cliente int(11) NOT NULL,
    id_visita int(11) NOT NULL,
    id_tipo_caso int(11) NOT NULL,
    PRIMARY KEY (id_visita),
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)    
    FOREIGN KEY (id_visita) REFERENCES Visita(id_visita)
    FOREIGN KEY (id_tipo_caso) REFERENCES TipoCaso(id_tipo_caso)
 
);


CREATE TABLE TipoCaso (
    id_tipo_caso int(11) NOT NULL AUTO_INCREMENT,
    tipo_caso VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_visita)
  
);



-- ====================================
-- NOTA Analizar mejor
CREATE TABLE Documento (
    id_documento int(11) NOT NULL AUTO_INCREMENT,
    id_cliente int(11) NOT NULL ,
    directorio VARCHAR(20) not null,
    id_caso int(11) NOT NULL,
    id_tipo_caso int(11) NOT NULL,
    subdirectorio_caso VARCHAR(20),
    subdirectorio_tipocaso VARCHAR(20),
    url_fichero VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_documento)
    FOREIGN KEY (id_tipo_caso) REFERENCES TipoCaso(id_tipo_caso)
    FOREIGN KEY (id_caso) REFERENCES Casos(id_caso)
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente)

);
-- ====================================

CREATE TABLE Abogado (
	id_abogado int(11) NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(10) NOT NULL,
	apellidos VARCHAR(10) NOT NULL,
	id_especialidad int(11) NULL,
	FOREIGN KEY (id_especialidad) REFERENCES Especialidad(id_especialidad)
);

CREATE TABLE Especialidad (
    id_especialidad int NOT NULL,
    especialidad varchar(255) NOT NULL,
    PRIMARY KEY (id_especialidad)

);


CREATE TABLE Usuario (
    id_usuario int NOT NULL,
    usuario int NOT NULL,
    id_tipo_usuario int(11) NOT NULL,
    PRIMARY KEY (id_usuario)
    FOREIGN KEY (id_tipo_usuario) REFERENCES TipoUsuario(id_tipo_usuario)
);

CREATE TABLE TipoUsuario (
    id_tipo_usuario int NOT NULL,
    tipo_usuario varchar(10),
    PRIMARY KEY (id_tipo_usuario)
);





