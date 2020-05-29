create database ApexLegends;
use ApexLegends;

------Leyendas--------
create table Leyendas
(
    id integer,
    Nombre varchar(50),
    Tipo varchar(50),
    Habilidad varchar(50)
);

insert into Leyendas() values(1, "Lifeline", "Soporte", "Dron curativo D.O.C.");
insert into Leyendas() values(2, "Wraith", "Ataque", "En el vacío");
insert into Leyendas() values(3, "Wattson", "Soporte", "Perímetro de seguridad");
insert into Leyendas() values(4, "Crypto", "Reconocimiento", "Dron de vigilancia");
insert into Leyendas() values(5, "Gibraltar", "Tanque", "Cúpula de protección");
insert into Leyendas() values(6, "Revenant", "Ataque", "Silencio");
insert into Leyendas() values(7, "Bloodhound", "Reconocimiento", "Ojo omnisciente");

select * from Leyendas;