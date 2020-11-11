Drop DATABASE Nominas;
create database NOMINAS charset =utf8 collate=utf8_unicode_ci ;         /* 'CREAR LA BASE DE DATOS NOMINAS'*/
USE NOMINAS;

create table Empleados(                                                   /* 'CREAR LA TABLA EMPLEADOS EN LA BBDD NOMINAS'*/
Cod_empleados INTEGER AUTO_INCREMENT PRIMARY KEY                          COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA,INCREMENTA AUTOMATICAMENTE',
Identidad varchar (25) not null                                           COMMENT 'CAMPO INGRESAR NUMERO DE IDENTIDAD DEL EMPLEADO',
Primer_Nombre varchar(25) not null                                        COMMENT 'CAMPO INGRESAR PRIMER NOMBRE DEL EMPLEADO',
Segundo_Nombre varchar(25) not null                                       COMMENT 'CAMPO INGRESAR SEGUNDO NOMBRE DEL EMPLEADO',                                             
Primer_Apellido varchar(25) not null                                      COMMENT 'CAMPO INGRESAR PRIMER APELLIDO EMPLEADO',
Segundo_Apellido varchar(25) not null                                     COMMENT 'CAMPO INGRESAR SEGUNDO APELLIDO EMPLEADO',
Fecha_nacimiento date not null                                            COMMENT 'FECHA DE NACIMIENTO LA CUAL DEBE SER MENOR O IGUAL A LA FECHA DEL SERVIDOR',
Correo Varchar(30) Unique not null                                        COMMENT 'CORREO ELECTRONICO DEL EMPLEADO',
Direccion varchar(25)                                                     COMMENT 'DIRECCION DEL EMPLEADO',
Telefono varchar(8)                                                       COMMENT 'TELEFONO DEL EMPLEADO',
Sexo varchar(2) not null                                                  COMMENT 'ojo debe ser char con restriccion',
Cuenta_Bancaria varchar(20)                                               COMMENT 'CUENTA BANCARIA DEL EMPLEADO',
Fecha_ingreso date not null                                           COMMENT 'FECHA DE INGRESO DEL EMPLEADO',
Nacionalidad varchar(20)                                                  COMMENT 'NACIONALIDAD DEL EMPLEADO',
Fecha_Deduccion date                                                  COMMENT 'SE ELIGE LA FECHA EN LA QUE SE APLICA LA DEDUCCIÓN', 
Sueldo_base double(20,0)not null                                                         COMMENT 'SUELDO BASE QUE ENDRÁ EL EMPLEADO',
Cod_FormaPago integer                                                     COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA FORMA_PAGO',
Cod_Depto integer                                                         COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA DEPARTAMENTO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                        COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table PagoComplementario(                                               /*COMMENT 'CREAR LA TABLA PAGOCOMPLEMENTARIO EN LA BBDD NOMINAS'*/
Cod_Complementario integer AUTO_INCREMENT  primary key not null                   COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(30)                                                         COMMENT 'SE DESCRIBE QUE TIPO DE COMPLEMENTO SE GENERA'

)ENGINE=INNODB
CHARACTER SET UTF8                                                              COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominasPagosComplementarios(
Cod_N_PAGOS_C INTEGER AUTO_INCREMENT  PRImary key                                   COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Cod_Nomina integer                                                                  COMMENT 'LLAVE FORANEA DE LA TABLA NOMINA GENERAL',
Cod_Complementario integer                                                          COMMENT 'LLAVE FORANEA DE LA TABLA PAGO COMPLEMENTARIO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                              COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;


create table Aumento(                                                     /*COMMENT 'CREAR LA TABLA AUMENTO EN LA BBDD NOMINAS'*/
Cod_Aumento integer AUTO_INCREMENT  primary key not null                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Porcentaje_aumento double(10,2)                                           COMMENT 'PORCENTAJE DE AUMENTO AL CUAL EL EMPLEADO A SIDO SUJETO',                                          
Año date                                                             COMMENT 'AÑO EN EL CUAL SE ESTA EJECUTANDO EL AUMENTO',
Descripcion varchar(20) not null                                          COMMENT 'DESCRIPCION DEL TIPO DE AUMENTO DEL EMPLEADO ',
aplicado varchar(20)                                                      COMMENT 'SE DESCRIBE SI SE APLICÓ O NO EL AUMENTO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                        COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaAumento(                                         /*COMMENT 'CREAR LA TABLA NOMINADEDUCCIONES EN LA BBDD NOMINAS' */
Cod_NominaA     integer                                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Cod_Empleados   integer  not null                                        COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Cod_Aumento integer not null                                         COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Bono double(20,2) not null                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Comision double(20,2) not null                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;



create table Deducciones(                                                /*COMMENT 'CREAR LA TABLA DEDUCCIONES EN LA BBDD NOMINAS'*/
Cod_Deducciones integer primary key not null                             COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(10) not null                                         COMMENT 'DESCRIPCION DEL TIPO DE DEDUCCIÓN QUE SE LE APLICA AL EMPLEADO ',
Porcentaje double(20,2) not null                                         COMMENT 'PORCENTAJE DE LA DEDUCCIÓN ',
Valor int not null                                                        COMMENT 'VALOR DE LA DEDUCCIÓN',
fijo int not null                                                         COMMENT 'VALOR FIJO DE LA DEDUCCIÓN'                                                   
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaDeducciones(                                         /*COMMENT 'CREAR LA TABLA NOMINADEDUCCIONES EN LA BBDD NOMINAS' */
Cod_NominaD     integer                                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Cod_Empleados   integer primary key  not null                                        COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Cod_Deducciones varchar(10)                                          COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
IHSS  double(20,2)                                              COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
RAP   double(20,2)                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA',
Total_Deducciones   double(20,2)                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table NominaGeneral(                                             /* COMMENT 'CREAR LA TABLA NOMINAGENERAL EN LA BBDD NOMINAS'*/
Cod_Nomina integer                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Cod_empleados integer                                                    COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA',
Identidad varchar (25)                                           COMMENT 'CAMPO INGRESAR NUMERO DE IDENTIDAD DEL EMPLEADO',
Primer_Nombre varchar(25)                                         COMMENT 'CAMPO INGRESAR PRIMER NOMBRE DEL EMPLEADO',
Segundo_Nombre varchar(25)                                        COMMENT 'CAMPO INGRESAR SEGUNDO NOMBRE DEL EMPLEADO',                                             
Primer_Apellido varchar(25)                                      COMMENT 'CAMPO INGRESAR PRIMER APELLIDO EMPLEADO',
Segundo_Apellido varchar(25)                                     COMMENT 'CAMPO INGRESAR SEGUNDO APELLIDO EMPLEADO',
Sueldo_base double(20,0)                                          COMMENT 'SUELDO BASE QUE ENDRÁ EL EMPLEADO',
Cant_Horas  integer                                            COMMENT 'SUELDO BASE QUE ENDRÁ EL EMPLEADO',
Costo_U double(20,0)                                          COMMENT 'SUELDO BASE QUE ENDRÁ EL EMPLEADO',
TotalP_HE  double(20,0)                                         COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA',
Total_Devengado double(20,0)                                    COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
IHSS      double(20,0)                                     COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
RAP       double(20,0)                                   COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
Total_Deducciones double(20,0)                                   COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
Total_Pagar double(20,0)                                    COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
Total_Nomina double(20,0)                                    COMMENT 'IMPRIME EL TOTAL DE TODA LA NOMINA',
Fecha_Generada DATE                                                   COMMENT 'IMPRIME LA FECHA EXACTA EN LA QUE SE IMPRIME'

)ENGINE=INNODB  
CHARACTER SET UTF8                                                       COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table Departamento(                                               /*'CREAR LA TABLA DEPARTAMENT EN LA BBDD NOMINAS'*/
Cod_Depto integer primary key                                             COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(20) not null                                          COMMENT 'DESCRiPCION DEL DEPARTAMENT AL CUAL PERTENECE EL EMPLEADO',
Cod_Jefe integer not null                                                  COMMENT 'CODIGO DEL JEFE DEL DEPARTA'
)ENGINE=INNODB
CHARACTER SET UTF8
COLLATE= UTF8_UNICODE_CI;


create table Jornada(                                                  /*COMMENT 'CREAR LA TABLA JORNADA EN LA BBDD NOMINAS'*/
Cod_Jornada integer AUTO_INCREMENT  primary key not null                               COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Tipo_Jornada varchar(20) not null                                      COMMENT 'CAMPO TIPO DE JORNADA'

)ENGINE=INNODB
CHARACTER SET UTF8                                                     COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table HoraExtra(                                             /*COMMENT 'CREAR LA TABLA HORA_EXTRA EN LA BBDD NOMINAS'*/
Cod_HExtra integer AUTO_INCREMENT  primary key NOT NULL                               COMMENT 'COMMENT CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Cod_Jornada integer                                                   COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA',
Cod_empleados integer                                                  COMMENT 'CAMPO QUE SE USA COMO LLAVE FORANEA DE LA TABLA EMPLEADOS',
Sueldo_Ordinario double(20,0) not null                                       COMMENT 'SUELDO BASE DE EMPLEADO',
Sueldo_Diario double(20,0) not null                                          COMMENT 'SUELDO DIARIO DEL EMPLEADO',
Sueldo_Hora double(20,0) not null                                            COMMENT 'SUELDO POR HORA DEL EMPLEADO',
Porce_Hora_Extra double(20,0) not null                                       COMMENT 'PORCENTAJE HORA EXTRA',
pago_Hora double(20,0) not null                                                     COMMENT 'PAGO POR HORA EXTRA',
Numero_horas integer not null                                          COMMENT 'CAMPO NUMERO DE HORAS TRABAJADAS',
Total_HE double(20,0)    not null                                            COMMENT 'TOTAL A PAGAR POR HORAS EXTRAS',
fecha date                                                             COMMENT 'LA FECHA EN QUE SE REALIZÓ LA HORA EXTRA'
)ENGINE=INNODB
CHARACTER SET UTF8                                                    COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;



create table FormaPago(                                                /*COMMENT 'CREAR LA TABLA FORMAPAGO EN LA BBDD NOMINAS' */
Cod_FormaPago integer primary key                                      COMMENT'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(30)                                                COMMENT 'SE ESTABLECE EL TIPO DE PAGO, YA SEA QUINCENAL Ó MENSUAL' 
)ENGINE=INNODB
CHARACTER SET UTF8                                                  COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;


create table usuario(                                               /*COMMENT 'CREAR LA TABLA USUARIO EN LA BBDD NOMINAS'*/
Cod_Usuario integer primary key NOT NULL                            COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Usuario varchar(20) not null                                        COMMENT 'NOMBRE PARA INICIO DE SESION DE USUARIO',
Password varchar(20)not null                                        COMMENT 'CONTRASEÑA PARA INICIO DE SESION',
Correo varchar(20)not null                                          COMMENT 'CORREO ELECTRONICO DEL USUARIO, AYUDARA PARA RECUPERACION',
Cod_rol integer                                                     COMMENT 'PARA IDENTIFICAR SIES USUARIO NORMAL Ó ADMINISTRADOR',
Cod_empleados integer                                               COMMENT 'CAMPO UTILIZADO COMO LLAVE FORANEA DE LA TABLA EMPLEADOS' 
)ENGINE=INNODB
CHARACTER SET UTF8                                                  COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table rol(                                                   /*COMMENT 'CREAR LA TABLA ROL EN LA BBDD NOMINAS' */
Cod_rol integer primary key                                         COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA' ,
Descripcion varchar (20)                                            COMMENT 'SE DESCRIBE EL TIPO DE ROL QUE SE LE ASIGNA A CADA EMPLEADO'
)ENGINE=INNODB
CHARACTER SET UTF8                                                  COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI; 

create table rolPrivilegios(                                        /*COMMENT 'CREAR LA TABLA ROLPRIVILEGIOS EN LA BBDD NOMINAS' */
Cod_privilegios integer                                             COMMENT 'SE USA COMO LLAVE FORANEA DE LA TABLA PRIVILEGIOS',
Cod_rol integer                                                     COMMENT 'SE USA COMO LLAVE FORANEA DE LA ROL'

)ENGINE=INNODB
CHARACTER SET UTF8                                                  COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;

create table privilegios(                                           /*COMMENT 'CREAR LA TABLA PRIVILEGIOS EN LA BBDD NOMINAS' */
Cod_privilegios integer primary key                                 COMMENT 'CAMPO QUE SE USA COMO LLAVE PRIMARIA',
Descripcion varchar(20)                                             COMMENT 'SE USA PARA DAR PERMISOS DE LECTURA A CIERTOS USUSARIOS'
                                                                    
)ENGINE=INNODB
CHARACTER SET UTF8                                                  COMMENT '(JUEGO DE CARACTERES CODIFICADOS UNIVERSALES ) : 8 BITS ',
COLLATE= UTF8_UNICODE_CI;


#Crear llave foranea de Cod_FormaPago en la tabla Empleados con referencia de la tabla FormaPago
alter table Empleados ADD FOREIGN KEY (Cod_FormaPago) REFERENCES FormaPago(Cod_FormaPago);
#Crear llave foranea de Cod_empleados en la tabla HoraExtra con referencia de la tabla Empleados
alter table HoraExtra ADD FOREIGN KEY (Cod_empleados) REFERENCES Empleados(Cod_empleados);
alter table HoraExtra ADD FOREIGN KEY (Cod_Jornada) REFERENCES Jornada(Cod_Jornada);
#Crear llave foranea de Cod_empleados en la tabla Jornada con referencia de la tabla Empleados
#Crear llave foranea de Cod_empleados en la tabla nominaGeneral con referencia de la tabla empleados

#Crear llave foranea de Cod_Aumento en la tabla NominaGeneral con referencia de la tabla Aumento
#Crear llave foranea de Cod_Nomina en la tabla NominaDeducciones con referencia de la tabla NominaGeneral
#Crear llave foranea de Cod_Deducciones en la tabla NominaDeducciones con referencia de la tabla Deducciones

#Crear llave foranea de Cod_Nomina en la tabla NominasPagosComplementarios con referencia de la tabla NominaGeneral

#Crear llave foranea de Cod_Complementario en la tabla NominasPagosComplementarios con referencia de la tabla PagoComplementario
alter table NominasPagosComplementarios add  foreign key (Cod_Complementario) references PagoComplementario(Cod_Complementario);
#Crear llave foranea de Cod_Depto en la tabla Empleados con referencia de la tabla Departamento
alter table Empleados add  foreign key (Cod_Depto) references Departamento(Cod_Depto);
#Crear llave foranea de Cod_Tipo_HE en la tabla HoraExtra con referencia de la tabla TipoHoraExtra

#Crear llave foranea de Cod_Empleados en la tabla Usuario con referencia de la tabla Empleados
alter table Usuario add  foreign key (Cod_empleados) references Empleados(Cod_empleados);
#Crear llave foranea de Dod_rol en la tabla Usuario con referencia de l atabla rol
alter table Usuario add  foreign key (Cod_rol) references rol(Cod_rol);
#Crear lave foranea de Cod_rol en la tabla rolPrivilegios con referencia de la tabla rol
alter table rolPrivilegios add  foreign key (Cod_rol) references rol(Cod_rol);
#Crear llave foranea de Cod_Privilegios en la tabla rol_Privilegios con referencia de la tabla privilegios
alter table rolPrivilegios add  foreign key (Cod_privilegios) references privilegios(Cod_Privilegios);

INSERT INTO `rol` (`Cod_rol`, `Descripcion`) VALUES ('1000', 'Administrador'), ('2000', 'Empleado_Normal');
INSERT INTO `privilegios` (`Cod_privilegios`, `Descripcion`) VALUES ('1', 'Modificacion'), ('2', 'Lectura');
INSERT INTO `rolprivilegios` (`Cod_privilegios`, `Cod_rol`) VALUES ('1', '1000'), ('2', '2000');
INSERT INTO `formapago` (`Cod_FormaPago`, `Descripcion`) VALUES ('1', 'Mensual'), ('2', 'Quincenal');
INSERT INTO `departamento` (`Cod_Depto`, `Descripcion`, `Cod_Jefe`) VALUES ('1', 'Administración', '1'), ('2', 'Contabilidad', '2'),('3', 'Tecnologia', '3');

INSERT INTO `jornada` (`Cod_Jornada`, `Tipo_Jornada`) VALUES ('1', 'Diurna'),('2', 'Nocturna'),('3', 'Mixta');
INSERT INTO `deducciones` (`Cod_Deducciones`, `Descripcion`, `Porcentaje`, `Valor`, `fijo`) VALUES ('1', 'IHSS', '3.5', '0', '0'),('2', 'RAP', '1.5', '0', '0');

#TRIGGER
CREATE TRIGGER EMPLEADOS AFTER INSERT ON Empleados FOR EACH ROW 
INSERT INTO NominaGeneral(Cod_Nomina,Cod_empleados,Identidad,Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Sueldo_base) 
VALUES ('1',NEW.Cod_empleados,NEW.Identidad,NEW.Primer_Nombre,NEW.Segundo_Nombre,NEW.Primer_Apellido,NEW.Segundo_Apellido,NEW.Sueldo_base);

#DELIMITER $$
#CREATE TRIGGER HORASEXTRAS AFTER INSERT ON HoraExtra FOR EACH ROW 
#BEGIN
#IF (NEW.Cod_Nomina = 1 ) THEN BEGIN
#INSERT INTO NominaGeneral (Cod_Empleados,Cant_Horas,Costo_U,TotalP_HE) VALUES (Cod_Empleados,NEW.Pago_Hora,NEW.Numero_horas,NEW.Total_HE);

   # END; END IF;
END$$
DELIMITER ;
#CREATE TRIGGER DEDUCIONES AFTER INSERT ON NominaDeducciones FOR EACH ROW 
#INSERT INTO NominaGeneral(IHSS,RAP) VALUES (NEW.IHSS,NEW.RAP);

INSERT INTO `empleados` (`Cod_empleados`, `Identidad`, `Primer_Nombre`, `Segundo_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Fecha_nacimiento`, `Correo`, `Direccion`, `Telefono`, `Sexo`, `Cuenta_Bancaria`, `Fecha_ingreso`, `Nacionalidad`, `Fecha_Deduccion`, `Sueldo_base`, `Cod_FormaPago`, `Cod_Depto`) VALUES ('1', '0819199000066', 'José', 'Mario', 'Gómez', 'López', '1990-11-08 14:08:22', 'josemario123_123@outlook.es', 'Prados Universitarios', '97217988', 'M', '20068043', '2020-10-01', 'Hondureña', '2020-10-30', '20000', '1', '3'),('2', '0801197500555', 'Carlos', 'Manuel', 'Pérez', 'Torres', '1975-09-31', 'mtorres@gmail.com', 'Col. Los Pinos', '99554567', 'M', '345678987652', '2017-10-15', 'Hondureña', '2017-11-30', '11000', '1', '3'),('3', '1516197000304', 'José', 'David', 'Mondragón', 'Turcios', '1970-11-20', 'jdturcios@hotmail.com', 'Los Proceres', '33213456', 'M', '001235467891', '2018-10-15', 'Extranjera', '2018-11-30', '9000', '2', '2'), ('4', '1517199755498', 'Marlon', 'Fernando', 'Ozorto', 'Miñiz', '1997-05-28', 'ozorto1997@yahoo.com', 'Villa Nueva', '98345643', 'M', '335678992387', '2019-05-01', 'Extranjera', '2019-05-15', '10500', '1', '1'),('5', '0321197600354', 'Mauda', 'Patricia', 'Araujo', 'Cubas', '1976-02-21', 'patricia@gmail.com', 'Independencia', '89785676', 'F', '200135678223', '2020-05-15', 'Hondureña', '2020-05-30', '9500', '1', '2');

INSERT INTO `usuario` (`Cod_Usuario`, `Usuario`, `Password`, `Correo`, `Cod_rol`, `Cod_empleados`) VALUES ('1', 'Administrador', '1234', 'josemario123_123@outlook.es', '1000', '1');