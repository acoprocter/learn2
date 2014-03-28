from flask import Flask
app = Flask(__name__)


@app.route('/features')
def features():
    return '<h1>Features</h1>'


@app.route('/pricing')
def Pricing():
    return '<h1>Pricing</h1>'

@app.route('/login', methods=['POST', 'GET'])
def login():
    error = None
    if request.method == 'POST':
        if valid_login(request.form['username'],
                       request.form['password']):
            return log_the_user_in(request.form['username'])
        else:
            error = 'Invalid username/password'
    # the code below is executed if the request method
    # was GET or the credentials were invalid
    return render_template('login.html', error=error)


@app.route('/')
def home():
    return 'Home'

if __name__== '__main__':
    app.run(debug=True)
    
    
"""URL FOR STATIC FILES (e.g. CSS / JS) - will look in static folder """
url_for('static', filename='style.css')



""" HOW TO RENDER A TEMPLATE """
from flask import render_template

@app.route('/index/')
@app.route('/index/<name>')
def home(name=None):
    return render_template('index.html', name=name)