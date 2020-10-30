#include <stdio.h>
#include <stdlib.h>

void encrypt(char* src, char* dst)
{
  int i = 0;
  while(src[i] != '\0')
  {
    dst[i] = (src[i] ^ 1337);
    i++;
  }

}

void func()
{
  int len;
  char encrypted_buf[128];
  char *buf = (char *)calloc(1024, sizeof(char));

  puts("[+] STRING ENCRYPTOR [+]");
  printf("Enter string to encrypt: ");
  len = read(0, buf, 1024);
  buf[len-2] = '\0';

  encrypt(buf, encrypted_buf);

  printf("Encrypted data: [%s]\n", encrypted_buf);
}

int main()
{
  setvbuf(stdin, NULL, _IONBF, 0);
  setvbuf(stdout, NULL, _IONBF, 0);

  func();

  return 0;
}
