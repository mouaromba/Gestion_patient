/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  15/04/2022 09:45:47                      */
/*==============================================================*/


drop table if exists Patient;

/*==============================================================*/
/* Table : Patient                                              */
/*==============================================================*/
create table Patient
(
   id                   int not null AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   genre                varchar(254),
   telephone            int,
   adresse              varchar(254),
   age                  int,
   G_S                  varchar(254),
   antecedent           varchar(254),
   taille               float,
   poid                 float,
   S_M                  varchar(254),
   primary key (id)
);

