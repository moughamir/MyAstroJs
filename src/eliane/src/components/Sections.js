import React from 'react';
//import style from '../variables';


class LeftSection extends React.Component{
  render(){
    const psych = this.props.info;
    const style = this.props.itemStyle;
    return (
      <section className="col-2 col-left" style={style}>
        <aside className="bloc-psy">
          <img src={psych.image} alt={psych.name}/>
          <div className="bloc-psy--info">
            <p>{psych.name}, <br/> {psych.speciality}</p>
          </div>
        </aside>
      </section>
      )
  }
}

class RightSection extends React.Component{
render(){
  const style = this.props.itemStyle;
  return (
    <section className="col-2 col-right" style={style}>
      {this.props.children}
    </section>);
}
}

export {LeftSection, RightSection};