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

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
import React, { Component } from 'react';

class Test extends Component {
    constructor(props) {
        super(props);
        this.state = {
            test : '',
        }
    }
    componentDidMount() {
        fetch(`http://localhost:8000/test`)
            .then(results => results.json())
            .then((data) => {
                this.setState({ test : data });
            });
    }

    render() {
        const { test } = this.state ;
        console.log('youyou');
        return ({test}
        );
    }
}

export default Test;