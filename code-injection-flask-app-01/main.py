from flask import Flask, request

app = Flask(__name__)

@app.route('/echo')
def echo():
    string = request.values.get('str')
    eval("print('{}')".format(string))
    return str(string)

if __name__ == '__main__':
    app.run(host='0.0.0.0',port=8081)