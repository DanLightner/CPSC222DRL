

from flask import Flask, request, jsonify

app = Flask(__name__)

# Dummy username and password
USERNAME = "test"
PASSWORD = "abcABC123"

# Dummy user and group data
users_data = {"0": "root", "1": "daemon", "2": "bin", "3": "sys", "4": "sync", "5": "games"}
groups_data = {"0": "root", "1": "daemon", "2": "bin", "3": "sys", "4": "adm"}

# Basic authentication
def authenticate():
    auth = request.authorization
    if not auth or auth.username != USERNAME or auth.password != PASSWORD:
        return False
    return True

# Route to get list of users
@app.route('/api/users', methods=['POST'])
def users():
    if not authenticate():
        return jsonify({'error': 'Unauthorized access'}), 401
    return jsonify(users_data)

# Route to get list of groups
@app.route('/api/groups', methods=['POST'])
def groups():
    if not authenticate():
        return jsonify({'error': 'Unauthorized access'}), 401
    return jsonify(groups_data)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=3000)
