#include <stdio.h>

char flag[128];

void vuln()
{
  char buf[128];
  FILE *f = fopen("flag.txt", "r");

  if (!f)
  {
    puts("[ERROR] File don't exist!");
    return;
  }

  fscanf(f, "%s", flag);
  fclose(f);

  puts("[+++] SeNd mE sTrInG [+++]");
  printf("[#]> ");
  fgets(buf, 128, stdin);
  printf("[!] You entered: ");
  printf(buf);
  printf("[#]> ");
  fgets(buf, 128, stdin);
  printf("[!] You entered: ");
  printf(buf);
  printf("\n[+] GoodBye!\n");
}

int main()
{
  setvbuf(stdin, NULL, _IONBF, 0);
  setvbuf(stdout, NULL, _IONBF, 0);

  vuln();

  return 0;
}
