import React from 'react';
import {Link} from 'react-router-dom';

class IntroSection extends React.Component{
  constructor(props){
    super(props);
    this.state = {
      intro: props.intro,
      domaine: props.domaine,
      target: props.target
    };
  }

  render(){
    console.log(this.state)
    const Domaines = this.state.domaine;

    return (
      <article className='bloc-form'>
        <p dangerouslySetInnerHTML={{__html: this.state.intro}}></p>
        <p>Pour commencer</p>
        <h3>Choissiez votre domaine :</h3>
        <div>
          <ul>
          {
            Domaines.map((item, index) => {
              return (
                <Link
                  key={index}
                  to={{
                    pathname: item.ref,
                    state: {target: item.ref} }} replace>
                  <li>
                    <button className="btn-select">
                      <i className={'ico ' + item.icon} ></i>
                      <span className='item-name'>{item.name}</span>
                    </button>
                  </li>
                </Link>
                );
            })
          }
          </ul>
        </div>
      </article>)
  }

}
class StepOne extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      target: props.target
    };
  }

  render() {
    const domaine = this.state.target;
    console.log(domaine);
    if (domaine === 'love') {
      return <h1>Love</h1>;
    }
    else if (domaine === 'work') {
      return <h1>Work</h1>;
    }
    else if (domaine === 'money') {
      return <h1>Money</h1>;
    }
    return <h1>Nothing</h1>;
  }


}

export {IntroSection, StepOne};