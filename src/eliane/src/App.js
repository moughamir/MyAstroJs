import React from 'react';
import './App.css';
import './assets/icons/flaticon.css';
import style from './variables';
import psychImage from './assets/psych.png';

import {LeftSection, RightSection} from './components/Sections';


class App extends React.Component {
  constructor() {
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
          ref: 'love',
          icon: 'flaticon-heart'
        }, {
          name: 'Le travail',
          ref: 'work',
          icon: 'flaticon-case'
        },
        {
          name: 'L\'argent',
          ref: 'money',
          icon: 'flaticon-bag'
        }],
      target: ''
    };
    this.setDomain = this.setDomain.bind(this);
  }

  componentDidUpdate() {
    console.log('Component Did Upadate : ' + this.state.target);
  }

  setDomain(ref){
    this.setState({target: ref.target.dataset.ref});
  }


  render() {
    const Domaines = this.state.domaine;

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
        <LeftSection info={this.state.psych} itemStyle={style.leftSide} />
        <RightSection itemStyle={style.rightSide}>
          <article className='bloc-form'>
            <p dangerouslySetInnerHTML={{__html: this.state.intro}}></p>
            <p>Pour commencer</p>
            <h3>Choissiez votre domaine :</h3>
            <div>
              <ul>
              {
                Domaines.map((item, index) => {
                  return (
                  <li key={index}>
                    <button className="btn-select" data-ref={item.ref} onClick={this.setDomain}>
                      <i className={'ico ' + item.icon} ></i>
                      <span className='item-name'>{item.name}</span>
                    </button>
                  </li>
                  );
                })
              }
              </ul>
            </div>
          </article>
        </RightSection>
      </div>);
  }
}
export default App;
