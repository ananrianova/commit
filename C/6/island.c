#include <stdio.h>
#include "island.h"

void display (island *start){
    island *i = start;

    for (; i !=NULL;i = i ->next){
        printf("Название: %s, открыто с %s до %s\n ",
        i->name, i->opens, i->closes);
    }
}