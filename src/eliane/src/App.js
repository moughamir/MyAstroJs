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
      intro: 'Bonjour,<br/>Je suis Éliane voyante intuitive, mais le mot médium doit davantage vous parler. Cartomancienne, j’ai régulièrement recours au tarot de Marseille pour m’apporter un supportphysique et approfondir mes visions et mes ressentis.<br/> Voilà maintenant plus de trente années que me sont apparus mes dons de médiumnité pour la première fois.<br/> Une aventure qui m’a fait redécouvrir l’Humain, une notion que je place au centre de toutes mes consultations.<br/> Parce que sans vous mes visions n’ont plus aucune signification, vous êtes la clé de toute ma passion.',
      domaine: [{
          name: 'L\'amour',
          icon: 'ico-love'
        },{
          name: 'Le travail',
          icon: 'ico-work'
        },
        {
          name: 'L\'argent',
          icon: 'ico-money'
        }
]
    };
  }



  render() {

    const Domaines = this.state.domaine;
    console.log(Domaines)

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
        <section className="col-2 col-right" style={style.rightSide}>
          <article className='bloc-form'>
            <p dangerouslySetInnerHTML={{__html: this.state.intro}}></p>
            <p>Pour commencer</p>
            <h3>Choissiez votre domaine :</h3>
            <div>
              <ul>
              {
                Domaines.map((item, index) => {
                  return <li key={index}><i className={"ico "+item.icon}></i> {item.name}</li>;
                })
              }
              </ul>
            </div>
          </article>
        </section>
      </div>
    );
  }
}

export default App;
