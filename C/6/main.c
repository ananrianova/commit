#include <stdio.h>
#include "island.h"

int main () {
    island amity = {"Дружбы", "09:00", "17:00",NULL};
    island craggy = {"Скалистый", "09:00", "17:00",NULL};
    island isla_nublar = {"Туманный", "09:00", "17:00",NULL};
    island shutter = {"проклятых", "09:00", "17:00",NULL};

    amity.next = &craggy;
    craggy.next = &isla_nublar;
    isla_nublar.next = &shutter;

    display (&amity);
    return 0;
}