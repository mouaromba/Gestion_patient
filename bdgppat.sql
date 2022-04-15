/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  14/04/2022 20:34:30                      */
/*==============================================================*/


drop table if exists Patient;

/*==============================================================*/
/* Table : Patient                                              */
/*==============================================================*/
create table Patient
(
   id                   int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   genre                varchar(254),
   age                  int,
   telephone            int,
   groupeSangin         varchar(254),
   adresse              varchar(254),
   maladie              varchar(254),
   antecedants          varchar(254),
   primary key (id)
);

