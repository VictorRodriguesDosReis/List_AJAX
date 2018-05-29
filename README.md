# Test_Lista_AJAX
Test of a list using AJAX, PHP, Javascript and HTML

### Insert ###
When the user write something in the input and click on the button, the text inside of input is sended to the scipt PHP via AJAX, the PHP process the data ans insert into database, after this it do a HTML table row and send as answer to the AJAX, and so the Javascript make the table row inside the table already existing in the HTML.

### Remove ###
In all table row have a 'X' in the last colum, when the user click on it call a Javascript function that will hide the row to the user, the AJAX send the row's id to the PHP, it so change the row's status to '0' (this mean that the row is now disable).


### Script MySQL ###
create database list_ajax\
default character set utf8\  
default collate utf8_general_ci;

use list_ajax;

create table tb_item (\
  cd_item int(3) not null auto_increment,\
  nm_item varchar(50),\
  cd_status tinyint(1) default 1,\
  constraint pk_item\
  	primary key (cd_item)\
)default charset = utf8;
