/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  07/05/2023 10:30:46 PM                   */
/*==============================================================*/



drop table if exists PLACE_DE_PARKING;

drop table if exists RESERVATION;

drop table if exists TERRAIN_DE_PARKING;

drop table if exists UTILISATEUR;

/*==============================================================*/


/*==============================================================*/
/* Table : PLACE_DE_PARKING                                     */
/*==============================================================*/
create table PLACE_DE_PARKING
(
   ID_PLACE_DE_PARKING  int not null,
   ID_TERRAIN_DE_PARKING numeric(8,0) not null,
   SI_PLACE_DISPONIBLE  bool not null,
   primary key (ID_PLACE_DE_PARKING)
);

/*==============================================================*/
/* Table : RESERVATION                                          */
/*==============================================================*/
create table RESERVATION
(
   ID_PLACE_DE_PARKING  int not null,
   IDE_UTILISATEUR      numeric(8,0) not null,
   HEURE_DE_RESERVATION time,
   DUREE_DE_RESERVATION time,
   DATE_DE_RESERVATION  date,
   primary key (ID_PLACE_DE_PARKING, IDE_UTILISATEUR)
);

/*==============================================================*/
/* Table : TERRAIN_DE_PARKING                                   */
/*==============================================================*/
create table TERRAIN_DE_PARKING
(
   ID_TERRAIN_DE_PARKING numeric(8,0) not null,
   ADRESSE              text,
   IMAGE_TERRAIN        text,
   NBRE_DES_PLACES      numeric(8,0),
   NBRE_DES_PLACES_DISPONIBLES numeric(8,0),
   TYPE_DE_STATIONNEMENT text,
   primary key (ID_TERRAIN_DE_PARKING)
);

/*==============================================================*/
/* Table : UTILISATEUR                                          */
/*==============================================================*/
create table UTILISATEUR
(
   IDE_UTILISATEUR      numeric(8,0) not null,
   NOM_D_UTILISATEUR    text,
   PRENOM_D_UTILISATEUR text,
   MOT_DE_PASSE         text,
   primary key (IDE_UTILISATEUR)
);



alter table PLACE_DE_PARKING add constraint FK_CONTIENT foreign key (ID_TERRAIN_DE_PARKING)
      references TERRAIN_DE_PARKING (ID_TERRAIN_DE_PARKING) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_RESERVATION foreign key (IDE_UTILISATEUR)
      references UTILISATEUR (IDE_UTILISATEUR) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_RESERVATION2 foreign key (ID_PLACE_DE_PARKING)
      references PLACE_DE_PARKING (ID_PLACE_DE_PARKING) on delete restrict on update restrict;

