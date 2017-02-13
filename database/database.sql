

-- tabla género musical

CREATE TABLE 'genero_musical' (
      'tipo_cancion' varchar2(50) NOT NULL
    )

-- claves primarias de genero musical
alter table genero_musical add primary key tipo_cancion;


-- tabla es
CREATE TABLE 'es'(
      'tipo_cancion' varchar2(50) NOT NULL,
      'id_cancion' int(25) NOT NULL auto_increment
)
-- claves foraneas de la tabla es
foreign key (tipo_cancion) references genero_musical (tipo_cancion);

-- tabla canciones

CREATE TABLE 'canciones' (
      'id_cancion' int(25) NOT NULL auto_increment,
      'nombre_cancion' varchar2(50) NOT NULL,
      'autores' varchar2(25) NOT NULL,
      'ao_publicacion' int(10),
      'id_genero' varchar2(25) NOT NULL,
      'enlace_youtube' varchar2(50) NOT NULL,
      'puesto' int(10)
)
-- claves primarias de genero musical
alter table canciones add primary key id_cancion;

--tabla hacen

CREATE TABLE 'hacen' (
      'id_cancion' int(25) NOT NULL auto_increment,
      'cod_usuario' int(25) NOT NULL auto_increment
)
--Claves foraneas tabla hacen
foreign key (cod_usuario) references usuarios(cod_usuario);
foreign key (id_cancion) references canciones(id_cancion);

-- tabla usuarios

CREATE TABLE 'usuarios' (
      'cod_usuario' int(25) NOT NULL auto_increment,
      'nombre' varchar2(25) NOT NULL,
      'apellidos' varchar2(25) NOT NULL,
      'correo_electronico' varchar2(25) NOT NULL;
      'password' varchar2(50) NOT NULL
)
--clave primaria de usuarios
alter table usuarios add primary key cod_usuario;

-- tabla valorar

CREATE TABLE 'valorar' (
      'cod_usuario' int(25) NOT NULL auto_increment,
      'id_cancion' int(25) NOT NULL auto_increment
)
--Claves foraneas tabla valorar
foreign key (cod_usuario) references usuarios(cod_usuario);
foreign key (id_cancion) references canciones(id_cancion);

-- tabla concietos

CREATE TABLE 'eventos' (
      'festivales' varchar2(25),
      'conciertos' varchar2(25),
      'Noticias_imp' varchar2(25)
)
