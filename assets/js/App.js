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
