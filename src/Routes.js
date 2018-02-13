import React, { Component } from 'react';
import { BrowserRouter as Router, Route, Switch, browserHistory } from 'react-router-dom';
import { Home, Voyance, Horoscope, Astrologie, Tarot, Numerologie } from './Pages/Pages.jsx';

//const menuItem = ['Voyance', 'Horoscope', 'Astrologie', 'Tarot', 'Numérologie'];

class Routes extends Component {
  render() {
    return (
      <Switch>
        <Route exact path='/' component={Home}/>
        <Route render = {function(){
          return <h1>Not Found</h1>;
        }}
        />
      </Switch>
    );
  }
}

export default Routes;
