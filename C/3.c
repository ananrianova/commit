#include <stdio.h>
#include <string.h>

int str_count(char a[], char b[]) {
    int count = 0;
    char *t = a;
    while ((t = t = strstr (t, b)) !=NULL){
        count++;
        t++;
    }
    return count;
}

int main() {
    int count = str_count("Hello", "a");
    printf("%d\n", count)
    return 0;
}