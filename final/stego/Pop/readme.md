# Pop

## Условие

> О, ты слышал это? Я тоже. Из каждой колонки каждой школьницы...
> Прикинь, вот бы восьмибитку его послушать.

## Решение

> https://medium.com/@sumit.arora/audio-steganography-the-art-of-hiding-secrets-within-earshot-part-2-of-2-c76b1be719b3
> Коротко: каждый восьмой бит - это бит флага.
>
> flag: VOLSHEBNYA_SILA_WINX_ENCHANTIX

```python
code:

# Use wave package (native to Python) for reading the received audio file
import wave
song = wave.open("song_embedded.wav", mode='rb')
# Convert audio to byte array
frame_bytes = bytearray(list(song.readframes(song.getnframes())))

# Extract the LSB of each byte
extracted = [frame_bytes[i] & 1 for i in range(len(frame_bytes))]
# Convert byte array back to string
string = "".join(chr(int("".join(map(str,extracted[i:i+8])),2)) for i in range(0,len(extracted),8))
# Cut off at the filler characters
decoded = string.split("###")[0]

# Print the extracted text
print("Sucessfully decoded: "+decoded)
song.close()
```
