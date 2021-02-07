import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class ListUsers extends Component {
    constructor(props) {
        super(props);

        this.state = {
            users: []
        }
    }

    componentDidMount() {
        fetch('/api/users', {
            method: 'post',
            headers: { 'Content-Type': 'application/json' },

            })
            .then(response => {
                console.log(response);
                return response.json();
            })
            .then(users => {
                this.setState({ users });
            });
    }

    renderUsers() {
        console.log(this.state.users);
        return this.state.users.map(user => {
            return (
                <tr>
                    <td>{ user.id }</td>
                    <td>{ user.name }</td>
                    <td>{ user.email }</td>
                </tr>
            );
        })
    }

    render() {
        return (
            <div>
                <h2>Listado de usuarios (React)</h2>

                <table className="table">
                    <thead>
                    <tr key={ user.id }>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>

                    <tbody>
                        { this.renderUsers() }
                    </tbody>
                </table>
            </div>
        );
    }
}

export default ListUsers;

if (document.getElementById('list-users')) {
    ReactDOM.render(<ListUsers />, document.getElementById('list-users'));
}
