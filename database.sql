CREATE DATABASE IF NOT EXISTS precious_lifes;

USE precious_lifes;

CREATE TABLE IF NOT EXISTS usuarios(
    id              int auto_increment not null,
    nombre          varchar(100) not null,
    apellidos       varchar(200) not null,
    username        varchar(200) not null,
    email           varchar(255) not null,
    password        varchar(255) not null,
    imagen          text not null,
    created_at      datetime,
    updated_at      datetime,
    remember_token  varchar(255),

    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS direcciones(
    id              int auto_increment not null,
    colonia         varchar(200) not null,
    calle           varchar(255) not null,
    numero          varchar(20) not null,
    localidad       varchar(255) not null,
    estado          varchar(255) not null,
    pais            varchar(255) not null,
    cp              varchar(20) not null,
    created_at      datetime,
    updated_at      datetime,

    CONSTRAINT pk_direcciones PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS cuentas_bancarias(
    id                      int auto_increment not null,
    nombre_propietario      varchar(255) not null,
    numero_cuenta           varchar(255) not null,
    banco                   varchar(255) not null,
    created_at              datetime,
    updated_at              datetime,

    CONSTRAINT pk_cuentas_bancarias PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS veterinarios(
    id                      int auto_increment not null,
    direccion_id            int,
    cuenta_bancaria_id      int,
    rfc                     varchar(255) not null,
    nombre                  varchar(255) not null,
    nombre_propietario      varchar(255) not null,
    email                   varchar(255) not null,
    password                varchar(255) not null,
    imagen                  text,
    created_at              datetime,
    updated_at              datetime,
    remember_token          varchar(255),

    CONSTRAINT pk_veterinarios PRIMARY KEY(id),
    CONSTRAINT fk_veterinarios_direcciones FOREIGN KEY(direccion_id) REFERENCES direcciones(id),
    CONSTRAINT fk_veterinarios_cuentas_bancarias FOREIGN KEY(cuenta_bancaria_id) REFERENCES cuentas_bancarias(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS animales(
    id                  int auto_increment not null,
    veterinario_id      int not null,
    nombre              varchar(255) not null,
    descripcion         varchar(255) not null,
    condicion           varchar(255) not null,
    necesita            varchar(255) not null,
    imagen              text not null,
    fondos              decimal(10,2) not null,
    created_at          datetime,
    updated_at          datetime,

    CONSTRAINT pk_animales PRIMARY KEY(id),
    CONSTRAINT fk_animales_veterinarios FOREIGN KEY(veterinario_id) REFERENCES veterinarios(id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS transacciones(
    id              int auto_increment not null,
    usuario_id      int not null,
    animal_id       int not null,
    monto           decimal(10,2) not null,
    folio           text not null,
    created_at      datetime,
    updated_at      datetime,

    CONSTRAINT pk_transacciones PRIMARY KEY(id),
    CONSTRAINT fk_transacciones_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_transacciones_animales FOREIGN KEY(animal_id) REFERENCES animales(id)
)ENGINE=InnoDB;
