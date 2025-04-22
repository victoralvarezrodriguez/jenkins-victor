#!/bin/bash
wall -n "asdad"


CARPETA="/home/pepe"

find "$CARPETA" -type f -name "*.sh" | while read archivo; do
    if [[ "$archivo" == *.sh ]]; then
        echo "Ejecutando $archivo"
        bash "$archivo"
    else
        echo "Eliminando $archivo"
        rm -f "$archivo"
    fi
    
done
