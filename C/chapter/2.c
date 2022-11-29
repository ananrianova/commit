#include <stdio.h>
#include <limits.h>
#include <float.h>

int main(){
    printf("Значение INT_MAX равно %i\n", INT_MAX);
    printf("Значение INT_MIN равно %i\n", INT_MIN);
    printf("int занимает %li", sizeof(int));

    printf("Значение FLT_MAX равно %f\n", FLT_MAX);
    printf("Значение FLT_MIN равно %.50F\n", FLT_MIN);
    printf("float занимает %li байт\n", sizeof(float));

    return 0;
}