#include <stdio.h>
#include <stdlib.h>
#include <time.h>
char email[40];
char pass[10];

void setup() {
    setvbuf(stdin, NULL, _IONBF, 0);
    setvbuf(stdout, NULL, _IONBF, 0);
    setvbuf(stderr, NULL, _IONBF, 0);
}


int capcha(){
	puts("###################################");
	puts("###	      CAPCHA          	###");
	puts("###################################");
	char x[15];
	
	char m[15];
	for (int i=0; i<15; i++){
		m[i]=rand()%50+50;
		printf("%d ", m[i]);
	}
	printf("\n");
	puts("Verify please. Enter sequence:");
	scanf("%*c"); 
	//fgets(x, 45, stdin);
	gets(x);
	for (int i=0; i<15; i++){
		if (m[i]!=x[i]){
			puts("Wrong");
			return 0;
		}
	}
	return 1;
}

int calc(int x, int y){
	int z=0;
	z=x*y;
	return z;
}

int main(){
	setup();
	srand(time(NULL));
	int count=0;
	int a,b,c;
	puts("Registration page");
	puts("Enter you email: ");
        fgets(email, 40, stdin);
	puts("Enter you password: ");
        fgets(pass,10, stdin);
	fflush(stdin);
	while (1) {
		fflush(stdin);
		if (count>=3){
			if (!capcha())
				return 0;
		}
		puts("Enter the lengths of the sides: \na:");
		scanf("%d", &a);
		puts("b: ");
		scanf("%d", &b);
		c=calc(a,b);
		printf("c = %d\n",c);
      		count+=1;
        }

        return 0;
}
