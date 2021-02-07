import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class ListVehicles extends Component {

    constructor() {
        super();
        this.state = {
            error: null,
            isLoaded: false,
            items: [],
        }
    }
    componentDidMount() {

        /* fetch API in action */
        fetch('/api/vehicles/list/', {
            method: 'get',
            headers: { 'Content-Type': 'application/json' },

            })
            .then(response => {
                return response.json();
            })
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        items: result['data']
                    });

                    if (result.status) {

                        console.log("Ok peticion hecha correctamente...");
                        console.log(this.state.items);

                    } else {
                        console.log("Error en la peticion :(");
                    }
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                    console.log(error);
                }
            )
    }

    renderUsers() {
        return this.state.items.map(vehi => {
            return (
                <tr key={ vehi.id_vehicle }>
                    <td>{ vehi.id_user }</td>
                    <td>{ vehi.names }</td>
                    <td>{ vehi.identification }</td>
                </tr>
            );
        })
    }

    render() {
        return (
            <div>
                <h2>Listado de vehiculos (React)</h2>
                <table className="table">
                    <thead>
                    <tr>
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

if (document.getElementById('list-vehicles')) {
    ReactDOM.render(<ListVehicles />, document.getElementById('list-vehicles'));
}
