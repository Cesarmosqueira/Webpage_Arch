import socket
import threading


REQ_SIZE = 64
PORT = 5050
SERVER = socket.gethostbyname(socket.gethostname())
ADDR = (SERVER, PORT)
DC = "!DISCONNECT"
server = socket.socket(socket.AF_INET,\
     socket.SOCK_STREAM)
server.bind(ADDR)

def handle_client(conn, addr):
    print(f"[New connection] {addr} connected.")
    connected = True
    while connected:
        msg_length = conn.recv(REQ_SIZE).decode("utf-8")
        if msg_length:
            msg = conn.recv(int(msg_length)).decode("utf-8")
            if msg == DC:
                connected = False
            print(f"[{addr}] said {msg}")
            conn.send("Message Recieved".encode("utf-8"))

    conn.close()

def start():
    server.listen()
    print("[LISTENING] on ", SERVER)
    while True:
        conn, addr = server.accept()
        thread = threading.Thread(target=handle_client, \
            args=(conn,addr))
        thread.start()
        print(f"Connections: {threading.activeCount() -1}")

print(f"Starting server at port {PORT}, in {SERVER}")
start()
