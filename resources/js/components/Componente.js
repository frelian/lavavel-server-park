import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Componente extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">
                                <p>
                                    Éste es el servidor Web, para ingresar al cliente ve a:
                                </p>
                                <a href="//gradiweb-clientui.herokuapp.com/">Cliente VueJs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('componente')) {
    ReactDOM.render(<Componente />, document.getElementById('componente'));
}
