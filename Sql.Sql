Create Database usuarios;

use usuarios;

Create table registrados
            (
            Correo varchar(30) not null, 
            Contraseña varchar(20) not null, 
            Nombre varchar(50) not null, 
            Nacimiento date not null);


alter table registrados
    add constraint pk_USER primary key registrados(Correo);

        
