import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CreateVehicle extends Component {

    constructor() {
        super();
        //Initialize the state in the constructor
        this.state = {
            error: null,
            isLoaded: false,
            items: [],
        }
    }
    /*componentDidMount() is a lifecycle method
     * that gets called after the component is rendered
     */
    componentDidMount() {

        /*
            fetch("/api/vehicles/list/", {
                method: 'post',
                headers: { 'Content-Type': 'application/json' },

            })
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result);
                    console.log("Hola 1");
                },
                // Nota: es importante manejar errores aquí y no en
                // un bloque catch() para que no interceptemos errores
                // de errores reales en los componentes.
                (error) => {
                    console.log("Hola 2");
                }
            )
        */

        /* fetch API in action */
        fetch('/api/vehicles/mark/', {
            method: 'post',
            headers: { 'Content-Type': 'application/json' },

            })
            .then(response => {
                // console.log(response); // Solo para pruebas, imprimo la peticion...
                return response.json();
            })
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        items: result
                    });

                    if (result.status) {
                        console.log("Ok peticion hecha correctamente...");

                        let data = result['data'];
                        console.log("-------------");
                        // console.log(data);
                        // console.log(this.state.items.data);
                        // Imprime la peticion con datos console.log(this.state.items);

                        console.log("-------------");
                    } else {
                        console.log("Error en la peticion :(");
                    }
                    // this.setState({ names: "", email: "", phone: "", age: "" });
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                    console.log(error);
                    // this.setState({ names: "", email: "", phone: "", age: "" });
                }
            )

    }

    renderVehicles() {
        // console.log(this.state);  //this.state.items.data --  this.state.items.data

        if ( this.state.items.data != null ) {

            // console.log(this.state.items.data);
            let array1 = this.state.items.data;

            return array1.map((vehicle, index) => {
                return (
                    <tr className="trow">
                        <td key={index} scope="row"> {index}</td>
                        <td> {vehicle.Mark}  </td>
                        <td> {vehicle.Total} </td>
                    </tr>
                )
            })
        }
    }

    render() {
        return (
            <div>
                <table className="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        { this.renderVehicles() }
                    </tbody>
                </table>

            </div>
        );
    }
}

if (document.getElementById('create-vehicle')) {
    ReactDOM.render(<CreateVehicle />, document.getElementById('create-vehicle'));
}
