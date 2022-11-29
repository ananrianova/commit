#include <stdio.h>

int main() {
    int x,y,d;
    float z;
    printf ("Введите x: ");
    scanf("%d", &x);
    printf("Введите y: ");
    scanf("%d", &y);
    printf("Введите действие: \n");
    printf("1 - сложение\n");
    printf("2 - вычитание\n");
    printf("3 - умножение\n");
    printf("4 - деление\n");
    scanf ("%d", &d);
    if (d ==1 ){
    z = x+y;
    printf("%d + %d = %0.f", x, y, z);
    }
    else if (d == 2){
      z = x-y;
    printf("%d - %d = %0.f", x, y, z);   
    }
    else if (d == 3){
      z = x*y;
    printf("%d * %d = %0.f", x, y, z);   
    }
    else if (d == 4){
        if (y ==0){
            printf("На 0 делить нельзя");
        }
        else{
      z = (float)x/(float)y;
    printf("%d / %d = %.2f", x, y, z);  } 
    }
    else {
        printf ("Неверное действие!");
    }
    return 0;

}