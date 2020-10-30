#include <stdio.h>

void secret(){
	system("cat flag");
	printf("babypwn was broken. It's good");
}

void setup() {
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}

int main(){
	setup();
	char s[200];
	puts("Hello");
	puts("What is you name?");
	fgets(s, 0x200, stdin);
	puts("Your name is ");
	puts(s);
	return 0;
}
