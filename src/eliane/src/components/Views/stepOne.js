import React from 'react';

export default class StepOne extends React.Component {
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
    else {
      return <h1>Money</h1>;
    }
  }


}
