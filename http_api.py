from flask import Flask, request, jsonify
import pwd
import grp

app = Flask(__name__)

USERNAME = "test"
PASSWORD = "abcABC123"


# Basic authentication
def authenticate():
    auth = request.authorization
    if not auth or auth.username != USERNAME or auth.password != PASSWORD:
        return False
    return True

# Route to get list of users
@app.route('/api/users', methods=['GET', 'POST'])
def users():
    if not authenticate():
        return jsonify({'error': 'Unauthorized access'}), 401
    
    # Retrieve user information
    users_info = {}
    for user in pwd.getpwall():
        users_info[str(user.pw_uid)] = user.pw_name
    
    return jsonify(users_info)

# Route to get list of groups
@app.route('/api/groups', methods=['GET', 'POST'])
def groups():
    if not authenticate():
        return jsonify({'error': 'Unauthorized access'}), 401
    
    # Retrieve group information
    groups_info = {}
    for group in grp.getgrall():
        groups_info[str(group.gr_gid)] = group.gr_name
    
    return jsonify(groups_info)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=3000)
