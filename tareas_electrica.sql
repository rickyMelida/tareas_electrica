create database 	
use tareas_electrica

create table tecnicos (
	id_tecnico int auto_increment,
    nombre varchar(100) not null,
    cargo_t varchar(50) not null,
	turno varchar(50) not null,
    primary key(id_tecnico)
)

create table usuarios (
	id_usuario int(5) auto_increment,
    usuario varchar(50) not null,
    pass varchar(50) not null,
    tecns int not null,
    
    primary key(id_usuario),
    foreign key (tecns) references tecnicos(id_tecnico)
);

show databases

insert into tecnicos(nombre, cargo_t, turno) 
			  values("Camilo Barreto","Senior", "Mañana"),
					("Miler Sosa", "Senior", "Tarde"),
                    ("Luis Cabrera", "Senior", "Noche"),
                    ("Ramon Coronel", "Junior", "Mañana"),
                    ("Santiago Mendez", "Junior", "Mañana"),
                    ("Ricardo Melida", "Junior", "Tarde" ),
                    ("Nicolas Acosta", "Junior", "Tarde"),
                    ("Lazaro Romero", "Junior", "Noche" );

update tecnicos 

alter table tecnicos add cargo_t varchar(50)

update tecnicos set turno = "Manhana" where id_tecnico=5

select * from tecnicos
SELECT * from tecnicos where turno = 'Tarde'
create table tareas (
	id_tarea int auto_increment,
    t_tarea varchar(200) not null,
    estado varchar(50) not null,
    des_tarea text not null,
    fecha date not null,
    
    hora_i time,
    hora_f time,
    horas_h time,
    turno varchar(50) not null,
    
    tecnicos varchar(100) ,
    cargo varchar(100),
    
    primary key(id_tarea)
);

insert into tareas(t_tarea, estado, des_tarea, fecha, hora_i, hora_f, horas_h, turno, tecnicos, cargo)
values("rutinas", "Finalizado", "Rutinas de trafos y generadores","1992-02-12", "13:00", "15:30", "2:00",  "tarde", "Ricardo Mélida", "Junior");

insert into tareas(t_tarea, estado, des_tarea,fecha,  turno)
values("rutinas", "pendiente", "tareas","2019-10-20" , "tarde");

insert into usuarios(usuario, pass, tecns) 
		values('turnoMañana', 'homero', '1'),
			  ('turnoTarde', '1975', '2'),
			  ('turnoNoche', 'LuisC', '3');

select * from tareas


select * from usuarios where usuario='turnoMañana' and pass='homero'


delete from tecnicos where id_tecnico > 9