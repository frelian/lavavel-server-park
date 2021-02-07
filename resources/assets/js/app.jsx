/**
 * In this file we will be using Reactjs for build our application example
 * so, below we have our clasic welcome code - Hello World -
 */

require('./bootstrap');

import React, {Component} from 'react';
import ReactDOM from 'react-dom';

/**
 *	Here goes all magic
 */
class App extends Component {
    render() {
        return (
            <h1>Hello World!... </h1>
        );
    }
}

ReactDOM.render(
    <App />,
    document.getElementById('app')
);
