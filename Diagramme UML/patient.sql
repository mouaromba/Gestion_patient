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
   gSanguin             varchar(254),
   maladie              varchar(254),
   antecedent           varchar(254),
   taille               float,
   poids                int,
   sMatrimoniale        varchar(254),
   telPersonneProche    int,
   photo                varchar(254),
   primary key (id)
);
