import React, { Component } from 'react';
import { Route, Switch } from 'react-router-dom';
import { Home, Voyance, Horoscope, Astrologie, Tarot, Numerologie, NotFound } from './Pages/Pages.jsx';

//const menuItem = ['Voyance', 'Horoscope', 'Astrologie', 'Tarot', 'Numérologie'];

class Routes extends Component {
  render() {
    return (
      <Switch>
        <Route exact path='/' component={Home}/>
        <Route exact path='/Voyance' component={Voyance}/>
        <Route exact path='/Horoscope' component={Horoscope}/>
        <Route exact path='/Astrologie' component={Astrologie}/>
        <Route exact path='/Tarot' component={Tarot}/>
        <Route exact path='/Numerologie' component={Numerologie}/>
        <Route render = {function(){
          return <NotFound />;
        }}
        />
      </Switch>
    );
  }
}

export default Routes;
