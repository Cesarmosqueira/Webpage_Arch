import socket

REQ_SIZE = 64
PORT = 80
SERVER = "132.251.1.152" 
ADDR = (SERVER, PORT)
DC = "!DISCONNECT"

client = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(ADDR)
print(f"Connected to {ADDR}")
def send(msg):
    message = msg.encode("utf-8")
    msg_length = len(message)
    send_length = str(msg_length).encode("utf-8")
    send_length += b' ' * (REQ_SIZE- len(send_length))
    client.send(send_length)
    client.send(message)
    print(client.recv(REQ_SIZE).decode("utf-8"))

send("Hello world!")
send("Hello Server!")
send("Imma go")
send(DC)
