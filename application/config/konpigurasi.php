<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Configure Info Website
$config['nama_admin']       = 'om kepo';
$config['judul']            = 'Curcol Beta';
$config['copyright']        = '2014';
$config['versi']       		= '1'; 
$config['deskripsi']        = 'Hayu curcol bro.';
$config['keywords']         = 'jual beli, ecommers, blog, portal online';
$config['gangerti']			= array('gue ga ngerti cok','lo ngomong naon cok','zz','ape si cok','ga ngarti dah','bahasa planet','ngomong ape si','lo manusia apa manusia','dasar !!','gue kaga ngarti','Ajarin dongse kata katanya :* ');
$config['default_pass']		= "123456";
# Setting Robot #
$config['robot1']			= 'dika'; //lv1
$config['psn_robot1']		= 'halo kak [nama], apa kabar? :>'; //pesan lv1

$config['robot2']			= 'nurjaman'; //lv2
$config['psn_robot2']		= 'halo kak [nama], lagi ngapain? :*'; //pesan lv2

$config['robot3']			= 'rena'; //lv3
$config['psn_robot3']		= 'halo kak [nama], temani aku dong :*'; //pesan lv3

$config['robot4']			= 'fauzan'; //lv4
$config['psn_robot4']		= 'halo kak [nama], cium aku boleh? :>'; //pesan lv4

$config['robot5']			= 'cecep'; //lv5
$config['psn_robot5']		= 'aku mau donk ka dicium kak [nama] :*'; //pesan lv5

$config['robot6']			= 'ikbal'; //lv6
$config['psn_robot6']		= 'kapan kak [nama] cium aku lagi? :('; //pesan lv6

$config['poin']		= 2; //memberi point untuk yang mengajar

# Setting share facebook #
$config['bagikan']	= TRUE;
$acak = array("Lagi boring? ayo gabung sini chatting daripada ga ada kerjaan :p","Kak udah pernah nyobain belum? kalo belum klik dong :)");
shuffle($acak);
$config['pesan_fb']	= $acak[0];
$config['nama_fb']	= "Curcol Beta"; //Judul share
$config['deskripsi_fb']	= "Tempat ngobrolnya para jones (masih bot sih)";
$config['gambar_fb']	= "https://m.ak.fbcdn.net/photos-c.ak/hphotos-ak-xpa1/t39.2080-0/851578_466856573397693_1448133496_n.png"; //url gambar