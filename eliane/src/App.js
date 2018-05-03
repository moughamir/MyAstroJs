import React from 'react';
import './App.css';

import style from './variables';


class App extends React.Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <div className="container-960">
            <h1 className="App-title">La voyance d'<span>Éliane</span></h1>
            <div className="bloc-spe">
            Médium Tarologue
            </div>
          </div>
        </header>
        <section className="col-2 col-left" style={style.leftSide}></section>
        <section className="col-2 col-right" style={style.rightSide}></section>
      </div>
    );
  }
}

export default App;
