/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

console.log('Hello Wilder! Edit me in assets/js/app.js');
import React, { Component } from 'react';
import './App.scss';
import { Route, Switch } from 'react-router-dom';
import Brands from './containers/Brands';
import NavBar from './NavBar';
import Footer from './Footer';
import Home from './components/Home';
class App extends Component {
    render() {
        return (
            <div className="App">
            <NavBar />
            <Brands />
            <Switch>
            <Route exact path="/" component={Home} />
        </Switch>
        <Footer />
        </div>
    );
    }
}

export default App;
