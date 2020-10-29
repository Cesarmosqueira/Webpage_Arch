import socket

host = 'localhost'
port = 80
server_sock = socket.socket(socket.AF_INET,\
                            socket.SOCK_STREAM)    # Create a socket object
server_sock.bind((host , port))                    # Bind to the port

print 'Starting server on', host, port
print 'The Web server URL for this would be http://%s:%d/' % (host, port)

server_sock.listen(5)             # Now wait for client connection.

print 'Entering infinite loop; hit CTRL-C to exit'
while True:
    # Establish connection with client.    
    client_sock, (client_host, client_port) = socket.socket.accept()
    print 'Got connection from', client_host, client_port
    client_sock.recv(1000) # should receive request from client. (GET ....)
    client_sock.send('HTTP/1.0 200 OK\n')
    client_sock.send('Content-Type: text/html\n')
    client_sock.send('\n') # header and body should be separated by additional newline
    # you can paste your 2 text field html here in the <body>
    client_sock.send("""
        <html>
        <body>
        <h1>Hello World</h1> this is my server!
        </body>
        </html>
    """) 
    client_sock.close()