#include <stdio.h>
#include <stdlib.h>

void vuln() {
  int var;
  int check = 0xdeadbeef;
  char buf[64];

  fgets(buf, 81, stdin);

  if (check == 0xacedcafe) {
    system("cat flag.txt");
  }
}

void main() {
  setvbuf(stdin, NULL, _IONBF, 0);
  setvbuf(stdout, NULL, _IONBF, 0);
  vuln();
}
