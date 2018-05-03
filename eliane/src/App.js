import React from 'react';
import logo from './logo.svg';
import './App.css';

import style from './variables';


class App extends React.Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <div className="container-960">
            <img src={logo} className="App-logo" alt="logo" />
            <h1 className="App-title">Welcome to React</h1>
          </div>
        </header>
        <section className="col-2 col-left" style={style.leftSide}></section>
        <section className="col-2 col-right" style={style.rightSide}></section>
      </div>
    );
  }
}

export default App;
