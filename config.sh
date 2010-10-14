#!/bin/sh
#
# Some default configurations needed for each new installation
#
chmod 777 museum/objects 
chmod 644 museum/objects/*

chmod 777 museum/objects_fil 
chmod 444 museum/objects_fil/*

cd museum/img && php resize_images.php doit
cd ../..
chmod 777 museum/img 
chmod 777 museum/img/550 
chmod 777 museum/img/250
chmod 777 museum/img/80 
chmod 444 museum/img/*.jpg
chmod 666 museum/img/*/*.jpg

chmod 777 museum/db 
chmod 666 museum/db/*

chmod 777 example/form/objects
chmod 666 example/form/objects/*

chmod 777 example/sqlite
chmod 666 example/sqlite/*.sqlite
chmod 755 example/sqlite/test_errors

rm -rf download
mkdir download
#zip -r download/img_begravningsmuseum.zip img/begravningmuseum/
zip -r download/img_objekt.zip museum/img/
zip -r download/objekt.zip museum/objects_fil/
cp museum/db/museum.sqlite download
zip -r download/artiklar.zip artikel_* museum/artikel
zip -r download/bmo.zip museum artikel_*