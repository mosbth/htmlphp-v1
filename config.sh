#!/bin/sh
#
# Some default configurations needed for each new installation
#
chmod 777 museum/objects 
chmod 644 museum/objects/*

chmod 777 museum/objects_fil 
chmod 644 museum/objects_fil/*

chmod 777 museum/img 
chmod 644 museum/img/*

chmod 777 museum/db 
chmod 666 museum/db/*

chmod 777 example/form/objects
chmod 666 example/form/objects/*

chmod 777 example/sqlite
chmod 666 example/sqlite/*.sqlite
chmod 755 example/sqlite/test_errors

