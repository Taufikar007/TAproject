-->Create TABLESPACE
CREATE TABLESPACE basdat
datafile 'D:\Document\basdat.dbf'
size 30M;

-->create USER
CREATE USER taufikar07052
IDENTIFIED BY taufik123
DEFAULT TABLESPACE basdat
QUOTA 30M ON basdat;

-->Table users
create table hak_akses
(
	id_user integer not null,
	username varchar2(20),
	password varchar2(20)
);

alter table users
add constraint pk_id_user primary key (id_user);

create sequence id_user
minvalue 1
maxvalue 9999
start with 1
increment by 1
cache 20;

create or replace trigger hak_akses_on_insert
before insert on hak_akses
for each row
begin
select id_user.nextval
into :new.id_user
from dual;
end;
/

-->Table Jenis
create table jenis_waktu
(
	id_jenis_waktu integer not null,
	lama_jenis_waktu varchar2(20)
);

alter table jenis_waktu
add constraint pk_id_jenis_waktu primary key (id_jenis_waktu);

create sequence id_jenis_waktu
minvalue 1
maxvalue 9999
start with 1
increment by 1
cache 20;

create or replace trigger jenis_waktu_on_insert
before insert on jenis_waktu
for each row
begin
select id_jenis_waktu.nextval
into :new.id_jenis_waktu
from dual;
end;
/


-->Table Produk
create table waktu
(
	id_waktu integer not null,
	lama_waktu varchar2(20),
	harga_waktu varchar2(20)
);

alter table waktu
add constraint pk_id_waktu primary key (id_waktu);

create sequence id_waktu
minvalue 1
maxvalue 9999
start with 1
increment by 1
cache 20;

create or replace trigger waktu_on_insert
before insert on waktu
for each row
begin
select id_waktu.nextval
into :new.id_waktu
from dual;
end;
/

-->Table Pelanggan
create table pelanggan
(
	id_pelanggan integer not null,
	nama_pelanggan varchar2(20),
	almt_pelanggan varchar2(20),
	tlp_pelanggan number (13)
);

alter table pelanggan
add constraint pk_id_pelanggan primary key (id_pelanggan);

create sequence id_pelanggan
minvalue 1
maxvalue 9999
start with 1
increment by 1
cache 20;


create or replace trigger pelanggan_on_insert
before insert on pelanggan
for each row
begin
select id_pelanggan.nextval
into :new.id_pelanggan
from dual;
end;
/

-->Table Transaksi
ALTER SESSION SET NLS_DATE_FORMAT = 'DD-MON-YYYY HH24:MI:SS';

create table transaksi
(
	id_transaksi integer not null,
	total_harga varchar2(20),
	tgl_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

alter table transaksi
add constraint pk_id_transaksi primary key (id_transaksi);

create sequence id_transaksi
minvalue 1
maxvalue 9999
start with 1
increment by 1
cache 20;


create or replace trigger transaksi_on_insert
before insert on transaksi
for each row
begin
select id_transaksi.nextval
into :new.id_transaksi
from dual;
end;
/