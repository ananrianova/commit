#include <stdio.h>

void go_south_east(int *lat, int *lon)
{
    *lat = *lat -1;
    *lon = *lon +1;
}

int main() {
    int latitude =32;
    int longtude = - 64;
    go_south_east(&latitude, &longtude);

    printf("Стоп! Теперь наши координаты: [%d, %d]\n", latitude, longtude);

return 0;

}