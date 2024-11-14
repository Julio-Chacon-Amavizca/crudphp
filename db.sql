CREATE database ejemplo

use ejemplo

create table productos (
id_producto int primary key not null,
nombre varchar(80),
precio double(10,2),
cantidad int

)

select * from productos

insert into productos (id_producto, nombre, precio, cantidad) values (00001, 'teclado', 150.5, 50 )
insert into productos (id_producto, nombre, precio, cantidad) values (00002, 'mouse', 20.2, 20 )
insert into productos (id_producto, nombre, precio, cantidad) values (00003, 'parlante', 45, 50 )
insert into productos (id_producto, nombre, precio, cantidad) values (00004, 'usb', 10, 100 )
insert into productos (id_producto, nombre, precio, cantidad) values (00005, 'disco', 80, 100 )


