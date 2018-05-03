import React from 'react';
import './App.css';

import style from './variables';
import psychImage from './assets/psych.png';


class App extends React.Component {
  constructor(){
    super();
    this.state = {
      psych: {
        name: 'Éliane Retois',
        speciality: 'Tarologue',
        image: psychImage
      },
    };
  }
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
        <section className="col-2 col-left" style={style.leftSide}>
          <aside className="bloc-psy">
            <img src={this.state.psych.image} alt={this.state.psych.name}/>
            <div className="bloc-psy--info">
            <p>{this.state.psych.name}, <br/> {this.state.psych.speciality}</p>
            </div>
          </aside>
        </section>
        <section className="col-2 col-right" style={style.rightSide}></section>
      </div>
    );
  }
}

export default App;
